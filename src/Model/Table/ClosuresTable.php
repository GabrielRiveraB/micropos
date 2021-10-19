<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Closures Model
 *
 * @property \App\Model\Table\ShopsTable&\Cake\ORM\Association\BelongsTo $Shops
 *
 * @method \App\Model\Entity\Closure newEmptyEntity()
 * @method \App\Model\Entity\Closure newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Closure[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Closure get($primaryKey, $options = [])
 * @method \App\Model\Entity\Closure findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Closure patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Closure[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Closure|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Closure saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Closure[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Closure[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Closure[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Closure[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClosuresTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('closures');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Shops', [
            'foreignKey' => 'shop_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('folio')
            ->allowEmptyString('folio');

        $validator
            ->integer('sales')
            ->allowEmptyString('sales');

        $validator
            ->numeric('total')
            ->allowEmptyString('total');

        $validator
            ->numeric('cash')
            ->allowEmptyString('cash');

        $validator
            ->numeric('card')
            ->allowEmptyString('card');

        $validator
            ->date('cdate')
            ->allowEmptyDate('cdate');

        $validator
            ->time('ctime')
            ->allowEmptyTime('ctime');

        $validator
            ->integer('first_ticket')
            ->allowEmptyString('first_ticket');

        $validator
            ->integer('last_ticket')
            ->allowEmptyString('last_ticket');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['shop_id'], 'Shops'), ['errorField' => 'shop_id']);

        return $rules;
    }
}
