<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../index.php';

class BasicTest extends TestCase
{
    public function testLaFuncionSumaCorrectamente()
    {
        // 5 + 3 debe ser igual a 8
        $resultado = sumar(5, 3);
        $this->assertEquals(8, $resultado);
    }
}