<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Owner</title>
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
                <li id="dashboard" class="active">
                    <a href="{{url('/owner/dashboard')}}"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li id="event">
                    <a href="{{url('/owner/event')}}"><span class="las la-calendar"></span><span>Event</span></a>
                </li>
                <li id="menu">
                    <a href="#" onclick="toggleSubmenu('menuSubmenu')">
                        <span class="las la-coffee"></span>
                        <span>Menu</span>
                        <span class="las la-angle-down"></span>
                    </a>
                    <ul id="menuSubmenu" class="submenu">
                        <li><a href="{{url('/owner/menu-coffee')}}">Coffee</a></li>
                        <li><a href="{{url('/owner/menu-noncoffee')}}">Non Coffee</a></li>
                        <li><a href="{{url('/owner/menu-signature')}}">Signature</a></li>
                        <li><a href="{{url('/owner/menu-food')}}">Food</a></li>
                    </ul>
                </li>
                <li id="reservasi">
                    <a href="{{url('/owner/reservasi')}}"><span class="las la-book"></span><span>Reservasi</span></a>
                </li>
                <li id="barista">
                    <a href="{{url('/owner/barista')}}"><span class="las la-user-tie"></span><span>Barista</span></a>
                </li>
                <li id="barista">
                    <a href="{{url('/owner/information')}}"><span class="las la-chart-bar"></span><span>Information</span></a>
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

                <div>
                    <h4>{{ Auth::user()->name }}</h4>
                <small>
                    <a href="{{url('/logout')}}">Log Out</a>
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
            const menuItems = document.querySelectorAll('.sidebar-menu > ul > li');

            menuItems.forEach(item => {
                const link = item.querySelector('a');
                if (link && link.getAttribute('href') === currentPath) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });

            // Submenu logic to keep the submenu open if a submenu item is active
            const submenuItems = document.querySelectorAll('.submenu li a');
            submenuItems.forEach(subItem => {
                if (subItem.getAttribute('href') === currentPath) {
                    subItem.classList.add('active'); // Tambahkan kelas 'active' pada submenu yang aktif
                    subItem.closest('.submenu').classList.add('show');
                    subItem.closest('li').classList.add('active');
                }
            });
        });

        function toggleSubmenu(submenuId) {
            var submenu = document.getElementById(submenuId);
            submenu.classList.toggle('show');
        }
    </script>
</body>
</html>
