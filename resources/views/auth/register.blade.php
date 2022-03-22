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
      <form class="login-form" action="{{ route('register') }}" method="post">
        @csrf
        <i class="fas fa-user-circle"></i>
        <input class="user-input  @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Name" required>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

        <input class="user-input" type="email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input class="user-input @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input class="user-input" type="password" name="password_confirmation" placeholder="Confirm Password" required>

        <input class="btn" type="submit" value="LOGIN">

      </form>
      <div class="options-02">
        <p>Already Registered? <a href="{{url('/login')}}">Sign In</a></p>
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
