<div class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Request Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/requestmanager">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="/">TechApp</a>
                {{--  Add logged in user to header  --}}
                <div class="d-flex w-75 justify-content-end">
                    <a class="nav-item nav-link"  href="/logout">Log out {{ Session::get('user') }}</a>
                </div>
            </div>
        </div>
    </nav>
</div>