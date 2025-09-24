<?php
use PHPUnit\Framework\TestCase;
use App\models\CepModel;

class CepModelTest extends TestCase {
    public function testCepInvalido() {
        $model = new CepModel();
        $data = $model->getCepData("123");
        $this->assertNull($data, "Deve retornar null para CEP inválido");
    }

    public function testCepValido() {
        $model = new CepModel();
        $data = $model->getCepData("01001000"); // Praça da Sé - SP
        $this->assertIsArray($data);
        $this->assertEquals("01001-000", $data['cep']);
        $this->assertEquals("São Paulo", $data['localidade']);
    }
}
