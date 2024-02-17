<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
       $form = $this->createForm(ContactType::class);
       $form->handleRequest($request);
       if ($form->isSubmitted() &&$form->isValid()) {
        $data = $form->getData();


        $nom = $data['nom'];
        $prenom = $data['prenom'];
        $teleportable = $data['teleportable'];
        $sujet = $data['sujet'];
        $address = $data['email'];
        $content = $data['content'];


        $email = (new Email())
        ->from($address)
        ->to('ramikhaddour@gmail.com')
        ->subject('Demande de contact!')
        ->text($content);
       
        $mailer->send($email);
       }

        return $this->renderForm('contact/contact.html.twig', [
            'controller_name' => 'ContactController',
            'form'=> $form
        ]);
    }
}
