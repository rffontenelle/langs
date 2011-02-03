<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Install message'				=>	'\'config.php\' ファイルが存在しないか壊れています。FluxBBはまだインストールされていないようです。',
'Choose install language'		=>	'インストールスクリプトで使用する言語',
'Choose install language info'	=>	'下の言語はインストールページでのみ使用されます。フォーラムのデフォルト言語は別途指定します。',
'Install language'				=>	'インストール言語',
'Change language'				=>	'言語を変更',
'Next'							=>	'次へ',
'Already installed'				=>	'FluxBBはインストールされています。<a href="index.php">こちら</a> からアクセスしてください。',
'You are running error'			=>	'このサーバーでは %1$s V%2$sが動作しています。FluxBB V%3$sが正しく動作するためには、%1$s V%4$s以上の環境が必要です。インストールを続行する前に%1$sをアップグレードしてください。',
'My FluxBB Forum'				=>	'FluxBB フォーラム',
'Description'					=>	'FluxBB フォーラムにようこそ！',
'Username 1'					=>	'ユーザー名は2文字以上入力してください。',
'Username 2'					=>	'ユーザー名は25文字以下で入力してください。',
'Username 3'					=>	'guestは指定できません。',
'Username 4'					=>	'ユーザー名にIPアドレスは指定できません。',
'Username 5'					=>	'ユーザー名に \', " そして [ や ] は指定できません。',
'Username 6'					=>	'ユーザー名にBBCodeは指定できません。',
'Short password'				=>	'パスワードは4文字以上入力してください。',
'Passwords not match'			=>	'パスワードが一致しません。',
'Wrong email'					=>	'管理者のメールアドレスが正しくありません。',
'No board title'				=>	'フォーラムのタイトルを入力してください。',
'Error default language'		=>	'デフォルト言語が存在しません。',
'Error default style'			=>	'デフォルトスタイルが存在しません。',
'No DB extensions'				=>	'このサーバーの PHP は FluxBB がサポートしているいずれのデータベースもサポートしていません。PHP が、MySQL/PostgreSQL/SQLiteのいずれかをサポートしている必要があります。',
'Administrator username'		=>	'ユーザー名',
'Administrator password 1'		=>	'パスワード',
'Administrator password 2'		=>	'パスワード（確認）',
'Administrator email'			=>	'メールアドレス',
'Board title'					=>	'フォーラムのタイトル',
'Base URL'						=>	'ベースアドレス',
'Required field'				=>	' を指定してください。',
'FluxBB Installation'			=>	'FluxBB インストール',
'Welcome'						=>	'FluxBB インストーラーにようこそ。下のフォームに必要事項を入力してください。不明点はインストールドキュメントを参照してください。',
'Install'						=>	'FluxBB 1.4 をインストール',
'Errors'						=>	'下のエラーを修正してください。',
'Database setup'				=>	'データベースの設定',
'Info 1'						=>	'FluxBB をセットアップするデータベースの情報を入力します。インストールを続けるにはすべての情報を入力する必要があります。',
'Select database'				=>	'データベースタイプの設定',
'Info 2'						=>	'FluxBB は現在 MySQL, PostgreSQL, SQLite をサポートしています。あなたのデータベースが下のドロップダウンメニューにない場合は、PHPがそのデータベースをサポートしていないことを意味します。各データベースのバージョンごとの詳しい情報は FAQ を参照してください。',
'Dual MySQL'					=>	'MySQL には standard と improved の２つの方法で接続できます。よく分からない場合は、先に improved を試してください。',
'InnoDB'						=>	'MySQL が <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a> をサポートしているかもしれません。大きなフォーラムを運営する場合 InnoDB は良い選択肢ですが、よく分からない場合は選択しないことをお勧めします。',
'Database type'					=>	'データベースタイプ',
'Required'						=>	'(Required)',
'Database hostname'				=>	'データベースホストの設定',
'Info 3'						=>	'データベースサーバーのアドレス（例： localhost, db.myhost.com や 192.168.0.15）を入力しますい。デフォルトのポート番号で動かない場合は、ポート番号も指定できます（例： localhost:3580）。SQLite の場合は、任意の文字列か \'localhost\' のままにします。',
'Database server hostname'		=>	'データベースホスト',
'Database enter name'			=>	'データベース名の設定',
'Info 4'						=>	'FluxBB をインストールするデータベース名を入力します。データベースは既存のものを指定します。SQLite の場合は、データベースファイルへの相対パスを入力します。 ファイルがない場合は新規に作成されます。',
'Database name'					=>	'データベース名',
'Database enter informations'	=>	'ユーザー名とパスワードの設定',
'Database username'				=>	'ユーザー名',
'Info 5'						=>	'データベースに接続するユーザー名とパスワードを入力します。SQLite では不要です。',
'Database password'				=>	'パスワード',
'Database enter prefix'			=>	'テーブルプレフィックスの設定',
'Info 6'						=>	'テーブル名の頭に任意の文字列（例： foo_）を付加できます。一つのデータベースに複数のシステムをインストールする場合に使用します。',
'Table prefix'					=>	'テーブルプレフィックス',
'Administration setup'			=>	'管理者の設定',
'Info 7'						=>	'FluxBB の管理者情報を入力します。',
'Admin enter username'			=>	'ユーザー名の設定',
'Info 8'						=>	'管理者のユーザー名を入力します。管理者やモデレータは後で追加できます。2～25文字の範囲で入力します。',
'Admin enter password'			=>	'パスワードの設定',
'Info 9'						=>	'管理者のパスワードを大文字と小文字を意識して4文字以上入力します。',
'Password'						=>	'パスワード',
'Confirm password'				=>	'パスワード（確認） ',
'Admin enter email'				=>	'メールアドレスの設定',
'Info 10'						=>	'管理者のメールアドレスを入力します。',
'Board setup'					=>	'フォーラムの設定',
'Info 11'						=>	'フォーラムの基本情報を入力します。',
'Enter board title'				=>	'タイトルの設定',
'Info 12'						=>	'フォーラムのタイトルを入力します。すべてのページの頭に表示されます。',
'Enter board description'		=>	'説明の設定',
'Info 13'						=>	'フォーラムの説明を簡潔に入力します。すべてのページの頭に表示されます。（HTML可）',
'Board description'				=>	'説明',
'Enter base URL'				=>	'ベースアドレスの設定',
'Info 14'						=>	'最後のスラッシュを除いた</strong>フォーラムの URL を入力します（例： http://forum.myhost.com や http://myhost.com/~myuser）。<strong>ここは厳密に入力してください。</strong>設定を間違えるとすべての管理操作が失敗します。下はシステムが推理したアドレスで必ずしも正しいとは限りません。',
'Choose the default language'	=>	'デフォルト言語の設定',
'Info 15'						=>	'これはゲストと登録ユーザーの初期値として適用されます。',
'Default language'				=>	'デフォルト言語',
'Choose the default style'		=>	'デフォルトスタイルの設定',
'Info 16'						=>	'これはゲストと登録ユーザーの初期値として適用されます。',
'Default style'					=>	'デフォルトスタイル',
'Start install'					=>	'インストール',
'DB type not valid'				=>	'\'%s\' は無効なデータベースタイプです。',
'Table prefix error'			=>	'テーブルプレフィックス \'%s\' に不正な文字が含まれているか長すぎます。プレフィックスにはa～z、数字、アンダースコアを入力します。最初に数字を指定することはできません。最大文字数は40文字です。他のプレフィックスを指定してください。',
'Prefix reserved'				=>	'SQLite ではテーブルプレフィックスに \'sqlite_\' は使えません。別なプレフィックスを指定してください。',
'Existing table error'			=>	'\'%susers\'テーブルが\'%s\'データベースに存在します。FluxBB がインストール済みか別なシステムのテーブルと競合している可能性があります。同じデータベース内に FluxBB を複数インストールする場合はプレフィックスを変更してください。',
'InnoDB off'					=>	'InnoDB が無効なようです。別のデータベースタイプを選択するか、MySQL の InnoDB を有効にしてください。',
'Administrators'				=>	'管理者',
'Administrator'					=>	'管理者',
'Moderators'					=>	'モデレータ',
'Moderator'						=>	'モデレータ',
'Guest'							=>	'ゲスト',
'New member'					=>	'新メンバー',
'Member'						=>	'メンバー',
'Announcement'					=>	'アナウンスメッセージを入力',
'Rules'							=>	'利用規約を入力',
'Maintenance message'			=>	'フォーラムはテンテナンス中です。少し経ってからアクセスしてください。<br />\\n<br />\\n管理者',
'Test post'						=>	'テスト投稿',
'Message'						=>	'この投稿が正しく見えれば FluxBB が正しくインストールされています！ログインして管理ページも覗いてみてください。',
'Test category'					=>	'テストカテゴリー',
'Test forum'					=>	'テストフォーラム',
'This is just a test forum'		=>	'これはテストフォーラムです。',
'Alert cache'					=>	'<strong>キャッシュディレクトリのパーミッションに問題があります。</strong> FluxBB を正しく動かすためには、PHP が <em>cache</em> ディレクトリに書き込めなければなりません。chmod コマンドでディレクトリのパーミッションを777などに変更してください。',
'Alert avatar'					=>	'<strong>アバターディレクトリのパーミッションに問題があります。</strong> ユーザーがアバター画像をアップロードするには、PHP が <em>img/avatars</em> ディレクトリに書き込めなければなりません。アバター画像の保存ディレクトリは後で変更できます（管理/オプション を参照）。chmod コマンドでディレクトリのパーミッションを777などに変更してください。',
'Alert upload'					=>	'<strong>ファイルのアップロードができないようです。</strong> ユーザーがアバター画像をアップロードするには、PHP の file_uploads　の設定を変更する必要があります。ファイルのアップロードが可能になれば, 管理/オプション/機能 のページでアバター画像のアップロードができるようになります。',
'FluxBB has been installed'		=>	'FluxBB がインストールされました。次の指示に従ってインストールを完了してください。',
'Final instructions'			=>	'最終操作',
'Info 17'						=>	'下のボタンをクリックしてインストールを完了してください。ダウンロードされた config.php ファイルを FluxBB のルートディレクトリにアップロードしてください。',
'Info 18'						=>	'config.php ファイルをアップロードしてインストールは終了です。 <a href="index.php">フォーラムを見る</a>',
'Download config.php file'		=>	'config.php ファイルをダウンロード',
'FluxBB fully installed'		=>	'FluxBB がインストールされました。 <a href="index.php">フォーラムを見る</a>',

);