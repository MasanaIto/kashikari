# kashikari
貸し借りしたモノを管理できるアプリ

# Installation

```bash
https://github.com/MasanaIto/kashikari.git
docker-compose build
docker-compose up
docker-compose exec app bash
cd src
./docker-compose.ymlのdbコンテナを参照しながらsrc/.envを編集する
php artisan migrate
npm install
npm run dev
```
