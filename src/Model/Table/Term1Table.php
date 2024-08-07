<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Term1 Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\BelongsTo $Students
 * @property \App\Model\Table\FinalsTable&\Cake\ORM\Association\HasMany $Finals
 *
 * @method \App\Model\Entity\Term1 newEmptyEntity()
 * @method \App\Model\Entity\Term1 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Term1[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Term1 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Term1 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Term1 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Term1[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Term1|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Term1 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Term1[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Term1[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Term1[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Term1[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Term1Table extends Table
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

        $this->setTable('term1');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Students', [
            'foreignKey' => 'Student_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Finals', [
            'foreignKey' => 'term1_id',
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
