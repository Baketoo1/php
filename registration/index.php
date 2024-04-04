<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Rezervace Pokoje</h1>

    <form action="takeData.php" method="POST">

        <label for="jmeno">Jméno:</label><br>
        <input type="text" id="jmeno" name="jmeno" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="telefon">Telefon:</label><br>
        <input type="tel" id="telefon" name="telefon" required><br>
        
        <label for="pokoje">Vyberte pokoj:</label><br>
        <select id="pokoje" name="pokoje" multiple required>
            <option value="pokoj1">Pokoj 1</option>
            <option value="pokoj2">Pokoj 2</option>
            <option value="pokoj3">Pokoj 3</option>
            <option value="pokoj4">Pokoj 4</option>
            <option value="pokoj5">Pokoj 5</option>
        </select><br>

        <label for="od-kdy">od kdy:</label><br>
        <input type="date" name="od_kdy" id="od_kdy"><br>
        
        <label for="do-kdy">do kdy:</label><br>
        <input type="date" name="do_kdy" id="do_kdy"><br>
        
        <label for="pristylka">Přistýlka:</label><br>
        <select id="pristylka" name="pristylka">
            <option value="ne">Bez přistýlky</option>
            <option value="ano">S přistýlkou (+50 Kč)</option>
        </select><br><br>
        <input type="submit" value="Potvrdit rezervaci">
    </form>
    <p>Cena 500,- je za dvoulůžkový pokoj bez ohledu na obsazenost lůžek.</p>
    <p>Po dohodě možno i s přistýlkou za jednorázový poplatek 50 Kč za povlečení.</p>
    <p>Rezervaci termínu je nutno potvrdit do 7 dnů zaplacením zálohy ve výši 20%.</p>
    <p>Zrušení rezervace více než 7 dní předem zdarma, zrušení rezervace méně než 7 dní předem 20%.</p>
    <p>Při objednání více než 6 měsíců předem dodatečná sleva 10%.</p>

</body>

</html>