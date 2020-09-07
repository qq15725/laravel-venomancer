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
```

### Laravel/Lumen

```bash
composer require wxm/laravel-venomancer
```

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