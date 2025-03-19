<!DOCTYPE html>
<html lang="fr">
    <head>
	    <title>Groupe 11 - Parc d'attraction</title>
	    <meta charset="UTF-8">
        <link href="assets/css/style.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
        <script src="assets/js/script.js"></script>
        <meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
		<link rel="stylesheet" href="https://static.tumblr.com/svdghan/wUSr83npl/tempcf.css">
    </head>
    <body>
        <!-- HEADER -->
        <?php include_once('includes/header.html'); ?>
        <!-- ACTUALITÉS -->
        <section id="actualites">
            <div class="section-title">
                <h2>En ce moment à Disneyland Paris</h2>
                <a href="" class="btn btn-outline" data="Voir toutes les actualités" title="Voir toutes les actualités"><i class='cp cp-megaphone-o'></i></a>
            </div>
            <div class="actualites">
                <div class="actualite">
                    <div class="card-content">
                        <h3>Prolongez la magie avec un séjour Hôtel + Billets !</h3>
                        <a href="#" title="Lire la suite"><i class="fa-solid fa-arrow-right"></i><span>Lire la suite</span></a>
                    </div>
                    <img src="assets/images/actualites/actu-1.jpg" alt="Château de Disneyland">
                </div>
                <div class="actualite">
                    <div class="card-content">
                        <h3>Billets au meilleur prix de l’année</h3>
                        <a href="#" title="Lire la suite"><i class="fa-solid fa-arrow-right"></i><span>Lire la suite</span></a>
                    </div>
                    <img src="assets/images/actualites/actu-2.jpg" alt="Attraction Mickey Mouse">
                </div>
                <div class="actualite">
                    <div class="card-content">
                        <h3>Rejoignez l'univers MARVEL</h3>
                        <a href="#" title="Lire la suite"><i class="fa-solid fa-arrow-right"></i><span>Lire la suite</span></a>
                    </div>
                    <img src="assets/images/actualites/actu-3.jpg" alt="Marvel Avengers Campus">
                </div>
            </div>
        </section>
        <!-- FORMULES -->
        <section id="formules">
            <div class="section-title">
                <h2>Nos formules</h2>
                <p>Adaptées à toutes vos envies</p>
                <a href="" class="btn btn-outline" data="Toutes nos offres" title="Toutes nos offres"><i class='bx bx-right-arrow-alt'></i></a>
            </div>
            <div class="formule">
                <div>
                    <p><i class="cp cp-avengers"></i>Accéder<br>à nos parcs</p>
                    <h3>Billets parcs</h3>
                    <ul>
                        <li><i class='bx bxs-coupon'></i>Daté 1 à 4 jours</li>
                        <li><i class='bx bxs-coupon'></i>Liberté 1 jour</li>
                        <li><i class='bx bxs-coupon'></i>Daté 1 jour avec navette</li>
                    </ul>
                </div>
                <a href="#" title="En savoir plus">
                    En savoir plus
                    <div class="wrapper">
                        <div class="arc arc_start"></div>    
                        <div class="arc arc_end"></div>
                    </div>
                    <i class="cp cp-arrow-right"></i>
                </a>            
            </div>
            <div class="formule">
                <div>
                    <p><i class="cp cp-diamond-o"></i>Livrés chez vous ou à imprimer</p>
                    <h3>Pass annuels</h3>
                    <ul>
                        <li><i class='bx bxs-coupon'></i>Discovery</li>
                        <li><i class='bx bxs-coupon'></i>Magix Flex</li>
                        <li><i class='bx bxs-coupon'></i>Magic Plus</li>
                        <li><i class='bx bxs-coupon'></i>Infinity</li>
                    </ul>
                </div>
                <a href="#" title="En savoir plus">
                    En savoir plus
                    <div class="wrapper">
                        <div class="arc arc_start"></div>    
                        <div class="arc arc_end"></div>
                    </div>
                    <i class="cp cp-arrow-right"></i>
                </a>            
            </div>
            <div class="formule">
                <div>
                    <p><i class="cp cp-constellation"></i><span>Nos évènements<br>spéciaux</span></p>
                    <h3>Expériences</h3>
                    <ul>
                        <li><i class='bx bxs-coupon'></i>Accès garanti - Le Roi Lion</li>
                        <li><i class='bx bxs-coupon'></i>Disneyland Paris pride</li>
                    </ul>
                </div>
                <a href="#" title="En savoir plus">
                    En savoir plus
                    <div class="wrapper">
                        <div class="arc arc_start"></div>    
                        <div class="arc arc_end"></div>
                    </div>
                    <i class="cp cp-arrow-right"></i>
                </a>
            </div>
        </section>
        <!-- ATTRACTION A LA UNE -->
        <?php include_once('includes/attraction.html'); ?>
        <!-- HEBERGEMENTS -->
        <section id="hotels">
            <?php include_once('includes/hebergement.php'); ?>
            <div class="section-title">
                <h2>Prolongez la magie jusque dans vos rêves</h2>
                <a href="#" class="btn btn-outline" data="Voir tous les hôtels" title="Voir tous les hôtels"><i class='bx bx-hotel'></i></a>
            </div>
            <div class="hotels">
                <?php foreach ($hotel as $key => $value) { ?>
                    <div class="hotel">
                        <img src="<?php echo $hotel[$key]['image']; ?>" alt="<?php echo $hotel[$key]['titre']; ?>">
                        <h3><?php echo $hotel[$key]['titre']; ?></h3>
                        <div class="hotel-content">
                            <p><?php echo $hotel[$key]['texte']; ?></p>
                            <div class="hotel-content-bottom">
                                <div class="hotel-reference">
                                    <p><i class="fa-solid fa-people-arrows"></i><?php echo $hotel[$key]['distance']; ?></p>
                                    <p><i class="fa-solid fa-credit-card"></i><?php echo $hotel[$key]['prix']; ?></p>
                                </div>
                                <a href="<?php echo $hotel[$key]['lien']; ?>" title="Découvrir <?php echo $hotel[$key]['titre']; ?>" class="btn btn-outline" data="Découvrir l'hôtel"></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <!-- ACCÈS AU PARC -->
        <section id="acces">
            <div class="section-title">
                <h2>Hâte de venir ?</h2>
                <p>Quelques informations importantes avant votre visite</p>
            </div>
            <div class="acces">
                <h3><a href="#" title="Plan du parc">Plan du parc<i class="cp cp-chevron-right"></i></a></h3>
                <h3><a href="#" title="Consignes sanitaires">Consignes sanitaires<i class="cp cp-chevron-right"></i></a></h3>
                <h3><a href="#" title="Venir au parc">Venir au parc<i class="cp cp-chevron-right"></i></a></h3>
            </div>
        </section>
        <!-- CARTE -->
        <section id="map">
            <iframe title="Carte Disneyland Paris" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2624.2563870724566!2d2.7747012659274226!3d48.87238875842249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x47e61d258669d87f%3A0x50bced61a25e17e5!2sDisneyland%20Paris%2C%20Bd%20de%20Parc%2C%2077700%20Chessy!3m2!1d48.8726005!2d2.776763!5e0!3m2!1sfr!2sfr!4v1674598186644!5m2!1sfr!2sfr"></iframe>
            <h2><i class="fa-solid fa-location-dot"></i>Explorez<br>Disneyland Paris</h2>
        </section>
        <!-- FOOTER -->
        <?php include_once('includes/footer.html'); ?>
    </body>
</html>
