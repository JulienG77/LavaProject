$(function () { 
    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) { 
            $('.header_nav img').attr('src','https://i.picsum.photos/id/912/200/200.jpg?hmac=tYYyMFni6bya5yEVkwmmFekjWGedHVByLtPI5q1lcyw');
        }
        if ($(this).scrollTop() < 600) { 
            $('.header_nav img').attr('src','https://i.picsum.photos/id/244/200/200.jpg?hmac=Q1gdvE6ZPZUX3nXkxvmzuc12eKVZ9XVEmSH3nCJ2OOo');
        }
    })
});