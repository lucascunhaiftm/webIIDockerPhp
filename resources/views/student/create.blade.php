@extends('layouts.default')
@section('content')
<div class="container">
    @if (!empty($student))
        <form action="{{ route('student.update', $student) }}" class="was-validated" method="POST">
            @method('PUT')
    @else
        <form action="{{ route('student.store') }}" class="was-validated" method="POST">
    @endif

        <!-- Necessário para funcionar a autenticação do usuário e verificar autorização -->
        @csrf
        <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" placeholder="Nome" name="name" required value="{{ !empty($student) ? $student->name :'' }}">
        <div class="invalid-feedback">Preencha o nome</div>
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required value="{{ !empty($student) ? $student->email : ''}}">
        <div class="invalid-feedback">Preencha o email</div>
        </div>
        <div class="form-group">
        <label for="celphone">Telefone:</label>
        <input type="number" class="form-control" id="celphone" placeholder="Celular" name="celphone" required value="{{ !empty($student) ? $student->celphone : ''}}">
        <div class="invalid-feedback">Preencha o celular</div>
        </div>
        <div class="form-group">
        <label for="registration_number">Matricula:</label>
        <input type="number" class="form-control" id="registration_number" placeholder="Matricula" name="registration_number" required value="{{!empty($student) ? $student->registration_number : ''}}">
        <div class="invalid-feedback">Preencha a matricula</div>
        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
</div>
@stop