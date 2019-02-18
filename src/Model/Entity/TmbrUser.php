<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use App\Auth\LegacyPasswordHasher;

use Cake\ORM\Entity;

/**
 * TmbrUser Entity
 *
 * @property int $ID
 * @property string $user_login
 * @property string $user_pass
 * @property string $user_nicename
 * @property string $user_email
 * @property string $user_url
 * @property \Cake\I18n\FrozenTime $user_registered
 * @property string $user_activation_key
 * @property int $user_status
 * @property string $display_name
 */
class TmbrUser extends Entity
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
        'user_login' => true,
        'user_pass' => true,
        'user_nicename' => true,
        'user_email' => true,
        'user_url' => true,
        'user_registered' => true,
        'user_activation_key' => true,
        'user_status' => true,
        'display_name' => true
    ];
    protected $_hidden = [
        'user_pass'
    ];    
}
