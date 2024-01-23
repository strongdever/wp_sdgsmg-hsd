<?php get_header(); ?>

<main class="single-news-page">
    <div class="subpage-firstview">
        <div class="page-label">
            <div class="container">
                <h2 class="eng font-20-800">News</h2>
                <h1 class="head-text font-40-600">お知らせ</h1>
            </div>
        </div>
    </div>

    <div class="news-wrapper">
        <div class="container">
            <div class="news-content">
                <div class="date font-16-500">
                    <?php echo get_the_time('Y.m.d'); ?>
                </div>
                <h2 class="title font-24-600">
                    <?php the_title(); ?>
                </h2>
                <p class="content font-16-500">
                    <?php the_content(); ?>
                </p>
                <?php if (shortcode_exists('addtoany')): ?>
                    <?php echo do_shortcode('[addtoany]'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <a class="href-left" href="<?php echo HOME . 'news'; ?>">
        <div class="svg-wrapper">
            <div class="circle"></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path
                    d="M1.96937 8.53073L6.46937 13.0307C6.61027 13.1716 6.80137 13.2508 7.00062 13.2508C7.19988 13.2508 7.39098 13.1716 7.53187 13.0307C7.67277 12.8898 7.75193 12.6987 7.75193 12.4995C7.75193 12.3002 7.67277 12.1091 7.53187 11.9682L4.3125 8.75011H13.5C13.6989 8.75011 13.8897 8.67109 14.0303 8.53044C14.171 8.38979 14.25 8.19902 14.25 8.00011C14.25 7.8012 14.171 7.61043 14.0303 7.46978C13.8897 7.32913 13.6989 7.25011 13.5 7.25011H4.3125L7.53063 4.03011C7.67152 3.88921 7.75068 3.69812 7.75068 3.49886C7.75068 3.2996 7.67152 3.10851 7.53063 2.96761C7.38973 2.82671 7.19863 2.74756 6.99938 2.74756C6.80012 2.74756 6.60902 2.82671 6.46813 2.96761L1.96813 7.46761C1.89819 7.53738 1.84273 7.62028 1.80493 7.71155C1.76713 7.80281 1.74773 7.90065 1.74784 7.99943C1.74796 8.09822 1.76759 8.19601 1.80561 8.28718C1.84363 8.37836 1.89928 8.46113 1.96937 8.53073Z"
                    fill="white" />
            </svg>
        </div>
        <span class="font-18-600">お知らせ一覧に戻る</span>
    </a>
</main>

<?php get_footer(); ?>