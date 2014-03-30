<?php

class smbwebclient_config extends smbwebclient {

    // These are necessary for the responsive design to work

    var $cfgInlineFiles = false;
    function Input ($name, $value = '', $type = 'text', $extra = '') {
	    return "<input class=\"button tiny bottom0\" type=\"{$type}\" name=\"{$name}\" value=\"".htmlentities($value, ENT_COMPAT, $this->cfgDefaultCharset)."\" {$extra}/>";
    }

    // Put your configuration variables here
    // Refer to the line 53 in smbwebclient.php for the available options

    // Examples for the most common options:

    // Server root
    // var $cfgSambaRoot = 'NETWORK/SERVER';

    // Allow anonymous login
    // var $cfgAnonymous = false;

    // Default language
    // var $cfgDefaultLanguage = 'en';

    // Default server
    // var $cfgDefaultServer = 'localhost';

}
