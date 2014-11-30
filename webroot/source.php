<?php
/**
 * This is a solum pagecontroller.
 *
 */
// Include the essential config-file which also creates the $solum variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the solum container.
$solum['title'] = "Visa källkod";

// Add style for csource
$solum['stylesheets'][] = 'css/source.css';

// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));

$solum['header'] = <<<EOD
<img class='sitelogo' src='img/solum_logo.png' alt='solum Logo'/>
<span class='sitetitle'>Martin Larsson</span>
<span class='siteslogan'>Databaser och objektorienterad programmering i PHP</span>
EOD;

$solum['main'] = "<h1>Visa källkod</h1>\n" . $source->View();

$solum['footer'] = <<<EOD
<footer><span class='sitefooter'>Martin Larsson | <a href='#'>solum på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of solum.
include(SOLUM_THEME_PATH);
