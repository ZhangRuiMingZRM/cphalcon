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

namespace Phalcon\Test\Fixtures\Traits;

use UnitTester;

trait RedisTrait
{
    protected $options = [];

    public function _before(UnitTester $I)
    {
        $I->checkExtensionIsLoaded('redis');
 
        $this->options = $this->getOptions();
    }

    protected function getOptions(): array
    {
        return [
            'host'     => env('DATA_REDIS_HOST'),
            'port'     => env('DATA_REDIS_PORT'),
            'index'    => env('DATA_REDIS_NAME'),
            'statsKey' => '_PHCR',
        ];
    }
}
