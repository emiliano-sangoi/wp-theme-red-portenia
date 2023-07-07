<?php

/**
 * Generated by the WordPress Option Page generator
 * at http://jeremyhixon.com/wp-tools/option-page/
 */

class RedPortena {
	private $red_portena_options;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'red_portena_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'red_portena_page_init' ) );
	}

	public function red_portena_add_plugin_page() {
		add_menu_page(
			'Red Porteña', // page_title
			'Red Porteña', // menu_title
			'manage_options', // capability
			'red-portena', // menu_slug
			array( $this, 'red_portena_create_admin_page' ), // function
			'dashicons-admin-generic', // icon_url
			2 // position
		);
	}

	public function red_portena_create_admin_page() {
		$this->red_portena_options = get_option( 'red_portena_option_name' ); ?>

		<div class="wrap">
			<h2>Red Porteña</h2>
			<p>Red Porteña</p>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
					settings_fields( 'red_portena_option_group' );
					do_settings_sections( 'red-portena-admin' );
					submit_button();
				?>
			</form>
		</div>
	<?php }

	public function red_portena_page_init() {
		register_setting(
			'red_portena_option_group', // option_group
			'red_portena_option_name', // option_name
			array( $this, 'red_portena_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'red_portena_setting_section', // id
			'Settings', // title
			array( $this, 'red_portena_section_info' ), // callback
			'red-portena-admin' // page
		);

		add_settings_field(
			'enlace_web_socios_0', // id
			'Enlace web socios', // title
			array( $this, 'enlace_web_socios_0_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'enlace_sistema_facturacion_1', // id
			'Enlace sistema facturacion', // title
			array( $this, 'enlace_sistema_facturacion_1_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'enlace_sistema_compras_2', // id
			'Enlace sistema compras', // title
			array( $this, 'enlace_sistema_compras_2_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'mostrar_acceso_a_sistemas_3', // id
			'Mostrar acceso a sistemas', // title
			array( $this, 'mostrar_acceso_a_sistemas_3_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'whats_up_4', // id
			'Whats Up', // title
			array( $this, 'whats_up_4_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'telefono_fijo_5', // id
			'Telefono fijo', // title
			array( $this, 'telefono_fijo_5_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'direccion_6', // id
			'Direccion', // title
			array( $this, 'direccion_6_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'instagram_7', // id
			'Instagram', // title
			array( $this, 'instagram_7_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'facebook_8', // id
			'Facebook', // title
			array( $this, 'facebook_8_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'linkedin_9', // id
			'Linkedin', // title
			array( $this, 'linkedin_9_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'url_mapa_socios_10', // id
			'URL mapa socios', // title
			array( $this, 'url_mapa_socios_10_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'url_mapa_direccion_11', // id
			'URL mapa direccion', // title
			array( $this, 'url_mapa_direccion_11_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'valocidad_del_carousel_12', // id
			'Valocidad del carousel', // title
			array( $this, 'valocidad_del_carousel_12_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'extra_text_13', // id
			'extra-text', // title
			array( $this, 'extra_text_13_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'extra_select_14', // id
			'extra-select', // title
			array( $this, 'extra_select_14_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'extra_checkbox_15', // id
			'extra-checkbox', // title
			array( $this, 'extra_checkbox_15_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'extra_radio_16', // id
			'extra-radio', // title
			array( $this, 'extra_radio_16_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);

		add_settings_field(
			'extra_textarea_17', // id
			'extra-textarea', // title
			array( $this, 'extra_textarea_17_callback' ), // callback
			'red-portena-admin', // page
			'red_portena_setting_section' // section
		);
	}

	public function red_portena_sanitize($input) {
		$sanitary_values = array();
		if ( isset( $input['enlace_web_socios_0'] ) ) {
			$sanitary_values['enlace_web_socios_0'] = sanitize_text_field( $input['enlace_web_socios_0'] );
		}

		if ( isset( $input['enlace_sistema_facturacion_1'] ) ) {
			$sanitary_values['enlace_sistema_facturacion_1'] = sanitize_text_field( $input['enlace_sistema_facturacion_1'] );
		}

		if ( isset( $input['enlace_sistema_compras_2'] ) ) {
			$sanitary_values['enlace_sistema_compras_2'] = sanitize_text_field( $input['enlace_sistema_compras_2'] );
		}

		if ( isset( $input['mostrar_acceso_a_sistemas_3'] ) ) {
			$sanitary_values['mostrar_acceso_a_sistemas_3'] = $input['mostrar_acceso_a_sistemas_3'];
		}

		if ( isset( $input['whats_up_4'] ) ) {
			$sanitary_values['whats_up_4'] = sanitize_text_field( $input['whats_up_4'] );
		}

		if ( isset( $input['telefono_fijo_5'] ) ) {
			$sanitary_values['telefono_fijo_5'] = sanitize_text_field( $input['telefono_fijo_5'] );
		}

		if ( isset( $input['direccion_6'] ) ) {
			$sanitary_values['direccion_6'] = sanitize_text_field( $input['direccion_6'] );
		}

		if ( isset( $input['instagram_7'] ) ) {
			$sanitary_values['instagram_7'] = sanitize_text_field( $input['instagram_7'] );
		}

		if ( isset( $input['facebook_8'] ) ) {
			$sanitary_values['facebook_8'] = sanitize_text_field( $input['facebook_8'] );
		}

		if ( isset( $input['linkedin_9'] ) ) {
			$sanitary_values['linkedin_9'] = sanitize_text_field( $input['linkedin_9'] );
		}

		if ( isset( $input['url_mapa_socios_10'] ) ) {
			$sanitary_values['url_mapa_socios_10'] = sanitize_text_field( $input['url_mapa_socios_10'] );
		}

		if ( isset( $input['url_mapa_direccion_11'] ) ) {
			$sanitary_values['url_mapa_direccion_11'] = sanitize_text_field( $input['url_mapa_direccion_11'] );
		}

		if ( isset( $input['valocidad_del_carousel_12'] ) ) {
			$sanitary_values['valocidad_del_carousel_12'] = $input['valocidad_del_carousel_12'];
		}

		if ( isset( $input['extra_text_13'] ) ) {
			$sanitary_values['extra_text_13'] = sanitize_text_field( $input['extra_text_13'] );
		}

		if ( isset( $input['extra_select_14'] ) ) {
			$sanitary_values['extra_select_14'] = $input['extra_select_14'];
		}

		if ( isset( $input['extra_checkbox_15'] ) ) {
			$sanitary_values['extra_checkbox_15'] = $input['extra_checkbox_15'];
		}

		if ( isset( $input['extra_radio_16'] ) ) {
			$sanitary_values['extra_radio_16'] = $input['extra_radio_16'];
		}

		if ( isset( $input['extra_textarea_17'] ) ) {
			$sanitary_values['extra_textarea_17'] = esc_textarea( $input['extra_textarea_17'] );
		}

		return $sanitary_values;
	}

	public function red_portena_section_info() {
		
	}

	public function enlace_web_socios_0_callback() {
		printf(
			'<input class="regular-text" type="text" name="red_portena_option_name[enlace_web_socios_0]" id="enlace_web_socios_0" value="%s">',
			isset( $this->red_portena_options['enlace_web_socios_0'] ) ? esc_attr( $this->red_portena_options['enlace_web_socios_0']) : ''
		);
	}

	public function enlace_sistema_facturacion_1_callback() {
		printf(
			'<input class="regular-text" type="text" name="red_portena_option_name[enlace_sistema_facturacion_1]" id="enlace_sistema_facturacion_1" value="%s">',
			isset( $this->red_portena_options['enlace_sistema_facturacion_1'] ) ? esc_attr( $this->red_portena_options['enlace_sistema_facturacion_1']) : ''
		);
	}

	public function enlace_sistema_compras_2_callback() {
		printf(
			'<input class="regular-text" type="text" name="red_portena_option_name[enlace_sistema_compras_2]" id="enlace_sistema_compras_2" value="%s">',
			isset( $this->red_portena_options['enlace_sistema_compras_2'] ) ? esc_attr( $this->red_portena_options['enlace_sistema_compras_2']) : ''
		);
	}

	public function mostrar_acceso_a_sistemas_3_callback() {
		?> <select name="red_portena_option_name[mostrar_acceso_a_sistemas_3]" id="mostrar_acceso_a_sistemas_3">
			<?php $selected = (isset( $this->red_portena_options['mostrar_acceso_a_sistemas_3'] ) && $this->red_portena_options['mostrar_acceso_a_sistemas_3'] === 'opcion-uno') ? 'selected' : '' ; ?>
			<option value="opcion-uno" <?php echo $selected; ?>> Si</option>
			<?php $selected = (isset( $this->red_portena_options['mostrar_acceso_a_sistemas_3'] ) && $this->red_portena_options['mostrar_acceso_a_sistemas_3'] === 'opcion-dos') ? 'selected' : '' ; ?>
			<option value="opcion-dos" <?php echo $selected; ?>> No</option>
		</select> <?php
	}

	public function whats_up_4_callback() {
		printf(
			'<input class="regular-text" type="text" name="red_portena_option_name[whats_up_4]" id="whats_up_4" value="%s">',
			isset( $this->red_portena_options['whats_up_4'] ) ? esc_attr( $this->red_portena_options['whats_up_4']) : ''
		);
	}

	public function telefono_fijo_5_callback() {
		printf(
			'<input class="regular-text" type="text" name="red_portena_option_name[telefono_fijo_5]" id="telefono_fijo_5" value="%s">',
			isset( $this->red_portena_options['telefono_fijo_5'] ) ? esc_attr( $this->red_portena_options['telefono_fijo_5']) : ''
		);
	}

	public function direccion_6_callback() {
		printf(
			'<input class="regular-text" type="text" name="red_portena_option_name[direccion_6]" id="direccion_6" value="%s">',
			isset( $this->red_portena_options['direccion_6'] ) ? esc_attr( $this->red_portena_options['direccion_6']) : ''
		);
	}

	public function instagram_7_callback() {
		printf(
			'<input class="regular-text" type="text" name="red_portena_option_name[instagram_7]" id="instagram_7" value="%s">',
			isset( $this->red_portena_options['instagram_7'] ) ? esc_attr( $this->red_portena_options['instagram_7']) : ''
		);
	}

	public function facebook_8_callback() {
		printf(
			'<input class="regular-text" type="text" name="red_portena_option_name[facebook_8]" id="facebook_8" value="%s">',
			isset( $this->red_portena_options['facebook_8'] ) ? esc_attr( $this->red_portena_options['facebook_8']) : ''
		);
	}

	public function linkedin_9_callback() {
		printf(
			'<input class="regular-text" type="text" name="red_portena_option_name[linkedin_9]" id="linkedin_9" value="%s">',
			isset( $this->red_portena_options['linkedin_9'] ) ? esc_attr( $this->red_portena_options['linkedin_9']) : ''
		);
	}

	public function url_mapa_socios_10_callback() {
		printf(
			'<input class="regular-text" type="text" name="red_portena_option_name[url_mapa_socios_10]" id="url_mapa_socios_10" value="%s">',
			isset( $this->red_portena_options['url_mapa_socios_10'] ) ? esc_attr( $this->red_portena_options['url_mapa_socios_10']) : ''
		);
	}

	public function url_mapa_direccion_11_callback() {
		printf(
			'<input class="regular-text" type="text" name="red_portena_option_name[url_mapa_direccion_11]" id="url_mapa_direccion_11" value="%s">',
			isset( $this->red_portena_options['url_mapa_direccion_11'] ) ? esc_attr( $this->red_portena_options['url_mapa_direccion_11']) : ''
		);
	}

	public function valocidad_del_carousel_12_callback() {
		?> <select name="red_portena_option_name[valocidad_del_carousel_12]" id="valocidad_del_carousel_12">
			<?php $selected = (isset( $this->red_portena_options['valocidad_del_carousel_12'] ) && $this->red_portena_options['valocidad_del_carousel_12'] === 'opcion-uno') ? 'selected' : '' ; ?>
			<option value="opcion-uno" <?php echo $selected; ?>> Lento</option>
			<?php $selected = (isset( $this->red_portena_options['valocidad_del_carousel_12'] ) && $this->red_portena_options['valocidad_del_carousel_12'] === 'opcion-dos') ? 'selected' : '' ; ?>
			<option value="opcion-dos" <?php echo $selected; ?>> Intermedio</option>
			<?php $selected = (isset( $this->red_portena_options['valocidad_del_carousel_12'] ) && $this->red_portena_options['valocidad_del_carousel_12'] === 'opcion-tres') ? 'selected' : '' ; ?>
			<option value="opcion-tres" <?php echo $selected; ?>> Rapido</option>
		</select> <?php
	}

	public function extra_text_13_callback() {
		printf(
			'<input class="regular-text" type="text" name="red_portena_option_name[extra_text_13]" id="extra_text_13" value="%s">',
			isset( $this->red_portena_options['extra_text_13'] ) ? esc_attr( $this->red_portena_options['extra_text_13']) : ''
		);
	}

	public function extra_select_14_callback() {
		?> <select name="red_portena_option_name[extra_select_14]" id="extra_select_14">
			<?php $selected = (isset( $this->red_portena_options['extra_select_14'] ) && $this->red_portena_options['extra_select_14'] === 'opcion-uno') ? 'selected' : '' ; ?>
			<option value="opcion-uno" <?php echo $selected; ?>> Si</option>
			<?php $selected = (isset( $this->red_portena_options['extra_select_14'] ) && $this->red_portena_options['extra_select_14'] === 'opcion-dos') ? 'selected' : '' ; ?>
			<option value="opcion-dos" <?php echo $selected; ?>> No</option>
		</select> <?php
	}

	public function extra_checkbox_15_callback() {
		printf(
			'<input type="checkbox" name="red_portena_option_name[extra_checkbox_15]" id="extra_checkbox_15" value="extra_checkbox_15" %s> <label for="extra_checkbox_15">mostrar</label>',
			( isset( $this->red_portena_options['extra_checkbox_15'] ) && $this->red_portena_options['extra_checkbox_15'] === 'extra_checkbox_15' ) ? 'checked' : ''
		);
	}

	public function extra_radio_16_callback() {
		?> <fieldset><?php $checked = ( isset( $this->red_portena_options['extra_radio_16'] ) && $this->red_portena_options['extra_radio_16'] === 'opcion-uno' ) ? 'checked' : '' ; ?>
		<label for="extra_radio_16-0"><input type="radio" name="red_portena_option_name[extra_radio_16]" id="extra_radio_16-0" value="opcion-uno" <?php echo $checked; ?>>  Si</label><br>
		<?php $checked = ( isset( $this->red_portena_options['extra_radio_16'] ) && $this->red_portena_options['extra_radio_16'] === 'opcion-dos' ) ? 'checked' : '' ; ?>
		<label for="extra_radio_16-1"><input type="radio" name="red_portena_option_name[extra_radio_16]" id="extra_radio_16-1" value="opcion-dos" <?php echo $checked; ?>>  No</label></fieldset> <?php
	}

	public function extra_textarea_17_callback() {
		printf(
			'<textarea class="large-text" rows="5" name="red_portena_option_name[extra_textarea_17]" id="extra_textarea_17">%s</textarea>',
			isset( $this->red_portena_options['extra_textarea_17'] ) ? esc_attr( $this->red_portena_options['extra_textarea_17']) : ''
		);
	}

}
if ( is_admin() )
	$red_portena = new RedPortena();

/* 
 * Retrieve this value with:
 * $red_portena_options = get_option( 'red_portena_option_name' ); // Array of All Options
 * $enlace_web_socios_0 = $red_portena_options['enlace_web_socios_0']; // Enlace web socios
 * $enlace_sistema_facturacion_1 = $red_portena_options['enlace_sistema_facturacion_1']; // Enlace sistema facturacion
 * $enlace_sistema_compras_2 = $red_portena_options['enlace_sistema_compras_2']; // Enlace sistema compras
 * $mostrar_acceso_a_sistemas_3 = $red_portena_options['mostrar_acceso_a_sistemas_3']; // Mostrar acceso a sistemas
 * $whats_up_4 = $red_portena_options['whats_up_4']; // Whats Up
 * $telefono_fijo_5 = $red_portena_options['telefono_fijo_5']; // Telefono fijo
 * $direccion_6 = $red_portena_options['direccion_6']; // Direccion
 * $instagram_7 = $red_portena_options['instagram_7']; // Instagram
 * $facebook_8 = $red_portena_options['facebook_8']; // Facebook
 * $linkedin_9 = $red_portena_options['linkedin_9']; // Linkedin
 * $url_mapa_socios_10 = $red_portena_options['url_mapa_socios_10']; // URL mapa socios
 * $url_mapa_direccion_11 = $red_portena_options['url_mapa_direccion_11']; // URL mapa direccion
 * $valocidad_del_carousel_12 = $red_portena_options['valocidad_del_carousel_12']; // Valocidad del carousel
 * $extra_text_13 = $red_portena_options['extra_text_13']; // extra-text
 * $extra_select_14 = $red_portena_options['extra_select_14']; // extra-select
 * $extra_checkbox_15 = $red_portena_options['extra_checkbox_15']; // extra-checkbox
 * $extra_radio_16 = $red_portena_options['extra_radio_16']; // extra-radio
 * $extra_textarea_17 = $red_portena_options['extra_textarea_17']; // extra-textarea
 */

function redOptGetEnlaceWebSocios(){
    $red_portena_options = get_option( 'red_portena_option_name' );
    return isset($red_portena_options['enlace_web_socios_0']) ? $red_portena_options['enlace_web_socios_0'] : null;
}

function redOptGetEnlaceSistFact(){
    $red_portena_options = get_option( 'red_portena_option_name' );
    return isset($red_portena_options['enlace_sistema_facturacion_1']) ? $red_portena_options['enlace_sistema_facturacion_1'] : null;
}

function redOptGetEnlaceSistComp(){
    $red_portena_options = get_option( 'red_portena_option_name' );
    return isset($red_portena_options['enlace_sistema_compras_2']) ? $red_portena_options['enlace_sistema_compras_2'] : null;
}

function redOptGetMostrarEnlaceSistemas(){
    $red_portena_options = get_option( 'red_portena_option_name' );
    return isset($red_portena_options['mostrar_acceso_a_sistemas_3']) ? $red_portena_options['mostrar_acceso_a_sistemas_3'] : null;
}

function redOptGetWhatsUp(){
    $red_portena_options = get_option( 'red_portena_option_name' );
    return isset($red_portena_options['whats_up_4']) ? $red_portena_options['whats_up_4'] : null;
}

function redOptGetTelefonoFijo(){
    $red_portena_options = get_option( 'red_portena_option_name' );
    return isset($red_portena_options['telefono_fijo_5']) ? $red_portena_options['telefono_fijo_5'] : null;
}

function redOptGetDireccion(){
    $red_portena_options = get_option( 'red_portena_option_name' );
    return isset($red_portena_options['direccion_6']) ? $red_portena_options['direccion_6'] : null;
}

function redOptGetInstagram(){
    $red_portena_options = get_option( 'red_portena_option_name' );
    return isset($red_portena_options['instagram_7']) ? $red_portena_options['instagram_7'] : null;
}

function redOptGetFacebook(){
    $red_portena_options = get_option( 'red_portena_option_name' );
    return isset($red_portena_options['facebook_8']) ? $red_portena_options['facebook_8'] : null;
}

function redOptGetLinkedin(){
    $red_portena_options = get_option( 'red_portena_option_name' );
    return isset($red_portena_options['linkedin_9']) ? $red_portena_options['linkedin_9'] : null;
}

function redOptGetUrlMapaSocios(){
    $red_portena_options = get_option( 'red_portena_option_name' );
    return isset($red_portena_options['url_mapa_socios_10']) ? $red_portena_options['url_mapa_socios_10'] : null;
}

function redOptGetUrlMapaDireccion(){
    $red_portena_options = get_option( 'red_portena_option_name' );
    return isset($red_portena_options['url_mapa_direccion_11']) ? $red_portena_options['url_mapa_direccion_11'] : null;
}

function redOptGetVelCarrusel(){
    $red_portena_options = get_option( 'red_portena_option_name' );
    return isset($red_portena_options['valocidad_del_carousel_12']) ? $red_portena_options['valocidad_del_carousel_12'] : null;
}
