<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('gd_path') }}"><i class="fa fa-user"></i> Gestión de Desempeño</a></li>
            <li><a href="{{ route('gs_path') }}"><i class="ion ion-ios-search-strong"></i> Gestión de Selección</a></li>
            <li><a href="{{ route('gt_path') }}"><i class="fa fa-users"></i> Gestión de Talentos</a></li>
            <li><a href="{{ route('cg_path') }}"><i class="fa fa-pie-chart"></i> Control de Gestión</a></li>
            <li><a href="{{ route('gc_path') }}"><i class="fa fa-graduation-cap"></i> Gestión de Capacitación</a></li>
        </ul>
    </li>
    <li>{!! link_to_route('about_path', 'Nosotros') !!}</li>
    <li>{!! link_to_route('contact_path', 'Contacto') !!}</li>
</ul>
