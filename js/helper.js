function ChangeNavActiveClass(selector){
    $("#nav-link-home").removeClass("active");
    $("#nav-link-aboutus").removeClass("active");
    $("#nav-link-education").removeClass("active");
    $("#nav-link-officers").removeClass("active");
    $("#nav-link-careerfairs").removeClass("active");
    $("#nav-link-sponsors").removeClass("active");
    $("#nav-link-gallery").removeClass("active");
    $(selector).addClass("active");
}
