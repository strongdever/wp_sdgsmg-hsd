<?php get_header(); ?>

<main class="single-report-page">
    <div class="subpage-firstview">
        <div class="page-label">
            <div class="container">
                <h2 class="eng font-20-800">Report</h2>
                <h1 class="head-text font-40-600">活動報告</h1>
            </div>
        </div>
    </div>

    <div class="report-wrapper">
        <div class="container">
            <div class="left-wrapper">
                <div class="report-content">
                    <?php if (has_post_thumbnail()): ?>
                        <img class="thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>">
                    <?php else: ?>
                        <img class="thumbnail" src="<?php echo catch_that_image(); ?>">
                    <?php endif; ?>
                    <h2 class="title font-24-600">
                        <?php the_title(); ?>
                    </h2>
                    <p class="content font-16-500">
                        <?php the_content(); ?>
                    </p>
                </div>
                <a class="href-left" href="<?php echo HOME . 'report'; ?>">
                    <div class="svg-wrapper">
                        <div class="circle"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path
                                d="M1.96937 8.53073L6.46937 13.0307C6.61027 13.1716 6.80137 13.2508 7.00062 13.2508C7.19988 13.2508 7.39098 13.1716 7.53187 13.0307C7.67277 12.8898 7.75193 12.6987 7.75193 12.4995C7.75193 12.3002 7.67277 12.1091 7.53187 11.9682L4.3125 8.75011H13.5C13.6989 8.75011 13.8897 8.67109 14.0303 8.53044C14.171 8.38979 14.25 8.19902 14.25 8.00011C14.25 7.8012 14.171 7.61043 14.0303 7.46978C13.8897 7.32913 13.6989 7.25011 13.5 7.25011H4.3125L7.53063 4.03011C7.67152 3.88921 7.75068 3.69812 7.75068 3.49886C7.75068 3.2996 7.67152 3.10851 7.53063 2.96761C7.38973 2.82671 7.19863 2.74756 6.99938 2.74756C6.80012 2.74756 6.60902 2.82671 6.46813 2.96761L1.96813 7.46761C1.89819 7.53738 1.84273 7.62028 1.80493 7.71155C1.76713 7.80281 1.74773 7.90065 1.74784 7.99943C1.74796 8.09822 1.76759 8.19601 1.80561 8.28718C1.84363 8.37836 1.89928 8.46113 1.96937 8.53073Z"
                                fill="white" />
                        </svg>
                    </div>
                    <span class="font-18-600">一覧に戻る</span>
                </a>
            </div>

            <div class="sidebar">
                <div class="search-bar">
                    <input type="text" class="font-16-500 search-keys" placeholder="キーワードを入力">
                    <button class="btn-search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M21.7958 20.2041L17.3436 15.75C18.6785 14.0104 19.3018 11.8282 19.0869 9.64606C18.872 7.46389 17.8352 5.44515 16.1866 3.99936C14.538 2.55356 12.4013 1.78898 10.2097 1.8607C8.01817 1.93243 5.93595 2.83509 4.38546 4.38558C2.83497 5.93607 1.93231 8.01829 1.86058 10.2098C1.78886 12.4014 2.55344 14.5382 3.99924 16.1867C5.44503 17.8353 7.46377 18.8722 9.64594 19.087C11.8281 19.3019 14.0103 18.6787 15.7499 17.3437L20.2058 21.8006C20.3105 21.9053 20.4347 21.9883 20.5714 22.0449C20.7081 22.1015 20.8547 22.1307 21.0027 22.1307C21.1507 22.1307 21.2972 22.1015 21.434 22.0449C21.5707 21.9883 21.6949 21.9053 21.7996 21.8006C21.9042 21.696 21.9872 21.5717 22.0439 21.435C22.1005 21.2983 22.1296 21.1517 22.1296 21.0037C22.1296 20.8557 22.1005 20.7092 22.0439 20.5725C21.9872 20.4357 21.9042 20.3115 21.7996 20.2069L21.7958 20.2041ZM4.12487 10.5C4.12487 9.23914 4.49876 8.0066 5.19925 6.95823C5.89975 5.90987 6.89539 5.09277 8.06026 4.61026C9.22514 4.12775 10.5069 4.00151 11.7436 4.24749C12.9802 4.49347 14.1161 5.10063 15.0077 5.99219C15.8992 6.88375 16.5064 8.01966 16.7524 9.25629C16.9984 10.4929 16.8721 11.7747 16.3896 12.9396C15.9071 14.1045 15.09 15.1001 14.0416 15.8006C12.9933 16.5011 11.7607 16.875 10.4999 16.875C8.80965 16.8733 7.18915 16.201 5.99398 15.0059C4.79882 13.8107 4.12661 12.1902 4.12487 10.5Z"
                                fill="white" />
                        </svg>
                    </button>
                </div>

                <div class="categories-wrapper">
                    <div class="spot-title font-20-600">カテゴリー</div>
                    <?php
                    $cats_args = [
                        'taxonomy' => 'report-category',
                        'hide_empty' => false,
                    ];
                    $cats = get_terms($cats_args);
                    ?>
                    <?php if ($cats): ?>
                        <ul class="category-list">
                            <?php foreach ($cats as $cat): ?>
                                <li class="category-item">
                                    <a class="btn category<?php if ($cat_slug == $cat->slug) {
                                        echo ' active';
                                    } else {
                                        echo '';
                                    } ?>" href="<?php echo get_term_link($cat); ?>">
                                        <span>
                                            <?php echo $cat->name; ?>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <?php
                $args = array(
                    'post_type' => 'report',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                );

                $popular_posts_query = new WP_Query($args);
                ?>
                <?php if ($popular_posts_query->have_posts()): ?>
                    <div class="articles-wrapper frequency">
                        <div class="spot-title font-20-600">よく読まれている記事</div>
                        <ul class="article-list">
                            <?php while ($popular_posts_query->have_posts()):
                                $popular_posts_query->the_post(); ?>
                                <li>
                                    <a class="article-item" href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()): ?>
                                            <img class="article-img" src="<?php echo get_the_post_thumbnail_url(); ?>">
                                        <?php else: ?>
                                            <img class="article-img" src="<?php echo catch_that_image(); ?>">
                                        <?php endif; ?>
                                        <h2 class="title font-15-600">
                                            <?php the_title(); ?>
                                        </h2>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php
                $args = array(
                    'post_type' => 'report',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                );

                $popular_posts_query = new WP_Query($args);
                ?>
                <?php if ($popular_posts_query->have_posts()): ?>
                <div class="articles-wrapper recent">
                    <div class="spot-title font-20-600">最新記事</div>
                    <ul class="article-list">
                        <?php while ($popular_posts_query->have_posts()):
                            $popular_posts_query->the_post(); ?>
                            <li>
                                <a class="article-item" href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()): ?>
                                        <img class="article-img" src="<?php echo get_the_post_thumbnail_url(); ?>">
                                    <?php else: ?>
                                        <img class="article-img" src="<?php echo catch_that_image(); ?>">
                                    <?php endif; ?>
                                    <h2 class="title font-15-600">
                                        <?php the_title(); ?>
                                    </h2>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<script type="text/javascript">
    !(function ($) {
        $(document).ready(function () {
            $('.search-keys').val("<?php echo $s; ?>");

            $('.btn-search').click(function () {
                var search_key = $('.search-keys').val();
                if (search_key != '') {
                    window.location.href = "<?php echo HOME . 'report'; ?>/?s=" + search_key;
                } else {
                    window.location.href = "<?php echo HOME . 'report'; ?>";
                }
            });
        });
    })(jQuery);
</script>

<?php get_footer(); ?>