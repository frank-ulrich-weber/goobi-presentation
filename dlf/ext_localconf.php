<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Sebastian Meyer <sebastian.meyer@slub-dresden.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// Register plugins.
t3lib_extMgm::addPItoST43($_EXTKEY, 'plugins/collection/class.tx_dlf_collection.php', '_collection', 'list_type', TRUE);

t3lib_extMgm::addPItoST43($_EXTKEY, 'plugins/listview/class.tx_dlf_listview.php', '_listview', 'list_type', FALSE);

t3lib_extMgm::addPItoST43($_EXTKEY, 'plugins/metadata/class.tx_dlf_metadata.php', '_metadata', 'list_type', TRUE);

t3lib_extMgm::addPItoST43($_EXTKEY, 'plugins/navigation/class.tx_dlf_navigation.php', '_navigation', 'list_type', TRUE);

t3lib_extMgm::addPItoST43($_EXTKEY, 'plugins/oai/class.tx_dlf_oai.php', '_oai', 'list_type', FALSE);

t3lib_extMgm::addPItoST43($_EXTKEY, 'plugins/pageview/class.tx_dlf_pageview.php', '_pageview', 'list_type', TRUE);

t3lib_extMgm::addPItoST43($_EXTKEY, 'plugins/search/class.tx_dlf_search.php', '_search', 'list_type', TRUE);

t3lib_extMgm::addPItoST43($_EXTKEY, 'plugins/toc/class.tx_dlf_toc.php', '_toc', 'list_type', TRUE);

// Register hooks.
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'EXT:'.$_EXTKEY.'/hooks/class.tx_dlf_tcemain.php:tx_dlf_tcemain';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] = 'EXT:'.$_EXTKEY.'/hooks/class.tx_dlf_tcemain.php:tx_dlf_tcemain';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['dlf/common/class.tx_dlf_document.php']['hookClass'][] = 'EXT:'.$_EXTKEY.'/hooks/class.tx_dlf_hacks.php:tx_dlf_hacks';

// Register command line scripts.
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys'][$_EXTKEY] = array ('EXT:'.$_EXTKEY.'/cli/class.tx_dlf_cli.php', '_CLI_dlf');

?>