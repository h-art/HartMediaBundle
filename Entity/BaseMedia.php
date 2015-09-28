<?php

namespace Hart\MediaBundle\Entity;

use Sonata\MediaBundle\Entity\BaseMedia as AbstractBaseMedia;

class BaseMedia extends AbstractBaseMedia
{
    /**
     * Returns the user unique id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
