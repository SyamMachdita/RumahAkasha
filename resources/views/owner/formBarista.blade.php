<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/owner/formBarista.css') }}">
    <title>Add New Barista</title>
</head>
<body>
    <section class="container">
        <header>Add New Barista</header>
        <form action="{{ route('store.barista') }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="input-box">
                <label>Image</label>
                <input type="file" name="foto_barista" required />
            </div>

            <div class="input-box">
                <label>Name</label>
                <input type="text" name="nama_barista" placeholder="Enter barista name" required />
            </div>

            <div class="input-box">
                <label for="tahun_kerja">Years of Experience:</label>
                <input type="text" id="tahun_kerja" name="tahun_kerja" placeholder="tahun_kerja"  required>
            </div>

            <div class="input-box">
                <label>Description</label>
                <input type="text" name="deskripsi" placeholder="Enter barista description" required />
            </div>
            <div class="input-box">
                <label>Job Desc</label>
                <input type="text" name="job_desk" placeholder="Enter barista job description" required />
            </div>


            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>
