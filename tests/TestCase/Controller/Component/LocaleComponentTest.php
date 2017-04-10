<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\LocaleComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\LocaleComponent Test Case
 */
class LocaleComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\LocaleComponent
     */
    public $Locale;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Locale = new LocaleComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Locale);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
