<?php
/**
 * Created by PhpStorm.
 * User: huye
 * Date: 2017/10/16
 * Time: 下午5:00
 */

namespace ZanPHP\Testing;

use ZanPHP\Coroutine\Task;
use ZanPHP\Coroutine\Context;

class SyncTask extends Task
{
    public static function execute($coroutine, Context $context = null, $taskId = 0, Task $parentTask = null)
    {
        if (is_callable($coroutine)) {
            return static::execute($coroutine(), $context, $taskId, $parentTask);
        }
        if ($coroutine instanceof \Generator) {
            $task = new Task($coroutine, $context, $taskId, $parentTask);
            $task->run();
            return $task;
        }
        return $coroutine;
    }

}