<?php

echo 'openssl: ',  extension_loaded  ('openssl') ? 'yes':'no', "\n";
$w = stream_get_wrappers();
echo 'http wrapper: ', in_array('http', $w) ? 'yes':'no', "\n";
echo 'https wrapper: ', in_array('https', $w) ? 'yes':'no', "\n";