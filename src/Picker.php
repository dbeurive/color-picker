<?php

/**
 * This file contains the implementation of the color picker.
 */

namespace dbeurive\Color;

/**
 * This class implements the color picker.
 * Class Picker
 * @package dbeurive\Color\Picker
 */

class Picker {

	/** @var string Default output format. */
	private static $__defaultOutputFormat = 'html';

	/** @var array List of all colors' codes. */
	public static $list = array(
		'absoluteZero' => array(
			'name'     => 'Absolute zero',
			'html'     => '#0048BA',
			'graphviz' => '#0048BA',
			'rgb'      => array(0, 28, 73),
			'hsl'      => array(217, 100, 37),
			'hsv'      => array(217, 100, 73)
		),
		'acidGreen' => array(
			'name'     => 'Acid green',
			'html'     => '#B0BF1A',
			'graphviz' => '#B0BF1A',
			'rgb'      => array(69, 75, 10),
			'hsl'      => array(65, 76, 43),
			'hsv'      => array(65, 86, 75)
		),
		'aero' => array(
			'name'     => 'Aero',
			'html'     => '#7CB9E8',
			'graphviz' => '#7CB9E8',
			'rgb'      => array(49, 73, 91),
			'hsl'      => array(206, 70, 70),
			'hsv'      => array(206, 47, 91)
		),
		'aeroBlue' => array(
			'name'     => 'Aero blue',
			'html'     => '#C9FFE5',
			'graphviz' => '#C9FFE5',
			'rgb'      => array(79, 100, 90),
			'hsl'      => array(151, 100, 89),
			'hsv'      => array(151, 21, 100)
		),
		'africanViolet' => array(
			'name'     => 'African violet',
			'html'     => '#B284BE',
			'graphviz' => '#B284BE',
			'rgb'      => array(70, 52, 75),
			'hsl'      => array(288, 31, 63),
			'hsv'      => array(288, 31, 75)
		),
		'airForceBlueRaf' => array(
			'name'     => 'Air Force blue (RAF)',
			'html'     => '#5D8AA8',
			'graphviz' => '#5D8AA8',
			'rgb'      => array(36, 54, 66),
			'hsl'      => array(204, 30, 51),
			'hsv'      => array(204, 45, 66)
		),
		'airForceBlueUsaf' => array(
			'name'     => 'Air Force blue (USAF)',
			'html'     => '#00308F',
			'graphviz' => '#00308F',
			'rgb'      => array(0, 19, 56),
			'hsl'      => array(220, 100, 28),
			'hsv'      => array(220, 100, 56)
		),
		'airSuperiorityBlue' => array(
			'name'     => 'Air superiority blue',
			'html'     => '#72A0C1',
			'graphviz' => '#72A0C1',
			'rgb'      => array(45, 63, 76),
			'hsl'      => array(205, 39, 60),
			'hsv'      => array(205, 41, 76)
		),
		'alabamaCrimson' => array(
			'name'     => 'Alabama crimson',
			'html'     => '#AF002A',
			'graphviz' => '#AF002A',
			'rgb'      => array(69, 0, 16),
			'hsl'      => array(346, 100, 34),
			'hsv'      => array(346, 100, 69)
		),
		'alabaster' => array(
			'name'     => 'Alabaster',
			'html'     => '#F2F0E6',
			'graphviz' => '#F2F0E6',
			'rgb'      => array(95, 94, 90),
			'hsl'      => array(346, 32, 93),
			'hsv'      => array(346, 100, 69)
		),
		'aliceBlue' => array(
			'name'     => 'Alice blue',
			'html'     => '#F0F8FF',
			'graphviz' => '#F0F8FF',
			'rgb'      => array(94, 97, 100),
			'hsl'      => array(208, 100, 97),
			'hsv'      => array(208, 6, 100)
		),
		'alienArmpit' => array(
			'name'     => 'Alien Armpit',
			'html'     => '#84DE02',
			'graphviz' => '#84DE02',
			'rgb'      => array(52, 87, 1),
			'hsl'      => array(85, 98, 44),
			'hsv'      => array(85, 99, 87)
		),
		'alizarinCrimson' => array(
			'name'     => 'Alizarin crimson',
			'html'     => '#E32636',
			'graphviz' => '#E32636',
			'rgb'      => array(89, 15, 21),
			'hsl'      => array(355, 77, 52),
			'hsv'      => array(355, 83, 89)
		),
		'alloyOrange' => array(
			'name'     => 'Alloy orange',
			'html'     => '#C46210',
			'graphviz' => '#C46210',
			'rgb'      => array(77, 38, 6),
			'hsl'      => array(27, 85, 42),
			'hsv'      => array(27, 92, 77)
		),
		'almond' => array(
			'name'     => 'Almond',
			'html'     => '#EFDECD',
			'graphviz' => '#EFDECD',
			'rgb'      => array(94, 87, 80),
			'hsl'      => array(30, 52, 87),
			'hsv'      => array(30, 14, 94)
		),
		'amaranth' => array(
			'name'     => 'Amaranth',
			'html'     => '#E52B50',
			'graphviz' => '#E52B50',
			'rgb'      => array(90, 17, 31),
			'hsl'      => array(348, 78, 53),
			'hsv'      => array(348, 81, 90)
		),
		'amaranthDeepPurple' => array(
			'name'     => 'Amaranth deep purple',
			'html'     => '#9F2B68',
			'graphviz' => '#9F2B68',
			'rgb'      => array(62, 17, 41),
			'hsl'      => array(328, 57, 40),
			'hsv'      => array(328, 73, 62)
		),
		'amaranthPink' => array(
			'name'     => 'Amaranth pink',
			'html'     => '#F19CBB',
			'graphviz' => '#F19CBB',
			'rgb'      => array(95, 61, 73),
			'hsl'      => array(338, 75, 78),
			'hsv'      => array(338, 35, 95)
		),
		'amaranthPurple' => array(
			'name'     => 'Amaranth purple',
			'html'     => '#AB274F',
			'graphviz' => '#AB274F',
			'rgb'      => array(67, 15, 31),
			'hsl'      => array(342, 63, 41),
			'hsv'      => array(342, 77, 67)
		),
		'amaranthRed' => array(
			'name'     => 'Amaranth red',
			'html'     => '#D3212D',
			'graphviz' => '#D3212D',
			'rgb'      => array(83, 13, 18),
			'hsl'      => array(356, 73, 48),
			'hsv'      => array(356, 84, 83)
		),
		'amazon' => array(
			'name'     => 'Amazon',
			'html'     => '#3B7A57',
			'graphviz' => '#3B7A57',
			'rgb'      => array(23, 48, 34),
			'hsl'      => array(147, 35, 35),
			'hsv'      => array(147, 52, 48)
		),
		'amazonite' => array(
			'name'     => 'Amazonite',
			'html'     => '#00C4B0',
			'graphviz' => '#00C4B0',
			'rgb'      => array(0, 77, 69),
			'hsl'      => array(356, 100, 38),
			'hsv'      => array(356, 84, 83)
		),
		'amber' => array(
			'name'     => 'Amber',
			'html'     => '#FFBF00',
			'graphviz' => '#FFBF00',
			'rgb'      => array(100, 75, 0),
			'hsl'      => array(45, 100, 50),
			'hsv'      => array(45, 100, 100)
		),
		'amberSaeEce' => array(
			'name'     => 'Amber (SAE/ECE)',
			'html'     => '#FF7E00',
			'graphviz' => '#FF7E00',
			'rgb'      => array(100, 49, 0),
			'hsl'      => array(30, 100, 50),
			'hsv'      => array(30, 100, 100)
		),
		'americanRose' => array(
			'name'     => 'American rose',
			'html'     => '#FF033E',
			'graphviz' => '#FF033E',
			'rgb'      => array(100, 1, 24),
			'hsl'      => array(346, 100, 51),
			'hsv'      => array(346, 99, 100)
		),
		'amethyst' => array(
			'name'     => 'Amethyst',
			'html'     => '#9966CC',
			'graphviz' => '#9966CC',
			'rgb'      => array(60, 40, 80),
			'hsl'      => array(270, 50, 60),
			'hsv'      => array(270, 50, 80)
		),
		'androidGreen' => array(
			'name'     => 'Android green',
			'html'     => '#A4C639',
			'graphviz' => '#A4C639',
			'rgb'      => array(64, 78, 22),
			'hsl'      => array(74, 55, 50),
			'hsv'      => array(74, 71, 78)
		),
		'antiFlashWhite' => array(
			'name'     => 'Anti-flash white',
			'html'     => '#F2F3F4',
			'graphviz' => '#F2F3F4',
			'rgb'      => array(95, 95, 96),
			'hsl'      => array(210, 8, 95),
			'hsv'      => array(210, 1, 96)
		),
		'antiqueBrass' => array(
			'name'     => 'Antique brass',
			'html'     => '#CD9575',
			'graphviz' => '#CD9575',
			'rgb'      => array(80, 58, 46),
			'hsl'      => array(22, 47, 63),
			'hsv'      => array(22, 43, 80)
		),
		'antiqueBronze' => array(
			'name'     => 'Antique bronze',
			'html'     => '#665D1E',
			'graphviz' => '#665D1E',
			'rgb'      => array(40, 36, 12),
			'hsl'      => array(53, 55, 26),
			'hsv'      => array(53, 71, 40)
		),
		'antiqueFuchsia' => array(
			'name'     => 'Antique fuchsia',
			'html'     => '#915C83',
			'graphviz' => '#915C83',
			'rgb'      => array(57, 36, 51),
			'hsl'      => array(316, 22, 46),
			'hsv'      => array(316, 37, 57)
		),
		'antiqueRuby' => array(
			'name'     => 'Antique ruby',
			'html'     => '#841B2D',
			'graphviz' => '#841B2D',
			'rgb'      => array(52, 11, 18),
			'hsl'      => array(350, 66, 31),
			'hsv'      => array(350, 80, 52)
		),
		'antiqueWhite' => array(
			'name'     => 'Antique white',
			'html'     => '#FAEBD7',
			'graphviz' => '#FAEBD7',
			'rgb'      => array(98, 92, 84),
			'hsl'      => array(34, 78, 91),
			'hsv'      => array(34, 14, 98)
		),
		'aoEnglish' => array(
			'name'     => 'Ao (English)',
			'html'     => '#008000',
			'graphviz' => '#008000',
			'rgb'      => array(0, 50, 0),
			'hsl'      => array(120, 100, 25),
			'hsv'      => array(120, 100, 50)
		),
		'appleGreen' => array(
			'name'     => 'Apple green',
			'html'     => '#8DB600',
			'graphviz' => '#8DB600',
			'rgb'      => array(55, 71, 0),
			'hsl'      => array(74, 100, 36),
			'hsv'      => array(74, 100, 71)
		),
		'apricot' => array(
			'name'     => 'Apricot',
			'html'     => '#FBCEB1',
			'graphviz' => '#FBCEB1',
			'rgb'      => array(98, 81, 69),
			'hsl'      => array(24, 90, 84),
			'hsv'      => array(24, 29, 98)
		),
		'aqua' => array(
			'name'     => 'Aqua',
			'html'     => '#00FFFF',
			'graphviz' => '#00FFFF',
			'rgb'      => array(0, 100, 100),
			'hsl'      => array(180, 100, 50),
			'hsv'      => array(180, 100, 100)
		),
		'aquamarine' => array(
			'name'     => 'Aquamarine',
			'html'     => '#7FFFD4',
			'graphviz' => '#7FFFD4',
			'rgb'      => array(50, 100, 83),
			'hsl'      => array(160, 100, 75),
			'hsv'      => array(160, 50, 100)
		),
		'arcticLime' => array(
			'name'     => 'Arctic lime',
			'html'     => '#D0FF14',
			'graphviz' => '#D0FF14',
			'rgb'      => array(82, 100, 8),
			'hsl'      => array(72, 100, 54),
			'hsv'      => array(72, 92, 100)
		),
		'armyGreen' => array(
			'name'     => 'Army green',
			'html'     => '#4B5320',
			'graphviz' => '#4B5320',
			'rgb'      => array(29, 33, 13),
			'hsl'      => array(69, 44, 23),
			'hsv'      => array(69, 61, 33)
		),
		'arsenic' => array(
			'name'     => 'Arsenic',
			'html'     => '#3B444B',
			'graphviz' => '#3B444B',
			'rgb'      => array(23, 27, 29),
			'hsl'      => array(206, 12, 26),
			'hsv'      => array(206, 21, 29)
		),
		'artichoke' => array(
			'name'     => 'Artichoke',
			'html'     => '#8F9779',
			'graphviz' => '#8F9779',
			'rgb'      => array(56, 59, 47),
			'hsl'      => array(76, 13, 53),
			'hsv'      => array(76, 20, 59)
		),
		'arylideYellow' => array(
			'name'     => 'Arylide yellow',
			'html'     => '#E9D66B',
			'graphviz' => '#E9D66B',
			'rgb'      => array(91, 84, 42),
			'hsl'      => array(51, 74, 67),
			'hsv'      => array(51, 54, 91)
		),
		'ashGrey' => array(
			'name'     => 'Ash grey',
			'html'     => '#B2BEB5',
			'graphviz' => '#B2BEB5',
			'rgb'      => array(70, 75, 71),
			'hsl'      => array(135, 8, 72),
			'hsv'      => array(135, 6, 75)
		),
		'asparagus' => array(
			'name'     => 'Asparagus',
			'html'     => '#87A96B',
			'graphviz' => '#87A96B',
			'rgb'      => array(53, 66, 42),
			'hsl'      => array(93, 26, 54),
			'hsv'      => array(93, 37, 66)
		),
		'atomicTangerine' => array(
			'name'     => 'Atomic tangerine',
			'html'     => '#FF9966',
			'graphviz' => '#FF9966',
			'rgb'      => array(100, 60, 40),
			'hsl'      => array(20, 100, 70),
			'hsv'      => array(20, 60, 100)
		),
		'auburn' => array(
			'name'     => 'Auburn',
			'html'     => '#A52A2A',
			'graphviz' => '#A52A2A',
			'rgb'      => array(65, 16, 16),
			'hsl'      => array(0, 59, 41),
			'hsv'      => array(0, 75, 65)
		),
		'aureolin' => array(
			'name'     => 'Aureolin',
			'html'     => '#FDEE00',
			'graphviz' => '#FDEE00',
			'rgb'      => array(99, 93, 0),
			'hsl'      => array(56, 100, 50),
			'hsv'      => array(56, 100, 99)
		),
		'aurometalsaurus' => array(
			'name'     => 'AuroMetalSaurus',
			'html'     => '#6E7F80',
			'graphviz' => '#6E7F80',
			'rgb'      => array(43, 50, 50),
			'hsl'      => array(183, 8, 47),
			'hsv'      => array(183, 14, 50)
		),
		'avocado' => array(
			'name'     => 'Avocado',
			'html'     => '#568203',
			'graphviz' => '#568203',
			'rgb'      => array(34, 51, 1),
			'hsl'      => array(81, 95, 26),
			'hsv'      => array(81, 98, 51)
		),
		'awesome' => array(
			'name'     => 'Awesome',
			'html'     => '#FF2052',
			'graphviz' => '#FF2052',
			'rgb'      => array(100, 13, 32),
			'hsl'      => array(81, 95, 56),
			'hsv'      => array(81, 98, 51)
		),
		'aztecGold' => array(
			'name'     => 'Aztec Gold',
			'html'     => '#C39953',
			'graphviz' => '#C39953',
			'rgb'      => array(76, 60, 33),
			'hsl'      => array(38, 48, 55),
			'hsv'      => array(38, 57, 77)
		),
		'azure' => array(
			'name'     => 'Azure',
			'html'     => '#007FFF',
			'graphviz' => '#007FFF',
			'rgb'      => array(0, 50, 100),
			'hsl'      => array(210, 100, 50),
			'hsv'      => array(210, 100, 100)
		),
		'azureWebColor' => array(
			'name'     => 'Azure (web color)',
			'html'     => '#F0FFFF',
			'graphviz' => '#F0FFFF',
			'rgb'      => array(94, 100, 100),
			'hsl'      => array(180, 100, 97),
			'hsv'      => array(180, 6, 100)
		),
		'azureMist' => array(
			'name'     => 'Azure mist',
			'html'     => '#F0FFFF',
			'graphviz' => '#F0FFFF',
			'rgb'      => array(94, 100, 100),
			'hsl'      => array(180, 100, 97),
			'hsv'      => array(180, 6, 100)
		),
		'azureishWhite' => array(
			'name'     => 'Azureish white',
			'html'     => '#DBE9F4',
			'graphviz' => '#DBE9F4',
			'rgb'      => array(86, 91, 96),
			'hsl'      => array(206, 53, 91),
			'hsv'      => array(206, 10, 96)
		),
		'bdazzledBlue' => array(
			'name'     => 'B\'dazzled blue',
			'html'     => '#2E5894',
			'graphviz' => '#2E5894',
			'rgb'      => array(18, 35, 58),
			'hsl'      => array(215, 53, 38),
			'hsv'      => array(215, 69, 58)
		),
		'babyBlue' => array(
			'name'     => 'Baby blue',
			'html'     => '#89CFF0',
			'graphviz' => '#89CFF0',
			'rgb'      => array(54, 81, 94),
			'hsl'      => array(199, 77, 74),
			'hsv'      => array(199, 43, 94)
		),
		'babyBlueEyes' => array(
			'name'     => 'Baby blue eyes',
			'html'     => '#A1CAF1',
			'graphviz' => '#A1CAF1',
			'rgb'      => array(63, 79, 95),
			'hsl'      => array(209, 74, 79),
			'hsv'      => array(209, 33, 95)
		),
		'babyPink' => array(
			'name'     => 'Baby pink',
			'html'     => '#F4C2C2',
			'graphviz' => '#F4C2C2',
			'rgb'      => array(96, 76, 76),
			'hsl'      => array(0, 69, 86),
			'hsv'      => array(0, 20, 96)
		),
		'babyPowder' => array(
			'name'     => 'Baby powder',
			'html'     => '#FEFEFA',
			'graphviz' => '#FEFEFA',
			'rgb'      => array(100, 100, 98),
			'hsl'      => array(60, 67, 99),
			'hsv'      => array(60, 2, 100)
		),
		'bakerMillerPink' => array(
			'name'     => 'Baker-Miller pink',
			'html'     => '#FF91AF',
			'graphviz' => '#FF91AF',
			'rgb'      => array(100, 57, 69),
			'hsl'      => array(344, 100, 78),
			'hsv'      => array(344, 43, 100)
		),
		'ballBlue' => array(
			'name'     => 'Ball blue',
			'html'     => '#21ABCD',
			'graphviz' => '#21ABCD',
			'rgb'      => array(13, 67, 80),
			'hsl'      => array(192, 72, 47),
			'hsv'      => array(192, 84, 80)
		),
		'bananaMania' => array(
			'name'     => 'Banana Mania',
			'html'     => '#FAE7B5',
			'graphviz' => '#FAE7B5',
			'rgb'      => array(98, 91, 71),
			'hsl'      => array(43, 87, 85),
			'hsv'      => array(43, 28, 98)
		),
		'bananaYellow' => array(
			'name'     => 'Banana yellow',
			'html'     => '#FFE135',
			'graphviz' => '#FFE135',
			'rgb'      => array(100, 88, 21),
			'hsl'      => array(51, 100, 60),
			'hsv'      => array(51, 79, 100)
		),
		'bangladeshGreen' => array(
			'name'     => 'Bangladesh green',
			'html'     => '#006A4E',
			'graphviz' => '#006A4E',
			'rgb'      => array(0, 42, 31),
			'hsl'      => array(164, 100, 21),
			'hsv'      => array(164, 100, 42)
		),
		'barbiePink' => array(
			'name'     => 'Barbie pink',
			'html'     => '#E0218A',
			'graphviz' => '#E0218A',
			'rgb'      => array(88, 13, 54),
			'hsl'      => array(327, 75, 50),
			'hsv'      => array(327, 85, 88)
		),
		'barnRed' => array(
			'name'     => 'Barn red',
			'html'     => '#7C0A02',
			'graphviz' => '#7C0A02',
			'rgb'      => array(49, 4, 1),
			'hsl'      => array(4, 97, 25),
			'hsv'      => array(4, 98, 49)
		),
		'batteryChargedBlue' => array(
			'name'     => 'Battery Charged Blue',
			'html'     => '#1DACD6',
			'graphviz' => '#1DACD6',
			'rgb'      => array(11, 67, 84),
			'hsl'      => array(194, 76, 48),
			'hsv'      => array(194, 86, 84)
		),
		'battleshipGrey' => array(
			'name'     => 'Battleship grey',
			'html'     => '#848482',
			'graphviz' => '#848482',
			'rgb'      => array(52, 52, 51),
			'hsl'      => array(60, 1, 51),
			'hsv'      => array(60, 2, 52)
		),
		'bazaar' => array(
			'name'     => 'Bazaar',
			'html'     => '#98777B',
			'graphviz' => '#98777B',
			'rgb'      => array(60, 47, 48),
			'hsl'      => array(353, 14, 53),
			'hsv'      => array(353, 22, 60)
		),
		'beauBlue' => array(
			'name'     => 'Beau blue',
			'html'     => '#BCD4E6',
			'graphviz' => '#BCD4E6',
			'rgb'      => array(74, 83, 90),
			'hsl'      => array(206, 46, 82),
			'hsv'      => array(206, 18, 90)
		),
		'beaver' => array(
			'name'     => 'Beaver',
			'html'     => '#9F8170',
			'graphviz' => '#9F8170',
			'rgb'      => array(62, 51, 44),
			'hsl'      => array(22, 20, 53),
			'hsv'      => array(22, 30, 62)
		),
		'begonia' => array(
			'name'     => 'Begonia',
			'html'     => '#FA6E79',
			'graphviz' => '#FA6E79',
			'rgb'      => array(98, 43, 47),
			'hsl'      => array(355, 93, 71),
			'hsv'      => array(355, 10, 96)
		),
		'beige' => array(
			'name'     => 'Beige',
			'html'     => '#F5F5DC',
			'graphviz' => '#F5F5DC',
			'rgb'      => array(96, 96, 86),
			'hsl'      => array(60, 56, 91),
			'hsv'      => array(60, 10, 96)
		),
		'bigFootFeet' => array(
			'name'     => 'Big Foot Feet',
			'html'     => '#E88E5A',
			'graphviz' => '#E88E5A',
			'rgb'      => array(91, 56, 35),
			'hsl'      => array(22, 76, 63),
			'hsv'      => array(22, 61, 91)
		),
		'bigDipO’ruby' => array(
			'name'     => 'Big dip o’ruby',
			'html'     => '#9C2542',
			'graphviz' => '#9C2542',
			'rgb'      => array(61, 15, 26),
			'hsl'      => array(345, 62, 38),
			'hsv'      => array(345, 76, 61)
		),
		'bisque' => array(
			'name'     => 'Bisque',
			'html'     => '#FFE4C4',
			'graphviz' => '#FFE4C4',
			'rgb'      => array(100, 89, 77),
			'hsl'      => array(33, 100, 88),
			'hsv'      => array(33, 23, 100)
		),
		'bistre' => array(
			'name'     => 'Bistre',
			'html'     => '#3D2B1F',
			'graphviz' => '#3D2B1F',
			'rgb'      => array(24, 17, 12),
			'hsl'      => array(24, 33, 18),
			'hsv'      => array(24, 49, 24)
		),
		'bistreBrown' => array(
			'name'     => 'Bistre brown',
			'html'     => '#967117',
			'graphviz' => '#967117',
			'rgb'      => array(59, 44, 9),
			'hsl'      => array(43, 73, 34),
			'hsv'      => array(43, 85, 59)
		),
		'bitterLemon' => array(
			'name'     => 'Bitter lemon',
			'html'     => '#CAE00D',
			'graphviz' => '#CAE00D',
			'rgb'      => array(79, 88, 5),
			'hsl'      => array(66, 89, 46),
			'hsv'      => array(66, 94, 88)
		),
		'bitterLime' => array(
			'name'     => 'Bitter lime',
			'html'     => '#BFFF00',
			'graphviz' => '#BFFF00',
			'rgb'      => array(75, 100, 0),
			'hsl'      => array(75, 100, 50),
			'hsv'      => array(75, 100, 100)
		),
		'bittersweet' => array(
			'name'     => 'Bittersweet',
			'html'     => '#FE6F5E',
			'graphviz' => '#FE6F5E',
			'rgb'      => array(100, 44, 37),
			'hsl'      => array(6, 99, 68),
			'hsv'      => array(6, 63, 100)
		),
		'bittersweetShimmer' => array(
			'name'     => 'Bittersweet shimmer',
			'html'     => '#BF4F51',
			'graphviz' => '#BF4F51',
			'rgb'      => array(75, 31, 32),
			'hsl'      => array(359, 47, 53),
			'hsv'      => array(359, 59, 75)
		),
		'black' => array(
			'name'     => 'Black',
			'html'     => '#000000',
			'graphviz' => '#000000',
			'rgb'      => array(0, 0, 0),
			'hsl'      => array(null, 0, 0),
			'hsv'      => array(null, 0, 0)
		),
		'blackCoral' => array(
			'name'     => 'Black Coral',
			'html'     => '#54626F',
			'graphviz' => '#54626F',
			'rgb'      => array(33, 38, 44),
			'hsl'      => array(209, 14, 38),
			'hsv'      => array(209, 24, 44)
		),
		'blackShadows' => array(
			'name'     => 'Black Shadows',
			'html'     => '#BFAFB2',
			'graphviz' => '#BFAFB2',
			'rgb'      => array(75, 69, 70),
			'hsl'      => array(349, 11, 72),
			'hsv'      => array(349, 8, 75)
		),
		'blackBean' => array(
			'name'     => 'Black bean',
			'html'     => '#3D0C02',
			'graphviz' => '#3D0C02',
			'rgb'      => array(24, 5, 1),
			'hsl'      => array(10, 94, 12),
			'hsv'      => array(10, 97, 24)
		),
		'blackLeatherJacket' => array(
			'name'     => 'Black leather jacket',
			'html'     => '#253529',
			'graphviz' => '#253529',
			'rgb'      => array(15, 21, 16),
			'hsl'      => array(135, 18, 18),
			'hsv'      => array(135, 30, 21)
		),
		'blackOlive' => array(
			'name'     => 'Black olive',
			'html'     => '#3B3C36',
			'graphviz' => '#3B3C36',
			'rgb'      => array(23, 24, 21),
			'hsl'      => array(70, 5, 22),
			'hsv'      => array(70, 10, 24)
		),
		'blanchedAlmond' => array(
			'name'     => 'Blanched almond',
			'html'     => '#FFEBCD',
			'graphviz' => '#FFEBCD',
			'rgb'      => array(100, 92, 80),
			'hsl'      => array(36, 100, 90),
			'hsv'      => array(36, 20, 100)
		),
		'blastOffBronze' => array(
			'name'     => 'Blast-off bronze',
			'html'     => '#A57164',
			'graphviz' => '#A57164',
			'rgb'      => array(65, 44, 39),
			'hsl'      => array(12, 27, 52),
			'hsv'      => array(12, 39, 65)
		),
		'bleuDeFrance' => array(
			'name'     => 'Bleu de France',
			'html'     => '#318CE7',
			'graphviz' => '#318CE7',
			'rgb'      => array(19, 55, 91),
			'hsl'      => array(210, 79, 55),
			'hsv'      => array(210, 79, 91)
		),
		'blizzardBlue' => array(
			'name'     => 'Blizzard Blue',
			'html'     => '#ACE5EE',
			'graphviz' => '#ACE5EE',
			'rgb'      => array(67, 90, 93),
			'hsl'      => array(188, 66, 80),
			'hsv'      => array(188, 28, 93)
		),
		'blond' => array(
			'name'     => 'Blond',
			'html'     => '#FAF0BE',
			'graphviz' => '#FAF0BE',
			'rgb'      => array(98, 94, 75),
			'hsl'      => array(50, 86, 86),
			'hsv'      => array(50, 24, 98)
		),
		'blue' => array(
			'name'     => 'Blue',
			'html'     => '#0000FF',
			'graphviz' => '#0000FF',
			'rgb'      => array(0, 0, 100),
			'hsl'      => array(240, 100, 50),
			'hsv'      => array(240, 100, 100)
		),
		'blueCrayola' => array(
			'name'     => 'Blue (Crayola)',
			'html'     => '#1F75FE',
			'graphviz' => '#1F75FE',
			'rgb'      => array(12, 46, 100),
			'hsl'      => array(217, 99, 56),
			'hsv'      => array(217, 88, 100)
		),
		'blueMunsell' => array(
			'name'     => 'Blue (Munsell)',
			'html'     => '#0093AF',
			'graphviz' => '#0093AF',
			'rgb'      => array(0, 58, 69),
			'hsl'      => array(190, 100, 34),
			'hsv'      => array(190, 100, 69)
		),
		'blueNcs' => array(
			'name'     => 'Blue (NCS)',
			'html'     => '#0087BD',
			'graphviz' => '#0087BD',
			'rgb'      => array(0, 53, 74),
			'hsl'      => array(197, 100, 37),
			'hsv'      => array(197, 100, 74)
		),
		'bluePantone' => array(
			'name'     => 'Blue (Pantone)',
			'html'     => '#0018A8',
			'graphviz' => '#0018A8',
			'rgb'      => array(0, 9, 66),
			'hsl'      => array(231, 100, 33),
			'hsv'      => array(231, 100, 66)
		),
		'blueRyb' => array(
			'name'     => 'Blue (RYB)',
			'html'     => '#0247FE',
			'graphviz' => '#0247FE',
			'rgb'      => array(1, 28, 100),
			'hsl'      => array(224, 99, 50),
			'hsv'      => array(224, 99, 100)
		),
		'bluePigment' => array(
			'name'     => 'Blue (pigment)',
			'html'     => '#333399',
			'graphviz' => '#333399',
			'rgb'      => array(20, 20, 60),
			'hsl'      => array(240, 50, 40),
			'hsv'      => array(240, 67, 60)
		),
		'blueBell' => array(
			'name'     => 'Blue Bell',
			'html'     => '#A2A2D0',
			'graphviz' => '#A2A2D0',
			'rgb'      => array(64, 64, 82),
			'hsl'      => array(240, 33, 73),
			'hsv'      => array(240, 22, 82)
		),
		'blueBolt' => array(
			'name'     => 'Blue Bolt',
			'html'     => '#00B9FB',
			'graphviz' => '#00B9FB',
			'rgb'      => array(0, 73, 98),
			'hsl'      => array(196, 100, 49),
			'hsv'      => array(196, 100, 98)
		),
		'blueJeans' => array(
			'name'     => 'Blue Jeans',
			'html'     => '#5DADEC',
			'graphviz' => '#5DADEC',
			'rgb'      => array(36, 68, 93),
			'hsl'      => array(206, 79, 65),
			'hsv'      => array(206, 61, 93)
		),
		'blueLagoon' => array(
			'name'     => 'Blue Lagoon',
			'html'     => '#ACE5EE',
			'graphviz' => '#ACE5EE',
			'rgb'      => array(67, 90, 93),
			'hsl'      => array(188, 66, 80),
			'hsv'      => array(188, 28, 93)
		),
		'blueSapphire' => array(
			'name'     => 'Blue sapphire',
			'html'     => '#126180',
			'graphviz' => '#126180',
			'rgb'      => array(7, 38, 50),
			'hsl'      => array(197, 75, 29),
			'hsv'      => array(197, 86, 50)
		),
		'blueYonder' => array(
			'name'     => 'Blue yonder',
			'html'     => '#5072A7',
			'graphviz' => '#5072A7',
			'rgb'      => array(31, 45, 65),
			'hsl'      => array(217, 35, 48),
			'hsv'      => array(217, 52, 65)
		),
		'blueGray' => array(
			'name'     => 'Blue-gray',
			'html'     => '#6699CC',
			'graphviz' => '#6699CC',
			'rgb'      => array(40, 60, 80),
			'hsl'      => array(210, 50, 60),
			'hsv'      => array(210, 50, 80)
		),
		'blueGreen' => array(
			'name'     => 'Blue-green',
			'html'     => '#0D98BA',
			'graphviz' => '#0D98BA',
			'rgb'      => array(5, 60, 73),
			'hsl'      => array(192, 87, 39),
			'hsv'      => array(192, 93, 73)
		),
		'blueMagentaViolet' => array(
			'name'     => 'Blue-magenta violet',
			'html'     => '#553592',
			'graphviz' => '#553592',
			'rgb'      => array(33, 21, 57),
			'hsl'      => array(261, 47, 39),
			'hsv'      => array(261, 64, 57)
		),
		'blueViolet' => array(
			'name'     => 'Blue-violet',
			'html'     => '#8A2BE2',
			'graphviz' => '#8A2BE2',
			'rgb'      => array(54, 17, 89),
			'hsl'      => array(271, 76, 53),
			'hsv'      => array(271, 81, 89)
		),
		'blueberry' => array(
			'name'     => 'Blueberry',
			'html'     => '#4F86F7',
			'graphviz' => '#4F86F7',
			'rgb'      => array(31, 53, 97),
			'hsl'      => array(220, 91, 64),
			'hsv'      => array(220, 68, 97)
		),
		'bluebonnet' => array(
			'name'     => 'Bluebonnet',
			'html'     => '#1C1CF0',
			'graphviz' => '#1C1CF0',
			'rgb'      => array(11, 11, 94),
			'hsl'      => array(240, 88, 53),
			'hsv'      => array(240, 88, 94)
		),
		'blush' => array(
			'name'     => 'Blush',
			'html'     => '#DE5D83',
			'graphviz' => '#DE5D83',
			'rgb'      => array(87, 36, 51),
			'hsl'      => array(342, 66, 62),
			'hsv'      => array(342, 58, 87)
		),
		'bole' => array(
			'name'     => 'Bole',
			'html'     => '#79443B',
			'graphviz' => '#79443B',
			'rgb'      => array(47, 27, 23),
			'hsl'      => array(9, 34, 35),
			'hsv'      => array(9, 51, 47)
		),
		'bondiBlue' => array(
			'name'     => 'Bondi blue',
			'html'     => '#0095B6',
			'graphviz' => '#0095B6',
			'rgb'      => array(0, 58, 71),
			'hsl'      => array(191, 100, 36),
			'hsv'      => array(191, 100, 71)
		),
		'bone' => array(
			'name'     => 'Bone',
			'html'     => '#E3DAC9',
			'graphviz' => '#E3DAC9',
			'rgb'      => array(89, 85, 79),
			'hsl'      => array(39, 32, 84),
			'hsv'      => array(39, 11, 89)
		),
		'boogerBuster' => array(
			'name'     => 'Booger Buster',
			'html'     => '#DDE26A',
			'graphviz' => '#DDE26A',
			'rgb'      => array(87, 89, 42),
			'hsl'      => array(63, 67, 65),
			'hsv'      => array(63, 53, 89)
		),
		'bostonUniversityRed' => array(
			'name'     => 'Boston University Red',
			'html'     => '#CC0000',
			'graphviz' => '#CC0000',
			'rgb'      => array(80, 0, 0),
			'hsl'      => array(0, 100, 40),
			'hsv'      => array(0, 100, 80)
		),
		'bottleGreen' => array(
			'name'     => 'Bottle green',
			'html'     => '#006A4E',
			'graphviz' => '#006A4E',
			'rgb'      => array(0, 42, 31),
			'hsl'      => array(164, 100, 21),
			'hsv'      => array(164, 100, 42)
		),
		'boysenberry' => array(
			'name'     => 'Boysenberry',
			'html'     => '#873260',
			'graphviz' => '#873260',
			'rgb'      => array(53, 20, 38),
			'hsl'      => array(328, 46, 36),
			'hsv'      => array(328, 63, 53)
		),
		'brandeisBlue' => array(
			'name'     => 'Brandeis blue',
			'html'     => '#0070FF',
			'graphviz' => '#0070FF',
			'rgb'      => array(0, 44, 100),
			'hsl'      => array(214, 100, 50),
			'hsv'      => array(214, 100, 100)
		),
		'brass' => array(
			'name'     => 'Brass',
			'html'     => '#B5A642',
			'graphviz' => '#B5A642',
			'rgb'      => array(71, 65, 26),
			'hsl'      => array(52, 47, 48),
			'hsv'      => array(52, 64, 71)
		),
		'brickRed' => array(
			'name'     => 'Brick red',
			'html'     => '#CB4154',
			'graphviz' => '#CB4154',
			'rgb'      => array(80, 25, 33),
			'hsl'      => array(352, 57, 53),
			'hsv'      => array(352, 68, 80)
		),
		'brightYellowCrayola' => array(
			'name'     => 'Bright Yellow (Crayola)',
			'html'     => '#FFAA1D',
			'graphviz' => '#FFAA1D',
			'rgb'      => array(100, 67, 11),
			'hsl'      => array(37, 100, 56),
			'hsv'      => array(37, 89, 100)
		),
		'brightCerulean' => array(
			'name'     => 'Bright cerulean',
			'html'     => '#1DACD6',
			'graphviz' => '#1DACD6',
			'rgb'      => array(11, 67, 84),
			'hsl'      => array(194, 76, 48),
			'hsv'      => array(194, 86, 84)
		),
		'brightGreen' => array(
			'name'     => 'Bright green',
			'html'     => '#66FF00',
			'graphviz' => '#66FF00',
			'rgb'      => array(40, 100, 0),
			'hsl'      => array(96, 100, 50),
			'hsv'      => array(96, 100, 100)
		),
		'brightLavender' => array(
			'name'     => 'Bright lavender',
			'html'     => '#BF94E4',
			'graphviz' => '#BF94E4',
			'rgb'      => array(75, 58, 89),
			'hsl'      => array(272, 60, 74),
			'hsv'      => array(272, 35, 89)
		),
		'brightLilac' => array(
			'name'     => 'Bright lilac',
			'html'     => '#D891EF',
			'graphviz' => '#D891EF',
			'rgb'      => array(85, 57, 94),
			'hsl'      => array(285, 75, 75),
			'hsv'      => array(285, 39, 94)
		),
		'brightMaroon' => array(
			'name'     => 'Bright maroon',
			'html'     => '#C32148',
			'graphviz' => '#C32148',
			'rgb'      => array(76, 13, 28),
			'hsl'      => array(346, 71, 45),
			'hsv'      => array(346, 83, 76)
		),
		'brightNavyBlue' => array(
			'name'     => 'Bright navy blue',
			'html'     => '#1974D2',
			'graphviz' => '#1974D2',
			'rgb'      => array(10, 45, 82),
			'hsl'      => array(210, 79, 46),
			'hsv'      => array(210, 88, 82)
		),
		'brightPink' => array(
			'name'     => 'Bright pink',
			'html'     => '#FF007F',
			'graphviz' => '#FF007F',
			'rgb'      => array(100, 0, 50),
			'hsl'      => array(330, 100, 50),
			'hsv'      => array(330, 100, 100)
		),
		'brightTurquoise' => array(
			'name'     => 'Bright turquoise',
			'html'     => '#08E8DE',
			'graphviz' => '#08E8DE',
			'rgb'      => array(3, 91, 87),
			'hsl'      => array(177, 93, 47),
			'hsv'      => array(177, 97, 91)
		),
		'brightUbe' => array(
			'name'     => 'Bright ube',
			'html'     => '#D19FE8',
			'graphviz' => '#D19FE8',
			'rgb'      => array(82, 62, 91),
			'hsl'      => array(281, 61, 77),
			'hsv'      => array(281, 31, 91)
		),
		'brilliantAzure' => array(
			'name'     => 'Brilliant azure',
			'html'     => '#3399FF',
			'graphviz' => '#3399FF',
			'rgb'      => array(20, 60, 100),
			'hsl'      => array(210, 100, 60),
			'hsv'      => array(210, 80, 100)
		),
		'brilliantLavender' => array(
			'name'     => 'Brilliant lavender',
			'html'     => '#F4BBFF',
			'graphviz' => '#F4BBFF',
			'rgb'      => array(96, 73, 100),
			'hsl'      => array(290, 100, 87),
			'hsv'      => array(290, 27, 100)
		),
		'brilliantRose' => array(
			'name'     => 'Brilliant rose',
			'html'     => '#FF55A3',
			'graphviz' => '#FF55A3',
			'rgb'      => array(100, 33, 64),
			'hsl'      => array(332, 100, 67),
			'hsv'      => array(332, 67, 100)
		),
		'brinkPink' => array(
			'name'     => 'Brink pink',
			'html'     => '#FB607F',
			'graphviz' => '#FB607F',
			'rgb'      => array(98, 38, 50),
			'hsl'      => array(348, 95, 68),
			'hsv'      => array(348, 62, 98)
		),
		'britishRacingGreen' => array(
			'name'     => 'British racing green',
			'html'     => '#004225',
			'graphviz' => '#004225',
			'rgb'      => array(0, 26, 15),
			'hsl'      => array(154, 100, 13),
			'hsv'      => array(154, 100, 26)
		),
		'bronze' => array(
			'name'     => 'Bronze',
			'html'     => '#CD7F32',
			'graphviz' => '#CD7F32',
			'rgb'      => array(80, 50, 20),
			'hsl'      => array(30, 61, 50),
			'hsv'      => array(30, 76, 80)
		),
		'bronzeYellow' => array(
			'name'     => 'Bronze Yellow',
			'html'     => '#737000',
			'graphviz' => '#737000',
			'rgb'      => array(45, 44, 0),
			'hsl'      => array(58, 100, 23),
			'hsv'      => array(58, 100, 45)
		),
		'brownTraditional' => array(
			'name'     => 'Brown (traditional)',
			'html'     => '#964B00',
			'graphviz' => '#964B00',
			'rgb'      => array(59, 29, 0),
			'hsl'      => array(30, 100, 29),
			'hsv'      => array(30, 100, 59)
		),
		'brownWeb' => array(
			'name'     => 'Brown (web)',
			'html'     => '#A52A2A',
			'graphviz' => '#A52A2A',
			'rgb'      => array(65, 16, 16),
			'hsl'      => array(0, 59, 41),
			'hsv'      => array(0, 75, 65)
		),
		'brownSugar' => array(
			'name'     => 'Brown Sugar',
			'html'     => '#AF6E4D',
			'graphviz' => '#AF6E4D',
			'rgb'      => array(69, 43, 30),
			'hsl'      => array(20, 39, 49),
			'hsv'      => array(20, 56, 69)
		),
		'brownYellow' => array(
			'name'     => 'Brown Yellow',
			'html'     => '#cc9966',
			'graphviz' => '#cc9966',
			'rgb'      => array(80, 60, 40),
			'hsl'      => array(30, 50, 60),
			'hsv'      => array(30, 50, 80)
		),
		'brownNose' => array(
			'name'     => 'Brown-nose',
			'html'     => '#6B4423',
			'graphviz' => '#6B4423',
			'rgb'      => array(42, 27, 14),
			'hsl'      => array(28, 51, 28),
			'hsv'      => array(28, 67, 42)
		),
		'brunswickGreen' => array(
			'name'     => 'Brunswick green',
			'html'     => '#1B4D3E',
			'graphviz' => '#1B4D3E',
			'rgb'      => array(11, 30, 24),
			'hsl'      => array(162, 48, 20),
			'hsv'      => array(162, 65, 30)
		),
		'bubbleGum' => array(
			'name'     => 'Bubble gum',
			'html'     => '#FFC1CC',
			'graphviz' => '#FFC1CC',
			'rgb'      => array(100, 76, 80),
			'hsl'      => array(349, 100, 88),
			'hsv'      => array(349, 24, 100)
		),
		'bubbles' => array(
			'name'     => 'Bubbles',
			'html'     => '#E7FEFF',
			'graphviz' => '#E7FEFF',
			'rgb'      => array(91, 100, 100),
			'hsl'      => array(183, 100, 95),
			'hsv'      => array(183, 9, 100)
		),
		'budGreen' => array(
			'name'     => 'Bud green',
			'html'     => '#7BB661',
			'graphviz' => '#7BB661',
			'rgb'      => array(48, 71, 38),
			'hsl'      => array(102, 37, 55),
			'hsv'      => array(102, 47, 71)
		),
		'buff' => array(
			'name'     => 'Buff',
			'html'     => '#F0DC82',
			'graphviz' => '#F0DC82',
			'rgb'      => array(94, 86, 51),
			'hsl'      => array(49, 79, 73),
			'hsv'      => array(49, 46, 94)
		),
		'bulgarianRose' => array(
			'name'     => 'Bulgarian rose',
			'html'     => '#480607',
			'graphviz' => '#480607',
			'rgb'      => array(28, 2, 3),
			'hsl'      => array(359, 85, 15),
			'hsv'      => array(359, 92, 28)
		),
		'burgundy' => array(
			'name'     => 'Burgundy',
			'html'     => '#800020',
			'graphviz' => '#800020',
			'rgb'      => array(50, 0, 13),
			'hsl'      => array(345, 100, 25),
			'hsv'      => array(345, 100, 50)
		),
		'burlywood' => array(
			'name'     => 'Burlywood',
			'html'     => '#DEB887',
			'graphviz' => '#DEB887',
			'rgb'      => array(87, 72, 53),
			'hsl'      => array(34, 57, 70),
			'hsv'      => array(34, 39, 87)
		),
		'burnishedBrown' => array(
			'name'     => 'Burnished Brown',
			'html'     => '#A17A74',
			'graphviz' => '#A17A74',
			'rgb'      => array(63, 48, 45),
			'hsl'      => array(8, 19, 54),
			'hsv'      => array(8, 28, 63)
		),
		'burntOrange' => array(
			'name'     => 'Burnt orange',
			'html'     => '#CC5500',
			'graphviz' => '#CC5500',
			'rgb'      => array(80, 33, 0),
			'hsl'      => array(25, 100, 40),
			'hsv'      => array(25, 100, 80)
		),
		'burntSienna' => array(
			'name'     => 'Burnt sienna',
			'html'     => '#E97451',
			'graphviz' => '#E97451',
			'rgb'      => array(91, 45, 32),
			'hsl'      => array(14, 78, 62),
			'hsv'      => array(14, 65, 91)
		),
		'burntUmber' => array(
			'name'     => 'Burnt umber',
			'html'     => '#8A3324',
			'graphviz' => '#8A3324',
			'rgb'      => array(54, 20, 14),
			'hsl'      => array(9, 59, 34),
			'hsv'      => array(9, 74, 54)
		),
		'byzantine' => array(
			'name'     => 'Byzantine',
			'html'     => '#BD33A4',
			'graphviz' => '#BD33A4',
			'rgb'      => array(74, 20, 64),
			'hsl'      => array(311, 58, 47),
			'hsv'      => array(311, 73, 74)
		),
		'byzantium' => array(
			'name'     => 'Byzantium',
			'html'     => '#702963',
			'graphviz' => '#702963',
			'rgb'      => array(44, 16, 39),
			'hsl'      => array(311, 46, 30),
			'hsv'      => array(311, 63, 44)
		),
		'cgBlue' => array(
			'name'     => 'CG Blue',
			'html'     => '#007AA5',
			'graphviz' => '#007AA5',
			'rgb'      => array(0, 48, 65),
			'hsl'      => array(196, 100, 32),
			'hsv'      => array(196, 100, 65)
		),
		'cgRed' => array(
			'name'     => 'CG Red',
			'html'     => '#E03C31',
			'graphviz' => '#E03C31',
			'rgb'      => array(88, 24, 19),
			'hsl'      => array(4, 74, 54),
			'hsv'      => array(4, 78, 88)
		),
		'cadet' => array(
			'name'     => 'Cadet',
			'html'     => '#536872',
			'graphviz' => '#536872',
			'rgb'      => array(33, 41, 45),
			'hsl'      => array(199, 16, 39),
			'hsv'      => array(199, 27, 45)
		),
		'cadetBlue' => array(
			'name'     => 'Cadet blue',
			'html'     => '#5F9EA0',
			'graphviz' => '#5F9EA0',
			'rgb'      => array(37, 62, 63),
			'hsl'      => array(182, 25, 50),
			'hsv'      => array(182, 41, 63)
		),
		'cadetGrey' => array(
			'name'     => 'Cadet grey',
			'html'     => '#91A3B0',
			'graphviz' => '#91A3B0',
			'rgb'      => array(57, 64, 69),
			'hsl'      => array(205, 16, 63),
			'hsv'      => array(205, 18, 69)
		),
		'cadmiumGreen' => array(
			'name'     => 'Cadmium green',
			'html'     => '#006B3C',
			'graphviz' => '#006B3C',
			'rgb'      => array(0, 42, 24),
			'hsl'      => array(154, 100, 21),
			'hsv'      => array(154, 100, 42)
		),
		'cadmiumOrange' => array(
			'name'     => 'Cadmium orange',
			'html'     => '#ED872D',
			'graphviz' => '#ED872D',
			'rgb'      => array(93, 53, 18),
			'hsl'      => array(28, 84, 55),
			'hsv'      => array(28, 81, 93)
		),
		'cadmiumRed' => array(
			'name'     => 'Cadmium red',
			'html'     => '#E30022',
			'graphviz' => '#E30022',
			'rgb'      => array(89, 0, 13),
			'hsl'      => array(351, 100, 45),
			'hsv'      => array(351, 100, 89)
		),
		'cadmiumYellow' => array(
			'name'     => 'Cadmium yellow',
			'html'     => '#FFF600',
			'graphviz' => '#FFF600',
			'rgb'      => array(100, 96, 0),
			'hsl'      => array(58, 100, 50),
			'hsv'      => array(58, 100, 100)
		),
		'caféAuLait' => array(
			'name'     => 'Café au lait',
			'html'     => '#A67B5B',
			'graphviz' => '#A67B5B',
			'rgb'      => array(65, 48, 36),
			'hsl'      => array(26, 30, 50),
			'hsv'      => array(26, 45, 65)
		),
		'caféNoir' => array(
			'name'     => 'Café noir',
			'html'     => '#4B3621',
			'graphviz' => '#4B3621',
			'rgb'      => array(29, 21, 13),
			'hsl'      => array(30, 39, 21),
			'hsv'      => array(30, 56, 29)
		),
		'calPolyPomonaGreen' => array(
			'name'     => 'Cal Poly Pomona green',
			'html'     => '#1E4D2B',
			'graphviz' => '#1E4D2B',
			'rgb'      => array(12, 30, 17),
			'hsl'      => array(137, 44, 21),
			'hsv'      => array(137, 61, 30)
		),
		'cambridgeBlue' => array(
			'name'     => 'Cambridge Blue',
			'html'     => '#A3C1AD',
			'graphviz' => '#A3C1AD',
			'rgb'      => array(64, 76, 68),
			'hsl'      => array(140, 19, 70),
			'hsv'      => array(140, 16, 76)
		),
		'camel' => array(
			'name'     => 'Camel',
			'html'     => '#C19A6B',
			'graphviz' => '#C19A6B',
			'rgb'      => array(76, 60, 42),
			'hsl'      => array(33, 41, 59),
			'hsv'      => array(33, 45, 76)
		),
		'cameoPink' => array(
			'name'     => 'Cameo pink',
			'html'     => '#EFBBCC',
			'graphviz' => '#EFBBCC',
			'rgb'      => array(94, 73, 80),
			'hsl'      => array(340, 62, 84),
			'hsv'      => array(340, 22, 94)
		),
		'camouflageGreen' => array(
			'name'     => 'Camouflage green',
			'html'     => '#78866B',
			'graphviz' => '#78866B',
			'rgb'      => array(47, 53, 42),
			'hsl'      => array(91, 11, 47),
			'hsv'      => array(91, 20, 53)
		),
		'canary' => array(
			'name'     => 'Canary',
			'html'     => '#FFFF99',
			'graphviz' => '#FFFF99',
			'rgb'      => array(100, 100, 60),
			'hsl'      => array(60, 100, 80),
			'hsv'      => array(60, 40, 100)
		),
		'canaryYellow' => array(
			'name'     => 'Canary yellow',
			'html'     => '#FFEF00',
			'graphviz' => '#FFEF00',
			'rgb'      => array(100, 94, 0),
			'hsl'      => array(56, 100, 50),
			'hsv'      => array(56, 100, 100)
		),
		'candyAppleRed' => array(
			'name'     => 'Candy apple red',
			'html'     => '#FF0800',
			'graphviz' => '#FF0800',
			'rgb'      => array(100, 3, 0),
			'hsl'      => array(2, 100, 50),
			'hsv'      => array(2, 100, 100)
		),
		'candyPink' => array(
			'name'     => 'Candy pink',
			'html'     => '#E4717A',
			'graphviz' => '#E4717A',
			'rgb'      => array(89, 44, 48),
			'hsl'      => array(355, 68, 67),
			'hsv'      => array(355, 50, 89)
		),
		'capri' => array(
			'name'     => 'Capri',
			'html'     => '#00BFFF',
			'graphviz' => '#00BFFF',
			'rgb'      => array(0, 75, 100),
			'hsl'      => array(195, 100, 50),
			'hsv'      => array(195, 100, 100)
		),
		'caputMortuum' => array(
			'name'     => 'Caput mortuum',
			'html'     => '#592720',
			'graphviz' => '#592720',
			'rgb'      => array(35, 15, 13),
			'hsl'      => array(7, 47, 24),
			'hsv'      => array(7, 64, 35)
		),
		'cardinal' => array(
			'name'     => 'Cardinal',
			'html'     => '#C41E3A',
			'graphviz' => '#C41E3A',
			'rgb'      => array(77, 12, 23),
			'hsl'      => array(350, 73, 44),
			'hsv'      => array(350, 85, 77)
		),
		'caribbeanGreen' => array(
			'name'     => 'Caribbean green',
			'html'     => '#00CC99',
			'graphviz' => '#00CC99',
			'rgb'      => array(0, 80, 60),
			'hsl'      => array(165, 100, 40),
			'hsv'      => array(165, 100, 80)
		),
		'carmine' => array(
			'name'     => 'Carmine',
			'html'     => '#960018',
			'graphviz' => '#960018',
			'rgb'      => array(59, 0, 9),
			'hsl'      => array(350, 100, 29),
			'hsv'      => array(350, 100, 59)
		),
		'carmineMp' => array(
			'name'     => 'Carmine (M&P)',
			'html'     => '#D70040',
			'graphviz' => '#D70040',
			'rgb'      => array(84, 0, 25),
			'hsl'      => array(342, 100, 42),
			'hsv'      => array(342, 100, 84)
		),
		'carminePink' => array(
			'name'     => 'Carmine pink',
			'html'     => '#EB4C42',
			'graphviz' => '#EB4C42',
			'rgb'      => array(92, 30, 26),
			'hsl'      => array(4, 81, 59),
			'hsv'      => array(4, 72, 92)
		),
		'carmineRed' => array(
			'name'     => 'Carmine red',
			'html'     => '#FF0038',
			'graphviz' => '#FF0038',
			'rgb'      => array(100, 0, 22),
			'hsl'      => array(347, 100, 50),
			'hsv'      => array(347, 100, 100)
		),
		'carnationPink' => array(
			'name'     => 'Carnation pink',
			'html'     => '#FFA6C9',
			'graphviz' => '#FFA6C9',
			'rgb'      => array(100, 65, 79),
			'hsl'      => array(336, 100, 83),
			'hsv'      => array(336, 35, 100)
		),
		'carnelian' => array(
			'name'     => 'Carnelian',
			'html'     => '#B31B1B',
			'graphviz' => '#B31B1B',
			'rgb'      => array(70, 11, 11),
			'hsl'      => array(0, 74, 40),
			'hsv'      => array(0, 85, 70)
		),
		'carolinaBlue' => array(
			'name'     => 'Carolina blue',
			'html'     => '#56A0D3',
			'graphviz' => '#56A0D3',
			'rgb'      => array(34, 63, 83),
			'hsl'      => array(204, 59, 58),
			'hsv'      => array(204, 59, 83)
		),
		'carrotOrange' => array(
			'name'     => 'Carrot orange',
			'html'     => '#ED9121',
			'graphviz' => '#ED9121',
			'rgb'      => array(93, 57, 13),
			'hsl'      => array(33, 85, 53),
			'hsv'      => array(33, 86, 93)
		),
		'castletonGreen' => array(
			'name'     => 'Castleton green',
			'html'     => '#00563F',
			'graphviz' => '#00563F',
			'rgb'      => array(0, 34, 25),
			'hsl'      => array(164, 100, 17),
			'hsv'      => array(164, 100, 34)
		),
		'catalinaBlue' => array(
			'name'     => 'Catalina blue',
			'html'     => '#062A78',
			'graphviz' => '#062A78',
			'rgb'      => array(2, 16, 47),
			'hsl'      => array(221, 90, 25),
			'hsv'      => array(221, 95, 47)
		),
		'catawba' => array(
			'name'     => 'Catawba',
			'html'     => '#703642',
			'graphviz' => '#703642',
			'rgb'      => array(44, 21, 26),
			'hsl'      => array(348, 35, 33),
			'hsv'      => array(348, 52, 44)
		),
		'cedarChest' => array(
			'name'     => 'Cedar Chest',
			'html'     => '#C95A49',
			'graphviz' => '#C95A49',
			'rgb'      => array(79, 35, 29),
			'hsl'      => array(8, 54, 54),
			'hsv'      => array(8, 64, 79)
		),
		'ceil' => array(
			'name'     => 'Ceil',
			'html'     => '#92A1CF',
			'graphviz' => '#92A1CF',
			'rgb'      => array(57, 63, 81),
			'hsl'      => array(225, 39, 69),
			'hsv'      => array(225, 29, 81)
		),
		'celadon' => array(
			'name'     => 'Celadon',
			'html'     => '#ACE1AF',
			'graphviz' => '#ACE1AF',
			'rgb'      => array(67, 88, 69),
			'hsl'      => array(123, 47, 78),
			'hsv'      => array(123, 24, 88)
		),
		'celadonBlue' => array(
			'name'     => 'Celadon blue',
			'html'     => '#007BA7',
			'graphviz' => '#007BA7',
			'rgb'      => array(0, 48, 65),
			'hsl'      => array(196, 100, 33),
			'hsv'      => array(196, 100, 65)
		),
		'celadonGreen' => array(
			'name'     => 'Celadon green',
			'html'     => '#2F847C',
			'graphviz' => '#2F847C',
			'rgb'      => array(18, 52, 49),
			'hsl'      => array(174, 47, 35),
			'hsv'      => array(174, 64, 52)
		),
		'celeste' => array(
			'name'     => 'Celeste',
			'html'     => '#B2FFFF',
			'graphviz' => '#B2FFFF',
			'rgb'      => array(70, 100, 100),
			'hsl'      => array(180, 100, 85),
			'hsv'      => array(180, 30, 100)
		),
		'celestialBlue' => array(
			'name'     => 'Celestial blue',
			'html'     => '#4997D0',
			'graphviz' => '#4997D0',
			'rgb'      => array(29, 59, 82),
			'hsl'      => array(205, 59, 55),
			'hsv'      => array(205, 65, 82)
		),
		'cerise' => array(
			'name'     => 'Cerise',
			'html'     => '#DE3163',
			'graphviz' => '#DE3163',
			'rgb'      => array(87, 19, 39),
			'hsl'      => array(343, 72, 53),
			'hsv'      => array(343, 78, 87)
		),
		'cerisePink' => array(
			'name'     => 'Cerise pink',
			'html'     => '#EC3B83',
			'graphviz' => '#EC3B83',
			'rgb'      => array(93, 23, 51),
			'hsl'      => array(336, 82, 58),
			'hsv'      => array(336, 75, 93)
		),
		'cerulean' => array(
			'name'     => 'Cerulean',
			'html'     => '#007BA7',
			'graphviz' => '#007BA7',
			'rgb'      => array(0, 48, 65),
			'hsl'      => array(196, 100, 33),
			'hsv'      => array(196, 100, 65)
		),
		'ceruleanBlue' => array(
			'name'     => 'Cerulean blue',
			'html'     => '#2A52BE',
			'graphviz' => '#2A52BE',
			'rgb'      => array(16, 32, 75),
			'hsl'      => array(224, 64, 45),
			'hsv'      => array(224, 78, 75)
		),
		'ceruleanFrost' => array(
			'name'     => 'Cerulean frost',
			'html'     => '#6D9BC3',
			'graphviz' => '#6D9BC3',
			'rgb'      => array(43, 61, 76),
			'hsl'      => array(208, 42, 60),
			'hsv'      => array(208, 44, 76)
		),
		'chamoisee' => array(
			'name'     => 'Chamoisee',
			'html'     => '#A0785A',
			'graphviz' => '#A0785A',
			'rgb'      => array(63, 47, 35),
			'hsl'      => array(26, 28, 49),
			'hsv'      => array(26, 44, 63)
		),
		'champagne' => array(
			'name'     => 'Champagne',
			'html'     => '#F7E7CE',
			'graphviz' => '#F7E7CE',
			'rgb'      => array(97, 91, 81),
			'hsl'      => array(37, 72, 89),
			'hsv'      => array(37, 17, 97)
		),
		'champagnePink' => array(
			'name'     => 'Champagne pink',
			'html'     => '#F1DDCF',
			'graphviz' => '#F1DDCF',
			'rgb'      => array(95, 87, 81),
			'hsl'      => array(25, 55, 88),
			'hsv'      => array(25, 14, 95)
		),
		'charcoal' => array(
			'name'     => 'Charcoal',
			'html'     => '#36454F',
			'graphviz' => '#36454F',
			'rgb'      => array(21, 27, 31),
			'hsl'      => array(204, 19, 26),
			'hsv'      => array(204, 32, 31)
		),
		'charlestonGreen' => array(
			'name'     => 'Charleston green',
			'html'     => '#232B2B',
			'graphviz' => '#232B2B',
			'rgb'      => array(14, 17, 17),
			'hsl'      => array(180, 10, 15),
			'hsv'      => array(180, 19, 17)
		),
		'charmPink' => array(
			'name'     => 'Charm pink',
			'html'     => '#E68FAC',
			'graphviz' => '#E68FAC',
			'rgb'      => array(90, 56, 67),
			'hsl'      => array(340, 64, 73),
			'hsv'      => array(340, 38, 90)
		),
		'chartreuseTraditional' => array(
			'name'     => 'Chartreuse (traditional)',
			'html'     => '#DFFF00',
			'graphviz' => '#DFFF00',
			'rgb'      => array(87, 100, 0),
			'hsl'      => array(68, 100, 50),
			'hsv'      => array(68, 100, 100)
		),
		'chartreuseWeb' => array(
			'name'     => 'Chartreuse (web)',
			'html'     => '#7FFF00',
			'graphviz' => '#7FFF00',
			'rgb'      => array(50, 100, 0),
			'hsl'      => array(90, 100, 50),
			'hsv'      => array(90, 100, 100)
		),
		'cherry' => array(
			'name'     => 'Cherry',
			'html'     => '#DE3163',
			'graphviz' => '#DE3163',
			'rgb'      => array(87, 19, 39),
			'hsl'      => array(343, 72, 53),
			'hsv'      => array(343, 78, 87)
		),
		'cherryBlossomPink' => array(
			'name'     => 'Cherry blossom pink',
			'html'     => '#FFB7C5',
			'graphviz' => '#FFB7C5',
			'rgb'      => array(100, 72, 77),
			'hsl'      => array(348, 100, 86),
			'hsv'      => array(348, 28, 100)
		),
		'chestnut' => array(
			'name'     => 'Chestnut',
			'html'     => '#954535',
			'graphviz' => '#954535',
			'rgb'      => array(58, 27, 21),
			'hsl'      => array(10, 48, 40),
			'hsv'      => array(10, 64, 58)
		),
		'chinaPink' => array(
			'name'     => 'China pink',
			'html'     => '#DE6FA1',
			'graphviz' => '#DE6FA1',
			'rgb'      => array(87, 44, 63),
			'hsl'      => array(333, 63, 65),
			'hsv'      => array(333, 50, 87)
		),
		'chinaRose' => array(
			'name'     => 'China rose',
			'html'     => '#A8516E',
			'graphviz' => '#A8516E',
			'rgb'      => array(66, 32, 43),
			'hsl'      => array(340, 35, 49),
			'hsv'      => array(340, 52, 66)
		),
		'chineseRed' => array(
			'name'     => 'Chinese red',
			'html'     => '#AA381E',
			'graphviz' => '#AA381E',
			'rgb'      => array(67, 22, 12),
			'hsl'      => array(11, 70, 39),
			'hsv'      => array(11, 82, 67)
		),
		'chineseViolet' => array(
			'name'     => 'Chinese violet',
			'html'     => '#856088',
			'graphviz' => '#856088',
			'rgb'      => array(52, 38, 53),
			'hsl'      => array(296, 17, 45),
			'hsv'      => array(296, 29, 53)
		),
		'chlorophyllGreen' => array(
			'name'     => 'Chlorophyll green',
			'html'     => '#4AFF00',
			'graphviz' => '#4AFF00',
			'rgb'      => array(29, 100, 0),
			'hsl'      => array(103, 100, 50),
			'hsv'      => array(103, 100, 100)
		),
		'chocolateTraditional' => array(
			'name'     => 'Chocolate (traditional)',
			'html'     => '#7B3F00',
			'graphviz' => '#7B3F00',
			'rgb'      => array(48, 25, 0),
			'hsl'      => array(31, 100, 24),
			'hsv'      => array(31, 100, 48)
		),
		'chocolateWeb' => array(
			'name'     => 'Chocolate (web)',
			'html'     => '#D2691E',
			'graphviz' => '#D2691E',
			'rgb'      => array(82, 41, 12),
			'hsl'      => array(25, 75, 47),
			'hsv'      => array(25, 86, 82)
		),
		'chromeYellow' => array(
			'name'     => 'Chrome yellow',
			'html'     => '#FFA700',
			'graphviz' => '#FFA700',
			'rgb'      => array(100, 65, 0),
			'hsl'      => array(39, 100, 50),
			'hsv'      => array(39, 100, 100)
		),
		'cinereous' => array(
			'name'     => 'Cinereous',
			'html'     => '#98817B',
			'graphviz' => '#98817B',
			'rgb'      => array(60, 51, 48),
			'hsl'      => array(12, 12, 54),
			'hsv'      => array(12, 19, 60)
		),
		'cinnabar' => array(
			'name'     => 'Cinnabar',
			'html'     => '#E34234',
			'graphviz' => '#E34234',
			'rgb'      => array(89, 26, 20),
			'hsl'      => array(5, 76, 55),
			'hsv'      => array(5, 77, 89)
		),
		'cinnamonSatin' => array(
			'name'     => 'Cinnamon Satin',
			'html'     => '#CD607E',
			'graphviz' => '#CD607E',
			'rgb'      => array(80, 38, 49),
			'hsl'      => array(343, 52, 59),
			'hsv'      => array(343, 53, 80)
		),
		'cinnamon' => array(
			'name'     => 'Cinnamon[citation needed]',
			'html'     => '#D2691E',
			'graphviz' => '#D2691E',
			'rgb'      => array(82, 41, 12),
			'hsl'      => array(25, 75, 47),
			'hsv'      => array(25, 86, 82)
		),
		'citrine' => array(
			'name'     => 'Citrine',
			'html'     => '#E4D00A',
			'graphviz' => '#E4D00A',
			'rgb'      => array(89, 82, 4),
			'hsl'      => array(54, 92, 47),
			'hsv'      => array(54, 96, 89)
		),
		'citron' => array(
			'name'     => 'Citron',
			'html'     => '#9FA91F',
			'graphviz' => '#9FA91F',
			'rgb'      => array(62, 66, 12),
			'hsl'      => array(64, 69, 39),
			'hsv'      => array(64, 82, 66)
		),
		'claret' => array(
			'name'     => 'Claret',
			'html'     => '#7F1734',
			'graphviz' => '#7F1734',
			'rgb'      => array(50, 9, 20),
			'hsl'      => array(343, 69, 29),
			'hsv'      => array(343, 82, 50)
		),
		'classicRose' => array(
			'name'     => 'Classic rose',
			'html'     => '#FBCCE7',
			'graphviz' => '#FBCCE7',
			'rgb'      => array(98, 80, 91),
			'hsl'      => array(326, 85, 89),
			'hsv'      => array(326, 19, 98)
		),
		'cobaltBlue' => array(
			'name'     => 'Cobalt Blue',
			'html'     => '#0047AB',
			'graphviz' => '#0047AB',
			'rgb'      => array(0, 28, 67),
			'hsl'      => array(215, 100, 34),
			'hsv'      => array(215, 100, 67)
		),
		'cocoaBrown' => array(
			'name'     => 'Cocoa brown',
			'html'     => '#D2691E',
			'graphviz' => '#D2691E',
			'rgb'      => array(82, 41, 12),
			'hsl'      => array(25, 75, 47),
			'hsv'      => array(25, 86, 82)
		),
		'coconut' => array(
			'name'     => 'Coconut',
			'html'     => '#965A3E',
			'graphviz' => '#965A3E',
			'rgb'      => array(59, 35, 24),
			'hsl'      => array(19, 42, 42),
			'hsv'      => array(19, 59, 59)
		),
		'coffee' => array(
			'name'     => 'Coffee',
			'html'     => '#6F4E37',
			'graphviz' => '#6F4E37',
			'rgb'      => array(44, 31, 22),
			'hsl'      => array(25, 34, 33),
			'hsv'      => array(25, 50, 44)
		),
		'columbiaBlue' => array(
			'name'     => 'Columbia Blue',
			'html'     => '#C4D8E2',
			'graphviz' => '#C4D8E2',
			'rgb'      => array(77, 85, 89),
			'hsl'      => array(200, 34, 83),
			'hsv'      => array(200, 13, 89)
		),
		'congoPink' => array(
			'name'     => 'Congo pink',
			'html'     => '#F88379',
			'graphviz' => '#F88379',
			'rgb'      => array(97, 51, 47),
			'hsl'      => array(5, 90, 72),
			'hsv'      => array(5, 51, 97)
		),
		'coolBlack' => array(
			'name'     => 'Cool Black',
			'html'     => '#002E63',
			'graphviz' => '#002E63',
			'rgb'      => array(0, 18, 39),
			'hsl'      => array(212, 100, 19),
			'hsv'      => array(212, 100, 38)
		),
		'coolGrey' => array(
			'name'     => 'Cool grey',
			'html'     => '#8C92AC',
			'graphviz' => '#8C92AC',
			'rgb'      => array(55, 57, 67),
			'hsl'      => array(229, 16, 61),
			'hsv'      => array(229, 19, 67)
		),
		'copper' => array(
			'name'     => 'Copper',
			'html'     => '#B87333',
			'graphviz' => '#B87333',
			'rgb'      => array(72, 45, 20),
			'hsl'      => array(29, 57, 46),
			'hsv'      => array(29, 72, 72)
		),
		'copperCrayola' => array(
			'name'     => 'Copper (Crayola)',
			'html'     => '#DA8A67',
			'graphviz' => '#DA8A67',
			'rgb'      => array(85, 54, 40),
			'hsl'      => array(18, 61, 63),
			'hsv'      => array(18, 53, 85)
		),
		'copperPenny' => array(
			'name'     => 'Copper penny',
			'html'     => '#AD6F69',
			'graphviz' => '#AD6F69',
			'rgb'      => array(68, 44, 41),
			'hsl'      => array(5, 29, 55),
			'hsv'      => array(5, 39, 68)
		),
		'copperRed' => array(
			'name'     => 'Copper red',
			'html'     => '#CB6D51',
			'graphviz' => '#CB6D51',
			'rgb'      => array(80, 43, 32),
			'hsl'      => array(14, 54, 56),
			'hsv'      => array(14, 60, 80)
		),
		'copperRose' => array(
			'name'     => 'Copper rose',
			'html'     => '#996666',
			'graphviz' => '#996666',
			'rgb'      => array(60, 40, 40),
			'hsl'      => array(0, 20, 50),
			'hsv'      => array(0, 33, 60)
		),
		'coquelicot' => array(
			'name'     => 'Coquelicot',
			'html'     => '#FF3800',
			'graphviz' => '#FF3800',
			'rgb'      => array(100, 22, 0),
			'hsl'      => array(13, 100, 50),
			'hsv'      => array(13, 100, 100)
		),
		'coral' => array(
			'name'     => 'Coral',
			'html'     => '#FF7F50',
			'graphviz' => '#FF7F50',
			'rgb'      => array(100, 50, 31),
			'hsl'      => array(16, 100, 66),
			'hsv'      => array(16, 69, 100)
		),
		'coralReef' => array(
			'name'     => 'Coral Reef',
			'html'     => '#FD7C6E',
			'graphviz' => '#FD7C6E',
			'rgb'      => array(99, 49, 43),
			'hsl'      => array(6, 97, 71),
			'hsv'      => array(6, 57, 99)
		),
		'coralPink' => array(
			'name'     => 'Coral pink',
			'html'     => '#F88379',
			'graphviz' => '#F88379',
			'rgb'      => array(97, 51, 47),
			'hsl'      => array(5, 90, 72),
			'hsv'      => array(5, 51, 97)
		),
		'coralRed' => array(
			'name'     => 'Coral red',
			'html'     => '#FF4040',
			'graphviz' => '#FF4040',
			'rgb'      => array(100, 25, 25),
			'hsl'      => array(0, 100, 63),
			'hsv'      => array(0, 75, 100)
		),
		'cordovan' => array(
			'name'     => 'Cordovan',
			'html'     => '#893F45',
			'graphviz' => '#893F45',
			'rgb'      => array(54, 25, 27),
			'hsl'      => array(355, 37, 39),
			'hsv'      => array(355, 54, 54)
		),
		'corn' => array(
			'name'     => 'Corn',
			'html'     => '#FBEC5D',
			'graphviz' => '#FBEC5D',
			'rgb'      => array(98, 93, 36),
			'hsl'      => array(54, 95, 67),
			'hsv'      => array(54, 63, 98)
		),
		'cornellRed' => array(
			'name'     => 'Cornell Red',
			'html'     => '#B31B1B',
			'graphviz' => '#B31B1B',
			'rgb'      => array(70, 11, 11),
			'hsl'      => array(0, 74, 40),
			'hsv'      => array(0, 85, 70)
		),
		'cornflowerBlue' => array(
			'name'     => 'Cornflower blue',
			'html'     => '#6495ED',
			'graphviz' => '#6495ED',
			'rgb'      => array(39, 58, 93),
			'hsl'      => array(219, 79, 66),
			'hsv'      => array(219, 58, 93)
		),
		'cornsilk' => array(
			'name'     => 'Cornsilk',
			'html'     => '#FFF8DC',
			'graphviz' => '#FFF8DC',
			'rgb'      => array(100, 97, 86),
			'hsl'      => array(48, 100, 93),
			'hsv'      => array(48, 14, 100)
		),
		'cosmicCobalt' => array(
			'name'     => 'Cosmic Cobalt',
			'html'     => '#2E2D88',
			'graphviz' => '#2E2D88',
			'rgb'      => array(18, 18, 53),
			'hsl'      => array(241, 50, 36),
			'hsv'      => array(241, 67, 53)
		),
		'cosmicLatte' => array(
			'name'     => 'Cosmic latte',
			'html'     => '#FFF8E7',
			'graphviz' => '#FFF8E7',
			'rgb'      => array(100, 97, 91),
			'hsl'      => array(43, 100, 95),
			'hsv'      => array(43, 9, 100)
		),
		'cottonCandy' => array(
			'name'     => 'Cotton candy',
			'html'     => '#FFBCD9',
			'graphviz' => '#FFBCD9',
			'rgb'      => array(100, 74, 85),
			'hsl'      => array(334, 100, 87),
			'hsv'      => array(334, 26, 100)
		),
		'coyoteBrown' => array(
			'name'     => 'Coyote brown',
			'html'     => '#81613C',
			'graphviz' => '#81613C',
			'rgb'      => array(51, 38, 24),
			'hsl'      => array(62, 37, 37),
			'hsv'      => array(62, 52, 51)
		),
		'cream' => array(
			'name'     => 'Cream',
			'html'     => '#FFFDD0',
			'graphviz' => '#FFFDD0',
			'rgb'      => array(100, 99, 82),
			'hsl'      => array(57, 100, 91),
			'hsv'      => array(57, 18, 100)
		),
		'crimson' => array(
			'name'     => 'Crimson',
			'html'     => '#DC143C',
			'graphviz' => '#DC143C',
			'rgb'      => array(86, 8, 24),
			'hsl'      => array(348, 83, 47),
			'hsv'      => array(348, 91, 86)
		),
		'crimsonGlory' => array(
			'name'     => 'Crimson glory',
			'html'     => '#BE0032',
			'graphviz' => '#BE0032',
			'rgb'      => array(75, 0, 20),
			'hsl'      => array(344, 100, 37),
			'hsv'      => array(344, 100, 75)
		),
		'crimsonRed' => array(
			'name'     => 'Crimson red',
			'html'     => '#990000',
			'graphviz' => '#990000',
			'rgb'      => array(60, 0, 0),
			'hsl'      => array(0, 100, 30),
			'hsv'      => array(0, 100, 60)
		),
		'cultured' => array(
			'name'     => 'Cultured',
			'html'     => '#F5F5F5',
			'graphviz' => '#F5F5F5',
			'rgb'      => array(96, 96, 96),
			'hsl'      => array(0, 0, 96),
			'hsv'      => array(0, 0, 96)
		),
		'cyan' => array(
			'name'     => 'Cyan',
			'html'     => '#00FFFF',
			'graphviz' => '#00FFFF',
			'rgb'      => array(0, 100, 100),
			'hsl'      => array(180, 100, 50),
			'hsv'      => array(180, 100, 100)
		),
		'cyanProcess' => array(
			'name'     => 'Cyan (process)',
			'html'     => '#00B7EB',
			'graphviz' => '#00B7EB',
			'rgb'      => array(0, 72, 92),
			'hsl'      => array(193, 100, 46),
			'hsv'      => array(193, 100, 92)
		),
		'cyanAzure' => array(
			'name'     => 'Cyan azure',
			'html'     => '#4E82B4',
			'graphviz' => '#4E82B4',
			'rgb'      => array(31, 51, 71),
			'hsl'      => array(209, 41, 51),
			'hsv'      => array(209, 57, 71)
		),
		'cyanCobaltBlue' => array(
			'name'     => 'Cyan cobalt blue',
			'html'     => '#28589C',
			'graphviz' => '#28589C',
			'rgb'      => array(16, 35, 61),
			'hsl'      => array(215, 59, 38),
			'hsv'      => array(215, 74, 61)
		),
		'cyanCornflowerBlue' => array(
			'name'     => 'Cyan cornflower blue',
			'html'     => '#188BC2',
			'graphviz' => '#188BC2',
			'rgb'      => array(9, 55, 76),
			'hsl'      => array(199, 78, 43),
			'hsv'      => array(199, 88, 76)
		),
		'cyanBlueAzure' => array(
			'name'     => 'Cyan-blue azure',
			'html'     => '#4682BF',
			'graphviz' => '#4682BF',
			'rgb'      => array(27, 51, 75),
			'hsl'      => array(210, 49, 51),
			'hsv'      => array(210, 63, 75)
		),
		'cyberGrape' => array(
			'name'     => 'Cyber grape',
			'html'     => '#58427C',
			'graphviz' => '#58427C',
			'rgb'      => array(35, 26, 49),
			'hsl'      => array(263, 31, 37),
			'hsv'      => array(263, 47, 49)
		),
		'cyberYellow' => array(
			'name'     => 'Cyber yellow',
			'html'     => '#FFD300',
			'graphviz' => '#FFD300',
			'rgb'      => array(100, 83, 0),
			'hsl'      => array(50, 100, 50),
			'hsv'      => array(50, 100, 100)
		),
		'cyclamen' => array(
			'name'     => 'Cyclamen',
			'html'     => '#F56FA1',
			'graphviz' => '#F56FA1',
			'rgb'      => array(96, 44, 63),
			'hsl'      => array(0, 87, 70),
			'hsv'      => array(0, 54, 96)
		),
		'daffodil' => array(
			'name'     => 'Daffodil',
			'html'     => '#FFFF31',
			'graphviz' => '#FFFF31',
			'rgb'      => array(100, 100, 19),
			'hsl'      => array(60, 100, 60),
			'hsv'      => array(60, 81, 100)
		),
		'dandelion' => array(
			'name'     => 'Dandelion',
			'html'     => '#F0E130',
			'graphviz' => '#F0E130',
			'rgb'      => array(94, 88, 19),
			'hsl'      => array(55, 86, 56),
			'hsv'      => array(55, 80, 94)
		),
		'darkBlue' => array(
			'name'     => 'Dark blue',
			'html'     => '#00008B',
			'graphviz' => '#00008B',
			'rgb'      => array(0, 0, 55),
			'hsl'      => array(240, 100, 27),
			'hsv'      => array(240, 100, 55)
		),
		'darkBlueGray' => array(
			'name'     => 'Dark blue-gray',
			'html'     => '#666699',
			'graphviz' => '#666699',
			'rgb'      => array(40, 40, 60),
			'hsl'      => array(240, 20, 50),
			'hsv'      => array(240, 33, 60)
		),
		'darkBrown' => array(
			'name'     => 'Dark brown',
			'html'     => '#654321',
			'graphviz' => '#654321',
			'rgb'      => array(40, 26, 13),
			'hsl'      => array(30, 51, 26),
			'hsv'      => array(30, 67, 40)
		),
		'darkBrownTangelo' => array(
			'name'     => 'Dark brown-tangelo',
			'html'     => '#88654E',
			'graphviz' => '#88654E',
			'rgb'      => array(53, 40, 31),
			'hsl'      => array(24, 27, 42),
			'hsv'      => array(24, 43, 53)
		),
		'darkByzantium' => array(
			'name'     => 'Dark byzantium',
			'html'     => '#5D3954',
			'graphviz' => '#5D3954',
			'rgb'      => array(36, 22, 33),
			'hsl'      => array(315, 24, 29),
			'hsv'      => array(315, 39, 36)
		),
		'darkCandyAppleRed' => array(
			'name'     => 'Dark candy apple red',
			'html'     => '#A40000',
			'graphviz' => '#A40000',
			'rgb'      => array(64, 0, 0),
			'hsl'      => array(0, 100, 32),
			'hsv'      => array(0, 100, 64)
		),
		'darkCerulean' => array(
			'name'     => 'Dark cerulean',
			'html'     => '#08457E',
			'graphviz' => '#08457E',
			'rgb'      => array(3, 27, 49),
			'hsl'      => array(209, 88, 26),
			'hsv'      => array(209, 94, 49)
		),
		'darkChestnut' => array(
			'name'     => 'Dark chestnut',
			'html'     => '#986960',
			'graphviz' => '#986960',
			'rgb'      => array(60, 41, 38),
			'hsl'      => array(10, 23, 49),
			'hsv'      => array(10, 37, 60)
		),
		'darkCoral' => array(
			'name'     => 'Dark coral',
			'html'     => '#CD5B45',
			'graphviz' => '#CD5B45',
			'rgb'      => array(80, 36, 27),
			'hsl'      => array(10, 58, 54),
			'hsv'      => array(10, 66, 80)
		),
		'darkCyan' => array(
			'name'     => 'Dark cyan',
			'html'     => '#008B8B',
			'graphviz' => '#008B8B',
			'rgb'      => array(0, 55, 55),
			'hsl'      => array(180, 100, 27),
			'hsv'      => array(180, 100, 55)
		),
		'darkElectricBlue' => array(
			'name'     => 'Dark electric blue',
			'html'     => '#536878',
			'graphviz' => '#536878',
			'rgb'      => array(33, 41, 47),
			'hsl'      => array(206, 18, 40),
			'hsv'      => array(206, 31, 47)
		),
		'darkGoldenrod' => array(
			'name'     => 'Dark goldenrod',
			'html'     => '#B8860B',
			'graphviz' => '#B8860B',
			'rgb'      => array(72, 53, 4),
			'hsl'      => array(43, 89, 38),
			'hsv'      => array(43, 94, 72)
		),
		'darkGrayX11' => array(
			'name'     => 'Dark gray (X11)',
			'html'     => '#A9A9A9',
			'graphviz' => '#A9A9A9',
			'rgb'      => array(66, 66, 66),
			'hsl'      => array(null, 0, 66),
			'hsv'      => array(null, 0, 66)
		),
		'darkGreen' => array(
			'name'     => 'Dark green',
			'html'     => '#013220',
			'graphviz' => '#013220',
			'rgb'      => array(0, 20, 13),
			'hsl'      => array(158, 96, 10),
			'hsv'      => array(158, 98, 20)
		),
		'darkGreenX11' => array(
			'name'     => 'Dark green (X11)',
			'html'     => '#006400',
			'graphviz' => '#006400',
			'rgb'      => array(0, 39, 0),
			'hsl'      => array(120, 100, 20),
			'hsv'      => array(120, 100, 39)
		),
		'darkGunmetal' => array(
			'name'     => 'Dark gunmetal',
			'html'     => '#1F262A',
			'graphviz' => '#1F262A',
			'rgb'      => array(12, 15, 16),
			'hsl'      => array(202, 15, 14),
			'hsv'      => array(202, 26, 16)
		),
		'darkImperialBlue' => array(
			'name'     => 'Dark imperial blue',
			'html'     => '#00147E',
			'graphviz' => '#00147E',
			'rgb'      => array(0, 8, 49),
			'hsl'      => array(183, 100, 25),
			'hsv'      => array(183, 100, 40)
		),
		'darkJungleGreen' => array(
			'name'     => 'Dark jungle green',
			'html'     => '#1A2421',
			'graphviz' => '#1A2421',
			'rgb'      => array(10, 14, 13),
			'hsl'      => array(162, 16, 12),
			'hsv'      => array(162, 28, 14)
		),
		'darkKhaki' => array(
			'name'     => 'Dark khaki',
			'html'     => '#BDB76B',
			'graphviz' => '#BDB76B',
			'rgb'      => array(74, 72, 42),
			'hsl'      => array(56, 38, 58),
			'hsv'      => array(56, 43, 74)
		),
		'darkLava' => array(
			'name'     => 'Dark lava',
			'html'     => '#483C32',
			'graphviz' => '#483C32',
			'rgb'      => array(28, 24, 20),
			'hsl'      => array(27, 18, 24),
			'hsv'      => array(27, 31, 28)
		),
		'darkLavender' => array(
			'name'     => 'Dark lavender',
			'html'     => '#734F96',
			'graphviz' => '#734F96',
			'rgb'      => array(45, 31, 59),
			'hsl'      => array(270, 31, 45),
			'hsv'      => array(270, 47, 59)
		),
		'darkLiver' => array(
			'name'     => 'Dark liver',
			'html'     => '#534B4F',
			'graphviz' => '#534B4F',
			'rgb'      => array(33, 29, 31),
			'hsl'      => array(330, 5, 31),
			'hsv'      => array(330, 10, 33)
		),
		'darkLiverHorses' => array(
			'name'     => 'Dark liver (horses)',
			'html'     => '#543D37',
			'graphviz' => '#543D37',
			'rgb'      => array(33, 24, 22),
			'hsl'      => array(12, 21, 27),
			'hsv'      => array(12, 35, 33)
		),
		'darkMagenta' => array(
			'name'     => 'Dark magenta',
			'html'     => '#8B008B',
			'graphviz' => '#8B008B',
			'rgb'      => array(55, 0, 55),
			'hsl'      => array(300, 100, 27),
			'hsv'      => array(300, 100, 55)
		),
		'darkMediumGray' => array(
			'name'     => 'Dark medium gray',
			'html'     => '#A9A9A9',
			'graphviz' => '#A9A9A9',
			'rgb'      => array(66, 66, 66),
			'hsl'      => array(null, 0, 66),
			'hsv'      => array(null, 0, 66)
		),
		'darkMidnightBlue' => array(
			'name'     => 'Dark midnight blue',
			'html'     => '#003366',
			'graphviz' => '#003366',
			'rgb'      => array(0, 20, 40),
			'hsl'      => array(210, 100, 20),
			'hsv'      => array(210, 100, 40)
		),
		'darkMossGreen' => array(
			'name'     => 'Dark moss green',
			'html'     => '#4A5D23',
			'graphviz' => '#4A5D23',
			'rgb'      => array(29, 36, 14),
			'hsl'      => array(80, 45, 25),
			'hsv'      => array(80, 62, 36)
		),
		'darkOliveGreen' => array(
			'name'     => 'Dark olive green',
			'html'     => '#556B2F',
			'graphviz' => '#556B2F',
			'rgb'      => array(33, 42, 18),
			'hsl'      => array(82, 39, 30),
			'hsv'      => array(82, 56, 42)
		),
		'darkOrange' => array(
			'name'     => 'Dark orange',
			'html'     => '#FF8C00',
			'graphviz' => '#FF8C00',
			'rgb'      => array(100, 55, 0),
			'hsl'      => array(33, 100, 50),
			'hsv'      => array(33, 100, 100)
		),
		'darkOrchid' => array(
			'name'     => 'Dark orchid',
			'html'     => '#9932CC',
			'graphviz' => '#9932CC',
			'rgb'      => array(60, 20, 80),
			'hsl'      => array(280, 61, 50),
			'hsv'      => array(280, 75, 80)
		),
		'darkPastelBlue' => array(
			'name'     => 'Dark pastel blue',
			'html'     => '#779ECB',
			'graphviz' => '#779ECB',
			'rgb'      => array(47, 62, 80),
			'hsl'      => array(212, 45, 63),
			'hsv'      => array(212, 41, 80)
		),
		'darkPastelGreen' => array(
			'name'     => 'Dark pastel green',
			'html'     => '#03C03C',
			'graphviz' => '#03C03C',
			'rgb'      => array(1, 75, 24),
			'hsl'      => array(138, 97, 38),
			'hsv'      => array(138, 98, 75)
		),
		'darkPastelPurple' => array(
			'name'     => 'Dark pastel purple',
			'html'     => '#966FD6',
			'graphviz' => '#966FD6',
			'rgb'      => array(59, 44, 84),
			'hsl'      => array(263, 56, 64),
			'hsv'      => array(263, 48, 84)
		),
		'darkPastelRed' => array(
			'name'     => 'Dark pastel red',
			'html'     => '#C23B22',
			'graphviz' => '#C23B22',
			'rgb'      => array(76, 23, 13),
			'hsl'      => array(9, 70, 45),
			'hsv'      => array(9, 82, 76)
		),
		'darkPink' => array(
			'name'     => 'Dark pink',
			'html'     => '#E75480',
			'graphviz' => '#E75480',
			'rgb'      => array(91, 33, 50),
			'hsl'      => array(342, 75, 62),
			'hsv'      => array(342, 64, 91)
		),
		'darkPowderBlue' => array(
			'name'     => 'Dark powder blue',
			'html'     => '#003399',
			'graphviz' => '#003399',
			'rgb'      => array(0, 20, 60),
			'hsl'      => array(220, 100, 30),
			'hsv'      => array(220, 100, 60)
		),
		'darkPuce' => array(
			'name'     => 'Dark puce',
			'html'     => '#4F3A3C',
			'graphviz' => '#4F3A3C',
			'rgb'      => array(31, 23, 24),
			'hsl'      => array(354, 15, 27),
			'hsv'      => array(354, 27, 31)
		),
		'darkPurple' => array(
			'name'     => 'Dark purple',
			'html'     => '#301934',
			'graphviz' => '#301934',
			'rgb'      => array(19, 10, 20),
			'hsl'      => array(291, 35, 15),
			'hsv'      => array(291, 51, 20)
		),
		'darkRaspberry' => array(
			'name'     => 'Dark raspberry',
			'html'     => '#872657',
			'graphviz' => '#872657',
			'rgb'      => array(53, 15, 34),
			'hsl'      => array(330, 56, 34),
			'hsv'      => array(330, 72, 53)
		),
		'darkRed' => array(
			'name'     => 'Dark red',
			'html'     => '#8B0000',
			'graphviz' => '#8B0000',
			'rgb'      => array(55, 0, 0),
			'hsl'      => array(0, 100, 27),
			'hsv'      => array(0, 100, 55)
		),
		'darkSalmon' => array(
			'name'     => 'Dark salmon',
			'html'     => '#E9967A',
			'graphviz' => '#E9967A',
			'rgb'      => array(91, 59, 48),
			'hsl'      => array(15, 72, 70),
			'hsv'      => array(15, 48, 91)
		),
		'darkScarlet' => array(
			'name'     => 'Dark scarlet',
			'html'     => '#560319',
			'graphviz' => '#560319',
			'rgb'      => array(34, 1, 10),
			'hsl'      => array(344, 93, 17),
			'hsv'      => array(344, 97, 34)
		),
		'darkSeaGreen' => array(
			'name'     => 'Dark sea green',
			'html'     => '#8FBC8F',
			'graphviz' => '#8FBC8F',
			'rgb'      => array(56, 74, 56),
			'hsl'      => array(120, 25, 65),
			'hsv'      => array(120, 24, 74)
		),
		'darkSienna' => array(
			'name'     => 'Dark sienna',
			'html'     => '#3C1414',
			'graphviz' => '#3C1414',
			'rgb'      => array(24, 8, 8),
			'hsl'      => array(0, 50, 16),
			'hsv'      => array(0, 67, 24)
		),
		'darkSkyBlue' => array(
			'name'     => 'Dark sky blue',
			'html'     => '#8CBED6',
			'graphviz' => '#8CBED6',
			'rgb'      => array(55, 75, 84),
			'hsl'      => array(199, 47, 69),
			'hsv'      => array(199, 35, 84)
		),
		'darkSlateBlue' => array(
			'name'     => 'Dark slate blue',
			'html'     => '#483D8B',
			'graphviz' => '#483D8B',
			'rgb'      => array(28, 24, 55),
			'hsl'      => array(248, 39, 39),
			'hsv'      => array(248, 56, 55)
		),
		'darkSlateGray' => array(
			'name'     => 'Dark slate gray',
			'html'     => '#2F4F4F',
			'graphviz' => '#2F4F4F',
			'rgb'      => array(18, 31, 31),
			'hsl'      => array(180, 25, 25),
			'hsv'      => array(180, 41, 31)
		),
		'darkSpringGreen' => array(
			'name'     => 'Dark spring green',
			'html'     => '#177245',
			'graphviz' => '#177245',
			'rgb'      => array(9, 45, 27),
			'hsl'      => array(150, 66, 27),
			'hsv'      => array(150, 80, 45)
		),
		'darkTan' => array(
			'name'     => 'Dark tan',
			'html'     => '#918151',
			'graphviz' => '#918151',
			'rgb'      => array(57, 51, 32),
			'hsl'      => array(45, 28, 44),
			'hsv'      => array(45, 44, 57)
		),
		'darkTangerine' => array(
			'name'     => 'Dark tangerine',
			'html'     => '#FFA812',
			'graphviz' => '#FFA812',
			'rgb'      => array(100, 66, 7),
			'hsl'      => array(38, 100, 54),
			'hsv'      => array(38, 93, 100)
		),
		'darkTaupe' => array(
			'name'     => 'Dark taupe',
			'html'     => '#483C32',
			'graphviz' => '#483C32',
			'rgb'      => array(28, 24, 20),
			'hsl'      => array(27, 18, 24),
			'hsv'      => array(27, 31, 28)
		),
		'darkTerraCotta' => array(
			'name'     => 'Dark terra cotta',
			'html'     => '#CC4E5C',
			'graphviz' => '#CC4E5C',
			'rgb'      => array(80, 31, 36),
			'hsl'      => array(353, 55, 55),
			'hsv'      => array(353, 62, 80)
		),
		'darkTurquoise' => array(
			'name'     => 'Dark turquoise',
			'html'     => '#00CED1',
			'graphviz' => '#00CED1',
			'rgb'      => array(0, 81, 82),
			'hsl'      => array(181, 100, 41),
			'hsv'      => array(181, 100, 82)
		),
		'darkVanilla' => array(
			'name'     => 'Dark vanilla',
			'html'     => '#D1BEA8',
			'graphviz' => '#D1BEA8',
			'rgb'      => array(82, 75, 66),
			'hsl'      => array(32, 31, 74),
			'hsv'      => array(32, 20, 82)
		),
		'darkViolet' => array(
			'name'     => 'Dark violet',
			'html'     => '#9400D3',
			'graphviz' => '#9400D3',
			'rgb'      => array(58, 0, 83),
			'hsl'      => array(282, 100, 41),
			'hsv'      => array(282, 100, 83)
		),
		'darkYellow' => array(
			'name'     => 'Dark yellow',
			'html'     => '#9B870C',
			'graphviz' => '#9B870C',
			'rgb'      => array(61, 53, 5),
			'hsl'      => array(52, 86, 33),
			'hsv'      => array(52, 92, 61)
		),
		'dartmouthGreen' => array(
			'name'     => 'Dartmouth green',
			'html'     => '#00703C',
			'graphviz' => '#00703C',
			'rgb'      => array(0, 44, 24),
			'hsl'      => array(152, 100, 22),
			'hsv'      => array(152, 100, 44)
		),
		'davysGrey' => array(
			'name'     => 'Davy\'s grey',
			'html'     => '#555555',
			'graphviz' => '#555555',
			'rgb'      => array(33, 33, 33),
			'hsl'      => array(null, 0, 33),
			'hsv'      => array(null, 0, 33)
		),
		'debianRed' => array(
			'name'     => 'Debian red',
			'html'     => '#D70A53',
			'graphviz' => '#D70A53',
			'rgb'      => array(84, 4, 33),
			'hsl'      => array(339, 91, 44),
			'hsv'      => array(339, 95, 84)
		),
		'deepGreen' => array(
			'name'     => 'Deep Green',
			'html'     => '#056608',
			'graphviz' => '#056608',
			'rgb'      => array(2, 40, 3),
			'hsl'      => array(122, 91, 21),
			'hsv'      => array(122, 95, 40)
		),
		'deepRed' => array(
			'name'     => 'Deep Red',
			'html'     => '#850101',
			'graphviz' => '#850101',
			'rgb'      => array(52, 0, 0),
			'hsl'      => array(0, 99, 26),
			'hsv'      => array(0, 99, 52)
		),
		'deepSpaceSparkle' => array(
			'name'     => 'Deep Space Sparkle',
			'html'     => '#4A646C',
			'graphviz' => '#4A646C',
			'rgb'      => array(29, 39, 42),
			'hsl'      => array(194, 19, 36),
			'hsv'      => array(194, 31, 42)
		),
		'deepTaupe' => array(
			'name'     => 'Deep Taupe',
			'html'     => '#7E5E60',
			'graphviz' => '#7E5E60',
			'rgb'      => array(49, 37, 38),
			'hsl'      => array(356, 15, 43),
			'hsv'      => array(356, 25, 49)
		),
		'deepTuscanRed' => array(
			'name'     => 'Deep Tuscan red',
			'html'     => '#66424D',
			'graphviz' => '#66424D',
			'rgb'      => array(40, 26, 30),
			'hsl'      => array(342, 21, 33),
			'hsv'      => array(342, 35, 40)
		),
		'deepAquamarine' => array(
			'name'     => 'Deep aquamarine',
			'html'     => '#40826D',
			'graphviz' => '#40826D',
			'rgb'      => array(25, 51, 43),
			'hsl'      => array(161, 34, 38),
			'hsv'      => array(161, 51, 51)
		),
		'deepCarmine' => array(
			'name'     => 'Deep carmine',
			'html'     => '#A9203E',
			'graphviz' => '#A9203E',
			'rgb'      => array(66, 13, 24),
			'hsl'      => array(347, 68, 39),
			'hsv'      => array(347, 81, 66)
		),
		'deepCarminePink' => array(
			'name'     => 'Deep carmine pink',
			'html'     => '#EF3038',
			'graphviz' => '#EF3038',
			'rgb'      => array(94, 19, 22),
			'hsl'      => array(357, 86, 56),
			'hsv'      => array(357, 80, 94)
		),
		'deepCarrotOrange' => array(
			'name'     => 'Deep carrot orange',
			'html'     => '#E9692C',
			'graphviz' => '#E9692C',
			'rgb'      => array(91, 41, 17),
			'hsl'      => array(19, 81, 54),
			'hsv'      => array(19, 81, 91)
		),
		'deepCerise' => array(
			'name'     => 'Deep cerise',
			'html'     => '#DA3287',
			'graphviz' => '#DA3287',
			'rgb'      => array(85, 20, 53),
			'hsl'      => array(330, 69, 53),
			'hsv'      => array(330, 77, 85)
		),
		'deepChampagne' => array(
			'name'     => 'Deep champagne',
			'html'     => '#FAD6A5',
			'graphviz' => '#FAD6A5',
			'rgb'      => array(98, 84, 65),
			'hsl'      => array(35, 90, 81),
			'hsv'      => array(35, 34, 98)
		),
		'deepChestnut' => array(
			'name'     => 'Deep chestnut',
			'html'     => '#B94E48',
			'graphviz' => '#B94E48',
			'rgb'      => array(73, 31, 28),
			'hsl'      => array(3, 45, 50),
			'hsv'      => array(3, 61, 73)
		),
		'deepCoffee' => array(
			'name'     => 'Deep coffee',
			'html'     => '#704241',
			'graphviz' => '#704241',
			'rgb'      => array(44, 26, 25),
			'hsl'      => array(1, 27, 35),
			'hsv'      => array(1, 42, 44)
		),
		'deepFuchsia' => array(
			'name'     => 'Deep fuchsia',
			'html'     => '#C154C1',
			'graphviz' => '#C154C1',
			'rgb'      => array(76, 33, 76),
			'hsl'      => array(300, 47, 54),
			'hsv'      => array(300, 56, 76)
		),
		'deepGreenCyanTurquoise' => array(
			'name'     => 'Deep green-cyan turquoise',
			'html'     => '#0E7C61',
			'graphviz' => '#0E7C61',
			'rgb'      => array(5, 49, 38),
			'hsl'      => array(165, 80, 27),
			'hsv'      => array(165, 89, 49)
		),
		'deepJungleGreen' => array(
			'name'     => 'Deep jungle green',
			'html'     => '#004B49',
			'graphviz' => '#004B49',
			'rgb'      => array(0, 29, 29),
			'hsl'      => array(178, 100, 15),
			'hsv'      => array(178, 100, 29)
		),
		'deepKoamaru' => array(
			'name'     => 'Deep koamaru',
			'html'     => '#333366',
			'graphviz' => '#333366',
			'rgb'      => array(20, 20, 40),
			'hsl'      => array(240, 33, 30),
			'hsv'      => array(240, 50, 40)
		),
		'deepLemon' => array(
			'name'     => 'Deep lemon',
			'html'     => '#F5C71A',
			'graphviz' => '#F5C71A',
			'rgb'      => array(96, 78, 10),
			'hsl'      => array(47, 92, 53),
			'hsv'      => array(47, 89, 96)
		),
		'deepLilac' => array(
			'name'     => 'Deep lilac',
			'html'     => '#9955BB',
			'graphviz' => '#9955BB',
			'rgb'      => array(60, 33, 73),
			'hsl'      => array(280, 43, 53),
			'hsv'      => array(280, 55, 73)
		),
		'deepMagenta' => array(
			'name'     => 'Deep magenta',
			'html'     => '#CC00CC',
			'graphviz' => '#CC00CC',
			'rgb'      => array(80, 0, 80),
			'hsl'      => array(300, 100, 40),
			'hsv'      => array(300, 100, 80)
		),
		'deepMaroon' => array(
			'name'     => 'Deep maroon',
			'html'     => '#820000',
			'graphviz' => '#820000',
			'rgb'      => array(51, 0, 0),
			'hsl'      => array(0, 100, 26),
			'hsv'      => array(0, 100, 51)
		),
		'deepMauve' => array(
			'name'     => 'Deep mauve',
			'html'     => '#D473D4',
			'graphviz' => '#D473D4',
			'rgb'      => array(83, 45, 83),
			'hsl'      => array(300, 53, 64),
			'hsv'      => array(300, 46, 83)
		),
		'deepMossGreen' => array(
			'name'     => 'Deep moss green',
			'html'     => '#355E3B',
			'graphviz' => '#355E3B',
			'rgb'      => array(21, 37, 23),
			'hsl'      => array(129, 28, 29),
			'hsv'      => array(129, 44, 37)
		),
		'deepPeach' => array(
			'name'     => 'Deep peach',
			'html'     => '#FFCBA4',
			'graphviz' => '#FFCBA4',
			'rgb'      => array(100, 80, 64),
			'hsl'      => array(26, 100, 82),
			'hsv'      => array(26, 36, 100)
		),
		'deepPink' => array(
			'name'     => 'Deep pink',
			'html'     => '#FF1493',
			'graphviz' => '#FF1493',
			'rgb'      => array(100, 8, 58),
			'hsl'      => array(328, 100, 54),
			'hsv'      => array(328, 92, 100)
		),
		'deepPuce' => array(
			'name'     => 'Deep puce',
			'html'     => '#A95C68',
			'graphviz' => '#A95C68',
			'rgb'      => array(66, 36, 41),
			'hsl'      => array(351, 31, 51),
			'hsv'      => array(351, 46, 66)
		),
		'deepRuby' => array(
			'name'     => 'Deep ruby',
			'html'     => '#843F5B',
			'graphviz' => '#843F5B',
			'rgb'      => array(52, 25, 36),
			'hsl'      => array(336, 35, 38),
			'hsv'      => array(336, 52, 52)
		),
		'deepSaffron' => array(
			'name'     => 'Deep saffron',
			'html'     => '#FF9933',
			'graphviz' => '#FF9933',
			'rgb'      => array(100, 60, 20),
			'hsl'      => array(30, 100, 60),
			'hsv'      => array(30, 80, 100)
		),
		'deepSkyBlue' => array(
			'name'     => 'Deep sky blue',
			'html'     => '#00BFFF',
			'graphviz' => '#00BFFF',
			'rgb'      => array(0, 75, 100),
			'hsl'      => array(195, 100, 50),
			'hsv'      => array(195, 100, 100)
		),
		'deepSpringBud' => array(
			'name'     => 'Deep spring bud',
			'html'     => '#556B2F',
			'graphviz' => '#556B2F',
			'rgb'      => array(33, 42, 18),
			'hsl'      => array(82, 39, 30),
			'hsv'      => array(82, 56, 42)
		),
		'deepViolet' => array(
			'name'     => 'Deep violet',
			'html'     => '#330066',
			'graphviz' => '#330066',
			'rgb'      => array(20, 0, 40),
			'hsl'      => array(270, 100, 20),
			'hsv'      => array(270, 100, 40)
		),
		'deer' => array(
			'name'     => 'Deer',
			'html'     => '#BA8759',
			'graphviz' => '#BA8759',
			'rgb'      => array(73, 53, 35),
			'hsl'      => array(28, 41, 54),
			'hsv'      => array(28, 52, 73)
		),
		'denim' => array(
			'name'     => 'Denim',
			'html'     => '#1560BD',
			'graphviz' => '#1560BD',
			'rgb'      => array(8, 38, 74),
			'hsl'      => array(213, 80, 41),
			'hsv'      => array(213, 89, 74)
		),
		'denimBlue' => array(
			'name'     => 'Denim Blue',
			'html'     => '#2243B6',
			'graphviz' => '#2243B6',
			'rgb'      => array(13, 26, 71),
			'hsl'      => array(227, 69, 42),
			'hsv'      => array(227, 81, 71)
		),
		'desaturatedCyan' => array(
			'name'     => 'Desaturated cyan',
			'html'     => '#669999',
			'graphviz' => '#669999',
			'rgb'      => array(40, 60, 60),
			'hsl'      => array(180, 20, 50),
			'hsv'      => array(180, 33, 60)
		),
		'desert' => array(
			'name'     => 'Desert',
			'html'     => '#C19A6B',
			'graphviz' => '#C19A6B',
			'rgb'      => array(76, 60, 42),
			'hsl'      => array(33, 41, 59),
			'hsv'      => array(33, 45, 76)
		),
		'desertSand' => array(
			'name'     => 'Desert sand',
			'html'     => '#EDC9AF',
			'graphviz' => '#EDC9AF',
			'rgb'      => array(93, 79, 69),
			'hsl'      => array(25, 63, 81),
			'hsv'      => array(25, 26, 93)
		),
		'desire' => array(
			'name'     => 'Desire',
			'html'     => '#EA3C53',
			'graphviz' => '#EA3C53',
			'rgb'      => array(92, 24, 33),
			'hsl'      => array(352, 81, 58),
			'hsv'      => array(352, 74, 92)
		),
		'diamond' => array(
			'name'     => 'Diamond',
			'html'     => '#B9F2FF',
			'graphviz' => '#B9F2FF',
			'rgb'      => array(73, 95, 100),
			'hsl'      => array(191, 100, 86),
			'hsv'      => array(191, 27, 100)
		),
		'dimGray' => array(
			'name'     => 'Dim gray',
			'html'     => '#696969',
			'graphviz' => '#696969',
			'rgb'      => array(41, 41, 41),
			'hsl'      => array(null, 0, 41),
			'hsv'      => array(null, 0, 41)
		),
		'dingyDungeon' => array(
			'name'     => 'Dingy Dungeon',
			'html'     => '#C53151',
			'graphviz' => '#C53151',
			'rgb'      => array(77, 19, 32),
			'hsl'      => array(347, 60, 48),
			'hsv'      => array(347, 75, 77)
		),
		'dirt' => array(
			'name'     => 'Dirt',
			'html'     => '#9B7653',
			'graphviz' => '#9B7653',
			'rgb'      => array(61, 46, 33),
			'hsl'      => array(29, 30, 47),
			'hsv'      => array(29, 46, 61)
		),
		'dodgerBlue' => array(
			'name'     => 'Dodger blue',
			'html'     => '#1E90FF',
			'graphviz' => '#1E90FF',
			'rgb'      => array(12, 56, 100),
			'hsl'      => array(210, 100, 56),
			'hsv'      => array(210, 88, 100)
		),
		'dogwoodRose' => array(
			'name'     => 'Dogwood rose',
			'html'     => '#D71868',
			'graphviz' => '#D71868',
			'rgb'      => array(84, 9, 41),
			'hsl'      => array(335, 80, 47),
			'hsv'      => array(335, 89, 84)
		),
		'dollarBill' => array(
			'name'     => 'Dollar bill',
			'html'     => '#85BB65',
			'graphviz' => '#85BB65',
			'rgb'      => array(52, 73, 40),
			'hsl'      => array(98, 39, 56),
			'hsv'      => array(98, 46, 73)
		),
		'dolphinGray' => array(
			'name'     => 'Dolphin Gray',
			'html'     => '#828E84',
			'graphviz' => '#828E84',
			'rgb'      => array(51, 56, 52),
			'hsl'      => array(130, 5, 53),
			'hsv'      => array(130, 8, 56)
		),
		'donkeyBrown' => array(
			'name'     => 'Donkey brown',
			'html'     => '#664C28',
			'graphviz' => '#664C28',
			'rgb'      => array(40, 30, 16),
			'hsl'      => array(35, 44, 28),
			'hsv'      => array(35, 61, 40)
		),
		'drab' => array(
			'name'     => 'Drab',
			'html'     => '#967117',
			'graphviz' => '#967117',
			'rgb'      => array(59, 44, 9),
			'hsl'      => array(43, 73, 34),
			'hsv'      => array(43, 85, 59)
		),
		'dukeBlue' => array(
			'name'     => 'Duke blue',
			'html'     => '#00009C',
			'graphviz' => '#00009C',
			'rgb'      => array(0, 0, 61),
			'hsl'      => array(240, 100, 31),
			'hsv'      => array(240, 100, 61)
		),
		'dustStorm' => array(
			'name'     => 'Dust storm',
			'html'     => '#E5CCC9',
			'graphviz' => '#E5CCC9',
			'rgb'      => array(90, 80, 79),
			'hsl'      => array(6, 35, 84),
			'hsv'      => array(6, 12, 90)
		),
		'dutchWhite' => array(
			'name'     => 'Dutch white',
			'html'     => '#EFDFBB',
			'graphviz' => '#EFDFBB',
			'rgb'      => array(94, 87, 73),
			'hsl'      => array(42, 62, 84),
			'hsv'      => array(42, 22, 94)
		),
		'earthYellow' => array(
			'name'     => 'Earth yellow',
			'html'     => '#E1A95F',
			'graphviz' => '#E1A95F',
			'rgb'      => array(88, 66, 37),
			'hsl'      => array(34, 68, 63),
			'hsv'      => array(34, 58, 88)
		),
		'ebony' => array(
			'name'     => 'Ebony',
			'html'     => '#555D50',
			'graphviz' => '#555D50',
			'rgb'      => array(33, 36, 31),
			'hsl'      => array(97, 8, 34),
			'hsv'      => array(97, 14, 36)
		),
		'ecru' => array(
			'name'     => 'Ecru',
			'html'     => '#C2B280',
			'graphviz' => '#C2B280',
			'rgb'      => array(76, 70, 50),
			'hsl'      => array(45, 35, 63),
			'hsv'      => array(45, 34, 76)
		),
		'eerieBlack' => array(
			'name'     => 'Eerie black',
			'html'     => '#1B1B1B',
			'graphviz' => '#1B1B1B',
			'rgb'      => array(11, 11, 11),
			'hsl'      => array(null, 0, 11),
			'hsv'      => array(null, 0, 11)
		),
		'eggplant' => array(
			'name'     => 'Eggplant',
			'html'     => '#614051',
			'graphviz' => '#614051',
			'rgb'      => array(38, 25, 32),
			'hsl'      => array(329, 20, 32),
			'hsv'      => array(329, 34, 38)
		),
		'eggshell' => array(
			'name'     => 'Eggshell',
			'html'     => '#F0EAD6',
			'graphviz' => '#F0EAD6',
			'rgb'      => array(94, 92, 84),
			'hsl'      => array(46, 46, 89),
			'hsv'      => array(46, 11, 94)
		),
		'egyptianBlue' => array(
			'name'     => 'Egyptian blue',
			'html'     => '#1034A6',
			'graphviz' => '#1034A6',
			'rgb'      => array(6, 20, 65),
			'hsl'      => array(226, 82, 36),
			'hsv'      => array(226, 90, 65)
		),
		'electricBlue' => array(
			'name'     => 'Electric blue',
			'html'     => '#7DF9FF',
			'graphviz' => '#7DF9FF',
			'rgb'      => array(49, 98, 100),
			'hsl'      => array(183, 100, 75),
			'hsv'      => array(183, 51, 100)
		),
		'electricCrimson' => array(
			'name'     => 'Electric crimson',
			'html'     => '#FF003F',
			'graphviz' => '#FF003F',
			'rgb'      => array(100, 0, 25),
			'hsl'      => array(345, 100, 50),
			'hsv'      => array(345, 100, 100)
		),
		'electricCyan' => array(
			'name'     => 'Electric cyan',
			'html'     => '#00FFFF',
			'graphviz' => '#00FFFF',
			'rgb'      => array(0, 100, 100),
			'hsl'      => array(180, 100, 50),
			'hsv'      => array(180, 100, 100)
		),
		'electricGreen' => array(
			'name'     => 'Electric green',
			'html'     => '#00FF00',
			'graphviz' => '#00FF00',
			'rgb'      => array(0, 100, 0),
			'hsl'      => array(120, 100, 50),
			'hsv'      => array(120, 100, 100)
		),
		'electricIndigo' => array(
			'name'     => 'Electric indigo',
			'html'     => '#6F00FF',
			'graphviz' => '#6F00FF',
			'rgb'      => array(44, 0, 100),
			'hsl'      => array(266, 100, 50),
			'hsv'      => array(266, 100, 100)
		),
		'electricLavender' => array(
			'name'     => 'Electric lavender',
			'html'     => '#F4BBFF',
			'graphviz' => '#F4BBFF',
			'rgb'      => array(96, 73, 100),
			'hsl'      => array(290, 100, 87),
			'hsv'      => array(290, 27, 100)
		),
		'electricLime' => array(
			'name'     => 'Electric lime',
			'html'     => '#CCFF00',
			'graphviz' => '#CCFF00',
			'rgb'      => array(80, 100, 0),
			'hsl'      => array(72, 100, 50),
			'hsv'      => array(72, 100, 100)
		),
		'electricPurple' => array(
			'name'     => 'Electric purple',
			'html'     => '#BF00FF',
			'graphviz' => '#BF00FF',
			'rgb'      => array(75, 0, 100),
			'hsl'      => array(285, 100, 50),
			'hsv'      => array(285, 100, 100)
		),
		'electricUltramarine' => array(
			'name'     => 'Electric ultramarine',
			'html'     => '#3F00FF',
			'graphviz' => '#3F00FF',
			'rgb'      => array(25, 0, 100),
			'hsl'      => array(255, 100, 50),
			'hsv'      => array(255, 100, 100)
		),
		'electricViolet' => array(
			'name'     => 'Electric violet',
			'html'     => '#8F00FF',
			'graphviz' => '#8F00FF',
			'rgb'      => array(56, 0, 100),
			'hsl'      => array(274, 100, 50),
			'hsv'      => array(274, 100, 100)
		),
		'electricYellow' => array(
			'name'     => 'Electric yellow',
			'html'     => '#FFFF33',
			'graphviz' => '#FFFF33',
			'rgb'      => array(100, 100, 20),
			'hsl'      => array(60, 100, 60),
			'hsv'      => array(60, 80, 100)
		),
		'emerald' => array(
			'name'     => 'Emerald',
			'html'     => '#50C878',
			'graphviz' => '#50C878',
			'rgb'      => array(31, 78, 47),
			'hsl'      => array(140, 52, 55),
			'hsv'      => array(140, 60, 78)
		),
		'eminence' => array(
			'name'     => 'Eminence',
			'html'     => '#6C3082',
			'graphviz' => '#6C3082',
			'rgb'      => array(42, 19, 51),
			'hsl'      => array(284, 46, 35),
			'hsv'      => array(284, 63, 51)
		),
		'englishGreen' => array(
			'name'     => 'English green',
			'html'     => '#1B4D3E',
			'graphviz' => '#1B4D3E',
			'rgb'      => array(11, 30, 24),
			'hsl'      => array(162, 48, 20),
			'hsv'      => array(162, 65, 30)
		),
		'englishLavender' => array(
			'name'     => 'English lavender',
			'html'     => '#B48395',
			'graphviz' => '#B48395',
			'rgb'      => array(71, 51, 58),
			'hsl'      => array(338, 25, 61),
			'hsv'      => array(338, 27, 71)
		),
		'englishRed' => array(
			'name'     => 'English red',
			'html'     => '#AB4B52',
			'graphviz' => '#AB4B52',
			'rgb'      => array(67, 29, 32),
			'hsl'      => array(356, 39, 48),
			'hsv'      => array(356, 56, 67)
		),
		'englishVermillion' => array(
			'name'     => 'English vermillion',
			'html'     => '#CC474B',
			'graphviz' => '#CC474B',
			'rgb'      => array(80, 28, 29),
			'hsl'      => array(358, 57, 54),
			'hsv'      => array(358, 65, 80)
		),
		'englishViolet' => array(
			'name'     => 'English violet',
			'html'     => '#563C5C',
			'graphviz' => '#563C5C',
			'rgb'      => array(34, 24, 36),
			'hsl'      => array(289, 21, 30),
			'hsv'      => array(289, 35, 36)
		),
		'etonBlue' => array(
			'name'     => 'Eton blue',
			'html'     => '#96C8A2',
			'graphviz' => '#96C8A2',
			'rgb'      => array(59, 78, 64),
			'hsl'      => array(134, 31, 69),
			'hsv'      => array(134, 25, 78)
		),
		'eucalyptus' => array(
			'name'     => 'Eucalyptus',
			'html'     => '#44D7A8',
			'graphviz' => '#44D7A8',
			'rgb'      => array(27, 84, 66),
			'hsl'      => array(161, 65, 55),
			'hsv'      => array(161, 68, 84)
		),
		'fallow' => array(
			'name'     => 'Fallow',
			'html'     => '#C19A6B',
			'graphviz' => '#C19A6B',
			'rgb'      => array(76, 60, 42),
			'hsl'      => array(33, 41, 59),
			'hsv'      => array(33, 45, 76)
		),
		'faluRed' => array(
			'name'     => 'Falu red',
			'html'     => '#801818',
			'graphviz' => '#801818',
			'rgb'      => array(50, 9, 9),
			'hsl'      => array(0, 68, 30),
			'hsv'      => array(0, 81, 50)
		),
		'fandango' => array(
			'name'     => 'Fandango',
			'html'     => '#B53389',
			'graphviz' => '#B53389',
			'rgb'      => array(71, 20, 54),
			'hsl'      => array(320, 56, 45),
			'hsv'      => array(320, 72, 71)
		),
		'fandangoPink' => array(
			'name'     => 'Fandango pink',
			'html'     => '#DE5285',
			'graphviz' => '#DE5285',
			'rgb'      => array(87, 32, 52),
			'hsl'      => array(338, 68, 60),
			'hsv'      => array(338, 63, 87)
		),
		'fashionFuchsia' => array(
			'name'     => 'Fashion fuchsia',
			'html'     => '#F400A1',
			'graphviz' => '#F400A1',
			'rgb'      => array(96, 0, 63),
			'hsl'      => array(320, 100, 48),
			'hsv'      => array(320, 100, 96)
		),
		'fawn' => array(
			'name'     => 'Fawn',
			'html'     => '#E5AA70',
			'graphviz' => '#E5AA70',
			'rgb'      => array(90, 67, 44),
			'hsl'      => array(30, 69, 67),
			'hsv'      => array(30, 51, 90)
		),
		'feldgrau' => array(
			'name'     => 'Feldgrau',
			'html'     => '#4D5D53',
			'graphviz' => '#4D5D53',
			'rgb'      => array(30, 36, 33),
			'hsl'      => array(143, 9, 33),
			'hsv'      => array(143, 17, 36)
		),
		'feldspar' => array(
			'name'     => 'Feldspar',
			'html'     => '#FDD5B1',
			'graphviz' => '#FDD5B1',
			'rgb'      => array(99, 84, 69),
			'hsl'      => array(28, 95, 84),
			'hsv'      => array(28, 30, 99)
		),
		'fernGreen' => array(
			'name'     => 'Fern green',
			'html'     => '#4F7942',
			'graphviz' => '#4F7942',
			'rgb'      => array(31, 47, 26),
			'hsl'      => array(106, 29, 37),
			'hsv'      => array(106, 45, 47)
		),
		'ferrariRed' => array(
			'name'     => 'Ferrari Red',
			'html'     => '#FF2800',
			'graphviz' => '#FF2800',
			'rgb'      => array(100, 16, 0),
			'hsl'      => array(9, 100, 50),
			'hsv'      => array(9, 100, 100)
		),
		'fieldDrab' => array(
			'name'     => 'Field drab',
			'html'     => '#6C541E',
			'graphviz' => '#6C541E',
			'rgb'      => array(42, 33, 12),
			'hsl'      => array(42, 57, 27),
			'hsv'      => array(42, 72, 42)
		),
		'fieryRose' => array(
			'name'     => 'Fiery Rose',
			'html'     => '#FF5470',
			'graphviz' => '#FF5470',
			'rgb'      => array(100, 33, 44),
			'hsl'      => array(350, 100, 67),
			'hsv'      => array(350, 67, 100)
		),
		'fireEngineRed' => array(
			'name'     => 'Fire engine red',
			'html'     => '#CE2029',
			'graphviz' => '#CE2029',
			'rgb'      => array(81, 13, 16),
			'hsl'      => array(357, 73, 47),
			'hsv'      => array(357, 84, 81)
		),
		'firebrick' => array(
			'name'     => 'Firebrick',
			'html'     => '#B22222',
			'graphviz' => '#B22222',
			'rgb'      => array(70, 13, 13),
			'hsl'      => array(0, 68, 42),
			'hsv'      => array(0, 81, 70)
		),
		'flame' => array(
			'name'     => 'Flame',
			'html'     => '#E25822',
			'graphviz' => '#E25822',
			'rgb'      => array(89, 35, 13),
			'hsl'      => array(17, 77, 51),
			'hsv'      => array(17, 85, 89)
		),
		'flamingoPink' => array(
			'name'     => 'Flamingo pink',
			'html'     => '#FC8EAC',
			'graphviz' => '#FC8EAC',
			'rgb'      => array(99, 56, 67),
			'hsl'      => array(344, 95, 77),
			'hsv'      => array(344, 44, 99)
		),
		'flattery' => array(
			'name'     => 'Flattery',
			'html'     => '#6B4423',
			'graphviz' => '#6B4423',
			'rgb'      => array(42, 27, 14),
			'hsl'      => array(28, 51, 28),
			'hsv'      => array(28, 67, 42)
		),
		'flavescent' => array(
			'name'     => 'Flavescent',
			'html'     => '#F7E98E',
			'graphviz' => '#F7E98E',
			'rgb'      => array(97, 91, 56),
			'hsl'      => array(52, 87, 76),
			'hsv'      => array(52, 43, 97)
		),
		'flax' => array(
			'name'     => 'Flax',
			'html'     => '#EEDC82',
			'graphviz' => '#EEDC82',
			'rgb'      => array(93, 86, 51),
			'hsl'      => array(50, 76, 72),
			'hsv'      => array(50, 45, 93)
		),
		'flirt' => array(
			'name'     => 'Flirt',
			'html'     => '#A2006D',
			'graphviz' => '#A2006D',
			'rgb'      => array(64, 0, 43),
			'hsl'      => array(320, 100, 32),
			'hsv'      => array(320, 100, 64)
		),
		'floralWhite' => array(
			'name'     => 'Floral white',
			'html'     => '#FFFAF0',
			'graphviz' => '#FFFAF0',
			'rgb'      => array(100, 98, 94),
			'hsl'      => array(40, 100, 97),
			'hsv'      => array(40, 6, 100)
		),
		'fluorescentOrange' => array(
			'name'     => 'Fluorescent orange',
			'html'     => '#FFBF00',
			'graphviz' => '#FFBF00',
			'rgb'      => array(100, 75, 0),
			'hsl'      => array(45, 100, 50),
			'hsv'      => array(45, 100, 100)
		),
		'fluorescentPink' => array(
			'name'     => 'Fluorescent pink',
			'html'     => '#FF1493',
			'graphviz' => '#FF1493',
			'rgb'      => array(100, 8, 58),
			'hsl'      => array(328, 100, 54),
			'hsv'      => array(328, 92, 100)
		),
		'fluorescentYellow' => array(
			'name'     => 'Fluorescent yellow',
			'html'     => '#CCFF00',
			'graphviz' => '#CCFF00',
			'rgb'      => array(80, 100, 0),
			'hsl'      => array(72, 100, 50),
			'hsv'      => array(72, 100, 100)
		),
		'folly' => array(
			'name'     => 'Folly',
			'html'     => '#FF004F',
			'graphviz' => '#FF004F',
			'rgb'      => array(100, 0, 31),
			'hsl'      => array(341, 100, 50),
			'hsv'      => array(341, 100, 100)
		),
		'forestGreenTraditional' => array(
			'name'     => 'Forest green (traditional)',
			'html'     => '#014421',
			'graphviz' => '#014421',
			'rgb'      => array(0, 27, 13),
			'hsl'      => array(149, 97, 14),
			'hsv'      => array(149, 99, 27)
		),
		'forestGreenWeb' => array(
			'name'     => 'Forest green (web)',
			'html'     => '#228B22',
			'graphviz' => '#228B22',
			'rgb'      => array(13, 55, 13),
			'hsl'      => array(120, 61, 34),
			'hsv'      => array(120, 76, 55)
		),
		'frenchBeige' => array(
			'name'     => 'French beige',
			'html'     => '#A67B5B',
			'graphviz' => '#A67B5B',
			'rgb'      => array(65, 48, 36),
			'hsl'      => array(26, 30, 50),
			'hsv'      => array(26, 45, 65)
		),
		'frenchBistre' => array(
			'name'     => 'French bistre',
			'html'     => '#856D4D',
			'graphviz' => '#856D4D',
			'rgb'      => array(52, 43, 30),
			'hsl'      => array(34, 27, 41),
			'hsv'      => array(34, 42, 52)
		),
		'frenchBlue' => array(
			'name'     => 'French blue',
			'html'     => '#0072BB',
			'graphviz' => '#0072BB',
			'rgb'      => array(0, 45, 73),
			'hsl'      => array(203, 100, 37),
			'hsv'      => array(203, 100, 73)
		),
		'frenchFuchsia' => array(
			'name'     => 'French fuchsia',
			'html'     => '#FD3F92',
			'graphviz' => '#FD3F92',
			'rgb'      => array(99, 25, 57),
			'hsl'      => array(334, 98, 62),
			'hsv'      => array(334, 75, 99)
		),
		'frenchLilac' => array(
			'name'     => 'French lilac',
			'html'     => '#86608E',
			'graphviz' => '#86608E',
			'rgb'      => array(53, 38, 56),
			'hsl'      => array(290, 19, 47),
			'hsv'      => array(290, 32, 56)
		),
		'frenchLime' => array(
			'name'     => 'French lime',
			'html'     => '#9EFD38',
			'graphviz' => '#9EFD38',
			'rgb'      => array(62, 99, 22),
			'hsl'      => array(89, 98, 61),
			'hsv'      => array(89, 78, 99)
		),
		'frenchMauve' => array(
			'name'     => 'French mauve',
			'html'     => '#D473D4',
			'graphviz' => '#D473D4',
			'rgb'      => array(83, 45, 83),
			'hsl'      => array(300, 53, 64),
			'hsv'      => array(300, 46, 83)
		),
		'frenchPink' => array(
			'name'     => 'French pink',
			'html'     => '#FD6C9E',
			'graphviz' => '#FD6C9E',
			'rgb'      => array(99, 42, 62),
			'hsl'      => array(339, 97, 71),
			'hsv'      => array(339, 57, 99)
		),
		'frenchPlum' => array(
			'name'     => 'French plum',
			'html'     => '#811453',
			'graphviz' => '#811453',
			'rgb'      => array(51, 8, 33),
			'hsl'      => array(325, 73, 29),
			'hsv'      => array(325, 84, 51)
		),
		'frenchPuce' => array(
			'name'     => 'French puce',
			'html'     => '#4E1609',
			'graphviz' => '#4E1609',
			'rgb'      => array(31, 9, 4),
			'hsl'      => array(11, 79, 17),
			'hsv'      => array(11, 88, 31)
		),
		'frenchRaspberry' => array(
			'name'     => 'French raspberry',
			'html'     => '#C72C48',
			'graphviz' => '#C72C48',
			'rgb'      => array(78, 17, 28),
			'hsl'      => array(349, 64, 48),
			'hsv'      => array(349, 78, 78)
		),
		'frenchRose' => array(
			'name'     => 'French rose',
			'html'     => '#F64A8A',
			'graphviz' => '#F64A8A',
			'rgb'      => array(96, 29, 54),
			'hsl'      => array(338, 91, 63),
			'hsv'      => array(338, 70, 96)
		),
		'frenchSkyBlue' => array(
			'name'     => 'French sky blue',
			'html'     => '#77B5FE',
			'graphviz' => '#77B5FE',
			'rgb'      => array(47, 71, 100),
			'hsl'      => array(212, 99, 73),
			'hsv'      => array(212, 53, 100)
		),
		'frenchViolet' => array(
			'name'     => 'French violet',
			'html'     => '#8806CE',
			'graphviz' => '#8806CE',
			'rgb'      => array(53, 2, 81),
			'hsl'      => array(279, 94, 42),
			'hsv'      => array(279, 97, 81)
		),
		'frenchWine' => array(
			'name'     => 'French wine',
			'html'     => '#AC1E44',
			'graphviz' => '#AC1E44',
			'rgb'      => array(67, 12, 27),
			'hsl'      => array(344, 70, 40),
			'hsv'      => array(344, 83, 67)
		),
		'freshAir' => array(
			'name'     => 'Fresh Air',
			'html'     => '#A6E7FF',
			'graphviz' => '#A6E7FF',
			'rgb'      => array(65, 91, 100),
			'hsl'      => array(196, 100, 83),
			'hsv'      => array(196, 35, 100)
		),
		'frostbite' => array(
			'name'     => 'Frostbite',
			'html'     => '#E936A7',
			'graphviz' => '#E936A7',
			'rgb'      => array(91, 21, 65),
			'hsl'      => array(322, 80, 56),
			'hsv'      => array(322, 77, 91)
		),
		'fuchsia' => array(
			'name'     => 'Fuchsia',
			'html'     => '#FF00FF',
			'graphviz' => '#FF00FF',
			'rgb'      => array(100, 0, 100),
			'hsl'      => array(300, 100, 50),
			'hsv'      => array(300, 100, 100)
		),
		'fuchsiaCrayola' => array(
			'name'     => 'Fuchsia (Crayola)',
			'html'     => '#C154C1',
			'graphviz' => '#C154C1',
			'rgb'      => array(76, 33, 76),
			'hsl'      => array(300, 47, 54),
			'hsv'      => array(300, 56, 76)
		),
		'fuchsiaPink' => array(
			'name'     => 'Fuchsia pink',
			'html'     => '#FF77FF',
			'graphviz' => '#FF77FF',
			'rgb'      => array(100, 47, 100),
			'hsl'      => array(300, 100, 73),
			'hsv'      => array(300, 53, 100)
		),
		'fuchsiaPurple' => array(
			'name'     => 'Fuchsia purple',
			'html'     => '#CC397B',
			'graphviz' => '#CC397B',
			'rgb'      => array(80, 22, 48),
			'hsl'      => array(333, 59, 51),
			'hsv'      => array(333, 72, 80)
		),
		'fuchsiaRose' => array(
			'name'     => 'Fuchsia rose',
			'html'     => '#C74375',
			'graphviz' => '#C74375',
			'rgb'      => array(78, 26, 46),
			'hsl'      => array(337, 54, 52),
			'hsv'      => array(337, 66, 78)
		),
		'fulvous' => array(
			'name'     => 'Fulvous',
			'html'     => '#E48400',
			'graphviz' => '#E48400',
			'rgb'      => array(89, 52, 0),
			'hsl'      => array(35, 100, 45),
			'hsv'      => array(35, 100, 89)
		),
		'fuzzyWuzzy' => array(
			'name'     => 'Fuzzy Wuzzy',
			'html'     => '#CC6666',
			'graphviz' => '#CC6666',
			'rgb'      => array(80, 40, 40),
			'hsl'      => array(0, 50, 60),
			'hsv'      => array(0, 50, 80)
		),
		'goGreen' => array(
			'name'     => 'GO green',
			'html'     => '#00AB66',
			'graphviz' => '#00AB66',
			'rgb'      => array(0, 67, 40),
			'hsl'      => array(156, 100, 34),
			'hsv'      => array(156, 100, 67)
		),
		'gainsboro' => array(
			'name'     => 'Gainsboro',
			'html'     => '#DCDCDC',
			'graphviz' => '#DCDCDC',
			'rgb'      => array(86, 86, 86),
			'hsl'      => array(0, 0, 86),
			'hsv'      => array(0, 0, 86)
		),
		'gamboge' => array(
			'name'     => 'Gamboge',
			'html'     => '#E49B0F',
			'graphviz' => '#E49B0F',
			'rgb'      => array(89, 61, 6),
			'hsl'      => array(39, 88, 48),
			'hsv'      => array(39, 93, 89)
		),
		'gambogeOrangeBrown' => array(
			'name'     => 'Gamboge orange (brown)',
			'html'     => '#996600',
			'graphviz' => '#996600',
			'rgb'      => array(60, 40, 0),
			'hsl'      => array(40, 100, 30),
			'hsv'      => array(40, 100, 60)
		),
		'gargoyleGas' => array(
			'name'     => 'Gargoyle Gas',
			'html'     => '#FFDF46',
			'graphviz' => '#FFDF46',
			'rgb'      => array(100, 87, 27),
			'hsl'      => array(50, 100, 64),
			'hsv'      => array(50, 73, 100)
		),
		'genericViridian' => array(
			'name'     => 'Generic viridian',
			'html'     => '#007F66',
			'graphviz' => '#007F66',
			'rgb'      => array(0, 50, 40),
			'hsl'      => array(168, 100, 25),
			'hsv'      => array(168, 100, 50)
		),
		'ghostWhite' => array(
			'name'     => 'Ghost white',
			'html'     => '#F8F8FF',
			'graphviz' => '#F8F8FF',
			'rgb'      => array(97, 97, 100),
			'hsl'      => array(240, 100, 99),
			'hsv'      => array(240, 3, 100)
		),
		'giantsClub' => array(
			'name'     => 'Giant\'s Club',
			'html'     => '#B05C52',
			'graphviz' => '#B05C52',
			'rgb'      => array(69, 36, 32),
			'hsl'      => array(6, 37, 51),
			'hsv'      => array(6, 53, 69)
		),
		'giantsOrange' => array(
			'name'     => 'Giants orange',
			'html'     => '#FE5A1D',
			'graphviz' => '#FE5A1D',
			'rgb'      => array(100, 35, 11),
			'hsl'      => array(16, 99, 55),
			'hsv'      => array(16, 89, 100)
		),
		'ginger' => array(
			'name'     => 'Ginger',
			'html'     => '#B06500',
			'graphviz' => '#B06500',
			'rgb'      => array(69, 40, 0),
			'hsl'      => array(34, 100, 35),
			'hsv'      => array(34, 100, 69)
		),
		'glaucous' => array(
			'name'     => 'Glaucous',
			'html'     => '#6082B6',
			'graphviz' => '#6082B6',
			'rgb'      => array(38, 51, 71),
			'hsl'      => array(216, 37, 55),
			'hsv'      => array(216, 47, 71)
		),
		'glitter' => array(
			'name'     => 'Glitter',
			'html'     => '#E6E8FA',
			'graphviz' => '#E6E8FA',
			'rgb'      => array(90, 91, 98),
			'hsl'      => array(234, 67, 94),
			'hsv'      => array(234, 8, 98)
		),
		'glossyGrape' => array(
			'name'     => 'Glossy Grape',
			'html'     => '#AB92B3',
			'graphviz' => '#AB92B3',
			'rgb'      => array(67, 57, 70),
			'hsl'      => array(285, 18, 64),
			'hsv'      => array(285, 18, 70)
		),
		'goldMetallic' => array(
			'name'     => 'Gold (metallic)',
			'html'     => '#D4AF37',
			'graphviz' => '#D4AF37',
			'rgb'      => array(83, 69, 22),
			'hsl'      => array(46, 65, 52),
			'hsv'      => array(46, 74, 83)
		),
		'goldWebGolden' => array(
			'name'     => 'Gold (web) (Golden)',
			'html'     => '#FFD700',
			'graphviz' => '#FFD700',
			'rgb'      => array(100, 84, 0),
			'hsl'      => array(51, 100, 50),
			'hsv'      => array(51, 100, 100)
		),
		'goldFusion' => array(
			'name'     => 'Gold Fusion',
			'html'     => '#85754E',
			'graphviz' => '#85754E',
			'rgb'      => array(52, 46, 31),
			'hsl'      => array(43, 26, 41),
			'hsv'      => array(43, 41, 52)
		),
		'goldenBrown' => array(
			'name'     => 'Golden brown',
			'html'     => '#996515',
			'graphviz' => '#996515',
			'rgb'      => array(60, 40, 8),
			'hsl'      => array(36, 76, 34),
			'hsv'      => array(36, 86, 60)
		),
		'goldenPoppy' => array(
			'name'     => 'Golden poppy',
			'html'     => '#FCC200',
			'graphviz' => '#FCC200',
			'rgb'      => array(99, 76, 0),
			'hsl'      => array(46, 100, 49),
			'hsv'      => array(46, 100, 99)
		),
		'goldenYellow' => array(
			'name'     => 'Golden yellow',
			'html'     => '#FFDF00',
			'graphviz' => '#FFDF00',
			'rgb'      => array(100, 87, 0),
			'hsl'      => array(52, 100, 50),
			'hsv'      => array(52, 100, 100)
		),
		'goldenrod' => array(
			'name'     => 'Goldenrod',
			'html'     => '#DAA520',
			'graphviz' => '#DAA520',
			'rgb'      => array(85, 65, 13),
			'hsl'      => array(43, 74, 49),
			'hsv'      => array(43, 85, 85)
		),
		'graniteGray' => array(
			'name'     => 'Granite Gray',
			'html'     => '#676767',
			'graphviz' => '#676767',
			'rgb'      => array(40, 40, 40),
			'hsl'      => array(0, 0, 40),
			'hsv'      => array(0, 0, 40)
		),
		'grannySmithApple' => array(
			'name'     => 'Granny Smith Apple',
			'html'     => '#A8E4A0',
			'graphviz' => '#A8E4A0',
			'rgb'      => array(66, 89, 63),
			'hsl'      => array(113, 56, 76),
			'hsv'      => array(113, 30, 89)
		),
		'grape' => array(
			'name'     => 'Grape',
			'html'     => '#6F2DA8',
			'graphviz' => '#6F2DA8',
			'rgb'      => array(44, 18, 66),
			'hsl'      => array(272, 58, 42),
			'hsv'      => array(272, 73, 66)
		),
		'gray' => array(
			'name'     => 'Gray',
			'html'     => '#808080',
			'graphviz' => '#808080',
			'rgb'      => array(50, 50, 50),
			'hsl'      => array(0, 0, 50),
			'hsv'      => array(0, 0, 50)
		),
		'grayHtmlCssGray' => array(
			'name'     => 'Gray (HTML/CSS gray)',
			'html'     => '#808080',
			'graphviz' => '#808080',
			'rgb'      => array(50, 50, 50),
			'hsl'      => array(0, 0, 50),
			'hsv'      => array(0, 0, 50)
		),
		'grayX11Gray' => array(
			'name'     => 'Gray (X11 gray)',
			'html'     => '#BEBEBE',
			'graphviz' => '#BEBEBE',
			'rgb'      => array(75, 75, 75),
			'hsl'      => array(0, 0, 75),
			'hsv'      => array(0, 0, 75)
		),
		'grayAsparagus' => array(
			'name'     => 'Gray-asparagus',
			'html'     => '#465945',
			'graphviz' => '#465945',
			'rgb'      => array(27, 35, 27),
			'hsl'      => array(117, 13, 31),
			'hsv'      => array(117, 22, 35)
		),
		'grayBlue' => array(
			'name'     => 'Gray-blue',
			'html'     => '#8C92AC',
			'graphviz' => '#8C92AC',
			'rgb'      => array(55, 57, 67),
			'hsl'      => array(229, 16, 61),
			'hsv'      => array(229, 19, 67)
		),
		'greenColorWheelX11Green' => array(
			'name'     => 'Green (Color Wheel) (X11 green)',
			'html'     => '#00FF00',
			'graphviz' => '#00FF00',
			'rgb'      => array(0, 100, 0),
			'hsl'      => array(120, 100, 50),
			'hsv'      => array(120, 100, 100)
		),
		'greenCrayola' => array(
			'name'     => 'Green (Crayola)',
			'html'     => '#1CAC78',
			'graphviz' => '#1CAC78',
			'rgb'      => array(11, 67, 47),
			'hsl'      => array(158, 72, 39),
			'hsv'      => array(158, 84, 67)
		),
		'greenHtmlCssColor' => array(
			'name'     => 'Green (HTML/CSS color)',
			'html'     => '#008000',
			'graphviz' => '#008000',
			'rgb'      => array(0, 50, 0),
			'hsl'      => array(120, 100, 25),
			'hsv'      => array(120, 100, 50)
		),
		'greenMunsell' => array(
			'name'     => 'Green (Munsell)',
			'html'     => '#00A877',
			'graphviz' => '#00A877',
			'rgb'      => array(0, 66, 47),
			'hsl'      => array(163, 100, 33),
			'hsv'      => array(163, 100, 66)
		),
		'greenNcs' => array(
			'name'     => 'Green (NCS)',
			'html'     => '#009F6B',
			'graphviz' => '#009F6B',
			'rgb'      => array(0, 62, 42),
			'hsl'      => array(160, 100, 31),
			'hsv'      => array(160, 100, 62)
		),
		'greenPantone' => array(
			'name'     => 'Green (Pantone)',
			'html'     => '#00AD43',
			'graphviz' => '#00AD43',
			'rgb'      => array(0, 68, 26),
			'hsl'      => array(143, 100, 34),
			'hsv'      => array(143, 100, 68)
		),
		'greenRyb' => array(
			'name'     => 'Green (RYB)',
			'html'     => '#66B032',
			'graphviz' => '#66B032',
			'rgb'      => array(40, 69, 20),
			'hsl'      => array(95, 56, 44),
			'hsv'      => array(95, 72, 69)
		),
		'greenPigment' => array(
			'name'     => 'Green (pigment)',
			'html'     => '#00A550',
			'graphviz' => '#00A550',
			'rgb'      => array(0, 65, 31),
			'hsl'      => array(149, 100, 32),
			'hsv'      => array(149, 100, 65)
		),
		'greenLizard' => array(
			'name'     => 'Green Lizard',
			'html'     => '#A7F432',
			'graphviz' => '#A7F432',
			'rgb'      => array(65, 96, 20),
			'hsl'      => array(84, 90, 58),
			'hsv'      => array(84, 80, 96)
		),
		'greenSheen' => array(
			'name'     => 'Green Sheen',
			'html'     => '#6EAEA1',
			'graphviz' => '#6EAEA1',
			'rgb'      => array(43, 68, 63),
			'hsl'      => array(168, 28, 56),
			'hsv'      => array(168, 37, 68)
		),
		'greenBlue' => array(
			'name'     => 'Green-blue',
			'html'     => '#1164B4',
			'graphviz' => '#1164B4',
			'rgb'      => array(7, 39, 71),
			'hsl'      => array(209, 83, 39),
			'hsv'      => array(209, 91, 71)
		),
		'greenCyan' => array(
			'name'     => 'Green-cyan',
			'html'     => '#009966',
			'graphviz' => '#009966',
			'rgb'      => array(0, 60, 40),
			'hsl'      => array(160, 100, 30),
			'hsv'      => array(160, 100, 60)
		),
		'greenYellow' => array(
			'name'     => 'Green-yellow',
			'html'     => '#ADFF2F',
			'graphviz' => '#ADFF2F',
			'rgb'      => array(68, 100, 18),
			'hsl'      => array(84, 100, 59),
			'hsv'      => array(84, 82, 100)
		),
		'grizzly' => array(
			'name'     => 'Grizzly',
			'html'     => '#885818',
			'graphviz' => '#885818',
			'rgb'      => array(53, 35, 9),
			'hsl'      => array(34, 70, 31),
			'hsv'      => array(34, 82, 53)
		),
		'grullo' => array(
			'name'     => 'Grullo',
			'html'     => '#A99A86',
			'graphviz' => '#A99A86',
			'rgb'      => array(66, 60, 53),
			'hsl'      => array(34, 17, 59),
			'hsv'      => array(34, 21, 66)
		),
		'gunmetal' => array(
			'name'     => 'Gunmetal',
			'html'     => '#2a3439',
			'graphviz' => '#2a3439',
			'rgb'      => array(16, 20, 22),
			'hsl'      => array(200, 15, 19),
			'hsv'      => array(200, 15, 19)
		),
		'guppieGreen' => array(
			'name'     => 'Guppie green',
			'html'     => '#00FF7F',
			'graphviz' => '#00FF7F',
			'rgb'      => array(0, 100, 50),
			'hsl'      => array(150, 100, 50),
			'hsv'      => array(150, 100, 100)
		),
		'halayàúbe' => array(
			'name'     => 'Halayà úbe',
			'html'     => '#663854',
			'graphviz' => '#663854',
			'rgb'      => array(40, 22, 33),
			'hsl'      => array(323, 29, 31),
			'hsv'      => array(323, 45, 40)
		),
		'hanBlue' => array(
			'name'     => 'Han blue',
			'html'     => '#446CCF',
			'graphviz' => '#446CCF',
			'rgb'      => array(27, 42, 81),
			'hsl'      => array(223, 59, 54),
			'hsv'      => array(223, 67, 81)
		),
		'hanPurple' => array(
			'name'     => 'Han purple',
			'html'     => '#5218FA',
			'graphviz' => '#5218FA',
			'rgb'      => array(32, 9, 98),
			'hsl'      => array(255, 96, 54),
			'hsv'      => array(255, 90, 98)
		),
		'hansaYellow' => array(
			'name'     => 'Hansa yellow',
			'html'     => '#E9D66B',
			'graphviz' => '#E9D66B',
			'rgb'      => array(91, 84, 42),
			'hsl'      => array(51, 74, 67),
			'hsv'      => array(51, 54, 91)
		),
		'harlequin' => array(
			'name'     => 'Harlequin',
			'html'     => '#3FFF00',
			'graphviz' => '#3FFF00',
			'rgb'      => array(25, 100, 0),
			'hsl'      => array(105, 100, 50),
			'hsv'      => array(105, 100, 100)
		),
		'harlequinGreen' => array(
			'name'     => 'Harlequin green',
			'html'     => '#46CB18',
			'graphviz' => '#46CB18',
			'rgb'      => array(27, 80, 9),
			'hsl'      => array(105, 79, 45),
			'hsv'      => array(105, 88, 80)
		),
		'harvardCrimson' => array(
			'name'     => 'Harvard crimson',
			'html'     => '#C90016',
			'graphviz' => '#C90016',
			'rgb'      => array(79, 0, 9),
			'hsl'      => array(353, 100, 39),
			'hsv'      => array(353, 100, 79)
		),
		'harvestGold' => array(
			'name'     => 'Harvest gold',
			'html'     => '#DA9100',
			'graphviz' => '#DA9100',
			'rgb'      => array(85, 57, 0),
			'hsl'      => array(40, 100, 43),
			'hsv'      => array(40, 100, 85)
		),
		'heartGold' => array(
			'name'     => 'Heart Gold',
			'html'     => '#808000',
			'graphviz' => '#808000',
			'rgb'      => array(50, 50, 0),
			'hsl'      => array(60, 100, 25),
			'hsv'      => array(60, 100, 50)
		),
		'heatWave' => array(
			'name'     => 'Heat Wave',
			'html'     => '#FF7A00',
			'graphviz' => '#FF7A00',
			'rgb'      => array(100, 48, 0),
			'hsl'      => array(29, 100, 50),
			'hsv'      => array(29, 100, 100)
		),
		'heidelbergRed2' => array(
			'name'     => 'Heidelberg Red[2]',
			'html'     => '#960018',
			'graphviz' => '#960018',
			'rgb'      => array(59, 0, 9),
			'hsl'      => array(10, 100, 29),
			'hsv'      => array(10, 100, 60)
		),
		'heliotrope' => array(
			'name'     => 'Heliotrope',
			'html'     => '#DF73FF',
			'graphviz' => '#DF73FF',
			'rgb'      => array(87, 45, 100),
			'hsl'      => array(286, 100, 73),
			'hsv'      => array(286, 55, 100)
		),
		'heliotropeGray' => array(
			'name'     => 'Heliotrope gray',
			'html'     => '#AA98A9',
			'graphviz' => '#AA98A9',
			'rgb'      => array(67, 60, 66),
			'hsl'      => array(303, 10, 63),
			'hsv'      => array(303, 11, 67)
		),
		'heliotropeMagenta' => array(
			'name'     => 'Heliotrope magenta',
			'html'     => '#AA00BB',
			'graphviz' => '#AA00BB',
			'rgb'      => array(67, 0, 73),
			'hsl'      => array(295, 100, 37),
			'hsv'      => array(295, 100, 73)
		),
		'hollywoodCerise' => array(
			'name'     => 'Hollywood cerise',
			'html'     => '#F400A1',
			'graphviz' => '#F400A1',
			'rgb'      => array(96, 0, 63),
			'hsl'      => array(320, 100, 48),
			'hsv'      => array(320, 100, 96)
		),
		'honeydew' => array(
			'name'     => 'Honeydew',
			'html'     => '#F0FFF0',
			'graphviz' => '#F0FFF0',
			'rgb'      => array(94, 100, 94),
			'hsl'      => array(120, 100, 97),
			'hsv'      => array(120, 6, 100)
		),
		'honoluluBlue' => array(
			'name'     => 'Honolulu blue',
			'html'     => '#006DB0',
			'graphviz' => '#006DB0',
			'rgb'      => array(0, 43, 69),
			'hsl'      => array(203, 100, 35),
			'hsv'      => array(203, 100, 69)
		),
		'hookersGreen' => array(
			'name'     => 'Hooker\'s green',
			'html'     => '#49796B',
			'graphviz' => '#49796B',
			'rgb'      => array(29, 47, 42),
			'hsl'      => array(163, 25, 38),
			'hsv'      => array(163, 40, 47)
		),
		'hotMagenta' => array(
			'name'     => 'Hot magenta',
			'html'     => '#FF1DCE',
			'graphviz' => '#FF1DCE',
			'rgb'      => array(100, 11, 81),
			'hsl'      => array(313, 100, 56),
			'hsv'      => array(313, 89, 100)
		),
		'hotPink' => array(
			'name'     => 'Hot pink',
			'html'     => '#FF69B4',
			'graphviz' => '#FF69B4',
			'rgb'      => array(100, 41, 71),
			'hsl'      => array(330, 100, 71),
			'hsv'      => array(330, 59, 100)
		),
		'hunterGreen' => array(
			'name'     => 'Hunter green',
			'html'     => '#355E3B',
			'graphviz' => '#355E3B',
			'rgb'      => array(21, 37, 23),
			'hsl'      => array(129, 28, 29),
			'hsv'      => array(129, 44, 37)
		),
		'iceberg' => array(
			'name'     => 'Iceberg',
			'html'     => '#71A6D2',
			'graphviz' => '#71A6D2',
			'rgb'      => array(44, 65, 82),
			'hsl'      => array(207, 52, 63),
			'hsv'      => array(207, 46, 82)
		),
		'icterine' => array(
			'name'     => 'Icterine',
			'html'     => '#FCF75E',
			'graphviz' => '#FCF75E',
			'rgb'      => array(99, 97, 37),
			'hsl'      => array(58, 96, 68),
			'hsv'      => array(58, 63, 99)
		),
		'iguanaGreen' => array(
			'name'     => 'Iguana Green',
			'html'     => '#71BC78',
			'graphviz' => '#71BC78',
			'rgb'      => array(44, 74, 47),
			'hsl'      => array(126, 36, 59),
			'hsv'      => array(126, 40, 74)
		),
		'illuminatingEmerald' => array(
			'name'     => 'Illuminating Emerald',
			'html'     => '#319177',
			'graphviz' => '#319177',
			'rgb'      => array(19, 57, 47),
			'hsl'      => array(164, 49, 38),
			'hsv'      => array(164, 66, 57)
		),
		'imperial' => array(
			'name'     => 'Imperial',
			'html'     => '#602F6B',
			'graphviz' => '#602F6B',
			'rgb'      => array(38, 18, 42),
			'hsl'      => array(289, 39, 30),
			'hsv'      => array(289, 56, 42)
		),
		'imperialBlue' => array(
			'name'     => 'Imperial blue',
			'html'     => '#002395',
			'graphviz' => '#002395',
			'rgb'      => array(0, 14, 58),
			'hsl'      => array(226, 100, 29),
			'hsv'      => array(226, 100, 58)
		),
		'imperialPurple' => array(
			'name'     => 'Imperial purple',
			'html'     => '#66023C',
			'graphviz' => '#66023C',
			'rgb'      => array(40, 1, 24),
			'hsl'      => array(325, 96, 20),
			'hsv'      => array(325, 98, 40)
		),
		'imperialRed' => array(
			'name'     => 'Imperial red',
			'html'     => '#ED2939',
			'graphviz' => '#ED2939',
			'rgb'      => array(93, 16, 22),
			'hsl'      => array(355, 84, 55),
			'hsv'      => array(355, 83, 93)
		),
		'inchworm' => array(
			'name'     => 'Inchworm',
			'html'     => '#B2EC5D',
			'graphviz' => '#B2EC5D',
			'rgb'      => array(70, 93, 36),
			'hsl'      => array(84, 79, 65),
			'hsv'      => array(84, 61, 93)
		),
		'independence' => array(
			'name'     => 'Independence',
			'html'     => '#4C516D',
			'graphviz' => '#4C516D',
			'rgb'      => array(30, 32, 43),
			'hsl'      => array(231, 18, 36),
			'hsv'      => array(231, 30, 43)
		),
		'indiaGreen' => array(
			'name'     => 'India green',
			'html'     => '#138808',
			'graphviz' => '#138808',
			'rgb'      => array(7, 53, 3),
			'hsl'      => array(115, 89, 28),
			'hsv'      => array(115, 94, 53)
		),
		'indianRed' => array(
			'name'     => 'Indian red',
			'html'     => '#CD5C5C',
			'graphviz' => '#CD5C5C',
			'rgb'      => array(80, 36, 36),
			'hsl'      => array(0, 53, 58),
			'hsv'      => array(0, 55, 80)
		),
		'indianYellow' => array(
			'name'     => 'Indian yellow',
			'html'     => '#E3A857',
			'graphviz' => '#E3A857',
			'rgb'      => array(89, 66, 34),
			'hsl'      => array(35, 71, 62),
			'hsv'      => array(35, 62, 89)
		),
		'indigo' => array(
			'name'     => 'Indigo',
			'html'     => '#4B0082',
			'graphviz' => '#4B0082',
			'rgb'      => array(29, 0, 51),
			'hsl'      => array(266, 100, 26),
			'hsv'      => array(266, 100, 100)
		),
		'indigoWeb' => array(
			'name'     => 'Indigo (web)',
			'html'     => '#4B0082',
			'graphviz' => '#4B0082',
			'rgb'      => array(29, 0, 51),
			'hsl'      => array(275, 100, 25),
			'hsv'      => array(275, 100, 51)
		),
		'indigoDye' => array(
			'name'     => 'Indigo dye',
			'html'     => '#091F92',
			'graphviz' => '#091F92',
			'rgb'      => array(4, 12, 57),
			'hsl'      => array(230, 88, 30),
			'hsv'      => array(230, 94, 57)
		),
		'infraRed' => array(
			'name'     => 'Infra Red',
			'html'     => '#FF496C',
			'graphviz' => '#FF496C',
			'rgb'      => array(100, 29, 42),
			'hsl'      => array(348, 100, 64),
			'hsv'      => array(348, 71, 100)
		),
		'interdimensionalBlue' => array(
			'name'     => 'Interdimensional Blue',
			'html'     => '#360CCC',
			'graphviz' => '#360CCC',
			'rgb'      => array(21, 5, 80),
			'hsl'      => array(253, 89, 42),
			'hsv'      => array(253, 94, 80)
		),
		'internationalKleinBlue' => array(
			'name'     => 'International Klein Blue',
			'html'     => '#002FA7',
			'graphviz' => '#002FA7',
			'rgb'      => array(0, 18, 65),
			'hsl'      => array(223, 100, 33),
			'hsv'      => array(223, 100, 65)
		),
		'internationalOrangeGoldenGateBridge' => array(
			'name'     => 'International orange (Golden Gate Bridge)',
			'html'     => '#C0362C',
			'graphviz' => '#C0362C',
			'rgb'      => array(75, 21, 17),
			'hsl'      => array(4, 63, 46),
			'hsv'      => array(4, 77, 75)
		),
		'internationalOrangeAerospace' => array(
			'name'     => 'International orange (aerospace)',
			'html'     => '#FF4F00',
			'graphviz' => '#FF4F00',
			'rgb'      => array(100, 31, 0),
			'hsl'      => array(19, 100, 50),
			'hsv'      => array(19, 100, 100)
		),
		'internationalOrangeEngineering' => array(
			'name'     => 'International orange (engineering)',
			'html'     => '#BA160C',
			'graphviz' => '#BA160C',
			'rgb'      => array(73, 9, 5),
			'hsl'      => array(3, 88, 39),
			'hsv'      => array(3, 94, 73)
		),
		'iris' => array(
			'name'     => 'Iris',
			'html'     => '#5A4FCF',
			'graphviz' => '#5A4FCF',
			'rgb'      => array(35, 31, 81),
			'hsl'      => array(245, 57, 56),
			'hsv'      => array(245, 62, 81)
		),
		'irresistible' => array(
			'name'     => 'Irresistible',
			'html'     => '#B3446C',
			'graphviz' => '#B3446C',
			'rgb'      => array(70, 27, 42),
			'hsl'      => array(338, 45, 48),
			'hsv'      => array(338, 62, 70)
		),
		'isabelline' => array(
			'name'     => 'Isabelline',
			'html'     => '#F4F0EC',
			'graphviz' => '#F4F0EC',
			'rgb'      => array(96, 94, 93),
			'hsl'      => array(30, 27, 94),
			'hsv'      => array(30, 3, 96)
		),
		'islamicGreen' => array(
			'name'     => 'Islamic green',
			'html'     => '#009000',
			'graphviz' => '#009000',
			'rgb'      => array(0, 56, 0),
			'hsl'      => array(120, 100, 28),
			'hsv'      => array(120, 100, 56)
		),
		'italianSkyBlue' => array(
			'name'     => 'Italian sky blue',
			'html'     => '#B2FFFF',
			'graphviz' => '#B2FFFF',
			'rgb'      => array(70, 100, 100),
			'hsl'      => array(180, 100, 85),
			'hsv'      => array(180, 30, 100)
		),
		'ivory' => array(
			'name'     => 'Ivory',
			'html'     => '#FFFFF0',
			'graphviz' => '#FFFFF0',
			'rgb'      => array(100, 100, 94),
			'hsl'      => array(60, 100, 97),
			'hsv'      => array(60, 6, 100)
		),
		'jade' => array(
			'name'     => 'Jade',
			'html'     => '#00A86B',
			'graphviz' => '#00A86B',
			'rgb'      => array(0, 66, 42),
			'hsl'      => array(158, 100, 33),
			'hsv'      => array(158, 100, 66)
		),
		'japaneseCarmine' => array(
			'name'     => 'Japanese carmine',
			'html'     => '#9D2933',
			'graphviz' => '#9D2933',
			'rgb'      => array(62, 16, 20),
			'hsl'      => array(355, 59, 39),
			'hsv'      => array(355, 74, 62)
		),
		'japaneseIndigo' => array(
			'name'     => 'Japanese indigo',
			'html'     => '#264348',
			'graphviz' => '#264348',
			'rgb'      => array(15, 26, 28),
			'hsl'      => array(189, 31, 22),
			'hsv'      => array(189, 47, 28)
		),
		'japaneseViolet' => array(
			'name'     => 'Japanese violet',
			'html'     => '#5B3256',
			'graphviz' => '#5B3256',
			'rgb'      => array(36, 20, 34),
			'hsl'      => array(307, 29, 28),
			'hsv'      => array(307, 45, 36)
		),
		'jasmine' => array(
			'name'     => 'Jasmine',
			'html'     => '#F8DE7E',
			'graphviz' => '#F8DE7E',
			'rgb'      => array(97, 87, 49),
			'hsl'      => array(47, 90, 73),
			'hsv'      => array(47, 49, 97)
		),
		'jasper' => array(
			'name'     => 'Jasper',
			'html'     => '#D73B3E',
			'graphviz' => '#D73B3E',
			'rgb'      => array(84, 23, 24),
			'hsl'      => array(359, 66, 54),
			'hsv'      => array(359, 73, 84)
		),
		'jazzberryJam' => array(
			'name'     => 'Jazzberry jam',
			'html'     => '#A50B5E',
			'graphviz' => '#A50B5E',
			'rgb'      => array(65, 4, 37),
			'hsl'      => array(328, 88, 35),
			'hsv'      => array(328, 93, 65)
		),
		'jellyBean' => array(
			'name'     => 'Jelly Bean',
			'html'     => '#DA614E',
			'graphviz' => '#DA614E',
			'rgb'      => array(85, 38, 31),
			'hsl'      => array(8, 65, 58),
			'hsv'      => array(8, 64, 85)
		),
		'jet' => array(
			'name'     => 'Jet',
			'html'     => '#343434',
			'graphviz' => '#343434',
			'rgb'      => array(20, 20, 20),
			'hsl'      => array(null, 0, 20),
			'hsv'      => array(null, 0, 20)
		),
		'jonquil' => array(
			'name'     => 'Jonquil',
			'html'     => '#F4CA16',
			'graphviz' => '#F4CA16',
			'rgb'      => array(96, 79, 9),
			'hsl'      => array(49, 91, 52),
			'hsv'      => array(49, 91, 96)
		),
		'jordyBlue' => array(
			'name'     => 'Jordy blue',
			'html'     => '#8AB9F1',
			'graphviz' => '#8AB9F1',
			'rgb'      => array(54, 73, 95),
			'hsl'      => array(213, 79, 74),
			'hsv'      => array(213, 43, 95)
		),
		'juneBud' => array(
			'name'     => 'June bud',
			'html'     => '#BDDA57',
			'graphviz' => '#BDDA57',
			'rgb'      => array(74, 85, 34),
			'hsl'      => array(73, 64, 60),
			'hsv'      => array(73, 60, 85)
		),
		'jungleGreen' => array(
			'name'     => 'Jungle green',
			'html'     => '#29AB87',
			'graphviz' => '#29AB87',
			'rgb'      => array(16, 67, 53),
			'hsl'      => array(163, 61, 42),
			'hsv'      => array(163, 76, 67)
		),
		'ksuPurple' => array(
			'name'     => 'KSU Purple',
			'html'     => '#512888',
			'graphviz' => '#512888',
			'rgb'      => array(31, 15, 51),
			'hsl'      => array(266, 55, 33),
			'hsv'      => array(266, 71, 53)
		),
		'kuCrimson' => array(
			'name'     => 'KU Crimson',
			'html'     => '#E8000D',
			'graphviz' => '#E8000D',
			'rgb'      => array(91, 0, 5),
			'hsl'      => array(357, 100, 45),
			'hsv'      => array(357, 100, 91)
		),
		'kellyGreen' => array(
			'name'     => 'Kelly green',
			'html'     => '#4CBB17',
			'graphviz' => '#4CBB17',
			'rgb'      => array(30, 73, 9),
			'hsl'      => array(101, 78, 41),
			'hsv'      => array(101, 88, 73)
		),
		'kenyanCopper' => array(
			'name'     => 'Kenyan copper',
			'html'     => '#7C1C05',
			'graphviz' => '#7C1C05',
			'rgb'      => array(49, 11, 2),
			'hsl'      => array(12, 92, 25),
			'hsv'      => array(12, 96, 49)
		),
		'keppel' => array(
			'name'     => 'Keppel',
			'html'     => '#3AB09E',
			'graphviz' => '#3AB09E',
			'rgb'      => array(23, 69, 62),
			'hsl'      => array(171, 50, 46),
			'hsv'      => array(171, 67, 69)
		),
		'keyLime' => array(
			'name'     => 'Key Lime',
			'html'     => '#E8F48C',
			'graphviz' => '#E8F48C',
			'rgb'      => array(91, 96, 55),
			'hsl'      => array(67, 83, 75),
			'hsv'      => array(67, 43, 96)
		),
		'khakiHtmlCssKhaki' => array(
			'name'     => 'Khaki (HTML/CSS) (Khaki)',
			'html'     => '#C3B091',
			'graphviz' => '#C3B091',
			'rgb'      => array(76, 69, 57),
			'hsl'      => array(37, 29, 67),
			'hsv'      => array(37, 26, 76)
		),
		'khakiX11LightKhaki' => array(
			'name'     => 'Khaki (X11) (Light khaki)',
			'html'     => '#F0E68C',
			'graphviz' => '#F0E68C',
			'rgb'      => array(94, 90, 55),
			'hsl'      => array(54, 77, 75),
			'hsv'      => array(54, 42, 94)
		),
		'kiwi' => array(
			'name'     => 'Kiwi',
			'html'     => '#8EE53F',
			'graphviz' => '#8EE53F',
			'rgb'      => array(56, 90, 25),
			'hsl'      => array(91, 76, 57),
			'hsv'      => array(91, 72, 90)
		),
		'kobe' => array(
			'name'     => 'Kobe',
			'html'     => '#882D17',
			'graphviz' => '#882D17',
			'rgb'      => array(53, 18, 9),
			'hsl'      => array(12, 71, 31),
			'hsv'      => array(12, 83, 53)
		),
		'kobi' => array(
			'name'     => 'Kobi',
			'html'     => '#E79FC4',
			'graphviz' => '#E79FC4',
			'rgb'      => array(91, 62, 77),
			'hsl'      => array(329, 60, 76),
			'hsv'      => array(329, 31, 91)
		),
		'kobicha' => array(
			'name'     => 'Kobicha',
			'html'     => '#6B4423',
			'graphviz' => '#6B4423',
			'rgb'      => array(42, 27, 14),
			'hsl'      => array(28, 51, 28),
			'hsv'      => array(28, 67, 42)
		),
		'kombuGreen' => array(
			'name'     => 'Kombu green',
			'html'     => '#354230',
			'graphviz' => '#354230',
			'rgb'      => array(21, 26, 19),
			'hsl'      => array(103, 16, 22),
			'hsv'      => array(103, 27, 26)
		),
		'laSalleGreen' => array(
			'name'     => 'La Salle Green',
			'html'     => '#087830',
			'graphviz' => '#087830',
			'rgb'      => array(3, 47, 19),
			'hsl'      => array(141, 88, 25),
			'hsv'      => array(141, 93, 47)
		),
		'languidLavender' => array(
			'name'     => 'Languid lavender',
			'html'     => '#D6CADD',
			'graphviz' => '#D6CADD',
			'rgb'      => array(84, 79, 87),
			'hsl'      => array(278, 22, 83),
			'hsv'      => array(278, 9, 87)
		),
		'lapisLazuli' => array(
			'name'     => 'Lapis lazuli',
			'html'     => '#26619C',
			'graphviz' => '#26619C',
			'rgb'      => array(15, 38, 61),
			'hsl'      => array(210, 61, 38),
			'hsv'      => array(210, 76, 61)
		),
		'laserLemon' => array(
			'name'     => 'Laser Lemon',
			'html'     => '#FFFF66',
			'graphviz' => '#FFFF66',
			'rgb'      => array(100, 100, 40),
			'hsl'      => array(60, 100, 70),
			'hsv'      => array(60, 60, 100)
		),
		'laurelGreen' => array(
			'name'     => 'Laurel green',
			'html'     => '#A9BA9D',
			'graphviz' => '#A9BA9D',
			'rgb'      => array(66, 73, 62),
			'hsl'      => array(95, 17, 67),
			'hsv'      => array(95, 16, 73)
		),
		'lava' => array(
			'name'     => 'Lava',
			'html'     => '#CF1020',
			'graphviz' => '#CF1020',
			'rgb'      => array(81, 6, 13),
			'hsl'      => array(355, 86, 44),
			'hsv'      => array(355, 92, 81)
		),
		'lavenderFloral' => array(
			'name'     => 'Lavender (floral)',
			'html'     => '#B57EDC',
			'graphviz' => '#B57EDC',
			'rgb'      => array(71, 49, 86),
			'hsl'      => array(275, 57, 68),
			'hsv'      => array(275, 43, 86)
		),
		'lavenderWeb' => array(
			'name'     => 'Lavender (web)',
			'html'     => '#E6E6FA',
			'graphviz' => '#E6E6FA',
			'rgb'      => array(90, 90, 98),
			'hsl'      => array(240, 67, 94),
			'hsv'      => array(240, 8, 98)
		),
		'lavenderBlue' => array(
			'name'     => 'Lavender blue',
			'html'     => '#CCCCFF',
			'graphviz' => '#CCCCFF',
			'rgb'      => array(80, 80, 100),
			'hsl'      => array(240, 100, 90),
			'hsv'      => array(240, 20, 100)
		),
		'lavenderBlush' => array(
			'name'     => 'Lavender blush',
			'html'     => '#FFF0F5',
			'graphviz' => '#FFF0F5',
			'rgb'      => array(100, 94, 96),
			'hsl'      => array(340, 100, 97),
			'hsv'      => array(340, 6, 100)
		),
		'lavenderGray' => array(
			'name'     => 'Lavender gray',
			'html'     => '#C4C3D0',
			'graphviz' => '#C4C3D0',
			'rgb'      => array(77, 76, 82),
			'hsl'      => array(245, 12, 79),
			'hsv'      => array(245, 6, 82)
		),
		'lavenderIndigo' => array(
			'name'     => 'Lavender indigo',
			'html'     => '#9457EB',
			'graphviz' => '#9457EB',
			'rgb'      => array(58, 34, 92),
			'hsl'      => array(265, 79, 63),
			'hsv'      => array(265, 63, 92)
		),
		'lavenderMagenta' => array(
			'name'     => 'Lavender magenta',
			'html'     => '#EE82EE',
			'graphviz' => '#EE82EE',
			'rgb'      => array(93, 51, 93),
			'hsl'      => array(300, 76, 72),
			'hsv'      => array(300, 45, 93)
		),
		'lavenderMist' => array(
			'name'     => 'Lavender mist',
			'html'     => '#E6E6FA',
			'graphviz' => '#E6E6FA',
			'rgb'      => array(90, 90, 98),
			'hsl'      => array(240, 67, 94),
			'hsv'      => array(240, 8, 98)
		),
		'lavenderPink' => array(
			'name'     => 'Lavender pink',
			'html'     => '#FBAED2',
			'graphviz' => '#FBAED2',
			'rgb'      => array(98, 68, 82),
			'hsl'      => array(332, 91, 83),
			'hsv'      => array(332, 31, 98)
		),
		'lavenderPurple' => array(
			'name'     => 'Lavender purple',
			'html'     => '#967BB6',
			'graphviz' => '#967BB6',
			'rgb'      => array(59, 48, 71),
			'hsl'      => array(267, 29, 60),
			'hsv'      => array(267, 32, 71)
		),
		'lavenderRose' => array(
			'name'     => 'Lavender rose',
			'html'     => '#FBA0E3',
			'graphviz' => '#FBA0E3',
			'rgb'      => array(98, 63, 89),
			'hsl'      => array(316, 92, 81),
			'hsv'      => array(316, 36, 98)
		),
		'lawnGreen' => array(
			'name'     => 'Lawn green',
			'html'     => '#7CFC00',
			'graphviz' => '#7CFC00',
			'rgb'      => array(49, 99, 0),
			'hsl'      => array(90, 100, 49),
			'hsv'      => array(90, 100, 99)
		),
		'lemon' => array(
			'name'     => 'Lemon',
			'html'     => '#FFF700',
			'graphviz' => '#FFF700',
			'rgb'      => array(100, 97, 0),
			'hsl'      => array(58, 100, 50),
			'hsv'      => array(58, 100, 100)
		),
		'lemonChiffon' => array(
			'name'     => 'Lemon chiffon',
			'html'     => '#FFFACD',
			'graphviz' => '#FFFACD',
			'rgb'      => array(100, 98, 80),
			'hsl'      => array(54, 100, 90),
			'hsv'      => array(54, 20, 100)
		),
		'lemonCurry' => array(
			'name'     => 'Lemon curry',
			'html'     => '#CCA01D',
			'graphviz' => '#CCA01D',
			'rgb'      => array(80, 63, 11),
			'hsl'      => array(45, 75, 46),
			'hsv'      => array(45, 86, 80)
		),
		'lemonGlacier' => array(
			'name'     => 'Lemon glacier',
			'html'     => '#FDFF00',
			'graphviz' => '#FDFF00',
			'rgb'      => array(99, 100, 0),
			'hsl'      => array(60, 100, 50),
			'hsv'      => array(60, 100, 100)
		),
		'lemonLime' => array(
			'name'     => 'Lemon lime',
			'html'     => '#E3FF00',
			'graphviz' => '#E3FF00',
			'rgb'      => array(89, 100, 0),
			'hsl'      => array(67, 100, 50),
			'hsv'      => array(67, 100, 100)
		),
		'lemonMeringue' => array(
			'name'     => 'Lemon meringue',
			'html'     => '#F6EABE',
			'graphviz' => '#F6EABE',
			'rgb'      => array(96, 92, 75),
			'hsl'      => array(47, 76, 85),
			'hsv'      => array(47, 23, 96)
		),
		'lemonYellow' => array(
			'name'     => 'Lemon yellow',
			'html'     => '#FFF44F',
			'graphviz' => '#FFF44F',
			'rgb'      => array(100, 96, 31),
			'hsl'      => array(56, 100, 65),
			'hsv'      => array(56, 69, 100)
		),
		'liberty' => array(
			'name'     => 'Liberty',
			'html'     => '#545AA7',
			'graphviz' => '#545AA7',
			'rgb'      => array(33, 35, 65),
			'hsl'      => array(236, 33, 49),
			'hsv'      => array(236, 50, 65)
		),
		'licorice' => array(
			'name'     => 'Licorice',
			'html'     => '#1A1110',
			'graphviz' => '#1A1110',
			'rgb'      => array(10, 7, 6),
			'hsl'      => array(6, 24, 8),
			'hsv'      => array(6, 38, 10)
		),
		'lightFrenchBeige' => array(
			'name'     => 'Light French beige',
			'html'     => '#C8AD7F',
			'graphviz' => '#C8AD7F',
			'rgb'      => array(78, 68, 50),
			'hsl'      => array(38, 40, 64),
			'hsv'      => array(38, 37, 78)
		),
		'lightThulianPink' => array(
			'name'     => 'Light Thulian pink',
			'html'     => '#E68FAC',
			'graphviz' => '#E68FAC',
			'rgb'      => array(90, 56, 67),
			'hsl'      => array(340, 64, 73),
			'hsv'      => array(340, 38, 90)
		),
		'lightApricot' => array(
			'name'     => 'Light apricot',
			'html'     => '#FDD5B1',
			'graphviz' => '#FDD5B1',
			'rgb'      => array(99, 84, 69),
			'hsl'      => array(28, 95, 84),
			'hsv'      => array(28, 30, 99)
		),
		'lightBlue' => array(
			'name'     => 'Light blue',
			'html'     => '#ADD8E6',
			'graphviz' => '#ADD8E6',
			'rgb'      => array(68, 85, 90),
			'hsl'      => array(195, 53, 79),
			'hsv'      => array(195, 25, 90)
		),
		'lightBrown' => array(
			'name'     => 'Light brown',
			'html'     => '#B5651D',
			'graphviz' => '#B5651D',
			'rgb'      => array(71, 40, 11),
			'hsl'      => array(28, 72, 41),
			'hsv'      => array(28, 84, 71)
		),
		'lightCarminePink' => array(
			'name'     => 'Light carmine pink',
			'html'     => '#E66771',
			'graphviz' => '#E66771',
			'rgb'      => array(90, 40, 44),
			'hsl'      => array(355, 72, 65),
			'hsv'      => array(355, 55, 90)
		),
		'lightCobaltBlue' => array(
			'name'     => 'Light cobalt blue',
			'html'     => '#88ACE0',
			'graphviz' => '#88ACE0',
			'rgb'      => array(53, 67, 88),
			'hsl'      => array(215, 59, 71),
			'hsv'      => array(215, 39, 88)
		),
		'lightCoral' => array(
			'name'     => 'Light coral',
			'html'     => '#F08080',
			'graphviz' => '#F08080',
			'rgb'      => array(94, 50, 50),
			'hsl'      => array(0, 79, 72),
			'hsv'      => array(0, 47, 94)
		),
		'lightCornflowerBlue' => array(
			'name'     => 'Light cornflower blue',
			'html'     => '#93CCEA',
			'graphviz' => '#93CCEA',
			'rgb'      => array(58, 80, 92),
			'hsl'      => array(201, 67, 75),
			'hsv'      => array(201, 37, 92)
		),
		'lightCrimson' => array(
			'name'     => 'Light crimson',
			'html'     => '#F56991',
			'graphviz' => '#F56991',
			'rgb'      => array(96, 41, 57),
			'hsl'      => array(343, 88, 69),
			'hsv'      => array(343, 57, 96)
		),
		'lightCyan' => array(
			'name'     => 'Light cyan',
			'html'     => '#E0FFFF',
			'graphviz' => '#E0FFFF',
			'rgb'      => array(88, 100, 100),
			'hsl'      => array(180, 100, 94),
			'hsv'      => array(180, 12, 100)
		),
		'lightDeepPink' => array(
			'name'     => 'Light deep pink',
			'html'     => '#FF5CCD',
			'graphviz' => '#FF5CCD',
			'rgb'      => array(100, 36, 80),
			'hsl'      => array(318, 100, 68),
			'hsv'      => array(318, 64, 100)
		),
		'lightFuchsiaPink' => array(
			'name'     => 'Light fuchsia pink',
			'html'     => '#F984EF',
			'graphviz' => '#F984EF',
			'rgb'      => array(98, 52, 94),
			'hsl'      => array(305, 91, 75),
			'hsv'      => array(305, 47, 98)
		),
		'lightGoldenrodYellow' => array(
			'name'     => 'Light goldenrod yellow',
			'html'     => '#FAFAD2',
			'graphviz' => '#FAFAD2',
			'rgb'      => array(98, 98, 82),
			'hsl'      => array(60, 80, 90),
			'hsv'      => array(60, 16, 98)
		),
		'lightGray' => array(
			'name'     => 'Light gray',
			'html'     => '#D3D3D3',
			'graphviz' => '#D3D3D3',
			'rgb'      => array(83, 83, 83),
			'hsl'      => array(0, 0, 83),
			'hsv'      => array(0, 0, 83)
		),
		'lightGrayishMagenta' => array(
			'name'     => 'Light grayish magenta',
			'html'     => '#CC99CC',
			'graphviz' => '#CC99CC',
			'rgb'      => array(80, 60, 80),
			'hsl'      => array(300, 33, 70),
			'hsv'      => array(300, 25, 80)
		),
		'lightGreen' => array(
			'name'     => 'Light green',
			'html'     => '#90EE90',
			'graphviz' => '#90EE90',
			'rgb'      => array(56, 93, 56),
			'hsl'      => array(120, 73, 75),
			'hsv'      => array(120, 39, 93)
		),
		'lightHotPink' => array(
			'name'     => 'Light hot pink',
			'html'     => '#FFB3DE',
			'graphviz' => '#FFB3DE',
			'rgb'      => array(100, 70, 87),
			'hsl'      => array(326, 100, 85),
			'hsv'      => array(326, 30, 100)
		),
		'lightKhaki' => array(
			'name'     => 'Light khaki',
			'html'     => '#F0E68C',
			'graphviz' => '#F0E68C',
			'rgb'      => array(94, 90, 55),
			'hsl'      => array(54, 77, 75),
			'hsv'      => array(54, 42, 94)
		),
		'lightMediumOrchid' => array(
			'name'     => 'Light medium orchid',
			'html'     => '#D39BCB',
			'graphviz' => '#D39BCB',
			'rgb'      => array(83, 61, 80),
			'hsl'      => array(309, 39, 72),
			'hsv'      => array(309, 27, 83)
		),
		'lightMossGreen' => array(
			'name'     => 'Light moss green',
			'html'     => '#ADDFAD',
			'graphviz' => '#ADDFAD',
			'rgb'      => array(68, 87, 68),
			'hsl'      => array(120, 44, 78),
			'hsv'      => array(120, 22, 87)
		),
		'lightOrchid' => array(
			'name'     => 'Light orchid',
			'html'     => '#E6A8D7',
			'graphviz' => '#E6A8D7',
			'rgb'      => array(90, 66, 84),
			'hsl'      => array(315, 55, 78),
			'hsv'      => array(315, 27, 90)
		),
		'lightPastelPurple' => array(
			'name'     => 'Light pastel purple',
			'html'     => '#B19CD9',
			'graphviz' => '#B19CD9',
			'rgb'      => array(69, 61, 85),
			'hsl'      => array(261, 45, 73),
			'hsv'      => array(261, 28, 85)
		),
		'lightPink' => array(
			'name'     => 'Light pink',
			'html'     => '#FFB6C1',
			'graphviz' => '#FFB6C1',
			'rgb'      => array(100, 71, 76),
			'hsl'      => array(351, 100, 86),
			'hsv'      => array(351, 29, 100)
		),
		'lightRedOchre' => array(
			'name'     => 'Light red ochre',
			'html'     => '#E97451',
			'graphviz' => '#E97451',
			'rgb'      => array(91, 45, 32),
			'hsl'      => array(14, 78, 62),
			'hsv'      => array(14, 65, 91)
		),
		'lightSalmon' => array(
			'name'     => 'Light salmon',
			'html'     => '#FFA07A',
			'graphviz' => '#FFA07A',
			'rgb'      => array(100, 63, 48),
			'hsl'      => array(17, 100, 74),
			'hsv'      => array(17, 52, 100)
		),
		'lightSalmonPink' => array(
			'name'     => 'Light salmon pink',
			'html'     => '#FF9999',
			'graphviz' => '#FF9999',
			'rgb'      => array(100, 60, 60),
			'hsl'      => array(0, 100, 80),
			'hsv'      => array(0, 40, 100)
		),
		'lightSeaGreen' => array(
			'name'     => 'Light sea green',
			'html'     => '#20B2AA',
			'graphviz' => '#20B2AA',
			'rgb'      => array(13, 70, 67),
			'hsl'      => array(177, 70, 41),
			'hsv'      => array(177, 82, 70)
		),
		'lightSkyBlue' => array(
			'name'     => 'Light sky blue',
			'html'     => '#87CEFA',
			'graphviz' => '#87CEFA',
			'rgb'      => array(53, 81, 98),
			'hsl'      => array(203, 92, 75),
			'hsv'      => array(203, 46, 98)
		),
		'lightSlateGray' => array(
			'name'     => 'Light slate gray',
			'html'     => '#778899',
			'graphviz' => '#778899',
			'rgb'      => array(47, 53, 60),
			'hsl'      => array(210, 14, 53),
			'hsv'      => array(210, 22, 60)
		),
		'lightSteelBlue' => array(
			'name'     => 'Light steel blue',
			'html'     => '#B0C4DE',
			'graphviz' => '#B0C4DE',
			'rgb'      => array(69, 77, 87),
			'hsl'      => array(214, 41, 78),
			'hsv'      => array(214, 21, 87)
		),
		'lightTaupe' => array(
			'name'     => 'Light taupe',
			'html'     => '#B38B6D',
			'graphviz' => '#B38B6D',
			'rgb'      => array(70, 55, 43),
			'hsl'      => array(26, 32, 56),
			'hsv'      => array(26, 39, 70)
		),
		'lightYellow' => array(
			'name'     => 'Light yellow',
			'html'     => '#FFFFE0',
			'graphviz' => '#FFFFE0',
			'rgb'      => array(100, 100, 88),
			'hsl'      => array(60, 100, 94),
			'hsv'      => array(60, 12, 100)
		),
		'lilac' => array(
			'name'     => 'Lilac',
			'html'     => '#C8A2C8',
			'graphviz' => '#C8A2C8',
			'rgb'      => array(78, 64, 78),
			'hsl'      => array(300, 26, 71),
			'hsv'      => array(300, 19, 78)
		),
		'lilacLuster' => array(
			'name'     => 'Lilac Luster',
			'html'     => '#AE98AA',
			'graphviz' => '#AE98AA',
			'rgb'      => array(68, 60, 67),
			'hsl'      => array(311, 12, 64),
			'hsv'      => array(311, 13, 68)
		),
		'limeColorWheel' => array(
			'name'     => 'Lime (color wheel)',
			'html'     => '#BFFF00',
			'graphviz' => '#BFFF00',
			'rgb'      => array(75, 100, 0),
			'hsl'      => array(75, 100, 50),
			'hsv'      => array(75, 100, 100)
		),
		'limeWebX11Green' => array(
			'name'     => 'Lime (web) (X11 green)',
			'html'     => '#00FF00',
			'graphviz' => '#00FF00',
			'rgb'      => array(0, 100, 0),
			'hsl'      => array(120, 100, 50),
			'hsv'      => array(120, 100, 100)
		),
		'limeGreen' => array(
			'name'     => 'Lime green',
			'html'     => '#32CD32',
			'graphviz' => '#32CD32',
			'rgb'      => array(20, 80, 20),
			'hsl'      => array(120, 61, 50),
			'hsv'      => array(120, 76, 80)
		),
		'limerick' => array(
			'name'     => 'Limerick',
			'html'     => '#9DC209',
			'graphviz' => '#9DC209',
			'rgb'      => array(62, 76, 4),
			'hsl'      => array(72, 91, 40),
			'hsv'      => array(72, 95, 76)
		),
		'lincolnGreen' => array(
			'name'     => 'Lincoln green',
			'html'     => '#195905',
			'graphviz' => '#195905',
			'rgb'      => array(10, 35, 2),
			'hsl'      => array(106, 89, 18),
			'hsv'      => array(106, 94, 35)
		),
		'linen' => array(
			'name'     => 'Linen',
			'html'     => '#FAF0E6',
			'graphviz' => '#FAF0E6',
			'rgb'      => array(98, 94, 90),
			'hsl'      => array(30, 67, 94),
			'hsv'      => array(30, 8, 98)
		),
		'lion' => array(
			'name'     => 'Lion',
			'html'     => '#C19A6B',
			'graphviz' => '#C19A6B',
			'rgb'      => array(76, 60, 42),
			'hsl'      => array(33, 41, 59),
			'hsv'      => array(33, 45, 76)
		),
		'liseranPurple' => array(
			'name'     => 'Liseran Purple',
			'html'     => '#DE6FA1',
			'graphviz' => '#DE6FA1',
			'rgb'      => array(87, 44, 63),
			'hsl'      => array(333, 63, 65),
			'hsv'      => array(333, 50, 87)
		),
		'littleBoyBlue' => array(
			'name'     => 'Little boy blue',
			'html'     => '#6CA0DC',
			'graphviz' => '#6CA0DC',
			'rgb'      => array(42, 63, 86),
			'hsl'      => array(212, 62, 64),
			'hsv'      => array(212, 51, 86)
		),
		'liver' => array(
			'name'     => 'Liver',
			'html'     => '#674C47',
			'graphviz' => '#674C47',
			'rgb'      => array(40, 30, 28),
			'hsl'      => array(9, 18, 34),
			'hsv'      => array(9, 31, 40)
		),
		'liverDogs' => array(
			'name'     => 'Liver (dogs)',
			'html'     => '#B86D29',
			'graphviz' => '#B86D29',
			'rgb'      => array(72, 43, 16),
			'hsl'      => array(29, 64, 44),
			'hsv'      => array(29, 78, 72)
		),
		'liverOrgan' => array(
			'name'     => 'Liver (organ)',
			'html'     => '#6C2E1F',
			'graphviz' => '#6C2E1F',
			'rgb'      => array(42, 18, 12),
			'hsl'      => array(12, 55, 27),
			'hsv'      => array(12, 71, 42)
		),
		'liverChestnut' => array(
			'name'     => 'Liver chestnut',
			'html'     => '#987456',
			'graphviz' => '#987456',
			'rgb'      => array(60, 45, 34),
			'hsl'      => array(27, 28, 47),
			'hsv'      => array(27, 43, 60)
		),
		'livid' => array(
			'name'     => 'Livid',
			'html'     => '#6699CC',
			'graphviz' => '#6699CC',
			'rgb'      => array(40, 60, 80),
			'hsl'      => array(210, 50, 60),
			'hsv'      => array(210, 50, 80)
		),
		'lumber' => array(
			'name'     => 'Lumber',
			'html'     => '#FFE4CD',
			'graphviz' => '#FFE4CD',
			'rgb'      => array(100, 89, 80),
			'hsl'      => array(28, 100, 90),
			'hsv'      => array(28, 20, 100)
		),
		'lust' => array(
			'name'     => 'Lust',
			'html'     => '#E62020',
			'graphviz' => '#E62020',
			'rgb'      => array(90, 13, 13),
			'hsl'      => array(0, 80, 51),
			'hsv'      => array(0, 86, 90)
		),
		'msuGreen' => array(
			'name'     => 'MSU Green',
			'html'     => '#18453B',
			'graphviz' => '#18453B',
			'rgb'      => array(9, 27, 23),
			'hsl'      => array(167, 48, 18),
			'hsv'      => array(167, 65, 27)
		),
		'maastrichtBlue' => array(
			'name'     => 'Maastricht Blue',
			'html'     => '#001C3D',
			'graphviz' => '#001C3D',
			'rgb'      => array(0, 11, 24),
			'hsl'      => array(212, 100, 12),
			'hsv'      => array(212, 100, 24)
		),
		'macaroniAndCheese' => array(
			'name'     => 'Macaroni and Cheese',
			'html'     => '#FFBD88',
			'graphviz' => '#FFBD88',
			'rgb'      => array(100, 74, 53),
			'hsl'      => array(27, 100, 77),
			'hsv'      => array(27, 47, 100)
		),
		'madderLake' => array(
			'name'     => 'Madder Lake',
			'html'     => '#CC3336',
			'graphviz' => '#CC3336',
			'rgb'      => array(80, 20, 21),
			'hsl'      => array(359, 60, 50),
			'hsv'      => array(359, 75, 80)
		),
		'magenta' => array(
			'name'     => 'Magenta',
			'html'     => '#FF00FF',
			'graphviz' => '#FF00FF',
			'rgb'      => array(100, 0, 100),
			'hsl'      => array(300, 100, 50),
			'hsv'      => array(300, 100, 100)
		),
		'magentaCrayola' => array(
			'name'     => 'Magenta (Crayola)',
			'html'     => '#FF55A3',
			'graphviz' => '#FF55A3',
			'rgb'      => array(100, 33, 64),
			'hsl'      => array(332, 100, 67),
			'hsv'      => array(332, 67, 100)
		),
		'magentaPantone' => array(
			'name'     => 'Magenta (Pantone)',
			'html'     => '#D0417E',
			'graphviz' => '#D0417E',
			'rgb'      => array(82, 25, 49),
			'hsl'      => array(334, 60, 54),
			'hsv'      => array(334, 69, 82)
		),
		'magentaDye' => array(
			'name'     => 'Magenta (dye)',
			'html'     => '#CA1F7B',
			'graphviz' => '#CA1F7B',
			'rgb'      => array(79, 12, 48),
			'hsl'      => array(328, 73, 46),
			'hsv'      => array(328, 85, 79)
		),
		'magentaProcess' => array(
			'name'     => 'Magenta (process)',
			'html'     => '#FF0090',
			'graphviz' => '#FF0090',
			'rgb'      => array(100, 0, 56),
			'hsl'      => array(326, 100, 50),
			'hsv'      => array(326, 100, 100)
		),
		'magentaHaze' => array(
			'name'     => 'Magenta haze',
			'html'     => '#9F4576',
			'graphviz' => '#9F4576',
			'rgb'      => array(62, 27, 46),
			'hsl'      => array(327, 39, 45),
			'hsv'      => array(327, 57, 62)
		),
		'magentaPink' => array(
			'name'     => 'Magenta-pink',
			'html'     => '#CC338B',
			'graphviz' => '#CC338B',
			'rgb'      => array(80, 20, 55),
			'hsl'      => array(325, 60, 50),
			'hsv'      => array(325, 75, 80)
		),
		'magicPotion' => array(
			'name'     => 'Magic Potion',
			'html'     => '#FF4466',
			'graphviz' => '#FF4466',
			'rgb'      => array(100, 27, 40),
			'hsl'      => array(349, 100, 63),
			'hsv'      => array(349, 73, 100)
		),
		'magicMint' => array(
			'name'     => 'Magic mint',
			'html'     => '#AAF0D1',
			'graphviz' => '#AAF0D1',
			'rgb'      => array(67, 94, 82),
			'hsl'      => array(153, 70, 80),
			'hsv'      => array(153, 29, 94)
		),
		'magnolia' => array(
			'name'     => 'Magnolia',
			'html'     => '#F8F4FF',
			'graphviz' => '#F8F4FF',
			'rgb'      => array(97, 96, 100),
			'hsl'      => array(262, 100, 98),
			'hsv'      => array(262, 4, 100)
		),
		'mahogany' => array(
			'name'     => 'Mahogany',
			'html'     => '#C04000',
			'graphviz' => '#C04000',
			'rgb'      => array(75, 25, 0),
			'hsl'      => array(20, 100, 38),
			'hsv'      => array(20, 100, 75)
		),
		'maize' => array(
			'name'     => 'Maize',
			'html'     => '#FBEC5D',
			'graphviz' => '#FBEC5D',
			'rgb'      => array(98, 93, 36),
			'hsl'      => array(54, 95, 67),
			'hsv'      => array(54, 63, 98)
		),
		'majorelleBlue' => array(
			'name'     => 'Majorelle Blue',
			'html'     => '#6050DC',
			'graphviz' => '#6050DC',
			'rgb'      => array(38, 31, 86),
			'hsl'      => array(247, 67, 59),
			'hsv'      => array(247, 64, 86)
		),
		'malachite' => array(
			'name'     => 'Malachite',
			'html'     => '#0BDA51',
			'graphviz' => '#0BDA51',
			'rgb'      => array(4, 85, 32),
			'hsl'      => array(140, 90, 45),
			'hsv'      => array(140, 95, 85)
		),
		'manatee' => array(
			'name'     => 'Manatee',
			'html'     => '#979AAA',
			'graphviz' => '#979AAA',
			'rgb'      => array(59, 60, 67),
			'hsl'      => array(231, 10, 63),
			'hsv'      => array(231, 11, 67)
		),
		'mandarin' => array(
			'name'     => 'Mandarin',
			'html'     => '#F37A48',
			'graphviz' => '#F37A48',
			'rgb'      => array(95, 48, 28),
			'hsl'      => array(18, 88, 62),
			'hsv'      => array(18, 70, 95)
		),
		'mangoTango' => array(
			'name'     => 'Mango Tango',
			'html'     => '#FF8243',
			'graphviz' => '#FF8243',
			'rgb'      => array(100, 51, 26),
			'hsl'      => array(20, 100, 63),
			'hsv'      => array(20, 74, 100)
		),
		'mantis' => array(
			'name'     => 'Mantis',
			'html'     => '#74C365',
			'graphviz' => '#74C365',
			'rgb'      => array(45, 76, 40),
			'hsl'      => array(110, 44, 58),
			'hsv'      => array(110, 48, 76)
		),
		'mardiGras' => array(
			'name'     => 'Mardi Gras',
			'html'     => '#880085',
			'graphviz' => '#880085',
			'rgb'      => array(53, 0, 52),
			'hsl'      => array(301, 100, 27),
			'hsv'      => array(301, 100, 53)
		),
		'marigold' => array(
			'name'     => 'Marigold',
			'html'     => '#EAA221',
			'graphviz' => '#EAA221',
			'rgb'      => array(92, 64, 13),
			'hsl'      => array(39, 83, 52),
			'hsv'      => array(39, 85, 91)
		),
		'maroonCrayola' => array(
			'name'     => 'Maroon (Crayola)',
			'html'     => '#C32148',
			'graphviz' => '#C32148',
			'rgb'      => array(76, 13, 28),
			'hsl'      => array(346, 71, 45),
			'hsv'      => array(346, 83, 76)
		),
		'maroonHtmlCss' => array(
			'name'     => 'Maroon (HTML/CSS)',
			'html'     => '#800000',
			'graphviz' => '#800000',
			'rgb'      => array(50, 0, 0),
			'hsl'      => array(0, 100, 25),
			'hsv'      => array(0, 100, 50)
		),
		'maroonX11' => array(
			'name'     => 'Maroon (X11)',
			'html'     => '#B03060',
			'graphviz' => '#B03060',
			'rgb'      => array(69, 19, 38),
			'hsl'      => array(338, 57, 44),
			'hsv'      => array(338, 73, 69)
		),
		'mauve' => array(
			'name'     => 'Mauve',
			'html'     => '#E0B0FF',
			'graphviz' => '#E0B0FF',
			'rgb'      => array(88, 69, 100),
			'hsl'      => array(276, 100, 85),
			'hsv'      => array(276, 31, 100)
		),
		'mauveTaupe' => array(
			'name'     => 'Mauve taupe',
			'html'     => '#915F6D',
			'graphviz' => '#915F6D',
			'rgb'      => array(57, 37, 43),
			'hsl'      => array(343, 21, 47),
			'hsv'      => array(343, 34, 57)
		),
		'mauvelous' => array(
			'name'     => 'Mauvelous',
			'html'     => '#EF98AA',
			'graphviz' => '#EF98AA',
			'rgb'      => array(94, 60, 67),
			'hsl'      => array(348, 73, 77),
			'hsv'      => array(348, 36, 94)
		),
		'maximumBlue' => array(
			'name'     => 'Maximum Blue',
			'html'     => '#47ABCC',
			'graphviz' => '#47ABCC',
			'rgb'      => array(28, 67, 80),
			'hsl'      => array(195, 57, 54),
			'hsv'      => array(195, 65, 80)
		),
		'maximumBlueGreen' => array(
			'name'     => 'Maximum Blue Green',
			'html'     => '#30BFBF',
			'graphviz' => '#30BFBF',
			'rgb'      => array(19, 75, 75),
			'hsl'      => array(180, 60, 47),
			'hsv'      => array(180, 75, 75)
		),
		'maximumBluePurple' => array(
			'name'     => 'Maximum Blue Purple',
			'html'     => '#ACACE6',
			'graphviz' => '#ACACE6',
			'rgb'      => array(67, 67, 90),
			'hsl'      => array(240, 54, 79),
			'hsv'      => array(240, 25, 90)
		),
		'maximumGreen' => array(
			'name'     => 'Maximum Green',
			'html'     => '#5E8C31',
			'graphviz' => '#5E8C31',
			'rgb'      => array(37, 55, 19),
			'hsl'      => array(90, 48, 37),
			'hsv'      => array(90, 65, 55)
		),
		'maximumGreenYellow' => array(
			'name'     => 'Maximum Green Yellow',
			'html'     => '#D9E650',
			'graphviz' => '#D9E650',
			'rgb'      => array(85, 90, 31),
			'hsl'      => array(65, 75, 61),
			'hsv'      => array(65, 65, 90)
		),
		'maximumPurple' => array(
			'name'     => 'Maximum Purple',
			'html'     => '#733380',
			'graphviz' => '#733380',
			'rgb'      => array(45, 20, 50),
			'hsl'      => array(290, 43, 35),
			'hsv'      => array(290, 60, 50)
		),
		'maximumRed' => array(
			'name'     => 'Maximum Red',
			'html'     => '#D92121',
			'graphviz' => '#D92121',
			'rgb'      => array(85, 13, 13),
			'hsl'      => array(0, 74, 49),
			'hsv'      => array(0, 85, 85)
		),
		'maximumRedPurple' => array(
			'name'     => 'Maximum Red Purple',
			'html'     => '#A63A79',
			'graphviz' => '#A63A79',
			'rgb'      => array(65, 23, 47),
			'hsl'      => array(325, 48, 44),
			'hsv'      => array(325, 65, 65)
		),
		'maximumYellow' => array(
			'name'     => 'Maximum Yellow',
			'html'     => '#FAFA37',
			'graphviz' => '#FAFA37',
			'rgb'      => array(98, 98, 22),
			'hsl'      => array(60, 95, 60),
			'hsv'      => array(60, 78, 98)
		),
		'maximumYellowRed' => array(
			'name'     => 'Maximum Yellow Red',
			'html'     => '#F2BA49',
			'graphviz' => '#F2BA49',
			'rgb'      => array(95, 73, 29),
			'hsl'      => array(40, 87, 62),
			'hsv'      => array(40, 70, 95)
		),
		'mayGreen' => array(
			'name'     => 'May green',
			'html'     => '#4C9141',
			'graphviz' => '#4C9141',
			'rgb'      => array(30, 57, 25),
			'hsl'      => array(112, 38, 41),
			'hsv'      => array(112, 55, 57)
		),
		'mayaBlue' => array(
			'name'     => 'Maya blue',
			'html'     => '#73C2FB',
			'graphviz' => '#73C2FB',
			'rgb'      => array(45, 76, 98),
			'hsl'      => array(205, 94, 72),
			'hsv'      => array(205, 54, 98)
		),
		'meatBrown' => array(
			'name'     => 'Meat brown',
			'html'     => '#E5B73B',
			'graphviz' => '#E5B73B',
			'rgb'      => array(90, 72, 23),
			'hsl'      => array(44, 77, 56),
			'hsv'      => array(44, 74, 90)
		),
		'mediumPersianBlue' => array(
			'name'     => 'Medium Persian blue',
			'html'     => '#0067A5',
			'graphviz' => '#0067A5',
			'rgb'      => array(0, 40, 65),
			'hsl'      => array(203, 100, 32),
			'hsv'      => array(203, 100, 65)
		),
		'mediumTuscanRed' => array(
			'name'     => 'Medium Tuscan red',
			'html'     => '#79443B',
			'graphviz' => '#79443B',
			'rgb'      => array(47, 27, 23),
			'hsl'      => array(9, 34, 35),
			'hsv'      => array(9, 51, 47)
		),
		'mediumAquamarine' => array(
			'name'     => 'Medium aquamarine',
			'html'     => '#66DDAA',
			'graphviz' => '#66DDAA',
			'rgb'      => array(40, 87, 67),
			'hsl'      => array(154, 64, 63),
			'hsv'      => array(154, 54, 87)
		),
		'mediumBlue' => array(
			'name'     => 'Medium blue',
			'html'     => '#0000CD',
			'graphviz' => '#0000CD',
			'rgb'      => array(0, 0, 80),
			'hsl'      => array(240, 100, 40),
			'hsv'      => array(240, 100, 80)
		),
		'mediumCandyAppleRed' => array(
			'name'     => 'Medium candy apple red',
			'html'     => '#E2062C',
			'graphviz' => '#E2062C',
			'rgb'      => array(89, 2, 17),
			'hsl'      => array(350, 95, 45),
			'hsv'      => array(350, 97, 89)
		),
		'mediumCarmine' => array(
			'name'     => 'Medium carmine',
			'html'     => '#AF4035',
			'graphviz' => '#AF4035',
			'rgb'      => array(69, 25, 21),
			'hsl'      => array(5, 54, 45),
			'hsv'      => array(5, 70, 69)
		),
		'mediumChampagne' => array(
			'name'     => 'Medium champagne',
			'html'     => '#F3E5AB',
			'graphviz' => '#F3E5AB',
			'rgb'      => array(95, 90, 67),
			'hsl'      => array(48, 75, 81),
			'hsv'      => array(48, 30, 95)
		),
		'mediumElectricBlue' => array(
			'name'     => 'Medium electric blue',
			'html'     => '#035096',
			'graphviz' => '#035096',
			'rgb'      => array(1, 31, 59),
			'hsl'      => array(209, 96, 30),
			'hsv'      => array(209, 98, 59)
		),
		'mediumJungleGreen' => array(
			'name'     => 'Medium jungle green',
			'html'     => '#1C352D',
			'graphviz' => '#1C352D',
			'rgb'      => array(11, 21, 18),
			'hsl'      => array(161, 31, 16),
			'hsv'      => array(161, 47, 21)
		),
		'mediumLavenderMagenta' => array(
			'name'     => 'Medium lavender magenta',
			'html'     => '#DDA0DD',
			'graphviz' => '#DDA0DD',
			'rgb'      => array(87, 63, 87),
			'hsl'      => array(300, 47, 75),
			'hsv'      => array(300, 28, 87)
		),
		'mediumOrchid' => array(
			'name'     => 'Medium orchid',
			'html'     => '#BA55D3',
			'graphviz' => '#BA55D3',
			'rgb'      => array(73, 33, 83),
			'hsl'      => array(288, 59, 58),
			'hsv'      => array(288, 60, 83)
		),
		'mediumPurple' => array(
			'name'     => 'Medium purple',
			'html'     => '#9370DB',
			'graphviz' => '#9370DB',
			'rgb'      => array(58, 44, 86),
			'hsl'      => array(260, 60, 65),
			'hsv'      => array(260, 49, 86)
		),
		'mediumRedViolet' => array(
			'name'     => 'Medium red-violet',
			'html'     => '#BB3385',
			'graphviz' => '#BB3385',
			'rgb'      => array(73, 20, 52),
			'hsl'      => array(324, 57, 47),
			'hsv'      => array(324, 73, 73)
		),
		'mediumRuby' => array(
			'name'     => 'Medium ruby',
			'html'     => '#AA4069',
			'graphviz' => '#AA4069',
			'rgb'      => array(67, 25, 41),
			'hsl'      => array(337, 45, 46),
			'hsv'      => array(337, 62, 67)
		),
		'mediumSeaGreen' => array(
			'name'     => 'Medium sea green',
			'html'     => '#3CB371',
			'graphviz' => '#3CB371',
			'rgb'      => array(24, 70, 44),
			'hsl'      => array(147, 50, 47),
			'hsv'      => array(147, 66, 70)
		),
		'mediumSkyBlue' => array(
			'name'     => 'Medium sky blue',
			'html'     => '#80DAEB',
			'graphviz' => '#80DAEB',
			'rgb'      => array(50, 85, 92),
			'hsl'      => array(190, 73, 71),
			'hsv'      => array(190, 46, 92)
		),
		'mediumSlateBlue' => array(
			'name'     => 'Medium slate blue',
			'html'     => '#7B68EE',
			'graphviz' => '#7B68EE',
			'rgb'      => array(48, 41, 93),
			'hsl'      => array(249, 80, 67),
			'hsv'      => array(249, 56, 93)
		),
		'mediumSpringBud' => array(
			'name'     => 'Medium spring bud',
			'html'     => '#C9DC87',
			'graphviz' => '#C9DC87',
			'rgb'      => array(79, 86, 53),
			'hsl'      => array(73, 55, 70),
			'hsv'      => array(73, 39, 86)
		),
		'mediumSpringGreen' => array(
			'name'     => 'Medium spring green',
			'html'     => '#00FA9A',
			'graphviz' => '#00FA9A',
			'rgb'      => array(0, 98, 60),
			'hsl'      => array(157, 100, 49),
			'hsv'      => array(157, 100, 98)
		),
		'mediumTaupe' => array(
			'name'     => 'Medium taupe',
			'html'     => '#674C47',
			'graphviz' => '#674C47',
			'rgb'      => array(40, 30, 28),
			'hsl'      => array(9, 18, 34),
			'hsv'      => array(9, 31, 40)
		),
		'mediumTurquoise' => array(
			'name'     => 'Medium turquoise',
			'html'     => '#48D1CC',
			'graphviz' => '#48D1CC',
			'rgb'      => array(28, 82, 80),
			'hsl'      => array(178, 60, 55),
			'hsv'      => array(178, 66, 82)
		),
		'mediumVermilion' => array(
			'name'     => 'Medium vermilion',
			'html'     => '#D9603B',
			'graphviz' => '#D9603B',
			'rgb'      => array(85, 38, 23),
			'hsl'      => array(14, 68, 54),
			'hsv'      => array(14, 73, 85)
		),
		'mediumVioletRed' => array(
			'name'     => 'Medium violet-red',
			'html'     => '#C71585',
			'graphviz' => '#C71585',
			'rgb'      => array(78, 8, 52),
			'hsl'      => array(322, 81, 43),
			'hsv'      => array(322, 89, 78)
		),
		'mellowApricot' => array(
			'name'     => 'Mellow apricot',
			'html'     => '#F8B878',
			'graphviz' => '#F8B878',
			'rgb'      => array(97, 72, 47),
			'hsl'      => array(30, 90, 72),
			'hsv'      => array(30, 52, 97)
		),
		'mellowYellow' => array(
			'name'     => 'Mellow yellow',
			'html'     => '#F8DE7E',
			'graphviz' => '#F8DE7E',
			'rgb'      => array(97, 87, 49),
			'hsl'      => array(47, 90, 73),
			'hsv'      => array(47, 49, 97)
		),
		'melon' => array(
			'name'     => 'Melon',
			'html'     => '#FDBCB4',
			'graphviz' => '#FDBCB4',
			'rgb'      => array(99, 74, 71),
			'hsl'      => array(7, 95, 85),
			'hsv'      => array(7, 29, 99)
		),
		'metallicSeaweed' => array(
			'name'     => 'Metallic Seaweed',
			'html'     => '#0A7E8C',
			'graphviz' => '#0A7E8C',
			'rgb'      => array(4, 49, 55),
			'hsl'      => array(186, 87, 29),
			'hsv'      => array(186, 93, 55)
		),
		'metallicSunburst' => array(
			'name'     => 'Metallic Sunburst',
			'html'     => '#9C7C38',
			'graphviz' => '#9C7C38',
			'rgb'      => array(61, 49, 22),
			'hsl'      => array(41, 47, 42),
			'hsv'      => array(41, 64, 61)
		),
		'mexicanPink' => array(
			'name'     => 'Mexican pink',
			'html'     => '#E4007C',
			'graphviz' => '#E4007C',
			'rgb'      => array(89, 0, 49),
			'hsl'      => array(327, 100, 45),
			'hsv'      => array(327, 100, 89)
		),
		'middleBlue' => array(
			'name'     => 'Middle Blue',
			'html'     => '#7ED4E6',
			'graphviz' => '#7ED4E6',
			'rgb'      => array(49, 83, 90),
			'hsl'      => array(126, 68, 70),
			'hsv'      => array(126, 212, 230)
		),
		'middleBlueGreen' => array(
			'name'     => 'Middle Blue Green',
			'html'     => '#8DD9CC',
			'graphviz' => '#8DD9CC',
			'rgb'      => array(55, 85, 80),
			'hsl'      => array(141, 50, 70),
			'hsv'      => array(141, 217, 204)
		),
		'middleBluePurple' => array(
			'name'     => 'Middle Blue Purple',
			'html'     => '#8B72BE',
			'graphviz' => '#8B72BE',
			'rgb'      => array(55, 45, 75),
			'hsl'      => array(260, 37, 60),
			'hsv'      => array(260, 40, 75)
		),
		'middleGreen' => array(
			'name'     => 'Middle Green',
			'html'     => '#4D8C57',
			'graphviz' => '#4D8C57',
			'rgb'      => array(30, 55, 34),
			'hsl'      => array(130, 29, 43),
			'hsv'      => array(130, 45, 50)
		),
		'middleGreenYellow' => array(
			'name'     => 'Middle Green Yellow',
			'html'     => '#ACBF60',
			'graphviz' => '#ACBF60',
			'rgb'      => array(67, 75, 38),
			'hsl'      => array(72, 43, 56),
			'hsv'      => array(72, 50, 75)
		),
		'middlePurple' => array(
			'name'     => 'Middle Purple',
			'html'     => '#D982B5',
			'graphviz' => '#D982B5',
			'rgb'      => array(85, 51, 71),
			'hsl'      => array(325, 53, 68),
			'hsv'      => array(325, 40, 85)
		),
		'middleRed' => array(
			'name'     => 'Middle Red',
			'html'     => '#E58E73',
			'graphviz' => '#E58E73',
			'rgb'      => array(90, 56, 45),
			'hsl'      => array(15, 69, 68),
			'hsv'      => array(15, 50, 90)
		),
		'middleRedPurple' => array(
			'name'     => 'Middle Red Purple',
			'html'     => '#A55353',
			'graphviz' => '#A55353',
			'rgb'      => array(0, 33, 33),
			'hsl'      => array(165, 100, 16),
			'hsv'      => array(165, 83, 83)
		),
		'middleYellow' => array(
			'name'     => 'Middle Yellow',
			'html'     => '#FFEB00',
			'graphviz' => '#FFEB00',
			'rgb'      => array(100, 92, 0),
			'hsl'      => array(55, 100, 50),
			'hsv'      => array(55, 100, 100)
		),
		'middleYellowRed' => array(
			'name'     => 'Middle Yellow Red',
			'html'     => '#ECB176',
			'graphviz' => '#ECB176',
			'rgb'      => array(65, 23, 47),
			'hsl'      => array(236, 48, 44),
			'hsv'      => array(236, 177, 118)
		),
		'midnight' => array(
			'name'     => 'Midnight',
			'html'     => '#702670',
			'graphviz' => '#702670',
			'rgb'      => array(44, 15, 44),
			'hsl'      => array(300, 49, 29),
			'hsv'      => array(300, 66, 44)
		),
		'midnightBlue' => array(
			'name'     => 'Midnight blue',
			'html'     => '#191970',
			'graphviz' => '#191970',
			'rgb'      => array(10, 10, 44),
			'hsl'      => array(240, 64, 27),
			'hsv'      => array(240, 78, 44)
		),
		'midnightGreenEagleGreen' => array(
			'name'     => 'Midnight green (eagle green)',
			'html'     => '#004953',
			'graphviz' => '#004953',
			'rgb'      => array(0, 29, 33),
			'hsl'      => array(187, 100, 16),
			'hsv'      => array(187, 100, 33)
		),
		'mikadoYellow' => array(
			'name'     => 'Mikado yellow',
			'html'     => '#FFC40C',
			'graphviz' => '#FFC40C',
			'rgb'      => array(100, 77, 5),
			'hsl'      => array(45, 100, 52),
			'hsv'      => array(45, 95, 100)
		),
		'mimiPink' => array(
			'name'     => 'Mimi Pink',
			'html'     => '#FFDAE9',
			'graphviz' => '#FFDAE9',
			'rgb'      => array(100, 85, 91),
			'hsl'      => array(336, 100, 93),
			'hsv'      => array(336, 15, 100)
		),
		'mindaro' => array(
			'name'     => 'Mindaro',
			'html'     => '#E3F988',
			'graphviz' => '#E3F988',
			'rgb'      => array(89, 98, 53),
			'hsl'      => array(72, 90, 75),
			'hsv'      => array(72, 45, 98)
		),
		'ming' => array(
			'name'     => 'Ming',
			'html'     => '#36747D',
			'graphviz' => '#36747D',
			'rgb'      => array(21, 45, 49),
			'hsl'      => array(188, 40, 35),
			'hsv'      => array(188, 56, 49)
		),
		'minionYellow' => array(
			'name'     => 'Minion Yellow',
			'html'     => '#F5E050',
			'graphviz' => '#F5E050',
			'rgb'      => array(96, 86, 31),
			'hsl'      => array(52, 89, 64),
			'hsv'      => array(52, 67, 96)
		),
		'mint' => array(
			'name'     => 'Mint',
			'html'     => '#3EB489',
			'graphviz' => '#3EB489',
			'rgb'      => array(24, 71, 54),
			'hsl'      => array(158, 49, 47),
			'hsv'      => array(158, 66, 71)
		),
		'mintCream' => array(
			'name'     => 'Mint cream',
			'html'     => '#F5FFFA',
			'graphviz' => '#F5FFFA',
			'rgb'      => array(96, 100, 98),
			'hsl'      => array(150, 100, 98),
			'hsv'      => array(150, 4, 100)
		),
		'mintGreen' => array(
			'name'     => 'Mint green',
			'html'     => '#98FF98',
			'graphviz' => '#98FF98',
			'rgb'      => array(60, 100, 60),
			'hsl'      => array(120, 100, 80),
			'hsv'      => array(120, 40, 100)
		),
		'mistyMoss' => array(
			'name'     => 'Misty Moss',
			'html'     => '#BBB477',
			'graphviz' => '#BBB477',
			'rgb'      => array(73, 71, 47),
			'hsl'      => array(54, 33, 60),
			'hsv'      => array(54, 36, 73)
		),
		'mistyRose' => array(
			'name'     => 'Misty rose',
			'html'     => '#FFE4E1',
			'graphviz' => '#FFE4E1',
			'rgb'      => array(100, 89, 88),
			'hsl'      => array(6, 100, 94),
			'hsv'      => array(6, 12, 100)
		),
		'moccasin' => array(
			'name'     => 'Moccasin',
			'html'     => '#FAEBD7',
			'graphviz' => '#FAEBD7',
			'rgb'      => array(98, 92, 84),
			'hsl'      => array(34, 78, 91),
			'hsv'      => array(34, 14, 98)
		),
		'modeBeige' => array(
			'name'     => 'Mode beige',
			'html'     => '#967117',
			'graphviz' => '#967117',
			'rgb'      => array(59, 44, 9),
			'hsl'      => array(43, 73, 34),
			'hsv'      => array(43, 85, 59)
		),
		'moonstoneBlue' => array(
			'name'     => 'Moonstone blue',
			'html'     => '#73A9C2',
			'graphviz' => '#73A9C2',
			'rgb'      => array(45, 66, 76),
			'hsl'      => array(199, 39, 61),
			'hsv'      => array(199, 41, 76)
		),
		'mordantRed19' => array(
			'name'     => 'Mordant red 19',
			'html'     => '#AE0C00',
			'graphviz' => '#AE0C00',
			'rgb'      => array(68, 5, 0),
			'hsl'      => array(4, 100, 34),
			'hsv'      => array(4, 100, 68)
		),
		'mossGreen' => array(
			'name'     => 'Moss green',
			'html'     => '#8A9A5B',
			'graphviz' => '#8A9A5B',
			'rgb'      => array(54, 60, 36),
			'hsl'      => array(75, 26, 48),
			'hsv'      => array(75, 41, 60)
		),
		'mountainMeadow' => array(
			'name'     => 'Mountain Meadow',
			'html'     => '#30BA8F',
			'graphviz' => '#30BA8F',
			'rgb'      => array(19, 73, 56),
			'hsl'      => array(161, 59, 46),
			'hsv'      => array(161, 74, 73)
		),
		'mountbattenPink' => array(
			'name'     => 'Mountbatten pink',
			'html'     => '#997A8D',
			'graphviz' => '#997A8D',
			'rgb'      => array(60, 48, 55),
			'hsl'      => array(323, 13, 54),
			'hsv'      => array(323, 20, 60)
		),
		'mughalGreen' => array(
			'name'     => 'Mughal green',
			'html'     => '#306030',
			'graphviz' => '#306030',
			'rgb'      => array(19, 38, 19),
			'hsl'      => array(120, 33, 28),
			'hsv'      => array(120, 50, 38)
		),
		'mulberry' => array(
			'name'     => 'Mulberry',
			'html'     => '#C54B8C',
			'graphviz' => '#C54B8C',
			'rgb'      => array(77, 29, 55),
			'hsl'      => array(328, 51, 53),
			'hsv'      => array(328, 62, 77)
		),
		'mummysTomb' => array(
			'name'     => 'Mummy\'s Tomb',
			'html'     => '#828E84',
			'graphviz' => '#828E84',
			'rgb'      => array(51, 56, 52),
			'hsl'      => array(130, 5, 53),
			'hsv'      => array(130, 9, 56)
		),
		'mustard' => array(
			'name'     => 'Mustard',
			'html'     => '#FFDB58',
			'graphviz' => '#FFDB58',
			'rgb'      => array(100, 86, 35),
			'hsl'      => array(47, 100, 67),
			'hsv'      => array(47, 65, 100)
		),
		'myrtleGreen' => array(
			'name'     => 'Myrtle green',
			'html'     => '#317873',
			'graphviz' => '#317873',
			'rgb'      => array(19, 47, 45),
			'hsl'      => array(176, 42, 33),
			'hsv'      => array(176, 59, 47)
		),
		'mystic' => array(
			'name'     => 'Mystic',
			'html'     => '#D65282',
			'graphviz' => '#D65282',
			'rgb'      => array(84, 32, 51),
			'hsl'      => array(338, 62, 58),
			'hsv'      => array(338, 62, 84)
		),
		'mysticMaroon' => array(
			'name'     => 'Mystic Maroon',
			'html'     => '#AD4379',
			'graphviz' => '#AD4379',
			'rgb'      => array(68, 26, 47),
			'hsl'      => array(329, 44, 47),
			'hsv'      => array(329, 62, 68)
		),
		'nadeshikoPink' => array(
			'name'     => 'Nadeshiko pink',
			'html'     => '#F6ADC6',
			'graphviz' => '#F6ADC6',
			'rgb'      => array(96, 68, 78),
			'hsl'      => array(339, 80, 82),
			'hsv'      => array(339, 30, 96)
		),
		'napierGreen' => array(
			'name'     => 'Napier green',
			'html'     => '#2A8000',
			'graphviz' => '#2A8000',
			'rgb'      => array(16, 50, 0),
			'hsl'      => array(100, 100, 25),
			'hsv'      => array(100, 100, 50)
		),
		'naplesYellow' => array(
			'name'     => 'Naples yellow',
			'html'     => '#FADA5E',
			'graphviz' => '#FADA5E',
			'rgb'      => array(98, 85, 37),
			'hsl'      => array(48, 94, 67),
			'hsv'      => array(48, 62, 98)
		),
		'navajoWhite' => array(
			'name'     => 'Navajo white',
			'html'     => '#FFDEAD',
			'graphviz' => '#FFDEAD',
			'rgb'      => array(100, 87, 68),
			'hsl'      => array(36, 100, 84),
			'hsv'      => array(36, 32, 100)
		),
		'navy' => array(
			'name'     => 'Navy',
			'html'     => '#000080',
			'graphviz' => '#000080',
			'rgb'      => array(0, 0, 50),
			'hsl'      => array(240, 100, 25),
			'hsv'      => array(240, 100, 50)
		),
		'navyPurple' => array(
			'name'     => 'Navy purple',
			'html'     => '#9457EB',
			'graphviz' => '#9457EB',
			'rgb'      => array(58, 34, 92),
			'hsl'      => array(265, 79, 63),
			'hsv'      => array(265, 63, 92)
		),
		'neonCarrot' => array(
			'name'     => 'Neon Carrot',
			'html'     => '#FFA343',
			'graphviz' => '#FFA343',
			'rgb'      => array(100, 64, 26),
			'hsl'      => array(31, 100, 63),
			'hsv'      => array(31, 74, 100)
		),
		'neonFuchsia' => array(
			'name'     => 'Neon fuchsia',
			'html'     => '#FE4164',
			'graphviz' => '#FE4164',
			'rgb'      => array(100, 25, 39),
			'hsl'      => array(349, 99, 63),
			'hsv'      => array(349, 74, 100)
		),
		'neonGreen' => array(
			'name'     => 'Neon green',
			'html'     => '#39FF14',
			'graphviz' => '#39FF14',
			'rgb'      => array(22, 100, 8),
			'hsl'      => array(111, 100, 54),
			'hsv'      => array(111, 92, 100)
		),
		'newCar' => array(
			'name'     => 'New Car',
			'html'     => '#214FC6',
			'graphviz' => '#214FC6',
			'rgb'      => array(13, 31, 78),
			'hsl'      => array(223, 71, 45),
			'hsv'      => array(223, 83, 78)
		),
		'newYorkPink' => array(
			'name'     => 'New York pink',
			'html'     => '#D7837F',
			'graphviz' => '#D7837F',
			'rgb'      => array(84, 51, 50),
			'hsl'      => array(3, 52, 67),
			'hsv'      => array(3, 41, 84)
		),
		'nickel' => array(
			'name'     => 'Nickel',
			'html'     => '#727472',
			'graphviz' => '#727472',
			'rgb'      => array(45, 45, 45),
			'hsl'      => array(120, 1, 45),
			'hsv'      => array(120, 2, 46)
		),
		'nonPhotoBlue' => array(
			'name'     => 'Non-photo blue',
			'html'     => '#A4DDED',
			'graphviz' => '#A4DDED',
			'rgb'      => array(64, 87, 93),
			'hsl'      => array(193, 67, 79),
			'hsv'      => array(193, 31, 93)
		),
		'northTexasGreen' => array(
			'name'     => 'North Texas Green',
			'html'     => '#059033',
			'graphviz' => '#059033',
			'rgb'      => array(2, 56, 20),
			'hsl'      => array(140, 93, 29),
			'hsv'      => array(140, 97, 56)
		),
		'nyanza' => array(
			'name'     => 'Nyanza',
			'html'     => '#E9FFDB',
			'graphviz' => '#E9FFDB',
			'rgb'      => array(91, 100, 86),
			'hsl'      => array(97, 100, 93),
			'hsv'      => array(97, 14, 100)
		),
		'ouCrimsonRed' => array(
			'name'     => 'OU Crimson Red',
			'html'     => '#990000',
			'graphviz' => '#990000',
			'rgb'      => array(60, 0, 0),
			'hsl'      => array(0, 100, 30),
			'hsv'      => array(0, 100, 60)
		),
		'oceanBlue' => array(
			'name'     => 'Ocean Blue',
			'html'     => '#4F42B5',
			'graphviz' => '#4F42B5',
			'rgb'      => array(31, 26, 71),
			'hsl'      => array(247, 47, 48),
			'hsv'      => array(247, 64, 71)
		),
		'oceanBoatBlue' => array(
			'name'     => 'Ocean Boat Blue',
			'html'     => '#0077BE',
			'graphviz' => '#0077BE',
			'rgb'      => array(0, 47, 75),
			'hsl'      => array(202, 100, 37),
			'hsv'      => array(202, 100, 75)
		),
		'oceanGreen' => array(
			'name'     => 'Ocean Green',
			'html'     => '#48BF91',
			'graphviz' => '#48BF91',
			'rgb'      => array(28, 75, 57),
			'hsl'      => array(157, 48, 52),
			'hsv'      => array(157, 62, 75)
		),
		'ochre' => array(
			'name'     => 'Ochre',
			'html'     => '#CC7722',
			'graphviz' => '#CC7722',
			'rgb'      => array(80, 47, 13),
			'hsl'      => array(30, 71, 47),
			'hsv'      => array(30, 83, 80)
		),
		'officeGreen' => array(
			'name'     => 'Office green',
			'html'     => '#008000',
			'graphviz' => '#008000',
			'rgb'      => array(0, 50, 0),
			'hsl'      => array(120, 100, 25),
			'hsv'      => array(120, 100, 50)
		),
		'ogreOdor' => array(
			'name'     => 'Ogre Odor',
			'html'     => '#FD5240',
			'graphviz' => '#FD5240',
			'rgb'      => array(99, 32, 25),
			'hsl'      => array(6, 98, 62),
			'hsv'      => array(6, 75, 99)
		),
		'oldBurgundy' => array(
			'name'     => 'Old burgundy',
			'html'     => '#43302E',
			'graphviz' => '#43302E',
			'rgb'      => array(26, 19, 18),
			'hsl'      => array(6, 19, 22),
			'hsv'      => array(6, 31, 26)
		),
		'oldGold' => array(
			'name'     => 'Old gold',
			'html'     => '#CFB53B',
			'graphviz' => '#CFB53B',
			'rgb'      => array(81, 71, 23),
			'hsl'      => array(49, 61, 52),
			'hsv'      => array(49, 71, 81)
		),
		'oldHeliotrope' => array(
			'name'     => 'Old heliotrope',
			'html'     => '#563C5C',
			'graphviz' => '#563C5C',
			'rgb'      => array(34, 24, 36),
			'hsl'      => array(289, 21, 30),
			'hsv'      => array(289, 35, 36)
		),
		'oldLace' => array(
			'name'     => 'Old lace',
			'html'     => '#FDF5E6',
			'graphviz' => '#FDF5E6',
			'rgb'      => array(99, 96, 90),
			'hsl'      => array(39, 85, 95),
			'hsv'      => array(39, 9, 99)
		),
		'oldLavender' => array(
			'name'     => 'Old lavender',
			'html'     => '#796878',
			'graphviz' => '#796878',
			'rgb'      => array(47, 41, 47),
			'hsl'      => array(304, 8, 44),
			'hsv'      => array(304, 14, 47)
		),
		'oldMauve' => array(
			'name'     => 'Old mauve',
			'html'     => '#673147',
			'graphviz' => '#673147',
			'rgb'      => array(40, 19, 28),
			'hsl'      => array(336, 36, 30),
			'hsv'      => array(336, 52, 40)
		),
		'oldMossGreen' => array(
			'name'     => 'Old moss green',
			'html'     => '#867E36',
			'graphviz' => '#867E36',
			'rgb'      => array(53, 49, 21),
			'hsl'      => array(54, 43, 37),
			'hsv'      => array(54, 60, 53)
		),
		'oldRose' => array(
			'name'     => 'Old rose',
			'html'     => '#C08081',
			'graphviz' => '#C08081',
			'rgb'      => array(75, 50, 51),
			'hsl'      => array(359, 34, 63),
			'hsv'      => array(359, 33, 75)
		),
		'oldSilver' => array(
			'name'     => 'Old silver',
			'html'     => '#848482',
			'graphviz' => '#848482',
			'rgb'      => array(52, 52, 51),
			'hsl'      => array(60, 1, 51),
			'hsv'      => array(60, 2, 52)
		),
		'olive' => array(
			'name'     => 'Olive',
			'html'     => '#808000',
			'graphviz' => '#808000',
			'rgb'      => array(50, 50, 0),
			'hsl'      => array(60, 100, 25),
			'hsv'      => array(60, 100, 50)
		),
		'oliveDrab7' => array(
			'name'     => 'Olive Drab #7',
			'html'     => '#3C341F',
			'graphviz' => '#3C341F',
			'rgb'      => array(24, 20, 12),
			'hsl'      => array(43, 32, 18),
			'hsv'      => array(43, 48, 24)
		),
		'oliveDrab3' => array(
			'name'     => 'Olive Drab (#3)',
			'html'     => '#6B8E23',
			'graphviz' => '#6B8E23',
			'rgb'      => array(42, 56, 14),
			'hsl'      => array(80, 60, 35),
			'hsv'      => array(80, 75, 56)
		),
		'olivine' => array(
			'name'     => 'Olivine',
			'html'     => '#9AB973',
			'graphviz' => '#9AB973',
			'rgb'      => array(60, 73, 45),
			'hsl'      => array(87, 33, 59),
			'hsv'      => array(87, 38, 73)
		),
		'onyx' => array(
			'name'     => 'Onyx',
			'html'     => '#353839',
			'graphviz' => '#353839',
			'rgb'      => array(21, 22, 22),
			'hsl'      => array(195, 4, 22),
			'hsv'      => array(195, 7, 22)
		),
		'operaMauve' => array(
			'name'     => 'Opera mauve',
			'html'     => '#B784A7',
			'graphviz' => '#B784A7',
			'rgb'      => array(72, 52, 65),
			'hsl'      => array(319, 26, 62),
			'hsv'      => array(319, 28, 72)
		),
		'orangeCrayola' => array(
			'name'     => 'Orange (Crayola)',
			'html'     => '#FF7538',
			'graphviz' => '#FF7538',
			'rgb'      => array(100, 46, 22),
			'hsl'      => array(18, 100, 61),
			'hsv'      => array(18, 78, 100)
		),
		'orangePantone' => array(
			'name'     => 'Orange (Pantone)',
			'html'     => '#FF5800',
			'graphviz' => '#FF5800',
			'rgb'      => array(100, 35, 0),
			'hsl'      => array(21, 100, 50),
			'hsv'      => array(21, 100, 100)
		),
		'orangeRyb' => array(
			'name'     => 'Orange (RYB)',
			'html'     => '#FB9902',
			'graphviz' => '#FB9902',
			'rgb'      => array(98, 60, 1),
			'hsl'      => array(36, 98, 50),
			'hsv'      => array(36, 99, 98)
		),
		'orangeColorWheel' => array(
			'name'     => 'Orange (color wheel)',
			'html'     => '#FF7F00',
			'graphviz' => '#FF7F00',
			'rgb'      => array(100, 50, 0),
			'hsl'      => array(30, 100, 50),
			'hsv'      => array(30, 100, 100)
		),
		'orangeWeb' => array(
			'name'     => 'Orange (web)',
			'html'     => '#FFA500',
			'graphviz' => '#FFA500',
			'rgb'      => array(100, 65, 0),
			'hsl'      => array(39, 100, 50),
			'hsv'      => array(39, 100, 100)
		),
		'orangeSoda' => array(
			'name'     => 'Orange Soda',
			'html'     => '#FA5B3D',
			'graphviz' => '#FA5B3D',
			'rgb'      => array(98, 36, 24),
			'hsl'      => array(10, 95, 61),
			'hsv'      => array(10, 76, 98)
		),
		'orangePeel' => array(
			'name'     => 'Orange peel',
			'html'     => '#FF9F00',
			'graphviz' => '#FF9F00',
			'rgb'      => array(100, 62, 0),
			'hsl'      => array(37, 100, 50),
			'hsv'      => array(37, 100, 100)
		),
		'orangeRed' => array(
			'name'     => 'Orange-red',
			'html'     => '#FF4500',
			'graphviz' => '#FF4500',
			'rgb'      => array(100, 27, 0),
			'hsl'      => array(16, 100, 50),
			'hsv'      => array(16, 100, 100)
		),
		'orangeYellow' => array(
			'name'     => 'Orange-yellow',
			'html'     => '#F8D568',
			'graphviz' => '#F8D568',
			'rgb'      => array(97, 84, 41),
			'hsl'      => array(45, 91, 69),
			'hsv'      => array(45, 58, 97)
		),
		'orchid' => array(
			'name'     => 'Orchid',
			'html'     => '#DA70D6',
			'graphviz' => '#DA70D6',
			'rgb'      => array(85, 44, 84),
			'hsl'      => array(302, 59, 65),
			'hsv'      => array(302, 49, 85)
		),
		'orchidPink' => array(
			'name'     => 'Orchid pink',
			'html'     => '#F2BDCD',
			'graphviz' => '#F2BDCD',
			'rgb'      => array(95, 74, 80),
			'hsl'      => array(342, 67, 85),
			'hsv'      => array(342, 22, 95)
		),
		'oriolesOrange' => array(
			'name'     => 'Orioles orange',
			'html'     => '#FB4F14',
			'graphviz' => '#FB4F14',
			'rgb'      => array(98, 31, 8),
			'hsl'      => array(15, 97, 53),
			'hsv'      => array(15, 92, 98)
		),
		'otterBrown' => array(
			'name'     => 'Otter brown',
			'html'     => '#654321',
			'graphviz' => '#654321',
			'rgb'      => array(40, 26, 13),
			'hsl'      => array(30, 51, 26),
			'hsv'      => array(30, 67, 40)
		),
		'outerSpace' => array(
			'name'     => 'Outer Space',
			'html'     => '#414A4C',
			'graphviz' => '#414A4C',
			'rgb'      => array(25, 29, 30),
			'hsl'      => array(191, 8, 28),
			'hsv'      => array(191, 14, 30)
		),
		'outrageousOrange' => array(
			'name'     => 'Outrageous Orange',
			'html'     => '#FF6E4A',
			'graphviz' => '#FF6E4A',
			'rgb'      => array(100, 43, 29),
			'hsl'      => array(12, 100, 65),
			'hsv'      => array(12, 71, 100)
		),
		'oxfordBlue' => array(
			'name'     => 'Oxford Blue',
			'html'     => '#002147',
			'graphviz' => '#002147',
			'rgb'      => array(0, 13, 28),
			'hsl'      => array(212, 100, 14),
			'hsv'      => array(212, 100, 28)
		),
		'pacificBlue' => array(
			'name'     => 'Pacific Blue',
			'html'     => '#1CA9C9',
			'graphviz' => '#1CA9C9',
			'rgb'      => array(11, 66, 79),
			'hsl'      => array(191, 76, 45),
			'hsv'      => array(191, 86, 79)
		),
		'pakistanGreen' => array(
			'name'     => 'Pakistan green',
			'html'     => '#006600',
			'graphviz' => '#006600',
			'rgb'      => array(0, 40, 0),
			'hsl'      => array(120, 100, 20),
			'hsv'      => array(120, 100, 40)
		),
		'palatinateBlue' => array(
			'name'     => 'Palatinate blue',
			'html'     => '#273BE2',
			'graphviz' => '#273BE2',
			'rgb'      => array(15, 23, 89),
			'hsl'      => array(234, 76, 52),
			'hsv'      => array(234, 83, 89)
		),
		'palatinatePurple' => array(
			'name'     => 'Palatinate purple',
			'html'     => '#682860',
			'graphviz' => '#682860',
			'rgb'      => array(41, 16, 38),
			'hsl'      => array(308, 44, 28),
			'hsv'      => array(308, 62, 41)
		),
		'paleAqua' => array(
			'name'     => 'Pale aqua',
			'html'     => '#BCD4E6',
			'graphviz' => '#BCD4E6',
			'rgb'      => array(74, 83, 90),
			'hsl'      => array(206, 46, 82),
			'hsv'      => array(206, 18, 90)
		),
		'paleBlue' => array(
			'name'     => 'Pale blue',
			'html'     => '#AFEEEE',
			'graphviz' => '#AFEEEE',
			'rgb'      => array(69, 93, 93),
			'hsl'      => array(180, 65, 81),
			'hsv'      => array(180, 26, 93)
		),
		'paleBrown' => array(
			'name'     => 'Pale brown',
			'html'     => '#987654',
			'graphviz' => '#987654',
			'rgb'      => array(60, 46, 33),
			'hsl'      => array(30, 29, 46),
			'hsv'      => array(30, 45, 60)
		),
		'paleCarmine' => array(
			'name'     => 'Pale carmine',
			'html'     => '#AF4035',
			'graphviz' => '#AF4035',
			'rgb'      => array(69, 25, 21),
			'hsl'      => array(5, 54, 45),
			'hsv'      => array(5, 70, 69)
		),
		'paleCerulean' => array(
			'name'     => 'Pale cerulean',
			'html'     => '#9BC4E2',
			'graphviz' => '#9BC4E2',
			'rgb'      => array(61, 77, 89),
			'hsl'      => array(205, 55, 75),
			'hsv'      => array(205, 31, 89)
		),
		'paleChestnut' => array(
			'name'     => 'Pale chestnut',
			'html'     => '#DDADAF',
			'graphviz' => '#DDADAF',
			'rgb'      => array(87, 68, 69),
			'hsl'      => array(358, 41, 77),
			'hsv'      => array(358, 22, 87)
		),
		'paleCopper' => array(
			'name'     => 'Pale copper',
			'html'     => '#DA8A67',
			'graphviz' => '#DA8A67',
			'rgb'      => array(85, 54, 40),
			'hsl'      => array(18, 61, 63),
			'hsv'      => array(18, 53, 85)
		),
		'paleCornflowerBlue' => array(
			'name'     => 'Pale cornflower blue',
			'html'     => '#ABCDEF',
			'graphviz' => '#ABCDEF',
			'rgb'      => array(67, 80, 94),
			'hsl'      => array(210, 68, 80),
			'hsv'      => array(210, 28, 94)
		),
		'paleCyan' => array(
			'name'     => 'Pale cyan',
			'html'     => '#87D3F8',
			'graphviz' => '#87D3F8',
			'rgb'      => array(53, 83, 97),
			'hsl'      => array(200, 89, 75),
			'hsv'      => array(200, 46, 97)
		),
		'paleGold' => array(
			'name'     => 'Pale gold',
			'html'     => '#E6BE8A',
			'graphviz' => '#E6BE8A',
			'rgb'      => array(90, 75, 54),
			'hsl'      => array(34, 65, 72),
			'hsv'      => array(34, 40, 90)
		),
		'paleGoldenrod' => array(
			'name'     => 'Pale goldenrod',
			'html'     => '#EEE8AA',
			'graphviz' => '#EEE8AA',
			'rgb'      => array(93, 91, 67),
			'hsl'      => array(55, 67, 80),
			'hsv'      => array(55, 29, 93)
		),
		'paleGreen' => array(
			'name'     => 'Pale green',
			'html'     => '#98FB98',
			'graphviz' => '#98FB98',
			'rgb'      => array(60, 98, 60),
			'hsl'      => array(120, 93, 79),
			'hsv'      => array(120, 39, 98)
		),
		'paleLavender' => array(
			'name'     => 'Pale lavender',
			'html'     => '#DCD0FF',
			'graphviz' => '#DCD0FF',
			'rgb'      => array(86, 82, 100),
			'hsl'      => array(255, 100, 91),
			'hsv'      => array(255, 18, 100)
		),
		'paleMagenta' => array(
			'name'     => 'Pale magenta',
			'html'     => '#F984E5',
			'graphviz' => '#F984E5',
			'rgb'      => array(98, 52, 90),
			'hsl'      => array(310, 91, 75),
			'hsv'      => array(310, 47, 98)
		),
		'paleMagentaPink' => array(
			'name'     => 'Pale magenta-pink',
			'html'     => '#FF99CC',
			'graphviz' => '#FF99CC',
			'rgb'      => array(100, 60, 80),
			'hsl'      => array(330, 100, 80),
			'hsv'      => array(330, 40, 100)
		),
		'palePink' => array(
			'name'     => 'Pale pink',
			'html'     => '#FADADD',
			'graphviz' => '#FADADD',
			'rgb'      => array(98, 85, 87),
			'hsl'      => array(354, 76, 92),
			'hsv'      => array(354, 13, 98)
		),
		'palePlum' => array(
			'name'     => 'Pale plum',
			'html'     => '#DDA0DD',
			'graphviz' => '#DDA0DD',
			'rgb'      => array(87, 63, 87),
			'hsl'      => array(300, 47, 75),
			'hsv'      => array(300, 28, 87)
		),
		'paleRedViolet' => array(
			'name'     => 'Pale red-violet',
			'html'     => '#DB7093',
			'graphviz' => '#DB7093',
			'rgb'      => array(86, 44, 58),
			'hsl'      => array(340, 60, 65),
			'hsv'      => array(340, 49, 86)
		),
		'paleRobinEggBlue' => array(
			'name'     => 'Pale robin egg blue',
			'html'     => '#96DED1',
			'graphviz' => '#96DED1',
			'rgb'      => array(59, 87, 82),
			'hsl'      => array(169, 52, 73),
			'hsv'      => array(169, 32, 87)
		),
		'paleSilver' => array(
			'name'     => 'Pale silver',
			'html'     => '#C9C0BB',
			'graphviz' => '#C9C0BB',
			'rgb'      => array(79, 75, 73),
			'hsl'      => array(21, 11, 76),
			'hsv'      => array(21, 7, 79)
		),
		'paleSpringBud' => array(
			'name'     => 'Pale spring bud',
			'html'     => '#ECEBBD',
			'graphviz' => '#ECEBBD',
			'rgb'      => array(93, 92, 74),
			'hsl'      => array(59, 55, 83),
			'hsv'      => array(59, 20, 93)
		),
		'paleTaupe' => array(
			'name'     => 'Pale taupe',
			'html'     => '#BC987E',
			'graphviz' => '#BC987E',
			'rgb'      => array(74, 60, 49),
			'hsl'      => array(25, 32, 62),
			'hsv'      => array(25, 33, 74)
		),
		'paleTurquoise' => array(
			'name'     => 'Pale turquoise',
			'html'     => '#AFEEEE',
			'graphviz' => '#AFEEEE',
			'rgb'      => array(69, 93, 93),
			'hsl'      => array(180, 65, 81),
			'hsv'      => array(180, 26, 93)
		),
		'paleViolet' => array(
			'name'     => 'Pale violet',
			'html'     => '#CC99FF',
			'graphviz' => '#CC99FF',
			'rgb'      => array(80, 60, 100),
			'hsl'      => array(270, 100, 80),
			'hsv'      => array(270, 40, 100)
		),
		'paleVioletRed' => array(
			'name'     => 'Pale violet-red',
			'html'     => '#DB7093',
			'graphviz' => '#DB7093',
			'rgb'      => array(86, 44, 58),
			'hsl'      => array(340, 60, 65),
			'hsv'      => array(340, 49, 86)
		),
		'palmLeaf' => array(
			'name'     => 'Palm Leaf',
			'html'     => '#6F9940',
			'graphviz' => '#6F9940',
			'rgb'      => array(51, 56, 52),
			'hsl'      => array(88, 5, 53),
			'hsv'      => array(88, 58, 60)
		),
		'pansyPurple' => array(
			'name'     => 'Pansy purple',
			'html'     => '#78184A',
			'graphviz' => '#78184A',
			'rgb'      => array(47, 9, 29),
			'hsl'      => array(329, 67, 28),
			'hsv'      => array(329, 80, 47)
		),
		'paoloVeroneseGreen' => array(
			'name'     => 'Paolo Veronese green',
			'html'     => '#009B7D',
			'graphviz' => '#009B7D',
			'rgb'      => array(0, 61, 49),
			'hsl'      => array(168, 100, 30),
			'hsv'      => array(168, 100, 61)
		),
		'papayaWhip' => array(
			'name'     => 'Papaya whip',
			'html'     => '#FFEFD5',
			'graphviz' => '#FFEFD5',
			'rgb'      => array(100, 94, 84),
			'hsl'      => array(37, 100, 92),
			'hsv'      => array(37, 16, 100)
		),
		'paradisePink' => array(
			'name'     => 'Paradise pink',
			'html'     => '#E63E62',
			'graphviz' => '#E63E62',
			'rgb'      => array(90, 24, 38),
			'hsl'      => array(347, 77, 57),
			'hsv'      => array(347, 73, 90)
		),
		'parisGreen' => array(
			'name'     => 'Paris Green',
			'html'     => '#50C878',
			'graphviz' => '#50C878',
			'rgb'      => array(31, 78, 47),
			'hsl'      => array(140, 52, 55),
			'hsv'      => array(140, 60, 78)
		),
		'parrotPink' => array(
			'name'     => 'Parrot Pink',
			'html'     => '#D998A0',
			'graphviz' => '#D998A0',
			'rgb'      => array(85, 60, 63),
			'hsl'      => array(353, 46, 72),
			'hsv'      => array(353, 30, 85)
		),
		'pastelBlue' => array(
			'name'     => 'Pastel blue',
			'html'     => '#AEC6CF',
			'graphviz' => '#AEC6CF',
			'rgb'      => array(68, 78, 81),
			'hsl'      => array(196, 26, 75),
			'hsv'      => array(196, 16, 81)
		),
		'pastelBrown' => array(
			'name'     => 'Pastel brown',
			'html'     => '#836953',
			'graphviz' => '#836953',
			'rgb'      => array(51, 41, 33),
			'hsl'      => array(28, 22, 42),
			'hsv'      => array(28, 37, 51)
		),
		'pastelGray' => array(
			'name'     => 'Pastel gray',
			'html'     => '#CFCFC4',
			'graphviz' => '#CFCFC4',
			'rgb'      => array(81, 81, 77),
			'hsl'      => array(60, 10, 79),
			'hsv'      => array(60, 5, 81)
		),
		'pastelGreen' => array(
			'name'     => 'Pastel green',
			'html'     => '#77DD77',
			'graphviz' => '#77DD77',
			'rgb'      => array(47, 87, 47),
			'hsl'      => array(120, 60, 67),
			'hsv'      => array(120, 46, 87)
		),
		'pastelMagenta' => array(
			'name'     => 'Pastel magenta',
			'html'     => '#F49AC2',
			'graphviz' => '#F49AC2',
			'rgb'      => array(96, 60, 76),
			'hsl'      => array(333, 80, 78),
			'hsv'      => array(333, 37, 96)
		),
		'pastelOrange' => array(
			'name'     => 'Pastel orange',
			'html'     => '#FFB347',
			'graphviz' => '#FFB347',
			'rgb'      => array(100, 70, 28),
			'hsl'      => array(35, 100, 64),
			'hsv'      => array(35, 72, 100)
		),
		'pastelPink' => array(
			'name'     => 'Pastel pink',
			'html'     => '#DEA5A4',
			'graphviz' => '#DEA5A4',
			'rgb'      => array(87, 65, 64),
			'hsl'      => array(1, 47, 76),
			'hsv'      => array(1, 26, 87)
		),
		'pastelPurple' => array(
			'name'     => 'Pastel purple',
			'html'     => '#B39EB5',
			'graphviz' => '#B39EB5',
			'rgb'      => array(70, 62, 71),
			'hsl'      => array(295, 13, 66),
			'hsv'      => array(295, 13, 71)
		),
		'pastelRed' => array(
			'name'     => 'Pastel red',
			'html'     => '#FF6961',
			'graphviz' => '#FF6961',
			'rgb'      => array(100, 41, 38),
			'hsl'      => array(3, 100, 69),
			'hsv'      => array(3, 62, 100)
		),
		'pastelViolet' => array(
			'name'     => 'Pastel violet',
			'html'     => '#CB99C9',
			'graphviz' => '#CB99C9',
			'rgb'      => array(80, 60, 79),
			'hsl'      => array(302, 32, 70),
			'hsv'      => array(302, 25, 80)
		),
		'pastelYellow' => array(
			'name'     => 'Pastel yellow',
			'html'     => '#FDFD96',
			'graphviz' => '#FDFD96',
			'rgb'      => array(99, 99, 59),
			'hsl'      => array(60, 96, 79),
			'hsv'      => array(60, 41, 99)
		),
		'patriarch' => array(
			'name'     => 'Patriarch',
			'html'     => '#800080',
			'graphviz' => '#800080',
			'rgb'      => array(50, 0, 50),
			'hsl'      => array(300, 100, 25),
			'hsv'      => array(300, 100, 50)
		),
		'paynesGrey' => array(
			'name'     => 'Payne\'s grey',
			'html'     => '#536878',
			'graphviz' => '#536878',
			'rgb'      => array(33, 41, 47),
			'hsl'      => array(206, 18, 40),
			'hsv'      => array(206, 31, 47)
		),
		'peach' => array(
			'name'     => 'Peach',
			'html'     => '#FFCBA4',
			'graphviz' => '#FFCBA4',
			'rgb'      => array(100, 80, 64),
			'hsl'      => array(26, 100, 82),
			'hsv'      => array(26, 36, 100)
		),
		'peachPuff' => array(
			'name'     => 'Peach puff',
			'html'     => '#FFDAB9',
			'graphviz' => '#FFDAB9',
			'rgb'      => array(100, 85, 73),
			'hsl'      => array(28, 100, 86),
			'hsv'      => array(28, 27, 100)
		),
		'peachOrange' => array(
			'name'     => 'Peach-orange',
			'html'     => '#FFCC99',
			'graphviz' => '#FFCC99',
			'rgb'      => array(100, 80, 60),
			'hsl'      => array(30, 100, 80),
			'hsv'      => array(30, 40, 100)
		),
		'peachYellow' => array(
			'name'     => 'Peach-yellow',
			'html'     => '#FADFAD',
			'graphviz' => '#FADFAD',
			'rgb'      => array(98, 87, 68),
			'hsl'      => array(39, 89, 83),
			'hsv'      => array(39, 31, 98)
		),
		'pear' => array(
			'name'     => 'Pear',
			'html'     => '#D1E231',
			'graphviz' => '#D1E231',
			'rgb'      => array(82, 89, 19),
			'hsl'      => array(66, 75, 54),
			'hsv'      => array(66, 78, 89)
		),
		'pearl' => array(
			'name'     => 'Pearl',
			'html'     => '#EAE0C8',
			'graphviz' => '#EAE0C8',
			'rgb'      => array(92, 88, 78),
			'hsl'      => array(42, 45, 85),
			'hsv'      => array(42, 15, 92)
		),
		'pearlAqua' => array(
			'name'     => 'Pearl Aqua',
			'html'     => '#88D8C0',
			'graphviz' => '#88D8C0',
			'rgb'      => array(53, 85, 75),
			'hsl'      => array(162, 51, 69),
			'hsv'      => array(162, 37, 85)
		),
		'pearlyPurple' => array(
			'name'     => 'Pearly purple',
			'html'     => '#B768A2',
			'graphviz' => '#B768A2',
			'rgb'      => array(72, 41, 64),
			'hsl'      => array(316, 35, 56),
			'hsv'      => array(316, 43, 72)
		),
		'peridot' => array(
			'name'     => 'Peridot',
			'html'     => '#E6E200',
			'graphviz' => '#E6E200',
			'rgb'      => array(90, 89, 0),
			'hsl'      => array(59, 100, 45),
			'hsv'      => array(59, 100, 90)
		),
		'periwinkle' => array(
			'name'     => 'Periwinkle',
			'html'     => '#CCCCFF',
			'graphviz' => '#CCCCFF',
			'rgb'      => array(80, 80, 100),
			'hsl'      => array(240, 100, 90),
			'hsv'      => array(240, 20, 100)
		),
		'permanentGeraniumLake' => array(
			'name'     => 'Permanent Geranium Lake',
			'html'     => '#E12C2C',
			'graphviz' => '#E12C2C',
			'rgb'      => array(88, 17, 17),
			'hsl'      => array(0, 75, 53),
			'hsv'      => array(0, 80, 88)
		),
		'persianBlue' => array(
			'name'     => 'Persian blue',
			'html'     => '#1C39BB',
			'graphviz' => '#1C39BB',
			'rgb'      => array(11, 22, 73),
			'hsl'      => array(229, 74, 42),
			'hsv'      => array(229, 85, 73)
		),
		'persianGreen' => array(
			'name'     => 'Persian green',
			'html'     => '#00A693',
			'graphviz' => '#00A693',
			'rgb'      => array(0, 65, 58),
			'hsl'      => array(173, 100, 33),
			'hsv'      => array(173, 100, 65)
		),
		'persianIndigo' => array(
			'name'     => 'Persian indigo',
			'html'     => '#32127A',
			'graphviz' => '#32127A',
			'rgb'      => array(20, 7, 48),
			'hsl'      => array(258, 74, 27),
			'hsv'      => array(258, 85, 48)
		),
		'persianOrange' => array(
			'name'     => 'Persian orange',
			'html'     => '#D99058',
			'graphviz' => '#D99058',
			'rgb'      => array(85, 56, 35),
			'hsl'      => array(26, 63, 60),
			'hsv'      => array(26, 59, 85)
		),
		'persianPink' => array(
			'name'     => 'Persian pink',
			'html'     => '#F77FBE',
			'graphviz' => '#F77FBE',
			'rgb'      => array(97, 50, 75),
			'hsl'      => array(329, 88, 73),
			'hsv'      => array(329, 49, 97)
		),
		'persianPlum' => array(
			'name'     => 'Persian plum',
			'html'     => '#701C1C',
			'graphviz' => '#701C1C',
			'rgb'      => array(44, 11, 11),
			'hsl'      => array(0, 60, 27),
			'hsv'      => array(0, 75, 44)
		),
		'persianRed' => array(
			'name'     => 'Persian red',
			'html'     => '#CC3333',
			'graphviz' => '#CC3333',
			'rgb'      => array(80, 20, 20),
			'hsl'      => array(0, 60, 50),
			'hsv'      => array(0, 75, 80)
		),
		'persianRose' => array(
			'name'     => 'Persian rose',
			'html'     => '#FE28A2',
			'graphviz' => '#FE28A2',
			'rgb'      => array(100, 16, 64),
			'hsl'      => array(326, 99, 58),
			'hsv'      => array(326, 84, 100)
		),
		'persimmon' => array(
			'name'     => 'Persimmon',
			'html'     => '#EC5800',
			'graphviz' => '#EC5800',
			'rgb'      => array(93, 35, 0),
			'hsl'      => array(22, 100, 46),
			'hsv'      => array(22, 100, 93)
		),
		'peru' => array(
			'name'     => 'Peru',
			'html'     => '#CD853F',
			'graphviz' => '#CD853F',
			'rgb'      => array(80, 52, 25),
			'hsl'      => array(30, 59, 53),
			'hsv'      => array(30, 69, 80)
		),
		'pewterBlue' => array(
			'name'     => 'Pewter Blue',
			'html'     => '#8BA8B7',
			'graphviz' => '#8BA8B7',
			'rgb'      => array(55, 66, 72),
			'hsl'      => array(200, 23, 63),
			'hsv'      => array(200, 24, 72)
		),
		'phlox' => array(
			'name'     => 'Phlox',
			'html'     => '#DF00FF',
			'graphviz' => '#DF00FF',
			'rgb'      => array(87, 0, 100),
			'hsl'      => array(292, 100, 50),
			'hsv'      => array(292, 100, 100)
		),
		'phthaloBlue' => array(
			'name'     => 'Phthalo blue',
			'html'     => '#000F89',
			'graphviz' => '#000F89',
			'rgb'      => array(0, 6, 54),
			'hsl'      => array(233, 100, 27),
			'hsv'      => array(233, 100, 54)
		),
		'phthaloGreen' => array(
			'name'     => 'Phthalo green',
			'html'     => '#123524',
			'graphviz' => '#123524',
			'rgb'      => array(7, 21, 14),
			'hsl'      => array(151, 49, 14),
			'hsv'      => array(151, 66, 21)
		),
		'pictonBlue' => array(
			'name'     => 'Picton blue',
			'html'     => '#45B1E8',
			'graphviz' => '#45B1E8',
			'rgb'      => array(27, 69, 91),
			'hsl'      => array(200, 78, 59),
			'hsv'      => array(200, 70, 91)
		),
		'pictorialCarmine' => array(
			'name'     => 'Pictorial carmine',
			'html'     => '#C30B4E',
			'graphviz' => '#C30B4E',
			'rgb'      => array(76, 4, 31),
			'hsl'      => array(338, 89, 40),
			'hsv'      => array(338, 94, 76)
		),
		'piggyPink' => array(
			'name'     => 'Piggy pink',
			'html'     => '#FDDDE6',
			'graphviz' => '#FDDDE6',
			'rgb'      => array(99, 87, 90),
			'hsl'      => array(343, 89, 93),
			'hsv'      => array(343, 13, 99)
		),
		'pineGreen' => array(
			'name'     => 'Pine green',
			'html'     => '#01796F',
			'graphviz' => '#01796F',
			'rgb'      => array(0, 47, 44),
			'hsl'      => array(175, 98, 24),
			'hsv'      => array(175, 99, 47)
		),
		'pineapple' => array(
			'name'     => 'Pineapple',
			'html'     => '#563C5C',
			'graphviz' => '#563C5C',
			'rgb'      => array(34, 24, 5),
			'hsl'      => array(289, 74, 19),
			'hsv'      => array(289, 35, 36)
		),
		'pink' => array(
			'name'     => 'Pink',
			'html'     => '#FFC0CB',
			'graphviz' => '#FFC0CB',
			'rgb'      => array(100, 75, 80),
			'hsl'      => array(350, 100, 88),
			'hsv'      => array(350, 25, 100)
		),
		'pinkPantone' => array(
			'name'     => 'Pink (Pantone)',
			'html'     => '#D74894',
			'graphviz' => '#D74894',
			'rgb'      => array(84, 28, 58),
			'hsl'      => array(328, 64, 56),
			'hsv'      => array(328, 67, 84)
		),
		'pinkFlamingo' => array(
			'name'     => 'Pink Flamingo',
			'html'     => '#FC74FD',
			'graphviz' => '#FC74FD',
			'rgb'      => array(99, 45, 99),
			'hsl'      => array(300, 97, 72),
			'hsv'      => array(300, 54, 99)
		),
		'pinkSherbet' => array(
			'name'     => 'Pink Sherbet',
			'html'     => '#F78FA7',
			'graphviz' => '#F78FA7',
			'rgb'      => array(97, 56, 65),
			'hsl'      => array(346, 87, 76),
			'hsv'      => array(346, 42, 97)
		),
		'pinkLace' => array(
			'name'     => 'Pink lace',
			'html'     => '#FFDDF4',
			'graphviz' => '#FFDDF4',
			'rgb'      => array(100, 87, 96),
			'hsl'      => array(319, 100, 93),
			'hsv'      => array(319, 13, 100)
		),
		'pinkLavender' => array(
			'name'     => 'Pink lavender',
			'html'     => '#D8B2D1',
			'graphviz' => '#D8B2D1',
			'rgb'      => array(85, 70, 82),
			'hsl'      => array(311, 33, 77),
			'hsv'      => array(311, 18, 85)
		),
		'pinkPearl' => array(
			'name'     => 'Pink pearl',
			'html'     => '#E7ACCF',
			'graphviz' => '#E7ACCF',
			'rgb'      => array(91, 67, 81),
			'hsl'      => array(324, 55, 79),
			'hsv'      => array(324, 26, 91)
		),
		'pinkRaspberry' => array(
			'name'     => 'Pink raspberry',
			'html'     => '#980036',
			'graphviz' => '#980036',
			'rgb'      => array(60, 0, 21),
			'hsl'      => array(339, 100, 30),
			'hsv'      => array(339, 100, 60)
		),
		'pinkOrange' => array(
			'name'     => 'Pink-orange',
			'html'     => '#FF9966',
			'graphviz' => '#FF9966',
			'rgb'      => array(100, 60, 40),
			'hsl'      => array(20, 100, 70),
			'hsv'      => array(20, 60, 100)
		),
		'pistachio' => array(
			'name'     => 'Pistachio',
			'html'     => '#93C572',
			'graphviz' => '#93C572',
			'rgb'      => array(58, 77, 45),
			'hsl'      => array(96, 42, 61),
			'hsv'      => array(96, 42, 77)
		),
		'pixiePowder' => array(
			'name'     => 'Pixie Powder',
			'html'     => '#391285',
			'graphviz' => '#391285',
			'rgb'      => array(22, 7, 52),
			'hsl'      => array(260, 76, 30),
			'hsv'      => array(260, 87, 52)
		),
		'platinum' => array(
			'name'     => 'Platinum',
			'html'     => '#E5E4E2',
			'graphviz' => '#E5E4E2',
			'rgb'      => array(90, 89, 89),
			'hsl'      => array(40, 5, 89),
			'hsv'      => array(40, 1, 90)
		),
		'plum' => array(
			'name'     => 'Plum',
			'html'     => '#8E4585',
			'graphviz' => '#8E4585',
			'rgb'      => array(56, 27, 52),
			'hsl'      => array(307, 35, 41),
			'hsv'      => array(307, 51, 56)
		),
		'plumWeb' => array(
			'name'     => 'Plum (web)',
			'html'     => '#DDA0DD',
			'graphviz' => '#DDA0DD',
			'rgb'      => array(87, 63, 87),
			'hsl'      => array(300, 47, 75),
			'hsv'      => array(300, 28, 87)
		),
		'plumpPurple' => array(
			'name'     => 'Plump Purple',
			'html'     => '#5946B2',
			'graphviz' => '#5946B2',
			'rgb'      => array(35, 27, 70),
			'hsl'      => array(251, 44, 49),
			'hsv'      => array(251, 61, 70)
		),
		'polishedPine' => array(
			'name'     => 'Polished Pine',
			'html'     => '#5DA493',
			'graphviz' => '#5DA493',
			'rgb'      => array(36, 64, 58),
			'hsl'      => array(166, 28, 50),
			'hsv'      => array(166, 43, 64)
		),
		'pompAndPower' => array(
			'name'     => 'Pomp and Power',
			'html'     => '#86608E',
			'graphviz' => '#86608E',
			'rgb'      => array(53, 38, 56),
			'hsl'      => array(290, 19, 47),
			'hsv'      => array(290, 32, 56)
		),
		'popstar' => array(
			'name'     => 'Popstar',
			'html'     => '#BE4F62',
			'graphviz' => '#BE4F62',
			'rgb'      => array(75, 31, 38),
			'hsl'      => array(350, 46, 53),
			'hsv'      => array(350, 58, 75)
		),
		'portlandOrange' => array(
			'name'     => 'Portland Orange',
			'html'     => '#FF5A36',
			'graphviz' => '#FF5A36',
			'rgb'      => array(100, 35, 21),
			'hsl'      => array(11, 100, 61),
			'hsv'      => array(11, 79, 100)
		),
		'powderBlue' => array(
			'name'     => 'Powder blue',
			'html'     => '#B0E0E6',
			'graphviz' => '#B0E0E6',
			'rgb'      => array(69, 88, 90),
			'hsl'      => array(187, 52, 80),
			'hsv'      => array(187, 23, 90)
		),
		'princessPerfume' => array(
			'name'     => 'Princess Perfume',
			'html'     => '#FF85CF',
			'graphviz' => '#FF85CF',
			'rgb'      => array(100, 52, 81),
			'hsl'      => array(324, 100, 76),
			'hsv'      => array(324, 48, 100)
		),
		'princetonOrange' => array(
			'name'     => 'Princeton orange',
			'html'     => '#F58025',
			'graphviz' => '#F58025',
			'rgb'      => array(96, 50, 15),
			'hsl'      => array(26, 91, 55),
			'hsv'      => array(26, 85, 96)
		),
		'prune' => array(
			'name'     => 'Prune',
			'html'     => '#701C1C',
			'graphviz' => '#701C1C',
			'rgb'      => array(44, 11, 11),
			'hsl'      => array(0, 60, 27),
			'hsv'      => array(0, 75, 44)
		),
		'prussianBlue' => array(
			'name'     => 'Prussian blue',
			'html'     => '#003153',
			'graphviz' => '#003153',
			'rgb'      => array(0, 19, 33),
			'hsl'      => array(205, 100, 16),
			'hsv'      => array(205, 100, 33)
		),
		'psychedelicPurple' => array(
			'name'     => 'Psychedelic purple',
			'html'     => '#DF00FF',
			'graphviz' => '#DF00FF',
			'rgb'      => array(87, 0, 100),
			'hsl'      => array(292, 100, 50),
			'hsv'      => array(292, 100, 100)
		),
		'puce' => array(
			'name'     => 'Puce',
			'html'     => '#CC8899',
			'graphviz' => '#CC8899',
			'rgb'      => array(80, 53, 60),
			'hsl'      => array(345, 40, 67),
			'hsv'      => array(345, 33, 80)
		),
		'puceRed' => array(
			'name'     => 'Puce red',
			'html'     => '#722F37',
			'graphviz' => '#722F37',
			'rgb'      => array(45, 18, 22),
			'hsl'      => array(353, 42, 32),
			'hsv'      => array(353, 59, 45)
		),
		'pullmanBrownUpsBrown' => array(
			'name'     => 'Pullman Brown (UPS Brown)',
			'html'     => '#644117',
			'graphviz' => '#644117',
			'rgb'      => array(39, 25, 9),
			'hsl'      => array(33, 63, 24),
			'hsv'      => array(33, 77, 39)
		),
		'pullmanGreen' => array(
			'name'     => 'Pullman Green',
			'html'     => '#3B331C',
			'graphviz' => '#3B331C',
			'rgb'      => array(23, 20, 11),
			'hsl'      => array(45, 36, 17),
			'hsv'      => array(45, 36, 59)
		),
		'pumpkin' => array(
			'name'     => 'Pumpkin',
			'html'     => '#FF7518',
			'graphviz' => '#FF7518',
			'rgb'      => array(100, 46, 9),
			'hsl'      => array(24, 100, 55),
			'hsv'      => array(24, 91, 100)
		),
		'purpleHtml' => array(
			'name'     => 'Purple (HTML)',
			'html'     => '#800080',
			'graphviz' => '#800080',
			'rgb'      => array(50, 0, 50),
			'hsl'      => array(300, 100, 25),
			'hsv'      => array(300, 100, 50)
		),
		'purpleMunsell' => array(
			'name'     => 'Purple (Munsell)',
			'html'     => '#9F00C5',
			'graphviz' => '#9F00C5',
			'rgb'      => array(62, 0, 77),
			'hsl'      => array(288, 100, 39),
			'hsv'      => array(288, 100, 77)
		),
		'purpleX11' => array(
			'name'     => 'Purple (X11)',
			'html'     => '#A020F0',
			'graphviz' => '#A020F0',
			'rgb'      => array(63, 13, 94),
			'hsl'      => array(277, 87, 53),
			'hsv'      => array(277, 87, 94)
		),
		'purpleHeart' => array(
			'name'     => 'Purple Heart',
			'html'     => '#69359C',
			'graphviz' => '#69359C',
			'rgb'      => array(41, 21, 61),
			'hsl'      => array(270, 49, 41),
			'hsv'      => array(270, 66, 61)
		),
		'purplePlum' => array(
			'name'     => 'Purple Plum',
			'html'     => '#9C51B6',
			'graphviz' => '#9C51B6',
			'rgb'      => array(61, 32, 71),
			'hsl'      => array(285, 41, 52),
			'hsv'      => array(285, 56, 71)
		),
		'purpleMountainMajesty' => array(
			'name'     => 'Purple mountain majesty',
			'html'     => '#9678B6',
			'graphviz' => '#9678B6',
			'rgb'      => array(59, 47, 71),
			'hsl'      => array(269, 30, 59),
			'hsv'      => array(269, 34, 71)
		),
		'purpleNavy' => array(
			'name'     => 'Purple navy',
			'html'     => '#4E5180',
			'graphviz' => '#4E5180',
			'rgb'      => array(31, 32, 50),
			'hsl'      => array(236, 24, 40),
			'hsv'      => array(236, 39, 50)
		),
		'purplePizzazz' => array(
			'name'     => 'Purple pizzazz',
			'html'     => '#FE4EDA',
			'graphviz' => '#FE4EDA',
			'rgb'      => array(100, 31, 85),
			'hsl'      => array(312, 99, 65),
			'hsv'      => array(312, 69, 100)
		),
		'purpleTaupe' => array(
			'name'     => 'Purple taupe',
			'html'     => '#50404D',
			'graphviz' => '#50404D',
			'rgb'      => array(31, 25, 30),
			'hsl'      => array(311, 11, 28),
			'hsv'      => array(311, 20, 31)
		),
		'purpureus' => array(
			'name'     => 'Purpureus',
			'html'     => '#9A4EAE',
			'graphviz' => '#9A4EAE',
			'rgb'      => array(60, 31, 68),
			'hsl'      => array(288, 38, 49),
			'hsv'      => array(288, 55, 68)
		),
		'quartz' => array(
			'name'     => 'Quartz',
			'html'     => '#51484F',
			'graphviz' => '#51484F',
			'rgb'      => array(32, 28, 31),
			'hsl'      => array(313, 6, 30),
			'hsv'      => array(313, 11, 32)
		),
		'queenBlue' => array(
			'name'     => 'Queen blue',
			'html'     => '#436B95',
			'graphviz' => '#436B95',
			'rgb'      => array(26, 42, 58),
			'hsl'      => array(211, 38, 42),
			'hsv'      => array(211, 55, 58)
		),
		'queenPink' => array(
			'name'     => 'Queen pink',
			'html'     => '#E8CCD7',
			'graphviz' => '#E8CCD7',
			'rgb'      => array(91, 80, 84),
			'hsl'      => array(336, 38, 85),
			'hsv'      => array(336, 12, 91)
		),
		'quickSilver' => array(
			'name'     => 'Quick Silver',
			'html'     => '#A6A6A6',
			'graphviz' => '#A6A6A6',
			'rgb'      => array(65, 65, 65),
			'hsl'      => array(0, 0, 65),
			'hsv'      => array(0, 0, 65)
		),
		'quinacridoneMagenta' => array(
			'name'     => 'Quinacridone magenta',
			'html'     => '#8E3A59',
			'graphviz' => '#8E3A59',
			'rgb'      => array(56, 23, 35),
			'hsl'      => array(338, 42, 39),
			'hsv'      => array(338, 59, 56)
		),
		'rackley' => array(
			'name'     => 'Rackley',
			'html'     => '#5D8AA8',
			'graphviz' => '#5D8AA8',
			'rgb'      => array(36, 54, 66),
			'hsl'      => array(204, 30, 51),
			'hsv'      => array(204, 45, 66)
		),
		'radicalRed' => array(
			'name'     => 'Radical Red',
			'html'     => '#FF355E',
			'graphviz' => '#FF355E',
			'rgb'      => array(100, 21, 37),
			'hsl'      => array(348, 100, 60),
			'hsv'      => array(348, 79, 100)
		),
		'raisinBlack' => array(
			'name'     => 'Raisin black',
			'html'     => '#242124',
			'graphviz' => '#242124',
			'rgb'      => array(14, 13, 14),
			'hsl'      => array(300, 4, 14),
			'hsv'      => array(300, 8, 14)
		),
		'rajah' => array(
			'name'     => 'Rajah',
			'html'     => '#FBAB60',
			'graphviz' => '#FBAB60',
			'rgb'      => array(98, 67, 38),
			'hsl'      => array(29, 95, 68),
			'hsv'      => array(29, 62, 98)
		),
		'raspberry' => array(
			'name'     => 'Raspberry',
			'html'     => '#E30B5D',
			'graphviz' => '#E30B5D',
			'rgb'      => array(89, 4, 36),
			'hsl'      => array(337, 91, 47),
			'hsv'      => array(337, 95, 89)
		),
		'raspberryGlace' => array(
			'name'     => 'Raspberry glace',
			'html'     => '#915F6D',
			'graphviz' => '#915F6D',
			'rgb'      => array(57, 37, 43),
			'hsl'      => array(343, 21, 47),
			'hsv'      => array(343, 34, 57)
		),
		'raspberryPink' => array(
			'name'     => 'Raspberry pink',
			'html'     => '#E25098',
			'graphviz' => '#E25098',
			'rgb'      => array(89, 31, 60),
			'hsl'      => array(330, 72, 60),
			'hsv'      => array(330, 65, 89)
		),
		'raspberryRose' => array(
			'name'     => 'Raspberry rose',
			'html'     => '#B3446C',
			'graphviz' => '#B3446C',
			'rgb'      => array(70, 27, 42),
			'hsl'      => array(338, 45, 48),
			'hsv'      => array(338, 62, 70)
		),
		'rawSienna' => array(
			'name'     => 'Raw Sienna',
			'html'     => '#D68A59',
			'graphviz' => '#D68A59',
			'rgb'      => array(84, 54, 35),
			'hsl'      => array(24, 60, 59),
			'hsv'      => array(24, 58, 84)
		),
		'rawUmber' => array(
			'name'     => 'Raw umber',
			'html'     => '#826644',
			'graphviz' => '#826644',
			'rgb'      => array(51, 40, 27),
			'hsl'      => array(33, 31, 39),
			'hsv'      => array(33, 48, 51)
		),
		'razzleDazzleRose' => array(
			'name'     => 'Razzle dazzle rose',
			'html'     => '#FF33CC',
			'graphviz' => '#FF33CC',
			'rgb'      => array(100, 20, 80),
			'hsl'      => array(315, 100, 60),
			'hsv'      => array(315, 80, 100)
		),
		'razzmatazz' => array(
			'name'     => 'Razzmatazz',
			'html'     => '#E3256B',
			'graphviz' => '#E3256B',
			'rgb'      => array(89, 15, 42),
			'hsl'      => array(338, 77, 52),
			'hsv'      => array(338, 84, 89)
		),
		'razzmicBerry' => array(
			'name'     => 'Razzmic Berry',
			'html'     => '#8D4E85',
			'graphviz' => '#8D4E85',
			'rgb'      => array(55, 31, 52),
			'hsl'      => array(308, 29, 43),
			'hsv'      => array(308, 45, 55)
		),
		'rebeccaPurple' => array(
			'name'     => 'Rebecca Purple',
			'html'     => '#663399',
			'graphviz' => '#663399',
			'rgb'      => array(40, 20, 60),
			'hsl'      => array(270, 49, 40),
			'hsv'      => array(270, 67, 60)
		),
		'red' => array(
			'name'     => 'Red',
			'html'     => '#FF0000',
			'graphviz' => '#FF0000',
			'rgb'      => array(100, 0, 0),
			'hsl'      => array(0, 100, 50),
			'hsv'      => array(0, 100, 100)
		),
		'redCrayola' => array(
			'name'     => 'Red (Crayola)',
			'html'     => '#EE204D',
			'graphviz' => '#EE204D',
			'rgb'      => array(93, 13, 30),
			'hsl'      => array(347, 86, 53),
			'hsv'      => array(347, 87, 93)
		),
		'redMunsell' => array(
			'name'     => 'Red (Munsell)',
			'html'     => '#F2003C',
			'graphviz' => '#F2003C',
			'rgb'      => array(95, 0, 24),
			'hsl'      => array(345, 100, 47),
			'hsv'      => array(345, 100, 95)
		),
		'redNcs' => array(
			'name'     => 'Red (NCS)',
			'html'     => '#C40233',
			'graphviz' => '#C40233',
			'rgb'      => array(77, 1, 20),
			'hsl'      => array(345, 98, 39),
			'hsv'      => array(345, 99, 77)
		),
		'redPantone' => array(
			'name'     => 'Red (Pantone)',
			'html'     => '#ED2939',
			'graphviz' => '#ED2939',
			'rgb'      => array(93, 16, 22),
			'hsl'      => array(355, 84, 55),
			'hsv'      => array(355, 83, 93)
		),
		'redRyb' => array(
			'name'     => 'Red (RYB)',
			'html'     => '#FE2712',
			'graphviz' => '#FE2712',
			'rgb'      => array(100, 15, 7),
			'hsl'      => array(5, 99, 53),
			'hsv'      => array(5, 93, 100)
		),
		'redPigment' => array(
			'name'     => 'Red (pigment)',
			'html'     => '#ED1C24',
			'graphviz' => '#ED1C24',
			'rgb'      => array(93, 11, 14),
			'hsl'      => array(358, 85, 52),
			'hsv'      => array(358, 88, 93)
		),
		'redSalsa' => array(
			'name'     => 'Red Salsa',
			'html'     => '#FD3A4A',
			'graphviz' => '#FD3A4A',
			'rgb'      => array(99, 23, 29),
			'hsl'      => array(355, 98, 61),
			'hsv'      => array(355, 77, 99)
		),
		'redDevil' => array(
			'name'     => 'Red devil',
			'html'     => '#860111',
			'graphviz' => '#860111',
			'rgb'      => array(53, 0, 7),
			'hsl'      => array(353, 99, 26),
			'hsv'      => array(353, 99, 53)
		),
		'redBrown' => array(
			'name'     => 'Red-brown',
			'html'     => '#A52A2A',
			'graphviz' => '#A52A2A',
			'rgb'      => array(65, 16, 16),
			'hsl'      => array(0, 59, 41),
			'hsv'      => array(0, 75, 65)
		),
		'redOrange' => array(
			'name'     => 'Red-orange',
			'html'     => '#FF5349',
			'graphviz' => '#FF5349',
			'rgb'      => array(100, 33, 29),
			'hsl'      => array(3, 100, 64),
			'hsv'      => array(3, 71, 100)
		),
		'redPurple' => array(
			'name'     => 'Red-purple',
			'html'     => '#E40078',
			'graphviz' => '#E40078',
			'rgb'      => array(89, 0, 47),
			'hsl'      => array(328, 100, 45),
			'hsv'      => array(328, 100, 89)
		),
		'redViolet' => array(
			'name'     => 'Red-violet',
			'html'     => '#C71585',
			'graphviz' => '#C71585',
			'rgb'      => array(78, 8, 52),
			'hsl'      => array(322, 81, 43),
			'hsv'      => array(322, 89, 78)
		),
		'redwood' => array(
			'name'     => 'Redwood',
			'html'     => '#A45A52',
			'graphviz' => '#A45A52',
			'rgb'      => array(64, 35, 32),
			'hsl'      => array(6, 33, 48),
			'hsv'      => array(6, 50, 64)
		),
		'regalia' => array(
			'name'     => 'Regalia',
			'html'     => '#522D80',
			'graphviz' => '#522D80',
			'rgb'      => array(32, 18, 50),
			'hsl'      => array(267, 48, 34),
			'hsv'      => array(267, 65, 50)
		),
		'registrationBlack' => array(
			'name'     => 'Registration black',
			'html'     => '#000000',
			'graphviz' => '#000000',
			'rgb'      => array(0, 0, 0),
			'hsl'      => array(null, 0, 0),
			'hsv'      => array(null, 0, 0)
		),
		'resolutionBlue' => array(
			'name'     => 'Resolution blue',
			'html'     => '#002387',
			'graphviz' => '#002387',
			'rgb'      => array(0, 14, 53),
			'hsl'      => array(224, 100, 26),
			'hsv'      => array(224, 100, 53)
		),
		'rhythm' => array(
			'name'     => 'Rhythm',
			'html'     => '#777696',
			'graphviz' => '#777696',
			'rgb'      => array(47, 46, 59),
			'hsl'      => array(242, 13, 53),
			'hsv'      => array(242, 21, 59)
		),
		'richBlack' => array(
			'name'     => 'Rich black',
			'html'     => '#004040',
			'graphviz' => '#004040',
			'rgb'      => array(0, 25, 25),
			'hsl'      => array(180, 100, 13),
			'hsv'      => array(180, 100, 25)
		),
		'richBlackFogra29' => array(
			'name'     => 'Rich black (FOGRA29)',
			'html'     => '#010B13',
			'graphviz' => '#010B13',
			'rgb'      => array(0, 4, 7),
			'hsl'      => array(207, 90, 4),
			'hsv'      => array(207, 95, 8)
		),
		'richBlackFogra39' => array(
			'name'     => 'Rich black (FOGRA39)',
			'html'     => '#010203',
			'graphviz' => '#010203',
			'rgb'      => array(0, 1, 1),
			'hsl'      => array(210, 50, 1),
			'hsv'      => array(210, 67, 1)
		),
		'richBrilliantLavender' => array(
			'name'     => 'Rich brilliant lavender',
			'html'     => '#F1A7FE',
			'graphviz' => '#F1A7FE',
			'rgb'      => array(95, 65, 100),
			'hsl'      => array(291, 98, 83),
			'hsv'      => array(291, 34, 100)
		),
		'richCarmine' => array(
			'name'     => 'Rich carmine',
			'html'     => '#D70040',
			'graphviz' => '#D70040',
			'rgb'      => array(84, 0, 25),
			'hsl'      => array(342, 100, 42),
			'hsv'      => array(342, 100, 84)
		),
		'richElectricBlue' => array(
			'name'     => 'Rich electric blue',
			'html'     => '#0892D0',
			'graphviz' => '#0892D0',
			'rgb'      => array(3, 57, 82),
			'hsl'      => array(199, 93, 42),
			'hsv'      => array(199, 96, 82)
		),
		'richLavender' => array(
			'name'     => 'Rich lavender',
			'html'     => '#A76BCF',
			'graphviz' => '#A76BCF',
			'rgb'      => array(65, 42, 81),
			'hsl'      => array(276, 51, 62),
			'hsv'      => array(276, 48, 81)
		),
		'richLilac' => array(
			'name'     => 'Rich lilac',
			'html'     => '#B666D2',
			'graphviz' => '#B666D2',
			'rgb'      => array(71, 40, 82),
			'hsl'      => array(284, 55, 61),
			'hsv'      => array(284, 51, 82)
		),
		'richMaroon' => array(
			'name'     => 'Rich maroon',
			'html'     => '#B03060',
			'graphviz' => '#B03060',
			'rgb'      => array(69, 19, 38),
			'hsl'      => array(338, 57, 44),
			'hsv'      => array(338, 73, 69)
		),
		'rifleGreen' => array(
			'name'     => 'Rifle green',
			'html'     => '#444C38',
			'graphviz' => '#444C38',
			'rgb'      => array(27, 30, 22),
			'hsl'      => array(84, 15, 26),
			'hsv'      => array(84, 26, 30)
		),
		'roastCoffee' => array(
			'name'     => 'Roast coffee',
			'html'     => '#704241',
			'graphviz' => '#704241',
			'rgb'      => array(44, 26, 25),
			'hsl'      => array(1, 27, 35),
			'hsv'      => array(1, 42, 44)
		),
		'robinEggBlue' => array(
			'name'     => 'Robin egg blue',
			'html'     => '#00CCCC',
			'graphviz' => '#00CCCC',
			'rgb'      => array(0, 80, 80),
			'hsl'      => array(180, 100, 40),
			'hsv'      => array(180, 100, 80)
		),
		'rocketMetallic' => array(
			'name'     => 'Rocket metallic',
			'html'     => '#8A7F80',
			'graphviz' => '#8A7F80',
			'rgb'      => array(54, 50, 50),
			'hsl'      => array(355, 4, 52),
			'hsv'      => array(355, 8, 54)
		),
		'romanSilver' => array(
			'name'     => 'Roman silver',
			'html'     => '#838996',
			'graphviz' => '#838996',
			'rgb'      => array(51, 54, 59),
			'hsl'      => array(221, 8, 55),
			'hsv'      => array(221, 13, 59)
		),
		'rose' => array(
			'name'     => 'Rose',
			'html'     => '#FF007F',
			'graphviz' => '#FF007F',
			'rgb'      => array(100, 0, 50),
			'hsl'      => array(330, 100, 50),
			'hsv'      => array(330, 100, 100)
		),
		'roseDust' => array(
			'name'     => 'Rose Dust',
			'html'     => '#9E5E6F',
			'graphviz' => '#9E5E6F',
			'rgb'      => array(62, 37, 44),
			'hsl'      => array(344, 25, 49),
			'hsv'      => array(344, 41, 62)
		),
		'roseBonbon' => array(
			'name'     => 'Rose bonbon',
			'html'     => '#F9429E',
			'graphviz' => '#F9429E',
			'rgb'      => array(98, 26, 62),
			'hsl'      => array(330, 94, 62),
			'hsv'      => array(330, 73, 98)
		),
		'roseEbony' => array(
			'name'     => 'Rose ebony',
			'html'     => '#674846',
			'graphviz' => '#674846',
			'rgb'      => array(40, 28, 27),
			'hsl'      => array(4, 19, 34),
			'hsv'      => array(4, 32, 40)
		),
		'roseGold' => array(
			'name'     => 'Rose gold',
			'html'     => '#B76E79',
			'graphviz' => '#B76E79',
			'rgb'      => array(72, 43, 47),
			'hsl'      => array(351, 34, 57),
			'hsv'      => array(351, 40, 72)
		),
		'roseMadder' => array(
			'name'     => 'Rose madder',
			'html'     => '#E32636',
			'graphviz' => '#E32636',
			'rgb'      => array(89, 15, 21),
			'hsl'      => array(355, 77, 52),
			'hsv'      => array(355, 83, 89)
		),
		'rosePink' => array(
			'name'     => 'Rose pink',
			'html'     => '#FF66CC',
			'graphviz' => '#FF66CC',
			'rgb'      => array(100, 40, 80),
			'hsl'      => array(320, 100, 70),
			'hsv'      => array(320, 60, 100)
		),
		'roseQuartz' => array(
			'name'     => 'Rose quartz',
			'html'     => '#AA98A9',
			'graphviz' => '#AA98A9',
			'rgb'      => array(67, 60, 66),
			'hsl'      => array(303, 10, 63),
			'hsv'      => array(303, 11, 67)
		),
		'roseRed' => array(
			'name'     => 'Rose red',
			'html'     => '#C21E56',
			'graphviz' => '#C21E56',
			'rgb'      => array(76, 12, 34),
			'hsl'      => array(340, 73, 44),
			'hsv'      => array(340, 85, 76)
		),
		'roseTaupe' => array(
			'name'     => 'Rose taupe',
			'html'     => '#905D5D',
			'graphviz' => '#905D5D',
			'rgb'      => array(56, 36, 36),
			'hsl'      => array(0, 22, 46),
			'hsv'      => array(0, 35, 56)
		),
		'roseVale' => array(
			'name'     => 'Rose vale',
			'html'     => '#AB4E52',
			'graphviz' => '#AB4E52',
			'rgb'      => array(67, 31, 32),
			'hsl'      => array(357, 37, 49),
			'hsv'      => array(357, 54, 67)
		),
		'rosewood' => array(
			'name'     => 'Rosewood',
			'html'     => '#65000B',
			'graphviz' => '#65000B',
			'rgb'      => array(40, 0, 4),
			'hsl'      => array(353, 100, 20),
			'hsv'      => array(353, 100, 40)
		),
		'rossoCorsa' => array(
			'name'     => 'Rosso corsa',
			'html'     => '#D40000',
			'graphviz' => '#D40000',
			'rgb'      => array(83, 0, 0),
			'hsl'      => array(0, 100, 42),
			'hsv'      => array(0, 100, 83)
		),
		'rosyBrown' => array(
			'name'     => 'Rosy brown',
			'html'     => '#BC8F8F',
			'graphviz' => '#BC8F8F',
			'rgb'      => array(74, 56, 56),
			'hsl'      => array(0, 25, 65),
			'hsv'      => array(0, 24, 74)
		),
		'royalAzure' => array(
			'name'     => 'Royal azure',
			'html'     => '#0038A8',
			'graphviz' => '#0038A8',
			'rgb'      => array(0, 22, 66),
			'hsl'      => array(220, 100, 33),
			'hsv'      => array(220, 100, 66)
		),
		'royalBlue' => array(
			'name'     => 'Royal blue',
			'html'     => '#4169E1',
			'graphviz' => '#4169E1',
			'rgb'      => array(25, 41, 88),
			'hsl'      => array(225, 73, 57),
			'hsv'      => array(225, 71, 88)
		),
		'royalFuchsia' => array(
			'name'     => 'Royal fuchsia',
			'html'     => '#CA2C92',
			'graphviz' => '#CA2C92',
			'rgb'      => array(79, 17, 57),
			'hsl'      => array(321, 64, 48),
			'hsv'      => array(321, 78, 79)
		),
		'royalPurple' => array(
			'name'     => 'Royal purple',
			'html'     => '#7851A9',
			'graphviz' => '#7851A9',
			'rgb'      => array(47, 32, 66),
			'hsl'      => array(267, 35, 49),
			'hsv'      => array(267, 52, 66)
		),
		'royalYellow' => array(
			'name'     => 'Royal yellow',
			'html'     => '#FADA5E',
			'graphviz' => '#FADA5E',
			'rgb'      => array(98, 85, 37),
			'hsl'      => array(48, 94, 67),
			'hsv'      => array(48, 62, 98)
		),
		'ruber' => array(
			'name'     => 'Ruber',
			'html'     => '#CE4676',
			'graphviz' => '#CE4676',
			'rgb'      => array(81, 27, 46),
			'hsl'      => array(339, 58, 54),
			'hsv'      => array(339, 66, 81)
		),
		'rubineRed' => array(
			'name'     => 'Rubine red',
			'html'     => '#D10056',
			'graphviz' => '#D10056',
			'rgb'      => array(82, 0, 34),
			'hsl'      => array(335, 100, 41),
			'hsv'      => array(335, 100, 82)
		),
		'ruby' => array(
			'name'     => 'Ruby',
			'html'     => '#E0115F',
			'graphviz' => '#E0115F',
			'rgb'      => array(88, 7, 37),
			'hsl'      => array(337, 86, 47),
			'hsv'      => array(337, 92, 88)
		),
		'rubyRed' => array(
			'name'     => 'Ruby red',
			'html'     => '#9B111E',
			'graphviz' => '#9B111E',
			'rgb'      => array(61, 7, 12),
			'hsl'      => array(354, 80, 34),
			'hsv'      => array(354, 89, 61)
		),
		'ruddy' => array(
			'name'     => 'Ruddy',
			'html'     => '#FF0028',
			'graphviz' => '#FF0028',
			'rgb'      => array(100, 0, 16),
			'hsl'      => array(351, 100, 50),
			'hsv'      => array(351, 100, 100)
		),
		'ruddyBrown' => array(
			'name'     => 'Ruddy brown',
			'html'     => '#BB6528',
			'graphviz' => '#BB6528',
			'rgb'      => array(73, 40, 16),
			'hsl'      => array(25, 65, 45),
			'hsv'      => array(25, 79, 73)
		),
		'ruddyPink' => array(
			'name'     => 'Ruddy pink',
			'html'     => '#E18E96',
			'graphviz' => '#E18E96',
			'rgb'      => array(88, 56, 59),
			'hsl'      => array(354, 58, 72),
			'hsv'      => array(354, 37, 88)
		),
		'rufous' => array(
			'name'     => 'Rufous',
			'html'     => '#A81C07',
			'graphviz' => '#A81C07',
			'rgb'      => array(66, 11, 3),
			'hsl'      => array(8, 92, 34),
			'hsv'      => array(8, 96, 66)
		),
		'russet' => array(
			'name'     => 'Russet',
			'html'     => '#80461B',
			'graphviz' => '#80461B',
			'rgb'      => array(50, 27, 11),
			'hsl'      => array(26, 65, 30),
			'hsv'      => array(26, 79, 50)
		),
		'russianGreen' => array(
			'name'     => 'Russian green',
			'html'     => '#679267',
			'graphviz' => '#679267',
			'rgb'      => array(40, 57, 40),
			'hsl'      => array(120, 17, 49),
			'hsv'      => array(120, 29, 57)
		),
		'russianViolet' => array(
			'name'     => 'Russian violet',
			'html'     => '#32174D',
			'graphviz' => '#32174D',
			'rgb'      => array(20, 9, 30),
			'hsl'      => array(270, 54, 20),
			'hsv'      => array(270, 70, 30)
		),
		'rust' => array(
			'name'     => 'Rust',
			'html'     => '#B7410E',
			'graphviz' => '#B7410E',
			'rgb'      => array(72, 25, 5),
			'hsl'      => array(18, 86, 39),
			'hsv'      => array(18, 92, 72)
		),
		'rustyRed' => array(
			'name'     => 'Rusty red',
			'html'     => '#DA2C43',
			'graphviz' => '#DA2C43',
			'rgb'      => array(85, 17, 26),
			'hsl'      => array(352, 70, 51),
			'hsv'      => array(352, 80, 85)
		),
		'sacramentoStateGreen' => array(
			'name'     => 'Sacramento State green',
			'html'     => '#00563F',
			'graphviz' => '#00563F',
			'rgb'      => array(0, 34, 25),
			'hsl'      => array(164, 100, 17),
			'hsv'      => array(164, 100, 34)
		),
		'saddleBrown' => array(
			'name'     => 'Saddle brown',
			'html'     => '#8B4513',
			'graphviz' => '#8B4513',
			'rgb'      => array(55, 27, 7),
			'hsl'      => array(25, 76, 31),
			'hsv'      => array(25, 86, 55)
		),
		'safetyOrange' => array(
			'name'     => 'Safety orange',
			'html'     => '#FF7800',
			'graphviz' => '#FF7800',
			'rgb'      => array(100, 47, 0),
			'hsl'      => array(28, 100, 50),
			'hsv'      => array(28, 100, 100)
		),
		'safetyOrangeBlazeOrange' => array(
			'name'     => 'Safety orange (blaze orange)',
			'html'     => '#FF6700',
			'graphviz' => '#FF6700',
			'rgb'      => array(100, 40, 0),
			'hsl'      => array(24, 100, 50),
			'hsv'      => array(24, 100, 100)
		),
		'safetyYellow' => array(
			'name'     => 'Safety yellow',
			'html'     => '#EED202',
			'graphviz' => '#EED202',
			'rgb'      => array(93, 82, 1),
			'hsl'      => array(53, 98, 47),
			'hsv'      => array(53, 99, 93)
		),
		'saffron' => array(
			'name'     => 'Saffron',
			'html'     => '#F4C430',
			'graphviz' => '#F4C430',
			'rgb'      => array(96, 77, 19),
			'hsl'      => array(45, 90, 57),
			'hsv'      => array(45, 80, 96)
		),
		'sage' => array(
			'name'     => 'Sage',
			'html'     => '#BCB88A',
			'graphviz' => '#BCB88A',
			'rgb'      => array(74, 72, 54),
			'hsl'      => array(55, 27, 64),
			'hsv'      => array(55, 27, 74)
		),
		'salmon' => array(
			'name'     => 'Salmon',
			'html'     => '#FA8072',
			'graphviz' => '#FA8072',
			'rgb'      => array(98, 50, 45),
			'hsl'      => array(6, 93, 71),
			'hsv'      => array(6, 54, 98)
		),
		'salmonPink' => array(
			'name'     => 'Salmon pink',
			'html'     => '#FF91A4',
			'graphviz' => '#FF91A4',
			'rgb'      => array(100, 57, 64),
			'hsl'      => array(350, 100, 78),
			'hsv'      => array(350, 43, 100)
		),
		'sand' => array(
			'name'     => 'Sand',
			'html'     => '#C2B280',
			'graphviz' => '#C2B280',
			'rgb'      => array(76, 70, 50),
			'hsl'      => array(45, 35, 63),
			'hsv'      => array(45, 34, 76)
		),
		'sandDune' => array(
			'name'     => 'Sand dune',
			'html'     => '#967117',
			'graphviz' => '#967117',
			'rgb'      => array(59, 44, 9),
			'hsl'      => array(43, 73, 34),
			'hsv'      => array(43, 85, 59)
		),
		'sandstorm' => array(
			'name'     => 'Sandstorm',
			'html'     => '#ECD540',
			'graphviz' => '#ECD540',
			'rgb'      => array(93, 84, 25),
			'hsl'      => array(52, 82, 59),
			'hsv'      => array(52, 73, 93)
		),
		'sandyTan' => array(
			'name'     => 'Sandy Tan',
			'html'     => '#FDD9B5',
			'graphviz' => '#FDD9B5',
			'rgb'      => array(99, 85, 71),
			'hsl'      => array(30, 95, 85),
			'hsv'      => array(30, 28, 99)
		),
		'sandyBrown' => array(
			'name'     => 'Sandy brown',
			'html'     => '#F4A460',
			'graphviz' => '#F4A460',
			'rgb'      => array(96, 64, 38),
			'hsl'      => array(28, 87, 67),
			'hsv'      => array(28, 61, 96)
		),
		'sandyTaupe' => array(
			'name'     => 'Sandy taupe',
			'html'     => '#967117',
			'graphviz' => '#967117',
			'rgb'      => array(59, 44, 9),
			'hsl'      => array(43, 73, 34),
			'hsv'      => array(43, 85, 59)
		),
		'sangria' => array(
			'name'     => 'Sangria',
			'html'     => '#92000A',
			'graphviz' => '#92000A',
			'rgb'      => array(57, 0, 4),
			'hsl'      => array(356, 100, 29),
			'hsv'      => array(356, 100, 57)
		),
		'sapGreen' => array(
			'name'     => 'Sap green',
			'html'     => '#507D2A',
			'graphviz' => '#507D2A',
			'rgb'      => array(31, 49, 16),
			'hsl'      => array(93, 50, 33),
			'hsv'      => array(93, 66, 49)
		),
		'sapphire' => array(
			'name'     => 'Sapphire',
			'html'     => '#0F52BA',
			'graphviz' => '#0F52BA',
			'rgb'      => array(6, 32, 73),
			'hsl'      => array(216, 85, 39),
			'hsv'      => array(216, 92, 73)
		),
		'sapphireBlue' => array(
			'name'     => 'Sapphire blue',
			'html'     => '#0067A5',
			'graphviz' => '#0067A5',
			'rgb'      => array(0, 40, 65),
			'hsl'      => array(203, 100, 32),
			'hsv'      => array(203, 100, 65)
		),
		'sasquatchSocks' => array(
			'name'     => 'Sasquatch Socks',
			'html'     => '#FF4681',
			'graphviz' => '#FF4681',
			'rgb'      => array(100, 27, 51),
			'hsl'      => array(341, 100, 64),
			'hsv'      => array(341, 73, 100)
		),
		'satinSheenGold' => array(
			'name'     => 'Satin sheen gold',
			'html'     => '#CBA135',
			'graphviz' => '#CBA135',
			'rgb'      => array(80, 63, 21),
			'hsl'      => array(43, 59, 50),
			'hsv'      => array(43, 74, 80)
		),
		'scarlet' => array(
			'name'     => 'Scarlet',
			'html'     => '#FD0E35',
			'graphviz' => '#FD0E35',
			'rgb'      => array(99, 5, 21),
			'hsl'      => array(350, 98, 52),
			'hsv'      => array(350, 94, 99)
		),
		'schaussPink' => array(
			'name'     => 'Schauss pink',
			'html'     => '#FF91AF',
			'graphviz' => '#FF91AF',
			'rgb'      => array(100, 57, 69),
			'hsl'      => array(344, 100, 78),
			'hsv'      => array(344, 43, 100)
		),
		'schoolBusYellow' => array(
			'name'     => 'School bus yellow',
			'html'     => '#FFD800',
			'graphviz' => '#FFD800',
			'rgb'      => array(100, 85, 0),
			'hsl'      => array(51, 100, 50),
			'hsv'      => array(51, 100, 100)
		),
		'screaminGreen' => array(
			'name'     => 'Screamin\' Green',
			'html'     => '#66FF66',
			'graphviz' => '#66FF66',
			'rgb'      => array(40, 100, 40),
			'hsl'      => array(120, 100, 70),
			'hsv'      => array(120, 60, 100)
		),
		'seaFoamGreen' => array(
			'name'     => 'Sea Foam Green',
			'html'     => '#9FE2BF',
			'graphviz' => '#9FE2BF',
			'rgb'      => array(76, 89, 75),
			'hsl'      => array(149, 38, 82),
			'hsv'      => array(149, 30, 89)
		),
		'seaSerpent' => array(
			'name'     => 'Sea Serpent',
			'html'     => '#4BC7CF',
			'graphviz' => '#4BC7CF',
			'rgb'      => array(29, 78, 81),
			'hsl'      => array(184, 58, 55),
			'hsv'      => array(184, 64, 81)
		),
		'seaBlue' => array(
			'name'     => 'Sea blue',
			'html'     => '#006994',
			'graphviz' => '#006994',
			'rgb'      => array(0, 41, 58),
			'hsl'      => array(197, 100, 29),
			'hsv'      => array(197, 100, 58)
		),
		'seaGreen' => array(
			'name'     => 'Sea green',
			'html'     => '#2E8B57',
			'graphviz' => '#2E8B57',
			'rgb'      => array(18, 55, 34),
			'hsl'      => array(146, 50, 36),
			'hsv'      => array(146, 67, 55)
		),
		'sealBrown' => array(
			'name'     => 'Seal brown',
			'html'     => '#59260B',
			'graphviz' => '#59260B',
			'rgb'      => array(20, 8, 8),
			'hsl'      => array(0, 43, 14),
			'hsv'      => array(0, 60, 20)
		),
		'seashell' => array(
			'name'     => 'Seashell',
			'html'     => '#FFF5EE',
			'graphviz' => '#FFF5EE',
			'rgb'      => array(100, 96, 93),
			'hsl'      => array(25, 100, 97),
			'hsv'      => array(25, 7, 100)
		),
		'selectiveYellow' => array(
			'name'     => 'Selective yellow',
			'html'     => '#FFBA00',
			'graphviz' => '#FFBA00',
			'rgb'      => array(100, 73, 0),
			'hsl'      => array(44, 100, 50),
			'hsv'      => array(44, 100, 100)
		),
		'sepia' => array(
			'name'     => 'Sepia',
			'html'     => '#704214',
			'graphviz' => '#704214',
			'rgb'      => array(44, 26, 8),
			'hsl'      => array(30, 70, 26),
			'hsv'      => array(30, 82, 44)
		),
		'shadow' => array(
			'name'     => 'Shadow',
			'html'     => '#8A795D',
			'graphviz' => '#8A795D',
			'rgb'      => array(54, 47, 36),
			'hsl'      => array(37, 19, 45),
			'hsv'      => array(37, 33, 54)
		),
		'shadowBlue' => array(
			'name'     => 'Shadow blue',
			'html'     => '#778BA5',
			'graphviz' => '#778BA5',
			'rgb'      => array(47, 55, 65),
			'hsl'      => array(214, 20, 56),
			'hsv'      => array(214, 28, 65)
		),
		'shampoo' => array(
			'name'     => 'Shampoo',
			'html'     => '#FFCFF1',
			'graphviz' => '#FFCFF1',
			'rgb'      => array(100, 81, 95),
			'hsl'      => array(318, 100, 91),
			'hsv'      => array(318, 19, 100)
		),
		'shamrockGreen' => array(
			'name'     => 'Shamrock green',
			'html'     => '#009E60',
			'graphviz' => '#009E60',
			'rgb'      => array(0, 62, 38),
			'hsl'      => array(156, 100, 31),
			'hsv'      => array(156, 100, 62)
		),
		'sheenGreen' => array(
			'name'     => 'Sheen Green',
			'html'     => '#8FD400',
			'graphviz' => '#8FD400',
			'rgb'      => array(56, 83, 0),
			'hsl'      => array(80, 100, 42),
			'hsv'      => array(80, 100, 83)
		),
		'shimmeringBlush' => array(
			'name'     => 'Shimmering Blush',
			'html'     => '#D98695',
			'graphviz' => '#D98695',
			'rgb'      => array(85, 53, 58),
			'hsl'      => array(349, 52, 69),
			'hsv'      => array(349, 38, 85)
		),
		'shinyShamrock' => array(
			'name'     => 'Shiny Shamrock',
			'html'     => '#5FA778',
			'graphviz' => '#5FA778',
			'rgb'      => array(37, 65, 47),
			'hsl'      => array(141, 29, 51),
			'hsv'      => array(141, 43, 66)
		),
		'shockingPink' => array(
			'name'     => 'Shocking pink',
			'html'     => '#FC0FC0',
			'graphviz' => '#FC0FC0',
			'rgb'      => array(99, 6, 75),
			'hsl'      => array(315, 98, 52),
			'hsv'      => array(315, 94, 99)
		),
		'shockingPinkCrayola' => array(
			'name'     => 'Shocking pink (Crayola)',
			'html'     => '#FF6FFF',
			'graphviz' => '#FF6FFF',
			'rgb'      => array(100, 44, 100),
			'hsl'      => array(300, 100, 72),
			'hsv'      => array(300, 56, 100)
		),
		'sienna' => array(
			'name'     => 'Sienna',
			'html'     => '#882D17',
			'graphviz' => '#882D17',
			'rgb'      => array(53, 18, 9),
			'hsl'      => array(12, 71, 31),
			'hsv'      => array(12, 83, 53)
		),
		'silver' => array(
			'name'     => 'Silver',
			'html'     => '#C0C0C0',
			'graphviz' => '#C0C0C0',
			'rgb'      => array(75, 75, 75),
			'hsl'      => array(null, 0, 75),
			'hsv'      => array(null, 0, 75)
		),
		'silverLakeBlue' => array(
			'name'     => 'Silver Lake blue',
			'html'     => '#5D89BA',
			'graphviz' => '#5D89BA',
			'rgb'      => array(36, 54, 73),
			'hsl'      => array(212, 40, 55),
			'hsv'      => array(212, 50, 73)
		),
		'silverChalice' => array(
			'name'     => 'Silver chalice',
			'html'     => '#ACACAC',
			'graphviz' => '#ACACAC',
			'rgb'      => array(67, 67, 67),
			'hsl'      => array(null, 0, 67),
			'hsv'      => array(null, 0, 67)
		),
		'silverPink' => array(
			'name'     => 'Silver pink',
			'html'     => '#C4AEAD',
			'graphviz' => '#C4AEAD',
			'rgb'      => array(77, 68, 68),
			'hsl'      => array(3, 16, 72),
			'hsv'      => array(3, 12, 77)
		),
		'silverSand' => array(
			'name'     => 'Silver sand',
			'html'     => '#BFC1C2',
			'graphviz' => '#BFC1C2',
			'rgb'      => array(75, 76, 76),
			'hsl'      => array(200, 2, 75),
			'hsv'      => array(200, 2, 76)
		),
		'sinopia' => array(
			'name'     => 'Sinopia',
			'html'     => '#CB410B',
			'graphviz' => '#CB410B',
			'rgb'      => array(80, 25, 4),
			'hsl'      => array(17, 90, 42),
			'hsv'      => array(17, 95, 80)
		),
		'sizzlingRed' => array(
			'name'     => 'Sizzling Red',
			'html'     => '#FF3855',
			'graphviz' => '#FF3855',
			'rgb'      => array(100, 22, 33),
			'hsl'      => array(351, 100, 61),
			'hsv'      => array(351, 78, 100)
		),
		'sizzlingSunrise' => array(
			'name'     => 'Sizzling Sunrise',
			'html'     => '#FFDB00',
			'graphviz' => '#FFDB00',
			'rgb'      => array(100, 86, 0),
			'hsl'      => array(52, 100, 50),
			'hsv'      => array(52, 100, 100)
		),
		'skobeloff' => array(
			'name'     => 'Skobeloff',
			'html'     => '#007474',
			'graphviz' => '#007474',
			'rgb'      => array(0, 45, 45),
			'hsl'      => array(180, 100, 23),
			'hsv'      => array(180, 100, 45)
		),
		'skyBlue' => array(
			'name'     => 'Sky blue',
			'html'     => '#87CEEB',
			'graphviz' => '#87CEEB',
			'rgb'      => array(53, 81, 92),
			'hsl'      => array(197, 71, 73),
			'hsv'      => array(197, 43, 92)
		),
		'skyMagenta' => array(
			'name'     => 'Sky magenta',
			'html'     => '#CF71AF',
			'graphviz' => '#CF71AF',
			'rgb'      => array(81, 44, 69),
			'hsl'      => array(320, 49, 63),
			'hsv'      => array(320, 45, 81)
		),
		'slateBlue' => array(
			'name'     => 'Slate blue',
			'html'     => '#6A5ACD',
			'graphviz' => '#6A5ACD',
			'rgb'      => array(42, 35, 80),
			'hsl'      => array(248, 53, 58),
			'hsv'      => array(248, 56, 80)
		),
		'slateGray' => array(
			'name'     => 'Slate gray',
			'html'     => '#708090',
			'graphviz' => '#708090',
			'rgb'      => array(44, 50, 56),
			'hsl'      => array(210, 13, 50),
			'hsv'      => array(210, 22, 56)
		),
		'slimyGreen' => array(
			'name'     => 'Slimy Green',
			'html'     => '#299617',
			'graphviz' => '#299617',
			'rgb'      => array(16, 59, 9),
			'hsl'      => array(111, 73, 34),
			'hsv'      => array(111, 85, 59)
		),
		'smaltDarkPowderBlue' => array(
			'name'     => 'Smalt (Dark powder blue)',
			'html'     => '#003399',
			'graphviz' => '#003399',
			'rgb'      => array(0, 20, 60),
			'hsl'      => array(220, 100, 30),
			'hsv'      => array(220, 100, 60)
		),
		'smashedPumpkin' => array(
			'name'     => 'Smashed Pumpkin',
			'html'     => '#FF6D3A',
			'graphviz' => '#FF6D3A',
			'rgb'      => array(100, 43, 23),
			'hsl'      => array(16, 100, 61),
			'hsv'      => array(16, 77, 100)
		),
		'smitten' => array(
			'name'     => 'Smitten',
			'html'     => '#C84186',
			'graphviz' => '#C84186',
			'rgb'      => array(78, 25, 53),
			'hsl'      => array(329, 55, 52),
			'hsv'      => array(329, 68, 78)
		),
		'smoke' => array(
			'name'     => 'Smoke',
			'html'     => '#738276',
			'graphviz' => '#738276',
			'rgb'      => array(45, 51, 46),
			'hsl'      => array(132, 6, 48),
			'hsv'      => array(132, 12, 51)
		),
		'smokeyTopaz' => array(
			'name'     => 'Smokey Topaz',
			'html'     => '#832A0D',
			'graphviz' => '#832A0D',
			'rgb'      => array(51, 16, 13),
			'hsl'      => array(15, 59, 32),
			'hsv'      => array(15, 90, 51)
		),
		'smokyTopaz' => array(
			'name'     => 'Smoky Topaz',
			'html'     => '#933D41',
			'graphviz' => '#933D41',
			'rgb'      => array(58, 24, 25),
			'hsl'      => array(357, 41, 41),
			'hsv'      => array(357, 59, 58)
		),
		'smokyBlack' => array(
			'name'     => 'Smoky black',
			'html'     => '#100C08',
			'graphviz' => '#100C08',
			'rgb'      => array(6, 5, 3),
			'hsl'      => array(30, 33, 5),
			'hsv'      => array(30, 50, 6)
		),
		'snow' => array(
			'name'     => 'Snow',
			'html'     => '#FFFAFA',
			'graphviz' => '#FFFAFA',
			'rgb'      => array(100, 98, 98),
			'hsl'      => array(0, 100, 99),
			'hsv'      => array(0, 2, 76)
		),
		'soap' => array(
			'name'     => 'Soap',
			'html'     => '#CEC8EF',
			'graphviz' => '#CEC8EF',
			'rgb'      => array(81, 78, 94),
			'hsl'      => array(249, 55, 86),
			'hsv'      => array(249, 16, 94)
		),
		'solidPink' => array(
			'name'     => 'Solid pink',
			'html'     => '#893843',
			'graphviz' => '#893843',
			'rgb'      => array(54, 22, 26),
			'hsl'      => array(352, 42, 38),
			'hsv'      => array(352, 59, 54)
		),
		'sonicSilver' => array(
			'name'     => 'Sonic silver',
			'html'     => '#757575',
			'graphviz' => '#757575',
			'rgb'      => array(46, 46, 46),
			'hsl'      => array(null, 0, 46),
			'hsv'      => array(null, 0, 46)
		),
		'spaceCadet' => array(
			'name'     => 'Space cadet',
			'html'     => '#1D2951',
			'graphviz' => '#1D2951',
			'rgb'      => array(11, 16, 32),
			'hsl'      => array(226, 47, 22),
			'hsv'      => array(226, 64, 32)
		),
		'spanishBistre' => array(
			'name'     => 'Spanish bistre',
			'html'     => '#807532',
			'graphviz' => '#807532',
			'rgb'      => array(50, 46, 20),
			'hsl'      => array(52, 44, 35),
			'hsv'      => array(52, 61, 50)
		),
		'spanishBlue' => array(
			'name'     => 'Spanish blue',
			'html'     => '#0070B8',
			'graphviz' => '#0070B8',
			'rgb'      => array(0, 44, 72),
			'hsl'      => array(203, 100, 36),
			'hsv'      => array(203, 100, 72)
		),
		'spanishCarmine' => array(
			'name'     => 'Spanish carmine',
			'html'     => '#D10047',
			'graphviz' => '#D10047',
			'rgb'      => array(82, 0, 28),
			'hsl'      => array(340, 100, 41),
			'hsv'      => array(340, 100, 82)
		),
		'spanishCrimson' => array(
			'name'     => 'Spanish crimson',
			'html'     => '#E51A4C',
			'graphviz' => '#E51A4C',
			'rgb'      => array(90, 10, 30),
			'hsl'      => array(345, 80, 50),
			'hsv'      => array(345, 89, 90)
		),
		'spanishGray' => array(
			'name'     => 'Spanish gray',
			'html'     => '#989898',
			'graphviz' => '#989898',
			'rgb'      => array(60, 60, 60),
			'hsl'      => array(null, 0, 60),
			'hsv'      => array(null, 0, 60)
		),
		'spanishGreen' => array(
			'name'     => 'Spanish green',
			'html'     => '#009150',
			'graphviz' => '#009150',
			'rgb'      => array(0, 57, 31),
			'hsl'      => array(153, 100, 28),
			'hsv'      => array(153, 100, 57)
		),
		'spanishOrange' => array(
			'name'     => 'Spanish orange',
			'html'     => '#E86100',
			'graphviz' => '#E86100',
			'rgb'      => array(91, 38, 0),
			'hsl'      => array(25, 100, 45),
			'hsv'      => array(25, 100, 91)
		),
		'spanishPink' => array(
			'name'     => 'Spanish pink',
			'html'     => '#F7BFBE',
			'graphviz' => '#F7BFBE',
			'rgb'      => array(97, 75, 75),
			'hsl'      => array(1, 78, 86),
			'hsv'      => array(1, 23, 97)
		),
		'spanishRed' => array(
			'name'     => 'Spanish red',
			'html'     => '#E60026',
			'graphviz' => '#E60026',
			'rgb'      => array(90, 0, 15),
			'hsl'      => array(350, 100, 45),
			'hsv'      => array(350, 100, 90)
		),
		'spanishSkyBlue' => array(
			'name'     => 'Spanish sky blue',
			'html'     => '#00FFFF',
			'graphviz' => '#00FFFF',
			'rgb'      => array(0, 100, 100),
			'hsl'      => array(180, 100, 50),
			'hsv'      => array(180, 100, 100)
		),
		'spanishViolet' => array(
			'name'     => 'Spanish violet',
			'html'     => '#4C2882',
			'graphviz' => '#4C2882',
			'rgb'      => array(30, 16, 51),
			'hsl'      => array(264, 53, 33),
			'hsv'      => array(264, 69, 51)
		),
		'spanishViridian' => array(
			'name'     => 'Spanish viridian',
			'html'     => '#007F5C',
			'graphviz' => '#007F5C',
			'rgb'      => array(0, 50, 36),
			'hsl'      => array(163, 100, 25),
			'hsv'      => array(163, 100, 50)
		),
		'spartanCrimson' => array(
			'name'     => 'Spartan Crimson',
			'html'     => '#9E1316',
			'graphviz' => '#9E1316',
			'rgb'      => array(62, 7, 9),
			'hsl'      => array(359, 79, 35),
			'hsv'      => array(359, 88, 62)
		),
		'spicyMix' => array(
			'name'     => 'Spicy mix',
			'html'     => '#8B5f4D',
			'graphviz' => '#8B5f4D',
			'rgb'      => array(55, 37, 30),
			'hsl'      => array(17, 29, 42),
			'hsv'      => array(17, 45, 55)
		),
		'spiroDiscoBall' => array(
			'name'     => 'Spiro Disco Ball',
			'html'     => '#0FC0FC',
			'graphviz' => '#0FC0FC',
			'rgb'      => array(6, 75, 99),
			'hsl'      => array(195, 98, 52),
			'hsv'      => array(195, 94, 99)
		),
		'springFrost' => array(
			'name'     => 'Spring Frost',
			'html'     => '#87FF2A',
			'graphviz' => '#87FF2A',
			'rgb'      => array(53, 100, 16),
			'hsl'      => array(94, 100, 58),
			'hsv'      => array(94, 84, 100)
		),
		'springBud' => array(
			'name'     => 'Spring bud',
			'html'     => '#A7FC00',
			'graphviz' => '#A7FC00',
			'rgb'      => array(65, 99, 0),
			'hsl'      => array(80, 100, 49),
			'hsv'      => array(80, 100, 99)
		),
		'springGreen' => array(
			'name'     => 'Spring green',
			'html'     => '#00FF7F',
			'graphviz' => '#00FF7F',
			'rgb'      => array(0, 100, 50),
			'hsl'      => array(150, 100, 50),
			'hsv'      => array(150, 100, 100)
		),
		'stPatricksBlue' => array(
			'name'     => 'St. Patrick\'s blue',
			'html'     => '#23297A',
			'graphviz' => '#23297A',
			'rgb'      => array(14, 16, 48),
			'hsl'      => array(236, 55, 31),
			'hsv'      => array(236, 71, 48)
		),
		'starCommandBlue' => array(
			'name'     => 'Star command blue',
			'html'     => '#007BB8',
			'graphviz' => '#007BB8',
			'rgb'      => array(0, 48, 72),
			'hsl'      => array(200, 100, 36),
			'hsv'      => array(200, 100, 72)
		),
		'steelTeal' => array(
			'name'     => 'Steel Teal',
			'html'     => '#5F8A8B',
			'graphviz' => '#5F8A8B',
			'rgb'      => array(37, 54, 55),
			'hsl'      => array(181, 19, 46),
			'hsv'      => array(181, 32, 55)
		),
		'steelBlue' => array(
			'name'     => 'Steel blue',
			'html'     => '#4682B4',
			'graphviz' => '#4682B4',
			'rgb'      => array(27, 51, 71),
			'hsl'      => array(207, 44, 49),
			'hsv'      => array(207, 61, 71)
		),
		'steelPink' => array(
			'name'     => 'Steel pink',
			'html'     => '#CC33CC',
			'graphviz' => '#CC33CC',
			'rgb'      => array(80, 20, 80),
			'hsl'      => array(300, 60, 50),
			'hsv'      => array(300, 75, 80)
		),
		'stilDeGrainYellow' => array(
			'name'     => 'Stil de grain yellow',
			'html'     => '#FADA5E',
			'graphviz' => '#FADA5E',
			'rgb'      => array(98, 85, 37),
			'hsl'      => array(48, 94, 67),
			'hsv'      => array(48, 62, 98)
		),
		'stizza' => array(
			'name'     => 'Stizza',
			'html'     => '#990000',
			'graphviz' => '#990000',
			'rgb'      => array(60, 0, 0),
			'hsl'      => array(0, 100, 30),
			'hsv'      => array(0, 100, 60)
		),
		'stormcloud' => array(
			'name'     => 'Stormcloud',
			'html'     => '#4F666A',
			'graphviz' => '#4F666A',
			'rgb'      => array(31, 40, 42),
			'hsl'      => array(189, 15, 36),
			'hsv'      => array(189, 25, 42)
		),
		'straw' => array(
			'name'     => 'Straw',
			'html'     => '#E4D96F',
			'graphviz' => '#E4D96F',
			'rgb'      => array(89, 85, 44),
			'hsl'      => array(54, 68, 66),
			'hsv'      => array(54, 51, 89)
		),
		'strawberry' => array(
			'name'     => 'Strawberry',
			'html'     => '#FC5A8D',
			'graphviz' => '#FC5A8D',
			'rgb'      => array(99, 35, 55),
			'hsl'      => array(341, 96, 67),
			'hsv'      => array(341, 64, 99)
		),
		'sugarPlum' => array(
			'name'     => 'Sugar Plum',
			'html'     => '#914E75',
			'graphviz' => '#914E75',
			'rgb'      => array(57, 31, 46),
			'hsl'      => array(325, 30, 44),
			'hsv'      => array(325, 46, 57)
		),
		'sunburntCyclops' => array(
			'name'     => 'Sunburnt Cyclops',
			'html'     => '#FF404C',
			'graphviz' => '#FF404C',
			'rgb'      => array(100, 25, 30),
			'hsl'      => array(356, 100, 63),
			'hsv'      => array(356, 75, 100)
		),
		'sunglow' => array(
			'name'     => 'Sunglow',
			'html'     => '#FFCC33',
			'graphviz' => '#FFCC33',
			'rgb'      => array(100, 80, 20),
			'hsl'      => array(45, 100, 60),
			'hsv'      => array(45, 80, 100)
		),
		'sunny' => array(
			'name'     => 'Sunny',
			'html'     => '#F2F27A',
			'graphviz' => '#F2F27A',
			'rgb'      => array(95, 95, 48),
			'hsl'      => array(60, 82, 71),
			'hsv'      => array(60, 50, 95)
		),
		'sunray' => array(
			'name'     => 'Sunray',
			'html'     => '#E3AB57',
			'graphviz' => '#E3AB57',
			'rgb'      => array(89, 67, 34),
			'hsl'      => array(36, 71, 62),
			'hsv'      => array(36, 62, 89)
		),
		'sunset' => array(
			'name'     => 'Sunset',
			'html'     => '#FAD6A5',
			'graphviz' => '#FAD6A5',
			'rgb'      => array(98, 84, 65),
			'hsl'      => array(35, 89, 81),
			'hsv'      => array(35, 34, 98)
		),
		'sunsetOrange' => array(
			'name'     => 'Sunset orange',
			'html'     => '#FD5E53',
			'graphviz' => '#FD5E53',
			'rgb'      => array(99, 37, 33),
			'hsl'      => array(4, 98, 66),
			'hsv'      => array(4, 67, 99)
		),
		'superPink' => array(
			'name'     => 'Super pink',
			'html'     => '#CF6BA9',
			'graphviz' => '#CF6BA9',
			'rgb'      => array(81, 42, 66),
			'hsl'      => array(323, 51, 62),
			'hsv'      => array(323, 48, 81)
		),
		'sweetBrown' => array(
			'name'     => 'Sweet Brown',
			'html'     => '#A83731',
			'graphviz' => '#A83731',
			'rgb'      => array(66, 22, 19),
			'hsl'      => array(3, 55, 43),
			'hsv'      => array(3, 71, 66)
		),
		'tan' => array(
			'name'     => 'Tan',
			'html'     => '#D2B48C',
			'graphviz' => '#D2B48C',
			'rgb'      => array(82, 71, 55),
			'hsl'      => array(34, 44, 69),
			'hsv'      => array(34, 33, 82)
		),
		'tangelo' => array(
			'name'     => 'Tangelo',
			'html'     => '#F94D00',
			'graphviz' => '#F94D00',
			'rgb'      => array(98, 30, 0),
			'hsl'      => array(19, 100, 49),
			'hsv'      => array(19, 100, 98)
		),
		'tangerine' => array(
			'name'     => 'Tangerine',
			'html'     => '#F28500',
			'graphviz' => '#F28500',
			'rgb'      => array(95, 52, 0),
			'hsl'      => array(33, 100, 47),
			'hsv'      => array(33, 100, 95)
		),
		'tangerineYellow' => array(
			'name'     => 'Tangerine yellow',
			'html'     => '#FFCC00',
			'graphviz' => '#FFCC00',
			'rgb'      => array(100, 80, 0),
			'hsl'      => array(48, 100, 50),
			'hsv'      => array(48, 100, 100)
		),
		'tangoPink' => array(
			'name'     => 'Tango pink',
			'html'     => '#E4717A',
			'graphviz' => '#E4717A',
			'rgb'      => array(89, 44, 48),
			'hsl'      => array(355, 68, 67),
			'hsv'      => array(355, 50, 89)
		),
		'tartOrange' => array(
			'name'     => 'Tart Orange',
			'html'     => '#FB4D46',
			'graphviz' => '#FB4D46',
			'rgb'      => array(98, 30, 27),
			'hsl'      => array(2, 96, 63),
			'hsv'      => array(2, 72, 98)
		),
		'taupe' => array(
			'name'     => 'Taupe',
			'html'     => '#483C32',
			'graphviz' => '#483C32',
			'rgb'      => array(28, 24, 20),
			'hsl'      => array(27, 18, 24),
			'hsv'      => array(27, 31, 28)
		),
		'taupeGray' => array(
			'name'     => 'Taupe gray',
			'html'     => '#8B8589',
			'graphviz' => '#8B8589',
			'rgb'      => array(55, 52, 54),
			'hsl'      => array(320, 3, 53),
			'hsv'      => array(320, 4, 55)
		),
		'teaGreen' => array(
			'name'     => 'Tea green',
			'html'     => '#D0F0C0',
			'graphviz' => '#D0F0C0',
			'rgb'      => array(82, 94, 75),
			'hsl'      => array(100, 62, 85),
			'hsv'      => array(100, 20, 94)
		),
		'teaRose' => array(
			'name'     => 'Tea rose',
			'html'     => '#F4C2C2',
			'graphviz' => '#F4C2C2',
			'rgb'      => array(96, 76, 76),
			'hsl'      => array(0, 69, 86),
			'hsv'      => array(0, 20, 96)
		),
		'teal' => array(
			'name'     => 'Teal',
			'html'     => '#008080',
			'graphviz' => '#008080',
			'rgb'      => array(0, 50, 50),
			'hsl'      => array(180, 100, 25),
			'hsv'      => array(180, 100, 50)
		),
		'tealBlue' => array(
			'name'     => 'Teal blue',
			'html'     => '#367588',
			'graphviz' => '#367588',
			'rgb'      => array(21, 46, 53),
			'hsl'      => array(194, 43, 37),
			'hsv'      => array(194, 60, 53)
		),
		'tealDeer' => array(
			'name'     => 'Teal deer',
			'html'     => '#99E6B3',
			'graphviz' => '#99E6B3',
			'rgb'      => array(60, 90, 70),
			'hsl'      => array(140, 61, 75),
			'hsv'      => array(140, 33, 90)
		),
		'tealGreen' => array(
			'name'     => 'Teal green',
			'html'     => '#00827F',
			'graphviz' => '#00827F',
			'rgb'      => array(0, 51, 50),
			'hsl'      => array(179, 100, 25),
			'hsv'      => array(179, 100, 51)
		),
		'telemagenta' => array(
			'name'     => 'Telemagenta',
			'html'     => '#CF3476',
			'graphviz' => '#CF3476',
			'rgb'      => array(81, 20, 46),
			'hsl'      => array(334, 62, 51),
			'hsv'      => array(334, 75, 81)
		),
		'tenné' => array(
			'name'     => 'Tenné',
			'html'     => '#CD5700',
			'graphviz' => '#CD5700',
			'rgb'      => array(80, 34, 0),
			'hsl'      => array(25, 100, 40),
			'hsv'      => array(25, 100, 80)
		),
		'terraCotta' => array(
			'name'     => 'Terra cotta',
			'html'     => '#E2725B',
			'graphviz' => '#E2725B',
			'rgb'      => array(89, 45, 36),
			'hsl'      => array(10, 70, 62),
			'hsv'      => array(10, 60, 89)
		),
		'thistle' => array(
			'name'     => 'Thistle',
			'html'     => '#D8BFD8',
			'graphviz' => '#D8BFD8',
			'rgb'      => array(85, 75, 85),
			'hsl'      => array(300, 24, 80),
			'hsv'      => array(300, 12, 85)
		),
		'thulianPink' => array(
			'name'     => 'Thulian pink',
			'html'     => '#DE6FA1',
			'graphviz' => '#DE6FA1',
			'rgb'      => array(87, 44, 63),
			'hsl'      => array(333, 63, 65),
			'hsv'      => array(333, 50, 87)
		),
		'tickleMePink' => array(
			'name'     => 'Tickle Me Pink',
			'html'     => '#FC89AC',
			'graphviz' => '#FC89AC',
			'rgb'      => array(99, 54, 67),
			'hsl'      => array(342, 95, 76),
			'hsv'      => array(342, 46, 99)
		),
		'tiffanyBlue' => array(
			'name'     => 'Tiffany Blue',
			'html'     => '#0ABAB5',
			'graphviz' => '#0ABAB5',
			'rgb'      => array(4, 73, 71),
			'hsl'      => array(178, 90, 38),
			'hsv'      => array(178, 95, 73)
		),
		'tigersEye' => array(
			'name'     => 'Tiger\'s eye',
			'html'     => '#E08D3C',
			'graphviz' => '#E08D3C',
			'rgb'      => array(88, 55, 24),
			'hsl'      => array(30, 73, 56),
			'hsv'      => array(30, 73, 88)
		),
		'timberwolf' => array(
			'name'     => 'Timberwolf',
			'html'     => '#DBD7D2',
			'graphviz' => '#DBD7D2',
			'rgb'      => array(86, 84, 82),
			'hsl'      => array(33, 11, 84),
			'hsv'      => array(33, 4, 86)
		),
		'titaniumYellow' => array(
			'name'     => 'Titanium yellow',
			'html'     => '#EEE600',
			'graphviz' => '#EEE600',
			'rgb'      => array(93, 90, 0),
			'hsl'      => array(58, 100, 47),
			'hsv'      => array(58, 100, 93)
		),
		'tomato' => array(
			'name'     => 'Tomato',
			'html'     => '#FF6347',
			'graphviz' => '#FF6347',
			'rgb'      => array(100, 39, 28),
			'hsl'      => array(9, 100, 64),
			'hsv'      => array(9, 72, 100)
		),
		'toolbox' => array(
			'name'     => 'Toolbox',
			'html'     => '#746CC0',
			'graphviz' => '#746CC0',
			'rgb'      => array(45, 42, 75),
			'hsl'      => array(246, 40, 59),
			'hsv'      => array(246, 44, 75)
		),
		'topaz' => array(
			'name'     => 'Topaz',
			'html'     => '#FFC87C',
			'graphviz' => '#FFC87C',
			'rgb'      => array(100, 78, 49),
			'hsl'      => array(35, 100, 74),
			'hsv'      => array(35, 51, 100)
		),
		'tractorRed' => array(
			'name'     => 'Tractor red',
			'html'     => '#FD0E35',
			'graphviz' => '#FD0E35',
			'rgb'      => array(99, 5, 21),
			'hsl'      => array(350, 98, 52),
			'hsv'      => array(350, 94, 99)
		),
		'trolleyGrey' => array(
			'name'     => 'Trolley Grey',
			'html'     => '#808080',
			'graphviz' => '#808080',
			'rgb'      => array(50, 50, 50),
			'hsl'      => array(null, 0, 50),
			'hsv'      => array(null, 0, 50)
		),
		'tropicalRainForest' => array(
			'name'     => 'Tropical rain forest',
			'html'     => '#00755E',
			'graphviz' => '#00755E',
			'rgb'      => array(0, 46, 37),
			'hsl'      => array(168, 100, 23),
			'hsv'      => array(168, 100, 46)
		),
		'tropicalViolet' => array(
			'name'     => 'Tropical violet',
			'html'     => '#CDA4DE',
			'graphviz' => '#CDA4DE',
			'rgb'      => array(80, 64, 87),
			'hsl'      => array(282, 47, 76),
			'hsv'      => array(282, 26, 87)
		),
		'trueBlue' => array(
			'name'     => 'True Blue',
			'html'     => '#0073CF',
			'graphviz' => '#0073CF',
			'rgb'      => array(0, 45, 81),
			'hsl'      => array(207, 100, 41),
			'hsv'      => array(207, 100, 81)
		),
		'tuftsBlue' => array(
			'name'     => 'Tufts Blue',
			'html'     => '#417DC1',
			'graphviz' => '#417DC1',
			'rgb'      => array(25, 49, 76),
			'hsl'      => array(212, 51, 51),
			'hsv'      => array(212, 66, 76)
		),
		'tulip' => array(
			'name'     => 'Tulip',
			'html'     => '#FF878D',
			'graphviz' => '#FF878D',
			'rgb'      => array(100, 53, 55),
			'hsl'      => array(357, 100, 76),
			'hsv'      => array(357, 47, 100)
		),
		'tumbleweed' => array(
			'name'     => 'Tumbleweed',
			'html'     => '#DEAA88',
			'graphviz' => '#DEAA88',
			'rgb'      => array(87, 67, 53),
			'hsl'      => array(24, 57, 70),
			'hsv'      => array(24, 39, 87)
		),
		'turkishRose' => array(
			'name'     => 'Turkish rose',
			'html'     => '#B57281',
			'graphviz' => '#B57281',
			'rgb'      => array(71, 45, 51),
			'hsl'      => array(347, 31, 58),
			'hsv'      => array(347, 37, 71)
		),
		'turquoise' => array(
			'name'     => 'Turquoise',
			'html'     => '#40E0D0',
			'graphviz' => '#40E0D0',
			'rgb'      => array(25, 88, 82),
			'hsl'      => array(174, 72, 56),
			'hsv'      => array(174, 71, 88)
		),
		'turquoiseSurf' => array(
			'name'     => 'Turquoise Surf',
			'html'     => '#00C5CD',
			'graphviz' => '#00C5CD',
			'rgb'      => array(0, 77, 80),
			'hsl'      => array(182, 100, 40),
			'hsv'      => array(182, 100, 80)
		),
		'turquoiseBlue' => array(
			'name'     => 'Turquoise blue',
			'html'     => '#00FFEF',
			'graphviz' => '#00FFEF',
			'rgb'      => array(0, 100, 94),
			'hsl'      => array(176, 100, 50),
			'hsv'      => array(176, 100, 100)
		),
		'turquoiseGreen' => array(
			'name'     => 'Turquoise green',
			'html'     => '#A0D6B4',
			'graphviz' => '#A0D6B4',
			'rgb'      => array(63, 84, 71),
			'hsl'      => array(142, 40, 73),
			'hsv'      => array(142, 25, 84)
		),
		'turtleGreen' => array(
			'name'     => 'Turtle green',
			'html'     => '#8A9A5B',
			'graphviz' => '#8A9A5B',
			'rgb'      => array(54, 60, 36),
			'hsl'      => array(75, 26, 48),
			'hsv'      => array(75, 41, 60)
		),
		'tuscan' => array(
			'name'     => 'Tuscan',
			'html'     => '#FAD6A5',
			'graphviz' => '#FAD6A5',
			'rgb'      => array(98, 84, 65),
			'hsl'      => array(35, 89, 81),
			'hsv'      => array(35, 34, 98)
		),
		'tuscanBrown' => array(
			'name'     => 'Tuscan brown',
			'html'     => '#6F4E37',
			'graphviz' => '#6F4E37',
			'rgb'      => array(44, 31, 22),
			'hsl'      => array(25, 34, 33),
			'hsv'      => array(25, 50, 44)
		),
		'tuscanRed' => array(
			'name'     => 'Tuscan red',
			'html'     => '#7C4848',
			'graphviz' => '#7C4848',
			'rgb'      => array(49, 28, 28),
			'hsl'      => array(0, 27, 38),
			'hsv'      => array(0, 42, 49)
		),
		'tuscanTan' => array(
			'name'     => 'Tuscan tan',
			'html'     => '#A67B5B',
			'graphviz' => '#A67B5B',
			'rgb'      => array(65, 48, 36),
			'hsl'      => array(26, 30, 50),
			'hsv'      => array(26, 45, 65)
		),
		'tuscany' => array(
			'name'     => 'Tuscany',
			'html'     => '#C09999',
			'graphviz' => '#C09999',
			'rgb'      => array(75, 60, 60),
			'hsl'      => array(0, 24, 68),
			'hsv'      => array(0, 20, 75)
		),
		'twilightLavender' => array(
			'name'     => 'Twilight lavender',
			'html'     => '#8A496B',
			'graphviz' => '#8A496B',
			'rgb'      => array(54, 29, 42),
			'hsl'      => array(329, 31, 41),
			'hsv'      => array(329, 47, 54)
		),
		'tyrianPurple' => array(
			'name'     => 'Tyrian purple',
			'html'     => '#66023C',
			'graphviz' => '#66023C',
			'rgb'      => array(40, 1, 24),
			'hsl'      => array(325, 96, 20),
			'hsv'      => array(325, 98, 40)
		),
		'uaBlue' => array(
			'name'     => 'UA blue',
			'html'     => '#0033AA',
			'graphviz' => '#0033AA',
			'rgb'      => array(0, 20, 67),
			'hsl'      => array(222, 100, 33),
			'hsv'      => array(222, 100, 67)
		),
		'uaRed' => array(
			'name'     => 'UA red',
			'html'     => '#D9004C',
			'graphviz' => '#D9004C',
			'rgb'      => array(85, 0, 30),
			'hsl'      => array(339, 100, 43),
			'hsv'      => array(339, 100, 85)
		),
		'uclaBlue' => array(
			'name'     => 'UCLA Blue',
			'html'     => '#536895',
			'graphviz' => '#536895',
			'rgb'      => array(33, 41, 58),
			'hsl'      => array(221, 28, 46),
			'hsv'      => array(221, 44, 58)
		),
		'uclaGold' => array(
			'name'     => 'UCLA Gold',
			'html'     => '#FFB300',
			'graphviz' => '#FFB300',
			'rgb'      => array(100, 70, 0),
			'hsl'      => array(42, 100, 50),
			'hsv'      => array(42, 100, 100)
		),
		'ufoGreen' => array(
			'name'     => 'UFO Green',
			'html'     => '#3CD070',
			'graphviz' => '#3CD070',
			'rgb'      => array(24, 82, 44),
			'hsl'      => array(141, 61, 53),
			'hsv'      => array(141, 71, 82)
		),
		'upForestGreen' => array(
			'name'     => 'UP Forest green',
			'html'     => '#014421',
			'graphviz' => '#014421',
			'rgb'      => array(0, 27, 13),
			'hsl'      => array(149, 97, 14),
			'hsv'      => array(149, 99, 27)
		),
		'upMaroon' => array(
			'name'     => 'UP Maroon',
			'html'     => '#7B1113',
			'graphviz' => '#7B1113',
			'rgb'      => array(48, 7, 7),
			'hsl'      => array(359, 76, 27),
			'hsv'      => array(359, 86, 48)
		),
		'usafaBlue' => array(
			'name'     => 'USAFA blue',
			'html'     => '#004F98',
			'graphviz' => '#004F98',
			'rgb'      => array(0, 31, 60),
			'hsl'      => array(209, 100, 30),
			'hsv'      => array(209, 100, 60)
		),
		'uscCardinal' => array(
			'name'     => 'USC Cardinal',
			'html'     => '#990000',
			'graphviz' => '#990000',
			'rgb'      => array(60, 0, 0),
			'hsl'      => array(0, 100, 30),
			'hsv'      => array(0, 100, 60)
		),
		'uscGold' => array(
			'name'     => 'USC Gold',
			'html'     => '#FFCC00',
			'graphviz' => '#FFCC00',
			'rgb'      => array(100, 80, 0),
			'hsl'      => array(48, 100, 50),
			'hsv'      => array(48, 100, 100)
		),
		'ube' => array(
			'name'     => 'Ube',
			'html'     => '#8878C3',
			'graphviz' => '#8878C3',
			'rgb'      => array(53, 47, 76),
			'hsl'      => array(253, 39, 62),
			'hsv'      => array(253, 38, 76)
		),
		'ultraPink' => array(
			'name'     => 'Ultra pink',
			'html'     => '#FF6FFF',
			'graphviz' => '#FF6FFF',
			'rgb'      => array(100, 44, 100),
			'hsl'      => array(300, 100, 72),
			'hsv'      => array(300, 56, 100)
		),
		'ultraRed' => array(
			'name'     => 'Ultra red',
			'html'     => '#FC6C85',
			'graphviz' => '#FC6C85',
			'rgb'      => array(99, 42, 52),
			'hsl'      => array(350, 96, 71),
			'hsv'      => array(350, 57, 99)
		),
		'ultramarine' => array(
			'name'     => 'Ultramarine',
			'html'     => '#3F00FF',
			'graphviz' => '#3F00FF',
			'rgb'      => array(7, 4, 56),
			'hsl'      => array(244, 87, 30),
			'hsv'      => array(244, 93, 56)
		),
		'ultramarineBlue' => array(
			'name'     => 'Ultramarine blue',
			'html'     => '#4166F5',
			'graphviz' => '#4166F5',
			'rgb'      => array(25, 40, 96),
			'hsl'      => array(228, 90, 61),
			'hsv'      => array(228, 73, 96)
		),
		'umber' => array(
			'name'     => 'Umber',
			'html'     => '#635147',
			'graphviz' => '#635147',
			'rgb'      => array(39, 32, 28),
			'hsl'      => array(21, 16, 33),
			'hsv'      => array(21, 28, 39)
		),
		'unbleachedSilk' => array(
			'name'     => 'Unbleached silk',
			'html'     => '#FFDDCA',
			'graphviz' => '#FFDDCA',
			'rgb'      => array(100, 87, 79),
			'hsl'      => array(22, 100, 90),
			'hsv'      => array(22, 21, 100)
		),
		'unitedNationsBlue' => array(
			'name'     => 'United Nations blue',
			'html'     => '#5B92E5',
			'graphviz' => '#5B92E5',
			'rgb'      => array(36, 57, 90),
			'hsl'      => array(216, 73, 63),
			'hsv'      => array(216, 60, 90)
		),
		'universityOfCaliforniaGold' => array(
			'name'     => 'University of California Gold',
			'html'     => '#B78727',
			'graphviz' => '#B78727',
			'rgb'      => array(72, 53, 15),
			'hsl'      => array(40, 65, 44),
			'hsv'      => array(40, 79, 72)
		),
		'universityOfTennesseeOrange' => array(
			'name'     => 'University of Tennessee Orange',
			'html'     => '#F77F00',
			'graphviz' => '#F77F00',
			'rgb'      => array(97, 50, 0),
			'hsl'      => array(31, 100, 48),
			'hsv'      => array(31, 100, 97)
		),
		'unmellowYellow' => array(
			'name'     => 'Unmellow yellow',
			'html'     => '#FFFF66',
			'graphviz' => '#FFFF66',
			'rgb'      => array(100, 100, 40),
			'hsl'      => array(60, 100, 70),
			'hsv'      => array(60, 60, 100)
		),
		'upsdellRed' => array(
			'name'     => 'Upsdell red',
			'html'     => '#AE2029',
			'graphviz' => '#AE2029',
			'rgb'      => array(68, 13, 16),
			'hsl'      => array(356, 69, 40),
			'hsv'      => array(356, 82, 68)
		),
		'urobilin' => array(
			'name'     => 'Urobilin',
			'html'     => '#E1AD21',
			'graphviz' => '#E1AD21',
			'rgb'      => array(88, 68, 13),
			'hsl'      => array(44, 76, 51),
			'hsv'      => array(44, 85, 88)
		),
		'utahCrimson' => array(
			'name'     => 'Utah Crimson',
			'html'     => '#D3003F',
			'graphviz' => '#D3003F',
			'rgb'      => array(83, 0, 25),
			'hsl'      => array(342, 100, 41),
			'hsv'      => array(342, 100, 83)
		),
		'vanDykeBrown' => array(
			'name'     => 'Van Dyke Brown',
			'html'     => '#664228',
			'graphviz' => '#664228',
			'rgb'      => array(40, 26, 16),
			'hsl'      => array(25, 44, 28),
			'hsv'      => array(25, 60, 0)
		),
		'vanilla' => array(
			'name'     => 'Vanilla',
			'html'     => '#F3E5AB',
			'graphviz' => '#F3E5AB',
			'rgb'      => array(95, 90, 67),
			'hsl'      => array(48, 75, 81),
			'hsv'      => array(48, 30, 95)
		),
		'vanillaIce' => array(
			'name'     => 'Vanilla ice',
			'html'     => '#F38FA9',
			'graphviz' => '#F38FA9',
			'rgb'      => array(95, 56, 66),
			'hsl'      => array(344, 81, 76),
			'hsv'      => array(344, 41, 95)
		),
		'vegasGold' => array(
			'name'     => 'Vegas gold',
			'html'     => '#C5B358',
			'graphviz' => '#C5B358',
			'rgb'      => array(77, 70, 35),
			'hsl'      => array(50, 48, 56),
			'hsv'      => array(50, 55, 77)
		),
		'venetianRed' => array(
			'name'     => 'Venetian red',
			'html'     => '#C80815',
			'graphviz' => '#C80815',
			'rgb'      => array(78, 3, 8),
			'hsl'      => array(356, 92, 41),
			'hsv'      => array(356, 96, 78)
		),
		'verdigris' => array(
			'name'     => 'Verdigris',
			'html'     => '#43B3AE',
			'graphviz' => '#43B3AE',
			'rgb'      => array(26, 70, 68),
			'hsl'      => array(177, 46, 48),
			'hsv'      => array(177, 63, 70)
		),
		'vermilion' => array(
			'name'     => 'Vermilion',
			'html'     => '#D9381E',
			'graphviz' => '#D9381E',
			'rgb'      => array(85, 22, 12),
			'hsl'      => array(8, 76, 48),
			'hsv'      => array(8, 86, 85)
		),
		'veronica' => array(
			'name'     => 'Veronica',
			'html'     => '#A020F0',
			'graphviz' => '#A020F0',
			'rgb'      => array(63, 13, 94),
			'hsl'      => array(277, 87, 53),
			'hsv'      => array(277, 87, 94)
		),
		'veryLightAzure' => array(
			'name'     => 'Very light azure',
			'html'     => '#74BBFB',
			'graphviz' => '#74BBFB',
			'rgb'      => array(45, 73, 98),
			'hsl'      => array(208, 94, 72),
			'hsv'      => array(208, 54, 98)
		),
		'veryLightBlue' => array(
			'name'     => 'Very light blue',
			'html'     => '#6666FF',
			'graphviz' => '#6666FF',
			'rgb'      => array(40, 40, 100),
			'hsl'      => array(240, 100, 70),
			'hsv'      => array(240, 60, 100)
		),
		'veryLightMalachiteGreen' => array(
			'name'     => 'Very light malachite green',
			'html'     => '#64E986',
			'graphviz' => '#64E986',
			'rgb'      => array(39, 91, 53),
			'hsl'      => array(135, 75, 65),
			'hsv'      => array(135, 57, 91)
		),
		'veryLightTangelo' => array(
			'name'     => 'Very light tangelo',
			'html'     => '#FFB077',
			'graphviz' => '#FFB077',
			'rgb'      => array(100, 69, 47),
			'hsl'      => array(25, 100, 73),
			'hsv'      => array(25, 53, 100)
		),
		'veryPaleOrange' => array(
			'name'     => 'Very pale orange',
			'html'     => '#FFDFBF',
			'graphviz' => '#FFDFBF',
			'rgb'      => array(100, 87, 75),
			'hsl'      => array(30, 100, 88),
			'hsv'      => array(30, 25, 100)
		),
		'veryPaleYellow' => array(
			'name'     => 'Very pale yellow',
			'html'     => '#FFFFBF',
			'graphviz' => '#FFFFBF',
			'rgb'      => array(100, 100, 75),
			'hsl'      => array(60, 100, 88),
			'hsv'      => array(60, 25, 100)
		),
		'violet' => array(
			'name'     => 'Violet',
			'html'     => '#8F00FF',
			'graphviz' => '#8F00FF',
			'rgb'      => array(56, 0, 100),
			'hsl'      => array(274, 100, 50),
			'hsv'      => array(274, 100, 100)
		),
		'violetRyb' => array(
			'name'     => 'Violet (RYB)',
			'html'     => '#8601AF',
			'graphviz' => '#8601AF',
			'rgb'      => array(53, 0, 69),
			'hsl'      => array(286, 99, 35),
			'hsv'      => array(286, 99, 69)
		),
		'violetColorWheel' => array(
			'name'     => 'Violet (color wheel)',
			'html'     => '#7F00FF',
			'graphviz' => '#7F00FF',
			'rgb'      => array(50, 0, 100),
			'hsl'      => array(270, 100, 50),
			'hsv'      => array(270, 100, 100)
		),
		'violetWeb' => array(
			'name'     => 'Violet (web)',
			'html'     => '#EE82EE',
			'graphviz' => '#EE82EE',
			'rgb'      => array(93, 51, 93),
			'hsl'      => array(300, 76, 72),
			'hsv'      => array(300, 45, 93)
		),
		'violetBlue' => array(
			'name'     => 'Violet-blue',
			'html'     => '#324AB2',
			'graphviz' => '#324AB2',
			'rgb'      => array(20, 29, 70),
			'hsl'      => array(229, 56, 45),
			'hsv'      => array(229, 72, 70)
		),
		'violetRed' => array(
			'name'     => 'Violet-red',
			'html'     => '#F75394',
			'graphviz' => '#F75394',
			'rgb'      => array(97, 33, 58),
			'hsl'      => array(336, 91, 65),
			'hsv'      => array(336, 66, 97)
		),
		'viridian' => array(
			'name'     => 'Viridian',
			'html'     => '#40826D',
			'graphviz' => '#40826D',
			'rgb'      => array(25, 51, 43),
			'hsl'      => array(161, 34, 38),
			'hsv'      => array(161, 51, 51)
		),
		'viridianGreen' => array(
			'name'     => 'Viridian green',
			'html'     => '#009698',
			'graphviz' => '#009698',
			'rgb'      => array(0, 59, 60),
			'hsl'      => array(181, 100, 30),
			'hsv'      => array(181, 100, 60)
		),
		'vistaBlue' => array(
			'name'     => 'Vista blue',
			'html'     => '#7C9ED9',
			'graphviz' => '#7C9ED9',
			'rgb'      => array(49, 62, 85),
			'hsl'      => array(218, 55, 67),
			'hsv'      => array(218, 43, 85)
		),
		'vividAmber' => array(
			'name'     => 'Vivid amber',
			'html'     => '#CC9900',
			'graphviz' => '#CC9900',
			'rgb'      => array(80, 60, 0),
			'hsl'      => array(45, 100, 40),
			'hsv'      => array(45, 100, 80)
		),
		'vividAuburn' => array(
			'name'     => 'Vivid auburn',
			'html'     => '#922724',
			'graphviz' => '#922724',
			'rgb'      => array(57, 15, 14),
			'hsl'      => array(2, 60, 36),
			'hsv'      => array(2, 75, 57)
		),
		'vividBurgundy' => array(
			'name'     => 'Vivid burgundy',
			'html'     => '#9F1D35',
			'graphviz' => '#9F1D35',
			'rgb'      => array(62, 11, 21),
			'hsl'      => array(349, 69, 37),
			'hsv'      => array(349, 82, 62)
		),
		'vividCerise' => array(
			'name'     => 'Vivid cerise',
			'html'     => '#DA1D81',
			'graphviz' => '#DA1D81',
			'rgb'      => array(85, 11, 51),
			'hsl'      => array(328, 77, 48),
			'hsv'      => array(328, 87, 85)
		),
		'vividCerulean' => array(
			'name'     => 'Vivid cerulean',
			'html'     => '#00AAEE',
			'graphviz' => '#00AAEE',
			'rgb'      => array(0, 67, 93),
			'hsl'      => array(197, 100, 47),
			'hsv'      => array(197, 100, 93)
		),
		'vividCrimson' => array(
			'name'     => 'Vivid crimson',
			'html'     => '#CC0033',
			'graphviz' => '#CC0033',
			'rgb'      => array(80, 0, 20),
			'hsl'      => array(345, 100, 40),
			'hsv'      => array(345, 100, 80)
		),
		'vividGamboge' => array(
			'name'     => 'Vivid gamboge',
			'html'     => '#FF9900',
			'graphviz' => '#FF9900',
			'rgb'      => array(100, 60, 0),
			'hsl'      => array(36, 100, 50),
			'hsv'      => array(36, 100, 100)
		),
		'vividLimeGreen' => array(
			'name'     => 'Vivid lime green',
			'html'     => '#A6D608',
			'graphviz' => '#A6D608',
			'rgb'      => array(65, 84, 3),
			'hsl'      => array(74, 93, 44),
			'hsv'      => array(74, 96, 84)
		),
		'vividMalachite' => array(
			'name'     => 'Vivid malachite',
			'html'     => '#00CC33',
			'graphviz' => '#00CC33',
			'rgb'      => array(0, 80, 20),
			'hsl'      => array(135, 100, 40),
			'hsv'      => array(135, 100, 80)
		),
		'vividMulberry' => array(
			'name'     => 'Vivid mulberry',
			'html'     => '#B80CE3',
			'graphviz' => '#B80CE3',
			'rgb'      => array(72, 5, 89),
			'hsl'      => array(288, 90, 47),
			'hsv'      => array(288, 95, 89)
		),
		'vividOrange' => array(
			'name'     => 'Vivid orange',
			'html'     => '#FF5F00',
			'graphviz' => '#FF5F00',
			'rgb'      => array(100, 37, 0),
			'hsl'      => array(22, 100, 50),
			'hsv'      => array(22, 100, 100)
		),
		'vividOrangePeel' => array(
			'name'     => 'Vivid orange peel',
			'html'     => '#FFA000',
			'graphviz' => '#FFA000',
			'rgb'      => array(100, 63, 0),
			'hsl'      => array(18, 100, 50),
			'hsv'      => array(18, 100, 100)
		),
		'vividOrchid' => array(
			'name'     => 'Vivid orchid',
			'html'     => '#CC00FF',
			'graphviz' => '#CC00FF',
			'rgb'      => array(80, 0, 100),
			'hsl'      => array(288, 100, 50),
			'hsv'      => array(288, 100, 100)
		),
		'vividRaspberry' => array(
			'name'     => 'Vivid raspberry',
			'html'     => '#FF006C',
			'graphviz' => '#FF006C',
			'rgb'      => array(100, 0, 42),
			'hsl'      => array(335, 100, 50),
			'hsv'      => array(335, 100, 100)
		),
		'vividRed' => array(
			'name'     => 'Vivid red',
			'html'     => '#F70D1A',
			'graphviz' => '#F70D1A',
			'rgb'      => array(97, 5, 10),
			'hsl'      => array(357, 94, 51),
			'hsv'      => array(357, 95, 97)
		),
		'vividRedTangelo' => array(
			'name'     => 'Vivid red-tangelo',
			'html'     => '#DF6124',
			'graphviz' => '#DF6124',
			'rgb'      => array(87, 38, 14),
			'hsl'      => array(20, 75, 51),
			'hsv'      => array(20, 84, 87)
		),
		'vividSkyBlue' => array(
			'name'     => 'Vivid sky blue',
			'html'     => '#00CCFF',
			'graphviz' => '#00CCFF',
			'rgb'      => array(0, 80, 100),
			'hsl'      => array(192, 100, 50),
			'hsv'      => array(192, 100, 100)
		),
		'vividTangelo' => array(
			'name'     => 'Vivid tangelo',
			'html'     => '#F07427',
			'graphviz' => '#F07427',
			'rgb'      => array(94, 45, 15),
			'hsl'      => array(23, 87, 55),
			'hsv'      => array(23, 84, 94)
		),
		'vividTangerine' => array(
			'name'     => 'Vivid tangerine',
			'html'     => '#FFA089',
			'graphviz' => '#FFA089',
			'rgb'      => array(100, 63, 54),
			'hsl'      => array(12, 100, 77),
			'hsv'      => array(12, 46, 100)
		),
		'vividVermilion' => array(
			'name'     => 'Vivid vermilion',
			'html'     => '#E56024',
			'graphviz' => '#E56024',
			'rgb'      => array(90, 38, 14),
			'hsl'      => array(19, 79, 52),
			'hsv'      => array(19, 84, 90)
		),
		'vividViolet' => array(
			'name'     => 'Vivid violet',
			'html'     => '#9F00FF',
			'graphviz' => '#9F00FF',
			'rgb'      => array(62, 0, 100),
			'hsl'      => array(277, 100, 50),
			'hsv'      => array(277, 100, 100)
		),
		'vividYellow' => array(
			'name'     => 'Vivid yellow',
			'html'     => '#FFE302',
			'graphviz' => '#FFE302',
			'rgb'      => array(100, 89, 1),
			'hsl'      => array(53, 100, 50),
			'hsv'      => array(53, 99, 100)
		),
		'volt' => array(
			'name'     => 'Volt',
			'html'     => '#CEFF00',
			'graphviz' => '#CEFF00',
			'rgb'      => array(80, 100, 0),
			'hsl'      => array(72, 100, 50),
			'hsv'      => array(72, 100, 100)
		),
		'wageningenGreen' => array(
			'name'     => 'Wageningen Green',
			'html'     => '#34B233',
			'graphviz' => '#34B233',
			'rgb'      => array(20, 70, 20),
			'hsl'      => array(120, 56, 45),
			'hsv'      => array(120, 71, 70)
		),
		'warmBlack' => array(
			'name'     => 'Warm black',
			'html'     => '#004242',
			'graphviz' => '#004242',
			'rgb'      => array(0, 26, 26),
			'hsl'      => array(180, 100, 13),
			'hsv'      => array(180, 100, 25)
		),
		'waterspout' => array(
			'name'     => 'Waterspout',
			'html'     => '#A4F4F9',
			'graphviz' => '#A4F4F9',
			'rgb'      => array(64, 96, 98),
			'hsl'      => array(184, 88, 81),
			'hsv'      => array(184, 34, 98)
		),
		'weldonBlue' => array(
			'name'     => 'Weldon Blue',
			'html'     => '#7C98AB',
			'graphviz' => '#7C98AB',
			'rgb'      => array(49, 60, 67),
			'hsl'      => array(204, 22, 58),
			'hsv'      => array(204, 28, 67)
		),
		'wenge' => array(
			'name'     => 'Wenge',
			'html'     => '#645452',
			'graphviz' => '#645452',
			'rgb'      => array(39, 33, 32),
			'hsl'      => array(7, 10, 36),
			'hsv'      => array(7, 18, 39)
		),
		'wheat' => array(
			'name'     => 'Wheat',
			'html'     => '#F5DEB3',
			'graphviz' => '#F5DEB3',
			'rgb'      => array(96, 87, 70),
			'hsl'      => array(39, 77, 83),
			'hsv'      => array(39, 27, 96)
		),
		'white' => array(
			'name'     => 'White',
			'html'     => '#FFFFFF',
			'graphviz' => '#FFFFFF',
			'rgb'      => array(100, 100, 100),
			'hsl'      => array(null, 0, 100),
			'hsv'      => array(null, 0, 100)
		),
		'whiteSmoke' => array(
			'name'     => 'White smoke',
			'html'     => '#F5F5F5',
			'graphviz' => '#F5F5F5',
			'rgb'      => array(96, 96, 96),
			'hsl'      => array(null, 0, 96),
			'hsv'      => array(null, 0, 96)
		),
		'wildStrawberry' => array(
			'name'     => 'Wild Strawberry',
			'html'     => '#FF43A4',
			'graphviz' => '#FF43A4',
			'rgb'      => array(100, 26, 64),
			'hsl'      => array(329, 100, 63),
			'hsv'      => array(329, 74, 100)
		),
		'wildBlueYonder' => array(
			'name'     => 'Wild blue yonder',
			'html'     => '#A2ADD0',
			'graphviz' => '#A2ADD0',
			'rgb'      => array(64, 68, 82),
			'hsl'      => array(226, 33, 73),
			'hsv'      => array(226, 22, 82)
		),
		'wildOrchid' => array(
			'name'     => 'Wild orchid',
			'html'     => '#D470A2',
			'graphviz' => '#D470A2',
			'rgb'      => array(83, 44, 64),
			'hsl'      => array(330, 54, 64),
			'hsv'      => array(330, 47, 83)
		),
		'wildWatermelon' => array(
			'name'     => 'Wild watermelon',
			'html'     => '#FC6C85',
			'graphviz' => '#FC6C85',
			'rgb'      => array(99, 42, 52),
			'hsl'      => array(350, 96, 71),
			'hsv'      => array(350, 57, 99)
		),
		'willpowerOrange' => array(
			'name'     => 'Willpower orange',
			'html'     => '#FD5800',
			'graphviz' => '#FD5800',
			'rgb'      => array(99, 35, 0),
			'hsl'      => array(21, 100, 50),
			'hsv'      => array(21, 100, 99)
		),
		'windsorTan' => array(
			'name'     => 'Windsor tan',
			'html'     => '#A75502',
			'graphviz' => '#A75502',
			'rgb'      => array(65, 33, 1),
			'hsl'      => array(30, 98, 33),
			'hsv'      => array(30, 99, 65)
		),
		'wine' => array(
			'name'     => 'Wine',
			'html'     => '#722F37',
			'graphviz' => '#722F37',
			'rgb'      => array(45, 18, 22),
			'hsl'      => array(353, 42, 32),
			'hsv'      => array(353, 59, 45)
		),
		'wineDregs' => array(
			'name'     => 'Wine dregs',
			'html'     => '#673147',
			'graphviz' => '#673147',
			'rgb'      => array(40, 19, 28),
			'hsl'      => array(336, 36, 30),
			'hsv'      => array(336, 52, 40)
		),
		'winterSky' => array(
			'name'     => 'Winter Sky',
			'html'     => '#FF007C',
			'graphviz' => '#FF007C',
			'rgb'      => array(100, 0, 49),
			'hsl'      => array(331, 100, 50),
			'hsv'      => array(331, 100, 100)
		),
		'winterWizard' => array(
			'name'     => 'Winter Wizard',
			'html'     => '#A0E6FF',
			'graphviz' => '#A0E6FF',
			'rgb'      => array(63, 90, 100),
			'hsl'      => array(196, 100, 81),
			'hsv'      => array(196, 37, 100)
		),
		'wintergreenDream' => array(
			'name'     => 'Wintergreen Dream',
			'html'     => '#56887D',
			'graphviz' => '#56887D',
			'rgb'      => array(34, 53, 49),
			'hsl'      => array(167, 23, 44),
			'hsv'      => array(167, 37, 53)
		),
		'wisteria' => array(
			'name'     => 'Wisteria',
			'html'     => '#C9A0DC',
			'graphviz' => '#C9A0DC',
			'rgb'      => array(79, 63, 86),
			'hsl'      => array(281, 46, 75),
			'hsv'      => array(281, 27, 86)
		),
		'woodBrown' => array(
			'name'     => 'Wood brown',
			'html'     => '#C19A6B',
			'graphviz' => '#C19A6B',
			'rgb'      => array(76, 60, 42),
			'hsl'      => array(33, 41, 59),
			'hsv'      => array(33, 45, 76)
		),
		'xanadu' => array(
			'name'     => 'Xanadu',
			'html'     => '#738678',
			'graphviz' => '#738678',
			'rgb'      => array(45, 53, 47),
			'hsl'      => array(136, 8, 49),
			'hsv'      => array(136, 14, 53)
		),
		'yaleBlue' => array(
			'name'     => 'Yale Blue',
			'html'     => '#0F4D92',
			'graphviz' => '#0F4D92',
			'rgb'      => array(6, 30, 57),
			'hsl'      => array(212, 81, 32),
			'hsv'      => array(212, 90, 57)
		),
		'yankeesBlue' => array(
			'name'     => 'Yankees blue',
			'html'     => '#1C2841',
			'graphviz' => '#1C2841',
			'rgb'      => array(11, 16, 25),
			'hsl'      => array(221, 40, 18),
			'hsv'      => array(221, 57, 25)
		),
		'yellow' => array(
			'name'     => 'Yellow',
			'html'     => '#FFFF00',
			'graphviz' => '#FFFF00',
			'rgb'      => array(100, 100, 0),
			'hsl'      => array(60, 100, 50),
			'hsv'      => array(60, 100, 100)
		),
		'yellowCrayola' => array(
			'name'     => 'Yellow (Crayola)',
			'html'     => '#FCE883',
			'graphviz' => '#FCE883',
			'rgb'      => array(99, 91, 51),
			'hsl'      => array(50, 95, 75),
			'hsv'      => array(50, 48, 99)
		),
		'yellowMunsell' => array(
			'name'     => 'Yellow (Munsell)',
			'html'     => '#EFCC00',
			'graphviz' => '#EFCC00',
			'rgb'      => array(94, 80, 0),
			'hsl'      => array(51, 100, 47),
			'hsv'      => array(51, 100, 94)
		),
		'yellowNcs' => array(
			'name'     => 'Yellow (NCS)',
			'html'     => '#FFD300',
			'graphviz' => '#FFD300',
			'rgb'      => array(100, 83, 0),
			'hsl'      => array(50, 100, 50),
			'hsv'      => array(50, 100, 100)
		),
		'yellowPantone' => array(
			'name'     => 'Yellow (Pantone)',
			'html'     => '#FEDF00',
			'graphviz' => '#FEDF00',
			'rgb'      => array(100, 87, 0),
			'hsl'      => array(53, 100, 50),
			'hsv'      => array(53, 100, 100)
		),
		'yellowRyb' => array(
			'name'     => 'Yellow (RYB)',
			'html'     => '#FEFE33',
			'graphviz' => '#FEFE33',
			'rgb'      => array(100, 100, 20),
			'hsl'      => array(60, 99, 60),
			'hsv'      => array(60, 80, 100)
		),
		'yellowProcess' => array(
			'name'     => 'Yellow (process)',
			'html'     => '#FFEF00',
			'graphviz' => '#FFEF00',
			'rgb'      => array(100, 94, 0),
			'hsl'      => array(56, 100, 50),
			'hsv'      => array(56, 100, 100)
		),
		'yellowOrange' => array(
			'name'     => 'Yellow Orange',
			'html'     => '#FFAE42',
			'graphviz' => '#FFAE42',
			'rgb'      => array(100, 68, 26),
			'hsl'      => array(34, 100, 63),
			'hsv'      => array(34, 74, 100)
		),
		'yellowSunshine' => array(
			'name'     => 'Yellow Sunshine',
			'html'     => '#FFF700',
			'graphviz' => '#FFF700',
			'rgb'      => array(100, 97, 0),
			'hsl'      => array(58, 100, 50),
			'hsv'      => array(58, 100, 100)
		),
		'yellowRose' => array(
			'name'     => 'Yellow rose',
			'html'     => '#FFF000',
			'graphviz' => '#FFF000',
			'rgb'      => array(100, 94, 0),
			'hsl'      => array(56, 100, 50),
			'hsv'      => array(56, 100, 100)
		),
		'yellowGreen' => array(
			'name'     => 'Yellow-green',
			'html'     => '#9ACD32',
			'graphviz' => '#9ACD32',
			'rgb'      => array(60, 80, 20),
			'hsl'      => array(80, 61, 50),
			'hsv'      => array(80, 76, 80)
		),
		'zaffre' => array(
			'name'     => 'Zaffre',
			'html'     => '#0014A8',
			'graphviz' => '#0014A8',
			'rgb'      => array(0, 8, 66),
			'hsl'      => array(233, 100, 33),
			'hsv'      => array(233, 100, 66)
		),
		'zinnwalditeBrown' => array(
			'name'     => 'Zinnwaldite brown',
			'html'     => '#2C1608',
			'graphviz' => '#2C1608',
			'rgb'      => array(17, 9, 3),
			'hsl'      => array(23, 69, 10),
			'hsv'      => array(23, 82, 17)
		),
		'zomp' => array(
			'name'     => 'Zomp',
			'html'     => '#39A78E',
			'graphviz' => '#39A78E',
			'rgb'      => array(22, 65, 56),
			'hsl'      => array(166, 49, 44),
			'hsv'      => array(166, 66, 65)
		)
	);

	/**
	 * Set the default output format.
	 * @param string $inFormat Default format.
	 */
	static function setDefaultOutputFormat($inFormat) {
		self::$__defaultOutputFormat = $inFormat;
	}
	
	/**
	 * Return the code of a given color, in a given output format.
	 * @param string $inName Name of the color.
	 * @param string $inOutputFormat Name of the output format.
	 * @return The method returns the code of the color.
	 */
	static function getColor($inName, $inOutputFormat) {

		$inOutputFormat = is_null($inOutputFormat) ? self::$__defaultOutputFormat : $inOutputFormat;

		if (! array_key_exists($inName, self::$list)) {
			throw new \Exception("Unexpected color name: \"$inName\".");
		}
		
		if (! in_array(strtolower($inOutputFormat), array('html', 'graphviz', 'rgb', 'hsl', 'hsv'))) {
			throw new \Exception("Unexpected output format: \"$inOutputFormat\".");
		}
		
		return self::$list[$inName][$inOutputFormat];
	}

	/**
	 * Return the colour code for the colour "Absolute zero".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function absoluteZero($inOutputFormat=null) {
		return self::getColor('absoluteZero', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Acid green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function acidGreen($inOutputFormat=null) {
		return self::getColor('acidGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Aero".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function aero($inOutputFormat=null) {
		return self::getColor('aero', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Aero blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function aeroBlue($inOutputFormat=null) {
		return self::getColor('aeroBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "African violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function africanViolet($inOutputFormat=null) {
		return self::getColor('africanViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Air Force blue (RAF)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function airForceBlueRaf($inOutputFormat=null) {
		return self::getColor('airForceBlueRaf', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Air Force blue (USAF)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function airForceBlueUsaf($inOutputFormat=null) {
		return self::getColor('airForceBlueUsaf', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Air superiority blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function airSuperiorityBlue($inOutputFormat=null) {
		return self::getColor('airSuperiorityBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Alabama crimson".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function alabamaCrimson($inOutputFormat=null) {
		return self::getColor('alabamaCrimson', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Alabaster".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function alabaster($inOutputFormat=null) {
		return self::getColor('alabaster', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Alice blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function aliceBlue($inOutputFormat=null) {
		return self::getColor('aliceBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Alien Armpit".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function alienArmpit($inOutputFormat=null) {
		return self::getColor('alienArmpit', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Alizarin crimson".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function alizarinCrimson($inOutputFormat=null) {
		return self::getColor('alizarinCrimson', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Alloy orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function alloyOrange($inOutputFormat=null) {
		return self::getColor('alloyOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Almond".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function almond($inOutputFormat=null) {
		return self::getColor('almond', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Amaranth".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function amaranth($inOutputFormat=null) {
		return self::getColor('amaranth', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Amaranth deep purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function amaranthDeepPurple($inOutputFormat=null) {
		return self::getColor('amaranthDeepPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Amaranth pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function amaranthPink($inOutputFormat=null) {
		return self::getColor('amaranthPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Amaranth purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function amaranthPurple($inOutputFormat=null) {
		return self::getColor('amaranthPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Amaranth red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function amaranthRed($inOutputFormat=null) {
		return self::getColor('amaranthRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Amazon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function amazon($inOutputFormat=null) {
		return self::getColor('amazon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Amazonite".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function amazonite($inOutputFormat=null) {
		return self::getColor('amazonite', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Amber".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function amber($inOutputFormat=null) {
		return self::getColor('amber', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Amber (SAE/ECE)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function amberSaeEce($inOutputFormat=null) {
		return self::getColor('amberSae/ece', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "American rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function americanRose($inOutputFormat=null) {
		return self::getColor('americanRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Amethyst".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function amethyst($inOutputFormat=null) {
		return self::getColor('amethyst', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Android green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function androidGreen($inOutputFormat=null) {
		return self::getColor('androidGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Anti-flash white".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function antiFlashWhite($inOutputFormat=null) {
		return self::getColor('antiFlashWhite', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Antique brass".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function antiqueBrass($inOutputFormat=null) {
		return self::getColor('antiqueBrass', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Antique bronze".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function antiqueBronze($inOutputFormat=null) {
		return self::getColor('antiqueBronze', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Antique fuchsia".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function antiqueFuchsia($inOutputFormat=null) {
		return self::getColor('antiqueFuchsia', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Antique ruby".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function antiqueRuby($inOutputFormat=null) {
		return self::getColor('antiqueRuby', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Antique white".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function antiqueWhite($inOutputFormat=null) {
		return self::getColor('antiqueWhite', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ao (English)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function aoEnglish($inOutputFormat=null) {
		return self::getColor('aoEnglish', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Apple green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function appleGreen($inOutputFormat=null) {
		return self::getColor('appleGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Apricot".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function apricot($inOutputFormat=null) {
		return self::getColor('apricot', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Aqua".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function aqua($inOutputFormat=null) {
		return self::getColor('aqua', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Aquamarine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function aquamarine($inOutputFormat=null) {
		return self::getColor('aquamarine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Arctic lime".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function arcticLime($inOutputFormat=null) {
		return self::getColor('arcticLime', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Army green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function armyGreen($inOutputFormat=null) {
		return self::getColor('armyGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Arsenic".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function arsenic($inOutputFormat=null) {
		return self::getColor('arsenic', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Artichoke".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function artichoke($inOutputFormat=null) {
		return self::getColor('artichoke', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Arylide yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function arylideYellow($inOutputFormat=null) {
		return self::getColor('arylideYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ash grey".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ashGrey($inOutputFormat=null) {
		return self::getColor('ashGrey', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Asparagus".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function asparagus($inOutputFormat=null) {
		return self::getColor('asparagus', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Atomic tangerine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function atomicTangerine($inOutputFormat=null) {
		return self::getColor('atomicTangerine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Auburn".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function auburn($inOutputFormat=null) {
		return self::getColor('auburn', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Aureolin".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function aureolin($inOutputFormat=null) {
		return self::getColor('aureolin', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "AuroMetalSaurus".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function aurometalsaurus($inOutputFormat=null) {
		return self::getColor('aurometalsaurus', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Avocado".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function avocado($inOutputFormat=null) {
		return self::getColor('avocado', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Awesome".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function awesome($inOutputFormat=null) {
		return self::getColor('awesome', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Aztec Gold".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function aztecGold($inOutputFormat=null) {
		return self::getColor('aztecGold', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Azure".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function azure($inOutputFormat=null) {
		return self::getColor('azure', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Azure (web color)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function azureWebColor($inOutputFormat=null) {
		return self::getColor('azureWebColor', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Azure mist".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function azureMist($inOutputFormat=null) {
		return self::getColor('azureMist', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Azureish white".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function azureishWhite($inOutputFormat=null) {
		return self::getColor('azureishWhite', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "B\'dazzled blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bdazzledBlue($inOutputFormat=null) {
		return self::getColor('bdazzledBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Baby blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function babyBlue($inOutputFormat=null) {
		return self::getColor('babyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Baby blue eyes".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function babyBlueEyes($inOutputFormat=null) {
		return self::getColor('babyBlueEyes', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Baby pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function babyPink($inOutputFormat=null) {
		return self::getColor('babyPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Baby powder".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function babyPowder($inOutputFormat=null) {
		return self::getColor('babyPowder', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Baker-Miller pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bakerMillerPink($inOutputFormat=null) {
		return self::getColor('bakerMillerPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ball blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ballBlue($inOutputFormat=null) {
		return self::getColor('ballBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Banana Mania".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bananaMania($inOutputFormat=null) {
		return self::getColor('bananaMania', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Banana yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bananaYellow($inOutputFormat=null) {
		return self::getColor('bananaYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bangladesh green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bangladeshGreen($inOutputFormat=null) {
		return self::getColor('bangladeshGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Barbie pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function barbiePink($inOutputFormat=null) {
		return self::getColor('barbiePink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Barn red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function barnRed($inOutputFormat=null) {
		return self::getColor('barnRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Battery Charged Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function batteryChargedBlue($inOutputFormat=null) {
		return self::getColor('batteryChargedBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Battleship grey".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function battleshipGrey($inOutputFormat=null) {
		return self::getColor('battleshipGrey', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bazaar".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bazaar($inOutputFormat=null) {
		return self::getColor('bazaar', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Beau blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function beauBlue($inOutputFormat=null) {
		return self::getColor('beauBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Beaver".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function beaver($inOutputFormat=null) {
		return self::getColor('beaver', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Begonia".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function begonia($inOutputFormat=null) {
		return self::getColor('begonia', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Beige".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function beige($inOutputFormat=null) {
		return self::getColor('beige', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Big Foot Feet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bigFootFeet($inOutputFormat=null) {
		return self::getColor('bigFootFeet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Big dip o’ruby".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bigDipO’ruby($inOutputFormat=null) {
		return self::getColor('bigDipO’ruby', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bisque".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bisque($inOutputFormat=null) {
		return self::getColor('bisque', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bistre".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bistre($inOutputFormat=null) {
		return self::getColor('bistre', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bistre brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bistreBrown($inOutputFormat=null) {
		return self::getColor('bistreBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bitter lemon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bitterLemon($inOutputFormat=null) {
		return self::getColor('bitterLemon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bitter lime".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bitterLime($inOutputFormat=null) {
		return self::getColor('bitterLime', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bittersweet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bittersweet($inOutputFormat=null) {
		return self::getColor('bittersweet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bittersweet shimmer".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bittersweetShimmer($inOutputFormat=null) {
		return self::getColor('bittersweetShimmer', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Black".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function black($inOutputFormat=null) {
		return self::getColor('black', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Black Coral".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blackCoral($inOutputFormat=null) {
		return self::getColor('blackCoral', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Black Shadows".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blackShadows($inOutputFormat=null) {
		return self::getColor('blackShadows', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Black bean".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blackBean($inOutputFormat=null) {
		return self::getColor('blackBean', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Black leather jacket".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blackLeatherJacket($inOutputFormat=null) {
		return self::getColor('blackLeatherJacket', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Black olive".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blackOlive($inOutputFormat=null) {
		return self::getColor('blackOlive', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blanched almond".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blanchedAlmond($inOutputFormat=null) {
		return self::getColor('blanchedAlmond', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blast-off bronze".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blastOffBronze($inOutputFormat=null) {
		return self::getColor('blastOffBronze', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bleu de France".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bleuDeFrance($inOutputFormat=null) {
		return self::getColor('bleuDeFrance', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blizzard Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blizzardBlue($inOutputFormat=null) {
		return self::getColor('blizzardBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blond".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blond($inOutputFormat=null) {
		return self::getColor('blond', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blue($inOutputFormat=null) {
		return self::getColor('blue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue (Crayola)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueCrayola($inOutputFormat=null) {
		return self::getColor('blueCrayola', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue (Munsell)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueMunsell($inOutputFormat=null) {
		return self::getColor('blueMunsell', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue (NCS)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueNcs($inOutputFormat=null) {
		return self::getColor('blueNcs', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue (Pantone)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bluePantone($inOutputFormat=null) {
		return self::getColor('bluePantone', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue (RYB)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueRyb($inOutputFormat=null) {
		return self::getColor('blueRyb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue (pigment)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bluePigment($inOutputFormat=null) {
		return self::getColor('bluePigment', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue Bell".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueBell($inOutputFormat=null) {
		return self::getColor('blueBell', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue Bolt".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueBolt($inOutputFormat=null) {
		return self::getColor('blueBolt', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue Jeans".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueJeans($inOutputFormat=null) {
		return self::getColor('blueJeans', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue Lagoon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueLagoon($inOutputFormat=null) {
		return self::getColor('blueLagoon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue sapphire".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueSapphire($inOutputFormat=null) {
		return self::getColor('blueSapphire', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue yonder".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueYonder($inOutputFormat=null) {
		return self::getColor('blueYonder', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue-gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueGray($inOutputFormat=null) {
		return self::getColor('blueGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue-green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueGreen($inOutputFormat=null) {
		return self::getColor('blueGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue-magenta violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueMagentaViolet($inOutputFormat=null) {
		return self::getColor('blueMagentaViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blue-violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueViolet($inOutputFormat=null) {
		return self::getColor('blueViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blueberry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blueberry($inOutputFormat=null) {
		return self::getColor('blueberry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bluebonnet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bluebonnet($inOutputFormat=null) {
		return self::getColor('bluebonnet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Blush".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function blush($inOutputFormat=null) {
		return self::getColor('blush', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bole".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bole($inOutputFormat=null) {
		return self::getColor('bole', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bondi blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bondiBlue($inOutputFormat=null) {
		return self::getColor('bondiBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bone".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bone($inOutputFormat=null) {
		return self::getColor('bone', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Booger Buster".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function boogerBuster($inOutputFormat=null) {
		return self::getColor('boogerBuster', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Boston University Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bostonUniversityRed($inOutputFormat=null) {
		return self::getColor('bostonUniversityRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bottle green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bottleGreen($inOutputFormat=null) {
		return self::getColor('bottleGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Boysenberry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function boysenberry($inOutputFormat=null) {
		return self::getColor('boysenberry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Brandeis blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brandeisBlue($inOutputFormat=null) {
		return self::getColor('brandeisBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Brass".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brass($inOutputFormat=null) {
		return self::getColor('brass', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Brick red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brickRed($inOutputFormat=null) {
		return self::getColor('brickRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bright Yellow (Crayola)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brightYellowCrayola($inOutputFormat=null) {
		return self::getColor('brightYellowCrayola', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bright cerulean".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brightCerulean($inOutputFormat=null) {
		return self::getColor('brightCerulean', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bright green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brightGreen($inOutputFormat=null) {
		return self::getColor('brightGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bright lavender".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brightLavender($inOutputFormat=null) {
		return self::getColor('brightLavender', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bright lilac".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brightLilac($inOutputFormat=null) {
		return self::getColor('brightLilac', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bright maroon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brightMaroon($inOutputFormat=null) {
		return self::getColor('brightMaroon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bright navy blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brightNavyBlue($inOutputFormat=null) {
		return self::getColor('brightNavyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bright pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brightPink($inOutputFormat=null) {
		return self::getColor('brightPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bright turquoise".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brightTurquoise($inOutputFormat=null) {
		return self::getColor('brightTurquoise', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bright ube".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brightUbe($inOutputFormat=null) {
		return self::getColor('brightUbe', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Brilliant azure".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brilliantAzure($inOutputFormat=null) {
		return self::getColor('brilliantAzure', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Brilliant lavender".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brilliantLavender($inOutputFormat=null) {
		return self::getColor('brilliantLavender', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Brilliant rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brilliantRose($inOutputFormat=null) {
		return self::getColor('brilliantRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Brink pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brinkPink($inOutputFormat=null) {
		return self::getColor('brinkPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "British racing green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function britishRacingGreen($inOutputFormat=null) {
		return self::getColor('britishRacingGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bronze".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bronze($inOutputFormat=null) {
		return self::getColor('bronze', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bronze Yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bronzeYellow($inOutputFormat=null) {
		return self::getColor('bronzeYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Brown (traditional)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brownTraditional($inOutputFormat=null) {
		return self::getColor('brownTraditional', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Brown (web)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brownWeb($inOutputFormat=null) {
		return self::getColor('brownWeb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Brown Sugar".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brownSugar($inOutputFormat=null) {
		return self::getColor('brownSugar', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Brown Yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brownYellow($inOutputFormat=null) {
		return self::getColor('brownYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Brown-nose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brownNose($inOutputFormat=null) {
		return self::getColor('brownNose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Brunswick green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function brunswickGreen($inOutputFormat=null) {
		return self::getColor('brunswickGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bubble gum".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bubbleGum($inOutputFormat=null) {
		return self::getColor('bubbleGum', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bubbles".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bubbles($inOutputFormat=null) {
		return self::getColor('bubbles', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bud green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function budGreen($inOutputFormat=null) {
		return self::getColor('budGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Buff".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function buff($inOutputFormat=null) {
		return self::getColor('buff', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Bulgarian rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function bulgarianRose($inOutputFormat=null) {
		return self::getColor('bulgarianRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Burgundy".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function burgundy($inOutputFormat=null) {
		return self::getColor('burgundy', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Burlywood".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function burlywood($inOutputFormat=null) {
		return self::getColor('burlywood', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Burnished Brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function burnishedBrown($inOutputFormat=null) {
		return self::getColor('burnishedBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Burnt orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function burntOrange($inOutputFormat=null) {
		return self::getColor('burntOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Burnt sienna".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function burntSienna($inOutputFormat=null) {
		return self::getColor('burntSienna', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Burnt umber".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function burntUmber($inOutputFormat=null) {
		return self::getColor('burntUmber', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Byzantine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function byzantine($inOutputFormat=null) {
		return self::getColor('byzantine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Byzantium".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function byzantium($inOutputFormat=null) {
		return self::getColor('byzantium', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "CG Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cgBlue($inOutputFormat=null) {
		return self::getColor('cgBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "CG Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cgRed($inOutputFormat=null) {
		return self::getColor('cgRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cadet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cadet($inOutputFormat=null) {
		return self::getColor('cadet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cadet blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cadetBlue($inOutputFormat=null) {
		return self::getColor('cadetBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cadet grey".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cadetGrey($inOutputFormat=null) {
		return self::getColor('cadetGrey', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cadmium green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cadmiumGreen($inOutputFormat=null) {
		return self::getColor('cadmiumGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cadmium orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cadmiumOrange($inOutputFormat=null) {
		return self::getColor('cadmiumOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cadmium red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cadmiumRed($inOutputFormat=null) {
		return self::getColor('cadmiumRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cadmium yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cadmiumYellow($inOutputFormat=null) {
		return self::getColor('cadmiumYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Café au lait".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function caféAuLait($inOutputFormat=null) {
		return self::getColor('caféAuLait', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Café noir".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function caféNoir($inOutputFormat=null) {
		return self::getColor('caféNoir', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cal Poly Pomona green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function calPolyPomonaGreen($inOutputFormat=null) {
		return self::getColor('calPolyPomonaGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cambridge Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cambridgeBlue($inOutputFormat=null) {
		return self::getColor('cambridgeBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Camel".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function camel($inOutputFormat=null) {
		return self::getColor('camel', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cameo pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cameoPink($inOutputFormat=null) {
		return self::getColor('cameoPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Camouflage green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function camouflageGreen($inOutputFormat=null) {
		return self::getColor('camouflageGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Canary".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function canary($inOutputFormat=null) {
		return self::getColor('canary', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Canary yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function canaryYellow($inOutputFormat=null) {
		return self::getColor('canaryYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Candy apple red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function candyAppleRed($inOutputFormat=null) {
		return self::getColor('candyAppleRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Candy pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function candyPink($inOutputFormat=null) {
		return self::getColor('candyPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Capri".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function capri($inOutputFormat=null) {
		return self::getColor('capri', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Caput mortuum".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function caputMortuum($inOutputFormat=null) {
		return self::getColor('caputMortuum', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cardinal".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cardinal($inOutputFormat=null) {
		return self::getColor('cardinal', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Caribbean green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function caribbeanGreen($inOutputFormat=null) {
		return self::getColor('caribbeanGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Carmine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function carmine($inOutputFormat=null) {
		return self::getColor('carmine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Carmine (M&P)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function carmineMp($inOutputFormat=null) {
		return self::getColor('carmineMp', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Carmine pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function carminePink($inOutputFormat=null) {
		return self::getColor('carminePink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Carmine red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function carmineRed($inOutputFormat=null) {
		return self::getColor('carmineRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Carnation pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function carnationPink($inOutputFormat=null) {
		return self::getColor('carnationPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Carnelian".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function carnelian($inOutputFormat=null) {
		return self::getColor('carnelian', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Carolina blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function carolinaBlue($inOutputFormat=null) {
		return self::getColor('carolinaBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Carrot orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function carrotOrange($inOutputFormat=null) {
		return self::getColor('carrotOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Castleton green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function castletonGreen($inOutputFormat=null) {
		return self::getColor('castletonGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Catalina blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function catalinaBlue($inOutputFormat=null) {
		return self::getColor('catalinaBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Catawba".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function catawba($inOutputFormat=null) {
		return self::getColor('catawba', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cedar Chest".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cedarChest($inOutputFormat=null) {
		return self::getColor('cedarChest', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ceil".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ceil($inOutputFormat=null) {
		return self::getColor('ceil', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Celadon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function celadon($inOutputFormat=null) {
		return self::getColor('celadon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Celadon blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function celadonBlue($inOutputFormat=null) {
		return self::getColor('celadonBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Celadon green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function celadonGreen($inOutputFormat=null) {
		return self::getColor('celadonGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Celeste".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function celeste($inOutputFormat=null) {
		return self::getColor('celeste', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Celestial blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function celestialBlue($inOutputFormat=null) {
		return self::getColor('celestialBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cerise".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cerise($inOutputFormat=null) {
		return self::getColor('cerise', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cerise pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cerisePink($inOutputFormat=null) {
		return self::getColor('cerisePink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cerulean".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cerulean($inOutputFormat=null) {
		return self::getColor('cerulean', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cerulean blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ceruleanBlue($inOutputFormat=null) {
		return self::getColor('ceruleanBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cerulean frost".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ceruleanFrost($inOutputFormat=null) {
		return self::getColor('ceruleanFrost', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Chamoisee".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function chamoisee($inOutputFormat=null) {
		return self::getColor('chamoisee', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Champagne".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function champagne($inOutputFormat=null) {
		return self::getColor('champagne', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Champagne pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function champagnePink($inOutputFormat=null) {
		return self::getColor('champagnePink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Charcoal".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function charcoal($inOutputFormat=null) {
		return self::getColor('charcoal', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Charleston green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function charlestonGreen($inOutputFormat=null) {
		return self::getColor('charlestonGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Charm pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function charmPink($inOutputFormat=null) {
		return self::getColor('charmPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Chartreuse (traditional)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function chartreuseTraditional($inOutputFormat=null) {
		return self::getColor('chartreuseTraditional', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Chartreuse (web)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function chartreuseWeb($inOutputFormat=null) {
		return self::getColor('chartreuseWeb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cherry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cherry($inOutputFormat=null) {
		return self::getColor('cherry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cherry blossom pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cherryBlossomPink($inOutputFormat=null) {
		return self::getColor('cherryBlossomPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Chestnut".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function chestnut($inOutputFormat=null) {
		return self::getColor('chestnut', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "China pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function chinaPink($inOutputFormat=null) {
		return self::getColor('chinaPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "China rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function chinaRose($inOutputFormat=null) {
		return self::getColor('chinaRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Chinese red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function chineseRed($inOutputFormat=null) {
		return self::getColor('chineseRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Chinese violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function chineseViolet($inOutputFormat=null) {
		return self::getColor('chineseViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Chlorophyll green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function chlorophyllGreen($inOutputFormat=null) {
		return self::getColor('chlorophyllGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Chocolate (traditional)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function chocolateTraditional($inOutputFormat=null) {
		return self::getColor('chocolateTraditional', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Chocolate (web)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function chocolateWeb($inOutputFormat=null) {
		return self::getColor('chocolateWeb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Chrome yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function chromeYellow($inOutputFormat=null) {
		return self::getColor('chromeYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cinereous".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cinereous($inOutputFormat=null) {
		return self::getColor('cinereous', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cinnabar".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cinnabar($inOutputFormat=null) {
		return self::getColor('cinnabar', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cinnamon Satin".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cinnamonSatin($inOutputFormat=null) {
		return self::getColor('cinnamonSatin', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cinnamon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cinnamon($inOutputFormat=null) {
		return self::getColor('cinnamon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Citrine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function citrine($inOutputFormat=null) {
		return self::getColor('citrine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Citron".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function citron($inOutputFormat=null) {
		return self::getColor('citron', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Claret".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function claret($inOutputFormat=null) {
		return self::getColor('claret', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Classic rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function classicRose($inOutputFormat=null) {
		return self::getColor('classicRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cobalt Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cobaltBlue($inOutputFormat=null) {
		return self::getColor('cobaltBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cocoa brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cocoaBrown($inOutputFormat=null) {
		return self::getColor('cocoaBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Coconut".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function coconut($inOutputFormat=null) {
		return self::getColor('coconut', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Coffee".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function coffee($inOutputFormat=null) {
		return self::getColor('coffee', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Columbia Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function columbiaBlue($inOutputFormat=null) {
		return self::getColor('columbiaBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Congo pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function congoPink($inOutputFormat=null) {
		return self::getColor('congoPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cool Black".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function coolBlack($inOutputFormat=null) {
		return self::getColor('coolBlack', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cool grey".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function coolGrey($inOutputFormat=null) {
		return self::getColor('coolGrey', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Copper".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function copper($inOutputFormat=null) {
		return self::getColor('copper', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Copper (Crayola)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function copperCrayola($inOutputFormat=null) {
		return self::getColor('copperCrayola', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Copper penny".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function copperPenny($inOutputFormat=null) {
		return self::getColor('copperPenny', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Copper red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function copperRed($inOutputFormat=null) {
		return self::getColor('copperRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Copper rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function copperRose($inOutputFormat=null) {
		return self::getColor('copperRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Coquelicot".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function coquelicot($inOutputFormat=null) {
		return self::getColor('coquelicot', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Coral".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function coral($inOutputFormat=null) {
		return self::getColor('coral', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Coral Reef".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function coralReef($inOutputFormat=null) {
		return self::getColor('coralReef', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Coral pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function coralPink($inOutputFormat=null) {
		return self::getColor('coralPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Coral red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function coralRed($inOutputFormat=null) {
		return self::getColor('coralRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cordovan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cordovan($inOutputFormat=null) {
		return self::getColor('cordovan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Corn".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function corn($inOutputFormat=null) {
		return self::getColor('corn', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cornell Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cornellRed($inOutputFormat=null) {
		return self::getColor('cornellRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cornflower blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cornflowerBlue($inOutputFormat=null) {
		return self::getColor('cornflowerBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cornsilk".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cornsilk($inOutputFormat=null) {
		return self::getColor('cornsilk', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cosmic Cobalt".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cosmicCobalt($inOutputFormat=null) {
		return self::getColor('cosmicCobalt', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cosmic latte".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cosmicLatte($inOutputFormat=null) {
		return self::getColor('cosmicLatte', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cotton candy".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cottonCandy($inOutputFormat=null) {
		return self::getColor('cottonCandy', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Coyote brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function coyoteBrown($inOutputFormat=null) {
		return self::getColor('coyoteBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cream".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cream($inOutputFormat=null) {
		return self::getColor('cream', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Crimson".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function crimson($inOutputFormat=null) {
		return self::getColor('crimson', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Crimson glory".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function crimsonGlory($inOutputFormat=null) {
		return self::getColor('crimsonGlory', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Crimson red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function crimsonRed($inOutputFormat=null) {
		return self::getColor('crimsonRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cultured".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cultured($inOutputFormat=null) {
		return self::getColor('cultured', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cyan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cyan($inOutputFormat=null) {
		return self::getColor('cyan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cyan (process)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cyanProcess($inOutputFormat=null) {
		return self::getColor('cyanProcess', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cyan azure".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cyanAzure($inOutputFormat=null) {
		return self::getColor('cyanAzure', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cyan cobalt blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cyanCobaltBlue($inOutputFormat=null) {
		return self::getColor('cyanCobaltBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cyan cornflower blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cyanCornflowerBlue($inOutputFormat=null) {
		return self::getColor('cyanCornflowerBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cyan-blue azure".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cyanBlueAzure($inOutputFormat=null) {
		return self::getColor('cyanBlueAzure', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cyber grape".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cyberGrape($inOutputFormat=null) {
		return self::getColor('cyberGrape', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cyber yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cyberYellow($inOutputFormat=null) {
		return self::getColor('cyberYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Cyclamen".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function cyclamen($inOutputFormat=null) {
		return self::getColor('cyclamen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Daffodil".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function daffodil($inOutputFormat=null) {
		return self::getColor('daffodil', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dandelion".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function dandelion($inOutputFormat=null) {
		return self::getColor('dandelion', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkBlue($inOutputFormat=null) {
		return self::getColor('darkBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark blue-gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkBlueGray($inOutputFormat=null) {
		return self::getColor('darkBlueGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkBrown($inOutputFormat=null) {
		return self::getColor('darkBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark brown-tangelo".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkBrownTangelo($inOutputFormat=null) {
		return self::getColor('darkBrownTangelo', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark byzantium".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkByzantium($inOutputFormat=null) {
		return self::getColor('darkByzantium', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark candy apple red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkCandyAppleRed($inOutputFormat=null) {
		return self::getColor('darkCandyAppleRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark cerulean".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkCerulean($inOutputFormat=null) {
		return self::getColor('darkCerulean', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark chestnut".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkChestnut($inOutputFormat=null) {
		return self::getColor('darkChestnut', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark coral".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkCoral($inOutputFormat=null) {
		return self::getColor('darkCoral', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark cyan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkCyan($inOutputFormat=null) {
		return self::getColor('darkCyan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark electric blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkElectricBlue($inOutputFormat=null) {
		return self::getColor('darkElectricBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark goldenrod".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkGoldenrod($inOutputFormat=null) {
		return self::getColor('darkGoldenrod', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark gray (X11)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkGrayX11($inOutputFormat=null) {
		return self::getColor('darkGrayX11', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkGreen($inOutputFormat=null) {
		return self::getColor('darkGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark green (X11)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkGreenX11($inOutputFormat=null) {
		return self::getColor('darkGreenX11', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark gunmetal".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkGunmetal($inOutputFormat=null) {
		return self::getColor('darkGunmetal', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark imperial blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkImperialBlue($inOutputFormat=null) {
		return self::getColor('darkImperialBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark jungle green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkJungleGreen($inOutputFormat=null) {
		return self::getColor('darkJungleGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark khaki".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkKhaki($inOutputFormat=null) {
		return self::getColor('darkKhaki', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark lava".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkLava($inOutputFormat=null) {
		return self::getColor('darkLava', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark lavender".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkLavender($inOutputFormat=null) {
		return self::getColor('darkLavender', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark liver".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkLiver($inOutputFormat=null) {
		return self::getColor('darkLiver', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark liver (horses)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkLiverHorses($inOutputFormat=null) {
		return self::getColor('darkLiverHorses', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark magenta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkMagenta($inOutputFormat=null) {
		return self::getColor('darkMagenta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark medium gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkMediumGray($inOutputFormat=null) {
		return self::getColor('darkMediumGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark midnight blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkMidnightBlue($inOutputFormat=null) {
		return self::getColor('darkMidnightBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark moss green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkMossGreen($inOutputFormat=null) {
		return self::getColor('darkMossGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark olive green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkOliveGreen($inOutputFormat=null) {
		return self::getColor('darkOliveGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkOrange($inOutputFormat=null) {
		return self::getColor('darkOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark orchid".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkOrchid($inOutputFormat=null) {
		return self::getColor('darkOrchid', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark pastel blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkPastelBlue($inOutputFormat=null) {
		return self::getColor('darkPastelBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark pastel green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkPastelGreen($inOutputFormat=null) {
		return self::getColor('darkPastelGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark pastel purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkPastelPurple($inOutputFormat=null) {
		return self::getColor('darkPastelPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark pastel red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkPastelRed($inOutputFormat=null) {
		return self::getColor('darkPastelRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkPink($inOutputFormat=null) {
		return self::getColor('darkPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark powder blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkPowderBlue($inOutputFormat=null) {
		return self::getColor('darkPowderBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark puce".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkPuce($inOutputFormat=null) {
		return self::getColor('darkPuce', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkPurple($inOutputFormat=null) {
		return self::getColor('darkPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark raspberry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkRaspberry($inOutputFormat=null) {
		return self::getColor('darkRaspberry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkRed($inOutputFormat=null) {
		return self::getColor('darkRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark salmon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkSalmon($inOutputFormat=null) {
		return self::getColor('darkSalmon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark scarlet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkScarlet($inOutputFormat=null) {
		return self::getColor('darkScarlet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark sea green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkSeaGreen($inOutputFormat=null) {
		return self::getColor('darkSeaGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark sienna".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkSienna($inOutputFormat=null) {
		return self::getColor('darkSienna', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark sky blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkSkyBlue($inOutputFormat=null) {
		return self::getColor('darkSkyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark slate blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkSlateBlue($inOutputFormat=null) {
		return self::getColor('darkSlateBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark slate gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkSlateGray($inOutputFormat=null) {
		return self::getColor('darkSlateGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark spring green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkSpringGreen($inOutputFormat=null) {
		return self::getColor('darkSpringGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark tan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkTan($inOutputFormat=null) {
		return self::getColor('darkTan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark tangerine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkTangerine($inOutputFormat=null) {
		return self::getColor('darkTangerine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark taupe".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkTaupe($inOutputFormat=null) {
		return self::getColor('darkTaupe', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark terra cotta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkTerraCotta($inOutputFormat=null) {
		return self::getColor('darkTerraCotta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark turquoise".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkTurquoise($inOutputFormat=null) {
		return self::getColor('darkTurquoise', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark vanilla".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkVanilla($inOutputFormat=null) {
		return self::getColor('darkVanilla', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkViolet($inOutputFormat=null) {
		return self::getColor('darkViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dark yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function darkYellow($inOutputFormat=null) {
		return self::getColor('darkYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dartmouth green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function dartmouthGreen($inOutputFormat=null) {
		return self::getColor('dartmouthGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Davy\'s grey".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function davysGrey($inOutputFormat=null) {
		return self::getColor('davysGrey', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Debian red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function debianRed($inOutputFormat=null) {
		return self::getColor('debianRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepGreen($inOutputFormat=null) {
		return self::getColor('deepGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepRed($inOutputFormat=null) {
		return self::getColor('deepRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep Space Sparkle".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepSpaceSparkle($inOutputFormat=null) {
		return self::getColor('deepSpaceSparkle', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep Taupe".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepTaupe($inOutputFormat=null) {
		return self::getColor('deepTaupe', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep Tuscan red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepTuscanRed($inOutputFormat=null) {
		return self::getColor('deepTuscanRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep aquamarine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepAquamarine($inOutputFormat=null) {
		return self::getColor('deepAquamarine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep carmine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepCarmine($inOutputFormat=null) {
		return self::getColor('deepCarmine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep carmine pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepCarminePink($inOutputFormat=null) {
		return self::getColor('deepCarminePink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep carrot orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepCarrotOrange($inOutputFormat=null) {
		return self::getColor('deepCarrotOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep cerise".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepCerise($inOutputFormat=null) {
		return self::getColor('deepCerise', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep champagne".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepChampagne($inOutputFormat=null) {
		return self::getColor('deepChampagne', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep chestnut".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepChestnut($inOutputFormat=null) {
		return self::getColor('deepChestnut', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep coffee".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepCoffee($inOutputFormat=null) {
		return self::getColor('deepCoffee', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep fuchsia".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepFuchsia($inOutputFormat=null) {
		return self::getColor('deepFuchsia', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep green-cyan turquoise".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepGreenCyanTurquoise($inOutputFormat=null) {
		return self::getColor('deepGreenCyanTurquoise', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep jungle green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepJungleGreen($inOutputFormat=null) {
		return self::getColor('deepJungleGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep koamaru".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepKoamaru($inOutputFormat=null) {
		return self::getColor('deepKoamaru', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep lemon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepLemon($inOutputFormat=null) {
		return self::getColor('deepLemon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep lilac".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepLilac($inOutputFormat=null) {
		return self::getColor('deepLilac', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep magenta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepMagenta($inOutputFormat=null) {
		return self::getColor('deepMagenta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep maroon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepMaroon($inOutputFormat=null) {
		return self::getColor('deepMaroon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep mauve".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepMauve($inOutputFormat=null) {
		return self::getColor('deepMauve', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep moss green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepMossGreen($inOutputFormat=null) {
		return self::getColor('deepMossGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep peach".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepPeach($inOutputFormat=null) {
		return self::getColor('deepPeach', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepPink($inOutputFormat=null) {
		return self::getColor('deepPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep puce".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepPuce($inOutputFormat=null) {
		return self::getColor('deepPuce', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep ruby".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepRuby($inOutputFormat=null) {
		return self::getColor('deepRuby', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep saffron".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepSaffron($inOutputFormat=null) {
		return self::getColor('deepSaffron', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep sky blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepSkyBlue($inOutputFormat=null) {
		return self::getColor('deepSkyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep spring bud".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepSpringBud($inOutputFormat=null) {
		return self::getColor('deepSpringBud', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deep violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deepViolet($inOutputFormat=null) {
		return self::getColor('deepViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Deer".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function deer($inOutputFormat=null) {
		return self::getColor('deer', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Denim".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function denim($inOutputFormat=null) {
		return self::getColor('denim', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Denim Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function denimBlue($inOutputFormat=null) {
		return self::getColor('denimBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Desaturated cyan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function desaturatedCyan($inOutputFormat=null) {
		return self::getColor('desaturatedCyan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Desert".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function desert($inOutputFormat=null) {
		return self::getColor('desert', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Desert sand".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function desertSand($inOutputFormat=null) {
		return self::getColor('desertSand', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Desire".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function desire($inOutputFormat=null) {
		return self::getColor('desire', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Diamond".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function diamond($inOutputFormat=null) {
		return self::getColor('diamond', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dim gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function dimGray($inOutputFormat=null) {
		return self::getColor('dimGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dingy Dungeon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function dingyDungeon($inOutputFormat=null) {
		return self::getColor('dingyDungeon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dirt".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function dirt($inOutputFormat=null) {
		return self::getColor('dirt', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dodger blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function dodgerBlue($inOutputFormat=null) {
		return self::getColor('dodgerBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dogwood rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function dogwoodRose($inOutputFormat=null) {
		return self::getColor('dogwoodRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dollar bill".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function dollarBill($inOutputFormat=null) {
		return self::getColor('dollarBill', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dolphin Gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function dolphinGray($inOutputFormat=null) {
		return self::getColor('dolphinGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Donkey brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function donkeyBrown($inOutputFormat=null) {
		return self::getColor('donkeyBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Drab".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function drab($inOutputFormat=null) {
		return self::getColor('drab', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Duke blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function dukeBlue($inOutputFormat=null) {
		return self::getColor('dukeBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dust storm".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function dustStorm($inOutputFormat=null) {
		return self::getColor('dustStorm', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Dutch white".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function dutchWhite($inOutputFormat=null) {
		return self::getColor('dutchWhite', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Earth yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function earthYellow($inOutputFormat=null) {
		return self::getColor('earthYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ebony".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ebony($inOutputFormat=null) {
		return self::getColor('ebony', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ecru".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ecru($inOutputFormat=null) {
		return self::getColor('ecru', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Eerie black".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function eerieBlack($inOutputFormat=null) {
		return self::getColor('eerieBlack', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Eggplant".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function eggplant($inOutputFormat=null) {
		return self::getColor('eggplant', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Eggshell".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function eggshell($inOutputFormat=null) {
		return self::getColor('eggshell', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Egyptian blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function egyptianBlue($inOutputFormat=null) {
		return self::getColor('egyptianBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Electric blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function electricBlue($inOutputFormat=null) {
		return self::getColor('electricBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Electric crimson".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function electricCrimson($inOutputFormat=null) {
		return self::getColor('electricCrimson', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Electric cyan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function electricCyan($inOutputFormat=null) {
		return self::getColor('electricCyan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Electric green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function electricGreen($inOutputFormat=null) {
		return self::getColor('electricGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Electric indigo".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function electricIndigo($inOutputFormat=null) {
		return self::getColor('electricIndigo', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Electric lavender".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function electricLavender($inOutputFormat=null) {
		return self::getColor('electricLavender', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Electric lime".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function electricLime($inOutputFormat=null) {
		return self::getColor('electricLime', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Electric purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function electricPurple($inOutputFormat=null) {
		return self::getColor('electricPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Electric ultramarine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function electricUltramarine($inOutputFormat=null) {
		return self::getColor('electricUltramarine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Electric violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function electricViolet($inOutputFormat=null) {
		return self::getColor('electricViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Electric yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function electricYellow($inOutputFormat=null) {
		return self::getColor('electricYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Emerald".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function emerald($inOutputFormat=null) {
		return self::getColor('emerald', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Eminence".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function eminence($inOutputFormat=null) {
		return self::getColor('eminence', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "English green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function englishGreen($inOutputFormat=null) {
		return self::getColor('englishGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "English lavender".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function englishLavender($inOutputFormat=null) {
		return self::getColor('englishLavender', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "English red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function englishRed($inOutputFormat=null) {
		return self::getColor('englishRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "English vermillion".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function englishVermillion($inOutputFormat=null) {
		return self::getColor('englishVermillion', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "English violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function englishViolet($inOutputFormat=null) {
		return self::getColor('englishViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Eton blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function etonBlue($inOutputFormat=null) {
		return self::getColor('etonBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Eucalyptus".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function eucalyptus($inOutputFormat=null) {
		return self::getColor('eucalyptus', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fallow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fallow($inOutputFormat=null) {
		return self::getColor('fallow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Falu red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function faluRed($inOutputFormat=null) {
		return self::getColor('faluRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fandango".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fandango($inOutputFormat=null) {
		return self::getColor('fandango', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fandango pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fandangoPink($inOutputFormat=null) {
		return self::getColor('fandangoPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fashion fuchsia".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fashionFuchsia($inOutputFormat=null) {
		return self::getColor('fashionFuchsia', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fawn".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fawn($inOutputFormat=null) {
		return self::getColor('fawn', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Feldgrau".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function feldgrau($inOutputFormat=null) {
		return self::getColor('feldgrau', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Feldspar".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function feldspar($inOutputFormat=null) {
		return self::getColor('feldspar', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fern green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fernGreen($inOutputFormat=null) {
		return self::getColor('fernGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ferrari Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ferrariRed($inOutputFormat=null) {
		return self::getColor('ferrariRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Field drab".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fieldDrab($inOutputFormat=null) {
		return self::getColor('fieldDrab', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fiery Rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fieryRose($inOutputFormat=null) {
		return self::getColor('fieryRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fire engine red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fireEngineRed($inOutputFormat=null) {
		return self::getColor('fireEngineRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Firebrick".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function firebrick($inOutputFormat=null) {
		return self::getColor('firebrick', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Flame".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function flame($inOutputFormat=null) {
		return self::getColor('flame', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Flamingo pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function flamingoPink($inOutputFormat=null) {
		return self::getColor('flamingoPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Flattery".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function flattery($inOutputFormat=null) {
		return self::getColor('flattery', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Flavescent".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function flavescent($inOutputFormat=null) {
		return self::getColor('flavescent', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Flax".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function flax($inOutputFormat=null) {
		return self::getColor('flax', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Flirt".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function flirt($inOutputFormat=null) {
		return self::getColor('flirt', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Floral white".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function floralWhite($inOutputFormat=null) {
		return self::getColor('floralWhite', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fluorescent orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fluorescentOrange($inOutputFormat=null) {
		return self::getColor('fluorescentOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fluorescent pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fluorescentPink($inOutputFormat=null) {
		return self::getColor('fluorescentPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fluorescent yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fluorescentYellow($inOutputFormat=null) {
		return self::getColor('fluorescentYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Folly".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function folly($inOutputFormat=null) {
		return self::getColor('folly', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Forest green (traditional)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function forestGreenTraditional($inOutputFormat=null) {
		return self::getColor('forestGreenTraditional', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Forest green (web)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function forestGreenWeb($inOutputFormat=null) {
		return self::getColor('forestGreenWeb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French beige".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchBeige($inOutputFormat=null) {
		return self::getColor('frenchBeige', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French bistre".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchBistre($inOutputFormat=null) {
		return self::getColor('frenchBistre', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchBlue($inOutputFormat=null) {
		return self::getColor('frenchBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French fuchsia".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchFuchsia($inOutputFormat=null) {
		return self::getColor('frenchFuchsia', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French lilac".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchLilac($inOutputFormat=null) {
		return self::getColor('frenchLilac', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French lime".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchLime($inOutputFormat=null) {
		return self::getColor('frenchLime', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French mauve".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchMauve($inOutputFormat=null) {
		return self::getColor('frenchMauve', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchPink($inOutputFormat=null) {
		return self::getColor('frenchPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French plum".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchPlum($inOutputFormat=null) {
		return self::getColor('frenchPlum', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French puce".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchPuce($inOutputFormat=null) {
		return self::getColor('frenchPuce', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French raspberry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchRaspberry($inOutputFormat=null) {
		return self::getColor('frenchRaspberry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchRose($inOutputFormat=null) {
		return self::getColor('frenchRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French sky blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchSkyBlue($inOutputFormat=null) {
		return self::getColor('frenchSkyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchViolet($inOutputFormat=null) {
		return self::getColor('frenchViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "French wine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frenchWine($inOutputFormat=null) {
		return self::getColor('frenchWine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fresh Air".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function freshAir($inOutputFormat=null) {
		return self::getColor('freshAir', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Frostbite".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function frostbite($inOutputFormat=null) {
		return self::getColor('frostbite', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fuchsia".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fuchsia($inOutputFormat=null) {
		return self::getColor('fuchsia', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fuchsia (Crayola)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fuchsiaCrayola($inOutputFormat=null) {
		return self::getColor('fuchsiaCrayola', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fuchsia pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fuchsiaPink($inOutputFormat=null) {
		return self::getColor('fuchsiaPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fuchsia purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fuchsiaPurple($inOutputFormat=null) {
		return self::getColor('fuchsiaPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fuchsia rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fuchsiaRose($inOutputFormat=null) {
		return self::getColor('fuchsiaRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fulvous".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fulvous($inOutputFormat=null) {
		return self::getColor('fulvous', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Fuzzy Wuzzy".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function fuzzyWuzzy($inOutputFormat=null) {
		return self::getColor('fuzzyWuzzy', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "GO green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function goGreen($inOutputFormat=null) {
		return self::getColor('goGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Gainsboro".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function gainsboro($inOutputFormat=null) {
		return self::getColor('gainsboro', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Gamboge".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function gamboge($inOutputFormat=null) {
		return self::getColor('gamboge', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Gamboge orange (brown)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function gambogeOrangeBrown($inOutputFormat=null) {
		return self::getColor('gambogeOrangeBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Gargoyle Gas".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function gargoyleGas($inOutputFormat=null) {
		return self::getColor('gargoyleGas', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Generic viridian".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function genericViridian($inOutputFormat=null) {
		return self::getColor('genericViridian', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ghost white".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ghostWhite($inOutputFormat=null) {
		return self::getColor('ghostWhite', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Giant\'s Club".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function giantsClub($inOutputFormat=null) {
		return self::getColor('giantsClub', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Giants orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function giantsOrange($inOutputFormat=null) {
		return self::getColor('giantsOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ginger".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ginger($inOutputFormat=null) {
		return self::getColor('ginger', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Glaucous".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function glaucous($inOutputFormat=null) {
		return self::getColor('glaucous', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Glitter".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function glitter($inOutputFormat=null) {
		return self::getColor('glitter', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Glossy Grape".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function glossyGrape($inOutputFormat=null) {
		return self::getColor('glossyGrape', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Gold (metallic)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function goldMetallic($inOutputFormat=null) {
		return self::getColor('goldMetallic', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Gold (web) (Golden)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function goldWebGolden($inOutputFormat=null) {
		return self::getColor('goldWebGolden', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Gold Fusion".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function goldFusion($inOutputFormat=null) {
		return self::getColor('goldFusion', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Golden brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function goldenBrown($inOutputFormat=null) {
		return self::getColor('goldenBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Golden poppy".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function goldenPoppy($inOutputFormat=null) {
		return self::getColor('goldenPoppy', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Golden yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function goldenYellow($inOutputFormat=null) {
		return self::getColor('goldenYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Goldenrod".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function goldenrod($inOutputFormat=null) {
		return self::getColor('goldenrod', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Granite Gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function graniteGray($inOutputFormat=null) {
		return self::getColor('graniteGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Granny Smith Apple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function grannySmithApple($inOutputFormat=null) {
		return self::getColor('grannySmithApple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Grape".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function grape($inOutputFormat=null) {
		return self::getColor('grape', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function gray($inOutputFormat=null) {
		return self::getColor('gray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Gray (HTML/CSS gray)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function grayHtmlCssGray($inOutputFormat=null) {
		return self::getColor('grayHtmlCssGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Gray (X11 gray)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function grayX11Gray($inOutputFormat=null) {
		return self::getColor('grayX11Gray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Gray-asparagus".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function grayAsparagus($inOutputFormat=null) {
		return self::getColor('grayAsparagus', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Gray-blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function grayBlue($inOutputFormat=null) {
		return self::getColor('grayBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Green (Color Wheel) (X11 green)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function greenColorWheelX11Green($inOutputFormat=null) {
		return self::getColor('greenColorWheelX11Green', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Green (Crayola)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function greenCrayola($inOutputFormat=null) {
		return self::getColor('greenCrayola', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Green (HTML/CSS color)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function greenHtmlCssColor($inOutputFormat=null) {
		return self::getColor('greenHtmlCssColor', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Green (Munsell)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function greenMunsell($inOutputFormat=null) {
		return self::getColor('greenMunsell', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Green (NCS)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function greenNcs($inOutputFormat=null) {
		return self::getColor('greenNcs', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Green (Pantone)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function greenPantone($inOutputFormat=null) {
		return self::getColor('greenPantone', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Green (RYB)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function greenRyb($inOutputFormat=null) {
		return self::getColor('greenRyb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Green (pigment)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function greenPigment($inOutputFormat=null) {
		return self::getColor('greenPigment', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Green Lizard".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function greenLizard($inOutputFormat=null) {
		return self::getColor('greenLizard', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Green Sheen".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function greenSheen($inOutputFormat=null) {
		return self::getColor('greenSheen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Green-blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function greenBlue($inOutputFormat=null) {
		return self::getColor('greenBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Green-cyan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function greenCyan($inOutputFormat=null) {
		return self::getColor('greenCyan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Green-yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function greenYellow($inOutputFormat=null) {
		return self::getColor('greenYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Grizzly".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function grizzly($inOutputFormat=null) {
		return self::getColor('grizzly', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Grullo".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function grullo($inOutputFormat=null) {
		return self::getColor('grullo', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Gunmetal".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function gunmetal($inOutputFormat=null) {
		return self::getColor('gunmetal', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Guppie green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function guppieGreen($inOutputFormat=null) {
		return self::getColor('guppieGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Halayà úbe".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function halayàúbe($inOutputFormat=null) {
		return self::getColor('halayàúbe', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Han blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function hanBlue($inOutputFormat=null) {
		return self::getColor('hanBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Han purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function hanPurple($inOutputFormat=null) {
		return self::getColor('hanPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Hansa yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function hansaYellow($inOutputFormat=null) {
		return self::getColor('hansaYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Harlequin".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function harlequin($inOutputFormat=null) {
		return self::getColor('harlequin', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Harlequin green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function harlequinGreen($inOutputFormat=null) {
		return self::getColor('harlequinGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Harvard crimson".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function harvardCrimson($inOutputFormat=null) {
		return self::getColor('harvardCrimson', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Harvest gold".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function harvestGold($inOutputFormat=null) {
		return self::getColor('harvestGold', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Heart Gold".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function heartGold($inOutputFormat=null) {
		return self::getColor('heartGold', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Heat Wave".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function heatWave($inOutputFormat=null) {
		return self::getColor('heatWave', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Heidelberg Red[2]".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function heidelbergRed2($inOutputFormat=null) {
		return self::getColor('heidelbergRed2', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Heliotrope".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function heliotrope($inOutputFormat=null) {
		return self::getColor('heliotrope', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Heliotrope gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function heliotropeGray($inOutputFormat=null) {
		return self::getColor('heliotropeGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Heliotrope magenta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function heliotropeMagenta($inOutputFormat=null) {
		return self::getColor('heliotropeMagenta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Hollywood cerise".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function hollywoodCerise($inOutputFormat=null) {
		return self::getColor('hollywoodCerise', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Honeydew".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function honeydew($inOutputFormat=null) {
		return self::getColor('honeydew', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Honolulu blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function honoluluBlue($inOutputFormat=null) {
		return self::getColor('honoluluBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Hooker\'s green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function hookersGreen($inOutputFormat=null) {
		return self::getColor('hookersGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Hot magenta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function hotMagenta($inOutputFormat=null) {
		return self::getColor('hotMagenta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Hot pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function hotPink($inOutputFormat=null) {
		return self::getColor('hotPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Hunter green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function hunterGreen($inOutputFormat=null) {
		return self::getColor('hunterGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Iceberg".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function iceberg($inOutputFormat=null) {
		return self::getColor('iceberg', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Icterine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function icterine($inOutputFormat=null) {
		return self::getColor('icterine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Iguana Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function iguanaGreen($inOutputFormat=null) {
		return self::getColor('iguanaGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Illuminating Emerald".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function illuminatingEmerald($inOutputFormat=null) {
		return self::getColor('illuminatingEmerald', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Imperial".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function imperial($inOutputFormat=null) {
		return self::getColor('imperial', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Imperial blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function imperialBlue($inOutputFormat=null) {
		return self::getColor('imperialBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Imperial purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function imperialPurple($inOutputFormat=null) {
		return self::getColor('imperialPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Imperial red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function imperialRed($inOutputFormat=null) {
		return self::getColor('imperialRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Inchworm".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function inchworm($inOutputFormat=null) {
		return self::getColor('inchworm', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Independence".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function independence($inOutputFormat=null) {
		return self::getColor('independence', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "India green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function indiaGreen($inOutputFormat=null) {
		return self::getColor('indiaGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Indian red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function indianRed($inOutputFormat=null) {
		return self::getColor('indianRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Indian yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function indianYellow($inOutputFormat=null) {
		return self::getColor('indianYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Indigo".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function indigo($inOutputFormat=null) {
		return self::getColor('indigo', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Indigo (web)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function indigoWeb($inOutputFormat=null) {
		return self::getColor('indigoWeb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Indigo dye".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function indigoDye($inOutputFormat=null) {
		return self::getColor('indigoDye', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Infra Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function infraRed($inOutputFormat=null) {
		return self::getColor('infraRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Interdimensional Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function interdimensionalBlue($inOutputFormat=null) {
		return self::getColor('interdimensionalBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "International Klein Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function internationalKleinBlue($inOutputFormat=null) {
		return self::getColor('internationalKleinBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "International orange (Golden Gate Bridge)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function internationalOrangeGoldenGateBridge($inOutputFormat=null) {
		return self::getColor('internationalOrangeGoldenGateBridge', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "International orange (aerospace)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function internationalOrangeAerospace($inOutputFormat=null) {
		return self::getColor('internationalOrangeAerospace', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "International orange (engineering)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function internationalOrangeEngineering($inOutputFormat=null) {
		return self::getColor('internationalOrangeEngineering', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Iris".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function iris($inOutputFormat=null) {
		return self::getColor('iris', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Irresistible".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function irresistible($inOutputFormat=null) {
		return self::getColor('irresistible', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Isabelline".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function isabelline($inOutputFormat=null) {
		return self::getColor('isabelline', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Islamic green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function islamicGreen($inOutputFormat=null) {
		return self::getColor('islamicGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Italian sky blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function italianSkyBlue($inOutputFormat=null) {
		return self::getColor('italianSkyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ivory".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ivory($inOutputFormat=null) {
		return self::getColor('ivory', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Jade".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function jade($inOutputFormat=null) {
		return self::getColor('jade', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Japanese carmine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function japaneseCarmine($inOutputFormat=null) {
		return self::getColor('japaneseCarmine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Japanese indigo".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function japaneseIndigo($inOutputFormat=null) {
		return self::getColor('japaneseIndigo', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Japanese violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function japaneseViolet($inOutputFormat=null) {
		return self::getColor('japaneseViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Jasmine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function jasmine($inOutputFormat=null) {
		return self::getColor('jasmine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Jasper".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function jasper($inOutputFormat=null) {
		return self::getColor('jasper', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Jazzberry jam".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function jazzberryJam($inOutputFormat=null) {
		return self::getColor('jazzberryJam', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Jelly Bean".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function jellyBean($inOutputFormat=null) {
		return self::getColor('jellyBean', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Jet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function jet($inOutputFormat=null) {
		return self::getColor('jet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Jonquil".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function jonquil($inOutputFormat=null) {
		return self::getColor('jonquil', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Jordy blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function jordyBlue($inOutputFormat=null) {
		return self::getColor('jordyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "June bud".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function juneBud($inOutputFormat=null) {
		return self::getColor('juneBud', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Jungle green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function jungleGreen($inOutputFormat=null) {
		return self::getColor('jungleGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "KSU Purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ksuPurple($inOutputFormat=null) {
		return self::getColor('ksuPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "KU Crimson".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function kuCrimson($inOutputFormat=null) {
		return self::getColor('kuCrimson', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Kelly green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function kellyGreen($inOutputFormat=null) {
		return self::getColor('kellyGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Kenyan copper".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function kenyanCopper($inOutputFormat=null) {
		return self::getColor('kenyanCopper', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Keppel".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function keppel($inOutputFormat=null) {
		return self::getColor('keppel', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Key Lime".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function keyLime($inOutputFormat=null) {
		return self::getColor('keyLime', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Khaki (HTML/CSS) (Khaki)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function khakiHtmlCssKhaki($inOutputFormat=null) {
		return self::getColor('khakiHtmlCssKhaki', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Khaki (X11) (Light khaki)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function khakiX11LightKhaki($inOutputFormat=null) {
		return self::getColor('khakiX11LightKhaki', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Kiwi".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function kiwi($inOutputFormat=null) {
		return self::getColor('kiwi', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Kobe".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function kobe($inOutputFormat=null) {
		return self::getColor('kobe', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Kobi".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function kobi($inOutputFormat=null) {
		return self::getColor('kobi', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Kobicha".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function kobicha($inOutputFormat=null) {
		return self::getColor('kobicha', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Kombu green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function kombuGreen($inOutputFormat=null) {
		return self::getColor('kombuGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "La Salle Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function laSalleGreen($inOutputFormat=null) {
		return self::getColor('laSalleGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Languid lavender".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function languidLavender($inOutputFormat=null) {
		return self::getColor('languidLavender', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lapis lazuli".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lapisLazuli($inOutputFormat=null) {
		return self::getColor('lapisLazuli', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Laser Lemon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function laserLemon($inOutputFormat=null) {
		return self::getColor('laserLemon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Laurel green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function laurelGreen($inOutputFormat=null) {
		return self::getColor('laurelGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lava".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lava($inOutputFormat=null) {
		return self::getColor('lava', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lavender (floral)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lavenderFloral($inOutputFormat=null) {
		return self::getColor('lavenderFloral', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lavender (web)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lavenderWeb($inOutputFormat=null) {
		return self::getColor('lavenderWeb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lavender blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lavenderBlue($inOutputFormat=null) {
		return self::getColor('lavenderBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lavender blush".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lavenderBlush($inOutputFormat=null) {
		return self::getColor('lavenderBlush', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lavender gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lavenderGray($inOutputFormat=null) {
		return self::getColor('lavenderGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lavender indigo".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lavenderIndigo($inOutputFormat=null) {
		return self::getColor('lavenderIndigo', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lavender magenta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lavenderMagenta($inOutputFormat=null) {
		return self::getColor('lavenderMagenta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lavender mist".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lavenderMist($inOutputFormat=null) {
		return self::getColor('lavenderMist', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lavender pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lavenderPink($inOutputFormat=null) {
		return self::getColor('lavenderPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lavender purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lavenderPurple($inOutputFormat=null) {
		return self::getColor('lavenderPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lavender rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lavenderRose($inOutputFormat=null) {
		return self::getColor('lavenderRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lawn green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lawnGreen($inOutputFormat=null) {
		return self::getColor('lawnGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lemon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lemon($inOutputFormat=null) {
		return self::getColor('lemon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lemon chiffon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lemonChiffon($inOutputFormat=null) {
		return self::getColor('lemonChiffon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lemon curry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lemonCurry($inOutputFormat=null) {
		return self::getColor('lemonCurry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lemon glacier".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lemonGlacier($inOutputFormat=null) {
		return self::getColor('lemonGlacier', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lemon lime".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lemonLime($inOutputFormat=null) {
		return self::getColor('lemonLime', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lemon meringue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lemonMeringue($inOutputFormat=null) {
		return self::getColor('lemonMeringue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lemon yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lemonYellow($inOutputFormat=null) {
		return self::getColor('lemonYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Liberty".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function liberty($inOutputFormat=null) {
		return self::getColor('liberty', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Licorice".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function licorice($inOutputFormat=null) {
		return self::getColor('licorice', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light French beige".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightFrenchBeige($inOutputFormat=null) {
		return self::getColor('lightFrenchBeige', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light Thulian pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightThulianPink($inOutputFormat=null) {
		return self::getColor('lightThulianPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light apricot".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightApricot($inOutputFormat=null) {
		return self::getColor('lightApricot', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightBlue($inOutputFormat=null) {
		return self::getColor('lightBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightBrown($inOutputFormat=null) {
		return self::getColor('lightBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light carmine pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightCarminePink($inOutputFormat=null) {
		return self::getColor('lightCarminePink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light cobalt blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightCobaltBlue($inOutputFormat=null) {
		return self::getColor('lightCobaltBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light coral".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightCoral($inOutputFormat=null) {
		return self::getColor('lightCoral', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light cornflower blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightCornflowerBlue($inOutputFormat=null) {
		return self::getColor('lightCornflowerBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light crimson".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightCrimson($inOutputFormat=null) {
		return self::getColor('lightCrimson', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light cyan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightCyan($inOutputFormat=null) {
		return self::getColor('lightCyan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light deep pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightDeepPink($inOutputFormat=null) {
		return self::getColor('lightDeepPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light fuchsia pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightFuchsiaPink($inOutputFormat=null) {
		return self::getColor('lightFuchsiaPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light goldenrod yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightGoldenrodYellow($inOutputFormat=null) {
		return self::getColor('lightGoldenrodYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightGray($inOutputFormat=null) {
		return self::getColor('lightGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light grayish magenta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightGrayishMagenta($inOutputFormat=null) {
		return self::getColor('lightGrayishMagenta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightGreen($inOutputFormat=null) {
		return self::getColor('lightGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light hot pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightHotPink($inOutputFormat=null) {
		return self::getColor('lightHotPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light khaki".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightKhaki($inOutputFormat=null) {
		return self::getColor('lightKhaki', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light medium orchid".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightMediumOrchid($inOutputFormat=null) {
		return self::getColor('lightMediumOrchid', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light moss green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightMossGreen($inOutputFormat=null) {
		return self::getColor('lightMossGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light orchid".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightOrchid($inOutputFormat=null) {
		return self::getColor('lightOrchid', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light pastel purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightPastelPurple($inOutputFormat=null) {
		return self::getColor('lightPastelPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightPink($inOutputFormat=null) {
		return self::getColor('lightPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light red ochre".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightRedOchre($inOutputFormat=null) {
		return self::getColor('lightRedOchre', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light salmon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightSalmon($inOutputFormat=null) {
		return self::getColor('lightSalmon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light salmon pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightSalmonPink($inOutputFormat=null) {
		return self::getColor('lightSalmonPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light sea green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightSeaGreen($inOutputFormat=null) {
		return self::getColor('lightSeaGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light sky blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightSkyBlue($inOutputFormat=null) {
		return self::getColor('lightSkyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light slate gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightSlateGray($inOutputFormat=null) {
		return self::getColor('lightSlateGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light steel blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightSteelBlue($inOutputFormat=null) {
		return self::getColor('lightSteelBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light taupe".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightTaupe($inOutputFormat=null) {
		return self::getColor('lightTaupe', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Light yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lightYellow($inOutputFormat=null) {
		return self::getColor('lightYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lilac".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lilac($inOutputFormat=null) {
		return self::getColor('lilac', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lilac Luster".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lilacLuster($inOutputFormat=null) {
		return self::getColor('lilacLuster', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lime (color wheel)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function limeColorWheel($inOutputFormat=null) {
		return self::getColor('limeColorWheel', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lime (web) (X11 green)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function limeWebX11Green($inOutputFormat=null) {
		return self::getColor('limeWebX11Green', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lime green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function limeGreen($inOutputFormat=null) {
		return self::getColor('limeGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Limerick".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function limerick($inOutputFormat=null) {
		return self::getColor('limerick', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lincoln green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lincolnGreen($inOutputFormat=null) {
		return self::getColor('lincolnGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Linen".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function linen($inOutputFormat=null) {
		return self::getColor('linen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lion".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lion($inOutputFormat=null) {
		return self::getColor('lion', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Liseran Purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function liseranPurple($inOutputFormat=null) {
		return self::getColor('liseranPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Little boy blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function littleBoyBlue($inOutputFormat=null) {
		return self::getColor('littleBoyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Liver".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function liver($inOutputFormat=null) {
		return self::getColor('liver', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Liver (dogs)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function liverDogs($inOutputFormat=null) {
		return self::getColor('liverDogs', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Liver (organ)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function liverOrgan($inOutputFormat=null) {
		return self::getColor('liverOrgan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Liver chestnut".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function liverChestnut($inOutputFormat=null) {
		return self::getColor('liverChestnut', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Livid".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function livid($inOutputFormat=null) {
		return self::getColor('livid', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lumber".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lumber($inOutputFormat=null) {
		return self::getColor('lumber', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Lust".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function lust($inOutputFormat=null) {
		return self::getColor('lust', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "MSU Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function msuGreen($inOutputFormat=null) {
		return self::getColor('msuGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maastricht Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maastrichtBlue($inOutputFormat=null) {
		return self::getColor('maastrichtBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Macaroni and Cheese".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function macaroniAndCheese($inOutputFormat=null) {
		return self::getColor('macaroniAndCheese', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Madder Lake".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function madderLake($inOutputFormat=null) {
		return self::getColor('madderLake', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Magenta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function magenta($inOutputFormat=null) {
		return self::getColor('magenta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Magenta (Crayola)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function magentaCrayola($inOutputFormat=null) {
		return self::getColor('magentaCrayola', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Magenta (Pantone)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function magentaPantone($inOutputFormat=null) {
		return self::getColor('magentaPantone', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Magenta (dye)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function magentaDye($inOutputFormat=null) {
		return self::getColor('magentaDye', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Magenta (process)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function magentaProcess($inOutputFormat=null) {
		return self::getColor('magentaProcess', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Magenta haze".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function magentaHaze($inOutputFormat=null) {
		return self::getColor('magentaHaze', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Magenta-pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function magentaPink($inOutputFormat=null) {
		return self::getColor('magentaPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Magic Potion".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function magicPotion($inOutputFormat=null) {
		return self::getColor('magicPotion', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Magic mint".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function magicMint($inOutputFormat=null) {
		return self::getColor('magicMint', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Magnolia".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function magnolia($inOutputFormat=null) {
		return self::getColor('magnolia', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mahogany".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mahogany($inOutputFormat=null) {
		return self::getColor('mahogany', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maize".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maize($inOutputFormat=null) {
		return self::getColor('maize', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Majorelle Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function majorelleBlue($inOutputFormat=null) {
		return self::getColor('majorelleBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Malachite".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function malachite($inOutputFormat=null) {
		return self::getColor('malachite', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Manatee".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function manatee($inOutputFormat=null) {
		return self::getColor('manatee', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mandarin".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mandarin($inOutputFormat=null) {
		return self::getColor('mandarin', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mango Tango".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mangoTango($inOutputFormat=null) {
		return self::getColor('mangoTango', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mantis".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mantis($inOutputFormat=null) {
		return self::getColor('mantis', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mardi Gras".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mardiGras($inOutputFormat=null) {
		return self::getColor('mardiGras', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Marigold".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function marigold($inOutputFormat=null) {
		return self::getColor('marigold', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maroon (Crayola)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maroonCrayola($inOutputFormat=null) {
		return self::getColor('maroonCrayola', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maroon (HTML/CSS)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maroonHtmlCss($inOutputFormat=null) {
		return self::getColor('maroonHtmlCss', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maroon (X11)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maroonX11($inOutputFormat=null) {
		return self::getColor('maroonX11', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mauve".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mauve($inOutputFormat=null) {
		return self::getColor('mauve', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mauve taupe".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mauveTaupe($inOutputFormat=null) {
		return self::getColor('mauveTaupe', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mauvelous".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mauvelous($inOutputFormat=null) {
		return self::getColor('mauvelous', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maximum Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maximumBlue($inOutputFormat=null) {
		return self::getColor('maximumBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maximum Blue Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maximumBlueGreen($inOutputFormat=null) {
		return self::getColor('maximumBlueGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maximum Blue Purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maximumBluePurple($inOutputFormat=null) {
		return self::getColor('maximumBluePurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maximum Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maximumGreen($inOutputFormat=null) {
		return self::getColor('maximumGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maximum Green Yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maximumGreenYellow($inOutputFormat=null) {
		return self::getColor('maximumGreenYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maximum Purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maximumPurple($inOutputFormat=null) {
		return self::getColor('maximumPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maximum Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maximumRed($inOutputFormat=null) {
		return self::getColor('maximumRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maximum Red Purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maximumRedPurple($inOutputFormat=null) {
		return self::getColor('maximumRedPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maximum Yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maximumYellow($inOutputFormat=null) {
		return self::getColor('maximumYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maximum Yellow Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function maximumYellowRed($inOutputFormat=null) {
		return self::getColor('maximumYellowRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "May green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mayGreen($inOutputFormat=null) {
		return self::getColor('mayGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Maya blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mayaBlue($inOutputFormat=null) {
		return self::getColor('mayaBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Meat brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function meatBrown($inOutputFormat=null) {
		return self::getColor('meatBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium Persian blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumPersianBlue($inOutputFormat=null) {
		return self::getColor('mediumPersianBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium Tuscan red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumTuscanRed($inOutputFormat=null) {
		return self::getColor('mediumTuscanRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium aquamarine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumAquamarine($inOutputFormat=null) {
		return self::getColor('mediumAquamarine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumBlue($inOutputFormat=null) {
		return self::getColor('mediumBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium candy apple red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumCandyAppleRed($inOutputFormat=null) {
		return self::getColor('mediumCandyAppleRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium carmine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumCarmine($inOutputFormat=null) {
		return self::getColor('mediumCarmine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium champagne".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumChampagne($inOutputFormat=null) {
		return self::getColor('mediumChampagne', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium electric blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumElectricBlue($inOutputFormat=null) {
		return self::getColor('mediumElectricBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium jungle green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumJungleGreen($inOutputFormat=null) {
		return self::getColor('mediumJungleGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium lavender magenta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumLavenderMagenta($inOutputFormat=null) {
		return self::getColor('mediumLavenderMagenta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium orchid".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumOrchid($inOutputFormat=null) {
		return self::getColor('mediumOrchid', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumPurple($inOutputFormat=null) {
		return self::getColor('mediumPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium red-violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumRedViolet($inOutputFormat=null) {
		return self::getColor('mediumRedViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium ruby".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumRuby($inOutputFormat=null) {
		return self::getColor('mediumRuby', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium sea green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumSeaGreen($inOutputFormat=null) {
		return self::getColor('mediumSeaGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium sky blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumSkyBlue($inOutputFormat=null) {
		return self::getColor('mediumSkyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium slate blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumSlateBlue($inOutputFormat=null) {
		return self::getColor('mediumSlateBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium spring bud".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumSpringBud($inOutputFormat=null) {
		return self::getColor('mediumSpringBud', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium spring green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumSpringGreen($inOutputFormat=null) {
		return self::getColor('mediumSpringGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium taupe".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumTaupe($inOutputFormat=null) {
		return self::getColor('mediumTaupe', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium turquoise".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumTurquoise($inOutputFormat=null) {
		return self::getColor('mediumTurquoise', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium vermilion".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumVermilion($inOutputFormat=null) {
		return self::getColor('mediumVermilion', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Medium violet-red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mediumVioletRed($inOutputFormat=null) {
		return self::getColor('mediumVioletRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mellow apricot".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mellowApricot($inOutputFormat=null) {
		return self::getColor('mellowApricot', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mellow yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mellowYellow($inOutputFormat=null) {
		return self::getColor('mellowYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Melon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function melon($inOutputFormat=null) {
		return self::getColor('melon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Metallic Seaweed".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function metallicSeaweed($inOutputFormat=null) {
		return self::getColor('metallicSeaweed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Metallic Sunburst".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function metallicSunburst($inOutputFormat=null) {
		return self::getColor('metallicSunburst', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mexican pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mexicanPink($inOutputFormat=null) {
		return self::getColor('mexicanPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Middle Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function middleBlue($inOutputFormat=null) {
		return self::getColor('middleBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Middle Blue Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function middleBlueGreen($inOutputFormat=null) {
		return self::getColor('middleBlueGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Middle Blue Purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function middleBluePurple($inOutputFormat=null) {
		return self::getColor('middleBluePurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Middle Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function middleGreen($inOutputFormat=null) {
		return self::getColor('middleGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Middle Green Yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function middleGreenYellow($inOutputFormat=null) {
		return self::getColor('middleGreenYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Middle Purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function middlePurple($inOutputFormat=null) {
		return self::getColor('middlePurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Middle Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function middleRed($inOutputFormat=null) {
		return self::getColor('middleRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Middle Red Purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function middleRedPurple($inOutputFormat=null) {
		return self::getColor('middleRedPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Middle Yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function middleYellow($inOutputFormat=null) {
		return self::getColor('middleYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Middle Yellow Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function middleYellowRed($inOutputFormat=null) {
		return self::getColor('middleYellowRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Midnight".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function midnight($inOutputFormat=null) {
		return self::getColor('midnight', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Midnight blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function midnightBlue($inOutputFormat=null) {
		return self::getColor('midnightBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Midnight green (eagle green)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function midnightGreenEagleGreen($inOutputFormat=null) {
		return self::getColor('midnightGreenEagleGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mikado yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mikadoYellow($inOutputFormat=null) {
		return self::getColor('mikadoYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mimi Pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mimiPink($inOutputFormat=null) {
		return self::getColor('mimiPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mindaro".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mindaro($inOutputFormat=null) {
		return self::getColor('mindaro', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ming".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ming($inOutputFormat=null) {
		return self::getColor('ming', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Minion Yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function minionYellow($inOutputFormat=null) {
		return self::getColor('minionYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mint".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mint($inOutputFormat=null) {
		return self::getColor('mint', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mint cream".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mintCream($inOutputFormat=null) {
		return self::getColor('mintCream', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mint green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mintGreen($inOutputFormat=null) {
		return self::getColor('mintGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Misty Moss".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mistyMoss($inOutputFormat=null) {
		return self::getColor('mistyMoss', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Misty rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mistyRose($inOutputFormat=null) {
		return self::getColor('mistyRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Moccasin".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function moccasin($inOutputFormat=null) {
		return self::getColor('moccasin', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mode beige".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function modeBeige($inOutputFormat=null) {
		return self::getColor('modeBeige', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Moonstone blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function moonstoneBlue($inOutputFormat=null) {
		return self::getColor('moonstoneBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mordant red 19".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mordantRed19($inOutputFormat=null) {
		return self::getColor('mordantRed19', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Moss green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mossGreen($inOutputFormat=null) {
		return self::getColor('mossGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mountain Meadow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mountainMeadow($inOutputFormat=null) {
		return self::getColor('mountainMeadow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mountbatten pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mountbattenPink($inOutputFormat=null) {
		return self::getColor('mountbattenPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mughal green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mughalGreen($inOutputFormat=null) {
		return self::getColor('mughalGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mulberry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mulberry($inOutputFormat=null) {
		return self::getColor('mulberry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mummy\'s Tomb".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mummysTomb($inOutputFormat=null) {
		return self::getColor('mummysTomb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mustard".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mustard($inOutputFormat=null) {
		return self::getColor('mustard', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Myrtle green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function myrtleGreen($inOutputFormat=null) {
		return self::getColor('myrtleGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mystic".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mystic($inOutputFormat=null) {
		return self::getColor('mystic', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Mystic Maroon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function mysticMaroon($inOutputFormat=null) {
		return self::getColor('mysticMaroon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Nadeshiko pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function nadeshikoPink($inOutputFormat=null) {
		return self::getColor('nadeshikoPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Napier green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function napierGreen($inOutputFormat=null) {
		return self::getColor('napierGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Naples yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function naplesYellow($inOutputFormat=null) {
		return self::getColor('naplesYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Navajo white".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function navajoWhite($inOutputFormat=null) {
		return self::getColor('navajoWhite', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Navy".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function navy($inOutputFormat=null) {
		return self::getColor('navy', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Navy purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function navyPurple($inOutputFormat=null) {
		return self::getColor('navyPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Neon Carrot".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function neonCarrot($inOutputFormat=null) {
		return self::getColor('neonCarrot', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Neon fuchsia".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function neonFuchsia($inOutputFormat=null) {
		return self::getColor('neonFuchsia', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Neon green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function neonGreen($inOutputFormat=null) {
		return self::getColor('neonGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "New Car".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function newCar($inOutputFormat=null) {
		return self::getColor('newCar', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "New York pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function newYorkPink($inOutputFormat=null) {
		return self::getColor('newYorkPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Nickel".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function nickel($inOutputFormat=null) {
		return self::getColor('nickel', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Non-photo blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function nonPhotoBlue($inOutputFormat=null) {
		return self::getColor('nonPhotoBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "North Texas Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function northTexasGreen($inOutputFormat=null) {
		return self::getColor('northTexasGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Nyanza".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function nyanza($inOutputFormat=null) {
		return self::getColor('nyanza', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "OU Crimson Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ouCrimsonRed($inOutputFormat=null) {
		return self::getColor('ouCrimsonRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ocean Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oceanBlue($inOutputFormat=null) {
		return self::getColor('oceanBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ocean Boat Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oceanBoatBlue($inOutputFormat=null) {
		return self::getColor('oceanBoatBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ocean Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oceanGreen($inOutputFormat=null) {
		return self::getColor('oceanGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ochre".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ochre($inOutputFormat=null) {
		return self::getColor('ochre', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Office green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function officeGreen($inOutputFormat=null) {
		return self::getColor('officeGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ogre Odor".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ogreOdor($inOutputFormat=null) {
		return self::getColor('ogreOdor', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Old burgundy".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oldBurgundy($inOutputFormat=null) {
		return self::getColor('oldBurgundy', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Old gold".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oldGold($inOutputFormat=null) {
		return self::getColor('oldGold', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Old heliotrope".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oldHeliotrope($inOutputFormat=null) {
		return self::getColor('oldHeliotrope', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Old lace".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oldLace($inOutputFormat=null) {
		return self::getColor('oldLace', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Old lavender".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oldLavender($inOutputFormat=null) {
		return self::getColor('oldLavender', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Old mauve".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oldMauve($inOutputFormat=null) {
		return self::getColor('oldMauve', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Old moss green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oldMossGreen($inOutputFormat=null) {
		return self::getColor('oldMossGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Old rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oldRose($inOutputFormat=null) {
		return self::getColor('oldRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Old silver".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oldSilver($inOutputFormat=null) {
		return self::getColor('oldSilver', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Olive".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function olive($inOutputFormat=null) {
		return self::getColor('olive', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Olive Drab #7".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oliveDrab7($inOutputFormat=null) {
		return self::getColor('oliveDrab7', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Olive Drab (#3)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oliveDrab3($inOutputFormat=null) {
		return self::getColor('oliveDrab3', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Olivine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function olivine($inOutputFormat=null) {
		return self::getColor('olivine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Onyx".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function onyx($inOutputFormat=null) {
		return self::getColor('onyx', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Opera mauve".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function operaMauve($inOutputFormat=null) {
		return self::getColor('operaMauve', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Orange (Crayola)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function orangeCrayola($inOutputFormat=null) {
		return self::getColor('orangeCrayola', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Orange (Pantone)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function orangePantone($inOutputFormat=null) {
		return self::getColor('orangePantone', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Orange (RYB)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function orangeRyb($inOutputFormat=null) {
		return self::getColor('orangeRyb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Orange (color wheel)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function orangeColorWheel($inOutputFormat=null) {
		return self::getColor('orangeColorWheel', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Orange (web)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function orangeWeb($inOutputFormat=null) {
		return self::getColor('orangeWeb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Orange Soda".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function orangeSoda($inOutputFormat=null) {
		return self::getColor('orangeSoda', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Orange peel".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function orangePeel($inOutputFormat=null) {
		return self::getColor('orangePeel', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Orange-red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function orangeRed($inOutputFormat=null) {
		return self::getColor('orangeRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Orange-yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function orangeYellow($inOutputFormat=null) {
		return self::getColor('orangeYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Orchid".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function orchid($inOutputFormat=null) {
		return self::getColor('orchid', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Orchid pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function orchidPink($inOutputFormat=null) {
		return self::getColor('orchidPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Orioles orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oriolesOrange($inOutputFormat=null) {
		return self::getColor('oriolesOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Otter brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function otterBrown($inOutputFormat=null) {
		return self::getColor('otterBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Outer Space".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function outerSpace($inOutputFormat=null) {
		return self::getColor('outerSpace', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Outrageous Orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function outrageousOrange($inOutputFormat=null) {
		return self::getColor('outrageousOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Oxford Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function oxfordBlue($inOutputFormat=null) {
		return self::getColor('oxfordBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pacific Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pacificBlue($inOutputFormat=null) {
		return self::getColor('pacificBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pakistan green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pakistanGreen($inOutputFormat=null) {
		return self::getColor('pakistanGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Palatinate blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function palatinateBlue($inOutputFormat=null) {
		return self::getColor('palatinateBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Palatinate purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function palatinatePurple($inOutputFormat=null) {
		return self::getColor('palatinatePurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale aqua".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleAqua($inOutputFormat=null) {
		return self::getColor('paleAqua', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleBlue($inOutputFormat=null) {
		return self::getColor('paleBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleBrown($inOutputFormat=null) {
		return self::getColor('paleBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale carmine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleCarmine($inOutputFormat=null) {
		return self::getColor('paleCarmine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale cerulean".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleCerulean($inOutputFormat=null) {
		return self::getColor('paleCerulean', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale chestnut".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleChestnut($inOutputFormat=null) {
		return self::getColor('paleChestnut', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale copper".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleCopper($inOutputFormat=null) {
		return self::getColor('paleCopper', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale cornflower blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleCornflowerBlue($inOutputFormat=null) {
		return self::getColor('paleCornflowerBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale cyan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleCyan($inOutputFormat=null) {
		return self::getColor('paleCyan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale gold".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleGold($inOutputFormat=null) {
		return self::getColor('paleGold', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale goldenrod".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleGoldenrod($inOutputFormat=null) {
		return self::getColor('paleGoldenrod', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleGreen($inOutputFormat=null) {
		return self::getColor('paleGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale lavender".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleLavender($inOutputFormat=null) {
		return self::getColor('paleLavender', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale magenta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleMagenta($inOutputFormat=null) {
		return self::getColor('paleMagenta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale magenta-pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleMagentaPink($inOutputFormat=null) {
		return self::getColor('paleMagentaPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function palePink($inOutputFormat=null) {
		return self::getColor('palePink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale plum".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function palePlum($inOutputFormat=null) {
		return self::getColor('palePlum', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale red-violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleRedViolet($inOutputFormat=null) {
		return self::getColor('paleRedViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale robin egg blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleRobinEggBlue($inOutputFormat=null) {
		return self::getColor('paleRobinEggBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale silver".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleSilver($inOutputFormat=null) {
		return self::getColor('paleSilver', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale spring bud".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleSpringBud($inOutputFormat=null) {
		return self::getColor('paleSpringBud', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale taupe".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleTaupe($inOutputFormat=null) {
		return self::getColor('paleTaupe', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale turquoise".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleTurquoise($inOutputFormat=null) {
		return self::getColor('paleTurquoise', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleViolet($inOutputFormat=null) {
		return self::getColor('paleViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pale violet-red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paleVioletRed($inOutputFormat=null) {
		return self::getColor('paleVioletRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Palm Leaf".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function palmLeaf($inOutputFormat=null) {
		return self::getColor('palmLeaf', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pansy purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pansyPurple($inOutputFormat=null) {
		return self::getColor('pansyPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Paolo Veronese green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paoloVeroneseGreen($inOutputFormat=null) {
		return self::getColor('paoloVeroneseGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Papaya whip".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function papayaWhip($inOutputFormat=null) {
		return self::getColor('papayaWhip', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Paradise pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paradisePink($inOutputFormat=null) {
		return self::getColor('paradisePink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Paris Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function parisGreen($inOutputFormat=null) {
		return self::getColor('parisGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Parrot Pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function parrotPink($inOutputFormat=null) {
		return self::getColor('parrotPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pastel blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pastelBlue($inOutputFormat=null) {
		return self::getColor('pastelBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pastel brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pastelBrown($inOutputFormat=null) {
		return self::getColor('pastelBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pastel gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pastelGray($inOutputFormat=null) {
		return self::getColor('pastelGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pastel green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pastelGreen($inOutputFormat=null) {
		return self::getColor('pastelGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pastel magenta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pastelMagenta($inOutputFormat=null) {
		return self::getColor('pastelMagenta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pastel orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pastelOrange($inOutputFormat=null) {
		return self::getColor('pastelOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pastel pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pastelPink($inOutputFormat=null) {
		return self::getColor('pastelPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pastel purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pastelPurple($inOutputFormat=null) {
		return self::getColor('pastelPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pastel red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pastelRed($inOutputFormat=null) {
		return self::getColor('pastelRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pastel violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pastelViolet($inOutputFormat=null) {
		return self::getColor('pastelViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pastel yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pastelYellow($inOutputFormat=null) {
		return self::getColor('pastelYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Patriarch".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function patriarch($inOutputFormat=null) {
		return self::getColor('patriarch', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Payne\'s grey".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function paynesGrey($inOutputFormat=null) {
		return self::getColor('paynesGrey', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Peach".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function peach($inOutputFormat=null) {
		return self::getColor('peach', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Peach puff".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function peachPuff($inOutputFormat=null) {
		return self::getColor('peachPuff', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Peach-orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function peachOrange($inOutputFormat=null) {
		return self::getColor('peachOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Peach-yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function peachYellow($inOutputFormat=null) {
		return self::getColor('peachYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pear".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pear($inOutputFormat=null) {
		return self::getColor('pear', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pearl".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pearl($inOutputFormat=null) {
		return self::getColor('pearl', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pearl Aqua".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pearlAqua($inOutputFormat=null) {
		return self::getColor('pearlAqua', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pearly purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pearlyPurple($inOutputFormat=null) {
		return self::getColor('pearlyPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Peridot".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function peridot($inOutputFormat=null) {
		return self::getColor('peridot', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Periwinkle".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function periwinkle($inOutputFormat=null) {
		return self::getColor('periwinkle', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Permanent Geranium Lake".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function permanentGeraniumLake($inOutputFormat=null) {
		return self::getColor('permanentGeraniumLake', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Persian blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function persianBlue($inOutputFormat=null) {
		return self::getColor('persianBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Persian green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function persianGreen($inOutputFormat=null) {
		return self::getColor('persianGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Persian indigo".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function persianIndigo($inOutputFormat=null) {
		return self::getColor('persianIndigo', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Persian orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function persianOrange($inOutputFormat=null) {
		return self::getColor('persianOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Persian pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function persianPink($inOutputFormat=null) {
		return self::getColor('persianPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Persian plum".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function persianPlum($inOutputFormat=null) {
		return self::getColor('persianPlum', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Persian red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function persianRed($inOutputFormat=null) {
		return self::getColor('persianRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Persian rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function persianRose($inOutputFormat=null) {
		return self::getColor('persianRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Persimmon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function persimmon($inOutputFormat=null) {
		return self::getColor('persimmon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Peru".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function peru($inOutputFormat=null) {
		return self::getColor('peru', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pewter Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pewterBlue($inOutputFormat=null) {
		return self::getColor('pewterBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Phlox".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function phlox($inOutputFormat=null) {
		return self::getColor('phlox', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Phthalo blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function phthaloBlue($inOutputFormat=null) {
		return self::getColor('phthaloBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Phthalo green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function phthaloGreen($inOutputFormat=null) {
		return self::getColor('phthaloGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Picton blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pictonBlue($inOutputFormat=null) {
		return self::getColor('pictonBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pictorial carmine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pictorialCarmine($inOutputFormat=null) {
		return self::getColor('pictorialCarmine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Piggy pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function piggyPink($inOutputFormat=null) {
		return self::getColor('piggyPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pine green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pineGreen($inOutputFormat=null) {
		return self::getColor('pineGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pineapple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pineapple($inOutputFormat=null) {
		return self::getColor('pineapple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pink($inOutputFormat=null) {
		return self::getColor('pink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pink (Pantone)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pinkPantone($inOutputFormat=null) {
		return self::getColor('pinkPantone', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pink Flamingo".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pinkFlamingo($inOutputFormat=null) {
		return self::getColor('pinkFlamingo', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pink Sherbet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pinkSherbet($inOutputFormat=null) {
		return self::getColor('pinkSherbet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pink lace".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pinkLace($inOutputFormat=null) {
		return self::getColor('pinkLace', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pink lavender".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pinkLavender($inOutputFormat=null) {
		return self::getColor('pinkLavender', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pink pearl".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pinkPearl($inOutputFormat=null) {
		return self::getColor('pinkPearl', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pink raspberry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pinkRaspberry($inOutputFormat=null) {
		return self::getColor('pinkRaspberry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pink-orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pinkOrange($inOutputFormat=null) {
		return self::getColor('pinkOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pistachio".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pistachio($inOutputFormat=null) {
		return self::getColor('pistachio', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pixie Powder".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pixiePowder($inOutputFormat=null) {
		return self::getColor('pixiePowder', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Platinum".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function platinum($inOutputFormat=null) {
		return self::getColor('platinum', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Plum".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function plum($inOutputFormat=null) {
		return self::getColor('plum', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Plum (web)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function plumWeb($inOutputFormat=null) {
		return self::getColor('plumWeb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Plump Purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function plumpPurple($inOutputFormat=null) {
		return self::getColor('plumpPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Polished Pine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function polishedPine($inOutputFormat=null) {
		return self::getColor('polishedPine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pomp and Power".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pompAndPower($inOutputFormat=null) {
		return self::getColor('pompAndPower', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Popstar".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function popstar($inOutputFormat=null) {
		return self::getColor('popstar', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Portland Orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function portlandOrange($inOutputFormat=null) {
		return self::getColor('portlandOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Powder blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function powderBlue($inOutputFormat=null) {
		return self::getColor('powderBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Princess Perfume".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function princessPerfume($inOutputFormat=null) {
		return self::getColor('princessPerfume', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Princeton orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function princetonOrange($inOutputFormat=null) {
		return self::getColor('princetonOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Prune".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function prune($inOutputFormat=null) {
		return self::getColor('prune', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Prussian blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function prussianBlue($inOutputFormat=null) {
		return self::getColor('prussianBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Psychedelic purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function psychedelicPurple($inOutputFormat=null) {
		return self::getColor('psychedelicPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Puce".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function puce($inOutputFormat=null) {
		return self::getColor('puce', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Puce red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function puceRed($inOutputFormat=null) {
		return self::getColor('puceRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pullman Brown (UPS Brown)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pullmanBrownUpsBrown($inOutputFormat=null) {
		return self::getColor('pullmanBrownUpsBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pullman Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pullmanGreen($inOutputFormat=null) {
		return self::getColor('pullmanGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Pumpkin".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function pumpkin($inOutputFormat=null) {
		return self::getColor('pumpkin', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Purple (HTML)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function purpleHtml($inOutputFormat=null) {
		return self::getColor('purpleHtml', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Purple (Munsell)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function purpleMunsell($inOutputFormat=null) {
		return self::getColor('purpleMunsell', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Purple (X11)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function purpleX11($inOutputFormat=null) {
		return self::getColor('purpleX11', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Purple Heart".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function purpleHeart($inOutputFormat=null) {
		return self::getColor('purpleHeart', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Purple Plum".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function purplePlum($inOutputFormat=null) {
		return self::getColor('purplePlum', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Purple mountain majesty".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function purpleMountainMajesty($inOutputFormat=null) {
		return self::getColor('purpleMountainMajesty', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Purple navy".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function purpleNavy($inOutputFormat=null) {
		return self::getColor('purpleNavy', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Purple pizzazz".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function purplePizzazz($inOutputFormat=null) {
		return self::getColor('purplePizzazz', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Purple taupe".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function purpleTaupe($inOutputFormat=null) {
		return self::getColor('purpleTaupe', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Purpureus".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function purpureus($inOutputFormat=null) {
		return self::getColor('purpureus', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Quartz".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function quartz($inOutputFormat=null) {
		return self::getColor('quartz', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Queen blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function queenBlue($inOutputFormat=null) {
		return self::getColor('queenBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Queen pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function queenPink($inOutputFormat=null) {
		return self::getColor('queenPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Quick Silver".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function quickSilver($inOutputFormat=null) {
		return self::getColor('quickSilver', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Quinacridone magenta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function quinacridoneMagenta($inOutputFormat=null) {
		return self::getColor('quinacridoneMagenta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rackley".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rackley($inOutputFormat=null) {
		return self::getColor('rackley', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Radical Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function radicalRed($inOutputFormat=null) {
		return self::getColor('radicalRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Raisin black".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function raisinBlack($inOutputFormat=null) {
		return self::getColor('raisinBlack', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rajah".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rajah($inOutputFormat=null) {
		return self::getColor('rajah', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Raspberry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function raspberry($inOutputFormat=null) {
		return self::getColor('raspberry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Raspberry glace".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function raspberryGlace($inOutputFormat=null) {
		return self::getColor('raspberryGlace', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Raspberry pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function raspberryPink($inOutputFormat=null) {
		return self::getColor('raspberryPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Raspberry rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function raspberryRose($inOutputFormat=null) {
		return self::getColor('raspberryRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Raw Sienna".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rawSienna($inOutputFormat=null) {
		return self::getColor('rawSienna', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Raw umber".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rawUmber($inOutputFormat=null) {
		return self::getColor('rawUmber', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Razzle dazzle rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function razzleDazzleRose($inOutputFormat=null) {
		return self::getColor('razzleDazzleRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Razzmatazz".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function razzmatazz($inOutputFormat=null) {
		return self::getColor('razzmatazz', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Razzmic Berry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function razzmicBerry($inOutputFormat=null) {
		return self::getColor('razzmicBerry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rebecca Purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rebeccaPurple($inOutputFormat=null) {
		return self::getColor('rebeccaPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function red($inOutputFormat=null) {
		return self::getColor('red', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Red (Crayola)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function redCrayola($inOutputFormat=null) {
		return self::getColor('redCrayola', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Red (Munsell)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function redMunsell($inOutputFormat=null) {
		return self::getColor('redMunsell', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Red (NCS)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function redNcs($inOutputFormat=null) {
		return self::getColor('redNcs', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Red (Pantone)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function redPantone($inOutputFormat=null) {
		return self::getColor('redPantone', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Red (RYB)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function redRyb($inOutputFormat=null) {
		return self::getColor('redRyb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Red (pigment)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function redPigment($inOutputFormat=null) {
		return self::getColor('redPigment', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Red Salsa".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function redSalsa($inOutputFormat=null) {
		return self::getColor('redSalsa', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Red devil".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function redDevil($inOutputFormat=null) {
		return self::getColor('redDevil', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Red-brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function redBrown($inOutputFormat=null) {
		return self::getColor('redBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Red-orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function redOrange($inOutputFormat=null) {
		return self::getColor('redOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Red-purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function redPurple($inOutputFormat=null) {
		return self::getColor('redPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Red-violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function redViolet($inOutputFormat=null) {
		return self::getColor('redViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Redwood".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function redwood($inOutputFormat=null) {
		return self::getColor('redwood', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Regalia".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function regalia($inOutputFormat=null) {
		return self::getColor('regalia', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Registration black".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function registrationBlack($inOutputFormat=null) {
		return self::getColor('registrationBlack', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Resolution blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function resolutionBlue($inOutputFormat=null) {
		return self::getColor('resolutionBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rhythm".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rhythm($inOutputFormat=null) {
		return self::getColor('rhythm', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rich black".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function richBlack($inOutputFormat=null) {
		return self::getColor('richBlack', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rich black (FOGRA29)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function richBlackFogra29($inOutputFormat=null) {
		return self::getColor('richBlackFogra29', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rich black (FOGRA39)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function richBlackFogra39($inOutputFormat=null) {
		return self::getColor('richBlackFogra39', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rich brilliant lavender".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function richBrilliantLavender($inOutputFormat=null) {
		return self::getColor('richBrilliantLavender', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rich carmine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function richCarmine($inOutputFormat=null) {
		return self::getColor('richCarmine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rich electric blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function richElectricBlue($inOutputFormat=null) {
		return self::getColor('richElectricBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rich lavender".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function richLavender($inOutputFormat=null) {
		return self::getColor('richLavender', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rich lilac".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function richLilac($inOutputFormat=null) {
		return self::getColor('richLilac', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rich maroon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function richMaroon($inOutputFormat=null) {
		return self::getColor('richMaroon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rifle green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rifleGreen($inOutputFormat=null) {
		return self::getColor('rifleGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Roast coffee".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function roastCoffee($inOutputFormat=null) {
		return self::getColor('roastCoffee', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Robin egg blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function robinEggBlue($inOutputFormat=null) {
		return self::getColor('robinEggBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rocket metallic".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rocketMetallic($inOutputFormat=null) {
		return self::getColor('rocketMetallic', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Roman silver".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function romanSilver($inOutputFormat=null) {
		return self::getColor('romanSilver', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rose($inOutputFormat=null) {
		return self::getColor('rose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rose Dust".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function roseDust($inOutputFormat=null) {
		return self::getColor('roseDust', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rose bonbon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function roseBonbon($inOutputFormat=null) {
		return self::getColor('roseBonbon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rose ebony".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function roseEbony($inOutputFormat=null) {
		return self::getColor('roseEbony', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rose gold".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function roseGold($inOutputFormat=null) {
		return self::getColor('roseGold', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rose madder".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function roseMadder($inOutputFormat=null) {
		return self::getColor('roseMadder', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rose pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rosePink($inOutputFormat=null) {
		return self::getColor('rosePink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rose quartz".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function roseQuartz($inOutputFormat=null) {
		return self::getColor('roseQuartz', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rose red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function roseRed($inOutputFormat=null) {
		return self::getColor('roseRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rose taupe".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function roseTaupe($inOutputFormat=null) {
		return self::getColor('roseTaupe', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rose vale".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function roseVale($inOutputFormat=null) {
		return self::getColor('roseVale', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rosewood".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rosewood($inOutputFormat=null) {
		return self::getColor('rosewood', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rosso corsa".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rossoCorsa($inOutputFormat=null) {
		return self::getColor('rossoCorsa', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rosy brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rosyBrown($inOutputFormat=null) {
		return self::getColor('rosyBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Royal azure".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function royalAzure($inOutputFormat=null) {
		return self::getColor('royalAzure', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Royal blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function royalBlue($inOutputFormat=null) {
		return self::getColor('royalBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Royal fuchsia".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function royalFuchsia($inOutputFormat=null) {
		return self::getColor('royalFuchsia', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Royal purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function royalPurple($inOutputFormat=null) {
		return self::getColor('royalPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Royal yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function royalYellow($inOutputFormat=null) {
		return self::getColor('royalYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ruber".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ruber($inOutputFormat=null) {
		return self::getColor('ruber', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rubine red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rubineRed($inOutputFormat=null) {
		return self::getColor('rubineRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ruby".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ruby($inOutputFormat=null) {
		return self::getColor('ruby', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ruby red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rubyRed($inOutputFormat=null) {
		return self::getColor('rubyRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ruddy".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ruddy($inOutputFormat=null) {
		return self::getColor('ruddy', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ruddy brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ruddyBrown($inOutputFormat=null) {
		return self::getColor('ruddyBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ruddy pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ruddyPink($inOutputFormat=null) {
		return self::getColor('ruddyPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rufous".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rufous($inOutputFormat=null) {
		return self::getColor('rufous', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Russet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function russet($inOutputFormat=null) {
		return self::getColor('russet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Russian green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function russianGreen($inOutputFormat=null) {
		return self::getColor('russianGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Russian violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function russianViolet($inOutputFormat=null) {
		return self::getColor('russianViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rust".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rust($inOutputFormat=null) {
		return self::getColor('rust', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Rusty red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function rustyRed($inOutputFormat=null) {
		return self::getColor('rustyRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sacramento State green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sacramentoStateGreen($inOutputFormat=null) {
		return self::getColor('sacramentoStateGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Saddle brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function saddleBrown($inOutputFormat=null) {
		return self::getColor('saddleBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Safety orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function safetyOrange($inOutputFormat=null) {
		return self::getColor('safetyOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Safety orange (blaze orange)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function safetyOrangeBlazeOrange($inOutputFormat=null) {
		return self::getColor('safetyOrangeBlazeOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Safety yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function safetyYellow($inOutputFormat=null) {
		return self::getColor('safetyYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Saffron".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function saffron($inOutputFormat=null) {
		return self::getColor('saffron', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sage".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sage($inOutputFormat=null) {
		return self::getColor('sage', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Salmon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function salmon($inOutputFormat=null) {
		return self::getColor('salmon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Salmon pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function salmonPink($inOutputFormat=null) {
		return self::getColor('salmonPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sand".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sand($inOutputFormat=null) {
		return self::getColor('sand', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sand dune".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sandDune($inOutputFormat=null) {
		return self::getColor('sandDune', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sandstorm".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sandstorm($inOutputFormat=null) {
		return self::getColor('sandstorm', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sandy Tan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sandyTan($inOutputFormat=null) {
		return self::getColor('sandyTan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sandy brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sandyBrown($inOutputFormat=null) {
		return self::getColor('sandyBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sandy taupe".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sandyTaupe($inOutputFormat=null) {
		return self::getColor('sandyTaupe', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sangria".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sangria($inOutputFormat=null) {
		return self::getColor('sangria', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sap green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sapGreen($inOutputFormat=null) {
		return self::getColor('sapGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sapphire".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sapphire($inOutputFormat=null) {
		return self::getColor('sapphire', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sapphire blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sapphireBlue($inOutputFormat=null) {
		return self::getColor('sapphireBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sasquatch Socks".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sasquatchSocks($inOutputFormat=null) {
		return self::getColor('sasquatchSocks', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Satin sheen gold".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function satinSheenGold($inOutputFormat=null) {
		return self::getColor('satinSheenGold', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Scarlet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function scarlet($inOutputFormat=null) {
		return self::getColor('scarlet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Schauss pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function schaussPink($inOutputFormat=null) {
		return self::getColor('schaussPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "School bus yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function schoolBusYellow($inOutputFormat=null) {
		return self::getColor('schoolBusYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Screamin\' Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function screaminGreen($inOutputFormat=null) {
		return self::getColor('screaminGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sea Foam Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function seaFoamGreen($inOutputFormat=null) {
		return self::getColor('seaFoamGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sea Serpent".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function seaSerpent($inOutputFormat=null) {
		return self::getColor('seaSerpent', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sea blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function seaBlue($inOutputFormat=null) {
		return self::getColor('seaBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sea green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function seaGreen($inOutputFormat=null) {
		return self::getColor('seaGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Seal brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sealBrown($inOutputFormat=null) {
		return self::getColor('sealBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Seashell".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function seashell($inOutputFormat=null) {
		return self::getColor('seashell', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Selective yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function selectiveYellow($inOutputFormat=null) {
		return self::getColor('selectiveYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sepia".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sepia($inOutputFormat=null) {
		return self::getColor('sepia', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Shadow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function shadow($inOutputFormat=null) {
		return self::getColor('shadow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Shadow blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function shadowBlue($inOutputFormat=null) {
		return self::getColor('shadowBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Shampoo".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function shampoo($inOutputFormat=null) {
		return self::getColor('shampoo', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Shamrock green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function shamrockGreen($inOutputFormat=null) {
		return self::getColor('shamrockGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sheen Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sheenGreen($inOutputFormat=null) {
		return self::getColor('sheenGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Shimmering Blush".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function shimmeringBlush($inOutputFormat=null) {
		return self::getColor('shimmeringBlush', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Shiny Shamrock".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function shinyShamrock($inOutputFormat=null) {
		return self::getColor('shinyShamrock', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Shocking pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function shockingPink($inOutputFormat=null) {
		return self::getColor('shockingPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Shocking pink (Crayola)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function shockingPinkCrayola($inOutputFormat=null) {
		return self::getColor('shockingPinkCrayola', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sienna".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sienna($inOutputFormat=null) {
		return self::getColor('sienna', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Silver".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function silver($inOutputFormat=null) {
		return self::getColor('silver', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Silver Lake blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function silverLakeBlue($inOutputFormat=null) {
		return self::getColor('silverLakeBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Silver chalice".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function silverChalice($inOutputFormat=null) {
		return self::getColor('silverChalice', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Silver pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function silverPink($inOutputFormat=null) {
		return self::getColor('silverPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Silver sand".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function silverSand($inOutputFormat=null) {
		return self::getColor('silverSand', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sinopia".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sinopia($inOutputFormat=null) {
		return self::getColor('sinopia', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sizzling Red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sizzlingRed($inOutputFormat=null) {
		return self::getColor('sizzlingRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sizzling Sunrise".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sizzlingSunrise($inOutputFormat=null) {
		return self::getColor('sizzlingSunrise', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Skobeloff".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function skobeloff($inOutputFormat=null) {
		return self::getColor('skobeloff', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sky blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function skyBlue($inOutputFormat=null) {
		return self::getColor('skyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sky magenta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function skyMagenta($inOutputFormat=null) {
		return self::getColor('skyMagenta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Slate blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function slateBlue($inOutputFormat=null) {
		return self::getColor('slateBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Slate gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function slateGray($inOutputFormat=null) {
		return self::getColor('slateGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Slimy Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function slimyGreen($inOutputFormat=null) {
		return self::getColor('slimyGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Smalt (Dark powder blue)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function smaltDarkPowderBlue($inOutputFormat=null) {
		return self::getColor('smaltDarkPowderBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Smashed Pumpkin".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function smashedPumpkin($inOutputFormat=null) {
		return self::getColor('smashedPumpkin', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Smitten".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function smitten($inOutputFormat=null) {
		return self::getColor('smitten', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Smoke".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function smoke($inOutputFormat=null) {
		return self::getColor('smoke', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Smokey Topaz".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function smokeyTopaz($inOutputFormat=null) {
		return self::getColor('smokeyTopaz', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Smoky Topaz".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function smokyTopaz($inOutputFormat=null) {
		return self::getColor('smokyTopaz', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Smoky black".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function smokyBlack($inOutputFormat=null) {
		return self::getColor('smokyBlack', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Snow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function snow($inOutputFormat=null) {
		return self::getColor('snow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Soap".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function soap($inOutputFormat=null) {
		return self::getColor('soap', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Solid pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function solidPink($inOutputFormat=null) {
		return self::getColor('solidPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sonic silver".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sonicSilver($inOutputFormat=null) {
		return self::getColor('sonicSilver', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Space cadet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spaceCadet($inOutputFormat=null) {
		return self::getColor('spaceCadet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spanish bistre".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spanishBistre($inOutputFormat=null) {
		return self::getColor('spanishBistre', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spanish blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spanishBlue($inOutputFormat=null) {
		return self::getColor('spanishBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spanish carmine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spanishCarmine($inOutputFormat=null) {
		return self::getColor('spanishCarmine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spanish crimson".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spanishCrimson($inOutputFormat=null) {
		return self::getColor('spanishCrimson', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spanish gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spanishGray($inOutputFormat=null) {
		return self::getColor('spanishGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spanish green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spanishGreen($inOutputFormat=null) {
		return self::getColor('spanishGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spanish orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spanishOrange($inOutputFormat=null) {
		return self::getColor('spanishOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spanish pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spanishPink($inOutputFormat=null) {
		return self::getColor('spanishPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spanish red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spanishRed($inOutputFormat=null) {
		return self::getColor('spanishRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spanish sky blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spanishSkyBlue($inOutputFormat=null) {
		return self::getColor('spanishSkyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spanish violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spanishViolet($inOutputFormat=null) {
		return self::getColor('spanishViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spanish viridian".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spanishViridian($inOutputFormat=null) {
		return self::getColor('spanishViridian', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spartan Crimson".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spartanCrimson($inOutputFormat=null) {
		return self::getColor('spartanCrimson', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spicy mix".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spicyMix($inOutputFormat=null) {
		return self::getColor('spicyMix', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spiro Disco Ball".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function spiroDiscoBall($inOutputFormat=null) {
		return self::getColor('spiroDiscoBall', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spring Frost".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function springFrost($inOutputFormat=null) {
		return self::getColor('springFrost', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spring bud".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function springBud($inOutputFormat=null) {
		return self::getColor('springBud', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Spring green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function springGreen($inOutputFormat=null) {
		return self::getColor('springGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "St. Patrick\'s blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function stPatricksBlue($inOutputFormat=null) {
		return self::getColor('stPatricksBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Star command blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function starCommandBlue($inOutputFormat=null) {
		return self::getColor('starCommandBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Steel Teal".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function steelTeal($inOutputFormat=null) {
		return self::getColor('steelTeal', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Steel blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function steelBlue($inOutputFormat=null) {
		return self::getColor('steelBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Steel pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function steelPink($inOutputFormat=null) {
		return self::getColor('steelPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Stil de grain yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function stilDeGrainYellow($inOutputFormat=null) {
		return self::getColor('stilDeGrainYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Stizza".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function stizza($inOutputFormat=null) {
		return self::getColor('stizza', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Stormcloud".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function stormcloud($inOutputFormat=null) {
		return self::getColor('stormcloud', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Straw".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function straw($inOutputFormat=null) {
		return self::getColor('straw', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Strawberry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function strawberry($inOutputFormat=null) {
		return self::getColor('strawberry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sugar Plum".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sugarPlum($inOutputFormat=null) {
		return self::getColor('sugarPlum', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sunburnt Cyclops".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sunburntCyclops($inOutputFormat=null) {
		return self::getColor('sunburntCyclops', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sunglow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sunglow($inOutputFormat=null) {
		return self::getColor('sunglow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sunny".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sunny($inOutputFormat=null) {
		return self::getColor('sunny', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sunray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sunray($inOutputFormat=null) {
		return self::getColor('sunray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sunset".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sunset($inOutputFormat=null) {
		return self::getColor('sunset', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sunset orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sunsetOrange($inOutputFormat=null) {
		return self::getColor('sunsetOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Super pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function superPink($inOutputFormat=null) {
		return self::getColor('superPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Sweet Brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function sweetBrown($inOutputFormat=null) {
		return self::getColor('sweetBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tan($inOutputFormat=null) {
		return self::getColor('tan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tangelo".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tangelo($inOutputFormat=null) {
		return self::getColor('tangelo', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tangerine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tangerine($inOutputFormat=null) {
		return self::getColor('tangerine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tangerine yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tangerineYellow($inOutputFormat=null) {
		return self::getColor('tangerineYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tango pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tangoPink($inOutputFormat=null) {
		return self::getColor('tangoPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tart Orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tartOrange($inOutputFormat=null) {
		return self::getColor('tartOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Taupe".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function taupe($inOutputFormat=null) {
		return self::getColor('taupe', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Taupe gray".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function taupeGray($inOutputFormat=null) {
		return self::getColor('taupeGray', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tea green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function teaGreen($inOutputFormat=null) {
		return self::getColor('teaGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tea rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function teaRose($inOutputFormat=null) {
		return self::getColor('teaRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Teal".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function teal($inOutputFormat=null) {
		return self::getColor('teal', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Teal blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tealBlue($inOutputFormat=null) {
		return self::getColor('tealBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Teal deer".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tealDeer($inOutputFormat=null) {
		return self::getColor('tealDeer', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Teal green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tealGreen($inOutputFormat=null) {
		return self::getColor('tealGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Telemagenta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function telemagenta($inOutputFormat=null) {
		return self::getColor('telemagenta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tenné".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tenné($inOutputFormat=null) {
		return self::getColor('tenné', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Terra cotta".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function terraCotta($inOutputFormat=null) {
		return self::getColor('terraCotta', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Thistle".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function thistle($inOutputFormat=null) {
		return self::getColor('thistle', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Thulian pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function thulianPink($inOutputFormat=null) {
		return self::getColor('thulianPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tickle Me Pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tickleMePink($inOutputFormat=null) {
		return self::getColor('tickleMePink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tiffany Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tiffanyBlue($inOutputFormat=null) {
		return self::getColor('tiffanyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tiger\'s eye".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tigersEye($inOutputFormat=null) {
		return self::getColor('tigersEye', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Timberwolf".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function timberwolf($inOutputFormat=null) {
		return self::getColor('timberwolf', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Titanium yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function titaniumYellow($inOutputFormat=null) {
		return self::getColor('titaniumYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tomato".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tomato($inOutputFormat=null) {
		return self::getColor('tomato', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Toolbox".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function toolbox($inOutputFormat=null) {
		return self::getColor('toolbox', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Topaz".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function topaz($inOutputFormat=null) {
		return self::getColor('topaz', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tractor red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tractorRed($inOutputFormat=null) {
		return self::getColor('tractorRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Trolley Grey".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function trolleyGrey($inOutputFormat=null) {
		return self::getColor('trolleyGrey', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tropical rain forest".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tropicalRainForest($inOutputFormat=null) {
		return self::getColor('tropicalRainForest', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tropical violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tropicalViolet($inOutputFormat=null) {
		return self::getColor('tropicalViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "True Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function trueBlue($inOutputFormat=null) {
		return self::getColor('trueBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tufts Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tuftsBlue($inOutputFormat=null) {
		return self::getColor('tuftsBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tulip".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tulip($inOutputFormat=null) {
		return self::getColor('tulip', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tumbleweed".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tumbleweed($inOutputFormat=null) {
		return self::getColor('tumbleweed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Turkish rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function turkishRose($inOutputFormat=null) {
		return self::getColor('turkishRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Turquoise".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function turquoise($inOutputFormat=null) {
		return self::getColor('turquoise', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Turquoise Surf".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function turquoiseSurf($inOutputFormat=null) {
		return self::getColor('turquoiseSurf', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Turquoise blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function turquoiseBlue($inOutputFormat=null) {
		return self::getColor('turquoiseBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Turquoise green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function turquoiseGreen($inOutputFormat=null) {
		return self::getColor('turquoiseGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Turtle green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function turtleGreen($inOutputFormat=null) {
		return self::getColor('turtleGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tuscan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tuscan($inOutputFormat=null) {
		return self::getColor('tuscan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tuscan brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tuscanBrown($inOutputFormat=null) {
		return self::getColor('tuscanBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tuscan red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tuscanRed($inOutputFormat=null) {
		return self::getColor('tuscanRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tuscan tan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tuscanTan($inOutputFormat=null) {
		return self::getColor('tuscanTan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tuscany".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tuscany($inOutputFormat=null) {
		return self::getColor('tuscany', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Twilight lavender".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function twilightLavender($inOutputFormat=null) {
		return self::getColor('twilightLavender', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Tyrian purple".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function tyrianPurple($inOutputFormat=null) {
		return self::getColor('tyrianPurple', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "UA blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function uaBlue($inOutputFormat=null) {
		return self::getColor('uaBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "UA red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function uaRed($inOutputFormat=null) {
		return self::getColor('uaRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "UCLA Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function uclaBlue($inOutputFormat=null) {
		return self::getColor('uclaBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "UCLA Gold".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function uclaGold($inOutputFormat=null) {
		return self::getColor('uclaGold', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "UFO Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ufoGreen($inOutputFormat=null) {
		return self::getColor('ufoGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "UP Forest green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function upForestGreen($inOutputFormat=null) {
		return self::getColor('upForestGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "UP Maroon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function upMaroon($inOutputFormat=null) {
		return self::getColor('upMaroon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "USAFA blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function usafaBlue($inOutputFormat=null) {
		return self::getColor('usafaBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "USC Cardinal".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function uscCardinal($inOutputFormat=null) {
		return self::getColor('uscCardinal', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "USC Gold".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function uscGold($inOutputFormat=null) {
		return self::getColor('uscGold', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ube".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ube($inOutputFormat=null) {
		return self::getColor('ube', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ultra pink".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ultraPink($inOutputFormat=null) {
		return self::getColor('ultraPink', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ultra red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ultraRed($inOutputFormat=null) {
		return self::getColor('ultraRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ultramarine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ultramarine($inOutputFormat=null) {
		return self::getColor('ultramarine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Ultramarine blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function ultramarineBlue($inOutputFormat=null) {
		return self::getColor('ultramarineBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Umber".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function umber($inOutputFormat=null) {
		return self::getColor('umber', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Unbleached silk".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function unbleachedSilk($inOutputFormat=null) {
		return self::getColor('unbleachedSilk', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "United Nations blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function unitedNationsBlue($inOutputFormat=null) {
		return self::getColor('unitedNationsBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "University of California Gold".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function universityOfCaliforniaGold($inOutputFormat=null) {
		return self::getColor('universityOfCaliforniaGold', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "University of Tennessee Orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function universityOfTennesseeOrange($inOutputFormat=null) {
		return self::getColor('universityOfTennesseeOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Unmellow yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function unmellowYellow($inOutputFormat=null) {
		return self::getColor('unmellowYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Upsdell red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function upsdellRed($inOutputFormat=null) {
		return self::getColor('upsdellRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Urobilin".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function urobilin($inOutputFormat=null) {
		return self::getColor('urobilin', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Utah Crimson".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function utahCrimson($inOutputFormat=null) {
		return self::getColor('utahCrimson', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Van Dyke Brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vanDykeBrown($inOutputFormat=null) {
		return self::getColor('vanDykeBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vanilla".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vanilla($inOutputFormat=null) {
		return self::getColor('vanilla', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vanilla ice".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vanillaIce($inOutputFormat=null) {
		return self::getColor('vanillaIce', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vegas gold".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vegasGold($inOutputFormat=null) {
		return self::getColor('vegasGold', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Venetian red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function venetianRed($inOutputFormat=null) {
		return self::getColor('venetianRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Verdigris".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function verdigris($inOutputFormat=null) {
		return self::getColor('verdigris', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vermilion".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vermilion($inOutputFormat=null) {
		return self::getColor('vermilion', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Veronica".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function veronica($inOutputFormat=null) {
		return self::getColor('veronica', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Very light azure".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function veryLightAzure($inOutputFormat=null) {
		return self::getColor('veryLightAzure', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Very light blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function veryLightBlue($inOutputFormat=null) {
		return self::getColor('veryLightBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Very light malachite green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function veryLightMalachiteGreen($inOutputFormat=null) {
		return self::getColor('veryLightMalachiteGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Very light tangelo".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function veryLightTangelo($inOutputFormat=null) {
		return self::getColor('veryLightTangelo', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Very pale orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function veryPaleOrange($inOutputFormat=null) {
		return self::getColor('veryPaleOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Very pale yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function veryPaleYellow($inOutputFormat=null) {
		return self::getColor('veryPaleYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function violet($inOutputFormat=null) {
		return self::getColor('violet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Violet (RYB)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function violetRyb($inOutputFormat=null) {
		return self::getColor('violetRyb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Violet (color wheel)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function violetColorWheel($inOutputFormat=null) {
		return self::getColor('violetColorWheel', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Violet (web)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function violetWeb($inOutputFormat=null) {
		return self::getColor('violetWeb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Violet-blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function violetBlue($inOutputFormat=null) {
		return self::getColor('violetBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Violet-red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function violetRed($inOutputFormat=null) {
		return self::getColor('violetRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Viridian".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function viridian($inOutputFormat=null) {
		return self::getColor('viridian', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Viridian green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function viridianGreen($inOutputFormat=null) {
		return self::getColor('viridianGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vista blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vistaBlue($inOutputFormat=null) {
		return self::getColor('vistaBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid amber".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividAmber($inOutputFormat=null) {
		return self::getColor('vividAmber', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid auburn".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividAuburn($inOutputFormat=null) {
		return self::getColor('vividAuburn', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid burgundy".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividBurgundy($inOutputFormat=null) {
		return self::getColor('vividBurgundy', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid cerise".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividCerise($inOutputFormat=null) {
		return self::getColor('vividCerise', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid cerulean".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividCerulean($inOutputFormat=null) {
		return self::getColor('vividCerulean', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid crimson".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividCrimson($inOutputFormat=null) {
		return self::getColor('vividCrimson', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid gamboge".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividGamboge($inOutputFormat=null) {
		return self::getColor('vividGamboge', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid lime green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividLimeGreen($inOutputFormat=null) {
		return self::getColor('vividLimeGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid malachite".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividMalachite($inOutputFormat=null) {
		return self::getColor('vividMalachite', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid mulberry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividMulberry($inOutputFormat=null) {
		return self::getColor('vividMulberry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividOrange($inOutputFormat=null) {
		return self::getColor('vividOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid orange peel".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividOrangePeel($inOutputFormat=null) {
		return self::getColor('vividOrangePeel', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid orchid".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividOrchid($inOutputFormat=null) {
		return self::getColor('vividOrchid', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid raspberry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividRaspberry($inOutputFormat=null) {
		return self::getColor('vividRaspberry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid red".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividRed($inOutputFormat=null) {
		return self::getColor('vividRed', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid red-tangelo".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividRedTangelo($inOutputFormat=null) {
		return self::getColor('vividRedTangelo', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid sky blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividSkyBlue($inOutputFormat=null) {
		return self::getColor('vividSkyBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid tangelo".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividTangelo($inOutputFormat=null) {
		return self::getColor('vividTangelo', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid tangerine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividTangerine($inOutputFormat=null) {
		return self::getColor('vividTangerine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid vermilion".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividVermilion($inOutputFormat=null) {
		return self::getColor('vividVermilion', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid violet".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividViolet($inOutputFormat=null) {
		return self::getColor('vividViolet', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Vivid yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function vividYellow($inOutputFormat=null) {
		return self::getColor('vividYellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Volt".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function volt($inOutputFormat=null) {
		return self::getColor('volt', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Wageningen Green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function wageningenGreen($inOutputFormat=null) {
		return self::getColor('wageningenGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Warm black".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function warmBlack($inOutputFormat=null) {
		return self::getColor('warmBlack', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Waterspout".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function waterspout($inOutputFormat=null) {
		return self::getColor('waterspout', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Weldon Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function weldonBlue($inOutputFormat=null) {
		return self::getColor('weldonBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Wenge".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function wenge($inOutputFormat=null) {
		return self::getColor('wenge', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Wheat".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function wheat($inOutputFormat=null) {
		return self::getColor('wheat', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "White".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function white($inOutputFormat=null) {
		return self::getColor('white', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "White smoke".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function whiteSmoke($inOutputFormat=null) {
		return self::getColor('whiteSmoke', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Wild Strawberry".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function wildStrawberry($inOutputFormat=null) {
		return self::getColor('wildStrawberry', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Wild blue yonder".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function wildBlueYonder($inOutputFormat=null) {
		return self::getColor('wildBlueYonder', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Wild orchid".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function wildOrchid($inOutputFormat=null) {
		return self::getColor('wildOrchid', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Wild watermelon".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function wildWatermelon($inOutputFormat=null) {
		return self::getColor('wildWatermelon', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Willpower orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function willpowerOrange($inOutputFormat=null) {
		return self::getColor('willpowerOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Windsor tan".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function windsorTan($inOutputFormat=null) {
		return self::getColor('windsorTan', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Wine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function wine($inOutputFormat=null) {
		return self::getColor('wine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Wine dregs".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function wineDregs($inOutputFormat=null) {
		return self::getColor('wineDregs', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Winter Sky".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function winterSky($inOutputFormat=null) {
		return self::getColor('winterSky', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Winter Wizard".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function winterWizard($inOutputFormat=null) {
		return self::getColor('winterWizard', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Wintergreen Dream".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function wintergreenDream($inOutputFormat=null) {
		return self::getColor('wintergreenDream', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Wisteria".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function wisteria($inOutputFormat=null) {
		return self::getColor('wisteria', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Wood brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function woodBrown($inOutputFormat=null) {
		return self::getColor('woodBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Xanadu".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function xanadu($inOutputFormat=null) {
		return self::getColor('xanadu', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Yale Blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function yaleBlue($inOutputFormat=null) {
		return self::getColor('yaleBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Yankees blue".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function yankeesBlue($inOutputFormat=null) {
		return self::getColor('yankeesBlue', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Yellow".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function yellow($inOutputFormat=null) {
		return self::getColor('yellow', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Yellow (Crayola)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function yellowCrayola($inOutputFormat=null) {
		return self::getColor('yellowCrayola', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Yellow (Munsell)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function yellowMunsell($inOutputFormat=null) {
		return self::getColor('yellowMunsell', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Yellow (NCS)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function yellowNcs($inOutputFormat=null) {
		return self::getColor('yellowNcs', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Yellow (Pantone)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function yellowPantone($inOutputFormat=null) {
		return self::getColor('yellowPantone', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Yellow (RYB)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function yellowRyb($inOutputFormat=null) {
		return self::getColor('yellowRyb', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Yellow (process)".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function yellowProcess($inOutputFormat=null) {
		return self::getColor('yellowProcess', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Yellow Orange".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function yellowOrange($inOutputFormat=null) {
		return self::getColor('yellowOrange', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Yellow Sunshine".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function yellowSunshine($inOutputFormat=null) {
		return self::getColor('yellowSunshine', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Yellow rose".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function yellowRose($inOutputFormat=null) {
		return self::getColor('yellowRose', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Yellow-green".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function yellowGreen($inOutputFormat=null) {
		return self::getColor('yellowGreen', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Zaffre".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function zaffre($inOutputFormat=null) {
		return self::getColor('zaffre', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Zinnwaldite brown".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function zinnwalditeBrown($inOutputFormat=null) {
		return self::getColor('zinnwalditeBrown', $inOutputFormat);
	}


	/**
	 * Return the colour code for the colour "Zomp".
	 * @param string|null $inOutputFormat Output format ('html', 'graphviz', 'rgb', 'hsl', 'hsv' or a custom registered output format).
	 *        If the value null is specified, then default output format is returned (see method `setDefaultOutputFormat()`).
	 * @return mixed The method returns the colour code for the given colour.
	 */
	static public function zomp($inOutputFormat=null) {
		return self::getColor('zomp', $inOutputFormat);
	}

}


/*
$reflection = new \ReflectionClass(new Picker);
foreach ($reflection->getMethods(\ReflectionMethod::IS_STATIC) as $_index => $_m) {
	if (! array_key_exists($_m->name, Picker::$list)) {
		print "Error with " . $_m->name . "\n";
	}
}
*/

