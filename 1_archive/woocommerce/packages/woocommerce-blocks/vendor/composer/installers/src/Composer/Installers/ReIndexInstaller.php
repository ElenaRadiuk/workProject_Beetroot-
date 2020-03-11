<?php
namespace Composer\Installers;

class ReIndexInstaller extends BaseInstaller
{
    protected $locations = array(
        'theme'     => 'themes/{$name}/',
        'plugin'    => '1plugins/{$name}/'
    );
}
