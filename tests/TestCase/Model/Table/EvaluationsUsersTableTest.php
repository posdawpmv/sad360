<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvaluationsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvaluationsUsersTable Test Case
 */
class EvaluationsUsersTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evaluations_users',
        'app.users',
        'app.departments',
        'app.evaluations',
        'app.questionnaires',
        'app.questions',
        'app.answers',
        'app.alternatives',
        'app.alternatives_questions',
        'app.questionnaires_questions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EvaluationsUsers') ? [] : ['className' => 'App\Model\Table\EvaluationsUsersTable'];
        $this->EvaluationsUsers = TableRegistry::get('EvaluationsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EvaluationsUsers);

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
