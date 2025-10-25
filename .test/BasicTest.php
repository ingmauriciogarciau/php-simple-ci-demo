<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../index.php';

class BasicTest extends TestCase
{
    public function testLaFuncionSumaCorrectamente()
    {
        // 5 + 3 debe ser igual a 8
        //prueba mala
        $resultado = sumar(1, 10);
        $this->assertEquals(20, $resultado);
    }
}