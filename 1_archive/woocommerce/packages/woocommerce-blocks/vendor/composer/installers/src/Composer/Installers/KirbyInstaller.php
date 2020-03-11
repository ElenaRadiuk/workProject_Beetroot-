<?php
namespace Composer\Installers;

class KirbyInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin'    => 'site/1plugins/{$name}/',
        'field'    => 'site/fields/{$name}/',
        'tag'    => 'site/tags/{$name}/'
    );
}
