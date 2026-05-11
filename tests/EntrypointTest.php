<?php
/**
 * Tests for EntryPoint
 */

use PHPUnit\Framework\TestCase;
use Entrypoint\Entrypoint;

class EntrypointTest extends TestCase {
    private Entrypoint $instance;

    protected function setUp(): void {
        $this->instance = new Entrypoint(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Entrypoint::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
