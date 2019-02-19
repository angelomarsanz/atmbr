<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Binnacle Entity
 *
 * @property int $id
 * @property string|null $novedad
 * @property string|null $tipo_clase
 * @property string|null $nombre_clase
 * @property string|null $nombre_metodo
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
 * @property string|null $estatus_registro
 * @property string|null $motivo_cambio_estatus
 * @property \Cake\I18n\FrozenTime|null $fecha_estatus
 * @property string|null $usuario_responsable
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Binnacle extends Entity
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
        'novedad' => true,
        'tipo_clase' => true,
        'nombre_clase' => true,
        'nombre_metodo' => true,
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
        'estatus_registro' => true,
        'motivo_cambio_estatus' => true,
        'fecha_estatus' => true,
        'usuario_responsable' => true,
        'created' => true,
        'modified' => true
    ];
}
