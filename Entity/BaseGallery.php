<?php

namespace Hart\MediaBundle\Entity;

use Sonata\MediaBundle\Entity\BaseGallery as AbstractBaseGallery;

class BaseGallery extends AbstractBaseGallery
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
