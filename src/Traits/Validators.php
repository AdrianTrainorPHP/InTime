<?php
namespace InTime\Traits;

trait Validators
{
  /**
   * @param null $period
   * @return bool
   */
  protected function validateSecond($period = null)
  {
    return $this->validateBetween(0, 59, $period);
  }

  /**
   * @param null $period
   * @return bool
   */
  protected function validateMinute($period = null)
  {
    return $this->validateBetween(0, 59, $period);
  }

  /**
   * @param null $period
   * @return bool
   */
  protected function validateHour($period = null)
  {
    return $this->validateBetween(0, 23, $period);
  }

  protected function validateDay($period = null, $month = null)
  {
    if (!$this->validateMonth($month)) return false;
    $days = $this->daysOfMonth($month);
    return $this->validateBetween(1, $days, $period);
  }

  /**
   * @param int $start
   * @param int $end
   * @param null $period
   * @return bool
   */
  protected function validateBetween($start = 0, $end = 59, $period = null)
  {
    if (!$period) return false;
    if (!is_numeric($period)) return false;
    if ($period < $start || $period > $end) return false;
    return true;
  }

  /**
   * @param string $timezone
   * @return mixed
   */
  protected function validTimezone($timezone = 'Europe/London')
  {
    return in_array($timezone, timezone_identifiers_list());
  }


}