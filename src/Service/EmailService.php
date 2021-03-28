<?php
namespace App\Service;

use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;


class EmailService
{
    private $mailer;
    private $params;

    public function __construct(MailerInterface $mailer, ParameterBagInterface $params)
    {
        $this->mailer = $mailer;
        $this->params = $params;
    }


    public function send(array $dataToSendEmail): void
    {
        $notificationEmail = $this->params->get('app.notification_email');
        $to = $dataToSendEmail['to'];
        $subject = $dataToSendEmail['subject'];
        $text = $dataToSendEmail['text'];
        $body = $dataToSendEmail['body'];

        $email = (new Email())
                ->from($notificationEmail)
                ->to($to)
                ->subject($subject)
                ->text($text)
                ->html($body);

        $this->mailer->send($email);
    }
}