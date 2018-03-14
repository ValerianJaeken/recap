  // ensemble de fonctions qui changeront les couleurs des icones dynamiquement


  function randomI() {
    let rnd = Math.floor(Math.random() * 255);
    return rnd;
  }
    function rd5(){
    let rand5 = Math.floor(Math.random()*5);
    return rand5;
    }
  function randColor() {
    let colorI = document.getElementById("headerI");
    let  fb = colorI.children[rd5()];

    fb.style.color =  'rgb(' + randomI() + ',' + randomI() + ',' + randomI() + ')';
  }

  function intColor(){
    setInterval(randColor,600);
  }

  intColor();
