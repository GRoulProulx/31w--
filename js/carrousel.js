(function () {
  console.log("Vive JavaScript");
  let carrousel__bouton = document.querySelector(".carrousel__bouton");
  let carrousel__x = document.querySelector(".carrousel__x");
  let carrousel = document.querySelector(".carrousel");
  let carrousel__image = document.querySelector(".carrousel__image");
  let carrousel__figure = document.querySelector(".carrousel__figure");
  let galerie = document.querySelector(".galerie");
  let galerie__img = document.querySelectorAll(".galerie img");
  let carrousel__gauche = document.querySelector(".carrousel__gauche");
  let carrousel__droit = document.querySelector(".carrousel__droit");
  let carrousel__form = document.querySelector(".carrousel__form");
  let img = document.querySelectorAll(".galerie > figure");
  let numData = 0;
  let radio = 0;

  console.log(galerie__img.length);

  img.forEach(function (elm, i) {
    element.addEventListener("click", function () {
      if (carrousel__figure.innerHTML == "") {
        remplirCarrousel();
      }
      afficheImage(i);
      carrousel.classList.add("carrousel--ouvrir");
    });
  });

  function remplirCarrousel() {
    for (elm of galerie__img) {
      console.log(elm.src);
      let img = document.createElement("img");
      img.src = elm.src; // copie une image de la galerie vers le carrousel
      img.classList.add("carrousel__img");
      carrousel__figure.appendChild(img);
    }
  }

  function creationButtonRadio() {
    let button_radio = document.createElement("input");
    button_radio.type = "radio";
    button_radio.name = "img";
    carrousel__form.appendChild(button_radio)
    return button_radio;
  }

  function afficheImage(index) {
    let carrousel__img = document.querySelectorAll(".carrousel__img");
    for (let i = 0; i < carrousel__img.length; i++) {
      carrousel__img[i].classList.remove("carrousel__img--visible");
    }
    carrousel__img[index].classList.add("carrousel__img--visible");
  }

  carrousel__x.addEventListener("click", function () {
    carrousel.classList.remove("carrousel--ouvrir");
    console.log("fermer");
  });
})();
