<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlternativesQuestionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlternativesQuestionsTable Test Case
 */
class AlternativesQuestionsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.alternatives_questions',
        'app.questions',
        'app.answers',
        'app.evaluations_users',
        'app.users',
        'app.departments',
        'app.evaluations',
        'app.questionnaires',
        'app.questionnaires_questions',
        'app.alternatives'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AlternativesQuestions') ? [] : ['className' => 'App\Model\Table\AlternativesQuestionsTable'];
        $this->AlternativesQuestions = TableRegistry::get('AlternativesQuestions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AlternativesQuestions);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
