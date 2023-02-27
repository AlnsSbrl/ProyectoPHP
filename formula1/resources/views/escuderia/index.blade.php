@extends('layouts.app')

@section('template_title')
    Escuderia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Escuderia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('escuderias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre Escuderia</th>
										<th>Nacionalidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($escuderias as $escuderia)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $escuderia->nombre }}</td>
											<td>{{ $escuderia->nacionalidad }}</td>

                                            <td>
                                                <form action="{{ route('escuderias.destroy',$escuderia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('escuderias.show',$escuderia->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('escuderias.edit',$escuderia->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $escuderias->links() !!}
            </div>
        </div>
    </div>
@endsection
