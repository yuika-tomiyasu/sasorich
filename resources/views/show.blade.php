@extends('layouts.app')

@section('content')

    <div class="alert alert-info" role="alert"><h1>{{ $events->title }} の詳細ページ</h1></div>
        
         <div class="col-xs-6">
           
            <div class="panel panel-info">
                
                <div class="panel-heading">
                    <h2 class="panel-title"><span class="glyphicon glyphicon-pencil">About Event</span></h2>
                </div>
                
                <div class="lead">
                    <br>
                    <ul style="list-style:none;">
                    <li>
                    <span class="glyphicon glyphicon-calendar"></span>
                    &nbsp;&nbsp;{{ $events->month }}{{ $events->day }}
                    </li>
                    
                    <li>
                    <span class="glyphicon glyphicon-time"></span>
                    &nbsp;&nbsp;{{ $events->timefrom }}～{{ $events->timeto }}
                    </li>
                    
                    <li>
                    <span class="glyphicon glyphicon-map-marker"></span>
                    &nbsp;&nbsp;{{ $events->place }}
                    </li>
                    
                    <li>
                    <span class="glyphicon glyphicon-bullhorn"></span>
                    &nbsp;&nbsp;Theme&nbsp;:&nbsp;{{ $events->theme }}
                    </li>
                    
                    <li>
                    <span class="glyphicon glyphicon-paperclip"></span>
                    &nbsp;&nbsp;Details&nbsp;:&nbsp;{{$events->details }}
                    </li>
                    
                    <li><span class="glyphicon glyphicon-user"></span>
                    &nbsp;&nbsp;Max&nbsp;:&nbsp;{{ $events->maxpeople }}&nbsp;&nbsp;people
                    </li>
                    <br>
                </div>
            </div>
           
            <div class="form-group">
                {!! Form::submit('JOIN EVENT', ['class' => 'btn btn-primary']) !!}
            </div>
            
        </div>

@endsection