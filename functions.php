<?php 

/**
 * Enqueue scripts and styles.
 */
function vetera_theme_scripts() {

  wp_enqueue_style( 'vetera-style', get_stylesheet_uri() );
  wp_enqueue_style( 'jquery-ui-css', get_template_directory_uri() . '/assets/vendor/jquery-ui.css', array(), 1);
  wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/vendor/slick/slick.css', array(), 'slick' );
  wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/fonts/stylesheet.css', array(), 1);
  //wp_enqueue_style( 'light-box', get_template_directory_uri() . '/assets/vendor/lightbox2/lightbox.min.css', array(), 1);


  wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js');
  wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/vendor/jquery-ui.js', '', true);
  wp_enqueue_script('slick-slider', get_template_directory_uri() . '/assets/vendor/slick/slick.min.js', '3.0.0', true);
  //wp_enqueue_script( 'light-box', get_template_directory_uri() . '/assets/vendor/lightbox2/lightbox.js');
  wp_enqueue_script( 'vetera-theme-scripts', get_template_directory_uri() . '/assets/js/build.min.js', '', true);
}
add_action( 'wp_enqueue_scripts', 'vetera_theme_scripts' );

/**
 * Differ scripts.
 */
function mind_defer_scripts( $tag, $handle, $src ) {
  $defer = array( 
    'jquery-min',
    'jquery-ui',
    'slick-slider',
    'vetera-theme-scripts'
  );
  if ( in_array( $handle, $defer ) ) {
     return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
  }
    
    return $tag;
} 
add_filter( 'script_loader_tag', 'mind_defer_scripts', 10, 3 );

/**
 * Blocking scripts to enhance loading speed
 */
add_action('wp_head', 'show_template');
function show_template() {
    global $template;
    $temp = basename($template);
    if($temp == 'front-page.php') {
      // Nothing to execute
    } else {
      wp_enqueue_script( 'addthis-script', 'https://s7.addthis.com/js/300/addthis_widget.js', array(), '20201026', true );
		
	  function globe_jquery_enqueue() {
		  wp_deregister_script( 'jquery' );
		}
		add_action( 'wp_enqueue_scripts', 'globe_jquery_enqueue' );
    }
}

/* Acdding Menu bar */
function vetera_theme_setup() {
  register_nav_menus( array( 
    'wp_nav_menu_objects' => 'Header menu',
    'footer_col-1' => 'Footer menu column 1',
    'footer_col-2' => 'Footer menu column 2',
    'footer_col-3' => 'Footer menu column 3',
    'bottom_col-1' => 'Bottom menu navigation',
  ) );
 }
add_action( 'after_setup_theme', 'vetera_theme_setup' );

/* Customizing menu icon */
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
function my_wp_nav_menu_objects( $items, $args ) {
  /* Loop */
	foreach( $items as &$item ) {
		/* vars */
    $icon = get_field('header_submenu_icon', $item);
    $alt = get_field('header_submenu_icon_alt', $item);
    $column = get_field('header_submenu_number_of_columns', $item);

    the_field('header_menu_layout');
    /* append icon */
      if( $icon ) {
        //$item->title .= '<img src="'.$icon.'" alt="'.$alt.'" height="24" width="24" />';
        $item->title .= '<span class="vetera-header__nav__dropdown-list-link-item-icon">
                          <img src="'.$icon.'" alt="'.$alt.'" height="24" width="24" />
                        </span>
                        <span class="vetera-header__nav__dropdown-list-item-link-txt">'.$item->title.'</span>';	
      } else {
        $item->title .= '<span class="column" data-column="'.$column.'"></span>';
      }
	}
	/* return */
	return $items;
}

/* Acdding widget slidebar */
function arphabet_widgets_init() {
  register_sidebar( array(
    'name' => 'Language Switcher',
    'id' => 'language_switcher',
    'before_widget' => '<aside>',
    'after_widget' => '</aside>',
  ));

  register_sidebar( array(
    'name' => 'Header menu',
    'id' => 'wp_nav_menu_objects', 
  ));
  register_sidebar( array(
    'name' => 'Footer Navigation One',
    'id' => 'footer_navigation_one',
  ));

  register_sidebar( array(
    'name' => 'Footer Navigation Two',
    'id' => 'footer_navigation_two',
  ));

  register_sidebar( array(
    'name' => 'Footer Navigation Three',
    'id' => 'footer_navigation_three',
  ));
  register_sidebar( array(
    'name' => 'Bottom Navigation',
    'id' => 'bottom_navigation',
  ));

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Vetera Theme Option Settings',
		'menu_title'	=> 'Vetera General Options',
		'menu_slug' 	=> 'vetera-theme-option-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
  ));
  acf_add_options_page(array(
		'page_title' 	=> 'Global components Settings',
		'menu_title'	=> 'Global components',
		'parent_slug'	=> 'vetera-theme-option-settings',
  ));
  acf_add_options_page(array(
		'page_title' 	=> 'Job listing page Settings',
		'menu_title'	=> 'Job listing page text',
		'parent_slug'	=> 'vetera-theme-option-settings',
  ));
  acf_add_options_page(array(
		'page_title' 	=> 'Integration page Options',
		'menu_title'	=> 'Integration page options',
		'parent_slug'	=> 'vetera-theme-option-settings',
  ));
  acf_add_options_page(array(
		'page_title' 	=> 'FAQ details page Options',
		'menu_title'	=> 'FAQ details page options',
		'parent_slug'	=> 'vetera-theme-option-settings',
  ));
  acf_add_options_page(array(
		'page_title' 	=> 'Blog page Options',
		'menu_title'	=> 'Blog page Options',
		'parent_slug'	=> 'vetera-theme-option-settings',
  ));
  acf_add_options_page(array(
		'page_title' 	=> 'Form Options',
		'menu_title'	=> 'Form options',
		'parent_slug'	=> 'vetera-theme-option-settings',
  ));
  acf_add_options_page(array(
		'page_title' 	=> '404 page Options',
		'menu_title'	=> '404 page options',
		'parent_slug'	=> 'vetera-theme-option-settings',
  ));
  register_sidebar( array(
    'name' => 'Footer Logo Block',
    'id' => 'footer_logo_block',
  ));

}

/* Careers job listing post type page */
function create_posttype() {
  register_post_type( 'joblisting', 
    array( 
      'label'=>'Joblisting',
      'name'=>'joblisting',
      'singular_name'=>'joblisting',
      'public'=>true,
      'show_ui'=>true,
      'hierarchical'=>true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports'=>array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes', 'content' ) 
    ) 
  );
  register_post_type( 'blog', 
    array( 
      'label'=>'Blog',
      'name'=>'blog',
      'singular_name'=>'blog',
      'public'=>true,
      'show_ui'=>true,
      'hierarchical'=>true,
      'show_in_rest' => true,
      'has_archive' => true,
      'taxonomies' => array('category'),
      'supports'=>array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes', 'content' ) 
    ) 
  );
  register_post_type( 'integration', 
    array( 
      'label'=>'Integration',
      'name'=>'integration',
      'singular_name'=>'integration',
      'public'=>true,
      'show_ui'=>true,
      'hierarchical'=>true,
      'show_in_rest' => true,
      'has_archive' => true,
      'taxonomies' => array('category', 'post_tag'),
      'supports'=>array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes', 'content' ) 
    ) 
  );
  register_post_type( 'faq', 
    array( 
      'label'=>'FAQ',
      'name'=>'faq',
      'singular_name'=>'faq',
      'public'=>true,
      'show_ui'=>true,
      'hierarchical'=>true,
      'show_in_rest' => true,
      'has_archive' => true,
      'taxonomies' => array('category'),
      'supports'=>array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes', 'content' ) 
    ) 
  );
  register_post_type( 'webinar', 
    array( 
      'label'=>'Webinar',
      'name'=>'webinar',
      'singular_name'=>'webinar',
      'public'=>true,
      'show_ui'=>true,
      'hierarchical'=>true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports'=>array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes', 'content' ) 
    ) 
  );
}
add_action ('init','create_posttype');
add_theme_support( 'post-thumbnails' );
remove_filter('get_the_excerpt', 'wp_trim_excerpt');

/* Custom post type excerpt */
add_post_type_support( 'page', 'excerpt' );

/* Live search functionality - Add the ajax fetch */
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
  function fetch(){
    jQuery.ajax({
        beforeSend: function(){
          jQuery('.loading-txt').css('display', 'block');
          jQuery('.searcharea').addClass('loading');
        },
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch', keyword: jQuery('#keyword').val(), type: jQuery('#keyword').data('post-type') },
        success: function(data) {
          if('#keyword'=="") {
            jQuery('.vetera-integration-cards__wrp').html( data );
            jQuery('.vetera-faq-details__list').html( data );
            jQuery('.loading-txt').hide();
            jQuery('.searcharea').removeClass('loading');
            jQuery('.vetera-comp-integrations-stats-card:lt(10)').addClass('show').fadeIn();

            var itmlen = jQuery('.vetera-comp-integrations-stats-card').length;
            jQuery('.vetera-comp-integrations-stats-card:lt(10)').addClass('show').fadeIn();

            x=10;
            jQuery('.vetera-comp-integrations-stats-card').slice(0, 10).show();
            //jQuery('.integration-loadmore').on('click', function (e) {
                //e.preventDefault();
                x = x+10;
                jQuery('.vetera-comp-integrations-stats-card').slice(0, x).slideDown().addClass('show');

                var showlen = jQuery('.show').length;
                console.log(showlen);
                if(showlen < 10) {
                    jQuery('.integration-loadmore').fadeOut();
                } else {
                  jQuery('.integration-loadmore').fadeIn();
                  x=10;
                  jQuery('.vetera-comp-integrations-stats-card').slice(0, 10).show();
                  jQuery('.integration-loadmore').on('click', function (e) {
                      e.preventDefault();
                      x = x+10;
                      jQuery('.vetera-comp-integrations-stats-card').slice(0, x).slideDown().addClass('show');

                      var showlen = jQuery('.show').length;
                      if(showlen == itmlen) {
                          jQuery('.integration-loadmore').fadeOut();
                      }
                  });
              }
          } else {
            jQuery('.vetera-integration-cards__wrp').html( data );
            jQuery('.vetera-faq-details__list').html( data );
            jQuery('.loading-txt').hide();
            jQuery('.searcharea').removeClass('loading');

            var itmlen = jQuery('.vetera-comp-integrations-stats-card').length;
            jQuery('.vetera-comp-integrations-stats-card:lt(10)').addClass('show').fadeIn();

            var showlen = jQuery('.show').length;
            if(showlen < 10) {
                jQuery('.integration-loadmore').fadeOut();
            } else {
              jQuery('.integration-loadmore').fadeIn();
              x=10;
              jQuery('.vetera-comp-integrations-stats-card').slice(0, 10).show();
              jQuery('.integration-loadmore').on('click', function (e) {
                  e.preventDefault();
                  x = x+10;
                  jQuery('.vetera-comp-integrations-stats-card').slice(0, x).slideDown().addClass('show');

                  var showlen = jQuery('.show').length;
                  if(showlen == itmlen) {
                      jQuery('.integration-loadmore').fadeOut();
                  }
              });
            }
          }
        }
    });
  }
</script>

<?php }
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');

/* Ajax search function for Integration post type */

function data_fetch(){ 

  $the_query = new WP_Query( array( 'posts_per_page' => -1, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => esc_attr( $_POST['type'] )));

    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post(); ?>
          
          <?php 

            if($_POST['type'] == 'faq') {

            ?>
              <!-- FAQs card component -->
              <div class="vetera-comp-faqs-card mt-20 d-flex">
                  <div class="vetera-comp-faqs-card__icon mr-16 mt-8">
                      <img src="<?php the_field('faq_question_symbol', 'option'); ?>" alt="FAQ symbol">
                  </div>
                  <div class="vetera-comp-faqs-card__body">
                    <p class="txt-md mt-0 mb-4 vetera-comp-faqs-card__body-title color-blue1"><a class="color-blue1" href="<?php the_permalink(); ?>"><?php printf( get_the_title() ); ?></a></p>
                    <p class="m-0 mb-4 txt-sm color-grayedblue the-excerpt"><?php echo get_the_excerpt(); ?></p>
                    <div class="d-flex">
                      <?php
                          $categories = get_the_category();
                          $separator = ' ';
                          $output = '';
                          if ( ! empty( $categories ) ) {
                              foreach( $categories as $category ) {
                                  $output .= '<div class="vetera-typography__text-links-blk mr-20">
                                                  <a class="txt-sm color-darkblue" href="?cat=' . strtolower($category->name) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator . 
                                              '</div>';
                              }
                              echo trim( $output, $separator );
                          }
                      ?>
                    </div>
                  </div>
              </div>
              <!-- ./FAQs card component -->
            <?php

                } else if($_POST['type'] == 'integration') {
                  ?>
                    <!-- Integration details recommended logo card -->
                    <div class="vetera-comp-integrations-stats-card p-24 bg-color-white mb-20 mb-dt-0">
                        <div class="vetera-comp-integrations-stats-card__img mb-20">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'full vetera-comp-integrations-stats-card__main-image' );
                            }
                        ?>
                        </div>
                        <div class="vetera-comp-integrations-stats-card__body mt-0 mb-0">
                            <p class="text-uppercase m-0 vetera-comp-integrations-stats-card__body-title text-uppercase color-darkash"><?php the_field('integration_post_subtitle'); ?></p>
                            <p class="txt-sm color-darkergray1 m-0 mb-20 the-excerpt"><?php echo get_the_excerpt(); ?></p>
                            <a class="link link--secondary d-inline-block" href="<?php the_permalink(); ?>"><?php the_field('integration_post_learn_more'); ?></a>
                        </div>
                    </div>
                    <!-- ./Integration details recommended logo card --> 
                  <?php
                }
                ?>

        <?php endwhile;
        wp_reset_postdata(); 
    else :
      echo '<p class="mt-4 txt-sm">'. the_field('no_match_text', 'option') .'</p>';
    endif;
  die();
}

/* Generate short code - newsletter block */
function vetera_newsletter_form_shortcode($atts) {
  /* Props */
  $props = shortcode_atts( array(
    'heading' => 'Vetera can help',
    'description' => 'Subscribe for veterinary related content sent straight to your inbox.',
    'formid' => 2483 
    //'formid' => 163
  ), $atts );
  /* Output HTML structure */
  $output .= '<div class="vetera-comp-blog-help bg-color-blue1 px-dt-28 px-24 py-dt-24 py-32 mt-32 mb-32">
    <div class="vetera-comp-blog-help__body">
      <p class="mb-4 mt-0 color-torch-red">' . $props['heading'] . '</p>
      <p class="mb-0 mt-0 color-white">' . $props['description'] . '</p>
    </div>
    <div class="vetera-comp-blog-help__newsletter">' . do_shortcode('[contact-form-7 id="' . $props['formid'] . '" title="Subscribe form"]')  . '</div>
  </div>';
  return $output;
}
add_shortcode( 'newsletterform', 'vetera_newsletter_form_shortcode' );
//[contact-form-7 id="2275" title="Newsletter form"]
// [newsletterform heading="Vetera can help" description="Subscribe for veterinary related content sent straight to your inbox." formid=2275]

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/* Access to upload .svg images */
function add_file_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
  }
add_filter('upload_mimes', 'add_file_types_to_uploads');

/**
 * Prevent include node-modules files when exporting using WP-all-in-one plugin
 */
add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {

  $exclude_filters[] = 'themes/vetera-website-frontend/node_modules';

  return $exclude_filters;

  $exclude_filters[] = 'themes/vetera-website-frontend/node_modules';
  return $exclude_filters;
});