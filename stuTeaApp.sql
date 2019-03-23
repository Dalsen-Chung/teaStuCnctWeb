-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        8.0.15 - MySQL Community Server - GPL
-- 服务器操作系统:                      Win64
-- HeidiSQL 版本:                  9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 导出 teastucnct 的数据库结构
CREATE DATABASE IF NOT EXISTS `teastucnct` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `teastucnct`;

-- 导出  表 teastucnct.admin_user_tb 结构
CREATE TABLE IF NOT EXISTS `admin_user_tb` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员用户ID',
  `admin_name` varchar(50) NOT NULL DEFAULT '0' COMMENT '管理员姓名',
  `college_id` int(11) NOT NULL DEFAULT '0' COMMENT '管理员所属学院的ID',
  `major_id` int(11) NOT NULL DEFAULT '0' COMMENT '管理员所属专业的ID',
  `admin_account` varchar(50) NOT NULL DEFAULT '0' COMMENT '管理员账号',
  `admin_password` varchar(50) NOT NULL DEFAULT '0' COMMENT '管理员密码',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='管理员基础信息表';

-- 正在导出表  teastucnct.admin_user_tb 的数据：~2 rows (大约)
/*!40000 ALTER TABLE `admin_user_tb` DISABLE KEYS */;
INSERT INTO `admin_user_tb` (`admin_id`, `admin_name`, `college_id`, `major_id`, `admin_account`, `admin_password`) VALUES
	(1, '温雪莹', 1, 1, '152014060', 'e10adc3949ba59abbe56e057f20f883e'),
	(4, '管理员', 6, 18, 'amdin', '123456');
/*!40000 ALTER TABLE `admin_user_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.apply_record_tb 结构
CREATE TABLE IF NOT EXISTS `apply_record_tb` (
  `apply_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '申请ID',
  `apply_time` datetime NOT NULL COMMENT '申请时间',
  `apply_reason` varchar(500) NOT NULL COMMENT '申请理由',
  `apply_user_id` int(11) NOT NULL COMMENT '申请用户ID',
  `apply_user_type` int(11) NOT NULL COMMENT '申请用户的角色类型',
  `apply_user_name` varchar(50) NOT NULL COMMENT '申请用户名称',
  `check_user_id` int(11) NOT NULL COMMENT '被查看用户ID',
  `check_user_type` int(11) NOT NULL COMMENT '被查看用户的角色类型',
  `check_user_name` varchar(50) NOT NULL COMMENT '被查看用户名称',
  `apply_result` int(11) NOT NULL COMMENT '申请结果-0/1/2',
  PRIMARY KEY (`apply_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='通讯录查看申请记录表';

-- 正在导出表  teastucnct.apply_record_tb 的数据：~9 rows (大约)
/*!40000 ALTER TABLE `apply_record_tb` DISABLE KEYS */;
INSERT INTO `apply_record_tb` (`apply_id`, `apply_time`, `apply_reason`, `apply_user_id`, `apply_user_type`, `apply_user_name`, `check_user_id`, `check_user_type`, `check_user_name`, `apply_result`) VALUES
	(1, '2019-03-15 01:16:33', '查看陈九九的信息', 1, 3, '温老师', 34, 2, '陈九九', 1),
	(2, '2019-03-15 01:20:00', '有急事找白老师', 1, 3, '温老师', 8, 3, '白敬亭', 1),
	(3, '2019-03-15 01:23:01', '我想找蔡老师', 1, 3, '温老师', 6, 3, '蔡老师', 1),
	(5, '2019-03-15 01:27:16', '有急事儿找张三！', 1, 2, '温雪莹', 2, 2, '张三', 1),
	(6, '2019-03-15 01:29:18', '找郭老师请教课程问题。', 1, 2, '温雪莹', 14, 3, '郭依依', 1),
	(7, '2019-03-16 17:37:37', '查看陈同学的信息', 1, 2, '温雪莹', 34, 2, '陈九九', 1),
	(8, '2019-03-16 17:50:18', '查看叶同学的信息', 1, 2, '温雪莹', 30, 2, '叶佳佳', 0),
	(9, '2019-03-16 17:51:00', '查看李同学的信息', 1, 2, '温雪莹', 25, 2, '李冰', 0),
	(10, '2019-03-16 17:53:57', '查看蔡老师的信息', 1, 3, '温老师', 6, 3, '蔡老师', 0);
/*!40000 ALTER TABLE `apply_record_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.college_info_tb 结构
CREATE TABLE IF NOT EXISTS `college_info_tb` (
  `college_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '学院id',
  `college_name` varchar(200) NOT NULL COMMENT '学院名称',
  `college_icon` varchar(100) NOT NULL COMMENT '学院图标',
  `college_address` varchar(300) NOT NULL COMMENT '学院地址',
  `college_introduction` text NOT NULL COMMENT '学院简介',
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='学院基础信息表';

-- 正在导出表  teastucnct.college_info_tb 的数据：~6 rows (大约)
/*!40000 ALTER TABLE `college_info_tb` DISABLE KEYS */;
INSERT INTO `college_info_tb` (`college_id`, `college_name`, `college_icon`, `college_address`, `college_introduction`) VALUES
	(1, '电气与计算机工程学院', 'f0193303f53941af8b101287f8b4e114.png', '西区教学楼二号', '电气与计算机工程学院（School of Electrical and Computer Engineering，简写SECE），其前身为电子通信与软件工程系，始建于2006年，是中山大学南方学院唯一的理工学院。'),
	(2, '艺术设计与创意产业系', '96c7ed2d40eed62585720f989c9b1aaf.png', '西区教学楼四号', '艺术设计与创意产业系自建成以来，紧扣“国际化、应用型、新体验”教育方针，致力于培养高素质设计与创意创新人才。'),
	(3, '文学与传媒学院', 'f1b11fe6acd082b10900dac42c423313.png', '东区教学楼十一号', '文学与传媒学院，前身为文学系，创建于2006年，是我校最早设立的学系之一，2012年更名为文学与传媒系。'),
	(4, '云康医学与健康管理学院', '41b86ad0c86425b188c69dea6f478613.png', '东区教学楼十二号', '中山大学南方学院云康医学与健康管理学院由我校与云康集团合作办学，是国内医学检验教育首批实施校企合作办学新模式的专业学院'),
	(5, '商学院', 'a6675a0b4f6a7425d76c2bf20fa05afd.png', '东区教学楼十号', '商学院致力于培养具有国际视野、创新思维、实践能力和创业意识的应用型、复合型商界精英，坚持以大开放、大交流、大合作促进大发展的改革和发展思路，在开放化、国际化、市场化、特色化办学方面进行了积极的探索。'),
	(6, '音乐系', '1df1503bb24bdec3475ed1cf50c30adb.png', '学院音乐楼', '中山大学南方学院音乐系成立于2012年，现设有音乐学专业（音乐教育、音乐学理论及应用两个方向），面向全国招生，其它相关专业日后将陆续开设。');
/*!40000 ALTER TABLE `college_info_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.edu_branch_info_tb 结构
CREATE TABLE IF NOT EXISTS `edu_branch_info_tb` (
  `edu_branch_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '部门ID',
  `edu_branch_name` varchar(50) NOT NULL DEFAULT '0' COMMENT '部门名称',
  `edu_branch_address` varchar(200) NOT NULL DEFAULT '0' COMMENT '部门地址',
  `edu_branch_introduction` varchar(500) NOT NULL DEFAULT '0' COMMENT '部门简介',
  PRIMARY KEY (`edu_branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='教学及科研部门信息表';

-- 正在导出表  teastucnct.edu_branch_info_tb 的数据：~5 rows (大约)
/*!40000 ALTER TABLE `edu_branch_info_tb` DISABLE KEYS */;
INSERT INTO `edu_branch_info_tb` (`edu_branch_id`, `edu_branch_name`, `edu_branch_address`, `edu_branch_introduction`) VALUES
	(1, '马克思主义学院', '学院行政楼', '马克思主义学院由思想政治理论教学中心、通识教育中心与学生成长教育中心三个机构组成。'),
	(2, '大英教学中心', '东区十号教学楼', '大学英语教学中心负责我校一、二年级学生大学英语课程的教学，目前专、兼职教师共75人，其中教授2名、讲师48名、外籍教师5名。'),
	(3, '政商研究院', '东区教学楼十三号', '为实现中山大学南方学院创建一流民办大学的目标，探索本科教育体制改革的新思路，政商研究院作为中山大学南方学院教育改革的试点单位，以创新人才培养机制为突破口，以“为政商界杰出人才的成长奠定坚实的起飞基础”为宗旨，将政商研究院打造成政商界精英人才培养的摇篮，培养基础宽厚，知识、能力、素质、精神俱佳优秀学生，造就具有深厚的人文底蕴、扎实专业知识、强烈创新意识、宽广国际视野、对学院具有极强归属感的卓越学生，为其成为社会精英奠定坚实的基础。'),
	(4, '体育教学中心', '东区教学楼九号', '中山大学南方学院体育教学中心，是学院二级管理单位，主要承担我院大一、大二学生的体育教学活动，旨在锻炼学生身体、增强体质；传授基本的体育知识、技术和技能；培养学生终身体育的思想。'),
	(5, '继续教育学院', '学院行政楼', '中山大学南方学院继续教育学院是中山大学南方学院成人学历教育、非学历教育以及网络教育办学实体，学院遵循党和国家的教育方针，适应大教育、大培训的社会趋势，致力构建终身教育体系，充分整合利用校内外资源，继往开来，着力实践“优质办学服务社会”的宗旨，为社会各界提供精诚的教育服务。');
/*!40000 ALTER TABLE `edu_branch_info_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.feedback_tb 结构
CREATE TABLE IF NOT EXISTS `feedback_tb` (
  `fedb_id` int(11) NOT NULL AUTO_INCREMENT,
  `fedb_user_name` varchar(50) NOT NULL DEFAULT '0',
  `fedb_content` varchar(500) NOT NULL DEFAULT '0',
  `fedb_time` datetime NOT NULL,
  PRIMARY KEY (`fedb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='应用反馈表';

-- 正在导出表  teastucnct.feedback_tb 的数据：~3 rows (大约)
/*!40000 ALTER TABLE `feedback_tb` DISABLE KEYS */;
INSERT INTO `feedback_tb` (`fedb_id`, `fedb_user_name`, `fedb_content`, `fedb_time`) VALUES
	(1, '温老师', '用户体验有待优化。', '2019-03-15 01:25:20'),
	(2, '温雪莹', '我还蛮喜欢这个应用的。', '2019-03-15 01:26:41'),
	(3, '温雪莹', '提交应用反馈', '2019-03-16 17:51:18');
/*!40000 ALTER TABLE `feedback_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.major_info_tb 结构
CREATE TABLE IF NOT EXISTS `major_info_tb` (
  `major_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '专业id',
  `college_id` int(11) NOT NULL COMMENT '所属学院id',
  `major_name` varchar(50) NOT NULL COMMENT '专业名称',
  `major_introduction` varchar(800) NOT NULL COMMENT '专业简介',
  PRIMARY KEY (`major_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='专业信息表';

-- 正在导出表  teastucnct.major_info_tb 的数据：~18 rows (大约)
/*!40000 ALTER TABLE `major_info_tb` DISABLE KEYS */;
INSERT INTO `major_info_tb` (`major_id`, `college_id`, `major_name`, `major_introduction`) VALUES
	(1, 1, '通信与电子工程', '本系遵循中山大学南方学院“厚基础、宽口径、重实践、强能力”的教学指导思想，坚持“紧贴信息技术\r\n与市场需求、高起点、有特色、更开放”的办学理念，结合国内尤其珠三角经济社会发展的特点，以IT市场人\r\n才需求为导向进行课程设置和师资队伍建设。'),
	(2, 1, '电气工程与自动化', '电气工程与自动化系结合国内尤其是珠三角经济社会发展需求，以培养基础理论扎实、实践创新能力强的\r\n电气电子应用工程型人才为目标，注重学生动手能力、工程能力的培养，把教学与科研、职业与行业紧密结合，\r\n使学生今后走向社会能拥有更宽广施展才能的舞台。'),
	(3, 1, '计算机科学与工程系', '计算机科学与工程系已逐步建立层次完备、结构合理的学科体系，在学院的统一领导下，本着“重实践、强\r\n能力、以就业为导向”的人才培养模式，以培养创新应用型IT技能型人才为目标，坚持“以学生为本、服务社会”\r\n的理念，逐步形成特色鲜明的教学系部。'),
	(4, 2, '艺术设计学', '艺术设计学专业为中山大学南方学院2007年招生专业，迄今已11年整。2017年本专业平均就业率95%，位居全院前列。'),
	(5, 2, '数字媒体艺术', '数字媒体艺术分为两个方向：分别是数字影视制作、网络媒体设计。'),
	(6, 2, '公共艺术', '公共艺术专业分为两个方向：分别是空间设计、空间艺术。'),
	(7, 2, '数字媒体技术', '数字媒体技术下设：交互设计方向。于游戏软件公司从事数字游戏软件的策划、设计、开发、管理与运营工作，可选择传统软件行业在移动互联网应用的设计与开发。移动游戏开发项目经理、苹果游戏开发工程师、Android游戏开发工程师、游戏引擎开发工程师、三维游戏开发工程师、网页游戏工程师、游戏测试工程师、游戏策划师、软件测试工程师等。'),
	(8, 3, '汉语言文学', '培养系统掌握汉语言文学理论知识和基本技能，熟悉古今中外文学发展历史，具有丰富人文科学知识和良好人文素养，具备较强的文学鉴赏和文字应用能力，具有创新精神和实践能力的高级应用型人才。可从事各级政府机关、企事业单位以及其他与专业相关社会领域的公务行政工作，还可从事基础教育、文化产业、出版编辑、公关文秘、新闻媒体传播等岗位的工作。'),
	(9, 3, '新闻学', '培养具备系统的新闻传播理论知识与扎实的新闻业务技能、熟悉我国新闻、宣传政策法规，具有良好的人文和科技素养，富有创新精神和社会责任感的应用型专门人才。可在新闻媒体以及国家机关、行政宣传部门、企、事业公共关系部门、文化传播公司、影视制作公司，从事宣传、编辑、记者、策划、公关、管理等岗位的工作。'),
	(10, 3, '网络与新媒体', '本专业强调突出“宽阔的文科+精干的理科”的交叉型人才素质培养模式，旨在培养具备基本的网络与新媒体思维方式、系统掌握网络与新媒体传播理论知识、熟练掌握基本的网络传播技术和应用开发能力，具备良好的网络与新媒体实践能力的复合型专业人才。 具体培养方向包括数字产品内容策划、设计、研发、推广与运营、新媒体舆论环境下的公共传播、大数据分析与应用、融合新闻采编实务等。学生毕业后能够在传统新闻媒体的新媒体部门、网络与新媒体机构、数字出版企业、电子商务企业、数字营销传播机构、电信运营商、各类企业、政府部门、公益机构等地方从事网络与新媒体相关工作。'),
	(11, 4, '医学检验技术', '本专业旨在培养具有基础医学、医学检验及其相关临床医学基本理论和基本技术，熟悉临床实验室管理，具有科学创新能力和国际化视野；掌握常用临床检验仪器操作技能，文献检索、资料调查及数理统计基本方法，具备一定的科技研发能力，熟练掌握一门外国语的高级医学检验人才。'),
	(12, 5, '经济学', '本专业以市场经济发展的需要为导向，以理论与实践相结合的教学方式，致力于培养具有国际化视野、时代创新精神与开放性思维，知识面宽、综合素质高的应用型、复合型中高级人才。'),
	(13, 5, '国际经济与贸易', '本专业致力于培养掌握国际经济与国际贸易基本知识与基本理论，具有一定的国际贸易实务操作技能和实践应用能力，适应21世纪中国经济新常态与对外开放新格局，知识面宽、综合素质高的应用型、复合型中高级人才。 '),
	(14, 5, '国际商务', '本专业培养掌握现代经济学和管理学的基本理论，掌握国际商务、跨国经营管理基础理论、业务知识、专业技能，具备跨国经营、管理、策划工作能力，具有扎实的外语听、说、读、写、译能力的高素质应用型高级专门人才。'),
	(15, 5, '工商管理', '本专业培养具备掌握管理学、经济学等理论基础知识，具有工商管理通用能力及专业实际能力，具有创新精神与国际视野，综合素质高，熟悉企业管理方面的政策法规，能在工商、金融企业、事业单位和政府部门从事管理工作的复合型专门人才。'),
	(16, 5, '市场营销', '本专业培养具有宽厚的经济、管理基础理论和市场营销专业知识，具备综合运用相关知识发现、分析和解决营销实际问题的能力的高素质应用型人才。'),
	(17, 5, '物流管理', '本专业致力于培养德、智、体、美等全面发展的，具有宽厚的经济学和管理学基础知识、较高的英语水平、计算机基础技能以及扎实的物流管理和供应链管理方面的理论知识的高素质应用型人才。 '),
	(18, 6, '音乐学', '音乐系现有一个专业（音乐学专业）两个方向（音乐教育方向、音乐学理论及应用方向）。根据各方向专业培养需求，我系聘请业内知名专家学者分别拟定了一套完整的人才培养方案。');
/*!40000 ALTER TABLE `major_info_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.notice_tb 结构
CREATE TABLE IF NOT EXISTS `notice_tb` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '公告ID',
  `notice_tea_id` int(11) NOT NULL COMMENT '发布公告教师的ID',
  `notice_time` datetime NOT NULL COMMENT '发布公告的时间',
  `notice_title` varchar(200) NOT NULL DEFAULT '0' COMMENT '公告标题',
  `notice_content` text NOT NULL COMMENT '公告内容',
  `notice_read_times` int(11) NOT NULL DEFAULT '0' COMMENT '公告被浏览次数',
  `college_id` int(11) NOT NULL COMMENT '可查看的学院ID',
  `major_id` int(11) NOT NULL COMMENT '可查看的专业ID',
  `notice_pass_review` int(11) NOT NULL COMMENT '是否通过审核',
  `notice_is_all` int(11) DEFAULT NULL COMMENT '是否发送至全校',
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='公告表';

-- 正在导出表  teastucnct.notice_tb 的数据：~6 rows (大约)
/*!40000 ALTER TABLE `notice_tb` DISABLE KEYS */;
INSERT INTO `notice_tb` (`notice_id`, `notice_tea_id`, `notice_time`, `notice_title`, `notice_content`, `notice_read_times`, `college_id`, `major_id`, `notice_pass_review`, `notice_is_all`) VALUES
	(1, 1, '2019-03-15 01:11:55', '关于调整英语课课时通知', '2019年3月20日起，英语课课时将由5个课时调整为10个课时，请同学们悉知！', 9, 1, 1, 1, 1),
	(2, 1, '2019-03-15 01:36:05', '关于放假通知', '自2019年3月22日起放假两天！', 4, 1, 1, 1, 0),
	(3, 1, '2019-03-15 01:38:00', '关于计算机专业学生的公告', '计算机专业2019届毕业生可在2019年6月1日领取毕业证！', 7, 1, 3, 1, 0),
	(4, 1, '2019-03-15 01:40:31', '艺创系学生注意啦！！', '本周六英语四六级成绩出炉啦！！', 1, 2, 4, 1, 0),
	(5, 1, '2019-03-16 15:59:47', '关于电气与计算机工程学院2019年度奖学金发放的通知', '2019年度奖学金发放日期为2020年2月1日1，届时请各位同学留意手机短信，谢谢。', 5, 1, 2, 1, 0),
	(6, 1, '2019-03-16 17:53:38', '公告一', '发布一条公告', 0, 5, 14, 0, 0);
/*!40000 ALTER TABLE `notice_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.priv_resce_tb 结构
CREATE TABLE IF NOT EXISTS `priv_resce_tb` (
  `priv_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '权限ID',
  `priv_code` varchar(50) NOT NULL DEFAULT '0',
  `priv_name` varchar(50) NOT NULL DEFAULT '0' COMMENT '权限名称',
  PRIMARY KEY (`priv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='权限资源表';

-- 正在导出表  teastucnct.priv_resce_tb 的数据：~10 rows (大约)
/*!40000 ALTER TABLE `priv_resce_tb` DISABLE KEYS */;
INSERT INTO `priv_resce_tb` (`priv_id`, `priv_code`, `priv_name`) VALUES
	(1, 'loginBack', '登录系统后台'),
	(2, 'orderMgt', '工单管理'),
	(3, 'apartMgt', '机构管理'),
	(4, 'noticeMgt', '公告管理'),
	(5, 'userMgt', '用户管理'),
	(6, 'loginApp', '登录APP'),
	(7, 'applyInfo', '信息查看申请'),
	(8, 'releaseNotice', '发布公告'),
	(9, 'readAllInfo', '查看所有通讯录'),
	(10, 'readPrviInfo', '按权查看通讯录');
/*!40000 ALTER TABLE `priv_resce_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.role_info_tb 结构
CREATE TABLE IF NOT EXISTS `role_info_tb` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `role_name` varchar(50) DEFAULT NULL COMMENT '角色名称',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='角色信息表';

-- 正在导出表  teastucnct.role_info_tb 的数据：~3 rows (大约)
/*!40000 ALTER TABLE `role_info_tb` DISABLE KEYS */;
INSERT INTO `role_info_tb` (`role_id`, `role_name`) VALUES
	(1, '管理员'),
	(2, '学生'),
	(3, '教师');
/*!40000 ALTER TABLE `role_info_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.role_priv_tb 结构
CREATE TABLE IF NOT EXISTS `role_priv_tb` (
  `role_id` int(11) NOT NULL COMMENT '角色ID',
  `priv_id` int(11) NOT NULL COMMENT '权限ID',
  PRIMARY KEY (`role_id`,`priv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='角色权限表';

-- 正在导出表  teastucnct.role_priv_tb 的数据：~17 rows (大约)
/*!40000 ALTER TABLE `role_priv_tb` DISABLE KEYS */;
INSERT INTO `role_priv_tb` (`role_id`, `priv_id`) VALUES
	(1, 1),
	(1, 2),
	(1, 3),
	(1, 4),
	(1, 5),
	(1, 6),
	(1, 7),
	(1, 8),
	(1, 9),
	(1, 10),
	(2, 6),
	(2, 7),
	(2, 10),
	(3, 6),
	(3, 7),
	(3, 8),
	(3, 9);
/*!40000 ALTER TABLE `role_priv_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.stu_user_tb 结构
CREATE TABLE IF NOT EXISTS `stu_user_tb` (
  `stu_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '学生用户ID',
  `role_id` int(11) NOT NULL DEFAULT '0' COMMENT '学生角色ID',
  `stu_account` varchar(50) NOT NULL DEFAULT '0' COMMENT '学号，为登录账号',
  `stu_password` varchar(50) NOT NULL DEFAULT '0' COMMENT '登录密码',
  `stu_name` varchar(50) NOT NULL DEFAULT '0' COMMENT '学生姓名',
  `stu_spell` varchar(50) NOT NULL DEFAULT '0' COMMENT '姓名拼音',
  `stu_sex` varchar(50) NOT NULL DEFAULT '0' COMMENT '学生性别',
  `stu_grade` varchar(50) NOT NULL DEFAULT '0' COMMENT '年级',
  `college_id` int(11) NOT NULL DEFAULT '0' COMMENT '学院Id',
  `major_id` int(11) NOT NULL DEFAULT '0' COMMENT '专业Id',
  `stu_class` varchar(50) NOT NULL DEFAULT '0' COMMENT '班级',
  `stu_phone` varchar(50) NOT NULL DEFAULT '0' COMMENT '电话',
  `stu_address` varchar(200) NOT NULL DEFAULT '0' COMMENT '家庭住址',
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COMMENT='学生用户基本信息表';

-- 正在导出表  teastucnct.stu_user_tb 的数据：~37 rows (大约)
/*!40000 ALTER TABLE `stu_user_tb` DISABLE KEYS */;
INSERT INTO `stu_user_tb` (`stu_id`, `role_id`, `stu_account`, `stu_password`, `stu_name`, `stu_spell`, `stu_sex`, `stu_grade`, `college_id`, `major_id`, `stu_class`, `stu_phone`, `stu_address`) VALUES
	(1, 2, '152014060', 'e10adc3949ba59abbe56e057f20f883e', '温雪莹', 'wenxueying', '女', '2015级', 1, 1, '二班', '15622183612', '广东省广州市天河区'),
	(2, 2, '152014001', 'e10adc3949ba59abbe56e057f20f883e', '张三', 'zhangsan', '男', '2015级', 1, 2, '二班', '123456', '广东省肇庆市'),
	(3, 2, '152014002', 'e10adc3949ba59abbe56e057f20f883e', '李四', 'lisi', '男', '2015级', 1, 3, '一班', '123456', '广东省惠州市'),
	(4, 2, '152014003', 'e10adc3949ba59abbe56e057f20f883e', '王五', 'wangwu', '男', '2015级', 2, 4, '一班', '123456', '广东省广州市'),
	(5, 2, '152014004', 'e10adc3949ba59abbe56e057f20f883e', '张亮', 'zhangliang', '男', '2015级', 2, 5, '一班', '123456', '广东省广州市'),
	(6, 2, '152014005', 'e10adc3949ba59abbe56e057f20f883e', '李冰', 'libing', '女', '2015级', 2, 6, '一班', '123456', '广东省广州市'),
	(7, 2, '152014006', 'e10adc3949ba59abbe56e057f20f883e', '黄一', 'huangyi', '女', '2015级', 3, 7, '二班', '123456', '广东省东莞市'),
	(8, 2, '152014007', 'e10adc3949ba59abbe56e057f20f883e', '张三三', 'zhangsansan', '男', '2015级', 3, 8, '三班', '123456', '广东省广州市'),
	(9, 2, '152014008', 'e10adc3949ba59abbe56e057f20f883e', '李三三', 'lisansan', '女', '2015级', 3, 9, '二班', '123456', '广东省广州市'),
	(10, 2, '152014009', 'e10adc3949ba59abbe56e057f20f883e', '张一', 'zhangyi', '男', '2015级', 3, 10, '一班', '123456', '广东省广州市'),
	(11, 2, '152014010', 'e10adc3949ba59abbe56e057f20f883e', '叶佳佳', 'yejiajia', '女', '2015级', 4, 11, '二班', '123456', '广东省惠州市'),
	(12, 2, '152014011', 'e10adc3949ba59abbe56e057f20f883e', '胡三三', 'husansan', '女', '2015级', 5, 12, '三班', '123456', '广东省广州市'),
	(13, 2, '152014012', 'e10adc3949ba59abbe56e057f20f883e', '胡四四', 'husisi', '女', '2015级', 5, 13, '四班', '123456', '广东省东莞市'),
	(14, 2, '152014013', 'e10adc3949ba59abbe56e057f20f883e', '曾七七', 'zengqiqi', '男', '2015级', 5, 14, '一班', '123456', '河南省洛阳市'),
	(15, 2, '152014111', 'e10adc3949ba59abbe56e057f20f883e', '陈九九', 'chenjiujiu', '男', '2015级', 5, 15, '一班', '123456', '北京市朝阳区'),
	(16, 2, '152014015', 'e10adc3949ba59abbe56e057f20f883e', '陈四四', 'chensisi', '女', '2015级', 5, 16, '一班', '123456', '湖南省'),
	(17, 2, '152014016', 'e10adc3949ba59abbe56e057f20f883e', '肖物流', 'xiaowuliu', '男', '2015级', 5, 17, '二班', '123456', '上海市浦东新区'),
	(18, 2, '152014017', 'e10adc3949ba59abbe56e057f20f883e', '李音乐', 'liyinyue', '女', '2015级', 6, 18, '一班', '123456', '广东省深圳市'),
	(19, 2, '152014222', 'e10adc3949ba59abbe56e057f20f883e', '叶一', 'yeyi', '男', '2015级', 1, 1, '一班', '123456', '广东省广州市'),
	(20, 2, '152014222', 'e10adc3949ba59abbe56e057f20f883e', '叶二', 'yeer', '男', '2015级', 1, 1, '一班', '123456', '广东省广州市'),
	(21, 2, '152014001', 'e10adc3949ba59abbe56e057f20f883e', '张三', 'zhangsan', '男', '2015级', 1, 1, '二班', '123456', '广东省肇庆市'),
	(22, 2, '152014002', 'e10adc3949ba59abbe56e057f20f883e', '李四', 'lisi', '男', '2015级', 1, 1, '一班', '123456', '广东省惠州市'),
	(23, 2, '152014003', 'e10adc3949ba59abbe56e057f20f883e', '王五', 'wangwu', '男', '2015级', 1, 1, '一班', '123456', '广东省广州市'),
	(24, 2, '152014004', 'e10adc3949ba59abbe56e057f20f883e', '张亮', 'zhangliang', '男', '2015级', 1, 1, '一班', '123456', '广东省广州市'),
	(25, 2, '152014005', 'e10adc3949ba59abbe56e057f20f883e', '李冰', 'libing', '女', '2015级', 1, 1, '一班', '123456', '广东省广州市'),
	(26, 2, '152014006', 'e10adc3949ba59abbe56e057f20f883e', '黄一', 'huangyi', '女', '2015级', 1, 1, '二班', '123456', '广东省东莞市'),
	(27, 2, '152014007', 'e10adc3949ba59abbe56e057f20f883e', '张三三', 'zhangsansan', '男', '2015级', 1, 1, '三班', '123456', '广东省广州市'),
	(28, 2, '152014008', 'e10adc3949ba59abbe56e057f20f883e', '李三三', 'lisansan', '女', '2015级', 1, 1, '二班', '123456', '广东省广州市'),
	(29, 2, '152014009', 'e10adc3949ba59abbe56e057f20f883e', '张一', 'zhangyi', '男', '2015级', 1, 1, '一班', '123456', '广东省广州市'),
	(30, 2, '152014010', 'e10adc3949ba59abbe56e057f20f883e', '叶佳佳', 'yejiajia', '女', '2015级', 1, 1, '二班', '123456', '广东省惠州市'),
	(31, 2, '152014011', 'e10adc3949ba59abbe56e057f20f883e', '胡三三', 'husansan', '女', '2015级', 1, 1, '三班', '123456', '广东省广州市'),
	(32, 2, '152014012', 'e10adc3949ba59abbe56e057f20f883e', '胡四四', 'husisi', '女', '2015级', 1, 1, '四班', '123456', '广东省东莞市'),
	(33, 2, '152014013', 'e10adc3949ba59abbe56e057f20f883e', '曾七七', 'zengqiqi', '男', '2015级', 1, 1, '一班', '123456', '河南省洛阳市'),
	(34, 2, '152014111', 'e10adc3949ba59abbe56e057f20f883e', '陈九九', 'chenjiujiu', '男', '2015级', 1, 1, '一班', '123456', '北京市朝阳区'),
	(35, 2, '152014015', 'e10adc3949ba59abbe56e057f20f883e', '陈四四', 'chensisi', '女', '2015级', 1, 1, '一班', '123456', '湖南省'),
	(36, 2, '152014016', 'e10adc3949ba59abbe56e057f20f883e', '肖物流', 'xiaowuliu', '男', '2015级', 1, 1, '二班', '123456', '上海市浦东新区'),
	(37, 2, '152014017', 'e10adc3949ba59abbe56e057f20f883e', '李音乐', 'liyinyue', '女', '2015级', 1, 1, '一班', '123456', '广东省深圳市');
/*!40000 ALTER TABLE `stu_user_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.tea_user_tb 结构
CREATE TABLE IF NOT EXISTS `tea_user_tb` (
  `tea_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '教师用户ID',
  `role_id` int(11) NOT NULL DEFAULT '0' COMMENT '角色ID',
  `tea_account` varchar(50) NOT NULL DEFAULT '0' COMMENT '工号，为登录账号',
  `tea_password` varchar(50) NOT NULL DEFAULT '0' COMMENT '登录密码',
  `tea_name` varchar(50) NOT NULL DEFAULT '0' COMMENT '教师姓名',
  `tea_spell` varchar(50) NOT NULL DEFAULT '0' COMMENT '姓名拼音',
  `tea_sex` varchar(50) NOT NULL DEFAULT '0' COMMENT '教师性别',
  `college_id` int(11) DEFAULT NULL COMMENT '学院ID',
  `major_id` int(11) DEFAULT NULL COMMENT '专业ID',
  `tea_phone` varchar(50) DEFAULT NULL COMMENT '电话',
  `tea_course` varchar(200) DEFAULT NULL COMMENT '所有教授课程，以逗号分隔',
  `tea_isInstructor` int(2) DEFAULT NULL COMMENT '是否为辅导员',
  PRIMARY KEY (`tea_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='教师用户基本信息表';

-- 正在导出表  teastucnct.tea_user_tb 的数据：~19 rows (大约)
/*!40000 ALTER TABLE `tea_user_tb` DISABLE KEYS */;
INSERT INTO `tea_user_tb` (`tea_id`, `role_id`, `tea_account`, `tea_password`, `tea_name`, `tea_spell`, `tea_sex`, `college_id`, `major_id`, `tea_phone`, `tea_course`, `tea_isInstructor`) VALUES
	(1, 3, '152014060', 'e10adc3949ba59abbe56e057f20f883e', '温老师', 'wenlaoshi', '女', 1, 1, '15622183612', '高数,线性代数,通信原理', 0),
	(2, 3, '152014001', 'e10adc3949ba59abbe56e057f20f883e', '张老师', 'zhanglaoshi', '男', 1, 1, '123456', '单片机原理,数字电路,模拟电路', 1),
	(3, 3, '152014002', 'e10adc3949ba59abbe56e057f20f883e', '李老师', 'lilaoshi', '男', 1, 1, '123456', '单片机原理,数字电路,模拟电路', 0),
	(4, 3, '147258369', 'e10adc3949ba59abbe56e057f20f883e', '黄老师', 'huanglaoshi', '女', 1, 1, '123456', '单片机原理,数字电路,模拟电路', 0),
	(5, 3, '121252', 'e10adc3949ba59abbe56e057f20f883e', '叶老师', 'yelaoshi', '男', 1, 1, '123456', '单片机原理,数字电路,模拟电路', 0),
	(6, 3, '253692', 'e10adc3949ba59abbe56e057f20f883e', '蔡老师', 'cailaoshi', '女', 1, 1, '123456', '单片机原理,数字电路,模拟电路', 0),
	(7, 3, '1515125', 'e10adc3949ba59abbe56e057f20f883e', '许老师', 'xulaoshi', '男', 1, 1, '123132', '单片机原理,数字电路,模拟电路', 0),
	(8, 3, '565656', 'e10adc3949ba59abbe56e057f20f883e', '白敬亭', 'baijingting', '男', 1, 1, '110', '单片机原理,数字电路,模拟电路', 0),
	(9, 3, '632262', 'e10adc3949ba59abbe56e057f20f883e', '周老师', 'zhoulaoshi', '女', 1, 1, '123', '单片机原理,数字电路,模拟电路', 0),
	(10, 3, '856595', 'e10adc3949ba59abbe56e057f20f883e', '钟老师', 'zhonglaoshi', '男', 1, 1, '123', '单片机原理,数字电路,模拟电路', 0),
	(11, 3, '152014144', 'e10adc3949ba59abbe56e057f20f883e', '钱老师', 'qianlaoshi', '男', 1, 1, '123456', '高数,物理', 0),
	(12, 3, '152014999', 'e10adc3949ba59abbe56e057f20f883e', '梁老师', 'lianglaoshi', '女', 1, 1, '123', '概率论,网页开发技术', 0),
	(13, 3, '15201153', 'e10adc3949ba59abbe56e057f20f883e', '徐老师', 'xulaoshi', '男', 1, 1, '123456', '数电,模电', 0),
	(14, 3, '152011362', 'e10adc3949ba59abbe56e057f20f883e', '郭依依', 'guoyiyi', '女', 1, 1, '123', '数电,模电', 0),
	(15, 3, '152011429', 'e10adc3949ba59abbe56e057f20f883e', '叶三三', 'yesansan', '男', 1, 1, '123', '数电,模电', 0),
	(16, 3, '152013697', 'e10adc3949ba59abbe56e057f20f883e', '张一三', 'zhangyisan', '男', 1, 1, '123', '数电,模电', 0),
	(17, 3, '152013268', 'adcaec3805aa912c0d0b14a81bedb6ff', '徐一红', 'xuyihong', '男', 1, 1, '321', '高数,物理', 0),
	(18, 3, '152013213', 'e10adc3949ba59abbe56e057f20f883e', '蔡旭一', 'caixunyi', '女', 1, 1, '123', '单片机原理', 0),
	(19, 3, '153126559', 'e10adc3949ba59abbe56e057f20f883e', '钟依序', 'zhongyixu', '女', 1, 1, '123', '软件版本控制', 0);
/*!40000 ALTER TABLE `tea_user_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.user_role_tb 结构
CREATE TABLE IF NOT EXISTS `user_role_tb` (
  `user_id` bigint(20) NOT NULL COMMENT '用户ID',
  `role_id` int(11) NOT NULL COMMENT '用户角色ID',
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户角色表';

-- 正在导出表  teastucnct.user_role_tb 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `user_role_tb` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_role_tb` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
