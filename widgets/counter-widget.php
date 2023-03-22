<?php
	if (!defined('ABSPATH')) {
		exit;
	}

	class Elementor_Counter_Widget extends \Elementor\Widget_Base {

		public function get_name() {
			return 'counter';
		}

		public function get_title() {
			return esc_html__( 'Contador Simples', 'elementor-counter-control' );
		}

		public function get_icon() {
			return 'eicon-counter-circle';
		}

		public function get_custom_help_url() {
			return 'https://www.adrianomeira.com';
		}

		public function get_categories() {
			return [ 'general' ];
		}

		public function get_keywords() {
			return [ 'contador', 'cotadores' ];
		}

		protected function register_controls() {
			$this->start_controls_section(
				'content_section',
				[
					'label' => esc_html__( 'Configurações', 'elementor-counter-control' ),
					'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				]
			);

				$this->add_control(
					'tempo',
					[
						'label' => esc_html__( 'Tempo (em min)', 'elementor-counter-control' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'default' => 30,
					]
				);

				$this->add_control(
					'tempo_texto',
					[
						'label' => esc_html__( 'Texto após o tempo', 'elementor-counter-control' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => 'min',
					]
				);

			$this->end_controls_section();

		}

		/*
		* Aqui vai o HTML pro front
		*/
		protected function render() {
			$settings = $this->get_settings_for_display();			
			require_once(TMPL_REQUIRE. 'counter.php');
		}

	}
?>