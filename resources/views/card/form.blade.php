<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $card->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('img', 'Imagen') }}
            {{ Form::file('img', ['class' => 'form-control' . ($errors->has('img') ? ' is-invalid' : '')]) }}
            {!! $errors->first('img', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $card->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('link') }}
            {{ Form::text('link', $card->link, ['class' => 'form-control' . ($errors->has('link') ? ' is-invalid' : ''), 'placeholder' => 'Link']) }}
            {!! $errors->first('link', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::select('tipo', 
            [
                'CardsQueofrecemos' => 'Cards Que ofrecemos',
                'CardsNuestrosServicios' => 'Cards Nuestros Servicios',
                'CardsMarketing' => 'Cards Marketing',
                'CardsDesarrolloTecnologico' => 'Cards Desarrollo Tecnologico',
                'CardsBIMAnalytics' => 'Cards BIM Analytics',
                'CardsBIMStudio' => 'Cards BIM Studio',
                'CardsLineasNegocio' => 'Cards de Lineas de Negocio',
                'CarruselInicio' => 'Carrusel de Inicio',
                'CardsInicio' => 'Cards de Inicio',
                'CardsNoSomos' => 'Cards No somos',
                'Clientes' => 'Clientes'
            ], $card->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona una opción']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>