@extends('layouts.layout')
@section('title', 'Registro de PQR')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/register-pqr.css') }}">
@endpush

@section('content')
    <div class="register-pqr">
        <div class="register-pqr__container">
            <h1 class="register-pqr__title">REGISTRO DE PQR</h1>
            <p class="register-pqr__subtitle">
                Siempre hay una oportunidad para mejorar la calidad de nuestro servicio y la calidad de nuestra relación con nuestros usuarios, con la excelencia que se merecen.
            </p>
            <p class="register-pqr__text">
                Por esta opción usted en su calidad de afiliado o de tercero interesado podrá registrar su PETICION, QUEJA o RECLAMO alusivo a cualquiera de los servicios prestados por AYA RADIOCOMUNICACIONES S.A.S. para lo cual se ha dispuesto el siguiente formato para su diligenciamiento. Señor usuario, registre aquí única y exclusivamente PQR’s relacionadas al servicio de nuestra empresa. Al diligenciar el presente formulario autoriza expresamente a AYA RADIOCOMUNICACIONES S.A.S. a tratar sus datos personales con la finalidad de que den respuesta a su PQR, por lo que acepta sus términos y condiciones.
                <br><br>
                El trámite de las PQR se regirá por las normas relativas al derecho de petición, consagradas en el Código de Procedimiento Administrativo y de lo Contencioso Administrativo. Contra las decisiones que resuelvan las PQR de los usuarios, proceden los recursos de reposición y, en subsidio, de apelación dentro de los diez (10) días hábiles siguientes a la notificación de estas y deberán ser tramitados y resueltos de conformidad con las reglas del Código de Procedimiento Administrativo y de lo Contencioso Administrativo. (Resolución CRC 3038 de 2011, artículo 21 - modificado por la Resolución CRC 3985 de 2012)
            </p>
            <h2 class="register-pqr__form-title">AQUÍ VA UN FORMULARIO</h2>
            <div class="register-pqr__links">
                <a href="https://ayacomunicaciones.com/gestion-de-pqr/" class="register-pqr__link" target="_blank">
                    MIRAR ESTE FORMULARIO PARA QUE APAREZCA ASÍ
                </a>
                <a href="https://metronet.com.co/peticiones-quejas-y-reclamos-metronet/" class="register-pqr__link" target="_blank">
                    PUEDE MANEJAR COMO UN GOOGLE FORMS
                </a>
            </div>
        </div>
        <!-- Footer -->
        @include('components.footer')
    </div>
@endsection
