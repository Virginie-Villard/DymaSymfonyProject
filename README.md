# Symfony Lessons #

(Tutorial : https://dyma.fr/developer/list/chapters/core/60ea04ef7fc35f0f15b5537e/lesson/symfony/60ea05b87fc35f0f15b55383/2/1 )

Documentation Tutorial :  
https://symfonycasts.com/screencast/symfony/route-controller#play

Documentation :  
https://symfony.com/doc/current/index.html

## Commands ##

### Install ###
``` https://symfony.com/doc/current/setup.html ```

Install PHP 8.1 or higher  
Install Composer : ``` https://getcomposer.org/download/ ```  
Install Symfony CLI : ``` https://symfony.com/download ```  
``` brew install symfony-cli/tap/symfony-cli ```  

Check if it's all good : ``` symfony check:requirements ```  
Create a new project

### Start server ### 
``` symfony serve ```  
or  
``` symfony serve -d ```

### Tools ###
#### debug & more... ####
##### list of commands #####
``` symfony console ```  
or  
``` php bin/console ```  
or  
``` ./bin/console ``` 
##### debug #####
``` php bin/console debug:router ```  
example : public/captures/Screenshot 2023-09-18 at 14.21.46.png

Check the route :  
``` php bin/console router:match /api/songs/11 ```  
example : public/captures/Screenshot 2023-09-18 at 15.16.28.png
and  
``` php bin/console router:match /api/songs/11 --method=POST ```
example : public/captures/Screenshot 2023-09-18 at 15.19.02.png

##### recipes #####
``` symfony list ```  
``` composer recipes ``` shows the symfony/flex recipes.  
``` composer recipes simfony/twig-bundle ```  

#### Template plugin ####
It's a pack of 3 plugin.
``` composer require templates ```  
or  
``` composer require symfony/twig-pack ```

#### Debug plugin ####
Add debug bar :
``` composer require debug ``` is a flex alias of :
``` symfony/debug-pack ```

#### Mark directory as resource ####
right click on directory, mark directory as, resource root

#### Add asset function ####
``` composer require symfony/asset ```  
help to prefix URL with the path and help il I use a CDN later.

### Twig ###

Twig tags, filters, functions, tests : https://twig.symfony.com/doc/3.x/


### Services ###
= An object that does work (Twig, Logger, Database Connection, Cache, API requests, Router.....)
Like templating object that renders a template or a database connection that makes queries

#### Logger service ####
``` php bin/console debug:autowiring ```
To see the logs : 
in the config/packages/monolog.yaml file  
or  
click to go to the homepage and click on debug bar and then "Logs"  
or  
http://localhost:8000/_profiler (careful of the "_") shows the last ten requests of our system.  
click the token link.  

```  php bin/console debug:autowiring log ```
example : public/captures/Screenshot 2023-09-18 at 17.00.54.png

use the commit "776765eb", "Update VinylController.php to not use shortcut render but to render the template via the twig service"  
if I need to render a template but I'm not in a controller. 

#### Webpack Encore (use Node in a Symfony app) ####
Documentation : https://symfony.com/doc/current/frontend.html#webpack-encore
Free tutorial : https://symfonycasts.com/screencast/webpack-encore




