<?php
/**
 * This is just a silly example that demonstrates returning different templates based on request parameters
 */
$params         = $_REQUEST;
$rowBodyTpl     = "";

// return different templates depending on the record id
if(isset($params['id']) && !empty($params['id'])) {

    switch($params['id']) {

        case 2:
            $rowBodyTpl = '<h4>Description</h4><p>{desc}</p>';
            break;
        case 3:
            $rowBodyTpl = '<h4>Description of {company}</h4><p>{desc}</p>';
            break;
        default:
            $rowBodyTpl = '<p>{desc}</p>';
    }

    echo $rowBodyTpl;
}
