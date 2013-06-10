 // Load Twit
window.onload = function() {
    var ajax_load            = "<img class='twit-loader' src='img/loading.gif' alt='Loading...'>",
        twitter_preferences  = {
            count    : [1],
            username : '[bradnelsonGTF]'
            retweets : [true],
            replies  : [true]
        },
        twitterUrl = 'http://twitter.com/statuses/user_timeline.json?screen_name=' + twitter_preferences.username + '&callback=twitterCallback&count=' + twitter_preferences.count + '&include_rts=' + twitter_preferences.retweets + '&exclude_replies=' + twitter_preferences.replies;
        script     = document.createElement('script');

    $("#twitter_feed").html(ajax_load);

    script.setAttribute('src', twitterUrl);
    script.setAttribute('async', true);

    document.body.appendChild(script);
};