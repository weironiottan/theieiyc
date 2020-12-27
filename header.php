<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The IEIYC!</title>
    <?php wp_head();?>
</head>

<body>
    <section>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="./index.html">
                    <span>The IEIYC</span>
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                    data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <?php
            wp_nav_menu(

                array(

                    'theme-location' => 'top-menu',
                    'menu_class' => 'navbar-start',
                    'container' => 'div',
                    'container_id' => 'navbarBasicExample',
                    'container_class' => 'navbar-menu',

                )
            );?>
            </div>
        </nav>
    </section>