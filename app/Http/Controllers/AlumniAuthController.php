<?php
namespace App\Http\Controllers;

 use Illuminate\Support\Facades\Auth;
 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
 use Illuminate\Http\Response;
 use App\Models\Alumni;
 use DB;

 class AlumniAuthController extends Controller {

 	public function login(){
 		return view(' alumni.login');
 	}

 	public function dologin(Request $request){
 		$email = $request->input('email');
 		$idnum= $request->input('idnum');
    // Check validation
 		$checkLogin = DB::table('alumnis')->where(['email'=>$email,'idnum'=>$idnum])->get();
 		if(count($checkLogin)  >0){
 			$alumni = DB::table('alumnis')->where('idnum', $idnum)->first();
 			return view ("alumni.edit", ['alumni'=>$alumni]);
 		}else{
 			echo "Login Faield Wrong Data Passed";
 		}
 	}
 }