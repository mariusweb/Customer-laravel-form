@extends('index')

@section('form')
{!! Form::open(['route' => 'pardavimai.store']) !!}
<fieldset>
<div class="form-group">
    {{  Form::label('darbuotojas_id', 'Darbuotojas:', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::select('darbuotojas_id', $darbuotojai, ), null, ['placeholder' => 'Pasirinkite darbuotoją...', 'class' => 'form-control' ]}}
    </div>
</div>
<div class="form-group">
    {{   Form::label('aptarnavimas', 'Kaip vertinate aptarnavimo kokybę?', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        @for ($i = 1; $i <= 10; $i++)
            <div class="radio">
                {!! Form::label('aptarnavimas'.$i.'', ''.$i.'.') !!}
                {!! Form::radio('aptarnavimas', ''.$i.'') !!}
            </div>
        @endfor

    </div>
</div>
<div class="form-group">
    {{   Form::label('rekomendacija', 'Kokia tikimybė, kad rekomenduosite mus savo draugams?', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">

        @for ($i = 1; $i <= 10; $i++)
            <div class="radio">
                {!! Form::label('rekomendacija'.$i.'', ''.$i.'.') !!}
                {!! Form::radio('rekomendacija', ''.$i.'') !!}
            </div>
        @endfor

    </div>
</div>
<div class="form-group">
    {{   Form::label('greitis', 'Kaip vertinate aptarnavimo greitį?', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">

        @for ($i = 1; $i <= 10; $i++)
            <div class="radio">
                {!! Form::label('greitis'.$i.'', ''.$i.'.') !!}
                {!! Form::radio('greitis', ''.$i.'') !!}
            </div>
        @endfor

    </div>
</div>
        <div class="form-group">
            {!! Form::label('pastabos', 'Gal galite pakomentuoti kodėl pateikėte tokius vertinimus?', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::textarea('pastabos', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
            </div>
        </div>
       
<div class="form-group">
    {{   Form::label('sutikimas', 'Ar galėsime šį jūsų vertinimą panaudoti savo svetainėje
    ar socialiniuose puslapiuose?'), ['class' => 'col-lg-2 control-label'] }}
    <div class="col-lg-10">
        {{ Form::hidden('sutikimas', 0) }}
        {{ Form::checkbox('sutikimas', 1) }}
    </div>
</div>
    </div>
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        {!! Form::submit('Siųsti', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
    </div>
</div>
    </fieldset>
            {!! Form::close() !!}
        
@endsection