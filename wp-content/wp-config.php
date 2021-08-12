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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
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
define('DB_NAME', 'LAA1308944-aklog');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA1308944');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'bbca758ak');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql152.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'nr&6}IuS(Smm?p?6ydu%"4F@|YZ|@Lx$ZCOxiI*p]sKOinPH%8O97(6EtxA7.^zN');
define('SECURE_AUTH_KEY', '3#Jz[1/H5Xd<%PY#M4+:O9]8K*),&}>}.<^?^})eM7_-E7uE+K6~L|BT!zgA:lhX');
define('LOGGED_IN_KEY', 'uq)9NB-rEJ=,8+n.1BTWqGO97a+Ywt,iz$1"!^Cu!Y1]@^7TqL-nj|/-[N@6*QCC');
define('NONCE_KEY', 'O+Yp0(3zPF&98q|z}1eH<lL>x_RY/3fqG;K3I!_HOgKdx~le/4ao_+HlR![yWpN(');
define('AUTH_SALT', '#BPhKQH<_EkpfB*vt&Fj}t^ZdQ)GT^(_yu>vCLtXN[h3Xou|9<s6gGP"3__dC(j+');
define('SECURE_AUTH_SALT', 'P.61$wy~|=8%hJ"></Ojpm:IKU%`9LtfpqsEELC#2cJU.qTaLLIj-]*rk%r_.Y%|');
define('LOGGED_IN_SALT', '9o70F"L}H4He&S?83OHS=E=!4m,k*43H[Ev[X,VVcaj(Yl,mt&&]UKo^V&w-QMnj');
define('NONCE_SALT', '/rPVAMZ@Dd}:_i",G_9e({->{](`<ibF3~RNAmi|[L@SX4#TMi]Y=(u!]Xm0tsd?');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp20210613094244_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
