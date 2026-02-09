<?php
/**
 * Tests for NftForge
 */

use PHPUnit\Framework\TestCase;
use Nftforge\Nftforge;

class NftforgeTest extends TestCase {
    private Nftforge $instance;

    protected function setUp(): void {
        $this->instance = new Nftforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
