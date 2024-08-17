<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $valodate = $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required',
            ]);

            if(Auth::guard('web')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>'Active','designation'=>'Admin'])){
                return redirect()->route('admin.dashboard');
                }
            // else{
            //     return redirect()->back()->with('error','Invalid Email or Password');
            // }

            // if (Auth::guard('web')->attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 'Active', 'type' => 'Customer'])) {
            //     // dd('ok');
            //     return redirect(route('client.account'));
            // }
            else {
                return redirect()->back()->with('error','Wrong Email or Password');
            }


        }
        return view('backend.login');
    }
    public function logout(){
        Auth::guard('web')->logout();
        return redirect('login');
    }
    public function dashboard()
    {
        return view('backend.dashboard');
    }
}
