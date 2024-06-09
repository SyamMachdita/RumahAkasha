<!-- viewEvent.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Event</title>
    <link rel="stylesheet" href="{{asset('css/staff/checklist.css')}}">
</head>
<body>
    <section class="container">
        <header><b>List Event Participants</b></header>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search Name">
            <button type="button" id="searchButton">Go</button>
          </div>
        <form action="#" class="form">
            <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Attendance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="id">1</td>
                            <td class="name">John Doe</td>
                            <td class="attendance"><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td class="id">2</td>
                            <td class="name">Jane Smith</td>
                            <td class="attendance"><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td class="id">3</td>
                            <td class="name">Jake Dune</td>
                            <td class="attendance"><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td class="id">4</td>
                            <td class="name">Jemi Pirly</td>
                            <td class="attendance"><input type="checkbox"></td>
                        </tr>

                        <!-- Add more rows for other participants -->
                    </tbody>
                </table>
                <div class="row">
                    <div class="column">
<<<<<<< HEAD
                        <button type="button" onclick="history.back()">Back</button>
=======
                      <button><a href="/staff/event">Back</a></button>
>>>>>>> parent of c7d7ae7 (registrasi_event_done)
                    </div>
                    <div class="column">
                        <button>Save</button>
                    </div>
                </div>
            </div>
      </section>
</body>
</html>
