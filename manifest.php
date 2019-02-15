<?php

if ( !defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$manifest = array();

$manifest[ 'name' ]        = __( 'Post reaction', 'crumina' );
$manifest[ 'description' ] = __( 'Post reaction.', 'crumina' );
$manifest[ 'version' ]     = '1.0.10';
$manifest[ 'display' ]     = true;
$manifest[ 'standalone' ]  = true;
$manifest[ 'github_repo' ] = 'https://github.com/crumina/FW_Extension_Post_Reaction';
$manifest[ 'thumbnail' ]   = plugins_url( 'unyson/framework/extensions/post-reaction/static/img/thumbnail.png' );
