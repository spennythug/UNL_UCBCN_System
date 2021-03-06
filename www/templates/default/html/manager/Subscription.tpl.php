<?php echo $context->calendar->name ?>
 <a href="<?php echo $base_manager_url . $context->calendar->shortname ?>/subscriptions/new/" 
	class="wdn-button wdn-button-brand">+ Add a Subscription
</a>

<h3>
Current Subscriptions
</h3>
<div>
	<div class="wdn-grid-set">
	    <div class="wdn-col-one-third">
	        <h6>Title</h6>
	    </div>
    </div>
    <?php foreach($context->getSubscriptions() as $subscription) { ?>
    <div class="wdn-grid-set">
	    <div class="wdn-col-one-third">
	        <?php echo $subscription->name; ?>
	    </div>
	    <div class="wdn-col-two-thirds" style="text-align: right;">
	        <a class="wdn-button wdn-button-brand" href="<?php echo $subscription->getEditURL() ?>">Edit</a>
	        |
	        <a class="wdn-button wdn-button-brand" href="#">Delete</a>
	    </div>
    </div>
    <?php } ?>
</div>