<?php
https://codereviewvideos.com/course/symfony-3-with-reactjs-and-angular/video/simple-symfony-3-restful-api-setup
1. Add FosRestBundle
	composer require friendsofsymfony/rest-bundle
2. Enable The Bundle,Add This Code Below To AppKernel.php
	new FOS\RestBundle\FOSRestBundle(),
3. Add JMSSerializerBundle
	composer require jms/serializer-bundle
4. Enable The Bundle,Add This Code Below To AppKernel.php
	new JMS\SerializerBundle\JMSSerializerBundle(),
5. Enable Serializer, Add This Code To Your config.yml
	framework:
		...
	    serializer:
	        enabled: true
	        enable_annotations: true
	        cache: serializer.mapping.cache.apc
6. Setting Your FoSRestBundle, Add This Code To Your config.yml
	fos_rest:
	    routing_loader:
	        default_format: json
	    param_fetcher_listener: true
	    body_listener: true
	    format_listener: true
	    disable_csrf_role: IS_AUTHENTICATED_ANONYMOUSLY
	    body_converter:
	        enabled: true
	    view:
	        view_response_listener: true
	        formats:
	            json: true
	            xml:  true
	        empty_content: 204
	        templating_formats:
	            html: true
	        force_redirects:
	            html: true
	        failed_validation: HTTP_BAD_REQUEST
	        default_engine: twig
	    routing_loader:
	        default_format: json

	    format_listener:
	        rules:
	            - { path: '^/', priorities: ['json','xml'], fallback_format: json, prefer_extension: true }

7. Generate New Bundle, Give The Name ApiBundle
9. Delete Routing From Your config.yml which is come from Your New Bundle
10. Add This Code To Your routing.yml
	api:
	    type: rest
	    resource: "routing_api.yml"
	    prefix: api
10. Create a new file under config folder, and give the name of this file:routing_api.yml
	->YourRootProject/app/config/routing_api.yml

//How To Paginating Your Api
11. Add Bazinga Hetoas Bundle For Pagination
	composer require willdurand/hateoas-bundle
12. Enable The Bundle, Add This Code Below To AppKernel.php
	new Bazinga\Bundle\HateoasBundle\BazingaHateoasBundle(),
13. Add This Code You Each Controller Do You Want To Paginate
	use Hateoas\Representation\CollectionRepresentation;
	use Hateoas\Representation\PaginatedRepresentation;
14. Code Below To Paginate
	public function cgetAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->getRepository('EntityBundle:Product')->findAll();
        $limit = $request->query->get('limit',2000);
        $page = $request->query->get('page',1);
        $offset = ($page - 1) * $limit;
        $numberOfPages = (int) ceil(count($query) / $limit);
        $collection = new CollectionRepresentation(array_slice($query, $offset, $limit));
        $paginated = new PaginatedRepresentation($collection,'cget_products',array(),$page,$limit,$numberOfPages);

        // return new JsonResponse(array('Indonesia'=>$query));
        return View::create(['Products'=>$paginated],Response::HTTP_OK);
    }

//How TO Authentifikasi Using JWT
15. Add JWTAuthenticationBundle
	composer require "lexik/jwt-authentication-bundle"
16. Enable The Bundle, Add This Code Below To AppKernel.php
	new Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle(),
17. Under app folder in your route,create folder var/jwt
	->root_project/app/var/jwt
18. From Console checkin to jwt folder
19. Copy And Paster Code Below To Your Console
	openssl genrsa -out private.pem -aes256 4096
20. Copy And Paster Code Below To Your Console
	openssl rsa -pubout -in private.pem -out public.pem
21. Add Code Below To Your routing.yml
	api_login_check:
    	path: /api/login_check
22. Add Code Below To Your security.yml
	firewalls:
        ....
        login:
            pattern:  ^/api/login
            stateless: true
            anonymous: true
            form_login:
                check_path:               /api/login_check
                username_parameter: username
                password_parameter: password
                success_handler:          lexik_jwt_authentication.handler.authentication_success
                failure_handler:          lexik_jwt_authentication.handler.authentication_failure
                require_previous_session: false

        api:
            pattern:   ^/api
            stateless: true
            anonymous: false
            lexik_jwt:
                authorization_header: # check token in Authorization Header
                    enabled: true
                    prefix:  Bearer
                    # name:    Authorization #Comment By Radumta Sitepu
                cookie:               # check token in a cookie
                    enabled: true
                    name:    PHPSSID
                query_parameter:      # check token in query string parameter
                    enabled: true #default False
                    name:    token
                throw_exceptions:        true     # When an authentication failure occurs, return a 401 response immediately
                create_entry_point:      true      # When no authentication details are provided, create a default entry point that returns a 401 response
                authentication_provider: lexik_jwt_authentication.security.authentication.provider
                authentication_listener: lexik_jwt_authentication.security.authentication.listener

23. Add Code Below To Your config.yml
		lexik_jwt_authentication:
	    private_key_path:    %kernel.root_dir%/var/jwt/private.pem   # ssh private key path
	    public_key_path:     %kernel.root_dir%/var/jwt/public.pem    # ssh public key path
	    pass_phrase:         radumta      # ssh key pass phrase you input to console when generate private.pem
	    token_ttl:           86400                                   # token ttl - defaults to 86400
	    # encoder_service:     lexik_jwt_authentication.jwt_encoder    # token encoder / decoder service - defaults to the jwt encoder (based on the namshi/jose library)
	    user_identity_field: username