-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 23-04-04 17:59
-- 서버 버전: 10.4.27-MariaDB
-- PHP 버전: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `sample`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `raku1`
--

CREATE TABLE `raku1` (
  `num` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `birth` char(20) NOT NULL,
  `phone` char(30) NOT NULL,
  `route_method` char(20) NOT NULL,
  `search_method` char(20) NOT NULL,
  `wax_ex` char(10) NOT NULL,
  `sicks` char(200) NOT NULL,
  `pill_ex` char(10) NOT NULL,
  `want` char(200) NOT NULL,
  `info` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `raku1`
--

INSERT INTO `raku1` (`num`, `name`, `birth`, `phone`, `route_method`, `search_method`, `wax_ex`, `sicks`, `pill_ex`, `want`, `info`) VALUES
(37, '박청원', '961105', '01077248807', '3', '라쿠라쿠', 'no', '1,2,3,4,5,', 'yes', '1,2,3,4,5,', 'yes'),
(41, '후드보이', '851232', '01023433321', '3', '라쿠', 'no', '1,2,3,루돌프병', 'no', '1,2,3,4,5,손금', 'yes'),
(42, '김인간', '111111', '010111111111', '1', '1111', 'yes', '7,8,9,독감', 'no', '모자,16,17,18,19', 'yes'),
(43, '가나다', '1234567', '01012345678', '1', '라쿠케어', 'yes', '3,4,5,b형간염', 'yes', '7,8,9,10,발톱', 'yes'),
(44, '김철수', '911231', '01098765432', '1', '철수닷컴', 'no', '5,6,7,코로나', 'yes', '5,6,7,8,힘줄', 'yes'),
(45, '일이삼', '981230', '01012341234', '1', '일이삼닷컴', 'yes', '1,2,3,', 'yes', ',16,17,18,19', 'yes');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `raku1`
--
ALTER TABLE `raku1`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `raku1`
--
ALTER TABLE `raku1`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
