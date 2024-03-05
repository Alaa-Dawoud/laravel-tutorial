# laravel-tutorial

#### laravel from the net ninja playlist https://www.youtube.com/playlist?list=PL4cUxeGkcC9hL6aCFKyagrT1RCfVN4w2Q
##### lessons in branches

###### CRUD for laravel models
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




