<?php

return [

	'accepted'=>':attribute必須被接受。',
	'active_url'=>':attribute不是有效的URL。',
	'after'=>':attribute必須是日期之後的日期。',
	'after_or_equal'=>':attribute必須是日期之後的日期 :date',
	'alpha'=>':attribute只能包含字母。',
	'alpha_dash'=>':attribute可能只包含字母,數字和短劃線。',
	'alpha_num'=>':attribute可能只包含字母和數字。',
	'array'=>':attribute必須是數組。',
	'before'=>':attribute必須是date之前的日期。',
	'before_or_equal'=>':attribute必須是日期之前或等於 :date。',
	'between'=> [
	'numeric'=>':attribute必須介於:min和:max之間',
	'file'=>':attribute必須介於:min和:max KB之間。',
	'string'=>':attribute必須介於:min和:max之間。',
	'array'=>':attribute必須介於:min和:max之間。',
	]
	'boolean'=>':attribute字段必須為true或false。',
	'確認'=>':attribute確認不符。',
	'date'=>':attribute不是有效的日期。',
	'date_format'=>':attribute與format:format不匹配。',
	'different'=>':attribute和:other必須不同。',
	'digits'=>':attribute必須是:digits位數。',
	'digits_between'=>':attribute必須介於:min和:max數字之間。',
	'dimensions'=>':attribute具有無效的圖像尺寸。',
	'distinct'=>':attribute字段具有重複的值。',
	'email'=>':attribute必須是有效的電子郵件地址。',
	'exists'=>'選擇:attribute無效',
	'file'=>':attribute必須是文件',
	'filled'=>':attribute字段必須有一個值。',
	'image'=>':attribute必須是圖片。',
	'in'=>'選擇:attribute無效。',
	'in_array'=>':attribute字段不存在於:other。'中,
	'integer'=>':attribute必須是整數。',
	'ip'=>':attribute必須是有效的IP地址',
	'json'=>':attribute必須是有效的JSON字符串。',
	'max'=> [
	'numeric'=>':attribute不能大於:max。',
	'file'=>':attribute不能大於:max KB。',
	'string'=>':attribute不能大於:max字符數。',
	'array'=>':attribute不可能超過:max。',
	]
	'mimes'=>':attribute必須是一個類型為type: :values的文件。',
	'mimetypes'=>':attribute必須是一個類型為type: :values的文件。',
	'min'=> [
	'numeric'=>':attribute必須至少為:min。',
	'file'=>':attribute必須至少為:min KB。',
	'string'=>':attribute必須至少為:min字符數。',
	'array'=>':attribute必須至少包含:min。',
	]
	'not_in'=>'選中:attribute無效',
	'numeric'=>':attribute必須是一個數字。',
	'present'=>':attribute字段必須存在。',
	'regex'=>':attribute格式無效。',
	'required'=>':attribute字段是必需的。',
	'required_if'=>'當:other是:value。時,:attribute字段是必需的',
	'required_unless'=>'必須:attribute字段,除非:other在:values中',
	'required_with'=>'以下情況下需要:attribute字段:values必需存在。',
	'required_with_all'=>'如果存在:values,那麼:attribute字段是必需的。',
	'required_without'=>'在下列情況下需要:attribute字段:values不存在。',
	'required_without_all'=>'如果沒有:values存在,那麼:attribute字段是必需的。',
	'same'=>':attribute和:other必須匹配',
	'size'=> [
	'numeric'=>':attribute必須是:size。',
	'file'=>':attribute必須是:size千字節。',
	'string'=>':attribute必須是:size字符。',
	'array'=>':attribute必須包含:size。',
	]
	'string'=>':attribute必須是一個字符串。',
	'timezone'=>':attribute必須是有效區域',
	'unique'=>':attribute已被使用',
	'uploaded'=>':attribute未能上傳。',
	'url'=>':attribute格式無效。',

	'custom'=> [
	'attribute-name'=> [
	'rule-name'=>'custom-message',
	]
	]

	'attributes'=> [],

];
