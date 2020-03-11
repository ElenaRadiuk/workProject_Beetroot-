<?php
namespace Composer\Installers;

class KodiCMSInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin' => 'cms/1plugins/{$name}/',
        'media'  => 'cms/media/vendor/{$name}/'
    );
}
