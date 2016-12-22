<?php
namespace AppBundle;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\UserEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Listener responsible to change the redirection at the end of the password resetting
 */
class RegistrationConfirmListener  implements EventSubscriberInterface
{
    private $ruta;

    public function __construct(UrlGeneratorInterface $ruta)
    {
        $this->ruta = $ruta;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
                FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess'
    );
}
 
public function onRegistrationSuccess(\FOS\UserBundle\Event\FormEvent $event)
{
    $url = $this->ruta->generate('user_show');
    $event->setResponse(new RedirectResponse($url));
}
}