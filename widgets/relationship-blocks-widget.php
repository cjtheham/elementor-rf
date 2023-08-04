<?php
class Elementor_Relationship_Blocks_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'relationship_blocks_widget';
	}

	public function get_title() {
		return esc_html__( 'Relationship Blocks', 'elementor-rf' );
	}

	public function get_icon() {
		return 'eicon-link';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'Relationship', 'RF' ];
	}

    protected function register_controls() {
        $this->start_controls_section(
            'section_title',
            [
                'label' => esc_html__('Basic Settings', 'elementor-rf'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title_field',
            [
                'label' => esc_html__('Field Name', 'elementor-rf'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic' => [
                    'active' => true,
                ],
                'default' => esc_html__('bidirectional_relationships', 'elementor-rf')
            ]
        );

        $this->end_controls_section();
    }

	protected function render() {
        $settings = $this->get_settings_for_display();
		$relationships = get_field($settings['title_field']);
        if($relationships): ?>
   
            <?php foreach($relationships as $relationship):
            $permalink = get_permalink($relationship -> ID);
            $title = get_the_title($relationship -> ID); ?>
            <figure>
                <?php echo esc_html( get_the_post_thumbnail($post = $relationship -> ID)); ?>
                <figcaption><?php echo esc_html($title); ?>
            </figure>
            <?php endforeach; ?>

        <?php endif; ?>
		

		<?php
	}
}
