CREATE TABLE `sisman` (
    `id_tugas` int(11) NOT NULL AUTO_INCREMENT,
    `nama_tugas` varchar(50) NOT NULL,
    `dihandle` varchar(50) NOT NULL,
    `status` varchar(50) NOT NULL,
    `deadline` varchar(50) NOT NULL,
    PRIMARY KEY (`id_tugas`)
) ENGINE = InnoDB AUTO_INCREMENT = 11 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci