<?php

namespace App\Controller;

use App\Entity\CommandeTicket;
use App\Form\CommandeTicketType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commande/ticket')]
class CommandeTicketController extends AbstractController
{
    #[Route('/', name: 'app_commande_ticket_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $commandeTickets = $entityManager
            ->getRepository(CommandeTicket::class)
            ->findAll();

        return $this->render('commande_ticket/index.html.twig', [
            'commande_tickets' => $commandeTickets,
        ]);
    }

    #[Route('/new', name: 'app_commande_ticket_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commandeTicket = new CommandeTicket();
        $form = $this->createForm(CommandeTicketType::class, $commandeTicket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commandeTicket);
            $entityManager->flush();

            return $this->redirectToRoute('app_commande_ticket_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande_ticket/new.html.twig', [
            'commande_ticket' => $commandeTicket,
            'form' => $form,
        ]);
    }

    #[Route('/newF', name: 'app_commande_ticket_newF', methods: ['GET', 'POST'])]
    public function newF(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commandeTicket = new CommandeTicket();
        $form = $this->createForm(CommandeTicketType::class, $commandeTicket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commandeTicket);
            $entityManager->flush();

            $ticketId = $commandeTicket->getId();
            return $this->redirectToRoute('app_commande_ticket_showF', ['id' => $ticketId] , Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande_ticket/newF.html.twig', [
            'commande_ticket' => $commandeTicket,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_ticket_show', methods: ['GET'])]
    public function show(CommandeTicket $commandeTicket): Response
    {
        return $this->render('commande_ticket/show.html.twig', [
            'commande_ticket' => $commandeTicket,
        ]);
    }

    #[Route('/F/{id}', name: 'app_commande_ticket_showF', methods: ['GET'])]
    public function showF(CommandeTicket $commandeTicket): Response
    {
        return $this->render('commande_ticket/showF.html.twig', [
            'commande_ticket' => $commandeTicket,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commande_ticket_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CommandeTicket $commandeTicket, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommandeTicketType::class, $commandeTicket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_commande_ticket_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande_ticket/edit.html.twig', [
            'commande_ticket' => $commandeTicket,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_ticket_delete', methods: ['POST'])]
    public function delete(Request $request, CommandeTicket $commandeTicket, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commandeTicket->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commandeTicket);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commande_ticket_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/F/{id}', name: 'app_commande_ticket_deleteF', methods: ['POST'])]
    public function deleteF(Request $request, CommandeTicket $commandeTicket, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commandeTicket->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commandeTicket);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commande_ticket_newF', [], Response::HTTP_SEE_OTHER);
    }
}
