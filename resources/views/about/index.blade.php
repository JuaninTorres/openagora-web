@extends('app')

@section('title')@parent -  Nosotros @endsection

@section('page_title')
@endsection

@section('page_description')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            @include('partials.home.about')
        </div>
        <div class="col-md-6">
            <a class="twitter-timeline"  href="https://twitter.com/openagora" data-widget-id="651022530187259904"> @openagora.</a>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script>
@endsection