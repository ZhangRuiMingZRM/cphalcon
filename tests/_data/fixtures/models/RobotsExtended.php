<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Models;

use Phalcon\Mvc\ModelInterface;

/**
 * Class RobotsExtended
 */
class RobotsExtended extends Robots
{
    /**
     * @param null $parameters
     *
     * @return ModelInterface|false
     */
    public static function findFirst($parameters = null)
    {
        if (is_string($parameters)) {
            return parent::findFirstById($parameters);
        }

        return parent::findFirst($parameters);
    }

    public function initialize()
    {
        $this->setSource('robots');
    }
}
