drop database tas_pweb_2020;
create database tas_pweb_2020;
use tas_pweb_2020;

create table divisi(
    id_divisi char(5) not NULL PRIMARY KEY,
    nama_divisi char(20),
    nama_manager char(20),
    penempatan char(10)
);


create table karyawan (
    id_karyawan char(5) not null primary key,
    nama_karyawan char(20),
    jk_karyawan char(1),
    dob_karyawan date,
    alamat text,
    jabatan char(20),
    id_divisi char(5) not null,
    foreign key (id_divisi) references divisi(id_divisi)
);

insert into divisi values(
    '01','Personalia','Antonius','Lantai 2'),
    ('02','Keuangan','Rias Gremory','Lantai 3'),
    ('03','Kebersihan','Ninik Wulandari','Lantai 1'),
    ('04','Keamanan','Jiraiya','Parkiran'),
    ('05','Konsumsi','Azazel','Dapur')
    ;

insert into Karyawan values(
    '10101','Natsu Dragnell','L','2001-11-24','Jogja','Manager','01'),
    ('10102','Yukina','P','2001-06-26','Nias','Koordinator','03'),
    ('10103','Ichigo','L','2003-07-07','Kyoto','Bendahara','02'),
    ('10104','Zeref','L','2008-10-06','Bekasi','Satpam','04'),
    ('10105','Yukihime','P','2004-01-01','Medan','Staf','05')
    ;

