<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BinnaclesFixture
 *
 */
class BinnaclesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'id', 'autoIncrement' => true, 'precision' => null],
        'novedad' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Novedad', 'precision' => null, 'fixed' => null],
        'tipo_clase' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Tipo de clase', 'precision' => null, 'fixed' => null],
        'nombre_clase' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Nombre de la clase', 'precision' => null, 'fixed' => null],
        'nombre_metodo' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Nombre del método', 'precision' => null, 'fixed' => null],
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
        'estatus_registro' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Estatus del registro: Activo, inactivo, eliminado', 'precision' => null, 'fixed' => null],
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
                'novedad' => 'Lorem ipsum dolor sit amet',
                'tipo_clase' => 'Lorem ipsum dolor sit amet',
                'nombre_clase' => 'Lorem ipsum dolor sit amet',
                'nombre_metodo' => 'Lorem ipsum dolor sit amet',
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
                'estatus_registro' => 'Lorem ipsum dolor sit amet',
                'motivo_cambio_estatus' => 'Lorem ipsum dolor sit amet',
                'fecha_estatus' => '2019-02-19 01:08:21',
                'usuario_responsable' => 'Lorem ipsum dolor sit amet',
                'created' => '2019-02-19 01:08:21',
                'modified' => '2019-02-19 01:08:21'
            ],
        ];
        parent::init();
    }
}
