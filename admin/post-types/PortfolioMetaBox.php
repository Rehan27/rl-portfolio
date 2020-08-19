<?php


class PortfolioMetaBox
{
    private $post_type_name;
    private $meta_box_id;

    public function __construct($meta_box_id, $post_type_name) {
        $this->post_type_name = 'rl_' . $post_type_name;
        $this->meta_box_id = $meta_box_id;
        add_action('add_meta_boxes', array($this, 'create_meta_box'));
        add_action('save_post', array($this, 'rl_project_save_data'));
    }

    public function create_meta_box() {
        add_meta_box($this->meta_box_id, 'Portfolio Fields', array($this, 'meta_box_fields'), $this->post_type_name);
    }

    public function meta_box_fields($post) {
        $values = get_post_meta($post->ID);
        include(RL_PORTFOLIO_PATH . 'admin/post-types/input-fields/rl-portfolio-input-fields.php');
    }

    public function rl_project_save_data($post_id) {
        if (array_key_exists('rl_project_title', $_POST)) {
            update_post_meta($post_id, '_rl_project_title', $_POST['rl_project_title']);
            update_post_meta($post_id, '_rl_project_content', $_POST['rl_project_content']);
        }
    }
}