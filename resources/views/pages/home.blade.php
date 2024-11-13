<!-- Layout -->
@extends('layouts.layout')
<!-- Title -->
@section('title', 'Información Importante para el Usuario')
<!-- Styles -->
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endpush
<!-- Content -->
@section('content')
    <div class="home">
        <div class="home__container">
            <h1 class="home__title">INFORMACIÓN IMPORTANTE PARA EL USUARIO</h1>
            <a href="{{ url('/gestion-de-pqr') }}" class="home__button">Gestión de peticiones, quejas/reclamos o recursos - PQR</a>
            <a href="{{ url('/indicadores-de-calidad-en-la-atencion') }}" class="home__button">Indicadores de calidad en la atención</a>
            <a href="{{ url('/contrato-unico-de-prestacion-de-servicio-fijo') }}" class="home__button">Contrato único de prestación de servicios fijos</a>
            <a href="{{ url('/oficinas-fisicas') }}" class="home__button">Oficinas físicas y área de cubrimiento</a>
            <a href="{{ url('/informacion-de-planes-y-parrilla-de-canales') }}" class="home__button">Información de planes y parrilla de canales</a>
            <a href="{{ url('/autoridades-de-control-y-vigilancia') }}" class="home__button">Autoridades de control y vigilancia</a>
        </div>
        <!-- Footer -->
        @include('components.footer')
    </div>
@endsection
<!-- Scripts -->