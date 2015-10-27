@extends('app')

@section('page_title')
    <h1 class="text-orange"><i class="fa fa-user"></i> Gestión de Desempeño</h1>
@endsection

@section('page_subtitle')
    <div class="subtitle">
        <p>Potencia el desempeño de tu equipo</p>
    </div>
@endsection

@section('page_description')
    <div class="row">
        <div class="col-md-12 description">
            <p>A través del módulo de gestión del desempeño podrás alinear a la organización en base a objetivos y competencias, evaluar y reconocer el desempeño de cada colaborador, impulsando una cultura de excelencia.</p>
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
                <h3 class="text-orange">Flexibilidad</h3>
                <p>Cada cliente puede establecer sus formularios de evaluación, integrando elementos como competencias, objetivos e indicadores, planes de desarrollo, intereses profesionales, detección de necesidades de capacitación, planes de sucesión, comentarios y reporte de resumen de la evaluación.</p>
                <p>Los proceso de evaluación son confiugurados según las necesidades de cada cliente, pudiendo establecer evaluaciones en 90º, 180º y 360º, entre otras.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.rapidez')
            </div>
            <div class="col-md-10">
                <h3 class="text-orange">Rapidez</h3>
                <p>Nuestro compromiso es que la implementación del módulo de gestión del desempeño no tomará más de un mes.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.analisis')
            </div>
            <div class="col-md-10">
                <h3 class="text-orange">Análisis de la información</h3>
                <p>En open<span class="agora">agora</span>, junto con contar con una serie de informes listos para su uso, usted podrá establecer informes personalizados que se ajusten a sus necesidades.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.integracion')
            </div>
            <div class="col-md-10">
                <h3 class="text-orange">Integración</h3>
                <p>El módulo de gestión del desempeño de open<span class="agora">agora</span> se integra con los módulos de Selección, Talento y Sucesión, Capacitación y Control de Gestión.</p>
                <p>Además, open<span class="agora">agora</span> permite la integración con otras plataformas</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                @include('partials.pages.icons.buenaspracticas')
            </div>
            <div class="col-md-10">
                <h3 class="text-orange">Buenas prácticas</h3>
                <p>Compartimos con nuestros clientes las buenas prtácticas en la implementación de estos sistemas, aumentando la probabilidad de éxito de los proyectos.</p>
            </div>
        </div>
    </div>
@stop

@section('scripts')
@endsection