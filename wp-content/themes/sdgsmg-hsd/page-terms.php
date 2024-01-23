<?php

/*
   Template Name: Terms Template
*/

if (!defined('ABSPATH'))
    exit;
get_header();

?>

    <main class="terms-page">
        <div class="subpage-firstview">
            <div class="page-label">
                <div class="container">
                    <h2 class="eng font-20-800">Terms and Agreements</h2>
                    <h1 class="head-text font-40-600">健康投資推進協議会 規約</h1>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="container">
                <p class="content font-18-500">
                    <?php the_content(); ?>
                </p>
            </div>
        </div>
    </main>

<?php get_footer(); ?>