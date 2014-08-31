<?php include('head.php'); ?>
  <body>
    <?php include('navbar.php'); ?>

  <!-- Primary Page Layout
  ================================================== -->

  <div class="container">
    <div id="side">
      <?php include('sidebar.php'); ?>
    </div>
    <div id="main" class="sixteen columns">
      <div id="top">
        <h1 style="margin-top: 40px">Hello World!</h1>
        <h5>So You Want To Learn How To Code?</h5>
        <h5>Here are some resources to help you become a web developer.</h5>

        <p id="reco"><span><img class="star" src="assets/img/star.png"> = My personal recommendations</span>
            <span style="margin-left: 5em;"><img class="leaf" src="assets/img/leaf.png"> = In person format option</span></p>

        <p>Got a favorite resource of your own? Email me <strong>codeforunicorns@gmail.com</strong> or tweet to me <strong>@fayeishere</strong></p>
  <!--       <div id="essential">
          <h5>Essential Links</h5>
          <p><a href="https://github.com/">Github</a></p>
          <p><a href="http://stackoverflow.com/">Stackoverflow</a></p>
        </div> -->
      </div>
      <hr />
      <div id="dropdown-container">
        <div class="dropdown column">
          <label for="selectListCost">$$</label>
          <select id="selectListCost">
            <option value="all">All</option>
            <option value="free">Free</option>
            <option value="paid">Paid</option>
          </select>
        </div>
        <div class="dropdown column">
          <label for="selectListLevel">Level</label>
          <select id="selectListLevel">
            <option value="all">All</option>
            <option value="beginner">Beginner</option>
            <option value="beyond">Beyond</option>
          </select>
        </div>
        <div class="dropdown column">
          <label for="selectListType">Type</label>
          <select id="selectListType">
            <option value="all">All</option>
            <option value="challenges">Challenges</option>
            <option value="videos">Videos</option>
            <option value="screencasts">Screencasts</option>
            <option value="bootcamps">Bootcamps</option>
            <option value="courses">Courses</option>
            <option value="tutorials">Tutorials</option>
            <option value="kitchen">Kitchen Sink</option>
          </select>
        </div>
        <div class="dropdown column">
          <label for="selectLanguageLevel">Language</label>
          <select id="selectLanguageLevel">
            <option value="all">All</option>
            <option value="ruby">Ruby</option>
            <option value="python">Python</option>
            <option value="html">HTML/CSS</option>
            <option value="javascript">Javascript</option>
            <option value="php">PHP</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>
    </div>
    <div class="content sixteen columns" id="bottom">
<!--       <div class="row-fluid"> -->
        <div class="one-third column resource free beginner courses challenges javascript html python php all">
          <h2>Codecademy<img class="star" src="assets/img/star.png"></h2>
          <img src="./assets/img/resources/codecademy1.png">
          <p>Want a simple down to earth and free platform to experiment with different languages? This is the best place to start! Exercises and challenges that teach you the basics of coding.</p>
          <p><a class="btn" target="_blank" href="http://www.codecademy.com">Go to site &raquo;</a></p>
        </div><!--/span-->
<!--         <div class="one-third column resource">
          <h2>LearnStreet</h2>
          <img src="./assets/img/resources/learnstreet.png">
          <p>Hand holding interactive instruction with code challenges and fun projects. I think they are pretty new but so far I really like what they're doing.</p>
          <p><a class="btn" href="http://www.learnstreet.com">Go to site &raquo;</a></p>
        </div> --><!--/span-->
        <div class="one-third column resource free paid beginner courses challenges screencasts videos ruby javascript html all">
          <h2>Codeschool<img class="star" src="assets/img/star.png"></h2>
          <img src="./assets/img/resources/codeschool1.png">
          <p>Also a good place for videos and fun interactive code challenges. The intro courses are free and then they want some cash.</p>
          <p><a class="btn" target="_blank" href="http://www.codeschool.com">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free beginner screencasts all">
          <h2>Don't Fear The Internet<img class="star" src="assets/img/star.png"></h2>
          <img src="./assets/img/resources/dontfear1.png">
          <p>"Basic HTML & CSS for non-web designers." This is super fun and super simple.</p>
          <p><a class="btn" target="_blank" href="http://www.dontfeartheinternet.com">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource paid beginner courses challenges videos ruby javascript html all">
          <h2>Treehouse<img class="star" src="assets/img/star.png"></h2>
          <img src="./assets/img/resources/treehouse1.png">
          <p>Entertaining videos including screecasts with a moderate amount of code challenges. Sit back and let the learning come to you. They want to get paid but they offer a free 14 day trial.</p>
          <p><a class="btn" target="_blank" href="http://teamtreehouse.com">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free beginner tutorials python all">
          <h2>Full Stack Python<img class="star" src="assets/img/star.png"></h2>
          <img src="./assets/img/resources/fspython1.png">
          <p>This site is amazing and does exactly what it says. Learn to write and launch a python app. Includes a great resource list as well.</p>
          <p><a class="btn" target="_blank" href="http://www.fullstackpython.com">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free beginner beyond courses videos python other all">
          <h2>Coursera</h2>
          <img src="./assets/img/resources/coursera1.png">
          <p>Real classes for real free. Computer science courses via video and quizzes in a structured timeline.</p>
          <p><a class="btn" target="_blank" href="https://www.coursera.org">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource paid beginner beyond courses python other all">
          <h2>Udacity</h2>
          <img src="./assets/img/resources/udacity1.png">
          <p>Informative videos and quizzes for free. Nothing too fancy but there are some big names in there. Very cool.</p>
          <p><a class="btn" target="_blank" href="https://www.udacity.com">Go to site &raquo;</a></p>
        </div>
        <!-- THIS IS DOWN RIGHT NOW??? -->
<!--         <div class="one-third column resource free beginner beyond courses all">
          <h2>Web Platform</h2>
          <img src="./assets/img/resources/web-platform1.png">
          <p>Beginner's guide and comprehensive tutorials. No dancing frogs here. These are docs and I recommend this site after some of the other basic coding sites. Provides details and fundamentals of the complexities of the web.</p>
          <p><a class="btn" target="_blank" href="http://docs.webplatform.org/wiki/Main_Page">Go to site &raquo;</a></p>
        </div> -->
        <div class="one-third column resource free paid videos courses beinner beyond other html python javascript php ruby all">
          <h2>Udemy</h2>
          <img src="./assets/img/resources/udemy1.png">
          <p>"Learn to build IOS, Android mobile apps, or develop websites in HTML, CSS and Javascript. Programming courses in Java, C++, Ruby on Rails, Python and many more."</p>
          <p><a class="btn" target="_blank" href="https://www.udemy.com/courses/Development/">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free beyond videos courses other all">
          <h2>MIT</h2>
          <img src="./assets/img/resources/mit1.png">
          <p>It blows my mind that this is free.</p>
          <p><a class="btn" target="_blank" href="http://ocw.mit.edu/courses/electrical-engineering-and-computer-science/">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free courses beginner html python php all kitchen">
          <h2>Peer2Peer</h2>
          <img src="./assets/img/resources/p2p1.png">
          <p>"Peer 2 Peer University is a grassroots open education project that organizes learning outside of institutional walls and gives learners recognition for their achievements."</p>
          <p><a class="btn" target="_blank" href="https://p2pu.org/en/groups/schools/school-of-webcraft/">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource challenges beginner free javascript html python php ruby other all">
          <h2>Programr</h2>
          <img src="./assets/img/resources/programr1.png">
          <p>This site is slow and failing and will be removed if not fixed soon</p>
          <p><a class="btn" target="_blank" href="http://www.programr.com">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free courses beyond other all">
          <h2>Saylor</h2>
          <img src="./assets/img/resources/saylor1.png">
          <p>Absolutely free CS courses claiming actual college credit for a fee.</p>
          <p><a class="btn" target="_blank" href="http://www.saylor.org/courses/#Computer Science">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource screencasts beginner free html javascript all">
          <h2>Code Player</h2>
          <img src="./assets/img/resources/codeplayer1.png">
          <p>"Video style walkthroughs showing cool stuff being created from scratch."</p>
          <p><a class="btn" target="_blank" href="http://thecodeplayer.com">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free courses beginner videos screencasts challenges javascript all">
          <h2>Khan Academy</h2>
          <img src="./assets/img/resources/khan1.png">
          <p>"Learn the fundamentals of programming with the popular JavaScript language and ProcessingJS library. Write your own programs and share them, explore programs made by others, and learn from each other's programs!"</p>
          <p><a class="btn" target="_blank" href="https://www.khanacademy.org/computing/cs">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource beyond free tutorials html javascript all">
          <h2>HTML5 Rocks</h2>
          <img src="./assets/img/resources/html5rocks1.png">
          <p></p>
          <p><a class="btn" target="_blank" href="http://www.html5rocks.com/en/tutorials/">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free tutorials beginner beyond videos javascript html python php ruby other kitchen all">
          <h2>Tuts+</h2>
          <img src="./assets/img/resources/tutsplus1.png">
          <p>"Tutorials, inspiration and videos to help you learn. Updated daily."</p>
          <p><a class="btn" target="_blank" href="http://tutsplus.com/">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free beginner screencasts tutorials html all">
          <h2>CSS-Tricks</h2>
          <img src="./assets/img/resources/csstricks1.png">
          <p></p>
          <p><a class="btn" target="_blank" href="http://css-tricks.com">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free beginner tutorials html javascript all">
          <h2>Web Monkey</h2>
          <img src="./assets/img/resources/webmonkey1.png">
          <p></p>
          <p><a class="btn" target="_blank" href="http://www.webmonkey.com/tutorials//">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free beginner challenges html javascript all">
          <h2>Code Avengers</h2>
          <img src="./assets/img/resources/codeavengers1.png">
          <p>"Learn to code websites, apps & games with over 100 hours of interactive HTML, CSS & JavaScript lessons"</p>
          <p><a class="btn" target="_blank" href="http://www.codeavengers.com/">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource beginner beyond tutorials screencasts challenges paid javascript html python php ruby other kitchen all">
          <h2>Lynda</h2>
<!--           Our developer tutorials can help you learn to develop and create mobile apps, work with PHP and MySQL databases, get started with the statistical processing language R, and much more. -->
          <img src="./assets/img/resources/lynda1.png">
          <p>"Learn how to code, create, and build web applications, from the foundations of object-oriented programming in C and C++, to how to write Java."</p>
          <p><a class="btn" target="_blank" href="http://www.lynda.com/Developer-training-tutorials/50-0.html">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource beginner courses screencasts paid javascript html python php all">
          <h2>Learnable</h2>
          <img src="./assets/img/resources/learnable1.png">
          <p>"Get unlimited online access to all of our courses and videos. Learn new technologies and languages easier with step-by-step instructions."</p>
          <p><a class="btn" target="_blank" href="https://learnable.com/home">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource courses paid ruby javascript html all">
          <h2>General Assembly<img class="star" src="assets/img/leaf.png"></h2>
          <img src="./assets/img/resources/genassembly1.png">
          <p>This needs more investigation or removed</p>
          <p><a class="btn" target="_blank" href="https://generalassemb.ly">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource courses free paid ruby javascript html all">
          <h2>Skill Crush</h2>
          <img src="./assets/img/resources/skillcrush1.png">
          <p>A free intro. PAID. Need to review.</p>
          <p><a class="btn" target="_blank" href="http://skillcrush.com/blueprint/web-developer/">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free tutorials javascript html all">
          <h2>Code For Good</h2>
          <img src="./assets/img/resources/cfg1.png">
          <p></p>
          <p><a class="btn" target="_blank" href="http://cfg.good.is/learn">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource paid ruby all">
          <h2>Upcase From Thoughtbot</h2>
          <img src="./assets/img/resources/upcase1.png">
          <p></p>
          <p><a class="btn" target="_blank" href="https://upcase.com/subscribe">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free tutorials html all">
          <h2>HTML Dog</h2>
          <img src="./assets/img/resources/htmldog1.png">
          <p>"Welcome to HTML Dog, the web designer’s resource for everything HTML, CSS, and JavaScript, the most common technologies used in making web pages."</p>
          <p><a class="btn" target="_blank" href="http://htmldog.com">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource paid beginner courses bootcamps all">
          <h2>Thinkful</h2>
          <img src="./assets/img/resources/thinkful1.png">
          <p></p>
          <p><a class="btn" target="_blank" href="http://www.thinkful.com">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource paid courses beginner beyond javascript ruby html all">
          <h2>Code Union</h2>
          <img src="./assets/img/resources/codeunion1.png">
          <p></p>
          <p><a class="btn" target="_blank" href="http://codeunion.io">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free paid beginner beyond screencasts javascript html python ruby php all">
          <h2>Devblog</h2>
          <img src="./assets/img/resources/devblog1.png">
          <p>Portal to favorite screencasts</p>
          <p><a class="btn" target="_blank" href="http://devblog.avdi.org/2013/06/21/a-list-of-programming-screencast-series/">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free paid beginner beyond screencasts ruby python other all">
          <h2>ReadWrite</h2>
          <img src="./assets/img/resources/readwrite1.png">
          <p>Portal to favorite screencasts - older but good</p>
          <p><a class="btn" target="_blank" href="http://readwrite.com/2008/05/28/15_places_to_find_great_screencasts#awesm=~o9ankBjUK164W0">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource paid beginner bootcamps javascript html python ruby php other all">
          <h2>Bootcamper</h2>
          <img src="./assets/img/resources/bootcamper1.png">
          <p>A hub of bootcamps</p>
          <p><a class="btn" target="_blank" href="http://bootcamper.io/">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free paid beginner bootcamps javascript html python ruby php other all">
          <h2>Bootcamps.in</h2>
          <img src="./assets/img/resources/bootcamps1.png">
          <p>A hub of bootcamps</p>
          <p><a class="btn" target="_blank" href="http://www.bootcamps.in/">Go to site &raquo;</a></p>
        </div>

        <div class="one-third column resource free beginner bootcamps javascript html python ruby php other all">
          <h2>Hacker School<img class="star" src="assets/img/leaf.png"></h2>
          <img src="./assets/img/resources/bootcamper1.png">
          <p>FREE bootcamp in NY. Women can also apply for grants. Amazing.</p>
          <p><a class="btn" target="_blank" href="https://www.hackerschool.com/">Go to site &raquo;</a></p>
        </div>
        <div class="one-third column resource free paid beyond bootcamps other all">
          <h2>Insight Data<img class="star" src="assets/img/leaf.png"></h2>
          <img src="./assets/img/resources/insight1.png">
          <p>An intensive six week post-doctoral training fellowship bridging the gap between academia and data science based in Silicon Valley and New York City</p>
          <p><a class="btn" target="_blank" href="http://insightdatascience.com/">Go to site &raquo;</a></p>
        </div>
        <!-- I THINK THIS DOESN'T EXIST ANYMORE -->
<!--         <div class="one-third column resource free beginner bootcamps all">
          <h2>Hungry Academy<img class="star" src="assets/img/leaf.png"></h2>
          <img src="./assets/img/resources/hungry1.png">
          <p>Free 5 month training in Rails in the pursuit to work at Living Social. - This may be paid?</p>
          <p><a class="btn" target="_blank" href="http://hungryacademy.com/">Go to site &raquo;</a></p>
        </div> -->
        <div class="one-third column resource free beginner beyond javascript html python ruby other all">
          <h2>Exercism.io</h2>
          <img src="./assets/img/resources/exercism1.png">
          <p>Practicing programming through crowd-sourced code reviews.</p>
          <p><a class="btn" target="_blank" href="http://exercism.io">Go to site &raquo;</a></p>
        </div>
    </div>

  </div><!-- container -->
<?php include('footer.php'); ?>
