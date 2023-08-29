


<p>hello <?= $title ?></p>


<div>
    <h2>Contact Us</h2>
    <p>What to get involved either as a company or help volunteer? Have a great idea or just want to reach out?</p>
    <p>We would love to hear from you, so pleace reach out and contact us by filling out the below form.</p>
</div>

<div>
    <?= validation_list_errors() ?>

    <?= form_open('form') ?>

        <div class="mb-3">
            <label for="contactName" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="contactFormName" placeholder="John Doe">
        </div>
</div>