// social links
$('.members').find('[data-toggle]').on('click', function(event) {

	var item = event.currentTarget,
		memberPic = item.children[0].src,
        twitterHref = $('.social li a[href="https://twitter.com/"]').attr('href'),
        instagramHref = $('.social li a[href="http://instagram.com/"]').attr('href');

    // set the image
	$('.face img').attr('src', memberPic);

    // set the name
	$('.member-name').text($(this).data('name'));

    // set the role
	$('.member-title').text($(this).data('role'));

    // add the bio
	$('.member-bio').text($(this).data('bio'));

    // add the tags
	$('.tags').text($(this).data('tags'));

    $('.social li a[href="https://twitter.com/"]').attr('href', twitterHref + $(this).data('twitter'));
    $('.social li a[href="http://instagram.com/"]').attr('href', instagramHref + $(this).data('instagram'));
});