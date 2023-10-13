<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Command
    |--------------------------------------------------------------------------
    |
    | QuantaQuirk Zero will always run the command specified below when no command name is
    | provided. Consider update the default command for single command applications.
    | You cannot pass arguments to the default command because they are ignored.
    |
    */

    'default' => \App\Commands\DefaultCommand::class,

    /*
    |--------------------------------------------------------------------------
    | Commands Paths
    |--------------------------------------------------------------------------
    |
    | This value determines the "paths" that should be loaded by the console's
    | kernel. Foreach "path" present on the array provided below the kernel
    | will extract all "QuantaQuirk\Console\Command" based class commands.
    |
    */

    'paths' => [app_path('Commands')],

    /*
    |--------------------------------------------------------------------------
    | Added Commands
    |--------------------------------------------------------------------------
    |
    | You may want to include a single command class without having to load an
    | entire folder. Here you can specify which commands should be added to
    | your list of commands. The console's kernel will try to load them.
    |
    */

    'add' => [
        // ..
    ],

    /*
    |--------------------------------------------------------------------------
    | Hidden Commands
    |--------------------------------------------------------------------------
    |
    | Your application commands will always be visible on the application list
    | of commands. But you can still make them "hidden" specifying an array
    | of commands below. All "hidden" commands can still be run/executed.
    |
    */

    'hidden' => [
        QuantaQuirkZero\Framework\Commands\BuildCommand::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Removed Commands
    |--------------------------------------------------------------------------
    |
    | Do you have a service provider that loads a list of commands that
    | you don't need? No problem. QuantaQuirk Zero allows you to specify
    | below a list of commands that you don't to see in your app.
    |
    */

    'remove' => [
        // QuantaQuirk...
        QuantaQuirk\Console\Scheduling\ScheduleRunCommand::class,
        QuantaQuirk\Console\Scheduling\ScheduleFinishCommand::class,

        // QuantaQuirkZero...
        QuantaQuirkZero\Framework\Commands\InstallCommand::class,
        QuantaQuirkZero\Framework\Commands\MakeCommand::class,
        QuantaQuirkZero\Framework\Commands\RenameCommand::class,
        QuantaQuirkZero\Framework\Commands\TestMakeCommand::class,
        QuantaQuirkZero\Framework\Commands\StubPublishCommand::class,

        // NunoMaduro...
        NunoMaduro\Collision\Adapters\QuantaQuirk\Commands\TestCommand::class,
        NunoMaduro\QuantaQuirkConsoleSummary\SummaryCommand::class,

        // Symfony...
        Symfony\Component\Console\Command\DumpCompletionCommand::class,
        Symfony\Component\Console\Command\HelpCommand::class,
    ],

];
