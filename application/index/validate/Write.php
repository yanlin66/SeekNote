<?php
namespace app\index\validate;

use think\Validate;

class Write extends Validate
{
    // 验证规则
    protected $rule = [
        'nname' => 'require|min:5|chsDash',
        'ncon'    => 'require|min:5',
        'ctype' => 'require|chs',
        'ntime' => 'dateFormat:Y-m-d',
        'nnum' => 'require|number',
    ];
}