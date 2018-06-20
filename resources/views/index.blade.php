@extends('layouts.app')

@section('content')
    <h1>   Upcoming Lunch List</h1>
    <div class=main>
    <div class="col-xs-6">
        @foreach ($events as $event)
            <div class="panel panel-info">
              <div class="panel-heading">
                <h2 class="panel-title"><span class="glyphicon glyphicon-pencil">  About Event</span></h2>
              </div>
            <div class="panel-body">
                <div class = "lead">
                 {!! link_to_route('events.show', $event->title, ['title' => $event->id]) !!}
                <span class="glyphicon glyphicon-search"> </span>
                 </div>
                <br>
                ▼ Date: {{ $event->day }} {{ $event->timefrom }}-{{ $event->timeto }}
                <br>
                ▼ Theme: {{ $event->theme }}
            
                {!! Form::model($event, ['route' => ['events.destroy', $event->id], 'method' => 'delete']) !!}
                <br>
                {!! Form::submit('Delete Event', ['class' => 'btn btn-danger']) !!}
            </div>
            </div>
            {!! Form::close() !!}
            <br>
        @endforeach
   
        
    
        
        <?php //{!! link_to_route('events.create', 'Create New Event', null, ['class' => 'btn btn-info btn-lg']) !!}
        //{!! link_to_route('events.profile', 'My profile', null, ['class' => 'btn btn-info btn-lg']) !!} ?>
        <br>
        <br>
    </div>
    </div>
        
@endsection