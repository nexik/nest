<?php
/**
 * This file is part Phalcon Nest (Phalcon SOLID bootstrap project for RAD)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT
 */
namespace Nest\DI\Services\Definitions;

/**
 * Interface for loading service deifnitions
 * for Dependency Injection Container
 *
 * @author Tomasz Ślązok <tomek@sabaki.pl>
 */
interface StrategyInterface
{
    public function loadServicesDefinitions($app);
}