<footer id="footer" role="contentinfo">

Design by <a href="http://dimpurr.com" title="Dimpurr (钉子)">Dimpurr</a><br />
Theme <a href="http://blog.dimpurr.com/clearision" title="Clearision">Clearision</a><br />

<?php

$clrs_tjt = get_option('clrs_tongji');

if ( !empty($clrs_tjt) ) { ?>
	<a href="http://wordpress.org/" title="WordPress">Wordress</a>
	<?php echo $clrs_tjt;
} else { ?>
	Power by <a href="http://wordpress.org/" title="WordPress">Wordress</a>
<?php }; ?>

<?php wp_footer(); ?>

</footer>

</div>
</body>
</html>