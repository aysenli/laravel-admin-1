@extends('Vendor-Admin::layouts.login')
@section('content')
<form class="form-signin" role="form" method="POST" action="{{asset('admin/login/index')}}">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="form-control" required autofocus name="username">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

@stop
