<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\UserFavorite;
use App\Models\BusinessMessageLike;
use App\Models\BusinessMessageReply;
use Auth;

class GeneralController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function deletePost(Request $request){

        $data = [];
        $data['message'] = '';
        $data['status'] = false;

        try{

            $table = $request->table;
            $id = $request->id;

            DB::delete('update '.$table.' set deleted_at = ? where id = ? ', [date(now()),$id]);

            $data['message'] = 'Deleted Successfully..!';
            $data['status'] = true;

        }catch(\Throwable $e){

            $data['message'] = $e->getMessage();

        }

        return $data;

    }

    public function getPostData(Request $request){

        $data = [];
        $data['message'] = '';
        $data['status'] = false;

        try{

            $table = $request->table;
            $id = $request->id;

            $response = DB::select('select * from '.$table.' where id = ?', [$id]);

            $data['message'] = 'fetch Successfully..!';
            $data['response'] = $response[0];
            $data['status'] = true;

        }catch(\Throwable $e){

            $data['message'] = $e->getMessage();

        }

        return $data;

    }

    public function DoUnfav(Request $request){

        $data = [];
        $data['message'] = '';
        $data['status'] = false;

        try{

            $table = $request->table;
            $id = $request->id;

            $response = DB::select('select * from user_favorites where record_id = ? and model_table = ?', [$id,$table]);

            if($response[0]){

                DB::select('delete from user_favorites where record_id = ? and model_table = ?', [$id,$table]);

                $data['message'] = 'unfav Successfully..!';
                $data['status'] = true;

            }
            else{



            }

        }catch(\Throwable $e){

            $data['message'] = $e->getMessage();

        }

        return $data;

    }

    public function Dofav(Request $request){

        $data = [];
        $data['message'] = '';
        $data['status'] = false;

        try{

            $table = $request->table;
            $model = $request->model;
            $id = $request->id;

            UserFavorite::create([
                'model' => $model,
                'model_table' => $table,
                'record_id' => $id,
                'user_id' => Auth::user()->id,
            ]);

            $data['message'] = 'fav Successfully..!';
            $data['status'] = true;


        }catch(\Throwable $e){

            $data['message'] = $e->getMessage();

        }

        return $data;

    }

    public function LikeToggle($id,Request $request){

        if($request->like){

            BusinessMessageLike::where('business_message_id',$id)->where('user_id',Auth::user()->id)->delete();

        }else{

            BusinessMessageLike::create([
                'user_id' => Auth::user()->id,
                'business_message_id' => $id
            ]);
        }

        return redirect()->back();

    }

    public function Doreply($id,Request $request){

        BusinessMessageReply::create([
            'user_id' => Auth::user()->id,
            'business_message_id' => $id,
            'reply' => $request->message
        ]);

        return redirect()->back();
        
    }

    public function deleteReply($id,Request $request){

        BusinessMessageReply::where('id',$id)->delete();

        return redirect()->back();
        
    }


}

