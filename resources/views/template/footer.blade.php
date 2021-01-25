<footer>
    <div class="footer-container">
        <div class="footer-links">
            <div class="footer-links-pages">
                <ul>
                    <li>
                        <h3>Services</h3>
                        <div class="link-pages">
                            <a href="{{ URL::to('/services') }}">Explore Services</a>
                            <a href="{{ URL::to('/services') }}#custom-create">Custom Created Website</a>
                            <a href="{{ URL::to('/services') }}#live-learning">Learn To Code</a>
                        </div>
                    </li>
                    <li>
                        <h3>About</h3>
                        <div class="link-pages">
                            <a href="{{ URL::to('/about') }}#intro">Introduction</a>
                            <a href="{{ URL::to('/about') }}#works">How It Works</a>
                            <a href="{{ URL::to('/about') }}#mastery">Mastery</a>
                        </div>
                    </li>
                    <li>
                        <h3>Portfolio</h3>
                        <div class="link-pages">
                            <a href="{{ URL::to('/portfolio') }}">Discover Projects</a>
                            <a href="{{ URL::to('/portfolio') }}#web">Web Projects</a>
                            <a href="{{ URL::to('/portfolio') }}#py">Python Projects</a>
                            <a href="{{ URL::to('/portfolio') }}#cpp">C++ Projects</a>
                        </div>
                    </li>
                    <li>
                        <h3>Contact</h3>
                        <div class="link-pages">
                            <a href="{{ URL::to('/contact') }}">Get in Touch</a>
                            <a href="mailto:jimminciong@jimminc.tech">jimminciong@jimminc.tech</a>
                            <a href="#">+447415772616</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footer-cv-sp">
                <a href="{{ URL::to('/download/cv.pdf') }}" class="cv-dl">Download CV</a>
                <div class="footer-sp-links">
                    <a href="{{ URL::to('/instagram') }}">
                        <div class="footer-sp-link-case">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </div>
                    </a>
                    <a href="{{ URL::to('/twitter') }}"">
                        <div class="footer-sp-link-case">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </div>
                    </a>
                    <a href="{{ URL::to('/linkedin') }}">
                        <div class="footer-sp-link-case">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </div>
                    </a>
                    <a href="{{ URL::to('/github') }}">
                        <div class="footer-sp-link-case">
                            <ion-icon name="logo-github"></ion-icon>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-law">
            <p id="copyright">Copyright &copy; <span>Jimm Inciong.</span> All Rights Reserved.</p>
            <span class="legis">Terms & Conditions</span>
            <span class="legis">Privacy Promise</span>
        </div>
    </div>
</footer>