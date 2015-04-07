{{use App\Permohonan;}}

Alamat Email : {{$permohonan -> email_pemohon}}
<br>
Jenis Pemohon : {{$permohonan -> jenis_pemohon}}
<br>
Id Pemohon : {{$permohonan -> id_pemohon}}
<br>
Lokasi Parkir : {{$permohonan -> lokasi_parkir}}
<br>
No Surat Izin Kepemilikan Tanah : {{ $permohonan -> id_surat_tanah}} 
<br>
@if ($permohonan -> status_permohonan == Permohonan -> menunggu_validasi)
	Monaslsa
@endif