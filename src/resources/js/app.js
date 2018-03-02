$(document).ready(function() {
    $("img.pic-thumbnail").unveil(200, function() {
        $(this).load(function() {
            this.style.opacity = 1;
        });
    });
});
