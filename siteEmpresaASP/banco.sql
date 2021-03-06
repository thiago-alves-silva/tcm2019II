/*USE [master]
GO
/****** Object:  Database [tcmmb]    Script Date: 22/11/2019 13:44:48 ******/
CREATE DATABASE [tcmmb]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'tcmmb', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL12.MSSQLSERVER\MSSQL\DATA\tcmmb.mdf' , SIZE = 4288KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB )
 LOG ON 
( NAME = N'tcmmb_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL12.MSSQLSERVER\MSSQL\DATA\tcmmb_log.ldf' , SIZE = 1072KB , MAXSIZE = 2048GB , FILEGROWTH = 10%)
GO
ALTER DATABASE [tcmmb] SET COMPATIBILITY_LEVEL = 120
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [tcmmb].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [tcmmb] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [tcmmb] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [tcmmb] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [tcmmb] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [tcmmb] SET ARITHABORT OFF 
GO
ALTER DATABASE [tcmmb] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [tcmmb] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [tcmmb] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [tcmmb] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [tcmmb] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [tcmmb] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [tcmmb] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [tcmmb] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [tcmmb] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [tcmmb] SET  ENABLE_BROKER 
GO
ALTER DATABASE [tcmmb] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [tcmmb] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [tcmmb] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [tcmmb] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [tcmmb] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [tcmmb] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [tcmmb] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [tcmmb] SET RECOVERY FULL 
GO
ALTER DATABASE [tcmmb] SET  MULTI_USER 
GO
ALTER DATABASE [tcmmb] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [tcmmb] SET DB_CHAINING OFF 
GO
ALTER DATABASE [tcmmb] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [tcmmb] SET TARGET_RECOVERY_TIME = 0 SECONDS 
GO
ALTER DATABASE [tcmmb] SET DELAYED_DURABILITY = DISABLED 
GO
EXEC sys.sp_db_vardecimal_storage_format N'tcmmb', N'ON'
GO
*/
USE [beautyplace]
GO
/****** Object:  Table [dbo].[Agendamento]    Script Date: 22/11/2019 13:44:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Agendamento](
	[idagend] [int] IDENTITY(1,1) NOT NULL,
	[horaagend] [time](7) NOT NULL,
	[dataagend] [date] NOT NULL,
	[idproced] [int] NOT NULL,
	[idcli] [int] NOT NULL,
	[idpag] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idagend] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Cargo]    Script Date: 22/11/2019 13:44:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Cargo](
	[idcargo] [int] IDENTITY(1,1) NOT NULL,
	[nmcargo] [varchar](60) NOT NULL,
	[acesso] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idcargo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Cliente]    Script Date: 22/11/2019 13:44:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Cliente](
	[idcli] [int] IDENTITY(1,1) NOT NULL,
	[nomecli] [varchar](50) NOT NULL,
	[cpfcli] [varchar](11) NOT NULL,
	[rgcli] [varchar](9) NOT NULL,
	[emailcli] [varchar](60) NOT NULL,
	[nasc] [datetime] NOT NULL,
	[tel] [varchar](11) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idcli] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Estoque]    Script Date: 22/11/2019 13:44:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Estoque](
	[idprod] [int] NOT NULL,
	[qtdprod] [int] NOT NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Funcionario]    Script Date: 22/11/2019 13:44:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Funcionario](
	[idfunc] [int] IDENTITY(1,1) NOT NULL,
	[nmfunc] [varchar](60) NOT NULL,
	[cpffunc] [varchar](11) NOT NULL,
	[rgfunc] [varchar](9) NOT NULL,
	[tel] [varchar](11) NOT NULL,
	[emailfunc] [varchar](60) NOT NULL,
	[endereco] [varchar](80) NOT NULL,
	[nascfunc] [date] NOT NULL,
	[idcargo] [int] NOT NULL,
	[status] [char](1) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idfunc] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Login]    Script Date: 22/11/2019 13:44:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Login](
	[idlog] [int] IDENTITY(1,1) NOT NULL,
	[usuario] [varchar](18) NOT NULL,
	[senha] [varchar](15) NOT NULL,
	[idfunc] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idlog] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Pagamento]    Script Date: 22/11/2019 13:44:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Pagamento](
	[idpag] [int] IDENTITY(1,1) NOT NULL,
	[datapag] [datetime] NULL,
	[formapag] [varchar](8) NOT NULL,
	[valort] [decimal](6, 2) NOT NULL,
	[idfunc] [int] NOT NULL,
	[status] [char](1) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idpag] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Procedimentos]    Script Date: 22/11/2019 13:44:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Procedimentos](
	[idproced] [int] IDENTITY(1,1) NOT NULL,
	[nmproced] [varchar](50) NOT NULL,
	[dsproced] [text] NULL,
	[idtipo_proced] [int] NOT NULL,
	[valor] [decimal](5, 2) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idproced] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Produto]    Script Date: 22/11/2019 13:44:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Produto](
	[idprod] [int] IDENTITY(1,1) NOT NULL,
	[nmprod] [varchar](50) NULL,
	[marca] [varchar](50) NULL,
PRIMARY KEY CLUSTERED 
(
	[idprod] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[tipo_proced]    Script Date: 22/11/2019 13:44:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[tipo_proced](
	[idtipo_proced] [int] IDENTITY(1,1) NOT NULL,
	[tipo] [varchar](60) NULL,
PRIMARY KEY CLUSTERED 
(
	[idtipo_proced] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[Agendamento] ON 

INSERT [dbo].[Agendamento] ([idagend], [horaagend], [dataagend], [idproced], [idcli], [idpag]) VALUES (1, CAST(N'05:00:00' AS Time), CAST(N'2020-07-05' AS Date), 22, 2, 4)
SET IDENTITY_INSERT [dbo].[Agendamento] OFF
SET IDENTITY_INSERT [dbo].[Cargo] ON 

INSERT [dbo].[Cargo] ([idcargo], [nmcargo], [acesso]) VALUES (1, N'Gerente', 3)
INSERT [dbo].[Cargo] ([idcargo], [nmcargo], [acesso]) VALUES (2, N'Faxineiro', 0)
SET IDENTITY_INSERT [dbo].[Cargo] OFF
SET IDENTITY_INSERT [dbo].[Cliente] ON 

INSERT [dbo].[Cliente] ([idcli], [nomecli], [cpfcli], [rgcli], [emailcli], [nasc], [tel]) VALUES (1, N'JULIO CONIQUE Mandriollo', N'11111111111', N'687687687', N'julio@gmail.com', CAST(N'2002-04-05 00:00:00.000' AS DateTime), N'11111111111')
INSERT [dbo].[Cliente] ([idcli], [nomecli], [cpfcli], [rgcli], [emailcli], [nasc], [tel]) VALUES (2, N'Thiago Orleans Bragança', N'22222222222', N'333333333', N'thiagay@gmail.com', CAST(N'1998-05-04 00:00:00.000' AS DateTime), N'88888888888')
SET IDENTITY_INSERT [dbo].[Cliente] OFF
INSERT [dbo].[Estoque] ([idprod], [qtdprod]) VALUES (2, 50)
INSERT [dbo].[Estoque] ([idprod], [qtdprod]) VALUES (2, 50)
SET IDENTITY_INSERT [dbo].[Funcionario] ON 

INSERT [dbo].[Funcionario] ([idfunc], [nmfunc], [cpffunc], [rgfunc], [tel], [emailfunc], [endereco], [nascfunc], [idcargo], [status]) VALUES (1, N'Dagoberto', N'22222222222', N'111111111', N'11970106561', N'dagoberto.bertinho@hotgirls.com', N'Rua guaipá', CAST(N'2000-05-05' AS Date), 1, N'A')
INSERT [dbo].[Funcionario] ([idfunc], [nmfunc], [cpffunc], [rgfunc], [tel], [emailfunc], [endereco], [nascfunc], [idcargo], [status]) VALUES (2, N'Faxineiro Duvique Andriollo', N'55555555555', N'222222222', N'22222222222', N'faxineiro@gmail.com', N'Rua Kettu', CAST(N'2000-02-25' AS Date), 2, N'D')
SET IDENTITY_INSERT [dbo].[Funcionario] OFF
SET IDENTITY_INSERT [dbo].[Login] ON 

INSERT [dbo].[Login] ([idlog], [usuario], [senha], [idfunc]) VALUES (1, N'admin', N'admin', 1)
SET IDENTITY_INSERT [dbo].[Login] OFF
SET IDENTITY_INSERT [dbo].[Pagamento] ON 

INSERT [dbo].[Pagamento] ([idpag], [datapag], [formapag], [valort], [idfunc], [status]) VALUES (4, CAST(N'2019-11-22 01:32:33.000' AS DateTime), N'Dinheiro', CAST(700.00 AS Decimal(6, 2)), 1, N'S')
SET IDENTITY_INSERT [dbo].[Pagamento] OFF
SET IDENTITY_INSERT [dbo].[Procedimentos] ON 

INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (1, N'Massagem', NULL, 1, CAST(50.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (2, N'Lipo Carbox', NULL, 1, CAST(60.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (3, N'Heccus', NULL, 1, CAST(80.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (4, N'Plataforma Vibratória', NULL, 1, CAST(120.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (5, N'Lipomassagem', NULL, 1, CAST(70.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (6, N'Drenagem Linfática', NULL, 1, CAST(130.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (7, N'Reflexologia Podal', NULL, 1, CAST(100.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (8, N'Shiatsu', NULL, 1, CAST(60.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (9, N'Dermaroller', NULL, 2, CAST(35.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (10, N'Peeling Vulcanice', NULL, 2, CAST(145.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (11, N'Peeling de Diamante', NULL, 2, CAST(160.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (12, N'Peeling Amazônico', NULL, 2, CAST(120.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (13, N'Eletrolifting', NULL, 2, CAST(90.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (14, N'Hidratação Facial', NULL, 2, CAST(65.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (15, N'Limpeza de Pele', NULL, 2, CAST(45.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (16, N'Spectra', NULL, 2, CAST(150.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (17, N'Dia de Noiva', NULL, 3, CAST(700.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (18, N'Dia de Noivo', NULL, 3, CAST(440.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (19, N'Dia de SPA', NULL, 3, CAST(450.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (20, N'Depilação Egípcia', NULL, 3, CAST(75.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (21, N'Cabelo e Maquiagem', NULL, 3, CAST(250.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (22, N'Emagrecimento e Nutrição Estética', NULL, 3, CAST(300.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (23, N'Bronzeamento Artificial', NULL, 4, CAST(80.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (24, N'Depilação', NULL, 4, CAST(100.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (25, N'Salão de Beleza', NULL, 4, CAST(80.00 AS Decimal(5, 2)))
INSERT [dbo].[Procedimentos] ([idproced], [nmproced], [dsproced], [idtipo_proced], [valor]) VALUES (26, N'Maquiagem Definitiva', NULL, 4, CAST(200.00 AS Decimal(5, 2)))
SET IDENTITY_INSERT [dbo].[Procedimentos] OFF
SET IDENTITY_INSERT [dbo].[Produto] ON 

INSERT [dbo].[Produto] ([idprod], [nmprod], [marca]) VALUES (2, N'Cera Quente', N'Jequiti')
SET IDENTITY_INSERT [dbo].[Produto] OFF
SET IDENTITY_INSERT [dbo].[tipo_proced] ON 

INSERT [dbo].[tipo_proced] ([idtipo_proced], [tipo]) VALUES (1, N'Corporal')
INSERT [dbo].[tipo_proced] ([idtipo_proced], [tipo]) VALUES (2, N'Facial')
INSERT [dbo].[tipo_proced] ([idtipo_proced], [tipo]) VALUES (3, N'Especial')
INSERT [dbo].[tipo_proced] ([idtipo_proced], [tipo]) VALUES (4, N'Diversos')
SET IDENTITY_INSERT [dbo].[tipo_proced] OFF
ALTER TABLE [dbo].[Agendamento]  WITH CHECK ADD FOREIGN KEY([idcli])
REFERENCES [dbo].[Cliente] ([idcli])
GO
ALTER TABLE [dbo].[Agendamento]  WITH CHECK ADD FOREIGN KEY([idcli])
REFERENCES [dbo].[Cliente] ([idcli])
GO
ALTER TABLE [dbo].[Agendamento]  WITH CHECK ADD FOREIGN KEY([idpag])
REFERENCES [dbo].[Pagamento] ([idpag])
GO
ALTER TABLE [dbo].[Agendamento]  WITH CHECK ADD FOREIGN KEY([idpag])
REFERENCES [dbo].[Pagamento] ([idpag])
GO
ALTER TABLE [dbo].[Agendamento]  WITH CHECK ADD FOREIGN KEY([idproced])
REFERENCES [dbo].[Procedimentos] ([idproced])
GO
ALTER TABLE [dbo].[Agendamento]  WITH CHECK ADD FOREIGN KEY([idproced])
REFERENCES [dbo].[Procedimentos] ([idproced])
GO
ALTER TABLE [dbo].[Estoque]  WITH CHECK ADD FOREIGN KEY([idprod])
REFERENCES [dbo].[Produto] ([idprod])
GO
ALTER TABLE [dbo].[Estoque]  WITH CHECK ADD FOREIGN KEY([idprod])
REFERENCES [dbo].[Produto] ([idprod])
GO
ALTER TABLE [dbo].[Estoque]  WITH CHECK ADD FOREIGN KEY([idprod])
REFERENCES [dbo].[Produto] ([idprod])
GO
ALTER TABLE [dbo].[Estoque]  WITH CHECK ADD FOREIGN KEY([idprod])
REFERENCES [dbo].[Produto] ([idprod])
GO
ALTER TABLE [dbo].[Estoque]  WITH CHECK ADD FOREIGN KEY([idprod])
REFERENCES [dbo].[Produto] ([idprod])
GO
ALTER TABLE [dbo].[Estoque]  WITH CHECK ADD FOREIGN KEY([idprod])
REFERENCES [dbo].[Produto] ([idprod])
GO
ALTER TABLE [dbo].[Funcionario]  WITH CHECK ADD FOREIGN KEY([idcargo])
REFERENCES [dbo].[Cargo] ([idcargo])
GO
ALTER TABLE [dbo].[Funcionario]  WITH CHECK ADD FOREIGN KEY([idcargo])
REFERENCES [dbo].[Cargo] ([idcargo])
GO
ALTER TABLE [dbo].[Funcionario]  WITH CHECK ADD FOREIGN KEY([idcargo])
REFERENCES [dbo].[Cargo] ([idcargo])
GO
ALTER TABLE [dbo].[Funcionario]  WITH CHECK ADD FOREIGN KEY([idcargo])
REFERENCES [dbo].[Cargo] ([idcargo])
GO
ALTER TABLE [dbo].[Funcionario]  WITH CHECK ADD FOREIGN KEY([idcargo])
REFERENCES [dbo].[Cargo] ([idcargo])
GO
ALTER TABLE [dbo].[Funcionario]  WITH CHECK ADD FOREIGN KEY([idcargo])
REFERENCES [dbo].[Cargo] ([idcargo])
GO
ALTER TABLE [dbo].[Login]  WITH CHECK ADD FOREIGN KEY([idfunc])
REFERENCES [dbo].[Funcionario] ([idfunc])
GO
ALTER TABLE [dbo].[Login]  WITH CHECK ADD FOREIGN KEY([idfunc])
REFERENCES [dbo].[Funcionario] ([idfunc])
GO
ALTER TABLE [dbo].[Login]  WITH CHECK ADD FOREIGN KEY([idfunc])
REFERENCES [dbo].[Funcionario] ([idfunc])
GO
ALTER TABLE [dbo].[Login]  WITH CHECK ADD FOREIGN KEY([idfunc])
REFERENCES [dbo].[Funcionario] ([idfunc])
GO
ALTER TABLE [dbo].[Login]  WITH CHECK ADD FOREIGN KEY([idfunc])
REFERENCES [dbo].[Funcionario] ([idfunc])
GO
ALTER TABLE [dbo].[Login]  WITH CHECK ADD FOREIGN KEY([idfunc])
REFERENCES [dbo].[Funcionario] ([idfunc])
GO
ALTER TABLE [dbo].[Pagamento]  WITH CHECK ADD FOREIGN KEY([idfunc])
REFERENCES [dbo].[Funcionario] ([idfunc])
GO
ALTER TABLE [dbo].[Pagamento]  WITH CHECK ADD FOREIGN KEY([idfunc])
REFERENCES [dbo].[Funcionario] ([idfunc])
GO
ALTER TABLE [dbo].[Pagamento]  WITH CHECK ADD FOREIGN KEY([idfunc])
REFERENCES [dbo].[Funcionario] ([idfunc])
GO
ALTER TABLE [dbo].[Pagamento]  WITH CHECK ADD FOREIGN KEY([idfunc])
REFERENCES [dbo].[Funcionario] ([idfunc])
GO
ALTER TABLE [dbo].[Pagamento]  WITH CHECK ADD FOREIGN KEY([idfunc])
REFERENCES [dbo].[Funcionario] ([idfunc])
GO
ALTER TABLE [dbo].[Pagamento]  WITH CHECK ADD FOREIGN KEY([idfunc])
REFERENCES [dbo].[Funcionario] ([idfunc])
GO
ALTER TABLE [dbo].[Procedimentos]  WITH CHECK ADD FOREIGN KEY([idtipo_proced])
REFERENCES [dbo].[tipo_proced] ([idtipo_proced])
GO
ALTER TABLE [dbo].[Procedimentos]  WITH CHECK ADD FOREIGN KEY([idtipo_proced])
REFERENCES [dbo].[tipo_proced] ([idtipo_proced])
GO
ALTER TABLE [dbo].[Procedimentos]  WITH CHECK ADD FOREIGN KEY([idtipo_proced])
REFERENCES [dbo].[tipo_proced] ([idtipo_proced])
GO
ALTER TABLE [dbo].[Procedimentos]  WITH CHECK ADD FOREIGN KEY([idtipo_proced])
REFERENCES [dbo].[tipo_proced] ([idtipo_proced])
GO
ALTER TABLE [dbo].[Procedimentos]  WITH CHECK ADD FOREIGN KEY([idtipo_proced])
REFERENCES [dbo].[tipo_proced] ([idtipo_proced])
GO
ALTER TABLE [dbo].[Procedimentos]  WITH CHECK ADD FOREIGN KEY([idtipo_proced])
REFERENCES [dbo].[tipo_proced] ([idtipo_proced])
GO
USE [master]
GO
ALTER DATABASE [beautyplace] SET  READ_WRITE 
GO