<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TmbrUsers Model
 *
 * @method \App\Model\Entity\TmbrUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\TmbrUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TmbrUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TmbrUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TmbrUser|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TmbrUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TmbrUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TmbrUser findOrCreate($search, callable $callback = null, $options = [])
 */
class TmbrUsersTable extends Table
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

        $this->setTable('tmbr_users');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
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
            ->allowEmptyString('ID', 'create');

        $validator
            ->scalar('user_login')
            ->maxLength('user_login', 60)
            ->requirePresence('user_login', 'create')
            ->allowEmptyString('user_login', false);

        $validator
            ->scalar('user_pass')
            ->maxLength('user_pass', 255)
            ->requirePresence('user_pass', 'create')
            ->allowEmptyString('user_pass', false);

        $validator
            ->scalar('user_nicename')
            ->maxLength('user_nicename', 50)
            ->requirePresence('user_nicename', 'create')
            ->allowEmptyString('user_nicename', false);

        $validator
            ->scalar('user_email')
            ->maxLength('user_email', 100)
            ->requirePresence('user_email', 'create')
            ->allowEmptyString('user_email', false);

        $validator
            ->scalar('user_url')
            ->maxLength('user_url', 100)
            ->requirePresence('user_url', 'create')
            ->allowEmptyString('user_url', false);

        $validator
            ->dateTime('user_registered')
            ->requirePresence('user_registered', 'create')
            ->allowEmptyDateTime('user_registered', false);

        $validator
            ->scalar('user_activation_key')
            ->maxLength('user_activation_key', 255)
            ->requirePresence('user_activation_key', 'create')
            ->allowEmptyString('user_activation_key', false);

        $validator
            ->integer('user_status')
            ->requirePresence('user_status', 'create')
            ->allowEmptyString('user_status', false);

        $validator
            ->scalar('display_name')
            ->maxLength('display_name', 250)
            ->requirePresence('display_name', 'create')
            ->allowEmptyString('display_name', false);

        return $validator;
    }
}
