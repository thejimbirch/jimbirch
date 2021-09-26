<?php

/**
 * Class DropSharkUnitTestRequest.
 *
 * A request for injecting into other code for unit test type tests.
 */
class DropSharkUnitTestRequest extends DropSharkRequest {

  /**
   * A string representing the scenario being tested.
   *
   * The allows the behaviour/output of the request to be manipulated on case by
   * case basis for the consuming code being tested.
   *
   * @var string
   */
  protected $scenario;

  /**
   * Set the scenario.
   *
   * @param string $scenario
   *   The scenario identifier.
   */
  public function setScenario($scenario) {
    $this->scenario = $scenario;
  }

  /**
   * {@inheritdoc}
   */
  public function post($endpoint, array $data = array()) {
    $request = new stdClass();

    switch ($this->scenario) {
      case 'queue_transmit':
        $request->code = 200;
        return $request;
    }
  }

}
