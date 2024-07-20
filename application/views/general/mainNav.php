<nav class="navbar bg-primary py-0 fixed-top ">
    <div class="container-fluid px-0">
        <div class="d-flex">
            <a href="<?php echo base_url(); ?>" class="navbar-brand text-white logo text-center m-0"><strong>Team4Me</strong>Hub</a>
            <a href="#" class="nav-link active hamburger pt-0 d-flex justify-content-center align-items-center" id="hamburger">
                <i class="fa-solid fa-bars text-white"></i>
            </a>
        </div>
        <div class="d-flex pe-2">
            <ul class="navbar-nav flex-row justify-content-between">
                <li class="nav-item dropdown justify-content-end ms-auto position-relative">
                    <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="history">
                        <i class="fa-solid fa-history text-white"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="history">
                        <li class="dropdown-item">Last Login :
                            <i class="fa fa-clock-o"></i>
                            <?= empty($last_login) ? "First Time Login" : $last_login; ?>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="userDropdown">
                        <img src="<?php echo base_url(); ?>/assets/images/img1.jpg" alt="User Image" class="img-fluid rounded-circle" width="25">
                        <span class="d-none d-sm-inline-block text-white">
                            <?php echo $name; ?></span>
                    </a>
                    <ul class="dropdown-menu p-0 m-0" aria-labelledby="userDropdown" id="userDropdownMenu">
                        <li class="dropdown-item p-0">
                            <div class="bg-primary p-3">
                                <img src="<?php echo base_url(); ?>/assets/images/img1.jpg" alt="User Image" class="img-fluid rounded-circle mx-auto d-block" width="80">
                                <p class="mt-2 text-white text-center">
                                    <?php echo $name; ?>
                                    <small class="d-block"><?php echo $role_text; ?></small>
                                </p>
                            </div>
                            <div class="container-fluid">
                                <div class="row justify-content-between p-2">
                                    <div class="col-6">
                                        <a href="<?php echo base_url(); ?>profile" class="btn btn-warning w-100"><i class="fa fa-user-circle"></i> Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="<?php echo base_url(); ?>logout" class="btn btn-secondary w-100"><i class="fa fa-sign-out"></i> Sign out</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>