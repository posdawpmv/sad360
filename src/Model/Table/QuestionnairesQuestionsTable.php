<?php
namespace App\Model\Table;

use App\Model\Entity\QuestionnairesQuestion;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuestionnairesQuestions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Questionnaires
 * @property \Cake\ORM\Association\BelongsTo $Questions
 */
class QuestionnairesQuestionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('questionnaires_questions');
        $this->displayField('questionnaire_id');
        $this->primaryKey(['questionnaire_id', 'question_id']);
        $this->belongsTo('Questionnaires', [
            'foreignKey' => 'questionnaire_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Questions', [
            'foreignKey' => 'question_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('question_number', 'valid', ['rule' => 'numeric'])
            ->requirePresence('question_number', 'create')
            ->notEmpty('question_number');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['questionnaire_id'], 'Questionnaires'));
        $rules->add($rules->existsIn(['question_id'], 'Questions'));
        return $rules;
    }
}
