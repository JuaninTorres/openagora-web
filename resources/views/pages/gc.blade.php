@extends('app')

@section('title')@parent -  Gestión de Capacitación @endsection
@section('description')Desarrolle las capacidades de su organización.@endsection

@section('page_title')
    <h1 class="text-green"><i class="fa fa-graduation-cap"></i> Gestión de Capacitación</h1>
@endsection

@section('page_subtitle')
    <div class="subtitle">
        <p>Desarrolle las capacidades de su organización</p>
    </div>
@endsection

@section('page_description')
    <div class="row">
        <div class="col-md-12 description">
            <p>Desarrolle las capacidades de sus colaboradores, en línea con las necesidades de la organización.</p>
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
                <h3 class="text-green">Flexibilidad</h3>
                <p>Mediante el módulo de gestión de la capacitación nuestros clientes pueden gestionar las mallas de capacitación por cargo, requerimientos de capacitación desde los usuarios, ofertas de capacitación desde recursos humanos, planificación y ejecución del programa de capacitación, costos de las actividades de capacitación, gestión de proveedores, evaluación del impacto de la capacitación, y mucho más.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.rapidez')
            </div>
            <div class="col-md-10">
                <h3 class="text-green">Rapidez</h3>
                <p>Nuestros compromisos son los siguientes:<p>
                <ul>
                    <li>En 2 semanas podrá contar con la gestión de mallas de capacitación, y con las herramientas de planificación y ejecución de la capacitación.</li>
                    <li>En 1 mes tendrá disponible la gestión de requerimientos y ofertas de capacitación.</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.analisis')
            </div>
            <div class="col-md-10">
                <h3 class="text-green">Análisis de la información</h3>
                <p>open<span class="agora">agora</span> cuenta con más de 50 indicadores para el proceso de gestión de la capacitación, permitiendo a los clientes adaptar los reportes a sus necesidades</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.integracion')
            </div>
            <div class="col-md-10">
                <h3 class="text-green">Integración</h3>
                <p>El módulo de gestión de la capacitación de open<span class="agora">agora</span> se integra con los módulos de Selección, Gestión del desempeño, Talento y Sucesión.</p>
                <p>Además, open<span class="agora">agora</span> permite la integración con otras plataformas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.buenaspracticas')
            </div>
            <div class="col-md-10">
                <h3 class="text-green">Buenas prácticas</h3>
                <p>Compartimos con nuestros clientes las buenas prácticas en la implementación de estos sistemas, aumentando la probabilidad de éxito de los proyectos.</p>
            </div>
        </div>
    </div>
@stop

@section('scripts')
@endsection