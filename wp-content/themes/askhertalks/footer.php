  
    </div> <!-- /container -->

    <footer class="footer">
      	<div class="container">
      		<div class="row" id="footer-content">
      			<div class="col-sm-10" id="contact-info">
      				<h2>Contact</h2>
      				<p>
      					<a href="http://www.stephenlewisfoundation.org/" target="_blank"><strong>Stephen Lewis Foundation<strong></a><br/>
      					260 Spadina Ave, Suite 501<br />
      					Toronto, ON&nbsp;&nbsp;M5T 2E4<br/>
      					416-533-9292 &#8226; Toll-free: 1-888-203-9990<br/>
      					<a href="mailto:info@stephenlewisfoundation.org">info@stephenlewisfoundation.org</a><br />
      					Charitable Registration # 89635 4008 RR0001
      				</p>
      				<p>
      					<a href="https://www.facebook.com/stephenlewisfdn"><span class="fa fa-facebook-official fa-2x" style="color: #861f41;"></span></a>&nbsp;&nbsp;&nbsp;
      					<a href="https://www.twitter.com/stephenlewisfdn"><span class="fa fa-twitter fa-2x" style="color: #861f41;"></span></a>
      				</p>
      				<p style="font-size: 0.875em;">&copy; Stephen Lewis Foundation <?php echo date('Y'); ?></p>
      			</div>

      			<div class="col-sm-2 footer-sponsor">
      				<h2>Participant<br/>Partner</h2>
      				<p><a href="http://www.warchild.ca/" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/war-child-canada-logo.jpg" ></a></p>
      			</div>
      			<!-- <div class="col-sm-2">
      				<h2>Presenting Sponsor</h2>
      				<p><a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/cibc-logo.jpg" ></a></p>
      			</div> -->

      		</div>
  		</div>
    </footer>

    <!-- modal window 
    <div class="modal fade" id="contactForm">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Contact Us</h4>
	      </div>
	      <div class="modal-body">
	        
			<?php 

				if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }

			?>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div> /.modal-content 
	  </div> /.modal-dialog 
	</div> /.modal -->

    <?php wp_footer(); ?>

  </body>
</html>