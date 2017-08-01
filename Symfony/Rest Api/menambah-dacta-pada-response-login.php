<?php
1. Create Folder EventListener pada bundle users anda.
2. Create File Pada Folder EventListener dengan nama file = AuthenticationSuccessListener.php
3. Tambahkan source code dibawah pada file tersebut
	<?php
	namespace UsersBundle\EventListener;

	use Symfony\Component\HttpFoundation\RequestStack;
	use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
	use Symfony\Component\Security\Core\User\UserInterface;
	class AuthenticationSuccessListener
	{
	    /**
	     * @param AuthenticationSuccessEvent $event
	     */
	    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
	    {
	        $data = $event->getData();
	        $user = $event->getUser();

	        if (!$user instanceof UserInterface) 
	        {
	            return;
	        }

	        // $data['token'] contains the JWT

	        $data['data'] = array('roles' => $user->getRoles(),'username'=>$user->getUsername());

	        $event->setData($data);
	    }
	}
4. Daftarkan Code Dibawah Ini pada file service anda.
    acme_api.event.authentication_success_listener:
        class: UsersBundle\EventListener\AuthenticationSuccessListener
        tags:
            - { name: kernel.event_listener, event: lexik_jwt_authentication.on_authentication_success, method: onAuthenticationSuccessResponse }