<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $departamento->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-2" style="display: flex;">
        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="btn btn-primary" style="margin-left: 5px">
            <a href="{{ route('ciudads.index') }}" style="color: white; text-decoration: none;">
                Volver
            </a>
        </div>
    </div>
</div>
