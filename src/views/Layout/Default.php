<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- CDN -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- FAVICON -->
        <link rel="icon" type="image/x-icon" href="/public/icons/logo.svg">

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

        <!-- CSS --> 
        <?=$css?>
        
        <title><?= $title ?></title>
    </head>
    <body>

        <div class="root">
            <?= $view ?>
        </div>

            
        <?=$js?>
    </body>
    
    
</html>