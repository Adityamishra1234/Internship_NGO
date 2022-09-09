<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Registration Form</title>
</head>
<body>

<!-- this is a navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Registration</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-5" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>






    <section class="testimonial py-5" id="testimonial">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 py-5 bg-primary text-white text-center ">
                    <div class=" ">
                        <div class="card-body">
                            <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                            <h2 class="py-3">Registration</h2>
                            <p>This a Registration form Task ROUND 1.</p>
                               <p> Register if You are new!</p>
                                <p>Login if you are already a member!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 py-5 border">
                        <h4 class="pb-4">Please fill up Your Details</h4>
                        <form action="{{route('register-user')}}" method="post">

                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        @if(Session::has('success'))
                       <div class="alert alert-success">
                        {{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">
                        {{Session::get('fail')}}
                        </div>
                        @endif
                    @csrf

</div>

                            <div class="form-col">
                                <div class="form-group col-md-7">
                                <label for="name"> Name </label>
                                    <input name="name" placeholder="Enter your Name" class="form-control" type="text" value="{{old('name')}}">
                                    <span class="text-danger"> @error('name') {{$message}} @enderror</span>
                                </div>


                                <!-- here added -->
                                <div class="form-group col-md-7">
                                <label for="name"> Contact No. </label>
                                    <input name="contact_no" placeholder="Enter your number" class="form-control" type="number" value="{{old('contact_no')}}">
                                    <span class="text-danger"> @error('contact_no') {{$message}} @enderror</span>
                                </div>

                                <!-- here -->

                                <div class="form-group col-md-7">
                                <label for="email"> Email </label>
                                    <input type="email" name="email" class="form-control"  placeholder="Enter your Email" value="{{old('email')}}">
                                    <span class="text-danger"> @error('email') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="form-col">
                                <div class="form-group col-md-7">
                                <label for="password"> Password </label>
                                    <input id="password" name="password" placeholder="Create a password" class="form-control" type="password" value="{{old('password')}}">
                                    <span class="text-danger"> @error('password') {{$message}} @enderror</span>
                                </div>

                                <!-- here added -->
                                <div class="form-group col-md-7">
                                <label for="name"> Your Photo </label>
                                    <input name="image" placeholder="place your picture here" class="form-control" type="file" value="{{old('image')}}">
                                    <span class="text-danger"> @error('image') {{$message}} @enderror</span>
                                </div>

                                <!-- here -->

                            </div>
                            <div class="form-col">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""  required>
                                            <label class="form-check-label" for="invalidCheck2">
                                                <small>After clicking 'Register me', You should go to your login page! </small>
                                            </label>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="form-col">
                                <button type="submit" class="btn btn-danger">Register me</button>
                            </div>

                            <div class="form-col py-3 pl-2">
                                <p class="pl-10">Already registererd? Log in here!</p>
                            <a href="login"><button type="button" class="btn btn-primary"> Log In</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
    </body>
    </html>