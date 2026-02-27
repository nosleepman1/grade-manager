<?php 
//recuperation de l'url
 $requestUri = $_SERVER['REQUEST_URI'];
 $scriptName = dirname($_SERVER['SCRIPT_NAME']);

 //netoyage de l'url

 $path = str_ireplace($scriptName,"", $requestUri);
 $path = trim($path,'/');
 $path = strtok($path,'?');

 //switcher 

 switch($path){
     case '':
     case 'home':
        break;
    case "":
         break;
    case "":
        break;
    default:
    http_response_code(404)
    ?>
            <!DOCTYPE html>
            <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>404 - Page non trouvée</title>

                <script src="https://cdn.tailwindcss.com"></script>
            </head>
            <body class="bg-gray-100 flex items-center justify-center h-screen">
                <div>
                    <h1 class="text-4xl font-bold text-gray-800">404 - Page non trouvée</h1>
                    <p class="text-gray-600 mt-2">La page que vous recherchez n'existe pas.</p>
                    <a href="/" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Retour à l'accueil
                    </a>
                </div>
            </body>
            </footer>
            </html>
    <?php
    break;


 }
