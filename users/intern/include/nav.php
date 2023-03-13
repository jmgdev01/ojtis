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
                    <a class="nav-link" onclick="window.location.href='dtr.php'">DTR</a>
                    <!-- Journal of Daily Activities would be integrated on the DTR module for easy access and managing of accomplishments. -->
                </li>
                <?php if ($res['s_id'] == '' || $res['cf_id'] == '' || $res['tr_id'] == '') {?>
                <li class="nav-item active">
                    <a class="nav-link" onclick="window.location.href='#'" style="cursor: not-allowed;">Documents</a>
                    <!-- Journal of Daily Activities would be integrated on the DTR module for easy access and managing of accomplishments. -->
                </li>
                <?php } else { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Documents
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" onclick="window.location.href='registration-form.php'">Registration Form</a></li>
                        <li><a class="dropdown-item" onclick="window.location.href='curriculum-vitae.php'">Curriculum Vitae</a></li>
                        <li><a class="dropdown-item" onclick="window.location.href='application-letter.php'">Application Letter</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" onclick="window.location.href='endorsement-letter.php'">Endorsement Letter</a></li>
                        <li><a class="dropdown-item" onclick="window.location.href='acknowledgement-letter.php'">Acknowledgement Letter</a></li>
                        <li><a class="dropdown-item" onclick="window.location.href='consent-waiver.php'">Consent and Waiver</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" onclick="window.location.href='#'">Memorandum of Agreement (MOA)</a></li>
                        <li><a class="dropdown-item" onclick="window.location.href='#'">Memorandum of Understanding (MOU)</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" onclick="window.location.href='agency-training-performance-evaluation.php'">Agency Training and Performance Evaluation (ATPE)</a></li>
                    </ul>
                </li>
                <?php } ?>
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