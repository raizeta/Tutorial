<?php
1. php app/console doctrine:mapping:import AppBlogBundle annotation --filter=Post 
2. php app/console doctrine:generate:entities AppBlogBundle  #for All Entity In Blog Bundle
3. php app/console doctrine:generate:entities AppBlogBundle/Entity/Post #ForSingleEntity -Post

4.php app/console generate:doctrine:form AppBlogBundle:Post
4.php app/console generate:doctrine:crud AppBlogBundle:Post