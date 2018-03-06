<?php

function asset( $path ) {
  $assetsFile = __DIR__ . '/../dist/mix-manifest.json';
  $root = '/dist/';
  if( !file_exists($assetsFile) )
    return $root . $path;

  $assets = json_decode(file_get_contents($assetsFile), TRUE);

  if( !isset($assets[$path]) )
    return $root . $path;

  return $root . $assets[$path];
}
