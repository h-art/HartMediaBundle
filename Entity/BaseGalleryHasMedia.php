<?php

namespace Hart\MediaBundle\Entity;

use Sonata\MediaBundle\Entity\BaseGalleryHasMedia as AbstractBaseGalleryHasMedia;

class BaseGalleryHasMedia extends AbstractBaseGalleryHasMedia
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
