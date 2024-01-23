<?php

/*
   Template Name: Front Page Template
*/

if (!defined('ABSPATH'))
    exit;
get_header();

?>

<main id="top-page">
    <section class="mainview">
        <div class="container">
            <div class="left-wrapper">
                <h1 class="desc font-42-600">
                    <span class="font-36-600">これからの長寿社会に向けて<br></span>
                    企業における健康投資を推進する
                </h1>
                <a class="btn btn-green pc" href="<?php echo HOME . 'activities'; ?>">
                    <span>健康投資推進協議会の活動について</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path
                            d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38966 1.75 8.1989 1.75 7.99999C1.75 7.80107 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z"
                            fill="white" />
                    </svg>
                </a>
            </div>
            <img class="right-img" src="<?php echo T_DIRE_URI; ?>/assets/img/hsd_main.svg">
            <a class="btn btn-green sp" href="<?php echo HOME . 'activities'; ?>">
                <span>健康投資推進協議会の活動について</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path
                        d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38966 1.75 8.1989 1.75 7.99999C1.75 7.80107 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z"
                        fill="white" />
                </svg>
            </a>
        </div>
    </section>

    <?php
    $args = [
        'post_type' => 'news',
        'post_status' => 'publish',
        'paged' => $paged,
        'posts_per_page' => 3,
        'orderby' => 'post_date',
        'order' => 'DESC',
    ];

    $custom_query = new WP_Query($args);
    ?>
    <?php if ($custom_query->have_posts()): ?>
        <section class="news">
            <div class="container">
                <div class="head-wrapper">
                    <h2 class="eng font-20-800">News</h2>
                    <h1 class="head-text font-24-600">お知らせ</h1>
                </div>
                <ul class="news-list">
                    <?php while ($custom_query->have_posts()):
                        $custom_query->the_post(); ?>
                        <li>
                            <a class="news-item" href="<?php the_permalink(); ?>">
                                <p class="date font-16-500">
                                    <?php echo get_the_time('Y.m.d'); ?>
                                </p>
                                <h3 class="title font-16-800">
                                    <?php the_title(); ?>
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38966 1.75 8.1989 1.75 7.99999C1.75 7.80107 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z"
                                        fill="#1A8C33" />
                                </svg>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <a class="href-right" href="<?php echo HOME . 'news'; ?>">
                    <span class="font-18-600">お知らせ一覧</span>
                    <div class="svg-wrapper">
                        <div class="circle"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path
                                d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38966 1.75 8.1989 1.75 7.99999C1.75 7.80107 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z"
                                fill="white" />
                        </svg>
                    </div>
                </a>
            </div>
        </section>
    <?php endif; ?>

    <section class="social-issue">
        <div class="container">
            <div class="left-wrapper">
                <h2 class="title font-24-600 sp">
                    人口構造の変化と健康の重要性は国の課題である
                </h2>
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/social-issue.svg">
            </div>
            <div class="right-wrapper">
                <h2 class="title font-24-600 pc">
                    人口構造の変化と健康の重要性は国の課題である
                </h2>
                <p class="content font-16-500">
                    2015年における65歳以上の高齢者人口は過去最高の3,300万人、高齢化率（総人口に占める割合）は26.0％と過去最高となっている。<br>
                    65歳以上の高齢者人口は、1950年には総人口の5％に満たなかったが、1970年には国連の報告書において「高齢化社会」と定義された水準の7％を超え、1994年にその倍の水準である14％を超えて「高齢社会」といわれ、さらにその後も上昇を続けている。2005年には20.2％と20％を超え、2013年には25％を超えた。
                </p>
                <a class="href-right" href="<?php echo HOME . 'issues'; ?>">
                    <span class="font-18-600">社会課題について</span>
                    <div class="svg-wrapper">
                        <div class="circle"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path
                                d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38966 1.75 8.1989 1.75 7.99999C1.75 7.80107 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z"
                                fill="white" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="activity">
        <div class="container">
            <div class="left-wrapper">
                <h2 class="title font-24-600 pc">
                    産学官、各種専門家、<br>
                    金融機関を含め企業の健康投資について考える
                </h2>
                <p class="content font-16-500">
                    2015年における65歳以上の高齢者人口は過去最高の3,300万人、高齢化率（総人口に占める割合）は26.0％と過去最高となっている。<br>
                    65歳以上の高齢者人口は、1950年には総人口の5％に満たなかったが、1970年には国連の報告書において「高齢化社会」と定義された水準の7％を超え、1994年にその倍の水準である14％を超えて「高齢社会」といわれ、さらにその後も上昇を続けている。2005年には20.2％と20％を超え、2013年には25％を超えた。
                </p>
                <a class="href-right" href="<?php echo HOME . 'activities'; ?>">
                    <span class="font-18-600">活動内容について</span>
                    <div class="svg-wrapper">
                        <div class="circle"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path
                                d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38966 1.75 8.1989 1.75 7.99999C1.75 7.80107 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z"
                                fill="white" />
                        </svg>
                    </div>
                </a>
            </div>
            <div class="right-wrapper">
                <h2 class="title font-24-600 sp">
                    産学官、各種専門家、<br>
                    金融機関を含め企業の健康投資について考える
                </h2>
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/activity.png">
            </div>
        </div>
    </section>

    <?php
    $args = [
        'post_type' => 'report',
        'post_status' => 'publish',
        'paged' => $paged,
        'posts_per_page' => 6,
        'orderby' => 'post_date',
        'order' => 'DESC',
    ];

    $custom_query = new WP_Query($args);
    ?>

    <?php if ($custom_query->have_posts()): ?>
        <section class="report">
            <div class="container">
                <div class="head-wrapper">
                    <h2 class="eng font-20-800">Report</h2>
                    <h1 class="head-text font-24-600">活動報告</h1>
                </div>
                <ul class="report-list">
                    <?php while ($custom_query->have_posts()):
                        $custom_query->the_post(); ?>
                        <li>
                            <a class="report-item" href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <img class="thumb" src="<?php echo get_the_post_thumbnail_url(); ?>">
                                <?php else: ?>
                                    <img class="thumb" src="<?php echo catch_that_image(); ?>">
                                <?php endif; ?>
                                <h3 class="title font-18-800">
                                    <?php the_title(); ?>
                                </h3>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>

    <section class="seminar">
        <div class="container">
            <div class="head-wrapper">
                <h2 class="eng font-20-800">Seminar</h2>
                <h1 class="head-text font-24-600">動画セミナー</h1>
            </div>
            <ul class="seminar-list">
                <li>
                    <a class="seminar-item">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vq">
                        </iframe>
                        <h4 class="title font-18-800">
                            2023年8月1日、第2回健康投資推進協議会シンポジウムを開催
                        </h4>
                    </a>
                </li>
                <li>
                    <a class="seminar-item">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vq">
                        </iframe>
                        <h4 class="title font-18-800">
                            2023年8月1日、第2回健康投資推進協議会シンポジウムを開催
                        </h4>
                    </a>
                </li>
                <li>
                    <a class="seminar-item">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vq">
                        </iframe>
                        <h4 class="title font-18-800">
                            2023年8月1日、第2回健康投資推進協議会シンポジウムを開催
                        </h4>
                    </a>
                </li>
                <li>
                    <a class="seminar-item">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vq">
                        </iframe>
                        <h4 class="title font-18-800">
                            2023年8月1日、第2回健康投資推進協議会シンポジウムを開催
                        </h4>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>