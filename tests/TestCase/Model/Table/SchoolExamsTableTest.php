<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchoolExamsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchoolExamsTable Test Case
 */
class SchoolExamsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SchoolExamsTable
     */
    public $SchoolExams;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.school_exams',
        'app.school_students',
        'app.school_classes',
        'app.school_subjects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SchoolExams') ? [] : ['className' => 'App\Model\Table\SchoolExamsTable'];
        $this->SchoolExams = TableRegistry::get('SchoolExams', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SchoolExams);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
