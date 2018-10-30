//BURGERIS
    function burger() {
        var x = document.getElementById("navbar");
        if (x.className === "navigation") {
            x.className += " responsive";
        } else {
            x.className = "navigation"
        }
                };


//NAVIGACIJA
//Padaro, kad navigacija neuzdengtu dalies sekcijos, kuria pasirinkome is meniu
    addEventListener("hashchange", function(){
        var w = window.outerWidth
        if (w>=661){
                scrollBy (0, -90);
//Ant mazesnio ekrano navigacija uzima daugiau vietos, del to scrollBy yra didesnis
        }else{
                scrollBy (0, -150)};
                });
        
    