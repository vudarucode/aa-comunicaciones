<!-- Layout -->
@extends('layouts.layout')
<!-- Title -->
@section('title', 'Gestion de PQR')
<!-- Styles -->
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/pqr.css') }}">
@endpush
<!-- Content -->
@section('content')
    <div class="pqr">
        <div class="pqr__container">
            <h1 class="pqr__title">Gestion de PQR</h1>
            <a href="{{ url('/gestion-de-pqr/procedimiento-y-tramites-de-pqr') }}" class="pqr__button">Procedimiento y Trámite de Peticiones, Quejas y Recursos</a>
            <a href="{{ url('/gestion-de-pqr/registro-de-pqr') }}" class="pqr__button">Registro de PQRS</a>
        </div>
        <!-- Footer -->
        @include('components.footer')
    </div>
@endsection
<!-- Scripts -->