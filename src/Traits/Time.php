<?php
namespace InTime\Traits;

/**
 * Class Time
 * @package InTime\Traits
 */
trait Time
{
  protected function initialize($when = 'now', $timezone = 'Europe/London')
  {
    $this->when = $when;
    if (!$this->validTimezone($timezone)) throw new \Exception('Invalid Time Zone: "' . $timezone . '"');
    $this->timezone = new \DateTimeZone($timezone);
  }
}