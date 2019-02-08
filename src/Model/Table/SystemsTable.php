<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Systems Model
 *
 * @method \App\Model\Entity\System get($primaryKey, $options = [])
 * @method \App\Model\Entity\System newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\System[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\System|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\System|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\System patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\System[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\System findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SystemsTable extends Table
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

        $this->setTable('systems');
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
            ->scalar('tipo_identificacion')
            ->maxLength('tipo_identificacion', 255)
            ->allowEmptyString('tipo_identificacion');

        $validator
            ->scalar('nro_documento_identificacion')
            ->maxLength('nro_documento_identificacion', 255)
            ->allowEmptyString('nro_documento_identificacion');

        $validator
            ->scalar('nombre_empresa')
            ->maxLength('nombre_empresa', 255)
            ->allowEmptyString('nombre_empresa');

        $validator
            ->scalar('direccion_fiscal')
            ->maxLength('direccion_fiscal', 255)
            ->allowEmptyString('direccion_fiscal');

        $validator
            ->scalar('telefono_fijo')
            ->maxLength('telefono_fijo', 255)
            ->allowEmptyString('telefono_fijo');

        $validator
            ->scalar('telefono_celular')
            ->maxLength('telefono_celular', 255)
            ->allowEmptyString('telefono_celular');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('profile_photo')
            ->maxLength('profile_photo', 255)
            ->allowEmptyFile('profile_photo');

        $validator
            ->scalar('profile_photo_dir')
            ->maxLength('profile_photo_dir', 255)
            ->allowEmptyFile('profile_photo_dir');

        $validator
            ->scalar('ambiente')
            ->maxLength('ambiente', 255)
            ->allowEmptyString('ambiente');

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
            ->scalar('Estatus_registro')
            ->maxLength('Estatus_registro', 255)
            ->allowEmptyString('Estatus_registro');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
