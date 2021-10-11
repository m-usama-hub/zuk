<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Config;
use AppHelper;
use Auth;
use App\Models\BusinessProperty;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isUserLoggedIn()){

            return redirect('/');

        }


        if(Auth::user()->isAdminLoggedIn() || Auth::user()->isSuperAdminLoggedIn()){


            $records = BusinessProperty::get();
            return view('Backend.properties.index',compact('records'));

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
        $ErrorMsg = "";
        DB::beginTransaction();
        $data = [];
        $newData = [];
        $UploadData = [];
        try
        {

            if($request->has('edit')){

                $UploadData = $request->all();

                unset($UploadData['id']);
                unset($UploadData['edit']);
                unset($UploadData['_token']);

                $BusinessProperty = BusinessProperty::where('id',$request->id)->first()->toArray();
                unset($BusinessProperty['business_detail']);

                $newData = array_diff($UploadData,$BusinessProperty);

            }else{

                $UploadData = $request->all();
            }

            if($request->has('cover_image')){

               $uploadfile = AppHelper::SaveFileAndGetPath($request->cover_image, Config::get('constants.attachment_paths.PropertyCoverImage'));

               if($uploadfile['status']){

                    $UploadData['cover_image'] = $uploadfile['path'];

                    if($request->has('edit')){

                        $newData['cover_image'] = $uploadfile['path'];
                    }
               }
               else{

                    $ErrorMsg = $uploadfile['msg'];
               }

            }

            if($ErrorMsg == ''){



                if($request->has('preview')){

                    dd('Preview to be done');

                    $item = (object) $UploadData;
                    return view('Frontend.pages.item_Detail',compact('item'));

                }

                if($request->has('draft')){

                    $UploadData['status'] = 'Draft';
                    $newData['status'] = 'Draft';
                }

                if($request->has('publish')){

                    $UploadData['status'] = 'Publish';
                    $newData['status'] = 'Publish';
                }

                if($request->has('edit')){

                    unset($newData['draft']);
                    unset($newData['preview']);
                    unset($newData['publish']);

                    BusinessProperty::where('id',$request->id)->update($newData);

                }else{
                    $UploadData['business_id'] = Auth::user()->UserBusinessDetail->id;

                    BusinessProperty::create($UploadData);
                }
            }

        }
        catch (\Throwable $e)
        {
            DB::rollback();
            $ErrorMsg = "Error Occurred while item. Exception Msg : " . $e->getMessage();
            $data["status"] = false;
            $data["message"] = $ErrorMsg;

        }
        if ($ErrorMsg == "")
        {
            DB::commit();
            if($request->has('edit')){
                return redirect()->back()->with('message','property Updated successfully');
            }else{
                return redirect()->back()->with('message','property Added successfully');
            }

        }
        else
        {
            $data["status"] = false;
            $data["message"] = $ErrorMsg;
            // if (env('APP_ENV') == 'local') {
            //     $data["message"] = $ErrorMsg;
            // }else{
            //     $data["message"] = 'Something went wrong.';
            // }

            dd($data['message']);
            return redirect()->back()->with('message',$data['message']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->isUserLoggedIn()){

            $property = BusinessProperty::findOrFail($id);
            return view('Frontend.pages.propertyDetail',compact('property'));

        }


        if(Auth::user()->isAdminLoggedIn() || Auth::user()->isSuperAdminLoggedIn()){

            dd('admin');
            $records = BusinessProperty::get();
            return view('Backend.properties.index',compact('records'));

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

