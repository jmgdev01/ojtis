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
                    <a class="nav-link" onclick="window.location.href=''">DTR</a>
                    <!-- Journal of Daily Activities would be integrated on the DTR module for easy access and managing of accomplishments. -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Documents
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" onclick="window.location.href='registration-form.php'">Regsitration Form</a></li>
                        <li><a class="dropdown-item" onclick="window.location.href='curriculum-vitae.php'">Curriculum Vitae</a></li>
                        <li><a class="dropdown-item" onclick="window.location.href=''">Application Letter</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" onclick="window.location.href=''">Endorsement Letter</a></li>
                        <li><a class="dropdown-item" onclick="window.location.href=''">Acknowledgement Letter</a></li>
                        <li><a class="dropdown-item" onclick="window.location.href=''">Consent and Waiver</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" onclick="window.location.href='#'">Memorandum of Agreement (MOA)</a></li>
                        <li><a class="dropdown-item" onclick="window.location.href='#'">Memorandum of Understanding (MOU)</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" onclick="window.location.href='#'">Agency Training and Performance Evaluation (ATPE)</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="window.location.href='profile.php'">Profile</a>
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