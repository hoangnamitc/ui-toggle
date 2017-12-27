<?php

    /**
     * Tạo input checkbox
     *
     * @param array $args - Mảng tham số
     * @return void
     */
    function checkbox_field( $args ){
        $name    = $args['name'];
        $id      = $args['id'];
        $classes = $args['class']; // ui-toggle
        $checked = $args['checked'];

        return '
        <div class="'.$classes.'">
            <input type="checkbox" id="'.$id.'" name="'.$name.'" value="1" '.(
                $checked ? 'checked' : null
            ).' />
            <label for="'.$id.'">
                <div></div>
            </label>
        </div><!-- /.'.$classes.' -->';
    }