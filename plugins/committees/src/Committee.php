<?php

namespace DigraphCMS_Plugins\unmous\committees;

use DigraphCMS\Content\Page;
use DigraphCMS\Content\Pages;

class Committee extends Page
{
    public function insert(string $parent_uuid = null)
    {
        $parent = Pages::get($parent_uuid);
        return Pages::insert(
            $this,
            $parent_uuid,
            $parent instanceof Committee
                ? 'subcommittee'
                : null
        );
    }
    public function routeClasses(): array
    {
        return ['committee', 'page', '_any'];
    }
}
