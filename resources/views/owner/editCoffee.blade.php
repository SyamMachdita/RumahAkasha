<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/owner/editCoffee.css') }}">
    <title>Edit Coffee</title>
</head>
<body>
    <section class="container">
        <header>Edit Coffee</header>
        <form action="{{ route('update.coffee', ['id_menu' => $menu->id_menu]) }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $menu->id_menu }}">
            <div class="input-box">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ $menu->name }}" required>
            </div>
            <div class="input-box">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" accept="image/*" value="{{ $menu->image }}">
            </div>
            <div class="input-box">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" value="{{ $menu->price }}" required>
            </div>
            <div class="input-box">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" value="{{ $menu->description }}" required>
            </div>
            <div class="row">
                <div class="column">
                    <button type="button" onclick="history.back()">Back</button>
                </div>
                <div class="column">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
