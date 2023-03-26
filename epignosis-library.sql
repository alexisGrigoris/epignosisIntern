-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 26 Μαρ 2023 στις 21:14:28
-- Έκδοση διακομιστή: 10.4.27-MariaDB
-- Έκδοση PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `epignosis-library`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `borrowed-books`
--

CREATE TABLE `borrowed-books` (
  `conn_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `borrow_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ebooks`
--

CREATE TABLE `ebooks` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `type` text NOT NULL,
  `img` text NOT NULL,
  `copies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `ebooks`
--

INSERT INTO `ebooks` (`id`, `title`, `author`, `type`, `img`, `copies`) VALUES
(1, 'Gilead', 'Marilynne Robinson', 'Fiction', 'http://books.google.com/books/content?id=KQZCPgAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 3),
(3, 'The One Tree', 'Stephen Donaldson', 'American fiction', 'http://books.google.com/books/content?id=OmQawwEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 1),
(4, 'Rage of angels', 'Sidney Sheldon', 'Fiction', 'http://books.google.com/books/content?id=FKo2TgANz74C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(5, 'The Four Loves', 'Clive Staples Lewis', 'Christian life', 'http://books.google.com/books/content?id=XhQ5XsFcpGIC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 4),
(6, 'The Problem of Pain', 'Clive Staples Lewis', 'Christian life', 'http://books.google.com/books/content?id=Kk-uVe5QK-gC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 4),
(7, 'An Autobiography', 'Agatha Christie', 'Authors, English', 'http://books.google.com/books/content?id=c49GQwAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(8, 'Empires of the Monsoon', 'Richard Hall', 'Africa, East', 'http://books.google.com/books/content?id=MuPEQgAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(9, 'The Gap Into Madness', 'Stephen R. Donaldson', 'Hyland, Morn (Fictitious character)', 'http://books.google.com/books/content?id=4oXavLNDWocC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(10, 'Master of the Game', 'Sidney Sheldon', 'Adventure stories', 'http://books.google.com/books/content?id=TkTYp-Tp6_IC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(11, 'If Tomorrow Comes', 'Sidney Sheldon', 'Adventure stories', 'http://books.google.com/books/content?id=l2tBi_jLuk8C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(13, 'Warhost of Vastmark', 'Janny Wurts', 'Fiction', 'http://books.google.com/books/content?id=uOL0fpS9WZkC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(14, 'The Once and Future King', 'Terence Hanbury White', 'Arthurian romances', 'http://books.google.com/books/content?id=Jx6BvgEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(15, 'Murder in LaMut', 'Raymond E. Feist;Joel Rosenberg', 'Adventure stories', 'http://books.google.com/books/content?id=I2jbBlMHlAMC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(16, 'Jimmy the Hand', 'Raymond E. Feist;S. M. Stirling', 'Fantasy fiction', 'http://books.google.com/books/content?id=hV4-oITYFN8C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(17, 'Well of Darkness', 'Margaret Weis;Tracy Hickman', '', 'http://books.google.com/books/content?id=XrwaAAAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(18, 'Witness for the Prosecution & Selected Plays', 'Agatha Christie', 'English drama', 'http://books.google.com/books/content?id=_9u7AAAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(19, 'The Little House', 'Philippa Gregory', 'Country life', 'http://books.google.com/books/content?id=rbvUPps9vKsC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(20, 'Mystical Paths', 'Susan Howatch', 'English fiction', 'http://books.google.com/books/content?id=by4ytBy63o0C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(21, 'Glittering Images', 'Susan Howatch', 'English fiction', 'http://books.google.com/books/content?id=rDHbn0ORKhQC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(22, 'Glamorous Powers', 'Susan Howatch', 'Clergy', 'http://books.google.com/books/content?id=_bhPYWs6RrYC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(23, 'The Mad Ship', 'Robin Hobb', 'Fantasy fiction', 'http://books.google.com/books/content?id=2iWezkfdBE8C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(24, 'Post Captain', 'Patrick O\'Brian', 'Aubrey, Jack (Fictitious character)', 'http://books.google.com/books/content?id=S761k-z51Q4C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(25, 'The Reverse of the Medal', 'Patrick O\'Brian', 'Adventure stories', 'http://books.google.com/books/content?id=YtjxFRb39Z4C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(26, 'Miss Marple', 'Agatha Christie', 'Detective and mystery stories, English', 'http://books.google.com/books/content?id=a96qPwAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(27, 'The Years of Rice and Salt', 'Kim Stanley Robinson', 'Black Death', 'http://books.google.com/books/content?id=I38CFD1RnmsC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(28, 'Spares', 'Michael Marshall Smith', 'Human cloning', 'http://books.google.com/books/content?id=83RrAdP9y5UC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(29, 'Gravity', 'Tess Gerritsen', 'Science fiction', 'http://books.google.com/books/content?id=KI66cH39n6sC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(30, 'The Wise Woman', 'Philippa Gregory', 'Great Britain', 'http://books.google.com/books/content?id=BEr9wAEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(32, 'The White Album', 'Joan Didion', 'American essays', 'http://books.google.com/books/content?id=qauOPwAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(34, 'The Lexus and the Olive Tree', 'Thomas L. Friedman', 'Capitalism', 'http://books.google.com/books/content?id=u8zxpq6o7HYC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(36, 'Ocean Star Express', 'Mark Haddon;Peter Sutton', 'Juvenile Fiction', 'http://books.google.com/books/content?id=I2QZAAAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(37, 'A Small Pinch of Weather', 'Joan Aiken', 'Children\'s stories, English', 'http://books.google.com/books/content?id=QiFhOBpYZoYC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(38, 'The Princess of the Chalet School', 'Elinor Mary Brent-Dyer', 'Juvenile Fiction', 'http://books.google.com/books/content?id=EJcQPwAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(39, 'Koko', 'Peter Straub', 'Male friendship', 'http://books.google.com/books/content?id=QV_XQKj4OMkC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(40, 'Tree and Leaf', 'John Ronald Reuel Tolkien', 'Literary Collections', 'http://books.google.com/books/content?id=aPb_AAIcwZ0C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(41, 'Partners in Crime', 'Agatha Christie', 'Beresford, Tommy (Fictitious character)', 'http://books.google.com/books/content?id=L0bfy0zgkegC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(42, 'Murder in Mesopotamia', 'Agatha Christie', 'Detective and mystery stories', 'http://books.google.com/books/content?id=oFkbc7BbYN0C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(43, 'The Lord of the Rings, the Return of the King', 'Jude Fisher', 'Imaginary wars and battles', 'http://books.google.com/books/content?id=kNBnQgAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(44, 'All Families are Psychotic', 'Douglas Coupland', 'Dysfunctional families', 'http://books.google.com/books/content?id=jYBsNp6NPVoC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(45, 'Death in the Clouds', 'Agatha Christie', 'Detective and mystery stories', 'http://books.google.com/books/content?id=M8iyckq4GQ0C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(46, 'Appointment with Death', 'Agatha Christie', 'Detective and mystery stories', 'http://books.google.com/books/content?id=lSYwsRkcw4YC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(49, 'The Big Four', 'Agatha Christie', 'Detective and mystery stories', 'http://books.google.com/books/content?id=wcOQUSWQEdUC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(50, 'The Thirteen Problems', 'Agatha Christie', 'Detective and mystery stories, English', 'http://books.google.com/books/content?id=MK9JNwoZAncC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(51, 'They Do it with Mirrors', 'Agatha Christie', 'American fiction', 'http://books.google.com/books/content?id=HUuQYGppZi8C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(52, 'A Murder is Announced', 'Agatha Christie', 'Detective and mystery stories, English', 'http://books.google.com/books/content?id=QEEvzeAkdzoC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(55, 'Taken at the Flood', 'Agatha Christie', 'Fiction', 'http://books.google.com/books/content?id=3gWlxIFlMEwC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(56, 'The Hollow', 'Agatha Christie', 'Detective and mystery stories', 'http://books.google.com/books/content?id=-f1h4e0hl0oC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(57, 'Third Girl', 'Agatha Christie', 'Belgians', 'http://books.google.com/books/content?id=Dbh7nUkG_6cC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(58, 'The Secret of Chimneys', 'Agatha Christie', 'Battle, Superintendent (Fictitious character)', 'http://books.google.com/books/content?id=1OluX5g96OcC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(60, 'The Metaphysical Club', 'Louis Menand', 'Cambridge (Mass.)', 'http://books.google.com/books/content?id=C3Gkwi3SfmMC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(61, 'The illustrated man', 'Ray Bradbury', 'Fiction', 'http://books.google.com/books/content?id=kePqlVft1bQC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(63, 'Cut', 'Patricia McCormick', 'Emotional problems', 'http://books.google.com/books/content?id=Q140Mlie138C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(64, 'The Lord of the Rings', 'Gary Russell', 'Characters and characteristics in motion pictures', 'http://books.google.com/books/content?id=oEZ6AAAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(65, 'The Lord of the Rings', 'John Ronald Reuel Tolkien', 'Fantasy fiction, English', 'http://books.google.com/books/content?id=LwO-vgEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(66, 'The Fellowship of the Ring', 'John Ronald Reuel Tolkien;Alan Lee', 'Baggins, Frodo (Fictitious character)', 'http://books.google.com/books/content?id=K7xSPgAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(67, 'Lirael', 'Garth Nix', 'Fantasy fiction', 'http://books.google.com/books/content?id=sDzU8TpKvQAC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(68, 'Tales from the Perilous Realm', 'John Ronald Reuel Tolkien', 'Fairy tales, English', 'http://books.google.com/books/content?id=Wla7NwAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(69, 'Breaking Open the Head', 'Daniel Pinchbeck', 'Hallucinogenic drugs', 'http://books.google.com/books/content?id=QIMaviqqoQoC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(71, 'Beware, Princess Elizabeth', 'Carolyn Meyer', 'Children\'s stories', 'http://books.google.com/books/content?id=wPBpR4AFNJ0C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(72, 'The Family Way', 'Tony Parsons', 'Parenthood', 'http://books.google.com/books/content?id=dJEIxdYmnU8C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(73, 'Endless Night', 'Agatha Christie', 'FICTION', 'http://books.google.com/books/content?id=kY1wuNfgmFQC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(74, 'How to be Alone', 'Jonathan Franzen', 'Literary Collections', 'http://books.google.com/books/content?id=ozVWaXd9xvwC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(75, 'The Mysterious Mr. Quin', 'Agatha Christie', 'Detective and mystery stories', 'http://books.google.com/books/content?id=n0aMDV7Lm4sC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(76, 'The Listerdale Mystery', 'Agatha Christie', 'Detective and mystery stories', 'http://books.google.com/books/content?id=J1tLGz5G84EC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(77, 'The Real Trial of Oscar Wilde', 'Merlin Holland', 'Biography & Autobiography', 'http://books.google.com/books/content?id=QfNgQfTKcg0C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(78, 'I Can Read with Me Eyes Shut!', 'Dr. Seuss', 'Authors, American', 'http://books.google.com/books/content?id=oyF8U9BRTQwC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(80, 'If I Die in a Combat Zone', 'Tim O\'Brien', 'Vietnam War, 1961-1975', 'http://books.google.com/books/content?id=0qUtSvo_MiEC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(81, 'The Return of the King', 'J. R. R. Tolkien', 'Baggins, Frodo (Fictitious character)', 'http://books.google.com/books/content?id=PI9zPwAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(82, 'The Silmarillion', 'John Ronald Reuel Tolkien;Ted Nasmith', 'Fiction', 'http://books.google.com/books/content?id=hLH0dtl5NVwC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(83, 'I Wish that I Had Duck Feet', 'Dr. Seuss;Barney Tobey', 'Children\'s stories', 'http://books.google.com/books/content?id=m9cZAAAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(84, 'Oh Say Can You Say?', 'Dr. Seuss', 'Children\'s stories', 'http://books.google.com/books/content?id=r4l8AAAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(85, 'There\'s a Boy in the Girls\' Bathroom', 'Louis Sachar', 'Boys', 'http://books.google.com/books/content?id=jHE-PgAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(86, 'Microserfs', 'Douglas Coupland', 'Computer programmers', 'http://books.google.com/books/content?id=N3AmmJIsK6wC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(87, 'Miss Wyoming', 'Douglas Coupland', 'Actors', 'http://books.google.com/books/content?id=2zoTKFNdxpIC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(88, 'Where Rainbows End', 'Cecelia Ahern', 'Friendship', 'http://books.google.com/books/content?id=PA7t62vA7SAC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(89, 'Poirot', 'Agatha Christie', 'Authors', 'http://books.google.com/books/content?id=lbOOJGLxM9MC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(90, 'The Art of The Lord of the Rings', 'Gary Russell', 'Costume', 'http://books.google.com/books/content?id=zl-PPwAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(91, 'The Known World', 'Edward P. Jones', 'African American plantation owners', 'http://books.google.com/books/content?id=CVS9a6lC5CwC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(92, 'Discover Your Destiny with the Monk Who Sold His Ferrari', 'Robin Sharma', 'Conduct of life', 'http://books.google.com/books/content?id=4hVbNc8rRfEC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(93, 'Naked Lunch', 'William S. Burroughs', 'Alienation (Social psychology)', 'http://books.google.com/books/content?id=1B36S7t4k5AC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(94, 'Tropic of Cancer', 'Henry Miller', 'Fiction', 'http://books.google.com/books/content?id=ProgRjTL8FIC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(95, 'Close Range', 'Annie Proulx', 'Cowboys', 'http://books.google.com/books/content?id=f-zI3bgDiCAC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(96, 'The Love of the Last Tycoon', 'F. Scott Fitzgerald', 'Fiction', 'http://books.google.com/books/content?id=3EDbEHca_k8C&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 5),
(98, 'Heart Songs and Other Stories', 'Annie Proulx', 'Fiction', 'http://books.google.com/books/content?id=_K2fswEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(99, 'The voyage of the Dawn Treader', 'Clive Staples Lewis', 'Juvenile Fiction', 'http://books.google.com/books/content?id=fDD3CfYb70cC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(101, 'The Short Stories of Ernest Hemingway', 'Ernest Hemingway', 'Fiction', 'http://books.google.com/books/content?id=Len1AAAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(103, 'Reason in History', 'Georg Wilhelm Friedrich Hegel', 'Philosophy', 'http://books.google.com/books/content?id=BCvcYQEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(104, 'The Elements of Style', 'William Strunk;Elwyn Brooks White', 'Language Arts & Disciplines', 'http://books.google.com/books/content?id=ADaMf2tEB7sC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(105, 'The Presocratics', 'Philip Wheelwright', 'Philosophy', 'http://books.google.com/books/content?id=V45eMgEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(109, 'Tyranny of the Majority', 'Lani Guinier', 'History', 'http://books.google.com/books/content?id=aRF7XdcCLq0C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(110, 'The Origins of the Civil Rights Movement', 'Aldon D. Morris', 'History', 'http://books.google.com/books/content?id=7vyHY9DWcu8C&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 5),
(111, 'Presidential Power and the Modern Presidents', 'Richard E. Neustadt', 'History', 'http://books.google.com/books/content?id=elGozulX_o8C&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 5),
(112, 'Rest, Rabbit, Rest', 'Jacquelyn Reinach;Richard Hefter', 'Juvenile Fiction', 'http://books.google.com/books/content?id=8-40_Zrp5voC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(113, 'Where the Red Fern Grows', 'Wilson Rawls', 'Juvenile Fiction', 'http://books.google.com/books/content?id=IHpRwgEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(115, 'Diary of a Spider', 'Doreen Cronin', 'Juvenile Fiction', 'http://books.google.com/books/content?id=UWvZo2pIhzMC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(116, 'An Old-Fashioned Thanksgiving', 'Louisa May Alcott;James Bernardin', 'Juvenile Fiction', 'http://books.google.com/books/content?id=SKYr4V6C1M0C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(118, 'How to Read Literature Like a Professor', 'Thomas C. Foster', 'Literary Criticism', 'http://books.google.com/books/content?id=irkUlwEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(119, 'The Amazing Maurice and His Educated Rodents', 'Terry Pratchett', 'Juvenile Fiction', 'http://books.google.com/books/content?id=1Z8KJQAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(120, 'The Wee Free Men', 'Terry Pratchett', 'Juvenile Fiction', 'http://books.google.com/books/content?id=8PLblgEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(121, 'Going Postal', 'Terry Pratchett', 'Fiction', 'http://books.google.com/books/content?id=5xRh5kkS84UC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(122, 'Modern Mind', 'Peter Watson', 'Science', 'http://books.google.com/books/content?id=JVdMSavwwHoC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(123, 'She Went All the Way', 'Meg Cabot', 'Fiction', 'http://books.google.com/books/content?id=3ANI1Q2Z-qsC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(124, 'Island', 'Aldous Huxley', 'Fiction', 'http://books.google.com/books/content?id=MB3VSMgJ5CkC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(125, 'A Year in the Life of William Shakespeare', 'James Shapiro', 'Biography & Autobiography', 'http://books.google.com/books/content?id=86bOlwEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(126, 'Lucy Sullivan Is Getting Married', 'Marian Keyes', 'Fiction', 'http://books.google.com/books/content?id=qLl-3FGhPl0C&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5),
(127, 'The Terminal Man', 'Michael Crichton', 'Fiction', 'http://books.google.com/books/content?id=9hERBFsuOcgC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 5);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `borrowed-books`
--
ALTER TABLE `borrowed-books`
  ADD PRIMARY KEY (`conn_id`);

--
-- Ευρετήρια για πίνακα `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `borrowed-books`
--
ALTER TABLE `borrowed-books`
  MODIFY `conn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT για πίνακα `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
