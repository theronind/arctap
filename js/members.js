// Still needs social links

$('.members').find('[data-toggle]').on('click', function(event) {

	var item = event.currentTarget,
		memberPic = item.children[0].src;

	$('.face img').attr('src', memberPic); // set the image
	$('.member-name').text($(this).data('name')); // set the name
	$('.member-title').text($(this).data('role')); // set the role
	$('.member-bio').text($(this).data('bio')); // add the bio
	$('.tags').text($(this).data('tags')); // add the tags
});