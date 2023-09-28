<?php $result = 'Success' ?>
<div class="row justify-content-center align-items-center">
    <?php if(isset($result)): ?>
        <div class="col">
            <div style="max-width:500px;">
                <img class="img-fluid" src="/img-defaults/placeholder.png"/>
            </div>
        <?php if($result= 'Success'): ?>
            <h3 class="text-center">Your Message was successfully sent.</h3>
            <p class="text-center">We will get back to you as soon as possible.</p>     
        <?php elseif($result = 'Failed'): ?>
            <h3 class="text-center">Oh No! Your messaged failed.</h3>
            <p class="text-center">We have been notfied and will work to fix this issue.</p>   
        <?php endif; ?> 
        </div>
    <?php endif; ?>
</div>



