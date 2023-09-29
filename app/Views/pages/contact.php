<?php $validation = \Config\Services::validation(); ?>
<div style="max-width:720px; margin: 0 auto;">
<div>
    <h2>Contact Us</h2>
    <p>Want to get involved either as a company or help with volunteering? Have a great idea or just want to reach out?</p>
    <p>We would love to hear from you, so pleace reach out and contact us by filling out the form below.</p>
</div>


    <?= form_open('contact') ?>
        <div class="row">
            <div class="mb-3 col-sm-6">
                <?php
                echo form_label('Your Name', 'name', ["class"=>"form-label"]);
                echo form_input('name', set_value('name') , 'class="form-control" placeholder="John Doe" id="contactFormName"', 'text'); 
                if ($validation->getError('name')): ?>
                <div class="alert alert-danger" role="alert"><?= $validation->getError(('name')) ?> </div>
                <?php endif; ?>
            </div>
            <div class="mb-3 col-sm-6">
                <?php
                    echo form_label('Your Email', 'email', ["class"=>"form-label"]);
                    echo form_input('email', set_value('email') , 'class="form-control" placeholder="John@gmail.com" id="contactEmail"', 'email'); 
                    if ($validation->getError('email')): ?>
                        <div class="alert alert-danger" role="alert"><?= $validation->getError(('email')) ?> </div>
                        <?php endif; ?>
            </div>
        </div>
        <div class=row>
            <div class="mb-3 col-12">
                <?php
                    echo form_label('Subject', 'subject', ["class"=>"form-label"]);
                    echo form_input('subject', set_value('subject') , 'class="form-control" placeholder="Volunteer" id="contactSubject"', 'text'); 
                    if ($validation->getError('subject')): ?>
                        <div class="alert alert-danger" role="alert"><?= $validation->getError(('subject')) ?> </div>
                        <?php endif; ?>
            </div>
            <div class="mb-3 col-12">
                <?php
                    echo form_label('Your Message', 'message', ["class"=>"form-label"]);
                    echo form_textarea('message', set_value('message') , 'class="form-control" placeholder="Whats on your mind?" id="contactMessage" rows="3"'); 
                    if ($validation->getError('message')): ?>
                        <div class="alert alert-danger" role="alert"><?= $validation->getError(('message')) ?> </div>
                        <?php endif; ?>
            </div>
            <div>
                <?php echo form_submit('submit', 'Send Message', 'class="btn btn-custom-prime-green mb-3"') ?>
            </div>
        </div>
    <?= form_close() ?>  
</div>