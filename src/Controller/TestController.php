<?php

namespace App\Controller;
use App\Entity\Evenement;
use App\Entity\Mail;
use App\Entity\Seat;
use App\Entity\Utilisateur;
use App\Entity\Commentairetest;
use App\Form\EventType;
use App\Form\MailType;
use App\Form\CommentairetestType;
use App\Controller\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\EvenementRepository;
use App\Repository\SeatRepository;
use App\Repository\CommentairetestRepository;
use App\Repository\EntityNameRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\EntityName;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\DataTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\StringToFileTransformer;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

use Symfony\Component\HttpFoundation\JsonResponse;



use Vich\UploaderBundle\Templating\Helper\UploaderHelper;
Use Symfony\Component\HttpFoundation\File\File;


class TestController extends AbstractController
{
    /**
     * @Route("/display", name="display_event")
     */
    public function index(): Response
    {

        $events = $this->getDoctrine()->getManager()->getRepository(Evenement::class)->findAll();
        return $this->render('test/index.html.twig', [
            'b'=>$events
        ]);
    }

     /**
     * @Route("/home", name="home")
     */
    public function homeclient(): Response
    {

        $events = $this->getDoctrine()->getManager()->getRepository(Evenement::class)->findAll();
        return $this->render('client/home.html.twig', [
            'b'=>$events
        ]);
    }
    /**
     * @Route("/eventsclient", name="eventsclient")
     */
    public function eventsclient(): Response
    {

        $events = $this->getDoctrine()->getManager()->getRepository(Evenement::class)->findAll();
        return $this->render('client/listeevents.html.twig', [
            'b'=>$events
        ]);
    }


/**
 * @Route("/add", name="add")
 */
public function add(Request $request): Response
{
    $evenement = new Evenement();

    $form = $this->createForm(EventType::class, $evenement);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $evenement = $form->getData();
        $afficheFile = $form->get('affiche')->getData();

     
        $afficheFileName = $afficheFile->getClientOriginalName();
        $pathname="images/products/";
        $name=$pathname.$afficheFileName;
        
       
            $afficheFile->move($this->getParameter('app.path.products'), $name);
        

        $evenement->setAffiche($name);
        
       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($evenement);
        $entityManager->flush();

        return $this->redirectToRoute('display_event');
    }

    return $this->render('create.html.twig', [
        'f' => $form->createView(),
    ]);
}


 


    /**
     * @Route("/remove/{id}", name="supp_event")
     */
    public function suppressionBlog(Evenement  $Evenement): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($Evenement);
        $em->flush();

        return $this->redirectToRoute('display_event');

}





/**
 * @Route("/modif/{id}", name="modif_event")
 */
public function modifEvent(Request $request,$id): Response
{
    $event = $this->getDoctrine()->getManager()->getRepository(Evenement::class)->find($id);

    $form = $this->createForm(EventType::class, $event);

    $transformer = new StringToFileTransformer();
    $form->get('affiche')->addModelTransformer($transformer);

    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return $this->redirectToRoute('display_event');
    }

    return $this->render('create.html.twig',['f'=>$form->createView()]);
}



    

   /**
 * @Route("/page/{id}", name="eventpage")
 */
public function show(int $id, EvenementRepository $repositoryE,CommentairetestRepository $repositoryC, Request $request): Response
{
 
    
    $events = $repositoryE->findById($id);
    $com = $repositoryC->findByExampleField($events);
    if (!$events) {
        throw $this->createNotFoundException('Entity not found');
    }

    $commentairetest = new commentairetest();
    $commentairetest->setIdEvenement($id);

    $form = $this->createForm(commentairetestType::class, $commentairetest);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($commentairetest);//Add
        $em->flush();
    }

    return $this->render('client/oneevent.html.twig', [
        'b' => $events,
        'form' => $form->createView(),
        'c' => $com
    ]);
}


/**
     * @Route("/mailsponso", name="mailsponso")
     */
public function sendEmail(Request $request, MailerInterface $mailer)
{
    $form = $this->createForm(MailType::class);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Get the list of recipients from the database
        $recipients = $this->getDoctrine()->getRepository(Utilisateur::class)->findAll();

        // Get the subject and content of the email from the form
        $objet = $form->get('objet')->getData();
        $contenu = $form->get('contenu')->getData();

        // Create the message
        $message = (new Email())
            ->from('hediammarx@gmail.com')
            ->subject($objet)
            ->html($contenu);

        // Add each recipient to the message
        foreach ($recipients as $recipient) {
            $message->addTo($recipient->getMail());
        }

        // Send the message
        $mailer->send($message);

        // Redirect to a success page or show a success message
        return $this->redirectToRoute('mailsponso');
    }

    // Render the form
    return $this->render('mail.html.twig', [
        'f' => $form->createView(),
    ]);
}
/**
 * @Route("/lieustat", name="lieu_stat")
 */
public function placeStatistics()
{
    $em = $this->getDoctrine()->getManager();
    $places = $em->getRepository(Evenement::class)->createQueryBuilder('e')
    
        ->select('e.lieu, COUNT(e.id) as count')
        ->groupBy('e.lieu')
        ->getQuery()
        ->getResult();

    // Build the chart data
    $data = [['Lieu', 'Count']];
    foreach ($places as $place) {
        $data[] = [$place['lieu'], $place['count']];
    }

    // Render the chart
    return $this->render('statistics/bar.html.twig', [
        'chartData' => json_encode($data),
    ]);
}
  /**
     * @Route("/seatchart", name="seatchart")
     */
    public function seatChart(SeatRepository $seatRepository): Response
    {
        $seats = $seatRepository->findAll();

        return $this->render('seat.html.twig', [
            'seats' => $seats
        ]);
    }

    /**
     * @Route("/reserve-seat/{id}", name="reserve_seat", methods={"PUT"})
     */
    public function reserveSeat(Request $request, EntityManagerInterface $entityManager, Seat $seat): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (isset($data['status'])) {
            $seat->setStatus($data['status']);
            $entityManager->flush();
        }

        return new JsonResponse(['status' => 'success']);
    }




    
}
