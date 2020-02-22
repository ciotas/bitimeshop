<?php

namespace App\Observers;

use App\Models\Order;
use Illuminate\Support\Facades\Log;

class OrderObserver
{
    public function creating(Order $order)
    {
        // 如果模型的 no 字段为空
        if (!$order->no) {
            // 调用 findAvailableNo 生成订单流水号
            $order->no = static::findAvailableNo();
            // 如果生成失败，则终止创建订单
            if (!$order->no) {
                return false;
            }
        }
    }

    public static function findAvailableNo()
    {
        // 订单流水号前缀
        $prefix = date('YmdHis');
        for ($i = 0; $i < 10; $i++) {
            // 随机生成 6 位的数字
            $no = $prefix.str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
            // 判断是否已经存在
            if (!static::query()->where('no', $no)->exists()) {
                return $no;
            }
        }
        Log::warning('find order no failed');

        return false;
    }
}
