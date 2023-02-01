@extends('main')

@section('main-content')
<title>The Tasks</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="/app.css">
<div class="aa">
    <div class="float-start">
        <h4 class="pb-3">The tasks</h4>
    </div>
    <div class="float-end">
    <a class="btnn" href="{{route('task.create')}}"> New Task<img src="https://www.htmlcssbuttongenerator.com/iconExample-plus-square-multiple-lined.svg" style="width:15px; margin-left:3px; margin-right:3px; flex-direction: row-reverse;"></a>

    </div>
    
    <div class="clearfix"></div>
</div>
@foreach ($tasks as $task)
    <div class="aa">
        <div class="titledesc">
            <div class="title1" >
                    {{$task->title}}                   
                    <div class="float-end">
                     <a href="{{route('task.edit',$task->id)}}" class="edit"><i class="fa fa-edit"></i>Edit Task</a>
                    <form action="{{ route ('task.destroy', $task->id) }}"  style="display:inline" method="POST">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn"><i class="fa fa-trash"></i> Delete</button>
                    </form>
                     
            </div>
              </div>
              <div class="descrip">
              {{$task->description}}                 
                </div>
        </div><br>
    </div>
    

    @endforeach
    @if (count($tasks) === 0)
    <div class="alert alert-danger p-2, aa">
            No Task Found. Please Create one Task
            <br>
            <a class="btnn" href="{{route('task.create')}}"> New Task<img src="https://www.htmlcssbuttongenerator.com/iconExample-plus-square-multiple-lined.svg" style="width:15px; margin-left:3px; margin-right:3px; flex-direction: row-reverse;"></a>

    </div>       
    @endif
@endsection