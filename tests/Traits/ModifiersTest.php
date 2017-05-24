<?php
use PHPUnit\Framework\TestCase;

class ModifiersTest extends TestCase
{
  public function testApplyInterval()
  {
    // TODO
  }

  public function testAddSecond()
  {
    // TODO
  }

  public function testAddMinute()
  {
    // TODO
  }

  public function testAddHour()
  {
    // TODO
  }

  public function testAddDay()
  {
    // TODO
  }

  public function testAddWeek()
  {
    // TODO
  }

  public function testAddMonth()
  {
    // TODO
    // test standard random date early month

    // test late day of month
    // 31 May 2017 should change to 30 Jun 2017
    $timezone = new DateTimeZone('Europe/London');
    $test = date_create_from_format('Y-m-d H:i:s', '2017-05-31 20:20:20', $timezone);
    echo $test->format('Y-m-d H:i:s');
    $maySeventeen = \InTime\InTime::createFromFormat('Y-m-d H:i:s', '2017-05-31 20:20:20', $timezone);
    $maySeventeen->addMonth();
  }

  public function testAddQuarter()
  {
    // TODO
  }

  public function testAddYear()
  {
    // TODO
  }

  public function testAddDecade()
  {
    // TODO
  }

  public function testAddCentury()
  {
    // TODO
  }

  public function testAddMillenium()
  {
    // TODO
  }

  public function testSubSecond()
  {
    // TODO
  }

  public function testSubMinute()
  {
    // TODO
  }

  public function testSubHour()
  {
    // TODO
  }

  public function testSubDay()
  {
    // TODO
  }

  public function testSubWeek()
  {
    // TODO
  }

  public function testSubMonth()
  {
    // TODO
  }

  public function testSubQuarter()
  {
    // TODO
  }

  public function testSubYear()
  {
    // TODO
  }

  public function testSubDecade()
  {
    // TODO
  }

  public function testSubCentury()
  {
    // TODO
  }

  public function testSubMillenium()
  {
    // TODO
  }

  public function testAddSeconds()
  {
    // TODO
  }

  public function testAddMinutes()
  {
    // TODO
  }

  public function testAddHours()
  {
    // TODO
  }

  public function testAddDays()
  {
    // TODO
  }

  public function testAddWeeks()
  {
    // TODO
  }

  public function testAddMonths()
  {
    // TODO
  }

  public function testDaysInMonth()
  {
    // TODO
  }

  public function testAddQuarters()
  {
    // TODO
  }

  public function testAddYears()
  {
    // TODO
  }

  public function testAddDecades()
  {
    // TODO
  }

  public function testAddCenturies()
  {
    // TODO
  }

  public function testAddMillenia()
  {
    // TODO
  }

  public function testSubSeconds()
  {
    // TODO
  }

  public function testSubMinutes()
  {
    // TODO
  }

  public function testSubHours()
  {
    // TODO
  }

  public function testSubDays()
  {
    // TODO
  }

  public function testSubWeeks()
  {
    // TODO
  }

  public function testSubMonths()
  {
    // TODO
  }

  public function testSubQuarters()
  {
    // TODO
  }

  public function testSubYears()
  {
    // TODO
  }

  public function testSubDecades()
  {
    // TODO
  }

  public function testSubCenturies()
  {
    // TODO
  }

  public function testSubMillenia()
  {
    // TODO
  }
}