
# ChatRooms

简易聊天室demo

## 开发环境

- EasySwoole 3.2.5
- swoole 4.4.1
- redis 5.0.1
- php 7.3.7

## 运行

```shell
composer install
php easyswoole start
cp env.php.example env.php
```

> `env.php`文件中的socket服务器链接按实际情况修改

访问：http://127.0.0.1:9501/WebSocket/index