@extends('layouts.app')
@section('css')
    <style>
        .form-group.required label:after {
            content: " *";
            color: red;
            font-weight: bold;
        }
    </style>
@endsection
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Kategori | Edit Kategori</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-green.min.css")}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
    #logo {
        Padding-bottom:30px;
        width:100px;
        height:70px;
    }
    </style>
</head>
<body class="skin-green">
<div class="wrapper">

    <!-- Header -->
    @include('part.partutama.header')

    <!-- Sidebar -->
    @include('part.partutama.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container">
        <div class="col-md-8 offset-md-2">
            <h1>{{isset($pegawais)?'Edit':'New'}} pegawai data </h1>
            <hr/>
            @if(isset($pegawais))
                {!! Form::model($pegawais,['method'=>'put']) !!}
            @else
                {!! Form::open() !!}
            @endif
            <div class="form-group row required">
            {!! Form::label("nip","nip",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("nip",null,["class"=>"form-control".($errors->has('nip')?" is-invalid":""),"autofocus",'placeholder'=>'Harga estimasi minimum','id'=>'harga_minimum']) !!}
                {!! $errors->first('nip','<span class="invalid-feedback">:message</span>') !!}
            </div>
        </div>
            <div class="form-group row required">
                {!! Form::label("first_name","First_name",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
                <div class="col-md-8">
                    {!! Form::text("first_name",null,["class"=>"form-control".($errors->has('first_name')?" is-invalid":""),"autofocus",'placeholder'=>'First Name']) !!}
                    {!! $errors->first('first_name','<span class="invalid-feedback">:message</span>') !!}
                </div>
            </div>
            <div class="form-group row required">
                {!! Form::label("last_name","Last_name",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
                <div class="col-md-8">
                
                    {!! Form::text("last_name",null,["class"=>"form-control".($errors->has('last_name')?" is-invalid":""),"autofocus",'placeholder'=>'Last Name']) !!}
                    {!! $errors->first('first_name','<span class="invalid-feedback">:message</span>') !!}
                </div>
            </div>
        <div class="form-group row required">
        {!! Form::label("address","Address",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
        <div class="col-md-8">
            {!! Form::text("address",null,["class"=>"form-control".($errors->has('address')?" is-invalid":""),"autofocus",'placeholder'=>'address','type'=>'textarea','id'=>'address']) !!}
            {!! $errors->first('address','<span class="invalid-feedback">:message</span>') !!}
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("email","Email",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
        <div class="col-md-8">
            {!! Form::text("email",null,["class"=>"form-control".($errors->has('email')?" is-invalid":""),"autofocus",'placeholder'=>'email','type'=>'email','id'=>'address']) !!}
            {!! $errors->first('address','<span class="invalid-feedback">:message</span>') !!}
        </div>
    </div>
   <div class="form-group row required">
        {!! Form::label("posisition","id_posisitions",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
        <div class="col-md-8">
        <select id="posisition" name="posisition" class="form-control">
                 <option value="">--- Select posisition ---</option>
                    @foreach ($posisitions as $key => $value)

                     <option value="{{ $key }}" />{{ $value }}</option>
                   @endforeach
             </select>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("no_mobile","No mobile",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
        <div class="col-md-8">
            {!! Form::text("no_mobile",null,["class"=>"form-control".($errors->has('no_mobile')?" is-invalid":""),"autofocus",'placeholder'=>'no_mobile','id'=>'address']) !!}
            {!! $errors->first('no_mobile','<span class="invalid-feedback">:message</span>') !!}
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("id_departemen","id_departemen",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
        <div class="col-md-8">
        <select id="id_departemen" name="id_departemen" class="form-control">
                 <option value="">--- Select departemen ---</option>
                    @foreach ($departemens as $key => $value)

                     <option value="{{ $key }}" />{{ $value }}</option>
                   @endforeach
             </select>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("status","Status",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
        <div class="col-md-8">
        <select class="form-control" name="status">
          <option value="tetap">Tetap</option>
          <option value="kontrak">Kontrak</option>
      </select>
        </div>
    </div>
            <div class="form-group row">
                <div class="col-md-3 col-lg-2"></div>
                <div class="col-md-4">
                    <p></p>
                    {!! Form::button("Save",["type" => "submit","class"=>"btn
                btn-primary"])!!}&nbsp;
                <a href="{{url('/pegawai')}}" class="btn btn-danger">
                        Back</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
      <!-- /.box -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('part.partutama.footer')

</div><!-- ./wrapper -->


<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->

<script src="https://code.jquery.com/jquery-2.1.3.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/bootstrap/dist/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/admin-lte/dist/js/adminlte.min.js") }}" type="text/javascript"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
      <script type="text/javascript">

	/* Tanpa Rupiah */
	var harga_maksimum = document.getElementById('dengan-rupiah');
	harga_maksimum.addEventListener('keyup', function(e)
	{
		harga_maksimum.value = formatRupiah(this.value, 'Rp. ');
	});
	
	harga_maksimum.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
	});
	
	/* Dengan Rupiah */
	var harga_minimum = document.getElementById('dengan-rupiah');
	harga_minimum.addEventListener('keyup', function(e)
	{
		harga_minimum.value = formatRupiah(this.value, 'Rp. ');
	});
	
	harga_minimum.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
	});
	
	/* Fungsi */
	function formatRupiah(bilangan, prefix)
	{
		var number_string = bilangan.replace(/[^,\d]/g, '').toString(),
			split	= number_string.split(','),
			sisa 	= split[0].length % 3,
			rupiah 	= split[0].substr(0, sisa),
			ribuan 	= split[0].substr(sisa).match(/\d{1,3}/gi);
			
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
		
		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
	
	function limitCharacter(event)
	{
		key = event.which || event.keyCode;
		if ( key != 188 // Comma
			 && key != 8 // Backspace
			 && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
			 && (key < 48 || key > 57) // Non digit
			 // Dan masih banyak lagi seperti tombol del, panah kiri dan kanan, tombol tab, dll
			) 
		{
			event.preventDefault();
			return false;
		}
	}
</script>
</body>
</html>