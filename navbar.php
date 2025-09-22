<nav class="navbar navbar-expand-lg navbar-light bg-dark-subtle">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Medical Services</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="cities" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cities
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Cities/add.php">Add</a></li>
                        <li><a class="dropdown-item" href="#">View All</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Add</a></li>
                        <li><a class="dropdown-item" href="#">View All</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="orders" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Orders
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">View All</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="admins" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admins
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Admins/add.php">Add</a></li>
                        <li><a class="dropdown-item" href="#">View All</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <a href="logout.php" class="btn btn-outline-dark me-2" type="button">Log out</a>
            </form>
        </div>
    </div>
</nav>
