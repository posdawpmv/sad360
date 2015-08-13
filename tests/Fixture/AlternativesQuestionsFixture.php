<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlternativesQuestionsFixture
 *
 */
class AlternativesQuestionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'question_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'alternative_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'alternative_order' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_questions_has_alternatives_alternatives1_idx' => ['type' => 'index', 'columns' => ['alternative_id'], 'length' => []],
            'fk_questions_has_alternatives_questions1_idx' => ['type' => 'index', 'columns' => ['question_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['question_id', 'alternative_id'], 'length' => []],
            'fk_questions_has_alternatives_alternatives1' => ['type' => 'foreign', 'columns' => ['alternative_id'], 'references' => ['alternatives', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_questions_has_alternatives_questions1' => ['type' => 'foreign', 'columns' => ['question_id'], 'references' => ['questions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'question_id' => 1,
            'alternative_id' => 1,
            'alternative_order' => 1
        ],
    ];
}
