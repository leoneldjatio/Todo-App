@extends('includes.layout')
@section('name')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h4">Pending Tasks</h1>
    @include('includes.message')
  </div>
  <a href="{{route('user.addtask')}}" class="btn btn-original">Add New Task</a>
  
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr class="text-center">
          <th></th>
          <th>#</th>
          <th>Task Title</th>
          <th>Task Description</th>
          <th>Task Status</th>
          <th>Due Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
       @if ($tasks->isNotEmpty())
          @foreach ($tasks as $key => $task)
          <tr class="text-center @if ($task->task_status)
              bg-gray-500
          @endif">
              <td>
                  <form action="#" method="post">
                      <input type="checkbox" @if ($task->task_status)
                          checked
                      @endif disabled>
                  </form>
              </td>                                        
              <td>{{ $key+1 }}</td>
              <td>{{$task->task_title}}</td>
              <td>{{ Illuminate\Support\Str::limit($task->task_description, 50, '...') }}</td>                                        
              <td class="">
                  @if ($task->due_date < now())
                  <span class="btn btn-danger text-white">Expired</span>
                  @else
                      @if (!$task->task_status)
                          <span class="btn btn-warning text-white">Not Completed</span> 
                      @else
                          <span class="btn btn-success text-white">Completed</span>
                      @endif</td>
                  @endif

                  
              <td>{{ $task->due_date }}</td>
              <td>
                <a href="{{route('user.edittask',$task->id)}}" class="btn btn-info btn-sm mb-1">Edit</a> <br>
                  <a href="{{route('user.taskdetails',$task->id)}}" class="btn btn-success btn-sm">View</a>
                  <a href="{{route('user.deletetask',$task->id)}}" class="btn btn-danger btn-sm">Delete</a>
                  
              </td>
          </tr>
          @endforeach
       @else
           <tr class="text-center">
            <td></td>
            <td></td>
            <td></td>
             <td> No Pending Tasks Yet Click on the Add Task Button</td>
             <td> </td>
             <td></td>
             <td></td>
           </tr>
       @endif
      </tbody>
    </table>
  </div>
</main>
@endsection