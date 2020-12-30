<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function insertPost(Request $req){
        $req->validate([
            'name' =>'required',
            'contact'=>'required',
            'math'=>'required',
            'sci'=>'required',
            'ssc'=>'required',
            'eng'=>'required',
            'hindi'=>'required'
        ]);
        \App\Models\Post::create([
            'name'=>$req->name,
            'contact'=>$req->contact,
            'math'=>$req->math, 
            'sci'=>$req->sci,
            'ssc'=>$req->ssc,
            'eng'=>$req->eng,
            'hindi'=>$req->hindi
        ]);
        return redirect()->back();

    }

    
}


