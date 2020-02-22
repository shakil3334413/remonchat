<?php

namespace App\Http\Controllers\Admin\Auth;
use Auth;
use App\Model\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect admins after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function redirectTo()
    {
        return 'admin/dashboard';
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
    public function login(Request $request)
{
    $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required'
    ]);
    if (Auth::guard('admin')->attempt([
        'email' => $request->email,
        'password' => $request->password
    ])) {
        return redirect()->intended(route('admin.dashboard'));
    }
    return back()->withInput($request->only('email', 'remember'));
}
public function logout(Request $request)
{
    Auth::guard('admin')->logout();
    $request->session()->invalidate();
    return redirect()->route('admin.login');
}
}
