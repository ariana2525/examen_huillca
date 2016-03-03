$(document).on('ready', function() {
	
	  $("#tabla").DataTable();


	  $('.btn-eliminar').on('click', function(event) {
	  	event.preventDefault();
	  var  id = $(this).attr('id');
	  	if (confirm("Deseas eliminar este individuo?")) {
	  		

	  		window.location = URL+'clientes/destroy/'+ id;

	  	}

	  });
	   

	   $('.btnAdd').on('click', function (event) {
        event.preventDefault();

        var _this = $(this);
        var form = _this.closest('form');
        $.ajax({
            url: URL + 'clientes/store',
            type: 'post',
            dataType: 'json',
            data: form.serializeArray()
        })
        .done(function () {
            console.log("success");
        })
        .fail(function () {
            console.log("error");
        });

    });

    $('.btnUpdate').on('click', function (event) {
        event.preventDefault();

        var _this = $(this);
        var form = _this.closest('form');
        $.ajax({
            url: URL + 'clientes/update',
            type: 'post',
            dataType: 'json',
            data: form.serializeArray()
        })

        
        .done(function (data) {
            console.log(data);
        })
        .fail(function () {
            console.log("error");
        });


    });

	
});
