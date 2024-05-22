<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Staff</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/staff/styles.css')}}">
</head>
<body>

<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span> <span>Akasha</span></h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li id="staff-dashboard">
                <a href="/staff/dashboard"><span class="las la-igloo"></span> <span>Dashboard</span></a>
            </li>
            <li id="staff-event">
                <a href="/staff/event"><span class="las la-calendar"></span> <span>Event</span></a>
            </li>
            <li id="reservasi">
                <a href="/staff/reservasi"><span class="las la-book"></span> <span>Reservasi</span></a>
            </li>
        </ul>
    </div>
</div>

<div class="main-content">
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>
            Dashboard
        </h2>
        <div class="user-wrapper">
            {{-- <img src="img/2.jpeg" width="40px" height="40px" alt=""> --}}
            <div>
                <h4>{{ Auth::user()->name }}</h4>
                <small>
                    <a href="/logout">Log Out</a>
                </small>
            </div>
        </div>
    </header>
    @yield('konten')
</div>

<!-- javascript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        const menuItems = document.querySelectorAll('.sidebar-menu li');

        menuItems.forEach(item => {
            const link = item.querySelector('a');
            if (link && link.getAttribute('href') === currentPath) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
    });
</script>
</body>
</html>
