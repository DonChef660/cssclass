<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$TYPO3_CONF_VARS['FE']['addRootLineFields'] .= ',cssclass';

?>