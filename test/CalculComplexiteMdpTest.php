<?php

use PHPUnit\Framework\TestCase;

class CalculComplexiteMdpTest extends TestCase {

    public function testMdpSimple() {
        $this->assertEquals(23, \App\Fonctions\CalculComplexiteMdp("aubry"));
    }

    public function testMdpAvecSpecial() {
        $this->assertEquals(51, \App\Fonctions\CalculComplexiteMdp("super@ubry"));
    }

    public function testMdpAvecChiffresEtSpecial() {
        $this->assertEquals(86, \App\Fonctions\CalculComplexiteMdp("Super@ubry2022"));
    }

    public function testMdpLongAvecSymbols() {
        $this->assertEquals(141, \App\Fonctions\CalculComplexiteMdp("Giroud-Président||2027"));
    }
}
