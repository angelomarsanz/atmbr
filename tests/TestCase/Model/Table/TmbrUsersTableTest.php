<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TmbrUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TmbrUsersTable Test Case
 */
class TmbrUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TmbrUsersTable
     */
    public $TmbrUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TmbrUsers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TmbrUsers') ? [] : ['className' => TmbrUsersTable::class];
        $this->TmbrUsers = TableRegistry::getTableLocator()->get('TmbrUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TmbrUsers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
