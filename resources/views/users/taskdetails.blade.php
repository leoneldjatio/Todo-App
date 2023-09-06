@extends('includes.layout')
@section('name')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Task</h1>
      @include('includes.message')
    </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="card profile-card text-center shadow bg-light p-4 my-5 rounded-3">
                        <div class="card-body">
                            <div class="mb-5">
                                <h3 class="fs-5">Task Title </h3>                                
                                <p>{{$task->task_title}}</p>
                            </div>
                            <div class="mb-5">
                                <h3 class="fs-5">Task Description</h3>                                
                                <p>{{$task->task_description}}</p>
                            </div>
                            <div class="mb-5">
                                <h3 class="fs-5">Task Due Date</h3>                                
                                <p>{{$task->due_date}}</p>
                            </div>
                            <div class="mb-5">
                                <h3 class="fs-5">Task Status</h3>     
                                <p>
                                    @if ($task->due_date < now())
                                    <span class="btn btn-danger text-white">Expired</span>
                                    @else
                                        @if (!$task->task_status)
                                            <span class="btn btn-warning text-white">Not Completed</span> 
                                        @else
                                            <span class="btn btn-success text-white">Completed</span>
                                        @endif</td>
                                    @endif
                                </p>                           
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
  </main>
@endsection