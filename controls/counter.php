<?php
	class Elementor_Counter_Control extends \Elementor\Base_Data_Control {
		public function get_type() {
			return 'counter';
		}
		
		public function content_template() {
			$control_uid = $this->get_control_uid();

?>
			<div class="elementor-control-field">
				<# if ( data.label ) {#>
				<label for="<?php echo $control_uid; ?>" class="elementor-control-title">{{{ data.label }}}</label>
				<# } #>
				<div class="elementor-control-input-wrapper">
					<input id="<?php echo $control_uid; ?>" data-setting="{{ data.name }}" value="{{ counter_value }}" />
				</div>
			</div>
			<# if ( data.description ) { #>
			<div class="elementor-control-field-description">{{{ data.description }}}</div>
			<# } #>
<?php
		}

	}

?>