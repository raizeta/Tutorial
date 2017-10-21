<?php
1. Cara Mengambil Parameter Dari Request Dengan Method GET
	$id = $request->query->get('id');

2. Cara Mengambil Parameter Dari Request Dengan Method POST
	$id = $request->request->get('id');

3. Kombinasi Mengambil Parameter Request Tanpa Melihat Method GET atau POST
	$id = $request->get('id');