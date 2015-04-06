<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permohonan', function(Blueprint $table)
		{
			$table->increments('id_permohonan');
			$table->timestamps();
            $table->string('id_pemohon');
            $table->string('jenis_pemohon');
            $table->string('id_surat_tanah');
            $table->string('status_permohonan');
            $table->integer('biaya_retribusi');
            $table->binary('bukti_pembayaran');
            $table->string('email_pemohon');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('permohonan');
	}

}
