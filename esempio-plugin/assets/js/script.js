document.addEventListener("DOMContentLoaded", function() {
  var banner = document.getElementById("banner");
  banner.addEventListener("mouseover", function() {
	banner.style.left = "0"; // Sposta il banner visibile  
    
  });
  banner.addEventListener("mouseout", function() {
	banner.style.left = "-125px"; // Nasconde il banner
   
  });
});
