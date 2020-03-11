<?php
namespace Composer\Installers;

class WolfCMSInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin' => 'wolf/1plugins/{$name}/',
    );
}
