<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\actualite;

class AdminController extends Controller
{
    public function getactu()
    {
       
         $actu=DB::table('actualites')->paginate(3);
            return view('welcome', [
               
               'actu'=>$actu,
            
            ]);
       
    }
    
    public function index()
    {
        
       

        return view('administration.AdminHome');
        
    
        
    }
 
    
    public function connect()
    {
        return view('administration.login');
    }
    
    public function Login()
    {
    
        request()->validate([
            'mail'=>['required', 'email'],
            'password'=>['required']
       ]);

        $result = Auth()->attempt([
           'email' => request('mail'),
           'password' => request('password')
       ]);
       
       if($result){
        return redirect('/admin/home');
       } else {
        return back()->withInput()->withErrors([    
            'mail'=> 'Verifiez vos parametres de connexion',
            'password'=>'mot de passe incorrect'
        ]);
       }
    
    }
    
    public function Deconnexion()
    {
        # code...
        Auth::logout();
        return redirect()->intended('/login');

    }
}
