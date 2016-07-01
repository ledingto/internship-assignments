<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Illuminate\Foundation\Testing\ApplicationTrait;

/**
 * Behat context class
 */
class FeatureContext implements Context, SnippetAcceptingContext
{

		/**
		 * Responsible for providing a Laravel app instance.
		 */
		use Illuminate\Foundation\Testing\ApplicationTrait;

		/**
		 * Initializes context.
		 *
		 * Every scenario gets its own context instance.
		 * You can also pass arbitrary arguments to the
		 * context constructor through behat.yml.
		 */
		public function __construct()
		{
		}

		/**
		* @BeforeScenario
		*/
		public function setUp()
		{
				if ( ! $this->app)
				{
						$this->refreshApplication();
				}
		}

		/**
		 * @Given I am logged in
		 */
		public function iAmLoggedIn()
		{
				$user = new User;
				$this->be($user);
		}

		/**
		 * Creates the application.
		 *
		 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
		 */
		public function createApplication()
		{
				$unitTesting = true;

				$testEnvironment = 'testing';

				return require __DIR__.'/../../bootstrap/start.php';
		}

		/**
		 * @When I visit :arg1
		 */
		public function iVisit($arg1)
		{
				throw new PendingException();
		}

		/**
		 * @Then I should see :arg1
		 */
		public function iShouldSee($arg1)
		{
				throw new PendingException();
		}
}
