<?php

namespace WPbdd;

class HelloWorldShortCodeTest extends \Codeception\TestCase\WPTestCase{

	/**
	 * @test
	 * it should be instantiatable
	 */
	public function it_should_be_instantiatable(){
		$HelloWorldShortCode = new HelloWorldShortCode();
	}

}