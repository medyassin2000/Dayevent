<?php

namespace App\Controller;

use App\Entity\CategorieInstrument;
use App\Form\CategorieInstrumentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categorie/instrument')]
class CategorieInstrumentController extends AbstractController
{
    #[Route('/', name: 'app_categorie_instrument_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $categorieInstruments = $entityManager
            ->getRepository(CategorieInstrument::class)
            ->findAll();

        return $this->render('categorie_instrument/index.html.twig', [
            'categorie_instruments' => $categorieInstruments,
        ]);
    }

    #[Route('/new', name: 'app_categorie_instrument_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorieInstrument = new CategorieInstrument();
        $form = $this->createForm(CategorieInstrumentType::class, $categorieInstrument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categorieInstrument);
            $entityManager->flush();

            return $this->redirectToRoute('app_categorie_instrument_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('categorie_instrument/new.html.twig', [
            'categorie_instrument' => $categorieInstrument,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_instrument_show', methods: ['GET'])]
    public function show(CategorieInstrument $categorieInstrument): Response
    {
        return $this->render('categorie_instrument/show.html.twig', [
            'categorie_instrument' => $categorieInstrument,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_categorie_instrument_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CategorieInstrument $categorieInstrument, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategorieInstrumentType::class, $categorieInstrument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_categorie_instrument_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('categorie_instrument/edit.html.twig', [
            'categorie_instrument' => $categorieInstrument,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_instrument_delete', methods: ['POST'])]
    public function delete(Request $request, CategorieInstrument $categorieInstrument, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorieInstrument->getId(), $request->request->get('_token'))) {
            $entityManager->remove($categorieInstrument);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_categorie_instrument_index', [], Response::HTTP_SEE_OTHER);
    }
}
