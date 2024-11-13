<!-- Layout -->
@extends('layouts.layout')
<!-- Title -->
@section('title', 'Procedimiento y Trámite de Peticiones, Quejas y Recursos')
<!-- Styles -->
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/procedure-pqr.css') }}">
@endpush
<!-- Content -->
@section('content')
    <div class="procedure-pqr">
        <div class="procedure-pqr__container">
            <h1 class="procedure-pqr__title">Procedimiento y Trámite de Peticiones, Quejas y Recursos</h1>
            <a href="{{ url('/') }}" class="procedure-pqr__button">Ver PDF</a>
        </div>
        <!-- Footer -->
        @include('components.footer')
    </div>
@endsection
<!-- Scripts -->