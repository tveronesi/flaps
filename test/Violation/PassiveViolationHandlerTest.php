<?php

namespace BehEh\Flaps;

use PHPUnit_Framework_TestCase;
use BehEh\Flaps\Violation\PassiveViolationHandler;

class PassiveViolationHandlerTest extends PHPUnit_Framework_TestCase {

	/*
	 * @var PassiveViolationHandler
	 */
	protected $handler;

	public function setUp() {
		$this->handler = new PassiveViolationHandler;
	}

	/**
	 * @covers PassiveViolationHandler::handleViolation
	 */
	public function testhandleViolation() {
		$this->assertFalse($this->handler->handleViolation());
	}

}