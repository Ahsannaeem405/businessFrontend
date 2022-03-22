<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('login2/style.css')}}">
</head>
<body>

    <!--form area start-->
    <div class="form">
      <!--login form start-->
      <form class="login-form" action="" method="post">
        <i class="fas fa-user-circle"></i>



        <input class="user-input" type="email" name="" placeholder="Email" required>
        <input class="user-input" type="password" name="" placeholder="Password" required>
        <div class="options-01">
          <label class="remember-me"><input type="checkbox" name="">Remember me</label>
          <a href="#">Forgot your password?</a>
        </div>
        <input class="btn" type="submit" name="" value="LOGIN">
        <div class="options-02">
          <p>Not Registered? <a href="{{url('register_page')}}">Create an Account</a></p>
        </div>
      </form>
      <!--login form end-->
      <!--signup form start-->
      <form class="signup-form" action="" method="post">
        <i class="fas fa-user-plus"></i>
        <input class="user-input" type="text" name="" placeholder="Username" required>
        <input class="user-input" type="email" name="" placeholder="Email Address" required>
        <input class="user-input" type="password" name="" placeholder="Password" required>
        <input class="btn" type="submit" name="" value="SIGN UP">

      </form>
      <!--signup form end-->


    </div>
    <!--form area end-->
<script>
    $(".options-02 a").click(function () {
  $("form").animate(
    {
      height: "toggle",
      opacity: "toggle"
    },
    "slow"
  );
});
</script>
  </body>
</html>
