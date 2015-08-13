<?php
namespace App\Model\Table;

use App\Model\Entity\Alternative;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alternatives Model
 *
 * @property \Cake\ORM\Association\HasMany $Answers
 * @property \Cake\ORM\Association\BelongsToMany $Questions
 */
class AlternativesTable extends Table
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

        $this->table('alternatives');
        $this->displayField('description');
        $this->primaryKey('id');
        $this->hasMany('Answers', [
            'foreignKey' => 'alternative_id'
        ]);
        $this->belongsToMany('Questions', [
            'foreignKey' => 'alternative_id',
            'targetForeignKey' => 'question_id',
            'joinTable' => 'alternatives_questions'
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
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
