<?php 
$url = $this->uri->segment(2);
if ($url == 'urinals_view') {
	$url = 'URINALS';
	$table = 'urinal'; 
}
elseif ($url == 'onepiece_view') {
	$url = 'ONE PIECE';
	$table = 'onepiece'; 
}
elseif ($url == 'washbasin_pe_view') {
	$url = 'WASHBASIN PE';
	$table = 'washbasin_pe';
}
elseif ($url == 'tabletop_view') {
	$url = 'TABLE TOP';
	$table = 'tabletop';
}
elseif ($url == 'washbasin_view') {
	$url = 'WASHBASIN';
	$table = 'washbasin';
}
elseif ($url == 'watercloset_view') {
	$url = 'WATER CLOSET';
	$table = 'watercloset';
}
elseif ($url == 'seatcovers_view') {
	$url = 'SEAT COVERS';
	$table = 'seatcovers';
}
elseif ($url == 'pan_view') {
	$url = 'PAN';
	$table = 'pan';
}
elseif ($url == 'couplesuite') {
	$url = 'COULPLE SUITE';
	$table = 'couplesuite';
}
elseif ($url == 'vitrassa') {
	$url = 'VITRASSA';
	$table = 'vitrassa';
}
elseif ($url == 'mattvitrassa_series') {
	$url = 'MATTVITRASSA SERIES';
	$table = 'mattvitrassa_series';
}
elseif ($url == 'vitrassa_series') {
	$url = 'VITRASSA SERIES';
	$table = 'vitrassa_series';
}
elseif ($url == 'new_designer_series') {
	$url = 'NEW DESIGNER SERIES';
	$table = 'new_designer_series';
}
elseif ($url == 'rustic_series') {
	$url = 'RUSTIC SERIES';
	$table = 'rustic_series';
}
elseif ($url == 'vitrasa_washbasin') {
	$url = 'VITRASA WASHBASIN';
	$table = 'vitrasa_washbasin';
}
elseif ($url == 'designer_tabletop') {
	$url = 'DESIGNER TABLETOP';
	$table = 'designer_tabletop';
}
elseif ($url == 'dual_color_one_piece') {
	$url = 'DUAL COLOR ONE PIECE';
	$table = 'dual_color_one_piece';
}
elseif ($url == 'dual_color_orrisa_pan') {
	$url = 'DUAL COLOR ORRISA PAN';
	$table = 'dual_color_orrisa_pan';
}
elseif ($url == 'seat_cover_fitting') {
	$url = 'SEAT COVER FITTING';
	$table = 'seat_cover_fitting';
}
elseif ($url == 'rustic_water_closet') {
	$url = 'RUSTIC WATER CLOSET';
	$table = 'rustic_water_closet';
}
elseif ($url == 'rustic_orrisa_pan') {
	$url = 'RUSTIC ORRISA PAN';
	$table = 'rustic_orrisa_pan';
}
elseif ($url == 'color_range') {
	$url = 'COLOR RANGE';

}
elseif ($url == 'technical_instruction') {
	$url = 'TECHNICAL INSTRUCTION';
}
