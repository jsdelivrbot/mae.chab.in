<!-- ▼footer▼ -->
<footer>
<div id="footer_sub">

<div class="blog_info">
<p>Powered by <a href="http://ja.wordpress.org/" target="_blank">WordPress</a></p>
<address>Copyright &copy; <a href="<?php echo home_url( '/' ) ?>"><?php bloginfo( 'name' ); ?></a> <a title="Googleプロフィールへ" href="https://plus.google.com/105642680110503345013?rel=author" target="_blank"><img src="http://ssl.gstatic.com/images/icons/gplus-16.png" alt="⇒Googleプロフィールへ" height="16" width="16"></a>
</address>
</div>

</div><!-- #footer_sub -->
</footer>
<!-- ▲footer▲ -->

<div id="footer_bar">
<p class="back-to-top"><a href="#TOP"><i class="fa fa-chevron-circle-up"></i>ページ上部に戻る</a></p>
</div>


</div><!-- #index -->

<?php wp_footer(); ?>
<?php if(is_single()): ?>
<script src="/wp-includes/js/comment-reply.js?ver=20090102" defer></script>
<script src="//google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"></script>
<script src="//google-code-prettify.googlecode.com/svn/trunk/src/lang-css.js"></script>
<script>window.setTimeout(prettyPrint, 500);</script>
<?php endif ?>
<script src="/wp-content/themes/chabin/assets/function.min-fc31416964aa561b0a46a427d95904e8.js" defer></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-16293533-1', 'auto');
ga('require', 'displayfeatures');
ga('send', 'pageview');
ga('require', 'linkid', 'linkid.js');
</script>
</body>

</html>