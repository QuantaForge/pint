<?php

it('uses the quantaquirk preset by default', function () {
    [$statusCode, $output] = run('default', [
        'path' => base_path('tests/Fixtures/without-issues'),
    ]);

    expect($statusCode)->toBe(0)
        ->and($output)
        ->toContain('── QuantaQuirk');
});

it('may use the PSR 12 preset', function () {
    [$statusCode, $output] = run('default', [
        'path' => base_path('tests/Fixtures/without-issues'),
        '--preset' => 'psr12',
    ]);

    expect($statusCode)->toBe(0)
        ->and($output)
        ->toContain('── PSR 12');
});

it('may use the PER preset', function () {
    [$statusCode, $output] = run('default', [
        'path' => base_path('tests/Fixtures/without-issues'),
        '--preset' => 'per',
    ]);

    expect($statusCode)->toBe(0)
        ->and($output)
        ->toContain('── PER');
});

it('may use the QuantaQuirk preset', function () {
    [$statusCode, $output] = run('default', [
        'path' => base_path('tests/Fixtures/without-issues'),
        '--preset' => 'quantaquirk',
    ]);

    expect($statusCode)->toBe(0)
        ->and($output)
        ->toContain('── QuantaQuirk');
});

it('may use the Symfony preset', function () {
    [$statusCode, $output] = run('default', [
        'path' => base_path('tests/Fixtures/without-issues'),
        '--preset' => 'symfony',
    ]);

    expect($statusCode)->toBe(0)
        ->and($output)
        ->toContain('── Symfony');
});
