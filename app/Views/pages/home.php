<div class="py-2">
   <h2 class="text-7xl text-center text-green p-2 font-bold">YEG Junior Devs</h2>
   <div class="d-flex justify-content-center">
      <img class="img-fluid" src="/img-defaults/main_banner.webp"/>
   </div>
   <p>Welcome to the Edmonton Junior Developer website. We are a sister group to the non-profit <a href="https://devedmonton.com/" target="blank" class="fw-bold text-decoration-none">Dev Edmonton Society</a>, with a focus on the Junior Developer community. We host events in partnership with tech companies like Showbie and Jobber, to expose junior developers to the community and companies to promising talent.</p>
   </div>
<div class="py-2">
   <h3 class="text-3xl font-bold text-center">What you can do on the site!</h3>
   <div class="d-flex flex-wrap justify-content-center">
      <?= view_cell('NavCardCell', 'title=Portfolio Gallery, link=/portfolio, description=Check out Junior Developers Portfolios, image=img-defaults/portfolio-gallery.webp'); ?>
      <?= view_cell('NavCardCell', 'title=Events, link=/events, description=Check out the calendar for Upcoming Events, image=img-defaults/calendar.webp'); ?>
      <?= view_cell('NavCardCell', 'title=Register/Login, link=/login, description=Register a new Account or Login to an existing one, image=img-defaults/login.webp'); ?>
      <?= view_cell('NavCardCell', 'title=Contact Us, link=/contact, description=Reach out to us to see how you can get involved, image=img-defaults/contact.webp'); ?>
   </div>
</div>