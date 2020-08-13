<?php
/** @var \OCP\IL10N $l */
/** @var array $_ */
script('federatedfilesharing', 'settings-personal');
style('federatedfilesharing', 'settings-personal');
?>

<div id="fileSharingSettings" class="section">
	<div class="hidden" id="oca-files-sharing-add-to-your-website-expanded">
	<p style="margin: 10px 0">
		<a target="_blank" rel="noreferrer noopener" href="<?php p($_['reference']); ?>"
			style="padding:10px;background-color:<?php p($_['color']); ?>;color:<?php p($_['textColor']); ?>;border-radius:3px;padding-left:4px;">
			<span style="background-image:url(<?php p(\OC::$server->getURLGenerator()->getAbsoluteURL($_['logoPath'])); ?>);width:50px;height:30px;position:relative;top:8px;background-size:contain;display:inline-block;background-repeat:no-repeat; background-position: center center;"></span>
			<?php p($l->t('Share with me via Nextcloud')); ?>
		</a>
	</p>

	<p>
		<?php p($l->t('HTML Code:')); ?>
		<xmp><a target="_blank" rel="noreferrer noopener" href="<?php p($_['reference']); ?>" style="padding:10px;background-color:<?php p($_['color']); ?>;color:<?php p($_['textColor']); ?>;border-radius:3px;padding-left:4px;">
<span style="background-image:url(<?php p(\OC::$server->getURLGenerator()->getAbsoluteURL($_['logoPath'])); ?>);width:50px;height:30px;position:relative;top:8px;background-size:contain;display:inline-block;background-repeat:no-repeat; background-position: center center;"></span>
<?php p($l->t('Share with me via Nextcloud')); ?></a></xmp>
	</p>
	</div>

</div>

