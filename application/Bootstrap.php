<?php

/**
 * Application bootstrap
 *
 * @package Application
 *
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    /**
     * Configuration
     *
     * @author          Eddie Jaoude
     * @param           void
     * @return          void
     *
     */
    protected function _initConfig() {
        // get config
        $config = new Zend_Config_Ini(APPLICATION_PATH .
                        DIRECTORY_SEPARATOR . 'configs' .
                        DIRECTORY_SEPARATOR . 'application.ini', APPLICATION_ENV);

        // save new database adapter to registry
        Zend_Registry::set('config', $config);
    }


}

