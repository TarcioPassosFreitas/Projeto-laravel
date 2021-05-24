<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONEJ</title>
    <style>
        body{
            background-image: url("{{asset('img/background_blue1.jpg')}}");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<body>
    <nav id="navbar" class="navbar navbar-light">
        <a class="navbar-brand" href=""></a>
        <ul class="nav nav-pills">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="true" >Search</a>
                <ul class="dropdown-menu" style="background: rgba(10,23,55,0.5)">
                    <form action="{{ route('search_general') }}" method="post" class="form">
                        @csrf
                        <button class="btn btn-outline-primary" type="submit"  name="searchGeneral">Search General</button>
                    </form>
                    <div class="input-group">

                        <form action="{{ route('company_search') }}" method="post" class="form form-inline">
                            @csrf
                            <input type="text" name="Search" placeholder="Search:" class="form-control">
                            <button type="submit" class="btn btn-outline-primary">Search Company</button>

                        </form>


                    </div>

                </ul>
            </li>
          <li class="nav-item">

            <form action="{{ route('search_ecompJr') }}" method="post" class="form">
                @csrf
                <button class="btn btn-outline-primary" type="submit" name="search">See EcompJr</button>
            </form>
          </li>

        </ul>
    </nav>



<div class="container" >
        <a class="links" id="paracadastro"></a>
        <a class="links" id="paracadastro2"></a>
        <a class="links" id="paralogin"></a>

    <div class="content">
          <!--FORMULÁRIO DE LOGIN-->
        <div id="login">
            <form method="post" action="{{ route('login_user') }}">
              @csrf
              <h1>Login</h1>
              <p>
                <label for="email_login">Seu e-mail</label>
                <input id="email_login" name="email_login" required="required" type="text" placeholder="contato@htmlecsspro.com"/>
              </p>

              <p>
                <label for="senha_login">Sua senha</label>
                <input id="senha_login" name="senha_login" required="required" type="password" placeholder="1234" />
              </p>

              <p>
                <input type="submit" value="Logar" />
              </p>
            </form>
              <p class="link">
                <a href="#paracadastro">Register Federation</a>
                <a href="#paracadastro2">Register company</a>
              </p>


        </div>

          <!--foda-se-->
        <div id="cadastro2">

            <form method="post" action="{{ route('save_company') }}">
            @csrf
              <h1>Cadastro</h1>


              <div class="form-group">
                <label for="exampleFormControlSelect1">Name Federation</label>
                <select class="form-control" id="exampleFormControlSelect1" name="federation_id">

                    @foreach ($values as $value)
                        <option name="federation_id" value="{{ $value->id }} " >{{$value->name}}</option>
                    @endforeach
                </select>
              </div>
              <p>
                <p>
                    <label for="name">Name EJ</label><input type="text" name="name" id="name" placeholder="Company lastday" required="required" >
                </p>


                <p>
                    <label for="email">Your E-mail</label><input type="email" name="email" id="email" placeholder="Luiz Augusto" required="required">
                </p>

                <p>
                    <label for="password">Your password</label><input type="password" name="password" id="password" placeholder="Sys123456" required="required">
                </p>


              <p>
                <input type="submit" value="Cadastrar"/>
              </p>


            </form>
            <p class="link">
                <a href="#paralogin"> send Login </a>
              </p>
        </div>

          <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">

            <form action="{{ route('save_federation') }}" method="POST">
            @csrf
                <h1>Cadastro</h1>
                @if (isset($errors) && count($errors) > 0)
                        <div class="alert alert-danger">

                        @foreach ($errors->all() as $error)
                            <li style="font-size: 8px">{{$error}}</li>

                    @endforeach
                    </div>
                @endif
                <p>
                    <label for="namefederation">Name Federation</label><input type="text" name="namefederation" id="namefederation" placeholder="Federation Norte" required="required" >
                </p>

                <p>
                    <label for="state">Your State</label><input type="text" name="text" id="state" placeholder="Bahia" required="required">
                </p>

                <p>
                    <label for="emailfederation">Your E-mail</label><input type="email" name="emailfederation" id="emailfederation" placeholder="Luiz Augusto" required="required">
                </p>

                <p>
                    <label for="passwordfederation">Your password</label><input type="password" name="passwordfederation" id="passwordfederation" placeholder="Luiz Augusto" required="required">
                </p>

                <p>
                    <input type="submit" value="Cadastrar"/>
                </p>


            </form>
            <p class="link">
                <a href="#paralogin"> Send Login </a>
              </p>
        </div>




    </div>
</div>














       </nav>


       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </header>





    <style>




        /* CSS reset */
*, *:before, *:after {
  margin:0;
  padding:0;
  font-family: Arial,sans-serif;
}

body{
  margin:10px;
}

a{
  text-decoration: none;
}

/* esconde as ancoras da tela */
a.links{
  display: none;
}

/* content que contem os formulários */
.content{
  width: 500px;
  margin: 0px auto;
  position: relative;
}

/* formatando o cabeçalho dos formulários */
h1{
  font-size: 48px;
  color: #066a75;
  padding: 10px 0;
  font-family: Arial,sans-serif;
  font-weight: bold;
  text-align: center;
  padding-bottom: 30px;
}
h1:after{
  content: ' ';
  display: block;
  width: 100%;
  height: 2px;
  margin-top: 10px;
  background: -webkit-linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%);
  background: linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%);
}

p{
  margin-bottom:15px;
}
p:first-child{
  margin: 0px;
}
label{
  color: #405c60;
  position: relative;
}

/**** advanced input styling ****/
/* placeholder */
::-webkit-input-placeholder  {
  color: #bebcbc;
  font-style: italic;
}
input:-moz-placeholder,
textarea:-moz-placeholder{
  color: #bebcbc;
  font-style: italic;
}
input {
  outline: none;
}

input:not([type="checkbox"]){
  width: 95%;
  margin-top: 4px;
  padding: 10px;
  border: 1px solid #b2b2b2;

  -webkit-border-radius: 3px;
  border-radius: 3px;

  -webkit-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
  box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;

  -webkit-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

/*estilo do botão submit */
input[type="submit"]{
  width: 100%!important;
  cursor: pointer;
  background: #3d9db3;
  padding: 8px 5px;
  color: #fff;
  font-size: 20px;
  border: 1px solid #fff;
  margin-bottom: 10px;
  text-shadow: 0 1px 1px #333;

  -webkit-border-radius: 5px;
  border-radius: 5px;

  transition: all 0.2s linear;
}
input[type="submit"]:hover{
  background: #4ab3c6;
}

/*marcando os links para mudar de um formulário para outro */
.link{
  position: absolute;
  background: #e1eaeb;
  color: #7f7c7c;
  left: 0px;
  height: 20px;
  width: 440px;
  padding: 4px 30px 30px 30px;
  font-size: 16px;
  text-align: left;
  border-top: 1px solid #dbe5e8;

  -webkit-border-radius: 0 0  5px 5px;
  border-radius: 0 0  5px 5px;
}
.link a {
  font-weight: bold;
  background: #f7f8f1;
  padding: 6px;
  color: rgb(29, 162, 193);
  margin-left: 10px;
  border: 1px solid #cbd518;

  -webkit-border-radius: 4px;
  border-radius: 4px;

  -webkit-transition: all 0.4s linear;
  transition: all 0.4s  linear;
}
.link a:hover {
  color: #39bfd7;
  background: #f7f7f7;
  border: 1px solid #4ab3c6;
}

/* estilos para para ambos os formulários */
#cadastro,
#cadastro2,
#login{
  position: absolute;
  top: 0px;
  width: 88%;
  padding: 18px 6% 60px 6%;
  margin: 0 0 35px 0;
  background: rgb(247, 247, 247);
  border: 1px solid rgba(147, 184, 189,0.8);

  -webkit-box-shadow: 5px;
  border-radius: 5px;

  -webkit-animation-duration: 0.5s;
  -webkit-animation-timing-function: ease;
  -webkit-animation-fill-mode: both;

  animation-duration: 0.5s;
  animation-timing-function: ease;
  animation-fill-mode: both;
}

#paracadastro:target ~ .content #cadastro,
#paracadastro2:target ~ .content #cadastro2,
#paralogin:target ~ .content #login{
  z-index: 2;
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;

  -webkit-animation-delay: .1s;
  animation-delay: .1s;
}
#registro:target ~ .content #login,
#paralogin:target ~ .content #cadastro,
#paralogin:target ~ .content #cadastro2{
  -webkit-animation-name: fadeOutLeft;
  animation-name: fadeOutLeft;
}

/*fadeInLeft*/
@-webkit-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
}

@keyframes fadeInLeft {
  0% {
    opacity: 0;
    transform: translateX(-20px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}

/*fadeOutLeft*/
@-webkit-keyframes fadeOutLeft {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
  }
}

@keyframes fadeOutLeft {
  0% {
    opacity: 1;
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    transform: translateX(-20px);
  }
}


    </style>
</div>
</body>
</html>
