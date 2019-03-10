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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='管理员基础信息表';

-- 正在导出表  teastucnct.admin_user_tb 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `admin_user_tb` DISABLE KEYS */;
INSERT INTO `admin_user_tb` (`admin_id`, `admin_name`, `college_id`, `major_id`, `admin_account`, `admin_password`) VALUES
	(1, '温雪莹', 1, 1, '152014060', 'e10adc3949ba59abbe56e057f20f883e'),
	(2, 'Dalsen', 1, 3, '142014119', 'e10adc3949ba59abbe56e057f20f883e');
/*!40000 ALTER TABLE `admin_user_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.apply_record_tb 结构
CREATE TABLE IF NOT EXISTS `apply_record_tb` (
  `apply_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '申请ID',
  `apply_time` datetime NOT NULL COMMENT '申请时间',
  `apply_reason` varchar(500) NOT NULL COMMENT '申请理由',
  `apply_user_id` int(11) NOT NULL COMMENT '申请用户ID',
  `apply_user_type` int(11) NOT NULL COMMENT '申请用户的角色类型',
  `check_user_id` int(11) NOT NULL COMMENT '被查看用户ID',
  `check_user_type` int(11) NOT NULL COMMENT '被查看用户的角色类型',
  `apply_result` int(11) NOT NULL COMMENT '申请结果',
  PRIMARY KEY (`apply_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='通讯录查看申请记录表';

-- 正在导出表  teastucnct.apply_record_tb 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `apply_record_tb` DISABLE KEYS */;
INSERT INTO `apply_record_tb` (`apply_id`, `apply_time`, `apply_reason`, `apply_user_id`, `apply_user_type`, `check_user_id`, `check_user_type`, `apply_result`) VALUES
	(1, '2019-03-10 00:18:06', '111', 1, 2, 7, 2, 0),
	(2, '2019-03-10 00:18:40', '2', 1, 2, 4, 3, 1),
	(3, '2019-03-10 17:07:20', '有急事。', 1, 2, 7, 2, 2),
	(4, '2019-03-10 17:09:14', '再一次有急事', 1, 2, 8, 2, 0),
	(5, '2019-03-10 17:44:25', '申请一下', 1, 2, 11, 3, 1),
	(6, '2019-03-10 17:45:49', '又来了', 1, 2, 14, 3, 2),
	(7, '2019-03-10 17:46:16', '我来', 1, 2, 7, 2, 0);
/*!40000 ALTER TABLE `apply_record_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.college_info_tb 结构
CREATE TABLE IF NOT EXISTS `college_info_tb` (
  `college_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '学院id',
  `college_name` varchar(200) NOT NULL COMMENT '学院名称',
  `college_icon` varchar(100) NOT NULL COMMENT '学院图标',
  `college_address` varchar(300) NOT NULL COMMENT '学院地址',
  `college_introduction` varchar(500) NOT NULL COMMENT '学院简介',
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='学院基础信息表';

-- 正在导出表  teastucnct.college_info_tb 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `college_info_tb` DISABLE KEYS */;
INSERT INTO `college_info_tb` (`college_id`, `college_name`, `college_icon`, `college_address`, `college_introduction`) VALUES
	(1, '电子学院', '6553b73c621dc7cce07191df6c38fdb6.png', '二教', '123'),
	(2, '管理学院', '6553b73c621dc7cce07191df6c38fdb6.png', '四教', '123');
/*!40000 ALTER TABLE `college_info_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.edu_branch_info_tb 结构
CREATE TABLE IF NOT EXISTS `edu_branch_info_tb` (
  `edu_branch_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '部门ID',
  `edu_branch_name` varchar(50) NOT NULL DEFAULT '0' COMMENT '部门名称',
  `edu_branch_address` varchar(200) NOT NULL DEFAULT '0' COMMENT '部门地址',
  `edu_branch_introduction` varchar(500) NOT NULL DEFAULT '0' COMMENT '部门简介',
  PRIMARY KEY (`edu_branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='教学及科研部门信息表';

-- 正在导出表  teastucnct.edu_branch_info_tb 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `edu_branch_info_tb` DISABLE KEYS */;
INSERT INTO `edu_branch_info_tb` (`edu_branch_id`, `edu_branch_name`, `edu_branch_address`, `edu_branch_introduction`) VALUES
	(2, '1', '2', '3');
/*!40000 ALTER TABLE `edu_branch_info_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.feedback_tb 结构
CREATE TABLE IF NOT EXISTS `feedback_tb` (
  `fedb_id` int(11) NOT NULL AUTO_INCREMENT,
  `fedb_user_name` varchar(50) NOT NULL DEFAULT '0',
  `fedb_content` varchar(500) NOT NULL DEFAULT '0',
  `fedb_time` datetime NOT NULL,
  PRIMARY KEY (`fedb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='应用反馈表';

-- 正在导出表  teastucnct.feedback_tb 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `feedback_tb` DISABLE KEYS */;
INSERT INTO `feedback_tb` (`fedb_id`, `fedb_user_name`, `fedb_content`, `fedb_time`) VALUES
	(1, '我觉得还不错。', '钟达', '2019-03-10 00:34:47'),
	(2, '还需进一步改进。', '钟达', '2019-03-10 00:35:09');
/*!40000 ALTER TABLE `feedback_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.major_info_tb 结构
CREATE TABLE IF NOT EXISTS `major_info_tb` (
  `major_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '专业id',
  `college_id` int(11) NOT NULL COMMENT '所属学院id',
  `major_name` varchar(50) NOT NULL COMMENT '专业名称',
  `major_introduction` varchar(300) NOT NULL COMMENT '专业简介',
  PRIMARY KEY (`major_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='专业信息表';

-- 正在导出表  teastucnct.major_info_tb 的数据：~5 rows (大约)
/*!40000 ALTER TABLE `major_info_tb` DISABLE KEYS */;
INSERT INTO `major_info_tb` (`major_id`, `college_id`, `major_name`, `major_introduction`) VALUES
	(1, 1, '通信工程', '1'),
	(3, 1, '计算机软件与技术', '1'),
	(4, 2, '人力资源', '2'),
	(5, 2, '金融管理', '3'),
	(6, 2, '行政管理', '4');
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='公告表';

-- 正在导出表  teastucnct.notice_tb 的数据：~9 rows (大约)
/*!40000 ALTER TABLE `notice_tb` DISABLE KEYS */;
INSERT INTO `notice_tb` (`notice_id`, `notice_tea_id`, `notice_time`, `notice_title`, `notice_content`, `notice_read_times`, `college_id`, `major_id`, `notice_pass_review`, `notice_is_all`) VALUES
	(1, 2, '2019-03-04 21:56:37', '第一个公告的标题', '第一个公告的内容', 0, 0, 0, 1, 0),
	(2, 2, '2019-03-04 21:56:37', '1', '1', 0, 0, 0, 1, 0),
	(3, 2, '2019-03-04 21:59:09', '1', '1', 0, 1, 2, 1, 0),
	(4, 2, '2019-03-04 22:03:08', '333', '333', 0, 0, 1, 1, 0),
	(5, 2, '2019-03-04 22:07:41', '驱蚊器翁', '驱蚊器翁', 0, 0, 0, 1, 0),
	(6, 2, '2019-03-04 22:08:13', '333', '222', 0, 0, 0, 1, 0),
	(7, 2, '2019-03-04 22:11:59', '55', '55', 0, 0, 0, 1, 0),
	(8, 2, '2019-03-04 22:12:37', '撒大声地', '撒大声地', 0, 1, 2, 1, 0),
	(9, 2, '2019-03-04 22:14:28', '撒大声地所多所多所多', '奥术大师大所多', 0, 0, 0, 1, 0),
	(11, 3, '2019-03-09 16:24:37', '阿萨德', '22', 0, 1, 0, 1, 1),
	(12, 3, '2019-03-09 20:16:52', '打撒所多所多', '33', 0, 0, 0, 1, 1),
	(13, 3, '2019-03-09 20:19:40', '哈哈', '44', 0, 0, 0, 1, 1),
	(14, 0, '2019-03-09 22:46:08', '吼吼', '55', 0, 0, 0, 1, 1),
	(15, 3, '2019-03-10 00:36:27', '123', '123', 0, 0, 1, 0, 0),
	(16, 3, '2019-03-10 00:38:07', '321', '321', 0, 0, 1, 0, 0),
	(17, 3, '2019-03-10 00:38:57', '1111', '111', 0, 0, 0, 0, 0),
	(18, 3, '2019-03-10 00:40:12', '去', '的', 0, 0, 0, 0, 1),
	(19, 3, '2019-03-10 00:44:52', '得的', '5', 0, 0, 0, 0, 0),
	(20, 3, '2019-03-10 00:49:57', '44', '44', 0, 1, 1, 0, 0),
	(21, 3, '2019-03-10 00:50:18', '得的', '000', 0, 1, 3, 0, 0),
	(22, 3, '2019-03-10 00:50:49', '得的', '快快快', 0, 2, 4, 0, 0);
/*!40000 ALTER TABLE `notice_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.priv_resce_tb 结构
CREATE TABLE IF NOT EXISTS `priv_resce_tb` (
  `priv_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '权限ID',
  `priv_name` varchar(50) NOT NULL DEFAULT '0' COMMENT '权限名称',
  PRIMARY KEY (`priv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='权限资源表';

-- 正在导出表  teastucnct.priv_resce_tb 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `priv_resce_tb` DISABLE KEYS */;
/*!40000 ALTER TABLE `priv_resce_tb` ENABLE KEYS */;

-- 导出  表 teastucnct.role_info_tb 结构
CREATE TABLE IF NOT EXISTS `role_info_tb` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `role_name` varchar(50) DEFAULT NULL COMMENT '角色名称',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='角色信息表';

-- 正在导出表  teastucnct.role_info_tb 的数据：~2 rows (大约)
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

-- 正在导出表  teastucnct.role_priv_tb 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `role_priv_tb` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='学生用户基本信息表';

-- 正在导出表  teastucnct.stu_user_tb 的数据：~4 rows (大约)
/*!40000 ALTER TABLE `stu_user_tb` DISABLE KEYS */;
INSERT INTO `stu_user_tb` (`stu_id`, `role_id`, `stu_account`, `stu_password`, `stu_name`, `stu_spell`, `stu_sex`, `stu_grade`, `college_id`, `major_id`, `stu_class`, `stu_phone`, `stu_address`) VALUES
	(1, 2, '142014119', 'e10adc3949ba59abbe56e057f20f883e', '钟达', 'zhongda', '男', '2014级', 1, 1, '二班', '15622281569', '123'),
	(3, 2, '151', '2', '钟斌', 'zhongbin', '男', '2', 1, 2, '23', '321', '321'),
	(4, 2, '142014111', 'e10adc3949ba59abbe56e057f20f883e', '张三', 'zhangsan', '男', '2013级', 1, 1, '三班', '1234567', '北京'),
	(5, 2, '123123123', 'e10adc3949ba59abbe56e057f20f883e', '李同学', 'litongxue', '男', '2014级', 1, 1, '三班', '123', '123'),
	(7, 2, '152014000', 'e10adc3949ba59abbe56e057f20f883e', '安同学', 'antongxue', '女', '2015级', 1, 1, '一班', '123456', '123456'),
	(8, 2, '152014001', 'e10adc3949ba59abbe56e057f20f883e', '包同学', 'baotongxue', '男', '2015级', 1, 1, '一班', '123456', '123456'),
	(9, 2, '152014002', 'e10adc3949ba59abbe56e057f20f883e', '陈同学', 'chentongxue', '男', '2015级', 1, 1, '三班', '123456', '123456'),
	(10, 2, '152014002', 'e10adc3949ba59abbe56e057f20f883e', '陈同学', 'chentongxue', '男', '2015级', 1, 1, '三班', '123456', '123456'),
	(11, 2, '152014002', 'e10adc3949ba59abbe56e057f20f883e', '陈同学', 'chentongxue', '男', '2015级', 1, 1, '三班', '123456', '123456'),
	(12, 2, '152014002', 'e10adc3949ba59abbe56e057f20f883e', '陈同学', 'chentongxue', '男', '2015级', 1, 1, '三班', '123456', '123456'),
	(13, 2, '152014002', 'e10adc3949ba59abbe56e057f20f883e', '陈同学', 'chentongxue', '男', '2015级', 1, 1, '三班', '123456', '123456');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='教师用户基本信息表';

-- 正在导出表  teastucnct.tea_user_tb 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `tea_user_tb` DISABLE KEYS */;
INSERT INTO `tea_user_tb` (`tea_id`, `role_id`, `tea_account`, `tea_password`, `tea_name`, `tea_spell`, `tea_sex`, `college_id`, `major_id`, `tea_phone`, `tea_course`, `tea_isInstructor`) VALUES
	(2, 3, '152014060', 'e10adc3949ba59abbe56e057f20f883e', '张老师', 'zhanglaoshi', '男', 1, 1, '22', '22', 1),
	(3, 3, '142014119', 'e10adc3949ba59abbe56e057f20f883e', '钟老师', 'zhonglaoshi', '男', 1, 1, '15622281569', '数学,英语', 0),
	(4, 3, '142014119', 'e10adc3949ba59abbe56e057f20f883e', '钟老师', 'zhonglaoshi', '男', 1, 1, '15622281569', '数学,英语', 0),
	(5, 3, '142014119', 'e10adc3949ba59abbe56e057f20f883e', '钟老师', 'zhonglaoshi', '男', 1, 1, '15622281569', '数学,英语', 0),
	(6, 3, '142014119', 'e10adc3949ba59abbe56e057f20f883e', '钟老师', 'zhonglaoshi', '男', 1, 1, '15622281569', '数学,英语', 0),
	(7, 3, '142014119', 'e10adc3949ba59abbe56e057f20f883e', '钟老师', 'zhonglaoshi', '男', 1, 1, '15622281569', '数学,英语', 0),
	(8, 3, '142014119', 'e10adc3949ba59abbe56e057f20f883e', '钟老师', 'zhonglaoshi', '男', 1, 1, '15622281569', '数学,英语', 0),
	(9, 3, '142014119', 'e10adc3949ba59abbe56e057f20f883e', '钟老师', 'zhonglaoshi', '男', 1, 1, '15622281569', '数学,英语', 0),
	(10, 3, '142014119', 'e10adc3949ba59abbe56e057f20f883e', '钟老师', 'zhonglaoshi', '男', 1, 1, '15622281569', '数学,英语', 0),
	(11, 3, '142014119', 'e10adc3949ba59abbe56e057f20f883e', '钟老师', 'zhonglaoshi', '男', 1, 1, '15622281569', '数学,英语', 0),
	(12, 3, '142014119', 'e10adc3949ba59abbe56e057f20f883e', '钟老师', 'zhonglaoshi', '男', 1, 1, '15622281569', '数学,英语', 0),
	(13, 3, '142014119', 'e10adc3949ba59abbe56e057f20f883e', '钟老师', 'zhonglaoshi', '男', 1, 1, '15622281569', '数学,英语', 0),
	(14, 3, '142014119', 'e10adc3949ba59abbe56e057f20f883e', 'z老师', 'zhonglaoshi', '女', 1, 3, '15622281569', '数学,英语', 0);
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
