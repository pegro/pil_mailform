<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined("TYPO3_MODE")) {
    die ("Access denied.");
}

ExtensionManagementUtility::allowTableOnStandardPages('pil_mailform');

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY . '_pi1'] = 'layout,select_key,pages';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';

ExtensionManagementUtility::addPlugin(Array(
    'LLL:EXT:pil_mailform/locallang.php:pil_mailform',
    $_EXTKEY . '_pi1'
), 'list_type');
ExtensionManagementUtility::addPiFlexFormValue($_EXTKEY . '_pi1',
    'FILE:EXT:pil_mailform/flexform_ds.xml');

if (TYPO3_MODE == "BE") {
    $TBE_MODULES_EXT["xMOD_db_new_content_el"]["addElClasses"]["tx_pilmailform_pi1_wizicon"] = ExtensionManagementUtility::extPath($_EXTKEY) . "pi1/class.tx_pilmailform_pi1_wizicon.php";
}
