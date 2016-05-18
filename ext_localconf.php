<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined("TYPO3_MODE")) {
    die ("Access denied.");
}
ExtensionManagementUtility::addPItoST43($_EXTKEY, "pi1/class.tx_pilmailform_pi1.php", "_pi1", "list_type",
    0);
ExtensionManagementUtility::addTypoScript($_EXTKEY, "setup",
    "plugin." . ExtensionManagementUtility::getCN($_EXTKEY) . "_pi1 = USER_INT", 43);
