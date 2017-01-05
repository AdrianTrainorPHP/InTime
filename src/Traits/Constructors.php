<?php
namespace InTime\Traits;
use InTime\InTime;

/**
 * Class Constructors
 * @package InTime\Traits
 */
trait Constructors
{
  /**
   * @return static
   */
  public static function now()
  {
    return new static();
  }

  /**
   * @param string|null $when
   * @return static
   */
  public static function create($when = null)
  {
    return new static($when);
  }

  /**
   * @param string $format
   * @param string|null $when
   */
  public static function createFromFormat($format = '', $when = null)
  {

  }

  /**
   * @return InTime
   */
  public function copy()
  {
    $clone = clone $this;
    return $clone;
  }
}