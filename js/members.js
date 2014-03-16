function modalsContent(event) {

	var item = event.currentTarget,
		memberPic = item.children[0].src;
		console.log(memberPic);

	// set the image
	$('.face img').attr('src', memberPic);

	// set the name
	$('.member-name').text($(this).data('name'));

	// set the role
	$('.member-title').text($(this).data('role'));

	// add the bio
	$('.member-bio').append().html($(this).data('bio'));

	// add the tags
	$('.tags').text($(this).data('tags'));

	// Add name as a hash to URL
	window.location.hash = $('.member-name').text().replace(' ', '');

}


$('.members').find('[data-toggle]').on('click', modalsContent);