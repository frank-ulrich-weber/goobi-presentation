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

// Register database tables.
$TCA['tx_dlf_documents'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:dlf/locallang_db.xml:tx_dlf_documents',
		'label'     => 'title',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY title_sorting',
		'delete' => 'deleted',
		'enablecolumns' => array (
			'disabled' => 'hidden',
			'fe_group' => 'fe_group',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'res/icon_txdlfdocuments.png',
		'rootLevel'	=> 0,
		'dividers2tabs' => 2,
	),
	'feInterface' => array (
		'fe_admin_fieldList' => '',
	)
);

$TCA['tx_dlf_structures'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:dlf/locallang_db.xml:tx_dlf_structures',
		'label'     => 'label',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',
		'transOrigPointerField'    => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'default_sortby' => 'ORDER BY label',
		'delete' => 'deleted',
		'enablecolumns' => array (
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'res/icon_txdlfstructures.png',
		'rootLevel'	=> 0,
		'dividers2tabs' => 2,
	),
	'feInterface' => array (
		'fe_admin_fieldList' => '',
	)
);

$TCA['tx_dlf_metadata'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:dlf/locallang_db.xml:tx_dlf_metadata',
		'label'     => 'label',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',
		'transOrigPointerField'    => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'sortby' => 'sorting',
		'delete' => 'deleted',
		'enablecolumns' => array (
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'res/icon_txdlfmetadata.png',
		'rootLevel'	=> 0,
		'dividers2tabs' => 2,
	),
	'feInterface' => array (
		'fe_admin_fieldList' => '',
	)
);

$TCA['tx_dlf_formats'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:dlf/locallang_db.xml:tx_dlf_formats',
		'label'     => 'type',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY type',
		'delete' => 'deleted',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'res/icon_txdlfformats.png',
		'rootLevel'	=> 1,
		'dividers2tabs' => 2,
	),
	'feInterface' => array (
		'fe_admin_fieldList' => '',
	)
);

$TCA['tx_dlf_solrcores'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:dlf/locallang_db.xml:tx_dlf_solrcores',
		'label'     => 'label',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY label',
		'delete' => 'deleted',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'res/icon_txdlfsolrcores.png',
		'rootLevel'	=> 1,
		'dividers2tabs' => 2,
	),
	'feInterface' => array (
		'fe_admin_fieldList' => '',
	)
);

$TCA['tx_dlf_collections'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:dlf/locallang_db.xml:tx_dlf_collections',
		'label'     => 'label',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'fe_cruser_id' => 'fe_cruser_id',
		'fe_admin_lock' => 'fe_admin_lock',
		'languageField'            => 'sys_language_uid',
		'transOrigPointerField'    => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'default_sortby' => 'ORDER BY label',
		'delete' => 'deleted',
		'enablecolumns' => array (
			'disabled' => 'hidden',
			'fe_group' => 'fe_group',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'res/icon_txdlfcollections.png',
		'rootLevel'	=> 0,
		'dividers2tabs' => 2,
	),
	'feInterface' => array (
		'fe_admin_fieldList' => 'label,description,documents',
	)
);

$TCA['tx_dlf_libraries'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:dlf/locallang_db.xml:tx_dlf_libraries',
		'label'     => 'label',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',
		'transOrigPointerField'    => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'default_sortby' => 'ORDER BY label',
		'delete' => 'deleted',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'res/icon_txdlflibraries.png',
		'rootLevel'	=> 0,
		'dividers2tabs' => 2,
	),
	'feInterface' => array (
		'fe_admin_fieldList' => '',
	)
);

// Register plugins.
t3lib_div::loadTCA('tt_content');

// Register static typoscript.
t3lib_extMgm::addStaticFile($_EXTKEY,'typoscript/', 'DLF (Base Configuration)');

// Plugin "collection".
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_collection'] = 'layout,select_key,pages,recursive';

$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_collection'] = 'pi_flexform';

t3lib_extMgm::addPlugin(array('LLL:EXT:dlf/locallang_db.xml:tt_content.dlf_collection', $_EXTKEY.'_collection'), 'list_type');

t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_collection', 'FILE:EXT:'.$_EXTKEY.'/plugins/collection/flexform.xml');

// Plugin "listview".
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_listview'] = 'layout,select_key,pages,recursive';

$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_listview'] = 'pi_flexform';

t3lib_extMgm::addPlugin(array('LLL:EXT:dlf/locallang_db.xml:tt_content.dlf_listview', $_EXTKEY.'_listview'), 'list_type');

t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_listview', 'FILE:EXT:'.$_EXTKEY.'/plugins/listview/flexform.xml');

// Plugin "metadata".
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_metadata'] = 'layout,select_key,pages,recursive';

$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_metadata'] = 'pi_flexform';

t3lib_extMgm::addPlugin(array('LLL:EXT:dlf/locallang_db.xml:tt_content.dlf_metadata', $_EXTKEY.'_metadata'), 'list_type');

t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_metadata', 'FILE:EXT:'.$_EXTKEY.'/plugins/metadata/flexform.xml');

// Plugin "navigation".
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_navigation'] = 'layout,select_key,pages,recursive';

$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_navigation'] = 'pi_flexform';

t3lib_extMgm::addPlugin(array('LLL:EXT:dlf/locallang_db.xml:tt_content.dlf_navigation', $_EXTKEY.'_navigation'), 'list_type');

t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_navigation', 'FILE:EXT:'.$_EXTKEY.'/plugins/navigation/flexform.xml');

// Plugin "oai".
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_oai'] = 'layout,select_key,pages,recursive';

$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_oai'] = 'pi_flexform';

t3lib_extMgm::addPlugin(array('LLL:EXT:dlf/locallang_db.xml:tt_content.dlf_oai', $_EXTKEY.'_oai'), 'list_type');

t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_oai', 'FILE:EXT:'.$_EXTKEY.'/plugins/oai/flexform.xml');

// Plugin "pageview".
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pageview'] = 'layout,select_key,pages,recursive';

$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_pageview'] = 'pi_flexform';

t3lib_extMgm::addPlugin(array('LLL:EXT:dlf/locallang_db.xml:tt_content.dlf_pageview', $_EXTKEY.'_pageview'), 'list_type');

t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_pageview', 'FILE:EXT:'.$_EXTKEY.'/plugins/pageview/flexform.xml');

// Plugin "search".
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_search'] = 'layout,select_key,pages,recursive';

$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_search'] = 'pi_flexform';

t3lib_extMgm::addPlugin(array('LLL:EXT:dlf/locallang_db.xml:tt_content.dlf_search', $_EXTKEY.'_search'), 'list_type');

t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_search', 'FILE:EXT:'.$_EXTKEY.'/plugins/search/flexform.xml');

// Plugin "table of contents".
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_toc'] = 'layout,select_key,pages,recursive';

$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_toc'] = 'pi_flexform';

t3lib_extMgm::addPlugin(array('LLL:EXT:dlf/locallang_db.xml:tt_content.dlf_toc', $_EXTKEY.'_toc'), 'list_type');

t3lib_extMgm::addStaticFile($_EXTKEY,'plugins/toc/', 'Table of Contents');

t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_toc', 'FILE:EXT:'.$_EXTKEY.'/plugins/toc/flexform.xml');

// Register modules.
if (TYPO3_MODE == 'BE')	{

	// Add modules after "web".
	if (!isset($TBE_MODULES['txdlfmodules']))	{

		$modules = array();

		foreach($TBE_MODULES as $key => $val)	{

			if ($key == 'web')	{

				$modules[$key] = $val;

				$modules['txdlfmodules'] = '';

			} else {

				$modules[$key] = $val;

			}

		}

		$TBE_MODULES = $modules;

		unset($modules);

	}

	// Main "dlf" module.
	t3lib_extMgm::addModule('txdlfmodules', '', '', t3lib_extMgm::extPath($_EXTKEY).'modules/');

	// Module "indexing".
	t3lib_extMgm::addModule('txdlfmodules', 'txdlfindexing', '', t3lib_extMgm::extPath($_EXTKEY).'modules/indexing/');

	t3lib_extMgm::addLLrefForTCAdescr('_MOD_txdlfmodules_txdlfindexing','EXT:dlf/modules/indexing/locallang_mod.xml');

}

?>