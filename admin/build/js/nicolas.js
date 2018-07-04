var afficheRecette = document.getElementById('editor-show');


function refreshDiv() { //make sure braces are on the same line as the block statement, it's a good convention in JS
    afficheRecette.textContent = $('#editor-one').cleanHtml(); 
} 

window.setInterval(refreshDiv, 100); //place reference to refreshDiv (not a string)


 $("buton1").click(function(){
    $.post("index.php?action=publishRecette",
    {
        recette_descrition: $('#editor-one').cleanHtml(),
    }
  );
}); 