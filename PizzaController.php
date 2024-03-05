<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index
    
        // crud (create read update delete)
        // create
        // $pizza = new Pizza()
        // $pizza->type = "hawaiian"; and rest of properites
        // $pizza->save();
        // read
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where(['type'=>'hawaiian', 'name'=>'ahmed'])->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type','hawaiian')->get();
        // for where with more than one condition we use nested lists - boolean is 1 or 0 not true or false in laravel models
        // $comments = Comment::orderBy('created_at','desc')->where([["is_approved", 1],["post_id", $id]])->get();
        // update
        // $comment = Comment::where("id", $id)->update(["is_approved"=>1]);
        // delete - we use each for delete
        // $comment = Comment::where("id", $id)->get();
        // $comment->each->delete();


        
        $pizzas = Pizza::all();
        return view('pizzas.index', [
            'pizzas'=>$pizzas,
            'name'=>request('name'),
            'age'=>request('age')
        ]);
    }
    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza'=>$pizza]);
    }
    public function create(){
        return view('pizzas.create');
    }
}
