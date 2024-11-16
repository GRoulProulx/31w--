<?php
/*
plugin name: Carrousel
description: Affiche un carrousel à partir d'une galerie d'image
version: 1.0.0
author: Eddy Martin
author uri: https://referenced.ca
*/

function enfile_css_js()
{
    $version_css = filemtime(plugin_dir_path(__FILE__) . "/style.css");
    $version_js =  filemtime(plugin_dir_path(__FILE__) . "js/carrousel.js");

    wp_enqueue_style(
        "carrousel",
        plugin_dir_url(__FILE__) . "/style.css",
        array(),
        $version_css
    );
    wp_enqueue_script(
        "carrousel",
        plugin_dir_url(__FILE__) . "/js/carrousel.js",
        array(),
        $version_js
    );
}
add_action("wp_enqueue_scripts", "enfile_css_js");

function generer_carrousel()
{
    $chaine = '
    <div class="carrousel">
        <button class="carrousel__x">X</button>
        <button class="carrousel__gauche" data-direction="gauche">&#x21e6;</button>
        <button class="carrousel__droite" data-direction="droite">&#x21e8;</button>
        <figure class="carrousel__figure"></figure>
        <form class="carrousel__form">
            <div class="radio__nav"></div>
        </form>
    </div>';
    return $chaine;
}

add_shortcode("carrousel", "generer_carrousel");
