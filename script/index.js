const openModalButtons = document.querySelectorAll("[data-modal-target]");
const closeModalButtons = document.querySelectorAll("[data-close-button]");
const overlay = document.getElementById("overlay");
const modalTriggers = document.querySelectorAll(".workBx");
const buttons = document.querySelectorAll("[data-carousel-button]");

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
const modalTextLazyBeast = document.querySelector(
  ".modal-body-texte-LazyBeast"
);
const modalTextCineApp = document.querySelector(".modal-body-texte-cineApp");
const modalTextBookApp = document.querySelector(".modal-body-texte-bookApp");
const modalTextFlagApp = document.querySelector(".modal-body-texte-flagApp");
const btnProjectLinkLazyBeast = document.querySelector(
  ".btn-project-link-LazyBeast"
);
const btnProjectLinkCineApp = document.querySelector(
  ".btn-project-link-cineApp"
);
const btnProjectLinkBookApp = document.querySelector(
  ".btn-project-link-bookApp"
);
const btnProjectLinkFlagApp = document.querySelector(
  ".btn-project-link-flagApp"
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
const btnSendForm = document.querySelector(".btn-send-form");

 const inputFormName = document.querySelector('.input-form-name') 
 const inputFormMail = document.querySelector('.input-form-mail') 
 const formTextarea = document.querySelector('.form-textarea') 



const changeLanguageBtnToEN = document.querySelector(".change-language-btn-EN");
const changeLanguageBtnToFR = document.querySelector(".change-language-btn-FR");

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
  modalTextLazyBeast: {
    EN: `A social network build with<strong> Node js, React, express and MongoDB</strong>!Share your
    mood, photos, video and link with your followers</p>`,
    FR: `Un réseau social créé avec<strong> Node js, React, express et MongoDB</strong>!Partager vos
        humeur, photos, video et lien avec vos followers</p>`,
  },
  modalTextCineApp: {
    EN: "my Resume",
    FR: "mon Cv",
  },
  modalTextBookApp: {
    EN: "my Resume",
    FR: "mon Cv",
  },
  modalTextFlagApp: {
    EN: "my Resume",
    FR: "mon Cv",
  },
  btnProjectLinkLazyBeast: {
    EN: "my Resume",
    FR: "Consulter le site",
  },
  btnProjectLinkCineApp: {
    EN: "my Resume",
    FR: "Consulter le site",
  },
  btnProjectLinkBookApp: {
    EN: "my Resume",
    FR: "Consulter le site",
  },
  btnProjectLinkFlagApp: {
    EN: "my Resume",
    FR: "Consulter le site",
  },
  titleAboutMe: {
    EN: "About me",
    FR: "A propos de moi",
  },
  textAboutMe: {
    EN: `Currently in training and with the aim of obtaining professional certification as a web developer
    Full stack, I'm looking for a trainee developer position.
    <br> <br> I possess ears and already have a good mastery of programming languages ​​and lines of
    IT codes, as well as practical solutions for solution research. <br> Autonomous of
    nature, I can work alone or in
    group, being equally capable of adapting to an environment I do not know.
    <br> <br> I'm going to try to force a proposal when I'm given the freedom, looking
    always to improve and optimize the projects to the maximum to satisfy the demand of the
    client. More I do not miss
    to bring my serious and good mood with me.`,
    FR: `Actuellement en formation et ayant pour objectif ma certification professionnelle de développeur web
    Full stack, je recherche un poste de stagiaire développeur.
    <br><br>Je possède d'ores et déjà une bonne maîtrise des langages de programmation et des lignes de
    codes informatiques, ainsi que des bonnes pratiques de recherches de solution.<br>Autonome de
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
    EN: "The creation and design of a modern and aesthetic web site, interface design and interactive architecture",
    FR: "La création et la conception de site web moderne et esthétique, conception d'interface et d’architecture interactionnelle",
  },
  titleDev: {
    EN: "web developpement",
    FR: "web developpement",
  },
  textDev: {
    EN: 'development of dynamic web applications "One Page", fast and reactive, allowing an improved user experience',
    FR: `développement d'applications web dynamique "One Page", rapide et reactive, permetant une experience utilisateur améliorée`,
  },
  titleMobile: {
    EN: "Mobile app",
    FR: "Mobile app",
  },
  textMobile: {
    EN: "Responsive conception, so that the contents automatically adapt to the size of the screen used by the device, and develop application grace in the ionic framework",
    FR: `conception responsive, afin que les contenus s'adaptent automatiquement à la taille de l'écran de l'appareil utilisé, et develeppoment d'application grace au framework ionic`,
  },
  titleBackEnd: {
    EN: "Back-end",
    FR: "Back-end",
  },
  textBackEnd: {
    EN: "Design of technical elements necessary for the operation of a site, management of data bases with MongoDb",
    FR: "Conception des éléments techniques nécessaires au fonctionnement d'un site, gestion des bases de données avec MongoDb",
  },
  titleContenu: {
    EN: "Content creation",
    FR: "Création de contenu",
  },
  textContenu: {
    EN: "Passionate, curious and cultivated I might agree your interesting content projects!",
    FR: "Passioné, curieux et cultivé je pourrais agrementé vos projets de contenu interessant!",
  },
  titleCommerce: {
    EN: "commercial talent",
    FR: "Fibre commerciale",
  },
  textCommerce: {
    EN: "Thanks to my career and my extensive experience in commerce and customer service, my projects are adapted and thought for customer satisfaction!",
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
  btnSendForm:{
      EN: "SEND",
      FR: "ENVOYER"
  },
  inputFormName:{
    EN: "Full name",
    FR: "Nom complet"
},
inputFormMail:{
    EN: "your mail",
    FR: "Votre Email"
},
formTextarea:{
    EN: "Message",
    FR: "Votre message"
},
  
};

changeLanguageBtnToEN.addEventListener("click", () => {
  changelanguageToEng();
});
changeLanguageBtnToFR.addEventListener("click", () => {
  changelanguageToFR();
});

/*SCROOL SYSTEM */
window.addEventListener("scroll", () => {
  const header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
});

/*MOBILE / DESKTOP MENU TOGGLE */
const toggleMenu = () => {
  let menuToggle = document.querySelector(".toggle");
  let menu = document.querySelector(".menu");
  menuToggle.classList.toggle("active");
  menu.classList.toggle("active");
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
  bonjour.innerHTML = languageVersion.bonjour.EN;

  developeur.innerHTML = languageVersion.developeur.EN;
  aboutMeBtn.innerHTML = languageVersion.aboutMeBtn.EN;
  downloadResumeBtn.innerHTML = languageVersion.downloadResumeBtn.EN;
  workTitle.innerHTML = languageVersion.workTitle.EN;
  modalTextLazyBeast.innerHTML = languageVersion.modalTextLazyBeast.EN;
  modalTextCineApp.innerHTML = languageVersion.modalTextCineApp.EN;
  modalTextBookApp.innerHTML = languageVersion.modalTextBookApp.EN;
  modalTextFlagApp.innerHTML = languageVersion.modalTextFlagApp.EN;
  btnProjectLinkLazyBeast.innerHTML =
    languageVersion.btnProjectLinkLazyBeast.EN;
  btnProjectLinkCineApp.innerHTML = languageVersion.btnProjectLinkCineApp.EN;
  btnProjectLinkBookApp.innerHTML = languageVersion.btnProjectLinkBookApp.EN;
  btnProjectLinkFlagApp.innerHTML = languageVersion.btnProjectLinkFlagApp.EN;
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

  formAdresse.innerHTML = languageVersion.formAdresse.EN;
  formPhone.innerHTML = languageVersion.formPhone.EN;
  btnSendForm.innerHTML = languageVersion.btnSendForm.EN;
  inputFormName.placeholder = languageVersion.inputFormName.EN
inputFormMail.placeholder = languageVersion.inputFormMail.EN
formTextarea.placeholder = languageVersion.formTextarea.EN
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
  modalTextLazyBeast.innerHTML = languageVersion.modalTextLazyBeast.FR;
  modalTextCineApp.innerHTML = languageVersion.modalTextCineApp.FR;
  modalTextBookApp.innerHTML = languageVersion.modalTextBookApp.FR;
  modalTextFlagApp.innerHTML = languageVersion.modalTextFlagApp.FR;
  btnProjectLinkLazyBeast.innerHTML =
    languageVersion.btnProjectLinkLazyBeast.FR;
  btnProjectLinkCineApp.innerHTML = languageVersion.btnProjectLinkCineApp.FR;
  btnProjectLinkBookApp.innerHTML = languageVersion.btnProjectLinkBookApp.FR;
  btnProjectLinkFlagApp.innerHTML = languageVersion.btnProjectLinkFlagApp.FR;
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

  formAdresse.innerHTML = languageVersion.formAdresse.FR;
  formPhone.innerHTML = languageVersion.formPhone.FR;
  btnSendForm.innerHTML = languageVersion.btnSendForm.FR;
  inputFormName.placeholder = languageVersion.inputFormName.FR
    inputFormMail.placeholder = languageVersion.inputFormMail.FR
    formTextarea.placeholder = languageVersion.formTextarea.FR

}
