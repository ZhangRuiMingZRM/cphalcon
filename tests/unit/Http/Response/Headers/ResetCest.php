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

namespace Phalcon\Test\Unit\Http\Response\Headers;

use Phalcon\Http\Response\Headers;
use UnitTester;

class ResetCest
{
    /**
     * Tests Phalcon\Http\Response\Headers :: reset()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-08
     */
    public function httpResponseHeadersReset(UnitTester $I)
    {
        $I->wantToTest('Http\Response\Headers - reset()');

        $headers = new Headers();
        $headers->set('Content-Type', 'text/html; charset=UTF-8');
        $headers->set('Content-Encoding', 'gzip');

        $headers->reset();

        $I->assertEmpty($headers->get('Content-Type'));
        $I->assertEmpty($headers->get('Content-Encoding'));
    }
}
