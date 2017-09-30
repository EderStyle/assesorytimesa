@extends('layouts.style')

@section('content')

@include('bienvenido.sections.header')
<div class="row">
	@include('bienvenido.sections.slide')
</div>
<div class="row">
	@include('bienvenido.sections.servicios')
</div>
<div class="row">
	@include('bienvenido.sections.quienes-somos')
</div>
<div class="row">
	@include('bienvenido.sections.profesionales')
</div>

	@include('bienvenido.sections.footer')


@endsection