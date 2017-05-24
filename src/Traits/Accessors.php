<?php
namespace InTime\Traits;

/**
 * Class Accessors
 * @package InTime\Traits
 */
trait Accessors
{
  public function second($period = null)
  {
    if (!$period) return $this->format('s');
    if (!$this->validateSecond($period)) return null;
    if (!is_numeric($period)) return null;
    $this->setTime($this->format('H'), $this->format('m'), $period);
    return $this;
  }

  public function minute($period = null)
  {

  }

  public function hour($period = null)
  {

  }

  public function day($period = null)
  {

  }

  public function week($period = null)
  {

  }

  public function month($period = null)
  {

  }

  public function year($period = null)
  {

  }

  public function daysOfMonth($month = null)
  {
    
  }

}