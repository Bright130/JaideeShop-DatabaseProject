@extends('_headerfooter')
@section('page_title','buyer Registration')
@section('content')


<head>
<style>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
@function remy($value) {
  @return ($value / 16px) * 1rem;
}

body {
  font: 100% / 1.414 "Open Sans", "Roboto", arial, sans-serif;
  background: #e9e9e9;
}
a,
[type="submit"] {transition: all .25s ease-in;}
.signup__container {
  position: absolute;
  top: 50%;
  right: 0;
  left: 0;
  margin-right: auto;
  margin-left: auto;
  transform: translateY(-50%);
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  width: remy(800px);
  height: remy(480px);
  border-radius: remy(3px);
  box-shadow: 0px remy(3px) remy(7px) rgba(0,0,0,.25);
}
.signup__overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,.76);
}
.container__child {
  width: 50%;
  height: 100%;
  color: #fff;
}
.signup__thumbnail {
  position: relative;
  padding: 2rem;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  background: url(http://ultraimg.com/images/spectre-login.jpg);
  background-repeat: no-repeat;
  background-position: top center;
  background-size: cover;
}
.thumbnail__logo,
.thumbnail__content,
.thumbnail__links {
  position: relative;
  z-index: 2;
}
.thumbnail__logo {align-self: flex-start;}
.logo__shape {fill: #fff;}
.logo__text {
  display: inline-block;
  font-size: .8rem;
  font-weight: 700;
  vertical-align: bottom;
}
.thumbnail__content {align-self: center;}
h1,
h2 {
  font-weight: 300;
  color: rgba(255,255,255,1);
}
.heading--primary {font-size: 1.999rem;}
.heading--secondary {font-size: 1.414rem;}
.thumbnail__links {
  align-self: flex-end;
  width: 100%;
}
.thumbnail__links a {
  font-size: 1rem;
  color: #fff;
  &:focus,
  &:hover {color: rgba(255,255,255,.5);}
}
.signup__form {
  padding: 2.5rem;
  background: #fafafa;
}
label {
  font-size: .85rem;
  text-transform: uppercase;
  color: #ccc;
}
.form-control {
  background-color: transparent;
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-radius: 0;
  &:focus {border-color: #111;}
}
[type="text"] {color: #111;}
[type="password"] {color: #111;}
.btn--form {
  padding: .5rem 2.5rem;
  font-size: .95rem;
  font-weight: 600;
  text-transform: uppercase;
  color: #fff;
  background: #111;
  border-radius: remy(35px);
  &:focus,
  &:hover {background: lighten(#111, 13%);}
}
.signup__link {
  font-size: .8rem;
  font-weight: 600;
  text-decoration: underline;
  color: #999;
  &:focus,
  &:hover {color: darken(#999, 13%);}
}
</style>
</head>




<!-- body header -->
<div>
    <h1 class="display-4" style="padding-bottom: 2%;
text-align: center;
padding-top: 3%;">Buyer Registeration</h1>
</div>

<div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">

      <h1 class="logo__text">Spectre</h1>
    </div>
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary">Welcome to MI6.</h1>
      <h2 class="heading--secondary">Are you ready to join the elite?</h2>
    </div>
    <div class="thumbnail__links">
      <ul class="list-inline m-b-0 text-center">
        <li><a href="http://alexdevero.com/" target="_blank"><i class="fa fa-globe"></i></a></li>
        <li><a href="https://www.behance.net/alexdevero" target="_blank"><fa class="fa fa-behance"></fa></a></li>
        <li><a href="https://github.com/alexdevero" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="https://twitter.com/alexdevero" target="_blank"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div>
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
    <form action="#">
      <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" type="text" name="username" id="username" placeholder="james.bond" required />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" id="email" placeholder="james.bond@spectre.com" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="********" required />
      </div>
      <div class="form-group">
        <label for="passwordRepeat">Repeat Password</label>
        <input class="form-control" type="password" name="passwordRepeat" id="passwordRepeat" placeholder="********" required />
      </div>
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Register" />
          </li>
          <li>
            <a class="signup__link" href="#">I am already a member</a>
          </li>
        </ul>
      </div>
    </form>
  </div>
</div>






<!-- //body header -->
<!-- form -->
<form form class="container" id="needs-validation" novalidate style="width:75%; margin:0 auto;" action="/buyer-signup" method="POST">
    {{ csrf_field() }}
    <div class="form-row">
        <div class="form-group col-md-6" style="padding-left:0; padding-right:0; ">

            <label id="form" for="Name">Name</label>

            <input type="text" class="form-control" id="Name" placeholder="Name" name="Name" required>

        </div>

        <div class="form-group col-md-6" style="padding-right:0; padding-left:0; ">
            <label id="form" for="Surname">Surname</label>

            <input type="text" class="form-control" id="Surname" placeholder="Surname" name="Surname" required>

        </div>

    </div>
    <div class="form-group row">
        <label id="form" for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="Email" placeholder="Email" name="Email" required>

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="Password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="Password" placeholder="Password" required name="Password">

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="ConfirmPassword" class="col-sm-2 col-form-label">Confirm password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="ConfirmPassword" placeholder="Password" required>

        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <label id="form" class="col-form-legend col-sm-2">Gender</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <label id="form" class="form-check-label" style="padding-right: 1rem;">
                        <input class="form-check-input" type="radio" name="Gender" id="gridRadios1" value="M" checked> Male
                    </label>

                    <label id="form" class="form-check-label" style="padding-right: 1rem;">
                        <input class="form-check-input" type="radio" name="Gender" id="gridRadios2" value="F"> Female
                    </label>

                    <label id="form" class="form-check-label">
                        <input class="form-check-input" type="radio" name="Gender" id="gridRadios3" value="O"> Other

                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <label id="form" for="Tel" class="col-sm-2 col-form-label">Telephone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Tel" placeholder="Tel" name="Tel" required>

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="IMGURL" class="col-sm-2 col-form-label">Image URL</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="IMGURL" placeholder="Link URL" required name="IMGURL">

        </div>
    </div>
    <div class="form-group">
        <label id="form" for="Address">Address</label>
        <textarea class="form-control" id="Address" rows="3" name="Address" required></textarea>

    </div>
    <div class="form-group row">
        <div class="col-md-12">
            <button type="submit" class="btn" style="font-size: 1.2rem;
    width: 100%;
    border-radius: 0px;
    background-color: #fda30e;
    color:white;">SIGN UP</button>
        </div>
    </div>
</form>
</div>
<!-- //form -->
@stop
