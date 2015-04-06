<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Permohonan;
use Request;

class PermohonanController extends Controller {

	public function form() {

        return view('permohonan.form_permohonan');
    }

    public function get() {
        $permohonans = Permohonan::all();

        return view('permohonan.daftar_permohonan', compact('permohonans'));
    }

    public function detil() {
        return view('permohonan.detil_permohonan');
    }

    public function entry() {
        $input = Request::all();


    }

}
