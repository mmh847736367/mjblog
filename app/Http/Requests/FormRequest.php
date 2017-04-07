<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest as Request;

class FormRequest extends Request
{
    public function allWithoutNull()
    {
        return array_filter($this->all(), function($v , $k) {

            return $v != null;

        },ARRAY_FILTER_USE_BOTH);
    }
}
