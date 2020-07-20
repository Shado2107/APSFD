<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\actualite;

class ActualiteController extends Controller
{

    public function getactu()
    {
     
 $actu=DB::table('actualites')->paginate(15);
            return view('administration.Addactu', [
               
               'actu'=>$actu,
            
            ]);   
           
        
       
    }
    
    public function deleteactu (Request $r){
    
        $user = actualite::find($r->input('id'));
        if($user->delete()){
            echo 'data deleted';
        }
 
    }

    public function addactu(Request $request){
      
      
        
        
        request()->validate([
            'image'=> ['required', 'image'],    
         ]);
      
        $prod = new actualite() ;
        
        $file = $request->file('image')->store('pictures','public');
        
        $prod->titre = $request->input('titre');
        $prod->contenu = $request->input('message');
        $prod->image = $file;
        $prod->save();
        
        return redirect('/admin/actu');
  
}

public function getEditactu(Request $r){

if($r->ajax()){
    return response(actualite::find($r->id));
}

}

public function updatemembre(Request $r){
if($r->ajax()){
$ser = actualite::find($r->id);
$ser['titre'] = $r['titre'];
// $ser['description'] = $r['description'];
$ser->save();

// $act = new actions;
// $act->nom =  Auth::User()->nom;
// $act->prenom =  Auth::User()->prenom;
// $act->email= Auth::User()->email;
// $act->action= 'modification dune categorie ';
// $act->moment= date("d-m-Y");
// $act->save();

return response(['msg'=>'mise à jour effectuée']);
}
}
}
