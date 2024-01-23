<?php

/*
   Template Name: Inquiry Template
*/

if (!defined('ABSPATH'))
    exit;
get_header();

?>

<main id="inquiry-page" class="inquiry">
    <div class="sub-mainview">
        <div class="container">
            <div class="page-label">
                <h2 class="eng font-20-800">Inquiry</h2>
                <h1 class="head-text font-40-700">お問い合わせ</h1>
            </div>
            <p class="content font-18-500">
                フォームに必要な項目を入力し、個人情報の取り扱い方針に同意のうえ、<br>
                送信するボタンをクリックしてください。<br>
                ●営業日以内に担当者よりご連絡させていただきます。
            </p>
        </div>
    </div>
    <div class="form-section">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>