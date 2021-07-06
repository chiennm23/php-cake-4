<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClassRoomsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClassRoomsTable Test Case
 */
class ClassRoomsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClassRoomsTable
     */
    protected $ClassRooms;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ClassRooms',
        'app.Students',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ClassRooms') ? [] : ['className' => ClassRoomsTable::class];
        $this->ClassRooms = $this->getTableLocator()->get('ClassRooms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ClassRooms);

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
