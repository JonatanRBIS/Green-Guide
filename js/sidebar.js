let sidebar = document.getElementById("sidebar");
    let sidebarButton = document.getElementById("#sidebarCollapse")

    function inBar() {
    $("#sidebar").removeClass("active");
    $("#sidebaricon").hide(0);  
    }
    function outBar() {
    $("#sidebar").toggleClass("active");
    $("#sidebaricon").show("slow");
    }

    function buttonBar() {
        $("#sidebar").toggleClass("active");
    }
        function myFunction(x) {
        
    if (x.matches) { // If media query matches
        sidebar.removeEventListener("mouseover",inBar)
        sidebar.removeEventListener("mouseout", outBar)

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', buttonBar);
        });
    } 
    else {
        sidebar.addEventListener("mouseover", inBar);
        sidebar.addEventListener("mouseout", outBar);
    }
  }
var x = window.matchMedia("(max-width: 700px)")
myFunction(x) // Call listener function at run time
x.addEventListener(myFunction) // Attach listener function on state changes
  
    