<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Calificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calificacion', 'Calificacion:') !!}
    {!! Form::number('calificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Hotel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotel_id', 'Hotel Id:') !!}
    {!! Form::select('hotel_id', $hotels , null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $users , null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('comments.index') !!}" class="btn btn-default">Cancel</a>
</div>
