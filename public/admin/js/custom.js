$(document).ready(function () {
    /* global bootstrap: false */
    'use strict'
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
      new bootstrap.Tooltip(tooltipTriggerEl)
    });

    $('#sidebar-toggler').on('click', function() {
        $('#sidebar').toggleClass('sidebar-toggled');
    });

    $('#topbar-fixer').on('click', function() {
        $('#navbar').toggleClass('navbar-fixed');
        // $('#sidebar').toggleClass('navbar-fixed-sidebar');
        $('.main-container').toggleClass('navbar-fixed-main-container');
    });
});