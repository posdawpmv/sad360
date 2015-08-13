<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionnairesQuestionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionnairesQuestionsTable Test Case
 */
class QuestionnairesQuestionsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.questionnaires_questions',
        'app.questionnaires',
        'app.evaluations',
        'app.users',
        'app.departments',
        'app.evaluations_users',
        'app.questions',
        'app.answers',
        'app.alternatives',
        'app.alternatives_questions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('QuestionnairesQuestions') ? [] : ['className' => 'App\Model\Table\QuestionnairesQuestionsTable'];
        $this->QuestionnairesQuestions = TableRegistry::get('QuestionnairesQuestions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuestionnairesQuestions);

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
