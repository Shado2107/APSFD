<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\membres;

class MembresController extends Controller
{
    public function getmembres()
    {
        
             // // $produits = DB::table('produits')->paginate(9);
         $membres = membres::inRandomOrder()->paginate(12);
        
         return view('administration.memberlist')->with('prod',$membres);
                       
       
       
    }
    
    public function index(){
        $membres=DB::table('membres')->paginate(15);
            return view('users.pages.membres', [
               
               'membres'=>$membres,
            
            ]);
    }
    
    public function details($id){
        $membres = \App\membres::where('id',$id)->first();
        
        return view('users.pages.detailsmembre',[
            'membre'=>$membres,
           
        ]);
    }
    
    
    
    public function addmembres(Request $request){
       
             $prod = new membres ;
                        
                        $prod->nom = $request->input('nom');
                        $prod->creation = $request->input('creation');
                        $prod->adhesion = $request->input('adhesion');
                        $prod->gerant = $request->input('gerant');
                        $prod->tel = $request->input('tel');
                        $prod->tel2 = $request->input('tel2');
                        $prod->tel3 = $request->input('tel3');
                         $prod->fax = $request->input('fax');
                         $prod->bp = $request->input('bp');
                         $prod->mail = $request->input('mail');
                        $prod->siteweb = $request->input('siteweb');
                        $prod->clientele = $request->input('forme');
                        $prod->forme = $request->input('forme');
                        $prod->agrement = $request->input('agrement');
                        $prod->nbreagence = $request->input('nbreagence');
                        $prod->totalclient = $request->input('clients');
                        $prod->credit = $request->input('credit');
                        $prod->epargne = $request->input('epargne');
                        $prod->par = $request->input('par');
                        $prod->situationgeo = $request->input('situation');
                        $prod->gprs = $request->input('plan');
                        $prod->etat = '0';
                        $prod->save();
           
                        return redirect('/admin/membres');
                      
                   
                       
           
        
    }
    
    public function getEditmembre(Request $r){
        
        if($r->ajax()){
            return response(membres::find($r->id));
        }
        
    }
    
    public function updatemembre(Request $r){
        if($r->ajax()){
            $ser = membres::find($r->id);
            $ser['nom'] = $r['nom'];
            $ser['creation'] = $r['creation'];
            $ser['adhesion'] = $r['adhesion'];
            $ser['gerant'] = $r['gerant'];
            $ser['mail'] = $r['mail'];
            $ser['siteweb'] = $r['siteweb'];
            $ser['tel'] = $r['tel'];
            $ser['description'] = $r['description'];
            $ser['nom'] = $r['nom'];
            $ser['description'] = $r['description'];
            $ser['nom'] = $r['nom'];
            $ser['description'] = $r['description'];
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
