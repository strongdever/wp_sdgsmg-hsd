<?php
if ( ! defined( 'ABSPATH' ) ) exit;
add_shortcode('url', function ( $atts ) {
    if(isset($atts['arg'])) {
        return site_url($atts['arg']);
    }
    return get_theme_file_uri();
} );

// サイト情報
define( 'HOME', home_url( '/' ) );
define( 'TITLE', get_option( 'blogname' ) );

// 状態
define( 'IS_ADMIN', is_admin() );
define( 'IS_LOGIN', is_user_logged_in() );
define( 'IS_CUSTOMIZER', is_customize_preview() );

// テーマディレクトリパス
define( 'T_DIRE', get_template_directory() );
define( 'S_DIRE', get_stylesheet_directory() );
define( 'T_DIRE_URI', get_template_directory_uri() );
define( 'S_DIRE_URI', get_stylesheet_directory_uri() );

add_filter('query_vars', function($vars) {
	$vars[] = 'plan';
    return $vars;
});

define( 'THEME_NOTE', 'shinpohouse' );

define( 'WPCF7_AUTOP', false );

error_reporting(0);

flush_rewrite_rules();

// 固定ページとMW WP Formでビジュアルモードを使用しない
function stop_rich_editor($editor) {
    global $typenow;
    global $post;
    if(in_array($typenow, array('page', 'post', 'mw-wp-form'))) {
        $editor = true;
    }
    return $editor;
}

add_filter('user_can_richedit', 'stop_rich_editor');

add_filter('show_admin_bar', '__return_false', 99); //remove the space by the admin bar

// エディター独自スタイル追加
//TinyMCE追加用のスタイルを初期化
if(!function_exists('initialize_tinymce_styles')) {
    function initialize_tinymce_styles($init_array) {
        //追加するスタイルの配列を作成
        $style_formats = array(
            array(
                'title' => '注釈',
                'inline' => 'span',
                'classes' => 'cmn_note'
            )
        );
        //JSONに変換
        $init_array['style_formats'] = json_encode($style_formats);
        return $init_array;
    }
}

add_filter('tiny_mce_before_init', 'initialize_tinymce_styles', 10000);

// オプションページを追加
if(function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title' => 'テーマオプション', // 設定ページで表示される名前
        'menu_title' => 'テーマオプション', // ナビに表示される名前
        'menu_slug' => 'top_setting',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

function my_script_constants() {
?>
    <script type="text/javascript">
        var templateUrl = '<?php echo S_DIRE_URI; ?>';
        var baseSiteUrl = '<?php echo HOME; ?>';
        var themeAjaxUrl = '<?php echo admin_url( 'admin-ajax.php' ) ?>';
    </script>
<?php
}

add_action('wp_head', 'my_script_constants');

// CSS・スクリプトの読み込み
function theme_add_files() {
    global $post;

    wp_enqueue_style('c-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', [], '1.0', 'all');
	wp_enqueue_style('c-fonts', T_DIRE_URI.'/assets/font/fonts.css', [], '1.0', 'all');
    wp_enqueue_style('c-reset', T_DIRE_URI.'/assets/css/reset.css', [], '1.0', 'all');
    wp_enqueue_style('c-common', T_DIRE_URI.'/assets/css/common.css', [], '1.0', 'all');
    wp_enqueue_style('c-style', T_DIRE_URI.'/assets/css/style.css', [], '1.0', 'all');
    wp_enqueue_style('c-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css', [], '1.0', 'all');
    wp_enqueue_style('c-slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css', [], '1.0', 'all');
    wp_enqueue_style('c-pagination', T_DIRE_URI.'/assets/css/simplePagination.css', [], '1.0', 'all');

    wp_enqueue_style('c-theme', T_DIRE_URI.'/style.css', [], '1.0', 'all');
    // WordPress本体のjquery.jsを読み込まない
    if(!is_admin()) {
        wp_deregister_script('jquery');
    }

    wp_enqueue_script('s-jquery', T_DIRE_URI.'/assets/js/jquery.min.js', [], '1.0', false);
    wp_enqueue_script('s-pagination', T_DIRE_URI.'/assets/js/simplePagination.js', [], '1.0', false);
}

add_action('wp_enqueue_scripts', 'theme_add_files');

function theme_admin_assets() {
    wp_enqueue_script( 'csv-uploader', T_DIRE_URI . '/admin/script.js', array( 'jquery' ) );
}

// add_action('admin_enqueue_scripts', 'theme_admin_assets');

function custom_term_radio_checklist( $args ) {
    if ( ! empty( $args['taxonomy'] ) && $args['taxonomy'] === 'product' || $args['taxonomy'] === 'category' ) {
        if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { 
            if ( ! class_exists( 'WPSE_139269_Walker_Category_Radio_Checklist' ) ) {
                class WPSE_139269_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {
                    function walk( $elements, $max_depth, ...$args ) {
                        $output = parent::walk( $elements, $max_depth, ...$args );
                        $output = str_replace(
                            array( 'type="checkbox"', "type='checkbox'" ),
                            array( 'type="radio"', "type='radio'" ),
                            $output
                        );

                        return $output;
                    }
                }
            }

            $args['walker'] = new WPSE_139269_Walker_Category_Radio_Checklist;
        }
    }

    return $args;
}

add_filter( 'wp_terms_checklist_args', 'custom_term_radio_checklist' );

function theme_custom_setup() {
    add_theme_support( 'post-thumbnails' ); 
    // add_image_size( "thumbnail", 150, 100, true );
    // add_image_size( "case-thumbnail", 96, 96, true );
    // add_image_size( "medium", 480, 320, true );
    // set_post_thumbnail_size( 480, 320, true );
    add_editor_style('assets/css/reset.css');
    add_editor_style('assets/css/common.css');
    add_editor_style('assets/css/style.css');
    add_editor_style('editor-style.css');
    add_theme_support( 'automatic-feed-links' );
}

add_action( 'after_setup_theme', 'theme_custom_setup' );

//------remove autop------{
add_filter('tiny_mce_before_init', 'disable_wpautop');
function disable_wpautop($init) {
    $init['wpautop'] = false;
    return $init;
}

define( 'WPCF7_AUTOP', false );

function disable_wp_auto_p( $content ) {
    if ( is_singular( 'page' ) ) {
      remove_filter( 'the_content', 'wpautop' );
    }
    remove_filter( 'the_excerpt', 'wpautop' );
    return $content;
}

add_filter( 'the_content', 'disable_wp_auto_p', 0 );

add_filter('wpcf7_autop_or_not', '__return_false');

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function custom_tinymce_config( $init ) {
    $init['wpautop'] = false;
    $init['apply_source_formatting'] = true;
    $init['forced_root_block'] = false;
    $init['force_br_newlines'] = true;
    $init['force_p_newlines'] = false;
    $init['convert_newlines_to_brs'] = true;
    return $init;
}
add_filter( 'tiny_mce_before_init', 'custom_tinymce_config' );
//<------remove autop------}

function custom_excerpt_length($length) {
    return 120; // Change this number to set your desired character limit
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more($more) {
    return '...'; // Replace this string with your desired ellipsis
}
add_filter('excerpt_more', 'custom_excerpt_more');

//hide the content editor of the interview post
add_action( 'init', function() {
    remove_post_type_support( 'interview', 'editor' );
}, 99);

add_action( 'init', function() {
    remove_post_type_support( 'case', 'editor' );
}, 99);

function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
  
    if(empty($first_img)) {
      $first_img = T_DIRE_URI . "/assets/img/noimage.png";
    }
    return $first_img;
}

//pagination
function custom_pagination($total_pages, $current_page = 1, $total_counts = 0) {
    global $wp_query;

    $big = 99999999; // set a big number for the links

    $paginate_links = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, $current_page),
        'total' => $total_pages,
        'type' => 'array',
        'prev_text' => __('<i class="fa fa-angle-left bounce"></i>'),
        'next_text' => __('<i class="fa fa-angle-right bounce"></i>'),
        'show_all' => true,
        'end_size' => 3,
        'mid_size' => 3
    ));

    
?>
    
    <?php if ($paginate_links) : ?>
    <div class="pager">
        <ul class="pager__wrap">
            <?php foreach ($paginate_links as $link) : ?>
                <li class="pager__bt"><?php echo $link; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>
<?php
}

//よく読まれている記事
function track_post_views($post_id) {
    $count_key = 'post_views_count';
    $count = get_post_meta($post_id, $count_key, true);
    if ($count === '') {
        $count = 0;
        add_post_meta($post_id, $count_key, $count);
    } else {
        $count++;
        update_post_meta($post_id, $count_key, $count);
    }
}

function track_post_views_init() {
    if (is_single() && !is_admin()) {
        $post_id = get_the_ID();
        if ($post_id) {
            track_post_views($post_id);
        }
    }
}
add_action('wp', 'track_post_views_init');

function set_custom_meta_key($post_id)
{    //when click the publish button
    // Check if the post is not an auto-save or revision
    if (!wp_is_post_autosave($post_id) && !wp_is_post_revision($post_id)) {
        // Set the value for your custom meta key
        $post = get_post($post_id);

        //meta keys of post_title and post_content
        if ($post) {
            $post_title = $post->post_title;
            $post_content = $post->post_content;
        } else {
            $post_title = "";
            $post_content = "";
        }
        update_post_meta($post_id, 'report_title', $post_title);
        update_post_meta($post_id, 'report_content', $post_content);

        //initializing the meta key for 人気順
        $ranking_value = (int) get_post_meta($post_id, 'popularity_ranking', true);
        if (!($ranking_value > 0)) {
            update_post_meta($post_id, 'popularity_ranking', 0);
        }

    }
}
add_action('save_post', 'set_custom_meta_key');

?>