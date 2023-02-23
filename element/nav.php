<!DOCTYPE html>
<html>

<body>
    <div class="navtop">
        <input type="checkbox" id="check" onclick="navctrl()">
        <label for="check" class="menubtn">
            <i class="fas fa-bars"></i>
        </label>
        <div class="navtop__logo-container">
            <div class="navtop__logo-img-cont">
                <a href="#home"><img src="static/logo.png" class="navtop__logo-img" /></a>
            </div>
        </div>
        <div class="wrapper">
            <ul id="navlink">
                <li><a href="#home" id="homelink">Home</a></li>
                <li><a href="#projects" id="projectlink">Projects</a></li>
                <li><a href="" id="aboutlink" onclick="openM()">About</a></li>
            </ul>
        </div>
    </div>



    <!-- Modal (About Me) -->
    <div id="aboutModal" class="modal">
        <div class="modal-content">
            <span class="close"><i class="fas fa-times"></i></span>
            <div class="modal-left">
                <div class="modal-bgtext-left">
                    <h1> ABOUT </h1>
                </div>
                <div class="modal-left-content">
                </div>
            </div>
            <div class="modal-right">
                <div class="modal-bgtext-right">
                    <h1> ME </h1>
                </div>
                <div class="modal-right-content">
                    <h2>Hi, I'm Un Jun Jie</h2>
                    <br/>
                    <p>A Fresh Graduate Software Engineer from UPSI, Malaysia.
                        I like to develop something new and creative.
                        Interested in Web Development, Mobile App Development, etc.
                        Besides, I'm also a sport and food lover.</p>
                    <p>I'm looking for any opportunities where I can contribute, learn and grow.</p>
                    <br/>
                    <div class="skills">
                        <div class="skills__skill">HTML</div>
                        <div class="skills__skill">CSS</div>
                        <div class="skills__skill">JavaScript</div>
                        <div class="skills__skill">PHP</div>
                        <div class="skills__skill">SQL</div>
                        <div class="skills__skill">Python</div>
                        <div class="skills__skill">C++</div>
                        <div class="skills__skill">Java</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>