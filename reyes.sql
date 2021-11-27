-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 02:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reyes`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(70) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `contenido` varchar(5000) NOT NULL,
  `file` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `titulo`, `contenido`, `file`, `date`) VALUES
(2, '¿La marihuana es segura y eficaz como medicina?', '<p>Las posibles propiedades medicinales de la marihuana y sus componentes han sido tema de investigación y polémica durante décadas. En sí, el THC tiene beneficios medicinales comprobados en ciertas formulaciones. La Administración de Alimentos y Medicamentos de Estados Unidos (U.S. Food and Drug Administration, FDA) ha aprobado medicamentos elaborados a base de THC, tales como el dronabinol (Marinol®) y la nabilona (Cesamet®), recetados en forma de píldoras para el tratamiento de náuseas en pacientes que reciben quimioterapia para el cáncer, y para estimular el apetito en pacientes que tienen síndrome consuntivo debido al sida.\n\nTambién se han aprobado o se están estudiando otros medicamentos elaborados a base de marihuana. El nabiximol (Sativex®), un atomizador bucal disponible actualmente en el Reino Unido, Canadá y varios países europeos para el tratamiento de la espasticidad y el dolor neuropático que pueden acompañar la esclerosis múltiple, combina el THC con otra sustancia química de la marihuana denominada cannabidiol (CBD).\n\nCBD no tiene las propiedades gratificantes del THC, e informes anecdóticos indican que puede ser prometedor para el tratamiento de trastornos convulsivos, entre otros. En Estados Unidos se está probando un medicamento líquido a base de CBD llamado Epidiolex para el tratamiento de dos formas graves de epilepsia infantil: el síndrome de Dravet y el síndrome de Lennox-Gastaut.\n\nEn general, los investigadores consideran que los medicamentos como estos, que usan sustancias químicas purificadas derivadas de la planta de marihuana o basadas en ella, son más prometedores desde el punto de vista terapéutico que el uso de la planta de marihuana entera o sus extractos crudos. La elaboración de fármacos con sustancias derivadas de plantas como la marihuana ofrece numerosos retos. Estos derivados pueden contener cientos de sustancias químicas activas y desconocidas y puede resultar difícil elaborar un producto con dosis correctas y uniformes de esas sustancias. El uso de la marihuana como medicamento también representa otros problemas, como por ejemplo los efectos perjudiciales de fumar y el deterioro cognitivo que induce el THC. No obstante, cada vez son más los estados que han legalizado la dispensación de marihuana o sus extractos a personas que padecen de diversos trastornos de salud.\n\nOtra inquietud relacionada con la “marihuana medicinal” es que se sabe poco del efecto a largo plazo que su consumo puede tener en las personas que son más vulnerables a causa de su salud o su edad, como los adultos mayores o los pacientes de cáncer, sida, enfermedades cardiovasculares, esclerosis múltiple u otros trastornos neurodegenerativos. Será necesario continuar investigando para determinar si las personas cuya salud se ve afectada por una enfermedad o su tratamiento (como la quimioterapia) corren un mayor riesgo de sufrir efectos adversos por el consumo de marihuana.</p>', 'blog/industria.jpg', '2017-07-02'),
(3, '¿La marihuana es segura y eficaz como medicina?', '<p>Las posibles propiedades medicinales de la marihuana y sus componentes han sido tema de investigación y polémica durante décadas. En sí, el THC tiene beneficios medicinales comprobados en ciertas formulaciones. La Administración de Alimentos y Medicamentos de Estados Unidos (U.S. Food and Drug Administration, FDA) ha aprobado medicamentos elaborados a base de THC, tales como el dronabinol (Marinol®) y la nabilona (Cesamet®), recetados en forma de píldoras para el tratamiento de náuseas en pacientes que reciben quimioterapia para el cáncer, y para estimular el apetito en pacientes que tienen síndrome consuntivo debido al sida.\n', 'blog/industria.jpg', '2021-07-15'),
(4, '¿La marihuana es segura y eficaz como medicina?', '<p>Las posibles propiedades medicinales de la marihuana y sus componentes han sido tema de investigación y polémica durante décadas. En sí, el THC tiene beneficios medicinales comprobados en ciertas formulaciones. La Administración de Alimentos y Medicamentos de Estados Unidos (U.S. Food and Drug Administration, FDA) ha aprobado medicamentos elaborados a base de THC, tales como el dronabinol (Marinol®) y la nabilona (Cesamet®), recetados en forma de píldoras para el tratamiento de náuseas en pacientes que reciben quimioterapia para el cáncer, y para estimular el apetito en pacientes que tienen síndrome consuntivo debido al sida.\n', 'blog/industria.jpg', '2017-07-27'),
(5, '¿La marihuana es segura y eficaz como medicina?', '<p>Las posibles propiedades medicinales de la marihuana y sus componentes han sido tema de investigación y polémica durante décadas. En sí, el THC tiene beneficios medicinales comprobados en ciertas formulaciones. La Administración de Alimentos y Medicamentos de Estados Unidos (U.S. Food and Drug Administration, FDA) ha aprobado medicamentos elaborados a base de THC, tales como el dronabinol (Marinol®) y la nabilona (Cesamet®), recetados en forma de píldoras para el tratamiento de náuseas en pacientes que reciben quimioterapia para el cáncer, y para estimular el apetito en pacientes que tienen síndrome consuntivo debido al sida.\n\nTambién se han aprobado o se están estudiando otros medicamentos elaborados a base de marihuana. El nabiximol (Sativex®), un atomizador bucal disponible actualmente en el Reino Unido, Canadá y varios países europeos para el tratamiento de la espasticidad y el dolor neuropático que pueden acompañar la esclerosis múltiple, combina el THC con otra sustancia química de la marihuana denominada cannabidiol (CBD).\n\nCBD no tiene las propiedades gratificantes del THC, e informes anecdóticos indican que puede ser prometedor para el tratamiento de trastornos convulsivos, entre otros. En Estados Unidos se está probando un medicamento líquido a base de CBD llamado Epidiolex para el tratamiento de dos formas graves de epilepsia infantil: el síndrome de Dravet y el síndrome de Lennox-Gastaut.\n\nEn general, los investigadores consideran que los medicamentos como estos, que usan sustancias químicas purificadas derivadas de la planta de marihuana o basadas en ella, son más prometedores desde el punto de vista terapéutico que el uso de la planta de marihuana entera o sus extractos crudos. La elaboración de fármacos con sustancias derivadas de plantas como la marihuana ofrece numerosos retos. Estos derivados pueden contener cientos de sustancias químicas activas y desconocidas y puede resultar difícil elaborar un producto con dosis correctas y uniformes de esas sustancias. El uso de la marihuana como medicamento también representa otros problemas, como por ejemplo los efectos perjudiciales de fumar y el deterioro cognitivo que induce el THC. No obstante, cada vez son más los estados que han legalizado la dispensación de marihuana o sus extractos a personas que padecen de diversos trastornos de salud.\n\nOtra inquietud relacionada con la “marihuana medicinal” es que se sabe poco del efecto a largo plazo que su consumo puede tener en las personas que son más vulnerables a causa de su salud o su edad, como los adultos mayores o los pacientes de cáncer, sida, enfermedades cardiovasculares, esclerosis múltiple u otros trastornos neurodegenerativos. Será necesario continuar investigando para determinar si las personas cuya salud se ve afectada por una enfermedad o su tratamiento (como la quimioterapia) corren un mayor riesgo de sufrir efectos adversos por el consumo de marihuana.</p>', 'blog/industria.jpg', '2017-07-27'),
(6, '¿La marihuana es segura y eficaz como medicina?', '<p>Las posibles propiedades medicinales de la marihuana y sus componentes han sido tema de investigación y polémica durante décadas. En sí, el THC tiene beneficios medicinales comprobados en ciertas formulaciones. La Administración de Alimentos y Medicamentos de Estados Unidos (U.S. Food and Drug Administration, FDA) ha aprobado medicamentos elaborados a base de THC, tales como el dronabinol (Marinol®) y la nabilona (Cesamet®), recetados en forma de píldoras para el tratamiento de náuseas en pacientes que reciben quimioterapia para el cáncer, y para estimular el apetito en pacientes que tienen síndrome consuntivo debido al sida.\n\n<p>Here you go! In step one you will fill out a simple form to get a digital wallet for your Kringle coins. Once you click &ldquo;Submit,&rdquo; you&rsquo;ll magically get an email. Step two will be to verify your email address; we want to make sure that you get your gift and not somebody else. We promise all of your information will be secure. We will never spam you, or sell your information to any third party. To collect 100,000 Kringle coins you need to fill out this form and submit it. Go ahead and do that now!</p>\n', 'blog/industria.jpg', '2017-07-27'),
(7, '¿La marihuana es segura y eficaz como medicina?', '<p>Las posibles propiedades medicinales de la marihuana y sus componentes han sido tema de investigación y polémica durante décadas. En sí, el THC tiene beneficios medicinales comprobados en ciertas formulaciones. La Administración de Alimentos y Medicamentos de Estados Unidos (U.S. Food and Drug Administration, FDA) ha aprobado medicamentos elaborados a base de THC, tales como el dronabinol (Marinol®) y la nabilona (Cesamet®), recetados en forma de píldoras para el tratamiento de náuseas en pacientes que reciben quimioterapia para el cáncer, y para estimular el apetito en pacientes que tienen síndrome consuntivo debido al sida.\n\n<p>Here you go! In step one you will fill out a simple form to get a digital wallet for your Kringle coins. Once you click &ldquo;Submit,&rdquo; you&rsquo;ll magically get an email. Step two will be to verify your email address; we want to make sure that you get your gift and not somebody else. We promise all of your information will be secure. We will never spam you, or sell your information to any third party. To collect 100,000 Kringle coins you need to fill out this form and submit it. Go ahead and do that now!</p>\n', 'blog/industria.jpg', '2017-07-10'),
(8, '¿La marihuana es segura y eficaz como medicina?', '<p>Las posibles propiedades medicinales de la marihuana y sus componentes han sido tema de investigación y polémica durante décadas. En sí, el THC tiene beneficios medicinales comprobados en ciertas formulaciones. La Administración de Alimentos y Medicamentos de Estados Unidos (U.S. Food and Drug Administration, FDA) ha aprobado medicamentos elaborados a base de THC, tales como el dronabinol (Marinol®) y la nabilona (Cesamet®), recetados en forma de píldoras para el tratamiento de náuseas en pacientes que reciben quimioterapia para el cáncer, y para estimular el apetito en pacientes que tienen síndrome consuntivo debido al sida.\n\n<p>Here you go! In step one you will fill out a simple form to get a digital wallet for your Kringle coins. Once you click &ldquo;Submit,&rdquo; you&rsquo;ll magically get an email. Step two will be to verify your email address; we want to make sure that you get your gift and not somebody else. We promise all of your information will be secure. We will never spam you, or sell your information to any third party. To collect 100,000 Kringle coins you need to fill out this form and submit it. Go ahead and do that now!</p>\n', 'blog/industria.jpg', '2017-07-27'),
(20, '¿Qué relación hay entre el consumo regular de marihuana y la inteligencia emocional?', '<p>Para explorar a fondo la relaci&oacute;n entre el uso de marihuana y el procesamiento de emociones, las autoras buscaron en la literatura cient&iacute;fica lo que hab&iacute;a publicado respecto a este tema, algo que en la academia se conoce como hacer un &quot;meta-an&aacute;lisis&quot;.&nbsp;Encontraron&nbsp;<strong>41 estudios en total</strong>, la mayor&iacute;a de los cuales&nbsp;<strong>se publicaron en los &uacute;ltimos cinco a&ntilde;os</strong>, e identificaron&nbsp;<strong>algunas caracter&iacute;sticas&nbsp;que aparec&iacute;an con frecuencia</strong>.</p>\r\n\r\n<blockquote>\r\n<p>Por ejemplo,&nbsp;los consumidores habituales de cannabis generalmente mostraban, entre otras cosas,&nbsp;<strong>falta de capacidad de responder a los est&iacute;mulos emocionales</strong>,&nbsp;<strong>disminuci&oacute;n de la precisi&oacute;n y el tiempo de respuesta&nbsp;</strong>al identificar y diferenciar estados emocionales como la felicidad, la tristeza o la ira; y&nbsp;<strong>disminuci&oacute;n de la actividad neuronal&nbsp;</strong>cuando se exponen a est&iacute;mulos emocionales.</p>\r\n</blockquote>\r\n\r\n<p>Por otro lado, encontraron evidencia de que los subcomponentes del cannabis, espec&iacute;ficamente&nbsp;el THC y el CBD, pueden influir en el procesamiento de las emociones de diferentes maneras.&nbsp;Por ejemplo, un estudio encontr&oacute; que el THC (el principal constituyente psicoactivo del cannabis) aumenta la ansiedad en respuesta a situaciones sociales de miedo, mientras que el CBD (no es psicoactivo y est&aacute; m&aacute;s relacionado con el uso m&eacute;dico) tiende a disminuirla.</p>\r\n\r\n<p><strong>Para las investigadoras, lo preocupante de&nbsp;estos hallazgos tiene que ver con que, al reducir la capacidad del cerebro para procesar estados emocionales de forma r&aacute;pida y precisa, los consumidores habituales de cannabis corren el riesgo de&nbsp;debilitar sus relaciones interpersonales. Esto podr&iacute;a llevarlas&nbsp;a consumir m&aacute;s cannabis como un medio para hacer frente a los problemas interpersonales,&nbsp;perpetuando as&iacute; un ciclo de consumo y angustia emocional.</strong></p>\r\n\r\n<p><em>Sin embargo, coinciden en que&nbsp;<strong>se necesitan m&aacute;s investigaciones&nbsp;sobre las diferencias individuales&nbsp;</strong>para determinar los efectos del sexo, el uso de m&uacute;ltiples sustancias y la presencia de trastornos psiqui&aacute;tricos en el funcionamiento socioemocional; y tambi&eacute;n considerar a los&nbsp;<strong>consumidores de mediana edad y adultos mayores</strong>, ya que la mayor&iacute;a de las investigaciones actuales se limitan a adolescentes y adultos j&oacute;venes.</em></p>\r\n', 'blog/canabis.webp', '2021-11-17'),
(21, 'Post de prueba', '<p>Para explorar a fondo la relaci&oacute;n entre el uso de marihuana y el procesamiento de emociones, las autoras buscaron en la literatura cient&iacute;fica lo que hab&iacute;a publicado respecto a este tema, algo que en la academia se conoce como hacer un &quot;meta-an&aacute;lisis&quot;.&nbsp;Encontraron&nbsp;<strong>41 estudios en total</strong>, la mayor&iacute;a de los cuales&nbsp;<strong>se publicaron en los &uacute;ltimos cinco a&ntilde;os</strong>, e identificaron&nbsp;<strong>algunas caracter&iacute;sticas&nbsp;que aparec&iacute;an con frecuencia</strong>.</p>\r\n\r\n<p><img alt=\"\" src=\"https://lasletras.org/wp-content/uploads/c.jpg\" style=\"height:487px; width:475px\" /></p>\r\n\r\n<blockquote>\r\n<p>Por ejemplo,&nbsp;los consumidores habituales de cannabis generalmente mostraban, entre otras cosas,&nbsp;<strong>falta de capacidad de responder a los est&iacute;mulos emocionales</strong>,&nbsp;<strong>disminuci&oacute;n de la precisi&oacute;n y el tiempo de respuesta&nbsp;</strong>al identificar y diferenciar estados emocionales como la felicidad, la tristeza o la ira; y&nbsp;<strong>disminuci&oacute;n de la actividad neuronal&nbsp;</strong>cuando se exponen a est&iacute;mulos emocionales.</p>\r\n</blockquote>\r\n\r\n<p>Por otro lado, encontraron evidencia de que los subcomponentes del cannabis, espec&iacute;ficamente&nbsp;el THC y el CBD, pueden influir en el procesamiento de las emociones de diferentes maneras.&nbsp;Por ejemplo, un estudio encontr&oacute; que el THC (el principal constituyente psicoactivo del cannabis) aumenta la ansiedad en respuesta a situaciones sociales de miedo, mientras que el CBD (no es psicoactivo y est&aacute; m&aacute;s relacionado con el uso m&eacute;dico) tiende a disminuirla.</p>\r\n\r\n<p><strong>Para las investigadoras, lo preocupante de&nbsp;estos hallazgos tiene que ver con que, al reducir la capacidad del cerebro para procesar estados emocionales de forma r&aacute;pida y precisa, los consumidores habituales de cannabis corren el riesgo de&nbsp;debilitar sus relaciones interpersonales. Esto podr&iacute;a llevarlas&nbsp;a consumir m&aacute;s cannabis como un medio para hacer frente a los problemas interpersonales,&nbsp;perpetuando as&iacute; un ciclo de consumo y angustia emocional.</strong></p>\r\n\r\n<p><em>Sin embargo, coinciden en que&nbsp;<strong>se necesitan m&aacute;s investigaciones&nbsp;sobre las diferencias individuales&nbsp;</strong>para determinar los efectos del sexo, el uso de m&uacute;ltiples sustancias y la presencia de trastornos psiqui&aacute;tricos en el funcionamiento socioemocional; y tambi&eacute;n considerar a los&nbsp;<strong>consumidores de mediana edad y adultos mayores</strong>, ya que la mayor&iacute;a de las investigaciones actuales se limitan a adolescentes y adultos j&oacute;venes.</em></p>\r\n', 'blog/descargar.webp', '2021-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
--

CREATE TABLE `imagenes` (
  `id_img` int(11) NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ruta` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `uso` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `imagenes`
--

INSERT INTO `imagenes` (`id_img`, `descripcion`, `estado`, `ruta`, `uso`) VALUES
(58, 'ejemplo1', 1, 'img/1.jpg', 'ambos'),
(60, 'ejemplo2', 2, 'img/2.jpeg', 'ambos'),
(61, 'ejemplo3', 1, 'img/3.jpg', 'slider'),
(62, 'ejemplo4', 1, 'img/4.jpg', 'galeria');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_us` int(11) NOT NULL,
  `nom_us` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_us`, `nom_us`, `correo`, `clave`, `tipo`) VALUES
(1, 'salvador campos', 'salvador.camposorihuela@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'Jesus Antonio', 'jesus@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_us`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
