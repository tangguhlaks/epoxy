<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kya Epoxy Prima - Login Admin</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="icon" href="default/asset/img/logo.png" type="image/icon type">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/icon/icofont/css/icofont.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/style.css')}}">
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>
    <!-- Pre-loader end -->

    <section class="login p-fixed d-flex text-center" style="background-color: #aed5f9">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" action="{{ url('auth') }}" method="POST">
                            @csrf
                            <div class="text-center">
                            </div>
                            <div class="auth-box">
                                @if (session()->has('loginError'))
                                <div class="alert alert-danger">
                                    {{session('loginError')}}
                                </div>
                                @endif
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Log In</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Your Email Address">
                                        <span class="md-line"></span>
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <small style="margin-top: -10px" class="text text-danger">@error('email') {{$message}} @enderror</small>
                                        </div>
                                        </div>
                                    <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control"  placeholder="Password">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="input-group">
                                        <small style="margin-top: -10px" class="text text-danger">@error('password') {{$message}} @enderror</small>
                                    </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Log in</button>
                                    </div>
                                </div>
                                <hr/>

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ url('admin/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ url('admin/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ url('admin/js/modernizr/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/modernizr/css-scrollbars.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/common-pages.js') }}"></script>
</body>

</html>
