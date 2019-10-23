<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ActionController extends Controller
{


    public function deleteUser($id=false){
        DB::table('tb_users')->where('user_id', '=', $id)->delete();
        return redirect('/admin/userDetails')->with('success','User Deleted Successfully ');

       // return redirect('/admin/userDetails');
    }


//user Editing
    public function editUser($id=false){

        $userDetails['userData'] = DB::table('tb_users')
        ->select('*')
        ->join('countries','countries.cont_id','=','tb_users.user_country')
        ->join('states','states.stat_id','=','tb_users.user_state')
        ->where('user_id','=',$id)
        ->get();



        return view('client/clientpage',$userDetails);
    }
}
