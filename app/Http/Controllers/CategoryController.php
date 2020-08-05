<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CategoryModel;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $categories = CategoryModel::all();  

        return view('category.view')->with(['category'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        $data = $request->all();
        if(!empty($data)){
            if(!empty($data['id'])){
                $id = $data['id'];
                $obj = CategoryModel::find($id);
            }else{ 
                $obj = new CategoryModel;
            }
            
            $obj->category_name = $data['cname'] ?? '';
            $obj->status = !empty($data['status']) ? 1 : 0;
            $obj->save();
            return redirect('/category')->with('success','Category saved successfully');
        }
        return view('category.add');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!empty($id)){
            //first() say single row return goti hai

            $categories = CategoryModel::where('category_id',$id)->first();  
    

            return view('category.add')->with(['category'=>$categories]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!empty($id)){
            $categories = CategoryModel::where('category_id',$id)->delete(); 
            return redirect('/category')->with('success','Category saved successfully');// abhi ye message yaha show karna bacha hai
        }
    }
}
