<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use PHPUnit_Framework_Assert as PHPUnit ;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    Use \Laracasts\Behat\Context\DatabaseTransactions ;
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
     * @Then I can do some thing with Laravel
     */
    public function iCanDoSomeThingWithLaravel()
    {
        // You have access to Laravel because of laravel-behat-extension
        PHPUnit::assertEquals('.env.behat',app()->environmentFile());
        PHPUnit::assertEquals('acceptance',env('APP_ENV'));
        PHPUnit::assertTrue(config('app.debug'));


    }
}
