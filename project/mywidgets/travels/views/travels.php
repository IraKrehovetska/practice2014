<ul>
<?php 
$travels = $this->getTravels();
 
foreach($travels as $travel)
{
	echo "
	<div class="trw-travel row">
						<div class="trw-border pass col-lg-1 col-md-1 col-sm-1 col-xs-1">

						</div>
						<div class="trw-travel-img col-lg-2 col-md-2 col-sm-2 col-xs-2"><img src="imgs/user4.jpg" alt="user"></div>
						<div class="descr col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<div class="descr-title row">
								<span class="aux-text col-lg-2 col-md-2 col-sm-2 col-xs-2">Від:</span>
								<span class="descr-text col-lg-9 col-md-9 col-sm-9 col-xs-9">{$travel->from}</span>
								<span class="aux-text col-lg-2 col-md-2 col-sm-2 col-xs-2">До:</span>
								<span class="descr-text col-lg-9 col-md-9 col-sm-9 col-xs-9">{$travel->to}</span>
								<span class="aux-text col-lg-2 col-md-2 col-sm-2 col-xs-2">Дата:</span>
								<span class="descr-text col-lg-9 col-md-9 col-sm-9 col-xs-9">{$travel->date}</span>
								<span class="aux-text col-lg-2 col-md-2 col-sm-2 col-xs-2">Частота:</span>
								<span class="descr-text col-lg-9 col-md-9 col-sm-9 col-xs-9">Щодня</span>
							</div>
						</div>
						<div class="price col-lg-2 col-md-2 col-sm-2 col-xs-2">{$travel->payment} &#8372;</div>
						<div class="actions col-lg-1 col-md-1 col-sm-1 col-xs-1">
							<span class="glyphicon glyphicon-ok-circle"></span>
						</div>
						
					</div>";
}
?>
</ul>