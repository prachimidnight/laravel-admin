<?php /*/ ?><div class="show-mobile">
	<span>Kindly switch to the tablet or large device</span>
</div><?php /*/ ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!--Jquery Validate-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<!--End Jquery Validate-->
<!--Echarts-->
<script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.5.1/dist/echarts.min.js"></script>
<!--End Echarts-->
<!--Select2-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<!--End Select2-->
<!--Flatpickr-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
<script src="{{URL::asset('resources/views/adminview/assets')}}/js/forms-pickers.js"></script>
<!--End Flatpickr-->
<!--Dropzone-->
{{-- <script src="media/js/dropzone.js"></script> --}}
{{-- <script src="media/js/forms-file-upload.js"></script> --}}
<!--End Dropzone-->
<!--Drag and Drop-->
<script src="{{URL::asset('resources/views/adminview/assets')}}/js/sortable.js"></script>
<script src="{{URL::asset('resources/views/adminview/assets')}}/js/extended-ui-drag-and-drop.js"></script>
<!--End Drag and Drop-->
<!--Quill Editor-->
<script src="{{URL::asset('resources/views/adminview/assets')}}/js/katex.js"></script>
<script src="{{URL::asset('resources/views/adminview/assets')}}/js/quill.js"></script>
<script src="{{URL::asset('resources/views/adminview/assets')}}/js/slim.kickstart.min .js"></script>
<script src="{{URL::asset('resources/views/adminview/assets')}}/js/notify.js"></script>

<script>
  var apipath = "{{ config('app.api_path') }}";
  var environment = "{{ config('app.environment') }}";
</script>
<script>

	
	/**Sidebar**/
	$('[open-sidebar]').on('click', function() {
		var id = $(this).attr('open-sidebar');
		$('.theme-sidebar#' + id).addClass('active');
		$('body').addClass('sidebar-active')
		$('html').addClass('sidebar-active')
	});

	$('[close-sidebar]').on('click', function() {
		$(this).parents('.theme-sidebar').removeClass('active');
		$('body').removeClass('sidebar-active')
		$('html').removeClass('sidebar-active')
	});

	/**Menu Toggle**/
	const toggleButton = document.getElementById('theme-menu-toggle-res');
	const closeButton = document.getElementById('theme-menu-close-button');
	const floatingMenu = document.getElementById('theme-menu');

	function toggleMenu() {
		if (floatingMenu.classList.contains('menu-active')) {
			floatingMenu.classList.remove('menu-active');
		} else {
			floatingMenu.classList.add('menu-active');
		}
	}

	toggleButton.addEventListener('click', toggleMenu);
	closeButton.addEventListener('click', toggleMenu);
	
	
	document.addEventListener("DOMContentLoaded", function() {
		const themeMenuWrapper = document.querySelector('.theme-menu-wrapper');
		const themeMenuToggle = document.querySelector('.theme-menu-toggle');
		const htmlTag = document.documentElement;

		// Function to update menu-collapsed class
		function updateMenuCollapsedClass() {
			if (!htmlTag.classList.contains('menu-fixed') && !htmlTag.classList.contains('menu-hover')) {
				htmlTag.classList.add('menu-collapsed');
			} else {
				htmlTag.classList.remove('menu-collapsed');
			}
		}

		// Add 'menu-hover' class on hover
		themeMenuWrapper.addEventListener('mouseenter', function() {
			htmlTag.classList.add('menu-hover');
			updateMenuCollapsedClass();
		});

		themeMenuWrapper.addEventListener('mouseleave', function() {
			htmlTag.classList.remove('menu-hover');
			updateMenuCollapsedClass();
		});

		// Toggle 'menu-fixed' class on click
		themeMenuToggle.addEventListener('click', function(event) {
			event.preventDefault();
			htmlTag.classList.toggle('menu-fixed');
			updateMenuCollapsedClass();
		});

		// Initial call to set the correct default state
		updateMenuCollapsedClass();
	});

	/*document.addEventListener('DOMContentLoaded', function() {
		const toggleButton = document.querySelector('.theme-menu-toggle');
		const menuWrapper = document.querySelector('.theme-menu-wrapper');
		const body = document.body;

		toggleButton.addEventListener('click', function(event) {
			event.preventDefault();
			menuWrapper.classList.toggle('menu-active');
			body.classList.toggle('menu-active');
		});
	});*/
	/**End Menu Toggle**/
	/**Menu Accordion**/
	$(document).ready(function() {
		$('.menu-link').click(function() {
			var subMenu = $(this).next('.menu-sub');
			//var parentDiv = $(this).parent();

			// Toggle the active class on the parent div
			$(this).toggleClass('active');

			// Slide toggle the submenu
			subMenu.slideToggle(300); // Adjust the animation speed (300ms in this case)
		});

		
	});
	/*$(document).ready(function() {
		$('.menu-link').click(function() {
			var subMenu = $(this).next('.menu-sub');
			subMenu.slideToggle(300); // Adjust the animation speed (300ms in this case)
		});
	});*/
	/**End Menu Accordion**/

	/**Dropdown**/
	document.querySelectorAll('[data-toggle="dropdown"]').forEach(button => {
		button.addEventListener('click', function() {
			const dropdown = this.parentElement;
			const dropdownMenu = dropdown.querySelector('.dropdown-menu');

			// Remove 'show' class from other dropdowns
			document.querySelectorAll('.dropdown').forEach(otherDropdown => {
				if (otherDropdown !== dropdown) {
					otherDropdown.classList.remove('show');
					otherDropdown.querySelector('.dropdown-menu').classList.remove('dropdown-menu-top', 'dropdown-menu-left', 'dropdown-menu-right');
				}
			});

			// Toggle current dropdown menu
			dropdown.classList.toggle('show');

			// Check available space
			const rect = dropdownMenu.getBoundingClientRect();
			const spaceBelow = window.innerHeight - rect.bottom;
			const spaceAbove = rect.top;
			const spaceLeft = rect.left;
			const spaceRight = window.innerWidth - rect.right;

			dropdownMenu.classList.remove('dropdown-menu-top', 'dropdown-menu-left', 'dropdown-menu-right');

			if (spaceBelow < rect.height && spaceAbove >= rect.height) {
				dropdownMenu.classList.add('dropdown-menu-top');
			} else if (spaceRight < rect.width && spaceLeft >= rect.width) {
				dropdownMenu.classList.add('dropdown-menu-left');
			} else if (spaceLeft < rect.width && spaceRight >= rect.width) {
				dropdownMenu.classList.add('dropdown-menu-right');
			}
		});
	});

	document.addEventListener('click', function(e) {
		if (!e.target.closest('.dropdown')) {
			document.querySelectorAll('.dropdown').forEach(dropdown => {
				dropdown.classList.remove('show');
				dropdown.querySelector('.dropdown-menu').classList.remove('dropdown-menu-top', 'dropdown-menu-left', 'dropdown-menu-right');
			});
		}
	});

	document.addEventListener('click', function(e) {
		// Check if the clicked target is inside a dropdown
		if (!e.target.closest('.dropdown')) {
			document.querySelectorAll('.dropdown').forEach(dropdown => {
				// Ensure dropdown exists before modifying its classList
				if (dropdown) {
					dropdown.classList.remove('show');
					
					// Ensure dropdown-menu exists before modifying its classList
					var dropdownMenu = dropdown.querySelector('.dropdown-menu');
					if (dropdownMenu) {
						dropdownMenu.classList.remove('dropdown-menu-top', 'dropdown-menu-left', 'dropdown-menu-right');
					}
				}
			});
		}
	});

	/**End Dropdown**/

	/**Password**/
	function togglePassword(span) {
		var passwordField = span.previousElementSibling;
		var icon = span.querySelector('svg');

		if (passwordField.type === 'password') {
			passwordField.type = 'text';
			icon.classList.remove('icon-tabler-eye-off');
			icon.classList.add('icon-tabler-eye');
			icon.innerHTML = `
        <path stroke="none" d="M0 0h24v24H0z" />
        <circle cx="12" cy="12" r="2" />
        <path d="M22 12c-2.667-4-5.667-6-10-6s-7.333 2-10 6c2.667 4 5.667 6 10 6s7.333-2 10-6" />
      `;
		} else {
			passwordField.type = 'password';
			icon.classList.remove('icon-tabler-eye');
			icon.classList.add('icon-tabler-eye-off');
			icon.innerHTML = `
        <path stroke="none" d="M0 0h24v24H0z" />
        <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
        <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
        <path d="M3 3l18 18" />
      `;
		}
	}
	/**End Password**/

	/**Form Group**/
	$('.form-group').find('.form-control').each(function(index, ele) {
		var $ele = $(ele);
		if ($ele.val() != '' || $ele.is(':selected') === true) {
			$ele.parents('.form-group').addClass('focused');
		}
	})
	$('.form-control').on('focus', function(e) {
		$(this).parents('.form-group').addClass('focused');
	}).on('blur', function() {
		if ($(this).val().length > 0) {
			$(this).parents('.form-group').addClass('focused');
		} else {
			$(this).parents('.form-group').removeClass('focused');
		}
	});
	$('.form-control').on('change', function(e) {
		if ($(this).is('select')) {
			if ($(this).val() === $("option:first", $(this)).val()) {
				$(this).parents('.form-group').removeClass('focused');
			} else {
				$(this).parents('.form-group').addClass('focused');
			}
		}
	})
	$('.form-group').find('.form-control').each(function(index, ele) {
		var $ele = $(ele);
		if ($ele.val() != '' || $ele.is(':selected') === true) {
			$ele.parents('.form-group-combine').addClass('focused');
		}
	})
	$('.form-control').on('focus', function(e) {
		$(this).parents('.form-group-combine').addClass('focused');
	}).on('blur', function() {
		if ($(this).val().length > 0) {
			$(this).parents('.form-group-combine').addClass('focused');
		} else {
			$(this).parents('.form-group-combine').removeClass('focused');
		}
	});
	$('.form-control').on('change', function(e) {
		if ($(this).is('select')) {
			if ($(this).val() === $("option:first", $(this)).val()) {
				$(this).parents('.form-group-combine').removeClass('focused');
			} else {
				$(this).parents('.form-group-combine').addClass('focused');
			}
		}
	})

	$(document).ready(function() {
    // select2 single
    $('.select').each(function() {
        var dropdownParents = $(this).parents('.form-group');
        $(this).select2({
            dropdownParent: dropdownParents,
            minimumResultsForSearch: -1
        }).on("select2:open", function(e) {
            $(this).parents('.form-group').addClass('focused');
        }).on("select2:close", function(e) {
            if ($(this).find(':selected').val() === '') {
                $(this).parents('.form-group').removeClass('focused');
            }
        });
    });

		 // select2 multiple
		 $('.select-multiple').each(function() {
        var dropdownParents = $(this).parents('.form-group');
        $(this).select2({
            dropdownParent: dropdownParents,
        }).on("select2:open", function(e) {
            $(this).parents('.form-group').addClass('focused');
        }).on("select2:close", function(e) {
            if ($(this).val() != '') {
                $(this).parents('.form-group').addClass('focused');
            } else {
                $(this).parents('.form-group').removeClass('focused');
            }
        }).on("select2:select", function(e) {
            $(this).parents('.form-group').addClass('focused');
        }).on("select2:unselect", function(e) {
            $(this).parents('.form-group').addClass('focused');
        })
    });

	
    $(".select-multiple-automatic-tag").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    })
});
	//Custom file uploald
	$('input[type="file"]').change(function() {
		var value = $(this).val().split('\\').pop();
		$(this).siblings('.file-upload-name').text(value);
	});
</script>
<script src="{{URL('resources/js/pagination.js')}}"></script>
<script>
	var pagelimit = 20;

	function pagination(tblid, totaldata, currentpage = 1, perpagedatasize = pagelimit) {
		$('#' + tblid).pagination({
			total: totaldata,
			current: currentpage,
			length: perpagedatasize,
			size: 1,
			click: function(options, $target) {
				$target.next(".show").text('Current: ' + options.current);
			}
		});
	}

	function getDateTab(date, tooltitle, extra = "") {
  let timestr = moment(date).format('DD MMM YYYY hh:mm A');  // Full date with time
  let dateOnly = moment(date).format('DD MMM YYYY');         // Date without time
  let datetime = timestr.split(' ');                         // Splitting for different parts of the formatted string

  // Building the base tooltip string
  let tooltip = tooltitle ? `${tooltitle} : ${timestr}` : timestr;

  let divhtml = `
    <div class="theme-date ${extra}" data-tooltip="${tooltip}">
      <div class="theme-date-content">
        <small>${datetime[1]}</small>
        <span>${datetime[0]}</span>
      </div>
      <span class="theme-date-footer">${datetime[2]}</span>
    </div>`;

  // Check for extra cases and adjust HTML accordingly
  if (extra === "theme-primary-date" || extra === 'theme-date-follow-up' || extra === 'theme-date-orange') {
    divhtml = `
      <div class="theme-date ${extra}" data-tooltip="${tooltip}">
        <div class="theme-date-content">
          <small>${datetime[1]}</small>
          <span>${datetime[0]}</span>
        </div>
        <span class="theme-date-footer">${datetime[3]} ${datetime[4]}</span>
      </div>`;
  } else if (extra === "Date") {
    divhtml = `
      <div class="theme-date ${extra}" data-tooltip="${tooltitle ? `${tooltitle} : ${dateOnly}` : dateOnly}">
        <div class="theme-date-content">
          <small>${datetime[1]}</small>
          <span>${datetime[0]}</span>
        </div>
        <span class="theme-date-footer">${datetime[2]}</span>
      </div>`;
  }

  return divhtml;
}

//for text first letter capitalize
function Textcapitalize(string) {
  return string.charAt(0).toLowerCase();
}

function validateInput(input) {
    input.value = input.value.replace(/[^0-9]/g, ''); // Remove any non-numeric characters
  }

//Avtar funtion
function getNameAvtarSingle(name) {
  if (name.length == 0) name = 'na';
  name = name.trim();
  let chr = name.charAt(0);
  return `<span class='user-name-latter latter-${chr.toLowerCase()}'>${chr.toUpperCase()}</span>`;
}

function capitalizeFirstLetter(str) {
    if (!str) return '';
    str = str.toLowerCase();
    return str.charAt(0).toUpperCase() + str.slice(1);
}

</script>