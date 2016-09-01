<?php

declare(strict_types=1);

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predicate\Common;

/**
 * EqualToP test
 *
 * @see EqualToP
 * @coversDefaultClass Framework\Common\EqualToP
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @package Predicate\Common
 * @since 1.0
 */
class EqualToPTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @covers ::__invoke()
     */
    public function testInvoke()
    {
        $this->assertTrue((new EqualToP())());
        $this->assertTrue((new EqualToP())(null, '', false));
        $this->assertTrue((new EqualToP(1))(1, '1', '1.0', true));
        $this->assertFalse((new EqualToP(1))(1, '1.0', false));
        $this->assertFalse((new EqualToP())(true));
    }
}
