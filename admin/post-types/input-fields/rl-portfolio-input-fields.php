<div class="rl-portfolio-form-control">
    <label for="rl-portfolio-title"><h1>Title</h1></label>
    <input type="text" id="rl-portfolio-title" name="rl_project_title" value="<?php echo $values['_rl_project_title'][0]; ?>">
</div>
<div class="rl-portfolio-form-control">
    <h1>Problem + Solution</h1>
    <?php
        wp_editor($values['_rl_project_content'][0],'rl_project_content', array(
            'wpautop'               =>  true,
            'media_buttons' =>      true,
            'textarea_name' =>      'rl_project_content',
            'textarea_rows' =>      10,
            'teeny'                 =>  true
        ));
    ?>
</div>
<div class="rl-portfolio-form-control">
    <h2>Gallery</h2>
</div>

<?php