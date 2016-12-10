<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchoolSubjectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchoolSubjectsTable Test Case
 */
class SchoolSubjectsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SchoolSubjectsTable
     */
    public $SchoolSubjects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.school_subjects',
        'app.school_exams'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SchoolSubjects') ? [] : ['className' => 'App\Model\Table\SchoolSubjectsTable'];
        $this->SchoolSubjects = TableRegistry::get('SchoolSubjects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SchoolSubjects);

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
