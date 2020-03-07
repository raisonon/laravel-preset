<?php

namespace harmonic\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class LaravelPresetServiceProvider extends ServiceProvider {
    public function boot() {
        UiCommand::macro('harmonic', function ($command) {
            // Do the preset work
            Preset::install($command);

            // Let the user know what we've done
            $command->comment('The harmonic preset has been installed successfully.');
        });
    }
}
