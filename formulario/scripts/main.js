$(function ()
{
    get_users();
});

function get_users()
{

    let form = $("#multi-filters");

    $.ajax(
        {
            type: "POST",
            url: "filters.php",
            data: "",
            success: function (data)
            {
                $.each(JSON.parse(data), function(key, User)
                {
                    let row = ""+
                        "<tr>" +
                        "<td>"+key+"</td> " +
                        "<td>"+User.nombre +"</td> " +
                        "<td>"+User.loalidad+"</td> " +
                        "<td>"+User.ubicacion+"</td> " +                       
                        "</tr>";

                    $("#filters-result").append(row);
                });

            }
        }
    )
}




