<?php

use DigraphCMS\Cache\Cache;
use DigraphCMS\Content\Pages;
use DigraphCMS\Context;
use DigraphCMS\UI\MenuBar\MenuBar;
use DigraphCMS\URL\URL;

echo Cache::get(
    'sidebar/' . md5(Context::url()->path()),
    function () {
        $menu = new MenuBar;
        $menu->addClass('menubar--vertical');
        $menu->addClass('menubar--manual-toggle');
        $menu->addClass('sidebar__menu');

        if ($page = Pages::get('senate')) $menu->addPageDropdown($page, "Faculty Senate", true);
        if ($page = Pages::get('cog')) $menu->addPageDropdown($page, "Committee on Governance", true);
        if ($page = Pages::get('aft')) $menu->addPageDropdown($page, "Academic Freedom &amp; Tenure", true);

        $menu->addURL(new URL('/resolutions/'), 'Resolutions');

        return $menu->__toString();
    },
    3600
);
