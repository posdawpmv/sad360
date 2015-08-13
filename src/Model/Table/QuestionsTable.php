<?php
namespace App\Model\Table;

use App\Model\Entity\Question;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Questions Model
 *
 * @property \Cake\ORM\Association\HasMany $Answers
 * @property \Cake\ORM\Association\BelongsToMany $Alternatives
 * @property \Cake\ORM\Association\BelongsToMany $Questionnaires
 */
class QuestionsTable extends Table
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

        $this->table('questions');
        $this->displayField('enunciation');
        $this->primaryKey('id');
        $this->hasMany('Answers', [
            'foreignKey' => 'question_id'
        ]);
        $this->belongsToMany('Alternatives', [
            'foreignKey' => 'question_id',
            'targetForeignKey' => 'alternative_id',
            'joinTable' => 'alternatives_questions'
        ]);
        $this->belongsToMany('Questionnaires', [
            'foreignKey' => 'question_id',
            'targetForeignKey' => 'questionnaire_id',
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
            ->requirePresence('enunciation', 'create')
            ->notEmpty('enunciation');

        return $validator;
    }
}
