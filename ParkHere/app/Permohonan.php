<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model {

	const menunggu_validasi = 'Menunggu Validasi';
	
	protected $fillable = [
      'id_pemohon', 'id_surat_tanah', 'jenis_pemohon', 'email_pemohon','status_permohonan','lokasi_parkir'
    ];

}
