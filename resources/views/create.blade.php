@extends('layouts.app')

@section('content')
    
    <div class="alert alert-info" role="alert"><h1>CREATE A NEW LUNCH INVITATION</h1></div>
        <div class="col-xs-4">
            <div class="lead">
                {!! Form::model($events, ['route' => 'events.index']) !!}<br>
        
                <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                {!! Form::label('day', 'Date:') !!}
                {!! Form::date('day', '6/15/2018', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                {!! Form::label('timefrom', 'From:') !!}
                {!! Form::time('timefrom', '00:00', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                {!! Form::label('timeto', 'To:') !!}
                {!! Form::time('timeto', '00:00', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                <label>Place:</label>
                <br>
                <input type="radio" name="place" value="9F Cafeteria">9F Cafeteria
                <br><input type="radio" name="place" value="22F Cafeteria">22F Cafeteria
                <br><input type="radio" name="place" value="Outside">Outside
                </div>
                
                
                <div class="form-group">
                {!! Form::label('theme', 'Theme:') !!}
                <br>
                {{ Form::select('theme', ['' => 'Select!','Sports' => 'Sports','Animals' => 'Animals', 'Travel' => 'Travel', 'Beauty' => 'Beauty', 'Career' => 'Career', 'Business' => 'Business', 'Politics' => 'Politics', 'TV' => 'TV', 'Anime' => 'Anime', 'Music' => 'Music', 'Movie' => 'Movie', 'Food' => 'Food', 'Region' => 'Region', 'Global' => 'Global', 'Book' => 'Book', 'Health' => 'Health', 'Money' => 'Money', 'Others' => 'Others'], null, ['class' => 'form', 'id' => 'pref_id']) }}
                </div>
            
            </div>
            
        (Those who have chosen 'Others' write the theme into the details box below.)
            
            <div class="lead">
                <br>
                <div class="form-group">
                {!! Form::label('details', 'Details:') !!}<br>
                <pre>{!! Form::textarea('details', null, ['class' => 'form-control','placeholder'=>"イベントの詳細を記入してください。"]) !!}</pre>
                </div>
            
                <div class="form-group">
                {!! Form::label('maxpeople', 'Max People:') !!}
                <br>
                {!! Form::text('maxpeople', '5' ) !!}people
                </div>
                
                <br>
                
                <div class="form-group">
                {!! Form::submit('CREATE EVENT', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                </div>
                
                <div> 
                <br>
                {!! link_to_route('events.index', 'TOPへ戻る', null, ['class' => 'btn btn-primary']) !!}
                </div>
        </div>
    </div>
     
@endsection


