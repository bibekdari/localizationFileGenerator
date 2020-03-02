<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__.'/SimpleXLSX.php';

if ( $xlsx = SimpleXLSX::parse('excel.xlsx') ) {
	$language = array_key_exists('lang', $_GET) ? $_GET['lang'] : "english";
	$platform = array_key_exists('platform', $_GET) ? $_GET['platform'] : "ios";
	echo '<h1>Translation</h1><pre>';
	echo "Language: ";
	echo $language;
	echo "\nPlatform: ";
	echo $platform;
	echo "\n\n\n";
	$rows = $xlsx->rows();
	$index = array_search($language, $rows[0]);
	if ($index) {
		echo htmlspecialchars($platform == "android" ? "<resources>\n" : "");
		foreach ( $rows as $k => $r ) {
			$key = $r[0];
			$value = $r[$index];
			if ($key != "") {
				if ($platform == "ios") {
					$value = str_replace(array("\n", "\r"), '\\n', $value);//trim(preg_replace('/\s+/', '\\n', $value));
					echo('"'.$key.'"'.' = '.'"'.$value.'"');
					echo(";\n");
				}else {
					$value = str_replace(array("\n", "\r"), '\\n', $value); //trim(preg_replace('/\s+/', '\\n', $value));
					echo htmlspecialchars('<string name="'.$key.'">'.$value.'</string>');
					echo("\n");
				}
			}
		}
		echo htmlspecialchars($platform == "android" ? "</resources>" : "");
	}else {
		echo "<h2>No Lanuage Found</h2>";
	}
} else {
	echo SimpleXLSX::parseError();
}
echo '<pre>';