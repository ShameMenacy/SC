<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuestionAnswer Model
 *
 * @method \App\Model\Entity\QuestionAnswer get($primaryKey, $options = [])
 * @method \App\Model\Entity\QuestionAnswer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\QuestionAnswer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QuestionAnswer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuestionAnswer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QuestionAnswer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\QuestionAnswer findOrCreate($search, callable $callback = null, $options = [])
 */
class QuestionAnswerTable extends Table
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

        $this->setTable('question_answer');
        $this->setDisplayField('idquestion');
        $this->setPrimaryKey('idquestion');
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
            ->integer('idquestion')
            ->allowEmpty('idquestion', 'create');

        $validator
            ->integer('idanwer')
            ->allowEmpty('idanwer');

        $validator
            ->boolean('isTrue')
            ->allowEmpty('isTrue');

        return $validator;
    }
}
