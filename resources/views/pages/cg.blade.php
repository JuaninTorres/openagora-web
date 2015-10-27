@extends('app')

@section('page_title')
    <h1 class="text-red"><i class="fa fa-pie-chart"></i> Control de Gestión</h1>
@endsection

@section('page_subtitle')
    <div class="subtitle">
        <p>Controle los resultados de su empresa.</p>
    </div>
@endsection

@section('page_description')
    <div class="row">
        <div class="col-md-12 description">
            <p>Gestione los resultados de su empresa de manera precisa y oportuna.</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="content-page">
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.flexibilidad')
            </div>
            <div class="col-md-10">
                <h3 class="text-red">Flexibilidad</h3>
                <p>Este módulo tiene la capacidad de gestionar desde un Balanced Scorecard hasta las actividades que está realizando cada una de las personas de la organización. Estableciendo los procesos para realizar la definición, seguimiento y control de las variables de negocio definidas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.rapidez')
            </div>
            <div class="col-md-10">
                <h3 class="text-red">Rapidez</h3>
                <p>Nuestro compromiso es que usted podrá contar con su sistema de talento y sucesión en un plazo no mayor a 1 mes.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.analisis')
            </div>
            <div class="col-md-10">
                <h3 class="text-red">Análisis de la información</h3>
                <p>El módulo de control de gestión permite que cada cliente establezca los reportes adecuados para su estructura de objetivos e indicadores.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.integracion')
            </div>
            <div class="col-md-10">
                <h3 class="text-red">Integración</h3>
                <p>El módulo de control de gestión se integra con el módulo de Gestión del desempeño.</p>
                <p>Además, open<span class="agora">agora</span> permite la integración con otras plataformas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.buenaspracticas')
            </div>
            <div class="col-md-10">
                <h3 class="text-red">Buenas prácticas</h3>
                <p>Compartimos con nuestros clientes las buenas prácticas en la implementación de estos sistemas, aumentando la probabilidad de éxito de los proyectos.</p>
            </div>
        </div>
    </div>
@stop

@section('scripts')
@endsection