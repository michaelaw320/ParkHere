<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model {

	protected $fillable = [
      'id_pemohon', 'id_surat_tanah', 'jenis_pemohon', 'email_pemohon'
    ];

}
