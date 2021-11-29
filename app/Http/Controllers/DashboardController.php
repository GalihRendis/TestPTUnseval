<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class DashboardController extends Controller
{
    public function index(){
    	// $user = User::find(Auth::id());
    	// $user->password = Hash::make('123@Budi1111');
    	// $user->save();
    	$data = [
    		'email' => Auth::user()->email,
    	];
    	$waktu = date(now());
    	$email = explode('@', Auth::user()->email);
    	$resultEmail ="";
    	foreach ($email as $e) {
    		$resultEmail = $resultEmail.''.$e;
    	}
    	$salam = date('h');
    	if ($salam >= 5 && $salam < 8) {
    		$data['salam'] = "Selamat Siang";
    	}else if($salam >= 8 && $salam < 12){
    		$data['salam'] = "Selamat Sore";
    	}else if($salam >= 12 && $salam <= 18){
    		$data['salam'] = "Selamat Malam";
    	}else{
    		$data['salam'] = "Selamat Pagi";
    	}
    	$data['emailTanpa@'] = $resultEmail;
    	$data['waktu'] = $waktu;
    	// dd($waktu);
    	return view('dashboard.master', compact('data'));
    }
}
