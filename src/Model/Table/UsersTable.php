<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
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
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->allowEmptyString('username', false);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->allowEmptyString('password', false);

        $validator
            ->scalar('tipo_identificacion')
            ->maxLength('tipo_identificacion', 255)
            ->requirePresence('tipo_identificacion', 'create')
            ->allowEmptyString('tipo_identificacion', false);

        $validator
            ->scalar('nro_documento_identidad')
            ->maxLength('nro_documento_identidad', 255)
            ->requirePresence('nro_documento_identidad', 'create')
            ->allowEmptyString('nro_documento_identidad', false);

        $validator
            ->scalar('role')
            ->maxLength('role', 255)
            ->requirePresence('role', 'create')
            ->allowEmptyString('role', false);

        $validator
            ->scalar('primer_nombre')
            ->maxLength('primer_nombre', 255)
            ->requirePresence('primer_nombre', 'create')
            ->allowEmptyString('primer_nombre', false);

        $validator
            ->scalar('segundo_nombre')
            ->maxLength('segundo_nombre', 255)
            ->allowEmptyString('segundo_nombre');

        $validator
            ->scalar('primer_apellido')
            ->maxLength('primer_apellido', 255)
            ->requirePresence('primer_apellido', 'create')
            ->allowEmptyString('primer_apellido', false);

        $validator
            ->scalar('segundo_apellido')
            ->maxLength('segundo_apellido', 255)
            ->allowEmptyString('segundo_apellido');

        $validator
            ->scalar('sexo')
            ->maxLength('sexo', 255)
            ->requirePresence('sexo', 'create')
            ->allowEmptyString('sexo', false);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false);

        $validator
            ->scalar('telefono_celular')
            ->maxLength('telefono_celular', 255)
            ->allowEmptyString('telefono_celular');

        $validator
            ->scalar('profile_photo')
            ->maxLength('profile_photo', 255)
            ->allowEmptyFile('profile_photo');

        $validator
            ->scalar('profile_photo_dir')
            ->maxLength('profile_photo_dir', 255)
            ->allowEmptyFile('profile_photo_dir');

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

        $validator
            ->integer('wpid')
            ->allowEmptyString('wpid');

        $validator
            ->scalar('wpuserlogin')
            ->maxLength('wpuserlogin', 255)
            ->allowEmptyString('wpuserlogin');

        $validator
            ->scalar('wppassword')
            ->maxLength('wppassword', 255)
            ->allowEmptyString('wppassword');

        $validator
            ->integer('idusuario_captador')
            ->allowEmptyString('idusuario_captador');

        $validator
            ->integer('idusuario_promotor')
            ->allowEmptyString('idusuario_promotor');

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
        $rules->add($rules->isUnique(['username']));
        return $rules;
    }
    public function findAuth(\Cake\ORM\Query $query, array $options)
    {
        $query
            ->select(['id', 'username', 'password', 'tipo_identificacion', 'nro_documento_identidad', 'role', 'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'sexo', 'email', 'telefono_celular', 
                'profile_photo', 'profile_photo_dir', 'estatus_registro']);
        
        return $query;
    }
}