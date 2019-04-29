-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Apr 2019 pada 18.26
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tobat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `deskripsi_obat` varchar(535) NOT NULL,
  `foto_obat` varchar(255) NOT NULL DEFAULT 'default_obat.jpg',
  `kategori` varchar(255) NOT NULL,
  `komposisi` varchar(255) NOT NULL,
  `indikasi` varchar(255) NOT NULL,
  `dosis` varchar(255) NOT NULL,
  `penyajian` varchar(255) NOT NULL,
  `cara` varchar(255) NOT NULL,
  `perhatian` varchar(255) NOT NULL,
  `efek` varchar(255) NOT NULL,
  `kemasan` varchar(255) NOT NULL,
  `pabrik` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `referensi` varchar(255) NOT NULL,
  `harga` mediumint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `deskripsi_obat`, `foto_obat`, `kategori`, `komposisi`, `indikasi`, `dosis`, `penyajian`, `cara`, `perhatian`, `efek`, `kemasan`, `pabrik`, `keterangan`, `referensi`, `harga`) VALUES
(6, 'FITKOM ANGGUR BTL', 'Memenuhi kebutuhan vitamin dan mineral pada anak anak usia pertumbuhan dengan rasa anggur', '800.800_5ed03a3a9d954480b4a9d32b7b07c267.jpg', 'Vitamin dan Mineral', 'vitamin a 1000IU, vitamin b1 1.4mg, vitamin b2 1.6 mg, vitamin b6 2 mg, vitamin b12 3 mcg, vitamin c 60 mg,  vitamin d3 100IU, vitamin e 5 mg, nicotinamid 9 mg, ca pantotenate 5 mg', 'memenuhi kebutuhan vitamin dan mineral pada anak usia pertumbuhan, membantu memelihara kesehatan anak, membantu memulihkan kondisi tubuh sehabis sakit.', '3x sehari 1 tablet hisap', 'setelah makan', '-', '-', '-', '1', 'Soho', 'Terakhir diperbarui pada 26 April 2019', 'Referensi FITKOM ANGGUR BTL diambil dari berbagai macam sumber.', 16088),
(7, 'STERIMAR NASAL SPRAY 50ML', 'Sterimar Nasal Spray merupakan obat semprot hidung yang digunakan untuk melembabkan membran nasal (hidung) yang kering dan meradang karena pilek, alergi, kelembaban yang rendah, dan iritasi hidung yang lainnya pada anak-anak maupun dewasa.STERIMAR NASAL SPRAY 50ML; \r\nmengandung larutan Sea Water dan Purified Water yaitu larutan isotonis yang memiliki fungsi meringankan inflamasi membran hidung dengan mengencerkan lendir (ingus) supaya mudah keluar sekaligus melembabkan hidung yang kering.', '8421.jpg', 'Dekongestan Nasal dan Preparat Nasal Lain', 'sea water 31,82 ml; purified water qsp 100 ml', 'membantu membersihkan ingus pada hidung anak (mulai 3 tahun) dan dewasa, membantu menjaga kelembaban pada membran hidung, membantu menjaga kebersihan hidung', '2-6 kali semprotan per hari tiap lubang hidung (atau lebih jika diperlukan). Disarankan untuk penggunaan sebelum tidur atau membersihkan hidung sehari-hari.', 'secara perlahan-lahan masukkan ujung botol sterimar ke dalam lubang hidung, tekan botol perlahan-lahan, biarkan kelebihan cairan keluar dari hidung sebelum dibersihkan, ulangi lagi lalu bersihkan ujung botol dengan air sabun dan keringkan', 'simpan di tempat sejuk dan kering, terhindar dari paparan sinar matahari langsung', '-', '-', '1', 'SOFIBEL: Laboratoires Fumouze', 'Terakhir diperbarui pada 26 April 2019', 'Referensi STERIMAR NASAL SPRAY 50ML diambil dari berbagai macam sumber.', 146144),
(8, 'CHANNA CAP 30S', '-', 'apotek_online_k24klik_201903180215144677_channa.jpeg', 'Suplemen dan Terapi Penunjang', '-', '-', '-', '-', '-', '-', '-', '30', '-', 'Terakhir diperbarui pada 26 April 2019', 'Referensi CHANNA CAP 30S diambil dari berbagai macam sumber.', 259545),
(9, 'OB HERBAL JUNIOR', 'Merupakan obat herbal plus madu dan meniran yang dapat meredakan batuk dan menghangatkan tenggorokan yang disebabkan karena masuk angin.', '7540678_d65fa701-41b5-4994-bf97-72e9c85d57b3.jpg', 'Obat Batuk dan Pilek', 'Tiap 10 ml mengandung ekstrak : Zingiberis Rhizoma (2,2 g) Menthae Folia (2,173 g) Phyllanthi Herba (0,5 g) Kaempferiae Rhizoma (0,5 g) Citrus Aurantifolli Fructus (0,5 g) Thymi Herba (0,5 g) Myristicae Semen (0,25 g) Glycyrrhizae Radix (0,178 g) Madu (0,', 'Meredakan batuk yang disebabkan karena masuk angin. Menghangatkan dan melegakan tenggorokan', 'Anak umur 6-12 tahun : 3 kali sehari 2 sendok takar (10 ml)', 'Sesudah makan', 'Simpan di tempat yang kering dan terlindung dari sinar matahari langsung', '-', '-', '1', '-', 'Terakhir diperbarui pada 26 April 2019', 'Referensi OB HERBAL JUNIOR diambil dari berbagai macam sumber.', 13354),
(10, 'DEXANTA TAB 100S', 'Sirup obat maag yang dapat mengatasi tukak lambung, kembung, dispepsia, heartburn, dan hiperasiditas.\r\n\r\nBeli Dexanta Syr 100ML di apotek online K24klik dan dapatkan manfaatnya.', 'dexanta-tab-100s-1.jpg', 'Antasid, Obat Antirefluks & Antiulserasi', 'Koloidal Al(OH)3 200mg, Mg(OH)2 200mg, simethicone 20mg', 'Hiperasiditas, tukak lambung, kembung, dispepsia dan heartburn', '1-2 tab 3 x/hari', 'Berikan di antara waktu makan dan sebelum tidur malam', 'Simpan di tempat yang kering dan terlindung dari cahaya', 'Diet rendah fosfat dan disfungsi ginjal', 'Konstipaso, Diare obstruksi intestinal (dosis tnggi)', '10', 'Dexa Medica', 'Terakhir diperbarui pada 26 April 2019', 'Referensi DEXANTA TAB 100S diambil dari berbagai macam sumber.', 2662),
(11, 'MATOVIT TAB 30&#39;S/STR', 'MATOVIT TAB 30&#39;S/STR merupakan suplemen untuk pemeliharaan kesehatan mata. Tersedia dalam bentuk tablet yang didistribusikan oleh Soho.', '_1_.jpg', 'Suplemen dan Terapi Penunjang', 'Per Matovit tablet : beta-carotene 5 mg, bilberry dry extract 80 mg, retinol 1600 iu, vit E 40 mg, Per 5 ml Matovit syrup : bilbery dry ectract 40 mg, retinol 800 iu, beta-carotene 2.5 mg, vit E 40 mg.', 'Terapi suportif untuk memelihara kesehatan mata', '2-3 x sehari 1 kaplet', 'saat/sesudah makanan', 'simpan di tempat sejuk dan kering, terhindar dari paparan sinar matahari langsung', '-', '-', '30', 'Soho', 'Terakhir diperbarui pada 26 April 2019', 'Referensi MATOVIT TAB 30&#39;S/STR diambil dari berbagai macam sumber.', 48004),
(12, 'ANADEX TAB 100S', 'Anadex diproduksi oleh PT. Interbat dan telah terdaftar pada BPOM. Pada setiap tablet Anadex mengandung 500mg paracetamol, 15mg dextromethorphan HBr, 1mg chlorpheniramine maleat, dan 15mg phenylpropanolamine HCl. Kombinasi yang terkandung dalam Anadex tablet dapat digunakan untuk membantu meringankan gejala flu seperti demam, batuk, nyeri, bersin-bersin, dan hidung tersumbat. Anadex tidak untuk diberikan pada penderita yang memiliki riwayat hipertiroid, hipertensi, penyakit jantung koroner, dan nefropati serta MAOI.', 'ANADEX-BOX-100-TABLET-1.jpg', 'Obat Batuk dan Pilek', '500mg paracetamol, 15mg dextromethorphan HBr, 1mg chlorpheniramine maleat, 15mg phenylpropanolamine HCl', 'flu, batuk, demam, nyeri dan selesma', 'dewasa: 3-4 kali sehari 1 tablet', 'diminum sebelum atau sesudah makan', 'simpan pada tempat sejuk dan kering, terhindar dari paparan sinar matahari langsung', 'penyakit jantung, diabetes mellitus, glaukoma, gangguan fungsi hati dan ginjal, ibu hamil dan anak', 'mengantuk, mulut kering, pusing, ruam kulit, serangan seperti epilepsi pada pemberian dosis tinggi.', '100', 'INTERBAT', 'Terakhir diperbarui pada 26 April 2019', 'Referensi ANADEX TAB 100S diambil dari berbagai macam sumber.', 11880),
(13, 'SANADRYL DMP SYR 60ML', 'Sanadryl DMP merupakan kombinasi dextromethorphan HBr, Difenhidramin HCl, Amonium klorida dan Natrium sitrat.', 'SANADRYL-DMP-SIRUP-60-ML-1.jpg', 'Obat Batuk dan Pilek', 'Tiap 5 ml mengandung : dextromethorphan HBr 10 mg, Difenhidramin HCl 12,5 mg, Amonium Klorida 100 mg dan Natrium Sitrat 50 mg, Mentol 1 mg.', 'Untuk meringankan gejala batuk tidak berdahak yang menimbulkan rasa sakit atau batuk karena alergi.', 'Anak-anak 6-12 tahun : 5 ml, 3-4 kali sehari. Dewasa : 10 ml, 3-4 kali sehari. Atau menurut petunjuk dokter.', 'Diberikan bersama dengan makanan', 'Simpan pada suhu kamar', 'Penyakit hati, Asma, Glaukoma, MAOI, Hamil, Anak, Mempengaruhi kemampuan mengemudi/menjalankan mesin.', 'Mengantuk, pusing, gangguan koordinasi, sekresi saluran pernapasan mengental, mulut kering; kejang epileptiform (dosis besar)', '1', 'Sanbe Farma', 'Terakhir diperbarui pada 26 April 2019', 'Referensi SANADRYL DMP SYR 60ML diambil dari berbagai macam sumber.', 15299),
(14, 'BETADINE GARGLE 100ML', 'obat kumur', '26132_product_1508906238.jpg', 'Preparat Mulut/Tenggorokan', 'povidon iodida 1%', 'obat kumur antiseptik untuk rongga mulut seperti gigi berlubang, gusi bengkak, sakit tenggorokan, sariawan, bau mulut dan nafas tak segar', '15 ml, 3-5 kali sehari', 'Tuang ke tutup botol (15ml), kumur 30-60 detik', '-', 'Hipersensitif terhadap iodium, penderita thyroid, hamil dan menyusui', 'iritasi jika absorbsi berlebihan bisa mengganggu sistemik', '1', '-', 'Terakhir diperbarui pada 26 April 2019', 'Referensi BETADINE GARGLE 100ML diambil dari berbagai macam sumber.', 16305),
(15, 'MICROPORE 1/2 PMTG', 'Micropore adalah plester kertas bebas latex dan hypoallergenic yang lembut bagi kulit namun tetap merekat baik dengan residu adhesive yang minimal saat dilepaskan. Micropore sangat cocok untuk aplikasi berulang pada kulit sensitif, fragile dan pasien lansia. Tersedia juga dalam kemasan dispenser untuk memudahkan penggunaan', 'apotek_online_k24klik_2017040711114713_1425-Nexcare-Micropore-paper-tape1-2-inch.png', 'Alat Kesehatan Medis', '-', '-', '-', '-', '-', '-', '-', '1', '-', 'Terakhir diperbarui pada 26 April 2019', 'Referensi MICROPORE 1/2 PMTG diambil dari berbagai macam sumber.', 18975),
(16, 'WELLNESS OMEGA 3 FISH OIL TAB 150S', 'Kadar kolesterol dan tekanan darah yang tinggi dapat memicu timbulnya penyakit degeneratif yang merupakan salah satu penyebab kematian terbesar. Untuk menghindari penyakit tersebut sebaiknya melakukan perubahan pola hidup menjadi lebih sehat dan ditunjang dengan konsumsi suplemen alami seperti Wellness Omega 3. Wellness Omega 3 diproduksi oleh PT Natural Nutrindo. Wellness Omega 3 mengandung Omega-3 CIS Formula alamiah yang terbukti sangat efektif dibandingkan dengan Omega-3 Trans Formula. Selain itu, tambahan vitamin E dapat mem', '3354178_35eccccf-9016-4d8f-8f43-c3c4c2d1e059_300_300.png', 'Suplemen dan Terapi Penunjang', 'omega 3 1000 mg, EPA 180 mg, DHA 120 mg, vitamin E 5 IU', 'Membantu menurunkan kadar LDL, kolesterol, dan trigliserida', '1 kapsul per hari', 'sesudah makan', '-', 'Hindari penggunaan pada wanita hamil dan menyusui. Selama penggunaan konsultasikan dengan dokter secara berkala. Suplemen tidak dapat menggantikan nutrisi dari makanan', '-', '150', '-', 'Terakhir diperbarui pada 26 April 2019', 'Referensi WELLNESS OMEGA 3 FISH OIL TAB 150S diambil dari berbagai macam sumber.', 360030),
(17, 'VICKS VAPORUB 10G', 'obat gosok untuk melegakan hidung tersumbat akibat pilek', '31cSRZpOzzL.jpg', 'Obat Batuk dan Pilek', 'camphor 2630 mg, menthol 1410 mg, eucalyptus oil 665 mg', 'hidung tersumbat karena pilek', 'digunakan sesuai dengan kebutuhan', 'gosokkan pada bagian dada dan punggung', '-', '-', '-', '1', '-', 'Terakhir diperbarui pada 26 April 2019', 'Referensi VICKS VAPORUB 10G diambil dari berbagai macam sumber.', 8158),
(18, 'BALJITOT MINYAK GOSOK 50ML', 'Minyak gosok Baljitot diproduksi oleh PT Ultra Sakti dan terdapat juga balsem. Minyak gosok Baljitot diformulasikan khusus dengan ekstrak jahe merah dan memberikan rasa hangat lebih lama dan efek panas berganda dengan aroma relaksasi yang menenangkan. Minyak gosok Baljitot mengandung metil salisilat untuk mengatasi nyeri, menthol dan champora yang berfungsi sebagai anti iritan, serta ekstrak jahe merah. Minyak gosok Baljitot cocok untuk pijat dan kerik.', '886832_baljitot_minyak_gosok_50.jpg', 'Obat Kulit Lain', 'Methyl salicylate 28%, Eucalyptus Oil 2%, Citronella Oil 3%, Menthol 1,5%, Eugenol 0,5%, Ekstrak Jahe merah 0,1%, Based ad 100%', 'Mengatasi pegal linu, nyeri otot, nyeri sendi, sakit punggung, encok, keseleo, memar, dan memperlancar peredaran darah', 'Sesuai kebutuhan', 'cocok untuk pijat dan kerik', '-', 'Hipersensitif. Hanya untuk pemakaian luar. Jauhkan dari jangkauan anak-anak', 'Reaksi alergi', '1', 'PT Ultra Sakti', 'Terakhir diperbarui pada 26 April 2019', 'Referensi BALJITOT MINYAK GOSOK 50ML diambil dari berbagai macam sumber.', 14375),
(19, 'PANADOL ANAK CHEW TAB', 'Panadol Anak Chew Tab merupakan obat dalam bentuk tablet kunyah berfungsi dalam meredakan demam dan nyeri ada anak usia 2 hingga 12 tahun. Panadol mengandung zat aktif Paracetamol yang memiliki aktivitas sebagai penurun demam/antipiretik dan pereda nyeri/analgesik yang bisa diperoleh tanpa resep dokter.', '8889.jpg', 'Analgesik (Non Opiat) dan Antipiretik', 'Paracetamol.', 'Meredakan sakit kepala, sakit gigi, nyeri otot (mialgia), & demam yang menyertai flu & demam pasca vaksinasi.', 'Anak 6-12 tahun : 2-4 tab, Anak 2-5 tahun 1-2 tab. Diberikan 3-4 kali perhari dengan interval pemberian tiap 4 jam.', 'Dapat diberikan bersama atau tanpa makanan.', '-', 'Pasien dengan penyakit ginjal. Dpt meningkatkan risiko gangguan fungsi hati pada pasien yang mengonsumsi alkohol. Penggunaan bersama dengan obat lain yang mengandung parasetamol.', 'Kerusakan hati pada penggunaan jangka lama, dosis besar. Reaksi hipersensitivitas seperti kemerahan, gatal, pengelupasan kulit; gangguan pernapasan (krn aspirin & OAINS), pembengkakan bibir, lidah, tenggorokan, & wajah; sariawan, memar, perdarahan.', '10', 'Sterling', 'Terakhir diperbarui pada 26 April 2019', 'Referensi PANADOL ANAK CHEW TAB diambil dari berbagai macam sumber.', 13585);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` bigint(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `sia` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.svg',
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama`, `no_hp`, `alamat`, `sia`, `foto`, `level`) VALUES
(3, 'syihabklayan@gmail.com', '$2y$10$MK1H.gQm0bebr4uTaXwAFuwvdnHHG1N1OW9x/eciMix/NDpVzjZO.', 'Syihab', 82218424651, 'Cirebon, Klayan', '', 'default.svg', 0),
(4, 'syamfirdaus@gmail.com', '$2y$10$2vzTEtWmU2i31L21Nb7T5.NBwKrrBP0AwI3JBCkvf2a.I95PxXCVa', 'Muhammad Syam', 82218427432, 'tidaktahu', '', 'default.svg', 1),
(6, 'admin2@admin.com', '$2y$10$0fzuS0WFgBlTn43MrHtfXe.AOdoYrjCv7Eu738fYVCO0NTRALmGOu', 'admin', 82218424650, 'Cirebon', '', 'product_DV_01.jpg', 1),
(7, 'syamfirdaus5@gmail.com', '$2y$10$KLlSYHYNu23o1svHOm/BAO1O50AZOmlOWssT3gq0zVWkVbBKBWDea', 'Syam', 77123123, 'Purwakarta', '', 'RFactory1DS-UnusedZavier.png', 0),
(12, 'kirito@sao.com', '$2y$10$stB.OZdqERIGhSQKEIvoGOmoduJNumhEhQZ.cL8G34TYadkjoR3Ue', 'Kirigaya Kazuto', 123, 'Aincard', '', 'default.svg', 1),
(14, 'apotik@apotik.com', '$2y$10$MstUbkY.9n3TBVyNLxwm..Lp8H2MgwxVLFt57ag7W85YrILRbTy0W', 'Apotik Sukaharga', 123, '123', '12EDWQ/213X/12X/123', 'SI TIKA Logo.png', 2),
(33, 'admin@admin.com', '$2y$10$GlKoiYZOggugizVFEqJICeaq8J8UZMll3Bno.K9oSo8dbOddwoWau', 'admin', 82218424650, '123', '', 'unsika.png', 1),
(35, 'syekh.syihabuddin17023@student.unsika.ac.id', '$2y$10$fNPiOsZBwsyl55L2DAbU4.OrBssj1d6JMQOAx5mgMM5JYzoDQvTAq', 'Syekh Syihabuddin Azmil Umri', 82218424650, 'Cirebon', '', 'maxresdefault.jpg', 0),
(36, 'apotik2@apotik.com', '$2y$10$ohq7bVGGnGwUJVWeu.b9.OFpeI1WvczLA8D51s/RF05zCLEC3hpau', 'APOTIK', 82218424650, '123', '12EDWQ/213X/12X/123', 'pray.png', 2),
(37, 'dummy@akun.com', '$2y$10$RN4PnhNyV9o9VIuB8TKEBOg3lQpYuxXrTiEpt7jJrBjFHmYxQU3XG', 'Dummy1', 82218424650, 'Cirebon', '', 'Oprec Panitia Diesnatalis.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
