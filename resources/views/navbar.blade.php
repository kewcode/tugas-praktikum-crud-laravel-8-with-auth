<!-- Navbar -->
<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="/">
        Jadwal
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="/">
               Jadwal
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
         
      
        </ul>
        <hr class="d-lg-none" />
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
         
          <li class="nav-item">
            <a class="text-center w-full nav-link nav-link-icon" href="https://github.com/kewcode" target="_blank" data-toggle="tooltip" data-original-title="Star us on Github">
              <i class="fab fa-github"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li>

         
          @if(!Auth::id())
          <li class="nav-item ml-lg-4">
            <a href="/register" class="btn btn-block btn-neutral btn-icon">
            
              <span class="nav-link-inner--text">Register</span>
            </a>
          </li>
          <li class="nav-item ml-lg-4">
            <a href="/login" class="btn btn-block btn-neutral btn-icon">
             
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
          @else

          <li class="nav-item">
            <a class="text-center w-full nav-link nav-link-icon" href="#" >
              <i class="fab fa-user"></i>
              {{ Auth::user()->name}}
            </a>
          </li>
          <li class="nav-item ml-lg-4">
            <a href="/auth/logout" class="btn btn-block btn-neutral btn-icon">
             
              <span class="nav-link-inner--text">Logout</span>
            </a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>