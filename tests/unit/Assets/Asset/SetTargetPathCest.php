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

namespace Phalcon\Test\Unit\Assets\Asset;

use Codeception\Example;
use Phalcon\Assets\Asset;
use UnitTester;

class SetTargetPathCest
{
    /**
     * Tests Phalcon\Assets\Asset :: setTargetPath() - local
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     *
     * @dataProvider localProvider
     */
    public function assetsAssetSetTargetPathLocal(UnitTester $I, Example $example)
    {
        $I->wantToTest('Assets\Asset - setTargetPath() - local');

        $asset = new Asset(
            $example['type'],
            $example['path']
        );

        $targetPath = '/new/path';

        $asset->setTargetPath($targetPath);

        $I->assertEquals(
            $targetPath,
            $asset->getTargetPath()
        );
    }

    /**
     * Tests Phalcon\Assets\Asset :: setTargetPath() - remote
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     *
     * @dataProvider remoteProvider
     */
    public function assetsAssetSetTargetPathRemote(UnitTester $I, Example $example)
    {
        $I->wantToTest('Assets\Asset - setTargetPath() - remote');

        $asset = new Asset(
            $example['type'],
            $example['path'],
            false
        );

        $targetPath = '/new/path';

        $asset->setTargetPath($targetPath);

        $I->assertEquals(
            $targetPath,
            $asset->getTargetPath()
        );
    }

    protected function localProvider(): array
    {
        return [
            [
                'type' => 'css',
                'path' => 'css/docs.css',
            ],
            [
                'type' => 'js',
                'path' => 'js/jquery.js',
            ],
        ];
    }

    protected function remoteProvider(): array
    {
        return [
            [
                'type' => 'css',
                'path' => 'https://phalcon.ld/css/docs.css',
            ],
            [
                'type' => 'js',
                'path' => 'https://phalcon.ld/js/jquery.js',
            ],
        ];
    }
}
