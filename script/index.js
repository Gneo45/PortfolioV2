const openModalButtons = document.querySelectorAll("[data-modal-target]");
const closeModalButtons = document.querySelectorAll("[data-close-button]");
const overlay = document.getElementById("overlay");
const modalTriggers = document.querySelectorAll(".workBx");
const buttons = document.querySelectorAll("[data-carousel-button]");

const longBnts = document.querySelectorAll(".longBtn");

const roundBtn = document.querySelectorAll(".round-btn");
const LogoA = document.querySelector(".logo")
const boxs = document.querySelectorAll(".box")
const animationWidth = getComputedStyle(document.documentElement)
.getPropertyValue('--animation-end-width');

/*TRADUCTION SYSTEM */

const navLinkHome = document.querySelector(".nav-link-home");
const navLinkWork = document.querySelector(".nav-link-work");
const navLinkAbout = document.querySelector(".nav-link-about");
const navLinkServices = document.querySelector(".nav-link-services");
const navLinkContact = document.querySelector(".nav-link-contact");
const bonjour = document.querySelector(".bonjour");
const nameSurname = document.querySelector(".name-surname");
const developeur = document.querySelector(".Developeur");
const aboutMeBtn = document.getElementById("about-me-btn");
const downloadResumeBtn = document.getElementById("download-resume-btn");
const workTitle = document.querySelector(".work-title");
const modalTextDisney= document.querySelector(".modal-body-texte-disney");
const modalTextTesla = document.querySelector(".modal-body-texte-tesla");
const modalTextPager = document.querySelector(".modal-body-texte-pager");
const modalTextGeritch = document.querySelector(".modal-body-texte-geritch");
const modalTextGnShop = document.querySelector(".modal-body-texte-GNShop");
const modalTextLazyBeast = document.querySelector(
  ".modal-body-texte-LazyBeast"
);
const modalTextCineApp = document.querySelector(".modal-body-texte-cineApp");
const modalTextPiano = document.querySelector(".modal-body-texte-piano");
const modalTextBookApp = document.querySelector(".modal-body-texte-bookApp");
const modalTextTicTacToe = document.querySelector(".modal-body-texte-tictac");
const modalTextFaceDetection = document.querySelector(
  ".modal-body-texte-FaceRecognition"
);
const modalTextFlagApp = document.querySelector(".modal-body-texte-flagApp");
const modalTextBadCitizen = document.querySelector(
  ".modal-body-texte-badCitizen"
);

const btnProjectLinkWebsite= document.querySelectorAll(
  ".btn-project-link-website"
);


const titleAboutMe = document.querySelector(".title-about-me");
const textAboutMe = document.querySelector(".text-about-me");

const titleServices = document.querySelector(".title-services");

const titleWebDesign = document.querySelector(".title-web-design");
const textWebDesign = document.querySelector(".text-web-design");

const titleDev = document.querySelector(".title-dev");
const textDev = document.querySelector(".text-dev");

const titleMobile = document.querySelector(".title-mobile");
const textMobile = document.querySelector(".text-mobile");

const titleBackEnd = document.querySelector(".title-back-end");
const textBackEnd = document.querySelector(".text-back-end");

const titleContenu = document.querySelector(".title-contenu");
const textContenu = document.querySelector(".text-contenu");

const titleCommerce = document.querySelector(".title-commerce");
const textCommerce = document.querySelector(".text-commerce");

const titleFormContact = document.querySelector(".title-form-contact");
const titleFormInformations = document.querySelector(
  ".title-form-informations"
);
const formAdresse = document.querySelector(".adresse");
const formPhone = document.querySelector(".phone");
const btnSendForm = document.getElementById("btn-send-form");


const inputFormName = document.querySelector(".input-form-name");
const inputFormMail = document.querySelector(".input-form-mail");
const formTextarea = document.querySelector(".form-textarea");

const changeLanguageBtnToEN = document.querySelector(".change-language-btn-EN");
const changeLanguageBtnToFR = document.querySelector(".change-language-btn-FR");

const btnSeeMore = document.querySelector(".see-more");
const workBx1 = document.querySelector(".workBx1");

const workBx3 = document.querySelector(".workBx3");
const workBx4 = document.querySelector(".workBx4");
const workBx5 = document.querySelector(".workBx5");
const workBx6 = document.querySelector(".workBx6");
const workBx7 = document.querySelector(".workBx7");
const workBx8 = document.querySelector(".workBx8");
const workBx9 = document.querySelector(".workBx9");

const header = document.querySelector("header");

 const menuIcon = document.querySelectorAll(".menu-icon-png")
 const longBtnAs = document.querySelectorAll(".long-btn-a")
 const hamburgerMenu = document.querySelector(".toggle")
 const ToggleMenuIcon = document.querySelector('.menu-icon')
 const ToggleMenuCloseIcon = document.querySelector('.menu-close-icon')


const languageVersion = {
  navLinkHome: {
    EN: "Home",
    FR: "Accueil",
  },
  navLinkWork: {
    EN: "Projects",
    FR: "Réalisations",
  },
  navLinkAbout: {
    EN: "About",
    FR: "A propos",
  },
  navLinkServices: {
    EN: "Services",
    FR: "Services",
  },
  navLinkContact: {
    EN: "Contact",
    FR: "Contact",
  },
  bonjour: {
    EN: `Hello, i am<br><span class="name-surname">Grégory Néault.</span>`,
    FR: `Bonjour, Je suis<br><span class="name-surname">Grégory Néault.</span>`,
  },

  developeur: {
    EN: "I'm a web developer",
    FR: "Je suis développeur web",
  },
  aboutMeBtn: {
    EN: "about me",
    FR: "a propos de moi",
  },
  downloadResumeBtn: {
    EN: "my Resume",
    FR: "mon Cv",
  },
  workTitle: {
    EN: "My last projects",
    FR: "Mes dernières réalisations",
  }, 
   modalTextDisney: {
    EN: `A DISNEY + Website clone created with <strong> React, redux and Firebase
</strong>! <br>clean style and accessibility</p>`,
    FR: `Un clone du site Disney + créé avec <strong> React, redux et
    firebase </strong>! <br>un Style épuré moderne et accessible</p>`,
  },
  modalTextTesla: {
    EN: `A TESLA  website clone created with <strong> React, and redux
</strong>! <br>Design and simplicity, a guaranteed incredible user experience </p>`,
    FR: `Un clone du superbe site Tesla créé avec  <strong> React, et redux
    </strong>! <br>Design et simplicité, une experience utilisateur incroyable garantie </p>`,
  },
  modalTextPager: {
    EN: `
    WEB MESSAGING APP built with <strong>React, Node, Stream.io and Twilo</strong>! <br>Send messages, gifs, photos, and more. Test app with login "visitor" Password "visitor" </p>`,
    FR: `Web app de messagerie créée avec <strong> React, Node, Stream.io et Twilo </strong>! <br>Envoyez des message, gifs, photos, et plus encore. Testez l'application avec le pseudo "visiteur" Mot de passe "visiteur" </p>`,
  },
  modalTextGeritch: {
    EN: `Proposal for a showcase site created with <strong> React and css </strong>! <br>for a fictional restaurant</p>`,
    FR: `Proposition de site vitrine créer avec <strong> React et css </strong>! <br> pour un restaurant fictif</p>`,
  },
  modalTextEcommerce: {
    EN: `An e-commerce site created with <strong> React and commerce.js</strong>! <br> Sell and buy your products anywhere in the world in a few clicks</p>`,
    FR: `Un site e-commerce creer avec <strong> React et commerce.js</strong>! <br> Vendez et achetez vos produits partout dans le monde en quelques clics</p>`,
  },
  modalTextLazyBeast: {
    EN: `A social network build with<strong> Node js, React, express and MongoDB</strong>!Share your
    mood, photos, video and link with your followers</p>`,
    FR: `Un réseau social créé avec<strong> Node js, React, express et MongoDB</strong>!Partager vos
        humeur, photos, video et lien avec vos followers</p>`,
  },
  modalTextCineApp: {
    EN: `
    A web application created with <strong> React and the TMDB API</strong>! <br> Search for movies by keywords and create a list of your favorites atwatch</p>`,
    FR: `Une application web créée avec<strong> React et l'API TMDB
    </strong>! <br> Recherchez des films part mot clés et créez une liste de vos coups de coeur à
    regarder</p>`,
  },
  modalTextBookApp: {
    EN: `
    A web application created with <strong> Node js, express and MongoDB and Ejs</strong>! <br> Create your library and sort your books easily</p>`,
    FR: `Une application web créée avec<strong> Node js, express et
    MongoDB et Ejs</strong>! <br> Créez votre librairie et triez vos livres facilement</p>`,
  },
  modalTextFlagApp: {
    EN: `A web application created with <strong> React and the Rest API
    Countries </strong>! <br> Discover the flags of each country through this application
dynamic </p>`,
    FR: `Une application web créée avec<strong> React et l'API Rest
    Countries </strong>! <br> Découvrez les drapeaux de chaque pays grâce à cette application
dynamique </p>`,
  },
  modalTextFaceDetection: {
    EN: ` A web application created with <strong>Javascript</strong>!<br>Activate your camera to let the artificial intelligence detect your face and your mood!</p>`,
    FR: `Une application web créée avec <strong> Javascript </strong>!
    <br>Activez votre caméra pour laisser l'intéligence artificielle détecter votre visage et votre
    humeur!
</p>`,
  },
  modalTextPiano: {
    EN: `A piano entirely created with <strong>Javascript</strong>!<br> Chi va piano va sano e va lontano.</p>`,
    FR: `Un piano entièrement créé avec <strong> Javascript </strong>!
    <br> Chi va piano va sano e va lontano.</p>`,
  },
  modalTextBadCitizen: {
    EN: `A small game created with <strong>Javascript</strong>! <br> Face enemies, manage your life points to go as far as possible!!</p>`,
    FR: `Un petit jeux créé avec <strong> Javascript </strong>! <br>
    Affrontez des enemis, gérez vos points de vie pour aller le plus loin possible !!</p>`,
  },
  modalTextTicTacToe: {
    EN: `
    A simple Tic Tac Toe game created with <strong> Html Css and JavaScript </strong>! <br> play the famous Tic Tac Toe game with a partner, who will be the big winner? </p>`,
    FR: `Un simple jeu du morpion créé avec <strong> Html Css et
    Javascript </strong>! <br> jouez avec un partenaire au celebre jeux du morpion, qui sera le
grand gagnant ? </p>`,
  },
  btnProjectLinkWebsite: {
    EN: "Visit website",
    FR: "Consulter le site",
  },
 
  titleAboutMe: {
    EN: "About me",
    FR: "A propos de moi",
  },
  textAboutMe: {
    EN: `Recently graduated from the full stack web and mobile web developer professional certification, I am looking for a developer job.
    <br><br>
    I have a good mastery of html, css, sass, and React and Angular frameworks on the Front-End side.
    On the Back-End side I master NodeJS and its components, and i'm able to create a complete project with the MERN stack.
    I know good development and solution research practices.<br>
    Autonomous by
    nature, I can work alone or in
    group, also being able to adapt to an environment that I do not know.
    <br><br>
    I know how to show strength of proposal when I am given the freedom to do so, seeking
    always to improve and optimize the projects to the maximum to best meet the demand of the
    customer. Plus I wouldn't miss
    to bring my seriousness and my good mood with me.
`,
    FR: `Fraîchement diplômé de la certification professionelle de développeur web et web mobile full stack je recherche un poste de développeur
    <br><br>J'ai une bonne maîtrise des langages html, css, sass, et des frameworks React et Angular côté Front-End.
    Coté Back-End je maitrise NodeJS et ses composants, et suis capable de créer un projet complet avec le stack MERN.
    je connais les bonnes pratiques de développement et de recherches de solution.<br>Autonome de
    nature, je peux travailler seul ou en
    groupe, étant également capable de m’adapter à un environnement que je ne connais pas.
    <br><br>Je sais faire preuve de force de proposition lorsque l’on m’en donne la liberté, cherchant
    toujours à améliorer et optimiser les projets au maximum pour satisfaire au mieux la demande du
    client. De plus je ne manquerais pas
    d’apporter mon sérieux et ma bonne humeur avec moi.`,
  },
  titleServices: {
    EN: "My services",
    FR: "Mes services",
  },
  titleWebDesign: {
    EN: "Web Design",
    FR: "Web Design",
  },
  textWebDesign: {
    EN: "Creation and design of modern and aesthetic web site, interface design and interactive architecture",
    FR: "La création et la conception de site web moderne et esthétique, conception d'interface et d’architecture interactionnelle",
  },
  titleDev: {
    EN: "Web developpement",
    FR: "Web developpement",
  },
  textDev: {
    EN: 'Development of "One Page" dynamic web applications , fast and reactive, allowing an improved user experience',
    FR: `Développement d'applications web dynamique "One Page", rapide et reactive, permetant une experience utilisateur améliorée`,
  },
  titleMobile: {
    EN: "Mobile app",
    FR: "Mobile app",
  },
  textMobile: {
    EN: "Responsive conception, allowing contents to automatically adapt to the screen size used by the device, and application development with ionic framework",
    FR: `conception responsive, afin que les contenus s'adaptent automatiquement à la taille de l'écran de l'appareil utilisé, et develeppoment d'application grace au framework ionic`,
  },
  titleBackEnd: {
    EN: "Back-end",
    FR: "Back-end",
  },
  textBackEnd: {
    EN: "Design of technical elements necessary for the operation of website, manage data bases with MongoDb",
    FR: "Conception des éléments techniques nécessaires au fonctionnement d'un site, gestion des bases de données avec MongoDb",
  },
  titleContenu: {
    EN: "Content creation",
    FR: "Création de contenu",
  },
  textContenu: {
    EN: "Passionate, curious and cultivated I can create interesting content for your projects!",
    FR: "Passioné, curieux et cultivé je pourrais agrementé vos projets de contenu interessant!",
  },
  titleCommerce: {
    EN: "commercial talent",
    FR: "Fibre commerciale",
  },
  textCommerce: {
    EN: "with multiple cross-skills and my experience in commerce and customer service, my projects are adapted and thought for customer satisfaction!",
    FR: "Grace à mon parcours et ma grande expérience dans le commerce et le service client, mes projet sont adaptés et pensés pour la satisfaction du client !",
  },
  titleFormContact: {
    EN: "Contact me",
    FR: "Me contacter",
  },
  titleFormInformations: {
    EN: "Informations",
    FR: "Informations",
  },
  formAdresse: {
    EN: "Address",
    FR: "Adresse",
  },
  formPhone: {
    EN: "Phone",
    FR: "Telephone",
  },
  btnSendForm: {
    EN: "SEND",
    FR: "ENVOYER",
  },
  inputFormName: {
    EN: "Full name",
    FR: "Nom complet",
  },
  inputFormMail: {
    EN: "your mail",
    FR: "Votre Email",
  },
  formTextarea: {
    EN: "Message",
    FR: "Votre message",
  },
};

changeLanguageBtnToEN.addEventListener("click", () => {
  changelanguageToEng();
});
changeLanguageBtnToFR.addEventListener("click", () => {
  changelanguageToFR();
});



/* NAV MENU ANIMATION SYSTEM  LARGE SCREEN*/
boxs.forEach((box) => {
  box.addEventListener("mouseenter", (e) => {
   
    let contactIconContainer = document.querySelector(`.contact-icon-container-${e.target.id}`);  
    contactIconContainer.classList.remove('animation-back')   
    let calcAnimationWidth = (e.target.offsetWidth - 45)
    console.log(calcAnimationWidth);
    document.documentElement.style.setProperty('--animation-end-width' , `${calcAnimationWidth}px `)
    contactIconContainer.classList.add('animation')   
    let textContactInfos = document.querySelector(`.text-contact-info-${e.target.id}`)
   
    setTimeout(()=>{
      textContactInfos.style.display = 'flex'
    },500)

    let textContactInfoMobile = document.querySelector(`.text-contact-info-mobile-${e.target.id}`)
    textContactInfoMobile.style.display = 'none';

    
  });
});

boxs.forEach((box) => {
  box.addEventListener("mouseleave", (e) => {
    
    let contactIconContainer = document.querySelector(`.contact-icon-container-${e.target.id}`);  
    contactIconContainer.classList.remove('animation')   

      contactIconContainer.classList.add('animation-back')   
      let textContactInfos = document.querySelector(`.text-contact-info-${e.target.id}`)
      
        textContactInfos.style.display = 'none'

    let textContactInfoMobile = document.querySelector(`.text-contact-info-mobile-${e.target.id}`)
    if (window.matchMedia("(max-width: 600px)").matches) {
      textContactInfoMobile.style.display = 'flex';
    } else {
      textContactInfoMobile.style.display = 'none';
    }
  

   
     
      
    
  });
});

roundBtn.forEach((btn) => {
  btn.addEventListener("mouseenter", (e) => {    
    let longBtn = document.querySelector(`.${e.target.id}`);
    longBtn.style.width = "135px";
    longBtn.classList.add("long-shadow")
   
  });
});

roundBtn.forEach((btn) => {
  btn.addEventListener("mouseleave", (e) => {
    let longBtn = document.querySelector(`.${e.target.id}`);
    longBtn.style.width = "35px";
    longBtn.classList.remove("long-shadow")

  });
});

/*SCROOL SYSTEM */
window.addEventListener("scroll", () => {
  
  /* On SCROLL CHANGE COLOR AND SHADOW ALL SCREEN*/
  header.classList.toggle("sticky", window.scrollY > 0);
  

  LogoA.classList.toggle("sticky", window.scrollY > 0);
  
  if (window.matchMedia("(min-width: 990px)").matches){
 /* On SCROLL CHANGE COLOR AND SHADOW LARGE SCREEN*/
  roundBtn.forEach((btn) => {
    btn.classList.toggle("sticky", window.scrollY > 0);
  });
  menuIcon.forEach((ico) => {
    ico.classList.toggle("sticky", window.scrollY > 0);
  });
  longBnts.forEach((btn) => {
    btn.classList.toggle("sticky", window.scrollY > 0);
  });
  longBtnAs.forEach((longBtnA) => {
    longBtnA.classList.toggle("sticky", window.scrollY > 0);
  });

  changeLanguageBtnToEN.classList.toggle("sticky", window.scrollY > 0);
  changeLanguageBtnToFR.classList.toggle("sticky", window.scrollY > 0);
  }
  /* On SCROLL CHANGE COLOR AND SHADOW SMALL SCREEN*/
  if (window.matchMedia("(max-width: 992px)").matches){
  hamburgerMenu.classList.toggle("sticky", window.scrollY > 0);
  ToggleMenuIcon.classList.toggle("sticky", window.scrollY > 0);
  ToggleMenuCloseIcon.classList.toggle("sticky", window.scrollY > 0);
  }
  
  
});

/*MOBILE / DESKTOP MENU TOGGLE SYSTEM*/

const toggleMenu = () => {
  let menuToggle = document.querySelector(".toggle");
  let menu = document.querySelector(".menu"); 
  
  menuToggle.classList.toggle("active");
  menu.classList.toggle("active");
  ToggleMenuIcon.classList.toggle("opacity");
  ToggleMenuCloseIcon.classList.toggle("opacity");


};

/*MODALS*/

modalTriggers.forEach((modalTrigger) => {
  modalTrigger.addEventListener("click", () => {
    console.log("click");
    const modal = document.querySelector(modalTrigger.dataset.modalTarget);
    openModal(modal);
  });
});

/*OVERLAY */
overlay.addEventListener("click", () => {
  const modals = document.querySelectorAll(".modal.active");
  modals.forEach((modal) => {
    closeModal(modal);
  });
});

closeModalButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const modal = button.closest(".modal");
    closeModal(modal);
  });
});

function openModal(modal) {
  if (modal == null) return;
  modal.classList.add("active");
  overlay.classList.add("active");
}

function closeModal(modal) {
  if (modal == null) return;
  modal.classList.remove("active");
  overlay.classList.remove("active");
}

/*CAROUSEL */

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    const offset = button.dataset.carouselButton === "next" ? 1 : -1;
    const slides = button
      .closest("[data-carousel]")
      .querySelector("[data-slides]");

    const activeSlide = slides.querySelector("[data-active]");
    let newIndex = [...slides.children].indexOf(activeSlide) + offset;
    if (newIndex < 0) newIndex = slides.children.length - 1;
    if (newIndex >= slides.children.length) newIndex = 0;

    slides.children[newIndex].dataset.active = true;
    delete activeSlide.dataset.active;
  });
});

function changelanguageToEng() {
  navLinkHome.innerHTML = languageVersion.navLinkHome.EN;
  navLinkWork.innerHTML = languageVersion.navLinkWork.EN;
  navLinkAbout.innerHTML = languageVersion.navLinkAbout.EN;
  navLinkServices.innerHTML = languageVersion.navLinkServices.EN;
  navLinkContact.innerHTML = languageVersion.navLinkContact.EN;

  downloadResumeBtn.innerHTML = languageVersion.downloadResumeBtn.EN;
  aboutMeBtn.innerHTML = languageVersion.aboutMeBtn.EN;

  btnProjectLinkWebsite.forEach((btn) => {

btn.innerHTML = languageVersion.btnProjectLinkWebsite.EN;
  })
  
  bonjour.innerHTML = languageVersion.bonjour.EN;
  developeur.innerHTML = languageVersion.developeur.EN;

  workTitle.innerHTML = languageVersion.workTitle.EN;
  modalTextDisney.innerHTML = languageVersion.modalTextDisney.EN;

  modalTextTesla.innerHTML = languageVersion.modalTextTesla.EN;
  modalTextPager.innerHTML = languageVersion.modalTextPager.EN;
  modalTextGeritch.innerHTML = languageVersion.modalTextGeritch.EN;
  modalTextGnShop.innerHTML = languageVersion.modalTextEcommerce.EN;
  modalTextLazyBeast.innerHTML = languageVersion.modalTextLazyBeast.EN;
  modalTextCineApp.innerHTML = languageVersion.modalTextCineApp.EN;
  modalTextBookApp.innerHTML = languageVersion.modalTextBookApp.EN;
  modalTextFlagApp.innerHTML = languageVersion.modalTextFlagApp.EN;
  modalTextFaceDetection.innerHTML = languageVersion.modalTextFaceDetection.EN;
  modalTextPiano.innerHTML = languageVersion.modalTextPiano.EN;
  modalTextTicTacToe.innerHTML = languageVersion.modalTextTicTacToe.EN;
  modalTextBadCitizen.innerHTML = languageVersion.modalTextBadCitizen.EN;

  titleAboutMe.innerHTML = languageVersion.titleAboutMe.EN;
  textAboutMe.innerHTML = languageVersion.textAboutMe.EN;
  titleServices.innerHTML = languageVersion.titleServices.EN;
  titleWebDesign.innerHTML = languageVersion.titleWebDesign.EN;
  textWebDesign.innerHTML = languageVersion.textWebDesign.EN;
  titleDev.innerHTML = languageVersion.titleDev.EN;
  textDev.innerHTML = languageVersion.textDev.EN;
  titleMobile.innerHTML = languageVersion.titleMobile.EN;
  textMobile.innerHTML = languageVersion.textMobile.EN;
  titleBackEnd.innerHTML = languageVersion.titleBackEnd.EN;
  textBackEnd.innerHTML = languageVersion.textBackEnd.EN;
  titleContenu.innerHTML = languageVersion.titleContenu.EN;
  textContenu.innerHTML = languageVersion.textContenu.EN;
  titleCommerce.innerHTML = languageVersion.titleCommerce.EN;
  textCommerce.innerHTML = languageVersion.textCommerce.EN;

  titleFormContact.innerHTML = languageVersion.titleFormContact.EN;
 
  btnSendForm.innerHTML = languageVersion.btnSendForm.EN;
  inputFormName.placeholder = languageVersion.inputFormName.EN;
  inputFormMail.placeholder = languageVersion.inputFormMail.EN;
  formTextarea.placeholder = languageVersion.formTextarea.EN;
}

function changelanguageToFR() {
  navLinkHome.innerHTML = languageVersion.navLinkHome.FR;
  navLinkWork.innerHTML = languageVersion.navLinkWork.FR;
  navLinkAbout.innerHTML = languageVersion.navLinkAbout.FR;
  navLinkServices.innerHTML = languageVersion.navLinkServices.FR;
  navLinkContact.innerHTML = languageVersion.navLinkContact.FR;
  bonjour.innerHTML = languageVersion.bonjour.FR;

  developeur.innerHTML = languageVersion.developeur.FR;
  aboutMeBtn.innerHTML = languageVersion.aboutMeBtn.FR;
  downloadResumeBtn.innerHTML = languageVersion.downloadResumeBtn.FR;
  workTitle.innerHTML = languageVersion.workTitle.FR;
  modalTextDisney.innerHTML = languageVersion.modalTextDisney.FR;

  modalTextTesla.innerHTML = languageVersion.modalTextTesla.FR;
  modalTextPager.innerHTML = languageVersion.modalTextPager.FR;
  modalTextGeritch.innerHTML = languageVersion.modalTextGeritch.FR;
  modalTextGnShop.innerHTML = languageVersion.modalTextEcommerce.FR;
  modalTextLazyBeast.innerHTML = languageVersion.modalTextLazyBeast.FR;
  modalTextCineApp.innerHTML = languageVersion.modalTextCineApp.FR;
  modalTextBookApp.innerHTML = languageVersion.modalTextBookApp.FR;
  modalTextFlagApp.innerHTML = languageVersion.modalTextFlagApp.FR;
  modalTextFaceDetection.innerHTML = languageVersion.modalTextFaceDetection.FR;
  modalTextPiano.innerHTML = languageVersion.modalTextPiano.FR;
  modalTextTicTacToe.innerHTML = languageVersion.modalTextTicTacToe.FR;
  modalTextBadCitizen.innerHTML = languageVersion.modalTextBadCitizen.FR;

  btnProjectLinkWebsite.forEach((btn) => {

    btn.innerHTML = languageVersion.btnProjectLinkWebsite.FR;
      })
      
 


  titleAboutMe.innerHTML = languageVersion.titleAboutMe.FR;
  textAboutMe.innerHTML = languageVersion.textAboutMe.FR;
  titleServices.innerHTML = languageVersion.titleServices.FR;
  titleWebDesign.innerHTML = languageVersion.titleWebDesign.FR;
  textWebDesign.innerHTML = languageVersion.textWebDesign.FR;
  titleDev.innerHTML = languageVersion.titleDev.FR;
  textDev.innerHTML = languageVersion.textDev.FR;
  titleMobile.innerHTML = languageVersion.titleMobile.FR;
  textMobile.innerHTML = languageVersion.textMobile.FR;
  titleBackEnd.innerHTML = languageVersion.titleBackEnd.FR;
  textBackEnd.innerHTML = languageVersion.textBackEnd.FR;
  titleContenu.innerHTML = languageVersion.titleContenu.FR;
  textContenu.innerHTML = languageVersion.textContenu.FR;
  titleCommerce.innerHTML = languageVersion.titleCommerce.FR;
  textCommerce.innerHTML = languageVersion.textCommerce.FR;
  titleFormContact.innerHTML = languageVersion.titleFormContact.FR;

 
  btnSendForm.innerHTML = languageVersion.btnSendForm.FR;
  inputFormName.placeholder = languageVersion.inputFormName.FR;
  inputFormMail.placeholder = languageVersion.inputFormMail.FR;
  formTextarea.placeholder = languageVersion.formTextarea.FR;
}
changelanguageToEng();