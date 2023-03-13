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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Users
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" onclick="window.location.href='view-trainer.php'">Trainer</a></li>
                        <li><a class="dropdown-item" onclick="window.location.href='intern.php'">Intern</a></li>
                    </ul>
                <li class="nav-item">
                    <a class="nav-link" onclick="window.location.href='profile.php'">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="window.location.href='account.php'">Account</a>
                </li>
                <li class="nav-item dropdown" id="nav_logout">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <i class="fa fa-power-off"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item">
                        <h6 class="text-dark"><strong>Do you really want<br>to end your <span class="text-danger">SESSION</span>?</strong></h6>
                        <button class="form-btn form-btn-md btn-red" onclick="window.location.href='../../function/logout.php'">SIGN OUT</button>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>