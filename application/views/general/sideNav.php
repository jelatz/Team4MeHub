<?php include('mainNav.php'); ?>


<aside class="sidebar-nav min-vh-100 position-fixed">
    <div class="nav w-100">
        <ul class="navbar-nav w-100">
            <li class="nav-item p-2 nav-title">
                <small class="text-uppercase text-secondary">main navigation</small>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>dashboard" class="nav-link active text-white px-2">
                    <i class="fa-solid fa-house"></i>
                    <span class="small hide">Home</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link text-white px-2 position-relative" href="#" id="dtrDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-share"></i>
                    <span>DTR</span>
                    <span><i class="fa-solid fa-chevron-left dropdown-nav-icon"></i></span>
                </a>
                <ul class="dropdown-menu dtr-menu p-0 m-0 bg-secondary w-100 rounded-0" aria-labelledby="dtrDropdown">
                    <li><a class="dropdown-item" href="#">DTR Portal</a></li>
                    <li><a class="dropdown-item" href="#">DTR Report</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>emp201" class="nav-link  text-white px-2">
                    <i class="fa-solid fa-address-card"></i>
                    <span class="small">Employee 201</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>breaks" class="nav-link  text-white px-2">
                    <i class="fa-solid fa-clock"></i>
                    <span class="small">Breaks</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>breaks" class="nav-link  text-white px-2">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="small">Schedules</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>breaks" class="nav-link  text-white px-2">
                    <i class="fa-solid fa-calendar-plus"></i>
                    <span class="small">Overtime</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>breaks" class="nav-link  text-white px-2">
                    <i class="fa-solid fa-calendar-days"> </i>
                    <span class="small">Leaves</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>breaks" class="nav-link  text-white px-2">
                    <i class="fa-solid fa-line-chart"> </i>
                    <span class="small">Performance Report</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>breaks" class="nav-link  text-white px-2">
                    <i class="fa-solid fa-area-chart"> </i>
                    <span class="small">QPE</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>breaks" class="nav-link  text-white px-2">
                    <i class="fa-solid fa-exclamation-triangle"> </i>
                    <span class="small">Sanctions</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>breaks" class="nav-link  text-white px-2">
                    <i class="fa-solid fa-deaf"> </i>
                    <span class="small">NTE</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>breaks" class="nav-link  text-white px-2">
                    <i class="fa-solid fa-bookmark"> </i>
                    <span class="small">Handbook</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>breaks" class="nav-link  text-white px-2">
                    <i class="fa-brands fa-wikipedia-w"></i>
                    <span class="small">Admin Wiki</span>
                </a>
            </li>
            <?php if ($is_admin == 1) {
            ?>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white px-2" href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-cogs"></i>
                        <span>
                            Settings
                        </span>
                        <span> <span><i class="fa-solid fa-chevron-left dropdown-nav-icon"></i></span></span>
                    </a>
                    <ul class="dropdown-menu settings-menu w-100 rounded-0 bg-secondary p-0" aria-labelledby="settingsDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>userListing">Users</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>roleListing">Role</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>levelListing">Level</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>accountListing">Account</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>teamListing">Teams</a></li>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </div>
</aside>