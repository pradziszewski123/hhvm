<?php

$opts = array(
  'http' => array(
    'header' => array(
      "Accept-Encoding: gzip",
      "User-Agent: Composer/source PHP 5.5.99)",
    ),
    'tls' => array(
      "allow_self_signed"=>TRUE
    )
  )
);

$context = stream_context_create($opts);
var_dump(stream_context_get_params($context));
