<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="card">
        <div class="header">
            <h1>Rumah Akasha</h1>
            <h4>Become Our Family 😊</h4>
        </div>

        <div class="form-login">
            <form action="POST" name="login">
                <label for="nama_lengkap">Nama Lengkap</label><br>
                <input type="text" name="nama_lengkap"><br>
                <label for="username">Username</label><br>
                <input type="text" name="username"><br>
                <label for="no_telp">No Telp</label><br>
                <input type="text" name="no_telp" required><br>
                <label for="password">Password</label><br>
                <input type="password" name="password"><br>
            </form>

            <p>Already have an account ?<a href="#">Login</a></p>
        </div>

        <button type="submit" class="button-login">
            <h3>REGISTER</h3>
        </button>
    </div>


</body>
</html>
