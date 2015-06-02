<?php
/**
 * The template for the home page.
 * @package dallaskoncir
 **/

get_header(); ?>

    <!-- Intro section -->
    <section id="intro" class="intro">
      <div class="wrapper">
        <div class="intro-text">
          <h1>Front End Web Developer.</h1>
        </div>
        <a href="#bio" class="btn">Learn More</a>
      </div>
    </section>

    <!-- Bio section -->
    <section id="bio" class="bio">
      <div class="wrapper">
        <h2>About Me</h2>
        <img src="images/me.jpg" alt="Dallas Koncir">
        <p>I am a Front End web developer currently based in Norwich, Ontario, Canada. Designing and developing websites has been my passion since 2003 when I helped with developing the original website for my parents car dealership. Since then I have learned many new design and development skills.</p>
        <p>I have worked as a freelance developer for the past 2 years but am putting that on hold for a couple of months to improve my skills at hackerYou in Toronto. If you have an idea or project in mind, don't hesitate to get in touch and we can create something awesome!</p>
        <p>When I’m not making websites you can usually find me at a motocross track, hockey arena or in the gym. If you would like to know more about me look me up on <a href="https://www.facebook.com/dallas.koncir" target="_blank">Facebook</a>, <a href="http://twitter.com/dallaskoncir" target="_blank">Twitter</a> or <a href="https://www.linkedin.com/in/dallaskoncir" target="_blank">LinkedIn</a>.</p>
      </div>
    </section>

    <!-- Portfolio section -->
    <section id="work" class="work">
      <h2>Portfolio</h2>
      <p>Check out some of my latest projects!</p>
      <div class="portfolio-items cf">
        <div class="portfolio-item">
            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
              <div class="caption">
                  <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                  </div>
              </div>
              <img src="images/portfolio/snaptrade.jpg" alt="Snaptrade Pro" />
            </a>
        </div>
        <div class="portfolio-item">
            <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
              <div class="caption">
                  <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                  </div>
              </div>
              <img src="images/portfolio/prh.jpg" alt="Prince Resorts Hawaii" />
            </a>
        </div>
        <div class="portfolio-item">
            <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
              <div class="caption">
                  <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                  </div>
              </div>
              <img src="images/portfolio/datavisualytics.jpg" alt="Data Visualytics" />
            </a>
        </div>
        <div class="portfolio-item">
            <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
              <div class="caption">
                  <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                  </div>
              </div>
              <img src="images/portfolio/vanhee.jpg" alt="Van Hee Drafting &amp; Design" />
            </a>
        </div>
        <div class="portfolio-item">
            <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
              <div class="caption">
                  <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                  </div>
              </div>
              <img src="images/portfolio/evangel.jpg" alt="Evangel Pentecostal Church" />
            </a>
        </div>
        <div class="portfolio-item">
            <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
              <div class="caption">
                  <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                  </div>
              </div>
              <img src="images/portfolio/prh25.jpg" alt="Portfolio Item" />
            </a>
        </div>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="wrapper">
        <h2>Get in Touch</h2>
        <p>Fill out the form and I will get back to you ASAP.</p>
        <div class="form-container">
          <form id="contactForm" method="post" action="contact.php" data-parsley-validate>
              <div class="field">
                <label for="name">Name</label>
                  <input type="text" placeholder="Name" id="name" name="name" required>
              </div>
              <div class="field">
                  <label for="email">Email Address</label>
                  <input type="email" placeholder="Email Address" id="email" name="email" required>
              </div>
              <div class="field">
                  <label for="phone">Phone Number</label>
                  <input type="tel" placeholder="Phone Number" id="phone" name="phone" required>
              </div>
              <div class="field">
                  <label for="message">Message</label>
                  <textarea rows="5" placeholder="Message" id="message" name="message" required></textarea>
              </div>
              <div class="submit">
                  <button type="submit">Send</button>
              </div>
            </form>
            <div class="success">
              <p>Thank you for your inquiry.</p>
            </div>
        </div>
      </div>
    </section>

      <!-- Portfolio Modals -->
      <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
            <div class="wrapper">
              <div class="modal-body">
                <h3>snaptradepro.com</h3>
                <a href="http://www.snaptradepro.com" target="_blank">
                    <img src="images/portfolio/snaptrade.jpg" alt="Snap Trade Pro">
                </a>
                <p>This is a Wordpress site that I am still working on with a client from Alberta, Canada. It uses the Bootstrap framework and runs on a customized version of the Shoestrap 2 Wordpress theme. One feature that I have loved is the git integration through WP Engine, being able to commit and upload files in one step is very productive.</p>
                <ul class="cf">
                  <li>
                    Client: <a href="http://www.snaptradepro.com" target="_blank">Snap Trade Pro</a>
                  </li>
                  <li>
                    Date: <span>October 2014</span>
                  </li>
                  <li>Services:
                    <span>Web Development, Wordpress, Bootstrap, Responsive</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>

      <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
            <div class="wrapper">
              <div class="modal-body">
                <h3>Prince Resorts Hawaii<br />Seasonal Landing Pages</h3>
                <a href="http://www.princeresortshawaii.com/en/winter-escape/" target="_blank">
                    <img src="images/portfolio/prh.jpg" alt="Prince Resorts Hawaii">
                </a>
                <p>This is a responsive landing page that I was tasked to build for Sabre Hospitality Solutions. There are 3 different versions for Prince Resorts' seasonal offers. I built it using the Foundation front end framework along with a lot of custom php and javascript to make it work with the website.</p>
                <ul class="cf">
                  <li>
                    Client: <span><a href="http://www.sabrehospitality.com" target="_blank">Sabre Hospitality Solutions</a></span>
                  </li>
                  <li>
                    Date: <span>December 2013</span>
                  </li>
                  <li>
                    Services: <span>Front End Development, Responsive, Foundation</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>

      <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
            <div class="wrapper">
              <div class="modal-body">
                <h3>Data Visualytics</h3>
                <img src="images/portfolio/datavisualytics.jpg" alt="Data Visualytics">
                <p>This is a responsive one page website that I built for a company called Data Visualytics. I built this using the Foundation framework. It is a pretty simple site but it was a great starting point for working with Foundation.</p>
                <ul class="cf">
                  <li>
                    Client: <a href="http://datavisualytics.com" target="_blank">Data Visualytics</a>
                  </li>
                  <li>
                    Date: <span>October 2013</span>
                  </li>
                  <li>
                    Services: <span>Front End Development, Responsive, Foundation</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    

      <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="wrapper">
            <div class="modal-body">
              <h3>Van Hee Drafting &amp; Design</h3>
              <a href="http://vanhee.ca" target="_blank">
                <img src="images/portfolio/vanhee.jpg" alt="Van Hee Drafting &amp; Design" />
              </a>
              <p>This was the first website that I actually got paid to build. It is definitely a simple design but it is cool to look back and see how far I have come along as a developer.</p>
              <ul class="cf">
                <li>
                  Client: <a href="http://vanhee.ca" target="_blank">Van Hee Drafting &amp; Design</a>
                </li>
                <li>
                  Date: <span>February 2011</span>
                </li>
                <li>
                  Services: <span>Front End Development, HTML5, Web Design</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="wrapper">
            <div class="modal-body">
              <h3>Evangel Pentecostal Church<br />Responsive Email Template</h3>
              <a href="http://dallaskoncir.com/email_templates/evangel_email.html" target="_blank">
                <img src="images/portfolio/evangel.jpg" alt="Evangel Pentecostal Church">
              </a>
              <p>This is a custom email template that I built for my church in Brantford, Ontario. It is responsive and looks great on desktop and mobile devices. More emails are being opened on mobile devices these days (53% of email opens are from mobile devices - an email that I received from Litmus today).</p>
              <ul class="cf">
                <li>
                  Client: <a href="http://yourevangel.ca">Evangel Pentecostal Church</a>
                </li>
                <li>
                  Date: <span>January 2015</span>
                </li>
                <li>
                  Services: <span>Responsive Email Development, HTML Email</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="wrapper">
            <div class="modal-body">
              <h3>Prince Resorts Hawaii 25th Anniversary Page</h3>
              <img src="images/portfolio/prh25.jpg" alt="Prince Resorts Hawaii">
              <p>This a responsive landing page that I built through Sabre Hospitality Solutions. I used some awesome new tools for this build. Susy and Breakpoint are Sass tools that allow me to setup my own grid system as well as simplify media queries.</p>
              <ul class="cf">
                <li>
                  Client: <a href="http://www.sabrehospitality.com">Sabre Hospitality Solutions</a>
                </li>
                <li>
                  Date: <span>March 2015</span>
                </li>
                <li>
                  Services: <span>Front End Development, HTML, Sass, Javascript</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>
