<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Plat</title>
    <link rel="stylesheet" href="reserstyle.css">
    <script>
        function submitReservation() {
    var dishName = document.getElementById("dishName").value;
    var reservationDate = document.getElementById("reservationDate").value;
    var reservationTime = document.getElementById("reservationTime").value;
    var numberOfGuests = document.getElementById("numberOfGuests").value;
    var contactName = document.getElementById("contactName").value;
    var contactEmail = document.getElementById("contactEmail").value;

    // Vous pouvez ajouter ici le code pour traiter la réservation, par exemple envoyer à un serveur.

    alert("Réservation effectuée :\nPlat : " + dishName + "\nDate : " + reservationDate + "\nHeure : " + reservationTime + "\nConvives : " + numberOfGuests + "\nContact : " + contactName + "\nEmail : " + contactEmail);
}

        </script>

</head>
<body>

    <form id="reservationForm">
        <h2>Formulaire de Réservation</h2>

        <label for="dishName">Plat :</label>
        <input type="text" id="dishName" name="dishName" required>

        <label for="reservationDate">Date de Réservation :</label>
        <input type="date" id="reservationDate" name="reservationDate" required>

        <label for="reservationTime">Heure de Réservation :</label>
        <input type="time" id="reservationTime" name="reservationTime" required>

        <label for="numberOfGuests">Nombre de convives :</label>
        <input type="number" id="numberOfGuests" name="numberOfGuests" min="1" required>

        <label for="contactName">Nom de Contact :</label>
        <input type="text" id="contactName" name="contactName" required>

        <label for="contactEmail">Email de Contact :</label>
        <input type="email" id="contactEmail" name="contactEmail" required>

        <button type="button" onclick="submitReservation()">Réserver le Plat</button>
    </form>

    <script src="script.js"></script>
</body>
</html>
