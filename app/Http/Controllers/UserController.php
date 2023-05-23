<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller
{
    public function getSignup(){
        return view('signup');
    }
    public function postSignup(Request $req){
      $this->validate($req, [
         'email' => 'email|required|unique:users',
         'password' => 'required'
      ]);
        $user = new User([
            'email'=> $req->input('email'),
            'password'=> bcrypt($req->input('password'))
        ]);
        $user->save();
        Auth::login($user);
        if(Session::has('oldurl')){
              $oldurl = Session::get('oldurl');
              Session::forget('oldurl');
              return redirect()->to($oldurl);
          }
        return view('home1');
    }
    
    public function getSignin()
    {
          return view('login');
    }
    
      public function postSignin(Request $req)
    {
          if(Auth::attempt(['email'=> $req->input('email'),'password'=> $req->input('password')]))
          {   if(Session::has('oldurl')){
              $oldurl = Session::get('oldurl');
              Session::forget('oldurl');
              return redirect()->to($oldurl);
          }
              return view('orders');
          }

    }
    
    public function orders()
    {   $orders= Auth::user()->orders;
        $orders->transform(function($order, $key){
           $order->cart=unserialize($order->cart);
            return $order;
            
        });
          return view('Profile',['orders' => $orders]);
    }

      public function logout()
        {
            Auth::logout();
            
        return redirect('orders'); 
        }
}
