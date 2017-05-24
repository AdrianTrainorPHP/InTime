<?php
namespace InTime\Traits;

/**
 * Class Exceptions
 * @package InTime\Traits
 */
trait Exceptions
{
  /**
   * @var \Exception|null
   */
  protected $exception;

  protected function exceptionHandler(\Closure $closure)
  {
    try {
      $closure();
    } catch (\Exception $e) {
      $this->exception = $e;
      $this->outputException();
    }
  }

  protected function outputException()
  {
    echo '<div class="intime-exception">';
    echo '<h2>' . $this->exception->getMessage() . '</h3>';
    echo '<pre>';
    echo "\n";
    if ($code = $this->getExceptionAttr('Code')) echo '<strong>Code:</strong> ' . $code . "\n";
    if ($file = $this->getExceptionAttr('File')) echo '<strong>File:</strong> ' . $file . "\n";
    if ($line = $this->getExceptionAttr('Line')) echo '<strong>Line:</strong> ' . $line . "\n";
    if ($stackTrace = $this->getExceptionAttr('Trace'))
      echo '<strong>Stack Trace:</strong>' . "\n" . print_r($stackTrace, true) . "\n";
    echo '</pre>';
    echo '</div>';

  }

  protected function invalidTimezone($timezone = '')
  {
    throw new \Exception('Invalid timezone provided (' . $timezone . ')');
  }

  /**
   * @param null $attr
   * @return mixed|null
   */
  private function getExceptionAttr($attr = null)
  {
    if (!$attr) return null;
    $method = 'get' . ucfirst($attr);
    if (!$this->exception || !method_exists($this->exception, $method) || !$code = $this->exception->$method()) return null;
    return (strlen($code . '') > 0) ? $code : null;
  }
}