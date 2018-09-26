<?php

function deny_frame_options() {
	@header('X-Frame-Options: DENY');
}

add_action('send_headers', 'deny_frame_options', 10, 0);