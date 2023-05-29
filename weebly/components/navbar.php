<div class="header">
        <div class="content-container">
            <div class="dropdown-container">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="\weebly\index.php">Home</a>
                        <a href="\weebly\sub/menu.php">Menu</a>
                        <a href="\weebly\sub/about.php">About</a>
                        <a href="\weebly\sub/location.php">Locations</a>
                        <a href="https://jadransia.weebly.com/">Weebly</a>
                    </div>
                </div>
            </div>
            <script>
            /* fcia na zapnianie a vypinanie dropdownu */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show"); //vzdy ked sa otvori dostane classu show
                document.getElementById("blurred-area").classList.toggle("blurry-area");
            }
            // vypnut dropdown ked klikne user inde nez je dropdown-content
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                        }
                    }
                    
                    var blurred = document.getElementsById("blurred-area");
                    var j;
                    for (j = 0; j < blurred.length; j++) {
                        var openBlurred = blurred[j];
                        if (openBlurred.classList.contains('blurry-area')) {
                        openDropdown.classList.remove('blurry-area');
                        }
                    }

                }
            }
            </script>
            <div class="logo">
                <span><a href="\weebly\index.php">Jadránsia</a></span>
            </div>
        </div>
    </div>