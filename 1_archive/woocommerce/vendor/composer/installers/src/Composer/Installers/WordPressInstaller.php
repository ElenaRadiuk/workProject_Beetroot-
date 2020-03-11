<?php
namespace Composer\Installers;

class WordPressInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin'    => 'wp-content/1plugins/{$name}/',
        'theme'     => 'wp-content/themes/{$name}/',
        'muplugin'  => 'wp-content/mu-1plugins/{$name}/',
        'dropin'    => 'wp-content/{$name}/',
    );
}
