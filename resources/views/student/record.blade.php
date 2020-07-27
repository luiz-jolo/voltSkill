@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <card-header-action titulo="Registro de Estudante" titulobotao="Listagem" link="{{ route('student.index') }}">
                        </card-header-action>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('student.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nome Completo</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Código de Registro</label>
                                    <input type="email" class="form-control" id="registro" name="registro" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
                                </div>
                            </div>
                            <button type="submit" class="btn  btn-primary">Salvar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
