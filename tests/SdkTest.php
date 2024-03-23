<?php

use BCleverly\YgoprodeckApi\Http\Request\GetAll;
use BCleverly\YgoprodeckApi\Http\Request\GetCard;
use BCleverly\YgoprodeckApi\Http\YGOProDeck;
use Illuminate\Http\Response;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

test('api returns all cards', function () {
    $mockClient = new MockClient([
        GetAll::class => MockResponse::fixture('all-cards'),
    ]);

    $ygo = new YGOProDeck;

    $ygo->withMockClient($mockClient);

    $response = $ygo->getAll();

    expect($response->status())
        ->toBeInt()
        ->toBe(Response::HTTP_OK); // 200

});

test('api returns a card when given a card name', function () {

    $mockClient = new MockClient([
        GetCard::class => MockResponse::fixture('dark-magician'),
    ]);

    $name = 'Dark Magician';
    $ygo = new YGOProDeck;
    $ygo->withMockClient($mockClient);

    $response = $ygo->getCard($name);

    expect($response->status())
        ->toBeInt()
        ->toBe(Response::HTTP_OK);// 200

    $data = $response->json()['data'][0];

    expect($data)->toMatchArray([
        'name' => $name,
    ]);

    $mockClient->assertSent(GetCard::class);

    $mockClient->assertSentCount(1);
});
