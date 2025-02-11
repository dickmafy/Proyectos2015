<?php
/*-----------------------------------------------------------------------------------*/
/*	Google Font Library array ( last update 23.09.2011
/*
/* 	@fonts Importet 263 fonts from https://googlefontdirectory.googlecode.com/hg/
/*-----------------------------------------------------------------------------------*/


class FontWrapper {

	public function loadFonts($url) {

		if (function_exists('curl_init')) {
			return $this->load_curl($url);
		} else if (ini_get('allow_url_fopen') == true) {
			return $this->load_fopen($url);
		} else {
			return false; // use the old school array
		}
	}

	private function load_fopen($url) {
		return file_get_contents($url);
	}

	private function load_curl($url) {
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($curl);
		curl_close($curl);
		return $result;
	}

}

// it's enabled so use the cool stuff
define( 'FONT_THEME_NAME', MAX_THEMENAME); // The theme name
define( 'FONT_CACHE_INTERVAL',  0 ); // Checking once a week for new Fonts. The time interval for the remote XML cache in the database (21600 seconds = 6 hours)
define( 'FONT_API_KEY', get_option(MAX_SHORTNAME.'_google_fontapi_key') ); // The font api key

$google_font_array = array("Abel" => "Abel:regular", "Abril Fatface" => "Abril+Fatface:400", "Aclonica" => "Aclonica:regular", "Acme" => "Acme:400", "Actor" => "Actor:regular", "Adamina" => "Adamina:400", "Aguafina Script" => "Aguafina+Script:400", "Aladin" => "Aladin:400", "Aldrich" => "Aldrich:regular", "Alegreya" => "Alegreya:400,400italic,700,700italic,900,900italic", "Alegreya SC" => "Alegreya+SC:400,400italic,700,700italic,900,900italic", "Alex Brush" => "Alex+Brush:400", "Alfa Slab One" => "Alfa+Slab+One:400", "Alice" => "Alice:regular", "Alike" => "Alike:regular", "Alike Angular" => "Alike+Angular:regular", "Allan" => "Allan:bold", "Allerta" => "Allerta:regular", "Allerta Stencil" => "Allerta+Stencil:regular", "Almendra" => "Almendra:400,bold", "Almendra SC" => "Almendra+SC:400", "Amaranth" => "Amaranth:regular,400italic,700,700italic", "Amatic SC" => "Amatic+SC:400,700", "Amethysta" => "Amethysta:400", "Andada" => "Andada:400", "Andika" => "Andika:regular", "Angkor" => "Angkor:regular", "Annie Use Your Telescope" => "Annie+Use+Your+Telescope:regular", "Anonymous Pro" => "Anonymous+Pro:regular,italic,bold,bolditalic", "Antic" => "Antic:400", "Anton" => "Anton:regular", "Arapey" => "Arapey:400,400italic", "Arbutus" => "Arbutus:400", "Architects Daughter" => "Architects+Daughter:regular", "Arimo" => "Arimo:regular,italic,bold,bolditalic", "Arizonia" => "Arizonia:400", "Armata" => "Armata:400", "Artifika" => "Artifika:regular", "Arvo" => "Arvo:regular,italic,bold,bolditalic", "Asap" => "Asap:400,400italic,700,700italic", "Asset" => "Asset:regular", "Astloch" => "Astloch:regular,bold", "Asul" => "Asul:400,bold", "Atomic Age" => "Atomic+Age:400", "Aubrey" => "Aubrey:regular", "Bad Script" => "Bad+Script:400", "Balthazar" => "Balthazar:400", "Bangers" => "Bangers:regular", "Basic" => "Basic:400", "Battambang" => "Battambang:regular,bold", "Baumans" => "Baumans:400", "Bayon" => "Bayon:regular", "Belgrano" => "Belgrano:400", "Bentham" => "Bentham:regular", "Bevan" => "Bevan:regular", "Bigshot One" => "Bigshot+One:regular", "Bilbo" => "Bilbo:400", "Bilbo Swash Caps" => "Bilbo+Swash+Caps:400", "Bitter" => "Bitter:400,400italic,700", "Black Ops One" => "Black+Ops+One:regular", "Bokor" => "Bokor:regular", "Bonbon" => "Bonbon:400", "Boogaloo" => "Boogaloo:regular", "Bowlby One" => "Bowlby+One:regular", "Bowlby One SC" => "Bowlby+One+SC:regular", "Brawler" => "Brawler:regular", "Bree Serif" => "Bree+Serif:400", "Bubblegum Sans" => "Bubblegum+Sans:400", "Buda" => "Buda:300", "Buenard" => "Buenard:400,bold", "Butcherman" => "Butcherman:400", "Cabin" => "Cabin:400,400italic,500,500italic,600,600italic,bold,bolditalic", "Cabin Condensed" => "Cabin+Condensed:400,500,600,700", "Cabin Sketch" => "Cabin+Sketch:regular,bold", "Caesar Dressing" => "Caesar+Dressing:400", "Cagliostro" => "Cagliostro:400", "Calligraffitti" => "Calligraffitti:regular", "Cambo" => "Cambo:400", "Candal" => "Candal:regular", "Cantarell" => "Cantarell:regular,italic,bold,bolditalic", "Cardo" => "Cardo:regular,400italic,700", "Carme" => "Carme:regular", "Carter One" => "Carter+One:regular", "Caudex" => "Caudex:400,italic,700,700italic", "Cedarville Cursive" => "Cedarville+Cursive:regular", "Ceviche One" => "Ceviche+One:400", "Changa One" => "Changa+One:regular,italic", "Chango" => "Chango:400", "Chelsea Market" => "Chelsea+Market:400", "Chenla" => "Chenla:regular", "Cherry Cream Soda" => "Cherry+Cream+Soda:regular", "Chewy" => "Chewy:regular", "Chicle" => "Chicle:400", "Chivo" => "Chivo:400,400italic,900,900italic", "Coda" => "Coda:400,800", "Coda Caption" => "Coda+Caption:800", "Comfortaa" => "Comfortaa:300,400,700", "Coming Soon" => "Coming+Soon:regular", "Concert One" => "Concert+One:400", "Condiment" => "Condiment:400", "Content" => "Content:regular,bold", "Contrail One" => "Contrail+One:regular", "Convergence" => "Convergence:400", "Cookie" => "Cookie:400", "Copse" => "Copse:regular", "Corben" => "Corben:400,bold", "Cousine" => "Cousine:regular,italic,bold,bolditalic", "Coustard" => "Coustard:400,900", "Covered By Your Grace" => "Covered+By+Your+Grace:regular", "Crafty Girls" => "Crafty+Girls:regular", "Creepster" => "Creepster:regular", "Crete Round" => "Crete+Round:400,400italic", "Crimson Text" => "Crimson+Text:regular,400italic,600,600italic,700,700italic", "Crushed" => "Crushed:regular", "Cuprum" => "Cuprum:regular", "Damion" => "Damion:regular", "Dancing Script" => "Dancing+Script:regular,bold", "Dangrek" => "Dangrek:regular", "Dawning of a New Day" => "Dawning+of+a+New+Day:regular", "Days One" => "Days+One:400", "Delius" => "Delius:400", "Delius Swash Caps" => "Delius+Swash+Caps:400", "Delius Unicase" => "Delius+Unicase:400,700", "Devonshire" => "Devonshire:400", "Didact Gothic" => "Didact+Gothic:regular", "Diplomata" => "Diplomata:400", "Diplomata SC" => "Diplomata+SC:400", "Dorsa" => "Dorsa:400", "Dr Sugiyama" => "Dr+Sugiyama:400", "Droid Sans" => "Droid+Sans:regular,bold", "Droid Sans Mono" => "Droid+Sans+Mono:regular", "Droid Serif" => "Droid+Serif:regular,italic,bold,bolditalic", "Duru Sans" => "Duru+Sans:400", "Dynalight" => "Dynalight:400", "EB Garamond" => "EB+Garamond:regular", "Eater" => "Eater:400", "Electrolize" => "Electrolize:400", "Emblema One" => "Emblema+One:400", "Engagement" => "Engagement:400", "Enriqueta" => "Enriqueta:400,700", "Esteban" => "Esteban:400", "Expletus Sans" => "Expletus+Sans:400,400italic,500,500italic,600,600italic,700,700italic", "Fanwood Text" => "Fanwood+Text:400,400italic", "Fascinate" => "Fascinate:400", "Fascinate Inline" => "Fascinate+Inline:400", "Federant" => "Federant:400", "Federo" => "Federo:regular", "Fjord One" => "Fjord+One:400", "Flamenco" => "Flamenco:300,400", "Flavors" => "Flavors:400", "Fondamento" => "Fondamento:400,400italic", "Fontdiner Swanky" => "Fontdiner+Swanky:regular", "Forum" => "Forum:regular", "Francois One" => "Francois+One:regular", "Fredericka the Great" => "Fredericka+the+Great:regular", "Freehand" => "Freehand:regular", "Fresca" => "Fresca:400", "Frijole" => "Frijole:400", "Fugaz One" => "Fugaz+One:400", "GFS Didot" => "GFS+Didot:regular", "GFS Neohellenic" => "GFS+Neohellenic:regular,italic,bold,bolditalic", "Galdeano" => "Galdeano:400", "Gentium Basic" => "Gentium+Basic:regular,italic,bold,bolditalic", "Gentium Book Basic" => "Gentium+Book+Basic:regular,italic,bold,bolditalic", "Geo" => "Geo:regular", "Geostar" => "Geostar:regular", "Geostar Fill" => "Geostar+Fill:regular", "Germania One" => "Germania+One:400", "Give You Glory" => "Give+You+Glory:regular", "Glegoo" => "Glegoo:400", "Gloria Hallelujah" => "Gloria+Hallelujah:regular", "Goblin One" => "Goblin+One:regular", "Gochi Hand" => "Gochi+Hand:400", "Goudy Bookletter 1911" => "Goudy+Bookletter+1911:regular", "Gravitas One" => "Gravitas+One:regular", "Gruppo" => "Gruppo:regular", "Gudea" => "Gudea:400,italic,bold", "Habibi" => "Habibi:400", "Hammersmith One" => "Hammersmith+One:regular", "Handlee" => "Handlee:400", "Hanuman" => "Hanuman:regular,bold", "Herr Von Muellerhoff" => "Herr+Von+Muellerhoff:400", "Holtwood One SC" => "Holtwood+One+SC:regular", "Homemade Apple" => "Homemade+Apple:regular", "Homenaje" => "Homenaje:400", "IM Fell DW Pica" => "IM+Fell+DW+Pica:regular,italic", "IM Fell DW Pica SC" => "IM+Fell+DW+Pica+SC:regular", "IM Fell Double Pica" => "IM+Fell+Double+Pica:regular,italic", "IM Fell Double Pica SC" => "IM+Fell+Double+Pica+SC:regular", "IM Fell English" => "IM+Fell+English:regular,italic", "IM Fell English SC" => "IM+Fell+English+SC:regular", "IM Fell French Canon" => "IM+Fell+French+Canon:regular,italic", "IM Fell French Canon SC" => "IM+Fell+French+Canon+SC:regular", "IM Fell Great Primer" => "IM+Fell+Great+Primer:regular,italic", "IM Fell Great Primer SC" => "IM+Fell+Great+Primer+SC:regular", "Iceberg" => "Iceberg:400", "Iceland" => "Iceland:400", "Inconsolata" => "Inconsolata:regular", "Inder" => "Inder:400", "Indie Flower" => "Indie+Flower:regular", "Inika" => "Inika:400,bold", "Irish Grover" => "Irish+Grover:regular", "Istok Web" => "Istok+Web:400,400italic,700,700italic", "Italianno" => "Italianno:400", "Jim Nightshade" => "Jim+Nightshade:400", "Jockey One" => "Jockey+One:400", "Josefin Sans" => "Josefin+Sans:100,100italic,300,300italic,400,400italic,600,600italic,700,700italic", "Josefin Slab" => "Josefin+Slab:100,100italic,300,300italic,400,400italic,600,600italic,700,700italic", "Judson" => "Judson:400,400italic,700", "Julee" => "Julee:regular", "Junge" => "Junge:400", "Jura" => "Jura:300,400,500,600", "Just Another Hand" => "Just+Another+Hand:regular", "Just Me Again Down Here" => "Just+Me+Again+Down+Here:regular", "Kameron" => "Kameron:400,700", "Kaushan Script" => "Kaushan+Script:400", "Kelly Slab" => "Kelly+Slab:regular", "Kenia" => "Kenia:regular", "Khmer" => "Khmer:regular", "Knewave" => "Knewave:400", "Kotta One" => "Kotta+One:400", "Koulen" => "Koulen:regular", "Kranky" => "Kranky:regular", "Kreon" => "Kreon:300,400,700", "Kristi" => "Kristi:regular", "La Belle Aurore" => "La+Belle+Aurore:regular", "Lancelot" => "Lancelot:400", "Lato" => "Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "League Script" => "League+Script:400", "Leckerli One" => "Leckerli+One:regular", "Lekton" => "Lekton:400,italic,700", "Lemon" => "Lemon:400", "Lilita One" => "Lilita+One:400", "Limelight" => "Limelight:regular", "Linden Hill" => "Linden+Hill:400,400italic", "Lobster" => "Lobster:regular", "Lobster Two" => "Lobster+Two:400,400italic,700,700italic", "Lora" => "Lora:regular,italic,bold,bolditalic", "Love Ya Like A Sister" => "Love+Ya+Like+A+Sister:regular", "Loved by the King" => "Loved+by+the+King:regular", "Luckiest Guy" => "Luckiest+Guy:regular", "Lusitana" => "Lusitana:400,bold", "Lustria" => "Lustria:400", "Macondo" => "Macondo:400", "Macondo Swash Caps" => "Macondo+Swash+Caps:400", "Magra" => "Magra:400,bold", "Maiden Orange" => "Maiden+Orange:regular", "Mako" => "Mako:regular", "Marck Script" => "Marck+Script:400", "Marko One" => "Marko+One:400", "Marmelad" => "Marmelad:400", "Marvel" => "Marvel:400,400italic,700,700italic", "Mate" => "Mate:400,400italic", "Mate SC" => "Mate+SC:400", "Maven Pro" => "Maven+Pro:400,500,700,900", "Meddon" => "Meddon:regular", "MedievalSharp" => "MedievalSharp:regular", "Medula One" => "Medula+One:400", "Megrim" => "Megrim:regular", "Merienda One" => "Merienda+One:regular", "Merriweather" => "Merriweather:300,regular,700,900", "Metal" => "Metal:regular", "Metamorphous" => "Metamorphous:400", "Metrophobic" => "Metrophobic:regular", "Michroma" => "Michroma:regular", "Miltonian" => "Miltonian:regular", "Miltonian Tattoo" => "Miltonian+Tattoo:regular", "Miniver" => "Miniver:400", "Miss Fajardose" => "Miss+Fajardose:400", "Modern Antiqua" => "Modern+Antiqua:regular", "Molengo" => "Molengo:regular", "Monofett" => "Monofett:regular", "Monoton" => "Monoton:400", "Monsieur La Doulaise" => "Monsieur+La+Doulaise:400", "Montaga" => "Montaga:400", "Montez" => "Montez:regular", "Montserrat" => "Montserrat:400", "Moul" => "Moul:regular", "Moulpali" => "Moulpali:regular", "Mountains of Christmas" => "Mountains+of+Christmas:regular,700", "Mr Bedfort" => "Mr+Bedfort:400", "Mr Dafoe" => "Mr+Dafoe:400", "Mr De Haviland" => "Mr+De+Haviland:400", "Mrs Saint Delafield" => "Mrs+Saint+Delafield:400", "Mrs Sheppards" => "Mrs+Sheppards:400", "Muli" => "Muli:300,300italic,400,400italic", "Neucha" => "Neucha:regular", "Neuton" => "Neuton:200,300,regular,italic,700,800", "News Cycle" => "News+Cycle:regular", "Niconne" => "Niconne:regular", "Nixie One" => "Nixie+One:regular", "Nobile" => "Nobile:regular,italic,bold,bolditalic", "Nokora" => "Nokora:400,700", "Nosifer" => "Nosifer:400", "Nothing You Could Do" => "Nothing+You+Could+Do:regular", "Noticia Text" => "Noticia+Text:400,400italic,700,700italic", "Nova Cut" => "Nova+Cut:regular", "Nova Flat" => "Nova+Flat:regular", "Nova Mono" => "Nova+Mono:regular", "Nova Oval" => "Nova+Oval:regular", "Nova Round" => "Nova+Round:regular", "Nova Script" => "Nova+Script:regular", "Nova Slim" => "Nova+Slim:regular", "Nova Square" => "Nova+Square:regular", "Numans" => "Numans:400", "Nunito" => "Nunito:300,400,700", "Odor Mean Chey" => "Odor+Mean+Chey:regular", "Old Standard TT" => "Old+Standard+TT:regular,italic,bold", "Oldenburg" => "Oldenburg:400", "Open Sans" => "Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Open Sans Condensed" => "Open+Sans+Condensed:300,300italic", "Orbitron" => "Orbitron:400,500,700,900", "Original Surfer" => "Original+Surfer:400", "Oswald" => "Oswald:regular", "Over the Rainbow" => "Over+the+Rainbow:regular", "Overlock" => "Overlock:400,400italic,700,700italic,900,900italic", "Overlock SC" => "Overlock+SC:400", "Ovo" => "Ovo:regular", "PT Sans" => "PT+Sans:regular,italic,bold,bolditalic", "PT Sans Caption" => "PT+Sans+Caption:regular,bold", "PT Sans Narrow" => "PT+Sans+Narrow:regular,bold", "PT Serif" => "PT+Serif:regular,italic,bold,bolditalic", "PT Serif Caption" => "PT+Serif+Caption:regular,italic", "Pacifico" => "Pacifico:regular", "Parisienne" => "Parisienne:400", "Passero One" => "Passero+One:regular", "Passion One" => "Passion+One:400,700,900", "Patrick Hand" => "Patrick+Hand:regular", "Patua One" => "Patua+One:400", "Paytone One" => "Paytone+One:regular", "Permanent Marker" => "Permanent+Marker:regular", "Petrona" => "Petrona:400", "Philosopher" => "Philosopher:regular,italic,bold,bolditalic", "Piedra" => "Piedra:400", "Pinyon Script" => "Pinyon+Script:regular", "Plaster" => "Plaster:400", "Play" => "Play:regular,bold", "Playball" => "Playball:400", "Playfair Display" => "Playfair+Display:regular,400italic", "Podkova" => "Podkova:regular,700", "Poller One" => "Poller+One:regular", "Poly" => "Poly:400,400italic", "Pompiere" => "Pompiere:regular", "Port Lligat Sans" => "Port+Lligat+Sans:400", "Port Lligat Slab" => "Port+Lligat+Slab:400", "Prata" => "Prata:400", "Preahvihear" => "Preahvihear:regular", "Prociono" => "Prociono:400", "Puritan" => "Puritan:regular,italic,bold,bolditalic", "Quantico" => "Quantico:400,400italic,700,700italic", "Quattrocento" => "Quattrocento:regular", "Quattrocento Sans" => "Quattrocento+Sans:regular", "Questrial" => "Questrial:400", "Quicksand" => "Quicksand:300,400,700", "Qwigley" => "Qwigley:400", "Radley" => "Radley:regular,400italic", "Raleway" => "Raleway:100", "Rammetto One" => "Rammetto+One:400", "Rancho" => "Rancho:400", "Rationale" => "Rationale:regular", "Redressed" => "Redressed:regular", "Reenie Beanie" => "Reenie+Beanie:regular", "Ribeye" => "Ribeye:400", "Ribeye Marrow" => "Ribeye+Marrow:400", "Righteous" => "Righteous:400", "Rochester" => "Rochester:regular", "Rock Salt" => "Rock+Salt:regular", "Rokkitt" => "Rokkitt:regular,700", "Ropa Sans" => "Ropa+Sans:400,400italic", "Rosario" => "Rosario:regular,italic,700,700italic", "Rouge Script" => "Rouge+Script:400", "Ruda" => "Ruda:400,bold,900", "Ruge Boogie" => "Ruge+Boogie:400", "Ruluko" => "Ruluko:400", "Ruslan Display" => "Ruslan+Display:regular", "Ruthie" => "Ruthie:400", "Sail" => "Sail:400", "Salsa" => "Salsa:400", "Sancreek" => "Sancreek:400", "Sansita One" => "Sansita+One:regular", "Sarina" => "Sarina:400", "Satisfy" => "Satisfy:400", "Schoolbell" => "Schoolbell:regular", "Shadows Into Light" => "Shadows+Into+Light:regular", "Shanti" => "Shanti:regular", "Shojumaru" => "Shojumaru:400", "Short Stack" => "Short+Stack:400", "Siemreap" => "Siemreap:regular", "Sigmar One" => "Sigmar+One:regular", "Signika" => "Signika:300,400,600,700", "Signika Negative" => "Signika+Negative:300,400,600,700", "Sirin Stencil" => "Sirin+Stencil:400", "Six Caps" => "Six+Caps:regular", "Slackey" => "Slackey:regular", "Smokum" => "Smokum:regular", "Smythe" => "Smythe:regular", "Sniglet" => "Sniglet:800", "Snippet" => "Snippet:regular", "Sofia" => "Sofia:400", "Sonsie One" => "Sonsie+One:400", "Sorts Mill Goudy" => "Sorts+Mill+Goudy:400,400italic", "Special Elite" => "Special+Elite:regular", "Spicy Rice" => "Spicy+Rice:400", "Spinnaker" => "Spinnaker:regular", "Spirax" => "Spirax:400", "Squada One" => "Squada+One:400", "Stardos Stencil" => "Stardos+Stencil:regular,bold", "Stint Ultra Condensed" => "Stint+Ultra+Condensed:400", "Stoke" => "Stoke:400", "Sue Ellen Francisco" => "Sue+Ellen+Francisco:regular", "Sunshiney" => "Sunshiney:regular", "Supermercado One" => "Supermercado+One:400", "Suwannaphum" => "Suwannaphum:regular", "Swanky and Moo Moo" => "Swanky+and+Moo+Moo:regular", "Syncopate" => "Syncopate:regular,bold", "Tangerine" => "Tangerine:regular,bold", "Taprom" => "Taprom:regular", "Telex" => "Telex:400", "Tenor Sans" => "Tenor+Sans:regular", "Terminal Dosis" => "Terminal+Dosis:200,300,400,500,600,700,800", "The Girl Next Door" => "The+Girl+Next+Door:regular", "Tienne" => "Tienne:400,700,900", "Tinos" => "Tinos:regular,italic,bold,bolditalic", "Titan One" => "Titan+One:400", "Trade Winds" => "Trade+Winds:400", "Trochut" => "Trochut:400,italic,bold", "Trykker" => "Trykker:400", "Tulpen One" => "Tulpen+One:regular", "Ubuntu" => "Ubuntu:300,300italic,regular,italic,500,500italic,bold,bolditalic", "Ubuntu Condensed" => "Ubuntu+Condensed:400", "Ubuntu Mono" => "Ubuntu+Mono:regular,italic,bold,bolditalic", "Ultra" => "Ultra:regular", "Uncial Antiqua" => "Uncial+Antiqua:400", "UnifrakturCook" => "UnifrakturCook:bold", "UnifrakturMaguntia" => "UnifrakturMaguntia:regular", "Unkempt" => "Unkempt:regular,700", "Unlock" => "Unlock:regular", "Unna" => "Unna:regular", "VT323" => "VT323:regular", "Varela" => "Varela:regular", "Varela Round" => "Varela+Round:regular", "Vast Shadow" => "Vast+Shadow:regular", "Vibur" => "Vibur:regular", "Vidaloka" => "Vidaloka:400", "Viga" => "Viga:400", "Volkhov" => "Volkhov:400,400italic,700,700italic", "Vollkorn" => "Vollkorn:regular,italic,bold,bolditalic", "Voltaire" => "Voltaire:400", "Waiting for the Sunrise" => "Waiting+for+the+Sunrise:regular", "Wallpoet" => "Wallpoet:regular", "Walter Turncoat" => "Walter+Turncoat:regular", "Wellfleet" => "Wellfleet:400", "Wire One" => "Wire+One:regular", "Yanone Kaffeesatz" => "Yanone+Kaffeesatz:200,300,400,700", "Yellowtail" => "Yellowtail:regular", "Yeseva One" => "Yeseva+One:regular", "Yesteryear" => "Yesteryear:400", "Zeyada" => "Zeyada:regular" );

// Only get fonts, if you have an API key set

if(FONT_API_KEY!=""){



	// get cached fields
	$db_cache_field = 'googlefont-cache';
	$db_cache_field_last_updated = 'googlefont-cache-last-updated';
	$db_cache_field_themename = 'googlefont-cache-'.MAX_SHORTNAME;

	$current_fonts = get_option( $db_cache_field );

	$content = get_option( $db_cache_field );
	$last = get_option( $db_cache_field_last_updated );
	$theme = get_option ( $db_cache_field_themename );

	// get current timestamp
	$now = time();

	if(ini_get('allow_url_fopen') === true || function_exists('curl_init')){

		// check the cache if font cache interval is expired
		if ( !$last || (( $now - $last ) > FONT_CACHE_INTERVAL) || !$theme || $content == "" || !$content ) {

			// get the Font with curl or fopen
			$fontWrapper = new FontWrapper;
			$fontsSeraliazed = $fontWrapper->loadFonts('https://www.googleapis.com/webfonts/v1/webfonts?key='.FONT_API_KEY.'&sort=alpha');

			if($fontsSeraliazed){

				$fontArray = json_decode($fontsSeraliazed, true);
				$googleFontArray = array();

				// prevent from error handling on fontArray is empty
				if(is_array($fontArray)){

					// generate the array to sore
					foreach($fontArray['items'] as $index => $value){

						$googleFontArray[$value['family']] = str_replace(' ', '+', $value['family'] ).':'.implode(',', $value['variants']);

						/* New style
						$googleFontArray[ $_family ]['subsets'] = implode(',', $value['subsets']);
						$googleFontArray[ $_family ]['variants'] = implode(',', $value['variants']);
						$googleFontArray[ $_family ]['family_string'] = str_replace(' ', '+', $googleFontArray[ $_family ]['family']).':'.$googleFontArray[ $_family ]['variants'];
						*/

					}

					$cache = $googleFontArray;

					if ($cache && $cache !== false) {

						// we got good results
						update_option( $db_cache_field, $cache );
						update_option( $db_cache_field_last_updated, time() );
						update_option( $db_cache_field_themename, NOTIFIER_THEME_NAME );

					} else {
						add_option( $db_cache_field, $cache,'', 'no' );
						add_option( $db_cache_field_last_updated, time(),'', 'no' );
						add_option( $db_cache_field_themename, NOTIFIER_THEME_NAME,'', 'no' );
					}

					// get the google font array from options DB
					$google_font_array = get_option( $db_cache_field );

				}

			}

		}else{
			// get the google font array from options DB
			if($content != ""){
				$google_font_array = $content;
			}
		}

	}

}
?>