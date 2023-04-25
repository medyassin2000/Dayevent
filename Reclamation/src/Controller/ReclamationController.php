<?php

namespace App\Controller;
use App\Service\StatistiqueService;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    private $reclamationRepository;

    public function __construct(ReclamationRepository $reclamationRepository)
    {
        $this->reclamationRepository = $reclamationRepository;
    }

    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(): Response
    {
        $reclamations = $this->reclamationRepository->findAll();

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{idRec}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{idRec}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{idRec}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getIdRec(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }

#[Route('/frontend', name : 'app_reclamation_frontend')]
public function frontIndex():Response
{
return $this->render('index1.html.twig');

}
#[Route('/contact', name : 'app_reclamation_contact')]
public function contactIndex(Request $request, EntityManagerInterface $entityManager):Response
{
    $reclamation = new Reclamation();
    $form = $this->createForm(ReclamationType::class, $reclamation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($reclamation);
        $entityManager->flush();

        return $this->redirectToRoute('app_reclamation_contact', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('contact.html.twig', [
        'reclamation' => $reclamation,
        'form' => $form,
        
        
    ]);
    

    
    
/*return $this->render('contact.html.twig');*/

}
#[Route('/reclamation', name: 'app_reclamation_index', methods: ['GET'])]
public function list(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $searchTerm = $request->query->get('search', '');
        $orderBy = $request->query->get('order_by', []);
        $limit = $request->query->get('limit', null);
        $offset = $request->query->get('offset', null);
    
        $reclamations = $reclamationRepository->findByFilters($searchTerm, $orderBy, $limit, $offset);
    
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }
    
//#[Route('/statistiques', name: 'app_reclamation_statistique')]
 public function statistique(StatistiqueService $statistiqueService , ReclamationRepository $reclamationRepository): Response
    {

        $stats = $reclamationRepository->findAllstat();
        $years = [];
        $data = [];
        foreach ($stats as $stat){
           
            $years[]=$stat['annee'];
            $data[]=$stat['total_reclamations'];
        }
        
        $statcount = $reclamationRepository->findtotal();

        return $this->render('reclamation/statistique.html.twig', [
            'stat' => $stats,
            'statcount' => $statcount,
            'years' => json_encode($years),
            'data' => json_encode($data),

        ]);
    }
    

}



