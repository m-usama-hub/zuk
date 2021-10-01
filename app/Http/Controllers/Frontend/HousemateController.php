<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Config;
use AppHelper;
use App\Models\BusinessHousemate;
use Auth;

class HousemateController extends Controller
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


            $records = BusinessHousemate::get();
            return view('Backend.housemates.index',compact('records'));

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

                $businessHousemate = BusinessHousemate::where('id',$request->id)->first()->toArray();

                $newData = array_diff($UploadData,$businessHousemate);

                $newData['isProfilePhotoPrivate'] = $request->has('isProfilePhotoPrivate') ? $request->isProfilePhotoPrivate : 0;
                $newData['isPhonePrivate'] = $request->has('isPhonePrivate') ? $request->isPhonePrivate : 0;
                $newData['isEmailPrivate'] = $request->has('isEmailPrivate') ? $request->isEmailPrivate : 0;
                $newData['available_now'] = $request->has('available_now') ? $request->available_now : 0;


            }else{

                $UploadData = $request->all();
            }

            if($request->has('cover_image')){

                $uploadfile = AppHelper::SaveFileAndGetPath($request->cover_image, Config::get('constants.attachment_paths.HousemateCoverImage'));

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

                    $message = (object) $UploadData;
                    return view('Frontend.pages.housemate_Detail',compact('message'));

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

                    BusinessHousemate::where('id',$request->id)->update($newData);

                }else{

                    $UploadData['business_id'] = Auth::user()->UserBusinessDetail->id;

                    BusinessHousemate::create($UploadData);
                }

            }

        }
        catch (\Throwable $e)
        {
            DB::rollback();
            $ErrorMsg = "Error Occurred while message. Exception Msg : " . $e->getMessage();
            $data["status"] = false;
            $data["message"] = $ErrorMsg;

        }
        if ($ErrorMsg == "")
        {
            DB::commit();
            if($request->has('edit')){
                return redirect()->back()->with('message','Housemate Updated successfully');
            }else{
                return redirect()->back()->with('message','Housemate Added successfully');
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
            dd($data);
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
