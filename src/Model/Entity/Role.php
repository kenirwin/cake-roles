<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Role Entity
 *
 * @property int $id
 * @property int $woman_id
 * @property int $convent_id
 * @property string $role
 * @property int $start_year
 * @property int $end_year
 *
 * @property \App\Model\Entity\Woman $woman
 * @property \App\Model\Entity\Convent $convent
 */
class Role extends Entity
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
        'woman_id' => false,
        'convent_id' => false
    ];
}
