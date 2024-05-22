<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/auth/login.css')}}">
</head>
<body>

    <div class="container">
        <button type="button" class="btn-close" aria-label="Close"></button>
        <div class="header">
            <h1>Rumah Akasha</h1>
            <h4>Welcome Back !</h4>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item )
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <div class="form-login">
            <form action="" method="POST" name="login">
                @csrf
                <label for="email">Email:</label><br>
                <input type="email" value="{{old('email')}}" name="email" required><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" required><br>

                <button name="submit" type="submit" class="button-login">
                    <h3>LOGIN</h3>
                </button>
            </form>
        </div>

        <div class="no-account">
            <h5>Don't have an account? <a href="/register">Register Here</a></h5>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
