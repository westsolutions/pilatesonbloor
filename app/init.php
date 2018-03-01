<?php

define("SITE_URL", "http://barebones.test");

function asset( $path ) {
  $assetsFile = __DIR__ . '/../dist/assets.json';
  $root = SITE_URL . '/dist/';
  if( !file_exists($assetsFile) )
    return $root . $path;

  $assets = json_decode(file_get_contents(__DIR__ . '/../dist/assets.json'), TRUE);

  if( !isset($assets[$path]) )
    return $root . $path;

  return $root . $assets[$path];
}
