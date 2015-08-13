<?php
namespace App\Test\TestCase\Controller;

use App\Controller\DepartmentsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\DepartmentsController Test Case
 */
class DepartmentsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.departments',
        'app.users',
        'app.evaluations',
        'app.questionnaires',
        'app.questions',
        'app.answers',
        'app.evaluations_users',
        'app.alternatives',
        'app.alternatives_questions',
        'app.questionnaires_questions'
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
