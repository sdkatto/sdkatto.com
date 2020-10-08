# fengxiaoyue.dev

Personal website of [@fengxiaoyue](https://github.com/fengxiaoyue)

## Steps to start development

1. Clone and install dependencies

```
git clone git@github.com:fengxiaoyue/fengxiaoyue.dev.git
cd fengxiaoyue.dev
composer install
npm install
```

2. Generate key

```
cp .env.example .env
php artisan key:generate
```

3. Set webpack to watch

```
npm run watch
```

4. Deploy

```
php artisan serve
```
