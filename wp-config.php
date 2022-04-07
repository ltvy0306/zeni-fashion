<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'sql4484313' );

/** Username của database */
define( 'DB_USER', 'sql4484313' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'zHKKe9mlA9' );

/** Hostname của database */
define( 'DB_HOST', 'sql4.freemysqlhosting.net' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AxIIz3fRi-IJwakKCuuoB0.1Ng%mgT5]v3(t)D|R&v|K:%Mmy/bqv*u!?z,o=l]7' );
define( 'SECURE_AUTH_KEY',  '!<}b,6XX2B&6TRRT_{[c?+<0yBk+0S]8G)? f{=fB|J+0m4VE~GiD4`i{sp+$|k=' );
define( 'LOGGED_IN_KEY',    'o}>Qoz[F^L^Sb[Pvs5;/Rr+UE=Bm,Q{zwP^F]?sO,1yLt=*=rs-sdn>cSIyTxdm^' );
define( 'NONCE_KEY',        'mLZQYTb4,1ZjhT`#Mf!]ubngYfyTEbgMbSyptzK|kQdb`3dGWvu<.s/d;9.ug.{5' );
define( 'AUTH_SALT',        'ewaC9F4x5QoJp1P38G n&5Y#Kcp&$eo*$|h`#?M%<a#&:Kf/]HcTThV:<>w,DNbh' );
define( 'SECURE_AUTH_SALT', '^_BE8n:382d%^yV;yN%}P{TbDd(Ulc+2ug_k!<?[0m$g: ;D+?|H+69k$ScfXI_x' );
define( 'LOGGED_IN_SALT',   '<z-,FU01g34}!)Z)Goc[*J9u9Dxc(mx11~/QJEw3Y@G<3(oQ[X3H`x=Z)>bWb/l+' );
define( 'NONCE_SALT',       '/fJiJek;>hugw:g$X[I*z,#*/>dL1GA)p!$a|zY*yb}S6zTa_Sr^%&Dp*P4lT6p?' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
