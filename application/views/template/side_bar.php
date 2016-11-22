<div class="sidebar" data-color="blue" data-image="<?php echo base_url() ?>assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->

    <div class="logo">
        <a href="" class="simple-text">
            SGM System
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="<?php if ($active === 'dashboard') echo 'active' ?>">
                <a href="<?php echo site_url('dashboard'); ?>">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="<?php if ($active === 'user') echo 'active' ?>">
                <a href="<?php echo site_url('user'); ?>">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="<?php if ($active === 'table') echo 'active' ?>">
                <a href="table.html">
                    <i class="material-icons">content_paste</i>
                    <p>Table List</p>
                </a>
            </li>

        </ul>
    </div>
</div>
