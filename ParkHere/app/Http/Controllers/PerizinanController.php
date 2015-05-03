<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Permohonan;
use App\Perizinan;
use Request;
use Carbon\Carbon;

class PerizinanController extends Controller {

    public function getDaftarIzin(){
        try{
            $user = Session::get('user');
        } catch (Exception $e) {
            return Redirect::route('home');
        }

        $perizinans = Perizinan::where('id_pemohon', $user->id)->get();

        return view('perizinan.daftar_izin', compact('perizinans'));
    }

    public function getDaftarIzinAdmin(){
        try{
            $admin = Session::get('admin');
        } catch (Exception $e) {
            return Redirect::route('admin/login');
        }

        $perizinans = Perizinan::where('id_pemohon', $admin->id)->get();

        return;
    }
}
