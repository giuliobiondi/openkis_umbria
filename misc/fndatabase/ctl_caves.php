<?xml version="1.0" encoding="UTF-8"?>
<?php exit(0);?>
<tables>
    <field>
        <name>id</name>
        <frm_group>ID tab</frm_group>
        <frm_group_i18n>ID tab</frm_group_i18n>
        <view_group>ID tab</view_group>
        <view_group_i18n>ID tab</view_group_i18n>
        <primarykey>1</primarykey>
        <extra>autoincrement</extra>
        <frm_show>0</frm_show>
    </field>
    <field>
        <name>code</name>
        <frm_it>Numero catastale</frm_it>
        <type>string</type>
        <frm_size>8</frm_size>
        <frm_help_i18n>leave blank for self assignment</frm_help_i18n>
        <unique>1</unique>
    </field>
    <field>
        <name>name</name>
        <frm_it>Nome</frm_it>
        <view_tag>h2</view_tag>
        <view_hiddentitle>1</view_hiddentitle>
        <frm_size>80</frm_size>
        <frm_help_it>Nome principale della cavità</frm_help_it>
    </field>		
    <field>
        <name>synonyms</name>
        <frm_it>Altre denominazioni</frm_it>
        <type>uppercase</type>
        <view_tag>em</view_tag>
        <view_hiddentitle>1</view_hiddentitle>
        <frm_size>80</frm_size>
        <frm_help_it>Inserire i sinonimi della grotta separati da ';' ad esempio 'GROTTA DELLE FATE; GROTTA DE FAJE'</frm_help_it>
    </field>
    <field>
        <name>namenotes</name>
        <frm_it>Note nome</frm_it>
        <type>string</type>
    </field>
    <field>
        <name>insertiondate</name>
        <frm_it>Data registrazione</frm_it>
        <type>datetime</type>
        <frm_dateformat>dd/mm/y</frm_dateformat>
        <view_dateformat>dd/mm/y</view_dateformat>
    </field>
    <field>
        <name>lastupdate</name>
        <frm_it>Ultimo aggiornamento</frm_it>
        <type>datetime</type>
        <frm_dateformat>dd/mm/y</frm_dateformat>
        <view_dateformat>dd/mm/y</view_dateformat>
    </field>
    <field>
        <name>caveslinks</name>
        <type>string</type>
        <frm_it>Grotte collegate</frm_it>
        <frm_help_it>Inserire i numeri di catasto separati da virgola degli ingressi e delle grotte collegate</frm_help_it>
        <frm_type>multicave</frm_type>
        <foreignkey>ctl_caves</foreignkey>
        <fk_link_field>code</fk_link_field>
        <fk_show_field>provincia,code,name</fk_show_field>
    </field>
    <field>
        <name>firstreference</name>
        <frm_it>Primo censitore</frm_it>		
        <frm_show>1</frm_show>
        <view_show>1</view_show>
        <frm_help_it>Inserire Cognome e nome di chi ha inserito a catasto la grotta,vale chi ha fornito i dati della scheda e NON chi la ha inserita sul gestionale.</frm_help_it>
    </field>

<field>
        <name>firstreferencegroup</name>
        <frm_it>Gruppo Primo censitore</frm_it>
        <type>string</type>
        <foreignkey>ctl_groups</foreignkey>
        <fk_link_field>id</fk_link_field>
        <fk_show_field>name</fk_show_field>        
    </field>

	<field>
        <name>chronology</name>
        <frm_it>Cronologia catastale</frm_it>		
        <frm_help>Cronologia delle versioni,esempio: 
            1990 - Mario Rossi - primo accatastatore
            2002 - Paolo Bianchi - aggiornamento per nuovo ramo esplorato,aggiunta descrizione
            2010 - Pinco Pallino - riposizionamento
            aggiungere in coda le modifiche</frm_help>
        <type>text</type>
        <frm_rows>auto</frm_rows>
        <frm_cols>80</frm_cols>
    </field>
    <field>
        <name>import_rawdata</name>
        <frm_it>Dati pre importazione</frm_it>
        <type>text</type>
        <view_endgroup>ID tab</view_endgroup>
        <frm_endgroup>ID tab</frm_endgroup>
    </field>
    <field>
        <frm_group>entrance tab</frm_group>
        <frm_group_i18n>entrance tab</frm_group_i18n>
		<view_group>entrance tab</view_group>
        <view_group_i18n>entrance tab</view_group_i18n>
        <name>entrancename</name>
        <frm_it>Nome ingresso</frm_it>
        <frm_rows>1</frm_rows>
        <type>text</type>
    </field>    
    <field>
        <name>entrancetype</name>
        <frm_it>Tipo ingresso</frm_it>
        <type>select</type>
        <frm_options>Unique,Main,Secondary</frm_options>
        <frm_options_it>Unico,Principale,Secondario</frm_options_it>
    </field>
    <field>
        <name>country</name>
        <type>select</type>
        <frm_default>Italy</frm_default>        
        <frm_show>0</frm_show>
    </field>
    <field>
        <name>regione</name>
        <type>select</type>
        <frm_type>regione</frm_type>
        <frm_it>Regione</frm_it>
        <frm_default>Umbria</frm_default>        
        <frm_show>1</frm_show>
    </field>
    <field>
        <name>provincia</name>
        <type>string</type>
        <frm_it>Provincia</frm_it>
        <frm_type>provincia</frm_type>
        <frm_showinlist>1</frm_showinlist>
    </field>    
    <field>
        <name>comune</name>
        <type>string</type>
        <frm_it>Comune</frm_it>
        <frm_type>comune</frm_type>
    </field>    
    <field>
        <name>localita</name>
        <frm_it>Località</frm_it>
    </field>
    <field>
        <name>coordinates_type</name>
        <type>string</type>
        <frm_it>Tipo di coordinate</frm_it>
        <frm_help_it>geografiche quando sono del tipo : 44°12'32'' oppure 44.23456 mentre 189992 sono Chilometriche.</frm_help_it>
        <foreignkey>ctl_coordinatestypes</foreignkey>
        <fk_link_field>coordinates_type</fk_link_field>
        <fk_show_field>coordinates_type</fk_show_field>
    </field>
    <field>
        <name>latitude_txt</name>
        <frm_it>Latitudine</frm_it>
        <frm_en>Latitude</frm_en>
        <frm_es>Latitud</frm_es>
        <frm_fr>Latitude</frm_fr>
        <frm_help_it>Inserisci qui la latitude. es. 44&#176; 12'18,2'' N </frm_help_it>
        <frm_help_en>You insert the latitude here. ex. 44&#176; 12'18,2'' N </frm_help_en>
        <type>varchar</type>
        <frm_type>latlon</frm_type>
    </field>
    <field>
        <name>longitude_txt</name>
        <frm_it>Longitudine</frm_it>
        <frm_en>Longitude</frm_en>
        <frm_es>Longitud</frm_es>
        <frm_fr>Longitude</frm_fr>
        <frm_help_it>Inserisci qui la longitude. Se questa &grave; riferita a Monte Mario non dimenticarti di specificarlo,ad esempio inserendo 2&#176;12'11,5'' W di M.Mario</frm_help_it>
        <type>varchar</type>
        <frm_type>latlon</frm_type>
    </field>
<field>
        <name>latitude</name>
        <type>float</type>
        <frm_show>0</frm_show>
    </field>
    <field>
        <name>longitude</name>
        <type>float</type>
        <frm_show>0</frm_show>
    </field> 
    <field>
        <name>coordinates_acquisition_method</name>
        <frm_it>Metodo acquisizione</frm_it>
        <type>select</type>
        <frm_options>On sight,Topographic/Cartographic,GPS</frm_options>
        <frm_options_it>A vista,Topografico/Cartografico,GPS</frm_options_it>
    </field>
    <field>
        <name>coordinates_acquisition_device</name>
        <frm_it>Strumentazione</frm_it>
        <type>string</type>
    </field>
    <field>
        <name>elevation</name>
        <type>string</type>
        <frm_type>os_lenght</frm_type>
        <frm_it>Quota</frm_it>
        <frm_suffix> m s.l.m</frm_suffix>
        <frm_size>8</frm_size>
    </field>
    <field>
        <name>elevation_type</name>
        <frm_it>Tipo quota</frm_it>
        <type>select</type>
        <frm_options>Cartographic,Altimetric/Barometric,GPS</frm_options>
        <frm_options_it>Cartografica,Altimetrica/Barometrica,GPS</frm_options_it>
    </field>

    <field>
        <name>location_evaluation</name>
        <type>string</type>
        <frm_it>Note coordinate</frm_it>
        <frm_help></frm_help>
        <frm_size>60</frm_size>
        
    </field>
    <field>
        <name>in_map</name>
        <frm_it>Validità dato</frm_it>
        <type>string</type>
        <frm_type>multicheck</frm_type>
      <frm_options>inmap,certain,approx</frm_options>
 <frm_options_it>Indicato in carta,Dato sicuro,Dato approssimativo</frm_options_it>
    </field>
<field>
        <name>coordinatesdate</name>
        <frm_it>Data coordinate</frm_it>
        <type>datetime</type>
        <frm_dateformat>dd/mm/y</frm_dateformat>
        <view_dateformat>dd/mm/y</view_dateformat>
        <frm_size>15</frm_size>
    </field>
    <field>
        <name>igm_25K</name>
        <frm_it>Cartografia IGM 25K</frm_it>
        <type>string</type>
        <foreignkey>ctl_IGM25K</foreignkey>
        <fk_link_field>code</fk_link_field>
        <fk_show_field>code</fk_show_field>		
    </field>
    <field>
        <name>ctl_10K</name>
        <frm_it>Cartografia CTR 10K</frm_it>
        <type>string</type>
       
<foreignkey>ctl_10k</foreignkey>
        <fk_link_field>code</fk_link_field>
        <fk_show_field>code</fk_show_field>
	
    </field>

    <field>
        <name>checked</name>
        <frm_it>Posizione verificata dal curatore</frm_it>
        <frm_help>Attenzione !! Il campo deve essere compilato dopo che la grotta è stata ritrovata successivamente la messa a catasto</frm_help>
        <type>radio</type>
        <frm_options>S,N</frm_options>
        <frm_options_it>Sì,No</frm_options_it>
    </field>
    <field>
        <name>check_date</name>
        <frm_it>Data ultima verifica sul campo</frm_it>
        <type>datetime</type>
        <frm_show>1</frm_show>
        <frm_dateformat>dd/mm/y</frm_dateformat>
        <view_dateformat>dd/mm/y</view_dateformat>
    </field>
    <field>  
        <name>itinerary</name>
        <frm_it>Itinerario</frm_it>
        <type>text</type>
    </field>
    <field>
        <name>GPSitinerary</name>
        <frm_it>Itinerario GPS</frm_it>
        <type>radio</type>
        <frm_options>S,N</frm_options>
        <frm_options_it>Sì,No</frm_options_it>
<frm_help_it>Se presente, aggiungere allegati in fondo alla scheda</frm_help_it>
    </field>
<field>
        <name>entranceusefulinfo</name>
        <frm_it>Informazioni utili itinerario</frm_it>

        <type>string</type>
        <frm_type>multicheck</frm_type>
<frm_options>No path,Forest,Path,Impervious side,Wall equipment needed,Needs boat,Snow/ice during winter,Dangerous access </frm_options>
<frm_options_it>Non esiste sentiero battuto,Macchia o boscaglia,Sentiero percorribile,Versante impervio,Parete da attrezzare,Necessita imbarcazione,Neve/ghiaccio d'inverno,Accesso pericoloso</frm_options_it>
    </field>
    <field>
        <name>environmentalcontext</name>
        <frm_it>Contesto ambientale ingresso</frm_it>		
        <type>string</type>
        <frm_type>multicheck</frm_type>
      <frm_options>Natural,Rural,Slope,Escarpment,Wall,Urban,Anthropized,Building,Quarry/Mine,Other Entrance</frm_options>
 <frm_options_it>Naturale,Rurale,Versante,Scarpata,Parete,Urbano,Antropizzato,Edificio,Cava/Miniera,Altro ingresso</frm_options_it>
    </field>
    <field>  
        <name>entrancedescription</name>
        <frm_it>Descrizione ingresso</frm_it>
        <type>text</type>
    </field>
<field>
        <name>photo1</name>
        <frm_it>Immagine ingresso</frm_it>
        <view_hiddentitle>1</view_hiddentitle>
        <type>image</type>
        <thumbsize>250</thumbsize>
    </field>
    <field>
        <name>authorphoto1</name>
        <frm_it>Autori immagine ingresso</frm_it>
        <view_hiddentitle>1</view_hiddentitle>
    </field>
<field>
        <name>entrancephotodate</name>
        <frm_it>Data Immagine Ingresso</frm_it>
        <type>datetime</type>
        <frm_show>1</frm_show>
        <frm_size>8</frm_size>
        <frm_dateformat>dd/mm/y</frm_dateformat>
        <view_dateformat>dd/mm/y</view_dateformat>
    </field>
<field>
        <name>accessibility</name>
        <frm_it>Accessibilità</frm_it>		
        <type>string</type>
        <frm_type>multicheck</frm_type>
      <frm_options>Closed cavity,Destroyed cavity,Obstructed entrance,Cavity not found</frm_options>
 <frm_options_it>Cavità chiusa,Cavità distrutta,Ingresso ostruito/tappato,Cavità non trovata</frm_options_it>
    </field>
    <field>
        <name>accessibilityinfo</name>
        <frm_it>Informazioni e vincoli accesso</frm_it>		
        <type>string</type>
        <frm_type>multicheck</frm_type>
      <frm_options>Free entrance,Gate,Fence,Municipal Ordinance,Access restricted by Police,Private Property,Door/Grate,Touristic,Access constraint,Other</frm_options>
 <frm_options_it>Accesso libero,Cancello,Recinzione,Ordinanza comune,Divieto PS,Proprietà privata,Porta/Grata,Turistica,Divieto per vincolo,Altro Accesso</frm_options_it>
    </field>
    
    <field>  
        <name>entrancenotes</name>
        <frm_it>Note accesso</frm_it>
        <frm_rows>1</frm_rows>
        <type>text</type>
    </field>
    <field>  
        <name>measurers</name>
        <frm_it>Rilevatori dati ingresso</frm_it>
        <frm_rows>1</frm_rows>
        <type>text</type>
    </field>

<field>
        <name>measurersgroup</name>
        <frm_it>Gruppo rilevatori dati ingresso</frm_it>
        <type>string</type>
        <foreignkey>ctl_groups</foreignkey>
        <fk_link_field>code</fk_link_field>
        <fk_show_field>name</fk_show_field>
	    <view_endgroup>entrance tab</view_endgroup>
        <frm_endgroup>entrance tab</frm_endgroup>
    </field>
    <field>
        <name>surveyed</name>
        <frm_it>Rilevata</frm_it>
        <type>select</type>
        <frm_group>speleometry tab</frm_group>
        <frm_group_i18n>speleometry tab</frm_group_i18n>
		<view_group>speleometry tab</view_group>
        <view_group_i18n>speleometry tab</view_group_i18n>
        <frm_options>Yes,No,Partially</frm_options>
        <frm_options_it>Sì, No, Parzialmente</frm_options_it>
    </field>
    
    <field>  
        <name>entrancesnumber</name>
        <frm_it>Numero Ingressi</frm_it>
        <frm_size>8</frm_size>
        <type>string</type>
    </field>
    <field>
        <name>depth_negative</name>
        <type>string</type>
        <frm_type>os_lenght</frm_type>
        <frm_it>Dislivello negativo</frm_it>
        <frm_size>8</frm_size>
        <frm_suffix> m</frm_suffix>
    </field>
    <field>
        <name>depth_positive</name>
        <type>string</type>
        <frm_type>os_lenght</frm_type>
        <frm_it>Dislivello positivo</frm_it>
        <frm_size>8</frm_size>
        <frm_suffix> m</frm_suffix>
    </field>
    <field>
        <name>depth_total</name>
        <type>string</type>
        <frm_type>os_lenght</frm_type>
        <frm_it>Dislivello totale</frm_it>				
        <frm_suffix> m</frm_suffix>	
        <frm_size>8</frm_size>
        <frm_showinlist>1</frm_showinlist>
    </field>
    <field>
        <name>lenght_total</name>
        <type>string</type>
        <frm_help_it>Sviluppo reale rilevato della grotta, pozzi compresi
(corrisponde alla sommatoria di tutte le distanze inclinate della poligonale del rilievo)</frm_help_it>        
        <frm_type>os_lenght</frm_type>
        <frm_it>Sviluppo spaziale</frm_it>		
        <frm_showinlist>1</frm_showinlist>
        <frm_suffix> m</frm_suffix>
        <frm_size>8</frm_size>        
    </field>
<field>
        <name>lenght_planimetric</name>
        <type>string</type>
        <frm_type>os_lenght</frm_type>
        <frm_it>Sviluppo planimetrico</frm_it>		
        <frm_help_it>Sviluppo della proiezione in pianta
(corrisponde alla sommatoria delle proiezioni in pianta di tutte le singole tratte della poligonale
del rilievo).</frm_help_it>
        <frm_suffix> m</frm_suffix>
        <frm_size>8</frm_size>
    </field>
    <field>
        <name>lenght_extension</name>
        <type>string</type>
        <frm_type>os_lenght</frm_type>
        <frm_help_it>Distanza in pianta tra i due punti della grotta situati alla massima distanza, misurata
direttamente sul disegno in linea retta</frm_help_it>
        <frm_it>Estensione</frm_it>		
        <frm_suffix> m</frm_suffix>
        <frm_size>8</frm_size>
    </field>
    <field>
        <name>speleometrynotes</name>
        <type>text</type>
        <frm_it>Note speleometria</frm_it>
        <frm_rows>1</frm_rows>
    <field>
        <name>lastspeleometryupdate</name>
        <frm_it>Ultimo aggiornamento</frm_it>
        <type>datetime</type>
        <frm_dateformat>dd/mm/y</frm_dateformat>
        <view_dateformat>dd/mm/y</view_dateformat>
		<view_endgroup>speleometry tab</view_endgroup>
        <frm_endgroup>speleometry tab</frm_endgroup>
    </field>
    </field> 
    
	<field>
        <name>explored</name>
		<frm_group>exploration tab</frm_group>
        <frm_group_i18n>exploration tab</frm_group_i18n>
		<view_group>exploration tab</view_group>
        <view_group_i18n>exploration tab</view_group_i18n>
        <frm_it>Cavità esplorata</frm_it>
        <type>select</type>
        <frm_options>Yes,No,Partially</frm_options>
        <frm_options_it>Sì,No,In parte</frm_options_it>
    </field>
	<field>
        <name>continues</name>
        <frm_it>Prosegue</frm_it>
        <type>select</type>
        <frm_options>Yes,No,Maybe</frm_options>
        <frm_options_it>Sì,No,Forse</frm_options_it>
		<view_endgroup>exploration tab</view_endgroup>
        <frm_endgroup>exploration tab</frm_endgroup>
    </field>
<field>
        <name>description</name>
	<frm_group>description tab</frm_group>
        <frm_group_i18n>description tab</frm_group_i18n>
		<view_group>description tab</view_group>
        <view_group_i18n>description tab</view_group_i18n>
        <frm_it>Descrizione</frm_it>
        <type>text</type>
        <frm_rows>auto</frm_rows>
        <frm_cols>80</frm_cols>
    </field>
	<field>
        <name>trend</name>
        <frm_it>Andamento cavità</frm_it>
        <frm_help_it>es. Orizzontale,in leggera discesa,verticale</frm_help_it>
        <type>select</type>
        <frm_options>horizontal,mainly_horizontal,vertical,mainly_vertical,ascending,descending,ascending_descending,horizontal_vertical,mixed,maze</frm_options>
        <frm_options_it>Orizzontale,Prevalentemente orizzontale,Verticale,Prevalentemente verticale,Ascendente,Discendente,Ascendente/Discendente,Orizzontale/Verticale,Mista,Labirintica</frm_options_it>
    </field>
    <field>
        <name>practicability</name>
        <frm_it>Percorribilità</frm_it>
        <frm_help_it>es. Facile</frm_help_it>
        <type>select</type>
        <frm_options>easy,challenging,difficult,experts_only</frm_options>
        <frm_options_it>Facile,Impegnativa,Difficile,Solo per esperti</frm_options_it>
    </field>
    <field>
        <name>recommended_period</name>
        <frm_it>Periodo consigliato</frm_it>
        <type>select</type>
        <frm_options>all_year,no_rain,dry,no_snow</frm_options>
        <frm_options_it>Tutto l'anno,No con precipitazioni,Periodo secco,No con neve</frm_options_it>
    </field>
	<field>
        <name>needs_rigging</name>
        <frm_it>Necessita armo</frm_it>
        <type>radio</type>
        <frm_options>S,N</frm_options>
        <frm_options_it>Sì,No</frm_options_it>
    </field>
    <field>
        <name>rigging_type</name>
        <frm_it>Tipo armo</frm_it>
        <type>select</type>
        <frm_options>none,exploration,temporary,fixed,course,double,rescue,Other</frm_options>
        <frm_options_it>Non armato,Esplorativo,Temporaneo,Fisso,Corso introduzione,Doppio,Soccorso,Altro</frm_options_it>
    </field>
	<field>
        <name>rigging_form</name>
        <frm_it>Scheda armo</frm_it>
        <type>radio</type>
        <frm_options>S,N</frm_options>
        <frm_options_it>Sì,No</frm_options_it>
<frm_help_it>Se presente, aggiungere allegati in fondo alla scheda</frm_help_it>

    </field>
    <field>
	<name>rigging_notes</name>
	<frm_it>Note armo</frm_it>
	<type>text</type>
        <frm_rows>1</frm_rows>

    </field>
    <field>
        <name>progression_difficulties</name>
        <frm_it>Difficoltà progressione</frm_it>
        <type>radio</type>
        <frm_options>S,N</frm_options>
        <frm_options_it>Sì,No</frm_options_it>
    </field>
    <field>
        <name>progression_difficulties_list</name>
        <frm_it>Lista difficoltà progressione</frm_it>		
        <type>string</type>
        <frm_type>multicheck</frm_type>
        <frm_options>wells,jumps,slides,crawlway,meanders,traverse,chimneying,other</frm_options>
        <frm_options_it>Pozzi,Salti,Scivoli,Strettoie,Meandri,Traversi,Risalite,Altro Progressione</frm_options_it>
    </field>
	<field>
        <name>water_difficulties</name>
        <frm_it>Difficoltà idriche</frm_it>
        <type>radio</type>
        <frm_options>S,N</frm_options>
        <frm_options_it>Sì,No</frm_options_it>
    </field>
	<field>
        <name>water_difficulties_list</name>
        <frm_it>Lista difficoltà idriche</frm_it>		
        <type>string</type>
        <frm_type>multicheck</frm_type>
        <frm_options>waterfalls,lakes,syphons,streams,wetsuit,aqualung,boats,other</frm_options>
        <frm_options_it>Cascate,Laghi,Sifoni,Corsi d'acqua,Occorre muta,Occorre respiratore,Occorre imbarcazione,Altro Idriche</frm_options_it>
    </field>
	<field>
        <name>dangers_list</name>
        <frm_it>Pericoli</frm_it>		
        <type>string</type>
        <frm_type>multicheck</frm_type>
        <frm_options>dangerous_entrance,landslides,flooding,gas,Ice/snow,Wells,Other</frm_options>
        <frm_options_it>Accesso pericoloso,Frane/crolli,Piene/allagamenti,Presenza gas,Ghiaccio/neve,Pozzi che scaricano,Altri Pericoli</frm_options_it>
    </field>
    <field>
        <name>additional_info_list</name>
        <frm_it>Informazioni aggiuntive</frm_it>
        <type>string</type>
        <frm_type>multicheck</frm_type>
        <frm_options>partially_artificial,touristic,Hot springs,religious,other,currentUsage</frm_options>
        <frm_options_it>Parzialmente artificiale,Turistica,Termale curativa,Uso religioso,Altri usi,Utilizzazione attuale</frm_options_it>
    </field>
<field>
        <name>infonotes</name>
        <frm_it>Note Aggiuntive</frm_it>
        <type>string</type>
    </field>
    <field>
        <name>polluted</name>
        <frm_it>Inquinata o a rischio</frm_it>
        <type>radio</type>
        <frm_options>S,N</frm_options>
        <frm_options_it>Sì,No</frm_options_it>
    </field>
    <field>
        <name>pollutionlocation</name>
        <frm_it>Luogo inquinamento</frm_it>
        <type>select</type>
        <frm_options>Entrance,Internal,Entrance/internal</frm_options>
        <frm_options_it>Ingresso,Interno,Ingresso/interno</frm_options_it>
    </field>
    <field>
        <name>wastetype</name>
        <frm_it>Tipologia rifiuti</frm_it>
        <type>string</type>
        <frm_type>multicheck</frm_type>
        <frm_options>solid waste,liquid waste,organic,non-organic</frm_options>
        <frm_options_it>Rifiuti solidi,Rifiuti liquidi,Organici,Inorganici</frm_options_it>
    </field>
    <field>
        <name>pollutionintensity</name>
        <frm_it>Intensità inquinamento</frm_it>
        <type>select</type>
        <frm_options>Low,Medium,High</frm_options>
        <frm_options_it>Bassa,Media,Alta</frm_options_it>
    </field>
    <field>
        <name>pollution_notes</name>
        <frm_it>Note inquinamento</frm_it>
        <type>text</type>
		<view_endgroup>description tab</view_endgroup>
        <frm_endgroup>description tab</frm_endgroup>
    </field>
    <innertable>
        <tablename>ctl_surveys</tablename>
        <frm_i18n>surveys</frm_i18n>
        <frm_it>Rilievi cavità</frm_it>
        <linkfield>code,codecave</linkfield>
        <innertablefields>id,name,photo1,filekml,date,author</innertablefields>
        <view>r_caves</view>
    </innertable>
    <innertable>
        <tablename>ctl_photos</tablename>
        <frm_it>Foto della cavità</frm_it>
        <linkfield>code,codecave</linkfield>
        <innertablefields>id,name,photo</innertablefields>
        <view></view>
    </innertable>
    <innertable>
        <tablename>ctl_faunacave</tablename>
        <frm_it>Rilevamenti faunistici</frm_it>
        <linkfield>code,codecave</linkfield>
        <innertablefields>name,photo1,date</innertablefields>
        <view></view>
    </innertable>
    <innertable>
        <tablename>ctl_attachments</tablename>
        <frm_it>Allegati</frm_it>
        <linkfield>code,codecave</linkfield>
        <view></view>
    </innertable>

    <field>
        <name>geology_desc</name>
		<frm_group>geology tab</frm_group>
        <frm_group_i18n>geology tab</frm_group_i18n>
		<view_group>geology tab</view_group>
        <view_group_i18n>geology tab</view_group_i18n>
        <frm_it>Descrizione</frm_it>
        <type>text</type>
        <frm_rows>auto</frm_rows>
        <frm_cols>80</frm_cols>
    </field>
<field>
        <name>areas</name>
        <frm_it>Area geografica</frm_it>
        <type>string</type>
        <frm_type>multicave</frm_type>
        <foreignkey>ctl_areas</foreignkey>
        <fk_link_field>code</fk_link_field>
        <fk_show_field>name</fk_show_field>		
    </field>

<field>
        <name>speleo_areas</name>
        <frm_it>Area speleologica/carsica</frm_it>
        <type>string</type>
        <frm_type>multicave</frm_type>
        <foreignkey>ctl_speleo_areas</foreignkey>
        <fk_link_field>code</fk_link_field>
        <fk_show_field>name</fk_show_field>		
    </field>
	<field>
        <name>geologicalformation</name>
        <type>string</type>
        <frm_type>multicave</frm_type>
        <frm_it>Formazione geologica ed età</frm_it>
        <foreignkey>ctl_geologicalformations</foreignkey>
        <fk_link_field>code</fk_link_field>
        <fk_show_field>code,name</fk_show_field>        
    </field>
	<field>
	<name>lithology</name>
        <frm_it>Litologia</frm_it>
        <type>select</type>
        <frm_options>Conglomerates,Bioclastic Limestone,Massive Limestone,Vacuolar Limestone,Nodular Limestone,Micritic Limestone,Siliceous Limestone,Calcarenite,Dolomite,Marl,Calcareus Shale,Evaporites,Travertine</frm_options>
        <frm_options_it>Conglomerati o brecce,Calcari bioclastici o stromatolitici,Calcari massivi,Calcari cavernosi o vacuolari,Calcari nodulari,Calcari micritici stratificati,Calcari selciferi,Calcareniti, Dolomie,Marne,Argilliti Calcaree,Gessi Evaporitici,Travertini</frm_options_it>
    </field>
    <field>
	<name>bedding</name>
        <frm_it>Stratificazione</frm_it>
        <type>multicheck</type>
        <frm_options>Not stratified,Stratified,Massive,Obliterated</frm_options>
        <frm_options_it>Non stratificata,Stratificata,Massiva,Obliterata</frm_options_it>
    </field>
    <field>
	<name>attitude</name>
        <frm_it>Giacitura a strati</frm_it>
        <type>multicheck</type>
        <frm_options>Subhorizontal,Inclined,Bent,Verticalized,Overthrown</frm_options>
        <frm_options_it>Suborizzontali,Inclinati,Piegati,Verticalizzata,Rovesci</frm_options_it>
    </field>
	<field>
		<name>jointing</name>
        <frm_it>Fratturazione</frm_it>
        <type>multicheck</type>
        <frm_options>Concentrated,Diffuse,Faulting,Random</frm_options>
        <frm_options_it>Concentrata,Diffusa,Faglie,Casuale</frm_options_it>
    </field>
	<field>
		<name>geological_studies</name>
        <frm_it>Studi</frm_it>
        <type>multicheck</type>
        <frm_options>Geological,Speleogenetical,Paleontological,Hydrogeological,Mineralogical</frm_options>
        <frm_options_it>Geologici,Speleogenetici,Paleontologici,Idrogeologici,Mineralogici</frm_options_it>
	</field>
	<field>
	<name>geology_notes</name>
	<frm_it>Note geologia</frm_it>
	<type>text</type>
    <frm_rows>1</frm_rows>
	<view_endgroup>geology tab</view_endgroup>
    <frm_endgroup>geology tab</frm_endgroup>
    </field>
	<field>
        <name>biological_constraint</name>
		<frm_group>biology tab</frm_group>
        <frm_group_i18n>biology tab</frm_group_i18n>
		<view_group>biology tab</view_group>
        <view_group_i18n>biology tab</view_group_i18n>
        <frm_it>Vincoli o tutele ambientali/biologiche</frm_it>
        <type>radio</type>
        <frm_options>S,N</frm_options>
        <frm_options_it>Sì,No</frm_options_it>
    </field>
	<field>
        <name>biological_constraint_notes</name>
        <frm_it>Note vincoli</frm_it>
        <type>text</type>
    </field>
	<field>
        <name>bat_colonies</name>
        <frm_it>Colonie chirotteri</frm_it>
        <type>text</type>
    </field>
	<field>
        <name>cave_fauna</name>
        <frm_it>Altra fauna ipogea</frm_it>
        <type>text</type>
    </field>

	<field>
        <name>cave_flora</name>
        <frm_it>Botanica ipogea</frm_it>
        <type>text</type>
    </field>
<field>
	<name>biology_studies</name>
        <frm_it>Studi e monitoraggi</frm_it>
        <type>multicheck</type>
        <frm_options>Biospeleological,Entomological,Botanical,Biological,Other</frm_options>
        <frm_options_it>Biospeleologici,Entomologici,Botanici,Biologici,Altro</frm_options_it>
    </field>
	<field>
        <name>biology_notes</name>
        <frm_it>Note biologia</frm_it>
        <type>text</type>
		<view_endgroup>biology tab</view_endgroup>
        <frm_endgroup>biology tab</frm_endgroup>
    </field>
	<field>
        <name>temperaturecelsius</name>
		<frm_group>meteorology and idrology tab</frm_group>
        <frm_group_i18n>meteorology and idrology tab</frm_group_i18n>
		<view_group>meteorology and idrology tab</view_group>
        <view_group_i18n>meteorology and idrology tab</view_group_i18n>
        <frm_it>Temperatura interna</frm_it>
		<frm_size>8</frm_size>
        <frm_suffix> °C</frm_suffix>
	</field>
	<field>
        <name>humidity</name>
		<frm_it>Umidità</frm_it>
		<frm_size>8</frm_size>
        <frm_suffix> %</frm_suffix>
	</field>
	<field>
        <name>wind_speed</name>
		<frm_it>Velocità flussi d'aria</frm_it>
		<frm_size>8</frm_size>
        <frm_suffix> m/s</frm_suffix>
	</field>
	<field>
        <name>hydrology</name>
        <frm_it>Idrologia</frm_it>		
        <type>string</type>
        <frm_type>multicheck</frm_type>
        <frm_options>temporary flooding,absorbent,emitting,permanent absorbent,temporary absorbent,permanent issuing,temporary issuing,lakes,permanent lakes,temporary lakes,slight flows,dry,siphons,permanent siphons,temporary siphons,only dripping,torrents,permanent torrents,temporary torrents,temporary ice,permanent ice,snow wells</frm_options>
        <frm_options_it>allagamenti temporanei,assorbente,emittente,assorbente permanente,assorbente temporanea,emittente permanente,emittente temporanea,laghi,laghi permanenti,laghi temporanei,lievi scorrimenti,secca,sifoni,sifoni permanenti,sifoni temporanei,solo stillicidio,torrenti,torrenti permanenti,torrenti temporanei,ghiaccio temporaneo,ghiaccio permanente,pozzi a neve</frm_options_it>
    </field>
<field>
        <name>meteorology</name>
        <frm_it>Meteorologia</frm_it>
        <frm_type>multicheck</frm_type>
        <frm_options>blow_during_heat,blow_during_cold,suck_during_heat,suck_during_cold,none,blow_always,suck_always,none_in_heat,none_in_cold</frm_options>
        <frm_options_it>soffia con il caldo,soffia con il freddo,aspira con il caldo,aspira con il freddo,nessuna circolazione,soffia sempre,aspira sempre,nessuna circolazione in estate,nessuna circolazione in inverno</frm_options_it>
        <type>string</type>
        <frm_show>1</frm_show>
    </field>

<field>
	<name>meteorology_studies</name>
        <frm_it>Studi e monitoraggi</frm_it>
        <type>multicheck</type>
        <frm_options>Meteorological,Hydrological,Environmental,Other</frm_options>
        <frm_options_it>Meteorologici,Idrologici,Ambientali,Altro</frm_options_it>
    </field>
<field>
        <name>meteorology_hydrology_notes</name>
        <frm_it>Note meteorologia e idrologia</frm_it>
        <type>text</type>
		<view_endgroup>meteorology and idrology tab</view_endgroup>
        <frm_endgroup>meteorology and idrology tab</frm_endgroup>
    </field>
	<field>
        <frm_group>history tab</frm_group>
        <frm_group_i18n>history tab</frm_group_i18n>
		<view_group>history tab</view_group>
        <view_group_i18n>history tab</view_group_i18n>
        <name>history</name>
        <frm_it>Notizie di carattere storico, folkloristico o religioso</frm_it>
        <type>text</type>
    </field>
	<field>
        <name>archeological_constraint</name>
		
        <frm_it>Vincolo o tutela siti storico-archeologici</frm_it>
        <type>radio</type>
        <frm_options>S,N</frm_options>
        <frm_options_it>Sì,No</frm_options_it>
    </field>
<field>
		<name>findings</name>
        <frm_it>Ritrovamenti</frm_it>
        <type>multicheck</type>
        <frm_options>Archeological,Paletnological</frm_options>
        <frm_options_it>Archeologici,Paletnologici</frm_options_it>
    </field>
<field>
		<name>historical_studies</name>
        <frm_it>Studi</frm_it>
        <type>multicheck</type>
        <frm_options>Archeological,Paletnological,Antropological,Other</frm_options>
        <frm_options_it>Archeologici,Paletnologici,Antropologici,Altro</frm_options_it>
    </field>
	<field>
        <name>archeopalnotes</name>
        <frm_it>Note archeologia e paletnologia</frm_it>
        <type>text</type>
		<view_endgroup>history tab</view_endgroup>
        <frm_endgroup>history tab</frm_endgroup>
    </field>
<field>
        <name>recordinsert</name>
<frm_group>data</frm_group>
        <frm_group_i18n>Dati compilazione</frm_group_i18n>
        <view_group>data</view_group>
        <view_group_i18n>Dati compilazione</view_group_i18n>
        <frm_it>Data importazione</frm_it>
        <type>datetime</type>
        <view_dateformat>dd/mm/y</view_dateformat>
        <frm_show>0</frm_show>
        <view_show>1</view_show>
    </field>
    <field>
        <name>username</name>
        <type>string</type>
        <frm_it>Utente che ha inserito i dati</frm_it>
        <frm_show>0</frm_show>
        <view_show>1</view_show>
    </field>

  
<field>
        <name>update_notes</name>
        <frm_it>Note aggiornamento</frm_it>
        <type>select</type>
        <frm_options>New,Update,NewCoordinates,MeasurementUpdate,PhotoUpdate,DocsUpdate</frm_options>
        <frm_options_it>Inserimento nuova cavità,Aggiornamento dati,Revisione coordinate con GPS,Aggiornamento rilievo, Aggiornamento foto,Aggiornamento documentazione</frm_options_it>
    </field>
    <field>
        <name>fileauthor</name>
        <frm_it>Compilatore</frm_it>
        <frm_rows>1</frm_rows>
        <type>text</type>
    </field>
    <field>
        <name>fileauthormail</name>
        <frm_it>E-mail compilatore</frm_it>
        <frm_rows>1</frm_rows>
       <frm_show>1</frm_show>
        <view_show>0</view_show>
        <type>text</type>
    </field>

<field>
        <name>fileauthorgroup</name>
        <frm_it>Gruppo compilatore</frm_it>
        <type>string</type>
        <foreignkey>ctl_groups</foreignkey>
        <fk_link_field>code</fk_link_field>
        <fk_show_field>name</fk_show_field>		
    </field>
	<field>
		<name>groupview</name>
		<frm_i18n>limits the display of the content in these groups</frm_i18n>
		<foreignkey>fn_groups</foreignkey>
		<fk_link_field>groupname</fk_link_field>
		<fk_show_field>groupname</fk_show_field>
		<frm_type>multicheck</frm_type>
		<type>string</type>
	</field>
    <field>
        <name>groupinsert</name>
        <frm_i18n>limits the edit of the content in these</frm_i18n>
        <foreignkey>fn_groups</foreignkey>
        <fk_link_field>groupname</fk_link_field>
        <fk_show_field>groupname</fk_show_field>
        <frm_type>multicheck</frm_type>
        <type>string</type>
    </field>
    <field>
        <name>userupdate</name>
        <type>varchar</type>
        <frm_it>Utente che ha aggiornato i dati</frm_it>
        <frm_show>0</frm_show>
        <view_show>1</view_show>
    </field>
    <field>
        <name>recordupdate</name>
        <type>datetime</type>
        <view_dateformat>dd/mm/y</view_dateformat>
        <frm_it>Ultima modifica dei dati</frm_it>
        <frm_show>0</frm_show>
        <view_show>1</view_show>
        <view_endgroup>data</view_endgroup>
    </field>
	<field>
        <name>coordnatesupdated</name>
        <frm_show>0</frm_show>
    </field> 
    <field>
        <name>recorddeleted</name>
        <type>bool</type>
        <frm_show>0</frm_show>
    </field>
    <driver>mysql</driver>
</tables>
