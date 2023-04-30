$( document ).ready(function() {
    $("#btn-search").on('click', function(){
        // requête AJAX url /search
        $.ajax({
            type: 'POST',
            url: '/search/',
            data: {
                "search": $("#search").val()
            },
            dataType: 'json',
            success: function(data){
                $("#search_tab").html('');
                data.forEach(element => $("#search_tab").append(" <tr>\n" +
                    "                <td>"+element['idInstrument']+"</td>\n" +
                    "                <td>"+element['Nom']+"</td>\n" +
                                "<td>"+element['Prix']+"</td>\n" +
                    "                <td>"+element['Photo']+"</td>\n" +
                    "                <td>"+element['Description']+"</td>\n" +
                    "\n" +
                    "                <td>"+element['nomCategorie'] +"</td>\n" +



                    "                <td>\n" +
                    "                    <a  href=\"{{ path('app_instruments_show', {'idInstrument': element.idInstrumen}) }}\"><button type=\"button\" class=\"btn btn-dark\">afficher</button></a>\n" +
                    "                    <a  href=\"{{ path('app_instruments_edit', {'idInstrument': element.idInstrument}) }}\"><button type=\"button\" class=\"btn btn-dark\">modifier</button></a>\n" +
                    "                </td>\n" +
                    "            </tr>"));
            }
        });
    })
});