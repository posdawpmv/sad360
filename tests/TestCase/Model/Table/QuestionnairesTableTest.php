<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionnairesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionnairesTable Test Case
 */
class QuestionnairesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.questionnaires',
        'app.evaluations',
        'app.users',
        'app.departments',
        'app.evaluations_users',
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
        $config = TableRegistry::exists('Questionnaires') ? [] : ['className' => 'App\Model\Table\QuestionnairesTable'];
        $this->Questionnaires = TableRegistry::get('Questionnaires', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Questionnaires);

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
