<div id="Business">
<?php foreach ($Businesses as $Business) { ?>
    <div class="article">
    <h1><a href="Businesses/index/<?php echo($Business['Businesses']['id']) ?>/<?php echo(trim($Business['Businesses']['title'])) ?>"><?php echo($Business['Businesses']['title']) ?></a></h1>
    <p class="date"><?php echo($Business['Businesses']['date']) ?></p>
	<p class="address"><?php echo($Business['Businesses']['address']) ?></p>
    <p><?php echo($Business['Businesses']['introtext']) ?><a href="Businesses/index/<?php echo($Business['Businesses']['id'])?>/<?php echo(trim($Business['Businesses']['title'])) ?>">Read more...</a></p>
    </div>
<?php } ?>
</div>

