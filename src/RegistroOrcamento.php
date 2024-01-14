<?php

namespace App;

use App\Http\HttpAdapter;

class RegistroOrcamento
{
    private HttpAdapter $client;

    public function __construct(HttpAdapter $client)
    {
        $this->client = $client;
    }

    public function registrar(Orcamento $orcamento)
    {
        $this->client->post('http://teste', [
            'valor'       => $orcamento->valor,
            'itens'       => $orcamento->itens,
            'estadoAtual' => $orcamento->estadoAtual
        ]);
    }
}
