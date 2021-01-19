<!DOCTYPE html>
<html lang="en" dir="ltr">
    <meta charset="utf-8">
    <title>fomulaire covoiturage</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <div id="wraper">
      <?php include ("header.php"); ?>

    <main>

      <form class="fomulaire" action="resulta.php" method="post">

        <p>
            <label for = "nom">Entre votre nom : </label> <!--le label et pratique pour pouvoire travaeller ou clavier-->
            <input id = "non" class="chamInfo" type="text" name="nom" value=""  placeholder="Ecriver votre Nom ">
         </p>
        <p>
            <label for = "premon">Entre votre prénom : </label>
            <input id = "prenom"  class="chamInfo" type="text" name="prenom" value="" placeholder="Ecriver votre Prénom">
        </p>
        <p>
            <label for="email">Adresse email : </label>
            <input id = "email" class="chamInfo" type="text" name="email" value="" placeholder="Ecriver votre Email ">
         </p>
        <p>
            <label for="telephone">Numéro de téléphone : </label>
            <input id = "telephone" class="chamTel" type="text" name="telephone" value="" placeholder="Ecriver votre Numerot de telephone a 10 chifre">
        </p>
        <p> propauser vaure covoiturage </p>
        <p> Sélection de la ville de départ <input id = "villeDepart" class="chamVile" type="text" name="villeDepart" value="" placeholder="entre un non de ville"> Heure de Depart:<input id = "departime" type="text" name="departTime" value="Heure de Depart"> </p>
          <p> Sélection de la ville d'ariver <input class="cham chamVile" type="text" name="villeAriver" value="ville d'Ariver"> Heure d'ariver :<input type="text" name="ariverTime" value="Heure d'Ariver "> </p>
        <p>  <label for "villeAriver"> selectioner une ville d'ariver :</label>
                <?php
                #tableau de ville d'ariver
                $villeAriver  = array( 'Aast','Abainville','Abancourt','Abaucourt','Abaucourt-Hautecourt','Abbans-Dessous','Abbans-Dessus','Abbaretz','Abbécourt','Abbenans','Abbeville','Abbéville-la-Rivière','Abbéville-lès-Conflans','Abbeville-Saint-Lucien','Abbévillers','Abeilhan','Abelcourt','Abère','Abergement-la-Ronce','Abergement-le-Grand','Abergement-le-Petit','Abergement-lès-Thésy','Abidos','Abilly','Abitain','Abjat-sur-Bandiat','Ablain-Saint-Nazaire','Ablaincourt-Pressoir','Ablainzevelle','Ablancourt','Ableiges','AblisAblonAblon-sur-Seine','AboënAboncourt','Aboncourt-Gesincourt','Aboncourt-sur-SeilleAbondance','Abondant','AbosAbreschviller','AbrestAbriès','AbsconAbzac','Accolans','Accolay','Accons','Accous','Achain','Achen','Achenheim','Achères','Achères-la-Forêt','Achery','Acheux-en-Amiénois','Acheux-en-Vimeu','Acheville','Achey');


                    echo '<ul id = "selectVille">';
                    foreach ($villeAriver as $key => $value) {

                        #panser a modifier le nobre de ville
                        if ($key < 6) {

                          echo '<li >  '  .$value. '  <input id = "villeAriver" type="checkbox" name="villeAriver"  value="'  .$value. ' ">  </li> ';
                          // code...
                        }

                    }
                    echo "</ul>";

                    #print_r($villeAriver);
                ?>
                Heure d'ariver :<input id = "ariverTime" type="text" name="ariverTime" value="Heure d'Ariver ">
          </p>

          <p><input class="valider" type="submit" name="validation" value="valider"></p>

        </form>

          <h3>teste tablau des ville</h3>

          <?php
             $departementFR  = array(
              #ville du departement de l'ain 01 compts 393 ville
              0 => array('Ambérieu-en-Bugey','Ambérieux-en-Dombes','Ambléon','Ambronay','Ambutrix','Andert-et-Condon','Anglefort','Apremont','Aranc','Arandas','Arbent','Arbigny','Arboys en Bugey','Argis','Armix','Ars-sur-Formans','Artemare','Arvière-en-Valromey','Asnières-sur-Saône','Attignat','Bâgé-Dommartin','Bâgé-le-Châtel','Balan','Baneins','Béard-Géovreissiat'
              ,'Beaupont','Beauregard','Béligneux','Belley','Belleydoux','Bellignat','Bénonces','Bény','Béon','Béréziat','Bettant','Bey','Beynost','Billiat','Birieux','Biziat','Blyes','Bohas-Meyriat-Rignat','Boissey','Bolozon','Bouligneux','Bourg-en-Bresse','Bourg-Saint-Christophe','Boyeux-Saint-Jérôme','Boz','Brégnier-Cordon','Brénod','Brens','Bresse Vallons','Bressolles','Brion','Briord','Buellas','Ceignes','Cerdon','Certines','Cessy','Ceyzériat'          ,'Chalamont','Chaleins','Chaley','Challes-la-Montagne','Challex','Ceyzérieu','Champagne-en-Valromey','Champdor-Corcelles','Champfromier','Chanay','Chaneins','Chanoz-Châtenay','Charix','Charnoz-sur-Ain','Château-Gaillard','Châtenay','Châtillon-la-Palud','Châtillon-sur-Chalaronne','Chavannes-sur-Reyssouze','Chaveyriat','Chazey-Bons','Chazey-sur-Ain','Cheignieu-la-Balme','Chevillard'
              ,'Chevroux','Chevry','Chézery-Forens','Civrieux','Cize','Cleyzieu','Coligny','Collonges','Colomieu','Conand','Condamine','Condeissiat','Confort','Confrançon','Contrevoz','Conzieu','Corbonod','Corlier','Cormoranche-sur-Saône','Cormoz','Corveissiat','Courmangoux'
              ,'Courtes','Crans','Cressin-Rochefort','Crottet','Crozet','Cruzilles-lès-Mépillat','Culoz','Curciat-Dongalon','Curtafond','Cuzieu','Dagneux','Divonne-les-Bains','Dompierre-sur-Chalaronne','Dompierre-sur-Veyle','Domsure','Dortan','Douvres','Drom','Druillat','Échallon','Échenevex','Évosges','Faramans','Fareins','Farges','Feillens','Ferney-Voltaire','Flaxieu','Foissiat','Francheleins','Frans','Garnerans','Genouilleux','Géovreisset'
              ,'Gex','Giron','Gorrevod','Grand-Corent','Grièges','Grilly','Groissiat','Groslée-Saint-Benoit','Guéreins','Haut Valromey','Hautecourt-Romanèche','Illiat','Injoux-Génissiat','Innimond','Izenave','Izernore','Izieu','Jassans-Riottier','Jasseron','Jayat','Journans','Joyeux','Jujurieux'
              ,'L\'Abergement-Clémenciat','L\'Abergement-de-Varey','La Boisse','La Burbanche','La Chapelle-du-Châtelard','La Tranclière','Labalme','Lagnieu','Laiz','Lantenay','Lapeyrouse','Lavours','Le Montellier','Le Plantay','Le Poizat-Lalleyriat','Léaz','Lélex','Lent','Les Neyrolles','Lescheroux','Leyment','Leyssard','Lhuis','Lompnas','Loyettes','Lurcy'
              ,'Magnieu','Maillat','Malafretaz','Mantenay-Montlin','Manziat','Marboz','Marchamp','Marignieu','Marlieux','Marsonnas','Martignat','Massieux','Massignieu-de-Rives','Matafelon-Granges','Meillonnas','Mérignat','Messimy-sur-Saône','Meximieux','Mézériat','Mijoux','Mionnay','Miribel','Misérieux','Mogneneins','Montagnat','Montagnieu','Montanges','Montceaux','Montcet','Monthieux','Montluel','Montmerle-sur-Saône','Montracol','Montréal-la-Cluse','Montrevel-en-Bresse'
              ,'Murs-et-Gélignieux','Nantua','Neuville-les-Dames','Neuville-sur-Ain','Neyron','Niévroz','Nivigne et Suran','Nivollet-Montgriffon','Nurieux-Volognat','Oncieu','Ordonnaz','Ornex','Outriaz','Oyonnax','Ozan','Parcieux','Parves et Nattages','Péron','Péronnas','Pérouges','Perrex','Peyriat','Peyrieu','Peyzieux-sur-Saône'
              ,'Pirajoux','Pizay','Plagne','Plateau d\'Hauteville','Polliat','Pollieu','Poncin','Pont-d\'Ain','Pont-de-Vaux','Pont-de-Veyle','Port','Pougny','Pouillat','Prémeyzel','Prémillieu','Prévessin-Moëns','Priay','Ramasse','Rancé','Relevant','Replonges','Revonnas','Reyrieux','Reyssouze','Rignieux-le-Franc','Romans','Rossillon','Ruffieu','Saint-Alban','Saint-André-d\'Huiriat','Saint-André-de-Bâgé','Saint-André-de-Corcy','Saint-André-le-Bouchoux','Saint-André-sur-Vieux-Jonc','Saint-Bénigne','Saint-Bernard','Saint-Cyr-sur-Menthon','Saint-Denis-en-Bugey','Saint-Denis-lès-Bourg','Saint-Didier-d\'Aussiat','Saint-Didier-de-Formans','Saint-Didier-sur-Chalaronne','Saint-Éloi','Saint-Étienne-du-Bois','Saint-Étienne-sur-Chalaronne','Saint-Étienne-sur-Reyssouze','Saint-Genis-Pouilly','Saint-Genis-sur-Menthon','Saint-Georges-sur-Renon','Saint-Germain-de-Joux','Saint-Germain-les-Paroisses','Saint-Germain-sur-Renon','Saint-Jean-de-Gonville','Saint-Jean-de-Niost','Saint-Jean-de-Thurigneux','Saint-Jean-le-Vieux','Saint-Jean-sur-Reyssouze','Saint-Jean-sur-Veyle','Saint-Julien-sur-Reyssouze','Saint-Julien-sur-Veyle','Saint-Just','Saint-Laurent-sur-Saône','Saint-Marcel','Saint-Martin-de-Bavel','Saint-Martin-du-Frêne','Saint-Martin-du-Mont','Saint-Martin-le-Châtel','Saint-Maurice-de-Beynost','Saint-Maurice-de-Gourdans','Saint-Maurice-de-Rémens','Saint-Nizier-le-Bouchoux','Saint-Nizier-le-Désert','Saint-Paul-de-Varax','Saint-Rambert-en-Bugey','Saint-Rémy','Saint-Sorlin-en-Bugey','Saint-Sulpice','Saint-Trivier-de-Courtes','Saint-Trivier-sur-Moignans','Saint-Vulbas','Sainte-Croix','Sainte-Euphémie','Sainte-Julie','Sainte-Olive','Salavre','Samognat','Sandrans','Sault-Brénaz','Sauverny','Savigneux','Ségny','Seillonnaz','Sergy','Sermoyer','Serrières-de-Briord','Serrières-sur-Ain','Servas','Servignat','Seyssel','Simandre-sur-Suran','Sonthonnax-la-Montagne','Souclin','Sulignat','Surjoux-Lhopital','Talissieu','Tenay','Thil','Thoiry','Thoissey','Torcieu','Tossiat','Toussieux','Tramoyes','Trévoux','Val-Revermont','Valeins','Valromey-sur-Séran','Valserhône','Vandeins','Varambon','Vaux-en-Bugey','Verjon','Vernoux','Versailleux','Versonnex','Vesancy','Vescours','Vésines','Vieux-d\'izenave','Villars-les-Dombes','Villebois','Villemotier','Villeneuve','Villereversure','Villes','Villette-sur-Ain','Villieu-Loyes-Mollon','Viriat','Virieu-le-Grand','Virignin','Vongnes','Vonnas' ),

              #ville du departement de l'aine 02 compts 800 ville
              1 => array('Abbécourt','Achery' ,'Acy','Agnicourt-et-Séchelles','Aguilcourt','Aisonville-et-Bernoville','Aizelles','Aizy-Jouy','Alaincourt','Allemant','Ambleny','Ambrief','Amifontaine','Amigny-Rouy','Ancienville','Andelain','Anguilcourt-le-Sart','Anizy-le-Grand','Annois','Any-Martin-Rieux','Archon','Arcy-Sainte-Restitue','Armentières-sur-Ourcq'
              ,'Arrancy','Artemps','Assis-sur-Serre','Athies-sous-Laon','Attilly','Aubencheul-aux-Bois','Aubenton','Aubigny-aux-Kaisnes','Aubigny-en-Laonnois','Audignicourt','Audigny','Augy','Aulnois-sous-Laon','Autremencourt','Autreppes','Autreville','Azy-su','Bagneux','Bancigny',
              'Barenton-Bugny','Barenton-Cel','Barenton-sur-Serre','Barisis-aux-Bois','Barzy-en-Thiérache','Barzy-sur-Marne','Bassoles-Aulers','Bazoches-sur-Vesles','Beaumé','Beaumont-en-Beine','Beaurevoir','Beaurieux','Beautor','Beauvois-en-Vermandois','Becquigny','Belleau','Bellenglise','Belleu','Bellicourt','Benay','Bergues-sur-Sambre','Berlancourt'
              ,'Berlise','Bernot','Berny-Rivière','Berrieux','Berry-au-Bac','Bertaucourt-Epourdon','Berthenicourt','Bertricourt','Berzy-le-Sec','Besmé','Besmont','Besny-et-Loizy','Béthancourt-en-Vaux','Beugneux','Beuvardes','Bézu-le-Guéry','Bézu-Saint-Germain','Bichancourt','Bieuxy','Bièvres','Billy-sur-Aisne','Billy-sur-Ourcq','Blanzy-lès-Fismes'
              ,'Blérancour','Blesmes','Bohain-en-Vermandois','Bois-lès','Boncourt','Bonneil','Bonnesvalyn','Bony','Bosmont-sur-Serre','Bouconville-Vauclair','Boué','Bouffignereux','Bouresches','Bourg-et-Comin','Bourguignon-sous-Coucy','Bourguignon-sous-Montbavin','Braine','Brancourt-en-Laonnois','Brancourt-le-Grand','Brasles'
              ,'Bray-Saint-Christophe','Braye','Braye-en-Laonnois','Braye-en-Thiérache','Brécy','Brenelle','Breny','Brie','Brissay-Choigny','Brissy-Hamégicourt','Brumetz','runehamel','Bruyères-et-Montbérault','Bruyères-sur-Fère','Bruys','Bucilly',
              'Bucy-le-Long','Bucy-lès-Cerny','Bucy-lès-Pierrepont','Buire','Buironfosse','Burelles','Bussiares','Buzancy','Caillouël-Crépigny','Camelin','Castres','Caulaincourt','Caumont','Celles-lès-Condé','Celles-sur-Aisne','Cerizy','Cerny-en-Laonnois'
              ,'Cerny-lès-Bucy','Cerseuil','Cessières-Suzy','Chacrise','Chaillevois','Chalandry','Chambry','Chamouille','Champs','Chaourse','Charly-sur-Marne','Charmes','Chartèves','Chassemy','Château-Thierry','Châtillon-lès-Sons','Châtillon-sur-Oise','Chaudardes','Chaudun','Chauny','Chavignon','Chavigny','Chavonne','Chérêt'
              ,'Chermizy-Ailles','Chéry-Chartreuve','Chéry-lès-Pouilly','Chéry-lès-Rozoy','Chevennes','Chevregny','Chevresis-Monceau','Chézy-en-Orxois','Chézy-sur-Marne','Chierry','Chigny','Chivres-en-Laonnois'
              ,'Chivres-Val','Chivy-lès-Étouvelles','Chouy','Cierges','Cilly','Ciry-Salsogne','Clacy-et-Thierret','Clairfontaine','Clamecy','Clastres','Clermont-les-Fermes','Coincy','Coingt','Colligis-Crandelain','Colonfay','Commenchon','Concevreux','Condé-en-Brie','Condé-sur-Aisne','Condé-sur-Suippe','Condren','Connigis','Contescourt','Corbeny','Corcy','Coucy-la-Ville','Coucy-le-Château-Auffrique','Coucy-lès-Eppes','Coulonges-Cohan'
              ,'Coupru','Courbes','Courboin','Courcelles-sur-Vesle','Courchamps','Courmelles','Courmont','Courtemont-Varennes','Courtrizy-et-Fussigny','Couvrelles','Couvron-et-Aumencourt','Coyolles','Cramaille','Craonne','Craonnelle','Crécy-au-Mont','Crécy-sur-Serre','Crépy','Crézancy','Croix-Fonsomme','Crouttes-sur-Marne','Crouy','Crupilly','Cuffies','Cugny',
              'Cuirieux','Cuiry-Housse','Cuiry-lès-Chaudardes','Cuiry-lès-Iviers','Cuissy-et-Geny','Cuisy-en-Almont','Cutry','Cys-la-Commune','Cœuvres-et-Valsery','Dagny-Lambercy','Dallon','Dammard','Dampleux','Danizy','Dercy','Deuillet','Dhuizel','Dhuys et Morin-en-Brie','Dizy-le-Gros','Dohis','Dolignon','Dommiers','Domptin','Dorengt','Douchy'
              ,'Dravegny','Droizy','Dury','Ébouleau','Effry','Englancourt','Épagny','Éparcy','Épaux-Bézu'
              ,'Épieds','Eppes','Erlon','Erloy','Esquéhéries','Essigny-le-Grand','Essigny-le-Petit','Essises','Essômes-sur-Marne','Estrées','Étampes-sur-Marne',
              'Étaves-et-Bocquiaux','Étouvelles','Étréaupont','Étreillers','Étrépilly','Étreux','Évergnicourt','Faverolles','Fayet','Fère-en-Tardenois','Fesmy-le-Sart','Festieux','Fieulaine','Filain','Flavigny-le-Grand-et-Beaurain','Flavy-le-Martel','Fleury','Fluquières','Folembray','Fonsomme','Fontaine-lès-Clercs','Fontaine-lès-Vervins','Fontaine-Notre-Dame','Fontaine-Uterte','Fontenelle','Fontenoy','Foreste','Fossoy','Fourdrain','Francilly-Selency','Franqueville','Fresnes-en-Tardenois',
              'Fresnes-sous-Coucy','Fresnoy-le-Grand','Fressancourt','Frières-Faillouël','Froidestrées','Froidmont-Cohartille','Gandelu','Gauchy','Gercy','Gergny','Germaine','Gibercourt','Gizy','Gland','Goudelancourt-lès-Berrieux','Goudelancourt-lès-Pierrepont','Goussancourt','Gouy','Grand-Rozoy','Grand-Verly','Grandlup-et-Fay','Grandrieux'
              ,'Gricourt','Grisolles','Gronard','Grougis','Grugies','Guise','Guivry','Guny','Guyencourt','Hannapes','Happencourt','Haramont','Harcigny','Hargicourt','Harly','Hartennes-et-Taux','Hary','Hautevesnes'
              ,'Hauteville','Haution','Hinacourt','Hirson','Holnon','Homblières','Houry','Housset','Iron','Itancourt','Iviers','Jaulgonne','Jeancourt','Jeantes','Joncourt','Jouaignes','Jumencourt','Jumigny','Jussy','Juvigny','Juvincourt-et-Damary','L\'Épine-aux-Bois','La Bouteille','La Capelle','La Chapelle-sur-Chézy'
              ,'La Croix-sur-Ourcq','La Fère','La Ferté-Chevresis','La Ferté-Milon','La Flamengrie','La Hérie','La Malmaison','La Neuville-Bosmont','La Neuville-en-Beine','La Neuville-Housset','La Neuville-lès-Dorengt','La Selve','La Vallée-au-Blé','La Vallée-Mulâtre','La Ville-aux-Bois-lès-Dizy','La Ville-aux-Bois-lès-Pontavert','Laffaux','Laigny','Lanchy','Landifay-et-Bertaignemont','Landouzy-la-Cour','Landouzy-la-Ville','Landricourt','Laniscourt','Laon','Lappion','Largny-sur-Automne'
              ,'Latilly','Launoy','Laval-en-Laonnois','Lavaqueresse','Laversine','Le Catelet','Le Charmel','Le Hérie-la-Viéville','Le Nouvion-en-Thiérache','Le Plessier-Huleu','Le Sourd','Le Thuel','Le Verguier','Lehaucourt','Lemé','Lempire','Lerzy','Les Autels','Les Septvallons','Leschelle','Lesdins','Lesges','Lesquielles-Saint-Germain','Leuilly-sous-Coucy','Leury','Leuze','Levergies','Lhuys','Licy-Clignon','Lierval','Liesse-Notre-Dame','Liez','Limé','Lislet','Logny-lès-Aubenton'
              ,'Longpont','Lor','Louâtre','Loupeigne','Lucy-le-Bocage','Lugny','Luzoir','Ly-Fontaine','Maast-et-Violaine','Mâchecourt','Macogny','Macquigny','Magny-la-Fosse','Maissemy','Maizy','Malzy','Manicamp','Marchais'
              ,'Marcy','Marcy-sous-Marle','Marest-Dampcourt','Mareuil-en-Dôle','Marfontaine','Margival','Marigny-en-Orxois','Marizy-Saint-Mard','Marizy-Sainte-Geneviève','Marle','Marly-Gomont','Martigny','Martigny-Courpierre','Mauregny-en-Haye','Mayot','Mennessis','Mennevret','Mercin-et-Vaux'
              ,'Merlieux-et-Fouquerolles','Mesbrecourt-Richecourt','Mesnil-Saint-Laurent','Meurival','Mézières-sur-Oise','Mézy-Moulins','Missy-aux-Bois','Missy-lès\'ont','Missy-sur-Aisne','Molain','Molinchart','Monampteuil'
              ,'Monceau-le-Neuf-et-Faucouzy','Monceau-le-Waast','Monceau-lès-Leups','Monceau-sur-Oise','Mondrepuis','Monnes','Mons-en-Laonnois','Mont-d\'Origny','Mont-Notre-Dame','Mont-Saint-Jean','Mont-Saint-Martin'
              ,'Mont-Saint-Père','Montaigu','Montbavin','Montbrehain','Montchâlons','Montcornet','Montescourt-Lizerolles','Montfaucon','Montgobert','Montgru-Saint-Hilaire','Monthenault','Monthiers','Monthurel','Montigny-en-Arrouaise','Montigny-l\'Allier','Montigny-le-Franc','Montigny-Lengrain','Montigny-lès-Condé'
              ,'Montigny-sous-Marle','Montigny-sur-Crécy','Montlevon','Montloué','Montreuil-aux-Lions','Morcourt','Morgny-en-Thiérache','Morsain','Mortefontaine','Mortiers','Moulins','Moussy-Verneuil','Moÿ-de-l\'Aisne','Muret-et-Crouttes','Muscourt','Nampcelles-la-Cour','Nampteuil-sous-Muret','Nanteuil-la-Fosse','Nanteuil-Notre-Dame','Nauroy','Nesles-la-Montagne','Neufchâtel-sur-Aisne','Neuflieux','Neuilly-Saint-Front'
              ,'Neuve-Maison','Neuville-Saint-Amand','Neuville-sur-Ailette','Neuville-sur Margival','Neuvillette','Nizy-le-Comte','Nogent-l\'Artaud','Nogentel','Noircourt','Noroy-sur-Ourcq','Nouvion-et-Catillon','Nouvion-le-Comte','Nouvion-le-Vineu','Nouvron-Vingré','Noyales','Noyant-et-Aconin','Ognes','Ohis','Oigny-en-Valois','Oisy','Ollezy','Omissy','Orainville','Orgeval','Origny-en-Thiérache','Origny-Sainte-Benoite','Osly-Courtil'
              ,'Ostel','Oulches-la-Vallée-Foulon','Oulchy-la-Ville','Oulchy-le-Château','Paars','Paissy','Pancy-Courtecon','Papleux','Parcy-et-Tigny','Parfondeval','Parfondru','Pargnan','Pargny-Filain','Pargny-la-Dhuys','Pargny-les-Bois','Parpeville','Pasly','Passy-en-Valois','Passy-sur-Marne','Pavant','Pernant','Petit-Verly','Pierremande','Pierrepont','Pignicourt'
              ,'Pinon','Pithon','Pleine-Selve','Ploisy','Plomion','Ployart-et-Vaurseine','Pommiers','Pont-Arcy','Pont-Saint-Mard','Pontavert','Pontru','Pontruet','Pouilly-sur-Serre','Prémont','Prémontré','Presles-et-oves','Presles-et-Thierny','Priez','Prisces','Proisy','Proix','Prouvais','Proviseux-et-Plesnoy','Puiseux-en-Retz','Puisieux-et-Clanlieu','Quierzy','Quincy-Basse','Quincy-sous-le-Mont','Raillimont','Ramicourt','Regny','Remaucourt','Remies','Remigny'
              ,'Renansart','Renneval','Résigny','Ressons-le-Long','Retheuil','Reuilly-Sauvigny','Rbeauville','Ribemont','Rocourt-Saint-Martin','Rocquigny','Rogécourt','Rogny','Romeny-sur-Marne','Romery','Ronchères','Roucy','Rougeries','Roupy','Rouvroy','Rouvroy-sur-Serre','Royaucourt-et-Chailvet','Rozet-Saint-Albin','Rozières-sur-Crise','Rozoy-Bellevalle','Rozoy-sur-Serre','aconin-et-Breuil'
              ,'Sains-Richaumont','Saint-Algis','Saint-Aubin','Saint-Bandry','Saint-Christophe-à-Berry','Saint-Clément','Saint-Erme-Outre-et-Ramecourt','Saint-Eugène','Saint-Gengoulph','Saint-Gobain','Sain-Gobert','Saint-Mard','Saint-Martin-Rivière','Saint-Michel','Saint-Nicolas-aux-Bois','Saint-Paul-aux-Bois','Saint-Pierre-Aigle','Saint-Pierre-lès-Franqueville','Saint-Pierremont','Saint-Quentin','Saint-Rémy-Blanzy','Saint-Simon'
              ,'Saint-Thibaut','Saint-Thomas','Sainte-Croix','Sainte-Geneviève','Sainte-Preuve','Samoussy','Sancy-les-Cheminots','Saponay','Saulchery','Savy','Seboncourt','Selens','Septmonts','Septvaux','Sequehart','Serain','Seraucourt-le-Grand','Serches','Sergy','Seringes-et-Nesles','Sermoise','Servais','Serval','Séry-lès-Mézières','Silly-la-Poterie'
              ,'Sinceny','Sissonne','Sissy','Soissons','Soize','Sommelans','Sommeron','Sommette-Eaucourt','Sons-et-Ronchères','Sorbais','Soucy','Soupir','Surfontaine','Taillefontaine','Tannières','Tartiers','Tavaux-et-Pontséricourt','Tergnier','Terny-Sorny','Thenailles','Thenelles','Thiernu','Torcy-en-Valois','Toulis-et-Attencourt','Travecy','Trefcon','Trélou-sur-Marne','Troësnes','Trosly-Loire'
              ,'Trucy','Tugny-','Tupigny','Ugny-le-Gay','Urcel','Urvillers','Vadencourt','Vailly-sur-Aisne','Vallées en Champagne','Variscourt','Vassens','Vasseny','Vassogne','Vaucelles-et-Beffecourt','Vaudesson','Vaux-Andigny','Vaux-en-Vermandois','Vauxaillon','Vauxbuin','Vauxrezis','Vauxtin','Vendelles','Vendeuil','Vendhuile','Vendières',
              'Vendresse-Beaulne','Véné','Venizel','Verdilly','Vermand','Verneuil-sous-Coucy','Verneuil-sur-Serre','Versigny','Vervins','Vesles-et-Caumont','Veslud','Veuilly-la-Poterie','Vézaponin','Vézilly','Vic-sur-Aisne','Vichel-Nanteuil','Viel-Arcy','Viels-Maisons','Vierzy','Viffort','Vigneux-Hocquet','Ville-Savoye','Villemontoire','Villeneuve-Saint-Germain','Villeneuve-sur-Aisne'
              ,'Villeneuve-sur-Fère','Villequier','Villeret','Villers-Agron-Aiguizy','Villers-Cotterêts','Villers-Hélon','Villers-le-Sec','Villers-lès-Guise','Villers-Saint-Christophe','Villers-sur-Fère','Villiers-Saint-Denis','Vincy-Reuil-et-Magny','Viry-Noureuil','Vivaise','Vivières','Voharies','Vorges','Voulpaix','Voyenne','Vregny','Vuillery','Wassigny','Watigny','Wiège-Faty','Wimy','Wissignicourt','woeuilly'),

              #ville du departement de l'alier 03 compts 317 ville
              2 => array('Abrest','Agonges','Ainay-le-Château','Andelaroche','Archignat','Arfeuilles','Arpheuilles-Saint-Priest','Arronnes','Aubigny','Audes','Aurouër','Autry-Issards','Avermes','Avrilly','Bagneux','Barberier','Barrais-Bussolles','Bayet','Beaulon','Beaune-d\'Allier','Bègues','Bellenaves','Bellerive-sur-Allier'
              ,'Bert','Bessay-sur-Allier','Besson','Bézenet','Billezois','Billy','Biozat','Bizeneuille','Blomard','Bost','Boucé','Bourbon l\'archambault','Braize','Bransat','Bresnay','Bressolles','Broût-Vernet','Brugheas','Busset','Buxières-les-Mines','Cérilly','Cesset','Chambérat','Chamblet'
              ,'Chantelle','Chapeau','Chappes','Chareil-Cintrat','Charmeil','Charmes','Charroux','Chassenard','Château-sur-Allier','Châtel-de-Neuvre','Châtel-Montagne','Châtelperron','Châtelus','Châtillon','Chavenon','Chavroches','Chazemais','Chemilly','Chevagnes','Chezelle','Chézy','Chirat-l\'Église','Chouvigny','Cindré'
              ,'Cognat-Lyonne','Colombier','Commentry','Contigny','Cosne-d\'Allier','Coulandon','Coulanges','Couleuvre','Courçais','Coutansouze','Couzon','Créchy','Cressanges','Creuzier-le-Neuf'
              ,'Creuzier-le-Vieux','Cusset','Deneuille-lès-Chantelle','Deneuille-les-Mines','Désertines','Deux-Chaises','Diou','Domérat','Dompierre-sur-Besbre','Doyet','Droiturier','Durdat-Larequille','Ébreuil','Échassières','Escurolles','Espinasse-Vozelle','Estivareilles','Étroussat','Ferrières-sur-Sichon','Fleuriel','Fourilles','Franchesse','Gannat'
              ,'Gannay-sur-Loire','Garnat-sur-Engièvre','Gennetines','Gipcy','Gouise','Haut-Bocage','Hauterive','Hérisson','Huriel','Hyds','Isle-et-Bardais','Isserpent','Jaligny-sur-Besbre','Jenzat','La Celle','La Chabanne','La Chapelaude','La Chapelle','La Chapelle-aux-Chasses','La Ferté-Hauterive','La Guillermie','La Petite-Marche','Laféline'
              ,'Lalizolle','Lamaids','Langy','Lapalisse','Laprugne','Lavault-Sainte-Anne','Lavoine','Le Bouchaud','Le Brethon','Le Breuil','Le Donjon','Le Mayet-d\'École','Le Mayet-de-Montagne','Le Montet','Le Pin','Le Theil','Le Vernet','Le Veurdre','Le Vilhain','Lenax','Lételon','Liernolles','Lignerolles','Limoise'
              ,'Loddes','Loriges','Louchy-Montfand','Louroux-Bourbonnais','Louroux-de-Beaune','Louroux-de-Bouble','Luneau','Lurcy-Lévis','Lusigny','Magnet','Malicorne','Marcenat','Marcillat-en-Combraille','Marigny','Mariol','Mazerier','Mazirat','Meaulne-Vitray','Meillard','Meillers','Mercy','Mesples','Molinet','Molles','Monestier','Monétay-sur-Allier'
              ,'Monétay-sur-Loire','Montaigu-le-Blin','Montaiguët-en-Forez','Montbeugny','Montcombroux-les-Mines','Monteignet-sur-l\'Andelot','Montilly','Montluçon','Montmarault','Montoldre','Montord','Montvicq','Moulins','Murat','Nades','Nassigny','Naves','Néris-les-Bains','Neuilly-en-Donjon','Neuilly-le-Réal','Neure','Neuvy','Nizerolles','Noyant-d\'Allier'
              ,'Paray-le-Frésil','Paray-sous-Briailles','Périgny','Pierrefitte-sur-Loire','Poëzat','Pouzy-Mésangy','Prémilhat','Quinssaines','Reugny','Rocles','Rongères','Ronnet','Saint-Angel','Saint-Aubin-le-Monial','Saint-Bonnet-de-Four','Saint-Bonnet-de-Rochefort','Saint-Bonnet-Tronçais','Saint-Caprais','Saint-Christophe','Saint-Clément','Saint-Désiré'
              ,'Saint-Didier-en-Donjo','Saint-Didier-la-Forêt','Saint-Éloy-d\'Allier','Saint-Ennemond','Saint-Étienne-de-Vicq','Saint-Fargeol','Saint-Félix','Saint-Genest','Saint-Gérand-de-Vaux','Saint-Gérand-le-Puy','Saint-Germain-de-Salles','Saint-Germain-des-Fossés','Saint-Hilaire','Saint-Léger-sur-Vouzance','Saint-Léon','Saint-Léopardin-d\'Augy','Saint-Loup'
              ,'Saint-Marcel-en-Marcillat','Saint-Marcel-en-Murat','Saint-Martin-des-Lais','Saint-Martinien','Saint-Menoux','Saint-Nicolas-des-Biefs','Saint-Palais','Saint-Pierre-Laval','Saint-Plaisir','Saint-Pont','Saint-Pourçain-sur-Besbre','Saint-Pourçain-sur-Sioule','Saint-Priest-d\'Andelot','Saint-Priest-en-Murat','Saint-Prix','Saint-Rémy-en-Rollat','Saint-Sauvier'
              ,'Saint-Sornin','Saint-Victor','Saint-Voir','Saint-Yorre','Sainte-Thérence','Saligny-sur-Roudon','Sanssat','Saulcet','Saulzet','Sauvagny','Sazeret','Serbannes','Servilly','Seuillet','Sorbier','Souvigny','Sussat','Target','Taxat-Senat','Teillet-Argenty','Terjat','Theneuille','Thiel-sur-Acolin','Thionne','Tortezais','Toulon-sur-Allier','Treban'
              ,'Treignat','Treteau','Trévol','Trézelles','Tronget','Urçay','Ussel-d\'Allier','Valignat','Valigny','Vallon-en-Sully','Varennes-sur-Allier','Varennes-sur-Tèche','Vaumas','Vaux','Veauce','Venas','Vendat','Verneix','Verneuil-en-Bourbonnais','Vernusse','Vichy','Vicq','Vieure','Villebret'
              ,'Villefranche-d\'Allier','Villeneuve-sur-Allier','Viplaix','Voussac','Ygrande','Yzeure'),

              #ville du departement de l'alier 04 compts 198 ville
              3 => array('Aiglun','Allemagne-en-Provence','Allons','Allos','Angles','Annot','Archail','Aubenas-les-Alpes','Aubignosc','Authon','Auzet','Banon','Barcelonnette','Barles','Barras','Barrême','Bayons','Beaujeu','Beauvezer','Bellaffaire','Bevons','Beynes','Blieux'
              ,'Bras-d\'Asse','Braux','Brunet','Castellane','Castellet-lès-Sausses','Céreste','Champtercier','Château-Arnoux-Saint-Auban','Châteaufort','Châteauneuf-Miravail','Châteauneuf-Val-Saint-Donat','Châteauredon','Chaudon-Norante','Clamensane','Claret','Clumanc','Colmars','Corbières-en-Provence','Cruis','Curbans','Curel','Dauphin','Demandolx','Digne-les-Bains'
              ,'Draix','Enchastrayes','Entrages','Entrepierres','Entrevaux','Entrevennes','Esparron-de-Verdon','Estoublon','Faucon-de-Barcelonnette','Faucon-du-Caire','Fontienne','Forcalquier','Ganagobie','Gigors','Gréoux-les-Bains','Hautes-Duyes','Jausiers','L\'Escale','L\'Hospitalet','La Brillanne','La Condamine-Châtelard'
              ,'La Garde','La Javie','La Motte-du-Caire','La Mure-Argens','La Palud-sur-Verdon','La Robine-sur-Galabre','La Rochegiron','La Rochette','Lambruisse','Lardiers','Le Brusquet','Le Caire','Le Castellard-Mélan','Le Castellet','Le Chaffaut-Saint-Jurson','Le Fugeret','Le Lauzet-Ubaye','Le Vernet','Les Mées','Les Omergues','Les Thuiles','Limans','Lurs'
              ,'Majastres','Malijai','Mallefougasse-Augès','Mallemoisson','Mane','Manosque','Marcoux','Méailles','Melve','Méolans-Revel','Mézel','Mirabeau','Mison','Montagnac-Montpezat','Montclar','Montfort','Montfuron','Montjustin','Montlaux','Montsalier','Moriez','Moustiers-Sainte-Marie','Nibles','Niozelles','Noyers-sur-Jabron','Ongles','Oppedette','Oraison'
              ,'Peipin','Peyroules','Peyruis','Piégut','Pierrerue','Pierrevert','Pontis','Prads-Haute-Bléone','Puimichel','Puimoisson','Quinson','Redortiers','Reillanne','Revest-des-Brousses','Revest-du-Bion','Revest-Saint-Martin','Riez','Rougon','Roumoules','Saint-André-les-Alpes','Saint-Benoît','Saint-Étienne-les-Orgues','Saint-Geniez','Saint-Jacques','Saint-Jeannet'
              ,'Saint-Julien-d\'Asse','Saint-Julien-du-Verdon','Saint-Jurs','Saint-Laurent-du-Verdon','Saint-Lions','Saint-Maime','Saint-Martin-de-Brômes','Saint-Martin-les-Eaux','Saint-Martin-lès-Seyne','Saint-Michel-l\'Observatoire','Saint-Paul-sur-Ubaye','Saint-Pierre','Saint-Pons','Saint-Vincent-sur-Jabron','Sainte-Croix-à-Lauze','Sainte-Croix-du-Verdon','Sainte-Tulle'
              ,'Salignac','Saumane','Sausses','Selonnet','Senez','Seyne','Sigonce','Sigoyer','Simiane-la-Rotonde','Sisteron','Soleilhas','Sourribes','Tartonne','Thèze','Thoard','Thorame-Basse','Thorame-Haute','Turriers','Ubaye-Serre-Ponçon','Ubraye','Uvernet-Fours','Vachères','Val d\'Oronaye','Val-de-Chalvagne'
              ,'Valavoire','Valbelle','Valensole','Valernes','Vaumeilh','Venterol','Verdaches','Vergons','Villars-Colmars','Villemus','Villeneuve','Volonne','Volx'),

              #ville du departement des Hautes-Alpes 05 compts 162 ville
              4 => array(
                'Abriès-Ristolas','Aiguilles','Ancelle','Arvieux','Aspremont','Aspres-lès-Corps','Aspres-sur-Buëch','Aubessagne','Avançon','Baratier','Barcillonnette','Barret-sur-Méouge','Bréziers','Briançon','Buissard','Ceillac','Cervières','Chabestan','Chabottes','Champcella','Champoléon','Chanousse','Château-Ville-Vieille','Châteauneuf-d\'Oze'
                ,'Châteauroux-les-Alpes','Châteauvieux','Chorges','Crévoux','Crots','Dévoluy','Embrun','Éourres','Esparron','Espinasses','Étoile-Saint-Cyrice','Eygliers','Forest-Saint-Julien','Fouillouse','Freissinières','Furmeyer','Gap','Garde-Colombe','Guillestre','Jarjayes','L\'Argentière-la-Bessée','L\'Épine','La Bâtie-Montsaléon','La Bâtie-Neuve','La Bâtie-Vieille','La Beaume','La Chapelle-en-Valgaudémar'
                ,'La Fare-en-Champsaur','La Faurie','La Freissinouse','La Grave','La Haute-Beaume','La Motte-en-Champsaur','La Piarre','La Roche-de-Rame','La Roche-des-Arnauds','La Rochette','La Salle-les-Alpes','La Saulce','Laragne-Montéglin','Lardier-et-Valença','Laye','Lazer','Le Bersac','Le Glaizil','Le Monêtier-les-Bains','Le Noyer','Le Poët','Le Saix','Le Sauze-du-Lac','Les Orres','Les Vigneaux','Lettret'
                ,'Manteyer','Méreuil','Molines-en-Queyras','Monêtier-Allemont','Mont-Dauphin','Montbrand','Montclus','Montgardin','Montgenèvre','Montjay','Montmaur','Montrond','Moydans','Neffes','Névache','Nossage-et-Bénévent','Orcières','Orpierre','Oze','Pelleautier','Poligny','Prunières','Puy-Saint-André','Puy-Saint-Eusèbe','Puy-Saint-Pierre','Puy-Saint-Vincent','Puy-Sanières','Rabou','Rambaud','Réallon'
                ,'Remollon','Réotier','Ribeyret','Risoul','Rochebrune','Rosans','Rousset','Saint-André-d\'Embrun','Saint-André-de-Rosans','Saint-Apollinaire','Saint-Auban-d\'Oze','Saint-Bonnet-en-Champsaur','Saint-Chaffrey','Saint-Clément-sur-Durance','Saint-Crépin','Saint-Étienne-le-Laus','Saint-Firmin','Saint-Jacques-en-Valgodemard','Saint-Jean-Saint-Nicolas','Saint-Julien-en-Beauchêne'
                ,'Saint-Julien-en-Champsaur','Saint-Laurent-du-Cros','Saint-Léger-les-Mélèzes','Saint-Martin-de-Queyrières','Saint-Maurice-en-Valgodemard','Saint-Michel-de-Chaillol','Saint-Pierre-Avez','Saint-Pierre-d\'Argençon','Saint-Sauveur'
                ,'Saint-Véran','Sainte-Colombe','Saléon','Salérans','Savines-le-Lac','Savournon','Serres','Sigottier','Sigoyer','Sorbiers','Tallard','Théus','Trescléoux','Upaix','Val Buëch-Méouge','Val-des-Prés','Valdoule','Vallouise-Pelvoux'
                ,'Valserres','Vars','Ventavon','Veynes','Villar-d\'Arêne','Villar-Loubière','Villar-Saint-Pancrace','Vitrolles'),

              #ville du departement des Alpes-Maritimes 06 compts 163 ville
              5 => array('Aiglun','Amirat','Andon','Antibes','Ascros','Aspremont','Auribeau-sur-Siagne','Auvare','Bairols','Beaulieu-sur-Mer','Beausoleil','Belvédère','Bendejun','Berre-les-Alpes','Beuil','Bézaudun-les-Alpes','Biot','Blausasc','Bonson','Bouyon','Breil-sur-Roya','Briançonnet','Cabris'
                  ,'Cagnes-sur-Mer','Caille','Cannes','Cantaron','Cap-d\'Ail','Carros','Castagniers','Castellar','Castillon','Caussols','Châteauneuf-d\'Entraunes','Châteauneuf-Grasse','Châteauneuf-Villevieille','Cipières','Clans','Coaraze','Collongues','Colomars','Conségudes','Contes','Courmes','Coursegoules','Cuébris','Daluis','Drap','Duranus'
                  ,'Entraunes','Escragnolles','Èze','Falicon','Fontan','Gars','Gattières','Gilette','Gorbio','Gourdon','Grasse','Gréolières','Guillaumes','Ilonse','Isola','L\'Escarène','La Bollène-Vésubie','La Brigue','La Colle-sur-Loup','La Croix-sur-Roudoule','La Gaude','La Penne','La Roque-en-Provence','La Roquette-sur-Siagne'
                  ,'La Roquette-sur-Var','La Tour','La Trinité','La Turbie','Lantosque','Le Bar-sur-Loup','Le Broc','Le Cannet'
                ,'Le Mas','Le Rouret','Le Tignet','Les Ferres','Les Mujouls','Levens','Lieuche','Lucéram','Malaussène','Mandelieu-la-Napoule','Marie','Massoins','Menton','Mouans-Sartoux','Mougins','Moulinet','Nice','Opio','Pégomas','Peille','Peillon','Péone','Peymeinade','Pierlas','Pierrefeu','Puget-Rostang','Puget-Théniers'
                ,'Revest-les-Roches','Rigaud','Rimplas','Roquebillière','Roquebrune-Cap-Martin','Roquefort-les-Pins','Roquestéron','Roubion','Roure','Saint-André-de-la-Roche','Saint-Antonin','Saint-Auban','Saint-Blaise','Saint-Cézaire-sur-Siagne','Saint-Dalmas-le-Selvage','Saint-Étienne-de-Tinée','Saint-Jean-Cap-Ferrat'
                ,'Saint-Jeannet','Saint-Laurent-du-Var','Saint-Léger','Saint-Martin-d\'Entraunes','Saint-Martin-du Var','Saint-Martin-Vésubie','Saint-Paul-de-Vence','Saint-Sauveur-sur-Tinée','Saint-Vallier-de-Thiey'
                ,'Sainte-Agnès','Sallagriffon','Saorge','Sauze','Séranon','Sigale','Sospel','Spéracèdes','Tende','Théoule-sur-Mer','Thiéry','Toudon','Touët-de-l\'Escarène','Touët-sur-Var','Tourette-du-Château','Tournefort','Tourrette-Levens','Tourrettes-sur-Loup','Utelle','Valbonne','Valdeblore','Valderoure','Vallauris','Venanson'
                ,'Vence','Villars-sur-Var','Villefranche-sur-Mer','Villeneuve-d\'Entraunes','Villeneuve-Loubet'
              ),

                #ville du departement des l'Ardèche 07 compts 335 ville
              6 => array(
                'Accons','Ailhon','Aizac','Ajoux','Alba-la-Romaine','Albon-d\'Ardèche','Alboussière','Alissas','Andance','Annonay','Arcens','Ardoix','Arlebosc','Arras-sur-Rhône','Astet','Aubenas','Aubignas','Baix','Balazuc','Banne','Barnas','Beauchastel','Beaulieu','Beaumont'
                ,'Beauvène','Belsentes','Berrias-et-Casteljau','Berzème','Bessas','Bidon','Boffres','Bogy','Borée','Borne','Boucieu-le-Roi','Boulieu-lès-Annonay','Bourg-Saint-Andéol','Bozas','Brossainc','Burzet','Cellier-du-Luc','Chalencon','Chambonas','Champagne','Champis','Chandolas','Chanéac'
                ,'Charmes-sur-Rhône','Charnas','Chassiers','Châteaubourg','Châteauneuf-de-Vernoux','Chauzon','Chazeaux','Cheminas','Chirols','Chomérac','Colombier-le-Cardinal','Colombier-le-Jeune','Colombier-le-Vieux','Cornas','Coucouron','Coux','Creysseilles','Cros-de-Géorand','Cruas','Darbres'
                ,'Davézieux','Désaignes','Devesset','Dompnac','Dornas','Dunière-sur-Eyrieux','Eclassan','Empurany','Étables','Fabras','Faugères','Félines','Flaviac','Fons','Freyssenet','Genestelle','Gilhac-et-Bruzac'
                ,'Gilhoc-sur-Ormèze','Gluiras','Glun','Gourdon','Gras','Gravières','Grospierres','Guilherand-Granges','Issamoulenc','Issanlas','Issarlès','Jaujac','Jaunac','Joannas','Joyeuse','Juvinas','La Rochette'
                ,'La Souche','La Voulte-sur-Rhône','Labastide-de-Virac','Labastide-sur-Bésorgues','Labatie-d\'Andaure','Labeaume','Labégude','Lablachère','Laboule','Lachamp-Raphaël','Lachapelle-Graillouse','Lachapelle-sous-Aubenas','Lachapelle-sous-Chanéac','Lafarre','Lagorce'
                ,'Lalevade-d\'Ardèche','Lalouvesc','Lamastre','Lanarce','Lanas','Largentière','Larnas','Laurac-en-Vivarais','Laveyrune','Lavillatte','Lavilledieu','Laviolle','Le Béage','Le Chambon','Le Cheylard','Le Crestet','Le Lac-d\'Issarlès','Le Plagnal','Le Pouzin'
                ,'Le Roux','Le Teil','Lemps','Lentillères','Les Assions','Les Ollières-sur-Eyrieux','Les Salelles','Les Vans','Lespéron','Limony','Loubaresse','Lussas','Lyas','Malarce-sur-la-Thines','Malbosc','Marcols-les-Eaux','Mariac','Mars','Mauves','Mayres','Mazan-l\'Abbaye','Mercuer'
                ,'Meyras','Meysse','Mézilhac','Mirabel','Monestier','Montpezat-sous-Bauzon','Montréal','Montselgues','Nozières','Orgnac-l\'Aven','Ozon','Pailharès','Payzac','Peaugres','Péreyres','Peyraud','Planzolles','Plats','Pont-de-Labeaume','Pourchères','Prades','Pradons','Pranles','Préaux'
                ,'Privas','Prunet','Quintenas','Ribes','Rochecolombe','Rochemaure','Rochepaule','Rocher','Rochessauve','Rocles','Roiffieux','Rompon','Rosières','Ruoms','Sablières','Sagnes-et-Goudoulet','Saint-Agrève','Saint-Alban-Auriolles','Saint-Alban-d\'Ay','Saint-Alban-en-Montagne'
                ,'Saint-Andéol-de-Berg','Saint-Andéol-de-Fourchades','Saint-Andéol-de-Vals','Saint-André-de-Cruzières','Saint-André-en-Vivarais','Saint-André-Lachamp','Saint-Apollinaire-de-Rias','Saint-Barthélemy-Grozon','Saint-Barthélemy-le-Meil','Saint-Barthélemy-le-Plain','Saint-Basile'
                ,'Saint-Bauzile','Saint-Christol','Saint-Cierge-la-Serre','Saint-Cierge-sous-le-Cheylard','Saint-Cirgues-de-Prades','Saint-Cirgues-en-Montagne','Saint-Clair','Saint-Clément','Saint-Cyr','Saint-Désirat','Saint-Didier-sous-Aubenas','Saint-Étienne-de-Boulogne','Saint-Étienne-de-Fontbellon'
                ,'Saint-Étienne-de-Lugdarès','Saint-Étienne-de-Serre','Saint-Étienne-de-Valoux','Saint-Félicien','Saint-Fortunat-sur-Eyrieux','Saint-Genest-de-Beauzon','Saint-Genest-Lachamp','Saint-Georges-les-Bains','Saint-Germain','Saint-Gineis-en-Coiron','Saint-Jacques-d\'Atticieux','Saint-Jean-Chambre'
                ,'Saint-Jean-de-Muzols','Saint-Jean-le-Centenier','Saint-Jean-Roure','Saint-Jeure-d\'Andaure','Saint-Jeure-d\'Ay','Saint-Joseph-des-Bancs','Saint-Julien-d\'Intres','Saint-Julien-du-Gua','Saint-Julien-du-Serre','Saint-Julien-en-Saint-Alba','Saint-Julien-le-Roux','Saint-Julien-Vocance'
                ,'Saint-Just-d\'Ardèche','Saint-Lager-Bressac','Saint-Laurent-du-Pape','Saint-Laurent-les-Bains-Laval-d\'Aurelle','Saint-Laurent-sous-Coiron','Saint-Marcel-d\'Ardèche','Saint-Marcel-lès-Annonay','Saint-Martial','Saint-Martin-d\'Ardèche','Saint-Martin-de-Valamas','Saint-Martin-sur-Lavezon'
                ,'Saint-Maurice-d\'Ardèche','Saint-Maurice-d\'Ibie','Saint-Maurice-en-Chalencon','Saint-Mélany','Saint-Michel-d\'Aurance','Saint-Michel-de-Boulogne','Saint-Michel-de-Chabrillanoux','Saint-Montan','Saint-Paul-le-Jeune','Saint-Péray','Saint-Pierre-de-Colombier','Saint-Pierre-la-Roche'
                ,'Saint-Pierre-Saint-Jean','Saint-Pierre-sur-Doux','Saint-Pierreville','Saint-Pons','Saint-Priest','Saint-Privat','Saint-Prix','Saint-Remèze','Saint-Romain-d\'Ay','Saint-Romain-de-Lerps','Saint-Sauveur-de-Cruzières','Saint-Sauveur-de-Montagut','Saint-Sernin','Saint-Sylvestre'
                ,'Saint-Symphorien-de-Mahun','Saint-Symphorien-sous-Chomérac','Saint-Thomé','Saint-Victor','Saint-Vincent-de-Barrès','Saint-Vincent-de-Durfort','Sainte-Eulalie','Sainte-Marguerite-Lafigère','Salavas','Sampzon','Sanilhac','Sarras','Satillieu','Savas','Sceautres','Sécheras'
                ,'Serrières','Silhac','Soyons','Talencieux','Tauriers','Thorrenc','Thueyts','Toulaud','Tournon-sur-Rhône','Ucel','Usclades-et-Rieutord','Uzer','Vagnas','Valgorge','Vallées-d\'Antraigues-Asperjoc','Vallon-Pont-d\'Arc','Vals-les-Bains','Valvignères','Vanosc','Vaudevant','Vernon'
                ,'Vernosc-lès-Annonay','Vernoux-en-Vivarais','Vesseaux','Veyras','Villeneuve-de-Berg','Villevocance','Vinezac','Vinzieux','Vion','Viviers','Vocance','Vogüé' ),

                  #ville du departement des Ardennes 08 compts 449 ville
              7 => array(
               'Acy-Romance','Aiglemont','Aire','Alincourt','Alland\'Huy-et-Sausseuil','Amagne','Ambly-Fleury','Anchamps','Angecourt','Annelles','Antheny','Aouste','Apremont','Ardeuil-et-Montfauxelles','Arnicourt','Arreux','Artaise-le-Vivier','Asfeld','Attigny','Aubigny-les-Pothées','Auboncourt-Vauzelles','Aubrives','Auflance','Auge'
               ,'Aure','Aussonce','Authe','Autrecourt-et-Pourron','Autruche','Autry','Auvillers-les-Forges','Avançon','Avaux','Baâlons'
              ,'Bairon-et-ses-environs','Balan','Balham','Ballay','Banogne-Recouvrance','Bar-lès-Buzancy','Barbaise','Barby','Bayonville','Bazeilles','Beaumont-en-Argonne','Beffu-et-le-Morthomme'
              ,'Belleville-et-Châtillon-sur-Bar','Belval','Belval-Bois-des-Dames','Bergnicourt','Bertoncourt','Biermes','Bièvres','Bignicourt','Blagny','Blanchefosse-et-Bay','Blanzy-la-Salonnaise'
              ,'Blombay','Bogny-sur-Meuse','Bossus-lès-Rumigny','Bouconville','Boult-aux-Bois','Boulzicourt','Bourcq'
              ,'Bourg-Fidèle','Bouvellemont','Brécy-Brières','Brévilly','Brienne-sur-Aisne','Brieulles-sur-Bar','Briquenay','Brognon','Bulson','Buzancy','Carignan','Cauroy','Cernion','Chagny','Chalandry-Elaire','Challerange'
              ,'Champigneul-sur-Vence','Champigneulle','Champlin','Chappes','Charbogne','Chardeny','Charleville-Mézières','Charnois','Château-Porcien','Chatel-Chéhéry','Chaumont-Porcien','Chémery-Chéhéry','Chesnois-Auboncourt'
              ,'Cheveuges','Chevières','Chilly','Chooz','Chuffilly-Roche','Clavy-Warby','Cliron','Condé-lès-Autry','Condé-lès-Herpy','Contreuve','Cornay','Corny-Machéroménil','Coucy','Coulommes-et-Marqueny','Daigny','Damouzy'
              ,'Deville','Dom-le-Mesnil','Dommery','Donchery','Doumely-Bégny','Doux','Douzy','Draize','Dricourt','Écly','Écordal','Escombres-et-le-Chesnois','Estrebay','Étalle','Éteignières','Étrépigny','Euilly-et-Lombut','Évigny'
              ,'Exermont','Fagnon','Faissault','Falaise','Faux','Fépin','Flaignes-Havys','Fleigneux','Fléville','Fligny','Flize','Floing','Foisches','Fossé','Fraillicourt','Francheval','Fromelennes','Fromy','Fumay','Germont','Gernelle'
              ,'Gespunsart','Girondelle','Givet','Givonne','Givron','Givry','Glaire','Gomont','Grandchamp','Grandham','Grandpré','Grivy-Loisy','Gruyères','Gué-d\'Hossus','Guignicourt-sur-Vence','Guincourt'
              ,'Hagnicourt','Ham-les-Moines','Ham-sur-Meuse','Hannappes','Hannogne-Saint-Martin','Hannogne-Saint-Rémy','Haraucourt','Harcy','Hargnies','Harricourt','Haudrecy','Haulmé','Hauteville','Hauviné','Haybes','Herbeuval','Herpy-l\'Arlésienne','Hierges','Houdilcourt','Houldizy'
              ,'Illy','Imécourt','Inaumont','Issancourt-et-Rumel','Jandun','Joigny-sur-Meuse','Jonval','Juniville','Justine-Herbigny','L\'Écaille','L\'Échelle','La Berlière','La Besace','La Chapelle','La Croix-aux-Bois','La Férée','La Ferté-sur-Chiers','La Francheville','La Grandville','La Horgne'
              ,'La Moncelle','La Neuville-à-Maire','La Neuville-aux-Joûtes','La Neuville-en-Tourne-à-Fuy','La Neuville-lès-Wasigny','La Romagne','La Sabotterie','Laifour','Lalobbe','Lametz','Lançon','Landres-et-Saint-Georges','Landrichamps','Launois-sur-Vence','Laval-Morency','Le Châtelet-sur-Retourne','Le Châtelet-sur-Sormonne','Le Fréty','Le Mont-Dieu','Le Thour','Leffincourt','Lépron-les-Vallées','Les Ayvelles','Les Deux-Villes','Les Grandes-Armoises','Les Hautes-Rivières','Les Mazures'
              ,'Les Petites-Armoises','Létanne','Liart','Linay','Liry','Logny-Bogny','Longwé','Lonny','Lucquy','Lumes','Machault','Maisoncelle-et-Villers','Malandry','Manre','Maranwez','Marby','Marcq','Margny','Margut','Marlemont','Marquigny','Mars-sous-Bourcq','Marvaux-Vieux','Matton-et-Clémency','Maubert-Fontaine','Mazerny','Ménil-Annelles','Ménil-Lépinois','Mesmont','Messincourt','Mogues','Moiry','Mondigny','Mont-Laurent','Mont-Saint-Martin'
              ,'Mont-Saint-Remy','Montcheutin','Montcornet','Montcy-Notre-Dame','Montgon','Monthermé','Monthois','Montigny-sur-Meuse','Montigny-sur-Vence','Montmeillant','Mouron','Mouzon','Murtin-et-Bogny','Nanteuil-sur-Aisne','Neuflize','Neufmaison','Neufmanil','Neuville-Day','Neuville-lès-This','Neuville-lez-Beaulieu','Neuvizy','Noirval','Nouart','Nouvion-sur-Meuse','Nouzonville','Novion-Porcien','Novy-Chevrières','Noyers-Pont-Maugis','Oches'
              ,'Olizy-Primat','Omicourt','Omont','Osnes','Pauvres','Perthes','Poilcourt-Sydney','Poix-Terron','Pouru-aux-Bois','Pouru-Saint-Remy','Prez','Prix-lès-Mézières','Puilly-et-Charbeaux','Puiseux','Pure','Quatre-Champs','Quilly','Raillicourt','Rancennes','Raucourt-et-Flaba','Regniowez','Remaucourt','Remilly-Aillicourt','Remilly-les-Pothées','Renneville','Renwez'
              ,'Rethel','Revin','Rilly-sur-Aisne','Rimogne','Rocquigny','Rocroi','Roizy','Rouvroy-sur-Audry','Rubigny','Rumigny','Sachy','Sailly','Saint-Aignan','Saint-Clément-à-Arnes','Saint-Étienne-à-Arnes','Saint-Fergeux','Saint-Germainmont','Saint-Jean-aux-Bois','Saint-Juvin','Saint-Lambert-et-Mont-de-Jeux','Saint-Laurent','Saint-Loup-en-Champagne','Saint-Loup-Terrier','Saint-Marceau','Saint-Marcel','Saint-Menges','Saint-Morel'
              ,'Saint-Pierre-à-Arnes','Saint-Pierre-sur-Vence','SaintPierremont','Saint-Quentin-le-Petit','Saint-Remy-le-Petit'
              ,'Sainte-Marie','Sainte-Vaubourg','Sapogne-et-Feuchères','Sapogne-sur-Marche','Saulces-Champenoises','Saulces-Monclin','Sault-lès-Rethel','Sault-Saint-Remy','Sauville','Savigny-sur-Aisne','Séchault','Sécheval','Sedan','Semide','Semuy','Senuc','Seraincourt','Sery','Seuil','Sévigny-la-Forêt','Sévigny-Waleppe','Signy-l\'Abbaye','Signy-le-Petit','Signy-Montlibert'
              ,'Singly','Sommauthe','Sommerance','Son','Sorbon','Sorcy-Bauthémont','Sormonne','Stonne','Sugny','Sury','Suzanne','Sy','Tagnon','Taillette','Tailly','Taizy','Tannay','Tarzy','Tétaigne','Thelonne','Thénorgues','Thilay','Thin-le-Moutier','This','Thugny-Trugny','Toges','Touligny','Tourcelles-Chaumont','Tournavaux','Tournes','Tourteron','Tremblois-lès-Carignan','Tremblois-lès-Rocroi','Vandy','Vaux-Champagne','Vaux-en-Dieulet','Vaux-lès-Mouron','Vaux-lès-Mouzon'
              ,'Vaux-lès-Rubigny','Vaux-Montreuil','Vaux-Villaine','Vendresse','Verpel','Verrières','Viel-Saint-Remy','Vieux-lès-Asfeld','Ville-sur-Lumes','Ville-sur-Retourne','Villers-devant-le-Thour','Villers-devant-Mouzon','Villers-le-Tilleul','Villers-le-Tourneur','Villers-Semeuse','Villers-sur-Bar','Villers-sur-le-Mont','Villy','Vireux-Molhain','Vireux-Wallerand','Vivier-au-Court','Voncq','Vouziers','Vrigne aux Bois','Vrigne-Meuse'
              ,'Wadelincourt','Wagnon','Warcq','Warnécourt','Wasigny','Wignicourt','Williers','Yoncq','Yvernaumont'),

              #ville du departement de l'Ariège 09 compts 327 ville
              8 => array(
                'Aigues-Juntes','Aigues-Vives','Albiès','Aleu','Alliat','Allières','Alos','Alzen','Antras','Appy','Arabaux','Argein','Arignac','Arnave','Arrien-en-Bethmale','Arrout','Artigat','Artigues','Artix','Arvigna','Ascou','Aston','Aucazein','Audressein','Augirein'
                ,'Aulos-Sinsat','Aulus-les-Bains','Auzat','Ax-les-Thermes','Axiat','Bagert','Balacet','Balaguères','Barjac','Baulou','Bédeilhac-et-Aynat','Bédeille','Bélesta','Belloc','Bénac','Benagues','Bénaix'
                ,'Besset','Bestiac','Betchat','Bethmale','Bézac','Biert','Bompas','Bonac-Irazein','Bonnac','Bordes-Uchentein','Bouan','Boussenac','Brassac','Brie','Burret','Buzan','Cadarcet','Calzan','Camarade'
                ,'Camon','Campagne-sur-Arize','Canté','Capoulet-et-Junac','Carcanières','Carla-Bayle','Carla-de-Roquefort','Castelnau-Durban','Castéras','Castex','Castillon-en-Couserans','Caumont','Caussou','Caychax'
                ,'Cazals-des-Baylès','Cazaux','Cazavet','Cazenave-Serres-et-Allens','Celles','Cérizols','Cescau','Château-Verdun','Clermont','Contrazy','Cos','Couflens','Coussa','Coutens','Crampagna','Dalou'
                ,'Daumazan-sur-Arize','Dreuilhe','Dun','Durban-sur-Arize','Durfort','Encourtiech','Engomer','Ercé','Erp','Esclagne','Escosse','Esplas','Esplas-de-Sérou','Eycheil','Fabas','Ferrières-sur-Ariège'
                ,'Foix','Fornex','Fougax-et-Barrineuf','Freychenet','Gabre','Gajan','Galey','Ganac','Garanou','Gaudiès','Génat','Gestiès','Gourbit','Gudas','Ignaux','Ilhat','Illartein','Illier-et-Laramade','Justiniac'
                ,'L\'Aiguillon','L\'Herm','L\'Hospitalet-près-l\'Andorre','La Bastide-de-Besplas','La Bastide-de-Bousignac','La Bastide-de-Lordat','La Bastide-de-Sérou','La Bastide-du-Salat','La Bastide-sur-l\'Hers'
                ,'La Tour-du-Crieu','Labatut','Lacave','Lacourt','Lagarde','Lanoux','Lapège','Lapenne','Larbont','Larcat','Larnat','Laroque-d\'Olmes','Lasserre','Lassur','Lavelanet','Le Bosc','Le Carlaret','Le Fossat'
                ,'Le Mas-d\'Azil','Le Peyrat','Le Pla','Le Port','Le Puch','Le Vernet','Léran','Lercoul','Les Bordes-sur-Arize','Les Cabannes','Les Issards','Les Pujols','Lescousse','Lescure','Lesparrou','Leychert'
                ,'Lézat-sur-Lèze','Lieurac','Limbrassac','Lissac','Lordat','Lorp-Sentaraille','Loubaut','Loubens','Loubières','Ludiès','Luzenac','Madière','Malegoude','Malléon','Manses','Massat','Mauvezin-de-Prat','Mauvezin-de-Sainte-Croix'
                ,'Mazères','Méras','Mercenac','Mercus-Garrabet','Mérens-les-Vals','Mérigon','Miglos','Mijanès','Mirepoix','Monesple','Montagagne','Montaillou','Montardit','Montaut','Montbel','Montégut-en-Couserans','Montégut-Plantaurel'
                ,'Montels','Montesquieu-Avantès','Montfa','Montferrier','Montgaillard','Montgauch','Montjoie-en-Couserans','Montoulieu','Montségur','Montseron','Moulin-Neuf','Moulis','Nalzen','Nescus','Niaux','Orgeix','Orgibet','Orlu'
                ,'Ornolac-Ussat-les-Bains','Orus','Oust','Pailhès','Pamiers','Pech','Péreille','Perles-et-Castelet','Prades','Pradettes','Pradières','Prat-Bonrepaux','Prayols','Quérigut','Quié','Rabat-les-Trois-Seigneurs','Raissac'
                ,'Régat','Rieucros','Rieux-de-Pelleport','Rimont','Rivèrenert','Roquefixade','Roquefort-les-Cascades','Roumengoux','Rouze','Sabarat','Saint-Amadou','Saint-Amans','Saint-Bauzeil','Saint-Félix-de-Rieutord'
                ,'Saint-Félix-de-Tournegat','Saint-Girons','Saint-Jean-d\'Aigues-Vives','Saint-Jean-de-Verges','Saint-Jean-du-Castillonnais','Saint-Jean-du-Falga','Saint-Julien-de-Gras-Capou','Saint-Lary','Saint-Lizier'
                ,'Saint-Martin-d\'Oydes','Saint-Martin-de-Caralp','Saint-Michel','Saint-Paul-de-Jarrat','Saint-Pierre-de-Rivière','Saint-Quentin-la-Tour','Saint-Quirc','Saint-Victor-Rouzaud','Saint-Ybars','Sainte-Croix-Volvestre'
                ,'Sainte-Foi','Sainte-Suzanne','Salsein','Saurat','Sautel','Saverdun','Savignac-les-Ormeaux','Ségura','Seix','Senconac','Sentein','Sentenac-d\'Oust','Sentenac-de-Sérou','Serres-sur-Arget','Sieuras','Siguer','Sor'
                ,'Sorgeat','Soueix-Rogalle','Soula','Soulan','Surba','Suzan','Tabre','Tarascon-sur-Ariège','Taurignan-Castet','Taurignan-Vieux','Teilhet','Thouars-sur-Arize','Tignac','Tourtouse','Tourtrol','Trémoulet'
                ,'Troye-d\'Ariège','Unac','Unzent','Urs','Ussat','Ustou','Val-de-Sos','Vals','Varilhes','Vaychis','Vèbre','Ventenac','Verdun','Vernajoul','Vernaux','Verniolle','Villeneuve','Villeneuve-d\'Olmes','Villeneuve-du-Latou'
                ,'Villeneuve-du-Paréage','Vira','Viviès'),

              #ville du departement de l'Aube 10 compts 431 ville
              9 => array(
                'Ailleville','Aix-Villemaur-Pâlis','Allibaudières','Amance','Arcis-sur-Aube','Arconville','Argançon','Arrelles','Arrembécourt','Arrentières','Arsonval','Assenay','Assencières','Aubeterre','Aulnay','Auxon','Avant-lès-Marcilly','Avant-lès-Ramerupt','Avirey-Lingey','Avon-la-Pèze','Avreuil','Bagneux-la-Fosse','Bailly-le-Franc','Balignicourt','Balnot-la-Grange'
                ,'Balnot-sur-Laignes','Bar-sur-Aube','Bar-sur-Seine','Barberey-Saint-Sulpice','Barbuise','Baroville','Bayel','Bercenay-en-Othe','Bercenay-le-Hayer','Bergères','Bernon','Bertignolles','Bérulle','Bessy','Bétignicourt','Beurey','Blaincourt-sur-Aube','Blignicourt','Bligny','Bossancourt','Bouilly','Boulages','Bouranton','Bourdenay','Bourguignons'
                ,'Bouy-Luxembourg','Bouy-sur-Orvin','Bragelogne-Beauvoir','Braux','Bréviandes','Brévonnes','Briel-sur-Barse','Brienne-la-Vieille','Brienne-le-Château','Brillecourt','Bucey-en-Othe','Buchères','Buxeuil','Buxières-sur-Arce','Celles-sur-Ource','Chacenay','Chalette-sur-Voire','Chamoy','Champ-sur-Barse','Champfleury','Champignol-lez-Mondeville'
                ,'Champigny-sur-Aube','Channes','Chaource','Chapelle-Vallon','Chappes','Charmont-sous-Barbuise','Charmoy','Charny-le-Bachot','Chaserey','Châtres','Chauchigny','Chaudrey','Chauffour-lès-Bailly','Chaumesnil','Chavanges','Chennegy','Chervey','Chesley','Chessy-les-Prés','Clérey','Coclois','Colombé-la-Fosse','Colombé-le-Sec','Cormost','Courcelles-sur-Voire'
                ,'Courceroy','Coursan-en-Othe','Courtaoult','Courtenot','Courteranges','Courteron','Coussegrey','Couvignon','Crancey','Creney-près-Troyes','Crésantignes','Crespy-le-Neuf','Cunfin','Cussangy','Dampierre','Davrey','Dienville','Dierrey-Saint-Julien','Dierrey-Saint-Pierre','Dolancourt','Dommartin-le-Coq','Donnement','Dosches','Dosnon','Droupt-Saint-Basle'
                ,'Droupt-Sainte-Marie','Eaux-Puiseaux','Échemines','Éclance','Éguilly-sous-Bois','Engente','Épagne','Épothémont','Ervy-le-Châtel','Essoyes','Estissac','Étourvy','Étrelles-sur-Aube','Faux-Villecerf','Fay-lès-Marcilly','Fays-la-Chapelle','Ferreux-Quincey','Feuges','Fontaine','Fontaine-les-Grès','Fontaine-Mâcon','Fontenay-de-Bossery','Fontette','Fontvannes'
                ,'Fouchères','Fralignes','Fravaux','Fresnay','Fresnoy-le-Château','Fuligny','Gélannes','Géraudot','Grandville','Gumery','Gyé-sur-Seine','Hampigny','Herbisse','Isle-Aubigny','Isle-Aumont','Jasseines','Jaucourt','Javernant','Jessains','Jeugny','Joncreuil','Jully-sur-Sarce','Juvancourt','Juvanzé','Juzanvigny','La Chaise','La Chapelle-Saint-Luc'
                ,'La Fosse-Corduan','La Loge-aux-Chèvres','La Loge-Pomblin','La Louptière-Thénard','La Motte-Tilly','La Rivière-de-Corps','La Rothière','La Saulsotte','La Vendue-Mignot','La Ville-aux-Bois','La Villeneuve-au-Châtelot','La Villeneuve-au-Chêne','Lagesse','Laines-aux-Bois','Landreville','Lantages','Lassicourt','Laubressel','Lavau','Le Chêne'
                ,'Le Mériot','Le Pavillon-Sainte-Julie','Lentilles','Les Bordes-Aumont','Les Croûtes','Les Grandes-Chapelles','Les Granges','Les Loges-Margueron','Les Noës-près-Troyes','Les Riceys','Lesmont','Lévigny','Lhuître','Lignières','Lignol-le-Château','Lirey','Loches-sur-Ource','Longchamp-sur-Aujon','Longeville-sur-Mogne','Longpré-le-Sec','Longsols'
                ,'Longueville-sur-Aube','Lusigny-sur-Barse','Luyères','Macey','Machy','Magnant','Magnicourt','Magny-Fouchard','Mailly-le-Camp','Maison-des-Champs','Maisons-lès-Chaource','Maisons-lès-Soulaines','Maizières-la-Grande-Paroisse','Maizières-lès-Brienne','Maraye-en-Othe','Marcilly-le-Hayer','Marigny-le-Châtel','Marnay-sur-Seine','Marolles-lès-Bailly'
                ,'Marolles-sous-Lignières','Mathaux','Maupas','Mergey','Merrey-sur-Arce','Méry-sur-Seine','Mesgrigny','Mesnil-la-Comtesse','Mesnil-Lettre','Mesnil-Saint-Loup','Mesnil-Saint-Père','Mesnil-Sellières','Messon','Metz-Robert','Meurville','Molins-sur-Aube','Montaulin','Montceaux-lès-Vaudes'
                ,'Montfey','Montgueux','Montier-en-l\'Isle','Montiéramey','Montigny-les-Monts','Montmartin-le-Haut','Montmorency-Beaufort','Montpothier','Montreuil-sur-Barse','Montsuzain','Morembert','Morvilliers','Moussey','Mussy-sur-Seine','Neuville-sur-Seine','Neuville-sur-Vanne','Noé-les-Mallets','Nogent-en-Othe','Nogent-sur-Aube','Nogent-sur-Seine'
                ,'Nozay','Onjon','Origny-le-Sec','Ormes','Ortillon','Orvilliers-Saint-Julien','Ossey-les-Trois-Maisons','Paisy-Cosdon','Pargues','Pars-lès-Chavanges','Pars-lès-Romilly','Payns','Pel-et-Der','Périgny-la-Rose','Perthes-lès-Brienne','Petit-Mesnil','Piney','Plaines-Saint-Lange','Plancy-l\'Abbaye','Planty','Plessis-Barbuise','Poivres','Poligny'
                ,'Polisot','Polisy','Pont-Sainte-Marie','Pont-sur-Seine','Pouan-les-Vallées','Pougy','Pouy-sur-Vannes','Praslin','Précy-Notre-Dame','Précy-Saint-Martin','Prémierfait','Proverville','Prugny','Prunay-Belleville','Prusy','Puits-et-Nuisement','Racines','Radonvilliers','Ramerupt','Rances','Rhèges','Rigny-la-Nonneuse','Rigny-le-Ferron','Rilly-Sainte-Syre'
                ,'Romilly-sur-Seine','Roncenay','Rosières-près-Troyes','Rosnay-l\'Hôpital','Rouilly-Sacey','Rouilly-Saint-Loup','Rouvres-les-Vignes','Rumilly-lès-Vaudes','Ruvigny','Saint-André-les-Vergers','Saint-Aubin','Saint-Benoist-sur-Vanne','Saint-Benoît-sur-Seine','Saint-Christophe-Dodinicourt','Saint-Étienne-sous-Barbuise','Saint-Flavy'
                ,'Saint-Germain','Saint-Hilaire-sous-Romilly','Saint-Jean-de-Bonneval','Saint-Julien-les-Villas','Saint-Léger-près-Troyes','Saint-Léger-sous-Brienne','Saint-Léger-sous-Margerie','Saint-Loup-de-Buffigny','Saint-Lupien','Saint-Lyé','Saint-Mards-en-Othe','Saint-Martin-de-Bossenay'
                ,'Saint-Mesmin','Saint-Nabord-sur-Aube','Saint-Nicolas-la-Chapelle','Saint-Oulph','Saint-Parres-aux-Tertres','Saint-Parres-lès-Vaudes','Saint-Phal','Saint-Pouange','Saint-Remy-sous-Barbuise','Saint-Thibault','Saint-Usage','Sainte-Maure','Sainte-Savine','Salon','Saulcy','Savières','Semoine','Soligny-les-Étangs','Sommeval'
                ,'Soulaines-Dhuys','Souligny','Spoy','Thennelières','Thieffrain','Thil','Thors','Torcy-le-Grand','Torcy-le-Petit','Torvilliers','Traînel','Trancault','Trannes','Trouans','Troyes','Turgy','Unienville','Urville','Vailly','Val-d\'Auzon','Vallant-Saint-Georges','Vallentigny','Vallières','Vanlay'
                ,'Vauchassis','Vauchonvilliers','Vaucogne','Vaudes','Vaupoisson','Vendeuvre-sur-Barse','Vernonvilliers','Verpillières-sur-Ource','Verricourt','Verrières','Viâpres-le-Petit','Villacerf','Villadin','Ville-sous-la-Ferté','Ville-sur-Arce','Ville-sur-Terre','Villechétif','Villeloup','Villemereuil','Villemoiron-en-Othe','Villemorien'
                ,'Villemoyenne','Villenauxe-la-Grande','Villeneuve-au-Chemin','Villeret','Villery','Villette-sur-Aube','Villiers-Herbisse','Villiers-le-Bois','Villiers-sous-Praslin','Villy-en-Trodes','Villy-le-Bois','Villy-le-Maréchal','Vinets','Virey-sous-Bar','Vitry-le-Croisé'
                ,'Viviers-sur-Artaut','Voigny','Vosnon','Voué','Vougrey','Vulaines','Yèvres-le-Petit' ),

            #ville du departement de l'Aude 11 compts 433 ville
             10 => array(
               'Aigues-Vives','Airoux','Ajac','Alaigne','Alairac','Albas','Albières','Alet-les-Bains','Alzonne','Antugnac','Aragon','Argeliers','Argens-Minervois','Armissan','Arques','Arquettes-en-Val','Artigues','Arzens','Aunat','Auriac','Axat','Azille','Badens','Bages','Bagnoles'
               ,'Baraigne','Barbaira','Belcaire','Belcastel-et-Buc','Belflou','Belfort-sur-Rebenty','Bellegarde-du-Razès','Belpech','Belvèze-du-Razès','Belvianes-et-Cavirac','Belvis','Berriac','Bessède-de-Sault','Bizanet','Bize-Minervois','Blomac','Bouilhonnac','Bouisse','Bouriège'
               ,'Bourigeole','Boutenac','Bram','Brézilhac','Brousses-et-Villaret','Brugairolles','Bugarach','Cabrespine','Cahuzac','Cailhau','Cailhavel','Cailla','Cambieure','Campagna-de-Sault','Campagne-sur-Aude','Camplong-d\'Aude','Camps-sur-l\'Agly','Camurac','Canet','Capendu'
               ,'Carcassonne','Carlipa','Cascastel-des-Corbières','Cassaignes','Castans','Castelnau-d\'Aude','Castelnaudary','Castelreng','Caudebronde','Caunes-Minervois','Caunette-sur-Lauquet','Caunettes-en-Val','Caux-et-Sauzens','Cavanac','Caves','Cazalrenoux','Cazilhac','Cenne-Monestiés'
               ,'Cépie','Chalabre','Citou','Clermont-sur-Lauquet','Comigne','Comus','Conilhac-Corbières','Conques-sur-Orbiel','Corbières','Coudons','Couffoulens','Couiza','Counozouls','Cournanel','Coursan','Courtauly','Coustaussa','Coustouge','Cruscades','Cubières-sur-Cinoble','Cucugnan'
               ,'Cumiès','Cuxac-Cabardès','Cuxac-d\'Aude','Davejean','Dernacueillette','Donazac','Douzens','Duilhac-sous-Peyrepertuse','Durban-Corbières','Embres-et-Castelmaure','Escales','Escouloubre','Escueillens-et-Saint-Just-de-Bélengard','Espéraza','Espezel','Fabrezan','Fajac-en-Val'
               ,'Fajac-la-Relenque','Fanjeaux','Félines-Termenès','Fendeille','Fenouillet-du-Razès','Ferrals-les-Corbières','Ferran','Festes-et-Saint-André','Feuilla','Fitou','Fleury','Floure','Fontanès-de-Sault','Fontcouverte','Fonters-du-Razès','Fontiers-Cabardès','Fontiès-d\'Aude','Fontjoncouse'
               ,'Fournes-Cabardès','Fourtou','Fraisse-Cabardès','Fraissé-des-Corbières','Gaja-et-Villedieu','Gaja-la-Selve','Galinagues','Gardie','Generville','Gincla','Ginestas','Ginoles','Gourvieille','Gramazie','Granès','Greffeil','Gruissan','Homps','Hounoux','Issel','Jonquières','Joucou','La Bezole'
               ,'La Cassaigne','La Courtète','La Digne-d\'Amont','La Digne-d\'Aval','La Fajolle','La Force','La Louvière-Lauragais','La Palme','La Pomarède','La Redorte','La Serpent','La Tourette-Cabardès','Labastide-d\'Anjou','Labastide-en-Val','Labastide-Esparbairenque','Labécède-Lauragais','Lacombe'
               ,'Ladern-sur-Lauquet','Lafage','Lagrasse','Lairière','Lanet','Laprade','Laroque-de-Fa','Lasbordes','Lasserre-de-Prouille','Lastours','Laurabuc','Laurac','Lauraguel','Laure-Minervois','Lavalette','Le Bousquet','Le Clat','Les Brunels','Les Cassés','Les Ilhes','Les Martys','Lespinassière'
               ,'Leuc','Leucate','Lézignan-Corbières','Lignairolles','Limousis','Limoux','Loupia','Luc-sur-Aude','Luc-sur-Orbieu','Magrie','Mailhac','Maisons','Malras','Malves-en-Minervois','Malviès','Marcorignan','Marquein','Marsa','Marseillette','Mas-Cabardès','Mas-des-Cours','Mas-Saintes-Puelles'
               ,'Massac','Mayreville','Mayronnes','Mazerolles-du-Razès','Mazuby','Mérial','Mézerville','Miraval-Cabardès','Mirepeisset','Mireval-Lauragais','Missègre','Molandier','Molleville','Montauriol','Montazels','Montbrun-des-Corbières','Montclar','Montferrand','Montfort-sur-Boulzane','Montgaillard'
               ,'Montgradail','Monthaut','Montirat','Montjardin','Montjoi','Montmaur','Montolieu','Montréal','Montredon-des-Corbières','Montséret','Monze','Moussan','Moussoulens','Mouthoumet','Moux','Narbonne','Nébias','Névian','Niort-de-Sault','Ornaisons','Orsans','Ouveillan','Padern','Palairac','Palaja'
               ,'Paraza','Pauligne','Payra-sur-l\'Hers','Paziols','Pech-Luna','Pécharic-et-le-Py','Pennautier','Pépieux','Pexiora','Peyrefitte-du-Razès','Peyrefitte-sur-l\'Hers','Peyrens','Peyriac-de-Mer','Peyriac-Minervois','Peyrolles','Pezens','Pieusse','Plaigne','Plavilla','Pomas','Pomy','Port-la-Nouvelle'
               ,'Portel-des-Corbières','Pouzols-Minervois','Pradelles-Cabardès','Preixan','Puginier','Puichéric','Puilaurens','Puivert','Quillan','Quintillan','Quirbajou','Raissac-d\'Aude','Raissac-sur-Lampy','Rennes-le-Château','Rennes-les-Bains','Ribaute','Ribouisse','Ricaud','Rieux-en-Val','Rieux-Minervois','Rivel'
               ,'Rodome','Roquecourbe-Minervois','Roquefère','Roquefeuil','Roquefort-de-Sault','Roquefort-des-Corbières','Roquetaillade-et-Conilhac','Roubia','Rouffiac-d\'Aude','Rouffiac-des-Corbières','Roullens','Routier','Rustiques','Saint-Amans','Saint-André-de-Roquelongue','Saint-Benoît','Saint-Couat-d\'Aude'
               ,'Saint-Couat-du-Razès','Saint-Denis','Saint-Ferriol','Saint-Frichoux','Saint-Gaudéric','Saint-Hilaire','Saint-Jean-de-Barrou','Saint-Jean-de-Paracol','Saint-Julia-de-Bec','Saint-Julien-de-Briola','Saint-Just-et-le-Bézu','Saint-Laurent-de-la-Cabrerisse','Saint-Louis-et-Parahou','Saint-Marcel-sur-Aude'
               ,'Saint-Martin-de-Villereglan','Saint-Martin-des-Puits','Saint-Martin-Lalande','Saint-Martin-le-Vieil','Saint-Martin-Lys','Saint-Michel-de-Lanès','Saint-Nazaire-d\'Aude','Saint-Papoul','Saint-Paulet','Saint-Pierre-des-Champs','Saint-Polycarpe','Saint-Sernin','Sainte-Camelle','Sainte-Colombe-sur-Guette'
               ,'Sainte-Colombe-sur-l\'Hers','Sainte-Eulalie','Sainte-Valière','Saissac','Sallèles-Cabardès','Sallèles-d\'Aude','Salles-d\'Aude','Salles-sur-l\'Hers','Salsigne','Salvezines','Salza','Seignalens','Serres','Serviès-en-Val','Sigean','Sonnac-sur-l\'Hers','Sougraigne','Souilhanels','Souilhe','Soulatgé','Soupex'
               ,'Talairan','Taurize','Termes','Terroles','Thézan-des-Corbières','Tournissan','Tourouzelle','Tourreilles','Trassanel','Trausse','Trèbes','Treilles','Tréville','Tréziers','Tuchan','Val de Lambronne','Val-de-Dagne','Val-du-Faby','Valmigère','Ventenac-Cabardès','Ventenac-en-Minervois','Véraza','Verdun-en-Lauragais'
               ,'Verzeille','Vignevieille','Villalier','Villanière','Villar-en-Val','Villar-Saint-Anselme','Villardebelle','Villardonnel','Villarzel-Cabardès','Villarzel-du-Razès','Villasavary','Villautou','Villebazy','Villedaigne','Villedubert','Villefloure','Villefort','Villegailhenc','Villegly','Villelongue-d\'Aude','Villemagne'
               ,'Villemoustaussou','Villeneuve-la-Comptal','Villeneuve-les-Corbières','Villeneuve-lès-Montréal','Villeneuve-Minervois','Villepinte','Villerouge-Termenès','Villesèque-des-Corbières'
               ,'Villesèquelande','Villesiscle','Villespy','Villetritouls','Vinassan'),

            #ville du departement de l'Aveyron 12 compts 000 ville
             11 => array(
               'Agen-d\'Aveyron','Aguessac','Almont-les-Junies','Alrance','Ambeyrac','Anglars-Saint-Félix','Argences en Aubrac','Arnac-sur-Dourdou','Arques','Arvieu','Asprières','Aubin','Auriac-Lagast','Auzits','Ayssènes','Balaguier-d\'Olt','Balaguier-sur-Rance','Baraqueville','Belcastel','Belmont-sur-Rance','Bertholène','Bessuéjouls','Boisse-Penchot','Bor-et-Bar'
               ,'Bouillac','Bournazel','Boussac','Bozouls','Brandonnet','Brasc','Brommat','Broquiès','Brousse-le-Château','Brusque','Cabanès','Calmels-et-le-Viala','Calmont','Camarès','Camboulazet','Camjac','Campagnac','Campouriez','Campuac','Canet-de-Salars','Cantoin','Capdenac-Gare','Cassagnes-Bégonhès','Cassuéjouls','Castanet','Castelmary','Castelnau-de-Mandailles'
               ,'Castelnau-Pégayrols','Causse-et-Diège','Centrès','Clairvaux-d\'Aveyron','Colombiès','Combret','Compeyre','Compolibat','Comprégnac','Comps-la-Grand-Ville','Condom-d\'Aubrac','Connac','Conques-en-Rouergue','Cornus','Coubisou','Coupiac','Cransac','Creissels','Crespin','Curan','Curières','Decazeville','Druelle Balsac','Drulhe','Durenque','Entraygues-sur-Truyère'
               ,'Escandolières','Espalion','Espeyrac','Estaing','Fayet','Firmi','Flagnac','Flavin','Florentin-la-Capelle','Foissac','Fondamente','Gabriac','Gaillac-d\'Aveyron','Galgan','Gissac','Golinhac','Goutrens','Gramond','Huparlac','L'Hospitalet-du-Larzac','La Bastide-Pradines','La Bastide-Solages','La Capelle-Balaguier','La Capelle-Bleys','La Capelle-Bonance','La Cavalerie','La Couvertoirade','La Cresse','La Fouillade','La Loubière','La Roque-Sainte-Marguerite','La Rouquette','La Salvetat-Peyralès','La Selve','La Serre','Lacroix-Barrez','Laguiole','Laissac-Sévérac l'Église','Lanuéjouls','Lapanouse-de-Cernon','Lassouts','Laval-Roquecezière','Le Bas Ségala','Le Cayrol','Le Clapier','Le Fel','Le Monastère','Le Nayrac','Le Truel','Le Vibal','Lédergues','Les Albres','Les Costes-Gozon','Lescure-Jaoul','Lestrade-et-Thouels','Livinhac-le-Haut','Luc-la-Primaube','Lugan','Lunac','Maleville','Manhac','Marcillac-Vallon','Marnhagues-et-Latour','Martiel','Martrin','Mayran','Mélagues','Meljac','Millau','Montagnol','Montbazens','Montclar','Monteils','Montézic','Montfranc','Montjaux','Montlaur','Montpeyroux','Montrozier','Montsalès','Morlhon-le-Haut','Mostuéjouls','Mounes-Prohencoux','Mouret','Moyrazès','Mur-de-Barrez','Murasson','Muret-le-Château','Murols','Najac','Nant','Naucelle','Naussac','Nauviale','Olemps','Ols-et-Rinhodes','Onet-le-Château','Palmas d'Aveyron','Paulhe','Peux-et-Couffouleux','Peyreleau','Peyrusse-le-Roc','Pierrefiche','Plaisance','Pomayrols','Pont-de-Salars','Pousthomy','Prades-d'Aubrac','Prades-Salars','Pradinas','Prévinquières','Privezac','Pruines','Quins','Rebourguil','Réquista','Rieupeyroux','Rignac','Rivière-sur-Tarn','Rodelle','Rodez','Roquefort-sur-Soulzon','Roussennac','Rullac-Saint-Cirq','Saint Geniez d'Olt et d'Aubrac','Saint-Affrique','Saint-Amans-des-Cots','Saint-André-de-Najac','Saint-André-de-Vézines','Saint-Beaulize','Saint-Beauzély','Saint-Chély-d'Aubrac','Saint-Christophe-Vallon','Saint-Côme-d'Olt','Saint-Félix-de-Lunel','Saint-Félix-de-Sorgues','Saint-Georges-de-Luzençon','Saint-Hippolyte','Saint-Igest','Saint-Izaire','Saint-Jean-d'Alcapiès','Saint-Jean-Delnous','Saint-Jean-du-Bruel','Saint-Jean-et-Saint-Paul','Saint-Juéry','Saint-Just-sur-Viaur','Saint-Laurent-d'Olt','Saint-Laurent-de-Lévézou','Saint-Léons','Saint-Martin-de-Lenne','Saint-Parthem','Saint-Rémy','Saint-Rome-de-Cernon','Saint-Rome-de-Tarn','Saint-Santin','Saint-Saturnin-de-Lenne','Saint-Sernin-sur-Rance','Saint-Sever-du-Moustier','Saint-Symphorien-de-Thénières','Saint-Victor-et-Melvieu','Sainte-Croix','Sainte-Eulalie-d'Olt','Sainte-Eulalie-de-Cernon','Sainte-Juliette-sur-Viaur','Sainte-Radegonde','Salles-Courbatiès','Salles-Curan','Salles-la-Source','Salmiech','Salvagnac-Cajarc','Sanvensa','Sauclières','Saujac','Sauveterre-de-Rouergue','Savignac','Sébazac-Concourès','Sébrazac','Ségur','Sénergues','Sévérac d'Aveyron','Sonnac','Soulages-Bonneval','Sylvanès','Tauriac-de-Camarès','Tauriac-de-Naucelle','Taussac','Tayrac','Thérondels','Toulonjac','Tournemire','Trémouilles','Vabres-l'Abbaye','Vailhourles','Valady','Valzergues','Vaureilles','Verrières','Versols-et-Lapeyre','Veyreau','Vézins-de-Lévézou','Viala-du-Pas-de-Jaux','Viala-du-Tarn','Villecomtal','Villefranche-de-Panat','Villefranche-de-Rouergue','Villeneuve','Vimenet','Viviez' ),

             #ville du departement ________ 00 compts 000 ville
             12 => array('',),


             13 => array('',),
             14 => array('',),
             15 => array('',),
             16 => array('',),
             17 => array('',),
             18 => array('',),
             19 => array('',),
             20 => array('',),
             21 => array('',),
             22 => array('',),
             23 => array('',),
             24 => array('',),
             25 => array('',),
             26 => array('',),
             27 => array('',),
             28 => array('',),
             29 => array('',),
             30 => array('',),
             31 => array('',),
             32 => array('',),
             33 => array('',),
             34 => array('',),
             35 => array('',),
             36 => array('',),
             37 => array('',),
             38 => array('',),
             39 => array('',),
             40 => array('',),
             41 => array('',),
             42 => array('',),
             43 => array('',),
             44 => array('',),
             45 => array('',),
             46 => array('',),
             47 => array('',),
             48 => array('',),
             49 => array('',),
             50 => array('',),
             51 => array('',),
             52 => array('',),
             53 => array('',),
             54 => array('',),
             55 => array('',),
             56 => array('',),
             57 => array('',),
             58 => array('',),
             59 => array('',),
             60 => array('',),
             61 => array('',),
             62 => array('',),
             63 => array('',),
             64 => array('',),
             65 => array('',),
             66 => array('',),
             67 => array('',),
             68 => array('',),
             69 => array('',),
             70 => array('',),
             71 => array('',),
             72 => array('',),
             73 => array('',),
             74 => array('',),

             #ville du departement de ile de France 75 compts 000 ville
             75 => array('Paris'),

             76 => array('',),
             77 => array('',),
             78 => array('',),
             79 => array('',),
             80 => array('',),
             81 => array('',),
             82 => array('',),
             83 => array('',),
             84 => array('',),
             85 => array('',),
             86 => array('',),
             87 => array('',),
             88 => array('',),
             89 => array('',),
             90 => array('',),
             91 => array('',),
             92 => array('',),
             93 => array('',),
             94 => array('',),
             95 => array('',),

            );

            #echo "les grande ville :" .$departementFR [1][3].': ok <br>';

            #for ($ligne = 0; $ligne < 1 ; $ligne++) {
            #  $membre_no = $ligne+1;
              #echo 'ville de l\'ain '.$membre_no. '<br>';
              #echo '<ol>';

              #for ($col=0; $col < 393 ; $col++) {
                #echo '<li>'. $departementFR[$ligne][$col].'</li>';
              #}
            #  echo '</0l>';
            #}

            var_dump($departementFR);


          ?>

      </main>
    </div>
  </body>
</html>
