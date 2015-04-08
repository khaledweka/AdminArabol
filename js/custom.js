$(document).ready(function() {

	//Responsive Button
	$('.res-menu').on('click', function(){
		$('#sidebar').toggleClass('res-menu-up');
	});

	// Notif gonne
	$('.topA:has("i.badge")').on('click', function() {
		$('>i.badge', this).stop(true, true).addClass('displaynone');
		$('i.badge').click(function(e) { e.stopPropagation(); });
	});

	// SlideDown SideBar Child
	$('ul.sideBar li:has("i.sideDown")').on('click', function(){
			$('>ul.sideChild', this).stop(true, true).slideToggle(300);
			$('ul.sideChild').click(function(e) { e.stopPropagation(); });
	});

	// Init BootStrap ToolTip
  $('[data-toggle="tooltip"]').tooltip();
  $('select').mobileSelect({
  	padding: {
  		'top': '50px',
      'left': '50px',
      'right': '50px',
      'bottom': '20px'
  	},
  	animation: 'bottom',
  	animationSpeed: 200,
  });

	var config = {
		mobile: true,
		reset: true,
		delay: 'always',  
		vFactor: 0.10,
		viewport: document.getElementById('main'),
		opacity: 0,

	};
	window.sr = new scrollReveal( config );

	// Masks
	jQuery(function($){
		$.mask = {
        definitions: {
            "9": "[0-9]",
            a: "[A-Za-z]",
            "*": "[A-Za-z0-9]"
        },
        autoclear: !0,
        dataName: "rawMaskFn",
        placeholder: "_"
    };
		$(".phone-number").mask("+9 999-99999-999",{placeholder:"+2 999-99999-999"});
	});

	// CkEditor
	CKEDITOR.replace( 'ckeditort', {
	 	language: 'ar',
	 	uiColor:'#f0f0f0',
	 	height: '200px',
	 	removePlugins: 'elementspath',
	 	toolbarCanCollapse: true,
	 });

	$('.image-preview-input-1').imagePreviewInput({ resize: 300 * 1024, decode: true}).on('load', function(e, data) {
		var $preview = $('#image-preview-1').css('display', 'inline-block'),
		$img = $preview.find('img');
		if (!$img.length) {
			$img = $('<img/>').appendTo($preview);
		}
		$img.attr('src', data);
	});

	var wrapper = $('<div/>').css({height:0,width:0,'overflow':'hidden'});
	var fileInput = $(':file').wrap(wrapper);

	fileInput.change(function(){
    $('#post_img').addClass('upload-done');
	});

	$('#post_img').click(function(){
    fileInput.click();
	}).show();

	$('ANY').checkBo();
});




