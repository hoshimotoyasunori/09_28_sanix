-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 1 月 15 日 20:03
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `rugby_member`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `add_account`
--

CREATE TABLE `add_account` (
  `id` int(12) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `add_account`
--

INSERT INTO `add_account` (`id`, `username`, `mail`, `password`, `is_created`) VALUES
(1, 'tehon', 'hoshimotoyasunori@yahoo.co.jp', '123456', '2021-01-13 06:02:34'),
(4, 'tehon', 'hoshimotoyasunori@gmail.com', '123', '2021-01-13 06:02:16'),
(5, 'tehon', 'benjyamin@yahoo.co.jp', '456', '2021-01-13 11:49:15'),
(6, 'ben', 'benjyamin@yahoo.co.jp', '789', '2021-01-13 11:55:05'),
(7, 'hashikawa', 'hashikawa@yahoo.co.jp', 'qwe', '2021-01-14 23:28:10');

-- --------------------------------------------------------

--
-- テーブルの構造 `kanri_table`
--

CREATE TABLE `kanri_table` (
  `id` int(12) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `kanri_table`
--

INSERT INTO `kanri_table` (`id`, `username`, `mail`, `password`, `is_created`) VALUES
(1, 'tehon', 'hoshimotoyasunori@yahoo.co.jp', '123', '2021-01-14 23:47:16');

-- --------------------------------------------------------

--
-- テーブルの構造 `rugby_table`
--

CREATE TABLE `rugby_table` (
  `id` int(12) NOT NULL,
  `team` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tall` int(12) NOT NULL,
  `weight` int(12) NOT NULL,
  `born` date NOT NULL,
  `comefrom` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `rugby_table`
--

INSERT INTO `rugby_table` (`id`, `team`, `name`, `tall`, `weight`, `born`, `comefrom`, `image`, `updated_at`) VALUES
(2, 'パナソニックワイルドナイツ', '稲垣啓太', 186, 116, '1990-06-02', '新潟', 'https://i.pinimg.com/originals/b2/38/4f/b2384f21acd5e816f8ef2194ec0c63a5.jpg', '0000-00-00 00:00:00'),
(5, 'トヨタ自動車ヴェルブリッツ', '木津悠輔', 178, 113, '1995-12-02', '大分', 'http://sports.gazoo.com/verblitz/player/assets_c/2020/03/player_yusuke_kizu-thumb-314x329-11700.jpg', '0000-00-00 00:00:00'),
(6, '東芝ブレイブルーパス', 'リーチマイケル', 189, 113, '1988-10-07', 'ニュージーランド', 'http://www.toshiba.co.jp/sports/images/rugby/member/profile/leitch_m/img_main.jpg', '0000-00-00 00:00:00'),
(7, '宗像サニックスブルース', 'カーンヘスケス', 178, 98, '1985-08-01', 'ニュージーランド', 'https://rugby-japan.s3-ap-northeast-1.amazonaws.com/res/img/photo/topleague/sanix/69352.jpg', '0000-00-00 00:00:00'),
(8, 'サントリーサンゴリアス', '流大', 166, 75, '1992-09-04', '福岡', 'https://www.suntory.co.jp/culture-sports/sungoliath/member/img/portrait/nagare.jpg', '0000-00-00 00:00:00'),
(9, 'サントリーサンゴリアス', '中村亮土', 181, 92, '1991-06-03', '鹿児島', 'https://www.suntory.co.jp/culture-sports/sungoliath/member/img/portrait/nakamura_r.jpg', '0000-00-00 00:00:00'),
(10, 'サントリーサンゴリアス', 'ボーデンバレット', 186, 92, '1991-05-27', 'ニュージーランド', 'https://www.suntory.co.jp/culture-sports/sungoliath/member/img/portrait/beauden.jpg', '0000-00-00 00:00:00'),
(11, 'トヨタ自動車ヴェルブリッツ', '姫野和樹', 187, 112, '1994-07-27', '愛知', 'https://www.jsports.co.jp/img/web/page/rugby/topleague/team/toyota/img01.jpg', '0000-00-00 00:00:00'),
(12, 'トヨタ自動車ヴェルブリッツ', '茂野海人', 170, 79, '1990-11-21', '大阪', 'http://sports.gazoo.com/verblitz/player/assets_c/2020/03/player_kaito_shigeno-thumb-314x329-11662.jpg', '0000-00-00 00:00:00'),
(13, 'コベルコスティーラーズ', '山下裕史', 183, 120, '1986-01-01', '大阪', 'https://www.kobelcosteelers.com/member/member_img/hiroshi_yamashita/profile_off.jpg', '0000-00-00 00:00:00'),
(14, 'コベルコスティーラーズ', '中島イシレリ', 186, 125, '1989-07-09', 'トンガ', 'https://www.kobelcosteelers.com/member/member_img/isileli_nakajima/profile_off.jpg', '0000-00-00 00:00:00'),
(15, 'コベルコスティーラーズ', '山中亮平', 188, 100, '1986-06-22', '大阪', 'https://www.kobelcosteelers.com/member/member_img/ryohei_yamanaka/profile_over.gif', '0000-00-00 00:00:00'),
(16, 'キャノンイーグルス', '田中史明', 166, 73, '1985-01-03', '京都', 'https://i2.wp.com/prtimes.jp/i/33617/38/resize/d33617-38-368386-2.jpg?w=1360&ssl=1', '0000-00-00 00:00:00'),
(17, 'キャノンイーグルス', '田村優', 181, 92, '1989-01-09', '明治大学', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/302366.jpg', '0000-00-00 00:00:00'),
(18, '宗像サニックスブルース', '屋宜ベンジャミン', 175, 80, '1988-03-05', '沖縄', 'https://rugby-japan.s3-ap-northeast-1.amazonaws.com/res/img/photo/topleague/sanix/20009.jpg', '0000-00-00 00:00:00'),
(19, '東芝ブレイブルーパス', '德永 祥尭', 185, 100, '1992-04-10', '兵庫', 'http://www.toshiba.co.jp/sports/images/rugby/member/profile/tokunaga_y/img_main.jpg', '0000-00-00 00:00:00'),
(20, '東芝ブレイブルーパス', '三上 正貴', 178, 111, '1988-06-04', '青森', 'http://www.toshiba.co.jp/sports/images/rugby/member/profile/mikami_m/img_main.jpg', '0000-00-00 00:00:00'),
(21, 'necグリーンロケッツ', '瀧澤直', 175, 115, '1986-09-30', '愛知', 'https://rugby-japan.s3-ap-northeast-1.amazonaws.com/res/img/photo/topleague/nec/8634.jpg', '0000-00-00 00:00:00'),
(22, 'necグリーンロケッツ', '川村慎', 172, 102, '1987-08-06', '東京', 'https://rugby-japan.s3-ap-northeast-1.amazonaws.com/res/img/photo/topleague/nec/8305.jpg', '0000-00-00 00:00:00'),
(23, 'パナソニックワイルドナイツ', '堀江翔太', 180, 104, '1986-01-21', '大阪', 'https://panasonic.co.jp/sports/rugby/member/horie_shota/img/bustup.jpg', '0000-00-00 00:00:00'),
(24, 'パナソニックワイルドナイツ', '松田力也', 181, 90, '1994-05-03', '京都', 'https://panasonic.co.jp/sports/rugby/member/matsuda_rikiya/img/bustup.jpg', '0000-00-00 00:00:00'),
(25, 'クボタスピアーズ', 'ピーター\"ラピース\"ラブスカフニ', 189, 106, '1989-01-11', 'フリーステート大学', 'https://www.kubota-spears.com/player/detail/images/pieter_lappies_labuschagne/main.jpg', '0000-00-00 00:00:00'),
(26, 'クボタスピアーズ', '立川理道', 180, 93, '1989-12-02', '奈良', 'https://www.kubota-spears.com/player/detail/images/tatekawa_harumichi/main.jpg', '0000-00-00 00:00:00'),
(27, 'NTTコミュニケーションズ', '金 正奎', 177, 95, '1991-10-03', '大阪', 'https://www.ntt.com/rugby/members/Shokei_Kin/images/main.jpg', '0000-00-00 00:00:00'),
(28, 'NTTコミュニケーションズ', 'アマナキ・レレイ・マフィ', 189, 112, '1990-01-11', '花園大学', 'https://www.ntt.com/rugby/members/Amanaki_lelei_Mafi/images/main.jpg', '0000-00-00 00:00:00'),
(29, '三菱重工ダイナボアーズ', '成 昂徳', 177, 110, '1983-04-28', '帝京大学', 'https://pbs.twimg.com/profile_images/1264328888835964928/eUyFPisg_400x400.jpg', '0000-00-00 00:00:00'),
(30, '三菱重工ダイナボアーズ', 'イーリニコラス', 180, 90, '1988-10-14', '拓殖大学', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/294542.jpg', '0000-00-00 00:00:00'),
(31, '日野自動車レッドドルフィンズ', '木津武士', 183, 114, '1988-07-15', '大阪', 'https://hino-reddolphins.com/uploads/thumb/player/2020HP/kizu.JPG', '0000-00-00 00:00:00'),
(32, '日野自動車レッドドルフィンズ', '二リラトゥ', 182, 101, '1982-02-19', 'セイクリッド・ハート高校', 'https://hino-reddolphins.com/uploads/thumb/player/2020HP/nili.JPG', '0000-00-00 00:00:00'),
(33, 'NTTドコモレッドハリケーンズ', 'ヴィンピー ファンデルヴァルト', 188, 112, '1989-01-06', 'ネルスプロイト高校', 'https://docomo-rugby.jp/common/img/player/profile/46/img_list.png', '0000-00-00 00:00:00'),
(34, 'NTTドコモレッドハリケーンズ', 'ペレナラ', 184, 90, '1992-01-23', 'マナカレッジ', 'https://docomo-rugby.jp/common/img/player/profile/238/img_list.png', '0000-00-00 00:00:00'),
(35, 'リコーブラックラムズ', '松橋周平', 180, 99, '1993-11-24', '長野', 'https://blackrams.ricoh/images/members/matsuhashi/matsuhashi_2020_list.jpg', '0000-00-00 00:00:00'),
(36, 'リコーブラックラムズ', 'マット・ルーカス', 172, 77, '1992-01-29', 'オーストラリア', 'https://blackrams.ricoh/images/members/matt/matt_2020_prof.jpg', '0000-00-00 00:00:00'),
(37, 'ホンダヒート', '具智元', 183, 118, '1994-07-20', '韓国', 'http://www.honda-heat.jp/assets/img/players/122.png', '0000-00-00 00:00:00'),
(38, 'ホンダヒート', '小林亮太', 182, 98, '1991-06-11', '奈良', 'http://www.honda-heat.jp/assets/img/players/27.png', '0000-00-00 00:00:00'),
(39, 'ヤマハ発動機ジュビロ', '山本幸輝', 181, 113, '1990-10-29', '滋賀', 'https://rugby.yamaha-motor.co.jp/players/players-img/2020_11_06_yamamoto_thum.jpg', '0000-00-00 00:00:00'),
(40, 'ヤマハ発動機ジュビロ', 'クワッガ・スミス', 181, 91, '1993-06-11', '南アフリカ', 'https://rugby.yamaha-motor.co.jp/players/players-img/2020_11_06_kwagga_thum.jpg', '0000-00-00 00:00:00'),
(41, '宗像サニックスブルース', 'ジェームス・ムーア', 195, 102, '1993-06-11', 'オーストラリア', 'https://rugby.sanix.jp/iimages/news/f66ad567d358020a400e8865b04988ec.jpg', '0000-00-00 00:00:00'),
(42, '宗像サニックスブルース', 'レメキ ロマノ ラヴァ', 177, 92, '1989-01-20', 'ニュージーランド', 'https://userdisk.webry.biglobe.ne.jp/008/238/39/N000/000/000/159874655162757040606.jpg', '0000-00-00 00:00:00'),
(43, '宗像サニックスブルース', '佐々木　駿', 175, 107, '1989-03-06', '富山県', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/295281.jpg', '0000-00-00 00:00:00'),
(44, '宗像サニックスブルース', 'ダンプライヤー', 191, 103, '1988-04-14', 'ニュージーランド', 'https://pbs.twimg.com/media/D2toFdSUkAArUSk.jpg:large', '0000-00-00 00:00:00'),
(47, '宗像サニックスブルース', '星本泰憲', 168, 96, '1989-10-24', '大阪', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/295250.jpg', '2021-01-13 22:55:38'),
(49, '宗像サニックスブルース', '福崎竜也', 175, 80, '2021-01-12', '福岡', 'https://www.top-league.jp/wp-content/uploads/2017/01/sanix_fukusaki.jpg', '2021-01-13 23:00:45');

-- --------------------------------------------------------

--
-- テーブルの構造 `sanix_member`
--

CREATE TABLE `sanix_member` (
  `id` int(12) NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_position` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_position` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `sanix_member`
--

INSERT INTO `sanix_member` (`id`, `name`, `main_position`, `sub_position`, `image`, `updated_at`) VALUES
(1, '星本泰憲', 'HO', 'FL', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/295250.jpg', '2021-01-16 00:54:49'),
(5, '屋宜ベンジャミン', 'WTB', 'FB', 'https://rugby-japan.s3-ap-northeast-1.amazonaws.com/res/img/photo/topleague/sanix/20009.jpg', '2021-01-15 13:23:58'),
(6, '申 東源', 'PR', '-', 'https://rugby-japan.s3-ap-northeast-1.amazonaws.com/res/img/photo/topleague/sanix/42251.jpg', '2021-01-16 00:53:29'),
(7, 'パディー・ライアン', 'PR', '-', 'https://pbs.twimg.com/media/Ee7kp5GU0AAtCJ3.jpg', '2021-01-15 22:55:51'),
(8, '佐々木 駿', 'PR', '-', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322855.jpg', '2021-01-15 22:56:49'),
(9, '髙野 恭二', 'FB', 'WTB', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/301844_s.jpg', '2021-01-15 22:58:33'),
(10, 'レメキ ロマノ ラヴァ', 'WTB', 'FB', 'https://pbs.twimg.com/profile_images/1278768568843202560/rv7HJAJ9_400x400.jpg', '2021-01-15 23:00:32'),
(11, '山田 大生', 'CTB', 'WTB', 'https://pbs.twimg.com/profile_images/1263480111392649216/vkwWNuvh_400x400.jpg', '2021-01-15 23:01:43'),
(12, 'カーン・ヘスケス', 'WTB', 'CTB', 'https://rugby-japan.s3-ap-northeast-1.amazonaws.com/res/img/photo/topleague/sanix/69352.jpg', '2021-01-16 00:37:11'),
(13, '田代 宙士', 'SO', '-', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/295247.jpg', '2021-01-16 00:38:27'),
(14, '小野 晃征', 'SO', 'CTB', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/325545.jpg', '2021-01-16 00:39:17'),
(15, '香川 凜人', 'SO', 'CTB', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322878.jpg', '2021-01-16 00:40:07'),
(16, '濱里 耕平', 'SH', 'WTB', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322816.jpg', '2021-01-16 00:41:09'),
(18, '藤井 達哉', 'SH', '-', 'https://www.top-league.jp/wp-content/uploads/2020/01/fujii_sanix_e.jpg', '2021-01-16 00:42:24'),
(19, '今村 雄太', 'CTB', '-', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322879.jpg', '2021-01-16 00:43:23'),
(20, 'ティム・ベネット', 'CTB', '-', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/301845.jpg', '2021-01-16 00:44:29'),
(21, '王 授榮', 'CTB', 'CTB', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322840.jpg', '2021-01-16 00:45:04'),
(22, 'ジェイソン・エメリー', 'FB', 'CTB', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322856.jpg', '2021-01-16 00:45:47'),
(23, '森林 啓斗', 'CTB', 'CTB', 'https://userdisk.webry.biglobe.ne.jp/008/238/39/N000/000/032/152470873453062941177_DSC_1023.jpg', '2021-01-16 00:47:25'),
(24, 'トニシオ・バイフ', 'CTB', '-', 'https://userdisk.webry.biglobe.ne.jp/008/238/39/N000/000/000/160445901385299529343.jpg', '2021-01-16 00:48:15'),
(25, '盛田 気', 'FB', 'WTB', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322857.jpg', '2021-01-16 00:48:53'),
(26, '木下 皓太', 'SH', '-', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322874.jpg', '2021-01-16 00:50:23'),
(27, 'ラーボニ・ウォーレン・ボスアヤコ', 'NO.8', '-', 'https://sunwolves.or.jp/files/tinymce/IMG_9850.JPG', '2021-01-16 01:00:15'),
(28, '金堂 礼', 'NO.8', '-', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/295266.jpg', '2021-01-16 01:00:48'),
(29, 'サム・チョンキット', 'FL', 'NO.8', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322858.jpg', '2021-01-16 01:03:49'),
(30, 'タタナ ダラス', 'LO', 'FL', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_9r4HzC-dNJHWXGxUvf0E3QrmqsyiAIPyTQ&usqp=CAU', '2021-01-16 01:05:49'),
(31, '鶴岡 怜志', 'FL', 'NO.8', 'https://rugby.sanix.jp/iimages/news/ac4f29722973b4eb83ca9a2fa42c6995.jpg', '2021-01-16 01:06:24'),
(32, 'ダン・プライアー', 'FL', 'NO.8', 'https://pbs.twimg.com/media/D2toFdSUkAArUSk.jpg', '2021-01-16 01:07:00'),
(33, '寺田 桂太', 'LO', '-', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/325533.jpg', '2021-01-16 01:07:31'),
(34, '廣田 耀規', 'LO', '-', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322853.jpg', '2021-01-16 01:08:06'),
(35, 'ジェームス・ムーア', 'LO', 'FL', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322859.jpg', '2021-01-16 01:08:36'),
(36, '西井 利宏', 'LO', 'FL', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322835.jpg', '2021-01-16 01:09:09'),
(37, 'マーク・アボット', 'LO', '-', 'https://sunwolves.or.jp/files/player/2019/118.jpg', '2021-01-16 01:10:16'),
(38, '福坪 龍一郎', 'LO', '-', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322836.jpg', '2021-01-16 01:10:50'),
(39, '宮﨑 達也', 'HO', '-', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322889.jpg', '2021-01-16 01:11:20'),
(40, '倉屋 望', 'HO', '-', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322847.jpg', '2021-01-16 01:11:48'),
(41, '王 鏡聞', 'HO', 'PR', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/322869.jpg', '2021-01-16 01:12:20'),
(42, '隈本 浩太', 'HO', 'PR', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/295249.jpg', '2021-01-16 01:12:49'),
(43, 'ジャレッド・アダムス', 'PR', '-', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/325601.jpg', '2021-01-16 01:13:17'),
(44, '寺脇 駿', 'PR', '-', 'https://userdisk.webry.biglobe.ne.jp/008/238/39/N000/000/000/159781353582126851602.jpeg', '2021-01-16 01:24:44'),
(45, '村上 翔梧', 'PR', '-', 'https://pbs.twimg.com/media/EeSYmZ5U0AMryZo.jpg', '2021-01-16 01:14:43'),
(46, '加藤 一希', 'PR', 'LO', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/295269.jpg', '2021-01-16 01:15:14');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `add_account`
--
ALTER TABLE `add_account`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `kanri_table`
--
ALTER TABLE `kanri_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `rugby_table`
--
ALTER TABLE `rugby_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `sanix_member`
--
ALTER TABLE `sanix_member`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `add_account`
--
ALTER TABLE `add_account`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- テーブルの AUTO_INCREMENT `kanri_table`
--
ALTER TABLE `kanri_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `rugby_table`
--
ALTER TABLE `rugby_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- テーブルの AUTO_INCREMENT `sanix_member`
--
ALTER TABLE `sanix_member`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
