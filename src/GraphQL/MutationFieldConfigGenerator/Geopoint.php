<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\DataHubBundle\GraphQL\MutationFieldConfigGenerator;

class Geopoint extends Base
{

    /**
     * @param $nodeDef
     * @param $class
     * @param $container
     * @return array
     * @throws \Exception
     */
    public function getGraphQlMutationFieldConfig($nodeDef, $class, $container = null)
    {
        $processor = new \Pimcore\Bundle\DataHubBundle\GraphQL\InputProcessor\Geopoint($nodeDef);
        $processor->setGraphQLService($this->getGraphQlService());

        return [
            'arg' => $this->getGraphQlService()->getTypeDefinition("geopoint_input"),
            'processor' => [$processor, 'process']
        ];
    }

}
