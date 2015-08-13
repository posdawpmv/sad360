<?php
namespace App\Test\TestCase\Controller;

use App\Controller\QuestionnairesQuestionsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\QuestionnairesQuestionsController Test Case
 */
class QuestionnairesQuestionsControllerTest extends IntegrationTestCase
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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
