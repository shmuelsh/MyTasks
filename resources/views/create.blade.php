@extends('main')

@section('main-content')
<title>Create Task</title>
<link rel="stylesheet" href="/app.css">
<div class="aa">
    <div class="float-start">
        <h4 class="pb-3">Create Task</h4>
    </div>
    <div class="float-end">
        <a href="{{route('index')}}" class="myButton">
            All Task
        </a>
    </div>
    
    <div class="clearfix"></div>
</div>
<div class="aa">
            <form action="{{route ('task.store') }}"method="POST">
                  @csrf
                    <div class="title2">
                      <label for="titel" class="pp">Titel</label>
                      <input type="text" class="form-control" id="titel" name="title">
                    </div>
                    <div class="descrip">
                    <label for="description" class="form-label">Description</label>
                      <textarea type="text" class="form-control" id="description" rows="5" name="description"></textarea>
                    </div> 
                   <br>
                   <a href="{{route('index')}}" class="btn btn-secondary mr-2"><i class="fa fa-arrow-left">Cancel</i></a>
                    <button type="submit" class="myButton">
                      <i class="fa fa-check"></i>Save</button>
                  </form>   
</div>
           
@endsection