@extends('main')

@section('main-content')
<title>Create Task</title>
<link rel="stylesheet" href="/app.css">
<div class="aa">
    <div class="float-start">
        <h4 class="pb-3">Edit Task </h4>
    </div>
    <div class="float-end">
        <a href="{{route('index')}}" class="myButton">
            All Task
        </a>
    </div>
    
    <div class="clearfix"></div>
</div>
<div class="aa">
            <form action="{{route ('task.update' , $task->id) }}"method="POST">
                  @csrf
                  @method('PUT')
                    <div class="title2">
                      <label for="titel" class="pp">Titel</label>
                      <input type="text" class="form-control" id="titel" name="title" value="{{$task->title}}">
                    </div>
                    <div class="descrip">
                    <label for="description" class="form-label">Description</label>
                      <textarea type="text" class="form-control" id="description" rows="5" name="description"> {{$task->description}}</textarea>
                    </div> 
                   <br>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>   
</div>
           
@endsection