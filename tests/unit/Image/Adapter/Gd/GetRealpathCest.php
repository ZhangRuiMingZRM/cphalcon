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

namespace Phalcon\Test\Unit\Image\Adapter\Gd;

use Phalcon\Image\Adapter\Gd;
use Phalcon\Test\Fixtures\Traits\GdTrait;
use UnitTester;

class GetRealpathCest
{
    use GdTrait;

    /**
     * Tests Phalcon\Image\Adapter\Gd :: getRealpath()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function imageAdapterGdGetRealpath(UnitTester $I)
    {
        $I->wantToTest('Image\Adapter\Gd - getRealpath()');

        foreach ($this->getImages() as $image) {
            $gd = new Gd($image);

            $I->assertSame(
                $image,
                $gd->getRealpath()
            );
        }
    }
}
