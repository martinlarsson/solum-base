<?php
/**
 * This is a solum pagecontroller.
 *
 */
// Include the essential config-file which also creates the $solum variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the solum container.
$solum['title'] = "404";
$solum['header'] = "";
$solum['main'] = "This is a solum 404. Document is not here.";
$solum['footer'] = "";

// Send the 404 header
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of solum.
include(SOLUM_THEME_PATH)
