<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SchoolStudents Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SchoolClasses
 * @property \Cake\ORM\Association\HasMany $SchoolExams
 *
 * @method \App\Model\Entity\SchoolStudent get($primaryKey, $options = [])
 * @method \App\Model\Entity\SchoolStudent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SchoolStudent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SchoolStudent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SchoolStudent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolStudent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolStudent findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SchoolStudentsTable extends Table
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

        $this->table('school_students');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('SchoolClasses', [
            'foreignKey' => 'school_class_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('SchoolExams', [
            'foreignKey' => 'school_student_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->dateTime('deleted')
            ->requirePresence('deleted', 'create')
            ->notEmpty('deleted');

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
        $rules->add($rules->existsIn(['school_class_id'], 'SchoolClasses'));

        return $rules;
    }
}
