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

namespace Phalcon\Test\Integration\Db\Profiler;

use IntegrationTester;

class GetTotalElapsedSecondsCest
{
    /**
     * Tests Phalcon\Db\Profiler :: getTotalElapsedSeconds()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function dbProfilerGetTotalElapsedSeconds(IntegrationTester $I)
    {
        $I->wantToTest('Db\Profiler - getTotalElapsedSeconds()');
        $I->skipTest('Need implementation');
    }
}
