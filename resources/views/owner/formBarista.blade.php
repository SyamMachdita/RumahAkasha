<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{asset('css/owner/formBarista.css')}}" /> <!-- tambahkan stylesheet CSS Anda di sini -->
</head>
<body>
    <section class="container">
        <header>Add New Barista</header>
        <form action="/barista-input" method="POST" class="form">
            @csrf
            <div class="input-box">
                <label>Image</label>
                <input type="file" name="image" required />
            </div>

            <div class="input-box">
                <label>Name</label>
                <input type="text" name="name"placeholder="Enter barista name" required />
            </div>

            <div class="input-box">
                <label>Description</label>
                <input type="text" name="description" placeholder="Enter barista description" required />
            </div>

            <div class="input-box">
                <label>Tahun Kerja</label>
                <input type="text" name="tahun_kerja" placeholder="Enter years of experience" required />
            </div>

            <div class="input-box">
                <label>Job Desc</label>
                <input type="text" name="job_desc" placeholder="Enter barista job description" required />
            </div>


            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>
