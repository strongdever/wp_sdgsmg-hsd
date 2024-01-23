<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:locale" content="ja_JP">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="健康投資推進協議会, 中小企業の健康投資を推進" />
    <meta name="description" content="これからの長寿社会に向けて企業における健康投資を推進する" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:title" content="健康投資推進協議会" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="中小企業の健康投資を推進" />
    <meta property="og:description" content="これからの長寿社会に向けて企業における健康投資を推進する" />

    <title>
        <?php
        if (is_front_page() || is_home()) {
            echo get_bloginfo('name');
        } else {
            wp_title('|', true, 'right');
            echo bloginfo('name');
        }
        ?>
    </title>
    <link rel="shortcut icon" href="<?php echo T_DIRE_URI; ?>/favicon.ico">
    <link rel="icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.ico">
    <link rel="apple-touch-icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.ico">
    <?php wp_head(); ?>
</head>

<?php
global $post;

if ($post->post_type != "page") {
    $post_slug = $post->post_type;
} else {
    $post_slug = $post->post_name;
}
if (is_single()) {
    $category_arr = get_the_category($post->ID);
    $post_slug = $category_arr[0]->slug;
}
?>

<?php
$path_parts = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);
?>
<?php if (is_single()): ?>

            <body <?php body_class(); ?> id="body<?php echo get_post_type(); ?>">
    <?php else: ?>

                <body <?php body_class(); ?> id="body<?php echo $path_parts['filename']; ?>">
        <?php endif; ?>

        <header class="header">
            <div class="header-wrapper">
                <div class="header-logo">
                    <a href="<?php echo HOME; ?>">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.svg" alt="">
                    </a>
                </div>
                <nav class="header-nav">
                    <ul class="nav-menu">
                        <li>
                            <a href="<?php echo HOME . 'about'; ?>" class="menu-link active">
                                <span>団体概要</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo HOME . 'issues'; ?>" class="menu-link">
                                <span>社会課題</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo HOME . 'activities'; ?>" class="menu-link">
                                <span>活動内容</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo HOME . 'report'; ?>" class="menu-link">
                                <span>活動報告</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo HOME . 'members'; ?>" class="menu-link">
                                <span>メンバー</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo HOME . 'apply'; ?>" class="menu-link">
                                <span>参加案内</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo HOME . 'inquiry'; ?>" class="menu-link">
                                <span>お問い合わせ</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="mobile-nav">
            <div class="mobile-nav-wrapper"></div>
            <nav class="mobile-nav-container">
                <ul class="mobile-nav-menu">
                    <li>
                        <a href="<?php echo HOME . 'about'; ?>" class="menu-link active">
                            <span>団体概要</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'issues'; ?>" class="menu-link">
                            <span>社会課題</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'activities'; ?>" class="menu-link">
                            <span>活動内容</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'report'; ?>" class="menu-link">
                            <span>活動報告</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'members'; ?>" class="menu-link">
                            <span>メンバー</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'apply'; ?>" class="menu-link">
                            <span>参加案内</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'inquiry'; ?>" class="menu-link">
                            <span>お問い合わせ</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>