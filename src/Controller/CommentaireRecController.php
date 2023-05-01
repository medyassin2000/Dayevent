<?php

namespace App\Controller;


use App\Service\TwilioClient;
use App\Entity\CommentaireRec;
use App\Form\CommentaireRecType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/commentaire/rec')]
class CommentaireRecController extends AbstractController
{
    #[Route('/', name: 'app_commentaire_rec_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,PaginatorInterface $paginator , Request $request): Response
    {
        $commentaireRecs = $entityManager
            ->getRepository(CommentaireRec::class)
            ->findAll();
        $commentaireRecs=$paginator->paginate($commentaireRecs,$request->query->getInt('page',1),3);
        return $this->render('commentaire_rec/index.html.twig', [
            'commentaire_recs' => $commentaireRecs,
        ]);
    }

    #[Route('/new', name: 'app_commentaire_rec_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commentaireRec = new CommentaireRec();
        $form = $this->createForm(CommentaireRecType::class, $commentaireRec);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commentaireRec);
            $entityManager->flush();

            return $this->redirectToRoute('app_commentaire_rec_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commentaire_rec/new.html.twig', [
            'commentaire_rec' => $commentaireRec,
            'form' => $form,
        ]);
    }

    #[Route('/{idComm}', name: 'app_commentaire_rec_show', methods: ['GET'])]
    public function show(CommentaireRec $commentaireRec): Response
    {
        return $this->render('commentaire_rec/show.html.twig', [
            'commentaire_rec' => $commentaireRec,
        ]);
    }

    #[Route('/{idComm}/edit', name: 'app_commentaire_rec_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CommentaireRec $commentaireRec, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommentaireRecType::class, $commentaireRec);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_commentaire_rec_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commentaire_rec/edit.html.twig', [
            'commentaire_rec' => $commentaireRec,
            'form' => $form,
        ]);
    }

    #[Route('/{idComm}', name: 'app_commentaire_rec_delete', methods: ['POST'])]
    public function delete(Request $request, CommentaireRec $commentaireRec, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentaireRec->getIdComm(), $request->request->get('_token'))) {
            $entityManager->remove($commentaireRec);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commentaire_rec_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/send-sms', name: 'commentairerec_send_sms', methods: ['GET'])]
    public function sendSms(Request $request, TwilioClient $twilioClient, EntityManagerInterface $entityManager,CommentaireRecType $commentaireRecType): Response
    {
        $commentaireRecController = new CommentaireRecController();
        $form = $this->createForm(CommentaireRecType::class);

        $form->handleRequest($request);
        
        $to = '+216'.$form->getData()->getIdRec()->getTel(); // The phone number to send the SMS to
        $from = '+15746266341'; // Your Twilio phone number
        $body = 'Bonjour cher client, ' .$form->getData()->getContenu() . '. Merci pour votre patience.';// The message body

        $twilioClient->sendSMS($to, $from, $body);
        $this->new($request, $entityManager);

        return new Response('SMS sent successfully!');
    }
}
