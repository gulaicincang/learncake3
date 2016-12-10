<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SchoolSubjects Model
 *
 * @property \Cake\ORM\Association\HasMany $SchoolExams
 *
 * @method \App\Model\Entity\SchoolSubject get($primaryKey, $options = [])
 * @method \App\Model\Entity\SchoolSubject newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SchoolSubject[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SchoolSubject|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SchoolSubject patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolSubject[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolSubject findOrCreate($search, callable $callback = null)
 */
class SchoolSubjectsTable extends Table
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

        $this->table('school_subjects');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('SchoolExams', [
            'foreignKey' => 'school_subject_id'
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
