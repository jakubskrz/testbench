<?php

namespace Test;

require __DIR__ . '/../bootstrap.php';

/**
 * @testCase
 */
class MultipleTraits extends \Tester\TestCase
{

	use \Testbench\TCompiledContainer;
	use \Testbench\TComponent;
	use \Testbench\TDoctrine;
	use \Testbench\TNetteDatabase;
	use \Testbench\TPresenter;

	public function testShutUp()
	{
		\Tester\Environment::$checkAssertions = FALSE;
	}

}

(new MultipleTraits)->run();
