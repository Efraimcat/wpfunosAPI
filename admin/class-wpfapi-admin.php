<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}
/**
* The admin-specific functionality of the plugin.
*
* @link       https://efraim.cat
* @since      1.0.0
*
* @package    Wpfapi
* @subpackage Wpfapi/admin
*/

class Wpfapi_Admin {

  private $plugin_name;
  private $version;

  public function __construct( $plugin_name, $version ) {
    $this->plugin_name = $plugin_name;
    $this->version = $version;

    add_action('rest_api_init', array( $this, 'registerServiciosRoutes' ), 9);
  }

  public function enqueue_styles() {
    wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wpfapi-admin.css', array(), $this->version, 'all' );
  }

  public function enqueue_scripts() {
    wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wpfapi-admin.js', array( 'jquery' ), $this->version, false );
  }

  /**
  *
  */
  //https://developer.wordpress.org/rest-api/extending-the-rest-api/routes-and-endpoints/
  public function registerServiciosRoutes(){
    register_rest_route( 'WpfAPI/v1', '/servicios',array(
      'methods'  => WP_REST_Server::READABLE,
      'callback' => array( $this,'getServiciosAll' ),
    ));
    register_rest_route( 'WpfAPI/v1', '/servicio/(?P<id>[\d]+)',array(
      'methods'  => WP_REST_Server::READABLE,
      'callback' => array( $this,'getServiciosByID' ),
    ));
  }

  /**
  *
  */
  public function getServiciosAll($request) {
    // In practice this function would fetch the desired data. Here we are just making stuff up.
    $userIP = apply_filters('wpfunos_userIP','dummy');
    $this->custom_logs('==> WpfAPI/v1/servicios (' .$userIP. ')' );
    $products = array(
      '1' => 'I am product 1',
      '2' => 'I am product 2',
      '3' => 'I am product 3',
    );
    return rest_ensure_response( $products );
  }

  /**
  *
  */
  public function getServiciosByID($request) {
    $userIP = apply_filters('wpfunos_userIP','dummy');
    $this->custom_logs('==> WpfAPI/v1/servicio/' .$request['id']. ' (' .$userIP. ')' );
    $args = array(
      'servicio' => $request['id']
    );

    $post = get_post($args['servicio']);

    if (empty($post)) {
      return new WP_Error( 'servicio_inexistente', 'No hay servicios a mostrar', array('status' => 404) );
    }

    if( $post->post_type != 'servicios_wpfunos'){
      return new WP_Error( 'servicio_erroneo', 'El id no corresponde a un servicio', array('status' => 404) );
    }

    if( $post->post_status != 'publish'){
      return new WP_Error( 'servicio_sin_publicar', 'El servicio no está activo', array('status' => 404) );
    }



    $response = new WP_REST_Response($post);
    $response->set_status(200);

    return $response;
  }

  /**
  * Utility: create entry in the log file.
  *
  */
  private function custom_logs($message){
    $upload_dir = wp_upload_dir();
    if (is_array($message)) {
      $message = json_encode($message);
    }
    if (!file_exists( $upload_dir['basedir'] . '/wpfunos-logs') ) {
      mkdir( $upload_dir['basedir'] . '/wpfunos-logs' );
    }
    $time = current_time("d-M-Y H:i:s:v");
    $ban = "#$time: $message\r\n";
    $file = $upload_dir['basedir'] . '/wpfunos-logs/wpfunos-adminlog-' . current_time("Y-m-d") . '.log';
    $open = fopen($file, "a");
    fputs($open, $ban);
    fclose( $open );
  }

}
