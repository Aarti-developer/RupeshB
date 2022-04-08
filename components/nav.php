<!--  -->

<!--  -->
<header class="pc_header">
    <nav class="pc_navbar" id="pc_navbar">
        <div class="pc_innerdiv">            
            <div class="hamburger d-flex justify-content-evenly flex-column" id="hamburger">
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
            </div>
            <div class="pc_logo">
                <a href="../pages/index.php">
                    <h4>Lorem, ipsum</h4>
                </a>
            </div>
        </div>
    </nav>
    <!--  -->
    <div class="pc_links-main" id="pc_link">
        <div class="pc_innerlink">
        <span class="btn-close btn-close-white" id="btn_sideNavClose"><i></i><i></i></span>

            <nav class="pc-links_nav">
                <!-- <img class="img-overlay" src="../assets/media/images/p-4.png" alt=""> -->
                <ul class="pc-links">
                    <li>
                        <a href="../pages/index.php">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="../pages/michel-adam.php">
                           About
                        </a>
                    </li>
                    <li>
                        <a href="../pages/kashiff-khan.php">
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="../pages/fashiontv.php">
                            Explore
                        </a>
                    </li>
                    <li>
                        <a href="../pages/channels.php">
                            Bussiness
                        </a>
                    </li>
                    <li>
                        <a href="../pages/ftv-personalcare.php">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</header>
<!--  -->
<script>
    let hamburger = document.getElementById("hamburger");
    let btnClose = document.getElementById("btn_sideNavClose");
    let menuLinks = document.getElementById("pc_link");
    // let imgOverlay = document.querySelector(".img-overlay");
    // let linkOnHover = document.querySelectorAll(".link-onhover");
    // imgLinks = [
    //  "/assets/media/images/p-4.png",
    //  "/assets/media/images/ma-3.png",
    //  "/assets/media/images/kk-2.png",
    //  "/assets/media/images/ma-3.png",
    //  "/assets/media/images/kk-2.png",
    //  "/assets/media/images/ma-3.png",
    //  "/assets/media/images/kk-2.png",
    //  "/assets/media/images/ma-3.png",
    // ]
    // for (let i = 0; i < linkOnHover.length; i++) {
    //     linkOnHover[i].addEventListener("mousemove", () => {
    //         imgOverlay.setAttribute("src", imgLinks[i]);
    //         imgOverlay.classList.add("active");
    //     });
    //     linkOnHover[i].addEventListener("mouseout", () => {
    //         imgOverlay.classList.remove("active");
    //     });
    // }
    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("hamburger-toggle");
        menuLinks.classList.toggle("active");
    });
    btnClose.addEventListener("click", ()=> {
        menuLinks.classList.remove("active");
    });

</script>