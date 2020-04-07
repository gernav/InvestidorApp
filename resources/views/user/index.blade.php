@extends('templates.master')


@section('css-view')
@endsection

@section('conteudo-view')

    @if(session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif
    
    {!! Form::open(['route' => 'user.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
        @include('templates.formularios.input', ['label' => 'CPF', 'input' => 'cpf', 'attributes' => ['placeholder' => 'CPF']])
        @include('templates.formularios.input', ['input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
        @include('templates.formularios.input', ['input' => 'phone', 'attributes' => ['placeholder' => 'Telefone']])
        @include('templates.formularios.input', ['input' => 'email', 'attributes' => ['placeholder' => 'E-mail']])
        @include('templates.formularios.password', ['input' => 'password', 'attributes' => ['placeholder' => 'Senha']])
        @include('templates.formularios.submit', ['input' => 'Cadastrar'])
    {!! Form::close() !!}

@endsection