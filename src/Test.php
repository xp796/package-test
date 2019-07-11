<?php

namespace Xp\PackageTest;

class Test
{
    public function execute()
    {
        echo '666';
    }

    public function getConfig()
    {
        var_dump(config('test'));
    }
}