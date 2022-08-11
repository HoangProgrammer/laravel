<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/dist/css/app.css')}}">

</head>
  <body>
    <div class="container">
        <div class="frame">
          <div class="nav">
            <ul class="links">
              <li class="signin-active"><a class="btn">Sign in</a></li>
              <li class="signup-inactive"><a class="btn">Sign up </a></li>
            </ul>
          </div>
          <div ng-app ng-init="checked = false">
                          <form class="form-signin" action="{{route('loginAdmin')}}" method="post" >
                            @csrf
                <label for="username">Username</label>
                <input class="form-styling" type="text" name="email" placeholder=""/> 
                <label for="password">Password</label>
                <input class="form-styling" type="password" name="password" placeholder=""/>
                <input type="checkbox" id="checkbox"/>
                <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
                <div class="btn-animate">
                  <button class="btn-signin" type="submit" >Sign in</button>
                </div>
                          </form>
              
                          <form class="form-signup" action="" method="post">
                <label for="fullname">Full name</label>
                <input class="form-styling" type="text" name="fullname" placeholder=""/>
                <label for="email">Email</label>
                <input class="form-styling" type="text" name="email" placeholder=""/>
                <label for="password">Password</label>
                <input class="form-styling" type="text" name="password" placeholder=""/>
                <label for="confirmpassword">Confirm password</label>
                <input class="form-styling" type="text" name="confirmpassword" placeholder=""/>
                <a  class="btn-signup">Sign Up</a>
                          </form>
            
                  <div  class="success">
                
                      <div class="successtext">
                         <p> Thanks for signing up! Check your email for confirmation.</p>
                      </div>
                   </div>
            </div>
            
            <div class="forgot">
              <a href="#">Forgot your password?</a>
            </div>
            
        </div>
          
      
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('/dist/js/app.js')}}"> </script>
 
</body>
</html>