<?php
/**
 * Created by PhpStorm.
 * User: Jayce
 * Date: 2019/7/27
 * Time: 18:02
 */

namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;

/**
 * Class WebSocket
 *
 * 此类是通过 http 请求来调用具体的事件
 * 实际生产中需要自行管理 fd -> user 的关系映射，这里不做详细解释
 *
 * @package App\HttpController
 */
class WebSocket extends Controller
{
    /**
     * 默认的 websocket 测试页
     */
    public function index()
    {
        $content = file_get_contents(__DIR__ . '/websocket.html');
        $this->response()->write($content);
        $this->response()->end();
    }
}