var config = {
    host: 'http://'+window.location.host,
    data: null,
    s_restaurant : '' // selected restaurant in restaurant.js
    // asset loaded from lazy_loading.js
}

// add menu of setting link on sidebar menu
$(document).ready(function (){

    // Setting Menu
    /* $setting_submenu = `<li class="nav-item setting_submenu">
    <div class="bg-dark test" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item link-nav page" href="#" data-page="rtf">Restaurant Type Food</a>
        <a class="dropdown-item link-nav page" href="#" data-page="tof">Types Of Food</a>
        <a class="dropdown-item link-nav page" href="#" data-page="star">Star Grading</a>
        <!-- <div class="dropdown-divider"></div> -->
        <a class="dropdown-item link-nav page" href="#" data-page="countries">Countries</a>
        <a class="dropdown-item link-nav page" href="#" data-page="city">Cities</a>
        <a class="dropdown-item link-nav page" href="#" data-page="adr">Addresses</a>
        <a class="dropdown-item link-nav page" href="#" data-page="state">State and Provinces</a>
      </div>
    </li>`; */

   
    // display setting menu
    /* $('#menu-setting-link').on('click', function(){
        $parent = $(this).parent();
        
        if($('.setting_submenu').length){
            $('.setting_submenu').toggle();
        }else{
            $($parent).append($setting_submenu);
        }
        return false;
    }) */

    // load page asynchronously when user click on sidebar menu
    $(".nav-link").on('click',function(e) {
        e.preventDefault()
        page = $(this).data('route_name');
        $('#page_title').html(page.toUpperCase())
        // change button behavior
        // form_id = $(this).data('add_button_behavior')
        // change_add_button_behavior(form_id)
        // define behavior of add_button
        // console.log('form_id : '+form_id)
        loadPage(page);
        return false;
      });

/* 
    $('.button-behavior').on('click', function(){
        if($(this).attr('aria-controls') == undefined || $(this).attr('aria-controls') == ''){
            toastr.warning('Not yet implemented','Warning',{timeOut: 3000});
            return false;
        }
    })   */



    
});


// load page asynchronously
// page must must be matched item in routes.php
async function loadPage(page) {
    // toastr.warning('Not yet implemented','Warning',{timeOut: 3000});
    $('#loading').show()

    $('#content').empty();

    $("#content").fadeIn( 2000, function() {
      $('#content').load(`${page}`);
    });
    $('#loading').hide()


    // $('#content').load(`${page}`)

}