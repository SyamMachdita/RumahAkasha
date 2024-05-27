<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/owner/formSignature.css') }}">
    <title>Add New Signature</title>
</head>
<body>
    <section class="container">
        <header>Add New Signature</header>
        <form action="/owner/api/formSignature" method="POST" enctype="multipart/form-data" class="form">
            @csrf

            <div class="input-box">
                <label>Name:</label>
                <input type="text" name="name" placeholder="Enter Signature name" required>
            </div>

            <div class="input-box">
                <label>Image:</label>
                <input type="file" name="image" accept="image/*" required>
            </div>

            <div class="input-box">
                <label>Price:</label>
                <input type="number" name="price" placeholder="Enter Signature price" required>
            </div>

            <div class="input-box">
                <label>Description:</label>
                <input type="text" name="description" placeholder="Enter Signature description" required>
            </div>

            <div class="row">
                <div class="column">
                    <button type="button" onclick="history.back()">Back</button>
                </div>
                <div class="column">
                    <button type="submit" onclick="window.location.href='/menu-signature'">Submit</button>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
