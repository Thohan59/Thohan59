$(function () {
    setNavigation();
});

function setNavigation() {
    var path = window.location.href;
    path = path.replace(/\/$/, "");
    path = decodeURIComponent(path);
    $(".nav-sidebar a").each(function () {
        var href = $(this).attr('href');
        if (path.includes(href)) {
            if (path === href) {
                $(this).addClass('active');
            }
            if ($(this).parents('ul').hasClass('nav-treeview')) {
                var id = $(this).parents('ul').get(0)['id'];
                // console.log(id);
                // $('#' + id).toggle('show');
                $('#' + id).parent('li').addClass('menu-open');
            }

        }
    });
}