<?php

/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'blog');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iS lsOY<Y#Yh,mthGzpyr|fCqO2kw2~p(*C>Nnq}tXA*pV?XFL%~rw%R2O|(d`nJ');
define('SECURE_AUTH_KEY',  'DPt~KSRGbbF04JI7NUDeb%6P7YcI+I@}C7S0sY`a0=Zr4rpu^*<2&~OtER&s^.qx');
define('LOGGED_IN_KEY',    'HF^M-~pNC `+n2}`&t]jM:|E@^PHTB$18VQC55oLk[)NNV|z1Az#~X4IN}?K:AG$');
define('NONCE_KEY',        'P#PxHM!Tl|+O@K65_Fu#OVFR?`WO{S9y31]qpkd& :p1DPA5z8]MxSY=^Q$H[i3K');
define('AUTH_SALT',        'svXK@RA=9,Q=Rqel}:5%BvM~h)&abiY_>@qCI-dZ%dNammAghh^aP*Rh<1opQe%X');
define('SECURE_AUTH_SALT', '1[!(^gzAQo~a;[q!Nt(Kj8yv<dkZ1=mOMaezBPHvW7W$2`p>J8C0u?QgX8=EoP}O');
define('LOGGED_IN_SALT',   '#nku~<TAzZA+ `XW*gkpn!f+[7~] Za,toaW8QSO:%w>XD<[?`2rLM&++bBM&HXE');
define('NONCE_SALT',       's!]_T7mQk-2:T<n/h%lNjzy2tew|C~n$_h|mT O._qdD-XdG+RF4MM`<m>D+0xH[');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('WP_POST_REVISIONS', 5);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
