<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('login/style.css')}}">
</head>
<body>

    <!--form area start-->
    <div class="form">
      <!--login form start-->
      <form class="login-form" action="" method="post">
        <i class="fas fa-user-circle"></i>
        <input class="user-input" type="text" name="" placeholder="First Name" required>
        <input class="user-input" type="text" name="" placeholder="Last Name" required>
        <input class="user-input" type="text" name="" placeholder="Username" required>
        <input class="user-input" type="password" name="" placeholder="Password" required>

        <input class="btn" type="submit" name="" value="LOGIN">

      </form>
      <div class="options-02">
        <p>Already Registered? <a href="{{url('/login_page')}}">Sign In</a></p>
      </div>

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
