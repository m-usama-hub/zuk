<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SystemConfig;
use Spatie\TranslationLoader\LanguageLine;
use App\Models\Page;
use App\Models\CmsData;
use App\Models\CmsService;
use AppHelper;
use Config;
use App\Imports\ImportUsersAndBusiness;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class CmsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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


    public function import(Request $request) 
    {
        try{
            $path = $request->file('file');
            Excel::import(new ImportUsersAndBusiness, $path);
            return back();
        }catch(\Throwable $e){

            dd($e->getMessage());
        }

            
    }

    public function header(){

        $data = [];
        $config = SystemConfig::get();
        foreach ($config as $key => $value) {

            $data[$config[$key]->config_key] = $config[$key]->config_value;

        }

        return view('Backend.cms.header',compact('data'));

    }

    public function pages(){

        $pages = Page::get();

        return view('Backend.cms.pages',compact('pages'));
        
    }

    public function menu(){

        
    }

    public function translation(){

        $lines = LanguageLine::get();

        return view('Backend.cms.translation',compact('lines'));
        
    }

    public function privacypolicy(){

        $data = [];
        $config = SystemConfig::get();
        foreach ($config as $key => $value) {

            $data[$config[$key]->config_key] = $config[$key]->config_value;

        }

        return view('Backend.cms.privacy',compact('data'));
        
    }

    public function aboutus(){

        $data = [];
        $config = SystemConfig::get();
        foreach ($config as $key => $value) {

            $data[$config[$key]->config_key] = $config[$key]->config_value;

        }

        return view('Backend.cms.aboutus',compact('data'));

    }

    public function footer(){


        $data = [];
        $config = SystemConfig::get();
        foreach ($config as $key => $value) {

            $data[$config[$key]->config_key] = $config[$key]->config_value;

        }

        return view('Backend.cms.footer',compact('data'));

        
    }


    public function webcontent(){

        $data = [];
        $config = SystemConfig::get();
        foreach ($config as $key => $value) {

            $data[$config[$key]->config_key] = $config[$key]->config_value;

        }

        return view('Backend.cms.webcontent',compact('data'));
        
    }

    public function add_translation(Request $request){


        LanguageLine::create([
            'group' => 'translation',
            'key' => $request->en,
            'text' => ['en' => $request->en, 'fr' => $request->fr],
        ]);

        $lines = LanguageLine::get();

        return redirect()->back()->with('message','Added successfully');
    }

    public function edit_show($id){


        $lines = LanguageLine::get();
        $line = LanguageLine::findOrFail($id);

        return view('Backend.cms.translation_edit',compact('lines','line'));
    }

    public function edit_translation($id,Request $request){

        LanguageLine::where('id',$id)->update([
            'group' => 'translation',
            'key' => $request->en,
            'text' => ['en' => $request->en, 'fr' => $request->fr],
        ]);
        
        return redirect()->route('add_translation')->with('message','Added successfully');
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

    public function editpageCMS(Request $request,$pageId){

        $UpdateData = $request->all();

        unset($UpdateData['_token']);

        $data = CmsData::where('page_id',$pageId)->pluck('value','key')->toArray();

        $NewUploadData = array_diff($UpdateData , $data);

        foreach ($NewUploadData as $key => $value) {
           
            CmsData::where('page_id',$pageId)->where('id' , $key)->update(
                ['value' => $value]
            );
        }


        return redirect()->back()->with('message','successfully Updated');

    }

    public function services(Request $request){

       $services = CmsService::get();

       $data = [];
       $config = SystemConfig::get();
       foreach ($config as $key => $value) {

           $data[$config[$key]->config_key] = $config[$key]->config_value;

       }

       return view('Backend.cms.service',compact('services','data'));

    }

    public function updateService(Request $request,$id){

        $ErrorMsg = "";
        DB::beginTransaction();
        try
        {
            $uploadData = $request->all();

            unset($uploadData['_token']);

            if($request->has('image')){

                $UploadProfilePic =  AppHelper::SaveFileAndGetPath($request->image,Config::get('constants.attachment_paths.service'));

                if($UploadProfilePic['status']){

                    $uploadData['image'] = $UploadProfilePic['path'];

                }
                else{

                    $ErrorMsg = $UploadProfilePic['msg'];

                }

            }


            if($ErrorMsg == ''){


                

                CmsService::where('id',$id)->update($uploadData);


            }


        } catch (\Throwable $e) {
            DB::rollback();
            $ErrorMsg = $e->getMessage();
        }

        if ($ErrorMsg == "") {
            DB::commit();
            return redirect()->back()->with('message', 'Successfully Updated.');
        } else {

            return redirect()->back()->with('message', $ErrorMsg);
        }

    }
}
