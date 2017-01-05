<?php
namespace InTime;

use InTime\Traits\Constructors;
use InTime\Traits\Accessors;
use InTime\Traits\Mutators;
use InTime\Traits\Time;

/**
 * Class InTime
 * @package InTime
 */
class InTime extends \DateTime
{
  use Time, Mutators, Accessors, Constructors;

  /**
   * InTime constructor.
   * @param null $when
   */
  public function __construct($when = null)
  {
    $this->when = $when;
    $this->initialize();
    parent::__construct($when ?: 'now');
  }
}