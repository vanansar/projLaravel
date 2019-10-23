<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;



class LoginController extends Controller
{
    public function login_act(Request $request)
    {

        $em = $request->input('email');
        $pass = $request->input('password');

        $sel_user = DB::table('tb_admin')
            ->where('tb_admin.admin_Email', '=', $em)
            ->where('tb_admin.admin_Password', '=', $pass)
            ->get();

        $count = count($sel_user);

        // echo $count;
        //  die();
        if ($count > 0) {

			$request->Session()->put('em',$em);

			return redirect('/admin/dashboard')->with('success', 'You are successfully Registered..');
        } else {
            //echo 'error on sign in ';
            return redirect('../laraBlog/admin/')->with('failed', 'Please Try Again Later..');
        }
    }
    //without Country State

    // public function user_Detail()
    // {
    //     $data['view_user'] = DB::table('tb_users')
    //     ->select( '*' )
    //     ->get();
    //     $data['sno'] = 1;
    //     return view('/admin/inbox', $data);
    // }
//with country state
    public function user_Details()
    {
        $data['view_user'] = DB::table('tb_users')
        ->select( '*')
        ->join('countries','countries.cont_id','=','tb_users.user_country')
        ->join('states','states.stat_id','=','tb_users.user_state')
        ->get();
        $data['sno'] = 1;
        return view('/admin/inbox', $data);
    }




	public function user_lo(Request $request)
	{
		$em = $request->input('uemail');
        $pass = $request->input('upassword');

        $sel_user = DB::table('tb_users')
            ->where('tb_users.user_email', '=', $em)
            ->where('tb_users.user_password', '=', $pass)
            ->get();

        $count = count($sel_user);

        if ($count > 0) {
            foreach($sel_user as $user)
			{
               $request->Session()->put('userDetail',['uemail'=>$user->user_email,'uname'=>$user->user_name,'id'=>$user->user_id ]);

			/*$request->Session()->put();
			$request->Session()->put('uname',$user->user_name);
			$request->Session()->put('uemail',$user->user_email);*/
			}
			//success
			return redirect('/client')->with('success', 'You are successfully logged in..');
        } else {
            //echo 'error on sign in ';
            return view('/client')->with('failed', 'Please Try Again Later..');
        }
	}


}
