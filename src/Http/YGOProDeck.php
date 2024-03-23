<?php

namespace BCleverly\YgoprodeckApi\Http;

use BCleverly\YgoprodeckApi\Http\Request\GetAll;
use BCleverly\YgoprodeckApi\Http\Request\GetCard;
use Saloon\Http\Connector;
use Saloon\Http\Response;

class YGOProDeck extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'https://db.ygoprodeck.com/api/v7';
    }

    public function getAll(): Response
    {
        return $this->send(new GetAll());
    }

    public function getCard(string $name): Response
    {
        return $this->send(new GetCard($name));
    }
}
