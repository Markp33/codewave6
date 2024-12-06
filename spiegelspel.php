<<<<<<< HEAD
<?php include_once __DIR__ . '/components/header.php'; ?>
=======
<?php
include_once __DIR__ . '/components/header.php';
include './src/database/connect.php';

$username = "u220712_focus6";
$password = "SLNUAfScHEMPf3exufw4";
$dbname = "u220712_focus6";
$servername = "localhost";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connection successfull";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    echo json_encode('[{"name":"error","msg":"' . $e->getMessage() . '"}]');
}
$stmt = $conn->prepare("SELECT * FROM cms WHERE page = 'spiegelspel'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
>>>>>>> spiegelspelconcept-php

<head>
    <link href="./src/output.css" rel="stylesheet">
    <link href=" spiegelspel.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<div id="fullpage">
    <!-- Spiegelconcept Section -->

    <div class=" section flex flex-col items-center justify-center bg-gray-50 text-gray-800 px-4 py-10 md:py-20 font-body" id="section">
        <h1 class="text-4xl md:text-5xl italic text-gray-600 text-center pt-12"><?= $result[0]["text"]?></h1>
        <div class="mt-6 md:mt-10 max-w-3xl text-left">
            <p class="text-base font-body md:text-lg mb-4 md:mb-5">
                <?php
                echo $result[1]["text"];
                ?>
            </p>
            <!-- Uitklapbare tekst -->
            <div class="hidden-text">
                <p class="text-base md:text-lg mb-4 md:mb-5">
                    <!-- Je gebruikt de leerpunten die hieruit naar voren komen om je dienstverlening te ontwikkelen. In het Spiegelconcept ligt de focus op teamontwikkeling. Daar vindt de feitelijke dienstverlening immers plaats. Het Spiegelconcept is makkelijk schaalbaar. Daardoor is het concept ook organisatiebreed toepasbaar. -->
                </p>
                <p class="text-base md:text-lg">
                    <!-- Uit ervaring weten we dat de motivatie van professionals wel in orde is. Winst is vooral te behalen als professionals gaan samenwerken aan gedeelde doelen in het team. Daarbij dient het gesprek zich te richten op de prestaties en de kwaliteit van het team. Zo leren de teamleden van elkaar en ontstaat ruimte voor vernieuwing. -->
                </p>
            </div>
            <!-- Lees meer knop -->
            <button class="read-more-btn text-blue-500 font-body">Lees meer</button>
        </div>
    </div>

    <!-- Samen Sturen Section -->
    <div class="section flex flex-col items-center justify-center bg-gray-200 text-gray-800 px-4 py-10 md:py-20" id="section5">
        <h1 class="text-4xl md:text-5xl font-body italic text-gray-600 text-center mb-8"><?= $result[2]["text"]?></h1>
        <div class="flex flex-col md:flex-row items-center max-w-4xl mx-auto gap-6">
            <!-- Placeholder for Image -->
            <div class="flex-shrink-0">
                <img src="<?= $result[3]["image"]?>" alt="Samen Sturen" class="rounded-full shadow-lg w-48 h-48 md:w-64 md:h-64">
            </div>
            <!-- Text Content -->
            <div class="text-base md:text-lg text-gray-700">
                <p class="mb-4">
                    <?= $result[3]["text"]?>
                    <!-- Vanuit een positieve insteek willen wij eraan bijdragen dat teams beter functioneren en plezier beleven in hun werk. De omgeving waarin de teams opereren is complex en cliënten en stakeholders zijn kritisch. -->
                </p>
                <div class="hidden-text">
                    <p>
                        <!-- Van het team vraagt dit daadkracht, professionaliteit en flexibiliteit. Op een praktische en speelse manier helpen we teams om deze dynamiek hanteerbaar te maken. Door als team samen sturing te geven aan deze ontwikkelingen kan zij de dienstverlening daarop aanpassen. Wij noemen dat <strong>Samen Sturen</strong>. -->
                    </p>
                </div>
                <!-- Lees meer knop -->
                <button class="read-more-btn text-blue-500 font-body">Lees meer</button>
            </div>
        </div>
    </div>

    <!-- Aanpak Section -->
    <div class="section bg-gray-50 text-gray-800 flex flex-col items-center justify-center px-4 py-10 md:py-20">
        <h1 class="text-4xl md:text-5xl font-body italic text-gray-600 text-center mb-10"><?= $result[4]["text"]?></h1>
        <div class="flex flex-col md:flex-row gap-6 max-w-5xl mx-auto">
            <!-- Box 1 -->
            <div class="flex-1 bg-white p-6 shadow-lg rounded-md">
                <h2 class="text-xl md:text-2xl font-body text-gray-700 mb-4"><?= $result[5]["text"]?></h2>
                <p>
                    <!-- Om de koers van het team te bepalen starten we door samen met het team een <strong>TeamKompas</strong> te maken.
                    De basis hiervoor zijn de overtuigingen en leidende principes van het team. Het Teamkompas geeft het team koers
                    voor de langere termijn. Vervolgens maken we het teamplan dat zo mogelijk gevoed wordt door (zelf)evaluaties klant-
                    en omgevingsonderzoek. -->
                    <?= $result[6]["text"]?>
                </p>

            </div>
            <!-- Box 2 -->
            <div class="flex-1 bg-white p-6 shadow-lg rounded-md">
                <h2 class="text-xl md:text-2xl font-body text-gray-700 mb-4"><?= $result[7]["text"]?></h2>
                <p>
                    <!-- In het <strong>Teamplan</strong> legt het team de ambities voor de komende jaren vast, door haar doelen te bepalen.
                    Aan deze doelen koppelt het team ‘eigenaren’. Zij dragen zorg voor de realisatie van deze doelen. -->
                    <?= $result[8]["text"]?>
                </p>
                <div class="hidden-text">
                    <p>
                        <!-- Het teamplan wordt gevoed op basis van interne en externe analyses die we samen met het team uitvoeren.
                        In workshops gaat het team zelf aan de slag en met direct resultaat. -->
                    </p>
                    <br>
                    <p>
                        <!-- Het uitgangspunt is dat de teams zelf niets hoeven voor te bereiden en uit te werken. Een coach begeleidt het proces. De teamleden participeren actief en delen kennis en inzichten. Voor de workshops gebruiken we in praktijk ontwikkelde formats en spellen -->
                    </p>
                </div>
                <!-- Lees meer knop -->
                <button class="read-more-btn text-blue-500 font-body">Lees meer</button>
            </div>
            <!-- Box 3 -->
            <div class="flex-1 bg-white p-6 shadow-lg rounded-md">
                <h2 class="text-xl md:text-2xl text-gray-700 mb-4"><?= $result[9]["text"]?></h2>
                <p>
                    <!-- Naast het Team Kompas en het Teamplan staan 4 workshops centraal. In deze workshops helpen we de teams
                    begeleiden om zelf interne en externe analyses uit te voeren op hun werkterrein.Het <strong>Spiegelspel</strong> is een zelfevaluatie (audit) waarbij het team haar eigen functioneren in de vorm
                    van een spel toetst. Daarnaast zijn er analyses gericht op de impact van het werk, met rapportages van
                    sterkte- en verbeterpunten. -->
                    <?= $result[10]["text"]?>
                </p>
            </div>
        </div>
    </div>

    <!-- Implementatie Section -->
    <div class="section bg-gray-200 text-gray-800 flex flex-col items-center justify-center px-4 py-10 md:py-20">
        <h1 class="text-4xl md:text-5xl  italic text-gray-600 text-center mb-12"><?= $result[11]["text"]?></h1>
        <div class="space-y-12 max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-2/3">
                    <p>
                        <!-- Het Spiegelspel kan kleinschalig worden toegepast, bijvoorbeeld voor één team of een aantal pilot teams. Vanuit zo'n kleinschalige startopstelling kan het Spiegelconcept opgeschaald worden naar een organisatiebreed toepassing. -->
                        <?= $result[12]["text"]?>
                    </p>
                    <div class="hidden-text">
                        <p class=" md:text-base mb-4 md">
                            <!-- Zij kan zich hierin door ons laten begeleiden of via een train-de-trainer constructie de implementatie zelf ter hand nemen. Bij een organisatiebrede toepassing van het SpiegelconceptIn doorloop je een vergelijkbare aanpak (als bij de teams) maar dan op concernniveau. De speerpunten van het concern geven dan richting aan de invulling van de teamplannen en de analyse van de teamplannen levert input voor het concernplan, in de vorm van 'rode draden' voor verbetering en ontwikkeling. -->
                        
                        </p>
                    </div>
                    <!-- Lees meer knop -->
                    <button class="read-more-btn text-blue-500 ">Lees meer</button>
                </div>
                <div class="md:w-1/3">
                    <img src="<?= $result[12]["image"]?>" alt="Placeholder afbeelding 1" class="w-full h-auto rounded shadow-lg">
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/3">
                    <img src="<?= $result[13]["image"]?>" alt="Placeholder afbeelding 2" class="w-full h-auto rounded shadow-lg">
                </div>
                <div class="md:w-2/3">
                    <h2 class="text-xl md:text-2xl  text-gray-700 mb-4">Analyse en evaluatie in 3 jaar cyclus</h2>
                    <p>
                        <!-- Jaarlijks maakt het team een nieuw teamplan. De zelfevaluatie en het klantenonderzoek komen jaarlijks terug. De andere analyse & evaluatie instrumenten worden gespreid over 3 jaar uitgevoerd.Eventueel kunnen alternatieve audits of evaluaties worden ingepland. Hiermee kan aangesloten worden op de 3 jarige certificeringscyclus. -->
                        <?= $result[13]["text"]?>
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-2/3">
                    <h2 class="text-xl md:text-2xl  text-gray-700 mb-4">Teamplan cyclus per jaar</h2>
                    <p>
                        <!-- Op teamniveau geeft het team invulling aan 'Samen sturen' middels een wekelijkse 'check-in', een maandelijkse 'check-out' en een 'refresh' per kwartaal. In een weekstart vindt de check-in plaats: het team komt in actie. Bij de check-up kijkt het team hoe de kritische processen lopen en of bijsturing nodig is. Bij de Refresh kijkt het team opnieuw naar het teamplan en bepaalt het team of zij nog de 'goede dingen' doet. -->
                        <?= $result[14]["text"]?> 
                    </p>
                </div>
                <div class="md:w-1/3">
                    <img src="<?= $result[14]["image"]?>" alt="Placeholder afbeelding 3" class="w-full h-auto rounded shadow-lg">
                </div>
            </div>
        </div>
    </div>

    <!-- Borging en certificering Section -->
    <div class="section flex flex-col items-center justify-center bg-gray-100 text-gray-800 px-4 py-10 md:py-20" id="section">
        <h1 class="text-4xl md:text-5xl  italic text-gray-600 text-center mb-8"><?= $result[15]["text"]?></h1>
        <div class="max-w-3xl">
            <p class="text-sm md:text-base mb-4">
                <!-- Indien uw organisatie aan de slag gaat met het Spiegelconcept, kunt u, als u dat wenst, ook voldoen aan de certificeringseisen van de ISO 9001 (of HKZ).
                In de aanpak zijn vele normvereisten geborgd, zoals leiderschap, interne audits en PDCA.Als u reeds een certificaat heeft kan dit naadloos ingepast worden.
                Mocht u nog niet voldoen aan de gestelde vereisten dan kunt u met de Spiegelconcept aanpak gaan voldoen aan de vereisten en uw certificaat behalen. -->
                <?= $result[16]["text"]?>
            </p>
        </div>
    </div>
    <script src="spiegelspel.js"></script>
</div>
<<<<<<< HEAD
<?php include_once __DIR__ . '/components/footer.php'; ?>
=======

<?php include_once '/components/footer.php'; ?>

</body>
>>>>>>> spiegelspelconcept-php
