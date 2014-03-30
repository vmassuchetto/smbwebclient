<?php
// Additional scripts to help development

// Dump inline files

foreach ($swc->inlineFiles as $file => $contents) {
    $f = fopen($file, 'wb');
	fwrite($f, base64_decode($contents));
	fclose($f);
}
