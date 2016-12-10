<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SchoolExam Entity
 *
 * @property int $id
 * @property int $school_student_id
 * @property int $school_subject_id
 * @property \Cake\I18n\Time $created
 * @property float $score
 *
 * @property \App\Model\Entity\SchoolStudent $school_student
 * @property \App\Model\Entity\SchoolSubject $school_subject
 */
class SchoolExam extends Entity
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
