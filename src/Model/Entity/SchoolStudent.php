<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SchoolStudent Entity
 *
 * @property int $id
 * @property string $name
 * @property int $school_class_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $deleted
 *
 * @property \App\Model\Entity\SchoolClass $school_class
 * @property \App\Model\Entity\SchoolExam[] $school_exams
 */
class SchoolStudent extends Entity
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
        'id' => false
    ];
}
