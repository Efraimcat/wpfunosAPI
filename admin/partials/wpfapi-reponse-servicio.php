<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}
/**
* Provide a admin area view for the plugin
*
* This file is used to markup the admin-facing aspects of the plugin.
*
* @link       https://efraim.cat
* @since      1.0.0
*
* @package    Wpfapi
* @subpackage Wpfapi/admin/partials
*/

//get_post_meta( $servicio, 'wpfunos_servicioTextoPrecio', true )
$post->servicioNombre = get_post_meta( $post->ID, 'wpfunos_servicioNombre', true );
$post->servicioEmpresa = get_post_meta( $post->ID, 'wpfunos_servicioEmpresa', true );
$post->servicioPoblacion = get_post_meta( $post->ID, 'wpfunos_servicioPoblacion', true );
$post->servicioProvincia = get_post_meta( $post->ID, 'wpfunos_servicioProvincia', true );
$post->servicioDireccion = get_post_meta( $post->ID, 'wpfunos_servicioDireccion', true );
$post->servicioEmail = get_post_meta( $post->ID, 'wpfunos_servicioEmail', true );
$post->servicioTelefono = get_post_meta( $post->ID, 'wpfunos_servicioTelefono', true );
$post->servicioPack = get_post_meta( $post->ID, 'wpfunos_servicioPackNombre', true );
$post->servicioPrecioBase = get_post_meta( $post->ID, 'wpfunos_servicioPrecioBase', true );
$post->servicioPrecioBaseComentario = get_post_meta( $post->ID, 'wpfunos_servicioPrecioBaseComentario', true );
$post->servicioEntierro = get_post_meta( $post->ID, 'wpfunos_servicioDestino_1Nombre', true );
$post->servicioEntierroPrecio = get_post_meta( $post->ID, 'wpfunos_servicioDestino_1Precio', true );
$post->servicioEntierroComentario = get_post_meta( $post->ID, 'wpfunos_servicioDestino_1Comentario', true );
$post->servicioIncineracion = get_post_meta( $post->ID, 'wpfunos_servicioDestino_2Nombre', true );
$post->servicioIncineracionPrecio = get_post_meta( $post->ID, 'wpfunos_servicioDestino_2Precio', true );
$post->servicioIncineracionComentario = get_post_meta( $post->ID, 'wpfunos_servicioDestino_2Comentario', true );
$post->servicioAtaudEconomico = get_post_meta( $post->ID, 'wpfunos_servicioAtaudEcologico_1Nombre', true );
$post->servicioAtaudEconomicoPrecio = get_post_meta( $post->ID, 'wpfunos_servicioAtaudEcologico_1Precio', true );
$post->servicioAtaudEconomicoComentario = get_post_meta( $post->ID, 'wpfunos_servicioAtaudEcologico_1Comentario', true );
$post->servicioAtaudMedio = get_post_meta( $post->ID, 'wpfunos_servicioAtaudEcologico_2Nombre', true );
$post->servicioAtaudMedioPrecio = get_post_meta( $post->ID, 'wpfunos_servicioAtaudEcologico_2Precio', true );
$post->servicioAtaudMedioComentario = get_post_meta( $post->ID, 'wpfunos_servicioAtaudEcologico_2Comentario', true );
$post->servicioAtaudPremium = get_post_meta( $post->ID, 'wpfunos_servicioAtaudEcologico_3Nombre', true );
$post->servicioAtaudPremiumPrecio = get_post_meta( $post->ID, 'wpfunos_servicioAtaudEcologico_3Precio', true );
$post->servicioAtaudPremiumComentario = get_post_meta( $post->ID, 'wpfunos_servicioAtaudEcologico_3Comentario', true );
$post->servicioVelatorio = get_post_meta( $post->ID, 'wpfunos_servicioVelatorioNombre', true );
$post->servicioVelatorioPrecio = get_post_meta( $post->ID, 'wpfunos_servicioVelatorioPrecio', true );
$post->servicioVelatorioComentario = get_post_meta( $post->ID, 'wpfunos_servicioVelatorioComentario', true );
$post->servicioSinVelatorio = get_post_meta( $post->ID, 'wpfunos_servicioVelatorioNoNombre', true );
$post->servicioSinVelatorioPrecio = get_post_meta( $post->ID, 'wpfunos_servicioVelatorioNoPrecio', true );
$post->servicioSinVelatorioComentario = get_post_meta( $post->ID, 'wpfunos_servicioVelatorioNoComentario', true );
$post->servicioDespedidaSala = get_post_meta( $post->ID, 'wpfunos_servicioDespedida_1Nombre', true );
$post->servicioDespedidaSalaPrecio = get_post_meta( $post->ID, 'wpfunos_servicioDespedida_1Precio', true );
$post->servicioDespedidaSalaComentario = get_post_meta( $post->ID, 'wpfunos_servicioDespedida_1Comentario', true );
$post->servicioDespedidaCivil = get_post_meta( $post->ID, 'wpfunos_servicioDespedida_2Nombre', true );
$post->servicioDespedidaCivilPrecio = get_post_meta( $post->ID, 'wpfunos_servicioDespedida_2Precio', true );
$post->servicioDespedidaCivilComentario = get_post_meta( $post->ID, 'wpfunos_servicioDespedida_2Comentario', true );
$post->servicioDespedidaReligiosa = get_post_meta( $post->ID, 'wpfunos_servicioDespedida_3Nombre', true );
$post->servicioDespedidaReligiosaPrecio = get_post_meta( $post->ID, 'wpfunos_servicioDespedida_3Precio', true );
$post->servicioDespedidaReligiosaComentario = get_post_meta( $post->ID, 'wpfunos_servicioDespedida_3Comentario', true );
$post->servicioPosiblesExtras = get_post_meta( $post->ID, 'wpfunos_servicioPosiblesExtras', true );
