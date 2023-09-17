# Symfony Lessons #

(Tutorial : https://dyma.fr/developer/list/chapters/core/60ea04ef7fc35f0f15b5537e/lesson/symfony/60ea05b87fc35f0f15b55383/2/1 )

Documentation Tutorial :  
https://symfonycasts.com/screencast/symfony/route-controller#play

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
``` symfony console ```  
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

### Twig ###

Twig tags, filters, functions, tests : https://twig.symfony.com/doc/3.x/


