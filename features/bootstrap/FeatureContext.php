<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements \Behat\Behat\Context\SnippetAcceptingContext
{
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
     * @When I press more
     */
    public function iPressMore()
    {
        //throw new PendingException();
        $this->getSession()            // the browser
        ->getPage()                    // the DocumentElement
        ->pressButton('more');  // what you want to do with it
    }
}
