<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="site-info">



					<!--Begin CTCT Sign-Up Form-->
					<!-- EFD 1.0.0 [Tue Jul 14 00:44:05 EDT 2015] -->
					<!-- <link rel='stylesheet' type='text/css' href='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/css/signup-form.css'> -->
					<div class="ctct-embed-signup" style="font: 16px Helvetica Neue, Arial, sans-serif; font: 1rem Helvetica Neue, Arial, sans-serif; line-height: 1.5; -webkit-font-smoothing: antialiased;">
					   <div style="color:#FFFFFF; background-color:#333333; border-radius:5px;">
					       <span id="success_message" style="display:none;">
					           <div style="text-align:center;">Thanks for signing up!</div>
					       </span>
					       <form data-id="embedded_signup:form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
					           <h2 style="margin:0;">Stay Awake: Get the Newsletter</h2>
					           <p></p>
					           <!-- The following code must be included to ensure your sign-up form works properly. -->
					           <input data-id="ca:input" type="hidden" name="ca" value="b92d567e-6bd6-4c87-a244-7c766d991207">
					           <input data-id="list:input" type="hidden" name="list" value="1934623167">
					           <input data-id="source:input" type="hidden" name="source" value="EFD">
					           <input data-id="required:input" type="hidden" name="required" value="list,email,first_name,last_name">
					           <input data-id="url:input" type="hidden" name="url" value="">
					           <p data-id="Email Address:p" ><label data-id="Email Address:label" data-name="email" class="ctct-form-required">Email Address</label> <input data-id="Email Address:input" type="text" name="email" value="" maxlength="80"></p>
					           <p data-id="First Name:p" ><label data-id="First Name:label" data-name="first_name" class="ctct-form-required">First Name</label> <input data-id="First Name:input" type="text" name="first_name" value="" maxlength="50"></p>
					           <p data-id="Last Name:p" ><label data-id="Last Name:label" data-name="last_name" class="ctct-form-required">Last Name</label> <input data-id="Last Name:input" type="text" name="last_name" value="" maxlength="50"></p>
					           <button type="submit" class="Button ctct-button Button--block Button-secondary" data-enabled="enabled">Sign Up</button>
					                <div><p class="ctct-form-footer">By submitting this form, you are granting: City Awake, 50 Milk Street, Boston, Massachusetts, 02109, United States,  permission to email you. You may unsubscribe via the link found at the bottom of every email.  (See our <a href="http://www.constantcontact.com/legal/privacy-statement" target="_blank">Email Privacy Policy</a> for details.) Emails are serviced by Constant Contact.</p></div>
					       </form>
					   </div>
					</div>
					<script type='text/javascript'>
					   var localizedErrMap = {};
					   localizedErrMap['required'] =                  'This field is required.';
					   localizedErrMap['ca'] =                                               'An unexpected error occurred while attempting to send email.';
					   localizedErrMap['email'] =                                         'Please enter your email address in name@email.com format.';
					   localizedErrMap['birthday'] =                   'Please enter birthday in MM/DD format.';
					   localizedErrMap['anniversary'] =            'Please enter anniversary in MM/DD/YYYY format.';
					   localizedErrMap['custom_date'] =         'Please enter this date in MM/DD/YYYY format.';
					   localizedErrMap['list'] =                                              'Please select at least one email list.';
					   localizedErrMap['generic'] =                     'This field is invalid.';
					   localizedErrMap['shared'] =                      'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
					   localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
					                localizedErrMap['state_province'] = 'Select a state/province';
					   localizedErrMap['selectcountry'] =        'Select a country';
					   var postURL = 'https://visitor2.constantcontact.com/api/signup';
					</script>
					<script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
					<!--End CTCT Sign-Up Form-->

<p class="footerstuff">You can reach us at <a href="mailto:contact@cityawake.is">contact@cityawake.is</a></p>
					<ul class="footerstuff">
						<li><a href="https://twitter.com/CityAwakeBoston" target="_blank">Twitter</a></li>
						<li><a href="https://www.facebook.com/cityawakeboston" target="_blank">Facebook</a></li>
						<li><a href="https://instagram.com/city_awake/" target="_blank">Instagram</a></li>
					</ul>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->



	<?php wp_footer(); ?>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55884646-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
