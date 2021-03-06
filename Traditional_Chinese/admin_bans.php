<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			=>	'尚無使用者以這個會員名稱註冊。如果您想增加一個非針對特定使用者的封鎖請將會員名稱欄留空。',
'No user ID message'		=>	'尚無使用者註冊這個會員名稱。',
'User is admin message'		=>	'會員 %s 是管理員不可被封鎖。如果您要封鎖一個管理員，必須先將他/她降級為一般會員。',
'User is mod message'		=>	'會員 %s 是版主不可被封鎖。如果您要封鎖一個版主，必須先將他/她降級為一般會員。',
'Must enter message'		=>	'您必須輸入一個會員名稱，一個IP位址或者一個電子信箱(至少其中一項)。',
'Cannot ban guest message'	=>	'不能封鎖訪客。',
'Invalid IP message'		=>	'您輸入了一個無效的IP/IP-範圍。',
'Invalid e-mail message'	=>	'您輸入的電子信箱(如：user@domain.com)或局部的電子信箱域名(如：domain.com)無效。',
'Invalid date message'		=>	'您輸入了一個無效的過期日期。',
'Invalid date reasons'		=>	'正確的格式是YYYY-MM-DD並且日期必須在一天之後。',
'Ban added redirect'		=>	'成功增加封鎖。重新導向中 …' ,
'Ban edited redirect'		=>	'成功編輯封鎖。重新導向中 …',
'Ban removed redirect'		=>	'成功解除封鎖。重新導向中 …',

'New ban head'				=>	'更新封鎖',
'Add ban subhead'			=>	'增加封鎖',
'Username label'			=>	'會員名稱',
'Username help'				=>	'封鎖的會員名稱(不區分大小寫)。',
'Username advanced help'	=>	'封鎖的會員名稱(不區分大小寫)。下一頁您將輸入一組自訂的IP與電子信箱。如果你只想封鎖特定的IP/IP-範圍或電子信箱，此處請留空。',

'Ban search head'			=>	'封鎖搜尋',
'Ban search subhead'		=>	'輸入搜尋準則',
'Ban search info'			=>	'在資料庫中搜尋被封鎖的會員。您可輸入一項或多項以進行搜尋。可使用星號(*)作為萬用字元 。要顯示所有被封鎖的會員時請留空。',
'Date help'					=>	'(yyyy-mm-dd)',
'Message label'				=>	'訊息',
'Expire after label'		=>	'有效期限',
'Expire before label'		=>	'有效期限前',
'Order by label'			=>	'排序依據',
'Order by username'			=>	'會員名稱',
'Order by ip'				=>	'IP',
'Order by e-mail'			=>	'電子信箱',
'Order by expire'			=>	'屆滿日期',
'Ascending'					=>	'遞增',
'Descending'				=>	'遞減',
'Submit search'				=>	'送出搜尋',

'E-mail label'				=>	'電子信箱',
'E-mail help'				=>	'您要封鎖的電子信箱或電子信箱域名(例如：someone@somewhere.com或somewhere.com)。檢查權限設定的「允許已封鎖的電子信箱」可瞭解更多資訊。',
'IP label'					=>	'IP/IP-範圍',
'IP help'					=>	'您要封鎖的IP或IP範圍(例如：150.11.110.1或150.11.110)。IP位址間以空格分開。此處輸入的IP(如果存在)是從資料庫中取得這個使用者的上次IP。',
'IP help link'				=>	'點選%s觀察這個使用者的IP統計。',
'Ban advanced head'			=>	'封鎖進階設定',
'Ban advanced subhead'		=>	'通過IP位址和電子信箱增加封鎖',
'Ban message label'			=>	'封鎖通知',
'Ban message help'			=>	'當被封鎖的使用者再次來訪時他/她將會接收到這個通知。',
'Message expiry subhead'	=>	'封鎖通知與屆滿',
'Ban IP range info'			=>	'封鎖IP範圍時請務必謹慎，因為極有可能會有多個使用者符合相同的IP範圍。',
'Expire date label'			=>	'屆滿日期',
'Expire date help'			=>	'封鎖自動解除的日期(格式：yyyy-mm-dd)。留空表示須手動解除。',

'Results head'				=>	'搜尋結果',
'Results username head'		=>	'會員名稱',
'Results e-mail head'		=>	'Email',
'Results IP address head'	=>	'IP/IP-範圍',
'Results expire head'		=>	'過期',
'Results message head'		=>	'通知',
'Results banned by head'	=>	'封鎖者',
'Results actions head'		=>	'操作',
'No match'					=>	'沒有符合的項目',
'Unknown'					=>	'未知',

);
