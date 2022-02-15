-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mar. 01 fév. 2022 à 11:55
-- Version du serveur :  10.5.13-MariaDB
-- Version de PHP : 7.4.26
SET
  FOREIGN_KEY_CHECKS = 0;
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
  AUTOCOMMIT = 0;
START TRANSACTION;
SET
  time_zone = "+00:00";
--
  -- Base de données : `pdo_1`
  --
  DROP DATABASE IF EXISTS `pdo_1`;
CREATE DATABASE IF NOT EXISTS `pdo_1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pdo_1`;
-- --------------------------------------------------------
  --
  -- Structure de la table `thearticle`
  --
  DROP TABLE IF EXISTS `thearticle`;
CREATE TABLE IF NOT EXISTS `thearticle` (
    `idthearticle` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `thearticletitle` varchar(180) NOT NULL,
    `thearticletext` text NOT NULL,
    `thearticledate` datetime NOT NULL DEFAULT current_timestamp(),
    `theuser_idtheuser` int(10) UNSIGNED DEFAULT NULL,
    PRIMARY KEY (`idthearticle`),
    KEY `fk_thearticle_theuser_idx` (`theuser_idtheuser`)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8;
-- --------------------------------------------------------
  --
  -- Structure de la table `thearticle_has_thesection`
  --
  DROP TABLE IF EXISTS `thearticle_has_thesection`;
CREATE TABLE IF NOT EXISTS `thearticle_has_thesection` (
    `thearticle_idthearticle` int(10) UNSIGNED NOT NULL,
    `thesection_idthesection` smallint(5) UNSIGNED NOT NULL,
    PRIMARY KEY (
      `thearticle_idthearticle`,
      `thesection_idthesection`
    ),
    KEY `fk_thearticle_has_thesection_thesection1_idx` (`thesection_idthesection`),
    KEY `fk_thearticle_has_thesection_thearticle1_idx` (`thearticle_idthearticle`)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8;
-- --------------------------------------------------------
  --
  -- Structure de la table `thesection`
  --
  DROP TABLE IF EXISTS `thesection`;
CREATE TABLE IF NOT EXISTS `thesection` (
    `idthesection` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    `thesectiontitle` varchar(80) NOT NULL,
    `thesectiondesc` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`idthesection`),
    UNIQUE KEY `thesectiontitle_UNIQUE` (`thesectiontitle`)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8;
-- --------------------------------------------------------
  --
  -- Structure de la table `theuser`
  --
  DROP TABLE IF EXISTS `theuser`;
CREATE TABLE IF NOT EXISTS `theuser` (
    `idtheuser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `theuserlogin` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
    `theusername` varchar(150) NOT NULL,
    PRIMARY KEY (`idtheuser`),
    UNIQUE KEY `theuserlogin_UNIQUE` (`theuserlogin`)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8;
--
  -- Contraintes pour les tables déchargées
  --
  --
  -- Contraintes pour la table `thearticle`
  --
ALTER TABLE
  `thearticle`
ADD
  CONSTRAINT `fk_thearticle_theuser` FOREIGN KEY (`theuser_idtheuser`) REFERENCES `theuser` (`idtheuser`) ON DELETE
SET
  NULL ON UPDATE NO ACTION;
--
  -- Contraintes pour la table `thearticle_has_thesection`
  --
ALTER TABLE
  `thearticle_has_thesection`
ADD
  CONSTRAINT `fk_thearticle_has_thesection_thearticle1` FOREIGN KEY (`thearticle_idthearticle`) REFERENCES `thearticle` (`idthearticle`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD
  CONSTRAINT `fk_thearticle_has_thesection_thesection1` FOREIGN KEY (`thesection_idthesection`) REFERENCES `thesection` (`idthesection`) ON DELETE CASCADE ON UPDATE NO ACTION;
SET
  FOREIGN_KEY_CHECKS = 1;
COMMIT;