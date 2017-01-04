<?php
namespace InTime;

use InTime\Traits\Time;

/**
 * Class InTime
 * @package InTime
 */
class InTime
{
  use Time;

  /**
   * InTime constructor.
   * @param null $when
   */
  public function __construct($when = null)
  {
    $this->when = $when;
    $this->initialize();
  }

  /**
   * @return static
   */
  public static function now()
  {
    return new static();
  }

  /**
   * @param null $when
   * @return static
   */
  public static function create($when = null)
  {
    return new static($when);
  }
}