<?php

?>

<div class="section">
    <div class="row p-3">
        <div class="col-12 d-flex gap-1">
            <i class="fa-solid fa-circle-user" aria-hidden=true></i>
            <h6>My Profile</h6>
            <small class="text-light-emphasis">View or modify information</small>
        </div>
    </div>
    <div class="row px-3">
        <div class="col-md-3">
            <div class="card border-4 border-start-0 border-end-0 border-bottom-0 shadow-sm border-warning">
                <div class="card-body border-0 bg-light-subtle p-3 position-relative">
                    <img src="<?php echo base_url(); ?>/assets/images/img1.jpg" alt="User Image" class="img-fluid rounded-circle mx-auto d-block border border-3 p-1" width="100">
                    <p class="mt-2 text-center">
                        <?php echo $name; ?>
                        <small class="d-block"><?php echo $role_text; ?></small>
                    </p>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Email</b> <a href="mailto:<?= $email ?>" class="float-end"><?= $email ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Mobile</b> <a href="tel: <?= $mobile ?>" class="float-end"><?= $mobile ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9 shadow-sm p-0">
            <ul class="nav nav-tabs" id="profileNavTab" role="tablist">
                <li class="<?= ($active == "details") ? "active" : "" ?>"><a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#basicInfo" role="tab" aria-controls="nav-home" aria-selected="true">Basic Info</a></li>
                <li class="<?= ($active == "training") ? "active" : "" ?>"> <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#training" role="tab" aria-controls="nav-profile" aria-selected="false">Training/Skills/Awards</a></li>
                <li class="<?= ($active == "changepass") ? "active" : "" ?>"> <a class="nav-link" id="changePass" data-bs-toggle="tab" href="#changePass" role="tab" aria-controls="changePass" aria-selected="true">Change Password</a></li>
            </ul>
            <div class="tab-content" id="profileTabContent">
                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="nav-basicInfo-tab">
                    <?php $this->load->view('components/Basic_info.php', ['msg' => 'hi']); ?>
                </div>
                <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="nav-training-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, natus sed soluta necessitatibus tempore aspernatur? Praesentium, odit explicabo distinctio dolore adipisci officia iure, ut magnam optio aliquam at similique veritatis.</div>
                <div class="tab-pane fade" ids="changePass" role="tabpanel" aria-labelledby="nav-changePass-tab">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium minima repellat incidunt facilis obcaecati blanditiis corrupti ad officia doloribus ullam sapiente ipsum, nemo a, excepturi voluptatem voluptatibus velit eum dignissimos ut, nam tempora? Reiciendis illo itaque veritatis eligendi fuga, mollitia ratione totam veniam esse in.</div>
            </div>
        </div>
    </div>
</div>