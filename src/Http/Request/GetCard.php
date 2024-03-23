<?php

namespace BCleverly\YgoprodeckApi\Http\Request;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetCard extends Request
{
    protected Method $method = Method::GET;

    public function __construct(protected string $name)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/cardinfo.php';
    }

    protected function defaultQuery(): array
    {
        return [
            'name' => $this->name, // ?sort=name
        ];
    }
}
