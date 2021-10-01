<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = BusinessCategory::where('category_of',$request->category_of)->get();

        if($request->category_of == 'pro'){

            return view('Backend.categories.professional_categories.index',compact('category'));
        }
        if($request->category_of == 'item'){

            return view('Backend.categories.item_categories.index',compact('category'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BusinessCategory::create($request->all());

        return redirect()->back()->with('message','Added Successfully');
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
    public function edit($id, Request $request)
    {
        $category = BusinessCategory::where('category_of',$request->category_of)->get();
        $getcat = BusinessCategory::findOrFail($id);

        if($getcat->category_of == 'pro'){

            return view('Backend.categories.professional_categories.index',compact('category','getcat'));
        }
        if($getcat->category_of == 'item'){

            return view('Backend.categories.item_categories.index',compact('category','getcat'));
        }
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
        $data = $request->all();
        unset($data['_method']);
        unset($data['_token']);
        $category = BusinessCategory::where('id',$id)->update($data);

        return redirect()->back()->with('message','Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = BusinessCategory::where('id',$id)->delete();

        return redirect()->back()->with('message','Deleted Successfully');
    }
}
