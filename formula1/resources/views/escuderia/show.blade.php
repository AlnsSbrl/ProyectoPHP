@extends('layouts.app')

@section('template_title')
    {{ $escuderia->name ?? 'Show Escuderia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Escuderia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('escuderias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre</strong>
                            {{ $escuderia->nombre}}
                        </div>
                        <div class="form-group">
                            <strong>Nacionalidad:</strong>
                            {{ $escuderia->nacionalidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
