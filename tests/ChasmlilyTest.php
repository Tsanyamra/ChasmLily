<?php
/**
 * Tests for ChasmLily
 */

use PHPUnit\Framework\TestCase;
use Chasmlily\Chasmlily;

class ChasmlilyTest extends TestCase {
    private Chasmlily $instance;

    protected function setUp(): void {
        $this->instance = new Chasmlily(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chasmlily::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
