<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" onclick="window.location.href='index.php'">
            <img class="nav_logo" src="../../assets/logo/logo-small.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" onclick="window.location.href='index.php'">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" onclick="window.location.href='profile.php'">Profile</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" onclick="window.location.href='configuration.php'">Configuration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="window.location.href='account.php'">Account</a>
                </li>
                <li class="nav-item" id="nav_logout">
                    <a class="nav-link" 
                    onclick="window.location.href='../../function/logout.php'"><i class="fa fa-power-off"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>