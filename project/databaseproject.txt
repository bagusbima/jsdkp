CREATE TABLE `project` (
    `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
    `name_project` varchar(255) DEFAULT NULL,
    `deskripsi_project` varchar(1000) DEFAULT NULL,
    `tanggal_mulai` date DEFAULT NULL,
    `tanggal_selesai` date DEFAULT NULL,
    `status_project` varchar(255) DEFAULT NULL,
    `nama_client` varchar(255) DEFAULT NULL,
    `detail_pembayaran` blob DEFAULT NULL,
    `detail_team` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 5 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci