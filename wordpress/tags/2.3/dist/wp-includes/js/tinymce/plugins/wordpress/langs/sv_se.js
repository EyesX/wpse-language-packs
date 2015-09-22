// sv_SE lang variables

if (navigator.userAgent.indexOf('Mac OS') != -1) {
// Mac OS browsers use Ctrl to hit accesskeys
	var metaKey = 'Ctrl';
}
else if (navigator.userAgent.indexOf('Firefox/2') != -1) {
// Firefox 2.x uses Alt+Shift to hit accesskeys
	var metaKey = 'Alt+Shift';
}
else {
	var metaKey = 'Alt';
}

tinyMCE.addToLang('',{
wordpress_more_button : 'Dela inl�gget med en Mer-tag (' + metaKey + '+t)',
wordpress_page_button : 'Dela inl�gget med en Sida-tag',
wordpress_adv_button : 'Visa/g�m avancerade verktyg (' + metaKey + '+v)',
wordpress_more_alt : 'Mer...',
wordpress_page_alt : '...sida...',
help_button_title : 'Hj�lp (' + metaKey + '+h)',
bold_desc : 'Fetstil (Ctrl+B)',
italic_desc : 'Kursiv (Ctrl+I)',
underline_desc : 'Understreckat (Ctrl+U)',
link_desc : 'L�gg till/redigera l�nk (' + metaKey + '+a)',
unlink_desc : 'Ta bort l�nk (' + metaKey + '+s)',
image_desc : 'L�gg till/redigera bild (' + metaKey + '+m)',
striketrough_desc : 'Genomstreckat (' + metaKey + '+k)',
justifyleft_desc : 'V�nsterjustera (' + metaKey + '+f)',
justifycenter_desc : 'Centrera (' + metaKey + '+c)',
justifyright_desc : 'H�gerjustera (' + metaKey + '+r)',
justifyfull_desc : 'J�mna marginaler (' + metaKey + '+j)',
bullist_desc : 'Onumrerad lista (' + metaKey + '+l)',
numlist_desc : 'Numrerad lista (' + metaKey + '+o)',
outdent_desc : 'H�ngande indrag (' + metaKey + '+w)',
indent_desc : 'Indrag vid lista/blockquote (' + metaKey + '+q)'
});
