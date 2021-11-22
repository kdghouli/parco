<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />

    <title>MMR</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> --}}


</head>

<body >


    <!-- Page Content -->
    <div class="container intro-container mt-5" id="app" >
        <global-router></global-router>
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">


                <br>
                <br>

                <!-- Blog Post -->

                <router-view></router-view>




                <!-- Pagination -->
                <nav aria-label="...">
                    <ul class="pagination float-right">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
          </ul>
        </nav>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">Camion </a>
                            </li>
                            <li>
                                <a href="#">Voiture</a>
                            </li>
                            <li>
                                <a href="#">Velomoteur </a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">Chariots</a>
                            </li>
                            <li>
                                <a href="#">Autre</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; KATEC 2021</p>
    </div>
    <!-- /.container -->
</footer>
<!--modals-->
<!--register-->
<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <form action="/examples/actions/confirmation.php" method="post">
                        <h2 class="text-center">Create New Account</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="firstname" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="lastname" required="required">
              </div>
              <div class="form-group">
                  <input type="email" class="form-control" placeholder="email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                </div>
                <div class="clearfix">
                    <a href="#" class="pull-right">Forgot Password?</a>
                </div>
            </form>
            <p class="text-center">having account ?
                <strong class="switch-tologin-modal" ><a href="#">Login</a></strong>
            </p>
        </div>
    </div>
</div>
</div>
</div>
<!--login-->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <form action="/examples/actions/confirmation.php" method="post">
                        <h2 class="text-center">Log in</h2>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>
                <div class="clearfix">
                    <a href="#" class="pull-right">Forgot Password?</a>
                </div>
            </form>
            <p class="text-center"><a class="switch-toregister-modal" href="#">Create an Account</a></p>
        </div>
    </div>
</div>
</div>
</div>
<!--modals-->
<!-- Bootstrap core JavaScript -->
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

  {{-- <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script> --}}
  <script>
      $(document).ready(function(){
          $('.switch-tologin-modal').on('click',function(){
              $('#register-modal').modal('hide');
              $('#login-modal').modal('show');
            })
            $('.switch-toregister-modal').on('click',function(){
                $('#login-modal').modal('hide');
                $('#register-modal').modal('show');
            })
        })


        // <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>

</html>

</div>
