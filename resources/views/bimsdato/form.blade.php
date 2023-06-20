<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $bimsdato->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('red1') }}
            {{ Form::text('red1', $bimsdato->red1, ['class' => 'form-control' . ($errors->has('red1') ? ' is-invalid' : ''), 'placeholder' => 'Red1']) }}
            {!! $errors->first('red1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('red2') }}
            {{ Form::text('red2', $bimsdato->red2, ['class' => 'form-control' . ($errors->has('red2') ? ' is-invalid' : ''), 'placeholder' => 'Red2']) }}
            {!! $errors->first('red2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('red3') }}
            {{ Form::text('red3', $bimsdato->red3, ['class' => 'form-control' . ($errors->has('red3') ? ' is-invalid' : ''), 'placeholder' => 'Red3']) }}
            {!! $errors->first('red3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('red4') }}
            {{ Form::text('red4', $bimsdato->red4, ['class' => 'form-control' . ($errors->has('red4') ? ' is-invalid' : ''), 'placeholder' => 'Red4']) }}
            {!! $errors->first('red4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $bimsdato->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $bimsdato->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicacionlink') }}
            {{ Form::text('ubicacionlink', $bimsdato->ubicacionlink, ['class' => 'form-control' . ($errors->has('ubicacionlink') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacionlink']) }}
            {!! $errors->first('ubicacionlink', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicaciontext') }}
            {{ Form::text('ubicaciontext', $bimsdato->ubicaciontext, ['class' => 'form-control' . ($errors->has('ubicaciontext') ? ' is-invalid' : ''), 'placeholder' => 'Ubicaciontext']) }}
            {!! $errors->first('ubicaciontext', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calendarlink') }}
            {{ Form::text('calendarlink', $bimsdato->calendarlink, ['class' => 'form-control' . ($errors->has('calendarlink') ? ' is-invalid' : ''), 'placeholder' => 'Calendarlink']) }}
            {!! $errors->first('calendarlink', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mision') }}
            {{ Form::text('mision', $bimsdato->mision, ['class' => 'form-control' . ($errors->has('mision') ? ' is-invalid' : ''), 'placeholder' => 'Mision']) }}
            {!! $errors->first('mision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vision') }}
            {{ Form::text('vision', $bimsdato->vision, ['class' => 'form-control' . ($errors->has('vision') ? ' is-invalid' : ''), 'placeholder' => 'Vision']) }}
            {!! $errors->first('vision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valores') }}
            {{ Form::text('valores', $bimsdato->valores, ['class' => 'form-control' . ($errors->has('valores') ? ' is-invalid' : ''), 'placeholder' => 'Valores']) }}
            {!! $errors->first('valores', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>