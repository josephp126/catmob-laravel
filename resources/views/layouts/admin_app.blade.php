<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CATALOGO.mobi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link href="{{asset('css/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/admin_main.css')}}" rel="stylesheet">
    <link href="{{asset('css/admin_style.css')}}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    @yield('custom_css')
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__content">
                <div class="app-header-left">
                    <h3 class="admin-title">CATALOGO.mobi<h3>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <div class="widget-heading">
                                                <h4><b>{{Auth::user()->name}}</b></h4>
                                            </div>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <i class="fa fa-sign-in"></i>
                                            <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div> 
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        @yield('sidebar_list')
                    </div>
                </div>
            </div>    
            <div class="app-main__outer">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/datatable.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/datatables.bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/table-datatables-responsive.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('js/admin_main.js')}}"></script>
    <script>
    </script>
    @yield('custom_js')
</body>
</html>
