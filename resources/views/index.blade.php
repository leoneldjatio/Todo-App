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
<section class="hero">
    <div class="container-fluid mb-5">
      <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg px-lg-5">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 pr-lg-5">
          <h1 class="display-4 fw-normal text-warning mr-lg-5">Supercharge Your Productivity</h1>
          <p class="lead">Welcome to our To-Do List Manager!
Stay organized and keep track of your tasks with ease. Create, manage, and complete your to-do list seamlessly. Sign up today and start boosting your productivity!</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
            <button type="button" class="btn bg-original text-white btn-lg px-4">Get Started</button>
          </div>
        </div>
        <div class="col-lg-4 mb-lg-5 overflow-hidden shadow-lg">
            <img class="rounded-lg-3" src="https://getbootstrap.com/docs/5.3/examples/heroes/bootstrap-docs.png" alt="" width="720">
        </div>
      </div>
    </div>
  </section>

  <section class="features">
    <div class="container px-4 py-5" id="hanging-icons">
      <h2 class="pb-2 border-bottom text-center text-uppercase text-original" >How It Works</h2>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
          <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <!-- <i class="fa fa-cogs"></i> -->
          </div>
          <div class="text-center">
            <h5 class="fs-7 text-center text-body-emphasis text-warning-dark">Create An Account</h5>
            <p class="text-center">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link text-center text-original">
              Create Account
              <i class="fa fa-arrow-right"></i>
            </a>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg>
          </div>
          <div class="text-center">
            <h5 class="fs-7 text-center text-body-emphasis text-warning-dark">Login into your Account</h5>
            <p class="text-center">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link text-center text-original">
              Create Account
              <i class="fa fa-arrow-right"></i>
            </a>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"/></svg>
          </div>
          <div class="text-center">
            <h5 class="fs-7 text-center text-body-emphasis text-warning-dark">Manage your Tasks</h5>
            <p class="text-center">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link text-center text-original">
              Create Account
              <i class="fa fa-arrow-right"></i>
            </a>
          </div>
        </div>
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