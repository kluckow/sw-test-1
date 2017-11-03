<?php

namespace CodeleafAsdf\Subscriber\Backend;

use Enlight\Event\SubscriberInterface;
use Shopware\Components\DependencyInjection\Container;

class AsdfController implements SubscriberInterface
{

    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatchSecure_Backend_Order' => 'onBackendOrder',
            'Enlight_Controller_Dispatcher_ControllerPath_Backend_Order' => 'onBackendOrder',
        ];
    }

    public function onBackendOrder(\Enlight_Event_EventArgs $args)
    {
        $logger = $this->container->get('pluginlogger');
        $logger->debug('CodeleafAsdf/Subscribers/Backend/AsdfController.php->onBackendOrder() - CanceledOrder');

        /** @var \Enlight_Controller_Action $controller */
        $controller = $args->get('subject');
        $request = $controller->Request();
        $view = $controller->View();
        $view->addTemplateDir(__DIR__ . '/Resources/Views/');

        if ($request->getActionName() == 'load') {
            $view->extendsTemplate('backend/order/view/list/filter.js');
        }
    }
}
