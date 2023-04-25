<?php

use BiiiiiigMonster\LaravelEnum\Tests\Enums\Role;
use BiiiiiigMonster\LaravelEnum\Tests\Enums\Status;

it('can return an array of options from a backed enum')
    ->expect(Status::options())
    ->toBe([
        'PENDING' => 0,
        'DONE' => 1,
    ]);

it('can return an array of options from a pure enum')
    ->expect(Role::options())
    ->toBe([
        'ADMIN' => 'ADMIN',
        'GUEST' => 'GUEST',
    ]);
