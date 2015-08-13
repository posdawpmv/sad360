<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QuestionnairesQuestion Entity.
 */
class QuestionnairesQuestion extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'questionnaire_id' => false,
        'question_id' => false,
    ];
}
