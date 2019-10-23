<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Hash;
use Illuminate\Http\Request;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;





class RegisterController extends Controller
{

	public function reg(Request $req) {
        $file = $req->file('userimage');
        $data = array(
            'user_name' => $req->input('name'),
            'user_gender'=>$req->input('gender'),
            'user_email'=>$req->input('email'),
			'user_country'=>$req->input('country'),
			'user_state'=>$req->input('state'),
            'user_mobile'=>$req->input('number'),
            'user_image'=>$file->getClientOriginalName(),
            'user_password'=>$req->input('pwd')
        );

         $res =  DB::table('tb_users')->insert($data);
		 if($res)
		 {
            $destinationPath = 'public/assets/client/useruploads';
            $file->move($destinationPath,$file->getClientOriginalName());
		 return redirect('/client/')->with('success', 'Successfully Registered..Kindly Login to start..');
		 }
		 else {
			return redirect('/client/')->with('failed', 'Registration Failed..');
         }

    }

    public function select_country(Request $request) {



        $em=$request->input('country');
        $res = DB::table('states')
                            ->where('states.country_id', '=', $em)
                            ->get();


                        //$ans= '<option>'.$res.'</option>';
       foreach($res as $st)
       {

           $state = '<option value='.$st->stat_id.'>'.$st->sname.'</option>';
            echo($state);

       }



       }




}
