<?php
declare(strict_types=1);

namespace App\Test\TestCase\Form;

use App\Form\ContactForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\ContactForm Test Case
 */
class ContactFormTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Form\ContactForm
     */
    protected $Contact;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->Contact = new ContactForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Contact);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
