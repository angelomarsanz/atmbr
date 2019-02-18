<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TmbrUsermetum Entity
 *
 * @property int $umeta_id
 * @property int $user_id
 * @property string|null $meta_key
 * @property string|null $meta_value
 *
 * @property \App\Model\Entity\User $user
 */
class TmbrUsermetum extends Entity
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
        'user_id' => true,
        'meta_key' => true,
        'meta_value' => true,
        'user' => true
    ];
}
