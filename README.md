###redis工具类,适用于laravel
---
使用方法
```
composer require roookies/redis
```
在config/app.php中加入
```
'providers' => [
    \Roookies\RedisProvider::class,
],
'aliases' => [
    \Roookies\RedisFacade::class
]

```

这样便实现了类的单例模式，并且将依赖注入到容器中，然后只需要这样便可以适用redis工具类了：
```
    \redis::set('test',1);
    var_dump(\redis::get('test'));
```