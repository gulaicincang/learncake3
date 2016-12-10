<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SchoolClasses Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SchoolTeachers
 * @property \Cake\ORM\Association\HasMany $SchoolStudents
 *
 * @method \App\Model\Entity\SchoolClass get($primaryKey, $options = [])
 * @method \App\Model\Entity\SchoolClass newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SchoolClass[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SchoolClass|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SchoolClass patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolClass[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolClass findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SchoolClassesTable extends Table
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

        $this->table('school_classes');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('SchoolTeachers', [
            'foreignKey' => 'school_teacher_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('SchoolStudents', [
            'foreignKey' => 'school_class_id'
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
            ->requirePresence('code', 'create')
            ->notEmpty('code');

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
        $rules->add($rules->existsIn(['school_teacher_id'], 'SchoolTeachers'));

        return $rules;
    }
}
