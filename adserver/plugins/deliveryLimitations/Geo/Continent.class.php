<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

require_once LIB_PATH . '/Extension/deliveryLimitations/DeliveryLimitationsCommaSeparatedData.php';
require_once MAX_PATH . '/lib/max/Delivery/limitations.delivery.php';

/**
 * A Geo delivery limitation plugin, for filtering delivery of ads on the
 * basis of the viewer's continent.
 *
 * Works with:
 * A comma separated list of valid continent codes (eg. "AF" for Africa). See
 * the Continent.res.inc.php resource file for more details of the valid
 * continent codes.
 *
 * Valid comparison operators:
 * =~, !~
 *
 * @package    OpenXPlugin
 * @subpackage DeliveryLimitations
 */
class Plugins_DeliveryLimitations_Geo_Continent extends Plugins_DeliveryLimitations_CommaSeparatedData
{
    use \RV\Extension\DeliveryLimitations\GeoLimitationTrait;

    function __construct()
    {
        parent::__construct();
        $this->nameEnglish = '地理 - 大陆';
    }


    function init($data)
    {
        parent::init($data);
        $this->setAValues(array_keys($this->res));
    }


    /**
     * Return if this plugin is available in the current context
     *
     * @return boolean
     */
    function isAllowed($page = false)
    {
        return $this->hasCapability('continent');
    }

    /**
     * Outputs the HTML to display the data for this limitation
     *
     * @return void
     */
    function displayArrayData()
    {
        $tabindex = &$GLOBALS['tabindex'];

        echo "<div class='box'>";
        foreach ($this->res as $code => $name) {
            echo "<div class='boxrow'>";
            echo "<input tabindex='" . ($tabindex++) . "' ";
            echo "type='checkbox' id='c_{$this->executionorder}_{$code}' name='acl[{$this->executionorder}][data][]' value='{$code}'" . (in_array($code, $this->data) ? ' CHECKED' : '') . ">{$name}</div>";
        }
        echo "</div>";
    }
}
