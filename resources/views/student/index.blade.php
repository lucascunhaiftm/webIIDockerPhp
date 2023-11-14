@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <a href="{{ route('student.create') }}" class="m-4"><span class="btn bg-primary"> Adicionar estudante</span></a>
    </div>
    <table class="table table-light table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Matricula</th>
                <th scope="col">Telefone</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->registration_number}}</td>
                <td>{{$student->celphone}}</td>
                <td class="px-6 py-4">
                    <a href="{{ route('student.edit', $student) }}" class="btn bg-secondary">Editar</a>
                </td>
                <td class="px-6 py-4">
                    <form method="POST" action="{{ route('student.destroy', $student) }}" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-danger rounded">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop