<?php
/**
 * This file is part Phalcon Nest (Phalcon SOLID bootstrap project for RAD)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT
 */
namespace Nest\DI;

use Nest\DI\Services\Definitions\Startegy\Yaml as YamlStrategy;
use Phalcon\Di\FactoryDefault as PhalconDI;

/**
 * Nest\DI\Factory
 *
 * Factory for building Dependency Injection Containers for Phalcon Appliaction
 *
 * @author  Tomasz Ślązok <tomek@sabaki.pl>
 */
class Factory
{
    /**
     * Startegy class which load services definitions
     *
     * @var Nest\DI\Services\Definitions\StartegyInterface
     */
    private $strategy;

    /**
     * Constructor
     *
     * @param Nest\DI\Services\Definitions $strategy
     */
    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function build($type)
    {
        $di = new PhalconDI();

        $services = $this->strategy->loadServicesDefinitions($type);

        foreach ($services as $name => $definition) {
            if ($definition->isShared()) {
                $di->setShared($name, $definition->toArray());
            } else {
                $di->set($name, $definition->toArray());
            }
        }

        return $di;
    }
}