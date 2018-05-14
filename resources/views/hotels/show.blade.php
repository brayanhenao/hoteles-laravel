@extends('layouts.app2')
@section('css')
    <style>
        h1 {
            font-family: 'Skranji', cursive;
        }

        a {
            font-family: 'Skranji', cursive;
        }

        body {
            font-family: 'Skranji', cursive;
        }

        .container{
            font-family: 'Skranji', cursive;
        }

        .imagen {
            padding-top: 3%;
            align-content: center;
            text-align: center;
        }

        .comment {
            margin: 0 17% 0 17%;
            text-align: justify;
        }
    </style>
@endsection
@section('content')
    <div class="col-md-5"></div>
    <div class="col-md-5">
        <h1> {{$hotel->nombre}}</h1>
    </div>
    <div class="col-md2" style="padding-top: 1%">
        <a href="{!! route('hotels.index') !!}" class="btn btn-default">Atrás</a>
    </div>

    <div class="imagen">
        <img style="width: 700px;height: 700px" src="{{$hotel->imagen}}">
    </div>

    <div class="container">


        <h3 style="text-align: center;"><strong>Calificación: {{$hotel->estrellas}} </strong><i
                    class="glyphicon glyphicon-star"></i></h3>
    </div>
    <br>
    <div class="comment">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante
        dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce
        nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.

        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales
        ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque
        sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi
        lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet.

        Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum
        velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante.
        Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla
        facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien.
        Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit.

        Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis
        sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
        cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue
        elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas
        et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim.

        Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia
        sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis,
        venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. Aenean
        laoreet.

        Vestibulum nisi lectus, commodo ac, facilisis ac, ultricies eu, pede. Ut orci risus, accumsan porttitor, cursus
        quis, aliquet eget, justo. Sed pretium blandit orci. Ut eu diam at pede suscipit sodales. Aenean lectus elit,
        fermentum non, convallis id, sagittis at, neque. Nullam mauris orci, aliquet et, iaculis et, viverra vitae,
        ligula. Nulla ut felis in purus aliquam imperdiet. Maecenas aliquet mollis lectus. Vivamus consectetuer risus et
        tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus
        ante dapibus diam. Sed nisi.

        Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue
        semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent
        per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.
        Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis.

        Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel,
        suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus,
        ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti
        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non
        tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi.

        Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam.
        Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.
        Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum
        ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui.
        Praesent blandit dolor.

        Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec
        lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices
        ultrices enim. Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer
        lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor.


        <br>
        <br>
        <h3><strong>Comentarios:</strong></h3>
        @foreach($hotel->comentarios as $comentario)
            <div class="comentarios">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            {{ App\User::where([['id', '=', $comentario->user_id],])->first()->name }}
                            - {{$comentario->calificacion}} <i class="glyphicon glyphicon-star"></i> <span
                                    style="margin-right: 50%">&emsp;</span> {!!$comentario->created_at->format('D d/M/Y H:i')!!}
                        </div>

                    </div>
                    <div class="panel-body">
                        {{$comentario->descripcion}}
                    </div>
                </div>
            </div>
        @endforeach
        <br>
    </div>

@endsection
