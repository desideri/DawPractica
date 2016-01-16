  $(document).ready(function(){

		$("#contenido").append("<table class='table' > "+
		"<thead>"+ "<tr>"+
				"<th>OrderID</th>" + "<th>CustomerID</th>" + "<th>EmployeeID</th>" + "<th>OrderDate</th>" + "<th>RequiredDate</th>" +
        "<th>ShippedDate</th>" + "<th>ShipVia</th>" + "<th>Freight</th>" + "<th>ShipName</th>" + "<th>ShipAddress</th>" +
				"<th>ShipCity</th>"    + "<th>ShipRegion</th>" + "<th>ShipPostalCode</th>" + "<th>ShipCountry</th>" + "<th>Modificar</th>"     +
				"<th>Eliminar</th>"+ "</tr>"+
    "</thead><tbody id='tablas'></tbody>"+"</table>"
	   );
    $.ajax({
            type: "GET",
            url:'/clientes',
            async: true,
            dataType:"json",
            contenType:"application/Json; charset=utf-8",

            success: function(orders){

                  $.each(orders, function(i,order){
                    $("#tablas").append("<tr><td>"+order.OrderId+"</td>"+//nombre de la etiqueta en el json
                    "<td>"+order.CustomerId+"</td>"+"<td>"+order.EmployeeID+"</td>"+"<td>"+order.OrderDate+"</td>"+
										"<td>"+order.RequiredDate+"</td>"+"<td>"+order.ShippedDate+"</td>"+"<td>"+order.ShipVia+"</td>"+
										"<td>"+order.Freight+"</td>"+"<td>"+order.ShipName+"</td>"+"<td>"+order.ShipAddress+"</td>"+
										"<td>"+order.ShipCity+"</td>"+"<td>"+order.ShipRegion+"</td>"+"<td>"+order.ShipPostalCode+"</td>"+"<td>"+order.ShipCountry+"</td>"+
									  "<td><a href='' id="+ order.OrderId + " class='lblmodificar'><span class='glyphicon glyphicon-pencil'></span></a></td>"+
				            "<td><a href='' id="+ order.OrderId + " class='lbleliminar'><span class='glyphicon glyphicon-remove'></span></a></td>"+"</tr>"
                    );

								});
								$('.lblmodificar').click(function(event){
					        var id =  $(this).attr("id");
					        alert(id);      });
/*
                $('.lbleliminar').click(function(event){
					        var numId =  $(this).attr("id");
					        var id = parseInt(numId);
					        event.preventDefault();
					        var csrf2 = $('input[name="csrfmiddlewaretoken"]').val();
					        //alert(numId);
					        console.log(csrf2);
					        window.location = "/eliminar/?id="+id;
					      });*/
            },
            error: function(data){
              console.log(data.responseText);

            }
      });

});
