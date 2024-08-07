<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FinalsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FinalsTable Test Case
 */
class FinalsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FinalsTable
     */
    protected $Finals;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Finals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Finals') ? [] : ['className' => FinalsTable::class];
        $this->Finals = $this->getTableLocator()->get('Finals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Finals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FinalsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
