<?php

function resolve_archive_uri($post_type){
    if(false === $url = get_post_type_archive_link($post_type)){
        throw new BadMethodCallException("Unsupported/unarchivable post_type [$post_type]");
    }
    return $url;
}