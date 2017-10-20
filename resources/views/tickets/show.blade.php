@extends('layouts.app')

@section('content')
    <!-- Title -->
    <h1 class="mt-4">{{ $ticket->title }}</h1>

    <!-- Author -->
    <p class="lead">
        by
        <a href="#">{{ $ticket->user->name }}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>Posted on {{ $ticket->created_at->diffForHumans() }}</p>
    <p>Status: {{ $ticket->status->label }}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="{{ $ticket->image }}" alt="">

    <hr>

    <!-- Post Content -->
    <p class="lead">{{ $ticket->body }}</p>

    {{--<hr>--}}

    {{--<div class="card my-4">--}}
    {{--<h5 class="card-header">Leave a Comment:</h5>--}}
    {{--<div class="card-body">--}}
    {{--<form>--}}
    {{--<div class="form-group">--}}
    {{--<textarea class="form-control" rows="3"></textarea>--}}
    {{--</div>--}}
    {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="media mb-4">--}}
    {{--<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
    {{--<div class="media-body">--}}
    {{--<h5 class="mt-0">Commenter Name</h5>--}}
    {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,--}}
    {{--vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec--}}
    {{--lacinia congue felis in faucibus.--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="media mb-4">--}}
    {{--<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
    {{--<div class="media-body">--}}
    {{--<h5 class="mt-0">Commenter Name</h5>--}}
    {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,--}}
    {{--vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec--}}
    {{--lacinia congue felis in faucibus.--}}

    {{--<div class="media mt-4">--}}
    {{--<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
    {{--<div class="media-body">--}}
    {{--<h5 class="mt-0">Commenter Name</h5>--}}
    {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras--}}
    {{--purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi--}}
    {{--vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="media mt-4">--}}
    {{--<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
    {{--<div class="media-body">--}}
    {{--<h5 class="mt-0">Commenter Name</h5>--}}
    {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras--}}
    {{--purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi--}}
    {{--vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}


@endsection
