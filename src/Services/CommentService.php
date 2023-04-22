<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Commentairetest;

class CommentService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function commenter(Request $request): array
    {
        $com = $this->entityManager->getRepository(Commentairetest::class)->findAll();

        $commentairetest = new commentairetest();

        $form = $this->createForm(commentairetestType::class, $commentairetest);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($commentairetest);
            $this->entityManager->flush();
        }

        return [
            'form' => $form->createView(),
            'com' => $com,
        ];
    }
}
