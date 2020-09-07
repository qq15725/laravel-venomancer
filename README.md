<p>
  <a href="https://github.com/qq15725/laravel-venomancer" target="_blank">
    <img alt="Node-Version" src="https://img.shields.io/node/v/venomancer" />
  </a>
  <a href="https://www.npmjs.com/package/venomancer" target="_blank">
    <img alt="Javascript-Version" src="https://img.shields.io/npm/v/venomancer.svg">
  </a>
  <a href="https://github.com/qq15725/laravel-venomancer" target="_blank">
    <img alt="Php-Version" src="https://img.shields.io/packagist/php-v/wxm/laravel-venomancer.svg" />
  </a>
  <a href="https://github.com/qq15725/laravel-venomancer" target="_blank">
    <img alt="Documentation" src="https://img.shields.io/badge/documentation-yes-brightgreen.svg" />
  </a>
  <a href="https://github.com/qq15725/laravel-venomancer/graphs/commit-activity" target="_blank">
    <img alt="Maintenance" src="https://img.shields.io/badge/Maintained%3F-yes-green.svg" />
  </a>
  <a href="https://github.com/qq15725/laravel-venomancer/blob/master/LICENSE" target="_blank">
    <img alt="License: MIT" src="https://img.shields.io/badge/License-MIT-yellow.svg" />
  </a>
</p>

Venomancer 的 Laravel/Lumen 套件.

- 基于 puppeteer 的 headless-chrome 能力封装及性能优化
  - 支持 html 渲染生成图片
  - 支持 url 访问生成图片
  - TODO 其他 headless-chrome 能力
- TODO 其他 API

## 快速开始

```bash
npm install venomancer --save

composer require wxm/laravel-venomancer
```

### Laravel

1. 注册 ServiceProvider (laravel > 5.5 不需要注册):
    ```php
    Wxm\LaravelVenomancer\ServiceProvider::class
    ```
    
2. 发布配置：
    ```shell
    php artisan vendor:publish --provider="Wxm\LaravelVenomancer\ServiceProvider" --force
    ```
    
### Lumen

1. 注册 ServiceProvider:
   
    `bootstrap/app.php` 下添加

    ```php
    $app->register(Wxm\LaravelVenomancer\ServiceProvider::class);
    ``` 
2. 手动复制配置文件
    
## 使用

```php
<?php

$router->get('highchart', function () {
    return response()->make(
        highchart([
            'chart' => [
                'type' => 'line',
            ],
            'plotOptions' => [
                'series' => [
                    'animation' => false
                ]
            ],
            'title' => [
                'text' => '标题'
            ],
            'credits' => [
                'enabled' => false
            ],
            'series' => [
                [
                    'name' => '数值',
                    'data' => [1, 2, 3, 4]
                ]
            ]
        ]), 200, ['Content-Type' => 'image/jpeg']
    );
});

// 访问 /highchart 试试
// 选项详情请查看 highchart api
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.