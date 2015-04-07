<link rel="stylesheet" href="{{asset('bootflat/css/site.css')}}">
<link rel="stylesheet" href="{{asset('bootflat/css/site.min.css')}}">
<link rel="stylesheet" href="{{asset('bootflat/css/bootstrap.min.css')}}">

<body>
 <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Entry Laporan</a>
            </div>
<div class="col-md-8">
<div class="well">
{!! Form::open(['url' => 'permohonan']) !!}
    {!! Form::label('email_pemohon', 'Alamat Email:') !!}
    {!! Form::text('email_pemohon') !!}

    <br><br>
    {!! Form::label('jenis_pemohon', 'Tipe Pemohon:') !!}
    {!! Form::text('jenis_pemohon') !!}

    <br><br>
    {!! Form::label('id_pemohon', 'No ID Pemohon:') !!}
    {!! Form::text('id_pemohon') !!}

    <br><br>
    {!! Form::label('id_surat_tanah', 'No Surat Tanah:') !!}
    {!! Form::text('id_surat_tanah') !!}

    <br><br>
    {!! Form::label('lokasi_parkir', 'Lokasi Parkir:') !!}
    {!! Form::text('lokasi_parkir') !!}
    
    <br><br>

    {!! Form::submit('Entri Pengaduan', ['class' => 'btn btn-block']) !!}
</div>
    

{!! Form::close() !!}
</div>

</body>