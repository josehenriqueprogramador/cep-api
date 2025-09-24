<?php
namespace App\models;

class CepModel {
    private $redis;
    private $ttl;

    public function __construct() {
        $host = getenv('REDIS_HOST') ?: 'redis';
        $port = getenv('REDIS_PORT') ?: 6379;
        $this->ttl = getenv('REDIS_TTL') ?: 3600;

        $this->redis = new \Redis();
        $this->redis->connect($host, $port);
    }

    public function getCepData($cep) {
        if (!preg_match('/^[0-9]{8}$/', $cep)) {
            return null; // CEP inválido
        }

        if ($this->redis->exists($cep)) {
            return json_decode($this->redis->get($cep), true);
        }

        $url = "https://viacep.com.br/ws/$cep/json/";
        $response = @file_get_contents($url);
        if ($response) {
            $this->redis->setex($cep, $this->ttl, $response);
            return json_decode($response, true);
        }
        return null;
    }
}
