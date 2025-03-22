# sousaku - 模写コーディング

## プロジェクト概要

このプロジェクトは、[CodeJump様](https://www.codejump.com/) の模写コーディングです。
HTML/CSSの学習を目的として、デザインカンプを元にコーディングしました。

## スクリーンショット

![Image](https://github.com/user-attachments/assets/5ecf4426-fbd7-4bf2-b955-5d0552576ad9)

- レスポンシブ版　修正中です。
<img src="" width="350px">

## 使用技術

- Laravel
- Blade (Laravelのテンプレートエンジン)
- CSS
- Docker

## インストール方法

1. **リポジトリをクローン**
    
    ```
    git clone <https://github.com/srgnair/Recipe-Diary.git>
    cp .env.example .env
    cd Recipe-Diary
    
    ```
    
2. 環境変数の設定 (.env のコピー)
    
    ```
    cp .env.example .env
    
    ```
    
3. コンテナ作成 & 起動
    
    ```
    docker compose up -d --build
    
    ```
    
4. 依存関係のインストール
    
    ```
    docker compose exec app composer install
    docker compose exec app php artisan key:generate
    
    ```
    
5. [http://localhost](http://localhost/) にアクセス

## ライセンス

このプロジェクトは学習目的のため、商用利用はご遠慮ください。
