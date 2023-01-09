<?php

namespace app\core;

class View
{

    function generate($content_view, $templateHeaderView, $templateFooterView, $data = [])
    {
        include 'app/view/' . $templateHeaderView;
        include 'app/view/' . $templateFooterView;

    }


}