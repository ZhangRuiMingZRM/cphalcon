<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Annotations;

use Phalcon\Annotations\Annotation;
use Phalcon\Annotations\Collection;
use Phalcon\Annotations\Reader;
use Phalcon\Annotations\Reflection;
use UnitTester;

class ReflectionCest
{
    /**
     * executed before each test
     */
    protected function _before(UnitTester $I)
    {
        require_once dataDir('fixtures/Annotations/TestClass.php');
    }

    /**
     * Tests parsing class annotations
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2016-01-26
     */
    public function testClassAnnotations(UnitTester $I)
    {
        $reader = new Reader();

        $reflection = new Reflection(
            $reader->parse('TestClass')
        );

        $methodsAnnotations = $reflection->getMethodsAnnotations();

        $I->assertInternalType('array', $methodsAnnotations);

        $I->assertInstanceOf(
            Collection::class,
            $methodsAnnotations['testMethod1']
        );

        $total = 0;

        foreach ($methodsAnnotations as $method => $annotations) {
            $I->assertInternalType('string', $method);

            $number = 0;

            foreach ($annotations as $annotation) {
                $I->assertInstanceOf(
                    Annotation::class,
                    $annotation
                );

                $number++;
                $total++;
            }

            $I->assertGreaterThan(0, $number);
        }

        $I->assertEquals(14, $total);

        /** @var Collection $annotations */
        $annotations = $methodsAnnotations['testMethod1'];

        $I->assertTrue($annotations->has('Simple'));
        $I->assertFalse($annotations->has('NoSimple'));

        $annotation = $annotations->get('Simple');
        $I->assertEquals('Simple', $annotation->getName());
        $I->assertEquals(null, $annotation->getArguments());
        $I->assertEquals(0, $annotation->numberArguments());
        $I->assertFalse($annotation->hasArgument('none'));

        $annotation = $annotations->get('NamedMultipleParams');
        $I->assertEquals('NamedMultipleParams', $annotation->getName());
        $I->assertEquals(2, $annotation->numberArguments());
        $I->assertEquals(['first' => 'First', 'second' => 'Second'], $annotation->getArguments());
        $I->assertTrue($annotation->hasArgument('first'));
        $I->assertEquals('First', $annotation->getArgument('first'));
        $I->assertFalse($annotation->hasArgument('none'));

        $propertiesAnnotations = $reflection->getPropertiesAnnotations();
        $I->assertInternalType('array', $propertiesAnnotations);
        $I->assertInstanceOf(
            Collection::class,
            $propertiesAnnotations['testProp1']
        );

        $total = 0;

        foreach ($propertiesAnnotations as $property => $annotations) {
            $I->assertInstanceOf(
                Collection::class,
                $propertiesAnnotations['testProp1']
            );

            $number = 0;

            foreach ($annotations as $annotation) {
                $I->assertInstanceOf(
                    Annotation::class,
                    $annotation
                );

                $number++;
                $total++;
            }

            $I->assertGreaterThan(0, $number);
        }

        $I->assertEquals(10, $total);
    }
}
