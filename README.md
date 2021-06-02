# sdkatto.com

Personal website of [@sdkatto](https://github.com/sdkatto)

## Steps to start development

1. Clone and install dependencies

```
git clone git@github.com:sdkatto/sdkatto.com.git
cd sdkatto.com
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
