<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        //
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
        $setting = $this->getDataShop();
        return view('admin.profile.index', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $reques
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $user=User::find($id);
       
        if($request->get('newpassword')== null){
            $userPhone = User::where('phone', $request->get('phone'))->get();
            if ($userPhone->count() > 0 && $id != $userPhone[0]->id) {
                return redirect()->route('profile.edit', [$user->id]);
            }
            
            $user->name = $request->get('name');
            $user->lastname = $request->get('lastname');
            if ($request->get('birthday') != null) {
                $user->birthday = $request->get('birthday');
            }
            if ($request->get('phone') != null) {
                $user->phone = $request->get('phone');
            }
            $user->gender = $request->get('gender');
            
            if ($request->get('address') != null) {
                $user->address = $request->get('address');
            }
            
            if ($request->file('photo') != null && $user->photo != $request->file('photo')->getClientOriginalName()) {
                if ($user->photo != "avatar.png") {
                    $this->DeleteFile($user->photo, 'users');
                }
            
                $photo = $this->uploadFile($request->file('photo'), 'users');
                $user->photo = $photo;
            }
            

        }else{
            
           if(Hash::check($request->get('password'), $user->password)) {
               
               if($request->get('newpassword') == $request->get('confirmpassword')){
                   $user->password = Hash::make($request->get('newpassword'));
               }else{
                  return redirect()->route('profile.edit', [$user->id]); 
               }
           }else{
               return redirect()->route('profile.edit', [$user->id]);
           }
        }
        
        $user->update();
        return redirect()->route('profile.edit',[$user->id]);

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