<?php
namespace InTime;

use InTime\Traits\Constructors;
use InTime\Traits\Accessors;
use InTime\Traits\Exceptions;
use InTime\Traits\Modifiers;
use InTime\Traits\Time;
use InTime\Traits\Validators;

/**
 * Class InTime
 * @package InTime
 */
class InTime extends \DateTime
{
  use Validators, Time, Modifiers, Accessors, Constructors, Exceptions;

  /**
   * @var \DateTimeZone|null
   */
  protected $timezone = null;

  /**
   * InTime constructor.
   * @param string $when
   * @param string $timezone
   */
  public function __construct($when = 'now', $timezone = 'Europe/London')
  {
    $this->exceptionHandler(function () use ($when, $timezone) {
      $this->initialize($when, $timezone);
      parent::__construct($when ?: 'now', $this->timezone);
    });
  }

  public static function createFromFormat ($format, $time, \DateTimeZone $timezone = null)
  {
    static::createFromFormat($format, $time, $timezone);
  }
}