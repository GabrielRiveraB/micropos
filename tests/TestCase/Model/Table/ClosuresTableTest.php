<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClosuresTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClosuresTable Test Case
 */
class ClosuresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClosuresTable
     */
    protected $Closures;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Closures',
        'app.Shops',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Closures') ? [] : ['className' => ClosuresTable::class];
        $this->Closures = $this->getTableLocator()->get('Closures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Closures);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ClosuresTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ClosuresTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
