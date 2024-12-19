(function () {
  console.log("Vive JavaScript");
  let carrousel__x = document.querySelector(".carrousel__x");
  let carrousel = document.querySelector(".carrousel");
  let carrousel__image = document.querySelector(".carrousel__image");
  let carrousel__figure = document.querySelector(".carrousel__figure");
  let galerie__img = document.querySelectorAll(".galerie img");
  let carrousel__gauche = document.querySelector(".carrousel__gauche");
  let carrousel__droit = document.querySelector(".carrousel__droit");
  let carrousel__form = document.querySelector(".carrousel__form");
  let img = document.querySelectorAll(".galerie > figure");

  console.log("Number of images in gallery:", galerie__img.length);
  console.log(img);

  img.forEach(function (elm, i) {
    elm.addEventListener("click", function () {
      console.log(`Image ${i + 1} clicked`);
      if (carrousel__figure.innerHTML == "") {
        console.log("Carousel is empty, filling it");
        remplirCarrousel();
      }
      afficheImage(i);
      carrousel.classList.add("carrousel--ouvrir");
      console.log("Carousel opened");
    });
  });

  function remplirCarrousel() {
    console.log("Filling carousel");
    for (elm of galerie__img) {
      console.log("Adding image to carousel:", elm.src);
      let img = document.createElement("img");
      img.src = elm.src;
      img.classList.add("carrousel__img");
      carrousel__figure.appendChild(img);
    }
    console.log("Carousel filled");
  }

  function creationButtonRadio() {
    console.log("Creating radio button");
    let button_radio = document.createElement("input");
    button_radio.type = "radio";
    button_radio.name = "img";
    carrousel__form.appendChild(button_radio);
    return button_radio;
  }

  function afficheImage(index) {
    let i = index;
    console.log(`Displaying image at index: ${index}`);
    let carrousel__img = document.querySelectorAll(".carrousel__img");
    for (let i = 0; i < carrousel__img.length; i++) {
      carrousel__img[i].classList.remove("carrousel__img--visible");
    }
    carrousel__img[index].classList.add("carrousel__img--visible");

    carrousel__droit.addEventListener("click", function foward() {
      i++;
      if (i >= galerie__img.length) {
        i = 0;
      }
      console.log(`Moving forward to image: ${i}`);
      afficheImage(i);
    });
    carrousel__gauche.addEventListener("click", function back() {
      i--;
      if (i < 0) {
        i = galerie__img.length - 1;
      }
      console.log(`Moving backward to image: ${i}`);
      afficheImage(i);
    });
  }

  carrousel__x.addEventListener("click", function () {
    carrousel.classList.remove("carrousel--ouvrir");
    console.log("Carousel closed");
  });

  console.log("IIFE executed, event listeners set up");
})();
