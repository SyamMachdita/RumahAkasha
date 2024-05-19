<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Non-Coffee</title>
    <link rel="stylesheet" href="css/owner/formNonCoffee.css">
</head>
<body>
    <section class="container">
        <header>Add New Non-Coffee</header>
        <form action="#" class="form">
            <div class="input-box">
                <label>Name</label>
                <input type="text" placeholder="Enter item name" required />
            </div>

            <div class="input-box">
                <label>Image</label>
                <input type="file" accept="image/*" required />
            </div>

            <div class="input-box">
                <label>Price</label>
                <input type="number" placeholder="Enter item price" required />
            </div>

            <button>Submit</button>
        </form>
    </section>
</body>
</html>
