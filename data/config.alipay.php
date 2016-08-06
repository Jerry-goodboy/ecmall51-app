<?php

$alipay_config = array(
    'partner' => '2088411190997201', //这里是你在成功申请支付宝接口后获取到的PID；
    'key' => 'oaa0whx0tnqs7qslm8c61g7j92gdtn1o', //这里是你在成功申请支付宝接口后获取到的Key
    'sign_type' => strtoupper('MD5'),
    'input_charset' => strtolower('utf-8'),
    'cacert' => getcwd() . '/includes/Alipay\\cacert.pem', //支付宝证书
    'transport' => 'http',
);
$alipay = array('seller_email' => 'enterprise51zwd@163.com', //卖家企业支付宝账号
    //这里是异步通知页面url,公网可访问的，notify地址不能有跳转，cookie，登录，html等；
    'notify_url' => 'http://www.51zwd.com/index.php?app=my_money&act=notifyurl_51',
    //这里是页面跳转通知url；
    'return_url' => 'http://www.51zwd.com/index.php?app=my_money&act=returnurl_51',
    //支付成功跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参payed（已支付列表）
    'successpage' => 'User/myorder?ordtype=payed',
    //支付失败跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参unpay（未支付列表）
    'errorpage' => 'User/myorder?ordtype=unpay',
    //免手续费充值配置，支付宝开放平台appid
    'appId' => '2014051500005931',
    'APP_ID' => '2014051500005931',
);
?>
