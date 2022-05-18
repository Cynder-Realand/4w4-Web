(function(){
    console.log("vive la boîte carousel");
   
    let boite__carrousel = document.querySelector(".boite__carrousel")
    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation")
    let boite__carrousel__fermeture = document.querySelector(".boite__carrousel__fermeture")
     /* Conteneur d'image du carrousel */
    let boite__carrousel__img = document.querySelector(".boite__carrousel__img")

    let galerie__img = document.querySelectorAll('.galerie img');
    console.log(galerie__img.length);   
   
    boite__carrousel__fermeture.addEventListener('mousedown', function(){
       boite__carrousel.classList.remove('ouvrir')
   
    })
   
   
    let index = 0
    for (const img of galerie__img) {
      let elmImg = document.createElement('img')
      // console.log(img.getAttribute('src'))
      img.dataset.index = index;
      elmImg.setAttribute('src', img.getAttribute('src'))
      boite__carrousel__img.append(elmImg)
   
   
   
   
   
        let bouton = document.createElement('input')
        bouton.checked=false
        bouton.type = "radio"
        bouton.class="bouton"
        bouton.name="bouton"
        bouton.dataset.index = index++
        boite__carrousel__navigation.append(bouton)
        bouton.addEventListener('mousedown', function(){
           // elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
        boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir')
        })
   
        console.log(img.tagName)
        img.addEventListener('mousedown', function(){
            console.log(this.getAttribute('src'))
   
            boite__carrousel.classList.add('ouvrir')
            //console.log(boite__carrousel.classList)
         boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir')
         //elmImg.setAttribute('src', this.getAttribute('src'))
   
        })
    }
   })()