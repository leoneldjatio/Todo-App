<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body>
  <header class="p-3 text-bg-dark" data-bs-theme="dark">
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid text-decoration-none d-flex justify-content-lg-between align-items-center">
            <h2>
            <a class="h3navbar-brand text-decoration-none text-white text-uppercase" href="/">To<span class="text-warning">Do</span> </a>
            </h2>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon text-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-white">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
              </ul>
              <div class="text-end">
                <a href="{{route('login')}}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{route('register')}}" class="btn btn-warning">Sign-up</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
  </header>

<section class="login-form d-flex justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: auto;">
                    <div class="card-body">
                        <h2 class="card-title text-warning px-3">Welcome Back <i class="fas fa-hand-wave"></i></h2>
                        <p class="text-black-50 px-3">Enter your email and password to login into your account</p>
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group mb-lg-4 mb-3">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" name="email" class="form-control @error('email')
                                      is-invalid
                                  @enderror" id="email" :value="old('email')"  required placeholder="Enter email">
                                  @error('email')
                                      <p class="text-danger">{{$message}}</p>
                                  @enderror
                                </div>
                                <div class="form-group mb-lg-4 mb-3">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" name="password" :value="old('password')" class="form-control @error('password')
                                      is-invalid
                                  @enderror" id="password" required placeholder="Password">
                                  @error('password')
                                        <p class="text-danger">{{$message}}</p>
                                  @enderror
                                </div>
                                <div class="form-group form-check">
                                  <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                  <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                </div>
                               <div class="form-group text-center">
                                <div class="col-12">
                                    <button type="submit" class="btn bg-original btn-lg text-white btn-block">Login</button>
                                </div>
                               </div>
                              </form>
                        </div>
                       <div class=" px-3">
                        <p><a href="#" class="text-danger text-decoration-none">Forgot your Password?</a></p> 
                        <p><a href="{{route('register')}}" class="text-black-50 text-decoration-none">Don't have an account? <span class="text-success">Create An Account</span></a></p> 
                       </div>
                      </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
  </section>
  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3 ">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary text-original">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary text-original">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary text-original">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary text-original">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary text-original">About</a></li>
      </ul>
      <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
    </footer>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>