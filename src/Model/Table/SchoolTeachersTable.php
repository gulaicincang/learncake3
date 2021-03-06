<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SchoolTeachers Model
 *
 * @property \Cake\ORM\Association\HasMany $SchoolClasses
 *
 * @method \App\Model\Entity\SchoolTeacher get($primaryKey, $options = [])
 * @method \App\Model\Entity\SchoolTeacher newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SchoolTeacher[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SchoolTeacher|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SchoolTeacher patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolTeacher[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolTeacher findOrCreate($search, callable $callback = null)
 */
class SchoolTeachersTable extends Table
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

        $this->table('school_teachers');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('SchoolClasses', [
            'foreignKey' => 'school_teacher_id'
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

        return $validator;
    }
}
