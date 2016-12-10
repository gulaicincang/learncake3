<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchoolTeachersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchoolTeachersTable Test Case
 */
class SchoolTeachersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SchoolTeachersTable
     */
    public $SchoolTeachers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.school_teachers',
        'app.school_classes',
        'app.school_students',
        'app.school_exams',
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
        $config = TableRegistry::exists('SchoolTeachers') ? [] : ['className' => 'App\Model\Table\SchoolTeachersTable'];
        $this->SchoolTeachers = TableRegistry::get('SchoolTeachers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SchoolTeachers);

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
