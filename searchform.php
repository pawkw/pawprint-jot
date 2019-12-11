
<form method="get" class="form-search" action="<?php echo home_url( '/' ); ?>">
	<div class="row">
		<div class="col-lg-12">
			<div class="input-group">
				<input type="text" class="form-control search-query" name="s" placeholder="<?php echo esc_html_x( 'Search&hellip;', 'placeholder', 'pawprint-jot' ); ?>" />
				<span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><span class="sr-only sr-only-focusable"><?php echo esc_html_x( 'Submit', 'submit button', 'pawprit-jot' ); ?></span><i class="fas fa-search" aria-hidden="true"></i></button>
				</span>
			</div>
		</div>
	</div>
</form>