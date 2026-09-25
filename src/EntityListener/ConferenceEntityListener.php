<?php

namespace App\EntityListener;

use App\Entity\Conference;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Component\String\Slugger\SluggerInterface;

class ConferenceEntityListener
{
    public function __construct(
        private SluggerInterface $slugger,
    ) {}

    public function prePersist(Conference $conference, PrePersistEventArgs $event): void
    {
        $conference->computeSlug($this->slugger);
    }

    public function preUpdate(Conference $conference, PreUpdateEventArgs $event): void
    {
        $conference->computeSlug($this->slugger);
    }
}
