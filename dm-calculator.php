<?php
/*
Plugin Name: DM Calculator
Plugin URI: 
Description: Calculo del tipo de cambio para sitio web.
Version: 1.0
Author: Daniel Manchego
Author URI: http://la520.pe
Text Domain: dm-calculator
License: GPLv2
*/

function Activar()
{}

function Desactivar()
{}

function Borrar()
{}

register_activation_hook( __FILE__, 'Activar' );
register_deactivation_hook( __FILE__, 'Desactivar' );


add_action('admin_menu','CrearMenu');

function CrearMenu(){
    add_menu_page(
        'DM Calculador', //titulo de la pagina
        'Menu de Calculadora', //titulo del menu 
        'manage_options', //capability
        'dmcalc-menu', //slug o prefijo 
        'MostrarContenido',
        plugin_dir_url(__FILE__).'admin/img/icon.png',
        '1'        
    );
}

function MostrarContenido(){
    echo ("<h1>Menu menu menu</h1>");
}
