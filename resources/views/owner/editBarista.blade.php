<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{asset('css/owner/editBarista.css')}}" /> <!-- tambahkan stylesheet CSS Anda di sini -->
</head>
<body>
    <section class="container">
        <header>Edit Barista</header>
        <form action="#" class="form">
            <div class="input-box">
                <label>Image</label>
                <input type="file" required />
            </div>

            <div class="input-box">
                <label>Name</label>
                <input type="text" placeholder="Enter barista name" required />
            </div>

            <div class="input-box">
                <label>Description</label>
                <input type="text" placeholder="Enter barista description" required />
            </div>

            <div class="input-box">
                <label>Tahun Kerja</label>
                <input type="number" placeholder="Enter years of experience" required />
            </div>

            <div class="input-box">
                <label>Job Desc</label>
                <input type="text" placeholder="Enter barista job description" required />
            </div>


            <button>Submit</button>
            <!-- <button type="button" onclick="goBack()">Back</button> -->
        </form>
    </section>

    <!-- <script>
        function goBack() {
            window.history.back();
        }
    </script> -->




</body>
</html>
