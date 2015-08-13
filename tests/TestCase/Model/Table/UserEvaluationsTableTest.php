<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserEvaluationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserEvaluationsTable Test Case
 */
class UserEvaluationsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_evaluations',
        'app.users',
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
        $config = TableRegistry::exists('UserEvaluations') ? [] : ['className' => 'App\Model\Table\UserEvaluationsTable'];
        $this->UserEvaluations = TableRegistry::get('UserEvaluations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserEvaluations);

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
