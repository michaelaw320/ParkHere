<h1>Daftar Permohonan</h1>

<table>
	<tr>
		<th>Nomor Permohonan</th>
    	<th>Lokasi Parkir</th>
 	   	<th>Status</th>
 	   	<th>Tanggal Mulai</th>
	</tr>
@foreach($permohonans as $permohonan)
    <tr>
    	<td><a href="detil_permohonan/{{$permohonan->id_permohonan}}">{{ $permohonan->id_permohonan  }}</td>
    	<td>{{ $permohonan->lokasi_parkir  }}</td>
 	   	<td>{{ $permohonan->status_permohonan  }}</td>
 	   	<td>{{ $permohonan->created_at  }}</td>
 	</tr>
@endforeach
</table>