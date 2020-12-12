-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2020 lúc 09:50 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhakhoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categoty`
--

CREATE TABLE `categoty` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categoty`
--

INSERT INTO `categoty` (`category_id`, `category_name`, `description`, `status`) VALUES
(1, 'Hơi thở có mùi', 'Hơi thở có mùi là hơi thở có mùi hôi do vi khuẩn gây ra ', 1),
(2, 'Đau răng ', 'Đau răng là tình trạng bên trong hoặc xung quanh bề mặt răng trở nên đau buốt. Tùy theo nguyên nhân mà cảm giác đi kèm đau răng sẽ có một chút khác biệt, tuy nhiên có một số cảm giác điển hình mà người bệnh có thể cảm thấy như \r\n', 1),
(3, 'Răng nhiễm màu', 'răng có chuyển màu do thức ăn, đồ uống\r\n', 1),
(4, 'Sâu răng', 'Sâu răng là tình trạng tổn thương mất mô cứng của răng do quá trình hủy khoáng gây ra bởi vi khuẩn ở mảng bám răng và hình thành các lỗ nhỏ trên răng. Sâu răng là do sự kết hợp của các yếu tố, bao gồm vi khuẩn trong miệng, ăn vặt thường xuyên', 1),
(5, 'Răng mẻ', 'Răng mẻ là tình trạng xảy ra ngoài ý muốn, như té ngã, chấn thương. Thậm chí có thể tủy răng bị viêm khiến răng yếu và dễ bị mẻ hoặc do bạn thiếu Canxi nặng trong khi phải chịu lực nhai thường xuyên, liên kết mô răng không còn rắn chắc nên dễ bị sứt mẻ, \r\n', 1),
(6, 'Răng khôn', 'Răng khôn tên gọi được dùng để chỉ những chiếc răng hàm mọc cuối cùng của mỗi bên hàm, hay gọi là răng số 8. Chiếc răng này không xuất hiện ở trẻ nhỏ khi mới mọc răng hay khi đã thay răng mà xuất hiện cuối cùng, thường ở người trưởng thành 18 tuổi trở lên. ', 1),
(7, 'Răng nhạy cảm', 'Răng nhạy cảm hay răng ê buốt là cách gọi thông thường của hiện tượng quá cảm ngà hoặc triệu chứng ê buốt ở chân răng. Đây là bệnh lý mà răng sẽ trở nên nhạy cảm hơn khi chịu những kích thích từ nhiệt độ nóng hoặc lạnh và ngoại lực, thường xuất hiện nhất ở những người trẻ và trung niên.', 1),
(8, 'Viêm nướu', ' Bệnh viêm nướu răng (hay viêm lợi) là tình trạng xuất hiện những dấu sưng đỏ, có mảng bám và rất dễ chảy máu ở nướu', 1),
(9, 'Lở loét miệng', 'Lở loét miệng là miệng bị lỡ loét khiến khó trong việc ăn uống ', 1),
(10, 'Tật thừa răng', 'Mọc thừa răng là một tình trạng răng miệng khi số lượng răng của bạn trở nên quá nhiều. Số lượng tiêu chuẩn của răng sữa là 20 chiếc và răng vĩnh viễn là 32 chiếc. ', 1),
(11, 'Răng hô vẩu', 'Răng hô vẩu là răng bị chìa ra phía trước quá mức, xương hàm hoặc cả răng và xương hàm nhô ra. Khiến mặt nhô ra trước, gương mặt bị hô sẽ mất đi vẻ đẹp tự nhiên. Răng hô có 2 mức độ: hô nhẹ và hô nặng \r\n\r\n', 1),
(12, 'Răng sữa', 'Răng sữa là những chiếc răng mọc đầu tiên, hình thành trong giai đoạn phát triển của trẻ nhỏ từ 4-24 tháng tuổi', 1),
(13, 'Vấn đề khác', 'Những vấn đề khác không thuộc những vấn đề được đề cập ở trên.', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `climate`
--

CREATE TABLE `climate` (
  `id` smallint(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `climate`
--

INSERT INTO `climate` (`id`, `title`, `description`) VALUES
(1, 'mùa xuân', 'mùa xuân, ấm áp, trời ấm, thời tiết ấm, hết rét '),
(3, 'mùa nóng', 'mùa hè, mùa nóng, mùa nồm, nồm ẩm, mùa mưa ,vào hè, đầu hè'),
(6, 'mùa lạnh', 'mùa lạnh, mùa rét,mùa khô, thời tiết khô, mùa đông,mùa rét,đông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dental`
--

CREATE TABLE `dental` (
  `user_id` int(11) NOT NULL,
  `dental_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dental_email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dental_address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dental_phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `dental_source` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dental_description` varchar(2500) CHARACTER SET utf8 NOT NULL,
  `dental_price` varchar(255) CHARACTER SET utf8 NOT NULL,
  `open_time` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dental`
--

INSERT INTO `dental` (`user_id`, `dental_name`, `dental_email`, `dental_address`, `dental_phone`, `dental_source`, `dental_description`, `dental_price`, `open_time`) VALUES
(1, 'Paris', 'lamNH@gmail.com', '459 Lê Duẩn, Thanh Khê, Đà Nẵng', '0267685498	', 'https://chinhnhathammy.vn/wp-content/uploads/2016/09/nha-khoa-paris.jpg', 'Nha khoa Paris là một trung tâm với các trang thiết bị, máy móc chuyên dụng hiện đại từ các Tập đoàn Nha khoa nổi tiếng trên thế giới. Nhờ vào các phương tiện hiện đại, đạt chuẩn xác cao, cùng với các phần mềm hỗ trợ tiện ích, Quý khách có thể dễ dàng nhận thấy được những bất thường về răng miệng của mình, so sánh được kết quả trước và sau điều trị, cũng như hỗ trợ cho các Bác sĩ trong chẩn đoán và điều trị khi thực hiện những thao tác phức tạp cần độ chính xác cao.', 'https://th.bing.com/th/id/OIP.ctmqXAFeHGUBb0wfxWN1ywHaLH?pid=Api&rs=1', '7AM-7PM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` varchar(1000) NOT NULL,
  `content` varchar(2500) NOT NULL,
  `category_id` int(11) NOT NULL,
  `new_source` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1,
  `topic` smallint(3) DEFAULT NULL,
  `climate` smallint(6) DEFAULT NULL,
  `patience` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`news_id`, `title`, `description`, `content`, `category_id`, `new_source`, `status`, `topic`, `climate`, `patience`) VALUES
(13, 'Cách làm trắng răng an toàn?', 'Bạn đã từng nghe về cách làm trắng răng bằng baking soda? ', ' Cách làm: cho 3 muỗng Baking soda vào một cái chén, vắt 1 quả chanh tươi vào đó và trộn đều thành một hỗn hợp.Tiếp đến, dùng chúng để đánh răng như thông thường và súc miệng lại với nước sạch. Sử dụng 2 lần/tuần, bạn sẽ có được hàm răng trắng sáng như mong muốn.\r\n', 3, 'https://cdn.hellobacsi.com/wp-content/uploads/2017/07/cong-dung-cua-baking-soda.jpg', 1, 15, NULL, 1),
(14, 'Cách làm trắng răng an toàn?', ' Bạn từng nghe cách làm trắng răng bằng dầu dừa?', 'Cách làm: Ngậm một muỗng cà phê dầu dừa trong khoảng 5-10 phút để nước bọt kết hợp cùng enzyme tiêu hóa trong dầu dừa giúp loại bỏ hết những mảng bám trên răng, giúp răng trắng sáng hiệu quả. Cố gắng giữ cho dầu dừa trong miệng, nếu có cảm giác sắp nuốt phải chúng hãy cân chỉnh ngay. Để dầu dừa len lỏi sâu trong răng sẽ làm sạch hiệu quả hơn những mảng bám thức ăn thừa.', 3, 'https://nhakhoahanquoc.com.vn/wp-content/uploads/2018/11/dau-dua1.jpg', 1, 11, NULL, NULL),
(15, 'Cách chữa hôi miệng nhanh chóng, hiệu quả?', 'Bạn đã từng nghe các chữa hôi miệng bằng lá ổi?', 'Cách 1: Súc miệng với nước lá ổi.Chuẩn bị khoảng 10 ngọn lá ổi sau đó rửa sạch và vò nát. Tiếp đến, dùng lá ổi đã cho vào nước và đun sôi trong khoảng 10 phút, lấy nước đó cho thêm một ít muối và súc miệng mỗi ngày 3 lần. Thường xuyên thực hiện phương pháp này, chúng ta sẽ nhanh chóng chấm dứt căn bệnh hôi miệng hoành hành.Cách 2: Nhai lá ổi thường xuyên. Thêm một cách nữa để chữa hôi miệng bằng lá ổi đó chính là sử dụng lá ổi non và nhai trong khoảng 5 phút, sau đó bỏ bã và súc miệng bằng nước lạnh. Các chất trong lá ổi vừa có tác dụng làm trắng răng, vừa có tác dụng chữa hôi miệng nhanh chóng và hiệu quả tại nhà.', 1, 'https://nhakhoahanquoc.com.vn/wp-content/uploads/2016/11/192354-thumb.jpg', 1, 11, NULL, NULL),
(16, 'Đau răng khôn nên làm gì? Răng khôn có nên nhổ không?', 'Nỗi ám ảnh với những cơn đau nhức khi mọc răng khôn là vấn đề gặp phải của nhiều người. Đặc biệt hơn tình trạng này hầu như ai cũng trải qua khi bước vào độ tuổi trưởng thành. Và việc đau răng không chỉ ảnh hưởng đến giấc ngủ hàng ngày. Mà nó còn gây khó khăn trong quá trình ăn uống của bạn. Nếu bạn chưa hiểu rõ về việc đau răng khôn và một số tips để chữa trị cơn đau này thì hãy tham khảo bài viết dưới đây.', 'Trong trường hợp răng không đau nhức khiến bạn không ngủ được thì bạn có thể giảm đau bằng một số phương pháp thông thường. Chẳng hạn như sử dụng nước muối để giảm đau buốt. Bằng cách dùng 2-3 muỗng cà phê muối hòa tan với một ít nước ấm và ngậm trong 15 phút. Nhờ tính sát khuẩn mà phương pháp này sẽ giúp bạn giảm đau hiệu quả mà không tốn kém. ', 6, 'https://nhakhoatandinh.com/wp-content/uploads/2020/02/rang-khon-moc-lech-gay-viem-sung-mu.jpg', 1, 11, NULL, 7),
(17, 'VIÊM NƯỚU RĂNG CÓ PHẢI LÀ BỆNH NGHIÊM TRỌNG?', 'Viêm nướu khi mới xuất hiện không phải là bệnh nghiêm trọng và có thể dễ dàng điều trị được. Tuy nhiên, nếu tình trạng viêm nướu răng kéo dài sẽ gây ra đau, nhức và ảnh hưởng lớn đến cả sức khỏe cũng như tinh thần của người bệnh. ', 'Viêm nướu răng hay còn gọi là viêm lợi, đây là bệnh lý răng miệng khá phổ biến mà độ tuổi nào cũng có thể mắc phải. Khi một người bị viêm nướu răng sẽ xuất hiện các vết sưng đỏ xung quanh nướu, và rất dễ bị chảy máu khi chúng ta ăn hoặc đánh răng. Đồng thời răng cũng trở nên nhạy cảm hơn, dễ lung lay do phần nướu bị sưng, làm cho phần chân răng bị lỏng, nếu không được điều trị kịp thời sẽ dễ dẫn đến tình trạng mất răng.\r\n\r\nViêm nướu răng không phải là bệnh quá phức tạp, việc điều trị khá dễ dàng nếu như phát hiện và chữa trị trong giai đoạn đầu của bệnh.', 8, 'https://nhakhoaident.com/Images/filebrowser/viem-nuou.jpg', 1, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patience`
--

CREATE TABLE `patience` (
  `id` smallint(6) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `patience`
--

INSERT INTO `patience` (`id`, `title`, `description`) VALUES
(1, 'trẻ em', 'trẻ nhỏ, trẻ con, con trẻ, học sinh,trẻ, con tôi,cháu tôi,trẻ em'),
(2, 'trẻ sơ sinh', 'sơ sinh, trẻ mới sinh  '),
(3, 'người già', 'cao tuổi, người già, cao niên,người cao tuổi'),
(4, 'trung niên', 'trung niên, trung tuổi'),
(6, 'vị thành niên', 'thành niên, thanh niên, dậy thì'),
(7, 'người trưởng thành', 'người lớn,nguời trưởng thành,bố tôi,mẹ tôi, anh tôi, bác tôi'),
(8, 'Nữ giới', 'nữ giới, phụ khoa, chị em, mẹ,gái,phụ nữ'),
(9, 'Nam giới', 'nam giới, nam khoa,mày râu, anh em, đàn ông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qa`
--

CREATE TABLE `qa` (
  `qa_id` int(11) NOT NULL,
  `qa_title` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) NOT NULL,
  `qa_content` varchar(3000) CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `like_count` int(10) NOT NULL DEFAULT 0,
  `create_date` varchar(11) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `topic` int(11) DEFAULT NULL,
  `climate` int(11) DEFAULT NULL,
  `patience` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `qa`
--

INSERT INTO `qa` (`qa_id`, `qa_title`, `category_id`, `qa_content`, `user_id`, `parent_id`, `like_count`, `create_date`, `status`, `topic`, `climate`, `patience`) VALUES
(28, 'Răng nhiễm màu', 3, 'Làm cách nào để răng trắng?', 5, 0, 0, '01/11/2020', 1, 15, 0, 0),
(1046, '', 3, 'Bạn đến nha khoa để đc làm trắng nhé', 43, 28, 0, '04/11/2020', 1, NULL, NULL, NULL),
(1047, 'Răng khôn', 6, 'Mình bị mọc răng khôn rất đau có nên tự mua thuốc uống hay đến nha sĩ', 42, 0, 0, '09/11/2020', 1, 11, 0, 0),
(1048, 'Hơi thở có mùi', 1, 'Hơi thở của mình có mùi không biết có cách nào giải quyết không', 43, 0, 0, '20/11/2020', 1, 11, 0, 0),
(1049, 'Viêm nướu', 8, 'Mình bị viêm nướu đã tự mua thuốc uống nhưng vẫn không khỏi', 43, 0, 0, '20/11/2020', 1, 11, 0, 0),
(1050, '', 1, 'Bạn đến nha khoa Hoàng Lâm để được tư vấn và lựa chọn phương pháp trị liệu nhé', 42, 1048, 0, '20/11/2020', 1, NULL, NULL, NULL),
(1051, '', 6, 'Trước tiên bạn cần đến nha khoa để cho bác sĩ chuẩn đoán chứ đừng tự ý mua thuốc ', 43, 1047, 0, '20/11/2020', 1, 11, 0, 0),
(1052, '', 8, 'Trước tiên bạn cần đến nha khoa để cho bác sĩ chuẩn đoán chứ đừng tự ý mua thuốc ', 43, 1049, 0, '20/11/2020', 1, 11, 0, 0),
(1055, '', 1, 'dddd', 42, 1047, 0, '21/11/2020', 1, NULL, NULL, NULL),
(1058, 'Răng nhiễm màu', 3, '', 42, 0, 0, '23/11/2020', 1, 11, 0, 0),
(1060, 'Vấn đề khác', 13, '', 42, 0, 0, '25/11/2020', 1, 11, 0, 0),
(1061, 'Răng sữa', 12, '', 42, 0, 0, '25/11/2020', 1, 11, 0, 0),
(1063, '', 1, 'dddd', 42, 28, 0, '25/11/2020', 1, NULL, NULL, NULL),
(1076, 'Sâu răng', 4, '', 42, 0, 0, '26/11/2020', 1, 11, 0, 0),
(1077, 'Răng nhạy cảm', 7, '', 42, 0, 0, '26/11/2020', 1, 11, 0, 0),
(1084, 'Đau răng ', 2, '', 42, 0, 0, '26/11/2020', 1, 11, 0, 0),
(1085, 'Răng hô vẩu', 11, '', 44, 0, 0, '26/11/2020', 1, 11, 0, 0),
(1086, 'Lở loét miệng', 9, '', 44, 0, 0, '28/11/2020', 1, 11, 0, 0),
(1089, 'Răng mẻ', 5, '', 44, 0, 0, '28/11/2020', 1, 11, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topic`
--

CREATE TABLE `topic` (
  `id` smallint(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `topic`
--

INSERT INTO `topic` (`id`, `title`, `description`) VALUES
(11, 'Kiến thức', 'thì,?,.,!,\\,nên, như thế nào, làm gì, cần, cho ,ở,làm thế nào,không, hay, thường,hơn ,trong, ngoài,phân biệt,mắc,bị, chữa, vì, do,của, tác dụng, có, gì,thể, hoặc,được, bằng,để, luôn,tiếp xúc,hơi,còn,vào,sẽ,theo,những,ít,nhiều,nhỏ,lớn,rộng,hẹp,cẩn thận,phải,lây, thời,dễ, lây, nhiễm, viêm, gian,chúng,chất,nhất,đúng, sai,con, người'),
(12, 'tác hại', 'ảnh hưởng,nguy hiểm, ảnh hưởng, gây hại, hậu quả, biến chứng,tác hại,gây nên,gây ra,đáng sợ,rủi ro\r\n'),
(13, 'triệu chứng', 'biểu hiện,triệu chứng,dấu hiệu,hiện tượng,hình thái, tiến triển, trạng thái,nhận diện,đặc điểm,tình trạng'),
(14, 'cách phòng tránh', 'cách phòng,phòng tránh, dự đoán, chuẩn đoán,ngăn ngừa,để tránh,ngăn chặn, loại bỏ, cách li, phương châm, nên dùng, phương pháp, mẹo, giữ thói quen,tránh làm, nên làm,đề phòng,phòng ngừa\r\n\r\n'),
(15, 'cách chữa', 'cách chữa,mẹo, phục hồi,chữa trị,giải pháp, trị bệnh, trị chứng, giảm bớt,cải thiện, làm giảm, hồi phục,điều trị, thuốc chữa, cần dùng, cần làm ,cần thực hiện,thuốc chữa, thuốc trị, bài tập, phương pháp, giải pháp, nên dùng, nên làm,bài thuốc, chữa, tiêu sưng, tiêu độc,phải làm,cách trị,cần làm,chữa bệnh'),
(16, 'kiêng kị', 'không nên, loại bỏ, tuyệt đối,tránh xa,nhận biết, kiêng kị, kiêng ,cảnh giác'),
(17, 'đối tượng', ' người nào , nhóm người , đối tượng , nhóm máu'),
(18, 'thời điểm', 'khi nào, thời điểm nào, thời gian nào, độ tuổi ,tháng mấy, lúc nào'),
(19, 'Nguyên nhân', 'tại sao, nguyên nhân, điều kiện,vì sao,lí do,do đâu,vì,điều gì,xuất phát');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuvan`
--

CREATE TABLE `tuvan` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` text NOT NULL,
  `TuVan` text NOT NULL,
  `topic` smallint(3) DEFAULT NULL,
  `climate` smallint(6) DEFAULT NULL,
  `patience` smallint(6) DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tuvan`
--

INSERT INTO `tuvan` (`id`, `category_id`, `title`, `TuVan`, `topic`, `climate`, `patience`, `status`) VALUES
(1, 1, 'Làm sao để hơi thở không có mùi hôi', '“Làm sao để hơi thở không có mùi hôi” Hơi thở có mùi khó chịu là một vấn đề có thể khiến bạn cảm thấy tự ti và gây trở ngại cho cuộc sống của bạn. Tuy nhiên, vấn đề này có thể được khắc phục thông qua việc chăm sóc răng miệng đúng cách cùng với việc tránh các đồ uống và thực phẩm khiến cho hơi thở có mùi khó chịu. Các biện pháp trị chứng hơi thở có mùi khó chịu khác, chẳng hạn như nhai một số loại thảo mộc và gia vị, luôn giữ cho miệng không bị khô và tránh sử dụng thuốc lá, cũng có thể tạo ra sự khác biệt. Biết được đâu là những thói quen có lợi và đâu là những thói quen có hại có thể giúp bạn giải quyết được vấn đề.\n PHÒNG KHÁM NHA KHOA ĐÀ NẴng\n   \n   Hotline: 098.123.1234 <br>', 11, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `dental_address` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `categorize` varchar(100) DEFAULT NULL,
  `open_time` varchar(100) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`, `phone`, `role`, `create_date`, `dental_address`, `link`, `categorize`, `open_time`, `status`) VALUES
(1, 'Paris', 'lamNH@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0267685498	', 2, '02/11/2020', '459 Lê Duẩn, Thanh Khê, Đà Nẵng', 'https://nhakhoaparis.vn/', 'Nha khoa', '7AM-7PM', 1),
(2, 'Đại Nam Sài Gòn', 'CongPH@vnext.com.vn', 'e10adc3949ba59abbe56e057f20f883e', '0564446574', 2, '02/11/2020', '52 Lê Đình Lý, Thanh Khê, Dà Nẵng', 'https://nhakhoadainamsaigon.com/', 'Nha khoa', '7AM-9PM', 1),
(3, 'My Smile', 'hoanganh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '045198481', 2, '02/11/2020', '19 Trưng Nũ Vương, Đà Nẵng', 'https://mysmileclinic.vn/', 'Nha khoa', '8PM-9PM', 1),
(4, 'Thẩm mỹ Đà Nẵng', 'nhan2019@vnext.com', 'e10adc3949ba59abbe56e057f20f883e', '0159754664', 2, '02/11/2020', '111 Nguyễn Phong Sắc, Đà Nẵng', 'http://nhakhoadanang.vn/', 'Nha khoa', '8AM-5PM', 1),
(5, 'Việt Pháp', 'thuctinh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '07654654', 2, '02/11/2020', '65 Nguyễn Thị Minh Khai, Đà Nẵng', 'https://nhakhoavietphapdn.com/', 'Nha khoa ', '7AM-7PM', 1),
(6, 'Việt Đức', 'vietduc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0425161342', 2, '04/11/2020', '123 Nguyễn Thị Minh Khai, Đà Nẵng', 'http://nhakhoavietducdn.vn/', 'Nha khoa', '7AM-9PM', 1),
(7, 'Rạng Ngời', 'rangngoi@gmail.com', '7ae37ba4566976e715a4642042e24879', '0123211321', 2, '07/12/2020', '29 Nguyễn Hữu Thọ, Hải Châu, Đà Nẵng', 'http://nhakhoarangngoi.com/', 'Nha khoa', '8AM-9PM', 1),
(8, 'Quang Hải', 'quanghai@gmail.com', '8dc6ef536fdadaa74b130f0ad27ea410', '0992312321', 2, '07/12/2020', '111 Nguyễn Phong Sắc, P. Khuê Trung, Q. Cẩm Lệ', 'http://nhakhoaquanghai.com/', 'Nha khoa', '7AM-7PM', 1),
(9, 'Việt Khương', 'vietkhuong@gmail.com', '8dc6ef536fdadaa74b130f0ad27ea410', '0123456789', 2, '07/12/2020', ' 65 Nguyễn Thị Minh Khai , Đà Nẵng', 'https://nhakhoadanang.com/', 'Nha khoa', '7AM-7PM', 1),
(10, 'Hoàng Mỹ', 'hoangmy@gmail.com', '8dc6ef536fdadaa74b130f0ad27ea410', '0123211321', 2, '07/12/2020', '72 Pasteur, Đà Nẵng', 'http://nhakhoathammydanang.com.vn/', 'Nha khoa', '8AM-9PM', 1),
(11, 'DR Bão', 'drbao@gmail.com', '8dc6ef536fdadaa74b130f0ad27ea410', '0123456789', 2, '07/12/2020', '19 Trần Cao Vân, Quận Thanh Khê, Đà Nẵng', 'https://drbao-clinic.com/', 'Nha khoa', '9AM-7PM', 1),
(12, 'Lê Văn Hà', 'levanha@gmail.com', '8dc6ef536fdadaa74b130f0ad27ea410', '0123211321', 2, '07/12/2020', '198 Quang Trung, Q. Hải Châu, Tp. Đà Nẵng', 'http://www.nhakhoalevanha.com/vn/trang-chu/', 'Nha khoa', '7AM-7PM', 1),
(42, 'duẫn', 'dangvanduan755@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0123456789', 1, '07/11/2020', '', '', '', '', 1),
(43, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0394073759', 3, '20/11/2020', '', '', '', '', 1),
(44, 'Huy', 'huy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0123211321', 1, '26/11/2020', '', '', '', '', 1),
(60, 'Hưng', 'hung@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0123456789', 1, '01/12/2020', '', '', '', '', 1),
(61, 'Thiện', 'thien@gmail.com', '98efcf234a091e382b8c53d163f4c8f1', '0123211321', 1, '01/12/2020', '', '', '', '', 1),
(62, 'Huy', 'huy@gmail.com', 'a9e613cb8ecebd0517fbe86c75e5720c', '0123456789', 1, '01/12/2020', '', '', '', '', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categoty`
--
ALTER TABLE `categoty`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `climate`
--
ALTER TABLE `climate`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dental`
--
ALTER TABLE `dental`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `topic` (`topic`),
  ADD KEY `climate` (`climate`),
  ADD KEY `patience` (`patience`);

--
-- Chỉ mục cho bảng `patience`
--
ALTER TABLE `patience`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`qa_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tuvan`
--
ALTER TABLE `tuvan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `climate` (`climate`),
  ADD KEY `patience` (`patience`),
  ADD KEY `topic` (`topic`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categoty`
--
ALTER TABLE `categoty`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `climate`
--
ALTER TABLE `climate`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `patience`
--
ALTER TABLE `patience`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `qa`
--
ALTER TABLE `qa`
  MODIFY `qa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1090;

--
-- AUTO_INCREMENT cho bảng `topic`
--
ALTER TABLE `topic`
  MODIFY `id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tuvan`
--
ALTER TABLE `tuvan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `added_on`, `type`) VALUES
(25, 'Xin chafo', '2020-12-12 08:55:52', 'user'),
(26, 'Thưa quý khách, hiện tại tôi chưa hiểu được yêu cầu của Quý khách.', '2020-12-12 08:55:52', 'bot'),
(27, 'asdasdasd', '2020-12-12 02:30:23', 'user'),
(28, 'Thưa quý khách, hiện tại tôi chưa hiểu được yêu cầu của Quý khách.', '2020-12-12 02:30:23', 'bot'),
(29, 'xin chào', '2020-12-12 02:30:55', 'user'),
(30, 'Kính chào Quý khách!', '2020-12-12 02:30:55', 'bot'),
(31, 'ádasdasd', '2020-12-12 02:43:39', 'user'),
(32, 'Thưa quý khách, hiện tại tôi chưa hiểu được yêu cầu của Quý khách.', '2020-12-12 02:43:39', 'bot'),
(33, 'câu hỏi nè', '2020-12-12 03:17:48', 'user'),
(34, '123123', '2020-12-12 03:17:48', 'bot'),
(35, 'câu hỏi nè', '2020-12-12 03:28:06', 'user'),
(36, 'Thưa quý khách, hiện tại tôi chưa hiểu được yêu cầu của Quý khách.', '2020-12-12 03:28:06', 'bot'),
(37, 'xin chao', '2020-12-12 05:08:39', 'user'),
(38, 'Kính chào Quý khách!', '2020-12-12 05:08:39', 'bot'),
(39, 'cam on', '2020-12-12 05:10:46', 'user'),
(40, 'Thưa quý khách, hiện tại tôi chưa hiểu được yêu cầu của Quý khách.', '2020-12-12 05:10:46', 'bot'),
(41, 'cảm ơn', '2020-12-12 05:11:04', 'user'),
(42, 'Dạ không có gì, đó là trách nhiệm của em mà!', '2020-12-12 05:11:04', 'bot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `replies` varchar(5000) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, '|hello there|good morning|good evening|hey there|let\'s go|hey dude|goodmorning|goodevening|good afternoon|xin chào|chào bạn|hello|hi|hey|mình có vài câu hỏi|có ai giúp mình không|bạn ơi|anh ơi|chị ơi|cháu ơi|chào|có ai ở đây không?|chào anh|chào chị|chào bạn|chào buổi sáng|chào buổi tối|chào buổi chiều|chào em|chào đằng ấy|này|này ơi|bạn gì đó ơi|ê mày', 'Kính chào Quý khách!'),
(2, '|good afternoon|good bye|see you later|good night|bye|goodbye|have a nice day|see you around|bye bye|see you later|tạm biệt|chào tạm biệt|chào tạm biệt em|tạm biệt em|tạm biệt em nhé', 'Xin chào và hẹn gặp lại quý khách ạ!'),
(3, '|chuẩn|hay|siêu|tuyệt|cám ơn|thanks|thank you|giỏi|tốt|khá lắm|ngoan|ok|oke|oki|okela|cảm ơn em|cảm ơn em nhiều nhé|cảm ơn|cảm ơn em nhá|thanks em nha|cảm ơn nha|good job|thank you|cảm ơn bot nha|thanks bot|cảm ơn|thank you so much|great! Thanks', 'Dạ không có gì, đó là trách nhiệm của em mà!'),
(4, 'bạn tên gì|tên gì|chị tên gì|anh tên gì|tên của bạn là gì|tên của chị là gì|tên của anh là gì|cho mình hỏi tên nhé|mình muốn biết tên bạn|mình muốn tiện xưng hộ hơn, cho mình biết tên nhé|để tiện xưng hộ thì tên bạn là gì|cho em xin tên của anh ạ|cho em xin tên của chị ạ|được biết tên bạn thì tốt nhỉ|vui lòng cho mình biết tên nhé|xin phép hỏi tên của bạn|vậy thì tên bạn là gì|tên bạn trong tiếng việt là gì|bạn có vui lòng cho mình biết tên được không|chúng ta nên biết tên nhau nhỉ?|em tên là gì thế|tên em là gì|tên em|tên bạn|bạn tên là gì|bạn tên gì thế|em tên gì', 'Em họ Chat, tên Bot! Người ta hay gọi em là ChatBot thông minh xinh đẹp giỏi giang nhất vũ trụ ạ! Quý khách cần trợ giúp gì ạ?|Em họ Chat, tên Bot! Người ta hay gọi em là ChatBot thông minh xinh đẹp giỏi giang nhất vũ trụ ạ! Quý khách cần trợ giúp gì ạ?'),
(7, '|bạn có thể làm được những gì|bạn giúp được gì nào|chức năng của bạn là gì|bạn có thể làm được mấy chức năng|bạn giỏi nhất làm gì|bạn có tư vấn giúp mình được không|việc gì bạn làm được|kể xem bạn làm được gì|cho mình biết bạn làm được gì nhé|bạn hữu dụng như thế nào|bạn có ích trong những việc gì|lĩnh vực gì bạn giỏi nhất|mình tò mò về những việc bạn làm được|chẳng biết bạn làm được gì|bạn tệ nhất trong việc gì|bạn biết được những lĩnh vực gì|bạn giỏi hỗ trợ nhất trong lĩnh vực gì|kể cho mình biết những việc bạn có thể làm được nhé|nói cho mình về những việc bạn giúp được mình|bạn giúp được mình gì nào|bạn có thể làm gì|em giúp được gì|em làm được gì|mày biết làm gì|em biết làm gì|bạn biết làm gì|biết làm gì|làm được gì|có làm được gì|có làm được trò gì|giúp giúp cái gì|biết gì mà nói|làm được gì|giúp được gì|mày làm được gì|có biết gì', 'Em có thể làm được rất nhiều thứ: hát, đọc thơ, đọc chuyện...nhưng giờ em chỉ chat thôi!'),
(9, '123', 'Đây là số 123'),
(10, '|retrieval action là gì thế? |cho tôi biết về retrieval actions |retrieval action dùng để làm gì |tại sao lại cần retrieval actions', 'Retrieval action là một dạng action trong Rasa được thiết kế để xử lý các câu hỏi dạng FAQ'),
(11, '|Các loại chatbot hiện nay |Tôi muốn biết về các loại Chatbot |Em có thể cho anh thông tin về các loại Chatbot không? |Có mấy loại Chatbot |Mấy loại Chatbot |Loại Chatbot', 'Có nhiều cách để phân loại chatbot. Nếu xét theo khía cạnh dịch vụ thì có thể chia chatbot thành 2 loại, đó là: Chatbot bán hàng & Chatbot chăm sóc khách hàng'),
(12, '|Rasa là gì? |Tôi muốn biết về Rasa |Em có thể cho anh thông tin về Rasa không? |Rasa là gì', 'Rasa là một nền tảng chabot.'),
(13, '|Tôi muốn biết về Chatbot |Em có thể cho anh thông tin về Chatbot không? |Chatbot là gì |Thế nào là chatbot |Định nghĩa chatbot |Chatbot được định nghĩa như thế nào |Chatbot', 'Chatbot là một chương trình kết hợp với trí tuệ nhân tạo (AI) để tương tác với con người. Công cụ này thay thế cho nhân viên để tư vấn trả lời những gì khách hàng thắc mắc.'),
(14, '|Cho hỏi nha khoa ở quận Hải Châu |Hải Châu |Nha khoa ở Hải Châu Đà Nẵng |Nha khoa Hải Châu |Nha khoa ở Hải Châu |Các nha khoa ở Hải Châu |Nha khoa ở quận Hải Châu |Thống kê nha khoa ở Hải Châu |Thống kê nha khoa Hải Châu |Nha khoa Hải Châu - Đà Nẵng |Quận Hải Châu |Cho anh hỏi nha khoa ở Hải Châu |Cho mình hỏi các nha khoa ở Hải Châu |Hải Châu - Đà Nẵng', 'Danh Sách Nha Khoa Tốt Nhất Quận Hải Châu – Đà Nẵng  1. Nha khoa Rạng Ngời  Địa chỉ: 29 Nguyễn Hữu Thọ, Hải Châu, Đà Nẵng, Việt Nam  Số điện thoại: (0511) 3614 766  2. Trung tâm nha khoa Việt Khương  Địa chỉ: 207 Hùng Vương, Quận Hải Châu, TP. Đà Nẵng  Số điện thoại: (0511) 386 75 75  3. Nha khoa IDC DANANG  Địa chỉ: 203 Trần Phú, Quận Hải Châu, TP.Đà Nẵng.  Số điện thoại: 0511.388 6588  Email: dentalinfo@idcdanang.com  4. Phòng răng hàm mặt Bảo Phúc  Địa chỉ: 59 Hải Phòng, Quận Hải Châu, TP.Đà Nẵng.  Số điện thoại: (0511) 3892302  5. Nha khoa thẩm mỹ Pasteur  Địa chỉ: 62 Pasteur, Quận Hải Châu, TP.Đà Nẵng.  Số điện thoại: (0511) 3837442  6. Nha khoa Phan Dũng  Địa chỉ: 148 Hải Phòng, Quận Hải Châu, TP.Đà Nẵng.  Số điện thoại: (0511) 3827729  7. Phòng khám nha khoa Minh Sanh  Địa chỉ: 476 Hoàng Diệu, Quận Hải Châu, TP.Đà Nẵng.  Số điện thoại: (0511) 3550441  8. Phòng khám nha khoa Đông Tây Hội Ngộ  Địa chỉ: 22 Trần Bình Trọng, Q.Hải Châu, TP.Đà Nẵng.  Số điện thoại: (0511) 3810319  9. Phòng khám nha khoa Bác Sĩ Hồng Minh  Địa chỉ: 97 Hải Phòng, Q.Hải Châu, TP.Đà Nẵng.  Số điện thoại: (0511) 389 1508  10. Nha khoa Lê Văn Hà  Địa chỉ: 198 Quang Trung, Quận Hải Châu, TP.Đà Nẵng.  11. Nha khoa Ngọc Tuyên  Địa chỉ: 102 Lý Tự Trọng, Q.Hải Châu, Thành phố Đà Nẵng.  Số điện thoại: (0511) 388 6747  12. Nha khoa Phương Đông  Địa chỉ: 41 Lê Hồng Phong, Quận Hải Châu, Thành phố Đà Nẵng.  Số điện thoại: (0511) 3821176  13. Nha khoa Phương Anh  Địa chỉ: 47 Trần Tổng, Q.Hải Châu, TP.Đà Nẵng.  Số điện thoại: (0511) 3655669  14. Nha khoa Thanh Sơn  Địa chỉ: 390 Đống Đa, Q.Hải Châu, TP.Đà Nẵng.  Số điện thoại: (0511) 3886181  15. Nha khoa Minh Thu  Địa chỉ: 63 Phan Đăng Lưu, Q.Hải Châu, TP.Đà Nẵng.  Số điện thoại: 0905042048  16. Nha khoa Quang Tuấn  Địa chỉ: 35 Tiên Sơn 6, Phường Hòa Cường Nam, Q.Hải Châu, TP.Đà Nẵng.  17. Nha Khoa Vàng  Địa chỉ: 179 Lê Duẩn, Phường Thạch Thang, Q.Hải Châu, TP.Đà Nẵng.  18. Nha khoa Minh Phương  Địa chỉ: 64 Hải Hồ, P. Thanh Bình, Q.Hải Châu, TP.Đà N'),
(15, '|Cho hỏi nha khoa ở quận Thanh Khê |Thanh Khê |Nha khoa ở Thanh Khê Đà Nẵng |Nha khoa Thanh Khê |Nha khoa ở Thanh Khê |Các nha khoa ở Thanh Khê |Nha khoa ở quận Thanh Khê |Thống kê nha khoa ở Thanh Khê |Thống kê nha khoa Thanh Khê |Nha khoa Thanh Khê - Đà Nẵng |Quận Thanh Khê |Cho anh hỏi nha khoa ở Thanh Khê |Cho mình hỏi các nha khoa ở Thanh Khê |Thanh Khê - Đà Nẵng', 'Danh Sách Nha Khoa Tốt Nhất Quận Thanh Khê – Đà Nẵng  1. Phòng răng Lâm Thanh Phong  Địa chỉ: 92 Thái Thị Bôi, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  Số điện thoại: (0511) 3649589  2. Phòng răng bác sĩ Tăng Kim Sinh  Địa chỉ: 279 Lê Duẩn, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  Số điện thoại: (0511) 3891957  3. Nha Khoa Vũ Đình Châu  Địa chỉ: 50 Lý Thái Tổ, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  Số điện thoại: (0511) 383 7193  4. Trung tâm răng hàm mặt  Địa chỉ: 435 Lê Duẩn, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  Số điện thoại: (0511) 3893079  5. Phòng khám nha khoa Tôn Thất Thắng  Địa chỉ: 197 Lê Duẩn, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  Số điện thoại: (0511) 3826398  6. Phòng khám nha khoa Vinh Sơn  Địa chỉ: 158 Ông Ích Khiêm, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  Số điện thoại: (0511) 383 3056  7. Nha Khoa Việt Khương  Địa chỉ: 383 Điện Biên Phủ, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  Số điện thoại: (0511) 372 5888  8. Nha Khoa Đà Nẵng  Địa chỉ: 289 Hải Phòng, phường Tân Chính, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  9. Nha Khoa Nụ Cười Vàng  Địa chỉ: 365 Lê Duẩn, Phương Tân Chính, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  10. Nha Khoa Thẩm Mỹ Bác Sĩ Dung  Địa chỉ: 258 Trần Cao Vân, P. Tam Thuận, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  11. Nha Khoa Thanh Châu  Địa chỉ: 96 Ông Ích Khiêm, P.Tam Thuận, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  12. Nha Khoa Phan Dũng  Địa chỉ: 148A Hải Phòng, P.Tân Chính, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  13. Nha Khoa Hồng Hoa  Địa chỉ: 128 Hải Phòng, P.Tân Chính, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  14. Nha Khoa Thẩm Mỹ Dr.Long  Địa chỉ: 157 Hải Phòng, P.Tân Chính, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  15. Phòng Răng Tuyết Luận – Hà Huy Tập  Địa chỉ: 273 Hà Huy Tập, P.Chính Gián, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  16. Phòng Răng 635  Địa chỉ: 635 Điện Biên Phủ, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  17. Phòng Răng Lê Hưng  Địa chỉ: 143 Điện Biên Phủ, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  18. Nha Khoa Gia Đình Nguyễn Hoàng Hương  Địa chỉ: 408 Lê Duẩn, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  19. Phòng Răng Nha Sĩ Mỹ Linh  Địa chỉ: 412 Lê Duẩn, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  20. Trung tâm răng hàm mặt  Địa chỉ: 435 Lê Duẩn, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  21. Nha Khoa Ngân Hà  Địa chỉ: 446 Lê Duẩn, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  22. Phòng Răng Thẩm Mỹ - Nguyễn Phước Nguyên  Địa chỉ: 164 Nguyễn Phước Nguyên, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  23. Nha Khoa 3D  Địa chỉ: 520 Trường Chinh, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  24. Nha Khoa Vũ Duy Hưng  Địa chỉ: 26 Hàm Nghi, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  25. Phòng Răng Nét Duyên  Địa chỉ: 119 Lê Độ, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  26. Phòng Răng Bảo An  Địa chỉ: 277 Trần Cao Vân, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam.  Trên đây là danh sách các nha khoa tốt nhất tại quận Thanh Khê, thành phố Đà Nẵng. Chúng tôi sẽ tiếp tục cập nhật khi có thêm địa chỉ mới.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
