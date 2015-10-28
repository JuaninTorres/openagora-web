@extends('app')

@section('title')@parent -  Gestión de Selección @endsection
@section('description')Selecciona a los mejores, en el momento requerido.@endsection

@section('page_title')
    <h1 class="text-pink"><i class="ion ion-ios-search-strong"></i> Gestión de Selección</h1>
@endsection

@section('page_subtitle')
    <div class="subtitle">
        <p>Selecciona a los mejores, en el momento requerido.</p>
    </div>
@endsection

@section('page_description')
    <div class="row">
        <div class="col-md-12 description">
            <p>Asegura que tus proceso de selección responden a las necesidades de la organización, en los tiempos requeridos.</p>
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
                <h3 class="text-pink">Flexibilidad</h3>
                <p>Cada cliente puede definir sus procesos y formularios de selección, integrando desde la solicitud de iniciar un proceso de reclutamiento, la evaluación y entrevista de candidatos, hasta la carta oferta. Además, podrá generar una base de datos de postulantes, con lo cual ahorrará tiempo y recursos, e integrar tanto los procesos de selección interna como externa.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.rapidez')
            </div>
            <div class="col-md-10">
                <h3 class="text-pink">Rapidez</h3>
                <p>Nuestro compromiso es que usted podrá contar con su sistema de selección en un plazo no mayor a 2 meses.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.analisis')
            </div>
            <div class="col-md-10">
                <h3 class="text-pink">Análisis de la información</h3>
                <p>El sistema cuenta con reportes estándares, con más de 20 indicadores. Además, cada cliente podrá establecer reportes personalizados.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.integracion')
            </div>
            <div class="col-md-10">
                <h3 class="text-pink">Integración</h3>
                <p>El módulo de gestión de la selección de open<span class="agora">agora</span> se integra con los módulos de Gestión del desempeño, Capacitación, Talento y Sucesión.</p>
                <p>Además, open<span class="agora">agora</span> permite la integración con otras plataformas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.buenaspracticas')
            </div>
            <div class="col-md-10">
                <h3 class="text-pink">Buenas prácticas</h3>
                <p>Compartimos con nuestros clientes las buenas prácticas en la implementación de estos sistemas, aumentando la probabilidad de éxito de los proyectos.</p>
            </div>
        </div>
    </div>
@stop

@section('scripts')
@endsection