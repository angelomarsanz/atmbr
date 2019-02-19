<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Binnacles Model
 *
 * @method \App\Model\Entity\Binnacle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Binnacle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Binnacle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Binnacle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Binnacle|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Binnacle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Binnacle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Binnacle findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BinnaclesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('binnacles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('novedad')
            ->maxLength('novedad', 255)
            ->allowEmptyString('novedad');

        $validator
            ->scalar('tipo_clase')
            ->maxLength('tipo_clase', 255)
            ->allowEmptyString('tipo_clase');

        $validator
            ->scalar('nombre_clase')
            ->maxLength('nombre_clase', 255)
            ->allowEmptyString('nombre_clase');

        $validator
            ->scalar('nombre_metodo')
            ->maxLength('nombre_metodo', 255)
            ->allowEmptyString('nombre_metodo');

        $validator
            ->scalar('columna_extra1')
            ->maxLength('columna_extra1', 255)
            ->allowEmptyString('columna_extra1');

        $validator
            ->scalar('columna_extra2')
            ->maxLength('columna_extra2', 255)
            ->allowEmptyString('columna_extra2');

        $validator
            ->scalar('columna_extra3')
            ->maxLength('columna_extra3', 255)
            ->allowEmptyString('columna_extra3');

        $validator
            ->scalar('columna_extra4')
            ->maxLength('columna_extra4', 255)
            ->allowEmptyString('columna_extra4');

        $validator
            ->scalar('columna_extra5')
            ->maxLength('columna_extra5', 255)
            ->allowEmptyString('columna_extra5');

        $validator
            ->scalar('columna_extra6')
            ->maxLength('columna_extra6', 255)
            ->allowEmptyString('columna_extra6');

        $validator
            ->scalar('columna_extra7')
            ->maxLength('columna_extra7', 255)
            ->allowEmptyString('columna_extra7');

        $validator
            ->scalar('columna_extra8')
            ->maxLength('columna_extra8', 255)
            ->allowEmptyString('columna_extra8');

        $validator
            ->scalar('columna_extra9')
            ->maxLength('columna_extra9', 255)
            ->allowEmptyString('columna_extra9');

        $validator
            ->scalar('columna_extra10')
            ->maxLength('columna_extra10', 255)
            ->allowEmptyString('columna_extra10');

        $validator
            ->scalar('estatus_registro')
            ->maxLength('estatus_registro', 255)
            ->allowEmptyString('estatus_registro');

        $validator
            ->scalar('motivo_cambio_estatus')
            ->maxLength('motivo_cambio_estatus', 255)
            ->allowEmptyString('motivo_cambio_estatus');

        $validator
            ->dateTime('fecha_estatus')
            ->allowEmptyDateTime('fecha_estatus');

        $validator
            ->scalar('usuario_responsable')
            ->maxLength('usuario_responsable', 255)
            ->allowEmptyString('usuario_responsable');

        return $validator;
    }
}
