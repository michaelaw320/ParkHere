<h1>Entry laporan</h1>
<hr/>

{!! Form::open(['url' => 'permohonan']) !!}

    {!! Form::label('email', 'Alamat Email:') !!}
    {!! Form::text('email') !!}

    <br><br>
    {!! Form::label('tipe_pemohon', 'Tipe Pemohon:') !!}
    {!! Form::text('tipe_pemohon') !!}

    <br><br>
    {!! Form::label('id_pemohon', 'No ID Pemohon:') !!}
    {!! Form::text('id_pemohon') !!}

    <br><br>
    {!! Form::submit('Entri Pengaduan') !!}

{!! Form::close() !!}