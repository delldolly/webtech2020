let requestURL = 'member.json';
let request = new XMLHttpRequest();
request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
        dataReportStatus(JSON.parse(request.responseText));
    }
};
request.open("GET", requestURL, true);
request.send();

function dataReportStatus(data) {
    var firstRow = "";
    var secondRow = "";
    for (let i = 0; i < 3; i++) {

        if (i == 0) {
            var order = "order-1 order-md-2";
        } else if (i == 1) {
            var order = "order-2 order-md-1";
        } else if (i == 2) {
            var order = "order-3 order-md-3";
        }

        firstRow += "<div class='col-12 col-md-3 " + order + "'>";
        firstRow += "<div class='card'><img class='card-img-top' src='" + data[i].img +"'>";
        firstRow += "<div class='card-body'><p class='card-title'><span class='badge badge-info'>" + data[i].no + "</span>" + " " + data[i].name + "</p>";
        firstRow += "<p class='card-text'>" + data[i].team + "</p></div></div></div>"
    }

    for (let j = 3; j < data.length; j++) {
        secondRow += "<div class='col-12 col-md-2'>";
        secondRow += "<div class='card'><img class='card-img-top' src='" + data[j].img +"'>";
        secondRow += "<div class='card-body'><p class='card-title'><span class='badge badge-info'>" + data[j].no + "</span>" + " " + data[j].name + "</p>";
        secondRow += "<p class='card-text'>" + data[j].team + "</p></div></div></div>"
    }

    document.getElementById("card-1").innerHTML = firstRow;
    document.getElementById("card-2").innerHTML = secondRow;
}