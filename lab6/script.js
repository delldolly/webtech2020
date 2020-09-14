let requestURL = 'result.json';
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
            var size = "4";
        } else if (i == 1) {
            var order = "order-2 order-md-1";
            var size = "3";
        } else if (i == 2) {
            var order = "order-3 order-md-3";
            var size = "3";
        }

        if (i == 0) {
            var badge = "danger";
        } else if (i == 1) {
            var badge = "warning";
        } else if (i == 2) {
            var badge = "success";
        }

        firstRow += "<div class='col-12 col-md-" + size + " py-3 " + order + "'>";
        firstRow += "<div class='card'><img class='card-img-top' src='" + data[i].img +"'>";
        firstRow += "<div class='card-body'><p class='card-title'><span class='badge badge-" + badge + "'>";
        firstRow += data[i].no + "</span>" + " " + data[i].name + "</p>";
        firstRow += "<p class='card-text'>" + data[i].score + " คะแนน</p></div></div></div>"
    }

    for (let j = 3; j < data.length; j++) {
        secondRow += "<div class='col-12 col-md-2 py-3'>";
        secondRow += "<div class='card'><img class='card-img-top' src='" + data[j].img +"'>";
        secondRow += "<div class='card-body'><p class='card-title'><span class='badge badge-secondary'>" + data[j].no;
        secondRow += "</span>" + " " + data[j].name + "</p>";
        secondRow += "<p class='card-text'>" + data[j].score + " คะแนน</p></div></div></div>"
    }

    document.getElementById("card-1").innerHTML = firstRow;
    document.getElementById("card-2").innerHTML = secondRow;
}