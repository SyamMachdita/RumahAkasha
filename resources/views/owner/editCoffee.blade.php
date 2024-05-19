<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{asset('css/owner/editCoffee.css')}}" /> <!-- tambahkan stylesheet CSS Anda di sini -->
</head>
<body>
    <section class="container">
        <header>Edit Coffee</header>
        <form action="#" class="form">
            <div class="input-box">
                <label>Name</label>
                <input type="text" required />
            </div>

            <div class="input-box">
                <label>Image</label>
                <input type="file" accept="image/*" required />
            </div>

            <div class="input-box">
                <label>Description</label>
                <input type="text" required />
            </div>

            <div class="input-box">
                <label>Price</label>
                <input type="number" required />
            </div>

            <button>Submit</button>
        </form>
    </section>
</body>
</html>
