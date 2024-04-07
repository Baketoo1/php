// Aktualní datum
let currentDate = new Date();
let formattedDate = currentDate.toISOString().slice(0, 10);

document.getElementById("od_kdy").value = formattedDate;

currentDate.setDate(currentDate.getDate() + 1);
formattedDate = currentDate.toISOString().slice(0, 10);

document.getElementById("do_kdy").value = formattedDate;

// Bez přistýlky
document.getElementById("pristylka").selectedIndex = 0;
