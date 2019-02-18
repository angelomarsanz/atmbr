<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TmbrUsermetaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TmbrUsermetaTable Test Case
 */
class TmbrUsermetaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TmbrUsermetaTable
     */
    public $TmbrUsermeta;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TmbrUsermeta',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TmbrUsermeta') ? [] : ['className' => TmbrUsermetaTable::class];
        $this->TmbrUsermeta = TableRegistry::getTableLocator()->get('TmbrUsermeta', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TmbrUsermeta);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
