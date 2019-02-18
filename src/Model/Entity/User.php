<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use App\Auth\LegacyPasswordHasher;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $tipo_identificacion
 * @property string $nro_documento_identidad
 * @property string $role
 * @property string $primer_nombre
 * @property string|null $segundo_nombre
 * @property string $primer_apellido
 * @property string|null $segundo_apellido
 * @property string $sexo
 * @property string $email
 * @property string|null $telefono_celular
 * @property string|null $profile_photo
 * @property string|null $profile_photo_dir
 * @property string|null $columna_extra1
 * @property string|null $columna_extra2
 * @property string|null $columna_extra3
 * @property string|null $columna_extra4
 * @property string|null $columna_extra5
 * @property string|null $columna_extra6
 * @property string|null $columna_extra7
 * @property string|null $columna_extra8
 * @property string|null $columna_extra9
 * @property string|null $columna_extra10
 * @property string|null $Estatus_registro
 * @property string|null $motivo_cambio_estatus
 * @property \Cake\I18n\FrozenTime|null $fecha_estatus
 * @property string|null $usuario_responsable
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'tipo_identificacion' => true,
        'nro_documento_identidad' => true,
        'role' => true,
        'primer_nombre' => true,
        'segundo_nombre' => true,
        'primer_apellido' => true,
        'segundo_apellido' => true,
        'sexo' => true,
        'email' => true,
        'telefono_celular' => true,
        'profile_photo' => true,
        'profile_photo_dir' => true,
        'columna_extra1' => true,
        'columna_extra2' => true,
        'columna_extra3' => true,
        'columna_extra4' => true,
        'columna_extra5' => true,
        'columna_extra6' => true,
        'columna_extra7' => true,
        'columna_extra8' => true,
        'columna_extra9' => true,
        'columna_extra10' => true,
        'Estatus_registro' => true,
        'motivo_cambio_estatus' => true,
        'fecha_estatus' => true,
        'usuario_responsable' => true,
        'created' => true,
        'modified' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
    
    protected function _setPassword($value)
    {
        $hasher = new LegacyPasswordHasher();
        return $hasher->hash($value);
    }
    protected function _getFullName()
    {
        return $this->_properties['primer_apellido'] . ' ' .
            $this->_properties['segundo_apellido'] . ' ' .
            $this->_properties['primer_nombre'] . ' ' .
            $this->_properties['segundo_nombre'];
    }
}
