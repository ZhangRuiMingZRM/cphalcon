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

namespace Phalcon\Test\Unit\Html\Tag;

use Phalcon\Html\Tag;
use UnitTester;

class ElementCloseCest
{
    /**
     * Tests Phalcon\Html\Tag :: elementClose()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2014-09-05
     */
    public function htmlTagElementClose(UnitTester $I)
    {
        $I->wantToTest('Html\Tag - elementClose()');
        $tag      = new Tag();
        $name     = 'canvas';
        $expected = '</canvas>';

        $actual = $tag
            ->setDocType(Tag::XHTML10_STRICT)
            ->elementClose($name)
        ;
        $I->assertEquals($expected, $actual);

        $actual = $tag
            ->setDocType(Tag::HTML5)
            ->elementClose($name)
        ;
        $I->assertEquals($expected, $actual);
    }

    /**
     * Tests Phalcon\Html\Tag :: elementClose() - EOL
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2014-09-05
     */
    public function htmlTagElementCloseEol(UnitTester $I)
    {
        $I->wantToTest('Html\Tag - elementClose()');
        $tag = new Tag();

        $name = 'canvas';

        $parameters = [
            'useEol' => true,
        ];

        $expected = '</canvas>' . PHP_EOL;


        $tag->setDocType(
            Tag::XHTML10_STRICT
        );

        $actual = $tag->elementClose($name, $parameters);

        $I->assertEquals($expected, $actual);


        $tag->setDocType(
            Tag::HTML5
        );

        $actual = $tag->elementClose($name, $parameters);

        $I->assertEquals($expected, $actual);
    }
}
