@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-4">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <card-dashboard
                            titulo="Cursos"
                            descricao="Descrição teste para estudante"
                            imagem="voltskill_book.png"
                            rota="{{ route('student.index') }}"
                            >
                            </card-dashboard>
                        </div>
                        <div class="col-md-4">
                            <card-dashboard
                                titulo="Financeiro"
                                descricao="Descrição teste para estudante"
                                imagem="voltskill_finances.png"
                                rota="{{ route('student.index') }}"
                            >
                            </card-dashboard>
                        </div>
                        <div class="col-md-4">
                            <card-dashboard
                                titulo="Estudantes"
                                descricao="Descrição teste para estudante"
                                imagem="voltskill_students.png"
                                rota="{{ route('student.index') }}"
                            >
                            </card-dashboard>
                        </div>
                    </div>
        {{--  pode-se usar a rota da imagem no modelo do link deste card
        <img src="{{ url('storage/images/voltskill_book.png') }}" alt="">--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
