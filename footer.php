<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<script>
    var map;
    var pos = {lat: 49.723951, lng: 35.8975113};
    function initMap() {
        setTimeout(function() {

            map = new google.maps.Map(document.getElementById('map'), {
                center: pos,
                zoom: 6,
                scrollwheel: false,
                zoomControl: false,
                scaleControl: false,
                mapTypeControl: false,
                streetViewControl: false,
                rotateControl: false
            });

            var image = new google.maps.MarkerImage('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAABJCAYAAABsDTVHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0ZFNUJEN0I1NkJBMTFFOTg3QzRBN0E4QzY3M0Q5N0YiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0ZFNUJEN0M1NkJBMTFFOTg3QzRBN0E4QzY3M0Q5N0YiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDRkU1QkQ3OTU2QkExMUU5ODdDNEE3QThDNjczRDk3RiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDRkU1QkQ3QTU2QkExMUU5ODdDNEE3QThDNjczRDk3RiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PrLHFYsAAAWPSURBVHja1FtpbFRVGP36rCIuiEuUBEX9gSCCMRoV02gCGo1hcYNiFDVx+acQQwI4WFFqVQzu2w81cYlBNKhRQUQZjSYutIqyNlUiSkGjlYgg2JZ0PCfvGx0nTOfN++598+YkJ5T23eXMve/eb5u6XC4nedTNe0gc4RDwAvAs8HTwFPA48BjwQH1mH/g7+BO4BVwPfg5+Ae6KM2iuZVbJv9WLOwwGrwYbwQbwoDLP16t48mxwqv6+D/wYfB18A/zVxeQCB32MAl8AfwGfAcdFEFluTuO1r07wZd0VVRN6MviabrkbwAHiHtzm08FvwbfB4UkK5WrdBW7U7VYnyWASuAF8ADzYt1B+op+B98QZzNEKzwFXg6f5EjoZXKMnabUxBmzTw8+p0NvAN8FDJT3gjloMznYldC74uKMT2gcW6ntrEjoDvF/SD763TXGFTgQfkdrBAlh20yoVOgJ8JcXbtRSeh9iRUYXWq8hBUnvgYbkUYgdEETo3JVeIxSSdU07oieA8qX1ksKrD+/NeWjxYPPQD16oL9h24Q39/lFpa56nR7tKU5NZtLjQo6vL+qL7EmxwORl/zMfVstpZ5dpg6BjPBox1+wKPho24s3rq3OxqA/uTD6t00RxAp6nw3a5tHtQ8ruEPu+N+KYjWPxM/bHWzbHep4rzL2czG4RJ15C/4Gh2BVd+ZX9EoHIrvA8x2IJFZqKKbLgT3cWLh1pxo77AYvVR/VFdaBE8AeYz/Twn2cWcRA1h/yX9AqDm4Fn/J0VczU99ayCIO5oucYRbZpfMcXngC/Nl41DRTaYJxIk6NTsr9T/E5jH2MpdKShg+/BFQlYOhzjB0P7EYEYImsSxl6TQM441qkUepKhg48StF+zhrZDA+OlvD5BoRsMbQ8LxBZ4/jlBoZ2GtodbIgg7q+B+7Y3bMNAXPQ6OSFgkjfSBcW3ewGhPHp+g0GGGtnso1JKWG52g0DGW9zvQSz8uLkxQ6HiLYUOh7YYOGiWZkGiQd7diooMdtBrfm8kJCL2Kl76h/VeBWjcWo/xecVsiUAx6VncbnYJskGuZxfDHakNHzFPO9iiUceZRhvat1Jh/v941TmaB8bAohYvA+cY+lheGUl4ybt8DJMyfnutQJOO9S7Vvi9fz4r9CsbQMSb5vnNggfd+nOBDJwPMqsed/VkDbj1J0NbgIhwxUv5Gf4rEx2g+RsNxmscHcK8TThfdTHsuMd2ohrpewGozxnjMiPH8m+KRGEaY7mkO7agoN5aISuZvxz7MeDpVtEpa+dUiYqqCBztwLS+fGGu/IUrgF2/a5/H+K7z8eSqwhOsHxoEP10k8KW1WL7G/rEj3GyzktmI/V7OlPaH5V22tY5CY90KScUJaXZmpYaAaruS+KUNHL/70aFLkcIt8q5f6UAqvFumtIJOc6oz8/rxQ2S20UU+VxH1ZzcxyhBEvP1taASNbzLiznuZfbDteJPUfpEz06x26LUNEVbUqxUJYLrYsSi4mCReCnKRT5iYSFIeJKKH3Va8DfUiSSc7k2qh9dSQSvUz2LvhSI7NO5RM7HVBqqXCnpKKHL6FzEl1DRY3xJFUW+Cj5YaaM4QunA3gh+WQWR9GlvkhiJsbhR9j0SBq63JCiSY12mY0tSQgkmpy4Re3VXFHTpWLETYta8CUMjrBjb7VHkLh2jw9KJiwRRm26pvR5Ess/LdQyptlAiqxPqdSiyV8+BrIvOXKb8eK9NcSS2V/v60NXkXOc2+dXHScZtzLYTtC9Jq1CCqY2JMa+Bv7TtB64n5StbzfdqXIVXT5e2yfqYkM+0PHOurMiOWlPPKtNWX5PxXX/A+DDTf9/088wafabD50SSKLTYpiu7bD9/e0f/tt33JJL6kt1uNSr4BaI/lfz6xxV6AHnHPwIMAN0eNIfkHvjDAAAAAElFTkSuQmCC',
                new google.maps.Size(58, 73),
                new google.maps.Point(0, 0),
                new google.maps.Point(26, 66));
            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(49.724151, 35.8967513),
                map: map,
                title: 'Novovodalazkyi Abrasive plant',
                icon: image
            });

        }, 500);
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrEtxBvC0tPWxXlfo7XwxhRz3FMtSJJG4&callback=initMap"></script>
<?php wp_footer(); ?>
</body>
</html>