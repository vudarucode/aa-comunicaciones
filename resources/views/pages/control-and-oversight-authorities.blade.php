@extends('layouts.layout')
@section('title', 'Autoridades de Control y Vigilancia')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/control-and-oversight-authorities.css') }}">
@endpush

@section('content')
    <div class="control-and-oversight-authorities">
        <div class="control-and-oversight-authorities__container">
            <h1 class="control-and-oversight-authorities__title">AUTORIDADES DE CONTROL Y VIGILANCIA</h1>
            <div class="control-and-oversight-authorities__section">
                <img src="{{ asset('images/industria_comercio_logo.png') }}" alt="Industria y Comercio" class="control-and-oversight-authorities__logo">
                <p><strong>Dirección:</strong> Carrera 13 No. 27 - 00, Pisos 1 y 3. Bogotá, Colombia</p>
                <p><strong>Horario de atención:</strong> Lunes a Viernes 8:00 am - 4:30 pm</p>
                <p><strong>Teléfono conmutador:</strong> +57 601 587 0000 - Bogotá</p>
                <p><strong>Línea de atención:</strong> +57 601 592 0400 - Bogotá</p>
                <p><strong>Línea gratuita nacional:</strong> 01 8000 910165</p>
                <p><strong>Correo:</strong> <a href="mailto:contactenos@sic.gov.co">contactenos@sic.gov.co</a></p>
                <p><strong>Página Web:</strong> <a href="https://www.sic.gov.co" target="_blank">www.sic.gov.co</a></p>
            </div>
            <div class="control-and-oversight-authorities__section">
                <img src="{{ asset('images/mintic_logo.png') }}" alt="MinTIC" class="control-and-oversight-authorities__logo">
                <p><strong>Dirección:</strong> Edificio Murillo Toro Cra. 8a entre calles 12A y 12B Bogotá, Colombia</p>
                <p><strong>Horario de Atención Presencial:</strong> Lunes a viernes de 8:30 a.m. – 4:30 p.m. Jornada Continua</p>
                <p><strong>Teléfono Conmutador:</strong> +57 601 344 34 60</p>
                <p><strong>Línea Gratuita:</strong> 01-800-0914014</p>
                <p><strong>Correo Institucional:</strong> <a href="mailto:minticresponde@mintic.gov.co">minticresponde@mintic.gov.co</a></p>
                <p><strong>Página Web:</strong> <a href="https://www.mintic.gov.co" target="_blank">www.mintic.gov.co</a></p>
            </div>
            <div class="control-and-oversight-authorities__section">
                <img src="{{ asset('images/crc_logo.png') }}" alt="Comisión de Regulación de Comunicaciones" class="control-and-oversight-authorities__logo">
                <p><strong>Dirección:</strong> Cl 59 a bis # 5 - 53, Ed Link Siete Sesenta P9 Bogotá, Colombia</p>
                <p><strong>Horario de Atención:</strong> 8:30 a.m. a 5:30 p.m. en jornada continua</p>
                <p><strong>Línea atención al ciudadano, anticorrupción y conmutador:</strong> (+57) 601 319 8300</p>
                <p><strong>Línea gratuita nacional:</strong> 01-8000-919278</p>
                <p><strong>Correo Institucional:</strong> <a href="mailto:atencioncliente@crcom.gov.co">atencioncliente@crcom.gov.co</a></p>
                <p><strong>Página web:</strong> <a href="https://www.crcom.gov.co" target="_blank">www.crcom.gov.co</a></p>
            </div>
            <div class="control-and-oversight-authorities__section">
                <img src="{{ asset('images/ane_logo.png') }}" alt="ANE" class="control-and-oversight-authorities__logo">
                <p><strong>Dirección:</strong> Calle 93 # 17-45 Piso 4. Bogotá D.C.</p>
                <p><strong>Horario de atención:</strong> Lunes a Viernes de 8 a.m. a 5 p.m.</p>
                <p><strong>Teléfono conmutador:</strong> +57 (601) 6000030</p>
                <p><strong>Línea anticorrupción:</strong> 018000-913040</p>
                <p><strong>Correo Institucional:</strong> <a href="mailto:contactenos@ane.gov.co">contactenos@ane.gov.co</a></p>
                <p><strong>Página web:</strong> <a href="https://www.ane.gov.co" target="_blank">www.ane.gov.co</a></p>
            </div>
        </div>
        <!-- Footer -->
        @include('components.footer')
    </div>
@endsection
