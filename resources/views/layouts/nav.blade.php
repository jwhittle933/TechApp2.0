<div class="">
    <nav class="navbar navbar-expand-lg text-light bg-dark">
        <a class="navbar-brand">Request Manager</a>
        <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link text-primary" href="/requestmanager">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link text-primary" href="/">TechApp</a>
                <a class="nav-item nav-link text-primary my-2 my-sm-0"  href="/logout">Log out – {{ Session::get('user') }}</a>
            </div>
        </div>
    </nav>
</div>