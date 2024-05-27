<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{asset('css/owner/editBarista.css')}}" /> <!-- add your CSS file here -->
</head>
<body>
    <section class="container">
        <header>Edit Barista</header>
        <form action="{{ route('update.barista', ['id' => $barista->id_barista]) }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            @method('PUT')
            <input type="hidden" name="id_barista" value="{{ $barista->id_barista }}" required>

            <div class="input-box">
                <label for="nama_barista">Name:</label>
                <input type="text" id="nama_barista" name="nama_barista" value="{{ $barista->nama_barista }}" required>
            </div>

            <div class="input-box">
                <label for="deskripsi">Description:</label>
                <input type="text" id="deskripsi" name="deskripsi" value="{{ $barista->deskripsi }}" required>
            </div>

            <div class="input-box">
                <label for="tahun_kerja">Years of Experience:</label>
                <input type="number" id="tahun_kerja" name="tahun_kerja" value="{{ $barista->tahun_kerja }}" required>
            </div>

            <div class="input-box">
                <label for="job_desk">Job Description:</label>
                <input type="text" id="job_desk" name="job_desk" value="{{ $barista->job_desk }}" required>
            </div>

            <div class="input-box">
                <label for="foto_barista">Image:</label>
                <input type="file" id="foto_barista" name="foto_barista" accept="image/*">
            </div>

            <div class="row">
                <div class="column">
                    <button type="button"><a href="/owner/barista">Back</a></button>
                </div>
                <div class="column">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
