@extends('headers')





@section('content')
<div class="container">
    <div class="row" style="margin-top: 100px">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    @include('includes.errors_form')
                    <form accept-charset="UTF-8" role="form" action="<% url('/sigin') %>" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username..." name="username" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Senha..." name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                </label>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop