<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php wp_title('|', 'true', 'right'); ?>
            <?php bloginfo('name'); ?>
        </title>
        <link rel="pingback" href="<?php  bloginfo('pingback_url') ?>"  >
        <?php wp_head();?>
    </head>
    <body>
        <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php add_bootstrap_menu(); ?>
            </div>
        </div>
        </nav>