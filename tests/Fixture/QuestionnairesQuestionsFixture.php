<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuestionnairesQuestionsFixture
 *
 */
class QuestionnairesQuestionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'questionnaire_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'question_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'question_number' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_questionnaires_has_questions_questions1_idx' => ['type' => 'index', 'columns' => ['question_id'], 'length' => []],
            'fk_questionnaires_has_questions_questionnaires1_idx' => ['type' => 'index', 'columns' => ['questionnaire_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['questionnaire_id', 'question_id'], 'length' => []],
            'fk_questionnaires_has_questions_questionnaires1' => ['type' => 'foreign', 'columns' => ['questionnaire_id'], 'references' => ['questionnaires', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_questionnaires_has_questions_questions1' => ['type' => 'foreign', 'columns' => ['question_id'], 'references' => ['questions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'questionnaire_id' => 1,
            'question_id' => 1,
            'question_number' => 1
        ],
    ];
}
