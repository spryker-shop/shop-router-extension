<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ShopRouterExtension\Dependency\Plugin;

interface ResourceCreatorPluginInterface
{
    /**
     * @return string
     */
    public function getType();

    /**
     * @return string
     */
    public function getModuleName();

    /**
     * @return string
     */
    public function getControllerName();

    /**
     * @return string
     */
    public function getActionName();

    /**
     * @param array $data
     *
     * @return array
     */
    public function mergeResourceData(array $data);
}
