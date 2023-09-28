<?php $result = 'Success' ?>
<div class="d-flex justify-content-center align-items-center">
    <?php if(isset($result)): ?>
        <div>
        <?php if($result= 'Success'): ?>
                <h3>Your Message was successfully sent.</h3>
                <p>We will get back to you as soon as possible.</p>     
        <?php elseif($result = 'Failed'): ?>
                <h3>Oh No! Your messaged failed.</h3>
                <p>We have been notfied and will work to fix this issue.</p>   
        <?php endif; ?> 
        </div>
    <?php endif; ?>
</div>



