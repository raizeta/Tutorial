<?php
1. Create File Pada Folder EventListener dengan nama file = AuthenticationFailureListener.php
2. Tambahkan kode di bawah ini pada file tersebut
	<?php
	namespace UsersBundle\EventListener;

	use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationFailureEvent;
	use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationFailureResponse;
	class AuthenticationFailureListener
	{

	    public function onAuthenticationFailureResponse(AuthenticationFailureEvent $event)
	    {
	        $data = [
	        	'status'  => '401 Unauthorized',
	            'message' => 'Bad credentials, please verify that your username/password are correctly set',
	        ];

	        $response = new JWTAuthenticationFailureResponse($data);

	        $event->setResponse($response);
	    }
	}
3. Daftarkan kode di bawah ini pada service anda.
	acme_api.event.authentication_failure_listener:
        class: UsersBundle\EventListener\AuthenticationFailureListener
        tags:
            - { name: kernel.event_listener, event: lexik_jwt_authentication.on_authentication_failure, method: onAuthenticationFailureResponse }