<?php
/**
 * Created by JetBrains PhpStorm.
 * User: psramkumar
 * Date: 9/7/13
 * Time: 7:00 PM
 * To change this template use File | Settings | File Templates.
 */

    function getIncludes() {
        $min =  isProduction() ? '.min.' : '.';

        $includes = [];
        $includes['js'][0] ="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery".$min."js";
        $includes['js'][1] ="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui".$min."js";
        $includes['js'][2] ="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/1.3.1/lodash".$min."js";
        $includes['js'][3] = base_url("assets/js/bootstrap".$min."js");
        $includes['js'][4] = base_url("assets/js/custom.js");

        $includes['css'][1] = base_url("assets/css/bootstrap-slate".$min."css");
        $includes['css'][2] = base_url("assets/css/font-awesome".$min."css");
        $includes['css'][3] = base_url("assets/css/bootstrap-responsive".$min."css");
        $includes['css'][4] = base_url("assets/css/custom.css");
        $includes['css'][5] = base_url("assets/css/overrides.css");
        return $includes;
    }


    function isProduction(){
        return ENVIRONMENT === 'production';
    }

