<h1>Daftar Permohonan</h1>

@foreach($permohonans as $permohonan)

    <h2>{{ $permohonan->id_permohonan  }}</h2>
    {{ $permohonan->id_pemohon  }}
    {{ $permohonan->jenis_pemohon  }}
@endforeach
