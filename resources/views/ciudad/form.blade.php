<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('departamentos_id') }}
            {{ Form::select('departamentos_id', $departamentos, $ciudad->departamentos_id, ['class' => 'form-control' . ($errors->has('departamentos_id') ? ' is-invalid' : ''), 'placeholder' => 'Departamentos Id']) }}
            {!! $errors->first('departamentos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $ciudad->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
