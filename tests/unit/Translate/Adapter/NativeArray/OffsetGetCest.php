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

namespace Phalcon\Test\Unit\Translate\Adapter\NativeArray;

use Phalcon\Test\Fixtures\Traits\TranslateArrayTrait;
use Phalcon\Translate\Adapter\NativeArray;
use Phalcon\Translate\InterpolatorFactory;
use UnitTester;

class OffsetGetCest
{
    use TranslateArrayTrait;

    /**
     * Tests Phalcon\Translate\Adapter\NativeArray :: offsetGet()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function translateAdapterNativeArrayOffsetGet(UnitTester $I)
    {
        $I->wantToTest('Translate\Adapter\NativeArray - offsetGet()');

        $language = $this->getArrayConfig()['en'];

        $translator = new NativeArray(
            new InterpolatorFactory(),
            [
                'content' => $language,
            ]
        );

        $I->assertEquals(
            'Hello',
            $translator->offsetGet('hi')
        );
    }
}
