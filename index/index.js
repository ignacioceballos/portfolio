//__________________________________________________________________________________
//en estas lineas de codigo busca en el html las clases hero,intro y logo intro
const hero = document.querySelector(".hero");
const intro = document.querySelector(".intro");
const logo = document.querySelector(".logo-intro");
//__________________________________________________________________________________
window.addEventListener("scroll", function() {//esto detecta cuando el usuario hace scroll

    console.log(window.scrollY); //se usa para saber la cantidad de pixeles que baja el usuario

    if (window.scrollY > 50) {//if si el usuario baja mas de 50px
        intro.classList.add("scrolled");//estas dos lineas de codigo hacen que "cambie" el css
        hero.classList.add("show");//y se pueda usar el scrolled y el show en las clases intro y hero

        logo.style.opacity = "0";//hace invisible el primer logo

        setTimeout(() => {//ejecuta el codigo despues de un cierto tiempo, en este caso 200 milisegundos
            logo.src = "../imagenes/logo-scroll2.png";//cambia a la segunda imagen
            logo.style.opacity = "1";//reaparece el primer logo, osea si el usuario sube de nuevo vuelve a aparecer el primer logo
        }, 200);

    } else {
        intro.classList.remove("scrolled");//vuelve el css como estaba antes
        //___________________________________________________________________________________
           //apartir de aca es lo mismo que arriba pero para el primer logo
        logo.style.opacity = "0";

        setTimeout(() => {
            logo.src = "../imagenes/logo-principal.png";
            logo.style.opacity = "1";
        }, 200);
    }
});