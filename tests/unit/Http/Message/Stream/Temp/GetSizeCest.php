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

namespace Phalcon\Test\Unit\Http\Message\Stream\Temp;

use UnitTester;

class GetSizeCest
{
    /**
     * Unit Tests Phalcon\Http\Message\Stream\Temp :: getSize()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-25
     */
    public function httpMessageStreamTempGetSize(UnitTester $I)
    {
        $I->wantToTest('Http\Message\Stream\Temp - getSize()');

        $I->skipTest('Need implementation');
    }
}