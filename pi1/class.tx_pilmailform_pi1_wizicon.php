<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2004 Tonni Aagesen (typo3@pil.dk)
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
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Class that adds the wizard icon.
 *
 * @author    Tonni Aagesen <typo3@pil.dk>
 */
class tx_pilmailform_pi1_wizicon
{

    function proc($wizardItems)
    {
        global $LANG;

        $LL = $this->includeLocalLang();

        $wizardItems["plugins_tx_pilmailform_pi1"] = array(
            "icon"        => ExtensionManagementUtility::extRelPath("pil_mailform") . "pi1/ce_wiz.gif",
            "title"       => $LANG->getLLL("pi1_title", $LL),
            "description" => $LANG->getLLL("pi1_plus_wiz_description", $LL),
            "params"      => "&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=pil_mailform_pi1"
        );

        return $wizardItems;
    }

    function includeLocalLang()
    {
        include(ExtensionManagementUtility::extPath("pil_mailform") . "locallang.php");

        return $LOCAL_LANG;
    }
}

if (defined("TYPO3_MODE") && $TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/pil_mailform/pi1/class.tx_pilmailform_pi1_wizicon.php"]) {
    include_once($TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/pil_mailform/pi1/class.tx_pilmailform_pi1_wizicon.php"]);
}

?>