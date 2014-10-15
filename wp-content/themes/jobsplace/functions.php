<?php
//Necessary Files
foreach ( glob(get_template_directory() . "/inc/*.php") as $filename ) {
	require_once $filename;
}

//Actions
add_action( 'init', 'load_scripts' );
add_action( 'init', 'load_stylesheets' );
add_action('wp_head','pluginname_ajaxurl');

//add Image

//Filters
add_filter('show_admin_bar', '__return_false');



//Functions
function load_scripts() {
	if ( is_admin() ) return;
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '0.1', true );
	
	wp_enqueue_script( 'abide', get_template_directory_uri() . '/assets/js/foundation.abide.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'accordion', get_template_directory_uri() . '/assets/js/foundation.accordion.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/assets/js/foundation.dropdown.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'equalizer', get_template_directory_uri() . '/assets/js/foundation.equalizer.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'interchange', get_template_directory_uri() . '/assets/js/foundation.interchange.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'joyride', get_template_directory_uri() . '/assets/js/foundation.joyride.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/js/foundation.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'magellan', get_template_directory_uri() . '/assets/js/foundation.magellan.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'offcanvas', get_template_directory_uri() . '/assets/js/foundation.offcanvas.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'orbit', get_template_directory_uri() . '/assets/js/foundation.orbit.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'reveal', get_template_directory_uri() . '/assets/js/foundation.reveal.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/foundation.slider.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'tab', get_template_directory_uri() . '/assets/js/foundation.tab.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'tooltip', get_template_directory_uri() . '/assets/js/foundation.tooltip.js', array( 'jquery' ), '0.1.4', true );
	wp_enqueue_script( 'topbar', get_template_directory_uri() . '/assets/js/foundation.topbar.js', array( 'jquery' ), '0.1.4', true );
	

}

function load_stylesheets() {
	if ( is_admin() ) return;
	wp_enqueue_style( 'main.css', get_template_directory_uri() . '/assets/css/style.css', array(), '0.1', 'all' );
	wp_enqueue_style( 'foundation.css', get_template_directory_uri() . '/assets/css/foundation.css', array(), '0.1', 'all' );
	wp_enqueue_style( 'normalize.css', get_template_directory_uri() . '/assets/css/normalize.css', array(), '0.1', 'all' );
}

function trim_letras( $conteudo, $caracteres ) {
	$texto = wp_trim_words( $conteudo , $caracteres );
	// Só realiza ela caso a string possua mais caracteres do que o delimitado
	if( mb_strlen( $texto ) > $caracteres ){
		$corte_texto = trim ( mb_substr( $texto, 0, $caracteres, 'UTF-8') );
		$exp_texto = explode(" ", $corte_texto);
		$palavra = '';
		//Loop remove a última palavra do resultado final, pois ela vem cortada e pode vir comprometida se escrita com caracteres especiais
		for ($i=0; $i < count( $exp_texto ) -1 ; $i++) {
		    $palavra .= $exp_texto[$i] . ' ';
		}
		$final = trim( $palavra );
		$final .= "...";
	}
	else {
		$final = $texto;
	}

	return $final;
}

/* function menu_futura() {
	register_nav_menus(
	  array(
		'menu_futura' => __( 'Menu do Futura' ),
		'echo'            => true,
	   )
  	);
}
*/

/* function get_evento(){
	$e = new WP_Query( array( 'post_type' => 'eventos' ) );
	if( $e->have_posts() ){
		while( $e->have_posts() ){
			$e->the_post();
			return get_post(get_the_ID());
		}
	}
	wp_reset_query();
}
*/

function pluginname_ajaxurl() {
	?>
	<script type="text/javascript">
	var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
	</script>
	<?php
}

//Custom WordPress Login Logo
function cutom_login_logo() {
echo "<style type=\"text/css\">
body.login div#login h1 a {
background-image: url(".get_bloginfo('template_directory')."/assets/images/logo.png)!important;
padding-bottom: 0px!important;
width: 367px!important;
height: 80px!important;
background-size: 323px!important;
margin-left: -25px;
}
</style>";
}
add_action( 'login_enqueue_scripts', 'cutom_login_logo' );