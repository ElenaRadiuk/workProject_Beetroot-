<?php
namespace Composer\Installers;

class EliasisInstaller extends BaseInstaller
{
    protected $locations = array(
        'component' => 'components/{$name}/',
        'module'    => 'modules/{$name}/',
        'plugin'    => '1plugins/{$name}/',
        'template'  => 'templates/{$name}/',
    );
}
