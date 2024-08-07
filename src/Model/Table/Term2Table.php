<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Term2 Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\BelongsTo $Students
 *
 * @method \App\Model\Entity\Term2 newEmptyEntity()
 * @method \App\Model\Entity\Term2 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Term2[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Term2 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Term2 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Term2 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Term2[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Term2|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Term2 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Term2[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Term2[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Term2[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Term2[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Term2Table extends Table
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

        $this->setTable('term2');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Students', [
            'foreignKey' => 'Student_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Finalresults', [
            'foreignKey' => 'term2_id',
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
            ->integer('Student_id')
            ->notEmptyString('Student_id');

        $validator
            ->integer('term1_id')
            ->requirePresence('term1_id', 'create')
            ->notEmptyString('term1_id');

        $validator
            ->integer('English')
            ->requirePresence('English', 'create')
            ->notEmptyString('English');

        $validator
            ->integer('Hindi')
            ->requirePresence('Hindi', 'create')
            ->notEmptyString('Hindi');

        $validator
            ->integer('Marathi')
            ->requirePresence('Marathi', 'create')
            ->notEmptyString('Marathi');

        $validator
            ->integer('Maths')
            ->requirePresence('Maths', 'create')
            ->notEmptyString('Maths');

        $validator
            ->integer('EVS')
            ->requirePresence('EVS', 'create')
            ->notEmptyString('EVS');

        $validator
            ->integer('Total')
            ->requirePresence('Total', 'create')
            ->notEmptyString('Total');

        $validator
            ->numeric('Percentage')
            ->requirePresence('Percentage', 'create')
            ->notEmptyString('Percentage');

        $validator
            ->scalar('Grade')
            ->maxLength('Grade', 5)
            ->requirePresence('Grade', 'create')
            ->notEmptyString('Grade');

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
        $rules->add($rules->existsIn('Student_id', 'Students'), ['errorField' => 'Student_id']);

        return $rules;
    }
}
