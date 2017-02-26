<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity
 *
 * @property int $id
 * @property string $name
 * @property string $father_or_husband
 * @property int $age
 * @property string $post
 * @property string $school_name
 * @property string $current_status
 * @property \Cake\I18n\Time $date_of_retirement
 * @property bool $payment_status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Member extends Entity
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
