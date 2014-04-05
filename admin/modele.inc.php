<?php
	function inscription_form_tab() {
		$pays = [array("groupe"=>"Afrique", array("Ghana","Togo", "Congo")),
		array("groupe"=>"Amérique", array("USA","Canada", "Brésil")),
		array("groupe"=>"Asie", array("Chine","Japon", "Indonésie")),
		array("groupe"=>"Europe", array("Belgique","France", "Allemagne")),
		array("groupe"=>"Océanie", array("Australie"))];

		$radio = ["label"=>"Sexe",array("genre"=>"input","type"=>"radio", "checked"=>"checked", "id"="homme" "name"="sexe",
			"value"=>"m"), array("genre"=>"input","type"=>"radio", "checked"=>"checked","id"="femme", "name"="sexe",
			"value"=>"f")];

		$select = ["type"=>"select", "name"=>"pays", $pays, "obligatoire"=>"1", "label"=>"Pays"];

		$tab_form = [];
		$tab_form = array("genre"=>"input", "type"=>"text","nom"=>"nom", "obligatoire"=>"1", "id"=>"nom", 
		"label"=>"Nom", "verif"=>"#^[A-Za-zàéèêùï]+([- ]?[A-Za-zàéèêùï]+)*$#");

		$tab_form = array("genre"=>"input", "type"=>"text","nom"=>"prenom", "obligatoire"=>"1", "id"=>"prenom", 
		"label"=>"Prénom", "verif"=>"#^[A-Za-zàéèêùï]+([- ]?[A-Za-zàéèêùï]+)*$#");

		$tab_form = array("genre"=>"input", "type"=>"text","nom"=>"ddn", "obligatoire"=>"1", "id"=>"ddn", 
		"label"=>"Date de naissance", "verif"=>"#^[1-2]?[0-9]|[3]{1}[0-1]\/[01]?[0-2]\/[0-9]{4}$#");

		$tab_form = array("genre"=>"input", "type"=>"text","nom"=>"ddn", "obligatoire"=>"1", "id"=>"ddn", 
		"label"=>"Date de naissance", "verif"=>"#^[1-2]?[0-9]|[3]{1}[0-1]\/[01]?[0-2]\/[0-9]{4}$#");

		$tab_form = $radio;

		$tab_form = array("genre"=>"input", "type"=>"text","nom"=>"adresse", "obligatoire"=>"1", "id"=>"adresse", 
		"label"=>"Adresse", "verif"=>"#^[A-Za-zàéèêùï]+([ ]{0,1}[a-z]+[-]{0,1}[a-z]+)$#");

		$tab_form = array("genre"=>"input", "type"=>"text","nom"=>"cp", "obligatoire"=>"1", "id"=>"cp", 
		"label"=>"Code postal", "verif"=>"#^[0-9]{4}$#");

		$tab_form = array("genre"=>"input", "type"=>"text","nom"=>"cp", "obligatoire"=>"1", "id"=>"cp", 
		"label"=>"Code postal", "verif"=>"#^[A-Za-zàéèêùï]+[-]{0,1}[a-z]+$#");

		$tab_form = array("genre"=>"input", "type"=>"text","nom"=>"cp", "obligatoire"=>"1", "id"=>"cp", 
		"label"=>"Code postal", "verif"=>"#^[A-Za-zàéèêùï]+[-]{0,1}[a-z]+$#");

		$tab_form = $select;

		$tab_form = array("genre"=>"input", "type"=>"text","nom"=>"email", "obligatoire"=>"1", "id"=>"email", 
		"label"=>"Email", "verif"=>"#^(\w|[àéèêùï]|[\|!\?\(\)\{\}#§\/<>\[\]\^\%\$\£\*])+(.(\w|[àéèêùï]|[\|!\?\(\)\{\}#§\/<>\[\]\^\%\$\£\*])+)*(@){1}[\w]{3,}(.){1}[a-z]{2,4}$#");
	
		$tab_form = array("genre"=>"input", "type"=>"text","nom"=>"tel", "obligatoire"=>"0", "id"=>"cp", 
		"label"=>"Téléphone", "verif"=>"#^([0-9]{3}|\+[0-9]{4})/?[0-9]{2}\.?[0-9]{2}\.?[0-9]{2}$#");

		$tab_form = array("genre"=>"input", "type"=>"text","nom"=>"fax", "obligatoire"=>"1", "id"=>"fax", 
		"label"=>"Fax", "verif"=>"#^([0-9]{3}|\+[0-9]{4})/?[0-9]{2}\.?[0-9]{2}\.?[0-9]{2}$#");

		$tab_form = array("genre"=>"input", "type"=>"text","nom"=>"login", "obligatoire"=>"1", "id"=>"login", 
		"label"=>"Login", "verif"=>"#^(\w+|[\|!\?\(\)\{\}@#§\/<>\[\]\^\%\$\£\*])+(-[A-Za-zàéèêùï\|!\?\(\)\{\}@#§\/<>\[\]\^\%\$\£\*]+)*$#");

		$tab_form = array("genre"=>"input", "type"=>"password","nom"=>"pass", "obligatoire"=>"1", "id"=>"pass", 
		"label"=>"Mot de passe", "verif"=>"#^[A-Za-zàéèêùï]*[0-9]*[A-Za-zàéèêùï]*$#");

		$tab_form = array("genre"=>"input", "type"=>"password","nom"=>"verif_pass", "obligatoire"=>"1", "id"=>"verif_pass", 
		"label"=>"Confirmation du mot de passe", "verif"=>"#^[A-Za-zàéèêùï]*[0-9]*[A-Za-zàéèêùï]*$#");
	}
?>