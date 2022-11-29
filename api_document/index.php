<?php
	$post_header = array('Authorization: basic TOKEN值', 'Content-Type: text/xml; charset=utf-8');
	$post_data = '<ExpressType><Epcode>String content</Epcode><Userid>100000</Userid><Channel>燕文欧洲专线</Channel><Package>无</Package><UserOrderNumber>JY-1310140735</UserOrderNumber><SendDate>2013-10-16T00:00:00</SendDate><Receiver><Userid>100000</Userid><Name>Dario Marinozzi</Name><Phone>348/5810495</Phone><Mobile>348/5810495</Mobile><Email></Email><Company></Company><Country>意大利</Country><Postcode>63833</Postcode><State>Fm</State><City>Montegiorgio</City><Address1>Via capanne 8,Montegiorgio,Fm,IT,</Address1><Address2></Address2></Receiver><Memo></Memo><Quantity>1</Quantity><GoodsName><Userid>100000</Userid><NameCh>test zw</NameCh><NameEn>test zw</NameEn><Weight>6500</Weight><DeclaredValue>5</DeclaredValue><DeclaredCurrency>USD</DeclaredCurrency></GoodsName></ExpressType>';

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'http://Online.yw56.com.cn/service/Users/100000/Expresses');

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_HEADER, 1);
	curl_setopt($curl, CURLOPT_VERBOSE, 1);
	
	curl_setopt($curl, CURLOPT_HTTPHEADER, $post_header);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);

	$result = curl_exec($curl);
	$error = curl_error($curl);
	curl_close($curl) ;
	echo  $error ? $error : $result;
?>
