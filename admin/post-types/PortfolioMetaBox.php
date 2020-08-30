<?php


class PortfolioMeta
{
    private $post_type_name;
    private $meta_id;

    public function __construct($meta_id, $post_type_name) {
        $this->post_type_name = 'rl_' . $post_type_name;
        $this->meta_id = $meta_id;
        add_action('init', array($this, 'gallery_register_meta'));
    }

    public function gallery_register_meta(){
        register_post_meta(
            $this->post_type_name,
            $this->meta_id,
            [
                'show_in_rest' => true,
                'single'       => false,
                'auth_callback' => function() {
                    return current_user_can( 'edit_posts' );
                }
            ]
        );
    }

}