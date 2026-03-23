<?php

namespace App\EventSubscriber;

use App\Entity\LoginTrace;
use App\Entity\Membre;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Event\LoginFailureEvent;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;

class LoginTraceSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LoginSuccessEvent::class => 'onLoginSuccess',
            LoginFailureEvent::class => 'onLoginFailure',
        ];
    }

    public function onLoginSuccess(LoginSuccessEvent $event): void
    {
        $this->logLogin($event, true);
    }

    public function onLoginFailure(LoginFailureEvent $event): void
    {
        $this->logLogin($event, false);
    }

    private function logLogin(LoginSuccessEvent|LoginFailureEvent $event, bool $success): void
    {
        try {
            $request = $event->getRequest();
            $passport = $event->getPassport();

            $user = null;
            if ($passport->hasBadge(UserBadge::class)) {
                $userBadge = $passport->getBadge(UserBadge::class);
                $user = $userBadge->getUser();
            }

            if (!$user instanceof Membre) {
                return;
            }

            $loginTrace = new LoginTrace();
            $loginTrace->setMembre($user);
            $loginTrace->setDateConnexion(new \DateTime());
            $loginTrace->setAdresseIP($request->getClientIp() ?? 'unknown');
            $loginTrace->setSucces($success);

            $this->entityManager->persist($loginTrace);
            $this->entityManager->flush();
        } catch (\Exception $e) {
            // Log error but don't break authentication
        }
    }
}
