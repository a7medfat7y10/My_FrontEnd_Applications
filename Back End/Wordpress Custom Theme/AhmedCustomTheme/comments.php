<?php
    if(comments_open()) {
        echo '<h3 class="comments-count">'; 
            comments_number('0 Comments', '1 Comment', '% Comments') ;
        echo '</h3>';
        echo '<ul class="list-unstyled comments-list">';
            wp_list_comments(array(
                'max_depth' => 3,
                'type' => 'comment',
                'avatar_size' => 64
            ));
        echo '</ul>';
        echo '<hr class="comment-separator" style="border-color: #ccb8b8;margin-top: 88px;">';
        comment_form(array(
            'title_reply' => 'Add Your Comment',
            'title_reply_to' => 'Add a Reply To [%s]',
            'class_submit' => 'btn btn-success btn-md',
            'comment_notes_before' => ''
        )); //we can put arguments to change the markup
    } else {
        echo 'Comments are disabled';
    }
