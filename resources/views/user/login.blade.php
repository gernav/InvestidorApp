<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Investindo</title>
<link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
</head>
<body>

    <div class="background"></div>
    
    <section id="conteudo-view" class="login">

        <h1>Investindo</h1>
        <h3>O nosso gerenciador de investimentos</h3>
        
        {!! Form::open(['route'=> 'user.login', 'method'=> 'post']) !!}

            <p>Acesse o sistema</p>

            <label for="">
                {!! Form::text('username', null, ['class' => 'input', 'placeholder' => 'Usuário']) !!}
            </label>
            <label for="">
                {!! Form::password('password', ['placeholder' => 'Senha']) !!}
            </label>

            {!! Form::submit('Entrar') !!}
        {!! Form::close() !!}
    </section>
</body>
</html>