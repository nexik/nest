<?php
/**
 * This file is part Phalcon Nest (Phalcon SOLID bootstrap project for RAD)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT
 */

namespace Nest\Application;

use Nest\Application\ApplicationInterface;
use Phalcon\Mvc\Application;

/**
 * Nest\Application\Http
 *
 * Base class for web MVC application
 *
 * @author  Tomasz Ślązok <tomek@sabaki.pl>
 */
class Http extends PhalconApplication implements ApplicationInterface
{
    /**
     * Flag if application is in production mode
     *
     * @var boolean
     */
    private $inProduction;

    public function __construct($inProduction)
    {
        $this->inProduction = $inProduction;
    }

    /**
     * Run application and output result to the browser
     *
     * @return string
     */
    public function run()
    {
        echo $this->handle()->getContent();
    }

    /**
     * Return flag if application is in production or not
     *
     * @return boolean
     */
    public function isInProduction()
    {
        return $this->inProduction;
    }
}