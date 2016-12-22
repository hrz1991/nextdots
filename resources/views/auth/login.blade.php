@extends('master.master')

<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>

        @if(Session::has('$_message'))
          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Message: </strong> {{Session::get('$_message')}}
          </div>
        @endif

        {!! Form::open(['url' => 'auth', 'method' => 'post']) !!}

            <span id="reauth-email" class="reauth-email"></span>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
            <br>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <br>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>


        {!! Form::close() !!}

    </div><!-- /card-container -->
</div><!-- /container -->