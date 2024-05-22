<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('/css/auth/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="card">
        <div class="header">
            <h1>Rumah Akasha</h1>
            <h4>Become Our Family 😊</h4>
        </div>

        <div class="form-login">
            <form action="/create" method="POST" name="register">
                @csrf

                <label for="email">Email</label><br>
                <input type="email" name="email" value="{{ old('email') }}"><br>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="full_name">Nama Lengkap</label><br>
                <input type="text" name="full_name" value="{{ old('full_name') }}"><br>
                @error('full_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="name">Username</label><br>
                <input type="text" name="name" value="{{ old('name') }}"><br>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="no_telp">No Telp</label><br>
                <input type="number" name="no_telp" value="{{ old('no_telp') }}" required><br>
                @error('no_telp')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="password">Password</label><br>
                <input type="password" name="password"><br>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="button-login">
                    <h3>REGISTER</h3>
                </button>
            </form>

            <p>Already have an account ?<a href="#">Login</a></p>
        </div>
    </div>
</body>
</html>
