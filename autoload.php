<?php

// autoload je vestavěná funkce v php. Načte všechny classy, které jsou v programu, zjistí jejich namespace a podle něj dynamicky určí require. Odpadá tedy include a snaha najít u tohoto include správnou cestu z výchozího adresáře

spl_autoload_register(function ($class) {
	$prefix = '';
	$base_dir = __DIR__ . "/";
	$class_name = str_replace($prefix, '', $class);
	$file = $base_dir . str_replace('\\', '/', $class_name) . '.php';

	if (file_exists($file)) {
		require $file;
	}
});
