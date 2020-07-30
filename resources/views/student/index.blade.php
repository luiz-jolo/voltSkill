@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <card-header-action titulo="Estudantes" titulobotao="Novo Registro" link="{{ route('student.create') }}">
                        </card-header-action>
                    </div>
                    <div class="card-body">
                        <table-list
                            v-bind:titles="['#','teste','descricao']"
                            v-bind:itens="[
                        [1,'TADS', 'descricao tecnologia'],
                        [2,'RH', 'descricao recursos humanos'],
                        [3,'ADM', 'descricao administrativo x'],
                        [4,'Engenharia', 'descricao engenharia'],
                        [5,'Licenciatura X', 'descricao lic']
                        ]"
                        criar="#criar" visualizar="#visualizar" editar="#editar" deletar="#deletar" token="123456"
                        ></table-list>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
