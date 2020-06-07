<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', 'ihsanmuhtadi' );

/** Nama pengguna basis data MySQL */
define( 'DB_USER', 'root' );

/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', '' );

/** Nama host MySQL */
define( 'DB_HOST', 'localhost' );

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Pf.Q=#K6,V7VS&9Em9KWs])$kLAi|tS~>qwGpEJxapS*01OIUVtCXh}?_nIdvC-]' );
define( 'SECURE_AUTH_KEY',  'h$^upm70KQr@$bgaNH=23EEJB+.{#L`$%48le%Z#lU#&8_e3U6aOEs6C)J:gSH4p' );
define( 'LOGGED_IN_KEY',    'X+k2+^`P6kX.,9w/R.|D:)}=Sb,]5c2X<MjC?b&|sji_5!zviSqle3Qddvt:^Ig{' );
define( 'NONCE_KEY',        '.e^Y5KizslGo`MK/Ex$5!+RY+r?#4Q968uJ/Y;lI#z](-I(rq%UyOvz6=]II)7Ai' );
define( 'AUTH_SALT',        '8oI}&E`b!a1;$!z+<m}iFOHyK)e}uMM#0#L3MrYg-Bw=LvMwFDiDSl;se,JY.8f1' );
define( 'SECURE_AUTH_SALT', '4,`SE}X#(AG@e0p;:J3V.HWX5gKp$@VIm~Jh`{-^bxI]N5`9*$WO:&=LB=*Koq=&' );
define( 'LOGGED_IN_SALT',   '$(bG;`<.4|?|<CfNlsC;(z;Qe9`WN<h-TK{28,9b4U,wn&TkXk~R8JZ?tND>YqGl' );
define( 'NONCE_SALT',       'QR(n4LTr{wPZ*L(2&-A)yix vmH,~zh.DNdxP[O8(`2MX]n#u^D.]]O1NVxIKW^%' );

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
