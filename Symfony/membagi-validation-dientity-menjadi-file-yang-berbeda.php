<?php
1.Buka Folder BundleAnda/Resources/config,Lalu Buat Folder Baru validation
2.Sehingga folder Anda Menjadi BundleAnda/Resources/config/validation
3.Tambahkan File Baru Sesuai Dengan Entity Yang Anda Miliki.
4.Dalam Hal Ini Kita Akan Gunakan Entity Product ->BundleAnda/Resouces/config/validation/Product.yml;.
5.Tambahkan Kodingan Dibawah Ke File Yang Baru Anda Buat,Harus Sesuai Dengan Formal YML
	EntityBundle\Entity\Product:
	    properties:
	        nama:
	            - NotBlank: 
	                message: "Nama Tidak Boleh Kosong"
	        slug:
	            - NotBlank: 
	                message: "Slug Tidak Boleh Kosong"
6.Daftarkan File Validasi Yang Telah Anda Buat Ke
  BundleAnda/DependencyInjection/NamaBundleAndaExtension.php
7.Tambahkan Kodingan Dibawah:
	protected function loadValidationConfiguration(ContainerBuilder $container)
    {   
        $yamlMappingFiles = $container->getParameter('validator.mapping.loader.yaml_files_loader.mapping_files');
        $yamlMappingFiles[] = __DIR__.'/../Resources/config/validation/Product.yml';
        $container->setParameter('validator.mapping.loader.yaml_files_loader.mapping_files', $yamlMappingFiles);
    }