<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="banner.css">
</head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/food-munch-img.png" class="food-munch-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse bg-primary" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-link active " id="navItem1"href="Why choose Us.php">Why choose Us<span class="sr-only">(current)</span></a>
            <a class="nav-link" id="navItem2"href="Explore Menu.php">Explore Menu</a>
            <a class="nav-link" id="navItem3"href="Delivery&Payment_Section.php">Delivery & Payments</a>
            <a class="nav-link" id="navItem4"href="#"><!-- required bootstrap js -->
            <button type="submit" name="commit" class="nav-link" data-toggle="modal" data-target="#login">
              Login/Signup
            </button>
            <div class="modal fade" id="login" role="dialog">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                          <i class="fa fa-envelope"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                          <i class="fa fa-lock"></i>
                        </span>
                      </div>
                      <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                    <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
                      <span>Login <i class="fa fa-sign-in"></i></span>
                    </button>
                    <div class="text-center">
                      <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#signup">Signup</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="signup" role="dialog">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Signup</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                          <i class="fa fa-user"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                          <i class="fa fa-envelope"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                          <i class="fa fa-lock"></i>
                        </span>
                      </div>
                      <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                          <i class="fa fa-lock"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Password confirmation" aria-label="Password confirmation" aria-describedby="basic-addon1">
                    </div>
                    <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
                      <span>Signup <i class="fa fa-sign-in"></i></span>
                    </button>
                    <div class="text-center">
                      <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#login">Login</a>
                    </div>
                  </div>
                </div>
              </div>
            </div></a>
            </div>
        </div>
        </div>
    </nav>
  </body>
</html>