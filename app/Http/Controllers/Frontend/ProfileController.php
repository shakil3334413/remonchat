<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\UserProfile;
use App\User;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid=Auth::user()->id;
        $profile=UserProfile::all()->where('user_id','=',$userid);
        return view('create_profile',$profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_main_id = $request->input('user_main_id');
        if (isset($user_main_id) && !empty($user_main_id)) {
            $userProfile = UserProfile::findOrFail($user_main_id);
//        echo '<pre>';print_r($services);
//        exit();
        } else {
           $userProfile = new UserProfile();
        }

        $userProfile->save();

        return redirect()->back()->with('message','Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_main_id = $request->input('user_main_id');
        if (isset($user_main_id) && !empty($user_main_id)) {
            $profile = UserProfile::findOrFail($user_main_id);

        } else {
           $profile = new UserProfile();
        }
        $profile->phone = $request->phone;
        $profile->division = $request->devesion_id;
        $profile->city = $request->city_id;
        $profile->save();
        $this->setSuccess('Successfully Updated');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
