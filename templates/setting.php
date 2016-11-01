<?php
defined( 'ABSPATH' ) or die();

/** @var \Gianism\UI\SettingScreen $this */
/** @var GianismGithub\Github $instance */

?>

<h3><i class="lsf lsf-github"></i> Github</h3>
<table class="form-table">
	<tbody>
	<tr>
		<th><label><?php printf( $this->_( 'Connect with %s' ), 'Github' ); ?></label></th>
		<td>
			<?php $this->switch_button( 'github_enabled', $this->option->is_enabled( 'github' ), 1 ) ?>
			<p class="description">
				<?php printf(
					$this->_( 'You have to register your application <a target="_blank" href="%1$s">here</a> to get required information.' ),
					'https://github.com/settings/applications/new'
				); ?>
				<?php printf(
					$this->_( 'See detail at <a href="%1$s">%2$s</a>.' ),
					$this->setting_url( 'setup' ),
					$this->_( 'How to set up' )
				); ?>
			</p>
		</td>
	</tr>

	<tr>
		<th><label for="github_client_id">Client ID</label></th>
		<td><input class="regular-text" type="text" name="github_client_id" id="github_client_id"
		           value="<?php echo esc_attr( $instance->github_client_id ) ?>"/></td>
	</tr>
	<tr>
		<th><label for="github_client_secret">Client Secret</label></th>
		<td><input class="regular-text" type="text" name="github_client_secret" id="ggl_consumer_secret"
		           value="<?php echo esc_attr( $instance->github_client_secret ) ?>"/></td>
	</tr>
	<tr>
		<th><label for="github_redirect_url"><?php $this->e( 'Redirect URI' ); ?></label></th>
		<td>
			<p class="description">
				<?php
				$end_point = home_url( '/github-auth/', ( $this->option->is_ssl_required() ? 'https' : 'http' ) );
				printf(
					$this->_( 'Please set %1$s to %2$s on <a target="_blank" href="%4$s">%3$s</a>.' ),
					'Authorization callback URL',
					'<code>' . $end_point . '</code>',
					'Github',
					'https://github.com/settings/applications'
				);
				?>
				<a class="button" href="<?php echo esc_attr( $end_point ) ?>"
				   onclick="window.prompt('<?php $this->e( 'Please copy this URL.' ) ?>', this.href); return false;"><?php $this->e( 'Copy' ) ?></a>
			</p>
		</td>
	</tr>
	</tbody>
</table>
<?php submit_button(); ?>
