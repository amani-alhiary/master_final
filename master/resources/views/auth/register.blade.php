


<!doctype html>
<html lang="en">
  <head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="registerform/fonts/icomoon/style.css">

    <link rel="stylesheet" href="registerform/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="registerform/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="registerform/css/style.css">

    <title>Login #2</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('https://images.pexels.com/photos/3166839/pexels-photo-3166839.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>SignUp to <strong>Book Store</strong></h3>
            <p class="mb-4">share knowledge and books with others and get the most amazing axperience.</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
    
              <div class="form-group first">
                <label for="name" :value="__('Name')">Username</label>
                <input type="text" class="form-control" placeholder="Your name" id="name" name="name" :value="old('name')" >
                <x-input-error :messages="$errors->get('name')" class="mt-2" style="color: red" />

              </div>

              <div class="form-group first">
                <label for="email" :value="__('Email')">Email</label>
                <input type="text" class="form-control" placeholder="your-email@gmail.com" id="email" name="email" :value="old('email')" >
                <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red" />

              </div>


              <div class="form-group last mb-3">
                <label for="password" :value="__('Password')">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password" 
                name="password"
                 autocomplete="new-password">
                 <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red"/>

              </div>
              
              <div class="form-group last mb-3">
                <label for="password_confirmation" :value="__('Confirm Password')"> Confirm Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password_confirmation" 
                name="password_confirmation" >
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: red" />
              </div>


              {{-- <div class="form-group last mb-3"> --}}
                {{-- <label for="password_confirmation" :value="__('Confirm Password')"> Confirm Password</label> --}}
                {{-- <input type="file" name="image" class="form-control" placeholder="image">
                <x-input-error :messages="$errors->get('image')" class="mt-2" style="color: red" />
              </div> --}}

    
              <x-primary-button class="btn btn-block btn-primary">
                {{ __('Register') }}
            </x-primary-button>
         
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>