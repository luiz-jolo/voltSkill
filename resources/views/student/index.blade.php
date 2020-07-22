@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Estudantes

                    <div class="card-body">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <div class="text-right">
                                        <a href="" class="btn btn-outline-primary btn-sm">+ Novo Registro</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table-list
                                v-bind:titles="['#','teste','descricao']"
                                v-bind:itens="[
                            [1,'curso de TADS', 'descricao tecnologia'],
                            [2,'curso de RH', 'descricao recursos humanos'],
                            [3,'curso de ADM', 'descricao administrativo']
                            ]">

                            </table-list>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
