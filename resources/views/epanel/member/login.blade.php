<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Halaman Login Website</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="{{asset('assets/css/login.css')}}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
        #body{
             background-image: url("{{asset('assets/svg/wave-static-01.svg')}}");
             background-position: center center;
             background-repeat: no-repeat;
             background-attachment: fixed;
             background-size: cover;
             background-color: #464646;
            }
    </style>

</head>

<body>
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="frame">
            <div class="nav">
                <ul class="links">
                    <li class="signin-active"><a class="btn">Sign in</a></li>
                    <li class="signup-inactive"><a class="btn">Sign up </a></li>
                </ul>
            </div>
            <div ng-app ng-init="checked = false">
                <form class="form-signin"  action="{{route('admin.post_login')}}" method="POST" autocomplete="off">
                    @csrf
                    <label for="username">Username</label>
                    <input class="form-styling" type="text" name="email" placeholder="" required/>
                    <label for="password">Password</label>
                    <input class="form-styling" type="password" name="password" placeholder="" required/>
                    <div class="btn-animate">
                        <button class="btn-signin" type="submit">Sign in</a>
                    </div>
                </form>
                <form class="form-signup" action="{{ route('admin.post_register') }}" method="post" autocomplete="off">
                    @csrf
                    <label for="fullname">Nama</label>
                    <input class="form-styling" type="text" name="name" placeholder="" />
                    <label for="alamat">Alamat</label>
                    <input class="form-styling" type="text" name="alamat" placeholder="" />
                    <label for="nohp">Nomor Hp</label>
                    <input class="form-styling" type="text" name="nomor_hp" placeholder="" />
                    <label for="nohp">Username (* Untuk Login)</label>
                    <input class="form-styling" type="text" name="email" placeholder="" />
                    <label for="password">Password (* Untuk Login))</label>
                    <input class="form-styling" type="password" name="password" placeholder="" />
                    <div class="btn-animate">
                        <button class="btn-signin" type="submit">Sign Up</a>
                    </div>
                </form>
                <div class="success"> <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
                        <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314 c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042 c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />
                        <div class="successtext">
                            <p> Thanks for signing up! Check your email for confirmation.</p>
                        </div>
                </div>
            </div>
        </div>
        <a id="refresh" value="Refresh" href="/">
            <svg class="refreshicon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 12l-12-8v5h-12v6h12v5z"/></svg>
        </a>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/login.js') }}"></script>

</body>

</html>
