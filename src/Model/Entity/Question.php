<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $idQuestion
 * @property int $QuestionTypeId
 * @property string $QuestionDetails
 * @property \Cake\I18n\FrozenTime $CreateDate
 * @property \Cake\I18n\FrozenTime $UpdateTime
 * @property bool $QuestionFlag
 */
class Question extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'idQuestion' => false
    ];
}
