<?php
/**
 * This file contains marker icons.
 *
 * @author Tech Banker
 * @package google-maps-bank/includes
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}//Exit if access directly.
if ( ! is_user_logged_in() ) {
	return;
} else {
	$access_granted = false;
	foreach ( $user_role_permission as $permission ) {
		if ( current_user_can( $permission ) ) {
			$access_granted = true;
			break;
		}
	}
	if ( ! $access_granted ) {
		return;
	} else {
		?>
		<div id="ux_1" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Aboriginal">
				<img  icon_src="/aboriginal.png" onclick="marker_img_select(1)" class="selected_marker" id="img_1" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/aboriginal.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Anthropo">
				<img  icon_src="/anthropo.png" onclick="marker_img_select(2)" class="selected_marker" id="img_2" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/anthropo.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Art-Museum">
				<img  icon_src="/art-museum-2.png" onclick="marker_img_select(3)" class="selected_marker" id="img_3" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/art-museum-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Cinema">
				<img icon_src="/cinema.png" onclick="marker_img_select(4)" class="selected_marker" id="img_4" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cinema.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Coins">
				<img icon_src="/coins.png" onclick="marker_img_select(5)" class="selected_marker" id="img_5" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/coins.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Comedy Club">
				<img  icon_src="/comedyclub.png" onclick="marker_img_select(6)" class="selected_marker" id="img_6" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/comedyclub.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Dancing Hall">
				<img  icon_src="/dancinghall.png" onclick="marker_img_select(7)" class="selected_marker" id="img_7" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/dancinghall.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Historical Museum">
				<img  icon_src="/historical_museum.png" onclick="marker_img_select(8)" class="selected_marker" id="img_8" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/historical_museum.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Jazz Club">
				<img  icon_src="/jazzclub.png" onclick="marker_img_select(9)" class="selected_marker" id="img_9" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/jazzclub.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Library">
				<img  icon_src="/library.png" onclick="marker_img_select(10)" class="selected_marker" id="img_10" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/library.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Museum Archeological">
				<img  icon_src="/museum_archeological.png" onclick="marker_img_select(11)" class="selected_marker" id="img_11" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/museum_archeological.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Museum Art">
				<img  icon_src="/museum_art.png" onclick="marker_img_select(12)" class="selected_marker" id="img_12" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/museum_art.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Museum Crafts">
				<img  icon_src="/museum_crafts.png" onclick="marker_img_select(13)" class="selected_marker" id="img_13" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/museum_crafts.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Museum Industry">
				<img  icon_src="/museum_industry.png" onclick="marker_img_select(14)" class="selected_marker" id="img_14" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/museum_industry.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Museum Naval">
				<img icon_src="/museum_naval.png" onclick="marker_img_select(15)" class="selected_marker" id="img_15" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/museum_naval.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Museum Openair">
				<img icon_src="/museum_openair.png" onclick="marker_img_select(16)" class="selected_marker" id="img_16" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/museum_openair.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Museum Science">
				<img icon_src="/museum_science.png" onclick="marker_img_select(17)" class="selected_marker" id="img_17" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/museum_science.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Museum War">
				<img icon_src="/museum_war.png" onclick="marker_img_select(18)" class="selected_marker" id="img_18" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/museum_war.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Museum Choral">
				<img icon_src="/music_choral.png" onclick="marker_img_select(19)" class="selected_marker" id="img_19" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/music_choral.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Music Classical">
				<img icon_src="/music_classical.png" onclick="marker_img_select(20)" class="selected_marker" id="img_20" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/music_classical.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Music Hiphop">
				<img icon_src="/music_hiphop.png" onclick="marker_img_select(21)" class="selected_marker" id="img_21" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/music_hiphop.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Music Live">
				<img  icon_src="/music_live.png" onclick="marker_img_select(22)" class="selected_marker" id="img_22" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/music_live.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Music Rock">
				<img icon_src="/music_rock.png" onclick="marker_img_select(23)" class="selected_marker" id="img_23" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/music_rock.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Planetarium">
				<img icon_src="/planetarium-2.png" onclick="marker_img_select(24)" class="selected_marker" id="img_24" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/planetarium-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Regroup">
				<img icon_src="/regroup.png" onclick="marker_img_select(25)" class="selected_marker" id="img_25" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/regroup.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Theater">
				<img icon_src="/theater.png" onclick="marker_img_select(26)" class="selected_marker" id="img_26" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/theater.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Triskelion">
				<img icon_src="/triskelion.png" onclick="marker_img_select(27)" class="selected_marker" id="img_27" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/triskelion.png'; ?>" />
			</span>
		</div>
		<div id="ux_2" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Airshow">
				<img icon_src="/airshow-2.png" onclick="marker_img_select(28)" class="selected_marker" id="img_28" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/airshow-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Anniversary">
				<img  icon_src="/anniversary.png" onclick="marker_img_select(29)" class="selected_marker" id="img_29" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/anniversary.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Aquarium">
				<img icon_src="/aquarium.png" onclick="marker_img_select(30)" class="selected_marker" id="img_30" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/aquarium.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Billiard">
				<img icon_src="/billiard-2.png" onclick="marker_img_select(31)" class="selected_marker" id="img_31" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/billiard-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Bowling">
				<img icon_src="/bowling.png" onclick="marker_img_select(32)" class="selected_marker" id="img_32" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bowling.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Bull  Fight">
				<img icon_src="/bullfight.png" onclick="marker_img_select(33)" class="selected_marker" id="img_33" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bullfight.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Bustour">
				<img icon_src="/bustour.png" onclick="marker_img_select(34)" class="selected_marker" id="img_34" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bustour.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Casino">
				<img icon_src="/casino-2.png" onclick="marker_img_select(35)" class="selected_marker" id="img_35" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/casino-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Circus">
				<img icon_src="/circus.png" onclick="marker_img_select(36)" class="selected_marker" id="img_36" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/circus.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Dance Class">
				<img icon_src="/dance_class.png" onclick="marker_img_select(37)" class="selected_marker" id="img_37" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/dance_class.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Dinopark">
				<img  icon_src="/dinopark.png" onclick="marker_img_select(38)" class="selected_marker" id="img_38" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/dinopark.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Ferris Wheel">
				<img  icon_src="/ferriswheel.png" onclick="marker_img_select(39)" class="selected_marker" id="img_39" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/ferriswheel.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Festival">
				<img  icon_src="/festival.png" onclick="marker_img_select(40)" class="selected_marker" id="img_40" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/festival.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fireworks">
				<img icon_src="/fireworks.png" onclick="marker_img_select(41)" class="selected_marker" id="img_41" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fireworks.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fishing">
				<img  icon_src="/fishing.png" onclick="marker_img_select(42)" class="selected_marker" id="img_42" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fishing.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Geocaching">
				<img  icon_src="/geocaching-3.png" onclick="marker_img_select(43)" class="selected_marker" id="img_43" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/geocaching-3.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Hookah Final">
				<img  icon_src="/hookah_final.png" onclick="marker_img_select(44)" class="selected_marker" id="img_44" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/hookah_final.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Laterne">
				<img  icon_src="/laterne.png" onclick="marker_img_select(45)" class="selected_marker" id="img_45" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/laterne.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Magic Show">
				<img icon_src="/magicshow.png" onclick="marker_img_select(46)" class="selected_marker" id="img_46" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/magicshow.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Mural">
				<img icon_src="/mural.png" onclick="marker_img_select(47)" class="selected_marker" id="img_47" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/mural.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Paint Ball">
				<img icon_src="/paintball.png" onclick="marker_img_select(48)" class="selected_marker" id="img_48" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/paintball.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Party">
				<img icon_src="/party-2.png" onclick="marker_img_select(49)" class="selected_marker" id="img_49" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/party-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Poker">
				<img icon_src="/poker.png" onclick="marker_img_select(50)" class="selected_marker" id="img_50" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/poker.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Publicart">
				<img icon_src="/publicart.png" onclick="marker_img_select(51)" class="selected_marker" id="img_51" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/publicart.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Ropes Course">
				<img icon_src="/ropescourse.png" onclick="marker_img_select(52)" class="selected_marker" id="img_52" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/ropescourse.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Segway">
				<img icon_src="/segway.png" onclick="marker_img_select(53)" class="selected_marker" id="img_53" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/segway.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="sledge Summer">
				<img icon_src="/sledge_summer.png" onclick="marker_img_select(54)" class="selected_marker" id="img_54" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sledge_summer.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Strip Club">
				<img icon_src="/stripclub2.png" onclick="marker_img_select(55)" class="selected_marker" id="img_55" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/stripclub2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Targ">
				<img icon_src="/targ.png" onclick="marker_img_select(56)" class="selected_marker" id="img_56" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/targ.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Theme Park">
				<img icon_src="/themepark.png"  onclick="marker_img_select(57)" class="selected_marker" id="img_57" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/themepark.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Treasure Mark">
				<img icon_src="/treasure-mark.png" onclick="marker_img_select(58)" class="selected_marker" id="img_58" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/treasure-mark.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Video Games">
				<img icon_src="/videogames.png" onclick="marker_img_select(59)" class="selected_marker" id="img_59" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/videogames.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Walking Tour">
				<img icon_src="/walkingtour.png" onclick="marker_img_select(60)" class="selected_marker" id="img_60" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/walkingtour.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Water Park">
				<img icon_src="/waterpark.png" onclick="marker_img_select(61)" class="selected_marker" id="img_61" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/waterpark.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Zoo">
				<img icon_src="/zoo.png" onclick="marker_img_select(62)" class="selected_marker" id="img_62" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/zoo.png'; ?>" />
			</span>
		</div>
		<div id="ux_3" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Abduction">
				<img icon_src="/abduction.png" onclick="marker_img_select(63)" class="selected_marker" id="img_63" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/abduction.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Blast">
				<img icon_src="/blast.png" onclick="marker_img_select(64)" class="selected_marker" id="img_64" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/blast.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Bomb">
				<img icon_src="/bomb.png" onclick="marker_img_select(65)" class="selected_marker" id="img_65" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bomb.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Crime Scene">
				<img icon_src="/crimescene.png" onclick="marker_img_select(66)" class="selected_marker" id="img_66" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/crimescene.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fire">
				<img icon_src="/fire.png" onclick="marker_img_select(67)" class="selected_marker" id="img_67" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fire.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Pirates">
				<img icon_src="/pirates.png" onclick="marker_img_select(68)" class="selected_marker" id="img_68" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/pirates.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Rape">
				<img icon_src="/rape.png" onclick="marker_img_select(69)" class="selected_marker" id="img_69" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/rape.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Robbery">
				<img icon_src="/robbery.png" onclick="marker_img_select(70)" class="selected_marker" id="img_70" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/robbery.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Shooting">
				<img icon_src="/shooting.png" onclick="marker_img_select(71)" class="selected_marker" id="img_71" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/shooting.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Theft">
				<img icon_src="/theft.png" onclick="marker_img_select(72)" class="selected_marker" id="img_72" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/theft.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Torture">
				<img icon_src="/torture.png" onclick="marker_img_select(73)" class="selected_marker" id="img_73" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/torture.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="War">
				<img icon_src="/war.png" onclick="marker_img_select(74)" class="selected_marker" id="img_74" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/war.png'; ?>" />
			</span>
		</div>
		<div id="ux_4" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Avalanche">
				<img icon_src="/avalanche1.png" onclick="marker_img_select(75)" class="selected_marker" id="img_75" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/avalanche1.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Earthquake">
				<img icon_src="/earthquake-3.png" onclick="marker_img_select(76)" class="selected_marker" id="img_76" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/earthquake-3.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Flood">
				<img icon_src="/flood.png" onclick="marker_img_select(77)" class="selected_marker" id="img_77" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/flood.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Skull">
				<img icon_src="/skull.png" onclick="marker_img_select(78)" class="selected_marker" id="img_78" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/skull.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Tornado">
				<img icon_src="/tornado-2.png" onclick="marker_img_select(79)" class="selected_marker" id="img_79" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tornado-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Tree Down">
				<img icon_src="/treedown.png" onclick="marker_img_select(80)" class="selected_marker" id="img_80" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/treedown.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Tsunami">
				<img icon_src="/tsunami.png" onclick="marker_img_select(81)" class="selected_marker" id="img_81" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tsunami.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Zombie-Outbreak">
				<img icon_src="/zombie-outbreak1.png" onclick="marker_img_select(82)" class="selected_marker" id="img_82" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/zombie-outbreak1.png'; ?>" />
			</span>
		</div>
		<div id="ux_5" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Cram School">
				<img icon_src="/cramschool.png" onclick="marker_img_select(83)" class="selected_marker" id="img_83" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cramschool.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Day Care">
				<img icon_src="/daycare.png" onclick="marker_img_select(84)" class="selected_marker" id="img_84" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/daycare.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fsb Marker">
				<img icon_src="/fsb_marker.png" onclick="marker_img_select(85)" class="selected_marker" id="img_85" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fsb_marker.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="High School">
				<img icon_src="/highschool.png" onclick="marker_img_select(86)" class="selected_marker" id="img_86" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/highschool.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Nanny">
				<img icon_src="/nanny.png" onclick="marker_img_select(87)" class="selected_marker" id="img_87" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/nanny.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Nursery">
				<img icon_src="/nursery.png" onclick="marker_img_select(88)" class="selected_marker" id="img_88" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/nursery.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="School">
				<img icon_src="/school.png" onclick="marker_img_select(89)" class="selected_marker" id="img_89" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/school.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Summer Camp">
				<img icon_src="/summercamp.png" onclick="marker_img_select(90)" class="selected_marker" id="img_90" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/summercamp.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="University">
				<img icon_src="/university.png" onclick="marker_img_select(91)" class="selected_marker" id="img_91" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/university.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Workshop">
				<img icon_src="/workshop.png" onclick="marker_img_select(92)" class="selected_marker" id="img_92" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/workshop.png'; ?>" />
			</span>
		</div>
		<div id="ux_6" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Acupuncture">
				<img icon_src="/acupuncture.png" onclick="marker_img_select(93)" class="selected_marker" id="img_93" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/acupuncture.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Aed">
				<img icon_src="/aed-2.png" onclick="marker_img_select(94)" class="selected_marker" id="img_94" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/aed-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Ambulance">
				<img icon_src="/ambulance.png" onclick="marker_img_select(95)" class="selected_marker" id="img_95" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/ambulance.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Ambulance Boat">
				<img icon_src="/ambulanceboat.png" onclick="marker_img_select(96)" class="selected_marker" id="img_96" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/ambulanceboat.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Barber">
				<img icon_src="/barber.png" onclick="marker_img_select(97)" class="selected_marker" id="img_97" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/barber.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Beauty Salon">
				<img icon_src="/beautysalon.png" onclick="marker_img_select(98)" class="selected_marker" id="img_98" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/beautysalon.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Breast Feeding">
				<img icon_src="/breastfeeding.png" onclick="marker_img_select(99)" class="selected_marker" id="img_99" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/breastfeeding.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Chiropractor">
				<img icon_src="/chiropractor.png" onclick="marker_img_select(100)" class="selected_marker" id="img_100" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/chiropractor.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Dentist">
				<img icon_src="/dentist.png" onclick="marker_img_select(101)" class="selected_marker" id="img_101" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/dentist.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Disability">
				<img icon_src="/disability.png" onclick="marker_img_select(102)" class="selected_marker" id="img_102" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/disability.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Drugstore">
				<img icon_src="/drugstore.png" onclick="marker_img_select(103)" class="selected_marker" id="img_103" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/drugstore.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Emergency Phone">
				<img icon_src="/emergencyphone.png" onclick="marker_img_select(104)" class="selected_marker" id="img_104" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/emergencyphone.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fetal Alcohol Syndrom">
				<img icon_src="/fetalalcoholsyndrom.png" onclick="marker_img_select(105)" class="selected_marker" id="img_105" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fetalalcoholsyndrom.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="First Aid">
				<img icon_src="/firstaid.png" onclick="marker_img_select(106)" class="selected_marker" id="img_106" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/firstaid.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Foot Print">
				<img icon_src="/footprint.png" onclick="marker_img_select(107)" class="selected_marker" id="img_107" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/footprint.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Hearing-Aid-Acoustician">
				<img icon_src="/hoergeraeteakustiker_22px.png" onclick="marker_img_select(108)" class="selected_marker" id="img_108" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/hoergeraeteakustiker_22px.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Hospital Building">
				<img icon_src="/hospital-building.png" onclick="marker_img_select(109)" class="selected_marker" id="img_109" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/hospital-building.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Icon Nailsalon">
				<img icon_src="/icon-nailsalon.png" onclick="marker_img_select(110)" class="selected_marker" id="img_110" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/icon-nailsalon.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Jacuzzi">
				<img icon_src="/jacuzzi.png" onclick="marker_img_select(111)" class="selected_marker" id="img_111" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/jacuzzi.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Latrine">
				<img icon_src="/latrine.png" onclick="marker_img_select(112)" class="selected_marker" id="img_112" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/latrine.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Marijuana">
				<img icon_src="/marijuana.png" onclick="marker_img_select(113)" class="selected_marker" id="img_113" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/marijuana.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Massage">
				<img icon_src="/massage.png" onclick="marker_img_select(114)" class="selected_marker" id="img_114" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/massage.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Medical Store">
				<img icon_src="/medicalstore.png" onclick="marker_img_select(115)" class="selected_marker" id="img_115" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/medicalstore.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Medicine">
				<img icon_src="/medicine.png" onclick="marker_img_select(116)" class="selected_marker" id="img_116" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/medicine.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Nursing Home Icon">
				<img icon_src="/nursing_home_icon.png" onclick="marker_img_select(117)" class="selected_marker" id="img_117" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/nursing_home_icon.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Ophthalmologist">
				<img icon_src="/ophthalmologist.png" onclick="marker_img_select(118)" class="selected_marker" id="img_118" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/ophthalmologist.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Pleasure Pier">
				<img icon_src="/pleasurepier.png" onclick="marker_img_select(119)" class="selected_marker" id="img_119" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/pleasurepier.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Sauna">
				<img icon_src="/sauna.png" onclick="marker_img_select(120)" class="selected_marker" id="img_120" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sauna.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Social Services Provider">
				<img icon_src="/sozialeeinrichtung.png" onclick="marker_img_select(121)" class="selected_marker" id="img_121" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sozialeeinrichtung.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Spa">
				<img icon_src="/spa.png" onclick="marker_img_select(122)" class="selected_marker" id="img_122" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/spa.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Therapy">
				<img icon_src="/therapy.png" onclick="marker_img_select(123)" class="selected_marker" id="img_123" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/therapy.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Toilets">
				<img icon_src="/toilets.png" onclick="marker_img_select(124)" class="selected_marker" id="img_124" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/toilets.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Veterinary">
				<img icon_src="/veterinary.png" onclick="marker_img_select(125)" class="selected_marker" id="img_125" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/veterinary.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="X Ray">
				<img icon_src="/x-ray.png" onclick="marker_img_select(126)" class="selected_marker" id="img_126" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/x-ray.png'; ?>" />
			</span>
		</div>
		<div id="ux_7" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Electric Power">
				<img icon_src="/dam.png" onclick="marker_img_select(127)" class="selected_marker" id="img_127" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/dam.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Geothermal Site">
				<img icon_src="/geothermal-site.png" onclick="marker_img_select(128)" class="selected_marker" id="img_128" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/geothermal-site.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Line Down">
				<img icon_src="/linedown.png" onclick="marker_img_select(129)" class="selected_marker" id="img_129" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/linedown.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="No Nuke Export">
				<img icon_src="/no-nuke-export.png" onclick="marker_img_select(130)" class="selected_marker" id="img_130" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/no-nuke-export.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Out Let">
				<img icon_src="/outlet2.png" onclick="marker_img_select(131)" class="selected_marker" id="img_131" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/outlet2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Pond">
				<img icon_src="/pond.png" onclick="marker_img_select(132)" class="selected_marker" id="img_132" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/pond.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Power Line Pole">
				<img icon_src="/powerlinepole" onclick="marker_img_select(133)" class="selected_marker" id="img_133" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/powerlinepole.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Power Out Age">
				<img icon_src="/poweroutage.png" onclick="marker_img_select(134)" class="selected_marker" id="img_134" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/poweroutage.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Power Plant">
				<img icon_src="/powerplant.png" onclick="marker_img_select(135)" class="selected_marker" id="img_135" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/powerplant.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Power Substation">
				<img icon_src="/powersubstation.png" onclick="marker_img_select(136)" class="selected_marker" id="img_136" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/powersubstation.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Solar Energy">
				<img icon_src="/solarenergy.png" onclick="marker_img_select(137)" class="selected_marker" id="img_137" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/solarenergy.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Splice">
				<img icon_src="/splice.png" onclick="marker_img_select(138)" class="selected_marker" id="img_138" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/splice.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Wind Turbine">
				<img icon_src="/windturbine.png" onclick="marker_img_select(139)" class="selected_marker" id="img_139" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/windturbine.png'; ?>" />
			</span>
		</div>
		<div id="ux_8" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Air Fixwing">
				<img icon_src="/air_fixwing.png" onclick="marker_img_select(140)" class="selected_marker" id="img_140" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/air_fixwing.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Air Craft Carrier">
				<img icon_src="/aircraftcarrier.png" onclick="marker_img_select(141)" class="selected_marker" id="img_141" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/aircraftcarrier.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Army">
				<img icon_src="/army.png" onclick="marker_img_select(142)" class="selected_marker" id="img_142" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/army.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Battle Ship">
				<img icon_src="/battleship-3.png" onclick="marker_img_select(143)" class="selected_marker" id="img_143" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/battleship-3.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Bomber">
				<img icon_src="/bomber-2.png" onclick="marker_img_select(144)" class="selected_marker" id="img_144" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bomber-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Bunker">
				<img icon_src="/bunker.png" onclick="marker_img_select(145)" class="selected_marker" id="img_145" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bunker.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Bunker">
				<img icon_src="/bunker-2-2.png" onclick="marker_img_select(146)" class="selected_marker" id="img_146" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bunker-2-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Channel Change">
				<img icon_src="/channelchange.png" onclick="marker_img_select(147)" class="selected_marker" id="img_147" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/channelchange.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Frequency Change">
				<img icon_src="/freqchg.png" onclick="marker_img_select(148)" class="selected_marker" id="img_148" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/freqchg.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Jeep">
				<img icon_src="/jeep.png" onclick="marker_img_select(149)" class="selected_marker" id="img_149" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/jeep.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fighter Jet">
				<img icon_src="/jetfighter.png" onclick="marker_img_select(150)" class="selected_marker" id="img_150" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/jetfighter.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Missile">
				<img icon_src="/missile-2.png" onclick="marker_img_select(151)" class="selected_marker" id="img_151" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/missile-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Radar">
				<img icon_src="/radar.png" onclick="marker_img_select(152)" class="selected_marker" id="img_152" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/radar.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Sub Marine">
				<img icon_src="/submarine-2.png" onclick="marker_img_select(153)" class="selected_marker" id="img_153" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/submarine-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Waco">
				<img icon_src="/waco.png" onclick="marker_img_select(154)" class="selected_marker" id="img_154" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/waco.png'; ?>" />
			</span>
		</div>
		<div id="ux_15" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Algae">
				<img icon_src="/algae.png" onclick="marker_img_select(155)" class="selected_marker" id="img_155" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/algae.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Apple">
				<img icon_src="/apple.png" onclick="marker_img_select(156)" class="selected_marker" id="img_156" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/apple.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Cheese">
				<img icon_src="/cheese.png" onclick="marker_img_select(157)" class="selected_marker" id="img_157" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cheese.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Corral">
				<img icon_src="/corral.png" onclick="marker_img_select(158)" class="selected_marker" id="img_158" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/corral.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Crop Circles">
				<img icon_src="/cropcircles.png" onclick="marker_img_select(159)" class="selected_marker" id="img_159" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cropcircles.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Farm">
				<img icon_src="/farm-2.png" onclick="marker_img_select(160)" class="selected_marker" id="img_160" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/farm-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Farmstand">
				<img icon_src="/farmstand.png" onclick="marker_img_select(161)" class="selected_marker" id="img_161" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/farmstand.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Field">
				<img icon_src="/field.png" onclick="marker_img_select(163)" class="selected_marker" id="img_163" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/field.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fruits">
				<img icon_src="/fruits.png" onclick="marker_img_select(164)" class="selected_marker" id="img_164" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fruits.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Hay Bale">
				<img icon_src="/haybale.png" onclick="marker_img_select(165)" class="selected_marker" id="img_165" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/haybale.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Honey Comb">
				<img icon_src="/honeycomb.png" onclick="marker_img_select(166)" class="selected_marker" id="img_166" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/honeycomb.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Lawan Mower">
				<img icon_src="/lawncareicon.png" onclick="marker_img_select(167)" class="selected_marker" id="img_167" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/lawncareicon.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Four Leaf Clover">
				<img icon_src="/quadrifoglio.png" onclick="marker_img_select(168)" class="selected_marker" id="img_168" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/quadrifoglio.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Rice">
				<img icon_src="/rice.png" onclick="marker_img_select(169)" class="selected_marker" id="img_169" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/rice.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Sugar Shack">
				<img icon_src="/sugar-shack.png" onclick="marker_img_select(170)" class="selected_marker" id="img_170" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sugar-shack.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="U Pick Stand">
				<img icon_src="/u-pick_stand.png" onclick="marker_img_select(171)" class="selected_marker" id="img_171" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/u-pick_stand.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Vineyard">
				<img icon_src="/vineyard-2.png" onclick="marker_img_select(172)" class="selected_marker" id="img_172" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/vineyard-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Water">
				<img icon_src="/water.png" onclick="marker_img_select(173)" class="selected_marker" id="img_173" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/water.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Water Mill">
				<img icon_src="/watermill-2.png" onclick="marker_img_select(174)" class="selected_marker" id="img_174" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/watermill-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Water Well Pump">
				<img icon_src="/waterwellpump.png" onclick="marker_img_select(175)" class="selected_marker" id="img_175" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/waterwellpump.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Wind Mill">
				<img icon_src="/windmill-2.png" onclick="marker_img_select(176)" class="selected_marker" id="img_176" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/windmill-2.png'; ?>" />
			</span>
		</div>
		<div id="ux_16" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Alligator">
				<img icon_src="/alligator.png" onclick="marker_img_select(177)" class="selected_marker" id="img_177" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/alligator.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Animal Shelter Export">
				<img icon_src="/animal-shelter-export.png" onclick="marker_img_select(178)" class="selected_marker" id="img_178" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/animal-shelter-export.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Ant Export">
				<img icon_src="/ant-export.png" onclick="marker_img_select(179)" class="selected_marker" id="img_179" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/ant-export.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Bats">
				<img icon_src="/bats.png" onclick="marker_img_select(180)" class="selected_marker" id="img_180" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bats.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Bear">
				<img icon_src="/bear.png" onclick="marker_img_select(181)" class="selected_marker" id="img_181" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bear.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Bee">
				<img icon_src="/bee.png" onclick="marker_img_select(182)" class="selected_marker" id="img_182" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bee.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Birds">
				<img icon_src="/birds-2.png" onclick="marker_img_select(183)" class="selected_marker" id="img_183" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/birds-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Black Cock">
				<img icon_src="/blackcock1.png" onclick="marker_img_select(184)" class="selected_marker" id="img_184" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/blackcock1.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Butterfly">
				<img icon_src="/butterfly-2.png" onclick="marker_img_select(185)" class="selected_marker" id="img_185" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/butterfly-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Cat">
				<img icon_src="/cat-2.png" onclick="marker_img_select(186)" class="selected_marker" id="img_186" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cat-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Chicken">
				<img icon_src="/chicken-2.png" onclick="marker_img_select(187)" class="selected_marker" id="img_187" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/chicken-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Cow Export">
				<img icon_src="/cow-export.png" onclick="marker_img_select(188)" class="selected_marker" id="img_188" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cow-export.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Deer">
				<img icon_src="/deer.png" onclick="marker_img_select(189)" class="selected_marker" id="img_189" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/deer.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Dolphins">
				<img icon_src="/dolphins.png" onclick="marker_img_select(190)" class="selected_marker" id="img_190" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/dolphins.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Dragon">
				<img icon_src="/dragon.png" onclick="marker_img_select(191)" class="selected_marker" id="img_191" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/dragon.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Duck Export">
				<img icon_src="/duck-export.png" onclick="marker_img_select(192)" class="selected_marker" id="img_192" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/duck-export.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Eggs">
				<img icon_src="/eggs.png" onclick="marker_img_select(193)" class="selected_marker" id="img_193" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/eggs.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Elephants">
				<img icon_src="/elephants.png" onclick="marker_img_select(194)" class="selected_marker" id="img_194" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/elephants.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Emu">
				<img icon_src="/emu.png" onclick="marker_img_select(195)" class="selected_marker" id="img_195" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/emu.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fox">
				<img icon_src="/fox1.png" onclick="marker_img_select(196)" class="selected_marker" id="img_196" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fox1.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Frog">
				<img icon_src="/frog-2.png" onclick="marker_img_select(197)" class="selected_marker" id="img_197" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/frog-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Giraffe">
				<img icon_src="/giraffe.png" onclick="marker_img_select(198)" class="selected_marker" id="img_198" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/giraffe.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Hare">
				<img icon_src="/hare1.png" onclick="marker_img_select(199)" class="selected_marker" id="img_199" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/hare1.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Kangaroo">
				<img icon_src="/kangaroo2.png" onclick="marker_img_select(200)" class="selected_marker" id="img_200" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/kangaroo2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Leopard Snow">
				<img icon_src ="/leopard_snow.png" onclick="marker_img_select(201)" class="selected_marker" id="img_201" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/leopard_snow.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Lobster Export">
				<img icon_src ="/lobster-export.png" onclick="marker_img_select(202)" class="selected_marker" id="img_202" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/lobster-export.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Manatee">
				<img icon_src="/manatee.png"  onclick="marker_img_select(203)" class="selected_marker" id="img_203" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/manatee.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Monkey Export">
				<img icon_src="/monkey-export.png" onclick="marker_img_select(204)" class="selected_marker" id="img_204" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/monkey-export.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Mosquito">
				<img icon_src="/mosquito-2.png" onclick="marker_img_select(205)" class="selected_marker" id="img_205" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/mosquito-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Oyster">
				<img icon_src="/oyster-3.png" onclick="marker_img_select(206)" class="selected_marker" id="img_206" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/oyster-3.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Penguin">
				<img icon_src="/penguin-2.png" onclick="marker_img_select(207)" class="selected_marker" id="img_207" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/penguin-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Pets">
				<img icon_src="/pets.png" onclick="marker_img_select(208)" class="selected_marker" id="img_208" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/pets.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Pig">
				<img icon_src="/pig.png" onclick="marker_img_select(209)" class="selected_marker" id="img_209" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/pig.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Rodent">
				<img icon_src="/rodent.png" onclick="marker_img_select(210)" class="selected_marker" id="img_210" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/rodent.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Seals">
				<img icon_src="/seals.png" onclick="marker_img_select(211)" class="selected_marker" id="img_211" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/seals.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Snail">
				<img icon_src="/snail.png" onclick="marker_img_select(212)" class="selected_marker" id="img_212" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/snail.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Snakes">
				<img icon_src="/snakes.png" onclick="marker_img_select(213)" class="selected_marker" id="img_213" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/snakes.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Spider">
				<img icon_src="/spider.png" onclick="marker_img_select(214)" class="selected_marker" id="img_214" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/spider.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Tiger">
				<img icon_src="/tiger-2.png" onclick="marker_img_select(215)" class="selected_marker" id="img_215" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tiger-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Turtle">
				<img icon_src="/turtle-2.png" onclick="marker_img_select(216)" class="selected_marker" id="img_216" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/turtle-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Whale">
				<img icon_src="/whale-2.png" onclick="marker_img_select(217)" class="selected_marker" id="img_217" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/whale-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Wild Life Crossing">
				<img icon_src="/wildlifecrossing.png" onclick="marker_img_select(218)" class="selected_marker" id="img_218" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/wildlifecrossing.png'; ?>" />
			</span>
		</div>
		<div id="ux_17" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Anchorpier">
				<img icon_src="/anchorpier.png" onclick="marker_img_select(219)" class="selected_marker" id="img_219" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/anchorpier.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Beach">
				<img icon_src="/beach.png" onclick="marker_img_select(220)" class="selected_marker" id="img_220" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/beach.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Beautiful View">
				<img icon_src="/beautifulview.png" onclick="marker_img_select(221)" class="selected_marker" id="img_221" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/beautifulview.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Canyon">
				<img icon_src="/canyon-2.png" onclick="marker_img_select(222)" class="selected_marker" id="img_222" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/canyon-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Desert">
				<img icon_src="/desert-2.png" onclick="marker_img_select(223)" class="selected_marker" id="img_223" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/desert-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Drinking Water">
				<img icon_src="/drinkingwater.png" onclick="marker_img_select(224)" class="selected_marker" id="img_224" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/drinkingwater.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fjord">
				<img icon_src="/fjord-2.png" onclick="marker_img_select(225)" class="selected_marker" id="img_225" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fjord-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Flowers">
				<img icon_src="/flowers.png" onclick="marker_img_select(226)" class="selected_marker" id="img_226" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/flowers.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Forest">
				<img icon_src="/forest2.png" onclick="marker_img_select(227)" class="selected_marker" id="img_227" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/forest2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fossils">
				<img icon_src="/fossils.png" onclick="marker_img_select(228)" class="selected_marker" id="img_228" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fossils.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Gyser">
				<img icon_src="/geyser-2.png" onclick="marker_img_select(229)" class="selected_marker" id="img_229" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/geyser-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Glacier">
				<img icon_src="/glacier-2.png" onclick="marker_img_select(230)" class="selected_marker" id="img_230" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/glacier-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Grass">
				<img icon_src="/grass.png" onclick="marker_img_select(231)" class="selected_marker" id="img_231" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/grass.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Hot Spring">
				<img icon_src="/hotspring.png" onclick="marker_img_select(232)" class="selected_marker" id="img_232" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/hotspring.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Lake">
				<img icon_src="/lake.png" onclick="marker_img_select(233)" class="selected_marker" id="img_233" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/lake.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Mountain">
				<img icon_src="/mountain-pass-locator-diagonal-reverse-export.png" onclick="marker_img_select(234)" class="selected_marker" id="img_234" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/mountain-pass-locator-diagonal-reverse-export.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Mountains">
				<img icon_src="/mountains.png" onclick="marker_img_select(235)" class="selected_marker" id="img_235" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/mountains.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Mushroom">
				<img icon_src="/mushroom.png" onclick="marker_img_select(236)" class="selected_marker" id="img_236" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/mushroom.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Riparian Habitat">
				<img icon_src="/riparianhabitat.png" onclick="marker_img_select(237)" class="selected_marker" id="img_237" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/riparianhabitat.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="River">
				<img icon_src="/river-2.png" onclick="marker_img_select(238)" class="selected_marker" id="img_238" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/river-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Shore">
				<img icon_src="/shore-2.png" onclick="marker_img_select(239)" class="selected_marker" id="img_239" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/shore-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Sunset Land">
				<img icon_src="/sunsetland.png" onclick="marker_img_select(240)" class="selected_marker" id="img_240" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sunsetland.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Volcano">
				<img icon_src="/volcano-2.png" onclick="marker_img_select(241)" class="selected_marker" id="img_241" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/volcano-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Water Drop">
				<img icon_src="/waterdrop.png" onclick="marker_img_select(242)" class="selected_marker" id="img_242" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/waterdrop.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Water Fall">
				<img icon_src="/waterfall-2.png" onclick="marker_img_select(243)" class="selected_marker" id="img_243" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/waterfall-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Water Well">
				<img icon_src="/waterwell.png" onclick="marker_img_select(244)" class="selected_marker" id="img_244" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/waterwell.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Wet Lands">
				<img icon_src="/wetlands.png" onclick="marker_img_select(245)" class="selected_marker" id="img_245" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/wetlands.png'; ?>" />
			</span>
		</div>
		<div id="ux_18" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Anemometer Mono">
				<img icon_src="/anemometer_mono.png" onclick="marker_img_select(246)" class="selected_marker" id="img_246" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/anemometer_mono.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Cloudy">
				<img icon_src="/cloudy.png" onclick="marker_img_select(247)" class="selected_marker" id="img_247" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cloudy.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Cloudy Sunny">
				<img icon_src="/cloudysunny.png" onclick="marker_img_select(248)" class="selected_marker" id="img_248" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cloudysunny.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Moon Star Sunny">
				<img icon_src="/moonstar.png" onclick="marker_img_select(249)" class="selected_marker" id="img_249" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/moonstar.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Rainy">
				<img icon_src="/rainy.png" onclick="marker_img_select(250)" class="selected_marker" id="img_250" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/rainy.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Snowy">
				<img icon_src="/snowy-2.png" onclick="marker_img_select(251)" class="selected_marker" id="img_251" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/snowy-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Sunny">
				<img icon_src="/sunny.png" onclick="marker_img_select(252)" class="selected_marker" id="img_252" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sunny.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Thunder Storm">
				<img icon_src="/thunderstorm.png" onclick="marker_img_select(253)" class="selected_marker" id="img_253" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/thunderstorm.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Umbrella">
				<img icon_src="/umbrella-2.png" onclick="marker_img_select(254)" class="selected_marker" id="img_254" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/umbrella-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Wind">
				<img icon_src="/wind-2.png" onclick="marker_img_select(255)" class="selected_marker" id="img_255" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/wind-2.png'; ?>" />
			</span>
		</div>
		<div id="ux_19" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Administration">
				<img icon_src="/administration.png" onclick="marker_img_select(256)" class="selected_marker" id="img_256" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/administration.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Community Centre">
				<img icon_src="/communitycentre.png" onclick="marker_img_select(257)" class="selected_marker" id="img_257" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/communitycentre.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Congress">
				<img icon_src="/congress.png" onclick="marker_img_select(258)" class="selected_marker" id="img_258" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/congress.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Exchequer">
				<img icon_src="/exchequer.png" onclick="marker_img_select(259)" class="selected_marker" id="img_259" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/exchequer.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fireman">
				<img icon_src="/firemen.png" onclick="marker_img_select(260)" class="selected_marker" id="img_260" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/firemen.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Auction Gavel">
				<img icon_src="/gavel-auction-fw.png" onclick="marker_img_select(261)" class="selected_marker" id="img_261" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/gavel-auction-fw.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Police">
				<img icon_src="/police.png" onclick="marker_img_select(262)" class="selected_marker" id="img_262" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/police.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Postal">
				<img icon_src="/postal.png" onclick="marker_img_select(263)" class="selected_marker" id="img_263" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/postal.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Seniorsite">
				<img icon_src="/seniorsite.png" onclick="marker_img_select(264)" class="selected_marker" id="img_264" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/seniorsite.png'; ?>" />
			</span>
		</div>
		<div id="ux_20" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Cold Storage">
				<img icon_src="/coldstorage.png" onclick="marker_img_select(265)" class="selected_marker" id="img_265" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/coldstorage.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Dressing Room">
				<img icon_src="/dressingroom.png" onclick="marker_img_select(266)" class="selected_marker" id="img_266" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/dressingroom.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Drinking Fountain">
				<img icon_src="/drinkingfountain.png" onclick="marker_img_select(267)" class="selected_marker" id="img_267" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/drinkingfountain.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Elevator">
				<img icon_src="/elevator.png" onclick="marker_img_select(268)" class="selected_marker" id="img_268" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/elevator.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Elevator Down">
				<img icon_src="/elevator_down.png" onclick="marker_img_select(269)" class="selected_marker" id="img_269" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/elevator_down.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Elevator Up">
				<img icon_src="/elevator_up.png" onclick="marker_img_select(270)" class="selected_marker" id="img_270" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/elevator_up.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Entrance">
				<img icon_src="/entrance.png" onclick="marker_img_select(271)" class="selected_marker" id="img_271" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/entrance.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Exit">
				<img icon_src="/exit.png" onclick="marker_img_select(272)" class="selected_marker" id="img_272" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/exit.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fire Exstinguisher">
				<img icon_src="/fireexstinguisher.png" onclick="marker_img_select(273)" class="selected_marker" id="img_273" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fireexstinguisher.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Heating and Aircon">
				<img icon_src="/heating-and-aircon.png" onclick="marker_img_select(274)" class="selected_marker" id="img_274" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/heating-and-aircon.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Information">
				<img icon_src="/information.png" onclick="marker_img_select(275)" class="selected_marker" id="img_275" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/information.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Moving Walkway Enter Export">
				<img icon_src="/moving-walkway-enter-export.png" onclick="marker_img_select(276)" class="selected_marker" id="img_276" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/moving-walkway-enter-export.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Shower">
				<img icon_src="/shower.png" onclick="marker_img_select(277)" class="selected_marker" id="img_277" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/shower.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Smoking">
				<img icon_src="/smoking.png" onclick="marker_img_select(278)" class="selected_marker" id="img_278" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/smoking.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Staris">
				<img icon_src="/stairs.png" onclick="marker_img_select(279)" class="selected_marker" id="img_279" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/stairs.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Telephone">
				<img icon_src="/telephone.png" onclick="marker_img_select(280)" class="selected_marker" id="img_280" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/telephone.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Trash">
				<img icon_src="/trash.png" onclick="marker_img_select(281)" class="selected_marker" id="img_281" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/trash.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Waiting">
				<img icon_src="/waiting.png" onclick="marker_img_select(282)" class="selected_marker" id="img_282" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/waiting.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Wi Fi">
				<img icon_src="/wifi.png" onclick="marker_img_select(283)" class="selected_marker" id="img_283" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/wifi.png'; ?>" />
			</span>
		</div>
		<div id="ux_21" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Condominium">
				<img icon_src="/condominium.png" onclick="marker_img_select(284)" class="selected_marker" id="img_284" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/condominium.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="House">
				<img icon_src="/house.png" onclick="marker_img_select(285)" class="selected_marker" id="img_285" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/house.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Office Building">
				<img icon_src="/office-building.png" onclick="marker_img_select(286)" class="selected_marker" id="img_286" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/office-building.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Town House">
				<img icon_src="/townhouse.png" onclick="marker_img_select(287)" class="selected_marker" id="img_287" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/townhouse.png'; ?>" />
			</span>
		</div>
		<div id="ux_22" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Child Museum">
				<img icon_src="/childmuseum01.png" onclick="marker_img_select(288)" class="selected_marker" id="img_288" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/childmuseum01.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Play Ground">
				<img icon_src="/playground.png" onclick="marker_img_select(289)" class="selected_marker" id="img_289" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/playground.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Scout Group">
				<img icon_src="/scoutgroup.png" onclick="marker_img_select(290)" class="selected_marker" id="img_290" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/scoutgroup.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Toys">
				<img icon_src="/toys.png" onclick="marker_img_select(291)" class="selected_marker" id="img_291" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/toys.png'; ?>" />
			</span>
		</div>
		<div id="ux_25" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Bar">
				<img icon_src="/bar.png" onclick="marker_img_select(292)" class="selected_marker" id="img_292" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bar.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Bar Coktail">
				<img icon_src="/bar_coktail.png" onclick="marker_img_select(293)" class="selected_marker" id="img_293" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bar_coktail.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Bar Juice">
				<img icon_src="/bar_juice.png" onclick="marker_img_select(294)" class="selected_marker" id="img_294" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bar_juice.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Beer Gardenm">
				<img icon_src="/beergarden.png" onclick="marker_img_select(295)" class="selected_marker" id="img_295" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/beergarden.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Coffee">
				<img icon_src="/coffee.png" onclick="marker_img_select(296)" class="selected_marker" id="img_296" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/coffee.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Gay Female">
				<img icon_src="/gay-female.png" onclick="marker_img_select(297)" class="selected_marker" id="img_297" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/gay-female.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Gay Female">
				<img icon_src="/gay-male.png" onclick="marker_img_select(298)" class="selected_marker" id="img_298" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/gay-male.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Japanese Sake">
				<img icon_src="/japanese-sake.png" onclick="marker_img_select(299)" class="selected_marker" id="img_299" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/japanese-sake.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Tea House">
				<img icon_src="/teahouse.png" onclick="marker_img_select(300)" class="selected_marker" id="img_300" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/teahouse.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Terrace">
				<img icon_src="/terrace.png" onclick="marker_img_select(301)" class="selected_marker" id="img_301" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/terrace.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Whisky Barrel">
				<img icon_src="/whiskey_barrel.png" onclick="marker_img_select(302)" class="selected_marker" id="img_302" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/whiskey_barrel.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Wine Bar">
				<img icon_src="/winebar.png" onclick="marker_img_select(303)" class="selected_marker" id="img_303" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/winebar.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Wine Tasting">
				<img icon_src="/winetasting.png" onclick="marker_img_select(304)" class="selected_marker" id="img_304" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/winetasting.png'; ?>" />
			</span>
		</div>
		<div id="ux_26" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Bed Breakfast">
				<img icon_src="/bed_breakfast1-2.png" onclick="marker_img_select(305)" class="selected_marker" id="img_305" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bed_breakfast1-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Cruise Ship">
				<img icon_src="/cruiseship.png" onclick="marker_img_select(306)" class="selected_marker" id="img_306" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cruiseship.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Hostel Star">
				<img icon_src="/hostel_0star.png" onclick="marker_img_select(307)" class="selected_marker" id="img_307" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/hostel_0star.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Hotel Star">
				<img icon_src="/hotel_0star.png" onclick="marker_img_select(308)" class="selected_marker" id="img_308" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/hotel_0star.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Lodging Star">
				<img icon_src="/lodging_0star.png" onclick="marker_img_select(309)" class="selected_marker" id="img_309" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/lodging_0star.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Lodging Horse Riding">
				<img icon_src="/lodging_horseriding.png" onclick="marker_img_select(310)" class="selected_marker" id="img_310" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/lodging_horseriding.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Motel">
				<img icon_src="/motel-2.png" onclick="marker_img_select(311)" class="selected_marker" id="img_311" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/motel-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Resort">
				<img icon_src="/resort.png" onclick="marker_img_select(312)" class="selected_marker" id="img_312" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/resort.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Tv">
				<img icon_src="/tv.png" onclick="marker_img_select(313)" class="selected_marker" id="img_313" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tv.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Villa">
				<img icon_src="/villa.png" onclick="marker_img_select(314)" class="selected_marker" id="img_314" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/villa.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Youth Hostel">
				<img icon_src="/youthhostel.png" onclick="marker_img_select(315)" class="selected_marker" id="img_315" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/youthhostel.png'; ?>" />
			</span>
		</div>
		<div id="ux_27" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Barbecue">
				<img icon_src="/barbecue.png" onclick="marker_img_select(316)" class="selected_marker" id="img_316" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/barbecue.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Cafetaria">
				<img icon_src="/cafetaria.png" onclick="marker_img_select(317)" class="selected_marker" id="img_317" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cafetaria.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fast Food">
				<img icon_src="/fastfood.png" onclick="marker_img_select(318)" class="selected_marker" id="img_318" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fastfood.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Fish Chips">
				<img icon_src="/fishchips.png" onclick="marker_img_select(319)" class="selected_marker" id="img_319" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fishchips.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Gluten Free">
				<img icon_src="/gluten_free.png" onclick="marker_img_select(320)" class="selected_marker" id="img_320" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/gluten_free.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Gourmet star">
				<img icon_src="/gourmet_0star.png" onclick="marker_img_select(321)" class="selected_marker" id="img_321" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/gourmet_0star.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Japanese Food">
				<img icon_src="/japanese-food.png" onclick="marker_img_select(322)" class="selected_marker" id="img_322" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/japanese-food.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Kebab">
				<img icon_src="/kebab.png" onclick="marker_img_select(323)" class="selected_marker" id="img_323" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/kebab.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Pizzaria">
				<img icon_src="/pizzaria.png" onclick="marker_img_select(324)" class="selected_marker" id="img_324" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/pizzaria.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant">
				<img icon_src="/restaurant.png" onclick="marker_img_select(325)" class="selected_marker" id="img_325" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant African">
				<img icon_src="/restaurant_african.png" onclick="marker_img_select(326)" class="selected_marker" id="img_326" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_african.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Breakfast">
				<img icon_src="/restaurant_breakfast.png" onclick="marker_img_select(327)" class="selected_marker" id="img_327" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_breakfast.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Buffet">
				<img icon_src="/restaurant_buffet.png" onclick="marker_img_select(328)" class="selected_marker" id="img_328" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_buffet.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Chinese">
				<img icon_src="/restaurant_chinese.png" onclick="marker_img_select(329)" class="selected_marker" id="img_329" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_chinese.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Fish">
				<img icon_src="/restaurant_fish.png" onclick="marker_img_select(330)" class="selected_marker" id="img_330" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_fish.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Green">
				<img icon_src="/restaurant_greek.png" onclick="marker_img_select(331)" class="selected_marker" id="img_331" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_greek.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Indian">
				<img icon_src="/restaurant_indian.png" onclick="marker_img_select(332)" class="selected_marker" id="img_332" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_indian.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Italian">
				<img icon_src="/restaurant_italian.png" onclick="marker_img_select(333)" class="selected_marker" id="img_333" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_italian.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Korean">
				<img icon_src="/restaurant_korean.png" onclick="marker_img_select(334)" class="selected_marker" id="img_334" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_korean.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Mediterranean">
				<img icon_src="/restaurant_mediterranean.png" onclick="marker_img_select(335)" class="selected_marker" id="img_335" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_mediterranean.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Mexican">
				<img icon_src="/restaurant_mexican.png" onclick="marker_img_select(336)" class="selected_marker" id="img_336" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_mexican.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Romantic">
				<img icon_src="/restaurant_romantic.png" onclick="marker_img_select(337)" class="selected_marker" id="img_337" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_romantic.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Steakhouse">
				<img icon_src="/restaurant_steakhouse.png" onclick="marker_img_select(338)" class="selected_marker" id="img_338" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_steakhouse.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Tapas">
				<img icon_src="/restaurant_tapas.png" onclick="marker_img_select(339)" class="selected_marker" id="img_339" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_tapas.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Thai">
				<img icon_src="/restaurant_steakhouse.png" onclick="marker_img_select(340)" class="selected_marker" id="img_340" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_thai.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Turkish">
				<img icon_src="/restaurant_turkish.png" onclick="marker_img_select(341)" class="selected_marker" id="img_341" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_turkish.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Restaurant Vegetarian">
				<img icon_src="/restaurant_vegetarian.png" onclick="marker_img_select(342)" class="selected_marker" id="img_342" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/restaurant_vegetarian.png'; ?>" />
			</span>
		</div>
		<div id="ux_28" class="googlemaps-icons" style="display: none;">
			<span class="hovertip" data-original-title ="Food Delivery Service">
				<img icon_src="/fooddeliveryservice.png" onclick="marker_img_select(343)" class="selected_marker" id="img_343" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fooddeliveryservice.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Food Truck">
				<img icon_src="/foodtruck.png" onclick="marker_img_select(344)" class="selected_marker" id="img_344" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/foodtruck.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Ice Cream">
				<img icon_src="/icecream.png" onclick="marker_img_select(345)" class="selected_marker" id="img_345" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/icecream.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Sandwich">
				<img icon_src="/sandwich-2.png" onclick="marker_img_select(346)" class="selected_marker" id="img_346" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sandwich-2.png'; ?>" />
			</span>
			<span class="hovertip" data-original-title ="Take away">
				<img icon_src="/takeaway.png" onclick="marker_img_select(347)" class="selected_marker" id="img_347" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/takeaway.png'; ?>" />
			</span>
			</div>
			<div id="ux_29" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Archery">
					<img icon_src="/archery.png" onclick="marker_img_select(348)" class="selected_marker" id="img_348" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/archery.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Atv">
					<img icon_src="/atv.png" onclick="marker_img_select(349)" class="selected_marker" id="img_349" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/atv.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Australian Football">
					<img icon_src="/australianfootball.png" onclick="marker_img_select(350)" class="selected_marker" id="img_350" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/australianfootball.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Baseball">
					<img icon_src="/baseball.png" onclick="marker_img_select(351)" class="selected_marker" id="img_351" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/baseball.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Basketball">
					<img icon_src="/basketball.png" onclick="marker_img_select(352)" class="selected_marker" id="img_352" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/basketball.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Beach Vollyball">
					<img icon_src="/beachvolleyball.png" onclick="marker_img_select(353)" class="selected_marker" id="img_353" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/beachvolleyball.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Bike Downhill">
					<img icon_src="/bike_downhill.png" onclick="marker_img_select(354)" class="selected_marker" id="img_354" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bike_downhill.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Bike Rising">
					<img icon_src="/bike_rising.png" onclick="marker_img_select(355)" class="selected_marker" id="img_355" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bike_rising.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Boarder Cross">
					<img icon_src="/boardercross.png" onclick="marker_img_select(356)" class="selected_marker" id="img_356" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/boardercross.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Bobsliegh">
					<img icon_src="/bobsleigh.png" onclick="marker_img_select(357)" class="selected_marker" id="img_357" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bobsleigh.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Bollie">
					<img icon_src="/bollie.png" onclick="marker_img_select(358)" class="selected_marker" id="img_358" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bollie.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Boxing">
					<img icon_src="/boxing.png" onclick="marker_img_select(359)" class="selected_marker" id="img_359" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/boxing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Climbing">
					<img icon_src="/climbing.png" onclick="marker_img_select(360)" class="selected_marker" id="img_360" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/climbing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Criket">
					<img icon_src="/cricket.png" onclick="marker_img_select(361)" class="selected_marker" id="img_361" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cricket.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Curling">
					<img icon_src="/curling-2.png" onclick="marker_img_select(362)" class="selected_marker" id="img_362" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/curling-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Cycling">
					<img icon_src="/cycling.png" onclick="marker_img_select(363)" class="selected_marker" id="img_363" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cycling.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Cycling Feed">
					<img icon_src="/cycling_feed.png" onclick="marker_img_select(364)" class="selected_marker" id="img_364" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cycling_feed.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Cycling sprint">
					<img icon_src="/cycling_sprint.png" onclick="marker_img_select(365)" class="selected_marker" id="img_365" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cycling_sprint.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Deep Sea Fisshing">
					<img icon_src="/deepseafishing.png" onclick="marker_img_select(366)" class="selected_marker" id="img_366" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/deepseafishing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Diving">
					<img icon_src="/diving.png" onclick="marker_img_select(367)" class="selected_marker" id="img_367" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/diving.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Finish">
					<img icon_src="/finish.png" onclick="marker_img_select(368)" class="selected_marker" id="img_368" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/finish.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Fitness">
					<img icon_src="/fitness.png" onclick="marker_img_select(369)" class="selected_marker" id="img_369" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fitness.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Four by Four">
					<img icon_src="/fourbyfour.png" onclick="marker_img_select(370)" class="selected_marker" id="img_370" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fourbyfour.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Field Target">
					<img icon_src="/ft.png" onclick="marker_img_select(371)" class="selected_marker" id="img_371" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/ft.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Golfing">
					<img icon_src="/golfing.png" onclick="marker_img_select(372)" class="selected_marker" id="img_372" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/golfing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Handball">
					<img icon_src="/handball.png" onclick="marker_img_select(373)" class="selected_marker" id="img_373" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/handball.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Hang Gliding">
					<img icon_src="/hanggliding.png" onclick="marker_img_select(374)" class="selected_marker" id="img_374" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/hanggliding.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Hiking">
					<img icon_src="/hiking.png" onclick="marker_img_select(375)" class="selected_marker" id="img_375" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/hiking.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Horse Riding">
					<img icon_src="/horseriding.png" onclick="marker_img_select(376)" class="selected_marker" id="img_376" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/horseriding.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Hunting">
					<img icon_src="/hunting.png" onclick="marker_img_select(377)" class="selected_marker" id="img_377" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/hunting.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Ice Hockey">
					<img icon_src="/icehockey.png" onclick="marker_img_select(378)" class="selected_marker" id="img_378" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/icehockey.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Ice Skating">
					<img icon_src="/iceskating.png" onclick="marker_img_select(379)" class="selected_marker" id="img_379" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/iceskating.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Jogging">
					<img icon_src="/jogging.png" onclick="marker_img_select(380)" class="selected_marker" id="img_380" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/jogging.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Judo">
					<img icon_src="/judo.png" onclick="marker_img_select(381)" class="selected_marker" id="img_381" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/judo.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Karate">
					<img icon_src="/karate.png" onclick="marker_img_select(382)" class="selected_marker" id="img_382" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/karate.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Karting">
					<img icon_src="/karting.png" onclick="marker_img_select(383)" class="selected_marker" id="img_383" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/karting.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Kayaking">
					<img icon_src="/kayaking.png" onclick="marker_img_select(384)" class="selected_marker" id="img_384" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/kayaking.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Kite Surfing">
					<img icon_src="/kitesurfing.png" onclick="marker_img_select(385)" class="selected_marker" id="img_385" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/kitesurfing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Motar Bike">
					<img icon_src="/motorbike.png" onclick="marker_img_select(386)" class="selected_marker" id="img_386" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/motorbike.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Mountain Biking">
					<img icon_src="/mountainbiking-3.png" onclick="marker_img_select(387)" class="selected_marker" id="img_387" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/mountainbiking-3.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Mountain Cathc">
					<img icon_src="/mountains_cathc.png" onclick="marker_img_select(388)" class="selected_marker" id="img_388" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/mountains_cathc.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Nordicski">
					<img icon_src="/nordicski.png" onclick="marker_img_select(389)" class="selected_marker" id="img_389" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/nordicski.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Orienteering">
					<img icon_src="/orienteering.png" onclick="marker_img_select(390)" class="selected_marker" id="img_390" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/orienteering.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Para Glading">
					<img icon_src="/paragliding.png" onclick="marker_img_select(391)" class="selected_marker" id="img_391" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/paragliding.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Yooner">
					<img icon_src="/yooner.png" onclick="marker_img_select(392)" class="selected_marker" id="img_392" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/yooner.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Para Sailing">
					<img icon_src="/parasailing.png" onclick="marker_img_select(393)" class="selected_marker" id="img_393" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/parasailing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Petanque">
					<img icon_src="/petanque.png" onclick="marker_img_select(394)" class="selected_marker" id="img_394" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/petanque.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Radio Control Model Car">
					<img icon_src="/radio-control-model-car.png" onclick="marker_img_select(395)" class="selected_marker" id="img_395" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/radio-control-model-car.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Roller Blade">
					<img icon_src="/rollerblade.png" onclick="marker_img_select(396)" class="selected_marker" id="img_396" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/rollerblade.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Roller Skate">
					<img icon_src="/rollerskate.png" onclick="marker_img_select(397)" class="selected_marker" id="img_397" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/rollerskate.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Row Boat">
					<img icon_src="/rowboat.png" onclick="marker_img_select(398)" class="selected_marker" id="img_398" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/rowboat.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Rugby Field">
					<img icon_src="/rugbyfield.png" onclick="marker_img_select(399)" class="selected_marker" id="img_399" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/rugbyfield.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Sailing">
					<img icon_src="/sailing.png" onclick="marker_img_select(400)" class="selected_marker" id="img_400" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sailing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Scuva Diving">
					<img icon_src="/scubadiving.png" onclick="marker_img_select(401)" class="selected_marker" id="img_401" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/scubadiving.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Shooting Range">
					<img icon_src="/shootingrange.png" onclick="marker_img_select(402)" class="selected_marker" id="img_402" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/shootingrange.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Skiing">
					<img icon_src="/skiing.png" onclick="marker_img_select(403)" class="selected_marker" id="img_403" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/skiing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Ski Jump">
					<img icon_src="/skijump.png" onclick="marker_img_select(404)" class="selected_marker" id="img_404" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/skijump.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Ski Lifting">
					<img icon_src="/skilifting.png" onclick="marker_img_select(405)" class="selected_marker" id="img_405" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/skilifting.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Sle Dog">
					<img icon_src="/sleddog.png" onclick="marker_img_select(406)" class="selected_marker" id="img_406" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sleddog.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Sledge">
					<img icon_src="/sledge.png" onclick="marker_img_select(407)" class="selected_marker" id="img_407" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sledge.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Snorkling">
					<img icon_src="/snorkeling.png" onclick="marker_img_select(408)" class="selected_marker" id="img_408" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/snorkeling.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Snow Boarding">
					<img icon_src="/snowboarding.png" onclick="marker_img_select(409)" class="selected_marker" id="img_409" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/snowboarding.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Snow Mobiling">
					<img icon_src="/snowmobiling.png" onclick="marker_img_select(410)" class="selected_marker" id="img_410" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/snowmobiling.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Snow Park">
					<img icon_src="/snowpark_arc.png" onclick="marker_img_select(411)" class="selected_marker" id="img_411" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/snowpark_arc.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Snow Shoeing">
					<img icon_src="/snowshoeing.png" onclick="marker_img_select(412)" class="selected_marker" id="img_412" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/snowshoeing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Soccer">
					<img icon_src="/soccer.png" onclick="marker_img_select(413)" class="selected_marker" id="img_413" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/soccer.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Speed Riding">
					<img icon_src="/speedriding.png" onclick="marker_img_select(414)" class="selected_marker" id="img_414" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/speedriding.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Spelunking">
					<img icon_src="/spelunking.png" onclick="marker_img_select(415)" class="selected_marker" id="img_415" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/spelunking.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Sports Car">
					<img icon_src="/sportscar.png" onclick="marker_img_select(416)" class="selected_marker" id="img_416" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sportscar.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Sport Utility Vehicle">
					<img icon_src="/sportutilityvehicle.png" onclick="marker_img_select(417)" class="selected_marker" id="img_417" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sportutilityvehicle.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Squash">
					<img icon_src="/squash-2.png" onclick="marker_img_select(418)" class="selected_marker" id="img_418" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/squash-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Sumo">
					<img icon_src="/sumo-2.png" onclick="marker_img_select(419)" class="selected_marker" id="img_419" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sumo-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Surface Lift">
					<img icon_src="/surfacelift.png" onclick="marker_img_select(420)" class="selected_marker" id="img_420" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/surfacelift.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Surfing">
					<img icon_src="/surfing.png" onclick="marker_img_select(421)" class="selected_marker" id="img_421" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/surfing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Surf Paddle">
					<img icon_src="/surfpaddle.png" onclick="marker_img_select(422)" class="selected_marker" id="img_422" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/surfpaddle.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Swimming">
					<img icon_src="/swimming.png" onclick="marker_img_select(423)" class="selected_marker" id="img_423" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/swimming.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Taekwondo">
					<img icon_src="/taekwondo-2.png" onclick="marker_img_select(424)" class="selected_marker" id="img_424" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/taekwondo-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Table Tennis">
					<img icon_src="/tebletennis.png" onclick="marker_img_select(425)" class="selected_marker" id="img_425" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tebletennis.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Tennis">
					<img icon_src="/tennis.png" onclick="marker_img_select(426)" class="selected_marker" id="img_426" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tennis.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Us Football">
					<img icon_src="/usfootball.png" onclick="marker_img_select(427)" class="selected_marker" id="img_427" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/usfootball.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Volleyball">
					<img icon_src="/volleyball.png" onclick="marker_img_select(428)" class="selected_marker" id="img_428" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/volleyball.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Water Craft">
					<img icon_src="/watercraft.png" onclick="marker_img_select(429)" class="selected_marker" id="img_429" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/watercraft.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Water Skiing">
					<img icon_src="/waterskiing.png" onclick="marker_img_select(430)" class="selected_marker" id="img_430" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/waterskiing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Weights">
					<img icon_src="/weights.png" onclick="marker_img_select(431)" class="selected_marker" id="img_431" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/weights.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Wind Surfing">
					<img icon_src="/windsurfing.png" onclick="marker_img_select(432)" class="selected_marker" id="img_432" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/windsurfing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Wrestling">
					<img icon_src="/wrestling-2.png" onclick="marker_img_select(433)" class="selected_marker" id="img_433" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/wrestling-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Yoga">
					<img icon_src="/yoga.png" onclick="marker_img_select(434)" class="selected_marker" id="img_434" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/yoga.png'; ?>" />
				</span>
			</div>
			<div id="ux_30" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Bags">
					<img icon_src="/bags.png" onclick="marker_img_select(435)" class="selected_marker" id="img_435" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bags.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Clothers Female">
					<img icon_src="/clothers_female.png" onclick="marker_img_select(436)" class="selected_marker" id="img_436" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/clothers_female.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Clothers Male">
					<img icon_src="/clothers_male.png" onclick="marker_img_select(437)" class="selected_marker" id="img_437" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/clothers_male.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Hats">
					<img icon_src="/hats.png" onclick="marker_img_select(438)" class="selected_marker" id="img_438" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/hats.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Jewellry Female">
					<img icon_src="/jewelry.png" onclick="marker_img_select(439)" class="selected_marker" id="img_439" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/jewelry.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Lingerie">
					<img icon_src="/lingerie.png" onclick="marker_img_select(440)" class="selected_marker" id="img_440" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/lingerie.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Permurey">
					<img icon_src="/perfumery.png" onclick="marker_img_select(441)" class="selected_marker" id="img_441" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/perfumery.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Schreibwaren">
					<img icon_src="/schreibwaren_web.png" onclick="marker_img_select(442)" class="selected_marker" id="img_442" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/schreibwaren_web.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Shoes">
					<img icon_src="/shoes.png" onclick="marker_img_select(443)" class="selected_marker" id="img_443" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/shoes.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Sneakers">
					<img icon_src="/sneakers.png" onclick="marker_img_select(444)" class="selected_marker" id="img_444" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sneakers.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Tailor">
					<img icon_src="/tailor.png" onclick="marker_img_select(445)" class="selected_marker" id="img_445" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tailor.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Textiles">
					<img icon_src="/textiles.png" onclick="marker_img_select(446)" class="selected_marker" id="img_446" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/textiles.png'; ?>" />
				</span>
			</div>
			<div id="ux_31" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="B Emblem">
					<img icon_src="/b_emblem.png" onclick="marker_img_select(447)" class="selected_marker" id="img_447" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/b_emblem.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="The Capture Lab Mapmarker">
					<img icon_src="/thecapturelab_mapmarker-2.png" onclick="marker_img_select(448)" class="selected_marker" id="img_448" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/thecapturelab_mapmarker-2.png'; ?>" />
				</span>
			</div>
			<div id="ux_32" class="googlemaps-icons" style="display:none;">
				<span class="hovertip" data-original-title ="Computers">
					<img icon_src="/computers.png" onclick="marker_img_select(449)" class="selected_marker" id="img_449" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/computers.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Movierental">
					<img icon_src="/movierental.png" onclick="marker_img_select(450)" class="selected_marker" id="img_450" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/movierental.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Music">
					<img icon_src="/music.png" onclick="marker_img_select(451)" class="selected_marker" id="img_451" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/music.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Phones">
					<img icon_src="/phones.png" onclick="marker_img_select(452)" class="selected_marker" id="img_452" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/phones.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Photography">
					<img icon_src="/photography.png" onclick="marker_img_select(453)" class="selected_marker" id="img_453" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/photography.png'; ?>" />
				</span>
			</div>
			<div id="ux_33" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Bread">
					<img icon_src="/bread.png" onclick="marker_img_select(454)" class="selected_marker" id="img_454" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bread.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Butcher">
					<img icon_src="/butcher-2.png" onclick="marker_img_select(455)" class="selected_marker" id="img_455" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/butcher-2.png'; ?>" />
				</span>
				<a href="map-icons.php"></a>
				<span class="hovertip" data-original-title ="Candy">
					<img icon_src="/candy.png" onclick="marker_img_select(456)" class="selected_marker" id="img_456" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/candy.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Grocery">
					<img icon_src="/grocery.png" onclick="marker_img_select(457)" class="selected_marker" id="img_457" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/grocery.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Gumball Machine">
					<img icon_src="/gumball_machine.png" onclick="marker_img_select(458)" class="selected_marker" id="img_458" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/gumball_machine.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Japanese Sweet">
					<img icon_src="/japanese-sweet-2.png" onclick="marker_img_select(459)" class="selected_marker" id="img_459" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/japanese-sweet-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Liquor">
					<img icon_src="/liquor.png" onclick="marker_img_select(460)" class="selected_marker" id="img_460" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/liquor.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Muffin Bagle">
					<img icon_src="/muffin_bagle.png" onclick="marker_img_select(461)" class="selected_marker" id="img_461" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/muffin_bagle.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Patisserie">
					<img icon_src="/patisserie.png" onclick="marker_img_select(462)" class="selected_marker" id="img_462" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/patisserie.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Tajine">
					<img icon_src="/tajine-2.png" onclick="marker_img_select(463)" class="selected_marker" id="img_463" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tajine-2.png'; ?>" />
				</span>
			</div>
			<div id="ux_34" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Convenience Store">
					<img icon_src="/conveniencestore.png" onclick="marker_img_select(464)" class="selected_marker" id="img_464" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/conveniencestore.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Department Store">
					<img icon_src="/departmentstore.png" onclick="marker_img_select(465)" class="selected_marker" id="img_465" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/departmentstore.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Glasses">
					<img icon_src="/glasses.png" onclick="marker_img_select(466)" class="selected_marker" id="img_466" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/glasses.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Kayak">
					<img icon_src="/kayak1.png" onclick="marker_img_select(467)" class="selected_marker" id="img_467" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/kayak1.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Mall">
					<img icon_src="/mall.png" onclick="marker_img_select(468)" class="selected_marker" id="img_468" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/mall.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Market">
					<img icon_src="/market.png" onclick="marker_img_select(469)" class="selected_marker" id="img_469" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/market.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Ski Shoe">
					<img icon_src="/ski_shoe1.png" onclick="marker_img_select(470)" class="selected_marker" id="img_470" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/ski_shoe1.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Skis">
					<img icon_src="/skis.png" onclick="marker_img_select(471)" class="selected_marker" id="img_471" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/skis.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Super Market">
					<img icon_src="/supermarket.png" onclick="marker_img_select(472)" class="selected_marker" id="img_472" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/supermarket.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Travle Agency">
					<img icon_src="/travel_agency.png" onclick="marker_img_select(473)" class="selected_marker" id="img_473" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/travel_agency.png'; ?>" />
				</span>
			</div>
			<div id="ux_40" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Bouddha">
					<img icon_src="/bouddha.png" onclick="marker_img_select(474)" class="selected_marker" id="img_474" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bouddha.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Cathedral">
					<img icon_src="/cathedral.png" onclick="marker_img_select(475)" class="selected_marker" id="img_475" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cathedral.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Catholic Grave">
					<img icon_src="/catholicgrave.png" onclick="marker_img_select(476)" class="selected_marker" id="img_476" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/catholicgrave.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Cemetary">
					<img icon_src="/cemetary.png" onclick="marker_img_select(477)" class="selected_marker" id="img_477" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cemetary.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Chapel">
					<img icon_src="/chapel-2.png" onclick="marker_img_select(478)" class="selected_marker" id="img_478" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/chapel-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Church">
					<img icon_src="/church-2.png" onclick="marker_img_select(479)" class="selected_marker" id="img_479" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/church-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Convent">
					<img icon_src="/convent-2.png" onclick="marker_img_select(480)" class="selected_marker" id="img_480" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/convent-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Cross">
					<img icon_src="/cross-2.png" onclick="marker_img_select(481)" class="selected_marker" id="img_481" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cross-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Head Stone">
					<img icon_src="/headstone-2.png" onclick="marker_img_select(482)" class="selected_marker" id="img_482" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/headstone-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Japanese Temple">
					<img icon_src="/japanese-temple.png" onclick="marker_img_select(483)" class="selected_marker" id="img_483" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/japanese-temple.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Jewish Grave">
					<img icon_src="/jewishgrave.png" onclick="marker_img_select(484)" class="selected_marker" id="img_484" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/jewishgrave.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Mapicon">
					<img icon_src="/mapicon.png" onclick="marker_img_select(485)" class="selected_marker" id="img_485" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/mapicon.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Mosquee">
					<img icon_src="/mosquee.png" onclick="marker_img_select(486)" class="selected_marker" id="img_486" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/mosquee.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Prayer">
					<img icon_src="/prayer.png" onclick="marker_img_select(487)" class="selected_marker" id="img_487" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/prayer.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Shinto Shrine">
					<img icon_src="/shintoshrine.png" onclick="marker_img_select(488)" class="selected_marker" id="img_488" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/shintoshrine.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Sikh">
					<img icon_src="/sikh.png" onclick="marker_img_select(489)" class="selected_marker" id="img_489" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sikh.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Jerusalem Cross ">
					<img icon_src="/st-margarets-cross.png" onclick="marker_img_select(490)" class="selected_marker" id="img_490" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/st-margarets-cross.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Synagogue">
					<img icon_src="/synagogue-2.png" onclick="marker_img_select(491)" class="selected_marker" id="img_491" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/synagogue-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Temple Hindu">
					<img icon_src="/templehindu.png" onclick="marker_img_select(492)" class="selected_marker" id="img_492" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/templehindu.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Theravada Buddhist Temple ">
					<img icon_src="/theravadatemple.png" onclick="marker_img_select(493)" class="selected_marker" id="img_493" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/theravadatemple.png'; ?>" />
				</span>
			</div>
			<div id="ux_41" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Amphi Theater">
					<img icon_src="/amphitheater-2.png" onclick="marker_img_select(494)" class="selected_marker" id="img_494" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/amphitheater-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Arch">
					<img icon_src="/arch.png" onclick="marker_img_select(495)" class="selected_marker" id="img_495" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/arch.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Big City">
					<img icon_src="/bigcity.png" onclick="marker_img_select(496)" class="selected_marker" id="img_496" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bigcity.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Bridge Modern">
					<img icon_src="/bridge_modern.png" onclick="marker_img_select(497)" class="selected_marker" id="img_497" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bridge_modern.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Bridge Old">
					<img icon_src="/bridge_old.png" onclick="marker_img_select(498)" class="selected_marker" id="img_498" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bridge_old.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Castle">
					<img icon_src="/castle-2.png" onclick="marker_img_select(499)" class="selected_marker" id="img_499" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/castle-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="City Square">
					<img icon_src="/citysquare.png" onclick="marker_img_select(500)" class="selected_marker" id="img_500" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/citysquare.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="City Walls">
					<img icon_src="/citywalls.png" onclick="marker_img_select(501)" class="selected_marker" id="img_501" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/citywalls.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Clock">
					<img icon_src="/clock.png" onclick="marker_img_select(502)" class="selected_marker" id="img_502" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/clock.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Country">
					<img icon_src="/country.png" onclick="marker_img_select(503)" class="selected_marker" id="img_503" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/country.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Crematoruim">
					<img icon_src="/crematorium.png" onclick="marker_img_select(504)" class="selected_marker" id="img_504" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/crematorium.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Cromlech">
					<img icon_src="/cromlech.png" onclick="marker_img_select(505)" class="selected_marker" id="img_505" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cromlech.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Fountain">
					<img icon_src="/fountain-2.png" onclick="marker_img_select(506)" class="selected_marker" id="img_506" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fountain-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Historical Quarter">
					<img icon_src="/historicalquarter.png" onclick="marker_img_select(507)" class="selected_marker" id="img_507" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/historicalquarter.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Icon Sevilla">
					<img icon_src="/icon-sevilla.png" onclick="marker_img_select(508)" class="selected_marker" id="img_508" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/icon-sevilla.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Japanese Lantern">
					<img icon_src="/japanese-lantern.png" onclick="marker_img_select(509)" class="selected_marker" id="img_509" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/japanese-lantern.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Jewish Quarter">
					<img icon_src="/jewishquarter.png" onclick="marker_img_select(510)" class="selected_marker" id="img_510" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/jewishquarter.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Light House">
					<img icon_src="/lighthouse-2.png" onclick="marker_img_select(511)" class="selected_marker" id="img_511" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/lighthouse-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Map">
					<img icon_src="/map.png" onclick="marker_img_select(512)" class="selected_marker" id="img_512" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/map.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Megalith">
					<img icon_src="/megalith.png" onclick="marker_img_select(513)" class="selected_marker" id="img_513" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/megalith.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Memorial">
					<img icon_src="/memorial.png" onclick="marker_img_select(514)" class="selected_marker" id="img_514" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/memorial.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Modern Monument">
					<img icon_src="/modernmonument.png" onclick="marker_img_select(515)" class="selected_marker" id="img_515" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/modernmonument.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Modern Tower">
					<img icon_src="/moderntower.png" onclick="marker_img_select(516)" class="selected_marker" id="img_516" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/moderntower.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Monument">
					<img icon_src="/monument.png" onclick="marker_img_select(517)" class="selected_marker" id="img_517" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/monument.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Monument Historique">
					<img icon_src="/monument-historique.png" onclick="marker_img_select(518)" class="selected_marker" id="img_518" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/monument-historique.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="New England Barn">
					<img icon_src="/ne_barn-2.png" onclick="marker_img_select(519)" class="selected_marker" id="img_519" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/ne_barn-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Not Visited">
					<img icon_src="/notvisited.png" onclick="marker_img_select(520)" class="selected_marker" id="img_520" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/notvisited.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Olympic Site">
					<img icon_src="/olympicsite.png" onclick="marker_img_select(521)" class="selected_marker" id="img_521" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/olympicsite.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Pagoda">
					<img icon_src="/pagoda-2.png" onclick="marker_img_select(522)" class="selected_marker" id="img_522" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/pagoda-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Palace">
					<img icon_src="/palace-2.png" onclick="marker_img_select(523)" class="selected_marker" id="img_523" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/palace-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Panoramic View">
					<img icon_src="/panoramicview.png" onclick="marker_img_select(524)" class="selected_marker" id="img_524" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/panoramicview.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Petroglyphs">
					<img icon_src="/petroglyphs-2.png" onclick="marker_img_select(525)" class="selected_marker" id="img_525" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/petroglyphs-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Pyramid">
					<img icon_src="/pyramid.png" onclick="marker_img_select(526)" class="selected_marker" id="img_526" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/pyramid.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Rock House">
					<img icon_src="/rockhouse.png" onclick="marker_img_select(527)" class="selected_marker" id="img_527" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/rockhouse.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Ruins">
					<img icon_src="/ruins-2.png" onclick="marker_img_select(528)" class="selected_marker" id="img_528" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/ruins-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Sight">
					<img icon_src="/sight-2.png" onclick="marker_img_select(529)" class="selected_marker" id="img_529" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sight-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Small City">
					<img icon_src="/smallcity.png" onclick="marker_img_select(530)" class="selected_marker" id="img_530" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/smallcity.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Star">
					<img icon_src="/star-3.png" onclick="marker_img_select(531)" class="selected_marker" id="img_531" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/star-3.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Statue">
					<img icon_src="/statue-2.png" onclick="marker_img_select(532)" class="selected_marker" id="img_532" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/statue-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Temple">
					<img icon_src="/temple-2.png" onclick="marker_img_select(533)" class="selected_marker" id="img_533" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/temple-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Tower">
					<img icon_src="/tower.png" onclick="marker_img_select(534)" class="selected_marker" id="img_534" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tower.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Theravada Pagoda">
					<img icon_src="/theravadapagoda.png" onclick="marker_img_select(535)" class="selected_marker" id="img_535" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/theravadapagoda.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="World">
					<img icon_src="/world.png" onclick="marker_img_select(536)" class="selected_marker" id="img_536" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/world.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="World Heritagesite">
					<img icon_src="/worldheritagesite.png" onclick="marker_img_select(537)" class="selected_marker" id="img_537" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/worldheritagesite.png'; ?>" />
				</span>
			</div>
			<div id="ux_35" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Aircraft Small">
					<img icon_src="/aircraftsmall.png" onclick="marker_img_select(538)" class="selected_marker" id="img_538" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/aircraftsmall.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Airport">
					<img icon_src="/airport.png" onclick="marker_img_select(539)" class="selected_marker" id="img_539" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/airport.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Airport Apron">
					<img icon_src="/airport_apron.png" onclick="marker_img_select(540)" class="selected_marker" id="img_540" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/airport_apron.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Airport Runway">
					<img icon_src="/airport_runway.png" onclick="marker_img_select(541)" class="selected_marker" id="img_541" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/airport_runway.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Airport Terminal">
					<img  icon_src="/airport_terminal.png" onclick="marker_img_select(542)" class="selected_marker" id="img_542" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/airport_terminal.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Helicopter">
					<img  icon_src="/helicopter.png" onclick="marker_img_select(543)" class="selected_marker" id="img_543" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/helicopter.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Helipad">
					<img  icon_src="/helipad.png" onclick="marker_img_select(544)" class="selected_marker" id="img_544" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/helipad.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Hot Air Baloon">
					<img icon_src="/hotairbaloon.png" onclick="marker_img_select(545)" class="selected_marker" id="img_545" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/hotairbaloon.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="King Air">
					<img  icon_src="/kingair.png"  onclick="marker_img_select(546)" class="selected_marker" id="img_546" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/kingair.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Taxi Way">
					<img icon_src="/taxiway.png" onclick="marker_img_select(547)" class="selected_marker" id="img_547" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/taxiway.png'; ?>" />
				</span>
			</div>
			<div id="ux_36" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Direction  Down">
					<img icon_src="/direction_down.png" onclick="marker_img_select(548)" class="selected_marker" id="img_548" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/direction_down.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Direction U Turn">
					<img icon_src="/direction_uturn.png" onclick="marker_img_select(549)" class="selected_marker" id="img_549" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/direction_uturn.png'; ?>" />
				</span>
			</div>
			<div id="ux_37" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Boat">
					<img icon_src="/boat.png" onclick="marker_img_select(550)" class="selected_marker" id="img_550" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/boat.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Cable Car">
					<img icon_src="/cablecar.png" onclick="marker_img_select(551)" class="selected_marker" id="img_551" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/cablecar.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Car Share">
					<img icon_src="/car_share.png" onclick="marker_img_select(552)" class="selected_marker" id="img_552" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/car_share.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Crossing Gaurd">
					<img icon_src="/crossingguard.png" onclick="marker_img_select(553)" class="selected_marker" id="img_553" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/crossingguard.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Ferry">
					<img icon_src="/ferry.png" onclick="marker_img_select(554)" class="selected_marker" id="img_554" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/ferry.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Funi Colar">
					<img icon_src="/funicolar.png" onclick="marker_img_select(555)" class="selected_marker" id="img_555" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/funicolar.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Harbor">
					<img icon_src="/harbor.png" onclick="marker_img_select(556)" class="selected_marker" id="img_556" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/harbor.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Level Crossing">
					<img icon_src="/levelcrossing.png" onclick="marker_img_select(557)" class="selected_marker" id="img_557" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/levelcrossing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Oil">
					<img icon_src="/oil-2.png" onclick="marker_img_select(558)" class="selected_marker" id="img_558" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/oil-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Parking Bicycle">
					<img icon_src="/parking_bicycle-2.png" onclick="marker_img_select(559)" class="selected_marker" id="img_559" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/parking_bicycle-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Pedestrian Crossing">
					<img icon_src="/pedestriancrossing.png" onclick="marker_img_select(560)" class="selected_marker" id="img_560" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/pedestriancrossing.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Slip Way">
					<img icon_src="/slipway.png" onclick="marker_img_select(561)" class="selected_marker" id="img_561" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/slipway.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Solar Cruise">
					<img icon_src="/solar-cruise.png" onclick="marker_img_select(562)" class="selected_marker" id="img_562" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/solar-cruise.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Steam Train">
					<img icon_src="/steamtrain.png" onclick="marker_img_select(563)" class="selected_marker" id="img_563" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/steamtrain.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Taxi Boat">
					<img icon_src="/taxiboat.png" onclick="marker_img_select(564)" class="selected_marker" id="img_564" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/taxiboat.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Tidal Daimond">
					<img icon_src="/tidaldiamond.png" onclick="marker_img_select(565)" class="selected_marker" id="img_565" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tidaldiamond.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Train">
					<img icon_src="/train.png" onclick="marker_img_select(566)" class="selected_marker" id="img_566" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/train.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Tram Way">
					<img icon_src="/tramway.png" onclick="marker_img_select(567)" class="selected_marker" id="img_567" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tramway.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Under Ground">
					<img icon_src="/underground.png" onclick="marker_img_select(568)" class="selected_marker" id="img_568" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/underground.png'; ?>" />
				</span>
			</div>
			<div id="ux_38" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Acces Denied">
					<img icon_src="/accesdenied.png" onclick="marker_img_select(569)" class="selected_marker" id="img_569" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/accesdenied.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Caution">
					<img icon_src="/caution.png" onclick="marker_img_select(570)" class="selected_marker" id="img_570" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/caution.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Close Road">
					<img icon_src="/closedroad.png" onclick="marker_img_select(571)" class="selected_marker" id="img_571" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/closedroad.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Construction">
					<img icon_src="/construction.png" onclick="marker_img_select(572)" class="selected_marker" id="img_572" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/construction.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Curve Left">
					<img icon_src="/curveleft.png" onclick="marker_img_select(573)" class="selected_marker" id="img_573" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/curveleft.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Descent">
					<img icon_src="/descent.png" onclick="marker_img_select(574)" class="selected_marker" id="img_574" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/descent.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Falling Rocks">
					<img icon_src="/fallingrocks.png" onclick="marker_img_select(575)" class="selected_marker" id="img_575" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fallingrocks.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Highway">
					<img icon_src="/highway.png" onclick="marker_img_select(576)" class="selected_marker" id="img_576" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/highway.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Icy Road">
					<img icon_src="/icy_road.png" onclick="marker_img_select(577)" class="selected_marker" id="img_577" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/icy_road.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Main Road">
					<img icon_src="/mainroad.png" onclick="marker_img_select(578)" class="selected_marker" id="img_578" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/mainroad.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Max Height">
					<img icon_src="/maxheight.png" onclick="marker_img_select(579)" class="selected_marker" id="img_579" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/maxheight.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Max Weight">
					<img icon_src="/maxweight.png" onclick="marker_img_select(580)" class="selected_marker" id="img_580" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/maxweight.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Max Width">
					<img icon_src="/maxwidth.png" onclick="marker_img_select(581)" class="selected_marker" id="img_581" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/maxwidth.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Speed">
					<img icon_src="/speed_50.png" onclick="marker_img_select(582)" class="selected_marker" id="img_582" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/speed_50.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Speed Hump">
					<img icon_src="/speedhump.png" onclick="marker_img_select(583)" class="selected_marker" id="img_583" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/speedhump.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Stop">
					<img icon_src="/stop.png" onclick="marker_img_select(584)" class="selected_marker" id="img_584" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/stop.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Tires">
					<img icon_src="/tires.png" onclick="marker_img_select(585)" class="selected_marker" id="img_585" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tires.png'; ?>" />
				</span>
			</div>
			<div id="ux_39" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Bull Dozer">
					<img icon_src="/bulldozer.png" onclick="marker_img_select(586)" class="selected_marker" id="img_586" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bulldozer.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Bus">
					<img icon_src="/bus.png" onclick="marker_img_select(587)" class="selected_marker" id="img_587" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bus.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Bus Stop">
					<img icon_src="/busstop.png" onclick="marker_img_select(588)" class="selected_marker" id="img_588" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/busstop.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Car">
					<img icon_src="/car.png" onclick="marker_img_select(589)" class="selected_marker" id="img_589" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/car.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Car Accident">
					<img icon_src="/caraccident.png" onclick="marker_img_select(590)" class="selected_marker" id="img_590" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/caraccident.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Carrental">
					<img icon_src="/carrental.png" onclick="marker_img_select(591)" class="selected_marker" id="img_591" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/carrental.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Car Wash">
					<img icon_src="/carwash.png" onclick="marker_img_select(592)" class="selected_marker" id="img_592" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/carwash.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Canvertible">
					<img icon_src="/convertible.png" onclick="marker_img_select(593)" class="selected_marker" id="img_593" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/convertible.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Ducati Daivel">
					<img icon_src="/ducati-diavel.png" onclick="marker_img_select(594)" class="selected_marker" id="img_594" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/ducati-diavel.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Filling Station">
					<img icon_src="/fillingstation.png" onclick="marker_img_select(595)" class="selected_marker" id="img_595" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/fillingstation.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Junction">
					<img icon_src="/junction.png" onclick="marker_img_select(596)" class="selected_marker" id="img_596" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/junction.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Motar Cycle">
					<img icon_src="/motorcycle.png" onclick="marker_img_select(597)" class="selected_marker" id="img_597" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/motorcycle.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Park and Ride">
					<img icon_src="/parkandride.png" onclick="marker_img_select(598)" class="selected_marker" id="img_598" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/parkandride.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Parking Garage">
					<img icon_src="/parkinggarage.png" onclick="marker_img_select(599)" class="selected_marker" id="img_599" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/parkinggarage.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Parking Meter Export">
					<img icon_src="/parking-meter-export.png" onclick="marker_img_select(600)" class="selected_marker" id="img_600" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/parking-meter-export.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Pick Up">
					<img icon_src="/pickup.png" onclick="marker_img_select(601)" class="selected_marker" id="img_601" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/pickup.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Pick Up Camper">
					<img icon_src="/pickup_camper.png" onclick="marker_img_select(602)" class="selected_marker" id="img_602" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/pickup_camper.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Plow Truck">
					<img icon_src="/plowtruck.png" onclick="marker_img_select(603)" class="selected_marker" id="img_603" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/plowtruck.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Repair">
					<img icon_src="/repair.png" onclick="marker_img_select(604)" class="selected_marker" id="img_604" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/repair.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Road">
					<img icon_src="/road.png" onclick="marker_img_select(605)" class="selected_marker" id="img_605" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/road.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Road Type Gravel">
					<img icon_src="/roadtype_gravel.png" onclick="marker_img_select(606)" class="selected_marker" id="img_606" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/roadtype_gravel.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Taxi">
					<img icon_src="/taxi.png" onclick="marker_img_select(607)" class="selected_marker" id="img_607" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/taxi.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Toll Station">
					<img icon_src="/tollstation.png" onclick="marker_img_select(608)" class="selected_marker" id="img_608" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tollstation.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Traffic Camera">
					<img icon_src="/trafficcamera.png" onclick="marker_img_select(609)" class="selected_marker" id="img_609" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/trafficcamera.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Traffic Light">
					<img icon_src="/trafficlight.png" onclick="marker_img_select(610)" class="selected_marker" id="img_610" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/trafficlight.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Truck">
					<img icon_src="/truck3.png" onclick="marker_img_select(611)" class="selected_marker" id="img_611" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/truck3.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Tunnel">
					<img icon_src="/tunnel.png" onclick="marker_img_select(612)" class="selected_marker" id="img_612" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tunnel.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Van">
					<img icon_src="/van.png" onclick="marker_img_select(613)" class="selected_marker" id="img_613" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/van.png'; ?>" />
				</span>
			</div>
			<div id="ux_24" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Apartment">
					<img icon_src="/apartment_1.png" onclick="marker_img_select(614)" class="selected_marker" id="img_614" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/apartment_1.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Big House">
					<img icon_src="/bighouse_2.png" onclick="marker_img_select(615)" class="selected_marker" id="img_615" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/bighouse_2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Home">
					<img icon_src="/home.png" onclick="marker_img_select(616)" class="selected_marker" id="img_616" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/home.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Home Center">
					<img icon_src="/homecenter.png" onclick="marker_img_select(617)" class="selected_marker" id="img_617" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/homecenter.png'; ?>" />
				</span>
			</div>
			<div id="ux_11" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Monday">
					<img icon_src="/monday.png" onclick="marker_img_select(618)" class="selected_marker" id="img_618" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/monday.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Tuesday">
					<img icon_src="/tuesday.png" onclick="marker_img_select(619)" class="selected_marker" id="img_619" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tuesday.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Wednesday">
					<img icon_src="/wednesday.png" onclick="marker_img_select(620)" class="selected_marker" id="img_620" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/wednesday.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Thursday">
					<img icon_src="/thursday.png" onclick="marker_img_select(621)" class="selected_marker" id="img_621" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/thursday.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Friday">
					<img icon_src="/friday.png" onclick="marker_img_select(622)" class="selected_marker" id="img_622" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/friday.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Saturday">
					<img icon_src="/saturday.png" onclick="marker_img_select(623)" class="selected_marker" id="img_623" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/saturday.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Sunday">
					<img icon_src="/sunday.png" onclick="marker_img_select(624)" class="selected_marker" id="img_624" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/sunday.png'; ?>" />
				</span>
			</div>
			<div id="ux_13" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="A">
					<img icon_src="/letter_a.png" onclick="marker_img_select(625)" class="selected_marker" id="img_625" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_a.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="B">
					<img icon_src="/letter_b.png" onclick="marker_img_select(626)" class="selected_marker" id="img_626" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_b.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="C">
					<img icon_src="/letter_c.png" onclick="marker_img_select(627)" class="selected_marker" id="img_627" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_c.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="D">
					<img icon_src="/letter_d.png" onclick="marker_img_select(628)" class="selected_marker" id="img_628" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_d.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="E">
					<img icon_src="/letter_e.png" onclick="marker_img_select(629)" class="selected_marker" id="img_629" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_e.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="F">
					<img icon_src="/letter_f.png" onclick="marker_img_select(630)" class="selected_marker" id="img_630" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_f.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="G">
					<img icon_src="/letter_g.png" onclick="marker_img_select(631)" class="selected_marker" id="img_631" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_g.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="H">
					<img icon_src="/letter_h.png" onclick="marker_img_select(632)" class="selected_marker" id="img_632" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_h.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="I">
					<img icon_src="/letter_i.png" onclick="marker_img_select(633)" class="selected_marker" id="img_633" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_i.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="J">
					<img icon_src="/letter_j.png" onclick="marker_img_select(634)" class="selected_marker" id="img_634" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_j.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="K">
					<img icon_src="/letter_k.png" onclick="marker_img_select(635)" class="selected_marker" id="img_635" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_k.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="L">
					<img  icon_src="/letter_l.png" onclick="marker_img_select(636)" class="selected_marker" id="img_636" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_l.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="M">
					<img icon_src="/letter_m.png" onclick="marker_img_select(637)" class="selected_marker" id="img_637" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_m.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="N">
					<img icon_src="/letter_n.png" onclick="marker_img_select(638)" class="selected_marker" id="img_638" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_n.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="O">
					<img icon_src="/letter_o.png" onclick="marker_img_select(639)" class="selected_marker" id="img_639" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_o.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="P">
					<img icon_src="/letter_p.png" onclick="marker_img_select(640)" class="selected_marker" id="img_640" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_p.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Q">
					<img icon_src="/letter_q.png" onclick="marker_img_select(641)" class="selected_marker" id="img_641" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_q.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="R">
					<img icon_src="/letter_r.png" onclick="marker_img_select(642)" class="selected_marker" id="img_642" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_r.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="S">
					<img icon_src="/letter_s.png" onclick="marker_img_select(643)" class="selected_marker" id="img_643" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_s.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="T">
					<img icon_src="/letter_t.png" onclick="marker_img_select(644)" class="selected_marker" id="img_644" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_t.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="U">
					<img icon_src="/letter_u.png" onclick="marker_img_select(645)" class="selected_marker" id="img_645" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_u.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="V">
					<img icon_src="/letter_v.png" onclick="marker_img_select(646)" class="selected_marker" id="img_646" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_v.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="W">
					<img icon_src="/letter_w.png" onclick="marker_img_select(647)" class="selected_marker" id="img_647" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_w.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="X">
					<img icon_src="/letter_x.png" onclick="marker_img_select(648)" class="selected_marker" id="img_648" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_x.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Y">
					<img icon_src="/letter_y.png" onclick="marker_img_select(649)" class="selected_marker" id="img_649" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_y.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Z">
					<img icon_src="/letter_z.png" onclick="marker_img_select(650)" class="selected_marker" id="img_650" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/letter_z.png'; ?>" />
				</span>
			</div>
			<div id="ux_10" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="3D">
					<img icon_src="/3d.png" onclick="marker_img_select(651)" class="selected_marker" id="img_651" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/3d.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="360 Degrees">
					<img icon_src="/360degrees.png" onclick="marker_img_select(652)" class="selected_marker" id="img_652" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/360degrees.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Audio">
					<img icon_src="/audio.png" onclick="marker_img_select(653)" class="selected_marker" id="img_653" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/audio.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Award">
					<img icon_src="/award.png" onclick="marker_img_select(654)" class="selected_marker" id="img_654" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/award.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Calender">
					<img icon_src="/calendar-3.png" onclick="marker_img_select(655)" class="selected_marker" id="img_655" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/calendar-3.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Chart">
					<img icon_src="/chart-2.png" onclick="marker_img_select(656)" class="selected_marker" id="img_656" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/chart-2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Comment Map">
					<img icon_src="/comment-map.png" onclick="marker_img_select(657)" class="selected_marker" id="img_657" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/comment-map.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Conversation Map">
					<img icon_src="/conversation-map.png" onclick="marker_img_select(658)" class="selected_marker" id="img_658" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/conversation-map.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Download Adicon">
					<img icon_src="/downloadicon.png" onclick="marker_img_select(659)" class="selected_marker" id="img_659" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/downloadicon.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Folder">
					<img icon_src="/folder.png" onclick="marker_img_select(660)" class="selected_marker" id="img_660" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/folder.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Photo">
					<img icon_src="/photo.png" onclick="marker_img_select(661)" class="selected_marker" id="img_661" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/photo.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Price Tag Export">
					<img icon_src="/price-tag-export.png" onclick="marker_img_select(662)" class="selected_marker" id="img_662" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/price-tag-export.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Share">
					<img icon_src="/share.png" onclick="marker_img_select(663)" class="selected_marker" id="img_663" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/share.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Test">
					<img icon_src="/test.png" onclick="marker_img_select(664)" class="selected_marker" id="img_664" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/test.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Text">
					<img icon_src="/text.png" onclick="marker_img_select(665)" class="selected_marker" id="img_665" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/text.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Tweet">
					<img icon_src="/tweet.png" onclick="marker_img_select(666)" class="selected_marker" id="img_666" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/tweet.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Video">
					<img icon_src="/video.png" onclick="marker_img_select(670)" class="selected_marker" id="img_670" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/video.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Webcam">
					<img icon_src="/webcam.png" onclick="marker_img_select(671)" class="selected_marker" id="img_671" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/webcam.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Wiki Export">
					<img icon_src="/wiki-export.png" onclick="marker_img_select(672)" class="selected_marker" id="img_672" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/wiki-export.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Zoom">
					<img icon_src="/zoom.png" onclick="marker_img_select(673)" class="selected_marker" id="img_673" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/zoom.png'; ?>" />
				</span>
			</div>
			<div id="ux_9" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Smile Happy">
					<img icon_src="/smiley_happy.png" onclick="marker_img_select(674)" class="selected_marker" id="img_674" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/smiley_happy.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Smile Neutral">
					<img icon_src="/smiley_neutral.png" onclick="marker_img_select(675)" class="selected_marker" id="img_675" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/smiley_neutral.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Smile Sad">
					<img icon_src="/smiley_sad.png" onclick="marker_img_select(676)" class="selected_marker" id="img_676" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/smiley_sad.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Wedding">
					<img icon_src="/wedding.png" onclick="marker_img_select(677)" class="selected_marker" id="img_677" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/wedding.png'; ?>" />
				</span>
			</div>
			<div id="ux_12" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="0">
					<img icon_src="/number_0.png" onclick="marker_img_select(678)" class="selected_marker" id="img_678" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_0.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="1">
					<img icon_src="/number_1.png" onclick="marker_img_select(679)" class="selected_marker" id="img_679" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_1.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="2">
					<img icon_src="/number_2.png" onclick="marker_img_select(680)" class="selected_marker" id="img_680" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_2.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="3">
					<img icon_src="/number_3.png" onclick="marker_img_select(681)" class="selected_marker" id="img_681" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_3.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="4">
					<img icon_src="/number_4.png" onclick="marker_img_select(682)" class="selected_marker" id="img_682" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_4.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="5">
					<img icon_src="/number_5.png" onclick="marker_img_select(683)" class="selected_marker" id="img_683" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_5.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="6">
					<img icon_src="/number_6.png" onclick="marker_img_select(684)" class="selected_marker" id="img_684" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_6.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="7">
					<img icon_src="/number_7.png" onclick="marker_img_select(685)" class="selected_marker" id="img_685" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_7.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="8">
					<img icon_src="/number_8.png" onclick="marker_img_select(686)" class="selected_marker" id="img_686" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_8.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="9">
					<img icon_src="/number_9.png" onclick="marker_img_select(687)" class="selected_marker" id="img_687" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_9.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="10">
					<img icon_src="/number_10.png" onclick="marker_img_select(688)" class="selected_marker" id="img_688" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_10.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="11">
					<img icon_src="/number_11.png" onclick="marker_img_select(689)" class="selected_marker" id="img_689" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_11.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="12">
					<img icon_src="/number_12.png" onclick="marker_img_select(690)" class="selected_marker" id="img_690" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_12.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="13">
					<img icon_src="/number_13.png" onclick="marker_img_select(691)" class="selected_marker" id="img_691" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_13.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="14">
					<img icon_src="/number_14.png" onclick="marker_img_select(692)" class="selected_marker" id="img_692" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_14.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="15">
					<img icon_src="/number_15.png" onclick="marker_img_select(693)" class="selected_marker" id="img_693" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_15.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="16">
					<img icon_src="/number_16.png" onclick="marker_img_select(694)" class="selected_marker" id="img_694" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_16.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="17">
					<img icon_src="/number_17.png" onclick="marker_img_select(695)" class="selected_marker" id="img_695" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_17.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="18">
					<img icon_src="/number_18.png" onclick="marker_img_select(696)" class="selected_marker" id="img_696" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_18.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="19">
					<img icon_src="/number_19.png" onclick="marker_img_select(697)" class="selected_marker" id="img_697" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_19.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="20">
					<img icon_src="/number_20.png" onclick="marker_img_select(698)" class="selected_marker" id="img_698" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_20.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="21">
					<img icon_src="/number_21.png" onclick="marker_img_select(699)" class="selected_marker" id="img_699" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_21.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="22">
					<img icon_src="/number_22.png" onclick="marker_img_select(700)" class="selected_marker" id="img_700" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_22.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="23">
					<img icon_src="/number_23.png" onclick="marker_img_select(701)" class="selected_marker" id="img_701" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_23.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="24">
					<img icon_src="/number_24.png" onclick="marker_img_select(702)" class="selected_marker" id="img_702" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_24.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="25">
					<img icon_src="/number_25.png" onclick="marker_img_select(703)" class="selected_marker" id="img_703" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_25.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="26">
					<img icon_src="/number_26.png" onclick="marker_img_select(704)" class="selected_marker" id="img_704" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_26.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="27">
					<img icon_src="/number_27.png" onclick="marker_img_select(705)" class="selected_marker" id="img_705" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_27.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="28">
					<img icon_src="/number_28.png" onclick="marker_img_select(706)" class="selected_marker" id="img_706" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_28.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="29">
					<img icon_src="/number_29.png" onclick="marker_img_select(707)" class="selected_marker" id="img_707" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_29.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="30">
					<img icon_src="/number_30.png" onclick="marker_img_select(708)" class="selected_marker" id="img_708" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_30.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="31">
					<img icon_src="/number_31.png" onclick="marker_img_select(709)" class="selected_marker" id="img_709" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_31.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="32">
					<img icon_src="/number_32.png" onclick="marker_img_select(710)" class="selected_marker" id="img_710" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_32.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="33">
					<img icon_src="/number_33.png" onclick="marker_img_select(711)" class="selected_marker" id="img_711" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_33.png'; ?>"/>
				</span>
				<span class="hovertip" data-original-title ="34">
					<img icon_src="/number_34.png" onclick="marker_img_select(712)" class="selected_marker" id="img_712" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_34.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="35">
					<img icon_src="/number_35.png" onclick="marker_img_select(713)" class="selected_marker" id="img_713" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_35.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="36">
					<img icon_src="/number_36.png" onclick="marker_img_select(714)" class="selected_marker" id="img_714" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_36.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="37">
					<img icon_src="/number_37.png" onclick="marker_img_select(715)" class="selected_marker" id="img_715" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_37.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="38">
					<img icon_src="/number_38.png" onclick="marker_img_select(716)" class="selected_marker" id="img_716" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_38.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="39">
					<img icon_src="/number_39.png" onclick="marker_img_select(717)" class="selected_marker" id="img_717" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_39.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="40">
					<img icon_src="/number_40.png" onclick="marker_img_select(718)" class="selected_marker" id="img_718" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_40.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="41">
					<img icon_src="/number_41.png" onclick="marker_img_select(719)" class="selected_marker" id="img_719" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_41.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="42">
					<img icon_src="/number_42.png" onclick="marker_img_select(720)" class="selected_marker" id="img_720" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_42.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="43">
					<img icon_src="/number_43.png" onclick="marker_img_select(721)" class="selected_marker" id="img_721" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_43.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="44">
					<img icon_src="/number_44.png" onclick="marker_img_select(722)" class="selected_marker" id="img_722" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_44.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="45">
					<img icon_src="/number_45.png" onclick="marker_img_select(723)" class="selected_marker" id="img_723" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_45.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="46">
					<img icon_src="/number_46.png" onclick="marker_img_select(724)" class="selected_marker" id="img_724" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_46.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="47">
					<img icon_src="/number_47.png" onclick="marker_img_select(725)" class="selected_marker" id="img_725" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_47.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="48">
					<img icon_src="/number_48.png" onclick="marker_img_select(726)" class="selected_marker" id="img_726" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_48.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="49">
					<img icon_src="/number_49.png" onclick="marker_img_select(727)" class="selected_marker" id="img_727" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_49.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="50">
					<img icon_src="/number_50.png" onclick="marker_img_select(728)" class="selected_marker" id="img_728" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_50.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="51">
					<img icon_src="/number_51.png" onclick="marker_img_select(729)" class="selected_marker" id="img_729" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_51.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="52">
					<img icon_src="/number_52.png" onclick="marker_img_select(730)" class="selected_marker" id="img_730" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_52.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="53">
					<img icon_src="/number_53.png" onclick="marker_img_select(731)" class="selected_marker" id="img_731" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_53.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="54">
					<img icon_src="/number_54.png" onclick="marker_img_select(732)" class="selected_marker" id="img_732" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_54.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="55">
					<img icon_src="/number_55.png" onclick="marker_img_select(733)" class="selected_marker" id="img_733" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_55.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="56">
					<img icon_src="/number_56.png" onclick="marker_img_select(734)" class="selected_marker" id="img_734" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_56.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="57">
					<img icon_src="/number_57.png" onclick="marker_img_select(735)" class="selected_marker" id="img_735" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_57.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="58">
					<img icon_src="/number_58.png" onclick="marker_img_select(736)" class="selected_marker" id="img_736" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_58.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="59">
					<img icon_src="/number_59.png" onclick="marker_img_select(737)" class="selected_marker" id="img_737" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_59.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="60">
					<img icon_src="/number_60.png" onclick="marker_img_select(738)" class="selected_marker" id="img_738" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_60.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="61">
					<img icon_src="/number_61.png" onclick="marker_img_select(739)" class="selected_marker" id="img_739" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_61.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="62">
					<img icon_src="/number_62.png" onclick="marker_img_select(740)" class="selected_marker" id="img_740" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_62.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="63">
					<img icon_src="/number_63.png" onclick="marker_img_select(741)" class="selected_marker" id="img_741" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_63.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="64">
					<img icon_src="/number_64.png" onclick="marker_img_select(742)" class="selected_marker" id="img_742" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_64.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="65">
					<img icon_src="/number_65.png" onclick="marker_img_select(743)" class="selected_marker" id="img_743" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_65.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="66">
					<img icon_src="/number_66.png" onclick="marker_img_select(744)" class="selected_marker" id="img_744" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_66.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="67">
					<img icon_src="/number_67.png" onclick="marker_img_select(745)" class="selected_marker" id="img_745" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_67.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="68">
					<img icon_src="/number_68.png" onclick="marker_img_select(746)" class="selected_marker" id="img_746" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_68.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="69">
					<img icon_src="/number_69.png" onclick="marker_img_select(747)" class="selected_marker" id="img_747" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_69.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="70">
					<img icon_src="/number_70.png" onclick="marker_img_select(748)" class="selected_marker" id="img_748" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_70.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="71">
					<img icon_src="/number_71.png" onclick="marker_img_select(749)" class="selected_marker" id="img_749" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_71.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="72">
					<img icon_src="/number_72.png" onclick="marker_img_select(750)" class="selected_marker" id="img_750" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_72.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="73">
					<img icon_src="/number_73.png" onclick="marker_img_select(751)" class="selected_marker" id="img_751" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_73.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="74">
					<img icon_src="/number_74.png" onclick="marker_img_select(752)" class="selected_marker" id="img_752" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_74.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="75">
					<img icon_src="/number_75.png" onclick="marker_img_select(753)" class="selected_marker" id="img_753" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_75.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="76">
					<img icon_src="/number_76.png" onclick="marker_img_select(754)" class="selected_marker" id="img_754" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_76.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="77">
					<img icon_src="/number_77.png" onclick="marker_img_select(755)" class="selected_marker" id="img_755" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_77.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="78">
					<img icon_src="/number_78.png" onclick="marker_img_select(756)" class="selected_marker" id="img_756" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_78.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="79">
					<img icon_src="/number_79.png" onclick="marker_img_select(757)" class="selected_marker" id="img_757" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_79.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="80">
					<img icon_src="/number_80.png" onclick="marker_img_select(758)" class="selected_marker" id="img_758" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_80.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="81">
					<img icon_src="/number_81.png" onclick="marker_img_select(759)" class="selected_marker" id="img_759" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_81.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="82">
					<img icon_src="/number_82.png" onclick="marker_img_select(760)" class="selected_marker" id="img_760" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_82.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="83">
					<img icon_src="/number_83.png" onclick="marker_img_select(761)" class="selected_marker" id="img_761" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_83.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="84">
					<img icon_src="/number_84.png" onclick="marker_img_select(762)" class="selected_marker" id="img_762" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_84.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="85">
					<img icon_src="/number_85.png" onclick="marker_img_select(763)" class="selected_marker" id="img_763" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_85.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="86">
					<img icon_src="/number_86.png" onclick="marker_img_select(764)" class="selected_marker" id="img_764" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_86.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="87">
					<img icon_src="/number_87.png" onclick="marker_img_select(765)" class="selected_marker" id="img_765" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_87.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="88">
					<img icon_src="/number_88.png" onclick="marker_img_select(766)" class="selected_marker" id="img_766" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_88.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="89">
					<img icon_src="/number_89.png" onclick="marker_img_select(767)" class="selected_marker" id="img_767" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_89.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="90">
					<img icon_src="/number_90.png" onclick="marker_img_select(768)" class="selected_marker" id="img_768" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_90.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="91">
					<img icon_src="/number_91.png" onclick="marker_img_select(769)" class="selected_marker" id="img_769" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_91.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="92">
					<img icon_src="/number_92.png" onclick="marker_img_select(770)" class="selected_marker" id="img_770" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_92.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="93">
					<img icon_src="/number_93.png" onclick="marker_img_select(771)" class="selected_marker" id="img_771" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_93.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="94">
					<img icon_src="/number_94.png" onclick="marker_img_select(772)" class="selected_marker" id="img_772" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_94.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="95">
					<img icon_src="/number_95.png" onclick="marker_img_select(773)" class="selected_marker" id="img_773" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_95.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="96">
					<img icon_src="/number_96.png" onclick="marker_img_select(774)" class="selected_marker" id="img_774" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_96.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="97">
					<img icon_src="/number_97.png" onclick="marker_img_select(775)" class="selected_marker" id="img_775" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_97.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="98">
					<img icon_src="/number_98.png" icon_src="/coins.png" onclick="marker_img_select(776)" class="selected_marker" id="img_776" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_98.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="99">
					<img icon_src="/number_99.png" onclick="marker_img_select(777)" class="selected_marker" id="img_777" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_99.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="100">
					<img icon_src="/number_100.png" onclick="marker_img_select(778)" class="selected_marker" id="img_778" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/number_100.png'; ?>" />
				</span>
			</div>
			<div id="ux_23" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Family">
					<img icon_src="/family.png" onclick="marker_img_select(779)" class="selected_marker" id="img_779" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/family.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Female">
					<img icon_src="/female.png" onclick="marker_img_select(780)" class="selected_marker" id="img_780" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/female.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Male">
					<img icon_src="/male.png" onclick="marker_img_select(781)" class="selected_marker" id="img_781" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/male.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Group">
					<img icon_src="/group.png" onclick="marker_img_select(782)" class="selected_marker" id="img_782" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/group.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Nursing Home">
					<img icon_src="/nursing_home.png" onclick="marker_img_select(783)" class="selected_marker" id="img_783" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/nursing_home.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Retirement Home">
					<img icon_src="/retirement_home.png" onclick="marker_img_select(784)" class="selected_marker" id="img_784" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/retirement_home.png'; ?>" />
				</span>
			</div>
			<div id="ux_14" class="googlemaps-icons" style="display: none;">
				<span class="hovertip" data-original-title ="Symbol Dollar">
					<img icon_src="/symbol_dollar.png" onclick="marker_img_select(785)" class="selected_marker" id="img_785" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/symbol_dollar.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Symbol Yen">
					<img icon_src="/symbol_yen.png" onclick="marker_img_select(786)" class="selected_marker" id="img_786" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/symbol_yen.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Symbol Excla">
					<img icon_src="/symbol_excla.png" onclick="marker_img_select(787)" class="selected_marker" id="img_787" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/symbol_excla.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Symbol Inter">
					<img icon_src="/symbol_inter.png" onclick="marker_img_select(788)" class="selected_marker" id="img_788" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/symbol_inter.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Symbol Euro">
					<img icon_src="/symbol_euro.png" onclick="marker_img_select(789)" class="selected_marker" id="img_789" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/symbol_euro.png'; ?>" />
				</span>
				<span class="hovertip" data-original-title ="Symbol Pound">
					<img icon_src="/symbol_pound.png" onclick="marker_img_select(790)" class="selected_marker" id="img_790" src="<?php echo esc_attr( GOOGLE_MAP_CUSTOM_MARKER_ICON ) . '/symbol_pound.png'; ?>" />
				</span>
			</div>
			<script type="text/javascript">
				jQuery(".hovertip").tooltip_tip({placement: "bottom"});
			</script>
		<?php
	}
}
