@extends('headers')

@section('content')
<!--- Navbar with ng controller - NavController --->
@include('includes.navbar')
<!--- Navbar with ng controller - NavController --->

<!--NG VIEW-->
<div class="container" ng-view></div>
<!--NG VIEW-->

@stop