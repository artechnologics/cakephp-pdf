var $$ = {},vars = {},config = {},func = {},slide = {};

//// Globle Variables
config.showLoader = function(){
	
	$( '#LoaderDiv').show();
}
	config.hideLoader = function(){
	$( '#LoaderDiv' ).hide();
}

config.ajax = function( option ){
	vars.request= $.ajax ({
		type	   : "POST",
		cache	   : false,
		url		   : option.URL,
		data	   : option.data,
		beforeSend : function () { 
		  },
		success	   : option.success,
		error 	   : function(jqXHR, textStatus, errorThrown){console.log( JSON.stringify(jqXHR) );config.hideLoader}
	});
}

