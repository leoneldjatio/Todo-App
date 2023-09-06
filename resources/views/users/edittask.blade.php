@extends('includes.layout')
@section('name')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Task</h1>
    @include('includes.message')
  </div>
  <div class="container">
      <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
              <div class="card mb-3" style="max-width: auto;">
                  <div class="card-body">
                      <h3 class="card-title text-warning px-3">Edit Task <i class="fas fa-hand-wave"></i></h3>
                      <div class="card-body">
                          <form action="{{route('user.task.update',$task->id)}}" method="POST">
                            @csrf
                            <div class="form-group mb-lg-4 mb-2">
                              <label for="exampleInputEmail1">Task Title</label>
                              <input type="text" name="task_title" class="form-control @error('task_title')
                                is-invalid
                                @enderror" id="task_title" value="{{$task->task_title}}" placeholder="Enter task title">
                                @error('task_title')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                              </div>
                              <div class="form-group mb-lg-4 mb-2">
                                <label for="exampleInputEmail1">Task Description</label>
                                <textarea name="task_description" id="task_description" cols="30" rows="10" class="form-control @error('task_description') is-invalid @enderror" placeholder="Enter Task Description">{{$task->task_description}}</textarea>
                                @error('task_description')
                                      <p class="text-danger">{{$message}}</p>
                                @enderror
                              </div>
                              <div class="form-group mb-lg-4 mb-2">
                                <label for="exampleInputPassword1">Select Due Date</label>
                                <input type="date" name="due_date" class="form-control @error('due_date')
                                  is-invalid
                                @enderror" id="due_date" placeholder="Due Date" value="{{$task->due_date}}">
                                @error('due_date')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                              </div>  

                              <div class="form-group mb-lg-4 mb-2">
                            <label for="reminder_date">Reminder Date</label>
                          <input type="date" id="reminder_date" name="reminder_date" class="form-control @error('reminder_date')
                                  is-invalid @enderror" id="reminder_date" placeholder="Reminder Date" value="{{$task->reminder_date}}">
                                  @error('reminder_date')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                          </div>

                          <div class="form-group mb-lg-4 mb-2">
                            <label for="reminder_date">Reminder Time</label>
                          <input type="time" id="reminder_time" name="reminder_time" class="form-control @error('reminder_time')
                                  is-invalid @enderror" id="reminder_time" placeholder="Reminder Date" value="{{$task->reminder_time}}">
                                  @error('reminder_time')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                          </div>
                             
                              <div class="form-group form-check mb-2">
                                <input type="checkbox" name="task_status" value="1" class="form-check-input" id="task_status" @if ($task->task_status)
                                    checked
                                @endif>
                                <label class="form-check-label" for="exampleCheck1">Task Completed (mark if task is completed)</label>
                              </div>
                             <div class="form-group text-center">
                              <div class="col-12">
                                  <button type="submit" class="btn btn-original btn-lg btn-block">Update Task</button>
                              </div>
                             </div>
                            </form>
                      </div>
                    </div>
              </div>
          </div>
          <div class="col-lg-3"></div>
      </div>
  </div>
</main>
@endsection