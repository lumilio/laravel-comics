<footer id='app_footer'>
    <div class="layout-box">
        <div class="centered-box">
            <div class="mini-list">
                <div>
                    <h3>DC COMICS</h3>
                    <ul>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
                <div>
                    <h3>SHOP</h3>
                    <ul>
                        <li><a href="#">Shop DC</a> </li>
                        <li><a href="#">Shop DC Collectibles</a></li>
                    </ul>
                </div>
            </div>
            <div class="mini-list">
                <h3>DC</h3>
                <ul>
                    <li><a href="#">Terms Of Use</a></li>
                    <li><a href="#">Privacy policy (New)</a></li>
                    <li><a href="#">Ad Choices</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Subscriptions</a></li>
                    <li><a href="#">Talent Workshop</a></li>
                    <li><a href="#">CPSC Certificates</a></li>
                    <li><a href="#">Ratings</a></li>
                    <li><a href="#">Shop Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="mini-list">
                <h3>SITES</h3>
                <ul>
                    <li><a href="#">DC</a></li>
                    <li><a href="#">MAD Magazine</a></li>
                    <li><a href="#">DC Kids</a></li>
                    <li><a href="#">DC Universe</a></li>
                    <li><a href="#">DC Power Visa</a></li>
                </ul>
            </div>
            <img id='footer-logo' src="../img/dc-logo-bg.png" alt="">
        </div>
    </div>



    <div class='container-fluid banner2 d-flex justify-content-center footer-banner'>
        <div class="layout-box-2">
            <div class="centered-box ">
                <button>SING-UP NOW!</button>
                <div class="follow-links">
                    <a id='followtag' href="#"><b>FOLLOW US</b></a>
                    <ul id='footer-list'>
                        <li v-for="link in links" v-bind:key="link.id"> <a href="#"><img :src="require(`../assets/img/${link}`)" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
</footer>