<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SystemsFixture
 *
 */
class SystemsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'id', 'autoIncrement' => true, 'precision' => null],
        'tipo_identificacion' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Tipo de indentificación', 'precision' => null, 'fixed' => null],
        'nro_documento_identificacion' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Número de documento de identificación', 'precision' => null, 'fixed' => null],
        'nombre_empresa' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Nombre de la empresa', 'precision' => null, 'fixed' => null],
        'direccion_fiscal' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Dirección fiscal', 'precision' => null, 'fixed' => null],
        'telefono_fijo' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Teléfono fijo', 'precision' => null, 'fixed' => null],
        'telefono_celular' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Teléfono celular', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Correo electrónico', 'precision' => null, 'fixed' => null],
        'profile_photo' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Logo de la empresa', 'precision' => null, 'fixed' => null],
        'profile_photo_dir' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Ubicación del logo de la empresa', 'precision' => null, 'fixed' => null],
        'ambiente' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Ambiente: Producción o desarrollo', 'precision' => null, 'fixed' => null],
        'columna_extra1' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Columna extra 1', 'precision' => null, 'fixed' => null],
        'columna_extra2' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Columna extra 2', 'precision' => null, 'fixed' => null],
        'columna_extra3' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Columna extra 3', 'precision' => null, 'fixed' => null],
        'columna_extra4' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Columna extra 4', 'precision' => null, 'fixed' => null],
        'columna_extra5' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Columna extra 5', 'precision' => null, 'fixed' => null],
        'columna_extra6' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Columna extra 6', 'precision' => null, 'fixed' => null],
        'columna_extra7' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Columna extra 7', 'precision' => null, 'fixed' => null],
        'columna_extra8' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Columna extra 8', 'precision' => null, 'fixed' => null],
        'columna_extra9' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Columna extra 9', 'precision' => null, 'fixed' => null],
        'columna_extra10' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Columna extra 10', 'precision' => null, 'fixed' => null],
        'Estatus_registro' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Estatus del registro: Activo, inactivo o eliminado', 'precision' => null, 'fixed' => null],
        'motivo_cambio_estatus' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Motivo por el cual se cambió el estatus del registro', 'precision' => null, 'fixed' => null],
        'fecha_estatus' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha del cambio del estatus del registro', 'precision' => null],
        'usuario_responsable' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Usuario responsable del cambio del estatus', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de creación del registro', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha última creación del registro', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'tipo_identificacion' => 'Lorem ipsum dolor sit amet',
                'nro_documento_identificacion' => 'Lorem ipsum dolor sit amet',
                'nombre_empresa' => 'Lorem ipsum dolor sit amet',
                'direccion_fiscal' => 'Lorem ipsum dolor sit amet',
                'telefono_fijo' => 'Lorem ipsum dolor sit amet',
                'telefono_celular' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'profile_photo' => 'Lorem ipsum dolor sit amet',
                'profile_photo_dir' => 'Lorem ipsum dolor sit amet',
                'ambiente' => 'Lorem ipsum dolor sit amet',
                'columna_extra1' => 'Lorem ipsum dolor sit amet',
                'columna_extra2' => 'Lorem ipsum dolor sit amet',
                'columna_extra3' => 'Lorem ipsum dolor sit amet',
                'columna_extra4' => 'Lorem ipsum dolor sit amet',
                'columna_extra5' => 'Lorem ipsum dolor sit amet',
                'columna_extra6' => 'Lorem ipsum dolor sit amet',
                'columna_extra7' => 'Lorem ipsum dolor sit amet',
                'columna_extra8' => 'Lorem ipsum dolor sit amet',
                'columna_extra9' => 'Lorem ipsum dolor sit amet',
                'columna_extra10' => 'Lorem ipsum dolor sit amet',
                'Estatus_registro' => 'Lorem ipsum dolor sit amet',
                'motivo_cambio_estatus' => 'Lorem ipsum dolor sit amet',
                'fecha_estatus' => '2019-02-07 00:36:28',
                'usuario_responsable' => 'Lorem ipsum dolor sit amet',
                'created' => '2019-02-07 00:36:28',
                'modified' => '2019-02-07 00:36:28'
            ],
        ];
        parent::init();
    }
}
