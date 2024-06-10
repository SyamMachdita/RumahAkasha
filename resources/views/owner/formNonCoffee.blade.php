<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Coffee</title>
    <link rel="stylesheet" href="{{asset('css/owner/formCoffee.css')}}">
</head>
<body>
    <section class="container">
        <header>Add New Non Coffee</header>
        <form action="/owner/api/formNonCoffee" method="POST" enctype="multipart/form-data" class="form">
        @csrf

            <div class="input-box">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter non coffee name" required>
            </div>

            <div class="input-box">
                <label>Image</label>
                <input type="file" name="image" accept="image/*" required>
            </div>

            <div class="input-box">
                <label>Price</label>
                <input type="number" name="price" placeholder="Enter non coffee price" required>
            </div>

            <div class="input-box">
                <label>Description</label>
                <input type="text" name="description" placeholder="Enter non coffee description" required>
            </div>

            <div class="row">
                <div class="column">
                  <button type="button" onclick="history.back()">Back</button>
                </div>
                <div class="column">
                  <button type="submit" onclick="window.location.href='/menu-non coffee'">Submit</button>
                </div>
              </div>
        </form>
    </section>
</body>
</html>
