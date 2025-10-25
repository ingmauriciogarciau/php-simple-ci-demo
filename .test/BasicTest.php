<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../index.php';

class BasicTest extends TestCase
{
    public function testLaFuncionSumaCorrectamente()
    {
        // 5 + 3 debe ser igual a 8
        //prueba mala
        $resultado = sumar(6, 2);
        $this->assertEquals(8, $resultado);
    }
}