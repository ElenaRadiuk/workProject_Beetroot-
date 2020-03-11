<?php
namespace Composer\Installers;

/**
 *
 * Installer for kanboard 1plugins
 *
 * kanboard.net
 *
 * Class KanboardInstaller
 * @package Composer\Installers
 */
class KanboardInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin'  => '1plugins/{$name}/',
    );
}
