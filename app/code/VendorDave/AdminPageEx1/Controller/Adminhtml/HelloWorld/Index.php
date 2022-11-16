<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace VendorDave\AdminPageEx1\Controller\Adminhtml\HelloWorld;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 */
class Index extends Action implements HttpGetActionInterface
{
    const MENU_ID = 'VendorDave_AdminPageEx1::greetings_helloworld';

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * Index constructor.
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);

        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Load the page defined in view/adminhtml/layout/adminpagesex1id_helloworld_index.xml
     *
     * @return Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        // muestra activo el elemento del menu principal, similar a cuando se da click en dashboard y el icono queda resaltado
        $resultPage->setActiveMenu(static::MENU_ID);
        $resultPage->getConfig()->getTitle()->prepend(__('Hello World'));

        return $resultPage;
    }
}
