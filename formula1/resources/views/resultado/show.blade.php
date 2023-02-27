@extends('layouts.app')

@section('template_title')
    {{ $resultado->name ?? 'Show Resultado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Resultado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('resultados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Circuit Id:</strong>
                            {{ $resultado->circuit_id }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Piloto:</strong>
                            {{ $resultado->numero_piloto }}
                        </div>
                        <div class="form-group">
                            <strong>Posicion:</strong>
                            {{ $resultado->posicion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
