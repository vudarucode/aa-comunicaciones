@extends('layouts.layout')
@section('title', 'Oficinas Físicas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/physical-offices.css') }}">
@endpush

@section('content')
    <div class="physical-offices">
        <div class="physical-offices__container">
            <h1 class="physical-offices__title">OFICINAS FÍSICAS</h1>
            <div class="physical-offices__image-container">
                <img src="{{ asset('assets/images/aya-comunicaciones.jpg') }}" alt="Oficinas Aya Comunicaciones" class="physical-offices__image">
            </div>
            <p class="physical-offices__address">CALLE 26 # 16 - 25<br>ARMENIA - QUINDÍO</p>
            <a href="https://www.google.com/maps/place/A%26A+COMUNICACIONES+SAS/@4.5313629,-75.6770909,3225m/data=!3m1!1e3!4m6!3m5!1s0x8e38f5adfaeed441:0x79228f1ed8a24c9e!8m2!3d4.5313629!4d-75.6770909!16s%2Fg%2F11g3r1rkvp?entry=ttu&g_ep=EgQyMDI0MTAyOS4wI4KXMDS0oASAFQA" target="_blank" class="physical-offices__link">
                https://www.google.com/maps/place/A%26A+COMUNICACIONES+SAS/...
            </a>
        </div>
        <!-- Footer -->
        @include('components.footer')
    </div>
@endsection
