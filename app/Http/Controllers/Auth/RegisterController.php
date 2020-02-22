<?php

namespace App\Http\Controllers\Auth;
use Image;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Model\District;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;
class RegisterController extends Controller
{

    public function showRegistrationForm()
    {
         $district=District::all();
         return view('auth.register',compact('district'));
    }

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'f_name' => ['required', 'string', 'max:255'],
            'l_name'=>['required', 'string', 'max:255'],
            'district'=>['required'],
            'phone'=>['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    // public function register(Request $request){
    //     $validator = Validator::make(request()->all(),[
    //         'f_name' => ['required', 'string', 'max:255'],
    //         'l_name'=>['required', 'string', 'max:255'],
    //         'district'=>['required'],
    //         'phone'=>['required', 'string', 'max:15'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],

    //     ]);
    //     if($validator->fails()){
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }
    //     if ($request->has('image')) {
    //                 // Get image file
    //                 $image = $request->file('image');
    //                 // Make a image name based on user name and current timestamp
    //                 $name = $request->input('f_name').'_'.time();
    //                 // Define folder path
    //                 $folder = '/uploads/profiles/';
    //                 // Make a file path where image will be stored [ folder path + file name + file extension]
    //                 $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    //                 // Upload image
    //                 $this->uploadOne($image, $folder, 'public', $name);
    //      }
    //          $user=new User();
    //          $user->profile_number=rand(8,10);
    //          $user->f_name=$request->f_name;
    //          $user->l_name=$request->l_name;
    //          $user->district=$request->district;
    //          $user->gender=$request->gender;
    //          $user->phone=$request->phone;
    //          $user->email=$request->email;
    //          $user->image=implode(',',$insert);
    //          $user->password= Hash::make($request->password);
    //          $user->save();
    //          return redirect()->route('home');
    // }
    protected function create(array $data)
    {
        return User::create([
            'profile_number'=>rand(8,10),
            'f_name' => $data['f_name'],
            'l_name' => $data['l_name'],
            'district' => $data['district'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'image'=>null,
            'password' => Hash::make($data['password']),
        ]);
    }
}
