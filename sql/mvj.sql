-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2026 at 11:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvj`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `titulo` varchar(255) DEFAULT 'Sin titulo',
  `descripcion` text DEFAULT 'Sin descripcion',
  `imagen_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id`, `fecha`, `titulo`, `descripcion`, `imagen_url`) VALUES
(1, '1976-03-24', 'La Junta Militar toma el poder', 'Este fue en el que la Junta Militar se hice con el poder en Argentina, derrocando al gobierno de Isabel Peron. Es así como el primer representante del nuevo régimen, Jorge Rafael Videl, anuncia al pueblo la situación.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Jorge_Rafael_Videla_Oath.PNG/330px-Jorge_Rafael_Videla_Oath.PNG'),
(2, '1977-03-24', 'La carta a la Junta Militar', 'Tan sollo un año después de la instalación del nuevo régimen, Rodolfo Walsh decide realizar una carta que publicaría en el periódico. En esta carta se detallaban los horrores que había cometido la Junta Militar en su primer año de gobierno, incluyendo desapariciones forzosas, torturas y censura masiva en los medios. Al día siguiente Rodolfo Walsh es acorralado por el ejército y ejecutado en el momento.', 'https://lavaca.org/wp-content/uploads/2023/04/La-ultima-carta-de-Rodolfo-Walsh-1024x590-1.jpg'),
(3, '1977-04-30', 'Las que no se cayaron', 'Había pasado un año de dictadura, tiempo en el que desaparecieron una gran cantidad de personas, sin embargo no se podía alzar la voz, ya que el régimen castigaba a quienes exigieran una explicación. Por eso mismo, unas madres y abuelas de desaparecidos se dirigieron a Plaza de Mayo con el objetivo de quedarse ahí circulando, ya que la policía las obligaba a no quedarse quietas, con un pañuelo sobre la cabeza que era en realidad un pañal de tela.', 'https://www.infobae.com/resizer/v2/V6L37RXKYNHG7PTVUBJ6EPZCWI.jpg?auth=ef91bbc8b9d1ef68ebe3bf71ed2f0f08a24a0cf74b2dda486e6ea71949ec39f6&smart=true&width=992&height=558&quality=85'),
(4, '1977-12-08', 'Las monjas francesas', 'Este fue uno de los casos de desapariciones más famosos. Se trataba de un grupo de la iglesia de Santa Cruz que preparaba una solicitada que saldría en los diarios. Lo que no sabían es que había un infiltrado, Astiz, quien se hizo pasar por el hermano de uno de los desaparecidos para brindarle información al gobierno de facto.', 'https://upload.wikimedia.org/wikipedia/commons/2/28/L%C3%A9onie_Duquet_y_Alice_Domon.png'),
(5, '1982-04-02', 'La Guerra de Malvinas', 'Esta es la época en la que la dictadura comienza a decaer, el miedo que inflinjía con sus delitos de lesa humanidad ya no era suficiente para tranquilizar a una población cada vez más conciente. Por eso mismo, el representante de la Junta en ese momento, Leopoldo Fortunato Galtieri decidió iniciar una guerra para recuperar unas islas que hace más de un siglo se nos fueron arrebatadas, las Islas Malvinas.', 'https://www.unidiversidad.com.ar/cache/ver_1000_1100.jpg'),
(6, '1983-12-10', 'Un nuevo gobierno democrático', 'En esta fecha asume Raúl Alfonsín como primer presidente votado por el pueblo tras la dictadura.', 'https://www.jujuydice.com.ar/public/images/noticias/54150-a-40-anios-de-la-asuncion-de-alfonsin-y-el-comienzo-de-la-recuperacion-democratica.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `titulo` varchar(255) DEFAULT 'Sin titulo',
  `descripcion` text DEFAULT 'Sin descripcion',
  `imagen_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fotos`
--

INSERT INTO `fotos` (`id`, `fecha`, `titulo`, `descripcion`, `imagen_url`) VALUES
(1, '2026-03-16', 'Marcha en memoria de los desaparecidos', 'Sin descripcion', '../img/MVJ1.jpg'),
(2, '2026-03-16', 'Telón con los rostros de los desaparecidos', 'Sin descripcion', '../img/MVJ2.jpg'),
(5, '2026-03-16', 'Madres de Plaza de Mayo', 'Sin descripcion', '../img/MVJ3.jpg'),
(6, '2026-03-16', 'Madre e hija en Plaza de Mayo', 'Sin descripcion', '../img/MVJ4.jpg'),
(7, '2026-03-16', 'Abuelas de Plaza de Mayo', 'Sin descripcion', '../img/MVJ5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonios`
--

CREATE TABLE `testimonios` (
  `id` int(11) NOT NULL,
  `nombre_fuente` varchar(255) NOT NULL DEFAULT 'sin nombre',
  `texto_testimonio` text NOT NULL DEFAULT 'sin descripcion',
  `fecha_carga` date NOT NULL DEFAULT current_timestamp(),
  `imagen_url` varchar(255) NOT NULL DEFAULT '../img/collage.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonios`
--

INSERT INTO `testimonios` (`id`, `nombre_fuente`, `texto_testimonio`, `fecha_carga`, `imagen_url`) VALUES
(5, 'Emilce Moler', 'Emilce Moler viene de una charla con un periodista de España, donde estudian y toman a la sociedad y parte de la política argentina como ejemplo de lucha contra los crímenes de lesa humanidad. Es que allí, tras los delitos cometidos durante el franquismo, los represores andan sueltos. La profesora de matemáticas y Doctora en Bioingeniería cambia de videollamada y se suma a otra con El Destape para hablar sobre algo que no se lo contó nadie, lo vivió en carne propia. \"La Noche de los Lápices\", hecho en el que fue secuestrada, torturada y desaparecida junto a otros nueve compañeros. Fue hace 45 años, aunque advierte: \"El pasado no pasó y de eso tenemos que hablar\". Fue en la última dictadura cívico-militar y en una época en la que realmente no había libertad, concepto que en la actualidad es utilizado de manera irresponsable y desmedida por sectores de la ultraderecha y del periodismo desestabilizador.\n                    \"Nosotros, a veces, sentimos que en nuestro país está todo mal, la justicia o la democracia y todos esos malestares... me gusta poner en valor lo hecho. No para ocultar lo que falta sino para tener una justa medida de todo lo hecho. A mí me parece que, como sociedad, hicimos grandes avances que no hicieron otros países. Eso nos puede llevar a hacer un recorrido de democracia muy distinto. Logramos rechazar las dictaduras, las torturas y la apropiación de los nietos. Estos tres ejes, que parecen obvios, no lo son en todos los países\", reflexiona Emilce sobre lo que ha dejado la dictadura y cómo la sociedad argentina logró llevar adelante una lucha de Memoria, Verdad y Justicia.\n                    \"Logramos, con grandes dificultades, llevar a los genocidas a la cárcel. No a todos, no en el tiempo, en las metodologías, en los modos, pero es lo que pudimos conseguir entre todos con esfuerzo y con grandes decisiones políticas en su momento. Me parece que, como ciudadanos, nos tiene que enorgullecer porque a las nuevas generaciones les dejamos un país mejor. Indudablemente. No es lo mismo que los genocidas estén en la calle tomando un café a que estén condenados\", aseguró. Aun así, sostuvo: \"No quiere decir que no breguemos por mayor justicia para que se terminen rápido los juicios, que están lento, pero son temas que tenemos que poner en valor porque los construimos entre todos con gran esfuerzo\".', '2026-03-17', 'Emilce.jpeg'),
(6, 'Adriana Calvo de Laborde', 'Adriana Calvo de Laborde, licenciada en Física, fue la primera en declarar en el juicio y su testimonio fue estremecedor. Contó que fue secuestrada el 4 de febrero de 1977 en su casa de Tolosa, en las afueras de La Plata, y que pasó por varios Centros Clandestinos de Detención y Tortura del llamado Circuito Camps hasta terminar en El Pozo de Banfield.\r\n                    Estaba embarazada y el 15 de abril empezó con el trabajo de parto. Tuvo a su hija en el piso de un auto, encapuchada y con las manos atadas: “Mi trabajo de parto comenzó alrededor de las 7 de la noche, supongo era de tardecita ya, era mi tercer hijo, ya sabía que iba a nacer muy rápido. Las demás comenzaron a llamar nuevamente al cabo de guardia. Después de muchas horas, yo ya estaba prácticamente con contracciones de parto, llegó un auto, un patrullero, me subieron al auto y salimos. Adelante iban dos personas de civil, el auto era un patrullero, yo lo vi y detrás iba una mujer que yo entiendo se trataba de Lucrecia, por la descripción que me habían hecho de ella las chicas: era una mujer de flequillo, de pelo muy negro, de pelo muy lacio y ojos muy grandes. Iba detrás en el asiento, ella iba sentada junto a una ventanilla, yo iba acostada en el auto, ya no daba más (…)”\r\n                    “Yo iba acostada en el auto, vendada, los ojos vendados y con las manos atadas atrás. Me dediqué, absolutamente todo el tiempo que duró el viaje, a decirles que yo me iba en libertad, que ellos me habían dicho que me largaban, que me llevaran a un hospital. Ellos me dijeron que me llevaban a un hospital, me decían que sí, me decían sí a todo, me insultaban, les decía que estaba por nacer mi criatura, que no podía aguantar más, que pararan, que no era mi primer hijo, yo sabía que estaba por nacer. Lucrecia no hacía nada, el que manejaba y el que lo acompañaba se reía, me decía que era lo mismo, que igual me iban a matar, iban a matar al chico, qué me importaba. Por fin, yo no sé ni cómo alcancé a sacarme la ropa interior para que naciera, realmente no lo recuerdo. Les grité, íbamos a toda velocidad por la ruta que une La Plata con Buenos Aires, y yo les grité ‘ya nace, no aguanto más’, y efectivamente nació, nació mi beba. Lucrecia gritaba ‘ya nació’ (…)”\r\n                    “Mi beba nació bien, era muy chiquita, quedó colgando del cordón, se cayó del asiento, estaba en el piso, yo les pedía por favor que me la alcancen, que me la dejen tener conmigo... no me la alcanzaban, Lucrecia le pidió un trapo al de adelante, que cortó un trapo sucio y con eso ataron el cordón, y seguimos camino. Habían pasado tres minutos, mi beba lloraba, yo seguía con las manos atrás, seguía con los ojos tapados, no me la querían dar, señor presidente, ese día hice la promesa de que si mi beba vivía y yo vivía iba a luchar todo el resto de mis días porque se hiciera justicia”, contó.', '2026-03-17', 'Adriana.jpg'),
(7, 'Pablo Jurkiewicz Artero', 'Me ataron, me encapucharon y me dijeron: decinos dónde está tu vieja ya, porque te vas a comer un garrón.', '2026-03-17', 'Pablo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonios`
--
ALTER TABLE `testimonios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonios`
--
ALTER TABLE `testimonios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
