<?php
/**
*
* @package Board3 Portal v2.3
* @copyright (c) 2023 Board3 Group ( www.board3.de )
* @license GNU General Public License, version 2 (GPL-2.0-only)
* Brazilian Portuguese  translation by eunaumtenhoid [2024][ver 2.3.0] (https://crowdin.com/profile/eunaumtenhoid)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, [
	'BOARD3_PORTAL'							=> 'Board3 Portal',
	'ERROR_B3P_EXTENSION_NOT_ENABLEABLE'		=> 'A extensão „%s“ não pode ser ativada, verifique os requisitos da extensão.',
	'ERROR_B3P_MSG_PHPBB_WRONG_VERSION'		=> 'PhpBB Mínimo %1$s mas inferior a %2$s',
	'ERROR_B3P_MSG_PHP_WRONG_VERSION'		=> 'PHP Mínimo %1$s mas inferior a %2$s',
]);
