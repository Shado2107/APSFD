<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\blog;
use DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $actu=DB::table('blogs')->paginate(5);
        $trouver=DB::table('blogs')

             ->count();
        
        return view('users.pages.blog', [
           
           'actu'=>$actu,
           'trouver'=>$trouver
          
        
        ]);
        // return view ('users.pages.blog');
    }

    public function indexadmin()
    {
    
             $actu=DB::table('blogs')->paginate(5);
        return view('administration.Addblog', [
           
           'actu'=>$actu,
        
        ]);
                    
       
       
    }

    public function details($id){
        $blog = \App\blog::where('id',$id)->first();
        
        return view('users.pages.detailsblog',[
            'blog'=>$blog,
           
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
            request()->validate([
            'image'=> ['required', 'image'],    
            ]);
      
        $prod = new blog();
        
        $file = $request->file('image')->store('pictures','public');
        
        $prod->titre = $request->input('titre');
        $prod->contenu = $request->input('message');
        $prod->image = $file;
        $prod->save();
        
        return redirect('/admin/blog');
                   
        
        
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
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        //
    }
}
