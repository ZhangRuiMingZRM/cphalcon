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

namespace Phalcon\Test\Integration\Mvc\View;

use IntegrationTester;
use Phalcon\Mvc\View;
use Phalcon\Test\Fixtures\Traits\ViewTrait;

class GetSetLayoutsDirCest
{
    use ViewTrait;

    /**
     * Tests Phalcon\Mvc\View :: getLayoutsDir() / setLayoutsDir()
     */
    public function mvcViewGetSetLayoutsDir(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\View - getLayoutsDir() / setLayoutsDir()');

        $view = new View();

        $view->setBasePath(
            dataDir()
        );

        $view->setLayoutsDir('views/layouts/');

        $I->assertEquals(
            'views/layouts/',
            $view->getLayoutsDir()
        );
    }
}
