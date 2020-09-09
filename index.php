<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contactez-moi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contactez-moi !</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-lg-offset-1">
                <form id="contact-form" method="post" action="" role="form"> 
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Prénom <span class="blue">*</span></label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Nom <span class="blue">*</span></label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email <span class="blue">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Téléphone</label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message <span class="blue">*</span></label>
                                <input type="text" id="message" name="message" class="form-control" placeholder="Votre message" value="">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <p class="blue"><strong>* Ces informations sont requises</strong> </p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="button1" value="Envoyer">
                            </div>
                        </div>
                </form> 
                </div>
            </div>
        </div>
        
    </body>
</html>