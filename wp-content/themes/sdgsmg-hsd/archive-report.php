<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$cat_slug = get_query_var('report-category') ? get_query_var('report-category') : "";
$s = get_query_var('s') ? get_query_var('s') : "";
$search_keys = explode( ' ', $s );

?>

<main class="report-page">
    <div class="subpage-firstview">
        <div class="page-label">
            <div class="container">
                <h2 class="eng font-20-800">Report</h2>
                <h1 class="head-text font-40-600">活動報告</h1>
            </div>
        </div>
    </div>

    <div class="reports-wrapper">
        <div class="container">
            <div class="categories-search">
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
            </div>

            <?php
            $args = [
                'post_type' => 'report',
                'post_status' => 'publish',
                'paged' => $paged,
                'posts_per_page' => -1,
                'orderby' => 'post_date',
                'order' => 'DESC',
            ];

            $tax_query = [];
            if ($cat_slug) {
                $tax_query[] = [
                    'taxonomy' => 'report-category',
                    'field' => 'slug',
                    'terms' => $cat_slug,
                ];
            }

            if (!empty($tax_query)) {
                $args['tax_query'] = $tax_query;
            }

            //search keys
            if( !empty($search_keys) ) {
                $meta_query = [
                    'relation' => 'OR',
                ];
                foreach( $search_keys as $search_key ) {
                    $meta_query[] = array(
                        'key'     => 'report_title', // Replace with the custom field key if needed
                        'value'   => $search_key, // Replace with your search keywords
                        'compare' => 'LIKE',
                    );
                    $meta_query[] = array(
                        'key'     => 'report_content', // Replace with the custom field key if needed
                        'value'   => $search_key, // Replace with your search keywords
                        'compare' => 'LIKE',
                    );
                }
                $args['meta_query'] = $meta_query;
            }
            
            $custom_query = new WP_Query($args);
            ?>

            <?php if ($custom_query->have_posts()): ?>
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
                <div id="news-pagination"></div>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
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