<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    padding-top: 200px;
    background-image: url("https://raw.githubusercontent.com/Deltaty-Code/Animated-Login-Form-Using-Only-HTML-CSS-Sign-In-Form-Design/2058e85e9f34b0978bc343491f1cdfe8edb21479/Login_form/bg1.svg");
    background-size: cover;
    background-repeat: no-repeat;
    font-family: 'Montserrat',sans-serif;
}
.container {
    position: relative;
    width: 400px;
    padding: 30px 50px;
    background: #FFF;
    text-align: center;
    border-radius: 100% 0% 0% 0% / 55% 0% 0% 0%;
}
.container::after {
    content: '';
    position: absolute;
    top: -200px;
    left: 0;
    right: 0;
    width: 100%;
    height: 420px;
    background-image: url('./bg2.png');
    background-position: top;
    background-size: cover;
    z-index: -11;
}
.container .rocket {
    width: 300px;
    position: absolute;
    top: -120px;
    right: -9%;
    animation: animate 1s ease infinite alternate;
    transition: all 0.3s ease;
}
.container .text {
    margin: 30px 0 5px 0;
}
.container .text h1 {
    color: #1418ff;
    font-size: 2.5rem;
}
.container .text p {
    font-size: 1.5rem;
    color: #0a0a0a;
}
.container .form .animated-input {
    display: flex;
    flex-direction: column;
}
.container .form .animated-input input[type='text'] ,
.container .form .animated-input input[type='password'] {
    font-size: 1.3rem;
    padding: 20px 10px 2px 10px;
    outline: none;
    border: none;
    border-bottom: solid 1px #616161;
    background: none;
    transition: all 0.3s ease;
}
.container .form .animated-input input[type='text']:focus ,
.container .form .animated-input input[type='password']:focus {
    padding: 20px 10px;
    border-color: #ff14b1;
}
.container .form .animated-input input[type='password'] {
    margin-top: 10px;
}
.container .form .check {
    display: flex;
    justify-content: space-between;
    margin: 10px 0;
    user-select: none;
}
.container .form .check input {
    display: none;
}
.container .form .check .disc {
   width: 15px;
   height: 15px;
   border-radius: 50%;
   background: #fff;
   display: inline-block;
   cursor: pointer;
   box-shadow: 0 0 3px #000;
   transition:  0.2s ease;
}
.container .form .check input:checked ~ .disc {
    background: #9900FF;
}
.container .form .check .remember {
    color: #9900FF;
    font-weight: bold;
}
.container .form .check .forget a {
    text-decoration: none;
    color: #616161;
}
.container .form .check .forget a:hover {
    color: #9900FF;
}
.container .btn {
    border: none;
    outline: none;
    width: 200px;
    padding: 15px;
    margin: 10px auto;
    font-size: 1.5rem;
    color: #fff;
    background: #1418ff;
    border-radius: 20px;
    cursor: pointer;
    box-shadow: 1px 1px 6px #616161;
    transition:  ALL 0.3s ease;
    margin-top: 30px;
}
.container .btn:hover {
    background: #0f0f0f;
}
.container .account a {
    text-decoration: none;
    color: #616161;
}
.container .account a:hover {
    color: #9900FF;
}
@keyframes animate {
    0% {top: -120px;}
    100% {top: -130px;}
}
    </style>
</head>
<body>
    <div class="container">
        <img src="https://raw.githubusercontent.com/Deltaty-Code/Animated-Login-Form-Using-Only-HTML-CSS-Sign-In-Form-Design/master/Login_form/rocket.png" alt="rocket" class="rocket">
        <div class="text">
            <h1>LOGIN</h1>

        </div>
        <form  class="form" action="{{ route('login') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="animated-input">
                <input type="text" name="email" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
            </div>
            <button class="btn" type="submit">LOGIN</button>
        </form>
    </div>
</body>
</html>