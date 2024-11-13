@extends('layouts.layout')
@section('title', 'Información de Planes y Parrilla de Canales')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/information-on-plans-and-channel-lineup.css') }}">
@endpush

@section('content')
    <div class="information-on-plans-and-channel-lineup">
        <div class="information-on-plans-and-channel-lineup__container">
            <h1 class="information-on-plans-and-channel-lineup__title">INFORMACIÓN DE PLANES Y PARRILLA DE CANALES</h1>
            <!-- Botones de Planes -->
            <div class="information-on-plans-and-channel-lineup__buttons">
                <a href="#" class="information-on-plans-and-channel-lineup__button">PLANES FIBRA OPTICA SECTOR ARMENIA<br><span>VER PDF</span></a>
                <a href="#" class="information-on-plans-and-channel-lineup__button">PLANES FIBRA OPTICA TEBAIDA<br><span>VER PDF</span></a>
                <a href="#" class="information-on-plans-and-channel-lineup__button">PLANES FIBRA OPTICA SECTOR CIRCASIA<br><span>VER PDF</span></a>
                <a href="#" class="information-on-plans-and-channel-lineup__button">PLANES FIBRA OPTICA SECTOR QUIMBAYA<br><span>VER PDF</span></a>
                <a href="#" class="information-on-plans-and-channel-lineup__button">PLANES FIBRA OPTICA SECTOR SALENTO FILANDIA<br><span>VER PDF</span></a>
                <a href="#" class="information-on-plans-and-channel-lineup__button">PLANES RADIOENLACE</a>
                <a href="#" class="information-on-plans-and-channel-lineup__button">GUIA DE CANALES TELEVISION AYA</a>
            </div>
            <p class="information-on-plans-and-channel-lineup__note">Las anteriores tarifas están sujetas a validación de ubicación, la parrilla de canales está sujeta a cambio sin previo aviso</p>
        </div>
        <!-- Footer -->
        @include('components.footer')
    </div>
@endsection
