<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionAnswerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionAnswerTable Test Case
 */
class QuestionAnswerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestionAnswerTable
     */
    public $QuestionAnswer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.question_answer'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('QuestionAnswer') ? [] : ['className' => QuestionAnswerTable::class];
        $this->QuestionAnswer = TableRegistry::get('QuestionAnswer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuestionAnswer);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
