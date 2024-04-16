<?php

use Foxws\WireUi\Tests\TestCase;
use Illuminate\Support\Facades\Blade;

uses(TestCase::class);

it('can render button component', function () {
    expect(Blade::render('x-wireui::actions-button />'))
        ->toMatchSnapshot();
});
