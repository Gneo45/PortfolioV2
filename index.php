<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" type="image/png" href="assets/favi.png" />
    <link rel="stylesheet" href="/style/style.css" />
    <meta
      name="description"
      content="Grégory Néault Portfolio - Web developer Full Stack Javascript React NodeJS MongoDB ANGULAR - Grégory Néault Développeur web full stack MERN Javascript React NodeJS Angular MongoDB SEO Friendly "
    />
    <meta name="author" content="Grégory Néault" />
    <meta
      name="Keywords"
      content="portfolio, gneault, Référencement web, Gregory NEAULT, Développeur web, Node.JS , MERN, MEAN, SEO, Développeur JavaScript, Mobile, Android, Informatique"
    />
    <meta name="Robots" content="all" />

    <title>Portfolio Développeur web - Grégory NEAULT</title>
  </head>

  <body>
    <header>
      <div class="container-logo">
        <a href="#" class="logo">GN</a>
      </div>

      <div class="toggle" onclick="toggleMenu();">
        <img
          class="menu-icon"
          src="assets/iconGif/menu.png"
          alt="Open Menu icon"
        />
        <img
          class="menu-close-icon opacity"
          src="assets/iconGif/close.png"
          alt="close menu icon"
        />
      </div>

      <div class="menu">
        <a href="#home" class="container-toggle-link" onclick="toggleMenu();"
          >Accueil</a
        >
        <a href="#work" class="container-toggle-link" onclick="toggleMenu();"
          >Projets</a
        >
        <a href="#about" class="container-toggle-link" onclick="toggleMenu();"
          >A propos</a
        >
        <a
          href="#services"
          class="container-toggle-link"
          onclick="toggleMenu();"
          >Service</a
        >
        <a href="#contact" class="container-toggle-link" onclick="toggleMenu();"
          >Contact</a
        >
      </div>

      <div class="expendable-btn-container">
        <div class="global-container">
          <div class="longBtn long-btn-home">
            <a
              class="long-btn-a nav-link-home"
              href="#home"
              onclick="toggleMenu();"
              >Accueil</a
            >
          </div>
          <a class="round-btn" id="long-btn-home" href="#home">
            <img
              class="menu-icon-png"
              src="assets/iconGif/home--v3.png"
              alt=" Home Icon"
            />
          </a>
        </div>

        <div class="global-container">
          <div class="longBtn long-btn-project">
            <a
              class="long-btn-a nav-link-work"
              href="#work"
              onclick="toggleMenu();"
              >Projets</a
            >
          </div>
          <a class="round-btn" id="long-btn-project" href="#work">
            <img
              class="menu-icon-png"
              src="assets/iconGif/deadlift--v2.png"
              alt="project icon"
            />
          </a>
        </div>

        <div class="global-container">
          <div class="longBtn long-btn-apropos">
            <a class="long-btn-a nav-link-about">A propos</a>
          </div>
          <a
            class="round-btn"
            id="long-btn-apropos"
            href="#about"
            onclick="toggleMenu();"
          >
            <img
              class="menu-icon-png"
              src="assets/iconGif/user-male--v2.png"
              alt="about icon"
            />
          </a>
        </div>

        <div class="global-container">
          <div class="longBtn long-btn-Service">
            <a class="long-btn-a nav-link-services">Service</a>
          </div>
          <a
            class="round-btn"
            id="long-btn-Service"
            href="#services"
            onclick="toggleMenu();"
          >
            <img
              class="menu-icon-png"
              src="assets/iconGif/skills.png"
              alt="skills icon"
            />
          </a>
        </div>

        <div class="global-container">
          <div class="longBtn long-btn-contact">
            <a class="long-btn-a nav-link-contact">Contact</a>
          </div>
          <a
            class="round-btn"
            id="long-btn-contact"
            href="#contact"
            onclick="toggleMenu();"
          >
            <img
              class="menu-icon-png"
              src="assets/iconGif/phonelink-ring--v2.png"
              alt="contact icon"
            />
          </a>
        </div>
      </div>

      <div class="flag-container">
        <button class="change-language-btn-EN btn-lang">US </button>
        <button class="change-language-btn-FR btn-lang">FR</button>
      </div>
    </header>
    <section class="banner" id="home">
      <div class="full-stack"> <span>Full</span><span>Stack</span> </div>
      <div class="textBx">
        <h2 class="bonjour"
          >Bonjour, Je suis<br /><span class="name-surname"
            >Grégory Néault.</span
          ></h2
        >
        <h1 class="Developeur">Je suis Développeur Web</h1>
        <div class="skillBx">
          <span style="--i: 1">
            <img
              src="assets/IconDev/html5/html5-original.svg"
              alt="PortFolio Developpeur Web Gregory Neault  HTML"
            />
          </span>
          <span style="--i: 2"
            ><img
              src="assets/IconDev/css3/css3-original.svg"
              alt="PortFolio Developpeur Web Gregory Neault  CSS3"
          /></span>
          <span style="--i: 3"
            ><img src="assets/IconDev/sass/sass-original.svg" alt="SASS"
          /></span>
          <span style="--i: 4"
            ><img
              src="assets/IconDev/javascript/javascript-original.svg"
              alt="PortFolio Developpeur Web Gregory Neault  JAVASCRIPT"
          /></span>
          <span style="--i: 5"
            ><img
              src="assets/IconDev/nodejs/nodejs-original.svg"
              alt="PortFolio Developpeur Web Gregory Neault  Node JS"
          /></span>
          <span style="--i: 6"
            ><img
              src="assets/IconDev/react/react-original.svg"
              alt="PortFolio Developpeur Web Gregory Neault  React"
          /></span>
          <span style="--i: 6"
            ><img
              src="assets/IconDev/redux/redux-original.svg"
              alt="PortFolio Developpeur Web Gregory Neault  redux"
          /></span>
          <span style="--i: 7"
            ><img
              src="assets/IconDev/angularjs/angularjs-plain.svg"
              alt="PortFolio Developpeur Web Gregory Neault  angular JS"
          /></span>
          <span style="--i: 8"
            ><img
              src="assets/IconDev/ionic/ionic-original.svg"
              alt="PortFolio Developpeur Web Gregory Neault  Ionic"
          /></span>
          <span style="--i: 9"
            ><img
              src="assets/IconDev/mongodb/mongodb-plain.svg"
              alt="PortFolio Developpeur Web Gregory Neault  mongo DB"
          /></span>
        </div>
        <a href="#about" class="btn" id="about-me-btn">A propos de moi</a>
        <a
          href="Data/cv-gneaultfr.pdf"
          class="btn"
          id="download-resume-btn"
          download="Mon cv"
          >Mon CV</a
        >
      </div>
    </section>

    <section class="work" id="work">
      <div class="heading">
        <h2 class="work-title">Mes dernières réalisations</h2>
      </div>
      <div class="content">
        <div class="workBx workBx012" data-modal-target="#modal-disney">
          <h1>Disney+ Clone</h1>
        </div>
        <div class="modal" id="modal-disney">
          <div class="modal-header">
            <div class="title"
              >Disney+ Clone
              <img
                src="assets/IconDev/react/react-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone react"
              />
              <img
                src="assets/IconDev/redux/redux-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone redux"
              />
              <img
                src="assets/IconDev/firebase/firebase-plain.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone firebase"
              />
            </div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-body-texte-disney"
              >Un clone du site Disney + créé avec
              <strong> React, redux et firebase </strong>! <br />un Style épuré
              moderne et accessible</p
            >
            <div class="carousel" data-carousel>
              <button class="carousel-button prev" data-carousel-button="prev"
                >&#8656;</button
              >
              <button class="carousel-button next" data-carousel-button="next"
                >&#8658;</button
              >
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./assets/ProjectScreen/Disney/disney1.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Disney 1"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/Disney/disney2.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project disney 2"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/Disney/disney3.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project disney 3"
                  />
                </li>
              </ul>
            </div>
            <a
              href="https://gn-disney-clone.netlify.app/"
              target="_blank"
              class="btn btn-project-link-website"
              >Consulter le site</a
            >
          </div>
        </div>

        <div class="workBx workBx011" data-modal-target="#modal-tesla">
          <h1>Tesla Clone</h1>
        </div>
        <div class="modal" id="modal-tesla">
          <div class="modal-header">
            <div class="title"
              >Tesla Clone
              <img
                src="assets/IconDev/react/react-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone react"
              />
              <img
                src="assets/IconDev/redux/redux-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone redux"
              />
            </div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-body-texte-tesla"
              >Un clone du superbe site Tesla créé avec
              <strong> React, et redux </strong>! <br />Design et simplicité,
              une experience utilisateur garantie
            </p>
            <div class="carousel" data-carousel>
              <button class="carousel-button prev" data-carousel-button="prev"
                >&#8656;</button
              >
              <button class="carousel-button next" data-carousel-button="next"
                >&#8658;</button
              >
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./assets/ProjectScreen/Tesla/Tesla1.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Tesla 1"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/Tesla/Tesla2.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Tesla Tesla 2"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/Tesla/Tesla3.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Tesla Tesla 3"
                  />
                </li>
              </ul>
            </div>
            <a
              href="https://pensive-mahavira-c9f30d.netlify.app/"
              target="_blank"
              class="btn btn-project-link-website"
              >Consulter le site</a
            >
          </div>
        </div>

        <div class="workBx workBx01" data-modal-target="#modal-pager">
          <h1>Loquï</h1>
        </div>
        <div class="modal" id="modal-pager">
          <div class="modal-header">
            <div class="title"
              >Messaging App
              <img
                src="assets/IconDev/react/react-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone react"
              />
              <img
                src="assets/IconDev/nodejs/nodejs-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone node JS"
              />
              <img
                src="assets/IconDev/css3/css3-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone CSS3"
              />
            </div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-body-texte-pager"
              >Web app de messagerie créée avec
              <strong> React, Node, Stream.io et Twilo </strong>! <br />Envoyez
              des message, gifs, photos, et plus encore. Testez l'application
              avec le pseudo "visiteur" Mot de passe "visiteur"
            </p>
            <div class="carousel" data-carousel>
              <button class="carousel-button prev" data-carousel-button="prev"
                >&#8656;</button
              >
              <button class="carousel-button next" data-carousel-button="next"
                >&#8658;</button
              >
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./assets/ProjectScreen/MessagingApp/MessagingApp1.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Messaging App 1"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/MessagingApp/MessagingApp2.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Messaging App 2"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/MessagingApp/MessagingApp3.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Messaging App 3"
                  />
                </li>
              </ul>
            </div>
            <a
              href="https://gn-messenger.netlify.app/"
              target="_blank"
              class="btn btn-project-link-website"
              >Consulter le site</a
            >
          </div>
        </div>

        <div class="workBx workBx0" data-modal-target="#modal-geritch">
          <h1>Gericht</h1>
        </div>
        <div class="modal" id="modal-geritch">
          <div class="modal-header">
            <div class="title"
              >Gericht
              <img
                src="assets/IconDev/react/react-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone react"
              />
              <img
                src="assets/IconDev/css3/css3-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone CSS3"
              />
            </div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-body-texte-geritch"
              >Proposition de site vitrine créé avec
              <strong> React et css </strong>! <br />
              pour un restaurant fictif</p
            >
            <div class="carousel" data-carousel>
              <button class="carousel-button prev" data-carousel-button="prev"
                >&#8656;</button
              >
              <button class="carousel-button next" data-carousel-button="next"
                >&#8658;</button
              >
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./assets/ProjectScreen/Restaurant/resto1.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project restaurant"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/Restaurant/resto2.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project restaurant 2"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/Restaurant/resto3.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project restaurant 3"
                  />
                </li>
              </ul>
            </div>
            <a
              href="https://gnsplace.netlify.app/#awards"
              target="_blank"
              class="btn btn-project-link-website"
              >Consulter le site</a
            >
          </div>
        </div>

        <div class="workBx workBx2" data-modal-target="#modal-LazyBeast">
          <h1>Lazy Beast Network</h1>
        </div>
        <div class="modal" id="modal-LazyBeast">
          <div class="modal-header">
            <div class="title"
              >lazybeast
              <img
                src="assets/IconDev/react/react-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone react"
              />
              <img
                src="assets/IconDev/nodejs/nodejs-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone node JS"
              />
              <img
                class="icon-color"
                src="assets/IconDev/express/express-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone express"
              />
              <img
                src="assets/IconDev/mongodb/mongodb-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone mongo DB"
              />
            </div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-body-texte-LazyBeast"
              >Un réseau social créé avec<strong>
                Node js, React, express et MongoDB</strong
              >! <br />
              Partagez vos humeurs, photos, videos et liens avec vos
              followers</p
            >
            <div class="carousel" data-carousel>
              <button class="carousel-button prev" data-carousel-button="prev"
                >&#8656;</button
              >
              <button class="carousel-button next" data-carousel-button="next"
                >&#8658;</button
              >
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./assets/ProjectScreen/LazyBeast/lazyBeast1.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Lazy Beast #1"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/LazyBeast/lazyBeast2.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Lazy Beast #2"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/LazyBeast/lazyBeast3.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Lazy Beast #3"
                  />
                </li>
              </ul>
            </div>
            <a
              href="https://xenodochial-ride-81d228.netlify.app/"
              target="_blank"
              class="btn btn-project-link-website"
              >Consulter le site</a
            >
          </div>
        </div>

        <div class="workBx workBx1" data-modal-target="#modal-GNShop">
          <h1>GN Shop</h1>
        </div>
        <div class="modal" id="modal-GNShop">
          <div class="modal-header">
            <div class="title"
              >GN Shop
              <img
                src="assets/IconDev/react/react-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone react"
              />
              <img
                src="assets/IconDev/javascript/javascript-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone javascript"
              />
              <img
                src="assets/IconDev/css3/css3-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone CSS3"
              />
            </div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-body-texte-GNShop"
              >Un site e-commerce créé avec
              <strong> React et commerce.js</strong>! <br />
              Vendez et achetez vos produits partout dans le monde en quelques
              clics</p
            >
            <div class="carousel" data-carousel>
              <button class="carousel-button prev" data-carousel-button="prev"
                >&#8656;</button
              >
              <button class="carousel-button next" data-carousel-button="next"
                >&#8658;</button
              >
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./assets/ProjectScreen/GnShop/gnshop1.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Gn Shop #1"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/GnShop/gnshop2.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Gn shop #2"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/GnShop/gnshop3.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Gn shop #3"
                  />
                </li>
              </ul>
            </div>
            <a
              href="https://neo-shop.netlify.app/"
              target="_blank"
              class="btn btn-project-link-website"
              >Consulter le site</a
            >
          </div>
        </div>

        <div class="workBx workBx3" data-modal-target="#modal-cineApp">
          <h1>CineFiles</h1>
        </div>
        <div class="modal" id="modal-cineApp">
          <div class="modal-header">
            <div class="title"
              >Cinephile
              <img
                src="assets/IconDev/react/react-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone react"
              />
            </div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-body-texte-cineApp"
              >Une application web créée avec<strong>
                React et l'API TMDB </strong
              >! <br />
              Recherchez des films part mot clés et créez une liste de vos coups
              de coeur à regarder</p
            >
            <div class="carousel" data-carousel>
              <button class="carousel-button prev" data-carousel-button="prev"
                >&#8656;</button
              >
              <button class="carousel-button next" data-carousel-button="next"
                >&#8658;</button
              >
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./assets/ProjectScreen/CineApps/cineApps1.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project cine app  #1"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/CineApps/CineApps2.jpg"
                    alt="PortFolio Developpeur Web Gregory Neault Project cine app  #2"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/CineApps/CineApps3.jpg"
                    alt="PortFolio Developpeur Web Gregory Neault Project cine app  #3"
                  />
                </li>
              </ul>
            </div>
            <a
              href="https://cineappgneo.herokuapp.com/"
              target="_blank"
              class="btn btn-project-link-website"
              >Consulter le site</a
            >
          </div>
        </div>

        <div class="workBx workBx4" data-modal-target="#modal-bookApp">
          <h1>FreeBrary</h1>
        </div>
        <div class="modal" id="modal-bookApp">
          <div class="modal-header">
            <div class="title"
              >FreeBrary
              <img
                src="assets/IconDev/nodejs/nodejs-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone node JS"
              />
              <img
                class="icon-color"
                src="assets/IconDev/express/express-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone express"
              />
              <img
                src="assets/IconDev/mongodb/mongodb-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone mogo DB"
              />
            </div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-body-texte-bookApp"
              >Une application web créée avec<strong>
                Node js, express et MongoDB et Ejs</strong
              >! <br />
              Créez votre librairie et triez vos livres facilement</p
            >
            <div class="carousel" data-carousel>
              <button class="carousel-button prev" data-carousel-button="prev"
                >&#8656;</button
              >
              <button class="carousel-button next" data-carousel-button="next"
                >&#8658;</button
              >
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./assets/ProjectScreen/BooksApp/bookapps1.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project book app #1"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/BooksApp/bookapps2.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project book app #2"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/BooksApp/bookapps3.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project book app #3"
                  />
                </li>
              </ul>
            </div>
            <a
              href="https://zebooksapp.herokuapp.com/"
              target="_blank"
              class="btn btn-project-link-website"
              >Consulter le site</a
            >
          </div>
        </div>

        <div class="workBx workBx5" data-modal-target="#modal-Flag">
          <h1>WorldFlag</h1>
        </div>
        <div class="modal" id="modal-Flag">
          <div class="modal-header">
            <div class="title"
              >WorldFlag
              <img
                src="assets/IconDev/react/react-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone react"
              />
            </div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-body-texte-flagApp"
              >Une application web créée avec<strong>
                React et l'API Rest Countries </strong
              >! <br />
              Découvrez les drapeaux de chaque pays grâce à cette application
              dynamique
            </p>
            <div class="carousel" data-carousel>
              <button class="carousel-button prev" data-carousel-button="prev"
                >&#8656;</button
              >
              <button class="carousel-button next" data-carousel-button="next"
                >&#8658;</button
              >
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./assets/ProjectScreen/FlagApps/flag1.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Flag app #1"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/FlagApps/flag2.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Flag app #2"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/FlagApps/flag3.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Flag app #3"
                  />
                </li>
              </ul>
            </div>
            <a
              href="https://flagappgneo.herokuapp.com/"
              target="_blank"
              class="btn btn-project-link-website"
              >Consulter le site</a
            >
          </div>
        </div>

        <div class="workBx workBx6" data-modal-target="#modal-FaceRecognition">
          <h1>Face Recognition</h1>
        </div>
        <div class="modal" id="modal-FaceRecognition">
          <div class="modal-header">
            <div class="title"
              >Face Recognition
              <img
                src="assets/IconDev/javascript/javascript-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone javascript"
              />
            </div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-body-texte-FaceRecognition"
              >Une application web créée avec <strong> Javascript </strong>!
              <br />Activez votre caméra pour laisser l'intéligence artificielle
              détecter votre visage et votre humeur!
            </p>
            <div class="carousel" data-carousel>
              <!--     <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                        <button class="carousel-button next" data-carousel-button="next">&#8658;</button> -->
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./assets/ProjectScreen/face/face1.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project face detection  #1"
                  />
                </li>
              </ul>
            </div>
            <a
              href="https://www.gregoryneault.fr/faceDetection/"
              target="_blank"
              class="btn btn-project-link-website"
              >Consulter le site</a
            >
          </div>
        </div>

        <div class="workBx workBx7" data-modal-target="#modal-piano">
          <h1>Piano Script</h1>
        </div>
        <div class="modal" id="modal-piano">
          <div class="modal-header">
            <div class="title"
              >Piano Script
              <img
                src="assets/IconDev/javascript/javascript-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone javascript"
              />
              <img
                src="assets/IconDev/html5/html5-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone html5"
              />
              <img
                src="assets/IconDev/css3/css3-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone css3"
              />
            </div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-body-texte-piano"
              >Un piano entièrement créé avec <strong> Javascript </strong>!
              <br />
              Chi va piano va sano e va lontano.
            </p>
            <div class="carousel" data-carousel>
              <!-- <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                        <button class="carousel-button next" data-carousel-button="next">&#8658;</button> -->
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./assets/ProjectScreen/piano/piano.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Piano #1"
                  />
                </li>
              </ul>
            </div>
            <a
              href="https://www.gregoryneault.fr/piano/"
              target="_blank"
              class="btn btn-project-link-website"
              >Consulter le site</a
            >
          </div>
        </div>

        <div class="workBx workBx8" data-modal-target="#modal-badCitizen">
          <h1>Bad Citizen</h1>
        </div>
        <div class="modal" id="modal-badCitizen">
          <div class="modal-header">
            <div class="title"
              >Bad Citizen
              <img
                src="assets/IconDev/javascript/javascript-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone javascript"
              />
              <img
                src="assets/IconDev/html5/html5-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone html"
              />
              <img
                src="assets/IconDev/css3/css3-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone css3"
              />
            </div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-body-texte-badCitizen"
              >Un petit jeux créé avec <strong> Javascript </strong>! <br />
              Affrontez des enemis, gérez vos points de vie pour aller le plus
              loin possible !!</p
            >
            <div class="carousel" data-carousel>
              <button class="carousel-button prev" data-carousel-button="prev"
                >&#8656;</button
              >
              <button class="carousel-button next" data-carousel-button="next"
                >&#8658;</button
              >
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./assets/ProjectScreen/badcitizen/badcitizen1.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Bad Citizen #1"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/badcitizen/badcitizen2.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project Bad Citizen #2"
                  />
                </li>
              </ul>
            </div>
            <a
              href="https://www.gregoryneault.fr/asmallgame/"
              target="_blank"
              class="btn btn-project-link-website"
              >Consulter le site</a
            >
          </div>
        </div>

        <div class="workBx workBx9" data-modal-target="#modal-tictac">
          <h1>Tic Tac Toe</h1>
        </div>
        <div class="modal" id="modal-tictac">
          <div class="modal-header">
            <div class="title"
              >Tic Tac Toe
              <img
                src="assets/IconDev/javascript/javascript-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone"
              />
              <img
                src="assets/IconDev/html5/html5-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone"
              />
              <img
                src="assets/IconDev/css3/css3-original.svg"
                alt="PortFolio Developpeur Web Gregory Neault Project icone"
              />
            </div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-body-texte-tictac"
              >Un simple jeu du morpion créé avec
              <strong> Html Css et Javascript </strong>! <br />
              jouez avec un partenaire au celebre jeux du morpion, qui sera le
              grand gagnant ?
            </p>
            <div class="carousel" data-carousel>
              <button class="carousel-button prev" data-carousel-button="prev"
                >&#8656;</button
              >
              <button class="carousel-button next" data-carousel-button="next"
                >&#8658;</button
              >
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./assets/ProjectScreen/TicTac/tictac1.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project TicTacToe #1"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./assets/ProjectScreen/TicTac/tictac2.png"
                    alt="PortFolio Developpeur Web Gregory Neault Project TicTacToe #2"
                  />
                </li>
              </ul>
            </div>
            <a
              href="https://www.gregoryneault.fr/TicTacToe/"
              target="_blank"
              class="btn btn-project-link-website"
              >Consulter le site</a
            >
          </div>
        </div>
      </div>
    </section>
    <section class="about" id="about">
      <div class="heading white">
        <h2 class="title-about-me">A propos de moi</h2>
      </div>
      <div class="content">
        <div class="contentBx">
          <p class="text-about-me"
            >Fraîchement diplômé de la certification professionelle de
            développeur web et web mobile full stack et specialisé en Javascript
            et ses frameworks, je recherche un poste de développeur.
            <br /><br />J'ai une bonne maîtrise des langages html, css, sass, et
            des frameworks React et Angular côté Front-End. Coté Back-End je
            maitrise NodeJS et ses composants, et suis capable de créer un
            projet complet avec les stacks MERN/MEAN. je connais les bonnes
            pratiques de développement et de recherches de solution.<br />Autonome
            de nature, je peux travailler seul ou en groupe, étant également
            capable de m’adapter à un environnement que je ne connais pas.
            <br /><br />Je sais faire preuve de force de proposition lorsque
            l’on m’en donne la liberté, cherchant toujours à améliorer et
            optimiser les projets au maximum pour satisfaire au mieux la demande
            du client. De plus je ne manquerais pas d’apporter mon sérieux et ma
            bonne humeur avec moi.
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
      <div class="heading">
        <h2 class="title-services">Mes services</h2>
      </div>
      <div class="content">
        <div class="servicesBx">
          <img
            src="/assets/icon1.png"
            alt="PortFolio Developpeur Web Gregory Neault UI design"
          />
          <h2 class="title-web-design">Web Design</h2>
          <p class="text-web-design"
            >La création et la conception de site web moderne et esthétique,
            conception d'interface et d’architecture interactionnelle</p
          >
        </div>
        <div class="servicesBx">
          <img
            src="/assets/icon2.png"
            alt="PortFolio Developpeur Web Gregory Neault web developpement"
          />
          <h2 class="title-dev">web developpement</h2>
          <p class="text-dev"
            >développement d'applications web dynamique "One Page", rapide et
            reactive, permetant une experience utilisateur améliorée
          </p>
        </div>
        <div class="servicesBx">
          <img
            src="/assets/icon3.png"
            alt="PortFolio Developpeur Web Gregory Neault Mobile app"
          />
          <h2 class="title-mobile">Mobile app</h2>
          <p class="text-mobile"
            >conception responsive, afin que les contenus s'adaptent
            automatiquement à la taille de l'écran de l'appareil utilisé, et
            develeppoment d'application grace au framework ionic</p
          >
        </div>
        <div class="servicesBx">
          <img
            src="/assets/icon4.png"
            alt="PortFolio Developpeur Web Gregory Neault Back-end"
          />
          <h2 class="title-back-end">Back-end</h2>
          <p class="text-back-end"
            >Conception des éléments techniques nécessaires au fonctionnement
            d'un site, gestion des bases de données avec MongoDb</p
          >
        </div>
        <div class="servicesBx">
          <img
            src="/assets/icon5.png"
            alt="PortFolio Developpeur Web Gregory Neault contenu"
          />
          <h2 class="title-contenu">Création de contenu</h2>
          <p class="text-contenu"
            >Passioné, curieux et cultivé je pourrais agrementé vos projets de
            contenu interessant!</p
          >
        </div>
        <div class="servicesBx">
          <img
            src="/assets/icon6.png"
            alt="PortFolio Developpeur Web Gregory Neault commerce"
          />
          <h2 class="title-commerce">Fibre commerciale</h2>
          <p class="text-commerce"
            >Grace à mon parcours et ma grande expérience dans le commerce et le
            service client, mes projet sont adaptés et pensés pour la
            satisfaction du client !</p
          >
        </div>
      </div>
    </section>
    <section class="contact" id="contact">
      <div class="heading white">
        <h2 class="title-form-contact">Me contacter</h2>
      </div>
      <div class="content">
        <div class="contactInfo">
          <h3 class="title-informations">Informations</h3>
          <div class="contactInfoBx">
            <a
              class="link-social-on-mobile-4"
              href="https://fr.linkedin.com/in/gr%C3%A9gory-n%C3%A9ault-b83328a6"
              target="_blank"
            >
              <div id="4" class="box linkedin-icon">
                <div class="contact-icon-container-4 icon-contact-box">
                  <img
                    class="contact-img"
                    src="assets/iconGif/linkedin-circled--v3.png"
                    alt="linkedin icon"
                  />
                </div>
                <p class="text-contact-info-4">Linkedin</p>
                <p class="text-contact-info-mobile-4">Linkedin</p>
              </div>
            </a>
            <a
              class="link-social-on-mobile-5"
              href="https://github.com/Gneo45"
              target="_blank"
            >
              <div id="5" class="box git-icon">
                <div class="contact-icon-container-5 icon-contact-box">
                  <img
                    class="contact-img"
                    src="assets/iconGif/github--v2.png"
                    alt="git icon"
                  />
                </div>
                <p class="text-contact-info-5">GitHub</p>
                <p class="text-contact-info-mobile-5">GitHub</p>
              </div>
            </a>
            <a
              class="link-social-on-mobile-6"
              href="https://www.instagram.com/greg_neo/?hl=fr"
              target="_blank"
            >
              <div id="6" class="box insta-icon">
                <div class="contact-icon-container-6 icon-contact-box">
                  <img
                    class="contact-img"
                    src="assets/iconGif/instagram-new--v3.png"
                    alt="instagram icon"
                  />
                </div>
                <p class="text-contact-info-6">Instagram</p>
                <p class="text-contact-info-mobile-6">Instagram</p>
              </div>
            </a>
            <div id="2" class="box phone-icon">
              <div class="contact-icon-container-2 icon-contact-box">
                <img
                  class="contact-img"
                  id="phone-img"
                  src="assets/iconGif/phonelink-ring--v2.png"
                  alt="phone icon"
                />
              </div>
              <p class="text-contact-info-2">+336 15 09 10 27</p>
              <p class="text-contact-info-mobile-2">+336 15 09 10 27</p>
            </div>
            <div id="3" class="box mail-icon">
              <div class="contact-icon-container-3 icon-contact-box">
                <img
                  class="contact-img"
                  src="assets/iconGif/gmail--v2.png"
                  alt="mail icon"
                />
              </div>
              <p class="text-contact-info-3">g.neo2009@gmail.com</p>
              <p class="text-contact-info-mobile-3">g.neo2009@gmail.com</p>
            </div>

            <div id="1" class="box adresse-icon">
              <div class="contact-icon-container-1 icon-contact-box">
                <img
                  class="contact-img"
                  src="assets/iconGif/marker--v2.png"
                  alt="adress icon"
                />
              </div>
              <p class="text-contact-info-1">45700 - FRANCE</p>
              <p class="text-contact-info-mobile-1">45700 - FRANCE</p>
            </div>
          </div>
        </div>
        <div class="formBx">
          <form action="process.php" method="post">
            <input
              type="text"
              name="nom"
              placeholder="Nom complet"
              required="required"
              class="input-form-name"
            />
            <input
              type="email"
              name="email"
              placeholder="Email"
              required="required"
              class="input-form-mail"
            />
            <textarea
              name="msg"
              placeholder="Vote message"
              required="required"
              class="form-textarea"
            ></textarea>
            <button
              type="submit"
              value="Envoyer"
              name="btn-send"
              class="btn btn-send-form"
              id="btn-send-form"
              >Envoyer</button
            >
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
