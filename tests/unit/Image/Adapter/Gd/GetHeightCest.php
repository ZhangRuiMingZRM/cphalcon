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
use UnitTester;

class GetHeightCest
{
    /**
     * Tests Phalcon\Image\Adapter\Gd :: getHeight()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function imageAdapterGdGetHeightJpg(UnitTester $I)
    {
        $I->wantToTest('Image\Adapter\Gd - getHeight() - from jpg image');

        $gd = new Gd(dataDir('assets/images/phalconphp.jpg'));

        $I->assertSame(
            694,
            $gd->getHeight()
        );
    }

    /**
     * Tests Phalcon\Image\Adapter\Gd :: getHeight()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function imageAdapterGdGetHeightPng(UnitTester $I)
    {
        $I->wantToTest('Image\Adapter\Gd - getHeight() - from png image');

        $gd = new Gd(dataDir('assets/images/logo.png'));

        $I->assertSame(
            82,
            $gd->getHeight()
        );
    }
}
