<div>
    <h2>Contact Us</h2>
    <p>Want to get involved either as a company or help with volunteering? Have a great idea or just want to reach out?</p>
    <p>We would love to hear from you, so pleace reach out and contact us by filling out the form below.</p>
</div>

<div>
    
    <?= validation_list_errors() ?>
    <?= form_open('contact') ?>

        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="contactFormName" name="name" placeholder="John Doe" value="<?= set_value('name') ?>">
        </div>
        <div class="mb-3">
            <label for="contactEmail" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="contactEmail" name="email" placeholder="j.doe@gmail.com" value="<?= set_value('email') ?>">
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="contactSubject" name="subject" placeholder="Volunteer" value="<?= set_value('subject') ?>">
        </div>
        <div class="mb-3">
            <label for="messsage" class="form-label">Message</label>
            <textarea type="text" class="form-control" id="contactMessage" name="message" placeholder="What do you want to tell us..." value="<?= set_value('subject') ?>"><?= set_value('message')?></textarea>
        </div>
        <div><input type="submit" value="Submit"></div>
        <?= form_close() ?>
 
</div>