<?php
namespace App\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Contracts\Translation\TranslatorInterface;
use App\Service\EmailService;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Loan;

/** @Route("/notification", name="notification_") */
class NotificationController extends AbstractController
{
    private $translator;
    private $emailService;

    public function __construct(TranslatorInterface $translator, EmailService $emailService)
    {
        $this->translator = $translator;
        $this->emailService = $emailService;
    }

 	public function bookNotAvailable(string $bookTitle): void
 	{
        $subject = $this->translator->trans('notification.book_not_available_email.subject');
        $text = $this->translator->trans('notification.book_not_available_email.text');
        $body = $text . ': ' . $bookTitle;


        $dataToSendEmail = [ 'to' => $this->getParameter('app.admin_email'),
                             'subject' => $subject,
                             'text' => $text,
                             'body' => $body ];
              
        $this->emailService->send($dataToSendEmail);
 	}


 	public function bookSuccessfullyReserved(string $bookTitle, string $to, string $lang): void
 	{
        $subject = $this->translator->trans('notification.' . strtolower($lang) . '.success_reserve');
        $text = $subject;
        $body = $subject . ': ' . $bookTitle;

        $dataToSendEmail = [ 'to' => $to,
                             'subject' => $subject,
                             'text' => $text,
                             'body' => $body ];
                
        $this->emailService->send($dataToSendEmail);
 	}


    /**
     * @Route("/remember-reservation", name="remember_reservation")
     */
    public function rememberReservation( ): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $result = $entityManager->getRepository(Loan::class)->findAllReserved();

        if(!empty($result))
        {           
            $today = date("Y-m-d"); 
      
            foreach ($result as $key => $row)
            {
                if(strtotime($row['date_end'])==strtotime($today .'+7 day'))
                {
                    $lang = strtolower($row['language']);
                    
                    $subject = $this->translator->trans('notificacion.'. $lang .'.remember_reservation_subject');
                    $text = $subject;
                    $body = $this->translator->trans('notificacion.'. $lang .'.remember_reservation_body', 
                            [ 'book' => $row['title_book'],
                              'date_end' => date( "d/m/Y", strtotime($row['date_end']) )
                            ]);

                    $dataToSendEmail = [ 'to' => $row['email'],
                                         'subject' => $subject,
                                         'text' => $subject,
                                         'body' => $body ];
                            
                    $this->emailService->send($dataToSendEmail);
                }    
            }
        }

        return new Response();    
    }
}