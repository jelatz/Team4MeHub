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
            <div class="card border-4 border-start-0 border-end-0 border-bottom-0 shadow border-warning">
                <div class="card-body border-0 bg-light-subtle p-3 position-relative">
                    <img src="http://localhost/team4mehub/assets/dist/img/avatar.png" alt="User Image" class="img-fluid rounded-circle mx-auto d-block border border-3 p-1" width="100">
                    <p class="mt-2 text-center">
                        <?php echo $name; ?>
                        <small class="d-block"><?php echo $role_text; ?></small>
                    </p>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Email</b> <a class="float-end"><?= $userInfo->email ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Mobile</b> <a class="float-end"><?= $userInfo->mobile ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9 shadow-sm p-0">
            <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                <a class="nav-link disabled" id="nav-disabled-tab" data-bs-toggle="tab" href="#nav-disabled" role="tab" aria-controls="nav-disabled" tabindex="-1" aria-disabled="true">Disabled</a>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid tempore tempora molestiae pariatur, voluptate fuga corrupti est reiciendis maxime totam dolores, voluptates, dolorem eaque sequi.</div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, natus sed soluta necessitatibus tempore aspernatur? Praesentium, odit explicabo distinctio dolore adipisci officia iure, ut magnam optio aliquam at similique veritatis.</div>
                <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium minima repellat incidunt facilis obcaecati blanditiis corrupti ad officia doloribus ullam sapiente ipsum, nemo a, excepturi voluptatem voluptatibus velit eum dignissimos ut, nam tempora? Reiciendis illo itaque veritatis eligendi fuga, mollitia ratione totam veniam esse in.</div>
            </div>
        </div>
    </div>
</div>