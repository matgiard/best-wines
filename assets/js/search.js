function getResult(pageNumber) {
	var searchKey = $("#keyword").val();
	$.ajax({
		type : "POST",
		url : "/best-wines/ajax-endpoint/get-search-result.php",
		data : {
			page : pageNumber,
			search : searchKey
		},
		cache : false,
		success : function(response) {
			$("#table-body").html("");
			$("#table-body").html(response);
		}
	});
}

function submitSearch(event) {
	event.preventDefault();
	getResult(1);
}

console.log('coucou');