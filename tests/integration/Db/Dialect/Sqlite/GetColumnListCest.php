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

namespace Phalcon\Test\Integration\Db\Dialect\Sqlite;

use Codeception\Example;
use IntegrationTester;
use Phalcon\Db\Dialect\Sqlite;

class GetColumnListCest
{
    /**
     * Tests Phalcon\Db\Dialect\Sqlite :: getColumnList()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2017-02-26
     *
     * @dataProvider getColumnListFixtures
     */
    public function dbDialectSqliteGetColumnList(IntegrationTester $I, Example $example)
    {
        $I->wantToTest('Db\Dialect\Sqlite - getColumnList()');

        $columns  = $example[0];
        $expected = $example[1];

        $dialect = new Sqlite();

        $actual = $dialect->getColumnList($columns);

        $I->assertInternalType(
            'string',
            $actual
        );

        $I->assertEquals($expected, $actual);
    }

    protected function getColumnListFixtures(): array
    {
        return [
            [
                ['column1', 'column2', 'column3', 'column13'],
                '"column1", "column2", "column3", "column13"',
            ],

            [
                ['foo'],
                '"foo"',
            ],
        ];
    }
}
