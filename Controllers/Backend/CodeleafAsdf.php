<?php

class CodeleafAsdf extends Shopware_Controllers_Backend_Application
{

    public function indexAction()
    {
        $logger = $this->container->get('pluginlogger');
        $logger->debug('Controllers/Backend/AsdfController - index');
        parent::indexAction();
    }

    public function detailAction()
    {
        $logger = $this->container->get('pluginlogger');
        $logger->debug('Controllers/Backend/AsdfController - detail');
        parent::indexAction();
    }

}