<?php
/**
*
* @package Board3 Portal v2.3 - Recent
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
	$lang = array();
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
$lang = array_merge($lang, array(
	'PORTAL_RECENT'				=> 'Recentes',
	'PORTAL_RECENT_TOPIC'		=> 'Tópicos recentes',
	'PORTAL_RECENT_ANN'			=> 'Anúncios recentes',
	'PORTAL_RECENT_HOT_TOPIC'	=> 'Tópicos recentes populares',

	// ACP
	'ACP_PORTAL_RECENT_SETTINGS'			=> 'Configuração de Tópicos Recentes',
	'ACP_PORTAL_RECENT_SETTINGS_EXP'	=> 'Personalize o bloco de tópicos recentes.',
	'PORTAL_MAX_TOPIC'						=> 'Limite de anúncios recentes/tópicos atuais',
	'PORTAL_MAX_TOPIC_EXP'				=> '0 significa infinito.',
	'PORTAL_RECENT_TITLE_LIMIT'				=> 'Limite de caracteres para cada tópicos recente',
	'PORTAL_RECENT_TITLE_LIMIT_EXP'		=> '0 significa infinito.',
	'PORTAL_RECENT_FORUM'					=> 'Tópicos recentes dos fóruns',
	'PORTAL_RECENT_FORUM_EXP'			=> 'Fóruns dos quais queremos mostrar os tópicos recentes. Deixe em branco para mostrar os tópicos recentes de todos os fóruns. Se a opção "Excluir fóruns" abaixo estiver como "Sim", selecione os fóruns que deseja excluir. Se "Não", os que deseja ver.<br />Selecione/deselecione múltiplos fóruns pressionando <samp>CTRL</samp> e clique.',
	'PORTAL_EXCLUDE_FORUM'					=> 'Excluir fóruns',
	'PORTAL_EXCLUDE_FORUM_EXP'			=> 'Leia o texto acima.',
));
