## 1. 例外

例外について

### 例外とは何か

アプリの実行時に発生する異常な状態、エラーのこと。
または、異常時のプログラムの実行を止める仕組みのこと。

例外の発生原因は以下のようなものがあります。

- データベースに接続しようとしたらデータベースサーバーが見つからなかった
- 数値を除算しようとしたら割る側の数が0であった

### 何のためにあるのか

- 異常を検知して対応するため
- 失敗の見落としを防ぐ
- コードの可読性を上げる
