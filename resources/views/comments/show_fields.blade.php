<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $comment->id !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $comment->descripcion !!}</p>
</div>

<!-- Calificacion Field -->
<div class="form-group">
    {!! Form::label('calificacion', 'Calificacion:') !!}
    <p>{!! $comment->calificacion !!}</p>
</div>

<!-- Hotel Id Field -->
<div class="form-group">
    {!! Form::label('hotel_id', 'Hotel Id:') !!}
    <p>{!! $comment->hotel_id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $comment->user_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $comment->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $comment->updated_at !!}</p>
</div>

