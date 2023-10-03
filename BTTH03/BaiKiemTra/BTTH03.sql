-- TẠO CSDL
CREATE DATABASE QuanLyBaiHat;
USE QuanLyBaiHat;

CREATE TABLE TheLoai (
    id INT Auto Increment PRIMARY KEY,
    tenTheLoai VARCHAR(255) NOT NULL,
);

CREATE TABLE BaiHat (
    id INT Auto Increment PRIMARY KEY,
    tenBaiHat VARCHAR(255) NOT NULL,
    caSi VARCHAR(255) NOT NULL,
    FOREIGN KEY (idTheLoai) REFERENCES TheLoai(idTheLoai)
);
