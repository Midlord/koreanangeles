  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Navbar</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            @auth
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#modalLRForm"  href="#">Login</a>
            </li>
            @endauth
        </ul>
        <form class="form-inline my-1">
            <div class="md-form form-sm my-0">
                <input class="form-control form-control-sm mr-sm-2 mb-0" type="text" placeholder="Search" aria-label="Search">
            </div>
            <button class="btn btn-outline-white btn-sm my-0" type="submit">Search</button>
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
