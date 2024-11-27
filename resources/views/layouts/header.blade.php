<header>
    <!-- ====================================== Fix Icon Menu ===================================== -->
    <div class="sidebar close">
        <ul class="nav-links icetab-container" id="icetab-container">
            <li class="icetab current-tab">
                <a class="nav_menu_icon_line" href="javascript:void(0)">
                    <img class="nav_menu_icon" src="{{ asset('assets/images/home_icon-1.svg ') }}" alt="home_icon">
                </a>
                <ul class="sub-menu blank">
                    <li class=""><a class="link_name" href="javascript:void(0)">Home</a></li>
                </ul>
            </li>
            <li class="icetab menu-btn">
                <a class="nav_menu_icon_line" href="javascript:void(0)">
                    <img class="nav_menu_icon" src="{{ asset('assets/images/about_icon-1.svg ') }}" alt="about_icon">
                </a>
                <ul class="sub-menu">
                    <li><a class="link_name" href="javascript:void(0)">About Me</a></li>
                </ul>
            </li>
            <li class="icetab">
                <a class="nav_menu_icon_line" href="javascript:void(0)">
                    <img class="nav_menu_icon" src="{{ asset('assets/images/resume_icon-1.svg ') }}" alt="resume_icon">
                </a>
                <ul class="sub-menu">
                    <li><a class="link_name" href="javascript:void(0)">Resume</a></li>
                </ul>
            </li>
            <li class="icetab">
                <a class="nav_menu_icon_line" href="javascript:void(0)">
                    <img class="nav_menu_icon" src="{{ asset('assets/images/services_icon-1.svg ') }}"
                        alt="services_icon">
                </a>
                <ul class="sub-menu">
                    <li><a class="link_name" href="javascript:void(0)">Services</a></li>
                </ul>
            </li>
            <li class="icetab">
                <a class="nav_menu_icon_line" href="javascript:void(0)">
                    <img class="nav_menu_icon" src="{{ asset('assets/images/skills_icon-1.svg ') }}" alt="skills_icon">
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="javascript:void(0)">Skills</a></li>
                </ul>
            </li>
            <li class="icetab">
                <a class="nav_menu_icon_line" href="javascript:void(0)">
                    <img class="nav_menu_icon" src="{{ asset('assets/images/portfolio_icon-1.svg ') }}"
                        alt="portfolio_icon">
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="javascript:void(0)">Portfolio</a></li>
                </ul>
            </li>
            <li class="icetab">
                <a class="nav_menu_icon_line" href="javascript:void(0)">
                    <img class="nav_menu_icon" src="{{ asset('assets/images/testimonial_icon-1.svg ') }}"
                        alt="testimonial_icon">
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="javascript:void(0)">Testimonials</a></li>
                </ul>
            </li>
            <li class="icetab">
                <a class="nav_menu_icon_line" href="javascript:void(0)">
                    <img class="nav_menu_icon" src="{{ asset('assets/images/blog_icon-1.svg ') }}" alt="blog_icon">
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="javascript:void(0)">Blogs</a></li>
                </ul>
            </li>
            <li class="icetab">
                <a class="" href="javascript:void(0)">
                    <img class="nav_menu_icon" src="{{ asset('assets/images/contact_icon-1.svg ') }}"
                        alt="contact_icon">
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="javascript:void(0)">Contact</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- ====================================== Fix Icon Menu End ===================================== -->
    <!-- ======================================= Side Menu ================================== -->
    <div class="toggle" onclick="openNav()">
        <img class="line-menu" src="{{ asset('assets/images/line-menu-1.png') }}" alt="line-menu">
    </div>
    <div id="mySidenav" class="sidenav">
        <div class="closebtn" onclick="closeNav()">&times;</div>
        <img class="logo" src="{{ asset('assets/images/logo-1.png') }}" alt="logo">
        <ul class="sidescreen_sub icetab-container" id="icetab-container2">
            <li class="icetab current-tab" onclick="openNav()">
                <a class="icons2" href="javascript:void(0)">
                    <img class="nav_menu_icon sidenav_img" src="{{ asset('assets/images/home_icon-1.svg') }}"
                        alt="home_icon">Home
                </a>
            </li>
            <li class="icetab" onclick="openNav()">
                <a class="icons2" href="javascript:void(0)">
                    <img class="nav_menu_icon sidenav_img" src="{{ asset('assets/images/about_icon-1.svg') }}"
                        alt="about_icon">About Me
                </a>
            </li>
            <li class="icetab" onclick="openNav()">
                <a class="icons2" href="javascript:void(0)">
                    <img class="nav_menu_icon sidenav_img" src="{{ asset('assets/images/resume_icon-1.svg') }}"
                        alt="resume_icon">Resume
                </a>
            </li>
            <li class="icetab" onclick="openNav()">
                <a class="icons2" href="javascript:void(0)">
                    <img class="nav_menu_icon sidenav_img" src="{{ asset('assets/images/services_icon-1.svg') }}"
                        alt="services_icon.svg">Services
                </a>
            </li>
            <li class="icetab" onclick="openNav()">
                <a class="icons2" href="javascript:void(0)">
                    <img class="nav_menu_icon sidenav_img" src="{{ asset('assets/images/skills_icon-1.svg') }}"
                        alt="skills_icon">Skills
                </a>
            </li>
            <li class="icetab" onclick="openNav()">
                <a class="icons2" href="javascript:void(0)">
                    <img class="nav_menu_icon sidenav_img" src="{{ asset('assets/images/portfolio_icon-1.svg') }}"
                        alt="portfolio_icon">Portfolio
                </a>
            </li>
            <li class="icetab" onclick="openNav()">
                <a class="icons2" href="javascript:void(0)">
                    <img class="nav_menu_icon sidenav_img" src="{{ asset('assets/images/testimonial_icon-1.svg') }}"
                        alt="testimonial_icon">Testimonials
                </a>
            </li>
            <li class="icetab" onclick="openNav()">
                <a class="icons2" href="javascript:void(0)">
                    <img class="nav_menu_icon sidenav_img" src="{{ asset('assets/images/blog_icon-1.svg') }}"
                        alt="blog_icon">Blogs
                </a>
            </li>
            <li class="icetab" onclick="openNav()">
                <a class="icons2" href="javascript:void(0)">
                    <img class="nav_menu_icon sidenav_img" src="{{ asset('assets/images/contact_icon-1.svg') }}"
                        alt="contact_icon">Contact
                </a>
            </li>
        </ul>
    </div>
    <!-- ======================================= Side Menu End ================================== -->
</header>
