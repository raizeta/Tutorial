{
	url 		:"http://production.kontrolgampang.com/login/user-logins",
	method		:"post",
	parameters	:[username,password,uuid,no_telp],
	response	:{
					'success'	:['profile','access_token','refresh_token'],
					'error'		:['user_not_found','password_not_found','uuid_not_found','user_socmed_not_found','koneksi_error']
				 }
				 
}