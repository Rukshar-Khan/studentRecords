<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Term2 Entity
 *
 * @property int $id
 * @property int $Student_id
 * @property int $term1_id
 * @property int $English
 * @property int $Hindi
 * @property int $Marathi
 * @property int $Maths
 * @property int $EVS
 * @property int $Total
 * @property float $Percentage
 * @property string $Grade
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Final[] $finals
 */
class Term2 extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'Student_id' => true,
        'term1_id' => true,
        'English' => true,
        'Hindi' => true,
        'Marathi' => true,
        'Maths' => true,
        'EVS' => true,
        'Total' => true,
        'Percentage' => true,
        'Grade' => true,
        'student' => true,
        'finals' => true,
    ];
}
