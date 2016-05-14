@extends('layouts.master')

@section('title')

@stop

@section('content')

<!DOCTYPE html>

<head>
    <title>Resume | Gaston Lenotre</title>

          
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="/css/resume.css">

</head> 

<body>
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="/img/codeup_gaston-0108.jpg" alt="Gaston Lenotre" />
                <h1 class="name">Gaston Lenotre</h1>
                <h3 class="tagline">Full Stack Developer</h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: gastonlenotre@gmail.com">gastonlenotre@gmail.com</a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:832 728 8724">832 728 8724</a></li>
                    <li class="website"><i class="fa fa-globe"></i><a href="/">gastonlenotre.org</a></li>
                    <li class="linkedin"><i class="fa fa-linkedin"></i><a href="https://www.linkedin.com/in/gaston-lenotre-555126a2" target="_blank">linkedin.com/in/gaston-lenotre</a></li>
                    <li class="github"><i class="fa fa-github"></i><a href="https://github.com/GLenotre" target="_blank">github.com/GLenotre</a></li>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <div class="item">
                    <h4 class="degree">Software Development</h4>
                    <h5 class="meta">Codeup Accelerator</h5>
                    <div class="time">2016</div>
                </div>
                <!--//item-->
                <div class="item">
                    <h4 class="degree">PhD in Philosophy</h4>
                    <h5 class="meta">The Catholic University of America</h5>
                    <div class="time">2012 - 2016</div>
                </div>
                <!--//item-->
                <div class="item">
                    <h4 class="degree">MA in Philosophy</h4>
                    <h5 class="meta">The Catholic University of America</h5>
                    <div class="time">2008 - 2011</div>
                </div>
                <!--//item-->
                <div class="item">
                    <h4 class="degree">BA in Philosophy</h4>
                    <h5 class="meta">University of St. Thomas</h5>
                    <div class="time">2002 - 2006</div>
                </div><!--//item-->
            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <li>English <span class="lang-desc">(Native)</span></li>
                    <li>French <span class="lang-desc">(Native)</span></li>
                    <li>Spanish <span class="lang-desc">(Professional)</span></li>
                    <li>Italian <span class="lang-desc">(Professional)</span></li>
                    <li>German <span class="lang-desc">(Academic)</span></li>
                    <li>Greek <span class="lang-desc">(Academic)</span></li>
                    <li>Latin <span class="lang-desc">(Academic)</span></li>
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <li>Soccer</li>
                    <li>Chess</li>
                    <li>Fatherhood</li>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
                <div class="summary">
                    <p>I taught philosophy at the university level for two years and then discovered code.</p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Projects</h2>
                <div class="item">
                    <span class="project-title"><a href="http://talkingtreefarm.com" target="_blank">Talking Tree Farm</a></span> - <span class="project-tagline">Built a full-stack development project for a local permaculture commercial farm in a team of three using Laravel with Blade, PHP, MySQL, JavaScript, jQuery, HTML and CSS. Interacts with Google Maps, Stripe, and Mailgun APIs. In production at TalkingTreeFarm.com. Code at <a href="https://github.com/GLenotre">github.com/GLenotre</a></span>
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a href="/">Personal Website</a></span> - <span class="project-tagline">Built a full-stack development project using Laravel with Blade, MySQL, PHP, JavaScript, HTML and CSS. Code at <a href="https://github.com/GLenotre" target="_blank">github.com/GLenotre</a></span>
                </div><!--//item-->    
                <div class="item">
                    <span class="project-title">GrapeOn</span> - 
                    <span class="project-tagline">Built a full-stack development project about selling grape related products using Laravel, PHP, MySQL, JavaScript, HTML and CSS. Code at <a href="https://github.com/GLenotre" target="_blank">github.com/GLenotre</a></span>
            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
                <div class="skillset">        
                    <div class="item">
                        <h3 class="level-title">PHP &amp; Laravel</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="60%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Javascript &amp; jQuery</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="50%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Angular</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="20%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">HTML5 &amp; CSS</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="80%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
{{--                     <div class="item">
                        <h3 class="level-title">Sketch &amp; Photoshop</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="40%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item--> --}}
                    
                </div>  
            </section><!--//skills-section-->

            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Compliance Manager</h3>
                            <div class="time">2014 - 2015</div>
                        </div><!--//upper-row-->
                        <div class="company">Culinary Institute Inc., Houston</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Instituted and researched the compliance and accrediting of a culinary arts college. Submitted data and statistics on prior and current students for the US Dept. of Education, the Texas Workforce Commission, and the American Culinary Federation. Updated Standard Operating Procedures. Performed a four page SWOT analysis of the college.</p>
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Marketing Manager</h3>
                            <div class="time">2013</div>
                        </div><!--//upper-row-->
                        <div class="company">Culinary Institute Inc., Houston</div>
                    </div><!--//meta-->
                    <div class="details">
						<p>Implemented a marketing strategy in both a digital and print medium. Took weekly photos and edited them through Adobe Photoshop and InDesign. Monitored Google Analytics. Initiated and implemented AdRoll and Google AdWords. Updated and wrote live content for company website and social media on a daily basis through Joomla Content Management System.</p>  
                        
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Teaching Fellow</h3>
                            <div class="time">2011 - 2012</div>
                        </div><!--//upper-row-->
                        <div class="company">Washington, DC</div>
                    </div><!--//meta-->
                    <div class="details">
						<p>Individually designed, taught, and graded courses in Ancient and Medieval Philosophy (PHIL 201) and Modern Philosophy (PHIL 202) for classes of 20-25 students.</p>  
                    </div><!--//details-->
                </div><!--//item-->
                
            </section><!--//section-->



        </div><!--//main-body-->
    </div>
 
    <footer class="footer">
        <div class="text-center">
                <small class="copyright">Designed by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    
</body>
</html> 


@stop

@section('bottom-script')
@stop