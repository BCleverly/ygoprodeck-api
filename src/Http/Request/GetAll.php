<?php

namespace BCleverly\YgoprodeckApi\Http\Request;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAll extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/cardinfo.php';
    }
}
