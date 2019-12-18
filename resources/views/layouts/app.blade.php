<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<base href=" {{ asset('bower_components/admin/backend') }}/">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> @yield('title') </title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/all.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> {{ trans('message.admin') }} </a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <svg class="glyph stroked male-user">
                            <use xlink:href="#stroked-male-user"></use>
                            </svg>
                                {{ trans('message.user') }}
                            <span class="caret"></span>
                        </a>
                         <ul class="dropdown-menu" role="menu">
                             <li>
                                 <a href="#">
                                 <svg class="glyph stroked cancel">
                                 <use xlink:href="#stroked-cancel"></use>
                                 </svg>
                                     {{ trans('message.logout') }}
                                 </a>
                             </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li role="presentation" class="divider"></li>
            <li class="active">
                <a href=" {{ asset('task') }} ">
                    <svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/>
                    </svg>
                    {{ trans('message.list') }}
                </a>
            </li>
            <li role="presentation" class="divider"></li>
        </ul>
    </div>

    @yield('content')

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
</body>
</html>
