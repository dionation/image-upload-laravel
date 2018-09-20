<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\News;
class NewsController extends Controller
{
    public function index(){
        $table= News::all();
        return view('index',compact('table'));
    }
    public function storage(Request $request){
        $path = $request->file('lUrl')->store('public');
        $table = new News;
        $table->titre = $request->leTitre;
        $table->url = $path;
        $table->save();
        return redirect('/');
    }
    
}
