<?php
/** @var \Gianism\UI\SettingScreen $this */
?>
<h3><i class="lsf lsf-amazon"></i> Amazon</h3>

<p class="description">
	<?php _e( sprintf(
		'Amazon account is required. If you don\'t have one, create it at <a href="%2$s">%1$s</a>.',
		'Log in with Amazon',
		'https://sellercentral.amazon.com/gp/homepage.html'
	), 'giamazon' ); ?>
</p>

<h4>Step1. <?php $this->e( 'Create application' ); ?></h4>

<p><?php $this->e( 'On Log in with Amazon, click <code>register new application</code> button right side. Then, insert information below:' ); ?></p>

<table class="gianism-example-table">
	<tbody>
	<tr>
		<th>Name</th>
		<td><?php printf( $this->_( '<code>%s</code> is recommended.' ), get_bloginfo( 'name' ) ); ?></td>
	</tr>
	<tr>
		<th>Description</th>
		<td><?php $this->e( 'About your site.' ); ?></td>
	</tr>
	<tr>
		<th>Privacy Notice URL</th>
		<td><?php $this->e( 'Your privacy policy URL.' ); ?></td>
	</tr>
	<tr>
		<th>Allowed Return URLs</th>
		<td>
			<code><?php echo home_url( '/amazon-auth/', $this->option->is_ssl_required() ? 'https' : 'http' ) ?></code>
			<?php _e( 'Optional but recommended.', 'giamazon' ) ?>
		</td>
	</tr>
	</tbody>
</table>

<p><?php $this->e( 'After creation, you can see your application detail\'s setting tab. There, you can get <code>Client ID</code> and <code>Client Secret</code>.' ) ?></p>

<h4>Step2. <?php $this->e( 'Input credentials' ); ?></h4>

<p><?php printf( $this->_( 'Now come back to <a href="%s">WP admin panel</a>, enter <code>Client ID</code> and <code>Client Secret</code>. That\'s all done.' ), $this->setting_url() ); ?></p>
