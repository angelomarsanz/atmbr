<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TmbrUsermeta Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\TmbrUsermetum get($primaryKey, $options = [])
 * @method \App\Model\Entity\TmbrUsermetum newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TmbrUsermetum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TmbrUsermetum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TmbrUsermetum|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TmbrUsermetum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TmbrUsermetum[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TmbrUsermetum findOrCreate($search, callable $callback = null, $options = [])
 */
class TmbrUsermetaTable extends Table
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

        $this->setTable('tmbr_usermeta');
        $this->setDisplayField('umeta_id');
        $this->setPrimaryKey('umeta_id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
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
            ->allowEmptyString('umeta_id', 'create');

        $validator
            ->scalar('meta_key')
            ->maxLength('meta_key', 255)
            ->allowEmptyString('meta_key');

        $validator
            ->scalar('meta_value')
            ->maxLength('meta_value', 4294967295)
            ->allowEmptyString('meta_value');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
