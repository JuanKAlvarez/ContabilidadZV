@if (Auth::guest())

@else
<!-- Elementos del menú de la barra lateral - Estos Colapsan el menú de navegación  en pantallas pequeñas -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="internet">
                    <a href="{{ url('/venta/internet') }}"><i class="fa fa-fw fa-dashboard"></i> Internet</a>
                </li>
                <li class="impresora">
                    <a href="{{ url('/venta/impresora') }}"><i class="fa fa-fw fa-bar-chart-o"></i> Impresora</a>
                </li>
                <li class="papeleria">
                    <a href="{{ url('/venta/papeleria') }}"><i class="fa fa-fw fa-table"></i> Papeleria</a>
                </li>
                <li class="servicios">
                    <a href="{{ url('/venta/servicios') }}"><i class="fa fa-fw fa-file"></i> Servicios</a>
                </li>
                <li class="gana">
                    <a href="{{  url('/venta/gana') }}"><i class="fa fa-fw fa-edit"></i> GANA</a>
                </li>
                <li class="minutos-ip">
                    <a href="{{ url('/venta/minutos-ip') }}"><i class="fa fa-fw fa-desktop"></i> Minutos IP</a>
                </li>
                <li class="win-red">
                    <a href="{{url('/venta/win-red')}}"><i class="fa fa-fw fa-wrench"></i> Win Red</a>
                </li>
                <li class="">
                    <a href="javascript:;" data-toggle="collapse" data-target="#tools"><i class="fa fa-fw fa-arrows-v"></i> Herramientas <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="tools" class="collapse">
                        <li class="">
                            <a href="#">Calcular Hoja de Vida</a>
                        </li>
                        <li class="">
                            <a href="#">Calcular Chance</a>
                        </li>
                        <li class="">
                            <a href="#">Agenda</a>
                        </li>
                        <li class="">
                            <a href="#">Notas</a>
                        </li>
                    </ul>
                </li> 
                <li class="">
                    <a href="javascript:;" data-toggle="collapse" data-target="#admin"><i class="fa fa-fw fa-arrows-v"></i> Administración <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="admin" class="collapse">
                        <li class="">
                            <a href="#">Arqueo</a>
                        </li>
                        <li class="">
                            <a href="#">Totales por Mes</a>
                        </li>
                        <li class="">
                            <a href="#">Totales Anuales</a>
                        </li>
                        <li class="">
                            <a href="#">Egresos</a>
                        </li>
                    </ul>
                </li>                
            </ul>

        </div>

        <!-- /.navbar-collapse -->
@endif