<?php

namespace App\Http\Controllers;

use App\Models\Category2;
use Illuminate\Http\Request;
use DB;
use \Crypt;
use Auth; 
class Category2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user(); 
        $varCategory = DB::table("category2s")->get(); 
        return view("category2/index", compact("user", "varCategory"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user(); 
        return view ('category2/create', compact('user'));
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
         'Category_name' => 'required', 
        ]);
        //return $request; 
        $input = $request->all();
        $VarCategory = Category2::create($input);
        // return $VarCategory; 
        // return $VarCategory; 
        $user = Auth::user(); 
        return view("category2/edit", compact("VarCategory", "user"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category2  $category2
     * @return \Illuminate\Http\Response
     */
    public function show(Category2 $category2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category2  $category2
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id=Crypt::decrypt($id);
        $VarCategory = Category2::find($id);
        $user = Auth::user(); 
        return view('category2/edit', compact('VarCategory', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category2  $category2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id=Crypt::decrypt($id);
        
        $varCategory = Category2::find($id);
        
        $varCategory->Category_name = $request->get('Category_name');
        $varCategory->save();
        
        return redirect('categories')->with('success', "category updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category2  $category2
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id=Crypt::decrypt($id);
        $varCategory = Category2::find($id);
        if($varCategory->Category_status == 0)
        {
            $varCategory->Category_status = 1;
            $varCategory->save();
            return redirect('categories')->with('success', "category is Active now");
        }
        else if($varCategory->Category_status == 1)
        {
            $varCategory->Category_status = 0;
            $varCategory->save();
           
            return redirect('categories')->with('success', "category is inactive now");
        }
    }

}
