<?php  
    function footer() {
        echo '<div class="footer" style="text-align:center; float:end; display: flex;
  justify-content: center;
  align-items: center;"> 
        GreenGuide. All rights reserved 2020
    </div>';
    }
    function close_bar() {
        echo '
        </div>
        
    </div>
    
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script type="text/javascript">
    let sidebar = document.getElementById("sidebar");


    function inBar() {
    $("#sidebar").removeClass("active");
    $("#sidebaricon").hide(0);  
    }
    function outBar() {
    $("#sidebar").toggleClass("active");
    $("#sidebaricon").show("slow");
    }
        function myFunction(x) {
        
    if (x.matches) { // If media query matches
        sidebar.removeEventListener("mouseover",inBar)
        sidebar.removeEventListener("mouseout", outBar)

        $(document).ready(function () {
            $("#sidebarCollapse").on("click", function () {
                $("#sidebar").toggleClass("active");
            });
        });
    } 
    else {
        sidebar.addEventListener("mouseover", inBar);
        sidebar.addEventListener("mouseout", outBar);
    }
  }
var x = window.matchMedia("(max-width: 800px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
  
    </script>
    </body>
    </html>';
    }
?>