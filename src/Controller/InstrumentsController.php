<?php

namespace App\Controller;

use App\Entity\Instruments;
use App\Form\InstrumentsType;
use App\Repository\InstrumentsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Handler\UploadHandler;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;
Use Symfony\Component\HttpFoundation\File\File;

#[Route('/instruments')]
class InstrumentsController extends AbstractController
{
    #[Route('/', name: 'app_instruments_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $instruments = $entityManager
            ->getRepository(Instruments::class)
            ->findAll();

        return $this->render('instruments/index.html.twig', [
            'instruments' => $instruments,
        ]);
    }

    #[Route('/new', name: 'app_instruments_new', methods: ['GET', 'POST'])]
    public function new(Request $request, InstrumentsRepository $instrumentsRepository, UploaderHelper $uploaderHelper, UploadHandler $uploadHandler): Response
    {
        $instrument = new Instruments();
        $form = $this->createForm(InstrumentsType::class, $instrument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */
            $file = $form->get('photo')->getData();
            if ($file) {
                $fileName = uniqid() . '.' . $file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('kernel.project_dir') . '/public/images/products',
                        $fileName
                    );

                    $photoPath = '/images/products/' . $fileName;

                    $instrument->setPhoto($photoPath);
                    $instrumentsRepository->save($instrument, true);

                    // Ajouter le chemin complet de la photo dans la base de données
                    $photoFullPath = $this->getParameter('kernel.project_dir') . '/public' . $photoPath;
                    $instrument->setPhoto($photoFullPath);
                    $instrumentsRepository->save($instrument, true);

                } catch (FileException $e) {
                    // Gérer les erreurs de téléchargement du fichier
                }
            }

            return $this->redirectToRoute('app_instruments_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('instruments/new.html.twig', [
            'instruments' => $instrument,
            'form' => $form,
        ]);
    }

    #[Route('/{idInstrument}', name: 'app_instruments_show', methods: ['GET'])]
    public function show(Instruments $instrument): Response
    {
        return $this->render('instruments/show.html.twig', [
            'instrument' => $instrument,
        ]);
    }

    #[Route('/{idInstrument}/edit', name: 'app_instruments_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Instruments $instrument, InstrumentsRepository $instrumentsRepository, EntityManagerInterface $entityManager, UploadHandler $uploadHandler): Response
    {
        $form = $this->createForm(InstrumentsType::class, $instrument);
        $form->handleRequest($request);


            return $this->redirectToRoute('app_instruments_index', [], Response::HTTP_SEE_OTHER);


        return $this->renderForm('instruments/edit.html.twig', [
            'instrument' => $instrument,
            'form' => $form,
        ]);
    }

    #[Route('/{idInstrument}', name: 'app_instruments_delete', methods: ['POST'])]
    public function delete(Request $request, Instruments $instrument, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $instrument->getIdInstrument(), $request->request->get('_token'))) {
            $entityManager->remove($instrument);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_instruments_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/instrument', name: 'app_instrument_instrument')]
    public function instrumentIndex(Request $request, InstrumentsRepository $instrumentsRepository, UploaderHelper $uploaderHelper, UploadHandler $uploadHandler): Response
    {
        $instrument = new Instruments();
        $form = $this->createForm(InstrumentsType::class, $instrument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */
            $file = $form->get('photo')->getData();
            if ($file) {
                $fileName = uniqid() . '.' . $file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('kernel.project_dir') . '/public/images/products',
                        $fileName
                    );

                    $photoPath = '/images/products/' . $fileName;

                    $instrument->setPhoto($photoPath);
                    $instrumentsRepository->save($instrument, true);

                    // Ajouter le chemin complet de la photo dans la base de données
                    $photoFullPath = $this->getParameter('kernel.project_dir') . '/public' . $photoPath;
                    $instrument->setPhoto($photoFullPath);
                    $instrumentsRepository->save($instrument, true);

                } catch (FileException $e) {
                    // Gérer les erreurs de téléchargement du fichier
                }
            }

            return $this->redirectToRoute('app_instrument_instrument', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('instrument.html.twig', [
            'instruments' => $instrument,
            'form' => $form,
        ]);
    }
    #[Route('/frontend', name: 'app_instrument_frontend')]
    public function frontIndex(): Response
    {
        return $this->render('index.html.twig');

    }
    #[Route('/card', name: 'app_instrument_card ')]
    public function card(InstrumentsRepository $instrumentsRepository): Response

    {
        $instruments = $instrumentsRepository->findAll();
        return $this->render('card.html.twig', ['instruments' => $instruments]);

    }




}