<?php
namespace InTime\Traits;

/**
 * Class Mutators
 * @package InTime\Traits
 */
trait Mutators
{
  /**
   * @param string $method
   * @param string $timePart
   * @param int $period
   * @param string $designator
   * @return $this
   */
  protected function applyInterval($method, $timePart, $period, $designator)
  {
    $this->$method($timePart . $period . $designator);
    return $this;
  }

  /**
   * @return $this
   */
  public function addSecond()
  {
    return $this->addSeconds();
  }

  /**
   * @return $this
   */
  public function addMinute()
  {
    return $this->addMinutes();
  }

  /**
   * @return $this
   */
  public function addHour()
  {
    return $this->addHours();
  }

  /**
   * @return $this
   */
  public function addDay()
  {
    return $this->addDays();
  }

  /**
   * @return $this
   */
  public function addWeek()
  {
    return $this->addWeeks();
  }

  /**
   * @return $this
   */
  public function addMonth()
  {
    return $this->addMonths();
  }

  /**
   * @return $this
   */
  public function addQuarter()
  {
    return $this->addQuarters();
  }

  /**
   * @return $this
   */
  public function addYear()
  {
    return $this->addYears();
  }

  /**
   * @return $this
   */
  public function addDecade()
  {
    return $this->addDecades();
  }

  /**
   * @return $this
   */
  public function addCentury()
  {
    return $this->addCenturies();
  }

  /**
   * @return $this
   */
  public function addMillenium()
  {
    return $this->addMillenia();
  }

  /**
   * @return $this
   */
  public function subSecond()
  {
    return $this->subSeconds();
  }

  /**
   * @return $this
   */
  public function subMinute()
  {
    return $this->subMinutes();
  }

  /**
   * @return $this
   */
  public function subHour()
  {
    return $this->subHours();
  }

  /**
   * @return $this
   */
  public function subDay()
  {
    return $this->subDays();
  }

  /**
   * @return $this
   */
  public function subWeek()
  {
    return $this->subWeeks();
  }

  /**
   * @return $this
   */
  public function subMonth()
  {
    return $this->subMonths();
  }

  /**
   * @return $this
   */
  public function subQuarter()
  {
    return $this->subQuarters();
  }

  /**
   * @return $this
   */
  public function subYear()
  {
    return $this->subYears();
  }

  /**
   * @return $this
   */
  public function subDecade()
  {
    return $this->subDecades();
  }

  /**
   * @return $this
   */
  public function subCentury()
  {
    return $this->subCenturies();
  }

  /**
   * @return $this
   */
  public function subMillenium()
  {
    return $this->subMillenia();
  }

  /**
   * @param int $period
   * @return $this
   */
  public function addSeconds($period = 1)
  {
    return $this->applyInterval('add', 'PT', $period, 'S');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function addMinutes($period = 1)
  {
    return $this->applyInterval('add', 'PT', $period, 'M');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function addHours($period = 1)
  {
    return $this->applyInterval('add', 'P', $period, 'H');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function addDays($period = 1)
  {
    return $this->applyInterval('add', 'P', $period, 'D');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function addWeeks($period = 1)
  {
    return $this->applyInterval('add', 'P', $period, 'W');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function addMonths($period = 1)
  {
    return $this->applyInterval('add', 'P', $period, 'M');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function addQuarters($period = 1)
  {
    return $this->applyInterval('add', 'P', ($period * 3), 'M');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function addYears($period = 1)
  {
    return $this->applyInterval('add', 'P', $period, 'Y');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function addDecades($period = 1)
  {
    return $this->applyInterval('add', 'P', ($period * 10), 'Y');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function addCenturies($period = 1)
  {
    return $this->applyInterval('add', 'P', ($period * 100), 'Y');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function addMillenia($period = 1)
  {
    return $this->applyInterval('add', 'P', ($period * 1000), 'Y');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function subSeconds($period = 1)
  {
    return $this->applyInterval('sub', 'PT', $period, 'S');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function subMinutes($period = 1)
  {
    return $this->applyInterval('sub', 'PT', $period, 'M');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function subHours($period = 1)
  {
    return $this->applyInterval('sub', 'PT', $period, 'H');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function subDays($period = 1)
  {
    return $this->applyInterval('sub', 'P', $period, 'D');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function subWeeks($period = 1)
  {
    return $this->applyInterval('sub', 'P', $period, 'W');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function subMonths($period = 1)
  {
    return $this->applyInterval('sub', 'P', $period, 'M');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function subQuarters($period = 1)
  {
    return $this->applyInterval('sub', 'P', ($period * 3), 'M');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function subYears($period = 1)
  {
    return $this->applyInterval('sub', 'P', $period, 'Y');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function subDecades($period = 1)
  {
    return $this->applyInterval('sub', 'P', ($period * 10), 'Y');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function subCenturies($period = 1)
  {
    return $this->applyInterval('sub', 'P', ($period * 100), 'Y');
  }

  /**
   * @param int $period
   * @return $this
   */
  public function subMillenia($period = 1)
  {
    return $this->applyInterval('sub', 'P', ($period * 1000), 'Y');
  }

}