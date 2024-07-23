<?php

?>

<div class="section ">
    <div class="row p-3 justify-content-center align-items-center">
        <div class="col-12 d-flex gap-1">
            <i class="fa-solid fa-circle-user" aria-hidden=true></i>
            <h6>My Profile</h6>
            <small class="text-light-emphasis">View or modify information</small>
        </div>
    </div>
    <div class="row px-3 gap-y-3 gap-lg-0">
        <div class="col-12 col-xl-2">
            <div class="card border-4 border-start-0 border-end-0 border-bottom-0 shadow-sm border-warning">
                <div class="card-body border-0 bg-light-subtle p-3 position-relative">
                    <img src="<?php echo base_url(); ?>/assets/images/img1.jpg" alt="User Image" class="img-fluid rounded-circle mx-auto d-block border border-3 p-1" width="100">
                    <p class="mt-2 text-center">
                        <?php echo $name; ?>
                        <small class="d-block"><?php echo $role_text; ?></small>
                    </p>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Email</b> <a href="mailto:<?= $email ?>" class="d-block"><?= $email ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Mobile</b> <a href="tel: <?= $mobile ?>" class="d-block"><?= $mobile ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-10 shadow-sm p-0 mt-3 mt-lg-0">
            <ul class="nav nav-tabs justify-content-center justify-content-xl-start" id="profileNavTab" role="tablist">
                <li class="<?= ($active == "details") ? "active" : "" ?>"><a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#basicInfo" role="tab" aria-controls="nav-home" aria-selected="true">Basic Info</a></li>
                <li class="<?= ($active == "training") ? "active" : "" ?>"> <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#training" role="tab" aria-controls="nav-profile" aria-selected="false">Training/Skills/Awards</a></li>
                <li class="<?= ($active == "changepass") ? "active" : "" ?>"> <a class="nav-link" id="changePass" data-bs-toggle="tab" href="#changePass" role="tab" aria-controls="changePass" aria-selected="true">Change Password</a></li>
            </ul>
            <div class="tab-content" id="profileTabContent">
                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfoTab">
                    <div class="container-fluid px-2 py-4">
                        <div class="row">
                            <div class="col-12 col-xl-2">
                                <ul class="nav nav-pills flex-row flex-xl-column gap-1 mb-3 mb-xl-0" id="basic-info-pills" role="tablist">
                                    <li class="nav-item">
                                        <a aria-expanded="true" class="nav-link active" id="tab-company" data-bs-toggle="pill" href="#pill-company">Company Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a aria-expanded="false" class="nav-link" id="tab-personal" data-bs-toggle="pill" href="#pill-personal">Personal Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a aria-expanded="false" class="nav-link" id="tab-family" data-bs-toggle="pill" href="#pill-family">Family Background</a>
                                    </li>
                                    <li class="nav-item">
                                        <a aria-expanded="false" class="nav-link" id="tab-education" data-bs-toggle="pill" href="#pill-education">Educational Background</a>
                                    </li>
                                    <li class="nav-item">
                                        <a aria-expanded="false" class="nav-link" id="tab-workHistory" data-bs-toggle="pill" href="#pill-workHistory">Working History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a aria-expanded="false" class="nav-link" id="tab-training" data-bs-toggle="pill" href="#pill-training">Trainings/Seminers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a aria-expanded="false" class="nav-link" id="tab-charRef" data-bs-toggle="pill" href="#pill-charRef">Character Referrence</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-auto col-xl-10">
                                <form action="">
                                    <div class="tab-content" id="basicInfoTabContent">
                                        <?php $this->load->view('components/Profile/companyProfile.php') ?>
                                        <?php $this->load->view('components/Profile/personalInfo.php') ?>
                                        <?php $this->load->view('components/Profile/famBackground.php') ?>
                                        <?php $this->load->view('components/Profile/educBackground.php') ?>
                                        <?php $this->load->view('components/Profile/workHistory.php') ?>
                                        <?php $this->load->view('components/Profile/training.php') ?>
                                        <?php $this->load->view('components/Profile/charReferrence.php') ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="nav-training-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, natus sed soluta necessitatibus tempore aspernatur? Praesentium, odit explicabo distinctio dolore adipisci officia iure, ut magnam optio aliquam at similique veritatis.</div>
                <div class="tab-pane fade" ids="changePass" role="tabpanel" aria-labelledby="nav-changePass-tab">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium minima repellat incidunt facilis obcaecati blanditiis corrupti ad officia doloribus ullam sapiente ipsum, nemo a, excepturi voluptatem voluptatibus velit eum dignissimos ut, nam tempora? Reiciendis illo itaque veritatis eligendi fuga, mollitia ratione totam veniam esse in.</div>
            </div>
        </div>
    </div>
</div>