<?php

namespace EthanYehuda\CronjobManager\Controller\Adminhtml\Manage;

use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action\Context;
use Magento\Backend\App\Action;

class Index extends Action
{
    public const ADMIN_RESOURCE = "EthanYehuda_CronjobManager::cronjobmanager";

    /**
     * @param PageFactory $resultPageFactory
     * @param Context $context
     */
    public function __construct(
        protected PageFactory $resultPageFactory,
        Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * Product list page
     *
     * @return Page
     */
    public function execute(): Page
    {
        /** @var Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('EthanYehuda_CronjobManager::cronjobmanager');
        $resultPage->getConfig()->getTitle()->prepend(__('Cron Job Dashboard'));
        return $resultPage;
    }
}
