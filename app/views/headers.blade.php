<!DOCTYPE html>
<html>
<head>
    <title>My index</title>
    <!-- inject:html -->
    <!-- any *.html files among your sources will go here as: <link rel="import" href="FILE"> -->
    <!-- endinject -->

    <!-- inject:js -->
    <script src="/bower_components/angular/angular.js"></script>
    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/angular-route/angular-route.js"></script>
    <script src="/bower_components/datatables/media/js/jquery.dataTables.js"></script>
    <script src="/bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
    <script src="/bower_components/bootswatch-dist/js/bootstrap.min.js"></script>
    <!-- endinject -->

    <!--- Agnular Scripts ---->
    @include('includes.angularscripts')
    <!--- End Agnular Scripts --->



    <!-- inject:css -->
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/bower_components/datatables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" href="/bower_components/bootswatch-dist/css/bootstrap.min.css">
    <!-- endinject -->

    <style>
        body {
            margin-top: 50px;
        }
    </style>
</head>
<body ng-app="JsonApi">

@yield('content')

</body>
</html>