@extends('includes.layout')
@section('name')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Task</h1>
    @include('includes.message')
  </div>
  <div class="container">
      <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
              <div class="card mb-3" style="max-width: auto;">
                  <div class="card-body">
                      <h3 class="card-title text-warning px-3">Add New Task <i class="fas fa-hand-wave"></i></h3>
                      <div class="card-body">
                          <form action="{{route('user.task.store')}}" method="POST" id="task-form">
                            @csrf
                              <div class="form-group mb-lg-4 mb-2">
                                <label for="exampleInputEmail1">Task Title</label>
                                <input type="text" name="task_title" class="form-control @error('task_title')
                                  is-invalid
                                @enderror" id="task_title" placeholder="Enter task title">
                                @error('task_title')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                              </div>
                              <div class="form-group mb-lg-4 mb-2">
                                <label for="exampleInputEmail1">Task Description</label>
                               <textarea name="task_description" id="task_description" cols="30" rows="10" class="form-control @error('task_description') is-invalid @enderror" placeholder="Enter Task Description"></textarea>
                               @error('task_description')
                                    <p class="text-danger">{{$message}}</p>
                               @enderror
                              </div>
                              <div class="form-group mb-lg-4 mb-2">
                                <label for="exampleInputPassword1">Select Due Date</label>
                                <input type="date" name="due_date" class="form-control @error('due_date')
                                  is-invalid
                                @enderror" id="due_date" placeholder="Due Date">
                                @error('due_date')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                              </div>
                              <div class="form-group mb-lg-4 mb-2">
                            <label for="reminder_date">Reminder Date</label>
                          <input type="date" id="reminder_date" name="reminder_date" class="form-control @error('reminder_date')
                                  is-invalid @enderror" id="reminder_date" placeholder="Reminder Date">
                                  @error('reminder_date')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                          </div>

                          <div class="form-group mb-lg-4 mb-2">
                             <label for="reminder_time">Reminder Time</label>
                             <input type="time" id="reminder_time" name="reminder_time" class="form-control @error('reminder_time')
                                  is-invalid @enderror" id="reminder_time" placeholder="Reminder Time">
                                  @error('reminder_time')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                           </div>
                             <div class="form-group text-center">
                              <div class="col-12">
                                  <button type="submit" class="btn btn-original btn-lg">Add Task</button>
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

<script type="text/javascript">
$(document).ready(function() {
  // Assuming you have a form with the ID 'task-form'
  $('#task-form').submit(function(event) {
    event.preventDefault(); // Prevent the form from submitting traditionally

    // Get the form data
    var formData = $(this).serialize();
    alert(formData);

    // Get the CSRF token value
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // Add the CSRF token to the form data
    formData += '&_token=' + csrfToken;

    // Send the AJAX request
    $.ajax({
      url: "{{route('user.task.store')}}", // Replace with the appropriate URL to handle the form data
      method: 'POST',
      data: formData,
      success: function(response) {
        // Handle the success response
        console.log('Task created successfully!');
        // You can perform additional actions here, such as displaying a success message or redirecting the user
      },
      error: function(xhr, status, error) {
        // Handle the error response
        console.log('Error creating task:', error);
        // You can display an error message or handle the error in any other way
      }
    });
  });
});
</script>
@endsection