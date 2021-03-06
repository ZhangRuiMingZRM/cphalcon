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

namespace Phalcon\Test\Unit\Translate\Adapter\Csv;

use Phalcon\Test\Fixtures\Traits\TranslateCsvTrait;
use Phalcon\Translate\Adapter\Csv;
use Phalcon\Translate\InterpolatorFactory;
use UnitTester;

class ArrayAccessCest
{
    use TranslateCsvTrait;

    /**
     * Tests Phalcon\Translate\Adapter\Csv :: array access
     *
     * @author Nikos Dimopoulos <nikos@phalconphp.com>
     * @since  2014-09-12
     */
    public function translateAdapterCsvWithArrayAccess(UnitTester $I)
    {
        $I->wantToTest('Translate\Adapter\Csv - array access');

        $language = $this->getCsvConfig()['ru'];

        $translator = new Csv(
            new InterpolatorFactory(),
            $language
        );

        $I->assertTrue(
            isset(
                $translator['Hello!']
            )
        );

        $I->assertFalse(
            isset(
                $translator['Hi there!']
            )
        );
    }
}
