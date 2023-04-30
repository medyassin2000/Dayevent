<?php

namespace App\Controller;

use App\Entity\Instruments;
use App\Form\InstrumentsType;
use App\Repository\InstrumentsRepository;

use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Transport\Serialization\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Handler\UploadHandler;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;
Use Symfony\Component\HttpFoundation\File\File;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Endroid\QrCode\Builder\Builder;



use Endroid\QrCode\QrCode;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Color\Color;



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
                } catch (FileException $e) {
                    // Gérer les erreurs de téléchargement du fichier
                }
            }else
            $instrumentsRepository->save($instrument, true);

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
            'instruments' => $instrument,
        ]);
    }

    #[Route('/{idInstrument}/edit', name: 'app_instruments_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Instruments $instrument, InstrumentsRepository $instrumentsRepository, EntityManagerInterface $entityManager, UploaderHelper $uploaderHelper, UploadHandler $uploadHandler): Response
    {
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
                } catch (FileException $e) {
                    // Gérer les erreurs de téléchargement du fichier
                }
            } else {
                $instrument->setPhoto($instrument->getPhoto());
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_instruments_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('instruments/edit.html.twig', [
            'instruments' => $instrument,
            'form' => $form,
        ]);
    }
        #[
        Route('/{idInstrument}', name: 'app_instruments_delete', methods: ['POST'])]

        public function delete(Request $request, Instruments $instrument, EntityManagerInterface $entityManager): Response
        {
            if ($this->isCsrfTokenValid('delete' . $instrument->getIdInstrument(), $request->request->get('_token'))) {
                if (!is_null($instrument->getPhoto())) {
                    $photoPath = $this->getParameter('kernel.project_dir') . '/public' . $instrument->getPhoto();
                    if (file_exists($photoPath)) {
                        unlink($photoPath);
                    }
                }

                $entityManager->remove($instrument);
                $entityManager->flush();

            }

            return $this->redirectToRoute('app_instruments_index', [], Response::HTTP_SEE_OTHER);
        }


    #[Route('/ajout', name: 'app_instrument_ajouter')]
    public function ajout(Request $request, InstrumentsRepository $instrumentsRepository, UploaderHelper $uploaderHelper, UploadHandler $uploadHandler): Response
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
                    //$photoFullPath = $this->getParameter('kernel.project_dir') . '/public' . $photoPath;
                    //$instrument->setPhoto($photoFullPath);
                    //$instrumentsRepository->save($instrument, true);

                } catch (FileException $e) {
                    // Gérer les erreurs de téléchargement du fichier
                }
            }

            return $this->redirectToRoute('app_instrument_ajouter', [], Response::HTTP_SEE_OTHER);
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
    public function card(InstrumentsRepository $instrumentsRepository,Request $request,PaginatorInterface $paginator): Response

    {
        $instruments = $instrumentsRepository->findAll();
        $pagination = $paginator->paginate(
            $instrumentsRepository->paginationQuery(),
            $request->query->get('page',1),
            6
        );

        $qrCode=Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data("https://www.facebook.com/profile.php?id=100092318706242")
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size(300)
            ->margin(10)
            ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->labelText("page facebook")

            ->labelFont(new NotoSans(20))
            ->labelAlignment(new LabelAlignmentCenter())
            //->logoPath('public/uploads/fournisseur/nike-63fe736cba9d1.png')
            ->build();



        return $this->render('card.html.twig', ['pagination' =>  $pagination , 'qr'=>$qrCode->getDataUri()  ]);

    }
    #[Route('/detail/{idInstrument}', name: 'app_instrument_detail')]
    public function detail($idInstrument, InstrumentsRepository $instrumentsRepository): Response
    {
        $instrument = $instrumentsRepository->find($idInstrument);


        return $this->render('car.html.twig', [
            'instrument' => $instrument,


        ]);
    }





    #[Route('/instruments/search', name: 'searche')]
    public function search(Request $request, InstrumentsRepository $repository): Response
    {
        $query = $request->request->get('query');
        $c = $repository->search($query);
        return $this->render('instruments/index.html.twig', [
            'contrat' => $c
        ]);
    }






}