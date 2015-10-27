@extends('app')

@section('page_title')
    <h1 class="text-purple"><i class="fa fa-users"></i> Gestión de Talentos y Sucesión</h1>
@endsection

@section('page_subtitle')
    <div class="subtitle">
        <p>Detecta y desarrolla tus talentos</p>
    </div>
@endsection

@section('page_description')
    <div class="row">
        <div class="col-md-12 description">
            <p>Detecta los talentos de tu organización y planifica para que ellos estén en las posiciones claves de tu empresa.</p>
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
                <h3 class="text-purple">Flexibilidad</h3>
                <p>El módulo de gestión de talentos y sucesión le permite a nuestros clientes establecer sus formularios y procesos de evaluación y calibración de talentos, utilizando la metodología Nine-Box. Además, le permitirá establecer las posiciones críticas de su empresa y los planes de sucesión que maximice la utilización de sus talentos y minimice los riesgos.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.rapidez')
            </div>
            <div class="col-md-10">
                <h3 class="text-purple">Rapidez</h3>
                <p>Nuestro compromiso es que usted podrá contar con su sistema de talento y sucesión en un plazo no mayor a 1 mes.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.analisis')
            </div>
            <div class="col-md-10">
                <h3 class="text-purple">Análisis de la información</h3>
                <p>El sistema cuenta con reportes estándares, posibilitando que el cliente establezca informes personalizados.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.integracion')
            </div>
            <div class="col-md-10">
                <h3 class="text-purple">Integración</h3>
                <p>El módulo de gestión de talento y sucesión de open<span class="agora">agora</span> se integra con los módulos de Gestión del desempeño y Capacitación.</p>
                <p>Además, open<span class="agora">agora</span> permite la integración con otras plataformas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.buenaspracticas')
            </div>
            <div class="col-md-10">
                <h3 class="text-purple">Buenas prácticas</h3>
                <p>Compartimos con nuestros clientes las buenas prácticas en la implementación de estos sistemas, aumentando la probabilidad de éxito de los proyectos.</p>
            </div>
        </div>
    </div>
@stop

@section('scripts')
@endsection