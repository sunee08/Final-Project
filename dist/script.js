const $drawerToggle = '[data-toggle="drawer"]';
const $drawer = '[data-container="drawer"]';
const $drawerMenuToggle = '[data-toggle="drawer-menu"]';
const $drawerMenu = '[data-container="drawer-menu"]';
const $notificationToggle = '[data-toggle="notifications"]';
const $notification = '[data-container="notificiations"]';
const $menuToggle = '[data-toggle="menu"]';
const $menu = '[data-container="menu"]';
const $searchToggle = '[data-toggle="search"]';
const $search = '[data-container="search"]';
var $profileToggle = '[data-toggle="profileToggle"]';
var $profile = '[data-container="profile"]';
const $tabs = '[data-toggle="tabs"]';

const clearToggle = function (e, $el, $toggle) {
	const target = e.target;

	if (
		!$(target).is($el) &&
		!$(target).parents().is($el) &&
		!$(target).is($toggle) &&
		!$(target).parents().is($toggle)
	) {
		$($el).each(function () {
			$(this).toggleClass('is-active', false);
		});
	}
};

const clearTabs = function (e, $links) {
	$($links).children().each(function () {
		const $this = $(this);
		const $that = $this.attr('href');

		$this.toggleClass('is-active', false);
		$($that).toggleClass('is-active', false);
	});
};

//---------------------------------------------

$($tabs).children().each(function () {
	const $this = $(this);
	const $that = $this.attr('href');

	$this.on({
		'mouseup': e => {
			e.preventDefault();
			e.stopPropagation();
			clearTabs(e, $tabs);
			$this.toggleClass('is-active');
			$($that).toggleClass('is-active');
		}
	});
});

//---------------------------------------------

$($drawerToggle).click(e => {
	e.preventDefault();
	e.stopPropagation();
	$($drawer).toggleClass('is-active');
});

$($drawerMenuToggle).click(function (e) {
	e.preventDefault();
	e.stopPropagation();
	$(this).next($drawerMenu).toggleClass('is-active');
});

//---------------------------------------------

$($searchToggle).click(e => {
	e.preventDefault();
	e.stopPropagation();
	$($search).toggleClass('is-active');
});

//---------------------------------------------

$($notificationToggle).click(function (e) {
	e.preventDefault();
	e.stopPropagation();
	const $this = $(this);
	const $that = $($notification);
	const $targetOffset = $(window).width() - ($this.offset().left + $this.width());
	$that.toggleClass('is-active');
	$that.css('right', $targetOffset);
});

//---------------------------------------------

$($profileToggle).click(e => {
	e.preventDefault();
	e.stopPropagation();
	$($profile).toggleClass('is-active');
});

//---------------------------------------------

$($menu).each(function () {
	const $this = $(this);
	const $targetOffset = $this.offset();
	if ($targetOffset.left > $(window).width() / 2) {
		$this.css({'transform-origin': 'right top', 'right': 0});
	} else {
		$this.css('transform-origin', 'left top');
	}
});

$($menuToggle).on('mouseenter click', function (e) {
	const $this = $(this);
	const $that = $this.next($menu);
	
	e.preventDefault();
	e.stopPropagation();
	
	$this.parent().find($menu).each().toggleClass('is-active', false);
	
	if($that.length) {
		$that.toggleClass('is-active');
		e.stopPropagation();
	}
});

// Clear menus

$('body').on('touchstart mouseup click', function(e) => {
	clearToggle(e, $drawer, $drawerToggle);
	clearToggle(e, $search, $searchToggle);
	clearToggle(e, $notification, $notificationToggle);
	clearToggle(e, $menu, $menuToggle);
	clearToggle(e, $profile, $profileToggle);
});