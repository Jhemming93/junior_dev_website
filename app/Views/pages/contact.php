<div>
    <h2>Contact Us</h2>
    <p>Want to get involved either as a company or help with volunteering? Have a great idea or just want to reach out?</p>
    <p>We would love to hear from you, so pleace reach out and contact us by filling out the form below.</p>
</div>

<div>
   
<div>
    <?= validation_list_errors('contact_list') ?>
    <?= form_open('contact') ?>
    <div class="row">
      <div class="mb-3 col-12 col-sm-6">
            <?php
            echo form_label('Your Name', 'name', ["class"=>"form-label"]);
            echo form_input('name', set_value('name') , 'class="form-control" placeholder="John Doe" id="contactFormName"', 'text'); 
            ?>
        </div>
        <div class="mb-3 col-12 col-sm-6">
        <?php
            echo form_label('Your Email', 'email', ["class"=>"form-label"]);
            echo form_input('email', set_value('email') , 'class="form-control" placeholder="John@gmail.com" id="contactEmail"', 'email'); 
            ?>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 cool-12 col-sm-6">
        <?php
            echo form_label('Subject', 'subject', ["class"=>"form-label"]);
            echo form_input('subject', set_value('subject') , 'class="form-control" placeholder="Volunteer" id="contactSubject"', 'text'); 
            ?>
        </div>
        <div class="col-sm-6"></div>
        <div class="mb-3 col-sm-6 col-12">
        <?php
            echo form_label('Your Message', 'message', ["class"=>"form-label"]);
            echo form_textarea('message', set_value('message') , 'class="form-control" placeholder="Whats on your mind?" id="contactMessage" rows="3"'); 
            ?>
        </div> 
    </div>
        <div><?php echo form_submit('submit', 'Send Message', 'class="btn btn-custom-prime-green mb-3"') ?></div>
        <?= form_close() ?>
</div>