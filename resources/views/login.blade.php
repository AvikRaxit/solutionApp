<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      @include('sweetalert::alert')
      
      <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://previews.123rf.com/images/grafner/grafner1505/grafner150500042/40558742-fast-food-meal-on-white-background.jpg"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="{{route('storeLogin')}}" method="POST">
                @csrf
                {{-- @include('alert') --}}
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <h3>Sign in here</h3>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4 mt-2">
                  <label class="form-label" for="form3Example3">Email address <span style="color:red">*</span></label>
                  <input type="text" id="form3Example3" class="form-control form-control" name="user_id"
                    placeholder="Enter a valid User Id" />
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example4">Password <span style="color:red">*</span></label>
                  <input type="password" id="form3Example4" class="form-control form-control" name="password"
                    placeholder="Enter password" />
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="{{route('forgot_password')}}" class="text-body">Forgot password?</a>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                  {{-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#"
                      class="link-danger">Register</a></p> --}}
                </div>
      
              </form>
            </div>
          </div>
        </div>
        
      </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </body>
</html>