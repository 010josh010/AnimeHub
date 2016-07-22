var menuButton = document.getElementById("menu_button"); 
var navListStyle = document.getElementById("navUl").style

    menuButton.onclick = function(){
         
        navListStyle.maxHeight = (navListStyle.maxHeight =='30em') ? "0em" : "30em"; 
        
                   
    }
    