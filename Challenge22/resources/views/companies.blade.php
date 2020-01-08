<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brainster Labs Results</title>


    <style>

    body {
        background-image:url('img/hehe.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }

    h1 {
        text-align: center;
        background-color:yellow;
        opacity:0.7;
        font-weight: bold;
        font-size:60px;
        margin-top:25%;
    }
    .profile {
        text-align: center;
        border:3px solid red;
        border-style: double;
        background-color: beige;
        opacity: 0.7;
        width:30%;
    }
    p {
        font-weight: bolder;
        font-size:1.6em;
    }
    a {
        font-size:1.5em;
        text-decoration: underline tomato;
        color:blue;
        font-weight: bolder;
    }

    </style>
</head>
<body>

    <h1>УСПЕШНО СЕ ПРИЈАВИВТЕ!</h1>

    <div class="profile">
    <p>Компанија: {{$company->company}}</p>
    <p>Порака за потврда е испратена на вашиот Е-мејл</p>
    <p>Ве молиме најавете се и поврдете го вашиот Е-мејл: <span style="color:red;">{{$company->email}}</span></p>
    <p>Телефон: {{$company->number}}</p>
    <a href="{{route('home')}}">Назад</a>
    </div>



</body>
</html>
