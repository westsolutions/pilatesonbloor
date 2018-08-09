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

function get_page() {
  $req = trim($_SERVER['REQUEST_URI'], '/');
  if( empty($req) )
    $req = "index";

  return $req;
}

function partial( $path ) {
  $include = __DIR__ . '/../partials/' . trim($path) . '.php';
  if( file_exists($include) ) {
    include __DIR__ . '/../partials/' . trim($path) . '.php';
  }
}
