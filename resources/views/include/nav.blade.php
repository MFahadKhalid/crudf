<nav class="fixed-top shadow-lg navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container">
          <img src="{{asset('assets/img/download.webp')}}" alt="download">
          <button style="background-color: #252B60;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="justify-content-center navbar-nav mr-auto">
              <li class="nav-item active">
                <a style="color: #252B60;" class="ml-5 nav-link" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a style="color: #252B60;" class="ml-5 nav-link" href="{{route('company.index')}}">Company</a>
              </li>
              <li class="nav-item">
                <a style="color: #252B60;" class="ml-5 nav-link" href="{{route('department.index')}}">Department</a>
              </li>
              <li class="nav-item">
                <a style="color: #252B60;" class="ml-5 nav-link" href="{{route('employee.index')}}">Employee</a>
              </li>
              <li class="nav-item ml-5">
                 <button class="btn btn-outline-primary btn-lg">Register</button>
                 <button class="btn btn-dark btn-lg pl-4 pr-4">Login</button>
              </li>
            </ul>
          </div>
        </div>
      </nav>