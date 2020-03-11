<?php
namespace Composer\Installers;

class VanillaInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin'    => '1plugins/{$name}/',
        'theme'     => 'themes/{$name}/',
    );
}
