<?php

namespace App\Controller;

use App\Entity\CommandeInstruments;
use App\Form\CommandeInstrumentsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commande/instruments')]
class CommandeInstrumentsController extends AbstractController
{
    #[Route('/', name: 'app_commande_instruments_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $commandeInstruments = $entityManager
            ->getRepository(CommandeInstruments::class)
            ->findAll();

        return $this->render('commande_instruments/index.html.twig', [
            'commande_instruments' => $commandeInstruments,
        ]);
    }

    #[Route('/new', name: 'app_commande_instruments_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commandeInstrument = new CommandeInstruments();
        $form = $this->createForm(CommandeInstrumentsType::class, $commandeInstrument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commandeInstrument);
            $entityManager->flush();

            return $this->redirectToRoute('app_commande_instruments_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande_instruments/new.html.twig', [
            'commande_instrument' => $commandeInstrument,
            'form' => $form,
        ]);
    }

    #[Route('/{idCommande}', name: 'app_commande_instruments_show', methods: ['GET'])]
    public function show(CommandeInstruments $commandeInstrument): Response
    {
        return $this->render('commande_instruments/show.html.twig', [
            'commande_instrument' => $commandeInstrument,
        ]);
    }

    #[Route('/{idCommande}/edit', name: 'app_commande_instruments_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CommandeInstruments $commandeInstrument, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommandeInstrumentsType::class, $commandeInstrument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_commande_instruments_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande_instruments/edit.html.twig', [
            'commande_instrument' => $commandeInstrument,
            'form' => $form,
        ]);
    }

    #[Route('/{idCommande}', name: 'app_commande_instruments_delete', methods: ['POST'])]
    public function delete(Request $request, CommandeInstruments $commandeInstrument, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commandeInstrument->getIdCommande(), $request->request->get('_token'))) {
            $entityManager->remove($commandeInstrument);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commande_instruments_index', [], Response::HTTP_SEE_OTHER);
    }
}
