<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css">
    <link rel="stylesheet" href="/style/style.css">
    <meta name="description" content="Grégory Néault Portofolio - Développeur web Full Stack">
    <meta name="author" content="Grégory Néault">
    <meta name="Keywords"
        content="portfolio, gneault, Referencement web, Gregory NEAULT, Developpeur web, Node.JS , MERN, MEAN, SEO, Développeur JavaScript, Mobile, Android, Informatique">
    <meta name="Robots" content="all">
    <title>Portfolio Développeur web - Grégory NEAULT</title>
</head>

<body>
    <header>
        <a href="#" class="logo">G.Néault</a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="menu">
            <li><a class="nav-link-home" href="#home" onclick="toggleMenu();">Accueil</a></li>
            <li><a class="nav-link-work" href="#work" onclick="toggleMenu();">Réalisations</a></li>
            <li><a class="nav-link-about" href="#about" onclick="toggleMenu();">A propos</a></li>
            <li><a class="nav-link-services" href="#services" onclick="toggleMenu();">Services</a></li>
            <li><a class="nav-link-contact" href="#contact" onclick="toggleMenu();">Contact</a></li>
            <div class="flag-container">
                <button class='change-language-btn-EN' onclick="toggleMenu()"><img
                        src="./assets/Flag/En-flag.png"></img></button>
                <button class='change-language-btn-FR' onclick="toggleMenu()"><img
                        src="assets/Flag/Fr-flag.png"></img></button>
            </div>
        </ul>
    </header>
    <section class="banner" id="home">
        <div class="full-stack"> <span>Full</span> <span>Stack</span> </div>
        <div class="textBx">
            <h2 class="bonjour">Bonjour, Je suis<br><span class="name-surname">Grégory Néault.</span></h2>
            <h1 class="Developeur">Je suis Développeur Web</h1>
            <div class="skillBx waviy">
                <span style="--i:1"><i class="devicon-html5-plain-wordmark colored"></i></span>
                <span style="--i:2"><i class="devicon-css3-plain-wordmark colored"></i></span>
                <span style="--i:3"><i class="devicon-sass-original colored"></i></span>
                <span style="--i:4"><i class="devicon-javascript-plain colored"></i></span>
                <span style="--i:5"><i class="devicon-nodejs-plain colored"></i></span>
                <span style="--i:6"> <i class="devicon-react-original colored"></i></span>
                <span style="--i:7"> <i class="devicon-angularjs-plain"></i></span>
                <span style="--i:8"> <i class="devicon-mongodb-plain colored"></i></span>
            </div>
            <a href="#about" class="btn" id="about-me-btn">A propos de moi</a>
            <a href="Data/cv GN.pdf" class="btn" id="download-resume-btn" download="Mon cv">Mon CV</a>
        </div>
    </section>

    <section class="work" id="work">
        <div class="heading">
            <h2 class="work-title">Mes dernières réalisations</h2>
        </div>
        <div class="content">

            <div class=" workBx workBx0" data-modal-target="#modal-GNShop">
                <h1>GN Shop</h1>
            </div>
            <div class="modal" id="modal-GNShop">
                <div class="modal-header">
                    <div class="title">GN Shop <i class="devicon-react-original"></i><i class="devicon-javascript-plain"></i></div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="modal-body-texte-GNShop">Un site e-commerce creer avec <strong> React et commerce.js</strong>! <br> Vendez et achetez vos produits partout dans le monde en quelques clics</p>
                    <div class="carousel" data-carousel>
                        <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                        <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                        <ul data-slides>
                            <li class="slide" data-active>
                                <img src="./assets/ProjectScreen/GnShop/gnshop1.png" alt="Nature Image #1">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/GnShop/gnshop2.png" alt="Nature Image #2">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/GnShop/gnshop3.png" alt="Nature Image #3">
                            </li>
                        </ul>
                    </div>
                    <a href="https://neo-shop.netlify.app/" target="_blank" class="btn btn-project-link-GNshop">Consulter le site</a>
                </div>
            </div>

            <div class=" workBx workBx1" data-modal-target="#modal-LazyBeast">
                <h1>Lazy Beast Network</h1>
            </div>
            <div class="modal" id="modal-LazyBeast">
                <div class="modal-header">
                    <div class="title">lazybeast <i class="devicon-nodejs-plain"></i> <i class="devicon-express-original"></i> <i class="devicon-react-original"></i> <i class="devicon-mongodb-plain"></i></div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="modal-body-texte-LazyBeast">Un réseau social créé avec<strong> Node js, React, express et
                            MongoDB</strong>! <br> Partager vos
                        humeur, photos, video et lien avec vos followers</p>
                    <div class="carousel" data-carousel>
                        <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                        <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                        <ul data-slides>
                            <li class="slide" data-active>
                                <img src="./assets/ProjectScreen/LazyBeast/lazyBeast1.png" alt="Nature Image #1">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/LazyBeast/lazyBeast2.png" alt="Nature Image #2">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/LazyBeast/lazyBeast3.png" alt="Nature Image #3">
                            </li>
                        </ul>
                    </div>
                    <a href="https://lazybeastnetwork.netlify.app/" target="_blank" class="btn btn-project-link-LazyBeast">Consulter le site</a>
                </div>
            </div>



            <div class="workBx workBx2" data-modal-target="#modal-cineApp">
                <h1>CineFiles</h1>
            </div>
            <div class="modal" id="modal-cineApp">
                <div class="modal-header">
                    <div class="title">Cinephile <i class="devicon-react-original"></i></div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="modal-body-texte-cineApp">Une application web  créeé avec<strong> React et l'API TMDB </strong>! <br> Recherchez des films part mot clés et creer une liste de vos coup de coeur a regarder</p>
                    <div class="carousel" data-carousel>
                        <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                        <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                        <ul data-slides>
                            <li class="slide" data-active>
                                <img src="./assets/ProjectScreen/CineApps/cineApps1.png" alt="Nature Image #1">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/CineApps/CineApps2.jpg" alt="Nature Image #2">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/CineApps/CineApps3.jpg" alt="Nature Image #3">
                            </li>
                        </ul>
                    </div>
                    <a href="https://cineappgneo.herokuapp.com/"  target="_blank" class="btn btn-project-link-CineApp" id="btn-project-link">Consulter le site</a>
                </div>
            </div>



            <div class="workBx workBx3" data-modal-target="#modal-bookApp">
                <h1>FreeBrary</h1>
            </div>
            <div class="modal" id="modal-bookApp">
                <div class="modal-header">
                    <div class="title">FreeBrary <i class="devicon-nodejs-plain"></i> <i class="devicon-express-original"></i><i class="devicon-mongodb-plain"></i></div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="modal-body-texte-bookApp">Une application web créé avec<strong> Node js, express et MongoDB et Ejs</strong>! <br> Créez votre librairie et triez vos livres facilement</p>
                    <div class="carousel" data-carousel>
                        <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                        <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                        <ul data-slides>
                            <li class="slide" data-active>
                                <img src="./assets/ProjectScreen/BooksApp/bookapps1.png" target="_blank"
                                    alt="Nature Image #1">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/BooksApp/bookapps2.png" target="_blank"
                                    alt="Nature Image #2">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/BooksApp/bookapps3.png" target="_blank"
                                    alt="Nature Image #3">
                            </li>
                        </ul>
                    </div>
                    <a href="https://zebooksapp.herokuapp.com/"  target="_blank" class="btn btn-project-link-BookApp" id="btn-project-link">Consulter le
                        site</a>
                </div>
            </div>



            <div class="workBx workBx4 hide" data-modal-target="#modal-Flag">
                <h1>WorldFlag</h1>
            </div>
            <div class="modal" id="modal-Flag">
                <div class="modal-header">
                    <div class="title">WorldFlag <i class="devicon-react-original"></i></div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="modal-body-texte-flagApp">Une application web créeé avec<strong> React et l'API Rest Countries </strong>! <br> Decouvrez les drapeau de chaque pays grace a cette application dynamique </p>
                    <div class="carousel" data-carousel>
                        <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                        <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                        <ul data-slides>
                            <li class="slide" data-active>
                                <img src="./assets/ProjectScreen/Flag Apps/flag1.png" alt="Nature Image #1">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/Flag Apps/flag2.png"  alt="Nature Image #2">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/Flag Apps/flag3.png" alt="Nature Image #3">
                            </li>
                        </ul>
                    </div>
                    <a href="https://flagappgneo.herokuapp.com/" target="_blank" class="btn btn-project-link-FlagApp" id="btn-project-link">Consulter le site</a>
                </div>
            </div>



            <div class="workBx workBx5 hide" data-modal-target="#modal-FaceRecognition">
                <h1>Face Recognition</h1>
            </div>
            <div class="modal" id="modal-FaceRecognition">
                <div class="modal-header">
                    <div class="title">Face Recognition<i class="devicon-javascript-plain"></i></div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="modal-body-texte-flagApp">Une application web crée avec <strong> Javascript </strong>! <br>Activer votre camera pour laisser l'inteligence artificiel detecter votre visage et votre humeur!</p>
                    <div class="carousel" data-carousel>
                    <!--     <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                        <button class="carousel-button next" data-carousel-button="next">&#8658;</button> -->
                        <ul data-slides>
                            <li class="slide" data-active>
                                <img src="./assets/ProjectScreen/face/face1.png" alt="Nature Image #1">
                            </li>
                          
                        </ul>
                    </div>
                    <a href="https://www.gregoryneault.fr/faceDetection/" target="_blank" class="btn btn-project-link-FaceDetection" id="btn-project-link">Consulter le site</a>
                </div>
            </div>



            <div class="workBx workBx6 hide" data-modal-target="#modal-piano">
                <h1>Piano Script</h1>
            </div>
            <div class="modal" id="modal-piano">
                <div class="modal-header">
                    <div class="title">Piano Script <i class="devicon-javascript-plain"></i></div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="modal-body-texte-flagApp">Un piano entierement creer avec <strong> Javascript </strong>! <br> Chi va piano va sano e va lontano.
                        </p>
                    <div class="carousel" data-carousel>
                        <!-- <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                        <button class="carousel-button next" data-carousel-button="next">&#8658;</button> -->
                        <ul data-slides>
                            <li class="slide" data-active>
                                <img src="./assets/ProjectScreen/piano/piano.png" alt="Nature Image #1">
                            </li>
                          
                        </ul>
                    </div>
                    <a href="https://www.gregoryneault.fr/piano/" target="_blank" class="btn btn-project-link-Piano" id="btn-project-link">Consulter le site</a>
                </div>
            </div>

            

            <div id="workBx7"  class="workBx workBx7 hide" data-modal-target="#modal-badCitizen">
                <h1>Bad Citizen</h1>
            </div>
            <div class="modal" id="modal-badCitizen">
                <div class="modal-header">
                    <div class="title">Bad Citizen <i class="devicon-javascript-plain"></i></div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="modal-body-texte-flagApp">Un petit jeux creeer avec <strong> Javascript </strong>! <br> Affronter des enemis,gerer vos point de vie pour aller le plus loin possible !!</p>
                    <div class="carousel" data-carousel>
                        <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                        <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                        <ul data-slides>
                            <li class="slide" data-active>
                                <img src="./assets/ProjectScreen/badcitizen/badcitizen1.png" alt="Nature Image #1">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/badcitizen/badcitizen2.png" alt="Nature Image #2">
                            </li>
                            
                        </ul>
                    </div>
                    <a href="https://www.gregoryneault.fr/asmallgame/" target="_blank" class="btn btn-project-link-BadCitizen" id="btn-project-link">Consulter le site</a>
                </div>
            </div>



            <div id="workBx8" class="workBx workBx8 hide" data-modal-target="#modal-tictac">
                <h1>Tic Tac Toe</h1>
            </div>
            <div class="modal" id="modal-tictac">
                <div class="modal-header">
                    <div class="title">Tic Tac Toe <i class="devicon-javascript-plain"></i></div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="modal-body-texte-tictac">Un simple jeu du morpion creer avec <strong> Html Css et Javascript  </strong>! <br> jouer avec un partenaire au celebre jeux du morpion, qui sera le grand gagnant ? </p>
                    <div class="carousel" data-carousel>
                        <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                        <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                        <ul data-slides>
                            <li class="slide" data-active>
                                <img src="./assets/ProjectScreen/TicTac/tictac1.png" alt="Nature Image #1">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/TicTac/tictac2.png" alt="Nature Image #2">
                            </li>
                          
                        </ul>
                    </div>
                    <a href="https://www.gregoryneault.fr/TicTacToe/" target="_blank" class="btn btn-project-link-TicTacToe" id="btn-project-link">Consulter le site</a>
                </div>
            </div>

            <div id="workBx9"  class="workBx workBx9 hide" data-modal-target="#modal-orleans">
                <h1>Orléans</h1>
            </div>
            <div class="modal" id="modal-orleans">
                <div class="modal-header">
                    <div class="title">Orléans <i class="devicon-javascript-plain"></i><i class="devicon-bootstrap-plain"></i></div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="modal-body-texte-orleans">Proposition de site vitrine créer avec <strong> html, CSS, BootStrap et Javascript </strong>! <br> pour la ville d'Orléans</p>
                    <div class="carousel" data-carousel>
                        <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                        <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                        <ul data-slides>
                            <li class="slide" data-active>
                                <img src="./assets/ProjectScreen/Orleans/orleans1.png" alt="Nature Image #1">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/Orleans/orleans2.png" alt="Nature Image #2">
                            </li>
                            <li class="slide">
                                <img src="./assets/ProjectScreen/Orleans/orleans3.png" alt="Nature Image #2">
                            </li>
                            
                        </ul>
                    </div>
                    <a href="https://www.gregoryneault.fr/Orleans/" target="_blank" class="btn btn-project-link-Orleans" id="btn-project-link">Consulter le site</a>
                </div>
            </div>


        </div>

        </div>




        <div class="heading">
            <button class="btn see-more">En voir plus</button>
        </div>
    </section>
    <section class="about" id="about">
        <div class="heading white">
            <h2 class="title-about-me">A propos de moi</h2>
        </div>
        <div class="content">
            <div class="contentBx">
                <p class="text-about-me">Fraîchement diplômé de la certification professionelle de développeur web et web mobile full stack et specialisé en Javascript et ses frameworks, je recherche un poste de développeur.
                    <br><br>J'ai une bonne maîtrise des langages html, css, sass, et des frameworks React et Angular côté Front-End.
                    Coté Back-End je maitrise NodeJS et ses composants, et suis capable de créer un projet complet avec les stacks MERN/MEAN.
                    je connais les bonnes pratiques de développement et de recherches de solution.<br>Autonome de
                    nature, je peux travailler seul ou en
                    groupe, étant également capable de m’adapter à un environnement que je ne connais pas.
                    <br><br>Je sais faire preuve de force de proposition lorsque l’on m’en donne la liberté, cherchant
                    toujours à améliorer et optimiser les projets au maximum pour satisfaire au mieux la demande du
                    client. De plus je ne manquerais pas
                    d’apporter mon sérieux et ma bonne humeur avec moi.
                </p>
            </div>
            <div class="w50"> 
                
                <div class="bar front expert" data-skill="HTML5"></div>
                <div class="bar front expert" data-skill="CSS3"></div>
                <div class="bar front expert" data-skill="JAVASCRIPT ES6"></div>
                <div class="bar back advanced" data-skill="REACT"></div>
                <div class="bar back advanced" data-skill="NODE JS"></div>                
                <div class="bar back advanced" data-skill="IONIC"></div>                
                <div class="bar back intermediate" data-skill="ANGULAR"></div>
                <div class="bar back intermediate" data-skill="SASS"></div>
                
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="heading ">
            <h2 class="title-services">Mes services</h2>
        </div>
        <div class="content">
            <div class="servicesBx">
                <img src="/assets/icon1.png" alt="UI design">
                <h2 class="title-web-design">Web Design</h2>
                <p class="text-web-design">La création et la conception de site web moderne et esthétique, conception
                    d'interface et
                    d’architecture
                    interactionnelle</p>
            </div>
            <div class="servicesBx">
                <img src="/assets/icon2.png" alt="web developpement">
                <h2 class="title-dev">web developpement</h2>
                <p class="text-dev">développement d'applications web dynamique "One Page", rapide et reactive, permetant
                    une experience
                    utilisateur améliorée </p>
            </div>
            <div class="servicesBx">
                <img src="/assets/icon3.png" alt="Mobile app">
                <h2 class='title-mobile'>Mobile app</h2>
                <p class='text-mobile'>conception responsive, afin que les contenus s'adaptent automatiquement à la
                    taille de l'écran de
                    l'appareil utilisé, et develeppoment d'application grace au framework ionic</p>
            </div>
            <div class="servicesBx">
                <img src="/assets/icon4.png" alt="Back-end">
                <h2 class='title-back-end'>Back-end</h2>
                <p class='text-back-end'>Conception des éléments techniques nécessaires au fonctionnement d'un site,
                    gestion des bases de
                    données avec MongoDb</p>
            </div>
            <div class="servicesBx">
                <img src="/assets/icon5.png" alt="contenu">
                <h2 class='title-contenu'>Création de contenu</h2>
                <p class="text-contenu">Passioné, curieux et cultivé je pourrais agrementé vos projets de contenu
                    interessant!</p>
            </div>
            <div class="servicesBx">
                <img src="/assets/icon6.png" alt="commerce">
                <h2 class='title-commerce'>Fibre commerciale</h2>
                <p class='text-commerce'>Grace à mon parcours et ma grande expérience dans le commerce et le service
                    client, mes projet sont
                    adaptés et pensés pour la satisfaction du client !</p>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="heading white">
            <h2 class='title-form-contact'>Me contacter</h2>
            <p> </p>
        </div>
        <div class="content">
            <div class="contactInfo">
                <h3 class='title-informations'>Informations</h3>
                <div class="contactInfoBx">
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="text">
                            <h3 class="adresse">Adresse</h3>
                            <p>60, rue de l'Huilerie<br>Saint Maurice sur Fessard<br>45200 - France</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="text">
                            <h3 class="phone">Telephone</h3>
                            <p>06 15 09 10 27</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>contact@gregoryneault.fr</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="formBx">
                <form action="process.php" method="post">
                    <input type="text" name="nom" placeholder="Nom complet" required="required" class="input-form-name">
                    <input type="email" name="email" placeholder="Email" required="required" class="input-form-mail">
                    <textarea name="msg" placeholder="Vote message" required="required"
                        class="form-textarea"></textarea>
                    <button type="submit" value="Envoyer" name="btn-send" class="btn btn-send-form">Envoyer</button>
                </form>
            </div>
        </div>
    </section>
    <div class="copyright">
        <p>@ G. Néault 2021</p>
    </div>
    <div id="overlay"></div>
    <script src="/script/index.js"></script>
</body>

</html>