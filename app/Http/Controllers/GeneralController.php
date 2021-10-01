<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\UserFavorite;
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


}

