<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Non-Coffee</title>
    <link rel="stylesheet" href="{{ asset('css/owner/formNonCoffee.css') }}">
</head>
<body>
    <section class="container">
        <header>Add New Non-Coffee</header>
        <form action="/owner/api/formNonCoffee"  method="POST" enctype="multipart/form-data" class="form">
        @csrf
            <div class="input-box">
                <label>Name</label>
                <input type="text"  name="name" placeholder="Enter Non Coffee name" required />
            </div>

            <div class="input-box">
                <label>Image</label>
                <input type="file" name="image" accept="image/*" required />
            </div>

            <div class="input-box">
                <label>Price</label>
                <input type="number" name="price" placeholder="Enter item price" required />
            </div>

            <div class="input-box">
                <label>Description</label>
                <input type="text" name="description" placeholder="Enter Item Description" required />
            </div>

            <div class="row">
                <div class="column">
                    <button type="button" onclick="window.location.href='/owner/menu-noncoffee'">Back</button>
                </div>
                <div class="column">
                    <button type="submit" onclick="window.location.href='/noncoffee/'">Submit</button>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
