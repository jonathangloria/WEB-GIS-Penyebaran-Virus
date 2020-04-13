<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="<?= base_url() ?>template/assets/img/role.png" class="user-image img-responsive"/>
                    </li>
                    <?php
                    $role_id = $this->session->userdata('role_id');
                    $querySubMenu ="SELECT * 
                                    FROM `user_sub_menu` JOIN `user_access_menu`
                                    ON `user_sub_menu`.`id` = `user_access_menu`.`menu_id`
                                    WHERE `user_access_menu`.`role_id` = $role_id
                                    AND `user_sub_menu`.`is_active` = 1
                                    ";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>
                    <?php foreach ($subMenu as $sm) : ?>
                        <li>
                            <a  href="<?= base_url($sm['url']); ?>"><i class="<?= $sm['icon']; ?>"></i> <?= $sm['title']; ?></a>
                        </li>
                    <?php endforeach; ?>
                        <!-- <li>
                            <a  href=""><i class="fa fa-bar-chart-o"></i> Data User</a>
                        </li> -->
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?= $title ?></h2> 
                        </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />