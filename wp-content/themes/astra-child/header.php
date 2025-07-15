<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <!-- navbar -->
    <header>
        <div class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
            <div class="container-fluid">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.avif" class="img-logo " alt=""
                    width="70">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse mynavbar navbar-collapse " id="navbarSupportedContent">
                    <?php
                    wp_nav_menu([
                        'theme_location'  => '',
                        'menu'            => 'main menu', 
                        'container'       => '', 
                        'container_class' => '', 
                        'menu_class'      => 'custom-menu-class', 
                    ]); 
                    ?>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-danger" type="submit">Search</button>
                       
                    <?php if( is_user_logged_in() ): ?>
                    <!-- Show 'My Account' button if user is logged in -->
                    <a class="btn btn-danger mx-4 text-light fs-6 w-100" href="<?php echo home_url('?page_id=536'); ?>">My Account</a>
                    <?php else: ?>
                        <!-- Show 'Create Account' button if user is NOT logged in -->
                        <a class="btn btn-danger mx-2 text-light fs-6 w-100" href="<?php echo home_url('/?page_id=515'); ?>">Create Account</a>
                    <?php endif; ?>

                    </form>
                </div>
            </div>
        </div>
    </header>