<?php

namespace App\Controller;

use App\Entity\CommandeTicket;
use App\Entity\PropertySearch;
use App\Form\CommandeTicketType;
use App\Form\PropertySearchType;
use App\Repository\CommandeTicketRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

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

    // @Route("/tri", name="reclamations_show")
    
    /*public function showReclamations(): Response
    {
        $commandeTickets = $this->getDoctrine()->getRepository(CommandeTicket::class)->findAll();
        usort($commandeTickets, function($a, $b) {
            return strcmp($a->getNomEvenement(), $b->getPrix());
        });
        return $this->render('commande_ticket/index.html.twig', [
            'commande_tickets' => $commandeTickets,
        ]);
    }*/

    /**
     * @Route("/search", name="app_commande_ticket_search")
     */
    public function search(Request $request, CommandeTicketRepository $repository)
    {
        $searchTerm = $request->query->get('q');

        $commandeTickets = $repository->search($searchTerm);

        return $this->render('commande_ticket/index.html.twig', [
            'commande_tickets' => $commandeTickets,
        ]);
    }

    /*
    @Route("/search", name="app_commande_ticket_search")
    public function search(Request $request, CommandeTicketRepository $repository)
    {
        $nomEvenement = $request->query->get('nomEvenement');
        $prix = $request->query->get('prix');

        $commandeTickets = $repository->search($nomEvenement, $prix);

        return $this->render('commande_ticket/index.html.twig', [
            'commande_tickets' => $commandeTickets
        ]);
    }*/

    #[Route('/triNE', name: 'app_commande_ticket_index_triNE', methods: ['GET'])]
    public function indextriNE(EntityManagerInterface $entityManager): Response
    {
        $commandeTickets = $entityManager
            ->getRepository(CommandeTicket::class)
            ->findAll();
        usort($commandeTickets, function($a, $b) {
            return strcmp($a->getNomEvenement(), $b->getNomEvenement());
        });

        return $this->render('commande_ticket/index.html.twig', [
            'commande_tickets' => $commandeTickets,
        ]);
    }
    #[Route('/triP', name: 'app_commande_ticket_index_triP', methods: ['GET'])]
    public function indextriP(EntityManagerInterface $entityManager): Response
    {
        $commandeTickets = $entityManager
            ->getRepository(CommandeTicket::class)
            ->findAll();
        usort($commandeTickets, function($a, $b) {
            return strcmp($a->getPrix(), $b->getPrix());
        });

        return $this->render('commande_ticket/index.html.twig', [
            'commande_tickets' => $commandeTickets,
        ]);
    }

    /**#[Route('/search', name: 'app_commande_ticket_search', methods: ['GET'])]
    public function search(Request $request, CommandeTicketRepository $commandeTicketRepository): Response
    {
        $search = new PropertySearch();
        $form = $this->createForm(PropertySearchType::class, $search);
        $form->handleRequest($request);

        $commandeTickets = $commandeTicketRepository->findAllVisibleQuery($search);

        return $this->render('commande_ticket/index.html.twig', [
            'commande_tickets' => $commandeTickets,
            'form' => $form->createView(),
        ]);
    }*/

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

    #[Route('/F/{id}/edit', name: 'app_commande_ticket_editF', methods: ['GET', 'POST'])]
    public function editF(Request $request, CommandeTicket $commandeTicket, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommandeTicketType::class, $commandeTicket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $ticketId = $commandeTicket->getId();
            return $this->redirectToRoute('app_commande_ticket_showF', ['id' => $ticketId], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande_ticket/editF.html.twig', [
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

    #[Route('/{id}', name: 'app_commande_ticket_delete', methods: ['POST'])]
    public function deleteF(Request $request, CommandeTicket $commandeTicket, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commandeTicket->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commandeTicket);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commande_ticket_newF', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/data", name="users_data")
     */
    public function usersData()
    {
        return $this->render('commande_ticket/data.html.twig');
    }

    /**
     * @Route("data/download/{id}", name="users_data_download")
     */
    public function usersDataDownload($id)
    {
        $commandeTicket = $this->getDoctrine()->getRepository(CommandeTicket::class)->find($id);
        // On définit les options du PDF
        $pdfOptions = new Options();
        // Police par défaut
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);

        // On instancie Dompdf
        $dompdf = new Dompdf($pdfOptions);
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $dompdf->setHttpContext($context);

        // On génère le html
        $html = $this->renderView('commande_ticket/download.html.twig' , [
            'commande_ticket' => $commandeTicket,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // On génère un nom de fichier
        $fichier = 'user-data-'. $commandeTicket->getId() .'.pdf';

        // On envoie le PDF au navigateur
        $dompdf->stream($fichier, [
            'Attachment' => true
        ]);

        return new Response();
    }

    

}
