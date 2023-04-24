<?php

namespace App\Controller;

use App\Entity\Music;
use App\Form\MusicType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\MusicRepository;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;


#[Route('/music')]
class MusicController extends AbstractController
{
    #[Route('/', name: 'app_music_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $music = $entityManager
            ->getRepository(Music::class)
            ->findAll();

        return $this->render('music/index.html.twig', [
            'music' => $music,
        ]);
    }

    #[Route('/new', name: 'app_music_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,MusicRepository $musicRepository): Response
    {
        $music = new Music();
        $form = $this->createForm(MusicType::class, $music);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */
            $file = $form->get('fichier')->getData();
          
                $fileName =  $file->getClientOriginalName(); ;
              

                    $musicPath = '/music/products' . $fileName;
                    $name=$musicPath . $fileName;
                    $file->move($this->getParameter('app.path.products'), $name);
                   
                   
                  
                    // Ajouter le chemin complet de la photo dans la base de données
                 
                    $music->setFichier($name);
                   
        
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($music);
                    $entityManager->flush();
                
          

            return $this->redirectToRoute('app_music_index', [], Response::HTTP_SEE_OTHER);
        }
     
        return $this->renderForm('music/new.html.twig', [
            'music' => $music,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_music_show', methods: ['GET'])]
    public function show(Music $music): Response
    {
        return $this->render('music/show.html.twig', [
            'music' => $music,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_music_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Music $music, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MusicType::class, $music);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_music_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('music/edit.html.twig', [
            'music' => $music,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_music_delete', methods: ['POST'])]
    public function delete(Request $request, Music $music, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$music->getId(), $request->request->get('_token'))) {
            $entityManager->remove($music);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_music_index', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/frontend', name: 'app_music_frontend_index')]
    public function frontendIndex(EntityManagerInterface $entityManager): Response
    {
        $music = $entityManager
            ->getRepository(Music::class)
            ->findAll();

        return $this->render('Frontend/idex1.html.twig', [
            'music' => $music,
        ]);
    }
    
    #[Route('/front/share/{id}', name: 'ssd')]
    public function share($id, Request $request, MusicRepository $repo): Response
    {
        $music = $repo->find($id);

        $hashtag = "#" . str_replace(' ', '_', $music->getNomMorceaux());
       
        $homepageUrl = "https://open.spotify.com/playlist/6PUuYc0KQoSd3UPMoKhVpJ"; // Replace with the URL of your website's homepage or the URL of the page where the tournament is displayed
        $shareUrl = "https://www.facebook.com/dialog/share?app_id=160291406462337&display=popup&href=" . urlencode($homepageUrl);
        $shareUrl .= "&hashtag=" . urlencode($hashtag);

        return $this->redirect($shareUrl);
        
    }

}
