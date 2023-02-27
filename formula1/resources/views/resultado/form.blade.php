<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('circuit_id') }}
            {{ Form::select('circuit_id',$circuitos, $resultado->circuit_id, ['class' => 'form-control' . ($errors->has('circuit_id') ? ' is-invalid' : ''), 'placeholder' => 'Circuit Id']) }}
            {!! $errors->first('circuit_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_piloto') }}
            {{ Form::select('numero_piloto',$pilotos, $resultado->numero_piloto, ['class' => 'form-control' . ($errors->has('numero_piloto') ? ' is-invalid' : ''), 'placeholder' => 'Numero Piloto']) }}
            {!! $errors->first('numero_piloto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('posicion') }}
            {{ Form::text('posicion', $resultado->posicion, ['class' => 'form-control' . ($errors->has('posicion') ? ' is-invalid' : ''), 'placeholder' => 'Posicion']) }}
            {!! $errors->first('posicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
