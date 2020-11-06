create database DBGestorDeCuentas;
use DBGestorDeCuentas;

create table Servicios(
    idServicio int not null primary key auto_increment,
    nombreServicio varchar(100) not null,
    urlSerivicio varchar(200) not null
);

create table Cuentas(
    idCuenta int not null primary key auto_increment,
    usuarioCuenta varchar(100) not null,
    correoCuenta varchar(200) not null,
    telefonoCuenta varchar(13) not null,
    claveCuenta varchar(20) not null,
    servicioCuenta int not null,

    foreign key (servicioCuenta) references Servicios(idServicio)
);

create table Adicionales(
    idAdicional int not null primary key auto_increment,
    informacionAdicional varchar(5000),
    cuentaAdicional int not null,

    foreign key (cuentaAdicional) references Cuentas(idCuenta)
);

