<?php

it('fixes the code', function () {
    [$statusCode, $output] = run('default', [
        'path' => base_path('tests/Fixtures/fixers/quantaquirk_phpdoc_separation.php'),
        '--preset' => 'quantaquirk',
    ]);

    expect($statusCode)->toBe(1)
        ->and($output)
        ->toContain('  ⨯')
        ->toContain(
            <<<'EOF'
   /**
    * @param  string  $foo
  - *
    * @param  string  $bar
    * @return string
    */
EOF,
        );
});
