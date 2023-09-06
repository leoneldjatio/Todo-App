<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <a href="{{route('user.index')}}"><h5 class="offcanvas-title" id="sidebarMenuLabel">To<span class="text-warning">Do</span></h5></a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column mx-lg-3 mb-lg-5">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 mb-lg-2 fs-6 text-original" aria-current="page" href="{{route('user.index')}}">                 
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 mb-lg-2 fs-6 text-original" href="{{route('user.addtask')}}">                  
              Add Task
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 mb-lg-2 fs-6 text-original" href="{{route('user.completedtasks')}}">                  
              Completed Tasks
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 mb-lg-2 fs-6 text-original" href="{{route('user.pendingtasks')}}">                 
              Pending Tasks
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 mb-lg-2 fs-6 text-original" href="{{route('user.expiredtasks')}}">
              
              Expired Tasks
            </a>
          </li>
         
        </ul>

        <ul class="nav flex-column mt-5 mx-lg-3">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 mb-lg-2 fs-6 text-original" href="{{route('user.profile', auth()->user()->id)}}">                  
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 mb-lg-2 fs-6 text-original" href="{{route('user.logout')}}">                  
              Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>