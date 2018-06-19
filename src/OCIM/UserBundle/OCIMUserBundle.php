<?php

namespace OCIM\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OCIMUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
