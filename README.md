環境構築

Dockerビルド
・git clone　git@github.com:tmm18/contact-form-test.git
・docker-compose up -d --build

laravel環境構築
・docker-compose exec php bash
・composer install
・php artisan tinker
・>>> echo Carbon\Carbon::now();　,時間の確認
・ cp .env.example .env　,環境変数を変更
・php artisan route:list
・php artisan key:generate







使用技術
・mysql:8.0.26
・ngine:1.21.1