/*
 Navicat Premium Data Transfer

 Source Server         : poonline
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : poonline

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 26/04/2020 22:24:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cost_structure
-- ----------------------------
DROP TABLE IF EXISTS `cost_structure`;
CREATE TABLE `cost_structure`  (
  `id_cost_structure` decimal(5, 0) NOT NULL,
  `detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_cost_structure`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cost_structure
-- ----------------------------
INSERT INTO `cost_structure` VALUES (90200, 'Niaga LNG');
INSERT INTO `cost_structure` VALUES (90300, 'Niaga');
INSERT INTO `cost_structure` VALUES (90400, 'Distribusi');
INSERT INTO `cost_structure` VALUES (90500, 'Transmisi');
INSERT INTO `cost_structure` VALUES (90600, 'Administrasi');

-- ----------------------------
-- Table structure for hotel
-- ----------------------------
DROP TABLE IF EXISTS `hotel`;
CREATE TABLE `hotel`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `marketing` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `contact` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `city` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `roomrate` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description_room` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `meeting` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description_meeting` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1231 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hotel
-- ----------------------------
INSERT INTO `hotel` VALUES (822, 'AKAMIGAS-STEM Cepu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (823, 'Akmani', NULL, NULL, 'Hotel Akmani', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (824, 'Alila Jakarta', '-Sherly Gin\n-Helen', '08170966651/ 021 231 6008\n- 081219930433', 'Jl. Pecenongan Kav. 7-17, Jakarta 10120', 'Jakarta', NULL, NULL, '400000', 'ruang meeting luas, pelayanan banquet sigap, makanan bervariasi dan enak.\nRuangan Avanti kecil, sempit walaupun isinya sesuai dengan kapasitas ruangan.');
INSERT INTO `hotel` VALUES (825, 'Alila Surakarta', NULL, '(0271) 6770888', 'Jl. Slamet Riyadi No.562, Jajar, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57144', 'Surakarta', '1164020', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (826, 'All Seasons Gajah Mada', NULL, '(021) 63856111', 'Jl. Kyai Haji Zainul Arifin No.5-7 2 1, RW.1, Petojo Utara, Kecamatan Gambir, Kota Jakarta Pusat, Ba', 'Jakarta', '512913', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (827, 'Amaris hotel La Codefin', NULL, '(021) 7191516', 'jl. Kemang I No.3-5, RT.11/RW.1, Bangka, Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota ', 'Jakarta', '417100', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (828, 'Amaroosa Jakarta', NULL, '(021) 75918800', 'Jl. Pangeran Antasari No.9, RT.3/RW.6, Cipete Sel., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khus', 'Jakarta', '668000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (829, 'Amaroossa Bandung Hotel', 'Citra ', '08170201947', 'Jl. Aceh No.71A, Citarum, Bandung Wetan, Kota Bandung, Jawa Barat 40115', 'Bandung', '650000', NULL, '250000', 'Fasilitas ruangan layak, AC panas, koneksi wifi buruk, pelayanan lamban, sulit mencari banquet, kebersihan kamar kurang, pelayanan laundry kurang, front office tidak sigap, coffee break dan snack kurang beragam, variasi makanan restoran sedikit, rasa kura');
INSERT INTO `hotel` VALUES (830, 'Amaroossa Royal Bogor Hotel', 'Dhona', '085782595533', 'Bogor Tengah, Jalan Otto Iskandardinata No.84, Baranangsiang, Bogor Timur, Baranangsiang, Bogor Tim.', 'Bogor', '550000', NULL, '350000', 'Bangunan lama, pelayanan banquet kurang sigap, makanan bervariasi, kamar luas.');
INSERT INTO `hotel` VALUES (831, 'Ambarrukmo', NULL, NULL, 'Hotel Ambarrukmo', 'Yogyakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (832, 'Amsterdam', NULL, NULL, NULL, 'Belanda', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (833, 'Antam Office Park Tower B', NULL, NULL, NULL, 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (834, 'Arion Swiss - BelHotel, Kemang', NULL, NULL, 'Jalan Kemang Raya No. 7, Kemang, Mampang, Jakarta, Indonesia, 12730', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (835, 'Arista Palembang', NULL, '(0711) 355000', 'Jl. Kapten A. Rivai, Sungai Pangeran, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30129', 'Palembang', '1264547', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (836, 'Arjuna Yogyakarta', NULL, '(0274) 513063', 'Jalan P. Mangkubumi No. 44 Yogyakarta Phone:+62 274 513063', 'Yogyakarta', '548000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (837, 'Arnava Bogor', NULL, '(0251) 7552111', 'Jl. Sholeh Iskandar Blok Masjid No.5, RT.04/RW.11, Kedungbadak, Kec. Tanah Sereal, Kota Bogor, Jawa ', 'Bogor', '482790', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (838, 'Aryaduta Jakarta', NULL, '(021) 23521234', 'Jalan Prapatan No.44-48, Jakarta Pusat, DKI Jakarta 10110, Indonesia +62 21 23521234', 'Jakarta', '908407', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (839, 'Asia Works - Kemang', NULL, NULL, 'Jl. Kemang Raya No.14B, RW.5, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukot', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (840, 'Aston Braga Bandung', NULL, '(022) 84460000', 'Jl. Braga No.99 - 101, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111', 'Bandung', '720000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (841, 'Aston Kuta Hotel and Residence', NULL, '(0361) 754999', ' Jl. Wana Segara No.2-5, Kuta, Kabupaten Badung, Bali 80361', 'Bali', '849904', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (842, 'Aston Pasteur Bandung', NULL, '(022) 82000777', 'Jl. Dr. Djunjunan No.162, Sukagalih, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162', 'Bandung', '1001881', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (843, 'Aston Primera Bandung', NULL, '(022) 82000777', 'Jl. Dr. Djunjunan 96 Pasteur, Bandung, Jawa Barat 40173 Telp. (+62 22 2060123) Fax. (+62 22 2060124)', 'Bandung', '1001881', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (844, 'Aston Sentul Lake resort', NULL, '(021) 29098888', 'Jl. Pakuan No.3, Sentul, Kec. Babakan Madang, Bogor, Jawa Barat 16810', 'Bogor', '1449579', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (845, 'Aston TB Simatupang ', 'Desi', '081297997978', 'Jl. Jend. T.B. Simatupang Kav. 9 Kebagusan, Jakarta Selatan 12520', 'Jakarta', '1038180', NULL, '425000', 'Kamar: baik, makanan: oke, menu nya banyak jenisnya, Meeting room: Oke, Mushalla ada, cewek dan cowok dipisah.\nRuang meeting sangat baik dan luas, fasilitas meeting room memadai, pelayanan cepat baik dan profesional, makanan sangat enak dan bervariasi');
INSERT INTO `hotel` VALUES (846, 'Aston Tropicana Bandung', NULL, '(022) 2030101', 'Cihampelas street No.125 - 127, Cipaganti, Coblong, Bandung City, West Java 40131', 'Bandung', '798528', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (847, 'Aston Tropicana Bandung', NULL, '(022) 2030101', 'Jl. Cihampelas No. 125-129 Bandung, Jawa Barat 40131 Telp. (+62 22 2030101) Fax. (+62 22 2036622) Em', 'Bandung', '798528', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (848, 'Atlet Century Park hotel, Senayan', NULL, '(021) 5712041', ' Jl. Pintu Satu Senayan, RT.1/RW.3, Gelora, Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota J', 'Jakarta', '1100000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (849, 'Auditorium Graha PGAS', NULL, NULL, NULL, 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (850, 'Auditorium PGN Ketapang, Gedung Sate dan PUSDIKIF Bandung', NULL, NULL, NULL, 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (851, 'Australia', NULL, NULL, NULL, 'Australia', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (852, 'Ayana Midplaza Hotel', NULL, '(021) 2510888', 'Jl. Jend. Sudirman No.Kav 10-11, RT.10/RW.11, Karet Tengsin, Tanahabang, Kota Jakarta Pusat, Daerah ', 'Jakarta', '1715175', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (853, 'Ayodya, Nusa Dua, Bali', NULL, '(0361) 771102', 'Jalan Pantai Mengiat, Nusa Dua, Benoa, Kec. Kuta Sel., Kabupaten Badung, Bali 80363', 'Bali', '1999989', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (854, 'B4T (Balai Besar Bahan dan Barang Teknik) Office', NULL, '(022) 2504088', 'Jl. Sangkuriang No.14, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (855, 'Badan Abritrase Nasional Indonesia', NULL, '(021) 7940542', 'Jl. Mampang Prpt. Raya, Warung Buncit No.2, RT.4/RW.1, Duren Tiga, Kec. Pancoran, Kota Jakarta Selat', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (856, 'Balai Hiperkes DKI Jakarta', NULL, '(021) 4267398', 'Jl. A. Yani No. 69 – 70, Cempaka Putih Jakarta 10510', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (857, 'Bali Nusa Dua Convention Center', NULL, '(0361) 773000', 'Kawasan Pariwisata Nusa Dua Lot NW/1, Benoa, Kuta Sel., Kabupaten Badung, Bali 80363', 'Bali', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (858, 'Banana Inn Bandung', NULL, '(022) 2005479', 'Jl. Dr. Setiabudi No.191, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40153', 'Bandung', '508194', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (859, 'Bandung', NULL, NULL, NULL, 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (860, 'Bandung', NULL, NULL, NULL, 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (861, 'Batam', NULL, NULL, NULL, 'Batam', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (862, 'Bekasi', NULL, NULL, NULL, 'Bekasi', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (863, 'Best Western Hotel Bandung', NULL, '(022) 42690555', 'Merdeka Street No.25-29, Babakan Ciamis, Sumur Bandung, Bandung City, West Java 40117', 'Bandung', '570000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (864, 'Best Western Premiere La Grande - Bandung', NULL, '(022) 42690555', 'Merdeka Street No.25-29, Babakan Ciamis, Sumur Bandung, Bandung City, West Java 40117', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (865, 'Bidakara', NULL, '(021) 83793555', 'Jl. Jend. Gatot Subroto Kav.71-73 Pancoran Jakarta Selatan 12870 Phone : +62 21 8379 3555 www.bidaka', 'Jakarta', '1190742', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (866, 'Binus University', NULL, NULL, NULL, 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (867, 'Binus University', NULL, NULL, NULL, 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (868, 'Blue Sky Pandurata Boutique Hotel  Jakarta', NULL, '(021) 3905205', 'Jl. Raden Saleh Raya No.12, RT.10/RW.1, Kenari, Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jak', 'Jakarta', '450000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (869, 'Blue Sky Jakarta', NULL, '(021) 29509999', 'Jl. Ks. Tubun No.19, RT.5/RW.6, Petamburan, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (870, 'Booster Facility MCS Bitung', NULL, NULL, NULL, 'Bitung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (871, 'Borobudur Jakarta', NULL, '(021) 3805555', 'Jl. Lapangan Banteng Selatan No.1, Jakarta Pusat, DKI Jakarta 10710 Telp. (+62 21 3805555) Fax. (+62', 'Jakarta', '1377026', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (872, 'BSD Serpong', NULL, NULL, NULL, 'Tangerang', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (873, 'Bukit Indah', NULL, '(0263) 512903', 'Jl. Raya Ciloto 116 Puncak, Cianjur, Jawa Barat 43253 Telp. 0263 - 512903 Fax. 0263 - 513262, 513167', 'Bogor', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (874, 'BW Suite Hotel Belitung', NULL, '(0719) 23898', 'Jl. Patimura, Tj. Pendam, Tj. Pandan, Kabupaten Belitung, Kepulauan Bangka Belitung 33414', 'Bangka Belitung', '2178900', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (875, 'Cico Resort Bogor', NULL, '(0251) 8657220', 'Jl. Tumenggung Wiradiredja No.216, Cimahpar, Bogor Utara, Kota Bogor, Jawa Barat 16155', 'Bogor', '449935', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (876, 'Cilegon', NULL, NULL, NULL, 'Serang', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (877, 'Cipanas, Bogor', NULL, NULL, NULL, 'Bogor', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (878, 'Ciputra Jakarta', NULL, '(021) 5660640', 'Jl. Letnan Jenderal S Parman, Jakarta Barat, DKI Jakarta 11470 Telp. (+62 21 5660640) Fax. (+62 21 5', 'Jakarta', '647000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (879, 'Citraweb Training Facilities', NULL, '(021) 5209612', 'Gedung Cyber 1 Lantai 11, Jl. Kuningan Barat Raya No.11, Kuningan Bar., Jakarta, Daerah Khusus Ibuko', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (880, 'Conrad Bali', NULL, '(0361) 778788', ' Jl. Pratama No.168, Tj. Benoa, Kuta Sel., Kabupaten Badung, Bali 80363', 'Bali', '2480500', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (881, 'Convention Center Hotel Tiara Medan', NULL, '(061) 574000', 'Jl. Cut Mutia, No.1 , Medan 20152', 'Medan', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (882, 'Courtyard Marriot Bali', NULL, '(0361) 3003888', 'Jalan Nusa Dua, Kuta Selatan, Badung, Bali 80361 Telp. (+62 361 3003888) Fax. (+62 361 3003999) Emai', 'Bali', '1633500', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (883, 'Crown Plaza Bandung', NULL, '(022) 30002500', 'Jl. Lembong No.19, Jawa Barat Bandung ID-JB, 40111', 'Bandung', '979811', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (884, 'Crown Prince Surabaya', NULL, '(031) 5450090', 'Jalan Basuki Rachmat 123-127 Surabaya Telp 031-5450090 www.crownprinceindonesia.com', 'Jakarta', '583105', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (885, 'D’ Anaya Bogor', NULL, '(0251) 8390120', 'Jl. Pakuan Indah No.7, Baranangsiang, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16143', 'Bogor', '413954', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (886, 'Dafam Fortuna', NULL, '(0274) 6429888', 'Jl. Dagen No. 60 (Malioboro) Yogyakarta Telp. 0274-6429-888', 'Yogyakarta', '600000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (887, 'Danau Dariza Garut', NULL, '(026) 2243696', 'Jl. Cipanas Raya No. 44/45, Langensari Tarogong Kaler Garut 44115 Telp. (+62 26 2243696) Fax. (+62 2', 'Bogor', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (888, 'DBS Bank Tower', NULL, '(021) 29885900', '25th fl. Suite 2501 Jl Prof. Dr. Satrio Kav 3-5, Jakarta 12940 Phone : +62 21 2988 5900 Fax : +62 21', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (889, 'De Java Bandung', NULL, '(022) 2039888', 'Jl. Sukajadi No 148-150, Bandung, 40161 Telp. (+62 22 2039888) Fax. (+62 22 2044188) Email smm@dejav', 'Bandung', '648687', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (890, 'De Paviljoen Bandung', NULL, '(022) 86012888', 'Jalan Laks Jl. L. L. R.E. Martadinata No.68, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 4', 'Bandung', '680000', NULL, '250000', NULL);
INSERT INTO `hotel` VALUES (891, 'Discovery Kartika Plaza Hotel', NULL, '(0361) 2001300', 'Jl. Kartika Plaza Kuta 80361 Bali Tel. +62 (361) 751067 Fax. +62 (361) 753988', 'Bali', '1535774', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (892, 'Double Tree Jakarta', NULL, '(021) 31904433', 'Jl. Pegangsaan Timur No.17, Cikini, Jakarta, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310', 'Jakarta', '1246300', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (893, 'Dreamtel', NULL, '(021) 3928728', 'Jl. Johar No.17-19, RW.3, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakart', 'Jakarta', '483668', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (894, 'Eastparc Hotel Yogyakarta', NULL, '(0274) 4932000', 'Jl. Laksda Adisucipto Km.6.5, Seturan Yogyakarta Telp; +62 274 493 2000 Fax; +62 274 493 2222 Email;', 'Yogyakarta', '949999', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (895, 'Emilia Palembang', NULL, '(0711) 5630099', 'Jl. Letkol Iskandar No.18, 24 Ilir, Kec. Bukit Kecil, Kota Palembang, Sumatera Selatan 30113', 'Palembang', '1134001', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (896, 'Enciety Business Consult', NULL, '(021) 52971488', 'Menara jamsostek Lt. 3, Unit TA0305, Jl. Gatot Subroto No. 38, RT.6/RW.1, Kuningan Bar., Jakarta Sel', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (897, 'English First (EF)', NULL, NULL, 'Lembaga English Course yang berlokasi di berbagai daerah, salah satunya Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (898, 'English First (EF) Cikarang', NULL, NULL, 'English First (EF) Cikarang', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (899, 'English First (EF) Cilegon', NULL, NULL, 'English First (EF) Cilegon', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (900, 'English First (EF) Cilegon', NULL, NULL, 'English First (EF) Cilegon', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (901, 'English First Bekasi', NULL, NULL, 'English First Bekasi', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (902, 'English First Palembang', NULL, NULL, 'English First Palembang', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (903, 'Fabu', NULL, '(022) 4224600', 'Jl. Kebon Jati No.32, Kb. Jeruk, Kec. Andir, Kota Bandung, Jawa Barat 40181', 'Jakarta', '456449', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (904, 'Fairmont', NULL, '(021) 29703333', 'Komplek Gelora Bung Karno, Jl. Asia Afrika No.8, Gelora, Tanahabang, Kota Jakarta Pusat, Daerah Khus', 'Jakarta', '2904000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (905, 'Fakultas Ekonomi Universitas Indonesia', NULL, NULL, 'Jl. Salemba Raya No.4, Jakarta Pusat 10430 Telp : (021) 330355 Fax : (021) 330343', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (906, 'Faletehan Jakarta', NULL, '(021) 7202021', 'Jl. Falatehan I No.26, RW.1, Melawai, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Ja', 'Jakarta', '899122', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (907, 'Fave Braga', 'Irwan', '08164563622', 'Jl. Braga no. 99-101, Braga, Sumur Bandung 40111', 'Bandung', '470000', 'include bfast/laundry', NULL, 'kamar tergolong kecil. Berdasarkan opini peserta, hotel tidak cocok untuk pekerja korporasi, menu makanan kurang enak');
INSERT INTO `hotel` VALUES (908, 'Fave Hotel Zainul Arifin', 'Nadya ', '081283605785', 'Jl. Kyai H. Zainul Arifin No.15-17, RT.5/RW.1, Petojo Utara, Gambir, Kota Jakarta Pusat, Daerah Khus', 'Jakarta', '450000', NULL, NULL, 'ruang kamar standard, bersih dan memadai.');
INSERT INTO `hotel` VALUES (909, 'FHUI', NULL, NULL, 'Fakultas Hukum Universitas Indonesia', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (910, 'G.H Universal Hotel Bandung', NULL, '(022) 2010388', 'Jl. Setiabudi No. 376 Bandung , Jawa Barat 40143 Telp. (+62 22 2010388) Fax. (+62 22 2014525) Email ', 'Bandung', '1770562', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (911, 'GasInc Cafe, Lobby Graha PGAS', NULL, NULL, 'Graha PGAS, Jl. Kyai Haji Zainul Arifin No.20, RW.7, Krukut, Kec. Taman Sari, Kota Jakarta Barat, Da', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (912, 'Gedung ADI PURI, WISMA UBUD', NULL, NULL, 'Gedung ADI PURI, WISMA UBUD', 'Bali', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (913, 'Gedung Diklat PGN Braga Bandung', 'Mahpudin', '085294148876', 'Jl. Serang No. 1-10 Bandung, Jawa Barat Telp. (+62 22 7207 166)', 'Bandung', NULL, NULL, '2500000', NULL);
INSERT INTO `hotel` VALUES (914, 'Gedung GBC Indonesia', NULL, '(021) 27658660', 'Jl. RC. Veteran Raya No.8D, RT.1/RW.3, Bintaro, Kec. Pesanggrahan, Kota Jakarta Selatan, Daerah Khus', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (915, 'Gedung InformIT', NULL, '(022) 4223168', 'Jl. Purnawarman No.9c, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (916, 'Gedung Ma Coterie', NULL, NULL, 'Gedung Ma Coterie', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (917, 'Gedung Magister Hukum UGM Jakarta', NULL, NULL, 'Tower B Lantai 3 No. 305, Jalan Doktor Saharjo No.83, Manggarai, Tebet, RT.13/RW.8, Manggarai, Kec. ', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (918, 'Gedung Menara Kadin Jakarta', NULL, '(021) 83705925', 'Gedung Menara Kadin Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (919, 'Gedung Multindo Persada', NULL, NULL, 'Jl. Mampang Prpt. Raya No.26, RT.13/RW.1, Duren Tiga, Kec. Mampang Prpt., Kota Jakarta Selatan, Daer', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (920, 'Gedung Permata Kuningan', NULL, '(021) 84503296', 'Jl. Kuningan Mulia kav. 9C, Setiabudi, RT.6/RW.1, Menteng Atas, Kuningan, South Jakarta City, Jakart', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (921, 'Gino Feruci', NULL, '(022) 4263333', 'Jl. Kebon Jati No. 71-75 Bandung, Telp. 022-4248000', 'Bandung', '284606', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (922, 'Gino Feruci Braga Bandung', NULL, '(022) 4201199', 'Jl. Braga No. 67 Bandung 40111 P (+62) 22 420 00 99 F (+62) 22 420 11 99 E bragabandung@ginoferuci.c', 'Bandung', '514156', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (923, 'Gino Feruci Kebon Jati', NULL, '(022) 4263333', 'Jl. Kebon Jati No. 71-75 Bandung, Telp. 022-4248000', 'Bandung', '284606', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (924, 'GML Perfomance Consulting', NULL, '(021) 4515718', 'Jl. Boulevard Artha Gading No.24-25, RT.18/RW.8, West Kelapa Gading, Kelapa Gading, North Jakarta Ci', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (925, 'Golden Flower Bandung', NULL, '(022) 4239999', 'Jl. Asia Afrika 15-17 Bandung 40111 Telp. (+62 22 4239999) Fax. (+62 22 4209889) Email bandung@golde', 'Bandung', '573935', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (926, 'Graha Akuntan', NULL, '(021) 31904232', 'Jl. Sindanglaya No. 1 Menteng, Jakarta 10310 Tel: +62 21 31904232 Fax: +62 21 7245078 iai-info@iaigl', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (927, 'Graha CIMB Niaga', NULL, '(021) 2505050', 'Jl. Jend. Sudirman No.Kav 58, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota J', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (928, 'Graha Sucofindo', NULL, '(021) 7983666', 'Jl. Raya Pasar Minggu kav. 34 Jakarta Selatan 12740 Telp. 021.7985555 Fax. 021 7986666 Website: ypia', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (929, 'Gran Melia', NULL, '(021) 5268080', 'Jl. H. R. Rasuna Said No.Kavling 10, RT.5/RW.4, Kuningan Tim., Setia Budi, Kota Jakarta Selatan, Dae', 'Jakarta', '1453237', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (930, 'Grand Asrilia Bandung', NULL, '(022) 73514111', 'Jl. Pelajar Pejuang 45 No.123, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264', 'Bandung', '425000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (931, 'Grand Aston City Hall Medan', NULL, '(061) 4557000', 'Balai Kota No. 1 Medan Sumatera Utara Telp : +62-61 4557 000 Fax : +62-61 4558 822', 'Medan', '1180000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (932, 'Grand Aston Yogyakarta', NULL, '(0274) 566999', 'Jalan Urip Sumohardjo No 37, Yogyakarta 55222 Tel : +65 6235 2498 Fax : +65 6235 1416', 'Yogyakarta', '917180', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (933, 'Grand Candi', NULL, '(024) 8416222', 'Jl. Sisingamangaraja No.16, Jawa Tengah 50232, Indonesia Telp : 024 - 8416222 w : www.grandcandihote', 'Semarang', '600000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (934, 'Grand Cempaka', NULL, NULL, 'Jl. Cemara No. 1, Jakarta, Jakarta, 10350, Indonesia', 'Jakarta', '400781', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (935, 'Grand Hyatt Nusa Dua Bali', NULL, '(0623) 61771234', 'Kawasan Wisata Nusa Dua BTDC Nusa Dua, Bali 80363', 'Bali', '2317904', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (936, 'Grand Inna Kuta Beach Bali', NULL, '(0361) 751361', 'Jl. Pantai Kuto No.1 T +62 361 751 361 Information : info@grandinnakuta.com Reservation : reservatio', 'Bali', '1012226', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (937, 'Grand Kemang ', NULL, '(021) 7194121', 'Jl. Kemang Raya, RT.14/RW.1, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota', 'Kemang', '712754', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (938, 'Grand Mercure Harmoni', 'Meta Andiati', '08121110034/ 021 3453777', 'Jl. Hayam Wuruk no. 36-37, Jakarta Pusat 10120', 'Jakarta', '1046356', NULL, '430000', 'makanan kurang bervariasi, restaurant kurang luas, ruang meeting bagus dan luas, fasilitas ruangan sangat baik, pelayanan banquet sangat baik.');
INSERT INTO `hotel` VALUES (939, 'Grand Mercure Harmony Jakarta', 'Meta Andiati', '08121110034/ 021 3453777', 'Jl. Hayam Wuruk No.37 Jakarta Pusat, DKI Jakarta 10120 Telp. (+62 21 3453777) Fax. (+62 21 3453999) ', 'Jakarta', '1046356', NULL, '430000', 'makanan kurang bervariasi, restaurant kurang luas, ruang meeting bagus dan luas, fasilitas ruangan sangat baik, pelayanan banquet sangat baik.');
INSERT INTO `hotel` VALUES (940, 'Grand Millennium Hotel', NULL, '+60 3-2117 4888', '160, Bukit Bintang Street, Bukit Bintang, 55100 Kuala Lumpur, Federal Territory of Kuala Lumpur, Mal', 'Malaysia', '1305522', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (941, 'Grand Millennium Kuala Lumpur', NULL, '+60 3-2117 4888', 'Jl. Bukit Bintang Kuala Lumpur 160, 55100 Malaysia Tlp. +60 3 2117 4888 Fax. +60 3 2142 1441', 'Malaysia', '805000', NULL, '410000', NULL);
INSERT INTO `hotel` VALUES (942, 'Grand Mulya Sentul', NULL, '(021) 22968102', 'Jl. Babakan Tumas No.16 Desa Cikeas - Sukaraja Sentul, Cadas Ngampar, Kec. Sukaraja, Bogor, Jawa Bar', 'Bogor', '977500', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (943, 'Grand Quality', NULL, '(0274) 485005', 'Hotel Grand Quality Jl. Adisucipto No. 48 Yogyakarta Phone:+62 274 485005', 'Yogyakarta', '611432', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (944, 'Grand Royal Panghegar Bandung', NULL, '(022) 4232286', 'Jl. Merdeka No.2 Bandung Jawa Barat 40111 Telp. (+62 22 4232286) Fax. (+62 22 4231583) Email reserva', 'Bandung', '800000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (945, 'Grand Savero Bogor', 'Imma (Rohima)', '082240481280', 'Hotel Grand Savero Bogor', 'Bogor', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (946, 'Grand Savero Hotel Bogor', 'Imma (Rohima)', '082240481280', 'Jl. Padjajaran no. 27, Babakan, Bogot 16128', 'Bogor', '805000', NULL, '410000', 'Mushola kecil dan Campur Wanita dan Pria');
INSERT INTO `hotel` VALUES (947, 'Grand Setiabudi Bandung', NULL, '+62 22-204-4002', 'Jl. Setiabudi No.130-134 Bandung 40141, West Java Indonesia', 'Bandung', '826800', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (948, 'Grand Slipi Tower', NULL, NULL, 'Gedung Perkantoran PT Putranata Adi Mandiri', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (949, 'Grand Surabaya', NULL, '(031) 5450888', 'Jalan Pemuda No 31-37 Surabaya, 60271 Telp 031 - 5316833', 'Surabaya', '305609', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (950, 'Grand Swiss-Belhotel Medan', NULL, '(061) 4576999', 'Jalan S. Parman No.217, Sumatera Utara 20152, Indonesia Phone:+62 61 4576999', 'Medan', '1351707', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (951, 'Grand Tjokro Bandung', NULL, '(022) 82021220', 'Jl. Cihampelas No.211-217, Cipaganti, Kecamatan Coblong, Kota Bandung, Jawa Barat 40131', 'Jakarta', '820000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (952, 'Grand Tjokro Jakarta', NULL, '(021) 5660229', 'Jl. Raya Daan Mogot No.63, RW.1, Tj. Duren Utara, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah', 'Jakarta', '691884', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (953, 'Grand Whiz Poins Square Jakarta', ' novi ', '081296069731', 'Poins Square, Jl. R.A.Kartini No.1, RT.9/RW.7, Lb. Bulus, Cilandak, Kota Jakarta Selatan, Daerah Khu', 'Jakarta', NULL, NULL, '380000', 'mushola kecil pengap, makanan tidak enak, toilet kotor, gabisa free parking, ruang meeting baik, pelayanan cepat.');
INSERT INTO `hotel` VALUES (954, 'Grand Whiz Points Square Jakarta', ' novi ', '081296069731', 'Poins Square, Jl. R.A.Kartini No.1, RT.9/RW.7, Lb. Bulus, Cilandak, Kota Jakarta Selatan, Daerah Khu', 'Jakarta', NULL, NULL, '380000', 'mushola kecil pengap, makanan tidak enak, toilet kotor, gabisa free parking, ruang meeting baik, pelayanan cepat.');
INSERT INTO `hotel` VALUES (955, 'Grand Zuri Malioboro', NULL, '(0274) 6429288', 'Address: Jl. P. Mangkubumi, Kota Yogyakarta, Daerah Istimewa Yogyakarta, Indonesia Phone:+62 274 642', 'Yogyakarta', '660530', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (956, 'Gren Alia Prapatan', NULL, '(021) 34834444', 'Jalan Prajurit KKO Usman dan Harun No.28 Kwitang Jakarta Pusat, RW.5, Senen, Jakarta, Central Jakart', 'Jakarta', '1154000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (957, 'Harris Batam', NULL, '(0778) 7498888', 'Jl. Engku Putri, Batam Center - Batam 29641 Phone: +62 778 749 8888 Fax. +62 778 749 9999 E-mail: sa', 'Batam', '1220000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (958, 'Harris FX Sudirman', 'Reza', '081286367220', 'Jl. Jend. Sudirman, Senayan, Jakarta Pusat 10270', 'Jakarta', '613680', NULL, '440000', 'ruang meeting  sempit, dan tidak rapi. Lantai tidak safety karena tidak rata. ');
INSERT INTO `hotel` VALUES (959, 'Harris Hotel & Conventions Kelapa Gading', 'Dimas', '081287888930', 'Harris Hotel & Conventions Kelapa Gading', 'Jakarta', '855000', '(full board twin)', NULL, 'Ruang meeting baik, cooffee break baik, menu makanan baik.');
INSERT INTO `hotel` VALUES (960, 'HARRIS Hotel Sentul City - Bogor', 'Osya', '081287976400', 'HARRIS Hotel Sentul City - Bogor', 'Bogor', '798000', NULL, '410000', 'Banqueet tidak standby, menu makanan kurang enak, coffee break baik, ruang meeting kurang baik, sound sering mati, AC tidak terlalu dingin, pencahayaan kurang, akses jauh ke pusat kota.');
INSERT INTO `hotel` VALUES (961, 'Harris Malang', NULL, '(0341) 2992299', 'Jl. A Yani Utara Riverside Block C-1 Malang 65126 Telp. (+62 341 299 2299) Fax. (+62 341 299 2288) E', 'Malang', '883000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (962, 'Harris Suites fX Sudirman - Jakarta', 'Reza', '081286367220', 'Jl. Jend. Sudirman, Senayan, Jakarta Pusat 10270', 'Jakarta', '613680', NULL, '440000', 'ruang meeting  sempit, dan tidak rapi. Lantai tidak safety karena tidak rata. ');
INSERT INTO `hotel` VALUES (963, 'Harris Tebet Jakarta', NULL, NULL, 'JI. Dr Saharjo no. 191 ,Jakarta 12960 Phone: +62 21 830 33 55 Fax +62 21 829 55 33 E-mail: sales-har', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (964, 'Harris Vertu Harmoni', 'Ferbriastika', '081905654810', 'Jl. Hayam Wuruk No.6, RT.6/RW.2, Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10120', 'Jakarta', '685600', NULL, '300000', 'Menu Coffee break tidak beraneka ragam ');
INSERT INTO `hotel` VALUES (965, 'Hoilday Inn Hotel', NULL, NULL, 'Jl. Ir. H. Juanda 31-33 Bandung 40116 Phone. 001 803 656 888 Fax. +62-22-4216666', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (966, 'Holiday Inn Bandung', NULL, NULL, 'Hotel Holiday Inn Bandung', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (967, 'Holiday Inn Pasteur Bandung', NULL, '(022) 2060123', 'Jl. Dr. Djunjunan No.96, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162', 'Bandung', '662522', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (968, 'Horison Bandung', NULL, '(022) 7305000', 'Jl. Pelajar Pejuang \'45 No 121 Buah Batu, Bandung 40264 telp. (+62 22 7305000) fax. (+62 22 7304711)', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (969, 'Horison Jogjakarta', NULL, '(0274) 6429155', 'Jl. Gowongan Kidul No.33 - 49, Daerah Istimewa Yogyakarta 55271 Telp. +62 274 6429155', 'Yogyakarta', '1034109', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (970, 'Horison Ultima Malang', NULL, '(0341) 484777', 'Hotel Horison Ultima Malang Green Boulevard No. 2 Kota Arya Malang 65126 telp.(+62 341 417272) fax.(', 'Malang', '468000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (971, 'Hotel Harper Yogyakarta', NULL, '(0274) 2920008', 'Jl. P. Mangkubumi No.52, Gowongan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55232', 'Yogyakarta', '650980', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (972, 'Hotel Santika Bandung', NULL, '(022) 4203009', 'Jl. Sumatera No.52, Bandung, Jawa Barat 40115 Telp. (+62 22 4203009) Fax. (+62 22 4239601) Email res', 'Bandung', '623000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (973, 'Hotel Santika Jakarta', NULL, '(021) 5330350', 'Jalan AIPDA K.S. Tubun No. 7 Slipi, Jakarta 11410 Phone : (62-21) 5361777, 5330350 Fax : (62-21) 548', 'Jakarta', '879999', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (974, 'Hotel Santika Jemursari Surabaya', NULL, '(031) 8438881', 'Jalan Jemursari No. 258, Surabaya 60237 - INDONESIA Phone : (62-31) 8438881 Fax : (62-31) 8438818 Em', 'Surabaya', '596400', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (975, 'Hotel Santika Premier Jakarta - Hayam Wuruk', NULL, '(021) 2600818', 'Hotel Santika Premier Jakarta - Hayam Wuruk', 'Jakarta', '805000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (976, 'Hotel Santika Premiere Gubeng Surabaya', NULL, '(031) 5053636', 'Hotel Santika Premiere Gubeng - Surabaya JL. Raya Gubeng No. 54 Gubeng Surabaya 60281 - Indonesia Ph', 'Surabaya', '757800', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (977, 'Hotel Santika Premiere Jogja', NULL, '(0274) 563036', 'Jalan Jendral Sudirman No. 19, Jetis, Kota Yogyakarta, DIY 55233 telp. (+62 274 563036) fax. (+62 27', 'Yogyakarta', '855000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (978, 'Hotel Savoy Homann Bandung', NULL, '(022) 4232244', 'Jalan Asia Afrika No. 112, Bandung Phone:(022) 4232244', 'Bandung', '735750', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (979, 'Hotel Sensa Bandung', NULL, '(022) 2061111', 'Jl. Cihampelas No.160, Cipaganti, Kecamatan Coblong, Kota Bandung, Jawa Barat 40131', 'Bandung', '1043800', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (980, 'Hotel Serela Cihampelas Bandung', NULL, '(022) 82062441', 'Jalan Cihampelas No.147, Bandung, Jawa Barat 40131 (022) 82062441', 'Bandung', '520062', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (981, 'Hotel Shangri-La Surabaya', NULL, '(031) 60038888', 'Hotel Shangri-La Surabaya', 'Surabaya', '1197900', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (982, 'Hotel Sheraton Bali Kuta Resort', NULL, '(0361) 8465555', 'Jl. Raya Pantai Kuta Bali, Badung, Bali 80361 telp. (+62 361 846 5555 ) fax. (+62 361 846 5577) Emai', 'Bali', '2427900', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (983, 'Hotel Sofyan Betawi', NULL, NULL, 'Jl. Cut Mutia No.9, Menteng, Jakarta Telp : +6221 3905011 Fax : +6221 3902747', 'Jakarta', '450000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (984, 'Hotel Sotis Residence Pejompongan  Jakarta', NULL, '(021) 29880727', 'Jl. Penjernihan 1 Jl. Pejompongan Raya No.10 B, Bend. Hilir, Kecamatan Tanah Abang, Kota Jakarta Pus', 'Jakarta', '700000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (985, 'Hotel Sunlake Sunter', NULL, '(021) 6509969', 'Jl. Danau Permai Raya No.2, RT.2/RW.14, Sunter Jaya, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukot', 'Jakarta', '419220', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (986, 'Hotel Surabaya Plaza', NULL, NULL, 'Jalan Pemuda No.31-37, Surabaya, Jawa Timur, Indonesia +62 31 5316833', 'Surabaya', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (987, 'Hotel Swarna Dwipa Palembang', NULL, '(0711) 313322', 'Jl. Tasik No.2, Talang Semut, Kec. Bukit Kecil, Kota Palembang, Sumatera Selatan 30136', 'Palembang', '467122', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (988, 'Hotel Tentrem Yogyakarta', NULL, '(0274) 6415555', 'Jl. P. Mangkubumi No.72A, Cokrodiningratan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta ', 'Yogyakarta', '1512500', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (989, 'Hotel The Akmani Jakarta', NULL, '(021) 31905335', 'Jl. KH. Wahid Hasyim Thamrin No.91, RW.4, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusu', 'Jakarta', '760000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (990, 'Hotel The Jayakarta Inn & Villas Cisarua, Mountain Resort & Spa', NULL, '(0251) 8254680', 'Hotel The Jayakarta Inn & Villas Cisarua, Mountain Resort & Spa', 'Bogor', '1343769', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (991, 'Hotel Town Squares Surabaya', NULL, '(031) 5631222', 'Jl. Hayam Wuruk No. 6 Surabaya 60242 Telp. (+62 31 5631222) Fax. (+62 31 5610222) Email tssuites@tow', 'Surabaya', '1138005', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (992, 'Hotel Trans Luxury Bandung', NULL, '(022) 87348888', 'Jl. Gatot Subroto 289, Bandung, 40273 telp. (+62 22 87345555) fax. (+62 22 87347777) email sales@the', 'Bandung', '2395190', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (993, 'Hotel Westin', NULL, '(021) 27887788', 'Jl. H. R. Rasuna Said No.Kav. C-22 A, RT.2/RW.5, Karet Kuningan, Kecamatan Setiabudi, Kota Jakarta S', 'Jakarta', '2347400', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (994, 'HSP Academy Training Center', NULL, '(021) 55686090', 'Ruko Graha Boulevard Blok D No. 26, Jl. Boulevard, Curug Sangereng, Kelapa Dua, Curug Sangereng, Kec', 'Tangerang', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (995, 'HSP TRAINING CENTER', NULL, '(021) 55686090', 'Ruko Graha Boulevard Blok D No. 26, Jl. Boulevard, Curug Sangereng, Kelapa Dua, Curug Sangereng, Kec', 'Tangerang', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (996, 'IAI Knowledge Center', NULL, '(021) 7203184', ' Blok A1, No.21, Jl. RS Fatmawati Ruko Duta Mas Fatmawati, RT.3/RW.5, Cipete Utara, Kec. Kby. Baru, ', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (997, 'IAI SALEMBA', NULL, '(021) 31904232', 'Jl. Sindanglaya No.1, RW.7, Menteng, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (998, 'Ibis Basuki Rahmat Surabaya', NULL, '(0623) 15358885', 'Jalan Basuki Rahmat No 94-96 , Surabaya, Jawa Timur 60271 telp. (+62 31 5358885) fax. (+62 31 535888', 'Surabaya', '375575', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (999, 'Ibis Cawang Jakarta', NULL, '(021) 29257777', 'Jl. MT. Haryono No. 9 Cawang Jakarta Telp : (021)29257777 Fax : (+62)21/8004965', 'Jakarta', '405000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1000, 'Ibis Jakarta Harmoni', NULL, '(021) 21203145', 'Jl. Hayam Wuruk No.35, Kb. Klp., Jakarta, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10120', 'Jakarta', '491456', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1001, 'Ibis Pasteur Bandung', NULL, '(022) 82602020', 'Jl. Dr. Djunjunan No.22, Sukabungah, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162', 'Jakarta', '451500', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1002, 'Ibis Rajawali Surabaya', NULL, '(0623) 15358885', 'Jalan Rajawali no.9-10, Jawa Timur 60175 telp. (+62 31 3539994) fax. (+62 31 3539995) Email reservat', 'Surabaya', '373575', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1003, 'Ibis Senen Jakarta', NULL, '(021) 31920033', 'Jl. Kramat Raya No.100, Kwitang, Jakarta, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10420', 'Jakarta', '370000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1004, 'Ibis Slipi Jakarta', NULL, '(0622) 15331560', 'Jl. Letjen S. Parman No.Kavling 59, Slipi, Kec. Palmerah, Jakarta, Daerah Khusus Ibukota Jakarta 110', 'Jakarta', '493680', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1005, 'Ibis Style Hotel Malang', NULL, '(0623) 41409900', 'Jl. Let.Jend. S. Parman No. 45 Malang, Kota Malang, Jawa Timur 65122 Telp. (+62 341 409900) Fax. (+6', 'Malang', '419961', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1006, 'Ibis Styles Dagen Yogyakarta', NULL, '(0622) 74588889', 'Jalan Dagen 109, Yogyakarta 55271, Indonesia', 'Yogyakarta', '681676', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1007, 'Ibis Styles Jakarta Sunter', NULL, '(021) 22651699', 'Jl. Gaya Motor I, Sungai Bambu, Sunter, Jakarta, Daerah Khusus Ibukota Jakarta 14350', 'Jakarta', '453508', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1008, 'Ibis Yogyakarta', NULL, '(0622) 74516974', 'Hotel Ibis Yogyakarta Jalan Malioboro No 52-58 Tel. (+62)274/516974 Fax. (+62)274/516977', 'Yogyakarta', '718750', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1009, 'iCore C&P Cp. Ltd', NULL, '0813-8230-0128', 'Jl. Bangka II No.17, Pela Mampang, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota J', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1010, 'Indonesia Kempinski Jakarta', NULL, '(021) 23583800', 'l. M.H. Thamrin No.1, Menteng, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310', 'Jakarta', '2500000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1011, 'Indonesia Stock Exchange', NULL, '(021) 5150515', 'Jl. Jend. Sudirman No.Kav. 52 - 53, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibu', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1012, 'Inixindo Bandung', NULL, '(022) 203 2831', 'Kantor INIXINDO Bandung Jalan Cipaganti No. 95, Bandung, Jawa Barat Telp: (022) 203 2831 Fax: (022) ', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1013, 'Inixindo Jogja', NULL, '(0274) 515448', 'Jalan Kenari No. 69 Muja Muju Yogyakarta 55165. Telp. (0274) 515448, 540967, 548223. Fax. (0274) 554', 'Yogyakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1014, 'Inixindo Persada Rekayasa Komputer', NULL, '(021) 57940868', 'Jl. Tentara Pelajar No.5, RW.7, Grogol Utara, Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ib', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1015, 'Inna Garuda Hotel Jogja', NULL, '(021) 274 566353', 'Jl. Malioboro No. 60 Suryatmajan Danurejan Yogyakarta Phone : +62 274 566353 Fax : +62 274 563074 Em', 'Yogyakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1016, 'Inna Parapat', NULL, '(0625) 41012', 'Jl. Marihat No. 1 – Parapat PO Box 21174, Lake Toba, North Sumatera, Indonesia T +62 625 41012 F +62', 'Sumatera', '1334225', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1017, 'Inna Tretes Pasuruan', NULL, '(0343) 881776', 'Hotel Inna Tretes Pasuruan w : www.innatretes.com e = info@innatretes.com Jl. Pesanggrahan No. 2, Tr', 'Pasuruan', '396535', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1018, 'INSEAD Europe Campus', NULL, NULL, 'Boulevard de Constance, 77300 Fontainebleau, Prancis', 'Prancis', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1019, 'International Sos Training Center Jakarta', NULL, '(021) 7505980', 'Jl. Rambu No. 17 Cipete Selatan Antasari Jakarta Selatan 12410 Telp. (+62 21 750 5973) Fax. (+62 21 ', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1020, 'IntiPesan', NULL, '(021) 781 5858', 'Jl. Baung IV No.36A (Kebagusan), Jakarta 12520', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1021, 'Intipesan Learning Centre (Gedung)', NULL, '(021) 781 5858', 'Jl. Baung IV No.36A (Kebagusan), Jakarta 12520', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1022, 'IPMI International Business School', NULL, NULL, 'Jalan Rawajati Timur I No.1, RT.3/RW.2, Rawajati, Pancoran, RT.3/RW.2, Rawajati, Pancoran, Jakarta S', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1023, 'Ivory Bandung', NULL, '(022) 4203999', 'Jl. Bahureksa No.3, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115', 'Bandung', '573650', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1024, 'JAKARTA', NULL, NULL, 'JAKARTA', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1025, 'Jakarta Convention Center (JCC)', NULL, NULL, 'Jakarta Convention Center (JCC)', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1026, 'Jakarta Design Center (JDC)', NULL, NULL, 'Jakarta Design Center (JDC) Lt.6 J. Gatot Subroto Kav. 53 slipi Jakarta Pusat', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1027, 'Jakarta Theatre', NULL, NULL, 'Jakarta Theatre', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1028, 'Jayakarta Bandung', NULL, NULL, 'Jl.Ir.H.Juanda No.381A Bandung 40135 Telp. (+62 22 2505888) Fax. (+62 22 2507515) Email bandung@jaya', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1029, 'JEEP Station Indonesia Resort', NULL, NULL, 'Meeting room package dan Room', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1030, 'JI EXPO KEMAYORAN', NULL, NULL, 'KEMAYORAN', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1031, 'Jimly School of Law and Government', NULL, NULL, 'Jimly School of Law and Government, Gd Sarinah Lt 9/11.03', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1032, 'Jogjakarta Plaza Hotel', NULL, '(0274) 584222', 'Jl.Affandi – Gejayan, Yogyakarta 55281 Telp. (+62 27 4584222) Fax. (+62 27 4584200) Email ecommerce@', 'Yogyakarta', '767200', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1033, 'JW Marriott Hotel Jakarta', NULL, NULL, 'Jl. DR Ide Anak Agung Gde Agung Kav E.1.2 No 1&2,Kawasan Mega Kuningan Jakarta 12950 Telp. 62-21-579', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1034, 'Kagum Group Hotel Bandung', NULL, NULL, 'Kagum Group Hotel Bandung', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1035, 'Kantor Corrosion Care Indonesia', NULL, NULL, 'Kantor Corrosion Care Indonesia', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1036, 'Kantor ISEI Pusat', NULL, NULL, 'Kantor ISEI Pusat', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1037, 'Kantor Microsoft Jakarta', NULL, NULL, 'Kantor Microsoft Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1038, 'Kantor MOR V Surabaya', NULL, NULL, 'Kantor MOR V Surabaya', 'Surabaya', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1039, 'Kantor PGN Area Batam', NULL, NULL, 'Kantor PGN Area Batam', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1040, 'Kantor PGN Area Bogor', NULL, NULL, 'Kantor PGN Area Bogor', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1041, 'Kantor PGN Area Surabaya', NULL, NULL, 'Kantor PGN Area Surabaya', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1042, 'Kantor PGN Area Tangerang', NULL, NULL, 'Kantor PGN Area Tangerang Telepon (021) 5384414', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1043, 'Kantor PGN Ketapang', NULL, NULL, 'Kantor PGN Ketapang', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1044, 'Kantor PGN Manhattan', NULL, NULL, 'Kantor PGN Manhattan', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1045, 'Kantor PGN Ngagel', NULL, NULL, 'Kantor PGN Area Surabaya Jl Raya Ngagel 129-131 Surabaya T = 0315028565 www.pgn.co.id', 'Surabaya', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1046, 'Kantor Pusat PT Jasa Marga (Persero), Tbk.', NULL, NULL, 'Kantor Pusat PT Jasa Marga (Persero), Tbk', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1047, 'Kantor Pusat PT Perusahaan Gas Negara (Persero) Tbk', NULL, NULL, 'PT Perusahaan Gas Negara (Persero) Tbk', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1048, 'Kartika Chandra Jakarta', NULL, NULL, 'Jalan Gatot Subroto, Jakarta Selatan Telp (021) 5251008', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1049, 'Kawasan Krakatu Industrial Estate (KIEC)', NULL, NULL, 'Kawasan Krakatu Industrial Estate (KIEC)', 'Serang', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1050, 'Kila Hotel Sengigi, Lombok', NULL, NULL, 'Kila Hotel Sengigi, Lombok', 'Lombok', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1051, 'Klender Training Center', NULL, NULL, 'Klender Training Center', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1052, 'Klender Training Center', NULL, NULL, 'Klender Training Center', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1053, 'Klender Training Center ', NULL, NULL, NULL, 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1054, 'Klinik SOS', NULL, NULL, 'Klinik SOS', 'SOS', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1055, 'Knowledge & Development Center', NULL, NULL, 'PT Pratama Indomitra Konsultan', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1056, 'Komplek Lipi Bandung', NULL, NULL, 'Komplek Lipi Bandung', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1057, 'Kristian IVs Gate 8, 0164', NULL, NULL, 'Kristian IVs Gate 8, 0164 - DetNorske Thatret (The Norwegian Theater)', 'Norwegia', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1058, 'Lafayette Boutique Hotel Yogyakarta', NULL, NULL, 'Lafayette Boutique Hotel Yogyakarta', 'Yogyakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1059, 'Le Dian Banten', NULL, NULL, 'Jl. Jenderal Sudirman No 88 Serang Banten 42118 Telp. (+62 25 4229888) Fax. (+62 254 229777) Email m', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1060, 'Le Dian Hotel & Cottage Serang', NULL, NULL, 'Le Dian Hotel & Cottage Serang', 'Serang', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1061, 'Le Meredien Jakarta', NULL, NULL, 'Jl. Jenderal Sudirman,Kav 18 - 20 , Sudirman, Jakarta 10220 Telp. (+62 21 2513131) Fax. (+62 21 571 ', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1062, 'Lembaga Bahasa LIA Grogol', NULL, NULL, 'Lembaga Bahasa LIA Grogol', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1063, 'Lembaga Pengembangan Fraud Auditing (LPFA)', NULL, NULL, 'Pusat Bisnis Thamrin City, Cosmo Terrace Office Suite Lt. 3A Unit 7. Jl. KH. Mas Mansyur - Jakarta 1', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1064, 'Lembaga Sertifikasi Profesi', NULL, NULL, 'Sertifikasi Pelaksana Tata Kelola', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1065, 'Lodaya Hotel, Bandung', NULL, NULL, 'Lodaya Hotel, Bandung', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1066, 'Lombok Raya Hotel', NULL, NULL, 'Jl. Panca Usaha No. 11 Mataram 83231 Lombok - Indonesia Tel. (62-370) 632305 Fax. (62-370) 636478 Em', 'Lombok', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1067, 'Lorin Solo Hotel', NULL, NULL, 'Lorin Solo Hotel', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1068, 'LPAI Indonesia Office', NULL, NULL, 'Kantor Lembaga Pengembangan Auditor Internal', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1069, 'Lumire Jakarta', NULL, NULL, 'Jl. Senen Raya No. 135. Jakarta 10410 phone: +6221 3442828 fax: +6221 3442929', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1070, 'Luxton Bandung', NULL, NULL, 'Jalan Ir. H. Juanda No.18 Bandung 40115 Phone: (022)4220700', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1071, 'Mall of Indonesia', NULL, NULL, 'Kantor IAI (Ikatan Akuntan Indonesia) kawasan MOI', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1072, 'Manhattan Jakarta', NULL, NULL, 'Hotel Manhattan Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1073, 'Marbella Hotel Banten', NULL, NULL, 'Jl. Raya Karang Bolong KM 135 Desa Bandulu, Anyer 42466 Telp. (+62 25 4602 345) Fax. (+62 25 4602 34', 'Banten', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1074, 'Marina Bay Sand Hotel', NULL, NULL, 'Marina Bay Sand Hotel', 'Singapore', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1075, 'MarkPlus Main Campus', NULL, NULL, 'MarkPlus Office Eighty Eight @Kasablanka, 8th Floor Jl. Casablanca Raya, Kav 88, Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1076, 'Marriot Nusa Dua Bali', NULL, NULL, 'Hotel Marriot Nusa Dua Bali Kawasan Pariwisata Lot SW1, Nusa Dua, Bali 80363 Telp. 1-855-297-1427', 'Bali', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1077, 'Mars 91', NULL, NULL, 'Jl. Raya Puncak KM. 75, Bogor, Jawa Barat', 'Bogor', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1078, 'Melbourne Business School Executive Education', NULL, NULL, 'Melbourne Business School Executive Education', 'Australia', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1079, 'Melia Purosani Yogyakarta', NULL, NULL, 'Jl. Mayor Suryotomo No.31, Kota Yogyakarta, DIY 55122 Telp. (+62 274 589521) Fax. (+62 27 4588071) E', 'Yogyakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1080, 'Menara 165', NULL, NULL, 'Jl. TB. Simatupang Kav.1 Cilandak, Jakarta Selatan Telp. (021) 78848165', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1081, 'Menara Peninsula Hotel Jakarta', NULL, NULL, 'Jalan Letjen S. Parman 78, Jakarta Barat, DKI Jakarta 11410 Telp. (+62 21 5350888) Fax. (+62 21 535 ', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1082, 'Mercure', NULL, NULL, 'Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1083, 'Mercure Bali', NULL, NULL, 'Hotel Mercure Bali', 'Bali', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1084, 'Mercure Sabang', 'Mia', '081373528007', 'Jl. H. Agus Salim no. 11, Gambir, Jakarta Pusat 10110', 'Jakarta', NULL, NULL, NULL, 'ruang meeting sempit, makanan bervariasi dan enak.');
INSERT INTO `hotel` VALUES (1085, 'Mercure Surabaya', NULL, NULL, 'Hotel Mercure Grand Mirama Surabaya', 'Surabaya', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1086, 'Mercure TB Simatupang', 'Anggi', '081282555027', 'Jl. R.A.Kartini No.18, RT.7/RW.7, Lb. Bulus, Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota J', 'Jakarta', '850000', 'include bfast/laundry', '400000', 'Tempat jauh dari stasiun berdasarkan masukan dari peserta, jalur macet, banquet aga lama meresponse, sound mic kurang baik, ruangan tidak sesuai tidak foto, coffee break lumayan berfariasi');
INSERT INTO `hotel` VALUES (1087, 'Midtown Hotel Surabaya', NULL, NULL, 'Jl Basuki Rachmat No 76 Surabaya T : 031-5315399 w : www.midtown-indonesia.com', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1088, 'Mikie Holiday Resort Berastagi', NULL, NULL, 'Jalan Raya Medan Berastagi Sumatra Utara Phone: +62-628-91650 / 91651 Fax: +62-628-91652', 'Medan', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1089, 'Morissey Hotel & Apartment Menteng - Jakarta', NULL, NULL, 'Morissey Hotel & Apartment Menteng - Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1090, 'Morrissey Hotel', 'Okta', '08551301999', 'Jl. KH. Wahid Hasyim no. 70, Kb. Sirih Menteng, Jakarta 10340', 'Jakarta', '1093050', NULL, '475000', NULL);
INSERT INTO `hotel` VALUES (1091, 'Mulia Senayan', NULL, NULL, 'Hotel Mulia Senayan', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1092, 'NEO+ Green Savana Sentul City', 'Iresa', '087770300052', 'Hotel NEO+ Green Savana Sentul City', 'Bogor', '650000', 'Full board meeting', NULL, 'Fasilitas kamar kurang baik, pelayanan kamar kurang sigap, kamar tidak nyaman. Ruang meeting jelek, dindingnya mengelupas. Bangunan lama.');
INSERT INTO `hotel` VALUES (1093, 'New York', NULL, NULL, 'New York', 'Amerika Serikat', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1094, 'Nirwana Resort Hotel', NULL, NULL, 'Nirwana Resort Hotel', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1095, 'Novotel Bali Benoa', NULL, NULL, 'Jl. Pratama, Tanjung Benoa, Nusa Dua, Bali 80361 Telp. (+62 361 772239) Fax. (+62 361 772237) Email ', 'Bali', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1096, 'Novotel Bandung', NULL, NULL, 'Jalan Cihampelas No 23-25, Bandung Phone:(022) 4211001', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1097, 'Novotel Bogor', NULL, NULL, 'Hotel Novotel Bogor', 'Bogor', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1098, 'Novotel Gajah Mada Jakarta', NULL, '(021) 29367777', 'Jl. Gajah Mada No.188, Glodok, Jakarta, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11120', 'Jakarta', '643720', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1099, 'novotel Lampung', NULL, '(0627) 21477999', 'Jl. Gatot Subroto No.136, Sukaraja, Bumi Waras, Kota Bandar Lampung, Lampung 35226', 'Lampung', '923078', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1100, 'Novotel Palembang', NULL, '(0627) 11369777', 'Jl. R. Sukamto No.8A, 8 Ilir, Kec. Ilir Tim. II, Kota Palembang, Sumatera Selatan 30127', 'Palembang', '895400', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1101, 'Nusa Dua', NULL, NULL, 'Nusa Dua', 'Bali', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1102, 'Oasis Amir Jakarta', NULL, '(021) 3863060', ' Jl. Senen Raya Blok A No.135-137, RW.2, Senen, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukot', 'Jakarta', '636614', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1103, 'Oracle South Korea', NULL, NULL, 'Oracle South Korea', 'Korea', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1104, 'Oria Menteng', NULL, '(021) 3101088', 'Jl. KH. Wahid Hasyim No.85, RW.4, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukot', 'Jakarta', '1021530', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1105, 'Ortax Training Centre', NULL, NULL, 'Ortax Training Centre', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1106, 'Padjadjaran Suites Hotel & Conference', NULL, '(0251) 7569000', 'erumahan Bogor Nirwana Residence Jl. Bogor Inner Ringroad Lot XIX C-2 No 17, RT.01/RW.05, Mulyaharja', 'Bogor', '862210', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1107, 'Padjajaran Suites Bogor', 'Qorry', '085624881234/ 087770065740', 'Jl. Raya Pajajaran no. 17, Bogor 16153', 'Bogor', NULL, NULL, NULL, 'ruang meeting tidak kedap suara, terganggu dengan suara orang di ruangan sebelah. Makanannya rasanya tidak enak. Snack tidak variatif. Kamar bersih, pelayanan baik dan sigap');
INSERT INTO `hotel` VALUES (1108, 'Paragon Solo', NULL, '(0271) 7655888', 'Jl. Dr. Sutomo, Mangkubumen, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57125', 'Solo', '832501', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1109, 'Park Bandung', NULL, '(022) 87772000', 'Jl. Penghulu Haji Hasan Mustofa No. 47/57, Jawa Bar. 40124 (022) 87772000', 'Bandung', '403750', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1110, 'Park Hotel Jakarta', NULL, '(021) 29982000', 'Jl. DI. Panjaitan No.Kav 5, RT.7/RW.11, Cawang, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khu', 'Jakarta', '680000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1111, 'Park Lane Hotel Jakarta', NULL, '(021) 8282000', 'Jalan Casablanca Kav. 18 Jakarta 12870 tel: (62-21) 828 2000 fax: (62-21) 828 2222 email: info@parkl', 'Jakarta', '1197500', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1112, 'Patra Jasa Bali', NULL, '(0361) 9351161', 'Jl.Ir. H. Juanda South Kuta Beach Kuta, Tuban, Kuta, Badung Regency, Bali 80361', 'Bali', '1170000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1113, 'Permata Krakatau Hotel', NULL, '(0254) 396807', 'Jl.KH Yassin Beji No.4 Kota Cilegon 42435 Banten - Indonesia Telp: (+62 254) 396 807, 396 808', 'Banten', '897132', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1114, 'PGN Medan (Glugur)', NULL, NULL, 'PGN Medan (Glugur)', 'Medan', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1115, 'PHITAGORAS SERPONG', NULL, NULL, 'Phitagoras Serpong', 'Tangerang', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1116, 'PO Hotel Semarang', 'Christi', '081542500006', 'Jl. Pemuda No.118, Sekayu, Semarang Tengah, Kota Semarang, Jawa Tengah 50132', 'Semarang', '950000', NULL, '550000', 'Menu makanan dan coffee break baik, meeting room baik, pelayanan baik, parkiran tidak bebas karna menyatu dengan mall.');
INSERT INTO `hotel` VALUES (1117, 'Planet Holliday Batam', NULL, NULL, 'Batam', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1118, 'PPA PEUI SALEMBA', NULL, NULL, 'PPA PEUI SALEMBA', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1119, 'PPM Management', NULL, NULL, 'PPM Management', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1120, 'PPNS (Politeknik Perkapalan Negeri Surabaya)', NULL, NULL, 'Lembaga Pendidikan Jl Teknik Kimia, ITS, Sukolilo, Surabaya telp. 031-5912403 e = p3mpoltekkapal@ppn', 'Surabaya', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1121, 'Prasetiya Mulya Executive Learning Institute', NULL, NULL, 'Prasetiya Mulya Cilandak Campus,', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1122, 'PT Benefita Indonesia (Gedung)', NULL, NULL, 'Menara Hijau Lantai Dasar Jl MT Haryono Kav 33, Jakarta, 12770 e = info@benefita.com w = www.benefit', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1123, 'PT BOMA Indonesia', NULL, NULL, 'PT BOMA Indonesia', 'Indonesia', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1124, 'PT Chalista Mandiri Energi', NULL, NULL, 'PT Chalista Mandiri Energi', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1125, 'PT Cybertend Intrabuana', NULL, NULL, 'Jl. Ampera Raya No. 50A, RT 7/RW 2, Ragunan Ps Minggu Jakarta Selatan', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1126, 'PT Dua Utama Jaya', NULL, NULL, 'Jl. Yos Sudarso Complex Green Town Warehouse No. 1 Bengkong Batam', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1127, 'PT Neville Clarke Training Centre Jakarta', NULL, NULL, 'Training Center', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1128, 'PT Pentamitra', NULL, NULL, 'PT Pentamitra', 'Pentamitra', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1129, 'PT PGN (Persero) Tbk', NULL, NULL, 'Meeting Room lantai 29', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1130, 'PT ROCA Industries Indonesia', NULL, NULL, 'PT ROCA Industries Indonesia', 'Indonesia', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1131, 'PT SILICA', NULL, NULL, 'PT SILICA', 'SILICA', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1132, 'PT Surabaya Multi Energindo', NULL, NULL, 'Taman Pondok Indah Blok AX 10 Surabaya', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1133, 'PT. BKI-SBU Marine, Sunter Jakarta Utara', NULL, NULL, 'PT. BKI-SBU Marine, Sunter Jakarta Utara', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1134, 'PT. SGS Indonesia - Training Academy', NULL, NULL, 'Training Academy', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1135, 'Pullman Hotel, Jakarta', NULL, NULL, 'Pullman Hotel, Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1136, 'Pullman Thamrin', NULL, NULL, 'Hotel Pullman Thamrin', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1137, 'Puri Denpasar-Jakarta', NULL, NULL, 'Ruang Ratna 5 Lt. 5 Jl. Denpasar Selatan No. 1 Kuningan Timur - Setiabudi Jakarta Selatan', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1138, 'Pusat Hiperkes DKI Jakarta / Pusat K3 Kemenakertrans', NULL, NULL, 'Lokasi pelatihan sertifikasi Kemenakertrans', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1139, 'Pusat Pendidikan Ajudan Jenderal, Lembang, Bandung', NULL, NULL, 'Pusat Pendidikan Ajudan Jenderal, Lembang, Bandung', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1140, 'Pusat Pendidikan Ajudan Jendral Bandung', NULL, NULL, 'Jl. Maribaya No. 21 Kec. Lembang Kab. Bandung Barat Telp. (+62 22786197)', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1141, 'Pusdiklat MIgas Cepu', NULL, NULL, 'Pusdiklat MIgas Cepu', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1142, 'Quest Semarang', NULL, NULL, 'Hotel Quest Semarang', 'Semarang', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1143, 'R. Auditorium Lantai 2 Graha PGAS ', NULL, NULL, 'Jl. KH. Zainul Arifin No.20 Jakarta 11140', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1144, 'RACV Royal Pinest Resort', NULL, NULL, 'RACV Royal Pinest Resort', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1145, 'Raffles Hotel Jakarta', NULL, NULL, 'JL. HR. Rasuna Said Kuningan Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1146, 'Ramada Bintang Bali', NULL, NULL, 'Hotel Ramada Bintang Bali', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1147, 'Ratu Bidakara', NULL, NULL, 'Jalan Kh. Abdul Hadi No.66, Serang, Banten 42117 telp. (+62 82 54218 800) fax. (+62 25 4218 500) ema', 'Serang', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1148, 'Regata Bandung', NULL, NULL, 'Hotel Regata Bandung', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1149, 'Ritz Carlton', NULL, NULL, 'Mega Kuningan', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1150, 'Ritz Carlton Pacific Place', NULL, NULL, 'Hotel Ritz Carlton Pacific Place', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1151, 'Royal Ambarrukmo Hotel', NULL, NULL, 'Hotel bintang 5. Jl. Laksda Adisucipto No.81, Yogyakarta, Daerah Istimewa Yogyakarta 55281, Indonesi', 'Yogyakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1152, 'Royal Ambarukmo Yogyakarta', NULL, NULL, 'Jl. Laksda Adisucipto No.81, Yogyakarta, Daerah Istimewa Yogyakarta 55281 (0274) 488488', 'Yogyakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1153, 'Royal Hotel Bogor', NULL, NULL, 'Jl. Ir. Haji Djuanda No.16, Paledang, Bogor Tengah, Kota Bogor, Jawa Barat 16122', 'Bogor', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1154, 'Ruang Kelas Citra Web Training', NULL, NULL, 'Ruang Kelas', 'Training', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1155, 'Ruang Rapat 26F', NULL, NULL, 'Ruang Rapat 26F', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1156, 'Ruko ITC Depok', NULL, NULL, 'Ruko ITC Depok', 'Depok', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1157, 'Salak Bogor', NULL, NULL, 'Hotel Salak Bogor', 'Bogor', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1158, 'Samson Tiara Training Center', NULL, NULL, 'Krakatau Industrial Estate Cilegon', 'Serang', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1159, 'San Diego Convention Center', NULL, NULL, 'San Diego Convention Center', 'Amerika Serikat', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1160, 'Sand Expo & Convention Center', NULL, NULL, 'Sand Expo & Convention Center', 'Center', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1161, 'Santika Bogor ', 'Zea', '085692190215', 'Botani Square Bogor, Jl. Raya Pajajran, Tegallega, Bogor 16127', 'Bogor', '795000', 'include bfast/laundry', '380000', 'Menu makanan dan menu coffee break kurang enak, ruang meeting kecil dan sempit, jauh dari mushola, wifi kadang bermasalah, banquet tidak stand by.');
INSERT INTO `hotel` VALUES (1162, 'Santika Premiere Hayam Wuruk Jakarta', NULL, '(021) 2600818', 'Santika Premiere Hayam Wuruk Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1163, 'Sasana Kijang', NULL, NULL, 'Sasana Kijang', 'Kijang', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1164, 'Shangri-la Hotel Jakarta', NULL, NULL, 'Shangri-la Hotel Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1165, 'Shangri-La Hotel Singapore', NULL, NULL, 'Shangri-La Hotel Singapore', 'Singapore', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1166, 'Sheraton Hotel', NULL, NULL, 'Jalan Sultan Ismail, Kuala Lumpur Malaysia 50250, Phone: +603 2717 9900', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1167, 'Simpang Lima Residence', NULL, NULL, 'Simpang Lima Residence', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1168, 'Singapore', NULL, NULL, 'Singapore', 'Singapore', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1169, 'Site Visit Surabaya', NULL, NULL, 'Site Visit Surabaya', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1170, 'Smartdata Solusi Utama', NULL, NULL, 'Jl. Melati No. 10, RT/RW 6/7 Ragunan Pasar Minggu Jakarta Selatan', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1171, 'Somerset Grand Citra', NULL, NULL, 'Jl prof Dr Satrio Kav1 jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1172, 'Sorbonne', NULL, NULL, 'Sorbonne', 'Sorbonne', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1173, 'SPBG Serang', NULL, NULL, 'Stasiun Pengisian Bahan Bakar Gas Serang', 'Serang', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1174, 'STIE Perbanas, Surabaya', NULL, NULL, 'STIE Perbanas, Surabaya', 'Surabaya', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1175, 'Suntec Singapore Convention & Exhibition Centre', NULL, NULL, '1 Raffles Boulevard, Suntec City, Singapore 039593 Phone:+65 6337 2888', 'Singapore', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1176, 'Surabaya', NULL, NULL, 'Surabaya', 'Surabaya', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1177, 'Swiss Bellhotel Batam', NULL, '(0778) 7415888', 'Jl.Duyung, Sei Jodoh, Batu Ampar, Batam 29432 Telp. (+62 77 87415888) fax. (+62 77 87415889) Email s', 'Batam', '666650', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1178, 'Swiss Bell-in Hotel Surabaya', NULL, '(031) 99001999', 'Jl. Tunjungan No.101, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271', 'Surabaya', '653118', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1179, 'Swiss-Belhotel Pondok Indah', 'Putri', '081319128530', 'Jl. Metro Pondok Indah Sector 2 Blok SA, Jakarta Selatan, Indonesia', 'Jakarta', '825000', NULL, '375000', NULL);
INSERT INTO `hotel` VALUES (1180, 'Swiss-Belresidences Kalibata Jakarta', 'Dara', '085772191237', 'Jl. Kalibata Raya No. 22, Jakarta, DKI Jakarta', 'Jakarta', '750000', NULL, '400000', NULL);
INSERT INTO `hotel` VALUES (1181, 'Telkom Corporate University Center', NULL, NULL, 'Telkom Corporate University Center', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1182, 'Tempo Pavilion 1', NULL, NULL, 'Lantai 8', 'Pavilion 1', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1183, 'Thailand', NULL, NULL, 'Thailand', 'Thailand', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1184, 'Thames Training Center', NULL, NULL, 'Kantor Thames Training Center', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1185, 'The 101 Bogor Suryakencana', 'Dimas', '081291029006', 'Suryakencana Street No.179-181, RT.2/RW.1, Babakan Pasar, Central Bogor, Bogor City, West Java 16123', 'Bogor', '750000', 'Include breakfast', '375000', 'pelayanan sangat sigap dan baik, makanan bervariasi dan enak, ruang meeting memadai sesuai dengan permintaan, fasilitas cukup, kamar bersih dan nyaman');
INSERT INTO `hotel` VALUES (1186, 'The 101 Tugu Malioboro', NULL, NULL, 'Jl Margoutomo 103 ( Mangkubumi) Yogyakarta Phone : 0274 - 2920101/ 7452698. Fax : 0274 - 2921101 www', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1187, 'The Alana Hotel & Convention Center Suntul City', 'Fariz', '081224567792', 'Jl. Ir. Haji Djuanda No.76, Sentul, Babakan Madang, Kota Bogor, Jawa Barat 16810', 'Bogor', '1250000', 'Fullboard', NULL, 'Makanan baik, coffe break baik, ruangan meeting semua baik, banquet kurang responsif.');
INSERT INTO `hotel` VALUES (1188, 'The Anvaya Beach Resort Hotel', NULL, '(0361) 2090477', 'Jl. Kartika Plaza, Tuban, Kuta, Kabupaten Badung, Bali 80361', 'Hotel', '1688500', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1189, 'THE B&B Hotel Kelapa Gading', NULL, '(021) 45848867', 'Jl. Boulevard Bukit Gading Raya No.15, RW.3, Klp. Gading Bar., Kec. Klp. Gading, Kota Jkt Utara, Dae', 'Jakarta', '419000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1190, 'The Banten Hotels', NULL, NULL, 'Jl.Raya Sirih KM.15 Anyer Serang, Banten 42466 Telp. (+62 25 4600980) Fax. (+62 25 4600982) Email ma', 'Tangerang', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1191, 'The Green Forest Resort Bandung', NULL, '(022) 2787939', 'Jl. Sersan Bajuri no. 102, Cihideung, Bandung, Jawa Barat 40154', 'Bandung', '2577108', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1192, 'The Hill & Hotel Sibolangit Medan', NULL, '(061) 4556108', 'Jl. Let.Jend Djamin Ginting KM.45,3 Desa Sukamakmur Sibolangit, Deli Serdang Sumatra Utara Telp: +62', 'Sumatera Utara', '2000000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1193, 'The Jayakarta Hotel Bandung', NULL, '(022) 2505888', 'Jl. Ir. H. Juanda No.381A, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135', 'Bandung', '902000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1194, 'The Luxton Hotel, Bandung', NULL, '(022) 4220700', 'Jl. Ir. H. Juanda No.18, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115', 'Bandung', '856471', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1195, 'The Manhattan Square', NULL, NULL, 'The Manhattan Squre, Jl. TB Simatupang, RT.3/RW.3, East Cilandak, Pasar Minggu, South Jakarta City, ', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1196, 'The Papandayan Hotel Bandung', NULL, '(022) 7310799', 'Jalan Jenderat Gatot Subroto No. 83, Bandung, Jawa Barat 40262, Indonesia Phone:+62 22 7310799', 'Bandung', '1116304', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1197, 'The Pheonix Hotel Yogyakarta', NULL, '(0622) 74566617', 'The Pheonix Hotel Yogyakarta', 'Yogyakarta', '855400', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1198, 'The Radiant Hotel', NULL, '(0232) 8895491', 'Jalan Raya Cirebon - Kuningan KM. 12, Kondangsari, Beber, Kondangsari, Kec. Beber, Cirebon, Jawa Bar', 'Jakarta', '1100000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1199, 'The Ritz Carlton - Pacific Place Jakarta', NULL, '(021) 25501888', 'Scbd, Sudirman Central Business District, Jl. Jend. sudirman kav 52-53, Jakarta, Daerah Khusus Ibuko', 'Jakarta', '4295500', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1200, 'The Ritz Carlton Mega Kuningan Jakarta', NULL, '(021) 25518888', 'Jl. DR. Ide Anak Agung Gde Agung Jl. Mega Kuningan Barat No.1, Kuningan, Kuningan Tim., Setia Budi, ', 'Jakarta', '1905750', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1201, 'The Stones Legian, Bali', NULL, '(0361) 3005888', 'Jl. Raya Pantai Kuta, Banjar Legian Kelod, Legian, Bali, Indonesia Phone: +62-361-3005888 Fax: +62-3', 'Bali', '1875494', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1202, 'The Trans Resort Hotel', NULL, '(022) 87348888', 'Jl. Gatot Subroto No.289, Cibangkong, Kec. Batununggal, Kota Bandung, Jawa Barat 40273', 'Bandung', '2395120', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1203, 'The Westin', NULL, '(021) 27887788', 'Jl. H. R. Rasuna Said No.Kav. C-22 A, RT.2/RW.5, Karet Kuningan, Kecamatan Setiabudi, Kota Jakarta S', 'Jakarta', '1984400', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1204, 'The Westin Resort Nusa Dua, Bali', NULL, '(0361) 771906', 'Kawasan Pariwisata Nusa Dua BTDC Lot N-3 Nusa Dua, Bali 80363 Telp. 0361-771906', 'Bali', '2268750', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1205, 'Tiara Training Center', NULL, NULL, 'Jl. Penjernihan II No. 5A, Bendungan hilir, Jakarta Pusat 10210. telp. 021-5704200', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1206, 'Training Room PT Trimaxindo Mangga Dua Jakarta', NULL, NULL, 'Training Room PT Trimaxindo Mangga Dua Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1207, 'Trakindo Training Center Cileungsi', NULL, NULL, 'Jl. Raya Narogong KM 19, Cileungsi, Bogor', 'Bogor', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1208, 'UI Depok', NULL, NULL, 'UI Depok', 'Depok', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1209, 'UNI Strategic Pte Ltd', NULL, NULL, '20 Science Park Road, #01-26/30, TeleTech Park, Singapore Science Park II, SIngapore 117674', 'Singapore', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1210, 'Universitas Mataram', NULL, NULL, 'Universitas Mataram', 'Mataram', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1211, 'Universitas Muhammadiyah Jakarta', NULL, NULL, 'Universitas Muhammadiyah Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1212, 'Universitas Padjadjaran Bandung', NULL, NULL, 'Universitas Padjadjaran Bandung', 'Bandung', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1213, 'Universitas Taruma Negara (UNTAR)', NULL, NULL, 'Jl. S.Parman no.1 Jakarta Barat 11440 Telp. 021- 5671747 (hunting) Fax. 021- 5604478', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1214, 'Wall Street (Mal Kelapa Gading)', NULL, NULL, 'Wall Street (Mal Kelapa Gading 3)', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1215, 'Wisma Bandung ', 'Pak Aceng ', '081321731214', 'Jalan Serang No.1 – 10 Bandung', 'Bandung', '100000', NULL, NULL, 'Tempat kurang mendukung keperluan kerja seperti printer, tempat foto copy   ');
INSERT INTO `hotel` VALUES (1216, 'Wisma Diklat PGN Megamendung', NULL, NULL, 'Jalan Puncak Raya , Bogor , Jawa Barat', 'Bogor', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1217, 'Wisma PGN Mega Mendung', 'Pak Asep ', '08568112957', 'Jl. Cikeulun Kp. Gunung Dua RT 01/03 Desa megamendung Kec. Megamendung Kab. Bogor 16770', 'Bogor', '250000', 'include bfast/laundry', '1.000.000', 'Kamar kecil, ac beberapa ga nyala, ga ada cermin, ga ada tv, jauh dari pusat kota, signal wifi meeting room buruk.');
INSERT INTO `hotel` VALUES (1218, 'Yello Hotel', 'Ferbriastika', '081905654810', 'Jl. Hayam Wuruk No.6, RT.6/RW.2, Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10120', 'Jakarta', '685600', NULL, '300000', 'Menu Coffee break tidak beraneka ragam ');
INSERT INTO `hotel` VALUES (1219, 'Yello Hotel Harmoni', NULL, NULL, 'Yello Hotel Harmoni, Jl. Hayam Wuruk No. 6, Jakarta Pusat 10120', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1220, 'Yogyakarta', NULL, NULL, 'Yogyakarta', 'Yogyakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1221, 'YPIA Jakarta', NULL, NULL, 'YPIA Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1222, 'YPIA Jakarta _', NULL, NULL, 'YPIA Jakarta', 'Jakarta', NULL, NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1223, 'Grand Savero Hotel', 'Adisty', '081932933300', 'Jl.Padjajaran No.27, Bogor, Jawa Barat, Indonesia', 'Bogor', '800000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1224, 'Amaroossa Royal Bogor Hotel', 'Riska', '081932948002', 'Jl. Otto Iskandardinata No.84, Baranangsiang, Bogor Timur, RT.04/RW.02, Baranangsiang, Kec. Bogor Ti', 'Bogor', '700000', NULL, NULL, NULL);
INSERT INTO `hotel` VALUES (1225, 'Aston Priority Simatupang Hotel and Conference Center', 'Etty', '085717023369', 'Jl. TB. Simatupang Kav 9, Jakarta Selatan', 'Jakarta', '900000', NULL, '400000', NULL);
INSERT INTO `hotel` VALUES (1226, 'Swiss Bellresidence Kalibata Jakarta', 'Dara', '085772191237', 'Jl. Kalibata Raya No. 22, Jakarta, DKI Jakarta', 'Jakarta', '750000', NULL, '400000', NULL);
INSERT INTO `hotel` VALUES (1227, 'Hotel Morrisey Jakarta', 'Arthur', '082124500590', 'Jalan KH Wahid Hasyim No. 70, Menteng, Menteng, Jaksa Street, Jakarta, Indonesia, 10340', 'Jakarta', '850000', NULL, '410000', NULL);
INSERT INTO `hotel` VALUES (1228, 'Harris Vertu Hotel Harmoni', 'Agnes', '085883119550', 'Jl. Hayam Wuruk No.6, Harmoni, Jakarta, Indonesia', 'Jakarta', '1142300', NULL, '430000', NULL);
INSERT INTO `hotel` VALUES (1229, 'Harris Vertu Hotel Harmoni', 'Agnes', '085883119550', 'Jl. Hayam Wuruk No.6, Harmoni, Jakarta, Indonesia', 'Jakarta', '685300', NULL, '430000', NULL);
INSERT INTO `hotel` VALUES (1230, 'Swiss-Belhotel Pondok Indah', 'Putri', '081319128530', 'Jl. Metro Pondok Indah Sector 2 Blok SA, Jakarta Selatan, Indonesia', 'Jakarta', '825000', NULL, '375000', NULL);

-- ----------------------------
-- Table structure for inhouse_training
-- ----------------------------
DROP TABLE IF EXISTS `inhouse_training`;
CREATE TABLE `inhouse_training`  (
  `id` int(11) NOT NULL,
  `pengirim_po` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kompetensi_bidang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_kompetensi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `judul_pelatihan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_mulai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_selesai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tempat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `vendor_penyelenggara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `metode_penunujukan_vendor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah_peserta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_peserta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nipg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `satker` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `direktorat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mata_uang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `rencana_biaya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cost_structure` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `catatan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `form_usulan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `brosur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for kompetensi_bidang
-- ----------------------------
DROP TABLE IF EXISTS `kompetensi_bidang`;
CREATE TABLE `kompetensi_bidang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bidang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 174 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kompetensi_bidang
-- ----------------------------
INSERT INTO `kompetensi_bidang` VALUES (9, 'Hubungan Masyarakat dan Media');
INSERT INTO `kompetensi_bidang` VALUES (10, 'Komunikasi Internal');
INSERT INTO `kompetensi_bidang` VALUES (11, 'Bina Lingkungan');
INSERT INTO `kompetensi_bidang` VALUES (12, 'Hubungan Institusi');
INSERT INTO `kompetensi_bidang` VALUES (13, 'Akuntansi');
INSERT INTO `kompetensi_bidang` VALUES (14, 'Sistem dan Prosedur Akuntansi');
INSERT INTO `kompetensi_bidang` VALUES (15, 'Anggaran');
INSERT INTO `kompetensi_bidang` VALUES (16, 'Ekonomi Makro dan Mikro');
INSERT INTO `kompetensi_bidang` VALUES (17, 'Operasional Dana');
INSERT INTO `kompetensi_bidang` VALUES (18, 'Pengelolaan Dana');
INSERT INTO `kompetensi_bidang` VALUES (19, 'Pengendalian Piutang dan Utang');
INSERT INTO `kompetensi_bidang` VALUES (20, 'Portofolio Investasi');
INSERT INTO `kompetensi_bidang` VALUES (21, 'Perpajakan');
INSERT INTO `kompetensi_bidang` VALUES (22, 'Manajemen Aset');
INSERT INTO `kompetensi_bidang` VALUES (23, 'Pemeliharaan Fasilitas Perusahaan');
INSERT INTO `kompetensi_bidang` VALUES (24, 'Manajemen Informasi');
INSERT INTO `kompetensi_bidang` VALUES (25, 'Pengelolaan Administrasi');
INSERT INTO `kompetensi_bidang` VALUES (26, 'Pengelolaan Layanan');
INSERT INTO `kompetensi_bidang` VALUES (27, 'Pengelolaan Pelaporan Manajemen');
INSERT INTO `kompetensi_bidang` VALUES (28, 'Protokoler');
INSERT INTO `kompetensi_bidang` VALUES (29, 'Pengelolaan Perpustakaan');
INSERT INTO `kompetensi_bidang` VALUES (30, 'Audit Internal');
INSERT INTO `kompetensi_bidang` VALUES (31, 'Tata Kelola Perusahaan yang Baik');
INSERT INTO `kompetensi_bidang` VALUES (32, 'Manajemen Risiko');
INSERT INTO `kompetensi_bidang` VALUES (33, 'Manajemen Perubahan');
INSERT INTO `kompetensi_bidang` VALUES (34, 'Manajemen Sistem');
INSERT INTO `kompetensi_bidang` VALUES (35, 'Petroleum Geology');
INSERT INTO `kompetensi_bidang` VALUES (36, 'Upstream Economics');
INSERT INTO `kompetensi_bidang` VALUES (37, 'Hubungan Industrial');
INSERT INTO `kompetensi_bidang` VALUES (38, 'Organisasi dan Tata Laksana');
INSERT INTO `kompetensi_bidang` VALUES (39, 'Manajemen Kompetensi');
INSERT INTO `kompetensi_bidang` VALUES (40, 'Perencanaan SDM');
INSERT INTO `kompetensi_bidang` VALUES (41, 'Rekrutmen dan Seleksi');
INSERT INTO `kompetensi_bidang` VALUES (42, 'Knowledge Management');
INSERT INTO `kompetensi_bidang` VALUES (43, 'Talent Management');
INSERT INTO `kompetensi_bidang` VALUES (44, 'Manajemen Asesmen');
INSERT INTO `kompetensi_bidang` VALUES (45, 'Pengelolaan Pembelajaran dan Pengembangan');
INSERT INTO `kompetensi_bidang` VALUES (46, 'Penyelenggaraan Pendidikan dan Pelatihan');
INSERT INTO `kompetensi_bidang` VALUES (47, 'Sistem Remunerasi');
INSERT INTO `kompetensi_bidang` VALUES (48, 'Administrasi Remunerasi');
INSERT INTO `kompetensi_bidang` VALUES (49, 'Pengelolaan Lingkungan');
INSERT INTO `kompetensi_bidang` VALUES (50, 'Behavioral Health and Safety');
INSERT INTO `kompetensi_bidang` VALUES (51, 'Keselamatan Proses');
INSERT INTO `kompetensi_bidang` VALUES (52, 'Pengamanan');
INSERT INTO `kompetensi_bidang` VALUES (53, 'Pembangunan Sistem Elektrikal');
INSERT INTO `kompetensi_bidang` VALUES (54, 'Pembangunan Sistem Infrastruktur Penyaluran Gas');
INSERT INTO `kompetensi_bidang` VALUES (55, 'Pembangunan Sistem Konstruksi Sipil');
INSERT INTO `kompetensi_bidang` VALUES (56, 'Pembangunan Sistem Mekanikal');
INSERT INTO `kompetensi_bidang` VALUES (57, 'Pembangunan Sistem Pengendalian Korosi');
INSERT INTO `kompetensi_bidang` VALUES (58, 'Pembangunan Sistem Proses Gas');
INSERT INTO `kompetensi_bidang` VALUES (59, 'Pembangunan Sistem SCADA, Metering, dan Instrumentasi');
INSERT INTO `kompetensi_bidang` VALUES (60, 'Pembangunan Sistem Telekomunikasi');
INSERT INTO `kompetensi_bidang` VALUES (61, 'Perancangan Sistem Elektrikal');
INSERT INTO `kompetensi_bidang` VALUES (62, 'Perancangan Sistem Infrastruktur Penyaluran Gas');
INSERT INTO `kompetensi_bidang` VALUES (63, 'Perancangan Sistem Konstruksi Sipil');
INSERT INTO `kompetensi_bidang` VALUES (64, 'Perancangan Sistem Mekanikal');
INSERT INTO `kompetensi_bidang` VALUES (65, 'Perancangan Sistem Pengendalian Korosi');
INSERT INTO `kompetensi_bidang` VALUES (66, 'Perancangan Sistem Proses Gas');
INSERT INTO `kompetensi_bidang` VALUES (67, 'Perancangan Sistem SCADA, Metering, dan Instrumentasi');
INSERT INTO `kompetensi_bidang` VALUES (68, 'Perancangan Sistem Telekomunikasi');
INSERT INTO `kompetensi_bidang` VALUES (69, 'Gas and Petrochemical Engineering');
INSERT INTO `kompetensi_bidang` VALUES (70, 'Cost Estimation');
INSERT INTO `kompetensi_bidang` VALUES (71, 'Manajemen Proyek');
INSERT INTO `kompetensi_bidang` VALUES (72, 'Techno Economy');
INSERT INTO `kompetensi_bidang` VALUES (73, 'Pengawasan Kualitas');
INSERT INTO `kompetensi_bidang` VALUES (74, 'Pendapat Hukum');
INSERT INTO `kompetensi_bidang` VALUES (75, 'Contract Management');
INSERT INTO `kompetensi_bidang` VALUES (76, 'Legalitas Perusahaan');
INSERT INTO `kompetensi_bidang` VALUES (77, 'Penyusunan Dokumen Hukum');
INSERT INTO `kompetensi_bidang` VALUES (78, 'Analisis Lingkungan Bisnis');
INSERT INTO `kompetensi_bidang` VALUES (79, 'Pengelolaan Strategi, Target, dan Positioning (S-T-P) Pemasaran');
INSERT INTO `kompetensi_bidang` VALUES (80, 'Penyusunan Formulasi Prediksi dan Target Penjualan');
INSERT INTO `kompetensi_bidang` VALUES (81, 'Pengembangan Produk');
INSERT INTO `kompetensi_bidang` VALUES (82, 'Komunikasi Pemasaran');
INSERT INTO `kompetensi_bidang` VALUES (83, 'Pengelolaan Produk');
INSERT INTO `kompetensi_bidang` VALUES (84, 'Analisis Tarif Gas');
INSERT INTO `kompetensi_bidang` VALUES (85, 'Peralatan Gas Pelanggan');
INSERT INTO `kompetensi_bidang` VALUES (86, 'Pendekatan kepada Calon Pelanggan Potensial');
INSERT INTO `kompetensi_bidang` VALUES (87, 'Melaksanakan Keterampilan Penjualan');
INSERT INTO `kompetensi_bidang` VALUES (88, 'Mewujudkan Kepuasan Pelanggan');
INSERT INTO `kompetensi_bidang` VALUES (89, 'Menangani Keluhan Pelanggan');
INSERT INTO `kompetensi_bidang` VALUES (90, 'Perencanaan Penjualan');
INSERT INTO `kompetensi_bidang` VALUES (91, 'Pengelolaan Program Loyalitas Pelanggan');
INSERT INTO `kompetensi_bidang` VALUES (92, 'Pengelolaan Lingkungan Layanan');
INSERT INTO `kompetensi_bidang` VALUES (93, 'Downstream Economics');
INSERT INTO `kompetensi_bidang` VALUES (94, 'Analisa Kinerja Sistem Alat Ukur');
INSERT INTO `kompetensi_bidang` VALUES (95, 'Manajemen Operasi dan Pemeliharaan Metering Regulating Station');
INSERT INTO `kompetensi_bidang` VALUES (96, 'Manajemen Data Alat Ukur');
INSERT INTO `kompetensi_bidang` VALUES (97, 'Manajemen Kapasitas Komoditas');
INSERT INTO `kompetensi_bidang` VALUES (98, 'Manajemen Aset Operasi');
INSERT INTO `kompetensi_bidang` VALUES (99, 'Midstream Economics');
INSERT INTO `kompetensi_bidang` VALUES (100, 'Manajemen Integritas Jaringan');
INSERT INTO `kompetensi_bidang` VALUES (101, 'Manajemen Integritas Fasilitas');
INSERT INTO `kompetensi_bidang` VALUES (102, 'Manajemen Operasi dan Pemeliharaan Fasilitas Jaringan');
INSERT INTO `kompetensi_bidang` VALUES (103, 'Manajemen Operasi dan Pemeliharaan Jaringan Pipa');
INSERT INTO `kompetensi_bidang` VALUES (104, 'Manajemen Operasi dan Pemeliharaan Gas Booster Station');
INSERT INTO `kompetensi_bidang` VALUES (105, 'Manajemen Sistem SCADA dan Telekomunikasi');
INSERT INTO `kompetensi_bidang` VALUES (106, 'Manajemen Sistem Informasi Geografis');
INSERT INTO `kompetensi_bidang` VALUES (107, 'Sistem Pengendalian Korosi');
INSERT INTO `kompetensi_bidang` VALUES (108, 'Manajemen Kapasitas Infrastruktur');
INSERT INTO `kompetensi_bidang` VALUES (109, 'Sistem Proteksi Petir');
INSERT INTO `kompetensi_bidang` VALUES (110, 'Kajian Pengembangan Usaha');
INSERT INTO `kompetensi_bidang` VALUES (111, 'Manajemen Portofolio');
INSERT INTO `kompetensi_bidang` VALUES (112, 'Budaya Perusahaan');
INSERT INTO `kompetensi_bidang` VALUES (113, 'Manajemen Kinerja');
INSERT INTO `kompetensi_bidang` VALUES (114, 'Strategi Bisnis');
INSERT INTO `kompetensi_bidang` VALUES (115, 'Gas Material');
INSERT INTO `kompetensi_bidang` VALUES (116, 'Logistik');
INSERT INTO `kompetensi_bidang` VALUES (117, 'Manajemen Rantai Pasok');
INSERT INTO `kompetensi_bidang` VALUES (118, 'Pengadaan Barang dan Jasa');
INSERT INTO `kompetensi_bidang` VALUES (119, 'Customer Service Orientation');
INSERT INTO `kompetensi_bidang` VALUES (120, 'Organizational Awareness');
INSERT INTO `kompetensi_bidang` VALUES (121, 'Presenting Ideas');
INSERT INTO `kompetensi_bidang` VALUES (122, 'Attention to Detail');
INSERT INTO `kompetensi_bidang` VALUES (123, 'Negotiation');
INSERT INTO `kompetensi_bidang` VALUES (124, 'Persuasiveness');
INSERT INTO `kompetensi_bidang` VALUES (125, 'ICT Strategic Planning');
INSERT INTO `kompetensi_bidang` VALUES (126, 'Database Design & Management');
INSERT INTO `kompetensi_bidang` VALUES (127, 'ICT Security, Governance & Compliance');
INSERT INTO `kompetensi_bidang` VALUES (128, 'Enterprise Architecture Design');
INSERT INTO `kompetensi_bidang` VALUES (129, 'Business & System Analysis');
INSERT INTO `kompetensi_bidang` VALUES (130, 'ICT Project Management');
INSERT INTO `kompetensi_bidang` VALUES (131, 'ICT Solutions Development & Implementation');
INSERT INTO `kompetensi_bidang` VALUES (132, 'Data Communication Infrastructure Design & Management');
INSERT INTO `kompetensi_bidang` VALUES (133, 'Data Center and Cloud Infrastructure Design & Management');
INSERT INTO `kompetensi_bidang` VALUES (134, 'ICT Support Facilities Technology');
INSERT INTO `kompetensi_bidang` VALUES (135, 'ICT Trends & Industry Knowledge');
INSERT INTO `kompetensi_bidang` VALUES (136, 'Manajemen Kapasitas');
INSERT INTO `kompetensi_bidang` VALUES (137, 'Manajemen Pemasaran');
INSERT INTO `kompetensi_bidang` VALUES (138, 'Marketing Intelligence');
INSERT INTO `kompetensi_bidang` VALUES (139, 'Pengelolaan Hubungan Pelanggan');
INSERT INTO `kompetensi_bidang` VALUES (140, 'Data and Information Management');
INSERT INTO `kompetensi_bidang` VALUES (141, 'Operasi dan Pemeliharaan Infrastruktur Gas Management System');
INSERT INTO `kompetensi_bidang` VALUES (142, 'Operasi dan Pemeliharaan Sistim Alat Ukur');
INSERT INTO `kompetensi_bidang` VALUES (143, 'ICT Quality Control and Assurance');
INSERT INTO `kompetensi_bidang` VALUES (144, 'ICT Trend');
INSERT INTO `kompetensi_bidang` VALUES (145, 'ICT Writing Skill');
INSERT INTO `kompetensi_bidang` VALUES (146, 'Industry Knowledge (Gas Utility Industry)');
INSERT INTO `kompetensi_bidang` VALUES (147, 'ISO Related ICT');
INSERT INTO `kompetensi_bidang` VALUES (148, 'Licensed and Contract Management');
INSERT INTO `kompetensi_bidang` VALUES (149, 'Network Design');
INSERT INTO `kompetensi_bidang` VALUES (150, 'Business Analyst');
INSERT INTO `kompetensi_bidang` VALUES (151, 'Connection and Access');
INSERT INTO `kompetensi_bidang` VALUES (152, 'Data Communication Infrastructure Architecture');
INSERT INTO `kompetensi_bidang` VALUES (153, 'Database/Information Design and Management');
INSERT INTO `kompetensi_bidang` VALUES (154, 'Disaster and Recovery System');
INSERT INTO `kompetensi_bidang` VALUES (155, 'Enterprise Modeling');
INSERT INTO `kompetensi_bidang` VALUES (156, 'Enterprise Solution Architecture');
INSERT INTO `kompetensi_bidang` VALUES (157, 'Enterprise Solution Modeling');
INSERT INTO `kompetensi_bidang` VALUES (158, 'ICT Audit');
INSERT INTO `kompetensi_bidang` VALUES (159, 'ICT Document Management');
INSERT INTO `kompetensi_bidang` VALUES (160, 'ICT Governance');
INSERT INTO `kompetensi_bidang` VALUES (161, 'Physical Virtual (Cloud) Infrastructure, Solution and Data');
INSERT INTO `kompetensi_bidang` VALUES (162, 'Security/Information and Solution Protection');
INSERT INTO `kompetensi_bidang` VALUES (163, 'System Analyst');
INSERT INTO `kompetensi_bidang` VALUES (164, 'System Integrator');
INSERT INTO `kompetensi_bidang` VALUES (165, 'Telecommunications (Data and Voice) Network');
INSERT INTO `kompetensi_bidang` VALUES (166, 'Keselamatan dan Kesehatan Kerja');
INSERT INTO `kompetensi_bidang` VALUES (167, 'Operasi dan Pemeliharaan SCADA dan Telekomunikasi');
INSERT INTO `kompetensi_bidang` VALUES (168, 'Integritas Jaringan');
INSERT INTO `kompetensi_bidang` VALUES (169, 'Integritas Fasilitas');
INSERT INTO `kompetensi_bidang` VALUES (170, 'Operasi dan Pemeliharaan Jaringan Pipa');
INSERT INTO `kompetensi_bidang` VALUES (171, 'Operasi dan Pemeliharaan Metering Regulating Station');
INSERT INTO `kompetensi_bidang` VALUES (172, 'Operasi dan Pemeliharaan Fasilitas Jaringan');
INSERT INTO `kompetensi_bidang` VALUES (173, 'Survey, Pemetaan, dan Sistem Informasi Geografi');

-- ----------------------------
-- Table structure for kota
-- ----------------------------
DROP TABLE IF EXISTS `kota`;
CREATE TABLE `kota`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for metode_penyelenggaraan
-- ----------------------------
DROP TABLE IF EXISTS `metode_penyelenggaraan`;
CREATE TABLE `metode_penyelenggaraan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `metode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of metode_penyelenggaraan
-- ----------------------------
INSERT INTO `metode_penyelenggaraan` VALUES (1, 'Swakelola');
INSERT INTO `metode_penyelenggaraan` VALUES (2, 'Perkasa');

-- ----------------------------
-- Table structure for p_vendor
-- ----------------------------
DROP TABLE IF EXISTS `p_vendor`;
CREATE TABLE `p_vendor`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `metode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of p_vendor
-- ----------------------------
INSERT INTO `p_vendor` VALUES (1, 'Beauty Contest', 'Pemilihan stelaah melalui proses pemaparan');
INSERT INTO `p_vendor` VALUES (4, 'Langsung', 'Dipilih secara langsung oleh PIC');

-- ----------------------------
-- Table structure for peserta_other
-- ----------------------------
DROP TABLE IF EXISTS `peserta_other`;
CREATE TABLE `peserta_other`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nipg` int(20) NULL DEFAULT NULL,
  `telephone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `satker` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `direktorat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cost_stucture` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for provinsi
-- ----------------------------
DROP TABLE IF EXISTS `provinsi`;
CREATE TABLE `provinsi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 95 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of provinsi
-- ----------------------------
INSERT INTO `provinsi` VALUES (11, 'Aceh');
INSERT INTO `provinsi` VALUES (12, 'Sumatera Utara');
INSERT INTO `provinsi` VALUES (13, 'Sumatera Barat');
INSERT INTO `provinsi` VALUES (14, 'Riau');
INSERT INTO `provinsi` VALUES (15, 'Jambi');
INSERT INTO `provinsi` VALUES (16, 'Sumatera Selatan');
INSERT INTO `provinsi` VALUES (17, 'Bengkulu');
INSERT INTO `provinsi` VALUES (18, 'Lampung');
INSERT INTO `provinsi` VALUES (19, 'Kepulauan Bangka Belitung');
INSERT INTO `provinsi` VALUES (21, 'Kepulauan Riau');
INSERT INTO `provinsi` VALUES (31, 'Dki Jakarta');
INSERT INTO `provinsi` VALUES (32, 'Jawa Barat');
INSERT INTO `provinsi` VALUES (33, 'Jawa Tengah');
INSERT INTO `provinsi` VALUES (34, 'Di Yogyakarta');
INSERT INTO `provinsi` VALUES (35, 'Jawa Timur');
INSERT INTO `provinsi` VALUES (36, 'Banten');
INSERT INTO `provinsi` VALUES (51, 'Bali');
INSERT INTO `provinsi` VALUES (52, 'Nusa Tenggara Barat');
INSERT INTO `provinsi` VALUES (53, 'Nusa Tenggara Timur');
INSERT INTO `provinsi` VALUES (61, 'Kalimantan Barat');
INSERT INTO `provinsi` VALUES (62, 'Kalimantan Tengah');
INSERT INTO `provinsi` VALUES (63, 'Kalimantan Selatan');
INSERT INTO `provinsi` VALUES (64, 'Kalimantan Timur');
INSERT INTO `provinsi` VALUES (65, 'Kalimantan Utara');
INSERT INTO `provinsi` VALUES (71, 'Sulawesi Utara');
INSERT INTO `provinsi` VALUES (72, 'Sulawesi Tengah');
INSERT INTO `provinsi` VALUES (73, 'Sulawesi Selatan');
INSERT INTO `provinsi` VALUES (74, 'Sulawesi Tenggara');
INSERT INTO `provinsi` VALUES (75, 'Gorontalo');
INSERT INTO `provinsi` VALUES (76, 'Sulawesi Barat');
INSERT INTO `provinsi` VALUES (81, 'Maluku');
INSERT INTO `provinsi` VALUES (82, 'Maluku Utara');
INSERT INTO `provinsi` VALUES (91, 'Papua Barat');
INSERT INTO `provinsi` VALUES (94, 'Papua');

-- ----------------------------
-- Table structure for public_training
-- ----------------------------
DROP TABLE IF EXISTS `public_training`;
CREATE TABLE `public_training`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim_ro` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_ro` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kategori_pelatihan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `metode_penyelenggaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kompetensi_bidang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_kompetensi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `judul_pelatihan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_mulai` date NULL DEFAULT NULL,
  `tanggal_selesai` date NULL DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tempat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `vendor_penyelenggara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah_peserta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `catatan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `form_usulan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `brosur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '0 = submit, 1= save draft',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of public_training
-- ----------------------------
INSERT INTO `public_training` VALUES (1, 'Detti', 'MGPT001', NULL, 'Perkasa', 'Payroll', 'Managerial', 'zdfsdfsdf', '0000-00-00', NULL, NULL, NULL, NULL, 'PT Arfan', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `role` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_login` datetime(0) NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `koneksi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `active` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'HCM', NULL, 'Admin PGN', 'Manual', 1);
INSERT INTO `users` VALUES (2, 'maker', '81dc9bdb52d04dc20036dbd8313ed055', 'maker', NULL, 'Maker PGN', 'Manual', 1);
INSERT INTO `users` VALUES (3, 'approver', 'c20ad4d76fe97759aa27a0c99bff6710', 'approver', NULL, 'Approver PGN', 'Manual', 1);
INSERT INTO `users` VALUES (4, 'bagus.fernata', NULL, 'admin', NULL, NULL, 'LDAP', 1);
INSERT INTO `users` VALUES (5, 'lamhotma.siboro', NULL, 'Maker', NULL, NULL, 'LDAP', 1);
INSERT INTO `users` VALUES (6, 'asep.herlambang', NULL, 'Maker', NULL, NULL, 'LDAP', 1);
INSERT INTO `users` VALUES (12, 'zulhan', '81dc9bdb52d04dc20036dbd8313ed055', 'Perkasa', NULL, 'Zulhan', 'Manual', 1);
INSERT INTO `users` VALUES (13, 'detti', '81dc9bdb52d04dc20036dbd8313ed055', 'HCM', NULL, 'Detti', 'Manual', 1);
INSERT INTO `users` VALUES (14, 'deded', NULL, 'Admin', NULL, NULL, 'Manual', 1);
INSERT INTO `users` VALUES (15, 'kakak', NULL, 'Admin', NULL, NULL, 'Manual', 1);
INSERT INTO `users` VALUES (17, 'kelas', NULL, 'Admin', NULL, NULL, 'Manual', 1);
INSERT INTO `users` VALUES (18, 'jajajjas', NULL, 'Admin', NULL, NULL, 'Manual', 1);
INSERT INTO `users` VALUES (19, 'badang', NULL, 'Admin', NULL, NULL, 'Manual', 1);
INSERT INTO `users` VALUES (20, 'tets1', NULL, 'Admin', NULL, NULL, 'Manual', 1);
INSERT INTO `users` VALUES (21, 'test2', NULL, 'Admin', NULL, NULL, 'Manual', 1);
INSERT INTO `users` VALUES (22, 'abdi', '1234', 'Maker', NULL, NULL, 'Manual', 1);
INSERT INTO `users` VALUES (23, 'adbi', '1234', 'Maker', NULL, NULL, 'Manual', 1);
INSERT INTO `users` VALUES (24, 'awe', 'e1ba155a9f2e8c3be94020eef32a0301', 'awe', NULL, NULL, 'HCM', 1);

-- ----------------------------
-- Table structure for vendors
-- ----------------------------
DROP TABLE IF EXISTS `vendors`;
CREATE TABLE `vendors`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pic` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `contact` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `category` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 898 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vendors
-- ----------------------------
INSERT INTO `vendors` VALUES (795, 'Asia Anti Fraud', NULL, 'marketing@asiaantifraud.org', '0851 009 623 55', NULL, 'Public Training');
INSERT INTO `vendors` VALUES (796, 'Badan Kejuruan Mesin PII', 'Fanny', ' info@pii.or.id', '081293937552', 'Jl. Percetakan Negara No.25, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (797, 'BMD Street ', 'Rian Taufik Permana', 'www.bmdstreet.com', '081382807230', 'BMD Building Centre, Jl. Puspiptek Raya No. 74B, Tangerang Selatan', 'Public Training');
INSERT INTO `vendors` VALUES (798, 'Cognitive Links', 'Khairol', 'info.cognitivelink.asia', '+601126022858', 'C-06-02 Centum @ Oasis Corporate Park, Ara Damansara, 47301 Petaling Jaya, Selangor, Malaysia', 'Public Training');
INSERT INTO `vendors` VALUES (799, 'DCO Learning', 'Salsabila', 'www.Dcolearning.com', '081931323309', 'Jl. Casablanca Raya Kav 88, Kota Kasablanka Tower A 38th Floor, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (800, 'Dmg Event Asia Pacifis Pte. Ltd', 'Gareth Fox ', 'garethfox@dmgevents.com', '+656 4221484 ', '19 Cecil Street, The Quadrant#03-01\nSingapore - 049704', 'Public Training');
INSERT INTO `vendors` VALUES (801, 'PT Esensi Inti Indonesia (Essence Consulting)', 'Faisal Maulana', 'jak@essenceglobal.com', '081586727350', 'Central Park Center, Podomoro City, Grand Shopping Arcade, Blok B/8 DH, Jl. S. Parman, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (802, 'EMERITUS Institute of Management', 'Online Course', 'jacqueline.knight@emeritus.org', NULL, '78 Shenton Way, #20-02 Singapore - 079120', NULL);
INSERT INTO `vendors` VALUES (803, 'FDB Events PTE. LTD', 'Willy FDB', 'willy.k@fdb.sg', '6,568,259,578', '190 Macpherson Road, #03-02\nWisma Gulab, Singapore-  348548', 'Public Training');
INSERT INTO `vendors` VALUES (804, 'Fideelitas Institute', 'Tika', 'executive.assistant@fidelitas-advisors.com', '087838194272', 'Office 8, 19 Floor Unit K SCBD Jl Jend. Sudirman Kav. 52-53 Lot 28, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (805, 'Fiqry Jaya Manunggal', 'Deden', 'fjm@centrin.net.id', '0818953006', 'Jl. Kalibata Tengah No.35c, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (806, 'Galeri Solusi Mandiri', 'Putri', 'galerisolusimandiri@gmail.com', '081380437616', 'Jl. Cabe IV, Pd. Cabe Ilir, Pamulang, Kota Tangerang Selatan, Banten 15418', 'Public Training');
INSERT INTO `vendors` VALUES (807, 'Himpunann Ahli Teknik Tanah Indonesia (HATTI)', 'Sugino', 'sekretariat@hatti.or.id\nwww.hatti.or.id', '08118001250', 'Basement Aldevco Octagon\nJl. Warung Jati Bara Raya No, 75, Jakarta - 12740 ', 'Public Training');
INSERT INTO `vendors` VALUES (808, 'HRD Spot', 'Dana ', 'hrdsport.com', '0812-5000-4070', 'Jl. Barata Tama III, No.462\nTangerang 15157', 'Public Training');
INSERT INTO `vendors` VALUES (809, 'Ikatan Akuntansi Indonesia', 'Nisa Ardianti', 'iai-info@iaiglobal.or.id', '085739542529', 'Jl. Sindanglaya No.1, Menteng, Jakarta', NULL);
INSERT INTO `vendors` VALUES (810, 'Intrinsics', 'Evi Sesunan', 'evi.sesunan@instrinsic.co.id', '0812958000', 'Gedung One Stop Sukses Auto Mall Lt. 2, JL. TB Simatupang, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (811, 'Institut Pertanian Bogor', 'Kamsari Saleh', 'kamsari@pksplipb.or.id', '081281681441', 'Kampus IPB Dramaga, Jl. Raya Dramaga, Bogor', NULL);
INSERT INTO `vendors` VALUES (812, 'Internasioanl Bar Association', NULL, NULL, '44. (0)20 78420090', '4th Floor, 10 St Bride \nStreetLondon EC4A 4AD, United Kingdom', 'Public Training');
INSERT INTO `vendors` VALUES (813, 'Jogja Media Training', 'Sigit', 'www.jogja-training.com', '081225346484', 'Jl. Kapten Haryadi Jl. Dayakan No.74, Yogyakarta', 'Public Training');
INSERT INTO `vendors` VALUES (814, 'Kanakan Puradiredja Suhartono (KPS) ', 'Dwi', 'www.kanaka.co.id', '085325984885', 'Muncul, Kec. Setu, Kota Tangerang Selatan', 'Public Training');
INSERT INTO `vendors` VALUES (815, 'Koperasi Prima Daya Migas', 'Aulia', 'koperasimigas@yahoo.co.id', '081806592603', 'Gedung Migas\nJl. HR. Rasuna Said Kav B-5, Jakarta - 12910', 'Public Training');
INSERT INTO `vendors` VALUES (816, 'Korn Ferry', 'Klandy Levira ', 'Klandy.Levira@KornFerry.com', '(021) 80861800', 'DBS Bank Tower, 25th Floor, Suite 2501, Ciputra World 1, Jl.Prof.Dr.Satrio Kav.3-5, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (817, 'Lembaga Sertifikasi Profesi Pasar Modal (LSPPM)', 'Ratih', ' info@lsppm.com', '(021) 57903476', 'Wisma GKBI Lt. 6 Suite 606 Jl. Jendral Sudirman Kav. 28, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (818, 'LSP Manajemen Risiko', 'Widya', 'widya.ayu@lspmr.org', '021. 2525242', 'Gedung Biru Lantai 4\nJl. Kapten Tendean No 1, Jakarta ', 'Public Training');
INSERT INTO `vendors` VALUES (819, 'Manpowering', NULL, 'www.manpoweringindonesia.co.id', '081210482228', 'Gedung Setyajaya No.II-2, Jl. Pajajaran No.23 Baranangsiang, Bogor', 'Public Training');
INSERT INTO `vendors` VALUES (820, 'Markplus.INC', 'Tina', ' info@markplusinc.com', '082329700206', 'Jalan Terusan Dr.Ir.Sutami No.7 - 8, Sarijadi, Bandung', 'Public Training');
INSERT INTO `vendors` VALUES (821, 'Multi Spec Sinergindo', 'Mansur', 'multispec@gmail.com', '081249197720', 'Jl. Raya Sememi, Sememi, Kec. Benowo, Surabaya', 'Public Training');
INSERT INTO `vendors` VALUES (822, 'Petrosync', 'Billy', 'general@petrosync.com', '081283377475', 'Jl. Daan Mogot I No.8, Daan Mogot, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (823, 'PPM Manajemen', 'Akbar', 'support@managementforum.com', '081559956195', 'Jl. Menteng raya No.13 Kb. Sirih Jakarta 10340', 'Public Training');
INSERT INTO `vendors` VALUES (824, 'PPM Manajemen', 'Tajudin', ' pustaka@ppm-manajemen.ac.id', '089637344646', 'Gedung Bina Manajemen, Jl. Menteng Raya, Menteng, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (825, 'Prasetiya Mulya', 'Sisil', 'registration.eli@pmbs.ac.id', '081212435296', 'Jl. R.A Kartini (TB. Simatupang), Cilandak Barat, Jakarta Selatan,', 'Public Training');
INSERT INTO `vendors` VALUES (826, 'Prasetiya Mulya - Executive Learning Institute', 'Sisil', 'information.eli@pmbs.ac.id', '081212435296', 'Jl. RA Kartini, Ciladak Barat\nJakarta - 12430', 'Public Training');
INSERT INTO `vendors` VALUES (827, 'PT Adhikriya Kualita Utama', 'Wisnu', 'training@akualita.com\nwww.akualita.com', '085712340779', 'Jl. K.H Abdul Manan N0 25\nSemarang - 50192', 'Public Training');
INSERT INTO `vendors` VALUES (828, 'PT Algoritma Data Indonesia', 'Yuni', 'community@algorit.ma', '087778353007', '4th Floor, Menara Kadin Indonesia, Jl. H. R. Rasuna Said Blok X-5, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (829, 'PT Badak LNG', 'Zainal', 'portal.badaklng.co.id', '(021) 31935231', 'Jl. Gondangdia Raya, Kec. Menteng, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (830, 'PT Cipta Raya Mekar Sahitya', 'Ratih', 'sekretariat@crmsindonesia.org\nwww.crmsindonesia.org', '022. 87301035', 'Batununggal Indah IV No 97\nBandung Kidul, Bandung - 40267', 'Public Training');
INSERT INTO `vendors` VALUES (831, 'PT Dakara Consulting LCA Indonesia', 'Edi Iswanto', 'cvmsp231105@gmail.com ', '087838827852', 'IPB Bogor, Gedung Dakara Coffee, Jl. Lingkar Baru No.8, Bogor', 'Public Training');
INSERT INTO `vendors` VALUES (832, 'PT Dasindo Media', 'Robith Amri', 'Robith.amri@dalecarniage.co.id', '085655433310', 'Jl. Jemursari 76 Kav. C-5, Surabaya 60237', 'Public Training');
INSERT INTO `vendors` VALUES (833, 'PT Expertindo', 'Rahman', 'mail@expertindo-training.com\nwww.expertindo-training.com', '0274. 4532686', 'Jl. Kaliurang km 10\nKomp. Puri Gentan Asri No.11, Yogyakarta', 'Public Training');
INSERT INTO `vendors` VALUES (834, 'PT Formasi Sistem Internasional', 'Eko Wardoyo', 'cs@formasitraining.com', '082298046070', 'Graha Simatupang Tower II B Lantai 1\nJl. Letjen TB Simatupang Kav 38\nJakarta - 12540', 'Public Training');
INSERT INTO `vendors` VALUES (835, 'PT Indocor Rekayasa Teknologi ', 'Edwin', 'irt2016@gmail.com', '021. 32999717', 'Komplek Puspitek Blok 1C No.02\nTanggerang Selatan', 'Public Training');
INSERT INTO `vendors` VALUES (836, 'PT Inixindo Persada Rekayasa Komputer', 'Bagus Suliso', ' info@inixindo.id', '021. 57940868', 'Permata Senayan Blok E2-E5\nJl. Tentara Pelajar No 5, Jakarta - 12210', 'Public Training');
INSERT INTO `vendors` VALUES (837, 'PT Inixindo Training Center', 'Eka Kartika Astrini', 'eka@inixindojogja.com', '(021) 57940868', 'Jl. Tentara Pelajar No.5, Grogol, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (838, 'PT Inovasi Terampil Talenta Cendekia (ITTC)', 'Hanifah', NULL, '085722457115', 'Jl. Tebet Timur Dalam 7E No.17, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (839, 'PT Intipesan Pariwara', 'Putra Agung', 'www.intipesan.co.id', '021. 7815858', 'Jl. Baung no.36A\nPasar Minggu, Jakarta - 12520', 'Public Training');
INSERT INTO `vendors` VALUES (840, 'PT Konservasi Energi Solusi Indonesia', 'Risti Rismawan', 'risti.hidayat@yahoo.co.id', '087878795578', 'Ruko SPBU 34-17413 No 6\nJl. Wibawa Mukti No.1, Bekasi - 17423', 'Public Training');
INSERT INTO `vendors` VALUES (841, 'PT Kreasi Cipta Asia', 'Rani', 'knowcap@knowcap.co.id\nwww.gmlperformance.com', '021. 4515718', 'Graha GML, Arta Gading Niaga\nJl. Bulevar Artha Gading, Jakarta - 14240', 'Public Training');
INSERT INTO `vendors` VALUES (842, 'PT Multi Spec Energindo', 'Mansur', 'www.mspec.org', '081249197720', 'Jl. Raya Sememi, Sememi, Kec. Benowo, Surabaya', 'Public Training');
INSERT INTO `vendors` VALUES (843, 'PT Multi Taruna Sejati ', 'Fajar', 'www.multi-taruna.co.id', '(021) 83792121', 'Jl. Tebet Utara II G No.21, Kec. Tebet, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (844, 'PT Para Mitra Raya', 'Muhammad', 'm.jhon@nupmk.co.id', '021. 79197965', 'Wisma KDS lantai 2\nJl. Mapang Prapatan  No.6B, Jakarta - 12740', 'Public Training');
INSERT INTO `vendors` VALUES (845, 'PT Pratama Indomitra Kreston', 'Farah', 'info@pratamaindomitra.co.id\nwww.pratamaindomitra.com', '087876091744', 'Antam office Park  B 8th Floor\nJl. TB Simatupang  No 1, Jakarta - 12530', 'Public Training');
INSERT INTO `vendors` VALUES (846, 'PT Pusat Studi Apindo', 'Mariety Ruth Siahaan ', 'mariety@apindo.or.id', '(021) 83780824', 'Jl. Kuningan Mulia Kav. 9C, Guntur, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (847, 'PT Rajawali Kondulindo', 'Delvi', 'info@rjcons.com', '082112241855', 'Komplek Perkantoran Rich Palace Blok E/6\nJl. Meruyallir Raya No. 36-40, Jakarta - 11530', 'Public Training');
INSERT INTO `vendors` VALUES (848, 'PT Samson Tiara', 'Tania', 'office@survival-systems.com', 'Tel : (62-21) 780 1388, Fax: (62-21) 780 1389', 'The Garden Center #6-30\nKawasan Comercial Cilandak, Jakarta - 12560', 'Public Training');
INSERT INTO `vendors` VALUES (849, 'PT Scada Prima Cipta', 'Yogi', 'support@scada.co.id', '081214695519', 'Jl. Kembar I No.12, Cigereleng, Bandung', 'Public Training');
INSERT INTO `vendors` VALUES (850, 'Pusat Kajian Sumberdaya Pesisir dan Lautan IPB', 'Kamsari Saleh', 'sekretariat@pksplipb.or.id\nwww.pkspl.ipb.ac.id', '0251. 8374816', 'Kampus IPB Baranangsiang\nJl. Raya Pajajaran no 1, Bogor - 16127', 'Public Training');
INSERT INTO `vendors` VALUES (851, 'RSA Conference', 'Ruslan', 'rsaconference@singex.com', NULL, 'Marina Bay Sands, Singapore', 'Public Training');
INSERT INTO `vendors` VALUES (852, 'SACEOS Singapore', 'Jean', 'secretariat@saceos.org.sg', '+65 9732 3941', '1 Raffles Boulevard, Level 3 Venue Management Office, Suntec Convention Centre, Singapura 039593', 'Public Training');
INSERT INTO `vendors` VALUES (853, 'Sinaran Training', 'Aryo Nugroho', 'info@sinaran-training.com', '(021) 74778582', 'Komplek Ruko, Jl. Pala Raya No.A8, Depok', 'Public Training');
INSERT INTO `vendors` VALUES (854, 'TUK PGASOL', 'Nopriyanti', 'nopriyanti.ayu@pgn-solution.co.id', '085285558040', 'Komplek Perkantoran PGN, Jl. Kyai Haji Zainul Arifin No.20, Jakarta', 'Public Training');
INSERT INTO `vendors` VALUES (855, 'Yayasan Pendidikan Internal Audit', 'Yana', 'marketingypia@gmail.com ', '081380179159', 'L\'avenue Office tower, Jl. Raya Pasar Minggu No.kav. 16,', 'Public Training');
INSERT INTO `vendors` VALUES (856, 'ACT Consulting ', 'Cucu Sugiarti', 'cucusugiarti99@gmail.com', '087884364199/ 081317764195', 'Menara 165, Jln. TB Simatupang Kav 1, cilandak, jakarta selatan', 'Inhouse Training');
INSERT INTO `vendors` VALUES (857, 'CECT Trisakti University', '-', 'info@cectcsr.com', '02157930117', 'Menara Batavia 2nd Floor Kav. 126, Jl. K.H. Mas Mansyur, Karet Tengsin, Jakarta', 'Inhouse Training');
INSERT INTO `vendors` VALUES (858, 'CV Adi Mas ', 'Lilyani', 'professional.driving@ymail.com', '085210509262', 'JL. Pedati no 10. Kp. Melayu Jakarta 13350', 'Inhouse Training');
INSERT INTO `vendors` VALUES (859, 'Drs Tarcisius Tariman Sipayung, MM ', 'Drs Tarcisius Tariman Sipayung, MM ', 'ttsipayung@gmail.com', '0811235996', 'Jl. Merkuri Raya No.7 Manjahlega Rancasari Kota Bandung, Jawa Barat\n', 'Inhouse Training');
INSERT INTO `vendors` VALUES (860, 'Eko Sujatmiko Utomo', 'Yulius Tri Nurcahya', 'yulius.trinurcahya@gmail.com', '081320301736', 'The Icon, Verdantview Blok 12 No. 7, Sampora, Cisauk, Tanggerang, Banten 15345', 'Inhouse Training');
INSERT INTO `vendors` VALUES (861, 'FDB Events PTE.LTD.', 'Willy k', 'willy.k@fdb.sg', '081285221', 'Wisma Gulab, Singapore 348548', 'Inhouse Training');
INSERT INTO `vendors` VALUES (862, 'Forum Ekselen BUMN', 'Aris Sukand', 'sekertariatfeb@yahoo.com\npengurusfeb@gmail.com', '085217033555', 'Kantor Pusat PT Jasa Marga ( Persero ) Tbk, Gedung Divisi Risk and Quality Management Plaza Toll TMII Jakarta 13550', 'Inhouse Training');
INSERT INTO `vendors` VALUES (863, 'Ikatan Ahli Manajemen Proyek (IAMPI)', 'Noprianti', 'info.tuk@pgn-solution.co.id', '085285558040', 'Komplek Perkantoran PGN. Gedung C. Jl. KH Zainul Arifin No. 20. Jakarta Barat', 'Inhouse Training');
INSERT INTO `vendors` VALUES (864, 'Ikatan Akuntan Indonesia (IAI)', NULL, 'iai-info@iaiglobal.or.id / \nwww.iaiglobal.or.id', '021. 31904232', 'Graha Akuntan\nJl. Sindanglaya No, 1 Jakarta - 10310', 'Inhouse Training');
INSERT INTO `vendors` VALUES (865, 'Immortal Group', 'Oddinda Siregar', 'oddinda@immortal.co.id', '081932716045', 'Jl. Raya pekapuran no. 32 RT 01/01, Sukatani, Cimanggis Depok Jawa Barat', 'Inhouse Training');
INSERT INTO `vendors` VALUES (866, 'IPMI International Business School', 'Indah Rahmaniar', 'indah.rahmaniar@ipmi.ac.id', '087886164924', 'Jalan Rawajati Timur I No.1, RT.3/RW.2, Rawajati, Pancoran, RT.3/RW.2, Rawajati, Pancoran, Jakarta Selatan 12750', 'Inhouse Training');
INSERT INTO `vendors` VALUES (867, 'Kosdiklat TNI Angkatan Darat Pusat Pendidikan Ajudan Jendral', 'Boyke ', NULL, '081220424778', 'Jl.Maribaya N0.12, Lembang - Bandung', 'Inhouse Training');
INSERT INTO `vendors` VALUES (868, 'Lembaga Kebijakan Pengadaan Pemerintah', 'Fadli Arif', NULL, '08128340455', 'Kompleks Rasuna Epicentrum, Jl. Epicentrum Tengah Lot 11 B Jakarta Selatan, DKI Jakarta 12940', 'Inhouse Training');
INSERT INTO `vendors` VALUES (869, 'Pengembangan Manajemen Indonesia, YAY IPMI International Business School (IPMI) \n', 'Arum ', 'arum@ipmi.ac.id', '081297333485', 'Jl. Rawajati Timur No.1 RT.3/ RW. 2, Rawajati, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibu Kota Jakarta 12750', 'Inhouse Training');
INSERT INTO `vendors` VALUES (870, 'Persatuan Insinyur Indonesia', 'Jafar Chanel', NULL, '08569910008', 'Jl. Percetakan Negara No. 19, Johar Baru, Jakarta Pusat', 'Inhouse Training');
INSERT INTO `vendors` VALUES (871, 'PT Cita Riset Fiskal', 'Widya Shabariyah', 'Widya.shabariyah@gmail.com', '081287300067', 'Wisma Korindo Lt. 5, Jl. MT. Haryono Kav. 62, Jakarta', 'Inhouse Training');
INSERT INTO `vendors` VALUES (872, 'PT Cybertrend Intrabuana', 'Afiff Rieza Bahalwan', 'contact@cybertrend-intra.com', '0217822471 / +62217822472', 'Jl. Mampang Prapatan Raya No. 17 E-F, Jakarta', 'Inhouse Training');
INSERT INTO `vendors` VALUES (873, 'PT Dimensi Internasional Tax', 'Eny Marliana ', 'eny@ddtc.co.id', '0815-8980-228', 'Jln. Raya Boulevard Barat Blok XC 5-6 Kelapa Gading Barat, Kelapa Gading Jakarta Utara 14240', 'Inhouse Training');
INSERT INTO `vendors` VALUES (874, 'PT Frontlainer Servis Indonesia', 'Dr. Leonard Ong', 'jakarta@frontlinerinc.com', '02183783288', 'Menara Standard Chartered, 30th Floor, Jl. Prof. Dr. Satrio, Jakarta 12930', 'Inhouse Training');
INSERT INTO `vendors` VALUES (875, 'PT Gebeha Kyubin Abadi', 'Shinta Damayanti', NULL, '081316358112', 'Tetra Pack Building Ground Floor, Jl. Buncit Raya Kav. 100, Jakarta', 'Inhouse Training');
INSERT INTO `vendors` VALUES (876, 'PT Integral Data Prima (Ortax)', 'R Hendy Setiawan', 'Support@integraldp.co.id', '02147865713', 'Jl. Pemuda Raya No. 66, Jakarta', 'Inhouse Training');
INSERT INTO `vendors` VALUES (877, 'PT Investasi Inovasi Indonesia', NULL, 'www.innovesia.co.id', '021. 29398903', 'Equity Tower 35th Floor Jl. Jend Sudirman Kav.52-53, Jakarta - 12190', 'Inhouse Training');
INSERT INTO `vendors` VALUES (878, 'PT IRBA Group Indonesia', 'Ir. Tedy Fardiansyah', ' contact@irba.co.id', '081227615735', 'Wisma GKBI Lt. 6, Jl. Jend. Sudirman No. 28, Bendungan Hilir, Jakarta', 'Inhouse Training');
INSERT INTO `vendors` VALUES (879, 'PT Kubik Kreasi Sisilain (KUBIK)', 'Lia', 'info@kubik.co.id / \nwww.kubikleadership.com', '087889069910', 'Sovereign Plaza 17th Floor \nTB Simatupang Kav 36, Jakarta - 12430', 'Inhouse Training');
INSERT INTO `vendors` VALUES (880, 'PT Momenta', 'Susana', NULL, '02139502235', 'Podomoro City - Unit 1016, Jl. Letjen S. Parman Kav. 28, Jakarta', 'Inhouse Training');
INSERT INTO `vendors` VALUES (881, 'PT OMG Metah Ganjil', 'Yoan Adiningtyas', 'yoanne@alwaysomg.com', '0821 2292 6363', 'Beleza Office Tower, Lantai 7 Unit 1. Jln. Letjen Soepeno No. 34 Jakarta 12210', 'Inhouse Training');
INSERT INTO `vendors` VALUES (882, 'PT Orca Cendekia ', 'Kurnia', 'kurnia@orcacendekia.com', '081317948176', 'Jalan Bakri No.73 RT.002/ RW.007 Jombang Ciputat Timur Tanggerang Selatan ', 'Inhouse Training');
INSERT INTO `vendors` VALUES (883, 'PT Rajawali Konsulindo', 'Yolia Atmadjaja', 'info@rjons.com', '021. 58910022', 'Komplek Perkantoran Rich Palace Blok E/6\nJl. Meruyallir Raya No. 36-40, Jakarta - 11530', 'Inhouse Training');
INSERT INTO `vendors` VALUES (884, 'PT Srikandi Nusantar Jaya Consultan', 'Lia', 'srikand.injci@gmail.com', '085228161716', 'Jl. Sukonandi No. 4B, Semaki, Kec. Ubulharjo, Kota Yogyakarta, DIY 55166', 'Inhouse Training');
INSERT INTO `vendors` VALUES (885, 'PT Superintending Company of Indonesia (SUCOFINDO)', 'Wisnu', 'wisnuyansen@sucofindo.co.id', '082260111040', 'jl. Raya Pasar Minggu Kav. 34, Jakarta, Indonesia 12780', 'Inhouse Training');
INSERT INTO `vendors` VALUES (886, 'PT Yudha Larasati Consulting (YLC)', 'Randy Bagasyudha', 'randy_bagasyudha@yahoo.com', '081283552004', 'Jl. Pelangi VI Blok E, Jakamulya - Bekasi', 'Inhouse Training');
INSERT INTO `vendors` VALUES (887, 'PT. Ahlindo Konsulasri Utama', 'Soeprihadi', 'asricon@cbn.net.id\nprihadiss@gmail.com', '0811813437', 'Jl. Antene VII No.2, RT.10/RW.1, Gandaria Utara, Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140', 'Inhouse Training');
INSERT INTO `vendors` VALUES (888, 'PT. Daily Meaning ', NULL, 'clovers@dailymeaning.com', '(021)217191981/0811167615', 'Wisma Surya Kemang Lt.2, jln. Kemang Raya no. 33, Jakarta 12730', 'Inhouse Training');
INSERT INTO `vendors` VALUES (889, 'PT. Daya Dimensi Indonesia', 'Aulia', 'auliya.rahma@dayadimensi.id', '08112291709', 'Kantor Taman E3.3 Unit B 3-3A Kawasan, Jl. Mega Kuningan Barat No.RT.1, RT.1/RW.2, Kuningan, Kuningan Tim., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950', 'Inhouse Training');
INSERT INTO `vendors` VALUES (890, 'PT. Germanischer Lioyd Nusantara (DNV GL Lloyd Nusantara) ', 'Ferry Sonnevil', 'ferry.sonnevil@dnvgl.com', '081386167774', 'Gedung World Trade Centre I, lantai 13 (Jl. Jenderal Sudirman Kav. 29-31, Karet, Setiabudi Jakarta Selatan', 'Inhouse Training');
INSERT INTO `vendors` VALUES (891, 'PT. Ide Learning ', 'Firdaus', 'muhfirdaus810@gmail.com', '081220002211', 'Metro Indah Mall MTC Blok F16, Jl. Soekarno Hatta 590 (125.57 km)\n40286 Bandung', 'Inhouse Training');
INSERT INTO `vendors` VALUES (892, 'PT. Omnividya Learning Boutique', 'Ahmed', 'ahmed@omnividya.org', '(021)3441487/08118111311', 'Jln. Tanah Abang II No. 41, Jakarta Pusat 10160', 'Inhouse Training');
INSERT INTO `vendors` VALUES (893, 'PT. Smartdata Solusi Utama', 'Nurul', 'nurul@cybertrend-intra.com', '08561389092', 'The Manhattan Square Mid Tower 12th Floor. JL TB Simatupang Kav 1-S Cilandak Timur Jakarta', 'Inhouse Training');
INSERT INTO `vendors` VALUES (894, 'PT. Teknologi Anak Bangsa', 'Arie Arya Adhya Sadhana', 'as@tensa.id', '081214947197', 'Jl. Karang Tinggal No.14, Cipedes, Sukajadi, Kota Bandung, Jawa Barat 40162', 'Inhouse Training');
INSERT INTO `vendors` VALUES (895, 'Simson Leider Nadeak', 'Simson Leider Nadeak', 'nadeak1982@gmail.com', '081383285182', 'Jalan Pinus Elok 1 Blok D11 No. 13 Penggilingan', 'Inhouse Training');
INSERT INTO `vendors` VALUES (896, 'Ir. Joko Waluyo, M.T.,Ph.D', 'Ir. Joko Waluyo, M.T.,Ph.D', 'jokowaluyo@ugm.ac.id', '082133903885', 'Kutu Tegal RT. 06/RW. 27, Sinduadi Sleman, Yogyakarta\n', 'Inhouse Training');

SET FOREIGN_KEY_CHECKS = 1;
