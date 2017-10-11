// Load the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/player_api";

var firstScriptTag = document.getElementsByTagName('script')[0];

firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
//Initialize player and configure
function onYouTubePlayerAPIReady() {
    player = new YT.Player('hiw-player', {
        videoId: youtube_id,
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        },
        playerVars: {
            autoplay: 1,
            modestbranding: 1,
            rel: 0,
            showInfo: 0
        }
    });
}
//Scroll down to .steps-section when video finish.
function onPlayerStateChange(event) {
    if (event.data === 0) {
        $('html, body').animate({
            scrollTop: $(".steps-section").offset().top
        }, 800);
    }
}
//Set default quality to 720
function onPlayerReady(event) {
    player.setPlaybackQuality('hd720');
}