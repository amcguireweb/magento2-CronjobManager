<?php

namespace EthanYehuda\CronjobManager\Component;

use Magento\Ui\Component\AbstractComponent;

class Timeline extends AbstractComponent
{
    public const NAME = 'cronjobmanager_timeline';

    /**
     * Get component name
     *
     * @return string
     */
    public function getComponentName(): string
    {
        return static::NAME;
    }

    /**
     * @inheritdoc
     */
    public function getDataSourceData(): array
    {
        return ['data' => $this->getContext()->getDataProvider()->getData()];
    }
}
