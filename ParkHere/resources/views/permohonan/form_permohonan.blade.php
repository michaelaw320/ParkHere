<h1>Entry laporan</h1>
<hr/>

{!! Form::open(['url' => 'permohonan']) !!}

    {!! Form::label('email_pemohon', 'Alamat Email:') !!}
    {!! Form::text('email_pemohon') !!}

    <br><br>
    {!! Form::label('tipe_pemohon', 'Tipe Pemohon:') !!}
    {!! Form::text('tipe_pemohon') !!}

    <br><br>
    {!! Form::label('id_pemohon', 'No ID Pemohon:') !!}
    {!! Form::text('id_pemohon') !!}

    <br><br>
    {!! Form::label('id_surat_tanah', 'No Surat Tanah:') !!}
    {!! Form::text('id_surat_tanah') !!}

    <br><br>
    {!! Form::submit('Entri Pengaduan') !!}

{!! Form::close() !!}