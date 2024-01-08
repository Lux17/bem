-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 07:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bemft`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `idbidang` int(11) NOT NULL,
  `bidang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`idbidang`, `bidang`) VALUES
(1901, 'Kominfo');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` mediumtext NOT NULL,
  `date` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `date`, `image`) VALUES
(5, 'Musyawarah Besar Computer Education 2022', '<p>&nbsp;&lt;p class=\"MsoNormal\" style=\"background-color:white;line-height:18.0pt;mso-margin-bottom-alt:auto;\"&gt;&lt;span style=\"background-color:white;color:#0D0D0D;font-family:;\"&gt;&lt;span style=\"mso-fareast-font-family:;\" open=\"\" times=\"\" new=\"\"&gt;&lt;strong&gt;Musyawarah Besar&lt;/strong&gt;&nbsp;merupakan salah satu agenda yang diwajibkan dari setiap organisasi yang ada, hal ini dikarenakan Musyawarah Besar (Mubes) akan membahas persoalan pembahasan Laporan pertanggung jawaban kepengurusan sebelumnya, Anggaran Dasar dan Anggaran Rumah Tangga sebuah organisasi tentunya juga akan menentukan pemimpin baru untuk memimpin organisasi tersebut. Oleh karena itu Mubes adalah hal yang sakral dari sebuah organisasi.&nbsp;&lt;/span&gt;&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;&lt;p class=\"MsoNormal\" style=\"background-color:white;line-height:18.0pt;mso-margin-bottom-alt:auto;\"&gt;&lt;span style=\"background-color:white;color:#0D0D0D;font-family:;\"&gt;&lt;span style=\"mso-fareast-font-family:;\" open=\"\" times=\"\" new=\"\"&gt;Pada tanggal 26 November 2022&nbsp;&lt;strong&gt;Unit Kegiatan Mahasiswa Computer Education (UKM CE)&nbsp;&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;span style=\"color:#0D0D0D;font-family:;\"&gt;&lt;span style=\"mso-fareast-font-family:;\" open=\"\" times=\"\" new=\"\"&gt;Universitas Muhammadiyah Cirebon&lt;/span&gt;&lt;/span&gt;&lt;span style=\"background-color:white;color:#0D0D0D;font-family:;\"&gt;&lt;span style=\"mso-fareast-font-family:;\" open=\"\" times=\"\" new=\"\"&gt;&nbsp;mengadakan&nbsp;&lt;strong&gt;Musyawarah Besar&lt;/strong&gt;&nbsp;tahun kepengurusan 2021/2022 yang diikuti seluruh Pengurus UKM Computer Education dan tamu undangan yang terdiri dari Dewan Perwakilan Mahasiwa, Wakil Rektor III, Demisioner, ALB dan Organisasi Mahasiswa Lainnya Universitas Muhammadiyah Cirebon.&lt;/span&gt;&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;</p>', '2023-12-23', 'https://drive.google.com/file/d/1fOA5bYIAhVwKx1UaIRumDOIUR55fNbg2/preview'),
(6, 'Webinar Nasional AI', '<p>Teknologi terus mengalami evolusi, dan salah satu yang menjadi sorotan utama adalah kecerdasan buatan atau <i>Artificial Intelligence</i> (AI). Kehadirannya tidak hanya mengubah cara kita berinteraksi dengan teknologi, tetapi juga membuka peluang baru yang belum pernah terbayangkan sebelumnya.<br>UKM Computer Education mengangkat Materi Artificial Intelligence dalam Webinar Nasional yang bertema \"<i><strong>Development &nbsp;and Implementation of Artificial Intelligence In the era of Industry 5.0</strong></i>\" yang bekerja sama dengan <strong>Diskominfo Kab Cirebon</strong> dan <strong>Infinite Learning.</strong></p><p>Baru-baru ini, sebuah acara webinar nasional membahas secara mendalam mengenai AI dan perannya dalam transformasi dunia kita. Webinar ini menggali sejumlah topik menarik yang berhubungan dengan AI, mulai dari konsep dasarnya hingga penerapannya dalam berbagai bidang kehidupan.</p><p>1. Pengantar yang Mendalam tentang Artificial Intelligence<br>Webinar ini dimulai dengan memperkenalkan AI dalam konteks yang mudah dipahami. Pembicaraan mengenai sejarah perkembangannya, konsep dasar, dan jenis-jenis AI membantu para peserta untuk memahami landasan teknologi yang mendasarinya.</p><p>2. Penerapan AI dalam Berbagai Sektor<br>Salah satu poin yang menarik dari webinar ini adalah eksplorasi tentang bagaimana AI digunakan di berbagai sektor. Mulai dari kesehatan, pendidikan, keuangan, hingga industri, pembicara webinar menjelaskan bagaimana AI telah mengubah lanskap di setiap sektor ini. Contohnya, dalam kesehatan, AI membantu diagnosis penyakit lebih cepat dan akurat, sementara dalam pendidikan, AI mendukung pengajaran yang personal dan adaptif.</p><p>3. Etika dan Implikasi Sosial AI<br>Selain membahas manfaatnya, webinar juga menyentuh aspek etika dalam penggunaan AI. Pertanyaan tentang privasi data, keamanan, serta dampak sosial AI menjadi perdebatan yang hangat. Diskusi ini memberikan wawasan yang mendalam bagi peserta tentang bagaimana kita harus menggunakan teknologi ini dengan bertanggung jawab.</p><p>4. Masa Depan AI dan Kesiapan Kita<br>Webinar juga menyoroti masa depan AI dan bagaimana kita bisa mempersiapkan diri untuk menghadapi perkembangannya. Dengan menggali konsep seperti AI yang bisa belajar sendiri (machine learning) dan perkembangan teknologi yang semakin cepat, peserta diberi pemahaman tentang betapa pentingnya kesiapan dan adaptabilitas kita terhadap perubahan ini.</p><p>Kesimpulan<br>Webinar nasional mengenai AI ini memberikan wawasan yang dalam dan menyeluruh tentang teknologi yang semakin mendominasi dunia saat ini. Dari pemahaman dasar hingga implikasi sosial, acara ini mendorong peserta untuk memikirkan secara kritis tentang peran AI dalam kehidupan kita serta bagaimana kita dapat mengelolanya dengan bijaksana.</p><p>Kesempatan untuk mendengarkan para pakar dan berdiskusi dengan sesama peserta dalam webinar semacam ini sangat berharga dalam menghadapi era AI yang terus berkembang pesat. Semoga webinar semacam ini dapat menjadi langkah awal yang baik bagi kita semua untuk memahami, menghormati, dan memanfaatkan AI dengan cara yang memberikan manfaat bagi manusia dan masyarakat secara keseluruhan.</p>', '2024-01-02', 'https://drive.google.com/file/d/1-epLraV-ZKbHM03NGTo0yHIJcuSBUz6F/preview'),
(7, 'Makrab & Upgrading Computer Education 2023', '<p>Kegiatan Makrab (Malam Keakraban) dan Upgrading memiliki peran penting dalam memperkuat hubungan antara individu dalam sebuah kelompok atau komunitas. Makrab adalah sebuah acara yang umumnya diadakan oleh berbagai organisasi, seperti kelompok mahasiswa, tim kerja, atau komunitas yang bertujuan untuk mempererat ikatan sosial antaranggota.</p><p><strong>Makrab: Mengenal Lebih Dalam Kegiatan Kebersamaan</strong></p><p>Makrab adalah singkatan dari Malam Keakraban. Kegiatan ini biasanya diadakan dalam format acara santai di luar lingkungan rutin seperti perkuliahan atau pekerjaan. Tujuannya adalah untuk memungkinkan anggota kelompok atau organisasi untuk saling mengenal dengan lebih baik, mempererat ikatan, dan menciptakan atmosfer yang lebih akrab.</p><p><strong>Upgrading</strong></p><p>Upgrading adalah proses berkelanjutan yang bertujuan untuk meningkatkan kapasitas individu atau kelompok dalam berbagai aspek kehidupan. Ini dapat mencakup peningkatan keterampilan dan pengetahuan.</p><p>Materi Upgrading ada 3, Yaitu Materi Organisasi oleh pemateri yaitu Dwiwahyu Auwalia Syahruramadhan, S.Pd</p><p>Materi ke dua yaitu tentang administrasi dan Lobbying oleh pemateri Afiah Fifi Fitria, S.Pd</p><p>Materi ke tiga yaitu tentang komputer membahas artificial intelligence oleh Lucky Saputra</p>', '2024-01-03', 'https://drive.google.com/file/d/1gfOLPqfZvfFeensoKKLuxpqfKnFR75fK/preview'),
(8, 'Seminar Nasional IT Fest', '<p>Pada Seminar IT Fest Ini berkolaborasi dengan HIMASANTIKA UMC, UKM Computer Education masih dalam raikaian Festival Milad Computer Education dimana ada beberapa kegiatan Lomba Desain Milad &amp; Vidiografi.<br>Pada seminar ini Mengangkat Materi \"Cybersecurity &amp; Bug Hunter\" yang mengundang bapak M. Anis AI H. S.si, M.T(Pemateri 1) dan Putra Aji Adhari (Pemateri 2).<br><br>Cybersecurity adalah bidang yang berkaitan dengan upaya melindungi sistem komputer, jaringan, perangkat lunak, dan data dari ancaman dan serangan siber. Ancaman ini dapat berupa malware, virus, peretasan (hacking), serangan phishing, dan berbagai taktik jahat lainnya. Dengan semakin kompleksnya ekosistem digital, keamanan siber menjadi prioritas yang kritis bagi organisasi, lembaga pemerintah, dan individu untuk melindungi informasi pribadi, keuangan, dan bisnis mereka.</p><p>Bug Hunter adalah para ahli keamanan siber dan etika yang memiliki kemampuan untuk menemukan dan melaporkan bug atau celah keamanan di perangkat lunak atau situs web tertentu. Mereka berperan sebagai detektif digital yang membantu melacak potensi kerentanan dan memberikan rekomendasi bagi pemilik sistem untuk mengatasi masalah sebelum dimanfaatkan oleh pihak yang tidak bertanggung jawab.</p><p><strong>Tujuan dan Manfaat Seminar</strong></p><p>Seminar ini memiliki tujuan yang beragam, antara lain:</p><p>Meningkatkan Kesadaran Keamanan Cyber: Seminar ini bertujuan untuk meningkatkan kesadaran masyarakat tentang ancaman keamanan siber yang ada dan pentingnya melindungi diri dari serangan siber.</p><p>Menyediakan Informasi dan Wawasan: Para pembicara akan menyajikan informasi terbaru tentang tren terkini dalam keamanan siber, teknik serangan, dan upaya pencegahan.</p><p>Mengapresiasi Peran Bug Hunter: Seminar ini memberikan apresiasi dan penghargaan kepada para Bug Hunter yang telah berkontribusi dalam menemukan celah keamanan dan melindungi sistem digital.</p><p>Kolaborasi: Disini UKM Computer Education Berkolaborasi dengan HIMASANTIKA dalam pelaksanaan seminat IT Fest ini</p><p><strong>Topik Diskusi</strong></p><p>Beberapa topik yang akan diangkat dalam seminar ini meliputi:</p><p>Tantangan Keamanan Cyber di Era Digital: Menganalisis ancaman terbaru yang dihadapi oleh organisasi dan individu serta solusi untuk melawan mereka.</p><p>Strategi dan Taktik Hacking yang Paling Umum: Memahami teknik serangan yang sering digunakan oleh peretas dan bagaimana cara mengatasinya.</p><p>Keamanan Aplikasi Web: Menguji kerentanan aplikasi web dan pentingnya mengamankan perangkat lunak dari serangan.</p><p>Peran Bug Hunter dalam Meningkatkan Keamanan Cyber: Mengenal peran dan kontribusi para Bug Hunter dalam dunia keamanan siber.</p><p><strong>Acara dan Kegiatan Pendukung</strong></p><p>Selain sesi seminar, IT Fest juga menyelenggarakan Aksi Donor Darah sebagai bentuk kepedulian dan mendukung kepada PMI dalam menyediakan stok darah bagi pasien diseluruh indonesia.</p>', '2024-01-04', 'https://drive.google.com/file/d/1Hnz2UXjSFXkpxDbgQGGhwWmZqsYdeqRu/preview');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `idjabatan` int(11) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`idjabatan`, `jabatan`) VALUES
(2202, 'Staff Eksternal'),
(2203, 'Staff PSDM');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `idpengurus` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`idpengurus`, `nama_lengkap`, `nim`, `prodi`, `semester`, `jabatan`, `bidang`) VALUES
(2003, 'Syindy', '200511094', 'Teknik Informatika', '5', 'Staff', 'Eksternal'),
(2004, 'Sahdania', '200511021', 'Teknik Informatika', '5', 'Bendahara II', 'Badan Pengurus Harian (BPH)');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(20) NOT NULL,
  `no_surat` varchar(200) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `perihal` varchar(250) NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `no_surat`, `jenis`, `perihal`, `kepada`, `tujuan`) VALUES
(1, 'wq', 'Surat Masuk', 'Peringatan Kedua(SP-2)', 'sa', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rolename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `rolename`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`idpengurus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
