@extends('layouts.layout')
@section('title', 'Contrato Único de Prestación de Servicio Fijo')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/single-fixed-service-provision-contract.css') }}">
@endpush

@section('content')
    <div class="single-fixed-service-provision-contract">
        <div class="single-fixed-service-provision-contract__container">
            <h1 class="single-fixed-service-provision-contract__title">CONTRATO ÚNICO DE PRESTACIÓN DE SERVICIO FIJO</h1>
            <h2 class="single-fixed-service-provision-contract__subtitle">RESOLUCIÓN 5151 DEL 2017</h2>
            <div class="single-fixed-service-provision-contract__pdf">
                <iframe src="https://www.crcom.gov.co/sites/default/files/normatividad/00005151.pdf" width="100%" height="600px" frameborder="0"></iframe>
            </div>
            <a href="https://www.crcom.gov.co/sites/default/files/normatividad/00005151.pdf" target="_blank" class="single-fixed-service-provision-contract__link">https://www.crcom.gov.co/sites/default/files/normatividad/00005151.pdf</a>
        </div>
        <!-- Footer -->
        @include('components.footer')
    </div>
@endsection
