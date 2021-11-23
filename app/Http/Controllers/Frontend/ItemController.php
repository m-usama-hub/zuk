<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\BusinessItem;
use App\Models\BusinessItemPackage;
use App\Models\BusinessCategory;
use App\Models\BusinessImage;
use AppHelper;
use Auth;
use Config;

class ItemController extends Controller
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

            $records = BusinessItem::get();
            return view('Backend.items.index',compact('records'));

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
        $message = "";
        try
        {
            if($request->has('edit')){

                $UploadData = $request->all();

                unset($UploadData['id']);
                unset($UploadData['edit']);
                unset($UploadData['_token']);
                unset($UploadData['cover_image']);

                $BusinessItem = BusinessItem::where('id',$request->id)->first()->toArray();
                unset($BusinessItem['business_detail']);

                $newData = array_diff($UploadData,$BusinessItem);

                $newData['isProfilePhotoPrivate'] = $request->has('isProfilePhotoPrivate') ? $request->isProfilePhotoPrivate : 0;
                $newData['isPhonePrivate'] = $request->has('isPhonePrivate') ? $request->isPhonePrivate : 0;
                $newData['isEmailPrivate'] = $request->has('isEmailPrivate') ? $request->isEmailPrivate : 0;
                $newData['price_free'] = $request->has('price_free') ? $request->price_free : 0;


            }else{

                $UploadData = $request->all();
                unset($UploadData['cover_image']);
            }

            if($ErrorMsg == ''){

                if($request->has('price_free')){

                    $UploadData['price'] = 0;
                }
                else{

                    $UploadData['price_free'] = 0;
                }

                if($request->has('preview')){

                    dd('Preview to be done');

                    $category = BusinessCategory::findOrfail($UploadData['item_category_id']);

                    if($request->has('edit')){

                        $previewData = $BusinessItem;

                        if(count($newData) > 0){

                            $previousData = $previewData->toArray();

                            $previewData = array_replace($previousData,$newData);

                        }

                    }else{

                        $previewData = $UploadData;
                    }

                    $previewData['category'] = $category->category;
                    $item = (object) $previewData;
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

                    $response = AppHelper::MakeItemPayment($newData);

                    $newData = $response['payment'];
                    $message .= $response['message'];

                    BusinessItem::where('id',$request->id)->update($newData);

                    $message .= " Updated Successfully";

                    $item_id = $request->id;

                }else{

                    $UploadData['business_id'] = Auth::user()->UserBusinessDetail->id;

                    $response = AppHelper::MakeItemPayment($UploadData);

                    $UploadData = $response['payment'];
                    $message .= $response['message'];

                    $Item = BusinessItem::create($UploadData);

                    $message .= "Item Uploaded Successfully";

                    $item_id = $Item->id;
                }

                if($request->has('cover_image')){


                    $cover_image_paths = [];
    
                    foreach ($request->cover_image as $key => $image) {
                        
                        $uploadfile = AppHelper::SaveFileAndGetPath($image, Config::get('constants.attachment_paths.itemCoverImage'));
    
                        if($uploadfile['status']){
         
                             array_push($cover_image_paths,[
                                 'model' => 'Item',
                                 'sort_order' => $key+1,
                                 'model_record_id' => $item_id,
                                 'path' => $uploadfile['path']
                             ]);
         
                        }
                        else{
         
                             $ErrorMsg = $uploadfile['msg'];
                        }
    
                    }

                    BusinessImage::insert($cover_image_paths);
    
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
            return redirect()->back()->with('message', $message);
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
