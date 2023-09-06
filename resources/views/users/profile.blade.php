@extends('includes.layout')
@section('name')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Profile</h1>
    @include('includes.message')
  </div>
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <div class="card profile-card text-center shadow bg-light p-4 my-5 rounded-3">
                      <div class="profile-photo shadow">
                          <img src="{{ (!empty($user->photo))? url('assets/img/users/'.$user->photo) : url('https://via.placeholder.com/100x100')}}" alt="profile Photo" class="img-fluid">
                      </div>
                      <h5 class="pt-3 text-secondary">Name: <span class="text-dark">{{$user->name}}</span> </h5>
                      <h6 class="pt-3 text-secondary">Surname: <span class="text-dark">{{$user->surname}}</span> </h6>
                      <h6 class="pt-3 text-secondary">Email: <span class="text-dark">{{$user->email}}</span> </h6>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="card update-profile mb-3" style="max-width: auto;">
                      <div class="card-body">
                          <h3 class="card-title text-warning px-3">Update Profile <i class="fas fa-hand-wave"></i></h3>
                          <div class="card-body">
                              <form action="{{route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                  <div class="form-group mb-lg-4 mb-2">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control @error('name')
                                      is-invalid
                                    @enderror" id="name" value="{{$user->name}}" placeholder="Enter new name">
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                  </div>
                                  <div class="form-group mb-lg-4 mb-2">
                                    <label for="exampleInputEmail1">Surname</label>
                                    <input type="text" name="surname" class="form-control @error('surname')
                                    is-invalid
                                  @enderror" id="surname" value="{{$user->surname}}" placeholder="Enter new surname">
                                  @error('surname')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                  </div>
                                  <div class="form-group mb-lg-4 mb-2">
                                    <label for="exampleInputEmail1">Email Address</label>
                                    <input type="email" name="email" class="form-control @error('email')
                                    is-invalid
                                  @enderror" id="email" value="{{$user->email}}" placeholder="Enter new email">
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                  </div>
                                 
                                  <div class="form-group mb-lg-4 mb-2">
                                    <label for="exampleInputEmail1">Profile Picture</label>
                                    <input type="file" class="form-control @error('photo')
                                    is-invalid
                                  @enderror" id="photo" name="photo">
                                  @error('photo')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                    <img src="{{ (!empty($user->photo))? url('assets/img/users/'.$user->photo) : url('https://via.placeholder.com/100x100')}}" alt="profile Photo" class="img-fluid" width="100px" height="auto">
                                  </div>
                                 
                                 <div class="form-group text-center">
                                  <div class="col-12">
                                      <button type="submit" class="btn btn-original btn-lg btn-block">Update Profile</button>
                                  </div>
                                 </div>
                                </form>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="card update-profile mb-3 mt-lg-3 mt-1" style="max-width: auto;">
                      <div class="card-body">
                          <h3 class="card-title text-warning px-3">Update Password <i class="fas fa-hand-wave"></i></h3>
                          <div class="card-body">
                              <form action="{{route('user.password.update')}}" method="POST">
                                @csrf
                                  <div class="form-group mb-lg-4 mb-2">
                                    <label for="exampleInputEmail1">Old Password</label>
                                    <input type="password" name="current_password" class="form-control @error('current_password')
                                      is-invalid
                                    @enderror" id="current_password" placeholder="Enter old password">
                                    @error('current_password')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                  </div>
                                  <div class="form-group mb-lg-4 mb-2">
                                    <label for="exampleInputEmail1">New Password</label>
                                    <input type="password" name="new_password" class="form-control @error('new_password')
                                    is-invalid
                                  @enderror" id="new_password" placeholder="Enter new password">
                                    @error('new_password')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                  </div>
                                  <div class="form-group mb-lg-4 mb-2">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation" placeholder="Confirm new password">
                                  </div>
                                 <div class="form-group text-center">
                                  <div class="col-12">
                                      <button type="submit" class="btn btn-original btn-lg btn-block">Update Password</button>
                                  </div>
                                 </div>
                                </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</main>
@endsection