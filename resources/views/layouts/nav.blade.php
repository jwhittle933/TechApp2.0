<div class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-light" href="/dashboard">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-info" href="/">TroubleShooter</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/profile">Edit Profile</a>
                        <a class="dropdown-item" href="/classroominfo">Classroom Info</a>
                        <a class="dropdown-item" href="/newuser">New User</a>
                        <a class="dropdown-item" href="/manage">Manage Users</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link text-info">{{ Session::get('user') }}</a>
                </li>
            </ul>
            <span class="navbar-text">
                <a class="lead nav-item nav-link text-info"  href="/logout">Log out</a>
            </span>
        </div>
    </nav>
</div>