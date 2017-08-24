<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuestionAnswerFixture
 *
 */
class QuestionAnswerFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'question_answer';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idquestion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idanwer' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'isTrue' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'anwer_foreignKey_idx' => ['type' => 'index', 'columns' => ['idanwer'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idquestion'], 'length' => []],
            'answer_foreignKey' => ['type' => 'foreign', 'columns' => ['idanwer'], 'references' => ['answer', 'idAnswer'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'quest_foreignKey' => ['type' => 'foreign', 'columns' => ['idquestion'], 'references' => ['question', 'idQuestion'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'idquestion' => 1,
            'idanwer' => 1,
            'isTrue' => 1
        ],
    ];
}
