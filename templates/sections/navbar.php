<?php

use DigraphCMS\UI\MenuBar\MenuBar;
use DigraphCMS\URL\URL;

$menu = (new MenuBar)
    ->setID('main-nav');
$menu->addURL(new URL('/'), 'Home');
$menu->addURL(new URL('/senate/'), 'Faculty Senate');
$menu->addURL(new URL('/cog/'), 'Committee on Governance');
$menu->addURL(new URL('/aft/'), 'Academic Freedom &amp; Tenure');
$menu->addURL(new URL('/resolutions/'), 'Resolutions');
echo $menu;
