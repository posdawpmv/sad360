<?php
namespace App\Model\Table;

use App\Model\Entity\Questionnaire;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Questionnaires Model
 *
 * @property \Cake\ORM\Association\HasMany $Evaluations
 * @property \Cake\ORM\Association\BelongsToMany $Questions
 */
class QuestionnairesTable extends Table
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

        $this->table('questionnaires');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('Evaluations', [
            'foreignKey' => 'questionnaire_id'
        ]);
        $this->belongsToMany('Questions', [
            'foreignKey' => 'questionnaire_id',
            'targetForeignKey' => 'question_id',
            'joinTable' => 'questionnaires_questions'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('details');

        return $validator;
    }
}
