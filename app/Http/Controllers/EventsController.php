<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;
use App\User;

class EventsController extends Controller
{
    
    public function index()
    {
        $events = Event::all();
        $users = User::all();
        $a = $events->toArray();
            
        return view('index', [
            'events' => $events,
            'users' => $users,
                        'a' => $a,
        ]);
    }
    
    public function show($id)
    {
        $events = Event::find($id);

        return view('show', [
            'events' => $events,
        ]);
    }
    
    public function create()
    {
        $events = new Event;

        return view('create', [
            'events' => $events,
        ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);
        $request->user()->microposts()->create([
            'content' => $request->content,
            ]);
        
        $event = new Event;
        $event->title = $request->title;
        $event->day = $request->day;
        $event->timefrom = $request->timefrom;
        $event->timeto = $request->timeto;
        $event->place = $request->place;
        $event->theme = $request->theme;
        $event->details = $request->details;
        $event->maxpeople = $request->maxpeople;
        
        $event->save();
        
        return redirect('/');

    }
    
    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', [
            'categories' => $categories,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->title = $request->title;
        $event->day = $request->day;
        $event->timefrom = $request->timefrom;
        $event->timeto = $request->timeto;
        $event->place = $request->place;
        $event->theme = $request->theme;
        $event->details = $request->details;
        $event->maxpeople = $request->maxpeople;
        $event->save();

        return redirect('/');
    }
    
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        
        return redirect('/');
    }
    
    public function createpage()
    {
        $events = Event::all();
        $users = User::all();
        $a = $events->toArray();
        
        return view('create', [
            'events' => $events,
            'users' => $users,
            'a' => $a,
        ]);
    }
    
    public function top(){
        return redirect('/');
    }
    
    public function profile(){
                $events = Event::all();
        $users = User::all();
        $a = $events->toArray();
        return view('profile', [
            'events' => $events,
            'users' => $users,
            'a' => $a,
        ]);
    }
}
