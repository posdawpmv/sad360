<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlternativesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlternativesTable Test Case
 */
class AlternativesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.alternatives',
        'app.answers',
        'app.evaluations_users',
        'app.users',
        'app.departments',
        'app.evaluations',
        'app.questionnaires',
        'app.questions',
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
        $config = TableRegistry::exists('Alternatives') ? [] : ['className' => 'App\Model\Table\AlternativesTable'];
        $this->Alternatives = TableRegistry::get('Alternatives', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Alternatives);

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
