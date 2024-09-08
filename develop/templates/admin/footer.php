<script src="<?= $this->templatePath ?>/assets/scripts/jquery-3.7.1.min.js" onload="document.dispatchEvent(new Event('jqueryLoaded'))"></script>

<script>
	$(() => {
        $(".side-navigation").each(function () {
            let nav = $(this);
			nav.find('.side-navigation-toggle-area').click(function ()
			{
                if (nav.hasClass('active'))
                {
                    nav.removeClass('active');
                    nav.css('transform', 'translateX(calc(40px - 100%))');
                    nav.find('.side-navigation-toggler').css('transform', 'rotateZ(0) scaleY(2)');
				}
                else
                {
                    nav.addClass('active');
                    nav.css('transform', 'translateX(0)');
                    nav.find('.side-navigation-toggler').css('transform', 'rotateZ(180deg) scaleY(2)');
				}
			}.bind(nav));
		});
	});
</script>
</body>
</html>