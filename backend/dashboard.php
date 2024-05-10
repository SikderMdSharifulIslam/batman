<?php require'header.php'; ?>
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Dashboard</h1>
                                    <h3>Name: <?= $_SESSION['s_name'] ?></h3>
                                    <h3>Email: <?= $_SESSION['s_email_address'] ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card widget widget-list">
                                    <div class="card-header">
                                        <h5 class="card-title">Total Users<span class="badge badge-success badge-style-light">
                                                <?php
                                                $count_query = "SELECT COUNT(*) as userFound FROM users";
                                                $from_db_count = mysqli_query($db_connect, $count_query);
                                                $t_user = mysqli_fetch_assoc($from_db_count);
                                                echo $t_user['userFound'];
                                                ?>

                                            </span>
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <!-- <?php
                                                $user_select_query = "SELECT id, name, email_address FROM users";
                                                $user_data_db = mysqli_query($db_connect, $user_select_query);
                                                ?> -->
                                        <span class="text-muted m-b-xs d-block">showing 5 out of 14 new users.</span>
                                        <ul class="widget-list-content list-unstyled">
                                            <?php foreach ($user_data_db as $users) : ?>
                                                <li class="widget-list-item widget-list-item-green">
                                                    <span class="widget-list-item-avatar">
                                                        <div class="avatar avatar-rounded">
                                                            <img src="../../assets/images/avatars/avatar.png" alt="">
                                                        </div>
                                                    </span>
                                                    <span class="widget-list-item-description">
                                                        <a href="#" class="widget-list-item-description-title">
                                                            <?= $users['name'] ?>

                                                            <!-- <?php print_r($users['name']) ?> evabeo print kora jay-->
                                                        </a>
                                                        <span class="widget-list-item-description-subtitle">
                                                            <?= $users['email_address'] ?>
                                                        </span>
                                                    </span>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card widget widget-list">
                                    <div class="card-header">
                                        <h5 class="card-title">Todo<span class="badge badge-success badge-style-light">14 completed</span></h5>
                                    </div>
                                    <div class="card-body">
                                        <span class="text-muted m-b-xs d-block">showing 5 out of 23 active tasks.</span>
                                        <ul class="widget-list-content list-unstyled">
                                            <li class="widget-list-item widget-list-item-green">
                                                <span class="widget-list-item-check">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </div>
                                                </span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        Dashboard UI optimisations
                                                    </a>
                                                    <span class="widget-list-item-description-subtitle">
                                                        Oskar Hudson
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-blue">
                                                <span class="widget-list-item-check">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                    </div>
                                                </span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        Mailbox cleanup
                                                    </a>
                                                    <span class="widget-list-item-description-subtitle">
                                                        Woodrow Hawkins
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-purple">
                                                <span class="widget-list-item-check">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                    </div>
                                                </span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        Header scroll bugfix
                                                    </a>
                                                    <span class="widget-list-item-description-subtitle">
                                                        Sky Meyers
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-yellow">
                                                <span class="widget-list-item-check">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </div>
                                                </span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        Localization for file manager
                                                    </a>
                                                    <span class="widget-list-item-description-subtitle">
                                                        Oskar Hudson
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-red">
                                                <span class="widget-list-item-check">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                    </div>
                                                </span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        New E-commerce UX/UI design
                                                    </a>
                                                    <span class="widget-list-item-description-subtitle">
                                                        Oskar Hudson
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php require'footer.php'; ?>