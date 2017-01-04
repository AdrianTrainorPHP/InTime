<?php
namespace InTime\Traits;

/**
 * Class Accessors
 * @package InTime\Traits
 */
trait Accessors
{
  public function format()
  {

  }

  /**
   * @return Accessors
   */
  public function copy()
  {
    return clone $this;
  }
}