 <?php
    /*Con un form passare come parametri GET name, mail e age e verificare 
    (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
    che mail contenga un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" */

    ?>

 <!DOCTYPE html>
 <html lang="it">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Snack</title>
     <!--Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 </head>

 <body>
     <div class="container" action="index.php" method="get">
         <form class="row g-3 needs-validation" novalidate>
             <div class="col-md-4">
                 <label for="firstName" class="form-label">First name</label>
                 <input type="text" class="form-control" id="firstName" name="FirstName" required>
                 <div class="valid-feedback">
                     Looks good!
                 </div>
                 <div class="mb-3">
                     <label for="email" class="form-label">Email address</label>
                     <input type="email" class="form-control" id="email" name="Email" placeholder="name@example.com" required>
                 </div>
                 <div class="mb-3">
                     <label for="age" class="form-label">Age</label>
                     <input type="number" class="form-control" id="age" name="Age" required>
                 </div>
             </div>
             <div class="col-12">
                 <button class="btn btn-primary" type="submit">Submit</button>
                 <button class="btn btn-primary btn-warning" type="reset">Reset</button>
             </div>
         </form>

     </div>

 </body>

 </html>