<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use PHPUnit\Framework\TestCase;
use Src\StackKata;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{

    protected $stackClass;
    protected $counterItems;

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
     * @Given The stack with capacity of :arg1 items
     */
    public function theStackWithCapacityOfItems($maxItems)
    {
        $this->stackClass = new StackKata($maxItems);
    }


    /**
     * @When I count the items
     */
    public function iCountTheItems()
    {
        $this->counterItems = count($this->stackClass->stack);
    }

    /**
     * @Then It should be :arg1
     */
    public function itShouldBe($counter)
    {
        TestCase::assertEquals($counter, $this->counterItems);
    }

    /**
     * @When I put the item :arg1
     */
    public function iPutTheItem($item)
    {
        try {
            $this->stackClass->put($item);
        } catch(\Exception $exception) {
            TestCase::assertEquals($exception->getMessage(), 'Stack is full');
        }
    }

    /**
     * @When I pop the stack
     */
    public function iPopTheStack()
    {
        try {
            $this->stackClass->pop();
        } catch(\Exception $exception) {
            TestCase::assertEquals($exception->getMessage(), 'Stack is empty');
        }
    }

    /**
     * @Then Pointer must show :arg1
     */
    public function pointerMustShow($item)
    {
        throw new PendingException();
    }


}
