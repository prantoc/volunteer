/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP SERVER
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : volunteer

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 21/11/2021 18:42:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int UNSIGNED NULL DEFAULT NULL,
  `order` int NOT NULL DEFAULT 1,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `categories_slug_unique`(`slug`) USING BTREE,
  INDEX `categories_parent_id_foreign`(`parent_id`) USING BTREE,
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, NULL, 1, 'Category 1', 'category-1', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `categories` VALUES (2, NULL, 1, 'Category 2', 'category-2', '2021-11-19 10:56:54', '2021-11-19 10:56:54');

-- ----------------------------
-- Table structure for data_rows
-- ----------------------------
DROP TABLE IF EXISTS `data_rows`;
CREATE TABLE `data_rows`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `data_type_id` int UNSIGNED NOT NULL,
  `field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `order` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `data_rows_data_type_id_foreign`(`data_type_id`) USING BTREE,
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 97 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_rows
-- ----------------------------
INSERT INTO `data_rows` VALUES (1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2);
INSERT INTO `data_rows` VALUES (3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3);
INSERT INTO `data_rows` VALUES (4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4);
INSERT INTO `data_rows` VALUES (5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5);
INSERT INTO `data_rows` VALUES (6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6);
INSERT INTO `data_rows` VALUES (7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7);
INSERT INTO `data_rows` VALUES (8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8);
INSERT INTO `data_rows` VALUES (9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10);
INSERT INTO `data_rows` VALUES (10, 1, 'user_belongstomany_role_relationship', 'relationship', 'voyager::seeders.data_rows.roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11);
INSERT INTO `data_rows` VALUES (11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12);
INSERT INTO `data_rows` VALUES (12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2);
INSERT INTO `data_rows` VALUES (14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3);
INSERT INTO `data_rows` VALUES (15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4);
INSERT INTO `data_rows` VALUES (16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2);
INSERT INTO `data_rows` VALUES (18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3);
INSERT INTO `data_rows` VALUES (19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4);
INSERT INTO `data_rows` VALUES (20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5);
INSERT INTO `data_rows` VALUES (21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9);
INSERT INTO `data_rows` VALUES (22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2);
INSERT INTO `data_rows` VALUES (24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3);
INSERT INTO `data_rows` VALUES (25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4);
INSERT INTO `data_rows` VALUES (26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5);
INSERT INTO `data_rows` VALUES (27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6);
INSERT INTO `data_rows` VALUES (28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7);
INSERT INTO `data_rows` VALUES (29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1);
INSERT INTO `data_rows` VALUES (30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2);
INSERT INTO `data_rows` VALUES (31, 5, 'category_id', 'text', 'Category', 0, 0, 1, 1, 1, 0, '{}', 3);
INSERT INTO `data_rows` VALUES (32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4);
INSERT INTO `data_rows` VALUES (33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5);
INSERT INTO `data_rows` VALUES (34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6);
INSERT INTO `data_rows` VALUES (35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7);
INSERT INTO `data_rows` VALUES (36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8);
INSERT INTO `data_rows` VALUES (37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9);
INSERT INTO `data_rows` VALUES (38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10);
INSERT INTO `data_rows` VALUES (39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11);
INSERT INTO `data_rows` VALUES (40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12);
INSERT INTO `data_rows` VALUES (41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13);
INSERT INTO `data_rows` VALUES (42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14);
INSERT INTO `data_rows` VALUES (43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15);
INSERT INTO `data_rows` VALUES (44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2);
INSERT INTO `data_rows` VALUES (46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3);
INSERT INTO `data_rows` VALUES (47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4);
INSERT INTO `data_rows` VALUES (48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5);
INSERT INTO `data_rows` VALUES (49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6);
INSERT INTO `data_rows` VALUES (50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7);
INSERT INTO `data_rows` VALUES (51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8);
INSERT INTO `data_rows` VALUES (52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9);
INSERT INTO `data_rows` VALUES (53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10);
INSERT INTO `data_rows` VALUES (54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11);
INSERT INTO `data_rows` VALUES (55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12);
INSERT INTO `data_rows` VALUES (56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1);
INSERT INTO `data_rows` VALUES (57, 7, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2);
INSERT INTO `data_rows` VALUES (58, 7, 'body', 'rich_text_box', 'Body', 1, 1, 1, 1, 1, 1, '{}', 6);
INSERT INTO `data_rows` VALUES (59, 7, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7);
INSERT INTO `data_rows` VALUES (60, 7, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 3);
INSERT INTO `data_rows` VALUES (61, 7, 'cat_id', 'select_dropdown', 'Category', 0, 0, 1, 1, 1, 0, '{}', 8);
INSERT INTO `data_rows` VALUES (62, 7, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\"}}', 9);
INSERT INTO `data_rows` VALUES (63, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 10);
INSERT INTO `data_rows` VALUES (64, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11);
INSERT INTO `data_rows` VALUES (66, 5, 'event_date', 'date', 'Event Date', 0, 1, 1, 1, 1, 1, '{}', 16);
INSERT INTO `data_rows` VALUES (67, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1);
INSERT INTO `data_rows` VALUES (68, 8, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 2);
INSERT INTO `data_rows` VALUES (69, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 3);
INSERT INTO `data_rows` VALUES (70, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4);
INSERT INTO `data_rows` VALUES (71, 7, 'volunteer_story_belongsto_category_relationship', 'relationship', 'category', 0, 1, 1, 1, 1, 1, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"cat_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4);
INSERT INTO `data_rows` VALUES (72, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1);
INSERT INTO `data_rows` VALUES (73, 9, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2);
INSERT INTO `data_rows` VALUES (74, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 3);
INSERT INTO `data_rows` VALUES (75, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4);
INSERT INTO `data_rows` VALUES (76, 9, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 5);
INSERT INTO `data_rows` VALUES (77, 9, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:districts,slug\"}}', 6);
INSERT INTO `data_rows` VALUES (78, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1);
INSERT INTO `data_rows` VALUES (79, 10, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2);
INSERT INTO `data_rows` VALUES (80, 10, 'position', 'text', 'Position', 0, 1, 1, 1, 1, 1, '{}', 4);
INSERT INTO `data_rows` VALUES (81, 10, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 6);
INSERT INTO `data_rows` VALUES (82, 10, 'phone', 'text', 'Phone', 0, 1, 1, 1, 1, 1, '{}', 7);
INSERT INTO `data_rows` VALUES (83, 10, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 8);
INSERT INTO `data_rows` VALUES (85, 10, 'twitter', 'text', 'Twitter', 0, 1, 1, 1, 1, 1, '{}', 10);
INSERT INTO `data_rows` VALUES (86, 10, 'linkedin', 'text', 'Linkedin', 0, 1, 1, 1, 1, 1, '{}', 11);
INSERT INTO `data_rows` VALUES (87, 10, 'dis_id', 'text', 'Dis Id', 0, 1, 1, 1, 1, 1, '{}', 12);
INSERT INTO `data_rows` VALUES (88, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 13);
INSERT INTO `data_rows` VALUES (89, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14);
INSERT INTO `data_rows` VALUES (90, 10, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:volunteer_members,slug\"}}', 3);
INSERT INTO `data_rows` VALUES (91, 10, 'volunteer_member_belongsto_district_relationship', 'relationship', 'Districts', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\District\",\"table\":\"districts\",\"type\":\"belongsTo\",\"column\":\"dis_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5);
INSERT INTO `data_rows` VALUES (92, 7, 'user_id', 'text', 'User Id', 0, 1, 1, 1, 1, 1, '{}', 12);
INSERT INTO `data_rows` VALUES (93, 7, 'volunteer_story_belongsto_volunteer_member_relationship', 'relationship', 'volunteer member', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\VolunteerMember\",\"table\":\"volunteer_members\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5);
INSERT INTO `data_rows` VALUES (94, 10, 'facebook', 'text', 'Facebook', 0, 1, 1, 1, 1, 1, '{}', 9);
INSERT INTO `data_rows` VALUES (95, 7, 'hit', 'text', 'View', 0, 1, 1, 0, 0, 0, '{}', 11);
INSERT INTO `data_rows` VALUES (96, 5, 'hit', 'text', 'View', 0, 1, 1, 0, 0, 0, '{}', 17);

-- ----------------------------
-- Table structure for data_types
-- ----------------------------
DROP TABLE IF EXISTS `data_types`;
CREATE TABLE `data_types`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `model_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `policy_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `controller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint NOT NULL DEFAULT 0,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `data_types_name_unique`(`name`) USING BTREE,
  UNIQUE INDEX `data_types_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_types
-- ----------------------------
INSERT INTO `data_types` VALUES (1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2021-11-19 10:56:53', '2021-11-19 10:56:53');
INSERT INTO `data_types` VALUES (2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2021-11-19 10:56:53', '2021-11-19 10:56:53');
INSERT INTO `data_types` VALUES (3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2021-11-19 10:56:53', '2021-11-19 10:56:53');
INSERT INTO `data_types` VALUES (4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `data_types` VALUES (5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2021-11-19 10:56:54', '2021-11-21 12:12:02');
INSERT INTO `data_types` VALUES (6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `data_types` VALUES (7, 'volunteer_stories', 'volunteer-stories', 'Volunteer Story', 'Volunteer Stories', NULL, 'App\\Models\\VolunteerStory', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-11-19 13:17:56', '2021-11-21 12:12:34');
INSERT INTO `data_types` VALUES (8, 'partners', 'partners', 'Partner', 'Partners', NULL, 'App\\Models\\Partner', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-11-19 14:22:37', '2021-11-19 14:26:55');
INSERT INTO `data_types` VALUES (9, 'districts', 'districts', 'District', 'Districts', NULL, 'App\\Models\\District', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-11-19 19:35:31', '2021-11-19 21:09:25');
INSERT INTO `data_types` VALUES (10, 'volunteer_members', 'volunteer-members', 'Volunteer Member', 'Volunteer Members', NULL, 'App\\Models\\VolunteerMember', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-11-19 20:40:05', '2021-11-20 06:14:25');

-- ----------------------------
-- Table structure for districts
-- ----------------------------
DROP TABLE IF EXISTS `districts`;
CREATE TABLE `districts`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of districts
-- ----------------------------
INSERT INTO `districts` VALUES (1, 'Dhaka', '2021-11-19 19:41:15', '2021-11-19 20:29:25', 'districts\\November2021\\wCzvnAlXUH0KvHFoTFtk.jpg', 'dhaka');
INSERT INTO `districts` VALUES (2, 'Chittagong', '2021-11-19 19:41:46', '2021-11-19 20:29:33', 'districts\\November2021\\Hbz0b2giPRiqO7IgOWnl.jpg', 'chittagong');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for menu_items
-- ----------------------------
DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE `menu_items`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_id` int UNSIGNED NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parent_id` int NULL DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parameters` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `menu_items_menu_id_foreign`(`menu_id`) USING BTREE,
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu_items
-- ----------------------------
INSERT INTO `menu_items` VALUES (1, 1, 'Dashboard', '', '_self', 'voyager-boat', '#000000', NULL, 1, '2021-11-19 10:56:54', '2021-11-19 12:13:26', 'voyager.dashboard', 'null');
INSERT INTO `menu_items` VALUES (2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2021-11-19 10:56:54', '2021-11-19 13:05:47', 'voyager.media.index', NULL);
INSERT INTO `menu_items` VALUES (3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2021-11-19 10:56:54', '2021-11-19 10:56:54', 'voyager.users.index', NULL);
INSERT INTO `menu_items` VALUES (4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2021-11-19 10:56:54', '2021-11-19 10:56:54', 'voyager.roles.index', NULL);
INSERT INTO `menu_items` VALUES (5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2021-11-19 10:56:54', '2021-11-19 19:36:44', NULL, NULL);
INSERT INTO `menu_items` VALUES (6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2021-11-19 10:56:54', '2021-11-19 13:05:47', 'voyager.menus.index', NULL);
INSERT INTO `menu_items` VALUES (7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2021-11-19 10:56:54', '2021-11-19 13:05:47', 'voyager.database.index', NULL);
INSERT INTO `menu_items` VALUES (8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2021-11-19 10:56:54', '2021-11-19 13:05:47', 'voyager.compass.index', NULL);
INSERT INTO `menu_items` VALUES (9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2021-11-19 10:56:54', '2021-11-19 13:05:47', 'voyager.bread.index', NULL);
INSERT INTO `menu_items` VALUES (10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 10, '2021-11-19 10:56:54', '2021-11-19 19:36:44', 'voyager.settings.index', NULL);
INSERT INTO `menu_items` VALUES (11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, 14, 1, '2021-11-19 10:56:54', '2021-11-19 13:05:54', 'voyager.categories.index', NULL);
INSERT INTO `menu_items` VALUES (12, 1, 'Events', '', '_self', 'voyager-news', '#000000', 14, 2, '2021-11-19 10:56:54', '2021-11-19 13:06:34', 'voyager.posts.index', 'null');
INSERT INTO `menu_items` VALUES (13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 8, '2021-11-19 10:56:54', '2021-11-19 19:36:48', 'voyager.pages.index', NULL);
INSERT INTO `menu_items` VALUES (14, 1, 'Events & Volunteer', '', '_self', 'voyager-ticket', '#000000', NULL, 5, '2021-11-19 13:05:41', '2021-11-19 13:06:49', NULL, '');
INSERT INTO `menu_items` VALUES (15, 1, 'Volunteer Stories', '', '_self', 'voyager-file-text', '#000000', 14, 3, '2021-11-19 13:17:56', '2021-11-19 13:22:40', 'voyager.volunteer-stories.index', 'null');
INSERT INTO `menu_items` VALUES (16, 1, 'Our Partners', '', '_self', 'voyager-company', '#000000', NULL, 7, '2021-11-19 14:22:37', '2021-11-19 19:40:29', 'voyager.partners.index', 'null');
INSERT INTO `menu_items` VALUES (17, 1, 'Districts', '', '_self', 'voyager-documentation', '#000000', 18, 1, '2021-11-19 19:35:31', '2021-11-19 19:40:43', 'voyager.districts.index', 'null');
INSERT INTO `menu_items` VALUES (18, 1, 'Volunteer', '', '_self', 'voyager-group', '#000000', NULL, 6, '2021-11-19 19:36:36', '2021-11-19 19:40:29', NULL, '');
INSERT INTO `menu_items` VALUES (19, 1, 'Volunteer Members', '', '_self', 'voyager-people', '#000000', 18, 2, '2021-11-19 20:40:05', '2021-11-19 21:10:39', 'voyager.volunteer-members.index', 'null');

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `menus_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (1, 'admin', '2021-11-19 10:56:54', '2021-11-19 10:56:54');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2016_01_01_000000_add_voyager_user_fields', 1);
INSERT INTO `migrations` VALUES (4, '2016_01_01_000000_create_data_types_table', 1);
INSERT INTO `migrations` VALUES (5, '2016_05_19_173453_create_menu_table', 1);
INSERT INTO `migrations` VALUES (6, '2016_10_21_190000_create_roles_table', 1);
INSERT INTO `migrations` VALUES (7, '2016_10_21_190000_create_settings_table', 1);
INSERT INTO `migrations` VALUES (8, '2016_11_30_135954_create_permission_table', 1);
INSERT INTO `migrations` VALUES (9, '2016_11_30_141208_create_permission_role_table', 1);
INSERT INTO `migrations` VALUES (10, '2016_12_26_201236_data_types__add__server_side', 1);
INSERT INTO `migrations` VALUES (11, '2017_01_13_000000_add_route_to_menu_items_table', 1);
INSERT INTO `migrations` VALUES (12, '2017_01_14_005015_create_translations_table', 1);
INSERT INTO `migrations` VALUES (13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1);
INSERT INTO `migrations` VALUES (14, '2017_03_06_000000_add_controller_to_data_types_table', 1);
INSERT INTO `migrations` VALUES (15, '2017_04_21_000000_add_order_to_data_rows_table', 1);
INSERT INTO `migrations` VALUES (16, '2017_07_05_210000_add_policyname_to_data_types_table', 1);
INSERT INTO `migrations` VALUES (17, '2017_08_05_000000_add_group_to_settings_table', 1);
INSERT INTO `migrations` VALUES (18, '2017_11_26_013050_add_user_role_relationship', 1);
INSERT INTO `migrations` VALUES (19, '2017_11_26_015000_create_user_roles_table', 1);
INSERT INTO `migrations` VALUES (20, '2018_03_11_000000_add_user_settings', 1);
INSERT INTO `migrations` VALUES (21, '2018_03_14_000000_add_details_to_data_types_table', 1);
INSERT INTO `migrations` VALUES (22, '2018_03_16_000000_make_settings_value_nullable', 1);
INSERT INTO `migrations` VALUES (23, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (24, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (25, '2016_01_01_000000_create_pages_table', 2);
INSERT INTO `migrations` VALUES (26, '2016_01_01_000000_create_posts_table', 2);
INSERT INTO `migrations` VALUES (27, '2016_02_15_204651_create_categories_table', 2);
INSERT INTO `migrations` VALUES (28, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` enum('ACTIVE','INACTIVE') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `pages_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES (1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2021-11-19 10:56:54', '2021-11-19 10:56:54');

-- ----------------------------
-- Table structure for partners
-- ----------------------------
DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of partners
-- ----------------------------
INSERT INTO `partners` VALUES (1, 'partners\\November2021\\suKuVbgo6q88bg3mrYy9.jpg', '2021-11-19 14:24:39', '2021-11-19 14:24:39');
INSERT INTO `partners` VALUES (2, 'partners\\November2021\\nFmjfdh3JyV1K2nD3ozY.jpg', '2021-11-19 14:24:46', '2021-11-19 14:24:46');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `permission_role_permission_id_index`(`permission_id`) USING BTREE,
  INDEX `permission_role_role_id_index`(`role_id`) USING BTREE,
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES (1, 1);
INSERT INTO `permission_role` VALUES (2, 1);
INSERT INTO `permission_role` VALUES (3, 1);
INSERT INTO `permission_role` VALUES (4, 1);
INSERT INTO `permission_role` VALUES (5, 1);
INSERT INTO `permission_role` VALUES (6, 1);
INSERT INTO `permission_role` VALUES (7, 1);
INSERT INTO `permission_role` VALUES (8, 1);
INSERT INTO `permission_role` VALUES (9, 1);
INSERT INTO `permission_role` VALUES (10, 1);
INSERT INTO `permission_role` VALUES (11, 1);
INSERT INTO `permission_role` VALUES (12, 1);
INSERT INTO `permission_role` VALUES (13, 1);
INSERT INTO `permission_role` VALUES (14, 1);
INSERT INTO `permission_role` VALUES (15, 1);
INSERT INTO `permission_role` VALUES (16, 1);
INSERT INTO `permission_role` VALUES (17, 1);
INSERT INTO `permission_role` VALUES (18, 1);
INSERT INTO `permission_role` VALUES (19, 1);
INSERT INTO `permission_role` VALUES (20, 1);
INSERT INTO `permission_role` VALUES (21, 1);
INSERT INTO `permission_role` VALUES (22, 1);
INSERT INTO `permission_role` VALUES (23, 1);
INSERT INTO `permission_role` VALUES (24, 1);
INSERT INTO `permission_role` VALUES (25, 1);
INSERT INTO `permission_role` VALUES (26, 1);
INSERT INTO `permission_role` VALUES (27, 1);
INSERT INTO `permission_role` VALUES (28, 1);
INSERT INTO `permission_role` VALUES (29, 1);
INSERT INTO `permission_role` VALUES (30, 1);
INSERT INTO `permission_role` VALUES (31, 1);
INSERT INTO `permission_role` VALUES (32, 1);
INSERT INTO `permission_role` VALUES (33, 1);
INSERT INTO `permission_role` VALUES (34, 1);
INSERT INTO `permission_role` VALUES (35, 1);
INSERT INTO `permission_role` VALUES (36, 1);
INSERT INTO `permission_role` VALUES (37, 1);
INSERT INTO `permission_role` VALUES (38, 1);
INSERT INTO `permission_role` VALUES (39, 1);
INSERT INTO `permission_role` VALUES (40, 1);
INSERT INTO `permission_role` VALUES (41, 1);
INSERT INTO `permission_role` VALUES (42, 1);
INSERT INTO `permission_role` VALUES (43, 1);
INSERT INTO `permission_role` VALUES (44, 1);
INSERT INTO `permission_role` VALUES (45, 1);
INSERT INTO `permission_role` VALUES (46, 1);
INSERT INTO `permission_role` VALUES (47, 1);
INSERT INTO `permission_role` VALUES (48, 1);
INSERT INTO `permission_role` VALUES (49, 1);
INSERT INTO `permission_role` VALUES (50, 1);
INSERT INTO `permission_role` VALUES (51, 1);
INSERT INTO `permission_role` VALUES (52, 1);
INSERT INTO `permission_role` VALUES (53, 1);
INSERT INTO `permission_role` VALUES (54, 1);
INSERT INTO `permission_role` VALUES (55, 1);
INSERT INTO `permission_role` VALUES (56, 1);
INSERT INTO `permission_role` VALUES (57, 1);
INSERT INTO `permission_role` VALUES (58, 1);
INSERT INTO `permission_role` VALUES (59, 1);
INSERT INTO `permission_role` VALUES (60, 1);

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `permissions_key_index`(`key`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 61 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'browse_admin', NULL, '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (2, 'browse_bread', NULL, '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (3, 'browse_database', NULL, '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (4, 'browse_media', NULL, '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (5, 'browse_compass', NULL, '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (6, 'browse_menus', 'menus', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (7, 'read_menus', 'menus', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (8, 'edit_menus', 'menus', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (9, 'add_menus', 'menus', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (10, 'delete_menus', 'menus', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (11, 'browse_roles', 'roles', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (12, 'read_roles', 'roles', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (13, 'edit_roles', 'roles', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (14, 'add_roles', 'roles', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (15, 'delete_roles', 'roles', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (16, 'browse_users', 'users', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (17, 'read_users', 'users', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (18, 'edit_users', 'users', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (19, 'add_users', 'users', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (20, 'delete_users', 'users', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (21, 'browse_settings', 'settings', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (22, 'read_settings', 'settings', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (23, 'edit_settings', 'settings', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (24, 'add_settings', 'settings', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (25, 'delete_settings', 'settings', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (26, 'browse_categories', 'categories', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (27, 'read_categories', 'categories', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (28, 'edit_categories', 'categories', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (29, 'add_categories', 'categories', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (30, 'delete_categories', 'categories', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (31, 'browse_posts', 'posts', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (32, 'read_posts', 'posts', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (33, 'edit_posts', 'posts', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (34, 'add_posts', 'posts', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (35, 'delete_posts', 'posts', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (36, 'browse_pages', 'pages', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (37, 'read_pages', 'pages', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (38, 'edit_pages', 'pages', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (39, 'add_pages', 'pages', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (40, 'delete_pages', 'pages', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `permissions` VALUES (41, 'browse_volunteer_stories', 'volunteer_stories', '2021-11-19 13:17:56', '2021-11-19 13:17:56');
INSERT INTO `permissions` VALUES (42, 'read_volunteer_stories', 'volunteer_stories', '2021-11-19 13:17:56', '2021-11-19 13:17:56');
INSERT INTO `permissions` VALUES (43, 'edit_volunteer_stories', 'volunteer_stories', '2021-11-19 13:17:56', '2021-11-19 13:17:56');
INSERT INTO `permissions` VALUES (44, 'add_volunteer_stories', 'volunteer_stories', '2021-11-19 13:17:56', '2021-11-19 13:17:56');
INSERT INTO `permissions` VALUES (45, 'delete_volunteer_stories', 'volunteer_stories', '2021-11-19 13:17:56', '2021-11-19 13:17:56');
INSERT INTO `permissions` VALUES (46, 'browse_partners', 'partners', '2021-11-19 14:22:37', '2021-11-19 14:22:37');
INSERT INTO `permissions` VALUES (47, 'read_partners', 'partners', '2021-11-19 14:22:37', '2021-11-19 14:22:37');
INSERT INTO `permissions` VALUES (48, 'edit_partners', 'partners', '2021-11-19 14:22:37', '2021-11-19 14:22:37');
INSERT INTO `permissions` VALUES (49, 'add_partners', 'partners', '2021-11-19 14:22:37', '2021-11-19 14:22:37');
INSERT INTO `permissions` VALUES (50, 'delete_partners', 'partners', '2021-11-19 14:22:37', '2021-11-19 14:22:37');
INSERT INTO `permissions` VALUES (51, 'browse_districts', 'districts', '2021-11-19 19:35:31', '2021-11-19 19:35:31');
INSERT INTO `permissions` VALUES (52, 'read_districts', 'districts', '2021-11-19 19:35:31', '2021-11-19 19:35:31');
INSERT INTO `permissions` VALUES (53, 'edit_districts', 'districts', '2021-11-19 19:35:31', '2021-11-19 19:35:31');
INSERT INTO `permissions` VALUES (54, 'add_districts', 'districts', '2021-11-19 19:35:31', '2021-11-19 19:35:31');
INSERT INTO `permissions` VALUES (55, 'delete_districts', 'districts', '2021-11-19 19:35:31', '2021-11-19 19:35:31');
INSERT INTO `permissions` VALUES (56, 'browse_volunteer_members', 'volunteer_members', '2021-11-19 20:40:05', '2021-11-19 20:40:05');
INSERT INTO `permissions` VALUES (57, 'read_volunteer_members', 'volunteer_members', '2021-11-19 20:40:05', '2021-11-19 20:40:05');
INSERT INTO `permissions` VALUES (58, 'edit_volunteer_members', 'volunteer_members', '2021-11-19 20:40:05', '2021-11-19 20:40:05');
INSERT INTO `permissions` VALUES (59, 'add_volunteer_members', 'volunteer_members', '2021-11-19 20:40:05', '2021-11-19 20:40:05');
INSERT INTO `permissions` VALUES (60, 'delete_volunteer_members', 'volunteer_members', '2021-11-19 20:40:05', '2021-11-19 20:40:05');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `category_id` int NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `event_date` datetime NULL DEFAULT NULL,
  `hit` int NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `posts_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (1, 1, 1, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p><span style=\"color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f8f8f8;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits&nbsp;</span><span style=\"background-color: #f8f8f8; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits&nbsp;</span><span style=\"background-color: #f8f8f8; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits</span></p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-11-19 10:56:54', '2021-11-19 14:18:11', '2021-11-19 00:00:00', 0);
INSERT INTO `posts` VALUES (2, 1, 1, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p><span style=\"color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f8f8f8;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits&nbsp;</span><span style=\"background-color: #f8f8f8; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits&nbsp;</span><span style=\"background-color: #f8f8f8; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits</span></p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-11-19 10:56:54', '2021-11-19 14:18:20', '2021-11-18 00:00:00', 0);
INSERT INTO `posts` VALUES (3, 1, 1, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p><span style=\"color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f8f8f8;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits&nbsp;</span><span style=\"background-color: #f8f8f8; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits&nbsp;</span><span style=\"background-color: #f8f8f8; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits</span></p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-11-19 10:56:54', '2021-11-19 13:48:58', NULL, 0);
INSERT INTO `posts` VALUES (4, 1, 1, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p><span style=\"color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f8f8f8;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits&nbsp;</span><span style=\"background-color: #f8f8f8; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits&nbsp;</span><span style=\"background-color: #f8f8f8; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits</span></p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-11-19 10:56:54', '2021-11-19 13:49:06', NULL, 0);
INSERT INTO `posts` VALUES (5, 1, 1, 'gsfgsfdg', NULL, NULL, '<p><span style=\"color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f8f8f8;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor&nbsp;</span><span style=\"background-color: #f8f8f8; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor</span></p>', 'posts\\November2021\\zPi3qtQzN19OlJJtUm43.jpg', 'gsfgsfdg', NULL, NULL, 'PUBLISHED', 1, '2021-11-19 14:18:01', '2021-11-21 12:39:02', '2021-11-20 00:00:00', 12);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'admin', 'Administrator', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `roles` VALUES (2, 'user', 'Normal User', '2021-11-19 10:56:54', '2021-11-19 10:56:54');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT 1,
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `settings_key_unique`(`key`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site');
INSERT INTO `settings` VALUES (2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site');
INSERT INTO `settings` VALUES (3, 'site.logo', 'Site Logo', 'settings\\November2021\\bVBngkQSkYr0MA3SXS9T.jpg', '', 'image', 3, 'Site');
INSERT INTO `settings` VALUES (4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site');
INSERT INTO `settings` VALUES (5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin');
INSERT INTO `settings` VALUES (6, 'admin.title', 'Admin Title', 'Volunteer', '', 'text', 1, 'Admin');
INSERT INTO `settings` VALUES (7, 'admin.description', 'Admin Description', 'Welcome to Volunteer Admin Panel', '', 'text', 2, 'Admin');
INSERT INTO `settings` VALUES (8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin');
INSERT INTO `settings` VALUES (9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin');
INSERT INTO `settings` VALUES (10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');
INSERT INTO `settings` VALUES (11, 'site.favicon', 'Favicon', 'settings\\November2021\\nw04s5nuQ9pJcdZL3gWH.jpg', NULL, 'image', 6, 'Site');
INSERT INTO `settings` VALUES (12, 'site.footer_desc', 'Footer Description', 'fsgdfghdfghdghds', NULL, 'text_area', 7, 'Site');
INSERT INTO `settings` VALUES (13, 'site.facebook', 'Facebook Link', 'gffsgsg', NULL, 'text', 8, 'Site');
INSERT INTO `settings` VALUES (14, 'site.youtube', 'Youtube Link', 'gfgfsdgsd', NULL, 'text', 9, 'Site');
INSERT INTO `settings` VALUES (15, 'site.twitter', 'Twitter Link', 'hfhs', NULL, 'text', 10, 'Site');
INSERT INTO `settings` VALUES (16, 'site.skype', 'Skype Link', 'dhdfhgd', NULL, 'text', 11, 'Site');
INSERT INTO `settings` VALUES (17, 'site.gplus', 'Google Plus', 'https://mail.google.com/', NULL, 'text', 12, 'Site');
INSERT INTO `settings` VALUES (18, 'site.phone', 'Phone Number', '+8801234567891', NULL, 'text', 13, 'Site');
INSERT INTO `settings` VALUES (19, 'site.address', 'Address', '202/Kha, Haji Solim Uddin Lane, Flat -7A, Middle Badda, Dhaka-1212', NULL, 'text_area', 14, 'Site');
INSERT INTO `settings` VALUES (20, 'site.mail', 'Mail', 'info@volunteer.test', NULL, 'text', 15, 'Site');
INSERT INTO `settings` VALUES (21, 'site.secone', 'Home section one', '<h3><span style=\"color: #808080;\"><strong>VOICE OF BANGLADESH EDUCATION PROGRAM</strong></span></h3>\r\n<p>Voice of Bangladesh School Project was launched in 2008 for providing education to child labourers in Dhanmondi area.</p>', NULL, 'rich_text_box', 16, 'Site');
INSERT INTO `settings` VALUES (22, 'site.sectwo', 'Home section two', '<h3><span style=\"color: #808080;\">VOICE OF BANGLADESH EDUCATION PROGRAM</span></h3>\r\n<p>Voice of Bangladesh School Project was launched in 2008 for providing education to child labourers in Dhanmondi area.</p>', NULL, 'rich_text_box', 17, 'Site');
INSERT INTO `settings` VALUES (23, 'site.secthree', 'Home section three', '<h3><span style=\"color: #808080;\">VOICE OF BANGLADESH EDUCATION PROGRAM</span></h3>\r\n<p>Voice of Bangladesh School Project was launched in 2008 for providing education to child labourers in Dhanmondi area.</p>', NULL, 'rich_text_box', 18, 'Site');
INSERT INTO `settings` VALUES (24, 'site.secfour', 'Home section four', '<h3><span style=\"color: #808080;\">VOICE OF BANGLADESH EDUCATION PROGRAM</span></h3>\r\n<p>Voice of Bangladesh School Project was launched in 2008 for providing education to child labourers in Dhanmondi area.</p>', NULL, 'rich_text_box', 19, 'Site');

-- ----------------------------
-- Table structure for translations
-- ----------------------------
DROP TABLE IF EXISTS `translations`;
CREATE TABLE `translations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int UNSIGNED NOT NULL,
  `locale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `translations_table_name_column_name_foreign_key_locale_unique`(`table_name`, `column_name`, `foreign_key`, `locale`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of translations
-- ----------------------------
INSERT INTO `translations` VALUES (1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (21, 'menu_items', 'title', 2, 'pt', 'Media', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (26, 'menu_items', 'title', 4, 'pt', 'Funções', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (28, 'menu_items', 'title', 6, 'pt', 'Menus', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2021-11-19 10:56:54', '2021-11-19 10:56:54');
INSERT INTO `translations` VALUES (30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2021-11-19 10:56:54', '2021-11-19 10:56:54');

-- ----------------------------
-- Table structure for user_roles
-- ----------------------------
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles`  (
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`, `role_id`) USING BTREE,
  INDEX `user_roles_user_id_index`(`user_id`) USING BTREE,
  INDEX `user_roles_role_id_index`(`role_id`) USING BTREE,
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_roles
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` bigint UNSIGNED NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `settings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  INDEX `users_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$NaeEStPsIs0ZvCD713tROeQqxF7mEe/5oUaew/nKnwaT8FM3mCAsq', '1CsohW8cmwnT2KlkAOGVJnCW6hMSSC2RiKLl9pxenZb5GKrPpsYhitqNlY5O', '{\"locale\":\"en\"}', '2021-11-19 10:56:54', '2021-11-19 10:59:05');

-- ----------------------------
-- Table structure for volunteer_members
-- ----------------------------
DROP TABLE IF EXISTS `volunteer_members`;
CREATE TABLE `volunteer_members`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dis_id` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `volunteer_members_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of volunteer_members
-- ----------------------------
INSERT INTO `volunteer_members` VALUES (1, 'NAYEM DURJAI', 'President', 'nayem.mia@gg.com', '01234567891', 'volunteer-members\\November2021\\uXkB3DjOqK8Nvqk3PzWn.jpg', '#', '#', '#', 1, '2021-11-19 21:16:00', '2021-11-20 06:13:49', 'nayem-durjai');

-- ----------------------------
-- Table structure for volunteer_stories
-- ----------------------------
DROP TABLE IF EXISTS `volunteer_stories`;
CREATE TABLE `volunteer_stories`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '\'DRAFT\'',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int NULL DEFAULT NULL,
  `hit` int NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `volunteer_stories_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of volunteer_stories
-- ----------------------------
INSERT INTO `volunteer_stories` VALUES (1, 'volunteer story', '<p><span style=\"color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f8f8f8;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits&nbsp;</span><span style=\"background-color: #f8f8f8; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits&nbsp;</span><span style=\"background-color: #f8f8f8; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 13px;\">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits</span></p>', 'volunteer-stories\\November2021\\ewGKP8rQjVpJHN5iPbxG.jpg', 'volunteer-story', 1, 'PUBLISHED', '2021-11-19 13:25:32', '2021-11-21 12:40:26', NULL, 3);
INSERT INTO `volunteer_stories` VALUES (2, 'ghfgthfgh', '<p>ddygdyd</p>', 'volunteer-stories\\November2021\\zgX3Ghlvne3VdgNPRGUJ.jpg', 'ghfgthfgh', NULL, 'PUBLISHED', '2021-11-21 11:39:53', '2021-11-21 11:39:53', 1, 0);

SET FOREIGN_KEY_CHECKS = 1;
