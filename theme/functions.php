<?php
/**
 * Theme related functions.
 *
 */

/**
 * Get title for the webpage by concatenating page specific title with site-wide title.
 *
 * @param string $title for this page.
 * @return string/null wether the favicon is defined or not.
 */
function get_title($title)
{
  global $solum;
  return $title . (isset($solum['title_append']) ? $solum['title_append'] : null);
}

/**
 * Generate HTML menu items from array.
 *
 * @param array $items with menu items.
 * @return string $html with HTML representation of the menu items.
 */
function generateNavbar($nav)
{
  $html = "<nav class='{$nav['class']}'>\n";
  foreach($nav['items'] as $item) {
    $selected = $nav['callback_selected']($item['url']) ? " class='selected' " : null;
    $html .= "<a href='{$item['url']}' title='{$item['title']}' {$selected}>{$item['text']}</a>\n";
  }
  $html .= "</nav>\n";
  return $html;
}

/**
 * Returns the current url.
 *
 * @return string $url.
 */
function getCurrentUrl() {
  $url = "http";
  $url .= (@$_SERVER["HTTPS"] == "on") ? 's' : '';
  $url .= "://";
  $serverPort = ($_SERVER["SERVER_PORT"] == "80") ? '' :
    (($_SERVER["SERVER_PORT"] == 443 && @$_SERVER["HTTPS"] == "on") ? '' : ":{$_SERVER['SERVER_PORT']}");
  $url .= $_SERVER["SERVER_NAME"] . $serverPort . htmlspecialchars($_SERVER["REQUEST_URI"]);
  return $url;
}
