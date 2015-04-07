<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Permohonan;
use Request;
use Carbon\Carbon;

class PermohonanController extends Controller {

	public function form() {

        return view('permohonan.form_permohonan');
    }

    public function get() {
        $permohonans = Permohonan::all();

        return view('permohonan.daftar_permohonan', compact('permohonans'));
    }

    public function detil($id_permohonan) {
        $permohonan = Permohonan::where('id_permohonan', '=', $id_permohonan)->firstOrFail();
        return view('permohonan.detil_permohonan', compact('permohonan','Permohonan'));
    }

    public function entry() {
        $input = Request::all();

        $input['updated_at'] = Carbon::now();
        $input['created_at'] = Carbon::now();
        $input['status_permohonan'] = Permohonan::menunggu_validasi;

        $db = Permohonan::create($input);

        return redirect('daftar_permohonan');
    }

}
