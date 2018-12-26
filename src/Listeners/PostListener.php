<?php

namespace App\Listeners;

use App\Entity\Post;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use App\Repository\AttachmentRepository;

class PostListener
{
    private $attachmentRepository;

    public function __construct(AttachmentRepository $attachmentRepository)
    {
        $this->$attachmentRepository = $attachmentRepository;
    }

    public function preUpdate(Post $post, PreUpdateEventArgs $args)
    {
        dump($this->attachmentRepository->findAll());
    }
}