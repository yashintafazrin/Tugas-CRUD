-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 06:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwpb`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodak`
--

CREATE TABLE `prodak` (
  `no` int(5) NOT NULL,
  `kode_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` varchar(20) NOT NULL,
  `satuan` enum('Pilih Satuan','Pcs','Kg','Liter') NOT NULL,
  `kategori` enum('Pilih Kategori','Minuman','Makanan','Snack') NOT NULL,
  `url_gambar` varchar(200) NOT NULL,
  `stok_awal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodak`
--

INSERT INTO `prodak` (`no`, `kode_produk`, `nama_produk`, `harga_produk`, `satuan`, `kategori`, `url_gambar`, `stok_awal`) VALUES
(1, 'MD-001', 'Beras', '10000', 'Liter', 'Makanan', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUTExMWFhUXGBobGRgYFxsgHRseIBgXFxoaGBoYHSggHR0lHxcdITEhJSkrLi4uGiAzODMtNygtLisBCgoKDg0OGxAQGy0mICYyMC8tLS8tLS0tLS8tLS0tLS0tLS0tLS0tLy0tL', 10),
(2, 'MD-002', 'Aqua', '5000', 'Liter', 'Minuman', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQW4QKtopMrnUkCtL4MHikheDESNms1WOzR0GrJtQQfMxcda9mS&usqp=CAU', 7),
(3, 'MD-003', 'Telur', '12000', 'Kg', 'Makanan', 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1567736773/attached_image/inilah-manfaat-telur-dan-cara-menyimpannya-alodokter.jpg', 4),
(4, 'MD-004', 'Kopi', '15000', 'Pcs', 'Minuman', 'https://www.coffindo.id/images/news/news_20161011085315.jpg', 7),
(5, 'MD-005', 'Chiki', '5000', 'Pcs', 'Snack', 'https://cdn.happyfresh.com/spree/images/attachments/2fb3d218e9766f14c15662484cabdac7486f9388-large.jpg?1448785692', 2),
(7, 'MD-007', 'Gula', '8000', 'Kg', 'Makanan', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTExMVFRUXFxcXGBgXGBcXGBgYFhUXFxgVGBcdHSggGBolHRUXITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGi0dHR0tLS0tLS0tLS0tLS0tLS0tLSstLS0tLS0tLS0tL', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodak`
--
ALTER TABLE `prodak`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodak`
--
ALTER TABLE `prodak`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
