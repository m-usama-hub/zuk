<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\BusinessProperty;
use App\Models\UserBusinessDetail;
use App\Models\BusinessItem;
use App\Models\BusinessHousemate;
use App\Models\BusinessMessage;

use Artesaos\SEOTools\Facades\SEOTools;
use AppHelper;
use Route;

class AnonymousController extends Controller
{
    public function index(){

        SEOTools::setTitle(AppHelper::SystemConfig('meta_title_home'));
        SEOTools::setDescription(AppHelper::SystemConfig('meta_description_home'));
        SEOTools::opengraph()->setUrl(route('home'));
        SEOTools::setCanonical(AppHelper::SystemConfig('canonical_url'));
        SEOTools::opengraph()->addProperty('type', 'website');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset('Frontend/img/logo.png'));

        $data = [];

        $propertiesForSale = BusinessProperty::publish()->sale()->get();
        $propertiesForRent = BusinessProperty::publish()->rent()->get();

        $data['properties'] = [
            'sale' => $propertiesForSale,
            'rent' => $propertiesForRent,
        ];


        $newPro = UserBusinessDetail::isprofessional()->new()->get();
        $topPro = UserBusinessDetail::isprofessional()->top()->get();

        $data['professionals'] = [
            'new' => $newPro,
            'top' => $topPro,
        ];

        $allItems = BusinessItem::publish()->all()->get();
        $newItems = BusinessItem::publish()->new()->get();

        $data['items'] = [
            'all' => $allItems,
            'new' => $newItems,
        ];

        return view('Frontend.pages.home',$data);

    }

    public function ajaxLogin(Request $request)
    {
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

        $newPro = UserBusinessDetail::isprofessional()->new()->get();
        $topPro = UserBusinessDetail::isprofessional()->top()->get();

        $data['professionals'] = [
            'new' => $newPro,
            'top' => $topPro,
        ];

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

        $allItems = BusinessItem::publish()->all()->get();
        $newItems = BusinessItem::publish()->new()->get();

        $data['items'] = [
            'all' => $allItems,
            'new' => $newItems,
        ];

        return view('Frontend.pages.ItemIndex',$data);

    }
    public function indexProperty(){

        SEOTools::setTitle(AppHelper::SystemConfig('meta_Property_title_home'));
        SEOTools::setDescription(AppHelper::SystemConfig('meta_Property_description_home'));
        SEOTools::opengraph()->setUrl(route('indexProperty'));
        SEOTools::setCanonical(AppHelper::SystemConfig('canonical_Property_url'));
        SEOTools::opengraph()->addProperty('type', 'Property');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset('Frontend/img/logo.png'));

        $data = [];

        $propertiesForSale = BusinessProperty::publish()->sale()->nearMe()->get();
        $allProperties = BusinessProperty::publish()->all()->nearMe()->get();
        $propertiesForRent = BusinessProperty::publish()->rent()->nearMe()->get();

        $data['properties'] = [
            'all' => $allProperties,
            'sale' => $propertiesForSale,
            'rent' => $propertiesForRent,
        ];

        return view('Frontend.pages.propertyIndex',$data);

    }
    public function indexHousemate(){

        SEOTools::setTitle(AppHelper::SystemConfig('meta_Housemate_title_home'));
        SEOTools::setDescription(AppHelper::SystemConfig('meta_Housemate_description_home'));
        SEOTools::opengraph()->setUrl(route('indexHousemate'));
        SEOTools::setCanonical(AppHelper::SystemConfig('canonical_Housemate_url'));
        SEOTools::opengraph()->addProperty('type', 'Housemate');
        // SEOTools::twitter()->setSite(AppHelper::SystemConfig('twitter_id'));
        SEOTools::jsonLd()->addImage(asset('Frontend/img/logo.png'));

        $data = [];

        $BusinessHousemate = BusinessHousemate::publish()->get();

        $data['housemates'] = [
            'all' => $BusinessHousemate,
        ];

        // dd($data);

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

        $BusinessMessage = BusinessMessage::publish()->get();

        $data['messages'] = [
            'all' => $BusinessMessage,
        ];

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
}
