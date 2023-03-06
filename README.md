# Laravel 10 二步驟註冊

藉由二步驟註冊機制，讓使用者選擇輸入相關國家、簡介等資訊， 可為帳戶多提供一些內容，也提供略過選擇。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。

----

## 畫面截圖
![](https://i.imgur.com/qiah5UJ.png)
> 如果想註冊的使用者名稱符合已有人使用，你將無法註冊特定的電子郵件地址

![](https://i.imgur.com/e8TrW5c.png)
> 鼓勵使用者主動提供更多個人資訊
