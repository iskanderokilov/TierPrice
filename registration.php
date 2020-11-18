<?php
/**
 * Copyright © Labelident GmbH (https://www.labelident.com)
 * Author: Alexander Naumov
 * See LICENSE for the license details.
 */
declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'iskanderokilov_TierPrice',
    __DIR__
);
