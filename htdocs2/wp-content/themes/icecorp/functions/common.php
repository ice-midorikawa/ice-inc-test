<?php
/**
 * WordPress全体で共通して使用する処理を記載します。
 *
 *
 */
	
    /**
     * get_template_part の変わりに利用してください。
     * $argsをローカルスコープにて渡すことが可能です。
     *
     * @param $tpl
     * @param array $vars
     */
    function importTemplate($tpl, $vars=array()){
        $tpl = ltrim($tpl, '/') .'.php';
        $path = locate_template(array($tpl));
        if(empty($path)){
            throw new LogicException("Cannot locate the template '$tpl'.");
        }
        extract($vars);
        include $path;
    }

    /**
     * 対象の記事の最初のtermを取得します
     * @param $post_id
     * @param string $tax
     * @return array
     */
    function get_primary_term($post_id , $tax = "category"){

        $terms = get_the_terms($post_id , $tax);

        if(!empty($terms[0])) {
            return $terms[0];
        } else {
            return array();
        }
    }