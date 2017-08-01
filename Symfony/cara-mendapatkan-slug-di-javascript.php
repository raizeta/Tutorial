<?php
<script>
  	$(document).ready(function()
  	{
		var slug = {{ slug|json_encode|raw }};
		var jsonDatasales = $.ajax
		({
		    url: Routing.generate('fosstrukorg_indexjson',{slug:slug}),
		    type: "GET",
		    dataType:"json",
		    async: false
		}).responseText;
	});
</script>