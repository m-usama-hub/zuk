<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\BusinessProperty;
use App\Models\UserBusinessDetail;
use App\Models\BusinessItem;
use App\Models\BusinessHousemate;
use App\Models\BusinessMessage;
use App\Models\BusinessClaim;
use App\Models\Translation;
use App\Models\Page;
use App\Http\Controllers\Frontend\ListhubController;
use Spatie\TranslationLoader\LanguageLine;
use Artesaos\SEOTools\Facades\SEOTools;
use AppHelper;
use Route;
use Schema;
use Config;
use Session;

class AnonymousController extends Controller
{
    public $pageCms = [];


    public function index(){

        SEOTools::setTitle(AppHelper::SystemConfig('meta_title_home'));
        SEOTools::setDescription(AppHelper::SystemConfig('meta_description_home'));
        SEOTools::opengraph()->setUrl(route('home'));
        SEOTools::setCanonical(AppHelper::SystemConfig('canonical_url'));
        SEOTools::opengraph()->addProperty('type', 'website');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset('Frontend/img/logo.png'));

        $data = [];

        $news = BusinessProperty::publish()->inRandomOrder()->limit(20)->select('id','business_id','title','slug','created_at','views')->get();

        $data['news'] = $news;

        $propertiesForSale = BusinessProperty::publish()->sale()->search()->nearMeOrRadius()->get();
        $propertiesForRent = BusinessProperty::publish()->rent()->search()->nearMeOrRadius()->get();

        $data['properties'] = [
            'sale' => $propertiesForSale,
            'rent' => $propertiesForRent,
        ];


        $newPro = UserBusinessDetail::whereHas('User', function($q) {
                                            $q->where('user_type_id', Config::get('constants.UserTypeIds.Professional'));
                                        })->with('ProfessionalBusinessCategories')->new()->search()->nearMeOrRadius()->get();
        $newArry = [];
        foreach ($newPro as $key => $value) {
            if(count($value->ProfessionalBusinessCategories) > 0){
                array_push($newArry,$value);
            }
        }

        $newPro = $newArry;
        
        $topPro = UserBusinessDetail::whereHas('User', function($q) {
                                            $q->where('user_type_id', Config::get('constants.UserTypeIds.Professional'));
                                        })->with('ProfessionalBusinessCategories')->top()->search()->nearMeOrRadius()->get();

        $newArry = [];
        foreach ($topPro as $key => $value) {
            if(count($value->ProfessionalBusinessCategories) > 0){
                array_push($newArry,$value);
            }
        }
        $topPro = $newArry;                             

        $data['professionals'] = [
            'new' => $newPro,
            'top' => $topPro,
        ];

        $allItems = BusinessItem::publish()->all()->search()->nearMeOrRadius()->get();
        $newItems = BusinessItem::publish()->new()->search()->nearMeOrRadius()->get();

        $data['items'] = [
            'all' => $allItems,
            'new' => $newItems,
        ];

                $page = Page::where('slug',Route::getFacadeRoot()->current()->uri())->with('Data')->first();
        $pageCms= $page->Data->pluck('value','key')->toArray();
        $data['pageCms'] = $pageCms;

        return view('Frontend.pages.home',$data);

    }

    public function ajaxLogin(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->passes()) {

                if (auth()->attempt(array('email' => $request->input('email'),'password' => $request->input('password')),true))
                {
                    return response()->json('success');
                }
                return response()->json([
                    'error' => [
                        'email' => 'Sorry User not found.'
                    ]
                ]);

        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function indexProfessional(){

        SEOTools::setTitle(AppHelper::SystemConfig('meta_professional_title_home'));
        SEOTools::setDescription(AppHelper::SystemConfig('meta_professional_description_home'));
        SEOTools::opengraph()->setUrl(route('indexProfessional'));
        SEOTools::setCanonical(AppHelper::SystemConfig('canonical_professional_url'));
        SEOTools::opengraph()->addProperty('type', 'Professional');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset('Frontend/img/logo.png'));

        $data = [];

        $newPro = UserBusinessDetail::whereHas('User', function($q) {
            $q->where('user_type_id', Config::get('constants.UserTypeIds.Professional'));
        })->with('ProfessionalBusinessCategories')->new()->search()->nearMeOrRadius()->get();

        $newArry = [];
        foreach ($newPro as $key => $value) {
        if(count($value->ProfessionalBusinessCategories) > 0){
        array_push($newArry,$value);
        }
        }

        $newPro = $newArry;

        $topPro = UserBusinessDetail::whereHas('User', function($q) {
                    $q->where('user_type_id', Config::get('constants.UserTypeIds.Professional'));
                })->with('ProfessionalBusinessCategories')->top()->search()->nearMeOrRadius()->get();

        $newArry = [];
        foreach ($topPro as $key => $value) {
        if(count($value->ProfessionalBusinessCategories) > 0){
        array_push($newArry,$value);
        }
        }
        $topPro = $newArry;                             

        $data['professionals'] = [
        'new' => $newPro,
        'top' => $topPro,
        ];
        $data['professionals'] = [
            'new' => $newPro,
            'top' => $topPro,
        ];

                $page = Page::where('slug',Route::getFacadeRoot()->current()->uri())->with('Data')->first();
        $pageCms= $page->Data->pluck('value','key')->toArray();
        $data['pageCms'] = $pageCms;

        return view('Frontend.pages.professionalIndex',$data);

    }

    public function indexItem(){

        SEOTools::setTitle(AppHelper::SystemConfig('meta_item_title_home'));
        SEOTools::setDescription(AppHelper::SystemConfig('meta_item_description_home'));
        SEOTools::opengraph()->setUrl(route('indexItem'));
        SEOTools::setCanonical(AppHelper::SystemConfig('canonical_item_url'));
        SEOTools::opengraph()->addProperty('type', 'Item');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset('Frontend/img/logo.png'));

        $data = [];

        $allItems = BusinessItem::publish()->all()->search()->nearMeOrRadius()->get();
        $newItems = BusinessItem::publish()->new()->search()->nearMeOrRadius()->get();

        $data['items'] = [
            'all' => $allItems,
            'new' => $newItems,
        ];

                $page = Page::where('slug',Route::getFacadeRoot()->current()->uri())->with('Data')->first();
        $pageCms= $page->Data->pluck('value','key')->toArray();
        $data['pageCms'] = $pageCms;

        return view('Frontend.pages.ItemIndex',$data);

    }

    public function indexProperty(Request $request){

        SEOTools::setTitle(AppHelper::SystemConfig('meta_Property_title_home'));
        SEOTools::setDescription(AppHelper::SystemConfig('meta_Property_description_home'));
        SEOTools::opengraph()->setUrl(route('indexProperty'));
        SEOTools::setCanonical(AppHelper::SystemConfig('canonical_Property_url'));
        SEOTools::opengraph()->addProperty('type', 'Property');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset('Frontend/img/logo.png'));

        $data = [];

        $propertiesForSale = BusinessProperty::publish()->sale()->search()->nearMeOrRadius()->get();
        $allProperties = BusinessProperty::publish()->all()->search()->nearMeOrRadius()->get();
        $propertiesForRent = BusinessProperty::publish()->rent()->search()->nearMeOrRadius()->get();

        $data['properties'] = [
            'all' => $allProperties,
            'sale' => $propertiesForSale,
            'rent' => $propertiesForRent,
        ];

        $data['listHubProperties'] = (new ListhubController)->getListHubProperties($request);

                $page = Page::where('slug',Route::getFacadeRoot()->current()->uri())->with('Data')->first();
        $pageCms= $page->Data->pluck('value','key')->toArray();
        $data['pageCms'] = $pageCms;

        return view('Frontend.pages.propertyIndex',$data);

    }

    public function indexHousemate(Request $request){

        SEOTools::setTitle(AppHelper::SystemConfig('meta_Housemate_title_home'));
        SEOTools::setDescription(AppHelper::SystemConfig('meta_Housemate_description_home'));
        SEOTools::opengraph()->setUrl(route('indexHousemate'));
        SEOTools::setCanonical(AppHelper::SystemConfig('canonical_Housemate_url'));
        SEOTools::opengraph()->addProperty('type', 'Housemate');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset('Frontend/img/logo.png'));

        $data = [];

        $BusinessHousemate = BusinessHousemate::publish()->search()->nearMeOrRadius()->get();

        $data['housemates'] = [
            'all' => $BusinessHousemate,
        ];

                $page = Page::where('slug',Route::getFacadeRoot()->current()->uri())->with('Data')->first();
        $pageCms= $page->Data->pluck('value','key')->toArray();
        $data['pageCms'] = $pageCms;

        return view('Frontend.pages.housemateIndex',$data);

    }

    public function indexMessage(){

        SEOTools::setTitle(AppHelper::SystemConfig('meta_Message_title_home'));
        SEOTools::setDescription(AppHelper::SystemConfig('meta_Message_description_home'));
        SEOTools::opengraph()->setUrl(route('indexMessage'));
        SEOTools::setCanonical(AppHelper::SystemConfig('canonical_Message_url'));
        SEOTools::opengraph()->addProperty('type', 'Message');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset('Frontend/img/logo.png'));

        $data = [];

        $BusinessMessage = BusinessMessage::publish()->search()->nearMeOrRadius()->get();

        $data['messages'] = [
            'all' => $BusinessMessage,
        ];

                $page = Page::where('slug',Route::getFacadeRoot()->current()->uri())->with('Data')->first();
        $pageCms= $page->Data->pluck('value','key')->toArray();
        $data['pageCms'] = $pageCms;

        return view('Frontend.pages.messageIndex',$data);

    }

    public function PropertyDetail(Request $request,$slug){

        $property = BusinessProperty::where('slug',$slug)->first();

        SEOTools::setTitle($property->title);
        SEOTools::setDescription($property->description);
        SEOTools::opengraph()->setUrl($request->url());
        // SEOTools::setCanonical(AppHelper::SystemConfig('canonical_item_url'));
        SEOTools::opengraph()->addProperty('type', 'Property');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset($property->cover_image));

        $property->increment('views');

        return view('Frontend.pages.propertyDetail',compact('property'));
    }

    public function ItemDetail(Request $request,$slug){

        $item = BusinessItem::where('slug',$slug)->first();

        SEOTools::setTitle($item->title);
        SEOTools::setDescription($item->description);
        SEOTools::opengraph()->setUrl($request->url());
        // SEOTools::setCanonical(AppHelper::SystemConfig('canonical_item_url'));
        SEOTools::opengraph()->addProperty('type', 'Item');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset($item->cover_image));

        $item->increment('views');
        return view('Frontend.pages.itemDetail',compact('item'));
    }

    public function HousemateDetail(Request $request,$slug){

        $housemate = BusinessHousemate::where('slug',$slug)->first();

        SEOTools::setTitle($housemate->title);
        SEOTools::setDescription($housemate->description);
        SEOTools::opengraph()->setUrl($request->url());
        // SEOTools::setCanonical(AppHelper::SystemConfig('canonical_item_url'));
        SEOTools::opengraph()->addProperty('type', 'Housemate');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset($housemate->cover_image));

        return view('Frontend.pages.housemateDetail',compact('housemate'));
    }

    public function MessageDetail(Request $request,$slug){

        $message = BusinessMessage::where('slug',$slug)->first();

        SEOTools::setTitle($message->title);
        SEOTools::setDescription($message->description);
        SEOTools::opengraph()->setUrl($request->url());
        // SEOTools::setCanonical(AppHelper::SystemConfig('canonical_item_url'));
        SEOTools::opengraph()->addProperty('type', 'Message');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset($message->cover_image));

        return view('Frontend.pages.messageDetail',compact('message'));
    }

    public function ProfessionalDetail(Request $request,$slug){

        $pro = UserBusinessDetail::where('slug',$slug)->first();

        SEOTools::setTitle($pro->business_name);
        SEOTools::setDescription($pro->business_detail);
        SEOTools::opengraph()->setUrl($request->url());
        // SEOTools::setCanonical(AppHelper::SystemConfig('canonical_item_url'));
        SEOTools::opengraph()->addProperty('type', 'Professional');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset($pro->business_profile_pic));

        return view('Frontend.pages.professionalDetail',compact('pro'));
    }

    public function search(Request $request){

        $data = [];

        $model = 'App\Models\\'.$request->type;

        $modelQuery = $model::query();
        $modelTable = $model::getTableName();

        if($request->zipcode){

            $hasZipCode = Schema::hasColumn($modelTable, 'zipcode');
        }

        if($request->city){

            $hasZipCode = Schema::hasColumn($modelTable, 'city');
        }
        
        return view('Frontend.pages.search');

    }

    public function cliamBusiness(Request $request){

        $Upload = $request->all();

        BusinessClaim::create($Upload);

        return redirect()->back();
    }

    public function toggleLanguage(){

        $setLocal = 'en';

        if(app()->getLocale() == 'en'){

            $setLocal = 'fr';
            
        }

        Session::put('locale',$setLocal);

        return redirect()->back();
    }
}
