<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('img', 'Imagen') }}
            {{ Form::file('img', ['class' => 'form-control' . ($errors->has('img') ? ' is-invalid' : '')]) }}
            {!! $errors->first('img', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
