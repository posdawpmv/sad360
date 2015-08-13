<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AnswersFixture
 *
 */
class AnswersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'evaluation_user_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'question_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'alternative_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'users_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'answered_in' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_alternatives_has_answers_idx' => ['type' => 'index', 'columns' => ['alternative_id'], 'length' => []],
            'fk_questions_has_answers_idx' => ['type' => 'index', 'columns' => ['question_id'], 'length' => []],
            'fk_answers_user_evaluations1_idx' => ['type' => 'index', 'columns' => ['evaluation_user_id'], 'length' => []],
            'fk_answers_users1_idx' => ['type' => 'index', 'columns' => ['users_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_answers_unq' => ['type' => 'unique', 'columns' => ['question_id', 'evaluation_user_id'], 'length' => []],
            'fk_alternatives_has_answers' => ['type' => 'foreign', 'columns' => ['alternative_id'], 'references' => ['alternatives', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_questions_has_answers' => ['type' => 'foreign', 'columns' => ['question_id'], 'references' => ['questions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_answers_user_evaluations1' => ['type' => 'foreign', 'columns' => ['evaluation_user_id'], 'references' => ['evaluations_users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_answers_users1' => ['type' => 'foreign', 'columns' => ['users_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'id' => 1,
            'evaluation_user_id' => 1,
            'question_id' => 1,
            'alternative_id' => 1,
            'users_id' => 1,
            'answered_in' => '2015-08-11 02:23:55'
        ],
    ];
}
