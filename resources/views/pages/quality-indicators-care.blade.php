<!-- Layout -->
@extends('layouts.layout')
<!-- Title -->
@section('title', 'Indicadores de Calidad en la Atención')
<!-- Styles -->
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/quality-indicators-care.css') }}">
@endpush
<!-- Content -->
@section('content')
    <div class="quality-indicators-care">
        <div class="quality-indicators-care__container">
            <h1 class="quality-indicators-care__title">Indicadores de Calidad en la Atención</h1>
            <a href="{{ url('/') }}" class="quality-indicators-care__button">Año 2024 - Ver PDF</a>
            <a href="{{ url('/') }}" class="quality-indicators-care__button">Año 2023 - Ver PDF</a>
        </div>
        <!-- Footer -->
        @include('components.footer')
    </div>
@endsection
<!-- Scripts -->