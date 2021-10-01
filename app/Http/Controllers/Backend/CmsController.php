<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SystemConfig;
use AppHelper;
use Config;

class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];
        $config = SystemConfig::get();
        foreach ($config as $key => $value) {

            $data[$config[$key]->config_key] = $config[$key]->config_value;

        }

        if($request->has('seo_management')){

            return view('Backend.settings.seo.index',compact('data'));

        }

        return view('Backend.settings.index',compact('data'));
    }

    public function updateLinks(Request $request)
    {
        $UpdateData = $request->all();
        $data = [];
        $config = SystemConfig::get();
        foreach ($config as $key => $value) {

            $data[$config[$key]->config_key] = $config[$key]->config_value;

        }
        unset($UpdateData['_token']);
        unset($UpdateData['_method']);

        if($request->has('header_cover_image')){

            $UploadProfilePic =  AppHelper::SaveFileAndGetPath($request->header_cover_image,Config::get('constants.attachment_paths.HeaderImage'));

            if($UploadProfilePic['status']){

                $UpdateData['header_cover_image'] = $UploadProfilePic['path'];

            }
            else{

                dd($UploadProfilePic['msg']);

            }

        }

        if($request->has('header_video')){

            $UploadProfilePic =  AppHelper::SaveFileAndGetPath($request->header_video,Config::get('constants.attachment_paths.HeaderVideo'));

            if($UploadProfilePic['status']){

                $UpdateData['header_video'] = $UploadProfilePic['path'];

            }
            else{

                dd($UploadProfilePic['msg']);

            }

        }

        $NewUpdateDate = array_diff($UpdateData,$data);

        foreach ($NewUpdateDate as $key => $value) {
            if($value != null){

                SystemConfig::UpdateOrCreate(
                    ['config_key' => $key],
                    [
                        'config_key' => $key,
                        'config_value' => $value
                    ]
                );
            }

        }

        return redirect()->back()->with('message','Successfully Updated');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
