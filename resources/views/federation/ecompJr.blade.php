<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <img  src="{{URL::asset('/img/ecompJr.jpg')}}" id="main">
        <div class="square">
            <div class="block">

                <div class="centered">
                    <h1>Missão</h1>
                    <p>Através da vivência empresarial e trabalho em equipe, formar profissionais inovadores, comprometidos e capazes de vencer desafios futuros.</p>
                </div>

            </div>
            <div class="block2">

                <div class="centered">
                    <h1>Visão</h1>
                    <p>Ser uma empresa que realiza projetos de impacto, mais conectada ao movimento empresa Júnior e com grande reconhecimento dentro e fora da universidade.</p>
                </div>

            </div>
            <div class="block3">

                <div class="centered">
                    <h1>Valores</h1>
                    <p>Os valores de uma empresa guiam a conduta da mesma, portanto a EcompJr, baseia-se nos seguintes valores: Protagonismo, Cooperatividade, Assiduidade, Resiliência, Constância em resultados, evolução com os erros, Conexão com o movimento, Foco na qualidade, Ética e Empatia.</p>
                </div>

            </div>

            <a href="https://ecompjr.com.br/" class="btn btn-dark" role="button">Services</a>








      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .btn{
            margin-top: -38%;
            margin-left: 45%;
        }
        #main{
            position: relative;
            margin-top: 5%;
            margin-left: 35%;
        }
        .block{
            position: relative;
            text-align: center;
            background: #1a1a1a;
            width: 20%;
            height: 40%;
            margin-left:8%;
        }
        .block2{
            position: relative;
            text-align: center;
            background: #1a1a1a;
            width: 20%;
            height: 40%;
            margin-left:38%;
            margin-top:-5%;
        }
        .block3{
            position: relative;
            text-align: center;
            background: #1a1a1a;
            width: 25%;
            height: 40%;
            margin-left:70%;
            margin-top:-22%;
        }
        .centered {
            display: inline-block;
            vertical-align: middle;
            width: 80%;
            background: #222;
            color: #FFF;
            font-weight: bold
        }
    </style>

</body>
</html>
