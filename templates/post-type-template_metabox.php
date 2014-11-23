<ul style="list-style:none">
    <li>
        <?php 
            $meta_a_values = array('1','2','3','4');
            $meta_a = @get_post_meta($post->ID, 'meta_a', true);
            foreach ($meta_a_values as $meta_a_value) {
                unset($checked);
                if(isset($meta_a) && $meta_a_value == $meta_a) {$checked = 'checked';}
                echo '<label for="meta_a-'.$meta_a_value.'">meta_a-'.$meta_a_value.'</label>';
                echo '<input type="radio" id="meta_a-'.$meta_a_value.'" name="meta_a" value="'.$meta_a_value.'"'.$checked.' />';
            }
        ?>
    </li>
    <li>
        <label for="meta_b">meta_a</label>
        <input type="text" id="meta_b" name="meta_b" value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>" />
    </li>
    <li>
        <label for="meta_c">meta_a</label>
        <input type="text" id="meta_c" name="meta_c" value="<?php echo @get_post_meta($post->ID, 'meta_c', true); ?>" />
    </li>
</ul>