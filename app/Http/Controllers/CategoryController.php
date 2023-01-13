<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use \Crypt;
use Auth; 

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     
    *function __construct()
    *{
    *    $this->middleware('auth');
    *    $this->middleware(function ($request, $next) {
    *        $this->user_role = json_decode(Auth::user()->user_role,true);
    *          return $next($request);
    *    });

    *       $this->middleware('permission:category-list', ['only' => ['index']]);
    *   $this->middleware('permission:category-all', ['only' => ['index','store','create','edit','update','destroy']]);
    *}
    */
    public function index()
    {    
        $user = Auth::user(); 
        $varCategory = DB::table("categories")->get(); 
        return view("category/index", compact("user", "varCategory")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 
        [
         'Category_name' => 'required'
        ]);

        $input = $request->all();
        $VarCategory = Category::create($input);
        return redirect("category")->with('success','category created sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id=Crypt::decrypt($id);
        $varCategory = Category::find($id);
        return view('category/edit', compact('varCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id=Crypt::decrypt($id);
       
        $this->validate($request, 
        [
                'Category_name' => 'required'
        ]);
        
        $varCategory = Category::find($id);
        $varCategory->Category_name = $request->get('Category_name');
        $varCategory->save();
        return redirect('category')->with('success', "category updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id=Crypt::decrypt($id);
        $varCategory = Category::find($id);
        if($varCategory->Category_status == 0)
        {
            $varCategory->Category_status = 1;
            $varCategory->save();
            return redirect('category')->with('success', "category is Active now");
        }
        else if($varCategory->Category_status == 1)
        {
            $varCategory->Category_status = 0;
            $varCategory->save();
           
            return redirect('category')->with('success', "category is inactive now");
        }
    }
}
