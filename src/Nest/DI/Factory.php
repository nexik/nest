<?php
/**
 * This file is part Phalcon Nest (Phalcon SOLID bootstrap project for RAD)
 *
 * @license    MIT
 */
namespace Nest\DI;

use Phalcon\Di\FactoryDefault as PhalconDI;

/**
 * Nest\DI\Factory
 *
 * Factory for building Dependency Injection Containers for Phalcon Appliaction
 *
 * @author  Tomasz Ślązok tomek@sabaki.pl
 */
class Factory
{
    public function build($type = 'mvc')
    {
        $di = new PhalconDI();

        /**
         * @todo MAGIC ^_^
         */

        return $di;
    }
}