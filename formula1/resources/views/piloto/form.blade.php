<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre_completo') }}
            {{ Form::text('nombre_completo', $piloto->nombre_completo, ['class' => 'form-control' . ($errors->has('nombre_completo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Completo']) }}
            {!! $errors->first('nombre_completo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nacionalidad') }}
            {{ Form::text('nacionalidad', $piloto->nacionalidad, ['class' => 'form-control' . ($errors->has('nacionalidad') ? ' is-invalid' : ''), 'placeholder' => 'Nacionalidad']) }}
            {!! $errors->first('nacionalidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('escuderia') }}
            {{ Form::select('escuderia_id',$escuderias, $piloto->escuderia_id, ['class' => 'form-control' . ($errors->has('escuderia_id') ? ' is-invalid' : ''), 'placeholder' => 'Escuderia']) }}
            {!! $errors->first('escuderia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
