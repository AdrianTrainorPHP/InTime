<?php
use PHPUnit\Framework\TestCase;
use InTime\InTime;

/**
 * Class InTimeTest
 */
class InTimeTest extends TestCase
{
  public function testConstruct()
  {
    $now = new InTime();

    // Test that InTime extends DateTime
    $this->assertTrue(is_a(new InTime(), 'DateTime', true));
    // check instance returned is of type InTime
    $this->assertEquals('InTime\\InTime', get_class($now));
  }
}