(function(){
    console.log("vive la boîte modale");

    let boite__modale = document.querySelector(".boite__modale")
    let boite__modale__texte = document.querySelector(".boite__modale__texte")
    let boite__modale__fermeture = document.querySelector(".boite__modale__fermeture")
    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');
    console.log(cours__desc__ouvrir.length);   

    boite__modale__fermeture.addEventListener('mousedown', function(){
        boite__modale.classList.remove('ouvrir')
    
     })
   
    for (const bout of cours__desc__ouvrir) {
        console.log(bout.tagName)
        bout.addEventListener('mousedown', function(){
            console.log(this.parentNode.parentNode.children[0].innerHTML)

            boite__modale.classList.add('ouvrir')
            console.log(boite__modale.classList)
            boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML
   
   /*
      parentNode
      children()
      innerHTML
   */
   
   
        })
    }
   })() 