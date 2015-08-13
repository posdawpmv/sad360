<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AlternativesQuestion Entity.
 */
class AlternativesQuestion extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'question_id' => false,
        'alternative_id' => false,
    ];
}