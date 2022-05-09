function getJSON(idTab) {
    //Se recupera json
    $.getJSON('jsonEj2.json', function(data) {
        var html = "";
        var titulo = data[idTab]['titulo'];
        var nombTab = data[idTab]['tab'];

        html += "<h3 class='mt-5 mb-3 text-uppercase text-white'>" + titulo + "</h3>"
        html += "<p class='col-8 font-monospace'>" + data[idTab]['texto'] + "</p>"
            //html += "<p class='text'>" + data[idTab]['texto'] + "<hr> </p> <div class='row text-center '>";


        //html += "</div>";

        $('#' + nombTab).html(html);
    });
}


$(document).ready(function() {
    //carga inicial
    getJSON(0);

    //se escucha el click en los tabs
    $('.nav-link').on('click', function() {
        //recuperar el id del tab
        var idTab = $(this).val();
        getJSON(idTab);
    });
});