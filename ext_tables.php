<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$tempColumns = array();
$tempColumns['cssclass'] = array(
	'exclude' => 0,
	'label' => 'CSS Class',
	'config' => array(
		'type' => 'input',
              'size' => '30',
	)
);

$temporaryColumn = array(
       'cssclassContent' => array (
               'exclude' => 0,
               'label' => 'CSS Class Content',
               'config' => array (
                       'type' => 'input',
              				'size' => '30',
               )
       )
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages','cssclass', '', '');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $temporaryColumn, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content','cssclassContent', '', '');
?>