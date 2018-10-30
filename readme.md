# larabbs

## laravel 5.5 环境

## 功能点

> 用户认证 —— 注册、登录、退出；

> 个人中心 —— 用户个人中心，编辑资料；

> 用户授权 —— 作者才能删除自己的内容；

> 上传图片 —— 修改头像和编辑话题时候上传图片；

> 表单验证 —— 使用表单验证类；

> 模型监控 —— 自动 Slug 翻译；

> 使用第三方 API —— 请求百度翻译 API ；

> 队列任务 —— 将百度翻译 API 请求和发送邮件放到队列中，以提高响应；

> 计划任务 —— 『活跃用户』计算，一小时计算一次；

> 多角色权限管理 —— 允许站长，管理员权限的存在；

> 后台管理 —— 后台数据模型管理；

> 邮件通知 —— 发送新回复邮件通知；

> 站内通知 —— 话题有新回复；

> 自定义 Artisan 命令行 —— 自定义活跃用户计算命令；

> 自定义 Trait —— 活跃用户的业务逻辑实现；

> 自定义中间件 —— 记录用户的最后登录时间；

> 模型修改器；

> XSS 安全防御；

## Install

* git clone https://github.com/wuchenge/larabbs.git

* cd larabbs

* composer install

* npm install

* php artisan key:generate

* cp .env.example .env

* vim .env
** 修改你自己的,数据库,百度翻译，邮件发送, 环境配置

> BAIDU_TRANSLATE_APPID=

> BAIDU_TRANSLATE_KEY=

> MAIL_DRIVER=

> MAIL_HOST=

> MAIL_PORT=

> MAIL_USERNAME=

> MAIL_PASSWORD=

> MAIL_ENCRYPTION=

> MAIL_FROM_ADDRESS=

> MAIL_FROM_NAME=


> APP_NAME=

> APP_ENV=production

> APP_KEY=

> APP_DEBUG=false

> APP_LOG_LEVEL=

> APP_URL=

> QUEUE_DRIVER=redis

> CACHE_DRIVER=redis

* php artisan migrate
* php artisan migrate --seed
* crontab -e 
`* * * * * php /server/larabbs/artisan schedule:run >> /dev/null 2>&1`
* php artisan horizon
* vim config/database.php
* mysql 'strict' => true 更改为 'strict'=>false